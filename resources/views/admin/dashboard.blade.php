@extends('admin.layout')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center"
                         style="width:52px;height:52px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-image text-gold fa-lg"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Current logo</div>
                        <div class="fw-semibold">Site logo &amp; favicon</div>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <img src="{{ $siteLogo }}" alt="current logo" style="height:56px;object-fit:contain;">
                    <div class="small text-muted">Shown on navbar, hero, footer<br>and browser tab (favicon)</div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('admin.settings') }}" class="btn btn-gold btn-sm">Update logo</a>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <img src="{{ $siteFavicon }}" alt="current favicon" style="height:32px;width:32px;object-fit:contain;">
                    <div class="small text-muted">Browser tab icon</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center"
                         style="width:52px;height:52px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-globe text-gold fa-lg"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Live site</div>
                        <div class="fw-semibold">shahriargroup.com</div>
                    </div>
                </div>
                <hr>
                <p class="small text-muted mb-1">Public website — always updated from this admin panel.</p>
                <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary btn-sm">Visit website</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center"
                         style="width:52px;height:52px;background:rgba(212,175,55,.15);">
                        <i class="fa-solid fa-user text-gold fa-lg"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Logged in as</div>
                        <div class="fw-semibold">{{ auth()->user()->email }}</div>
                    </div>
                </div>
                <hr>
                <p class="small text-muted mb-0">Changes you make here appear on the live site immediately.</p>
            </div>
        </div>
    </div>
@endsection
