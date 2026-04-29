@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/our-company-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Our Company</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white mb-3">{{ $menubanner->title }}</h1>
            <p class="text-white page-header-para">{!! $menubanner->description !!}</p>
        </div>
        <div class="page-header-btn">
            <a href="{{ route('contact') }}" target="_blank">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="{{ route('contact') }}" target="_blank" class="common-arrow-img"><svg width="32" height="32"
                    viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z"
                        fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
    </div>
</section>
@endif

<section class="intro-section p-x mt-100">
    <div class="row mb-40">
        <div class="col-xl-4 col-lg-5 col-md-12" data-aos="fade-right">
            <p>About Alvio Pharma</p>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12" data-aos="fade-up">
            <h2 class="title-54 title--blue mb-40">A Trusted Partner in Modern Healthcare. </h2>

            <p>Alvio Pharmaceuticals Pvt. Ltd. is a fast-growing healthcare company engaged in the marketing of
                high-quality finished pharmaceutical formulations. Driven by a clear purpose to improve lives, we focus
                on delivering reliable and affordable healthcare solutions across diverse therapeutic segments. </p>

            <p>With a strong foundation in ethical marketing and a growing presence across India, Alvio has established
                itself as a trusted partner among healthcare professionals. Our portfolio spans chronic therapies
                including cardiovascular and anti-diabetic segments, along with expanding focus areas in dermatology,
                cosmetology, and nutraceuticals. </p>

            <p>Backed by a dedicated team of professionals and a commitment to quality, consistency, and innovation, we
                continue to strengthen our reach and build meaningful healthcare impact across the markets we serve.
            </p>
        </div>
    </div>

    <div class="row gy-3 gy-lg-0 counter-section">
        <div class="col-xl-3" data-aos="fade-up" data-aos-delay="0">
            <div class="counter-item company-counter-item com_bg_light_blue">

                <h3 class="counter-number" data-target="10">10+</h3>
                <p class="title-24 title--light-blue">Years of Excellence </p>

            </div>
        </div>
        <div class="col-xl-3" data-aos="fade-up" data-aos-delay="100">
            <div class="counter-item company-counter-item com_bg_light_blue">
                <h3 class="counter-number" data-target="350">350+</h3>
                <p class="title-24 title--light-blue">Team Members </p>
            </div>
        </div>
        <div class="col-xl-3" data-aos="fade-up" data-aos-delay="200">
            <div class="counter-item company-counter-item com_bg_light_blue">
                <h3 class="counter-number" data-target="300">300+</h3>
                <p class="title-24 title--light-blue">Molecules in Portfolio</p>
            </div>
        </div>
        <div class="col-xl-3" data-aos="fade-up" data-aos-delay="300">
            <div class="counter-item company-counter-item com_bg_light_blue">
                <h3 class="counter-number" data-target="35">35K+</h3>
                <p class="title-24 title--light-blue">Healthcare professionals connected</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.vision-mission')

