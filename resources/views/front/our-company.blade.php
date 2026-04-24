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
             data-alt-src="{{ asset('public/homemapimage/'.$unit->alt_image) }}" alt="{{ $unit->title }}"
             class="accordion-preview-img img-fluid" 
             data-panel="collapse{{ $loop->index }}"
             style="cursor: pointer;">
            
        @endforeach

    </div>
</div>
        </div>
    </div>
</section>

<section class="principles-section p-x mt-100" data-aos="fade-up">
    <div class="row" data-aos="zoom-in" data-aos-delay="200">
        <div class="col-xl-4 col-lg-5 col-md-12" data-aos="fade-right">
            <p>Our Purpose</p>
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
</section>

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
            <h3 class="title-24"> <span>Adapt</span> <svg width="503" height="6" viewBox="0 0 503 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M497.333 2.66646C497.333 4.13922 498.527 5.33313 500 5.33313C501.473 5.33313 502.667 4.13922 502.667 2.66646C502.667 1.1937 501.473 -0.00020668 500 -0.000206551C498.527 -0.000206423 497.333 1.1937 497.333 2.66646ZM0 2.6665L4.37114e-08 3.1665L1.98413 3.1665L1.98413 2.6665L1.98413 2.1665L-4.37114e-08 2.1665L0 2.6665ZM5.95238 2.6665L5.95238 3.1665L9.92064 3.1665L9.92064 2.6665L9.92064 2.1665L5.95238 2.1665L5.95238 2.6665ZM13.8889 2.6665L13.8889 3.1665L17.8571 3.1665L17.8571 2.6665L17.8571 2.1665L13.8889 2.1665L13.8889 2.6665ZM21.8254 2.6665L21.8254 3.1665L25.7937 3.1665L25.7937 2.6665L25.7937 2.1665L21.8254 2.1665L21.8254 2.6665ZM29.7619 2.6665L29.7619 3.1665L33.7302 3.1665L33.7302 2.6665L33.7302 2.1665L29.7619 2.1665L29.7619 2.6665ZM37.6984 2.6665L37.6984 3.1665L41.6667 3.1665L41.6667 2.6665L41.6667 2.1665L37.6984 2.1665L37.6984 2.6665ZM45.6349 2.6665L45.6349 3.1665L49.6032 3.1665L49.6032 2.6665L49.6032 2.1665L45.6349 2.1665L45.6349 2.6665ZM53.5714 2.6665L53.5714 3.1665L57.5397 3.1665L57.5397 2.6665L57.5397 2.1665L53.5714 2.1665L53.5714 2.6665ZM61.5079 2.6665L61.5079 3.1665L65.4762 3.1665L65.4762 2.6665L65.4762 2.1665L61.5079 2.1665L61.5079 2.6665ZM69.4445 2.6665L69.4445 3.1665L73.4127 3.1665L73.4127 2.6665L73.4127 2.1665L69.4445 2.1665L69.4445 2.6665ZM77.381 2.6665L77.381 3.1665L81.3492 3.1665L81.3492 2.6665L81.3492 2.1665L77.381 2.1665L77.381 2.6665ZM85.3175 2.6665L85.3175 3.1665L89.2857 3.1665L89.2857 2.6665L89.2857 2.1665L85.3175 2.1665L85.3175 2.6665ZM93.254 2.6665L93.254 3.1665L97.2222 3.1665L97.2222 2.6665L97.2222 2.1665L93.254 2.1665L93.254 2.6665ZM101.19 2.6665L101.19 3.1665L105.159 3.16649L105.159 2.66649L105.159 2.16649L101.19 2.1665L101.19 2.6665ZM109.127 2.66649L109.127 3.16649L113.095 3.16649L113.095 2.66649L113.095 2.16649L109.127 2.16649L109.127 2.66649ZM117.063 2.66649L117.063 3.16649L121.032 3.16649L121.032 2.66649L121.032 2.16649L117.063 2.16649L117.063 2.66649ZM125 2.66649L125 3.16649L128.968 3.16649L128.968 2.66649L128.968 2.16649L125 2.16649L125 2.66649ZM132.937 2.66649L132.937 3.16649L136.905 3.16649L136.905 2.66649L136.905 2.16649L132.937 2.16649L132.937 2.66649ZM140.873 2.66649L140.873 3.16649L144.841 3.16649L144.841 2.66649L144.841 2.16649L140.873 2.16649L140.873 2.66649ZM148.81 2.66649L148.81 3.16649L152.778 3.16649L152.778 2.66649L152.778 2.16649L148.81 2.16649L148.81 2.66649ZM156.746 2.66649L156.746 3.16649L160.714 3.16649L160.714 2.66649L160.714 2.16649L156.746 2.16649L156.746 2.66649ZM164.683 2.66649L164.683 3.16649L168.651 3.16649L168.651 2.66649L168.651 2.16649L164.683 2.16649L164.683 2.66649ZM172.619 2.66649L172.619 3.16649L176.587 3.16649L176.587 2.66649L176.587 2.16649L172.619 2.16649L172.619 2.66649ZM180.556 2.66649L180.556 3.16649L184.524 3.16649L184.524 2.66649L184.524 2.16649L180.556 2.16649L180.556 2.66649ZM188.492 2.66649L188.492 3.16649L192.46 3.16649L192.46 2.66649L192.46 2.16649L188.492 2.16649L188.492 2.66649ZM196.429 2.66649L196.429 3.16649L200.397 3.16649L200.397 2.66649L200.397 2.16649L196.429 2.16649L196.429 2.66649ZM204.365 2.66649L204.365 3.16649L208.333 3.16649L208.333 2.66649L208.333 2.16649L204.365 2.16649L204.365 2.66649ZM212.302 2.66649L212.302 3.16649L216.27 3.16648L216.27 2.66648L216.27 2.16648L212.302 2.16649L212.302 2.66649ZM220.238 2.66648L220.238 3.16648L224.207 3.16648L224.207 2.66648L224.207 2.16648L220.238 2.16648L220.238 2.66648ZM228.175 2.66648L228.175 3.16648L232.143 3.16648L232.143 2.66648L232.143 2.16648L228.175 2.16648L228.175 2.66648ZM236.111 2.66648L236.111 3.16648L240.08 3.16648L240.08 2.66648L240.08 2.16648L236.111 2.16648L236.111 2.66648ZM244.048 2.66648L244.048 3.16648L248.016 3.16648L248.016 2.66648L248.016 2.16648L244.048 2.16648L244.048 2.66648ZM251.984 2.66648L251.984 3.16648L255.953 3.16648L255.953 2.66648L255.953 2.16648L251.984 2.16648L251.984 2.66648ZM259.921 2.66648L259.921 3.16648L263.889 3.16648L263.889 2.66648L263.889 2.16648L259.921 2.16648L259.921 2.66648ZM267.857 2.66648L267.857 3.16648L271.826 3.16648L271.826 2.66648L271.826 2.16648L267.857 2.16648L267.857 2.66648ZM275.794 2.66648L275.794 3.16648L279.762 3.16648L279.762 2.66648L279.762 2.16648L275.794 2.16648L275.794 2.66648ZM283.73 2.66648L283.73 3.16648L287.699 3.16648L287.699 2.66648L287.699 2.16648L283.73 2.16648L283.73 2.66648ZM291.667 2.66648L291.667 3.16648L295.635 3.16648L295.635 2.66648L295.635 2.16648L291.667 2.16648L291.667 2.66648ZM299.604 2.66648L299.604 3.16648L303.572 3.16648L303.572 2.66648L303.572 2.16648L299.604 2.16648L299.604 2.66648ZM307.54 2.66648L307.54 3.16648L311.508 3.16648L311.508 2.66648L311.508 2.16648L307.54 2.16648L307.54 2.66648ZM315.477 2.66648L315.477 3.16648L319.445 3.16648L319.445 2.66648L319.445 2.16648L315.477 2.16648L315.477 2.66648ZM323.413 2.66648L323.413 3.16648L327.381 3.16648L327.381 2.66648L327.381 2.16648L323.413 2.16648L323.413 2.66648ZM331.35 2.66647L331.35 3.16647L335.318 3.16647L335.318 2.66647L335.318 2.16647L331.35 2.16647L331.35 2.66647ZM339.286 2.66647L339.286 3.16647L343.254 3.16647L343.254 2.66647L343.254 2.16647L339.286 2.16647L339.286 2.66647ZM347.223 2.66647L347.223 3.16647L351.191 3.16647L351.191 2.66647L351.191 2.16647L347.223 2.16647L347.223 2.66647ZM355.159 2.66647L355.159 3.16647L359.127 3.16647L359.127 2.66647L359.127 2.16647L355.159 2.16647L355.159 2.66647ZM363.096 2.66647L363.096 3.16647L367.064 3.16647L367.064 2.66647L367.064 2.16647L363.096 2.16647L363.096 2.66647ZM371.032 2.66647L371.032 3.16647L375 3.16647L375 2.66647L375 2.16647L371.032 2.16647L371.032 2.66647ZM378.969 2.66647L378.969 3.16647L382.937 3.16647L382.937 2.66647L382.937 2.16647L378.969 2.16647L378.969 2.66647ZM386.905 2.66647L386.905 3.16647L390.874 3.16647L390.874 2.66647L390.874 2.16647L386.905 2.16647L386.905 2.66647ZM394.842 2.66647L394.842 3.16647L398.81 3.16647L398.81 2.66647L398.81 2.16647L394.842 2.16647L394.842 2.66647ZM402.778 2.66647L402.778 3.16647L406.747 3.16647L406.747 2.66647L406.747 2.16647L402.778 2.16647L402.778 2.66647ZM410.715 2.66647L410.715 3.16647L414.683 3.16647L414.683 2.66647L414.683 2.16647L410.715 2.16647L410.715 2.66647ZM418.651 2.66647L418.651 3.16647L422.62 3.16647L422.62 2.66647L422.62 2.16647L418.651 2.16647L418.651 2.66647ZM426.588 2.66647L426.588 3.16647L430.556 3.16647L430.556 2.66647L430.556 2.16647L426.588 2.16647L426.588 2.66647ZM434.524 2.66647L434.524 3.16647L438.493 3.16647L438.493 2.66647L438.493 2.16647L434.524 2.16647L434.524 2.66647ZM442.461 2.66647L442.461 3.16647L446.429 3.16646L446.429 2.66646L446.429 2.16646L442.461 2.16647L442.461 2.66647ZM450.397 2.66646L450.397 3.16646L454.366 3.16646L454.366 2.66646L454.366 2.16646L450.397 2.16646L450.397 2.66646ZM458.334 2.66646L458.334 3.16646L462.302 3.16646L462.302 2.66646L462.302 2.16646L458.334 2.16646L458.334 2.66646ZM466.271 2.66646L466.271 3.16646L470.239 3.16646L470.239 2.66646L470.239 2.16646L466.271 2.16646L466.271 2.66646ZM474.207 2.66646L474.207 3.16646L478.175 3.16646L478.175 2.66646L478.175 2.16646L474.207 2.16646L474.207 2.66646ZM482.144 2.66646L482.144 3.16646L486.112 3.16646L486.112 2.66646L486.112 2.16646L482.144 2.16646L482.144 2.66646ZM490.08 2.66646L490.08 3.16646L494.048 3.16646L494.048 2.66646L494.048 2.16646L490.08 2.16646L490.08 2.66646ZM498.017 2.66646L498.017 3.16646L500 3.16646L500 2.66646L500 2.16646L498.017 2.16646L498.017 2.66646Z" fill="#307ABD"/>
            </svg>

            </h3>
            <p class="mb-0">We adapt to the ever-changing healthcare landscape, embracing new technologies, responding to market
                needs, and evolving our practices to stay at the forefront of pharmaceutical innovation.</p>
        </div>

        <div class="bab-center-image">
            <img src="public/front/images/believe_adapt.png" alt="Believe, Adapt, and Behave Core Values Diagram">
        </div>

        <div class="bab-text-block bab-item-believe">
            <h3 class="title-24"><span>Believe</span> <svg width="325" height="6" viewBox="0 0 325 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.33334 2.6665C5.33334 1.19374 4.13943 -0.00016284 2.66666 -0.00016284C1.19391 -0.00016284 0 1.19374 0 2.6665C0 4.13926 1.19391 5.33317 2.66666 5.33317C4.13943 5.33317 5.33334 4.13926 5.33334 2.6665ZM324.667 2.6665V2.1665H322.654V2.6665V3.1665H324.667V2.6665ZM318.629 2.6665V2.1665L314.604 2.1665V2.6665V3.1665L318.629 3.1665V2.6665ZM310.579 2.6665V2.1665L306.554 2.1665V2.6665V3.1665L310.579 3.1665V2.6665ZM302.529 2.6665V2.1665L298.504 2.1665V2.6665V3.1665L302.529 3.1665V2.6665ZM294.479 2.6665V2.1665L290.454 2.1665V2.6665V3.1665L294.479 3.1665V2.6665ZM286.429 2.6665V2.1665L282.404 2.1665V2.6665V3.1665L286.429 3.1665V2.6665ZM278.379 2.6665V2.1665L274.354 2.1665V2.6665V3.1665L278.379 3.1665V2.6665ZM270.329 2.6665V2.1665L266.304 2.1665V2.6665V3.1665L270.329 3.1665V2.6665ZM262.279 2.6665V2.1665L258.254 2.1665V2.6665V3.1665L262.279 3.1665V2.6665ZM254.229 2.6665V2.1665L250.204 2.1665V2.6665V3.1665H254.229V2.6665ZM246.179 2.6665V2.1665L242.154 2.1665V2.6665V3.1665L246.179 3.1665V2.6665ZM238.129 2.6665V2.1665L234.104 2.1665V2.6665V3.1665L238.129 3.1665V2.6665ZM230.079 2.6665V2.1665L226.054 2.1665V2.6665V3.1665L230.079 3.1665V2.6665ZM222.029 2.6665V2.1665L218.004 2.1665V2.6665V3.1665L222.029 3.1665V2.6665ZM213.979 2.6665V2.1665L209.954 2.1665V2.6665V3.1665L213.979 3.1665V2.6665ZM205.929 2.6665V2.1665L201.904 2.1665V2.6665V3.1665L205.929 3.1665V2.6665ZM197.879 2.6665V2.1665L193.854 2.1665V2.6665V3.1665L197.879 3.1665V2.6665ZM189.829 2.6665V2.1665L185.804 2.1665V2.6665V3.1665L189.829 3.1665V2.6665ZM181.779 2.6665V2.1665L177.754 2.1665V2.6665V3.1665H181.779V2.6665ZM173.729 2.6665V2.1665L169.704 2.1665V2.6665V3.1665L173.729 3.1665V2.6665ZM165.679 2.6665V2.1665L161.654 2.1665V2.6665V3.1665L165.679 3.1665V2.6665ZM157.629 2.6665V2.1665L153.604 2.1665V2.6665V3.1665L157.629 3.1665V2.6665ZM149.579 2.6665V2.1665L145.554 2.1665V2.6665V3.1665L149.579 3.1665V2.6665ZM141.529 2.6665V2.1665L137.504 2.1665V2.6665V3.1665L141.529 3.1665V2.6665ZM133.479 2.6665V2.1665L129.454 2.1665V2.6665V3.1665L133.479 3.1665V2.6665ZM125.429 2.6665V2.1665L121.404 2.1665V2.6665V3.1665L125.429 3.1665V2.6665ZM117.379 2.6665V2.1665L113.354 2.1665V2.6665V3.1665L117.379 3.1665V2.6665ZM109.329 2.6665V2.1665L105.304 2.1665V2.6665V3.1665H109.329V2.6665ZM101.279 2.6665V2.1665L97.2543 2.1665V2.6665V3.1665L101.279 3.1665V2.6665ZM93.2293 2.6665V2.1665L89.2043 2.1665V2.6665V3.1665L93.2293 3.1665V2.6665ZM85.1793 2.6665V2.1665L81.1543 2.1665V2.6665V3.1665L85.1793 3.1665V2.6665ZM77.1293 2.6665V2.1665L73.1043 2.1665V2.6665V3.1665L77.1293 3.1665V2.6665ZM69.0793 2.6665V2.1665L65.0543 2.1665V2.6665V3.1665L69.0793 3.1665V2.6665ZM61.0293 2.6665V2.1665L57.0043 2.1665V2.6665V3.1665L61.0293 3.1665V2.6665ZM52.9794 2.6665V2.1665L48.9543 2.1665V2.6665V3.1665L52.9794 3.1665V2.6665ZM44.9294 2.6665V2.1665L40.9044 2.1665V2.6665V3.1665L44.9294 3.1665V2.6665ZM36.8794 2.6665V2.1665L32.8544 2.1665V2.6665V3.1665L36.8794 3.1665V2.6665ZM28.8294 2.6665V2.1665L24.8044 2.1665V2.6665V3.1665L28.8294 3.1665V2.6665ZM20.7794 2.6665V2.1665L16.7544 2.1665V2.6665V3.1665L20.7794 3.1665V2.6665ZM12.7294 2.6665V2.1665L8.70441 2.1665V2.6665V3.1665L12.7294 3.1665V2.6665ZM4.67941 2.6665V2.1665L2.66666 2.1665V2.6665V3.1665L4.67941 3.1665V2.6665Z" fill="#307ABD"/>
