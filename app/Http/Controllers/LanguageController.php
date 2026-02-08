<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang($routeLocale, $targetLang = null)
    {
        // If the route parameter is missing or we only got one argument
        if ($targetLang === null) {
            // Fallback: Toggle based on current locale
            $targetLang = $routeLocale == 'en' ? 'ar' : 'en';
        }

        $lang = $targetLang;
        
        // Validate language
        if (!in_array($lang, ['en', 'ar'])) {
            $lang = 'ar';
        }

        Session::put('locale', $lang);
        App::setLocale($lang);

        $previousUrl = url()->previous();
        
        // If previous URL was the login page or something that shouldn't imply language change loop, handle it.
        // But mainly we just want to replace the first segment.
        
        $path = parse_url($previousUrl, PHP_URL_PATH);
        $attributes = parse_url($previousUrl, PHP_URL_QUERY);
        
        $segments = explode('/', trim($path, '/'));

        if (!empty($segments)) {
            // Ensure we are replacing the locale segment
            if (in_array($segments[0], ['ar', 'en'])) {
                $segments[0] = $lang;
            } else {
                // Prepend if missing (though middleware should have handled this)
                array_unshift($segments, $lang);
            }
        } else {
            $segments = [$lang];
        }

        // Build the new URL with the new locale
        $newUrl = '/' . implode('/', $segments);
        
        if($attributes){
            $newUrl = $newUrl . '?'. $attributes;
        }

        return redirect($newUrl);
    }
    public function switchLang2($lang)
    {
        // Validate the language
        // if (!array_key_exists($lang, Config::get('languages'))) {
            //     return redirect()->back();
            // }
            // echo "lang =  $lang\\\\\ ";
            // Get the previous URL
            App::setLocale($lang);
            Session::put('locale', $lang);
            $previousUrl = url()->previous();
        // Redirect to the same page with new locale
        // echo $newUrl;
        return redirect($previousUrl);
    }
}
