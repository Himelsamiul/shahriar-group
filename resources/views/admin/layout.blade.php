<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin') | Shahriar Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        :root { --sg-dark: #0b2b1d; --sg-darker: #071e14; --sg-gold: #d4af37; }
        body { background: #f4f6f5; }
        .sidebar {
            width: 250px; min-height: 100vh;
            background: linear-gradient(180deg, var(--sg-darker), var(--sg-dark));
            color: #fff; position: fixed; top: 0; left: 0; overflow-y: auto; z-index: 100;
            transition: transform .25s ease;
        }
        .sidebar .brand { padding: 20px 18px; border-bottom: 1px solid rgba(212,175,55,.25); display: flex; align-items: center; gap: 10px; }
        .sidebar .brand img { height: 42px; width: 42px; object-fit: contain; border-radius: 8px; background: #fff; padding: 3px; }
        .sidebar .brand span { font-weight: 700; letter-spacing: .5px; color: var(--sg-gold); font-size: .95rem; }
        .sidebar .menu-label { font-size: .7rem; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(255,255,255,.4); padding: 16px 18px 6px; }
        .sidebar a.nav-item, .sidebar button.nav-item {
            display: flex; align-items: center; gap: 12px;
            width: 100%; text-align: left;
            padding: 12px 18px; color: rgba(255,255,255,.85); text-decoration: none;
            border-left: 3px solid transparent; transition: all .2s;
            background: transparent; border-top: 0; border-right: 0; border-bottom: 0;
            font-size: .95rem;
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
        .text-gold { color: var(--sg-gold); }
        .menu-toggle { display: none; }
        .img-preview { background: #fff; border: 1px dashed #c9a54c; border-radius: 8px; padding: 6px; }
        @media (max-width: 991.98px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.open { transform: translateX(0); }
            .admin-content { margin-left: 0; }
            .menu-toggle {
                display: inline-flex; align-items: center; justify-content: center;
                width: 40px; height: 40px; border: 1px solid #e6e9e7; border-radius: 8px; background: #fff;
            }
        }
    </style>
</head>
<body>
    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <img src="{{ $siteLogo }}" alt="logo">
            <span>SHAHRIAR GROUP</span>
        </div>
        <nav>
            <a class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge-high"></i> Dashboard
            </a>
            <div class="menu-label">Website content</div>
            <a class="nav-item {{ request()->routeIs('admin.branding') ? 'active' : '' }}" href="{{ route('admin.branding') }}">
                <i class="fa-solid fa-copyright"></i> Logo, Favicon &amp; Title
            </a>
            <a class="nav-item {{ request()->routeIs('admin.carousel') ? 'active' : '' }}" href="{{ route('admin.carousel') }}">
                <i class="fa-solid fa-images"></i> Homepage Carousel
            </a>
            <a class="nav-item {{ request()->routeIs('admin.ceo') ? 'active' : '' }}" href="{{ route('admin.ceo') }}">
                <i class="fa-solid fa-user-tie"></i> CEO Photo
            </a>
            <a class="nav-item {{ request()->routeIs('admin.subsidiaries') ? 'active' : '' }}" href="{{ route('admin.subsidiaries') }}">
                <i class="fa-solid fa-sitemap"></i> Subsidiary Logos
            </a>
            <div class="menu-label">Account</div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="nav-item">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </nav>
    </aside>

    <main class="admin-content">
        <div class="topbar">
            <div class="d-flex align-items-center gap-2">
                <button class="menu-toggle" id="menuToggle" type="button" aria-label="Menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <h5 class="mb-0">@yield('page_title')</h5>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="text-muted small">{{ auth()->user()->name ?? '' }}</span>
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

    <script>
        document.getElementById('menuToggle')?.addEventListener('click', () => {
            document.getElementById('sidebar')?.classList.toggle('open');
        });
        document.addEventListener('click', (e) => {
            const sidebar = document.getElementById('sidebar');
            if (sidebar?.classList.contains('open') && !sidebar.contains(e.target) && e.target.id !== 'menuToggle' && !e.target.closest('#menuToggle')) {
                sidebar.classList.remove('open');
            }
        });
    </script>
    <script>
        // live preview: any file input with data-preview updates the target img(s)
        document.addEventListener("change", (e) => {
            const input = e.target;
            if (input.type !== "file") return;
            if (input.dataset.preview) {
                const targets = document.querySelectorAll(input.dataset.preview);
                [...input.files].forEach((file, i) => {
                    if (!targets[i]) return;
                    targets[i].src = URL.createObjectURL(file);
                    targets[i].style.display = "";
                });
            }
            if (input.dataset.previewContainer) {
                const box = document.querySelector(input.dataset.previewContainer);
                if (box) {
                    box.innerHTML = "";
                    [...input.files].forEach((file) => {
                        const img = document.createElement("img");
                        img.src = URL.createObjectURL(file);
                        img.className = "img-preview";
                        img.style.cssText = "height:90px;max-width:140px;object-fit:cover;";
                        box.appendChild(img);
                    });
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
