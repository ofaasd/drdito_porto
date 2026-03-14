<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dr.Dito Anurogo</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: #f7f9fb;
        }
        .admin-sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background: #ffffff;
            border-right: 1px solid #e6e9ee;
            padding-top: 20px;
            overflow-y: auto;
        }
        .admin-sidebar .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 20px 20px 20px;
            border-bottom: 1px solid #f1f3f6;
            margin-bottom: 10px;
        }
        .admin-sidebar .nav-link {
            color: #374151;
            font-weight: 600;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .admin-sidebar .nav-link:hover, .admin-sidebar .nav-link.active {
            background: linear-gradient(90deg,#fff3ee,#fff6f2);
            color: #ff6b35;
        }
        .admin-topbar {
            margin-left: 250px;
            padding: 16px 24px;
            background: #ffffff;
            border-bottom: 1px solid #e6e9ee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-content {
            margin-left: 250px;
            padding: 24px;
        }
        @media (max-width: 768px) {
            .admin-sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }
            .admin-topbar { margin-left: 0; }
            .admin-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <aside class="admin-sidebar">
        <div class="brand">
            <img src="<?php echo e(asset('assets/img/favicon/logoDA.png')); ?>" alt="logo" style="width:48px;">
            <div>
                <div style="font-weight:700;color:#111">dr.Dito</div>
                <div style="font-size:12px;color:#6b7280">Admin Panel</div>
            </div>
        </div>

        <nav class="nav flex-column px-1">
            <a class="nav-link active" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
            <a class="nav-link" href="<?php echo e(route('admin.posts.index')); ?>"><i class="fas fa-newspaper"></i> Posts</a>
            <a class="nav-link" href="#"><i class="fas fa-briefcase"></i> CV / Resume</a>
            <a class="nav-link" href="#"><i class="fas fa-award"></i> Certifications</a>
            <a class="nav-link" href="#"><i class="fas fa-handshake"></i> Organizations</a>
            <div class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <form action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display:inline;margin-left:8px;"><?php echo csrf_field(); ?>
                    <button class="btn btn-link p-0 m-0 align-baseline" style="color:inherit;border:none;background:none;">Logout</button>
                </form>
            </div>
        </nav>
    </aside>

    <header class="admin-topbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-light d-md-none" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <h5 class="mb-0"><?php echo $__env->yieldContent('title', 'Dashboard'); ?></h5>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="text-end me-3">
                <div style="font-weight:600"><?php echo e(Auth::user()->name); ?></div>
                <div style="font-size:12px;color:#6b7280"><?php echo e(Auth::user()->email); ?></div>
            </div>
            <img src="<?php echo e(asset('assets/img/favicon/logoDA.png')); ?>" alt="avatar" style="width:40px;border-radius:50%;">
        </div>
    </header>

    <main class="admin-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script>
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            const aside = document.querySelector('.admin-sidebar');
            if (aside.style.display === 'block') aside.style.display = '';
            else aside.style.display = 'block';
        });
    </script>
</body>
</html><?php /**PATH D:\work\app\dokterdito_app\resources\views\admin\layouts\admin.blade.php ENDPATH**/ ?>