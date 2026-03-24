

<?php $__env->startSection('title', 'Experiences'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Experience</h6>
        <a href="<?php echo e(route('admin.experiences.create')); ?>" class="btn btn-primary btn-sm">+ Tambah Experience</a>
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
                        <th>Profile</th>
                        <th>Posisi</th>
                        <th>Perusahaan</th>
                        <th>Periode</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration + ($experiences->currentPage() - 1) * $experiences->perPage()); ?></td>
                        <td><?php echo e($experience->profile->full_name ?? '-'); ?></td>
                        <td><?php echo e($experience->position); ?></td>
                        <td><?php echo e($experience->company); ?></td>
                        <td>
                            <?php echo e($experience->start_date ?: '-'); ?> -
                            <?php if($experience->is_current): ?>
                                Sekarang
                            <?php else: ?>
                                <?php echo e($experience->end_date ?: '-'); ?>

                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('admin.experiences.show', $experience)); ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?php echo e(route('admin.experiences.edit', $experience)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('admin.experiences.destroy', $experience)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus experience ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data experience.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($experiences->hasPages()): ?>
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($experiences->links('pagination::bootstrap-5')); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views/admin/experiences/index.blade.php ENDPATH**/ ?>