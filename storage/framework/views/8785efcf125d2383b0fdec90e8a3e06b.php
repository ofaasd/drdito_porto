

<?php $__env->startSection('title', 'Detail Achievement'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Achievement</h6>
        <a href="<?php echo e(route('admin.achievements.edit', $achievement)); ?>" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Judul:</strong> <?php echo e($achievement->title); ?></p>
        <p class="mb-2"><strong>Profile:</strong> <?php echo e($achievement->profile->full_name ?? '-'); ?></p>
        <p class="mb-2"><strong>Issuer:</strong> <?php echo e($achievement->issuer ?: '-'); ?></p>
        <p class="mb-2"><strong>Tahun:</strong> <?php echo e($achievement->year ?: '-'); ?></p>
        <hr>
        <p class="mb-3"><strong>Deskripsi:</strong><br><?php echo e($achievement->description ?: '-'); ?></p>

        <form action="<?php echo e(route('admin.achievements.destroy', $achievement)); ?>" method="POST" onsubmit="return confirm('Hapus achievement ini?')">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo e(route('admin.achievements.index')); ?>" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views/admin/achievements/show.blade.php ENDPATH**/ ?>