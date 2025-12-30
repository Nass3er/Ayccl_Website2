<?php

namespace App\Providers;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app['events']->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $locale = app()->getLocale();
    
            // Decide which language to show
            if ($locale === 'en') {
                $langItem = [
                    'key' => 'lang-ar',
                    'text' => 'عربي',
                    // 'classes' => 'fas fa-info-circle',
                    'icon' => 'flag-icon flag-icon-eg',
                    'route'  => ['lang.switch', ['lang' => 'ar']],
                    'topnav_right' => true,
                ];
            } else {
                $langItem = [
                    'key' => 'lang-en',
                    'text' => 'en',
                    // 'classes' => 'fas fa-info-circle',
                    'icon' => 'flag-icon flag-icon-us',
                    'route'  => ['lang.switch', ['lang' => 'en']],
                    // 'url'  => localizedRoute('lang.switch', ['lang' => 'en']),
                    'topnav_right' => true,
                ];
            }
    
            // Insert right after fullscreen widget
            // $menu = config('adminlte.menu');
            // $newMenu = [];
    
            // foreach ($menu as $item) {
            //     $newMenu[] = $item;
            //     if (($item['key'] ?? null) === 'fullscreen-widget') {
            //         $newMenu[] = $langItem;
            //     }
            // }
    
            // $event->menu->add(...$newMenu);
            $event->menu->add($langItem);
        });
        // if (!function_exists('localized_route')) {
        //     function localized_route($name, $parameters = [], $absolute = true) {
        //         return route($name, array_merge(['locale' => app()->getLocale()], $parameters), $absolute);
        //     }
        // }
    }
}