<section class="explore-state mt-100" data-aos="fade-up">
    <div class="p-x">
        <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="200">

            <div class="col-lg-6">
                <h2 class="title-54 mb-40" data-aos="fade-right">Expanding Access. Strengthening Healthcare Across
                    India.</h2>
                <p class="mb-3" data-aos="fade-up">Alvio Pharma's national operations form the foundation of our growth.
                    With a team of 350+
                    professionals and a strong network reaching over 35,000 healthcare providers, we are committed to
                    making
                    advanced and affordable healthcare accessible across India.</p>
                <p>Our approach is guided by ethical practices, compliance, and a deep understanding of regional
                    healthcare needs-ensuring consistent delivery and long-term impact. </p>
                <div class="state-accordion mt-40">
                    <div class="accordion" id="accordionExample">

                        @foreach($units as $unit)
                        @php
                            $collapseId = "collapse".$loop->index;
                            $headingId = "heading".$loop->index;
                        @endphp
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="{{ $headingId }}">
                                <button class="accordion-button title-34 {{ $loop->first ? '' : 'collapsed' }}"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                    aria-controls="{{ $collapseId }}">
                                    {{ $unit->title }}
                                </button>
                            </h4>
                            <div id="{{ $collapseId }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!! $unit->description !!}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

           <div class="col-lg-6">
                <div class="images-only">
                    @foreach($units as $unit)
                    <img src="{{ asset('public/homemapimage/'.$unit->image) }}" 
                        data-original-src="{{ asset('public/homemapimage/'.$unit->image) }}"
                        data-alt-src="{{ asset('public/homemapimage/'.$unit->state_image) }}" alt="{{ $unit->title }}"
                        class="accordion-preview-img img-fluid" 
                        data-panel="collapse{{ $loop->index }}"
                        style="cursor: pointer;">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="principles-section p-x mt-100" data-aos="fade-up">
    <div class="row" data-aos="zoom-in" data-aos-delay="200">
        <div class="col-xl-4 col-lg-5 col-md-12" data-aos="fade-right">
            <p>Our Purp😄se</p>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12" data-aos="fade-left">
            <h2 class="title-54 title--blue mb-40">Improving Lives</h2>

            <p class="mb-0">”Our purpose “Improving Lives”’ encapsulates our commitment to making a positive impact
                across various
                dimensions of our engagement, ranging from healthcare professionals to patients, channel partners, and
                our dedicated team. Through this ethos, we strive to contribute meaningfully to the well-being and
                betterment of individuals and communities, aligning our efforts with the broader goal of improving lives
                in every facet of our operations.”</p>
        </div>
    </div>
    <div class="principles-flex mt-40" data-aos="fade-up" data-aos-delay="300">
        <div class="principles-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="0">
            <p class="title-80">01.</p>
            <p class="title--blue mb-0">Reputation to Cure</p>
            <h5 class="principles-title">Doctors</h5>
            <p class="mb-0">Empowering healthcare professionals with trusted pharmaceutical solutions to enhance their
                ability to
                heal.</p>
        </div>
        <div class="principles-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="150">
            <p class="title-80">02.</p>
            <p class="title--blue mb-0">Health</p>
            <h5 class="principles-title">Patients</h5>
            <p class="mb-0">Delivering quality medicines that improve patient outcomes and contribute to healthier
                lives.</p>
        </div>
        <div class="principles-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="300">
            <p class="title-80">03.</p>
            <p class="title--blue mb-0">Healthy Business</p>
            <h5 class="principles-title">Channel Partners</h5>
            <p class="mb-0">Building sustainable partnerships that drive mutual growth and success in the healthcare
                ecosystem.</p>
        </div>
        <div class="principles-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="450">
            <p class="title-80">04.</p>
            <p class="title--blue mb-0">Healthy Career</p>
            <h5 class="principles-title">Employees</h5>
            <p class="mb-0">Fostering a supportive environment where talent thrives and careers flourish with purpose.
            </p>
        </div>

    </div>
</section> -->

<section class="our_val_main p-x com_bg_light_blue mt-100 d-none">
    <div class="sco_wra_our_val" id="scrollWrapper">
        <div class="sti_con_our_val">
            <div class="our_val_head">
                <h2 class="title-54 title--blue">Our Values</h2>
                <h3>H. E. A. L.</h3>
                <div class="nav-links">
                    <span id="nav-0" class="active">Health</span> &bull;
                    <span id="nav-1">Excellence</span> &bull;
                    <span id="nav-2">Accountability</span> &bull;
                    <span id="nav-3">Longevity</span>
                </div>
            </div>

            <div class="content-area">
                <div class="left-side">
                    <div class="big-letter" id="displayLetter">H</div>
                </div>
                <div class="right-side" id="rightContent">
                    <div class="title-24 title--blue mb-2" id="displayNum">01</div>
                    <div class="title-54 mb-40 title--dark" id="displayTitle">Health</div>
                    <div class="description" id="displayDesc">
                        Our health initiatives resonate with every stakeholder. Patients have access to quality and
                        affordable treatment, while doctors improve patient health with skillful medical practices.
                        Channel partners benefit from widely available channels, suppliers witness predictable and
                        mutual growth, and employees thrive in a workplace encouraging continuous personal and
                        professional development.
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>



<section class="mt-100 p-x d-none">
    <div class="mb-40 text-center">
        <!-- <p>Our Values</p> -->
        <h2 class="title-54 title--blue mb-2">Believe, Adapt, and Behave</h2>
        <p>We encapsulate our core values through B.A.B Believe,
            Adapt, and Behave, creating a dynamic and purpose-driven organizational culture.</p>
    </div>

    <div class="bab-container">

        <svg class="bab-svg" viewBox="0 0 1200 600" xmlns="http://www.w3.org/2000/svg">
            <path class="animated-line" d="M 200 50 L 600 50" />

            <path class="animated-line" d="M 1000 50 L 600 50" />

            <path class="animated-line" d="M 600 200 L 600 420" />
        </svg>

        <div class="bab-grid">
            <div class="bab-col-side bab-col-side-left">
                <div class="circle-small">BELIEVE</div>
                <p class="bab-text">We believe in the power of healthcare to transform lives. Our conviction drives us
                    to develop and deliver medicines that make a real difference in patient outcomes.</p>
            </div>

            <div class="bab-col-center">
                <div class="circle-large">
                    <img src="{{ asset('public/front/images/logo_red.svg')}}" alt="ALVIO Logo"
                        style="max-width: 180px;">
                </div>

                <div class="bab-col-side bab-col-side-bottom">
                    <div class="circle-small">ADAPT</div>
                    <p class="bab-text">We adapt to the ever-changing healthcare landscape, embracing new technologies,
                        responding to market needs, and evolving our practices to stay at the forefront.</p>
                </div>
            </div>

            <div class="bab-col-side bab-col-side-right">
                <div class="circle-small">BEHAVE</div>
                <p class="bab-text">We behave with integrity, ethics, and professionalism in all our interactions. Our
                    conduct reflects our values and builds trust with every stakeholder we engage with.</p>
            </div>
        </div>

    </div>
