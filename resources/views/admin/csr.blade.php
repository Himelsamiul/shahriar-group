@extends('admin.layout')

@section('title', 'CSR Images')
@section('page_title', 'CSR Images')

@section('content')
    <div class="card p-4 mb-4">
        <h6 class="mb-1">Corporate Social Responsibility gallery</h6>
        <p class="text-muted small mb-0">The 3 images in the CSR section. Uploading updates only the slots you fill.</p>
    </div>

    <form method="POST" action="{{ route('admin.csr.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            @foreach (range(0, 2) as $i)
                @php
                    $current = $csrImages[$i] ?? null;
                    $fallbacks = ['logo/i.jpg', 'logo/ChatGPT Image Nov 12, 2025, 11_05_19 PM.png', 'logo/dev.jpeg'];
                    $fallback = $fallbacks[$i];
                @endphp
                <div class="col-md-4">
                    <div class="card p-3 h-100">
                        <div class="small text-muted mb-2">Image {{ $i + 1 }}</div>
                        <img src="{{ $current ?? $fallback }}" id="preview-csr{{ $i }}" alt="CSR {{ $i + 1 }}"
                             class="img-preview mb-3" style="height:120px;width:100%;object-fit:cover;"
                             onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22300%22 height=%22120%22><rect width=%22300%22 height=%22120%22 fill=%22%23e9ecef%22/><text x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 font-size=%2212%22 fill=%22%23999%22>No image yet</text></svg>';">
                        <input type="file" name="csr_images[{{ $i }}]" data-preview="#preview-csr{{ $i }}"
                               class="form-control form-control-sm @error('csr_images.'.$i) is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">
                        @error('csr_images.'.$i)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-gold px-4 mt-3">Save images</button>
        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
    </form>
@endsection
