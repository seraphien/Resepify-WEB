<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Resepify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #ffeaa7 0%, #fdcb6e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .login-header {
            background: linear-gradient(90deg, #ff9a56 0%, #ff6b6b 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .btn-login {
            background: linear-gradient(90deg, #ff9a56 0%, #ff6b6b 100%);
            border: none;
            color: white;
            padding: 12px;
            font-weight: bold;
        }
        .btn-login:hover {
            background: linear-gradient(90deg, #ff6b6b 0%, #ff9a56 100%);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login-card">
                    <div class="login-header">
                        <i class="bi bi-cake2-fill" style="font-size: 3rem;"></i>
                        <h3 class="mt-3 mb-0">Resepify</h3>
                        <p class="mb-0">Masuk ke akun Anda</p>
                    </div>
                    <div class="p-4">
                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label fw-bold">
                                    <i class="bi bi-person-fill me-2"></i>Username
                                </label>
                                <input type="text" class="form-control form-control-lg" id="username" name="username" required placeholder="Masukkan username Anda">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label fw-bold">
                                    <i class="bi bi-lock-fill me-2"></i>Password
                                </label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" required placeholder="Masukkan password Anda">
                            </div>
                            <button type="submit" class="btn btn-login w-100 btn-lg">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
                            </button>
                        </form>
                        <div class="text-center mt-4">
                            <p class="text-muted">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none fw-bold">Daftar di sini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>