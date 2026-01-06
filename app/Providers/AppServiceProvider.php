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
        if (!app()->runningInConsole()) {
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

            $event->menu->add($langItem);
        });
    }

    }
}
