


<?php $__env->startSection('title', 'Profiles'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm border-0">
    
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Profile</h6>
        <a href="<?php echo e(route('admin.profiles.create')); ?>" class="btn btn-primary btn-sm">+ Tambah Profile</a>
    </div>
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gelar</th>
                        <th>Email</th>
                        <th>Ringkasan</th>
                        <th style="width:220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration + ($profiles->currentPage() - 1) * $profiles->perPage()); ?></td>
                        <td><?php echo e($profile->full_name); ?></td>
                        <td><?php echo e($profile->titles ?: '-'); ?></td>
                        <td><?php echo e($profile->email ?: '-'); ?></td>
                        <td><?php echo e(\Illuminate\Support\Str::limit($profile->summary, 60) ?: '-'); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.profiles.show', $profile)); ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?php echo e(route('admin.profiles.edit', $profile)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <!-- <form action="<?php echo e(route('admin.profiles.destroy', $profile)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus profile ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form> -->
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="6" class="text-center text-muted">Belum ada data profile.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($profiles->hasPages()): ?>
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($profiles->links('pagination::bootstrap-5')); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views/admin/profiles/index.blade.php ENDPATH**/ ?>