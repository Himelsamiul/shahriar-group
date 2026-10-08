@extends('admin.layout')

@section('title', 'Subsidiary Logos')
@section('page_title', 'Subsidiary Logos')

@section('content')
    <div class="card p-4 mb-4">
        <h6 class="mb-1">Subsidiary card images</h6>
        <p class="text-muted small mb-0">These circular images appear on the "Our Global Subsidiaries" cards. Upload one image per subsidiary (square images look best, e.g. 200×200).</p>
    </div>

    <form method="POST" action="{{ route('admin.subsidiaries.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            @foreach ($subsidiaryKeys as $key => $label)
                @php
                    $current = $subsidiaryImages[$key] ?? null;
                    $fallback = 'logo1/' . $key . '.jpeg';
                @endphp
                <div class="col-sm-6 col-lg-4">
                    <div class="card p-3 h-100">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ $current ?? $fallback }}" data-preview-target="{{ $key }}" id="preview-{{ $key }}"
                                 alt="{{ $label }}" class="img-preview" style="height:64px;width:64px;object-fit:cover;border-radius:50%;"
                                 onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2264%22 height=%2264%22><rect width=%2264%22 height=%2264%22 fill=%22%23e9ecef%22/><circle cx=%2232%22 cy=%2232%22 r=%2218%22 fill=%22none%22 stroke=%22%23999%22 stroke-width=%222%22/></svg>';">
                            <div class="small">
                                <div class="fw-semibold">{{ $label }}</div>
                                <div class="text-muted">key: {{ $key }}</div>
                            </div>
                        </div>
                        <input type="file" name="subsidiary_images[{{ $key }}]" data-preview="#preview-{{ $key }}"
                               class="form-control form-control-sm mt-3 @error('subsidiary_images.'.$key) is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">
                        @error('subsidiary_images.'.$key)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-gold px-4 mt-3">Save logos</button>
        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
    </form>
@endsection
