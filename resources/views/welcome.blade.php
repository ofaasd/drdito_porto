@extends('layouts.main')
@section('content')
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
                        <h5 class="subtitle  wow animate__animated animate__fadeInUp">
                            I am Dito Anurogo
                        </h5>
                        <h1 class="hero-title wow animate__animated animate__fadeInUp">
                            Physician, Researcher, and Writer
                        </h1>
                        <div class="sub-content  wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <svg width="78" height="58" viewBox="0 0 78 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.9389 13.3601L28.1889 9.35987C30.3385 10.3539 32.2468 11.7075 33.9389 13.3601ZM48.412 18.4243C46.0438 17.152 43.7408 15.8109 41.261 14.8171C44.0058 15.315 46.2586 16.8012 48.412 18.4243ZM40.0398 24.5893C39.7839 25.5982 39.173 25.2993 38.6039 25.055C36.6798 24.2293 36.0669 22.4022 35.4977 20.6495C35.0831 19.3715 34.8112 17.9908 35.1629 16.6121C35.2967 16.0859 35.5472 15.7069 36.121 16.2616C37.688 17.7767 39.0097 19.4621 39.7287 21.5545C40.0712 22.5514 40.2174 23.5835 40.0398 24.5893ZM40.9519 16.0099C42.6018 16.365 44.0431 17.2344 45.4953 18.0511C51.7714 21.5785 56.4801 26.7057 60.3915 32.6864C63.0037 36.6816 65.2112 40.889 67.2743 45.1841C67.4634 45.5754 67.6379 45.9789 68.0114 46.2352C68.4305 46.5223 68.768 46.5732 68.7156 45.894C68.7041 45.7266 68.5312 45.5273 68.8429 45.515C69.9201 45.4743 69.8466 44.6726 69.8476 43.9626C69.8504 42.6297 69.2846 41.4264 68.8494 40.2162C67.631 36.8231 66.2835 33.4727 64.5102 30.3319C62.8637 27.4152 60.815 24.7733 58.6935 22.1899C57.3422 20.5458 55.9458 18.8928 54.1237 17.8247C52.9125 17.1153 52.0721 16.0292 50.8948 15.3224C48.6383 13.9672 46.3754 12.6417 43.8597 11.8146C41.7881 11.1339 39.6899 11.021 37.579 11.5837C36.8834 11.7693 36.3096 11.6414 35.7659 11.2243C34.2961 10.1045 32.801 9.01837 31.2818 7.96677C28.8276 6.25502 26.1116 4.94342 23.3633 3.74637C18.979 1.83555 14.4638 0.395373 9.6507 0.0817533C6.8223 -0.101117 4.0214 -0.0978566 1.457 1.4087C0.780501 1.80564 0.22809 2.29543 0.0375102 3.10283C-0.0445798 3.45128 -0.00548914 3.7412 0.291511 3.97621C0.642701 4.25232 0.753701 3.97926 1.006 3.76821C2.7367 2.3282 4.7998 2.63216 6.807 2.74801C12.3365 3.06594 17.4156 4.95921 22.3706 7.26777C26.1615 9.03407 29.7445 11.1554 33.074 13.6968C33.3387 13.899 33.751 13.9982 33.3526 14.4963C31.9632 16.2315 31.5632 18.2801 31.7407 20.4247C32.0146 23.7363 33.1227 26.6577 36.1133 28.4625C37.721 29.432 39.0354 29.173 40.4571 27.9546C44.0805 24.849 43.7488 20.3703 41.4364 17.123L40.8153 16.2519L40.9528 16.0093L40.9519 16.0099Z" fill="#BFA9EA"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M67.4606 51.2411C69.3259 52.4335 70.9897 53.8521 72.3571 55.6013L67.4606 51.2411ZM73.9842 43.7522C73.4487 45.9433 73.2938 48.1865 73.0526 50.4178C73.0165 50.7512 73.15 51.1606 72.6751 51.3338C72.2193 51.4991 71.996 51.1453 71.7821 50.9036C70.6148 49.5858 69.1272 48.6879 67.7549 47.6301C66.8871 46.9618 66.1398 46.123 65.2278 45.4631C63.8245 44.4493 62.4944 43.327 61.1623 42.2155C60.4868 41.6528 59.5778 41.4326 59.0896 40.5738C58.6105 39.7319 57.8439 39.7407 56.7379 40.6346C56.1721 41.0902 55.8005 41.8008 56.3598 42.5264C56.8177 43.1292 57.3334 43.6857 57.8997 44.1881C61.6485 47.4579 65.423 50.6976 69.1754 53.9628C70.0179 54.6958 70.812 55.486 71.6184 56.2602C73.0858 57.6665 73.8819 57.6076 75.2699 56.1031C76.3481 54.9344 76.765 53.607 76.6729 52.0305C76.4965 48.9947 76.4062 45.9538 76.8034 42.9235C76.883 42.3167 77.0476 41.7206 77.1508 41.1161C77.2717 40.4156 77 40.1552 76.3083 40.4015C74.7766 40.9454 74.5863 41.2165 73.9842 43.7522Z" fill="#BFA9EA"/>
                                </svg>
                            </div>
                            <p>with Expertise in Nanoimmunobiotechnomedicine (NiBTM)</p>
                        </div>
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
                                    Academic Journals
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <div class="funfact-box">
                                <h2>
                                    <span class="counter">20</span>+
                                </h2>
                                <p>
                                    Books
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
                Areas of Expertise
            </h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <!-- card content -->
                    <div class="service_card wow animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <img src="assets/img/service/coding.svg" height="48" width="48" alt="card image">
                            <a href="#!" class="primary_btn">
                                
                            </a>
                        </div>
                        <h4 class="title">
                            <a href="#">
                                Biomedical Research & Innovation
                            </a>
                        </h4>
                        <p class="content">
                            Research & Scientific Development
                            Conducting and leading applied biomedical research in Nanoimmunobiotechnomedicine (NiBTM), stem cells, gene therapy, and translational medicine to advance evidence-based innovation.
                        </p>
                    </div> 
                </div>
                <div class="col-md-6">
                    <!-- card content -->
                    <div class="service_card wow animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <img src="assets/img/service/design.svg" height="48" width="48" alt="card image">
                            <a href="#!" class="primary_btn" aria-label="primary button">
                                
                            </a>
                        </div>
                        <h4 class="title">
                            <a href="#">
                                Scientific Writing & Publications
                            </a>
                        </h4>
                        <p class="content">
                            Scientific & Medical Writing
                            Authoring peer-reviewed journals, academic books, and scientific articles, translating complex biomedical research into rigorous and accessible knowledge.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- card content -->
                    <div class="service_card wow animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <img src="assets/img/service/branding-design.svg" height="48" width="48" alt="card image">
                            <a href="#!" class="primary_btn" aria-label="primary button">
                                
                            </a>
                        </div>
                        <h4 class="title">
                            <a href="#">
                                    Medical Education & Lecturing
                            </a>
                        </h4>
                        <p class="content">
                            Medical Education & Lecturing
                            Teaching and mentoring medical students and professionals in biomedical sciences, research methodology, and evidence-based medicine.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- card content -->
                    <div class="service_card wow animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <img src="assets/img/service/seo.svg" height="48" width="48" alt="card image">
                            <a href="#!" class="primary_btn" aria-label="primary button">
                            </a>
                        </div>
                        <h4 class="title">
                            <a href="#">
                                Health Communication & Public Engagement
                            </a>
                        </h4>
                        <p class="content">
                            Health Communication & Literacy
                            Communicating medical science to the public through journalism, digital platforms, and national health initiatives to improve health literacy and awareness.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~./ service area end~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    testimonial area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="testimonial-area section-space">
        <div class="container">
            <!-- section title -->
            <h2 class="section-title wow animate__animated animate__fadeInUp">
                <svg width="26" height="33" viewBox="0 0 26 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.57695 23.0121L9.57639 23.0121C4.66099 23.0051 0.677265 19.0214 0.670312 14.106V14.1054V1.59448V1.19448H1.07031H3.06914H3.46914V1.59448V14.1051C3.47558 17.4771 6.20558 20.207 9.57769 20.2132H19.9601L13.5906 13.8437L13.3078 13.5609L13.5906 13.278L15.005 11.8636L15.288 11.5807L15.5708 11.8637L25.0337 21.3332L25.3164 21.6161L25.0336 21.8988L15.5707 31.3617L15.2879 31.6445L15.005 31.3617L13.5906 29.9472L13.3078 29.6644L13.5906 29.3816L19.9601 23.0121L9.57695 23.0121Z" fill="currentcolor" stroke="currentcolor" stroke-width="0.8"/>
                </svg>  
                In The Spotlight
            </h2>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper wow animate__animated animate__fadeInUp">
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <!-- testimonial rating -->
                            <div class="testimonial-rating">
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <div class="rating-bg">
                                        <svg width="58" height="49" viewBox="0 0 58 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.6055 48.9633H57.6981V0.777868L33.6055 24.8705V48.9633Z" />
                                            <path d="M0.878906 48.9633H24.9715V0.777868L0.878906 24.8705V48.9633Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="from"></div>
                            </div>
                            <!-- testimonial content -->
                            <h6 class="title">
                                National Ambassador of Literacy (2019).
                                <br>
                                <br>
                            </h6>
                            <p class="content">
                                Appointed for contributions to advancing scientific literacy, medical education, and public understanding of health and science in Indonesia.
                            </p>
                            <!-- testimonial author details -->
                            <div class="author">
                                <img src="assets/img/testimonial/fotofinal.png" height="51" width="51" alt="author image">
                                <div class="author-info">
                                    <h6 class="name">
                                        Dito Anurogo
                                    </h6>
                                    <span class="designation">
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <!-- testimonial rating -->
                            <div class="testimonial-rating">
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <div class="rating-bg">
                                        <svg width="58" height="49" viewBox="0 0 58 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.6055 48.9633H57.6981V0.777868L33.6055 24.8705V48.9633Z" />
                                            <path d="M0.878906 48.9633H24.9715V0.777868L0.878906 24.8705V48.9633Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="from"></div>
                            </div>
                            <!-- testimonial content -->
                            <h6 class="title">
                                    Peace Ambassador – World Wide Peace Organization (WWPO), Indonesia (2022)
                            </h6>
                            <p class="content">
                                Recognized for promoting peace, humanitarian values, and cross-sector collaboration through education, science, and public engagement.
                            </p>
                            <!-- testimonial author details -->
                            <div class="author">
                                <img src="assets/img/testimonial/fotofinal.png" height="51" width="51" alt="author image">
                                <div class="author-info">
                                    <h6 class="name">
                                        Dito Anurogo
                                    </h6>
                                    <span class="designation">
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <!-- testimonial rating -->
                            <div class="testimonial-rating">
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <div class="rating-bg">
                                        <svg width="58" height="49" viewBox="0 0 58 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.6055 48.9633H57.6981V0.777868L33.6055 24.8705V48.9633Z" />
                                            <path d="M0.878906 48.9633H24.9715V0.777868L0.878906 24.8705V48.9633Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="from"></div>
                            </div>
                            <!-- testimonial content -->
                            <h6 class="title">
                                The Most Inspiring Student (2015)
                                <br>
                                <br>
                            </h6>
                            <p class="content">
                                Awarded for academic excellence, leadership, and impactful contributions in education, research, and community development.
                            </p>
                            <!-- testimonial author details -->
                            <div class="author">
                                <img src="assets/img/testimonial/fotofinal.png" height="51" width="51" alt="author image">
                                <div class="author-info">
                                    <h6 class="name">
                                        Dito Anurogo
                                    </h6>
                                    <span class="designation">
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation">                        
                    <!-- slider prev button -->
                    <div class="swiper-button-prev">
                        <svg width="23" height="8" viewBox="0 0 23 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.4305 1.83893L2.69506 1.84065L7.13363 6.93901C7.27526 7.0696 7.35932 7.25111 7.36735 7.44368C7.37538 7.63624 7.30673 7.82413 7.17646 7.96608C7.04597 8.10783 6.86461 8.19195 6.67219 8.19999C6.47978 8.20803 6.29204 8.13932 6.1502 8.00895L0.340995 1.64518C0.267121 1.57705 0.208159 1.49434 0.167829 1.40226C0.127499 1.31019 0.106677 1.21074 0.106677 1.11021C0.106677 1.00967 0.127499 0.910231 0.167829 0.818154C0.208159 0.726077 0.267121 0.643365 0.340995 0.575239L5.04778 0.575239C5.18581 0.447728 5.18809 0.747974 5.3759 0.75181C5.56371 0.755645 5.66115 0.442198 5.79387 0.575238L5.9807 0.900248C6.11096 1.0422 6.22245 0.655668 6.21442 0.848235C6.20639 1.0408 6.12233 1.22231 5.9807 1.3529L0.259965 0.661216L1.40745 0.548778L21.4305 0.384917C21.6187 0.391566 21.797 0.471069 21.9278 0.606684C22.0586 0.742298 22.1318 0.923432 22.1318 1.11192C22.1318 1.30041 22.0586 1.48155 21.9278 1.61716C21.797 1.75277 21.6187 1.83228 21.4305 1.83893Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <!-- slider next button -->
                    <div class="swiper-button-next">
                        <svg width="23" height="8" viewBox="0 0 23 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.24137 6.38373L19.9768 6.38201L15.5382 1.28365C15.3966 1.15305 15.3126 0.971545 15.3045 0.778978C15.2965 0.586412 15.3651 0.398527 15.4954 0.256575C15.6259 0.114831 15.8073 0.0307041 15.9997 0.0226671C16.1921 0.0146301 16.3798 0.0833391 16.5217 0.213708L22.3309 6.57748C22.4048 6.64561 22.4637 6.72832 22.504 6.82039C22.5444 6.91247 22.5652 7.01191 22.5652 7.11245C22.5652 7.21298 22.5444 7.31243 22.504 7.4045C22.4637 7.49658 22.4048 7.57929 22.3309 7.64742L17.6241 7.64742C17.4861 7.77493 17.4838 7.47468 17.296 7.47085C17.1082 7.46701 17.0107 7.78046 16.878 7.64742L16.6912 7.32241C16.5609 7.18046 16.4494 7.56699 16.4575 7.37442C16.4655 7.18186 16.5495 7.00035 16.6912 6.86975L22.4119 7.56144L21.2644 7.67388L1.24137 7.83774C1.05314 7.83109 0.874844 7.75159 0.744035 7.61597C0.613227 7.48036 0.540122 7.29923 0.540122 7.11073C0.540122 6.92224 0.613226 6.74111 0.744034 6.6055C0.874842 6.46988 1.05314 6.39038 1.24137 6.38373Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!-- slider pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!--~~./ testimonial area end~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    client area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="client-area overflow-hidden section-space">
        <div class="container">
            <!-- section title -->
            <h2 class="section-title wow animate__animated animate__fadeInUp">
                <svg width="26" height="33" viewBox="0 0 26 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.57695 23.0121L9.57639 23.0121C4.66099 23.0051 0.677265 19.0214 0.670312 14.106V14.1054V1.59448V1.19448H1.07031H3.06914H3.46914V1.59448V14.1051C3.47558 17.4771 6.20558 20.207 9.57769 20.2132H19.9601L13.5906 13.8437L13.3078 13.5609L13.5906 13.278L15.005 11.8636L15.288 11.5807L15.5708 11.8637L25.0337 21.3332L25.3164 21.6161L25.0336 21.8988L15.5707 31.3617L15.2879 31.6445L15.005 31.3617L13.5906 29.9472L13.3078 29.6644L13.5906 29.3816L19.9601 23.0121L9.57695 23.0121Z" fill="currentcolor" stroke="currentcolor" stroke-width="0.8"/>
                </svg>  
                SPECIALTIES, INTERESTS, AND PASSIONS
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-8">
                    <div class="client-content text-center">
                        <!-- button group -->
                        <div class="swiper logo-slider" data-reverse="false">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Nanotechnology.png" height="25" width="125" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/NIBTM.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Stem Cells.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Immunology.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Celland.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Hematology.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>

                            </div>
                        </div>
                        <!-- button group -->
                        <div class="swiper logo-slider" data-reverse="true">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Medical.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Health.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Online Health.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Creative.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Speed.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Journalism.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>

                            </div>
                        </div>
                        <!-- button group -->
                        <div class="swiper logo-slider" data-reverse="false">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Biomedical.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Leadership.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Community.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Special Needs.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Optogenetics.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Disaster.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Traditional.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                <div class="swiper-slide">
                                <a href="#" class="bd-btn-present" aria-label="client button">
                                    <img src="assets/img/client/Philately.png" height="25" width="100" alt="Dulalix">
                                </a>
                                </div>
                                

                            </div>
                        </div>
                        <!-- button group -->
                        <!-- content -->
                        <p class="content">
                            Dedicated to advancing healthcare through clinical expertise, research, and community-driven innovation.
                        </p>
                        <a href="#contact" aria-label="My Trusted Clients">
                            Contact Me <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~./ client area end~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    interest area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="interest-area section-space">
        <div class="container">
            <!-- section title -->
            <h2 class="section-title wow animate__animated animate__fadeInUp">
                <svg width="26" height="33" viewBox="0 0 26 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.57695 23.0121L9.57639 23.0121C4.66099 23.0051 0.677265 19.0214 0.670312 14.106V14.1054V1.59448V1.19448H1.07031H3.06914H3.46914V1.59448V14.1051C3.47558 17.4771 6.20558 20.207 9.57769 20.2132H19.9601L13.5906 13.8437L13.3078 13.5609L13.5906 13.278L15.005 11.8636L15.288 11.5807L15.5708 11.8637L25.0337 21.3332L25.3164 21.6161L25.0336 21.8988L15.5707 31.3617L15.2879 31.6445L15.005 31.3617L13.5906 29.9472L13.3078 29.6644L13.5906 29.3816L19.9601 23.0121L9.57695 23.0121Z" fill="currentcolor" stroke="currentcolor" stroke-width="0.8"/>
                </svg>                    
                Strategic & International Leadership
            </h2>
            <!-- interest list -->
            <div class="interest-list wow animate__animated animate__fadeInUp">
                <!-- single item -->
                <div class="single-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-1-circle" viewBox="0 0 16 16">
                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383z"/>
                        </svg>
                    </div>
                    <h6 class="title">
                        Chairman, Health Commission, Overseas Indonesian Students Association Alliance (OISAA)
                    </h6>
                </div>
                <!-- single item -->
                <div class="single-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-2-circle" viewBox="0 0 16 16">
                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306"/>
                        </svg>

                    </div>
                    <h6 class="title">
                        Head, 
                        Alliance of Indonesian Private University Lecturers (ADPERTISI)
                    </h6>
                </div>
                <!-- single item -->
                <div class="single-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-3-circle" viewBox="0 0 16 16">
                        <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318"/>
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
                        </svg>
                    </div>
                    <h6 class="title">
                        Governing Board Member,
                        Network-Preneur Initiative Center (NPIC)
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <!--~~./ interest area end~~-->

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
@endsection