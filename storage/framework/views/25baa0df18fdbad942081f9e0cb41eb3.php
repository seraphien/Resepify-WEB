

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Resep</h1>

    <a href="<?php echo e(route('resep.create')); ?>" class="btn btn-primary mb-3">Tambah Resep</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Waktu Masak</th>
                <th>Level</th>
                <th>Porsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $resep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($r->nama); ?></td>
                <td><?php echo e($r->kategori); ?></td>
                <td><?php echo e($r->waktu_masak); ?> menit</td>
                <td><?php echo e($r->tingkat_kesulitan); ?></td>
                <td><?php echo e($r->porsi); ?></td>
                <td>
                    <a href="<?php echo e(route('resep.show', $r->id)); ?>" class="btn btn-info btn-sm">
                        View
                    </a>

                    <?php if($r->user_id == Auth::id()): ?>
                        <a href="<?php echo e(route('resep.edit', $r->id)); ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="<?php echo e(route('resep.destroy', $r->id)); ?>"
                              method="POST"
                              style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus resep ini?')">
                                Hapus
                            </button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\UTS_PWEB_242410102053-main\resources\views/resep/index.blade.php ENDPATH**/ ?>