<!DOCTYPE html>
<html>
<head>
    <title>Edit Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2 class="mb-4">Edit Resep</h2>

    <form action="<?php echo e(route('resep.update', $resep->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">Nama Resep</label>
            <input type="text" name="nama" class="form-control" value="<?php echo e($resep->nama); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori" class="form-select" required>
                <option <?php echo e($resep->kategori=='Kue Basah'?'selected':''); ?>>Kue Basah</option>
                <option <?php echo e($resep->kategori=='Kue Kering'?'selected':''); ?>>Kue Kering</option>
                <option <?php echo e($resep->kategori=='Roti'?'selected':''); ?>>Roti</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Waktu Masak (menit)</label>
            <input type="number" name="waktu_masak" class="form-control" value="<?php echo e($resep->waktu_masak); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tingkat Kesulitan</label><br>
            <input type="radio" name="tingkat_kesulitan" value="mudah" <?php echo e($resep->tingkat_kesulitan=='mudah'?'checked':''); ?>> Mudah
            <input type="radio" name="tingkat_kesulitan" value="sedang" class="ms-3" <?php echo e($resep->tingkat_kesulitan=='sedang'?'checked':''); ?>> Sedang
            <input type="radio" name="tingkat_kesulitan" value="sulit" class="ms-3" <?php echo e($resep->tingkat_kesulitan=='sulit'?'checked':''); ?>> Sulit
        </div>

        <div class="mb-3">
            <label class="form-label">Porsi</label>
            <input type="number" name="porsi" class="form-control" value="<?php echo e($resep->porsi); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Resep</label>
            <textarea name="isi_resep" class="form-control" rows="5" required><?php echo e($resep->isi_resep); ?></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?php echo e(route('resep.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html><?php /**PATH D:\laragon\www\UTS_PWEB_242410102053-main\resources\views/resep/edit.blade.php ENDPATH**/ ?>