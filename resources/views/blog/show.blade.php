@extends('layouts.main')
@section('style')
    <style>
        p{
            line-height: 1.8;
            margin: 2em 0;
            text-align: justify !important;
        }
    </style>
@endsection
@section('content')
<main>
    <section class="blog-details-area" id="blog">
        <div class="container">
            <div class="watermark-title text-center" data-watermark="Blog Details">
                <!-- section title here -->
                <h6 class="title">
                    BLOG DETAILS
                </h6>
            </div>
            <!--banner content-->
            <div class="banner-wrapper">
                <img src="{{ Storage::url($post->image) }}" alt="banner image">
                <!--banner meta content md-->
                <div class="meta-info">
                    <div class="single-meta">
                        <i class="fas fa-user text-white" aria-hidden="true"></i>
                        <h6 class="text">
                            {{$post->profile->full_name}}
                        </h6>
                    </div>
                    <div class="single-meta">
                        <i class="fas fa-folder text-white" aria-hidden="true"></i>
                        <h6 class="text">
                            {{$post->category->name}}
                        </h6>
                    </div>
                    <div class="single-meta">
                        <i class="fas fa-calendar text-white" aria-hidden="true"></i>
                        <h6 class="text">
                            {{$post->created_at->format('d F, Y')}}
                        </h6>
                    </div>
                </div>
            </div>

            <!--blog description-->
            <div class="blog-description">
                <h2 class="title">
                    {{$post->title}}
                </h2>
                <div class="content">
                    {!!$post->body!!}
                </div>
            </div>

            <div class="blog-footer">
                <div class="social-icon-wrapper">
                    <h6 class="text">
                        Share:
                    </h6>
                    <!-- Social Media Icons -->
                    <div class="social-icon">
                        <!-- Icon Item -->
                        
                        <!-- Icon Item -->
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" 
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Twitter"
                            aria-label="twitter">
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.89663 10.5044C3.9582 10.4871 3.13153 10.004 2.64 9.27582C2.91344 9.26145 3.17979 9.21804 3.43524 9.14827L3.40178 8.17569C2.37028 7.96889 1.54492 7.18996 1.26923 6.18358C1.54849 6.25967 1.84055 6.3047 2.14106 6.31433L3.8879 6.37034L2.43499 5.39894C1.68787 4.89942 1.19747 4.04693 1.19747 3.08087C1.19747 2.82881 1.2307 2.5851 1.29291 2.35355C2.97455 4.10238 5.29601 5.23104 7.88193 5.36064L8.54326 5.39379L8.39411 4.74865C8.34721 4.54574 8.32204 4.33226 8.32204 4.11302C8.32204 2.57508 9.56809 1.32812 11.1043 1.32812C11.9046 1.32812 12.6271 1.66592 13.1352 2.2078L13.3248 2.41007L13.5968 2.35634C13.8191 2.31243 14.0377 2.25822 14.2519 2.19422C14.1371 2.29118 14.0143 2.37908 13.8847 2.45679L14.2011 3.38211C14.3036 3.36985 14.4054 3.35544 14.5065 3.33892C14.3743 3.45283 14.2372 3.56114 14.0957 3.6634L13.8772 3.82123L13.889 4.09048C13.8948 4.22419 13.8977 4.35856 13.8977 4.49361C13.8977 8.62013 10.763 13.3402 5.0591 13.3402C3.99555 13.3402 2.97721 13.1513 2.03372 12.806C3.2128 12.6016 4.29262 12.1066 5.19609 11.3976L6.30139 10.5303L4.89663 10.5044Z" stroke="currentColor"/>
                            </svg>
                        </a>
                        <!-- Icon Item -->
                        <a href="javascript:void(0)" 
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Instagram"
                            onclick="copyLink()"
                            aria-label="instagram">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.36087 0.529297C2.24296 0.529297 0.519531 2.25409 0.519531 4.37368V9.69666C0.519531 11.8162 2.24296 13.541 4.36087 13.541H9.67965C11.7976 13.541 13.521 11.8162 13.521 9.69666V4.37368C13.521 2.25409 11.7976 0.529297 9.67965 0.529297H4.36087ZM4.36087 1.12074H9.67965C11.4781 1.12074 12.93 2.57377 12.93 4.37368V9.69666C12.93 11.4966 11.4781 12.9496 9.67965 12.9496H4.36087C2.56239 12.9496 1.11051 11.4966 1.11051 9.69666V4.37368C1.11051 2.57377 2.56239 1.12074 4.36087 1.12074ZM10.5661 2.89507C10.4094 2.89507 10.2591 2.95738 10.1482 3.0683C10.0374 3.17921 9.97514 3.32965 9.97514 3.48651C9.97514 3.64337 10.0374 3.79381 10.1482 3.90472C10.2591 4.01564 10.4094 4.07795 10.5661 4.07795C10.7229 4.07795 10.8732 4.01564 10.984 3.90472C11.0948 3.79381 11.1571 3.64337 11.1571 3.48651C11.1571 3.32965 11.0948 3.17921 10.984 3.0683C10.8732 2.95738 10.7229 2.89507 10.5661 2.89507ZM7.02026 3.78223C5.22864 3.78223 3.7699 5.24212 3.7699 7.03517C3.7699 8.82821 5.22864 10.2881 7.02026 10.2881C8.81189 10.2881 10.2706 8.82821 10.2706 7.03517C10.2706 5.24212 8.81189 3.78223 7.02026 3.78223ZM7.02026 4.37368C8.4925 4.37368 9.67965 5.56176 9.67965 7.03517C9.67965 8.50857 8.4925 9.69666 7.02026 9.69666C5.54802 9.69666 4.36087 8.50857 4.36087 7.03517C4.36087 5.56176 5.54802 4.37368 7.02026 4.37368Z" fill="currentColor" stroke="#5C5D68" stroke-width="0.5"/>
                            </svg>     
                        </a>
                    </div>
                </div>
                <!-- <div class="tags">
                    <h6 class="label">
                        Tags:
                    </h6>
                    tags button here 
                    <a href="#" class="tag-btn">
                        HTML5
                    </a>
                    <a href="#" class="tag-btn">
                        CSS3
                    </a>
                    <a href="#" class="tag-btn">
                        Design
                    </a>
                    <a href="#" class="tag-btn">
                        JavaScript
                    </a>
                </div> -->
            </div>
        </div>
    </section>
</main>
@endsection
@section('local-js')
    <script>
        function copyLink() {
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                alert('Lnk berhasil di copy silahkan buka instagram untuk share halaman blog ini');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>   
@endsection