</section>

<section class="mt-100 p-x">

    <div class="mb-40 text-center">
        <h2 class="title-54 title--blue mb-2">Believe, Adapt, and Behave</h2>
        <p class="mb-0">We encapsulate our core values through B.A.B Believe, Adapt, and Behave, creating a dynamic and
            purpose-driven organizational culture.</p>
    </div>

    <div class="bab-grid-container">

        <div class="bab-text-block bab-item-adapt">
            <h3 class="title-24"> <span>Adapt</span> <svg width="416" height="6" viewBox="0 0 416 6" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M410.333 2.66793C410.333 4.14069 411.527 5.3346 413 5.3346C414.473 5.3346 415.667 4.14069 415.667 2.66793C415.667 1.19517 414.473 0.00126577 413 0.0012659C411.527 0.00126603 410.333 1.19517 410.333 2.66793ZM0 2.66797L4.37114e-08 3.16797L1.98558 3.16797L1.98558 2.66797L1.98558 2.16797L-4.37114e-08 2.16797L0 2.66797ZM5.95673 2.66797L5.95673 3.16797L9.92788 3.16797L9.92788 2.66797L9.92788 2.16797L5.95673 2.16797L5.95673 2.66797ZM13.899 2.66797L13.899 3.16797L17.8702 3.16797L17.8702 2.66797L17.8702 2.16797L13.899 2.16797L13.899 2.66797ZM21.8413 2.66797L21.8413 3.16797L25.8125 3.16797L25.8125 2.66797L25.8125 2.16797L21.8413 2.16797L21.8413 2.66797ZM29.7837 2.66797L29.7837 3.16797L33.7548 3.16797L33.7548 2.66797L33.7548 2.16797L29.7837 2.16797L29.7837 2.66797ZM37.726 2.66797L37.726 3.16797L41.6971 3.16797L41.6971 2.66797L41.6971 2.16797L37.726 2.16797L37.726 2.66797ZM45.6683 2.66796L45.6683 3.16796L49.6394 3.16796L49.6394 2.66796L49.6394 2.16796L45.6683 2.16796L45.6683 2.66796ZM53.6106 2.66796L53.6106 3.16796L57.5817 3.16796L57.5817 2.66796L57.5817 2.16796L53.6106 2.16796L53.6106 2.66796ZM61.5529 2.66796L61.5529 3.16796L65.524 3.16796L65.524 2.66796L65.524 2.16796L61.5529 2.16796L61.5529 2.66796ZM69.4952 2.66796L69.4952 3.16796L73.4663 3.16796L73.4663 2.66796L73.4663 2.16796L69.4952 2.16796L69.4952 2.66796ZM77.4375 2.66796L77.4375 3.16796L81.4086 3.16796L81.4086 2.66796L81.4086 2.16796L77.4375 2.16796L77.4375 2.66796ZM85.3798 2.66796L85.3798 3.16796L89.351 3.16796L89.351 2.66796L89.351 2.16796L85.3798 2.16796L85.3798 2.66796ZM93.3221 2.66796L93.3221 3.16796L97.2933 3.16796L97.2933 2.66796L97.2933 2.16796L93.3221 2.16796L93.3221 2.66796ZM101.264 2.66796L101.264 3.16796L105.236 3.16796L105.236 2.66796L105.236 2.16796L101.264 2.16796L101.264 2.66796ZM109.207 2.66796L109.207 3.16796L113.178 3.16796L113.178 2.66796L113.178 2.16796L109.207 2.16796L109.207 2.66796ZM117.149 2.66796L117.149 3.16796L121.12 3.16796L121.12 2.66796L121.12 2.16796L117.149 2.16796L117.149 2.66796ZM125.091 2.66796L125.091 3.16796L129.062 3.16796L129.062 2.66796L129.062 2.16796L125.091 2.16796L125.091 2.66796ZM133.034 2.66796L133.034 3.16796L137.005 3.16796L137.005 2.66796L137.005 2.16796L133.034 2.16796L133.034 2.66796ZM140.976 2.66796L140.976 3.16796L144.947 3.16796L144.947 2.66796L144.947 2.16796L140.976 2.16796L140.976 2.66796ZM148.918 2.66796L148.918 3.16796L152.889 3.16796L152.889 2.66796L152.889 2.16796L148.918 2.16796L148.918 2.66796ZM156.861 2.66796L156.861 3.16796L160.832 3.16795L160.832 2.66795L160.832 2.16795L156.861 2.16796L156.861 2.66796ZM164.803 2.66795L164.803 3.16795L168.774 3.16795L168.774 2.66795L168.774 2.16795L164.803 2.16795L164.803 2.66795ZM172.745 2.66795L172.745 3.16795L176.716 3.16795L176.716 2.66795L176.716 2.16795L172.745 2.16795L172.745 2.66795ZM180.688 2.66795L180.688 3.16795L184.659 3.16795L184.659 2.66795L184.659 2.16795L180.688 2.16795L180.688 2.66795ZM188.63 2.66795L188.63 3.16795L192.601 3.16795L192.601 2.66795L192.601 2.16795L188.63 2.16795L188.63 2.66795ZM196.572 2.66795L196.572 3.16795L200.543 3.16795L200.543 2.66795L200.543 2.16795L196.572 2.16795L196.572 2.66795ZM204.515 2.66795L204.515 3.16795L208.486 3.16795L208.486 2.66795L208.486 2.16795L204.515 2.16795L204.515 2.66795ZM212.457 2.66795L212.457 3.16795L216.428 3.16795L216.428 2.66795L216.428 2.16795L212.457 2.16795L212.457 2.66795ZM220.399 2.66795L220.399 3.16795L224.37 3.16795L224.37 2.66795L224.37 2.16795L220.399 2.16795L220.399 2.66795ZM228.341 2.66795L228.341 3.16795L232.313 3.16795L232.313 2.66795L232.313 2.16795L228.341 2.16795L228.341 2.66795ZM236.284 2.66795L236.284 3.16795L240.255 3.16795L240.255 2.66795L240.255 2.16795L236.284 2.16795L236.284 2.66795ZM244.226 2.66795L244.226 3.16795L248.197 3.16795L248.197 2.66795L248.197 2.16795L244.226 2.16795L244.226 2.66795ZM252.168 2.66795L252.168 3.16795L256.14 3.16795L256.14 2.66795L256.14 2.16795L252.168 2.16795L252.168 2.66795ZM260.111 2.66795L260.111 3.16795L264.082 3.16795L264.082 2.66795L264.082 2.16795L260.111 2.16795L260.111 2.66795ZM268.053 2.66795L268.053 3.16795L272.024 3.16794L272.024 2.66794L272.024 2.16794L268.053 2.16795L268.053 2.66795ZM275.995 2.66794L275.995 3.16794L279.967 3.16794L279.967 2.66794L279.967 2.16794L275.995 2.16794L275.995 2.66794ZM283.938 2.66794L283.938 3.16794L287.909 3.16794L287.909 2.66794L287.909 2.16794L283.938 2.16794L283.938 2.66794ZM291.88 2.66794L291.88 3.16794L295.851 3.16794L295.851 2.66794L295.851 2.16794L291.88 2.16794L291.88 2.66794ZM299.822 2.66794L299.822 3.16794L303.794 3.16794L303.794 2.66794L303.794 2.16794L299.822 2.16794L299.822 2.66794ZM307.765 2.66794L307.765 3.16794L311.736 3.16794L311.736 2.66794L311.736 2.16794L307.765 2.16794L307.765 2.66794ZM315.707 2.66794L315.707 3.16794L319.678 3.16794L319.678 2.66794L319.678 2.16794L315.707 2.16794L315.707 2.66794ZM323.649 2.66794L323.649 3.16794L327.62 3.16794L327.62 2.66794L327.62 2.16794L323.649 2.16794L323.649 2.66794ZM331.592 2.66794L331.592 3.16794L335.563 3.16794L335.563 2.66794L335.563 2.16794L331.592 2.16794L331.592 2.66794ZM339.534 2.66794L339.534 3.16794L343.505 3.16794L343.505 2.66794L343.505 2.16794L339.534 2.16794L339.534 2.66794ZM347.476 2.66794L347.476 3.16794L351.447 3.16794L351.447 2.66794L351.447 2.16794L347.476 2.16794L347.476 2.66794ZM355.419 2.66794L355.419 3.16794L359.39 3.16794L359.39 2.66794L359.39 2.16794L355.419 2.16794L355.419 2.66794ZM363.361 2.66794L363.361 3.16794L367.332 3.16794L367.332 2.66794L367.332 2.16794L363.361 2.16794L363.361 2.66794ZM371.303 2.66794L371.303 3.16794L375.274 3.16794L375.274 2.66794L375.274 2.16794L371.303 2.16794L371.303 2.66794ZM379.246 2.66794L379.246 3.16794L383.217 3.16794L383.217 2.66794L383.217 2.16794L379.246 2.16794L379.246 2.66794ZM387.188 2.66793L387.188 3.16793L391.159 3.16793L391.159 2.66793L391.159 2.16793L387.188 2.16793L387.188 2.66793ZM395.13 2.66793L395.13 3.16793L399.101 3.16793L399.101 2.66793L399.101 2.16793L395.13 2.16793L395.13 2.66793ZM403.073 2.66793L403.073 3.16793L407.044 3.16793L407.044 2.66793L407.044 2.16793L403.073 2.16793L403.073 2.66793ZM411.015 2.66793L411.015 3.16793L413 3.16793L413 2.66793L413 2.16793L411.015 2.16793L411.015 2.66793Z"
                        fill="#307ABD" />
                </svg>
            </h3>
            <p class="mb-0">We adapt to the ever-changing healthcare landscape, embracing new technologies, responding
                to market
                needs, and evolving our practices to stay at the forefront of pharmaceutical innovation.</p>
        </div>

        <div class="bab-center-image">
            <img src="public/front/images/believe_adapt.png" alt="Believe, Adapt, and Behave Core Values Diagram">
        </div>

        <div class="bab-text-block bab-item-believe">
            <h3 class="title-24"><span>Believe</span> <svg width="325" height="6" viewBox="0 0 325 6" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.33334 2.6665C5.33334 1.19374 4.13943 -0.00016284 2.66666 -0.00016284C1.19391 -0.00016284 0 1.19374 0 2.6665C0 4.13926 1.19391 5.33317 2.66666 5.33317C4.13943 5.33317 5.33334 4.13926 5.33334 2.6665ZM324.667 2.6665V2.1665H322.654V2.6665V3.1665H324.667V2.6665ZM318.629 2.6665V2.1665L314.604 2.1665V2.6665V3.1665L318.629 3.1665V2.6665ZM310.579 2.6665V2.1665L306.554 2.1665V2.6665V3.1665L310.579 3.1665V2.6665ZM302.529 2.6665V2.1665L298.504 2.1665V2.6665V3.1665L302.529 3.1665V2.6665ZM294.479 2.6665V2.1665L290.454 2.1665V2.6665V3.1665L294.479 3.1665V2.6665ZM286.429 2.6665V2.1665L282.404 2.1665V2.6665V3.1665L286.429 3.1665V2.6665ZM278.379 2.6665V2.1665L274.354 2.1665V2.6665V3.1665L278.379 3.1665V2.6665ZM270.329 2.6665V2.1665L266.304 2.1665V2.6665V3.1665L270.329 3.1665V2.6665ZM262.279 2.6665V2.1665L258.254 2.1665V2.6665V3.1665L262.279 3.1665V2.6665ZM254.229 2.6665V2.1665L250.204 2.1665V2.6665V3.1665H254.229V2.6665ZM246.179 2.6665V2.1665L242.154 2.1665V2.6665V3.1665L246.179 3.1665V2.6665ZM238.129 2.6665V2.1665L234.104 2.1665V2.6665V3.1665L238.129 3.1665V2.6665ZM230.079 2.6665V2.1665L226.054 2.1665V2.6665V3.1665L230.079 3.1665V2.6665ZM222.029 2.6665V2.1665L218.004 2.1665V2.6665V3.1665L222.029 3.1665V2.6665ZM213.979 2.6665V2.1665L209.954 2.1665V2.6665V3.1665L213.979 3.1665V2.6665ZM205.929 2.6665V2.1665L201.904 2.1665V2.6665V3.1665L205.929 3.1665V2.6665ZM197.879 2.6665V2.1665L193.854 2.1665V2.6665V3.1665L197.879 3.1665V2.6665ZM189.829 2.6665V2.1665L185.804 2.1665V2.6665V3.1665L189.829 3.1665V2.6665ZM181.779 2.6665V2.1665L177.754 2.1665V2.6665V3.1665H181.779V2.6665ZM173.729 2.6665V2.1665L169.704 2.1665V2.6665V3.1665L173.729 3.1665V2.6665ZM165.679 2.6665V2.1665L161.654 2.1665V2.6665V3.1665L165.679 3.1665V2.6665ZM157.629 2.6665V2.1665L153.604 2.1665V2.6665V3.1665L157.629 3.1665V2.6665ZM149.579 2.6665V2.1665L145.554 2.1665V2.6665V3.1665L149.579 3.1665V2.6665ZM141.529 2.6665V2.1665L137.504 2.1665V2.6665V3.1665L141.529 3.1665V2.6665ZM133.479 2.6665V2.1665L129.454 2.1665V2.6665V3.1665L133.479 3.1665V2.6665ZM125.429 2.6665V2.1665L121.404 2.1665V2.6665V3.1665L125.429 3.1665V2.6665ZM117.379 2.6665V2.1665L113.354 2.1665V2.6665V3.1665L117.379 3.1665V2.6665ZM109.329 2.6665V2.1665L105.304 2.1665V2.6665V3.1665H109.329V2.6665ZM101.279 2.6665V2.1665L97.2543 2.1665V2.6665V3.1665L101.279 3.1665V2.6665ZM93.2293 2.6665V2.1665L89.2043 2.1665V2.6665V3.1665L93.2293 3.1665V2.6665ZM85.1793 2.6665V2.1665L81.1543 2.1665V2.6665V3.1665L85.1793 3.1665V2.6665ZM77.1293 2.6665V2.1665L73.1043 2.1665V2.6665V3.1665L77.1293 3.1665V2.6665ZM69.0793 2.6665V2.1665L65.0543 2.1665V2.6665V3.1665L69.0793 3.1665V2.6665ZM61.0293 2.6665V2.1665L57.0043 2.1665V2.6665V3.1665L61.0293 3.1665V2.6665ZM52.9794 2.6665V2.1665L48.9543 2.1665V2.6665V3.1665L52.9794 3.1665V2.6665ZM44.9294 2.6665V2.1665L40.9044 2.1665V2.6665V3.1665L44.9294 3.1665V2.6665ZM36.8794 2.6665V2.1665L32.8544 2.1665V2.6665V3.1665L36.8794 3.1665V2.6665ZM28.8294 2.6665V2.1665L24.8044 2.1665V2.6665V3.1665L28.8294 3.1665V2.6665ZM20.7794 2.6665V2.1665L16.7544 2.1665V2.6665V3.1665L20.7794 3.1665V2.6665ZM12.7294 2.6665V2.1665L8.70441 2.1665V2.6665V3.1665L12.7294 3.1665V2.6665ZM4.67941 2.6665V2.1665L2.66666 2.1665V2.6665V3.1665L4.67941 3.1665V2.6665Z"
                        fill="#307ABD" />
                </svg>

            </h3>
            <p>We believe in the power of healthcare to transform lives. Our conviction drives us to develop and deliver
                medicines that make a real difference in patient outcomes.</p>
        </div>

        <div class="bab-text-block bab-item-behave">
            <h3 class="title-24"> <span>Behave</span> <svg width="282" height="6" viewBox="0 0 282 6" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.33331 2.6665C5.33331 1.19374 4.1394 -0.00016284 2.66666 -0.00016284C1.19391 -0.00016284 0 1.19374 0 2.6665C0 4.13926 1.19391 5.33317 2.66666 5.33317C4.1394 5.33317 5.33331 4.13926 5.33331 2.6665ZM281.667 2.6665V2.1665H279.674V2.6665V3.1665H281.667V2.6665ZM275.688 2.6665V2.1665L271.702 2.1665V2.6665V3.1665L275.688 3.1665V2.6665ZM267.717 2.6665V2.1665L263.731 2.1665V2.6665V3.1665L267.717 3.1665V2.6665ZM259.745 2.6665V2.1665L255.76 2.1665V2.6665V3.1665L259.745 3.1665V2.6665ZM251.774 2.6665V2.1665L247.788 2.1665V2.6665V3.1665L251.774 3.1665V2.6665ZM243.802 2.6665V2.1665L239.817 2.1665V2.6665V3.1665L243.802 3.1665V2.6665ZM235.831 2.6665V2.1665L231.845 2.1665V2.6665V3.1665L235.831 3.1665V2.6665ZM227.86 2.6665V2.1665L223.874 2.1665V2.6665V3.1665L227.86 3.1665V2.6665ZM219.888 2.6665V2.1665L215.902 2.1665V2.6665V3.1665L219.888 3.1665V2.6665ZM211.917 2.6665V2.1665L207.931 2.1665V2.6665V3.1665L211.917 3.1665V2.6665ZM203.945 2.6665V2.1665L199.96 2.1665V2.6665V3.1665H203.945V2.6665ZM195.974 2.6665V2.1665L191.988 2.1665V2.6665V3.1665L195.974 3.1665V2.6665ZM188.002 2.6665V2.1665L184.017 2.1665V2.6665V3.1665L188.002 3.1665V2.6665ZM180.031 2.6665V2.1665L176.045 2.1665V2.6665V3.1665L180.031 3.1665V2.6665ZM172.059 2.6665V2.1665L168.074 2.1665V2.6665V3.1665L172.059 3.1665V2.6665ZM164.088 2.6665V2.1665L160.102 2.1665V2.6665V3.1665L164.088 3.1665V2.6665ZM156.117 2.6665V2.1665L152.131 2.1665V2.6665V3.1665L156.117 3.1665V2.6665ZM148.145 2.6665V2.1665L144.159 2.1665V2.6665V3.1665L148.145 3.1665V2.6665ZM140.174 2.6665V2.1665L136.188 2.1665V2.6665V3.1665L140.174 3.1665V2.6665ZM132.202 2.6665V2.1665L128.217 2.1665V2.6665V3.1665L132.202 3.1665V2.6665ZM124.231 2.6665V2.1665L120.245 2.1665V2.6665V3.1665H124.231V2.6665ZM116.259 2.6665V2.1665L112.274 2.1665V2.6665V3.1665L116.259 3.1665V2.6665ZM108.288 2.6665V2.1665L104.302 2.1665V2.6665V3.1665L108.288 3.1665V2.6665ZM100.317 2.6665V2.1665L96.3308 2.1665V2.6665V3.1665L100.317 3.1665V2.6665ZM92.3451 2.6665V2.1665L88.3594 2.1665V2.6665V3.1665L92.3451 3.1665V2.6665ZM84.3737 2.6665V2.1665L80.388 2.1665V2.6665V3.1665L84.3737 3.1665V2.6665ZM76.4023 2.6665V2.1665L72.4165 2.1665V2.6665V3.1665L76.4023 3.1665V2.6665ZM68.4308 2.6665V2.1665L64.4451 2.1665V2.6665V3.1665L68.4308 3.1665V2.6665ZM60.4594 2.6665V2.1665L56.4737 2.1665V2.6665V3.1665L60.4594 3.1665V2.6665ZM52.4879 2.6665V2.1665L48.5022 2.1665V2.6665V3.1665L52.4879 3.1665V2.6665ZM44.5165 2.6665V2.1665L40.5308 2.1665V2.6665V3.1665H44.5165V2.6665ZM36.5451 2.6665V2.1665L32.5594 2.1665V2.6665V3.1665L36.5451 3.1665V2.6665ZM28.5736 2.6665V2.1665L24.5879 2.1665V2.6665V3.1665L28.5736 3.1665V2.6665ZM20.6022 2.6665V2.1665L16.6165 2.1665V2.6665V3.1665L20.6022 3.1665V2.6665ZM12.6308 2.6665V2.1665L8.64505 2.1665V2.6665V3.1665L12.6308 3.1665V2.6665ZM4.65933 2.6665V2.1665L2.66666 2.1665V2.6665V3.1665L4.65933 3.1665V2.6665Z"
                        fill="#307ABD" />
                </svg>

            </h3>
            <p class="mb-0">We behave with integrity, ethics, and professionalism in all our interactions. Our conduct
                reflects our
                values and builds trust with every stakeholder we engage with.</p>
        </div>

    </div>
