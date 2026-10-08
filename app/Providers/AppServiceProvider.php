<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
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
        View::share('siteLogo', Setting::get('site_logo', asset('logo/ss-removebg-preview.png')));
        View::share('siteFavicon', Setting::get('site_favicon', asset('favicon.ico')));
        View::share('sliderImages', json_decode(Setting::get('slider_images', '[]'), true) ?: []);
    }
}
