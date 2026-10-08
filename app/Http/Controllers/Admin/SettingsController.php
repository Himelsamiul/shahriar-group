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

    public function hero()
    {
        return view('admin.hero', [
            'heroBgs' => json_decode(Setting::get('hero_bgs', '[]'), true) ?: [],
        ]);
    }

    public function heroUpdate(Request $request)
    {
        $request->validate([
            'hero_bgs' => ['required', 'array', 'max:3'],
            'hero_bgs.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $existing = json_decode(Setting::get('hero_bgs', '[]'), true) ?: [];
        foreach ($request->file('hero_bgs') as $index => $file) {
            if (! $file) {
                continue;
            }
            $existing[$index] = $this->store($file, 'hero'.($index + 1));
        }
        ksort($existing);
        Setting::set('hero_bgs', json_encode(array_values($existing)));

        return back()->with('success', 'Hero backgrounds updated.');
    }

    public function csr()
    {
        return view('admin.csr', [
            'csrImages' => json_decode(Setting::get('csr_images', '[]'), true) ?: [],
        ]);
    }

    public function csrUpdate(Request $request)
    {
        $request->validate([
            'csr_images' => ['required', 'array', 'max:3'],
            'csr_images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $existing = json_decode(Setting::get('csr_images', '[]'), true) ?: [];
        foreach ($request->file('csr_images') as $index => $file) {
            if (! $file) {
                continue;
            }
            $existing[$index] = $this->store($file, 'csr'.($index + 1));
        }
        ksort($existing);
        Setting::set('csr_images', json_encode(array_values($existing)));

        return back()->with('success', 'CSR images updated.');
    }

    public function gallery()
    {
        return view('admin.gallery', [
            'galleryImages' => json_decode(Setting::get('gallery_images', '[]'), true) ?: [],
            'galleryCats' => ['csr', 'energy', 'motors', 'hotel', 'rice', 'energy', 'csr', 'motors'],
        ]);
    }

    public function galleryUpdate(Request $request)
    {
        $request->validate([
            'gallery_images' => ['required', 'array', 'max:8'],
            'gallery_images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $existing = json_decode(Setting::get('gallery_images', '[]'), true) ?: [];
        foreach ($request->file('gallery_images') as $index => $file) {
            if (! $file) {
                continue;
            }
            $existing[$index] = $this->store($file, 'gal'.($index + 1));
        }
        ksort($existing);
        Setting::set('gallery_images', json_encode(array_values($existing)));

        return back()->with('success', 'Photo gallery updated.');
    }
    private function store($file, string $prefix): string
    {
        $name = $prefix.'-'.Str::random(8).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $name);

        return asset('uploads/'.$name);
    }
}