</section>

<!-- <img src="public/front/images/believe_adapt.svg" alt="Believe, Adapt, and Behave Core Values Diagram"> -->


<section class="mt-100 p-x d-none">
    <div class="mb-40 text-center">
        <h2 class="title-54 title--blue mb-2">Our Group of Companies</h2>
        <!-- <p>Values Drivers</p> our -->
    </div>
    <div class="man_par_slider">
        @foreach($clientels as $clientel)
        <img class="img-fluid mx-2" src="{{ asset('public/clientelimage/'.$clientel->image) }}"
            alt="{{ $clientel->title }}">
        @endforeach
        <!-- <img class="img-fluid" src="{{ asset('public/front/images/manufacturing-partners2.webp')}}" alt="manufacturing partners">
        <img class="img-fluid" src="{{ asset('public/front/images/manufacturing-partners3.webp')}}" alt="manufacturing partners"> -->
    </div>
</section>

<script>
const accordionEl = document.getElementById("accordionExample");
const exploreState = document.querySelector(".explore-state");
const previewImgs = document.querySelectorAll(".images-only .accordion-preview-img");

if (accordionEl && exploreState && previewImgs.length) {

    function clearActive() {
        previewImgs.forEach((img) => {
            img.classList.remove("active");
            img.style.display = "none";
        });
    }

    function setActiveImage(panelId) {
        clearActive();
        const img = document.querySelector('.accordion-preview-img[data-panel="' + panelId + '"]');
        if (img) {
            // Naya accordion open hone par image ko wapas original set karein
            img.setAttribute('src', img.getAttribute('data-original-src'));
            img.classList.add("active");
            img.style.display = "block";
        }
    }

    
    previewImgs.forEach((img) => {
        img.addEventListener('click', function() {
            const currentSrc = this.getAttribute('src');
            const originalSrc = this.getAttribute('data-original-src');
            const altSrc = this.getAttribute('data-alt-src');

            // Agar image currently original hai, toh doosri (alt) dikhayein, nahi toh original wapas le aein
            if (currentSrc === originalSrc) {
                this.setAttribute('src', altSrc);
            } else {
                this.setAttribute('src', originalSrc);
            }
        });
    });

    accordionEl.addEventListener("shown.bs.collapse", function(e) {
        const id = e.target.id;
        if (id) {
            setActiveImage(id);
        }
        exploreState.classList.add("accordion-open");
    });

    accordionEl.addEventListener("hidden.bs.collapse", function() {
        const openPanel = accordionEl.querySelector(".accordion-collapse.show");

        if (openPanel) {
            setActiveImage(openPanel.id);
            exploreState.classList.add("accordion-open");
        } else {
            // Show first image when all panels are closed
            const firstImage = previewImgs[0];
            if (firstImage) {
                clearActive();
                firstImage.classList.add("active");
                firstImage.style.display = "block";
                firstImage.setAttribute('src', firstImage.getAttribute('data-original-src'));
                exploreState.classList.add("accordion-open");
            }
        }
    });

    // Initial state on page load
    const initialOpen = accordionEl.querySelector(".accordion-collapse.show");

    clearActive();

    if (initialOpen) {
        setActiveImage(initialOpen.id);
        exploreState.classList.add("accordion-open");
    }
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Observer setup karna
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Jab section screen par aaye, 'show-animation' class add karein
                entry.target.classList.add('show-animation');

                // (Optional) Agar aap chahte hain ki animation sirf ek hi baar ho, 
                // toh niche wali line ko uncomment kar dein:
                // observer.unobserve(entry.target); 
            } else {
                // Jab section screen se bahar jaye, class hata dein 
                // taaki wapas scroll karne par firse animate ho
                entry.target.classList.remove('show-animation');
            }
        });
    }, {
        threshold: 0.3 // Jab section 30% screen par dikhe tab trigger hoga
    });

    // Container ko observe karna
    const container = document.querySelector('.bab-container');
    if (container) {
        observer.observe(container);
    }
});
</script>


