@extends('admin.layout')

@section('title', 'Hero Backgrounds')
@section('page_title', 'Hero Backgrounds')

@section('content')
    <div class="card p-4 mb-4">
        <h6 class="mb-1">Top slider background images</h6>
        <p class="text-muted small mb-0">The 3 rotating slides at the top of the homepage. Text sits on top of these, so darker photos work well. Uploading updates only the slots you fill.</p>
    </div>

    <form method="POST" action="{{ route('admin.hero.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            @foreach (range(0, 2) as $i)
                @php
                    $current = $heroBgs[$i] ?? null;
                    $fallbacks = ['logo/working.png', 'logo/ChatGPT Image Nov 12, 2025, 08_48_14 PM.png', 'logo/ChatGPT Image Nov 12, 2025, 09_20_03 AM.png'];
                    $fallback = $fallbacks[$i];
                @endphp
                <div class="col-md-4">
                    <div class="card p-3 h-100">
                        <div class="small text-muted mb-2">Slide {{ $i + 1 }}</div>
                        <img src="{{ $current ?? $fallback }}" id="preview-hero{{ $i }}" alt="slide {{ $i + 1 }}"
                             class="img-preview mb-3" style="height:120px;width:100%;object-fit:cover;"
                             onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22300%22 height=%22120%22><rect width=%22300%22 height=%22120%22 fill=%23222933%22/><text x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 font-size=%2212%22 fill=%22%23999%22>No image yet</text></svg>';">
                        <input type="file" name="hero_bgs[{{ $i }}]" data-preview="#preview-hero{{ $i }}"
                               class="form-control form-control-sm @error('hero_bgs.'.$i) is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">
                        @error('hero_bgs.'.$i)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-gold px-4 mt-3">Save backgrounds</button>
        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
    </form>
@endsection
