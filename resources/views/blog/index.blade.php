@extends('layouts.main')
@section('content')
<main>
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
            </div>
        </div>
    </div>
</main>
@endsection