<script>
const healData = [{
        letter: "H",
        num: "01",
        title: "Health",
        desc: "Our health initiatives resonate with every stakeholder. Patients have access to quality and affordable treatment, while doctors improve patient health with skillful medical practices. Channel partners benefit from widely available channels, suppliers witness predictable and mutual growth, and employees thrive in a workplace encouraging continuous personal and professional development.",
    },
    {
        letter: "E",
        num: "02",
        title: "Excellence",
        desc: "Our commitment to excellence is reflected in every stage of our work, from product quality and development to partner support and scientific engagement. By focusing on precision, consistency, and continuous improvement, we aim to deliver pharmaceutical solutions that inspire confidence among healthcare professionals, channel partners, and the patients they serve.",
    },
    {
        letter: "A",
        num: "03",
        title: "Accountability",
        desc: "Accountability is central to how we operate and build trust in healthcare. It shapes the way we uphold quality commitments, respond to partner needs, and act responsibly toward patients, professionals, and stakeholders. Through transparent practices and dependable performance, we foster relationships built on confidence, credibility, and long-term trust.",
    },
    {
        letter: "L",
        num: "04",
        title: "Longevity",
        desc: "For us, longevity means creating lasting value through sustainable growth, strong partnerships, and a continued commitment to better health outcomes. By building on quality, compliance, and market relevance, we aim to support long-term progress for our organization, our partners, and the communities that rely on dependable healthcare solutions.",
    },
];

