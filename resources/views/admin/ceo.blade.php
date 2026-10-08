@extends('admin.layout')

@section('title', 'CEO Photo')
@section('page_title', 'CEO Photo')

@section('content')
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card p-4">
                <h6 class="mb-2">CEO photo</h6>
                <p class="text-muted small">Shows on the "Leadership &amp; CEO Message" section, left of the message card.</p>

                <div class="mb-3">
                    <div class="small text-muted mb-2">Current photo</div>
                    <img src="{{ $currentPhoto ?? $ceoPhoto }}" id="ceoPreview" alt="current CEO photo" class="img-preview"
                         style="height:160px;max-width:280px;object-fit:cover;border-radius:12px;"
                         onerror="this.onerror=null;this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22280%22 height=%22160%22><rect width=%22280%22 height=%22160%22 fill=%22%23e9ecef%22/><text x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 font-size=%2213%22 fill=%22%23999%22>No photo yet — upload one</text></svg>';">
                </div>

                <form method="POST" action="{{ route('admin.ceo.update') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="form-label fw-semibold">Upload new photo</label>
                    <input type="file" name="ceo_photo" data-preview="#ceoPreview"
                           class="form-control @error('ceo_photo') is-invalid @enderror" accept=".jpg,.jpeg,.png,.webp">
                    <div class="form-text">Portrait photo works best (JPG/PNG/WEBP, max 4MB). Preview updates instantly when you pick a file.</div>
                    @error('ceo_photo')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror

                    <button class="btn btn-gold px-4 mt-3">Save photo</button>
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
                </form>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card p-4">
                <h6 class="mb-3">Where it shows</h6>
                <div class="border rounded-3 p-3" style="background:#faf8f2;">
                    <div class="small text-muted mb-2">Homepage — Leadership section</div>
                    <div class="d-flex gap-3 align-items-center">
                        <img src="{{ $currentPhoto ?? $ceoPhoto }}" alt="preview" style="height:90px;width:90px;object-fit:cover;border-radius:12px;border:2px solid #c5a200;">
                        <div>
                            <div class="fw-semibold text-gold" style="color:#c5a200;">Message from the CEO</div>
                            <div class="small text-muted">“We are not just building a company…”</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
