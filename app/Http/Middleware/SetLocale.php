<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        // First check the URL segment (this should be the priority)
        $urlLocale = $request->segment(1);

        // If URL doesn't have a valid locale, redirect to session locale
        if (!$urlLocale || !in_array($urlLocale, ['ar', 'en'])) {
            $sessionLocale = Session::get('locale', 'ar'); // Default to Arabic
            
            // Get the current path without the invalid locale
            $currentPath = $request->path();
            $segments = explode('/', $currentPath);
            
            // Remove the first segment (invalid locale) and rebuild path
            array_shift($segments);
            $newPath = implode('/', $segments);
            
            // Redirect to the same page with valid session locale
            $newUrl = '/' . $sessionLocale . '/' . $newPath;
            return redirect($newUrl);
        }
        
        // URL has valid locale, use it
        $locale = $urlLocale;
        
        // Set the application locale
        app()->setLocale($locale);
        Session::put('locale', $locale);
        return $next($request);
    }
}
