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
        View::share('ceoPhoto', Setting::get('ceo_photo', 'ceo/ceo4.jpeg'));
        View::share('subsidiaryImages', json_decode(Setting::get('subsidiary_images', '{}'), true) ?: []);
        View::share('heroBgs', json_decode(Setting::get('hero_bgs', '[]'), true) ?: []);
        View::share('csrImages', json_decode(Setting::get('csr_images', '[]'), true) ?: []);
        View::share('galleryImages', json_decode(Setting::get('gallery_images', '[]'), true) ?: []);
    }
}
