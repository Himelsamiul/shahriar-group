@extends('admin.layout')

@section('title', 'Photo Gallery')
@section('page_title', 'Photo Gallery')

@section('content')
    <div class="card p-4 mb-4">
        <h6 class="mb-1">Photo gallery images</h6>
        <p class="text-muted small mb-0">The 8 images in the "Photo Gallery" section. Each keeps its category filter (CSR / Energy / Motors / Hotel / Rice Mills). Uploading updates only the slots you fill.</p>
    </div>

    <form method="POST" action="{{ route('admin.gallery.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            @php
                $galleryCats = ['csr', 'energy', 'motors', 'hotel', 'rice', 'energy', 'csr', 'motors'];
                $galleryFallbacks = ['logo/do.jpg', 'logo/ex.jpg', 'logo/ag.jpg', 'logo/ho.jpg', 'logo/ta.jpg', 'logo/dev.jpeg', 'logo/hi.jpg', 'logo/mi.jpg'];
            @endphp
            @foreach ($galleryCats as $i => $cat)
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="small text-muted">Photo {{ $i + 1 }}</span>
                            <span class="badge text-uppercase" style="background:rgba(212,175,55,.2);color:#8b6f00;">{{ $cat }}</span>
                        </div>
                        <img src="{{ $galleryImages[$i] ?? $galleryFallbacks[$i] }}" id="preview-gal{{ $i }}" alt="gallery {{ $i + 1 }}"
                             class="img-preview mb-3" style="height:110px;width:100%;object-fit:cover;"
                             onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22300%22 height=%22110%22><rect width=%22300%22 height=%22110%22 fill=%22%23e9ecef%22/><text x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 font-size=%2212%22 fill=%22%23999%22>No image yet</text></svg>';">
                        <input type="file" name="gallery_images[{{ $i }}]" data-preview="#preview-gal{{ $i }}"
                               class="form-control form-control-sm @error('gallery_images.'.$i) is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">
                        @error('gallery_images.'.$i)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-gold px-4 mt-3">Save gallery</button>
        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
    </form>
@endsection
