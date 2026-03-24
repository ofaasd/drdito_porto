

<?php $__env->startSection('title', 'Organizations'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Organization</h6>
        <a href="<?php echo e(route('admin.organizations.create')); ?>" class="btn btn-primary btn-sm">+ Tambah Organization</a>
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
                        <th>Role</th>
                        <th>Organisasi</th>
                        <th>Periode</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration + ($organizations->currentPage() - 1) * $organizations->perPage()); ?></td>
                        <td><?php echo e($organization->profile->full_name ?? '-'); ?></td>
                        <td><?php echo e($organization->role); ?></td>
                        <td><?php echo e($organization->organization_name); ?></td>
                        <td><?php echo e($organization->period ?: '-'); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.organizations.show', $organization)); ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?php echo e(route('admin.organizations.edit', $organization)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('admin.organizations.destroy', $organization)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus organization ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data organization.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($organizations->hasPages()): ?>
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($organizations->links('pagination::bootstrap-5')); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views/admin/organizations/index.blade.php ENDPATH**/ ?>