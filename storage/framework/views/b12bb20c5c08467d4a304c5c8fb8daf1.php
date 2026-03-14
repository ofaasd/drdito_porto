<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keyword" content="resume, portfolio, personal portfolio, cv, template, responsive, html5, css3, creative, clean">
    <meta name="description" content="BPRO - Personal Resume/vCard Template">
    <meta name="author" content="Themearray">

    <!-- Site Title
    ================================================== -->
    <title>dr.Dito Anurogo</title>

    <!-- Site Favicon
    ================================================== -->
    <link rel="shortcut icon" href="assets/img/favicon/logoDA.png" >

    <!-- Google Fonts
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap">


    <!-- All CSS Here
    ================================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Preloader Start
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
        <div class="preShape1"></div>
        <div class="preShape2"></div>
        <h4 class="content">loading</h4>
    </div>
    <!--~~./ Preloader End ~~-->
    
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    left sidebar start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--   <div class="left-sidebar">
        Chat Icon
        <a href="index.html#contact" class="message" aria-label="Message Me">
            <svg width="17" height="13" viewBox="0 0 17 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.52734 0.820312C0.699219 0.820312 0.0273438 1.49219 0.0273438 2.32031C0.0273438 2.79219 0.249219 3.23594 0.627344 3.52031L7.42734 8.62031C7.78359 8.88594 8.27109 8.88594 8.62734 8.62031L15.4273 3.52031C15.8055 3.23594 16.0273 2.79219 16.0273 2.32031C16.0273 1.49219 15.3555 0.820312 14.5273 0.820312H1.52734ZM0.0273438 4.32031V10.8203C0.0273438 11.9234 0.924219 12.8203 2.02734 12.8203H14.0273C15.1305 12.8203 16.0273 11.9234 16.0273 10.8203V4.32031L9.22734 9.42031C8.51484 9.95469 7.53984 9.95469 6.82734 9.42031L0.0273438 4.32031Z" fill="currentColor"/>
            </svg>
        </a>

        
        <div class="social-icon">
            ]
            <a href="#" 
                data-bs-toggle="tooltip"
                data-bs-placement="right"
                data-bs-title="Follow Me On Github"
                aria-label="github">
                <svg width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.01249 0.867188C3.36635 0.867188 0.410156 3.82572 0.410156 7.47474C0.410156 10.5709 2.54051 13.1616 5.41253 13.8786C5.38172 13.7894 5.36191 13.6858 5.36191 13.5575V12.4282C5.09396 12.4282 4.645 12.4282 4.53221 12.4282C4.0805 12.4282 3.67886 12.2338 3.48409 11.8726C3.26787 11.4712 3.23045 10.8573 2.69456 10.4817C2.53556 10.3567 2.6566 10.2141 2.83982 10.2334C3.17819 10.3292 3.45878 10.5616 3.72288 10.9063C3.98587 11.2515 4.10967 11.3297 4.60099 11.3297C4.83922 11.3297 5.19575 11.3159 5.53137 11.2631C5.71183 10.8044 6.02379 10.3821 6.40508 10.1827C4.2065 9.95643 3.15728 8.86178 3.15728 7.37563C3.15728 6.7358 3.42962 6.11689 3.89234 5.59544C3.74048 5.07785 3.54957 4.02229 3.95066 3.62034C4.93991 3.62034 5.53797 4.26237 5.68157 4.43582C6.17455 4.26677 6.71594 4.17096 7.28484 4.17096C7.85484 4.17096 8.39843 4.26677 8.89251 4.43692C9.03446 4.26457 9.63307 3.62034 10.6245 3.62034C11.0273 4.02285 10.8341 5.08281 10.6806 5.5993C11.1406 6.11964 11.4113 6.7369 11.4113 7.37563C11.4113 8.86068 10.3637 9.95478 8.16845 10.1822C8.77256 10.4977 9.21327 11.3842 9.21327 12.0521V13.5575C9.21327 13.6148 9.20062 13.6561 9.19401 13.7051C11.7667 12.8026 13.6148 10.3578 13.6148 7.47474C13.6148 3.82572 10.6586 0.867188 7.01249 0.867188Z" fill="currentColor"/>
                </svg>
            </a>
            
            <a href="#" 
                data-bs-toggle="tooltip"
                data-bs-placement="right"
                data-bs-title="Follow Me On Dribble"
                aria-label="github">
                <svg width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.02364 0.148438C3.4373 0.148438 0.519531 3.06851 0.519531 6.65769C0.519531 10.2469 3.4373 13.1669 7.02364 13.1669C10.61 13.1669 13.5278 10.2469 13.5278 6.65769C13.5278 3.06851 10.61 0.148438 7.02364 0.148438ZM7.02364 1.12483C8.37074 1.12483 9.60237 1.60532 10.5603 2.40316C9.66508 3.19187 8.64146 3.8337 7.53749 4.32606C6.96235 3.27925 6.338 2.26419 5.63707 1.30663C6.08073 1.19223 6.5437 1.12483 7.02364 1.12483ZM4.67733 1.65116C5.39681 2.60331 6.03164 3.61926 6.61586 4.66805C5.41403 5.08591 4.14158 5.35584 2.79597 5.35584C2.41625 5.35584 2.04193 5.3305 1.67045 5.29418C2.07951 3.67491 3.19628 2.3458 4.67733 1.65116ZM11.2519 3.09286C12.0517 4.04257 12.537 5.26529 12.5496 6.60493C11.8473 6.42863 11.1134 6.33223 10.357 6.33223C9.76249 6.33223 9.18813 6.40903 8.62553 6.51911C8.42958 6.06482 8.21496 5.62331 7.99418 5.18294C9.1842 4.64435 10.2889 3.94862 11.2519 3.09286ZM7.08144 5.54146C7.28747 5.94871 7.49523 6.35301 7.67913 6.77275C5.70761 7.38987 4.01525 8.64261 2.87981 10.3153C2.02047 9.34054 1.49515 8.06347 1.49515 6.65769C1.49515 6.52282 1.50605 6.39091 1.51547 6.25849C1.93671 6.30171 2.3621 6.33223 2.79597 6.33223C4.30602 6.33223 5.73749 6.02735 7.08144 5.54146ZM10.357 7.30862C11.0883 7.30862 11.7939 7.41256 12.467 7.59594C12.2118 9.09519 11.3606 10.3867 10.1601 11.2148C9.87092 9.93344 9.46613 8.69805 9.00282 7.49169C9.44972 7.41469 9.88774 7.30862 10.357 7.30862ZM8.02911 7.67476C8.53997 8.97682 8.9769 10.3163 9.26959 11.7125C8.58325 12.0176 7.82457 12.1906 7.02364 12.1906C5.72629 12.1906 4.53813 11.7423 3.59628 10.9968C4.62001 9.41676 6.18811 8.2333 8.02911 7.67476Z" fill="currentColor"/>
                </svg>
            </a>
            
            <a href="#" 
                data-bs-toggle="tooltip"
                data-bs-placement="right"
                data-bs-title="Follow Me On Twitter"
                aria-label="twitter">
                <svg width="18" height="16" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.89663 10.5044C3.9582 10.4871 3.13153 10.004 2.64 9.27582C2.91344 9.26145 3.17979 9.21804 3.43524 9.14827L3.40178 8.17569C2.37028 7.96889 1.54492 7.18996 1.26923 6.18358C1.54849 6.25967 1.84055 6.3047 2.14106 6.31433L3.8879 6.37034L2.43499 5.39894C1.68787 4.89942 1.19747 4.04693 1.19747 3.08087C1.19747 2.82881 1.2307 2.5851 1.29291 2.35355C2.97455 4.10238 5.29601 5.23104 7.88193 5.36064L8.54326 5.39379L8.39411 4.74865C8.34721 4.54574 8.32204 4.33226 8.32204 4.11302C8.32204 2.57508 9.56809 1.32812 11.1043 1.32812C11.9046 1.32812 12.6271 1.66592 13.1352 2.2078L13.3248 2.41007L13.5968 2.35634C13.8191 2.31243 14.0377 2.25822 14.2519 2.19422C14.1371 2.29118 14.0143 2.37908 13.8847 2.45679L14.2011 3.38211C14.3036 3.36985 14.4054 3.35544 14.5065 3.33892C14.3743 3.45283 14.2372 3.56114 14.0957 3.6634L13.8772 3.82123L13.889 4.09048C13.8948 4.22419 13.8977 4.35856 13.8977 4.49361C13.8977 8.62013 10.763 13.3402 5.0591 13.3402C3.99555 13.3402 2.97721 13.1513 2.03372 12.806C3.2128 12.6016 4.29262 12.1066 5.19609 11.3976L6.30139 10.5303L4.89663 10.5044Z" stroke="currentColor"/>
                </svg>
            </a>
            
            <a href="#" 
                data-bs-toggle="tooltip"
                data-bs-placement="right"
                data-bs-title="Follow Me On Instagram"
                aria-label="instagram">
                <svg width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.36087 0.529297C2.24296 0.529297 0.519531 2.25409 0.519531 4.37368V9.69666C0.519531 11.8162 2.24296 13.541 4.36087 13.541H9.67965C11.7976 13.541 13.521 11.8162 13.521 9.69666V4.37368C13.521 2.25409 11.7976 0.529297 9.67965 0.529297H4.36087ZM4.36087 1.12074H9.67965C11.4781 1.12074 12.93 2.57377 12.93 4.37368V9.69666C12.93 11.4966 11.4781 12.9496 9.67965 12.9496H4.36087C2.56239 12.9496 1.11051 11.4966 1.11051 9.69666V4.37368C1.11051 2.57377 2.56239 1.12074 4.36087 1.12074ZM10.5661 2.89507C10.4094 2.89507 10.2591 2.95738 10.1482 3.0683C10.0374 3.17921 9.97514 3.32965 9.97514 3.48651C9.97514 3.64337 10.0374 3.79381 10.1482 3.90472C10.2591 4.01564 10.4094 4.07795 10.5661 4.07795C10.7229 4.07795 10.8732 4.01564 10.984 3.90472C11.0948 3.79381 11.1571 3.64337 11.1571 3.48651C11.1571 3.32965 11.0948 3.17921 10.984 3.0683C10.8732 2.95738 10.7229 2.89507 10.5661 2.89507ZM7.02026 3.78223C5.22864 3.78223 3.7699 5.24212 3.7699 7.03517C3.7699 8.82821 5.22864 10.2881 7.02026 10.2881C8.81189 10.2881 10.2706 8.82821 10.2706 7.03517C10.2706 5.24212 8.81189 3.78223 7.02026 3.78223ZM7.02026 4.37368C8.4925 4.37368 9.67965 5.56176 9.67965 7.03517C9.67965 8.50857 8.4925 9.69666 7.02026 9.69666C5.54802 9.69666 4.36087 8.50857 4.36087 7.03517C4.36087 5.56176 5.54802 4.37368 7.02026 4.37368Z" fill="currentColor" stroke="currentColor" stroke-width="0.5"/>
                </svg>     
            </a>
        </div> 
    </div>--> 
    <!--~~./ end left sidebar ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    mobile header area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="header-area">
        <div class="logo">
            <a href="index.html">
                <img src="assets/img/logo/putih.png" class="light" alt="BPRO - Personal Resume/vCard Template">
                <img src="assets/img/logo/hitam.png" class="dark" alt="BPRO - Personal Resume/vCard Template">
            </a>
        </div>

        <button class="btn_theme_switch btn-primary-gradient ms-auto me-3" aria-label="Dark - Light Switch">
            <svg class="sun" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 17.5C14.5899 17.5 17.5 14.5899 17.5 11C17.5 7.41015 14.5899 4.5 11 4.5C7.41015 4.5 4.5 7.41015 4.5 11C4.5 14.5899 7.41015 17.5 11 17.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.14 18.14L18.01 18.01M18.01 3.99L18.14 3.86L18.01 3.99ZM3.86 18.14L3.99 18.01L3.86 18.14ZM11 1.08V1V1.08ZM11 21V20.92V21ZM1.08 11H1H1.08ZM21 11H20.92H21ZM3.99 3.99L3.86 3.86L3.99 3.99Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <svg class="moon" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.03009 11.42C1.39009 16.57 5.76009 20.76 10.9901 20.99C14.6801 21.15 17.9801 19.43 19.9601 16.72C20.7801 15.61 20.3401 14.87 18.9701 15.12C18.3001 15.24 17.6101 15.29 16.8901 15.26C12.0001 15.06 8.00009 10.97 7.98009 6.13996C7.97009 4.83996 8.24009 3.60996 8.73009 2.48996C9.27009 1.24996 8.62009 0.659961 7.37009 1.18996C3.41009 2.85996 0.70009 6.84996 1.03009 11.42Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <!--toggler button-->
        <button class="navbar-toggler" aria-label="sidebar open button">
            <span></span>
        </button>
    </header>
    <!--~~./ end mobile header area ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    right sidebar start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="assets/img/logo/putih.png" class="light" alt="BPRO - Personal Resume/vCard Template">
                    <img src="assets/img/logo/hitam.png" class="dark" alt="BPRO - Personal Resume/vCard Template">
                </a>
            </div>
            <div class="color-mode">
                <button class="btn_theme_switch btn-primary-gradient" aria-label="Dark - Light Switch">
                    <svg class="sun" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 17.5C14.5899 17.5 17.5 14.5899 17.5 11C17.5 7.41015 14.5899 4.5 11 4.5C7.41015 4.5 4.5 7.41015 4.5 11C4.5 14.5899 7.41015 17.5 11 17.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.14 18.14L18.01 18.01M18.01 3.99L18.14 3.86L18.01 3.99ZM3.86 18.14L3.99 18.01L3.86 18.14ZM11 1.08V1V1.08ZM11 21V20.92V21ZM1.08 11H1H1.08ZM21 11H20.92H21ZM3.99 3.99L3.86 3.86L3.99 3.99Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg class="moon" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.03009 11.42C1.39009 16.57 5.76009 20.76 10.9901 20.99C14.6801 21.15 17.9801 19.43 19.9601 16.72C20.7801 15.61 20.3401 14.87 18.9701 15.12C18.3001 15.24 17.6101 15.29 16.8901 15.26C12.0001 15.06 8.00009 10.97 7.98009 6.13996C7.97009 4.83996 8.24009 3.60996 8.73009 2.48996C9.27009 1.24996 8.62009 0.659961 7.37009 1.18996C3.41009 2.85996 0.70009 6.84996 1.03009 11.42Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- nav menu list -->
        <ul class="nav-menu" id="nav">
            <li class="menu-item">
                <a href="#home" class="nav-link active">
                    <i class="fal fa-home-lg-alt"></i>
                    HOME
                </a>
            </li>
            <li class="menu-item">
                <a href="#about" class="nav-link">
                    <i class="fal fa-user"></i>
                    ABOUT 
                </a>
            </li>
            <li class="menu-item">
                <a href="#blog" class="nav-link">
                    <i class="fal fa-user"></i>
                    BLOG 
                </a>
            </li>
            <li class="menu-item">
                <a href="#award" class="nav-link">
                    <i class="fal fa-user"></i>
                    AWARD STORY
                </a>
            </li>
            <li class="menu-item">
                <a href="#gallery" class="nav-link">
                    <i class="fal fa-briefcase"></i>
                    GALLERY
                </a>
            </li>
            
            <li class="menu-item">
                <a href="#resume" class="nav-link">
                    <i class="fal fa-id-card"></i>
                    RESUME
                </a>
            </li>
            <!-- <li class="menu-item">
                <a href="#contact" class="nav-link">
                    <i class="fal fa-mailbox"></i>
                    CONTACT
                </a>
            </li> -->
            <!-- <li class="menu-item">
                <a href="javascript:void(0)" class="nav-link">
                    <i class="fal fa-globe"></i>
                    LANGUAGE
                </a>
            </li> -->
        </ul>

        <!-- Locale Switcher -->
        <div class="locale-switcher-sidebar my-4" style="padding-left:7em">
            <?php if (isset($component)) { $__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.locale-switcher','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('locale-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee)): ?>
<?php $attributes = $__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee; ?>
<?php unset($__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee)): ?>
<?php $component = $__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee; ?>
<?php unset($__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee); ?>
<?php endif; ?>
        </div>

        <!-- copyright content -->
        <div class="copyright-content text-center">
            <p>
                2026 <a href="index.html">@Dito Anurogo</a>
            </p>
            <p>
                All Rights Reserved
            </p>
        </div>
    </div>
    <div class="sidebar-menu-overlay"></div>
   <!--~~./ end right sidebar ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    mobile menu start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="mobile-menu">

        <div class="menu-header d-flex align-items-center justify-content-between">
            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="assets/img/logo/putih.png" class="light" alt="BPRO - Personal Resume/vCard Template">
                    <img src="assets/img/logo/hitam.png" class="dark" alt="BPRO - Personal Resume/vCard Template">
                </a>
            </div>

            <button class="close-btn" type="button" aria-label="menu close button">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <!-- nav menu list -->
        <ul class="nav-menu" id="mobile_nav">
            <li class="menu-item">
                <a href="#home" class="nav-link active">
                    <i class="fal fa-home-lg-alt"></i>
                    HOME
                </a>
            </li>
            <li class="menu-item">
                <a href="#about" class="nav-link">
                    <i class="fal fa-user"></i>
                    ABOUT 
                </a>
            </li>
            <li class="menu-item">
                <a href="#blog" class="nav-link">
                    <i class="fal fa-user"></i>
                    BLOG 
                </a>
            </li>
            <li class="menu-item">
                <a href="#award" class="nav-link">
                    <i class="fal fa-user"></i>
                    AWARD STORY
                </a>
            </li>
            <li class="menu-item">
                <a href="#gallery" class="nav-link">
                    <i class="fal fa-briefcase"></i>
                    GALLERY
                </a>
            </li>
            
            <li class="menu-item">
                <a href="#resume" class="nav-link">
                    <i class="fal fa-id-card"></i>
                    RESUME
                </a>
            </li>
        </ul>

        <!-- Locale Switcher Mobile -->
        <div class="locale-switcher-mobile my-4 px-3" style="padding-left:7em">
            <?php if (isset($component)) { $__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.locale-switcher','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('locale-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee)): ?>
<?php $attributes = $__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee; ?>
<?php unset($__attributesOriginal7b69d71eac2771bb6249ff4d7cc262ee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee)): ?>
<?php $component = $__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee; ?>
<?php unset($__componentOriginal7b69d71eac2771bb6249ff4d7cc262ee); ?>
<?php endif; ?>
        </div>

        <!-- copyright content -->
        <div class="copyright-content text-center">
            <p>
                2026 <a href="index.html">Dito Anurogo</a>
            </p>
            <p>
                All Rights Reserved
            </p>
        </div>
    </div>
    <!--~~./ mobile menu end here ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    main body content start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php echo $__env->yieldContent('content'); ?>
    <!--~~./ main body content end here ~~-->


    <!-- ==============================================
     Warning: Do not delete / remove this svg  
    =============================================== -->
    <svg class="position-absolute" style="width: 0; height:0;">
        <clipPath id="testimonialShape" clipPathUnits="objectBoundingBox">
            <path d="M0.545,0.004 C0.661,0.024,0.79,0.135,0.873,0.267 C0.955,0.399,1,0.551,0.996,0.682 C0.955,0.867,0.847,0.765,0.743,0.853 C0.639,0.94,0.57,0.99,0.453,0.995 C0.335,1,0.155,1,0.087,0.909 C0.018,0.796,-0.015,0.69,0.007,0.533 C0.03,0.377,0.12,0.265,0.21,0.159 C0.301,0.052,0.429,-0.017,0.545,0.004"></path>
        </clipPath>
    </svg>
    <svg class="position-absolute" style="width: 0; height:0">
        <linearGradient id="paintLight" x1="45.6518" y1="0.675537" x2="45.6518" y2="48.9633" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.2"/>
            <stop offset="1" stop-color="#9772E0" stop-opacity="0.4"/>
        </linearGradient>
        <linearGradient id="paintDark" x1="12.9252" y1="0.675537" x2="12.9252" y2="48.9633" gradientUnits="userSpaceOnUse">
            <stop stop-color="#0B0020" stop-opacity="0"/>
            <stop offset="1" stop-color="#5E27CA" stop-opacity="1"/>
        </linearGradient>
    </svg>
    <svg class="position-absolute" style="width: 0; height:0"> 
        <linearGradient id="paint1006" x1="12.2031" y1="0.242187" x2="12.2031" y2="21.2422" gradientUnits="userSpaceOnUse">
            <stop stop-color="#6029CB"/>
            <stop offset="1" stop-color="#E5D9FE"/>
        </linearGradient>
    </svg>        
    <!-- ==============================================
     Warning End
    =============================================== -->

    <!-- All The JS Files
    ================================================== -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/lazysizes.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/packery-mode.pkgd.min.js"></script>
    <script src="assets/js/script.js"></script>
    
    <script>
        //hero image moving js
        const Moving = document.getElementById("moving");

            document.onmousemove = ev => {
            const positionX = (window.innerWidth / -90 - ev.x) / -70;
            const positionY = -ev.y / 20;
            Moving.style.transform = `translate(${positionX}px, ${positionY}px)`;
        };
    </script>






</body>
</html><?php /**PATH D:\work\app\dokterdito_app\resources\views/layouts/main.blade.php ENDPATH**/ ?>