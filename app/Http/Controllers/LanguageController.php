<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        // Validate the language
        // if (!array_key_exists($lang, Config::get('languages'))) {
            //     return redirect()->back();
            // }
            // echo "lang =  $lang\\\\\ ";
            // Get the previous URL
            $previousUrl = url()->previous();
            
            // Extract the path from the previous URL
            $path = parse_url($previousUrl, PHP_URL_PATH);
            $segments = explode('/', trim($path, '/'));
            
            // Replace the first segment (current locale) with the new locale
            $pastlang = Session::get("locale");
            $lang = $pastlang == 'en'? 'ar':'en';


            Session::put('locale', $lang);
            if (!empty($segments)) {
                $segments[0] = $lang;
            } else {
                $segments = [$lang];
        }
        
        // Build the new URL with the new locale
        $newUrl = '/' . implode('/', $segments);
        
        // Redirect to the same page with new locale
        // echo $newUrl;
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
