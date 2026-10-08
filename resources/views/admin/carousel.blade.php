@extends('admin.layout')

@section('title', 'Homepage Carousel')
@section('page_title', 'Homepage Carousel')

@section('content')
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card p-4">
                <h6 class="mb-2">Sliding images on the homepage</h6>
                <p class="text-muted small">The box next to "Welcome To Shahriar Group" cycles through these images. Uploading a new set replaces the whole carousel.</p>

                @if (empty($sliderImages))
                    <div class="alert alert-light border small">No custom images yet — the homepage is showing the built-in placeholders. Upload below to replace them.</div>
                @else
                    <div class="d-flex flex-wrap gap-3 mb-3">
                        @foreach ($sliderImages as $img)
                            <div class="text-center">
                                <img src="{{ $img }}" alt="slide" class="img-preview" style="height:90px;max-width:140px;object-fit:cover;">
                                <div class="small text-muted mt-1">Current #{{ $loop->iteration }}</div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.carousel.update') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="form-label fw-semibold">Upload new images</label>
                    <input type="file" name="slider_images[]" multiple data-preview-container="#newSlidePreviews"
                           class="form-control @error('slider_images.*') is-invalid @enderror" accept=".jpg,.jpeg,.png,.webp">
                    <div class="form-text">Pick 2–10 images at once (JPG/PNG/WEBP, max 4MB each). Selected images appear below instantly.</div>
                    @error('slider_images.*')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    @error('slider_images')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror

                    <div id="newSlidePreviews" class="d-flex flex-wrap gap-3 mt-3"></div>

                    <button class="btn btn-gold px-4 mt-3">Save carousel</button>
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">View site</a>
                </form>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card p-4">
                <h6 class="mb-3">Where it shows</h6>
                <div class="border rounded-3 p-3" style="background:#fff;">
                    <div class="text-center small text-muted mb-2">Homepage — Welcome section</div>
                    <div class="mx-auto" style="width:min(400px,100%);">
                        <div class="border rounded-3 d-flex align-items-center justify-content-center" style="height:180px;border:3px solid #c5a200;background:#fdfdfb;">
                            @if (!empty($sliderImages))
                                <img src="{{ $sliderImages[0] }}" alt="slide preview" style="max-height:100%;max-width:100%;object-fit:cover;border-radius:6px;">
                            @else
                                <span class="text-muted small">No images yet</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="alert alert-info small mt-3 mb-0">
                    <strong>Tip:</strong> landscape images (around 400×300) fit the frame best. After saving, refresh the homepage to see the new slides.
                </div>
            </div>
        </div>
    </div>
@endsection
