@include('layouts.frontheader')
@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
       <img src="{{ asset('public/front/images/heritage -banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Our Heritage</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <h1 class="title-34 text--white">{{ $menubanner->title }}</h1>
            <p class="text-white page-header-para">{!! $menubanner->description !!}
            </p>
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
@endif

<section class="line-img-section mt-100">
    
    <div class="year-info-section">
        <div class="year-wraper">
            @foreach($milestones as $key => $milestone)
            <div class="year-info-item">
                @if($key % 2 == 0)
                    <div class="year">
                        <p class="title-24 text--white">{{ $milestone->year }}</p>
                    </div>
                    <div class="year-content com_bg_light_blue">
                        <h2 class="title-54">{{ $milestone->title }}</h2>
                        <p class="title--blue mb-3">{!! $milestone->short_description !!}</p>
                        <p class="mb-0">{!! $milestone->description !!}</p>
                    </div>
                @else
                    <div class="year-content com_bg_light_blue">
                        <h2 class="title-54">{{ $milestone->title }}</h2>
                        <p class="title--blue mb-3">{!! $milestone->short_description !!}</p>
                        <p>{!! $milestone->description !!}</p>
                        </div>

                        <div class="year">
                            <p class="title-24 text--white">{{ $milestone->year }}</p>
                        </div>

                    @endif
            </div>
            @endforeach
            {{-- <div class="year-info-item">
                <div class="year">
                    <p class="title-24 text--white">2024</p>
                </div>
                <div class="year-content com_bg_light_blue">
                    <h2 class="title-54">The Aesthetic Frontier</h2>
                    <p class="title--blue mb-3">Redefining Dermal Care</p>
                    <p>Launch of "Uncap"—our dedicated cosmeceutical channel. By applying pharmaceutical rigor to
                        skincare, we began treating skin conditions at the cellular level, merging medical science with
                        daily wellness.</p>
                </div>
            </div>
            <div class="year-info-item">
                <div class="year-content com_bg_light_blue">
                    <h2 class="title-54">Scientific Diversification</h2>
                    <p class="title--blue mb-3">Beyond the Molecule</p>
                    <p>Our founders, Manish and Nilesh Dudhwewala, identified a critical need for high-stability chronic
                        therapies in India. Alvio was established with a singular focus on Ethical Cardio-Diabetology.
                    </p>
                </div>
                <div class="year">
                    <p class="title-24 text--white">2022</p>
                </div>
            </div>
            <div class="year-info-item">
                <div class="year">
                    <p class="title-24 text--white">2020</p>
                </div>
                <div class="year-content com_bg_light_blue">
                    <h2 class="title-54">The Reach of Healing</h2>
                    <p class="title--blue mb-3">Crossing Borders</p>
                    <p>Alvio expands its national presence to 16+ states and begins its international journey, exporting
                        quality formulations to 11 countries. We became a trusted partner for over 35,000 Healthcare
                        Professionals.</p>
                </div>
            </div>
            <div class="year-info-item">
                <div class="year-content com_bg_light_blue">
                    <h2 class="title-54">Engineering Excellence</h2>
                    <p class="title--blue mb-3">The Standard of Purity</p>
                    <p>We established our state-of-the-art manufacturing facility in Roorkee, designed to meet stringent
                        WHO-GMP and ISO standards. This milestone marked our transition into a self-reliant
                        pharmaceutical manufacturer.</p>
                </div>
                <div class="year">
                    <p class="title-24 text--white">2016</p>
                </div>
            </div>
            <div class="year-info-item">
                <div class="year">
                    <p class="title-24 text--white">2012</p>
                </div>
                <div class="year-content com_bg_light_blue">
                    <h2 class="title-54">The Genesis</h2>
                    <p class="title--blue mb-3">The Foundation of Alvio Pharmaceuticals.</p>
                    <p>Our founders, Manish and Nilesh Dudhwewala, identified a critical need for high-stability chronic
                        therapies in India. Alvio was established with a singular focus on Ethical Cardio-Diabetology.
                    </p>
                </div>

            </div> --}}

            <img src="{{ asset('public/front/images/heritage_animation.png') }}" alt="heritage animation" class=" img-fluid heritage_animation">

        </div>
        <img src="{{ asset('public/front/images/line-img.png') }}" alt="line img" class="line-img">
    </div>

</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')