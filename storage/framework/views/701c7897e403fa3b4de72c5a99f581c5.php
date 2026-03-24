

<?php $__env->startSection('title', 'Tambah Achievement'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Achievement</h6></div>
    <div class="card-body">
        <form action="<?php echo e(route('admin.achievements.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('admin.achievements._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="mt-4">
                <a href="<?php echo e(route('admin.achievements.index')); ?>" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views/admin/achievements/create.blade.php ENDPATH**/ ?>