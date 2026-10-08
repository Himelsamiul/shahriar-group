@extends('admin.layout')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    <div class="row g-4">
        <div class="col-md-6 col-xl-3">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-copyright text-gold"></i>
                    </div>
                    <div class="fw-semibold">Logo &amp; Branding</div>
                </div>
                <p class="small text-muted">Site logo, browser tab favicon and tab title.</p>
                <a href="{{ route('admin.branding') }}" class="btn btn-gold btn-sm mt-auto">Manage</a>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-images text-gold"></i>
                    </div>
                    <div class="fw-semibold">Homepage Carousel</div>
                </div>
                <p class="small text-muted">The sliding images in the Welcome section.</p>
                <a href="{{ route('admin.carousel') }}" class="btn btn-gold btn-sm mt-auto">Manage</a>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-user-tie text-gold"></i>
                    </div>
                    <div class="fw-semibold">CEO Photo</div>
                </div>
                <p class="small text-muted">Photo on the Leadership &amp; CEO Message section.</p>
                <a href="{{ route('admin.ceo') }}" class="btn btn-gold btn-sm mt-auto">Manage</a>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-sitemap text-gold"></i>
                    </div>
                    <div class="fw-semibold">Subsidiary Logos</div>
                </div>
                <p class="small text-muted">Circular images on the 10 subsidiary cards.</p>
                <a href="{{ route('admin.subsidiaries') }}" class="btn btn-gold btn-sm mt-auto">Manage</a>
            </div>
        </div>

        <div class="col-12">
            <div class="card p-4 d-flex flex-row align-items-center justify-content-between flex-wrap gap-3">
                <div class="d-flex align-items-center gap-3">
                    <img src="{{ $siteLogo }}" alt="logo" style="height:48px;object-fit:contain;">
                    <div>
                        <div class="fw-semibold">Live site: shahriargroup.com</div>
                        <div class="small text-muted">Everything you change here appears on the public website instantly.</div>
                    </div>
                </div>
                <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary">Visit website</a>
            </div>
        </div>
    </div>
@endsection
