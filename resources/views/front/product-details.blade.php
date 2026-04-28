@include('layouts.frontheader')

<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/rasavio-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> /<a href="{{ url('/') }}">
                Therapeutic Areas </a> / {{ $productDetails->divisions->name }} / {{ $productDetails->category->name }}™ {{ $productDetails->name }}</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">Targeted Management of Hyperpigmentation & Uneven Skin Tone</h1>
            <p class="text-white page-header-para">{!! $productDetails->short_description !!}</p>
        </div>
        <div class="page-header-btn">
            <a href="{{ route('contact') }}">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="#" class="common-arrow-img"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z"
                        fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
    </div>
</section>


<section class="intro-section p-x mt-100" data-aos="fade-up">
    <div class="row gy-3 gy-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('public/front/images/product-detail.png') }}" alt="images" class="img-fluid">
        </div>

        <div class="col-md-8 ps-md-5" data-aos="fade-left">
            <div>
                <p>{!! $productDetails->short_description !!}</p>
                <h2 class="title-54">{{ $productDetails->name }}</h2>
                <p> <b class="title--blue">Divisions:</b> {{ $productDetails->divisions->name }}</p>
                <p> <b class="title--blue">Category:</b> {{ $productDetails->category->name }}</p>
            </div>
            {!! $productDetails->description !!}
            {{-- <div class="my-4">
                <h5 class="title-24 title--blue">Key Benefits</h5>
                <p>{!! $productDetails->short_description !!}</p>
            </div>

            <div>
                <h5 class="title-24 title--blue">Key Benefits</h5>
                {!! $productDetails->description !!}
            </div> --}}
        </div>
    </div>
</section>

<section class="intro-section p-x mt-100 mb-100 text-center">
    <h2 class="title-54">Ingredient Descriptions</h2>
    <div class="mt-40">
        <p>Rasavio™ Nomo Spot Serum is indicated for the management of pigmentation disorders associated with melanin
            dysregulation, inflammatory processes, and environmental exposure. It may be recommended as a standalone
            topical or as part of combination dermatological therapy.</p>
    </div>


    <div class="row g-4 mt-40 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
        @foreach ($ingrediant_details as $ingrediant_detail)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="manu_card com_bg_light_blue">
                    <h4 class="title-34 mb-3">{{ $ingrediant_detail->title }}</h4>
                    <p class="mb-0">{!! $ingrediant_detail->description  !!}</p>
                </div>
            </div>
        @endforeach
       

        {{-- <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="manu_card com_bg_light_blue">
                <h4 class="title-34 mb-3">Hyaluronic Acid</h4>
                <p class="mb-0">Acts as a potent anti-aging agent, reduces fine wrinkles, increases skin elasticity, and
                    provides deep, long-lasting essential moisturizing.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="manu_card com_bg_light_blue">
                <h4 class="title-34 mb-3">Coffee Arabica</h4>
                <p class="mb-0">Specialized extract that reduces the appearance of cellulite, gently exfoliates the
                    surface, and significantly brightens those stubborn dark circles.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="manu_card com_bg_light_blue">
                <h4 class="title-34 mb-3">Sweet Almond Oil</h4>
                <p class="mb-0">Nourishes the delicate skin, reduces puffiness, treats chronic dryness, reverses sun
                    damage, and ensures a very smooth skin texture.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="manu_card com_bg_light_blue">
                <h4 class="title-34 mb-3">Jojoba Oil</h4>
                <p class="mb-0">Helps in natural collagen synthesis, is exceptionally rich in Vitamin E, and effectively
                    reduces the visible effects of aging.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="manu_card com_bg_light_blue">
                <h4 class="title-34 mb-3">Vitamin E</h4>
                <p class="mb-0">Helps smooth the skin, works on reducing scars and stretch marks, and provides deep
                    nourishment with essential Vitamin E.</p>
            </div>
        </div> --}}

    </div>

</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')