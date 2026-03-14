<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Supported locales
     */
    protected $locales = ['en', 'id', 'ar', 'es', 'fr', 'ja', 'ru', 'hi', 'it', 'zh_CN', 'zh_TW'];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = null;

        // Check if locale is in URL (e.g., /en/home)
        $segments = $request->segments();
        if (!empty($segments) && in_array($segments[0], $this->locales)) {
            $locale = array_shift($segments);
        }

        // Check session for locale
        if (!$locale && session()->has('locale')) {
            $locale = session()->get('locale');
        }

        // Check browser language
        if (!$locale) {
            $acceptLanguage = $request->header('Accept-Language');
            if ($acceptLanguage) {
                $locale = $this->parseAcceptLanguage($acceptLanguage);
            }
        }

        // Default locale
        if (!$locale) {
            $locale = 'id'; // Indonesian as default
        }

        // Validate locale
        if (!in_array($locale, $this->locales)) {
            $locale = 'id';
        }

        // Set locale
        App::setLocale($locale);
        session()->put('locale', $locale);

        return $next($request);
    }

    /**
     * Parse Accept-Language header
     */
    private function parseAcceptLanguage($header)
    {
        $languages = explode(',', $header);
        
        foreach ($languages as $language) {
            $lang = trim(explode(';', $language)[0]);
            
            // Exact match
            if (in_array($lang, $this->locales)) {
                return $lang;
            }
            
            // Check language code without region
            $langCode = explode('-', $lang)[0];
            foreach ($this->locales as $supported) {
                if (strpos($supported, $langCode) === 0) {
                    return $supported;
                }
            }
        }
        
        return 'id';
    }
}
