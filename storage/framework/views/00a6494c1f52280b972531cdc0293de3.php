<?php
    use Illuminate\Support\Facades\Auth;
?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">

        
        <a class="navbar-brand fw-bold" href="<?php echo e(route('dashboard')); ?>">
            <i class="bi bi-cake2-fill me-2"></i> Resepify
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                        <i class="bi bi-house-fill me-1"></i> Dashboard
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('resep.index')); ?>">
                        <i class="bi bi-book-fill me-1"></i> Kelola Resep
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('profile')); ?>">
                        <i class="bi bi-person-fill me-1"></i>
                        <?php echo e(Auth::user()->username ?? 'User'); ?>

                    </a>
                </li>

                
                <li class="nav-item">
                    <form action="<?php echo e(url('/logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="nav-link text-warning fw-bold border-0 bg-transparent">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\laragon\www\UTS_PWEB_242410102053-main\resources\views/components/navbar.blade.php ENDPATH**/ ?>