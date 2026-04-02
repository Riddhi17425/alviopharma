@include('layouts.frontheader')

<section class="page-header">
    <div>
        <img src="{{ asset('public/front/images/company-header-img.webp') }}" class="img-fluid" alt="page-header-img">
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <p class="text-white"><a href="{{ url('/') }}">Home</a> / Insights / {{ $blogsdetail->title }}</p>
            <h1 class="title-34 text--white mb-3">{{ $blogsdetail->sub_title }}</h1>
            <p class="text-white page-header-para mb-0">{!! $blogsdetail->header_description !!}</p>
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
                </svg></a>
        </div>
    </div>
</section>

@if($blogsdetail)
<section class="p-x mt_80">
    <div class="text-center col-9 m-auto mb-5">
        <p>{{ \Carbon\Carbon::parse($blogsdetail->date)->format('F d, Y') }}</p>
        <h2 class="title-54">{{ $blogsdetail->title }}</h2>
    </div>
    <div class="row gx-lg-5 blogs_details">

        <div class="col-md-6 col-lg-5">
            <img src="{{ asset('public/Blogs/detail_image/'.$blogsdetail->detail_image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($blogsdetail->detail_image, PATHINFO_FILENAME)) }}" class="img-fluid">
        </div>

        <div class="col-md-6 col-lg-7">
           {!! $blogsdetail->short_description !!}
        </div>

        <div class="col-12">
            {!! $blogsdetail->description !!}
        </div>

        <div class="col-12">
            <div class="blogs_details_bg com_bg_light_blue">
                <h3 class="title-34 mb-3">Support Better Long-Term Patient Outcomes</h3>
                <p class="mb-0" style="color:var(--blue-heading);">Lorem ipsum dolor sit amet consectetur. Feugiat eu ipsum quam
                    accumsan porttitor dolor dolor.
                    Elementum dolor tellus rhoncus non vestibulum magna neque. Senectus lacus nec tristique viverra
                    dignissim. Gravida varius augue odio est </p>
                <a href="#" class="com_btn2">Learn About Chronic Care Approaches</a>
                <span class="blo_imgs_noise_1">
                    <img src="{{asset('public/front/images/blogs-vectoer.png')}}" alt="image">
                </span>
                 <span class="blo_imgs_noise_2">
                    <img src="{{asset('public/front/images/blogs-vectoer.png')}}" alt="image">
                </span>
 
            </div>
        </div>

        {{-- <div class="col-12">
            <img src="{{ asset('public/Blogs/cta_image/'.$blogsdetail->cta_image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($blogsdetail->cta_image, PATHINFO_FILENAME)) }}" class="img-fluid">
           
        </div> --}}

        <div class="col-12">
            <h4 class="title-24">Conclusion</h4>
            <p class="mb-0">{!! $blogsdetail->conclusion !!}</p>
        </div>

    </div>
</section>
@endif
@include('layouts.fronttop-footer')
@include('layouts.frontfooter')