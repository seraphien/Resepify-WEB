<!DOCTYPE html>
<html>
<head>
    <title>Detail Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2 class="mb-4">Detail Resep: <?php echo e($resep->nama); ?></h2>

    <div class="card p-4">
        <p><strong>Nama:</strong> <?php echo e($resep->nama); ?></p>
        <p><strong>Kategori:</strong> <?php echo e($resep->kategori); ?></p>
        <p><strong>Waktu Masak:</strong> <?php echo e($resep->waktu_masak); ?> menit</p>
        <p><strong>Tingkat Kesulitan:</strong> <?php echo e($resep->tingkat_kesulitan); ?></p>
        <p><strong>Porsi:</strong> <?php echo e($resep->porsi); ?></p>
        <p><strong>Views:</strong> <?php echo e($resep->views); ?></p>
        <p><strong>Isi Resep:</strong><br><?php echo e($resep->isi_resep); ?></p>
    </div>

    <a href="<?php echo e(route('resep.index')); ?>" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html><?php /**PATH D:\laragon\www\UTS_PWEB_242410102053-main\resources\views/resep/show.blade.php ENDPATH**/ ?>