</svg>

            </h3>
            <p>We believe in the power of healthcare to transform lives. Our conviction drives us to develop and deliver medicines that make a real difference in patient outcomes.</p>
        </div>

        <div class="bab-text-block bab-item-behave">
            <h3 class="title-24"> <span>Behave</span> <svg width="282" height="6" viewBox="0 0 282 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.33331 2.6665C5.33331 1.19374 4.1394 -0.00016284 2.66666 -0.00016284C1.19391 -0.00016284 0 1.19374 0 2.6665C0 4.13926 1.19391 5.33317 2.66666 5.33317C4.1394 5.33317 5.33331 4.13926 5.33331 2.6665ZM281.667 2.6665V2.1665H279.674V2.6665V3.1665H281.667V2.6665ZM275.688 2.6665V2.1665L271.702 2.1665V2.6665V3.1665L275.688 3.1665V2.6665ZM267.717 2.6665V2.1665L263.731 2.1665V2.6665V3.1665L267.717 3.1665V2.6665ZM259.745 2.6665V2.1665L255.76 2.1665V2.6665V3.1665L259.745 3.1665V2.6665ZM251.774 2.6665V2.1665L247.788 2.1665V2.6665V3.1665L251.774 3.1665V2.6665ZM243.802 2.6665V2.1665L239.817 2.1665V2.6665V3.1665L243.802 3.1665V2.6665ZM235.831 2.6665V2.1665L231.845 2.1665V2.6665V3.1665L235.831 3.1665V2.6665ZM227.86 2.6665V2.1665L223.874 2.1665V2.6665V3.1665L227.86 3.1665V2.6665ZM219.888 2.6665V2.1665L215.902 2.1665V2.6665V3.1665L219.888 3.1665V2.6665ZM211.917 2.6665V2.1665L207.931 2.1665V2.6665V3.1665L211.917 3.1665V2.6665ZM203.945 2.6665V2.1665L199.96 2.1665V2.6665V3.1665H203.945V2.6665ZM195.974 2.6665V2.1665L191.988 2.1665V2.6665V3.1665L195.974 3.1665V2.6665ZM188.002 2.6665V2.1665L184.017 2.1665V2.6665V3.1665L188.002 3.1665V2.6665ZM180.031 2.6665V2.1665L176.045 2.1665V2.6665V3.1665L180.031 3.1665V2.6665ZM172.059 2.6665V2.1665L168.074 2.1665V2.6665V3.1665L172.059 3.1665V2.6665ZM164.088 2.6665V2.1665L160.102 2.1665V2.6665V3.1665L164.088 3.1665V2.6665ZM156.117 2.6665V2.1665L152.131 2.1665V2.6665V3.1665L156.117 3.1665V2.6665ZM148.145 2.6665V2.1665L144.159 2.1665V2.6665V3.1665L148.145 3.1665V2.6665ZM140.174 2.6665V2.1665L136.188 2.1665V2.6665V3.1665L140.174 3.1665V2.6665ZM132.202 2.6665V2.1665L128.217 2.1665V2.6665V3.1665L132.202 3.1665V2.6665ZM124.231 2.6665V2.1665L120.245 2.1665V2.6665V3.1665H124.231V2.6665ZM116.259 2.6665V2.1665L112.274 2.1665V2.6665V3.1665L116.259 3.1665V2.6665ZM108.288 2.6665V2.1665L104.302 2.1665V2.6665V3.1665L108.288 3.1665V2.6665ZM100.317 2.6665V2.1665L96.3308 2.1665V2.6665V3.1665L100.317 3.1665V2.6665ZM92.3451 2.6665V2.1665L88.3594 2.1665V2.6665V3.1665L92.3451 3.1665V2.6665ZM84.3737 2.6665V2.1665L80.388 2.1665V2.6665V3.1665L84.3737 3.1665V2.6665ZM76.4023 2.6665V2.1665L72.4165 2.1665V2.6665V3.1665L76.4023 3.1665V2.6665ZM68.4308 2.6665V2.1665L64.4451 2.1665V2.6665V3.1665L68.4308 3.1665V2.6665ZM60.4594 2.6665V2.1665L56.4737 2.1665V2.6665V3.1665L60.4594 3.1665V2.6665ZM52.4879 2.6665V2.1665L48.5022 2.1665V2.6665V3.1665L52.4879 3.1665V2.6665ZM44.5165 2.6665V2.1665L40.5308 2.1665V2.6665V3.1665H44.5165V2.6665ZM36.5451 2.6665V2.1665L32.5594 2.1665V2.6665V3.1665L36.5451 3.1665V2.6665ZM28.5736 2.6665V2.1665L24.5879 2.1665V2.6665V3.1665L28.5736 3.1665V2.6665ZM20.6022 2.6665V2.1665L16.6165 2.1665V2.6665V3.1665L20.6022 3.1665V2.6665ZM12.6308 2.6665V2.1665L8.64505 2.1665V2.6665V3.1665L12.6308 3.1665V2.6665ZM4.65933 2.6665V2.1665L2.66666 2.1665V2.6665V3.1665L4.65933 3.1665V2.6665Z" fill="#307ABD"/>
</svg>

            </h3>
            <p class="mb-0">We behave with integrity, ethics, and professionalism in all our interactions. Our conduct reflects our
                values and builds trust with every stakeholder we engage with.</p>
        </div>

    </div>
</section>

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

    // NAYA CODE: Image click par toggle logic
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
            clearActive();
            exploreState.classList.remove("accordion-open");
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