<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    </meta>
    <title>@yield('title', 'Admin') | Shahriar Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sg-dark: #0b2b1d;
            --sg-darker: #071e14;
            --sg-gold: #d4af37;
        }
        body { background: #f4f6f5; }
        .sidebar {
            width: 250px; min-height: 100vh;
            background: linear-gradient(180deg, var(--sg-darker), var(--sg-dark));
            color: #fff; position: fixed; top: 0; left: 0; overflow-y: auto; z-index: 100;
        }
        .sidebar .brand { padding: 20px 18px; border-bottom: 1px solid rgba(212,175,55,.25); display: flex; align-items: center; gap: 10px; }
        .sidebar .brand img { height: 42px; width: 42px; object-fit: contain; border-radius: 8px; background: #fff; padding: 3px; }
        .sidebar .brand span { font-weight: 700; letter-spacing: .5px; color: var(--sg-gold); }
        .sidebar a.nav-item, .sidebar button.nav-item {
            display: flex; align-items: center; gap: 12px;
            width: 100%; text-align: left;
            padding: 13px 18px; color: rgba(255,255,255,.85); text-decoration: none;
            border-left: 3px solid transparent; transition: all .2s;
            background: transparent; border-top: 0; border-right: 0; border-bottom: 0;
        }
        .sidebar a.nav-item:hover, .sidebar button.nav-item:hover { background: rgba(212,175,55,.12); color: #fff; }
        .sidebar a.nav-item.active, .sidebar button.nav-item.active {
            background: rgba(212,175,55,.15); color: var(--sg-gold); border-left-color: var(--sg-gold);
        }
        .sidebar a.nav-item i, .sidebar button.nav-item i { width: 20px; text-align: center; }
        .admin-content { margin-left: 250px; padding: 28px 32px; }
        .topbar {
            background: #fff; border: 1px solid #e6e9e7; border-radius: 12px;
            padding: 14px 22px; margin-bottom: 24px;
            display: flex; justify-content: space-between; align-items: center;
        }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,.05); }
        .btn-gold { background: var(--sg-gold); border: none; color: #14210f; font-weight: 600; }
        .btn-gold:hover { background: #c5a200; color: #14210f; }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="brand">
            <img src="{{ $siteLogo }}" alt="logo">
            <span>SHAHRIAR GROUP</span>
        </div>
        <nav class="mt-2">
            <a class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge-high"></i> Dashboard
            </a>
            <a class="nav-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                <i class="fa-solid fa-image"></i> Site Logo &amp; Branding
            </a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="nav-item border-0">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </nav>
    </aside>

    <main class="admin-content">
        <div class="topbar">
            <h5 class="mb-0">@yield('page_title')</h5>
            <div class="d-flex align-items-center gap-2">
                <span class="text-muted">{{ auth()->user()->name ?? '' }}</span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-outline-secondary">Logout</button>
                </form>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