// DOM Elements
const scrollWrapper = document.getElementById("scrollWrapper");
const displayLetter = document.getElementById("displayLetter");
const displayNum = document.getElementById("displayNum");
const displayTitle = document.getElementById("displayTitle");
const displayDesc = document.getElementById("displayDesc");
const rightContent = document.getElementById("rightContent");

let currentIndex = 0;
let isAnimating = false;

window.addEventListener("scroll", () => {
    // Get the exact position of the wrapper relative to the viewport
    const wrapperRect = scrollWrapper.getBoundingClientRect();

    // The maximum amount we can scroll inside the wrapper
    const maxScroll = scrollWrapper.offsetHeight - window.innerHeight;

    // How far we've scrolled past the top of the wrapper
    // wrapperRect.top becomes negative as we scroll down
    const scrolledDistance = -wrapperRect.top;

    // Calculate progress (from 0 to 1)
    let progress = scrolledDistance / maxScroll;

    // Clamp the progress so it stays strictly between 0 and 1
    progress = Math.max(0, Math.min(1, progress));

    // Determine the new index based on 4 sections
    // Multiplied by 3.99 to prevent it from hitting 4 and causing an error at 100% progress
    let newIndex = Math.floor(progress * 3.99);

    // Only update the DOM if the index has changed and an animation isn't already running
    if (newIndex !== currentIndex && !isAnimating) {
        isAnimating = true;

        // Add fade out effect
        displayLetter.classList.add("fade-out");
        rightContent.classList.add("fade-out");

        setTimeout(() => {
            // Update content
            displayLetter.textContent = healData[newIndex].letter;
            displayNum.textContent = healData[newIndex].num;
            displayTitle.textContent = healData[newIndex].title;
            displayDesc.textContent = healData[newIndex].desc;

            // Update Navigation Active state
            document.getElementById(`nav-${currentIndex}`).classList.remove("active");
            document.getElementById(`nav-${newIndex}`).classList.add("active");

            // Remove fade out effect to fade back in
            displayLetter.classList.remove("fade-out");
            rightContent.classList.remove("fade-out");

            currentIndex = newIndex;

            // Wait slightly longer than the CSS transition before allowing another scroll trigger
            setTimeout(() => {
                isAnimating = false;
            }, 400);

        }, 200);
    }
});
</script>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')