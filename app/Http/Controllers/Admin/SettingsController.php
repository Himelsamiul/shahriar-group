<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    private array $subsidiaryKeys = [
        'nexus' => 'Shahriar Global Nexus LLC',
        'energy' => 'Shahriar Energy LLC',
        'software' => 'Shahriar Primex Tech LLC',
        'motor' => 'Shahriar Global Motors LLC',
        'dev1' => 'Shahriar Global Developments',
        'hotel' => 'Shahriar Hotel & Dine',
        'hospitality' => 'Shahriar Hospitality',
        'found' => 'Shahriar Foundation',
        'agro' => 'Shahriar Agro & Livestock',
        'travel' => 'Shahriar Travel',
    ];

    public function branding()
    {
        return view('admin.branding', [
            'currentLogo' => Setting::get('site_logo'),
            'currentFavicon' => Setting::get('site_favicon'),
        ]);
    }

    public function brandingUpdate(Request $request)
    {
        $validated = $request->validate([
            'site_logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:2048'],
            'site_favicon' => ['nullable', 'image', 'mimes:ico,png', 'max:512'],
            'site_title' => ['nullable', 'string', 'max:120'],
        ]);

        if ($request->hasFile('site_logo')) {
            Setting::set('site_logo', $this->store($request->file('site_logo'), 'logo'));
        }

        if ($request->hasFile('site_favicon')) {
            Setting::set('site_favicon', $this->store($request->file('site_favicon'), 'favicon'));
        }

        if ($request->filled('site_title')) {
            Setting::set('site_title', $validated['site_title']);
        }

        return back()->with('success', 'Branding updated — logo, favicon and tab title are live now.');
    }

    public function carousel()
    {
        return view('admin.carousel', [
            'sliderImages' => json_decode(Setting::get('slider_images', '[]'), true) ?: [],
        ]);
    }

    public function carouselUpdate(Request $request)
    {
        $request->validate([
            'slider_images' => ['required', 'array', 'min:1', 'max:10'],
            'slider_images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $paths = [];
        foreach ($request->file('slider_images') as $image) {
            $paths[] = $this->store($image, 'slider');
        }
        Setting::set('slider_images', json_encode($paths));

        return back()->with('success', 'Homepage carousel updated with '.count($paths).' image(s).');
    }

    public function ceoPhoto()
    {
        return view('admin.ceo', [
            'currentPhoto' => Setting::get('ceo_photo'),
        ]);
    }

    public function ceoPhotoUpdate(Request $request)
    {
        $request->validate([
            'ceo_photo' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        Setting::set('ceo_photo', $this->store($request->file('ceo_photo'), 'ceo'));

        return back()->with('success', 'CEO photo updated.');
    }

    public function subsidiaries()
    {
        return view('admin.subsidiaries', [
            'subsidiaryKeys' => $this->subsidiaryKeys,
            'subsidiaryImages' => json_decode(Setting::get('subsidiary_images', '{}'), true) ?: [],
        ]);
    }

    public function subsidiariesUpdate(Request $request)
    {
        $request->validate([
            'subsidiary_images' => ['required', 'array'],
            'subsidiary_images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $map = json_decode(Setting::get('subsidiary_images', '{}'), true) ?: [];
        foreach ($request->file('subsidiary_images') as $key => $file) {
            if (! array_key_exists($key, $this->subsidiaryKeys)) {
                continue;
            }
            $map[$key] = $this->store($file, 'sub-'.$key);
        }
        Setting::set('subsidiary_images', json_encode($map));

        return back()->with('success', 'Subsidiary logos updated.');
    }

    private function store($file, string $prefix): string
    {
        $name = $prefix.'-'.Str::random(8).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $name);

        return asset('uploads/'.$name);
    }
}
