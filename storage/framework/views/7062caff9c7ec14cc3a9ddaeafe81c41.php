<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Resepify</title>
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

        .register-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }

        .register-header {
            background: linear-gradient(90deg, #ff9a56 0%, #ff6b6b 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .btn-register {
            background: linear-gradient(90deg, #ff9a56 0%, #ff6b6b 100%);
            border: none;
            color: white;
            padding: 12px;
            font-weight: bold;
        }

        .btn-register:hover {
            background: linear-gradient(90deg, #ff6b6b 0%, #ff9a56 100%);
            color: white;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-5">
            <div class="register-card">

                <!-- HEADER -->
                <div class="register-header">
                    <i class="bi bi-cake2-fill" style="font-size: 3rem;"></i>
                    <h3 class="mt-3 mb-0">Resepify</h3>
                    <p class="mb-0">Buat akun baru</p>
                </div>

                <div class="p-4">

                    
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- FORM -->
                    <form action="/daftar" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-person-fill me-2"></i>Username
                            </label>
                            <input type="text" name="username" class="form-control form-control-lg"
                                   required value="<?php echo e(old('username')); ?>" placeholder="Masukkan username Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-envelope-fill me-2"></i>Email
                            </label>
                            <input type="email" name="email" class="form-control form-control-lg"
                                   required value="<?php echo e(old('email')); ?>" placeholder="Masukkan email Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-lock-fill me-2"></i>Password
                            </label>
                            <input type="password" name="password" class="form-control form-control-lg"
                                   required placeholder="Masukkan password">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="bi bi-lock-fill me-2"></i>Konfirmasi Password
                            </label>
                            <input type="password" name="password_confirmation" class="form-control form-control-lg"
                                   required placeholder="Ulangi password">
                        </div>

                        <button type="submit" class="btn btn-register w-100 btn-lg">
                            <i class="bi bi-person-plus-fill me-2"></i>Daftar
                        </button>
                    </form>

                    <!-- LINK TO LOGIN -->
                    <div class="text-center mt-4">
                        <p class="text-muted">
                            Sudah punya akun?
                            <a href="<?php echo e(route('login')); ?>" class="fw-bold text-decoration-none">Masuk di sini</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
<?php /**PATH D:\laragon\www\Resepify\resources\views/register.blade.php ENDPATH**/ ?>