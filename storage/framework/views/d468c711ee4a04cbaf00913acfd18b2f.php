

<?php $__env->startSection('title', 'Achievements'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Achievement</h6>
        <a href="<?php echo e(route('admin.achievements.create')); ?>" class="btn btn-primary btn-sm">+ Tambah Achievement</a>
    </div>

    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Profile</th>
                        <th>Issuer</th>
                        <th>Tahun</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration + ($achievements->currentPage() - 1) * $achievements->perPage()); ?></td>
                        <td><?php echo e($achievement->title); ?></td>
                        <td><?php echo e($achievement->profile->full_name ?? '-'); ?></td>
                        <td><?php echo e($achievement->issuer ?: '-'); ?></td>
                        <td><?php echo e($achievement->year ?: '-'); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.achievements.show', $achievement)); ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?php echo e(route('admin.achievements.edit', $achievement)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('admin.achievements.destroy', $achievement)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus achievement ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data achievement.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($achievements->hasPages()): ?>
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($achievements->links('pagination::bootstrap-5')); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views/admin/achievements/index.blade.php ENDPATH**/ ?>