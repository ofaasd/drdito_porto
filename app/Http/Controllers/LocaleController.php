<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    /**
     * Supported locales
     */
    protected $locales = ['en', 'id', 'ar', 'es', 'fr', 'ja', 'ru', 'hi', 'it', 'zh_CN', 'zh_TW'];

    /**
     * Switch locale
     */
    public function switch($locale)
    {
        // Validate locale
        if (!in_array($locale, $this->locales)) {
            return redirect()->back();
        }

        // Set session
        session()->put('locale', $locale);
        App::setLocale($locale);

        return redirect()->back();
    }

    /**
     * Get list of available locales with their names
     */
    public function getLocales()
    {
        return [
            'en' => ['name' => 'English', 'flag' => '🇺🇸'],
            'id' => ['name' => 'Bahasa Indonesia', 'flag' => '🇮🇩'],
            'ar' => ['name' => 'العربية', 'flag' => '🇸🇦'],
            'es' => ['name' => 'Español', 'flag' => '🇪🇸'],
            'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
            'ja' => ['name' => '日本語', 'flag' => '🇯🇵'],
            'ru' => ['name' => 'Русский', 'flag' => '🇷🇺'],
            'hi' => ['name' => 'हिन्दी', 'flag' => '🇮🇳'],
            'it' => ['name' => 'Italiano', 'flag' => '🇮🇹'],
            'zh_CN' => ['name' => '简体中文', 'flag' => '🇨🇳'],
            'zh_TW' => ['name' => '繁體中文', 'flag' => '🇹🇼'],
        ];
    }
}
