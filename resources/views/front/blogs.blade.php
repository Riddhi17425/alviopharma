@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
       <img src="{{ asset('public/front/images/blogs-banner.webp') }}" class="img-fluid" alt="page-header-img">
         <p class="text-white inner_hero_nav_link
         "><a href="{{ url('/') }}">Home</a> / Insights</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <h1 class="title-34 text--white mb-3">{{ $menubanner->title }}</h1>
            <p class="text-white page-header-para">{!! $menubanner->description !!}</p>
        </div>
        <div class="page-header-btn">
            <a href="{{ route('contact') }}" target="_blank">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="{{ route('contact') }}" target="_blank" class="common-arrow-img"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z"
                        fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endif 

<section class="contact p-x mt_80">
    <div class="row g-lg-5">
         @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <div class="blogs">
                    <img src="{{ asset('public/Blogs/front_image/'.$blog->front_image) }}" alt="blogs" class="w-100">
                    <p class="blogs_data">{{ \Carbon\Carbon::parse($blog->date)->format('F d, Y') }}</p>
                    <a href="{{ route('blogdetail', ['url' => $blog->url]) }}">
                        <p class="title-24 mb-0">{{$blog->title}}</p>
                    </a>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-md-6 col-lg-4">
            <div class="blogs">
                <img src="{{ asset('public/front/images/blogs5.png') }}" alt="blogs" class="w-100">
                <p class="blogs_data">May 12,2025</p>
                <p class="title-24 mb-0">How Nutraceuticals Support Daily Wellness & Immunity</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="blogs">
                <img src="{{ asset('public/front/images/blogs4.png') }}" alt="blogs" class="w-100">
                <p class="blogs_data">May 12,2025</p>
                <p class="title-24 mb-0">The Rise of Derma Care in India: Science Behind Healthy Skin</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="blogs">
                <img src="{{ asset('public/front/images/blogs3.png') }}" alt="blogs" class="w-100">
                <p class="blogs_data">May 12,2025</p>
                <p class="title-24 mb-0">Understanding the Cardio-Metabolic Continuum</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="blogs">
                <img src="{{ asset('public/front/images/blogs2.png') }}" alt="blogs" class="w-100">
                <p class="blogs_data">May 12,2025</p>
                <p class="title-24 mb-0">Beyond Blood Sugar: A Holistic Approach to Diabetic Cardiac Risk</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="blogs">
                <img src="{{ asset('public/front/images/blogs1.png') }}" alt="blogs" class="w-100">
                <p class="blogs_data">May 12,2025</p>
                <p class="title-24 mb-0">The Skin Barrier Explained: Foundation of Healthy Skin</p>
            </div>
        </div> --}}
    </div>
</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')