<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Test Locale Selector (remove after testing)
Route::get('/test-locale', function() {
    return view('test-locale');
})->name('test-locale');

// Debug: Test translation loading
Route::get('/debug-translation', function() {
    abort_if(app()->isProduction(), 404);
    
    $locale = app()->getLocale();
    $sessionLocale = session('locale');
    $heroName = __('welcome.hero_name');
    $heroDesc = __('welcome.hero_description');
    $coreFocus = __('welcome.core_focus');
    
    return response()->json([
        'app_locale' => $locale,
        'session_locale' => $sessionLocale,
        'hero_name' => $heroName,
        'hero_description' => $heroDesc,
        'core_focus' => $coreFocus,
        'is_translated' => [
            'hero_name' => !str_starts_with($heroName, 'welcome.'),
            'hero_description' => !str_starts_with($heroDesc, 'welcome.'),
            'core_focus' => !str_starts_with($coreFocus, 'welcome.'),
        ],
        'storage_path' => storage_path(),
        'views_path' => storage_path('framework/views'),
        'lang_path' => resource_path('lang'),
        'all_welcome_translations' => trans('welcome'),
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
})->name('debug-translation');

// Locale Switcher
Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Authentication Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Admin Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        // Admin logout (POST) - named as admin.logout
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        // Post Management Routes
        Route::resource('posts', PostController::class);
    });
});