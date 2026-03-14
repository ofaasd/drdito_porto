@extends('layouts.main')
@section('style')
    <style>
        .text-blue-900 {
            --tw-text-opacity: 1;
            color: rgb(30 58 138 / var(--tw-text-opacity, 1));
        }
        .text-justify {
            text-align: justify !important;
        }
        .title_container{
            container-type: inline-size;
            width:100%;
        }
        .title_text{
            font-size: 6cqw !important;
        }
        .title_text2 {
            font-size: 13pt !important;
        }
        ul.custom-list {
            list-style-type: none; /* Menghilangkan bullet point bawaan */
            padding: 0;
        }
        ul.custom-list li {
            margin-bottom: 15px;
            font-size: 18px;
        }
        ul.custom-list li a {
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
            _border-bottom:1px solid #afafaf;
            border-top:1px solid #afafaf;
            padding-top:10px;
            margin-top:5px;
        }
        ul.custom-list li a:hover {
            color: #007bff; /* Warna berubah menjadi biru saat kursor diarahkan */
        }
        ul.custom-list li i {
            margin-right: 15px;
            font-size: 24px;
            width: 30px;
            text-align: center;
            color: #007bff; /* Warna ikon */
        }
    </style>
@endsection
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
                        <div class="title_container">
                            <h1 class="hero-title wow animate__animated animate__fadeInUp title_text">
                                {{$profile->full_name}} {{$profile->titles}}
                            </h1>
                        </div>
                        <div class="sub-content  wow animate__animated animate__fadeInUp mt-1 " style="padding-left:0; padding-top:0">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div class="space-y-6">
                                <p class="text-lg text-gray-700 leading-relaxed mb-3 text-justify">
                                    
                                    {!! $profile->description !!}
                                </p>
                                <div class="p-3 rounded-2xl border border-blue-100 " style="background: linear-gradient(to right, #F4F0FD 90%, #FFFFFF);">
                                    <h4 class="font-bold text-blue-900 mb-4 flex items-center gap-2" style="font-size:14pt;">
                                        <i class="fa-solid fa-bullseye text-blue-600"></i> {{ __('welcome.core_focus') }}
                                    </h4>
                                    <ul class="grid grid-cols-1 gap-3" style="display:flex; flex-direction: column;">
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            {{ __('welcome.nanoimmunobiotechnomedicine') }}
                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            {{ __('welcome.nanotechnology') }}
                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            {{ __('welcome.biomedical_research') }}
                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            {{ __('welcome.immunology') }}
                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            {{ __('welcome.hematopsychiatry') }}
                                        </li>
                                        <li class="flex items-start gap-3 text-gray-700">
                                            <i class="fa-solid fa-check-circle text-blue-500 mt-1"></i>
                                            {{ __('welcome.medical_practice') }}
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
                                    {{ __('welcome.academic_journals') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <div class="funfact-box">
                                <h2>
                                    <span class="counter">20</span>+
                                </h2>
                                <p>
                                    {{ __('welcome.books') }}
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
                            Physician, Researcher, Lecturer,  Professional Trainer, and Writer
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
                                        <td class="name">Name</td>
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
                                        <td class="name">ID Web of Science</td>
                                        <td class="dot">:</td>
                                        <td class="value">AAN64652020</td>
                                    </tr>
                                    <tr>
                                        <td class="name">ID ORCID</td>
                                        <td class="dot">:</td>
                                        <td class="value">0000000232923139</td>
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
                @foreach($profile->specialties as $index => $specialty)
                <div class="col-md-6 specialty-item" data-specialty-index="{{ $index }}">
                    <!-- card content -->
                    <div class="service_card wow animate__animated animate__fadeInUp">
                        <div class="card-header">
                            <img src="assets/img/service/coding.svg" height="48" width="48" alt="card image">
                            @if(!empty($specialty->external_link))
                            <a href="" target="_blank" class="primary_btn" style="font-size:11pt;">
                                <i class="fa fa-file-pdf"></i> Publication
                            </a>
                            @endif
                        </div>
                        
                        <h4 class="title">
                            <div class="title_container">
                                <a href="#" class="title_text2">
                                    {{ $specialty->name }}
                                </a>
                            </div>
                        </h4>
                        
                        <p class="content text-justify">
                            {!! $specialty->description !!}
                        </p>
                    </div> 
                </div>
                @endforeach
                <div class="col-12">
                    <div class="all-blogs-button text-center mt-4">
                        <a href="#" id="viewAllBtn" class="btn-primary-gradient" aria-label="View All Specialties">
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
                @foreach($posts as $post)
                <!--single blog item -->
                <div class="col-md-6">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="post-body">
                            <div class="post-thumbnail">
                                <a href="{{ route('blog.show', $post->slug) }}" aria-label="blog image">
                                    <picture>
                                        <source media="(min-width: 1400px)" srcset="{{ Storage::url($post->image) }}">
                                        <source media="(max-width: 1399px)" srcset="{{ Storage::url($post->image) }}">
                                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width: 100%; height: 300px; object-fit: cover; display: block;">
                                    </picture>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#" class="category_btn" aria-label="Branding">
                                        {{$post->category->name}}
                                    </a>
                                    <span class="date">
                                        {{ $post->published_at->format('F j, Y') }}
                                    </span>
                                </div>
                                <h5 class="post-title">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h5>
                                <a href="{{ route('blog.show', $post->slug) }}" class="post-single-link" aria-label="blog details link">
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
                                    {{$post->profile->full_name}} | {{ $post->slug }} views
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
            @endforeach   
                

                <div class="col-12">
                    <div class="all-blogs-button text-center mt-4">
                        <a href="#" class="btn-primary-gradient" aria-label="View All Blogs">
                            View All Blogs
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="award-area section-space" id="award">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="Award Story" >
                <h6 class="title">
                    Award Story
                </h6>
            </div>
            <div class="row g-4">
                
                <!--single blog item -->
                <div class="col-md-12">
                    <div class="post-item wow animate__animated animate__zoomIn" 
                        data-wow-delay=".1s">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-content">
                                    <div class="text-center col-md-12">
                                        <h4>My Book Was Received in Person by the President of Taiwan</h4><br />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/img/blog/cover.png')}}" width="80%" align="center">
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table text-center">
                                                <tr>
                                                    <td><img src="{{asset('assets/img/blog/president-taiwan.png')}}" width="80%" align="center"></td>
                                                </tr>
                                                <tr>
                                                    <td><h2>PRESIDENT TAIWAN</h2></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>Lai Ching-te</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        賴清德
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <img src="{{asset('assets/img/blog/email.jpeg')}}" width="80%" align="center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!--~~./ blog-area end~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Protfolio-area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="gallery-area section-space" id="gallery">
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
                @foreach($profile->galleries as $gallery)
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 grid-item {{ $gallery->category }}">
                        <div class="single-protfolio">
                            
                            <img src="{{ $gallery->image }}" 
                                class="lazyload img-fluid" 
                                alt="{{ $gallery->title }}">
                                
                            <div class="details">
                                <a href="{{ $gallery->link ?? '#' }}" class="details-link" aria-label="protfolio single item">
                                    
                                    <h4 class="text-white">{{ $gallery->title }}</h4>
                                    <p class="text-white">{{ $gallery->description }}</p>
                                    
                                </a>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
                <!-- protfolio item -->
                
            </div>
        </div>
    </div>
    <!--~~./ Protfolio-area end~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    blog-area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    
    <!--~~./ blog-area end~~-->

    

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Resume area start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="resume-area section-space" id="resume">
        <div class="container">
            <!-- section title -->
            <div class="watermark-title text-center wow animate__animated animate__fadeInUp" data-watermark="Resume">
                <h6 class="title">
                    OTHER DETAILS
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
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#experiences" type="button">
                            Experiences
                        </button>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#achievments_qualification" type="button">
                            Achievements
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Academic_qualification" type="button">
                            Awards
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
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#other_publication" type="button">
                            Other Publication
                        </button>
                    </li>
                    
                </ul>
            </div>

            <!-- tab content -->
            <div class="tab-content  wow animate__animated animate__fadeInUp">
                <div class="tab-pane fade show active" id="work_experience" role="tabpanel" tabindex="0">
                    <div class="row g-4 gx-xxl-5" style="font-size: 8px;">
                        <!-- tab single item -->
                        
                                <!-- 1 -->
                                @foreach($profile->educations as $education)
                                <div class="col-md-6">
                                     <div class="resume-wrapper">
                                        <div class="resume-content">
                                            <span class="resume-meta">
                                                    {{$education->start_year}} - {{$education->end_year}}
                                            </span>
                                            <h3 class="title">
                                                    <a href="">{{$education->institution}}</a>
                                            </h3>
                                            <a href="#" class="institute-name">
                                                {{$education->field_of_study}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    </div>
                    <div class="col-12">
                    
                </div>
                </div>
                
                <div class="tab-pane fade" id="Academic_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                         @foreach($profile->awards as $award)
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        {{$award->year}}
                                    </span>
                                    <h3 class="title">
                                        <a href="">{{$award->title}}, {{$award->issuer}}</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        {{$award->description}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="achievments_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        @foreach($profile->achievements as $achive)
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        {{$achive->year}}
                                    </span>
                                    <h3 class="title">
                                        <a href="">{{$achive->title}}</a>
                                    </h3>
                                    <a href="#!" class="institute-name">
                                        <i>{{$achive->issuer}}</i>
                                    </a>
                                </div>
                            </div>   
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="certifications_qualification" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        @foreach($profile->certifications as $certification)
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <h3 class="title">
                                        <a href="">{{$certification->name}}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="book_experience" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        @forelse($books as $book)
                            <div class="col-md-6 mb-4">
                                <div class="resume-wrapper h-100">
                                    <div class="resume-content">
                                        <span class="resume-meta">
                                            <i class="bi bi-calendar3"></i> {{ $book->year ?? 'Tahun tidak diketahui' }}
                                        </span>
                                        
                                        <h3 class="title">
                                            <a href="{{ $book->link ?? '#!' }}" {{ $book->link ? 'target="_blank"' : '' }}>
                                                {{ $book->title }}
                                            </a>
                                        </h3>
                                        
                                        @if($book->publisher_or_journal)
                                            <div class="publisher-info text-muted mb-2" style="font-size: 0.9rem;">
                                                <i class="bi bi-journal-bookmark"></i> {{ $book->publisher_or_journal }}
                                            </div>
                                        @endif
                                        
                                        <a href="#!" class="institute-name" style="cursor: default;">
                                            <i class="bi bi-pen"></i> 
                                            {!! preg_replace('/(Anurogo,?\s*D\.?)/i', '<strong>$1</strong>', $book->authors) !!}
                                        </a>
                                        <br /><br />
                                        @if(!empty($book->link))
                                            <a href="{{$book->link}}" class="btn-primary-gradient" target="_blank">
                                                <i class="fa-solid fa-book"></i> &nbsp; Book Details
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center">Belum ada data buku.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="other_publication" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                        @forelse($publications as $pub)
                            <div class="col-md-6 mb-4">
                                <div class="resume-wrapper h-100">
                                    <div class="resume-content">
                                        <span class="resume-meta">
                                            <i class="bi bi-calendar3"></i> {{ $pub->year ?? 'Tahun tidak diketahui' }}
                                        </span>
                                        
                                        <h3 class="title">
                                            <a href="{{ $pub->link ?? '#!' }}" {{ $pub->link ? 'target="_blank"' : '' }}>
                                                {{ $pub->title }}
                                            </a>
                                        </h3>
                                        
                                        @if($pub->publisher_or_journal)
                                            <div class="publisher-info text-muted mb-2" style="font-size: 0.9rem;">
                                                <i class="bi bi-journal-bookmark"></i> {{ $pub->publisher_or_journal }}
                                            </div>
                                        @endif
                                        
                                        <a href="#!" class="institute-name" style="cursor: default;">
                                            <i class="bi bi-pen"></i> 
                                            {!! preg_replace('/(Anurogo,?\s*D\.?)/i', '<strong>$1</strong>', $pub->authors) !!}
                                        </a>
                                        <br /><br />
                                        @if(!empty($pub->link))
                                            <a href="{{$pub->link}}" class="btn-primary-gradient" target="_blank">
                                                <i class="fa-solid fa-book"></i> &nbsp; Publication Details
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center">Belum ada data buku.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="experiences" role="tabpanel" tabindex="0">
                    <div class="row g-4 g-xl-5">
                        <!-- tab single item -->
                         @foreach($profile->experiences as $exp)
                        <div class="col-md-6">
                            <div class="resume-wrapper">
                                <div class="resume-content">
                                    <span class="resume-meta">
                                        
                                    </span>
                                    <h3 class="title">
                                        <a href="">{{$exp->position}} <br />({{$exp->company}})</a> 
                                    </h3>
                                    
                                    <a href="#!" class="institute-name">
                                        {{$exp->start_date}} - {{$exp->end_date}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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