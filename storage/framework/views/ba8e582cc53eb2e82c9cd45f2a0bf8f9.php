<?php $__env->startSection('style'); ?>
    <style>
        .text-blue-900 {
            --tw-text-opacity: 1;
            color: rgb(30 58 138 / var(--tw-text-opacity, 1));
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    hero area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="hero-area" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!--hero area left content-->
                <div class="col-12 col-md-7">
                    <div class="hero-content text-center text-md-start">
                        <h1 class="hero-title wow animate__animated animate__fadeInUp">
                            <?php echo e(__('welcome.hero_name')); ?>

                        </h1>
                        <div class="sub-content  wow animate__animated animate__fadeInUp mt-1 " style="padding-left:0; padding-top:0">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div class="space-y-6">
                                <p class="text-lg text-gray-700 leading-relaxed mb-3">
                                    <?php echo e(__('welcome.hero_description')); ?>

                                </p>
                                <div class="p-3 rounded-2xl border border-blue-100 " style="background: linear-gradient(to right, #F4F0FD 90%, #FFFFFF);">
                                    <h4 class="font-bold text-blue-900 mb-4 flex items-center gap-2" style="font-size:14pt;">
                                        <i class="fa-solid fa-bullseye text-blue-600"></i> <?php echo e(__('welcome.core_focus')); ?>

                                    </h4>
                                    <ul class="grid grid-cols-1 gap-3" style="display:flex; flex-direction: column;">
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            <?php echo e(__('welcome.nanoimmunobiotechnomedicine')); ?>

                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            <?php echo e(__('welcome.nanotechnology')); ?>

                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            <?php echo e(__('welcome.biomedical_research')); ?>

                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            <?php echo e(__('welcome.immunology')); ?>

                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            <?php echo e(__('welcome.hematopsychiatry')); ?>

                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            <?php echo e(__('welcome.medical_practice')); ?>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--hero area right image-->
                <div class="col-10 col-md-5">
                    <div class="hero-img text-center  wow animate__animated animate__fadeInUp">
                        <img id="moving" class="lazyload" src="assets/img/hero/final.png" alt="hero image">
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        funfact area start here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="funfact-area wow animate__animated animate__fadeInUp">
            <div class="container">
                <div class="column_wrapper">
                    <!-- funfact content -->
                    <div class="row g-4">
                        <div class="col-6 col-md-3 col-lg-3">
                            <div class="funfact-box">
                                <h2>
                                    <span class="counter">60</span>+
                                </h2>
                                <p>
                                    <?php echo e(__('welcome.academic_journals')); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <div class="funfact-box">
                                <h2>
                                    <span class="counter">20</span>+
                                </h2>
                                <p>
                                    <?php echo e(__('welcome.books')); ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <div class="funfact-box">
                                <h2>
                                    <span class="counter">05</span>+
                                </h2>
                                <p>
                                    Other Contributions
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <div class="funfact-box">
                                <h2>
                                    <span class="counter">11</span>+
                                </h2>
                                <p>
                                    Years of Experience
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- funfact shape -->
                    <div class="shape">
                        <img src="assets/img/funfact/shape.png" height="80" width="100" alt="funfact shape image">
                    </div>
                </div>
            </div>
        </div>
        <!--~~./ funfact area  end~~-->
    </section>
    <!--~~./ end hero area ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    about me area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about_me_area section-space" id="about">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="About Me">
                <h6 class="title">
                    ABOUT ME
                </h6>
            </div>
            <div class="about-content-wrapper wow animate__animated animate__fadeInUp">
                <div class="row g-4 align-items-end">
                    <div class="col-lg-6 col-xl-7">
                        <!-- about area left content -->
                        <div class="left-info">
                            <h2>
                                Dito Anurogo
                            </h2>
                            <p class="designation">
                            Physician / Researcher / Indonesian
                            </p>
                            <p class="content">
                                With 15+ years of professional experience, I focus on connecting applied biomedical research with public insight through scientific and journalistic communication.
                            </p>
                            <div class="button-groups  wow animate__animated animate__fadeInUp">
                                <a href="assets/file/Updated CV - Nov 2025 - Dito Anurogo.pdf" class="btn-primary-gradient">
                                    Download CV &nbsp;
                                    <i class="fas fa-download"></i>
                                </a>
                                <!-- <a href="#" class="btn-primary-outlined">
                                    Hire Me!
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="right-info">
                            <!-- about area right content -->
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="name" width="20%">Name</td>
                                        <td class="dot">:</td>
                                        <td class="value">DITO ANUROGO</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Nationality</td>
                                        <td class="dot">:</td>
                                        <td class="value">INDONESIAN
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="name">NIDN</td>
                                        <td class="dot">:</td>
                                        <td class="value">0923078303</td>
                                    </tr>
                                    <tr>
                                        <td class="name">ID Sinta</td>
                                        <td class="dot">:</td>
                                        <td class="value">6198330</td>
                                    </tr>
                                    <tr>
                                        <td class="name">ID Scopus</td>
                                        <td class="dot">:</td>
                                        <td class="value">57224408026</td>
                                    </tr>
                                    <tr>
                                        <td class="name">ID Peneliti <br /><small>Web of Science</small></td>
                                        <td class="dot">:</td>
                                        <td class="value">AAN64652020</td>
                                    </tr>
                                    <tr>
                                        <td class="name">ID ORCID</td>
                                        <td class="dot">:</td>
                                        <td class="value">0000000232923139</td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="name">Phone</td>
                                        <td class="dot">:</td>
                                        <td class="value">
                                            <a href="tel:123456789">
                                                +62 853-9717-7543
                                            </a>
                                        </td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td class="name">Email</td>
                                        <td class="dot">:</td>
                                        <td class="value">
                                            <a href="mailto:youremail@gmail.com">
                                                dito.anurogo@med.unismuh.ac.id
                                            </a>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td class="name">Experience</td>
                                        <td class="dot">:</td>
                                        <td class="value">11 Year +</td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="name">LinkedIn</td>
                                        <td class="dot">:</td>
                                        <td class="value">
                                            <a href="#">
                                                
                                            </a>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td class="name">Language</td>
                                        <td class="dot">:</td>
                                        <td class="value">Indonesian, English</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
    </div>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    service area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="service-area section-space">
        <div class="container">
            <!-- section title -->
            <h2 class="section-title wow animate__animated animate__fadeInUp">
                <svg width="26" height="33" viewBox="0 0 26 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.57695 23.0121L9.57639 23.0121C4.66099 23.0051 0.677265 19.0214 0.670312 14.106V14.1054V1.59448V1.19448H1.07031H3.06914H3.46914V1.59448V14.1051C3.47558 17.4771 6.20558 20.207 9.57769 20.2132H19.9601L13.5906 13.8437L13.3078 13.5609L13.5906 13.278L15.005 11.8636L15.288 11.5807L15.5708 11.8637L25.0337 21.3332L25.3164 21.6161L25.0336 21.8988L15.5707 31.3617L15.2879 31.6445L15.005 31.3617L13.5906 29.9472L13.3078 29.6644L13.5906 29.3816L19.9601 23.0121L9.57695 23.0121Z" fill="currentcolor" stroke="currentcolor" stroke-width="0.8"/>
                </svg>  
                Specialties, Interests, and Passions
            </h2>
            <div class="row g-4" id="specialtiesContainer">
                <?php $__currentLoopData = $profile->specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 specialty-item" data-specialty-index="<?php echo e($index); ?>">
                    <!-- card content -->
                    <div class="service_card wow animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <img src="assets/img/service/coding.svg" height="48" width="48" alt="card image">
                            <a href="#!" class="primary_btn">
                                
                            </a>
                        </div>
                        <h4 class="title">
                            <a href="#">
                                <?php echo e($specialty->name); ?>

                            </a>
                        </h4>
                        <p class="content">
                            <?php echo e($specialty->description); ?>

                        </p>
                    </div> 
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12">
                    <div class="all-blogs-button text-center mt-4">
                        <a href="#!" id="viewAllBtn" class="btn-primary-gradient" aria-label="View All Specialties">
                            View All Specialties, Interests, and Passions
                        </a>
                    </div>
                </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const container = document.getElementById('specialtiesContainer');
                const viewAllBtn = document.getElementById('viewAllBtn');
                const specialtyItems = document.querySelectorAll('.specialty-item');
                const itemsPerPage = 4;
                let isExpanded = false;

                // Hide items after the 4th one on load
                specialtyItems.forEach((item, index) => {
                    if (index >= itemsPerPage) {
                        item.style.display = 'none';
                    }
                });

                // Toggle show/hide on button click
                viewAllBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    isExpanded = !isExpanded;

                    specialtyItems.forEach((item, index) => {
                        if (index >= itemsPerPage) {
                            item.style.display = isExpanded ? 'block' : 'none';
                        }
                    });

                    // Change button text
                    viewAllBtn.textContent = isExpanded 
                        ? 'Show Less' 
                        : 'View All Specialties, Interests, and Passions';
                });
            });
            </script>
        </div>
    </div>
    <!--~~./ service area end~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    blog-area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="blog-area section-space" id="blog">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="Blog" >
                <h6 class="title">
                    BLOG
                </h6>
            </div>
            <div class="row g-4">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--single blog item -->
                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="<?php echo e(route('blog.show', $post->slug)); ?>" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="<?php echo e(Storage::url($post->image)); ?>">
                                        <source media="(max-width: 1399px)" srcset="<?php echo e(Storage::url($post->image)); ?>">
                                        <img src="<?php echo e(Storage::url($post->image)); ?>" alt="<?php echo e($post->title); ?>" style="width: 100%; height: 300px; object-fit: cover; display: block;">
                                    </picture>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#" class="category_btn" aria-label="Branding">
                                        <?php echo e($post->category->name); ?>

                                    </a>
                                    <span class="date">
                                        <?php echo e($post->published_at->format('F j, Y')); ?>

                                    </span>
                                </div>
                                <h5 class="post-title">
                                    <a href="<?php echo e(route('blog.show', $post->slug)); ?>">
                                        <?php echo e($post->title); ?>

                                    </a>
                                </h5>
                                <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="post-single-link" aria-label="blog details link">
                                    Visit Article <i class="fal fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <!-- <div class="img-group d-flex align-items-center">
                                    <img src="assets/img/blog/avatar1.png" alt="Janee Roy">
                                    <img src="assets/img/blog/avatar2.png" alt="James Bond">
                                    <img src="assets/img/blog/avatar3.png" alt="Alfrad">
                                </div> -->
                                <div class="viewer-names">
                                    <?php echo e($post->profile->full_name); ?> | <?php echo e($post->slug); ?> views
                                </div>
                            </div>
                            
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                

                <div class="col-12">
                    <div class="all-blogs-button text-center mt-4">
                        <a href="blog.html" class="btn-primary-gradient" aria-label="View All Blogs">
                            View All Blogs
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!--~~./ blog-area end~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Protfolio-area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="Protfolio-area section-space" id="protfolio">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="GALLERY">
                <h6 class="title">
                    GALLERY 
                </h6>
            </div>
            <!-- protfolio button list -->
            <div class="protfolio-menu-wrapper text-center wow animate__animated animate__fadeInUp">
                <div class="protfolio-menu">
                    <button data-filter="*" class="active" aria-label="Filter All Items">ALL PHOTO</button>
                </div>
            </div>
            <div class="row protfolio-container wow animate__animated animate__fadeInUp g-4">
                <!-- protfolio item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 grid-item design project">
                    <div class="single-protfolio">
                        <img src="assets/img/protfolio/5.jpg" class="lazyload" height="290" width="400" alt="protfolio image">
                        <div class="details">
                            <a  class="details-link" aria-label="protfolio single item">
                                Dito Anurogo
                            </a>
                        </div>
                    </div>
                </div>
                <!-- protfolio item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 grid-item branding recent">
                    <div class="single-protfolio">
                        <img src="assets/img/protfolio/2.jpg" class="lazyload" height="600" width="400" alt="protfolio image">
                        <div class="details">
                            <a class="details-link" aria-label="protfolio single item">
                                Dito Anurogo
                            </a>
                        </div>
                    </div>
                </div>
                <!-- protfolio item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 grid-item design project">
                    <div class="single-protfolio">
                        <img src="assets/img/protfolio/3.jpg" class="lazyload" height="290" width="400" alt="protfolio image">
                        <div class="details">
                            <a class="details-link" aria-label="protfolio single item">
                                Dito Anurogo
                            </a>
                        </div>
                    </div>
                </div>
                <!-- protfolio item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 grid-item branding recent">
                    <div class="single-protfolio">
                        <img src="assets/img/protfolio/4.jpg" class="lazyload" height="290" width="400" alt="protfolio image">
                        <div class="details">
                            <a class="details-link" aria-label="protfolio single item">
                                Dito Anurogo
                            </a>
                        </div>
                    </div>
                </div>
                <!-- protfolio item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-4 grid-item design project">
                    <div class="single-protfolio">
                        <img src="assets/img/protfolio/1.jpg" class="lazyload" height="290" width="400" alt="protfolio image">
                        <div class="details">
                            <a class="details-link" aria-label="protfolio single item">
                                Dito Anurogo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~./ Protfolio-area end~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    blog-area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="blog-area section-space" id="blog">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="EXPERIENCE" >
                <h6 class="title">
                    EXPERIENCE
                </h6>
            </div>
            <div class="row g-4">
                <!--single blog item -->
                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn animate__fadeInUp" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="blog-details.html" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="assets/img/blog/Desain.png">
                                        <source media="(max-width: 1399px)" srcset="assets/img/blog/blog1-sm.png">
                                        <img src="assets/img/blog/blog1-sm.png" alt="Design Specialization brings a user design-centric.">
                                    </picture>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                        
                                    <span class="date">
                                        2025 – Present
                                    </span>
                                </div>
                                <h5 class="title">
                                    <a href="">
                                        Design Specialization brings a user design-centric.
                                    </a>
                                </h5>
                        
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <div class="viewer-names">
                                    Dito Anurogo
                                </div>
                            </div>
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--single blog item -->
                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="blog-details.html" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="assets/img/blog/Desain.png">
                                        <source media="(max-width: 1399px)" srcset="assets/img/blog/blog2-sm.png">
                                        <img src="assets/img/blog/blog2-sm.png" alt="Design Specialization brings a user design-centric.">
                                    </picture>  
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="date">
                                        Nov 2023 – present
                                    </span>
                                </div>
                                <h5 class="title">
                                    <a href="">
                                        Regular Columnist AyoSehat (Indonesian Ministry of Health.) 
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <div class="viewer-names">
                                    Dito Anurogo
                                </div>
                            </div>
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--single blog item -->
                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="blog-details.html" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="assets/img/blog/Desain.png">
                                        <source media="(max-width: 1399px)" srcset="assets/img/blog/blog3-sm.png">
                                        <img src="assets/img/blog/blog3-sm.png" alt="Design Specialization brings a user design-centric.">
                                    </picture>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="date">
                                        August 2017 – February 2018
                                    </span>
                                </div>
                                <h5 class="title">
                                    <a href="">
                                        Researcher Center for Islamic Bioethics and Islamic Medical Laws (Biohuki), Faculty of Medicine, Universitas Islam Indonesia, Yogyakarta 
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <div class="viewer-names">
                                    Dito Anurogo
                                </div>
                            </div>
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--single blog item -->
                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="blog-details.html" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="assets/img/blog/Desain.png">
                                        <source media="(max-width: 1399px)" srcset="assets/img/blog/blog4-sm.png">
                                        <img src="assets/img/blog/blog4-sm.png" alt="Design Specialization brings a user design-centric.">
                                    </picture>  
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="date">
                                        February 2018 – Present    
                                    </span>
                                </div>
                                <h5 class="title">
                                    <a href="">
                                        Lecturer, Faculty of Medicine and Health Sciences  Universitas Muhammadiyah Makassar, South Sulawesi, Indonesia
                                        
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <div class="viewer-names">
                                    Dito Anurogo
                                </div>
                            </div>
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="blog-details.html" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="assets/img/blog/Desain.png">
                                        <source media="(max-width: 1399px)" srcset="assets/img/blog/blog4-sm.png">
                                        <img src="assets/img/blog/blog4-sm.png" alt="Design Specialization brings a user design-centric.">
                                    </picture>  
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="date">
                                        August – October 2017
                                    </span>
                                </div>
                                <h5 class="title">
                                    <a href="">
                                        Reporter EFKAGAMA (Official Magazine of the Faculty of Medicine, Universitas Gadjah Mada, Indonesia) 
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <div class="viewer-names">
                                    Dito Anurogo
                                </div>
                            </div>
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="blog-details.html" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="assets/img/blog/Desain.png">
                                        <source media="(max-width: 1399px)" srcset="assets/img/blog/blog4-sm.png">
                                        <img src="assets/img/blog/blog4-sm.png" alt="Design Specialization brings a user design-centric.">
                                    </picture>  
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="date">
                                        August 2011 – October 2017
                                    </span>
                                </div>
                                <h5 class="title">
                                    <a href="">
                                        Online Doctor (Voluntary Health Consultant) Detik.com
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="viewer-content">
                                <div class="viewer-names">
                                    Dito Anurogo
                                </div>
                            </div>
                            <div class="post-react">
                                <button type="button" aria-label="Love this post">
                                    <i class="fal fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="all-blogs-button text-center mt-4">
                        <a href="experience_more.html" class="btn-primary-gradient" aria-label="View All Blogs" target="_blank">
                            View All Experience
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~./ blog-area end~~-->

    

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Resume area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="resume-area section-space" id="resume">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="Resume">
                <h6 class="title">
                    RESUME
                </h6>
            </div>
            <!-- tab button group -->
            <div class="tab-button text-center  wow animate__animated animate__fadeInUp">
                <ul class="nav nav-pills text-center" role="tablist">
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#work_experience" type="button">
                            Education
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Academic_qualification" type="button">
                            Academic Journals
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#achievments_qualification" type="button">
                            Achievments
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#certifications_qualification" type="button">
                            Certifications
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#book_experience" type="button">
                            Books
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#other_qualification" type="button">
                            Other Contributions
                        </button>
                    </li>
                </ul>
            </div>

            <!-- tab content -->
            <div class="tab-content  wow animate__animated animate__fadeInUp">
                <div class="tab-pane fade show active" id="work_experience" role="tabpanel" tabindex="0">
                    <div class="row g-4 gx-xxl-5" style="font-size: 8px;">
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <!-- 1 -->
                                <div class="resume-content">
                                    <span class="resume-meta">
                                            2020 - 2024
                                    </span>
                                    <h3 class="title">
                                            <a href="">Taipei Medical University</a>
                                    </h3>
                                    <a href="#" class="institute-name">
                                        PhD Program
                                    </a>
                                </div>
                                <!-- 2 -->
                                <div class="resume-content">
                                    <span class="resume-meta">
                                            2015 - 2017
                                    </span>
                                    <h3 class="title">
                                            <a href="">Universitas Gadjah Mada</a>
                                    </h3>
                                    <a href="https://themeforest.net/" class="institute-name">
                                            Master of Science (M.Sc.)
                                    </a>
                                </div>                              
                            </div>
                        </div>
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                    <!-- 9 -->
                                <div class="resume-content">
                                    <span class="resume-meta">
                                            2002 - 2009
                                    </span>
                                    <h3 class="title">
                                            <a href="">Universitas Islam Sultan Agung</a>
                                    </h3>
                                    <a href="https://themeforest.net/" class="institute-name">
                                            Medical Doctor (M.D)
                                    </a>
                                </div>                                                                                             
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    
                </div>
                </div>
                
                <div class="tab-pane fade" id="Academic_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2024
                                    </span>
                                    <h3 class="title">
                                        <a href="">Anurogo D, Chen CY, Lin CC, Pawitan JA, Qiu DW, Qiu JT. Codon optimized influenza H1 HA sequence but not CTLA-4 targeting of HA antigen to enhance the efficacy of DNA vaccines in an animal model. J Immunotoxicol. 2024 Dec;21(1):2400624. doi: 10.1080/1547691X.2024.2400624.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2024
                                    </span>
                                    <h3 class="title">
                                        <a href="">Anurogo D, Liu CL, Chang YC, Chang YH, Qiu JT. Discovery of differentially expressed proteins for CAR-T therapy of ovarian cancers with a bioinformatics analysis. Aging (Albany NY). 2024 Jul 18;16(14):11409-11433. doi: 10.18632/aging.206024</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2021
                                    </span>
                                    <h3 class="title">
                                        <a href="">Anurogo D, Yuli Prasetyo Budi N, Thi Ngo MH, Huang YH, Pawitan JA. Cell and Gene Therapy for Anemia: Hematopoietic Stem Cells and Gene Editing. Int J Mol Sci. 2021 Jun 10;22(12):6275. doi: 10.3390/ijms22126275.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2024
                                    </span>
                                    <h3 class="title">
                                        <a href="">Anurogo, D., & Ikrar, T. (2024). Stem Cell-Nanodiamond Synergy: Efficacy in Breast Cancer. ScienceBank. https://doi.org/10.61340/vnva9232.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-12">
                                <div class="all-blogs-button text-center mt-4">
                                <a href="academic_more.html" class="btn-primary-gradient" aria-label="View All Blogs" target="_blank">
                                    View More 
                                </a>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="achievments_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2023
                                    </span>
                                    <h3 class="title">
                                        <a href="">Reviewer of the Month (April 2023)
                                        Biomedical and Pharmacology Journal (Scopus Q4). </a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2022
                                    </span>
                                    <h3 class="title">
                                        <a href="">Peace Ambassador 
                                        (2022)
                                        World Wide Peace Organization (WWPO), Indonesia.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2020
                                    </span>
                                    <h3 class="title">
                                        <a href="">Health Consultant Expert (2020)
                                        Doktersiaga.com</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        2019
                                    </span>
                                    <h3 class="title">
                                        <a href="">National Ambassador of Literacy (2019)
                                        Appointed by the Language Development and Cultivation Agency, Ministry of Education and Culture, Indonesia</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                                <div class="all-blogs-button text-center mt-4">
                                <a href="achievement_more.html" class="btn-primary-gradient" aria-label="View All Blogs">
                                    View More 
                                </a>
                            </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="certifications_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Official License as Master Trainer of Advanced Biomedical and Health Professional (MTABHP)</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Diploma in Modern Applied Psychology</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Certified Business Operations Associate (CBOA)</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Certified Event Management Mastery</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                                <div class="all-blogs-button text-center mt-4">
                                <a href="certif_more.html" class="btn-primary-gradient" aria-label="View All Blogs">
                                    View More 
                                </a>
                            </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="book_experience" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">The Art of Onconomics 5.0. BOHR Publishers, 2024. ISBN: 978-81-946019-4-4.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">STEM Cells Made Easy: Menguak Misteri, Keistimewaan, dan Rahasia Sel Punca. Guepedia, 2024. ISBN: 978-623-421-490-1.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Digital Health Made Easy. Nas Media Indonesia, 2024. ISBN: 978-623-155-511-3. </a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">The Art of Televasculobiomedicine 5.0. Nas Media Indonesia, 2023. ISBN: 978-623-155-226-6.</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                                <div class="all-blogs-button text-center mt-4">
                                <a href="books_more.html" class="btn-primary-gradient" aria-label="View All Blogs">
                                    View More 
                                </a>
                            </div>
                            </div>
                </div>
                <div class="tab-pane fade" id="other_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Artikel di Ethical Digest (misalnya Neuroreligenomics in Autism, Manajemen Meningitis, Neuropsychocreativity, dll.).</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Artikel di Cermin Dunia Kedokteran (CDK) (Migren, ALS, Vitiligo, Ejakulasi Dini, dll.).</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- tab single item -->
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Artikel Probiotics di Medika (Indonesian Medical Journal), 2014. </a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">Kontribusi populer: Graphoanthropology: The Art of Changing the World through Words and Love (Talkshow FLP UNNES, 2010).</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        Dito Anurogo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                                <div class="all-blogs-button text-center mt-4">
                                <a href="other_contribution.html" class="btn-primary-gradient" aria-label="View All Blogs">
                                    View More 
                                </a>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~./ Resume area end~~-->
    
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    contact area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!-- <div class="contact-area" id="contact">
        <div class="container">
            
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" 
                data-watermark="CONTACT">
                <h6 class="title">
                    CONTACT
                </h6>
            </div>
            <h2 class="section-title mb-4 wow animate__animated animate__fadeInUp">
                <svg width="26" height="33" viewBox="0 0 26 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.57695 23.0121L9.57639 23.0121C4.66099 23.0051 0.677265 19.0214 0.670312 14.106V14.1054V1.59448V1.19448H1.07031H3.06914H3.46914V1.59448V14.1051C3.47558 17.4771 6.20558 20.207 9.57769 20.2132H19.9601L13.5906 13.8437L13.3078 13.5609L13.5906 13.278L15.005 11.8636L15.288 11.5807L15.5708 11.8637L25.0337 21.3332L25.3164 21.6161L25.0336 21.8988L15.5707 31.3617L15.2879 31.6445L15.005 31.3617L13.5906 29.9472L13.3078 29.6644L13.5906 29.3816L19.9601 23.0121L9.57695 23.0121Z" fill="currentcolor" stroke="currentcolor" stroke-width="0.8"/>
                </svg>  
                Get In Touch
            </h2>
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="contact-content wow animate__animated animate__fadeInUp">
                        <p class="text">
                            I design products that are more than pretty. I make them shippable. I design products that are more than pretty.
                        </p>
                        <ul>
                            <li>
                                <a href="tel:0585825333">
                                    Phone: +058 58 25 333
                                </a>
                            </li>
                            <li>
                                <a href="mailto:themearray@gmail.com">
                                    Email: themearray@gmail.com
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Address: 121 King St, Melbourne VIC 3000
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 wow animate__animated animate__fadeInUp">
                    
                    <form action="contact-form.php" method="post" class="contact-form">
                        <div class="row g-4">
                            <div class="col-12">
                                <input type="text" placeholder="Name" name="client__name">
                            </div>
                            <div class="col-12">
                                <input type="email" placeholder="E-Mail" name="client_email">
                            </div>
                            <div class="col-12">
                                <textarea name="contact__message" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-gradient">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="google-map  wow animate__animated animate__slideInUp" data-wow-delay=".5s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.086012187377!2d110.4064857!3d-6.9826794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas%20Dian%20Nuswantoro!5e0!3m2!1sen!2sid!4v1739253670401"
width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="contact-bg">
            
        </div>

        <div class="contact-shape">
            <img src="assets/img/contact/shape.png" height="130" width="1400" alt="background shape image">
        </div>
    </div> -->
    <!--~~./ contact area end~~-->

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\app\dokterdito_app\resources\views\welcome.blade.php ENDPATH**/ ?>