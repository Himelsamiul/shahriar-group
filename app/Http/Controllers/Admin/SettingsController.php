<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('admin.settings', [
            'currentLogo' => Setting::get('site_logo'),
            'currentFavicon' => Setting::get('site_favicon'),
            'sliderImages' => $this->sliderImages(),
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:2048'],
            'site_favicon' => ['nullable', 'image', 'mimes:ico,png', 'max:512'],
            'site_title' => ['nullable', 'string', 'max:120'],
            'slider_images' => ['nullable', 'array', 'max:10'],
            'slider_images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
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

        if ($request->hasFile('slider_images')) {
            $paths = [];
            foreach ($request->file('slider_images') as $image) {
                $paths[] = $this->store($image, 'slider');
            }
            Setting::set('slider_images', json_encode($paths));
        }

        return back()->with('success', 'Branding updated — the site now shows your new content.');
    }

    private function sliderImages(): array
    {
        return json_decode(Setting::get('slider_images', '[]'), true) ?: [];
    }

    private function store($file, string $prefix): string
    {
        $name = $prefix.'-'.Str::random(8).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $name);

        return asset('uploads/'.$name);
    }
}
