

<?php $__env->startSection('title', 'View Post'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4><?php echo e($post->title); ?></h4>
                    <p class="text-muted mb-0"><?php echo e($post->slug); ?></p>
                </div>
                <div>
                    <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="<?php echo e(route('admin.posts.index')); ?>" class="btn btn-outline-secondary">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <!-- Featured Image -->
            <?php if($post->image): ?>
                <div class="card mb-4">
                    <img src="<?php echo e(Storage::url($post->image)); ?>" alt="<?php echo e($post->title); ?>" style="width:100%; object-fit:cover; max-height:400px;">
                </div>
            <?php endif; ?>

            <!-- Content -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Content</h5>
                    <div class="content" style="line-height: 1.6;">
                        <?php echo $post->body; ?>

                    </div>
                </div>
            </div>

            <!-- Excerpt -->
            <?php if($post->excerpt): ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Excerpt</h5>
                        <p><?php echo e($post->excerpt); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <!-- Meta Information -->
            <div class="card">
                <div class="card-header bg-light">
                    <h6 class="mb-0">Post Information</h6>
                </div>
                <div class="card-body">
                    <!-- Category -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Category</small>
                        <?php if($post->category): ?>
                            <span class="badge bg-info"><?php echo e($post->category->name); ?></span>
                        <?php else: ?>
                            <span class="badge bg-secondary">No Category</span>
                        <?php endif; ?>
                    </div>

                    <!-- Author -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Author</small>
                        <strong>
                            <?php if($post->profile): ?>
                                <?php echo e($post->profile->name); ?>

                            <?php else: ?>
                                —
                            <?php endif; ?>
                        </strong>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Status</small>
                        <?php if($post->status === 'published'): ?>
                            <span class="badge bg-success">Published</span>
                        <?php else: ?>
                            <span class="badge bg-warning">Draft</span>
                        <?php endif; ?>
                    </div>

                    <!-- Published At -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Published Date</small>
                        <strong>
                            <?php if($post->published_at): ?>
                                <?php echo e($post->published_at->format('d M Y, H:i')); ?>

                            <?php else: ?>
                                <span class="text-muted">Not published</span>
                            <?php endif; ?>
                        </strong>
                    </div>

                    <!-- Created At -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Created</small>
                        <strong><?php echo e($post->created_at->format('d M Y, H:i')); ?></strong>
                    </div>

                    <!-- Updated At -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Last Updated</small>
                        <strong><?php echo e($post->updated_at->format('d M Y, H:i')); ?></strong>
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Slug</small>
                        <code><?php echo e($post->slug); ?></code>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit Post
                        </a>
                        <form action="<?php echo e(route('admin.posts.destroy', $post)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete Post
                            </button>
                        </form>
                        <a href="<?php echo e(route('admin.posts.index')); ?>" class="btn btn-outline-secondary">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views\admin\posts\show.blade.php ENDPATH**/ ?>