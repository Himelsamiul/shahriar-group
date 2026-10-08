@extends('admin.layout')

@section('title', 'Logo, Favicon & Title')
@section('page_title', 'Logo, Favicon & Title')

@section('content')
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card p-4">
                <h6 class="mb-3">Update branding</h6>
                <form method="POST" action="{{ route('admin.branding.update') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Site logo <span class="text-muted small">(navbar, hero, footer, social share)</span></label>
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ $currentLogo ?? $siteLogo }}" data-preview-target="#logoPreview" alt="current logo" class="img-preview" id="logoPreview" style="height:70px;max-width:180px;object-fit:contain;"
                                 onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22180%22 height=%2270%22><rect width=%22180%22 height=%2270%22 fill=%22%23e9ecef%22/><text x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 font-size=%2212%22 fill=%22%23999%22>No logo yet — upload one</text></svg>';">
                        </div>
                        <input type="file" name="site_logo" data-preview="#logoPreview, #navPreview"
                               class="form-control @error('site_logo') is-invalid @enderror" accept=".jpg,.jpeg,.png,.webp,.svg">
                        <div class="form-text">JPG, PNG, WEBP or SVG — max 2MB. Transparent PNG looks best. The preview above updates as soon as you pick a file.</div>
                        @error('site_logo')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Favicon <span class="text-muted small">(browser tab icon)</span></label>
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <img src="{{ $currentFavicon ?? $siteFavicon }}" id="faviconPreview" alt="current favicon" class="img-preview" style="height:48px;width:48px;object-fit:contain;"
                                 onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2248%22 height=%2248%22><rect width=%2248%22 height=%2248%22 fill=%22%23e9ecef%22/><text x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 font-size=%2210%22 fill=%22%23999%22>none</text></svg>';">
                        </div>
                        <input type="file" name="site_favicon" data-preview="#faviconPreview, #tabPreview"
                               class="form-control @error('site_favicon') is-invalid @enderror" accept=".ico,.png">
                        <div class="form-text">ICO or PNG — max 512KB.</div>
                        @error('site_favicon')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Browser tab title</label>
                        <input type="text" name="site_title" value="{{ old('site_title', \App\Models\Setting::get('site_title', 'Shahriar Group | Global Vision, Endless Possibilities')) }}"
                               class="form-control @error('site_title') is-invalid @enderror">
                        <div class="form-text">The text shown in the browser tab.</div>
                        @error('site_title')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    <button class="btn btn-gold px-4">Save changes</button>
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
                </form>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card p-4">
                <h6 class="mb-3">Live preview</h6>
                <div class="border rounded-3 p-3 mb-3" style="background:#071e14;">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ $currentLogo ?? $siteLogo }}" id="navPreview" alt="logo" style="height:40px;object-fit:contain;">
                        <span style="color:#d4af37;font-weight:700;letter-spacing:.5px;">SHAHRIAR GROUP</span>
                    </div>
                    <div class="small mt-2" style="color:rgba(255,255,255,.6);">Navbar preview</div>
                </div>
                <div class="border rounded-3 p-3">
                    <div class="small text-muted mb-2">Browser tab preview</div>
                    <div class="border rounded-3 d-flex align-items-center gap-2 px-3 py-2" style="background:#f1f3f4;">
                        <img src="{{ $currentFavicon ?? $siteFavicon }}" id="tabPreview" alt="favicon" style="height:16px;width:16px;object-fit:contain;">
                        <span class="small text-nowrap" style="max-width:220px;overflow:hidden;text-overflow:ellipsis;">{{ \App\Models\Setting::get('site_title', 'Shahriar Group | Global Vision, Endless Possibilities') }}</span>
                        <span class="ms-auto small text-muted">×</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
