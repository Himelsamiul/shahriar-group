<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Login | Shahriar Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #071e14, #0b2b1d 55%, #12402c);
            display: flex; align-items: center; justify-content: center;
        }
        .login-card {
            width: 100%; max-width: 420px; background: #fff;
            border-radius: 16px; overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,.35);
        }
        .login-head {
            background: #071e14; padding: 30px; text-align: center;
        }
        .login-head img { height: 64px; width: 64px; object-fit: contain; background: #fff; border-radius: 14px; padding: 6px; }
        .login-head h1 { color: #d4af37; font-size: 1.15rem; margin: 14px 0 0; letter-spacing: .5px; }
        .btn-gold { background: #d4af37; border: none; color: #14210f; font-weight: 600; }
        .btn-gold:hover { background: #c5a200; color: #14210f; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-head">
            <img src="{{ $siteLogo }}" alt="logo">
            <h1>SHAHRIAR GROUP — ADMIN</h1>
        </div>
        <div class="p-4 p-md-5">
            <form method="POST" action="{{ route('admin.login.attempt') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="form-control @error('email') is-invalid @enderror" required autofocus>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                @if ($errors->any())
                    @unless ($errors->has('email') || $errors->has('password'))
                        <div class="alert alert-danger py-2 small">Email or password is wrong.</div>
                    @endunless
                @endif
                <button class="btn btn-gold w-100 py-2">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ url('/') }}" class="small text-decoration-none">← Back to website</a>
            </div>
        </div>
    </div>
</body>
</html>
