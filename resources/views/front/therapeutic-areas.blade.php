@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div>
        <img src="{{ asset('public/menubannerimage/'.  $menubanner->image) }}" class="img-fluid" alt="{{ $menubanner->title }}">
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <p class="text-white"><a href="{{ url('/') }}">Home</a> / Contact</p>
            <h1 class="title-34 text--white">{{ $menubanner->title }}</h1>
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
                </svg></a>
        </div>
    </div>
</section>
@endif

<section class="intro-section p-x mt-100">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-12">
            <p>Browse by therapeutic area and find brands faster.</p>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12">
            <h1 class="title-54 title--blue mb-40">Therapeutic Areas That Help You Navigate Our Portfolio</h1>

            <p>Alvio Pharma’s range of <b>finished pharmaceutical formulations</b> is built around therapy-led divisions—so 
                the right products are easier to find, compare, and reference. Each division brings together brands 
                designed for routine practice needs, patient preferences, and long-term care priorities across diverse markets.</p>

            <p>Whether you’re looking for <b>Derma Care, Cardio Care, Anti-Diabetes, Urology</b>, or <b>Chronic Supplements</b>, this page helps
                 you move from therapeutic area to brand with minimal effort. Use the sections below to explore the portfolio and
                  access the information you need—clearly and efficiently.
</p>
        </div>
    </div>
    </div>
</section>

<section class="intro-section p-x mt-100">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('public/front/images/CardioMet.webp') }}" alt="images" class="img-fluid">
        </div>

        <div class="col-md-6 ps-md-5">
            <h2 class="title-54" style="color: var(--black-color);">Mastering the Cardio-Metabolic Continuum</h2>
            <p>CardioMet Care is dedicated to managing the interconnected nature of cardiovascular and metabolic
                disorders through an integrated therapeutic approach. Rather than treating conditions in isolation, we
                address the shared physiological pathways that link hypertension, diabetes, and dyslipidemia, enabling
                more stable and sustainable long-term outcomes.</p>

            <h5 class="title-24" style="color: var(--blue-heading);">Our Approach</h5>
            <ul>
                <li> <b>Biological Empathy:</b> Unified management of the metabolic triad.</li>
                <li> <b>Algorithmic Precision:</b> CPC Technology for steady-state stability.</li>
                <li> <b>Schedule M Compliant:</b> Strict adherence to Indian FDA regulatory requirements.</li>
                <li> <b>Schedule M Compliant:</b> Strict adherence to Indian FDA regulatory requirements.</li>
            </ul>
            <div class="mt-40 ">
                <a href="#" class="commo-btn bg-black btn-color-white">Explore Cosmeceutical Portfolio</a>
                <a href="#" class="commo-btn-arrow bg-black btn-color-white"><svg width="20" height="16"
                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.75001 7.75001L18.75 7.75001ZM18.75 7.75001L11.75 0.749999ZM18.75 7.75001L11.75 14.75Z"
                            fill="white" />
                        <path d="M0.75001 7.75001L18.75 7.75001M18.75 7.75001L11.75 0.749999M18.75 7.75001L11.75 14.75"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="intro-section p-x mt-100">
    <div class="row">

        <div class="col-md-6 pe-md-5">
            <h2 class="title-54" style="color: var(--black-color);">Advanced Dermal Delivery & Barrier Integrity</h2>
            <p>Our Derma Science division applies rigorous pharmaceutical standards to the science of skin health
                and barrier recovery. We recognize that refactory skin conditions - such as Psoriasis, Dermatitis,
                 and severe Acne require more than just topical coverage; they require deep-layer molecular intervention.
            </p>

            <h5 class="title-24" style="color: var(--blue-heading);">Our Approach</h5>
            <ul>
                <li> <b>Biological Empathy:</b> Patient-centric, high-absorption formulations.</li>
                <li> <b>Algorithmic Precision:</b> Solu-Enhance Tech for deep molecular penetration.</li>
                <li> <b>Transparent Innovation:</b> Bio-stable, oxidation-resistant delivery systems.</li>
                <li> <b>Future-Proofing Care: </b> Aceelerating post-procedure dermal regeneration.</li>
            </ul>
            <div class="mt-40 ">
                <a href="#" class="commo-btn bg-black btn-color-white">Explore Pharmaceutical Portfolio</a>
                <a href="#" class="commo-btn-arrow bg-black btn-color-white"><svg width="20" height="16"
                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.75001 7.75001L18.75 7.75001ZM18.75 7.75001L11.75 0.749999ZM18.75 7.75001L11.75 14.75Z"
                            fill="white" />
                        <path d="M0.75001 7.75001L18.75 7.75001M18.75 7.75001L11.75 0.749999M18.75 7.75001L11.75 14.75"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('public/front/images/DermaScience.webp') }}" alt="images" class="img-fluid">
        </div>

    </div>
</section>

<section class="mt-100 mb-100">
    <div class="p-x">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7">
                <div class="state-content">
                    <h2 class="title-54 title--blue mb-5">A Framework for Evidence-Led Therapeutic Decisions</h2>
                    <p>Every molecule within the Alvio Pharma portfolio is selected through a structured clinical
                        evaluation model designed to balance efficacy, safety, and real-world usability. Our selection
                        matrix integrates gap analysis, pathway synergy, and adherence science to ensure that each
                        therapy addresses unmet clinical needs while supporting long-term treatment success in chronic
                        disease management.</p>
                </div>
                <div class="state-accordion mt-40">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button title-34" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    <img src="{{ asset('public/front/images/men-icon.png') }}" alt="men icon">
                                    <span>Clinical Gap Analysis</span>
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Targeting molecules where existing therapies show suboptimal bioavailability or
                                        inconsistent outcomes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button title-34 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <img src="{{ asset('public/front/images/time-icon.png') }}" alt="men icon">
                                    <span>Adherence Potential</span>
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Alvio Pharma’s national operations are the foundation of our growth story.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button title-34 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <img src="{{ asset('public/front/images/synergy-icon.png') }}" alt="men icon">
                                    <span>Physiological Synergy</span>
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Alvio Pharma’s national operations are the foundation of our growth story.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="vision-mission-item">
                    <div class="svg-wrapper">
                        <svg width="591" height="600" viewBox="0 0 591 600" fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <g clip-path="url(#clip0_603_1557)">

                                <!-- Ring 1 - Clockwise -->
                                <path class="ring ring-cw slow"
                                    d="M336.046 599.363C475.024 599.363 587.689 486.439 587.689 347.141C587.689 207.843 475.024 94.9194 336.046 94.9194C197.067 94.9194 84.4023 207.843 84.4023 347.141C84.4023 486.439 197.067 599.363 336.046 599.363Z"
                                    stroke="#307ABD" stroke-width="1.29662" stroke-miterlimit="10" />

                                <!-- Ring 2 - Anti Clockwise -->
                                <path class="ring ring-ccw fast"
                                    d="M502.263 469.548C609.261 362.304 609.261 188.427 502.263 81.1826C395.265 -26.0615 221.786 -26.0615 114.788 81.1826C7.78994 188.427 7.78994 362.304 114.788 469.548C221.786 576.792 395.265 576.792 502.263 469.548Z"
                                    stroke="#307ABD" stroke-width="1.29662" stroke-miterlimit="10" />

                                <!-- Ring 3 - Clockwise -->
                                <path class="ring ring-cw medium"
                                    d="M446.929 500.217C549.081 397.83 549.081 231.828 446.929 129.441C344.777 27.054 179.155 27.054 77.003 129.441C-25.1492 231.828 -25.1492 397.83 77.003 500.217C179.155 602.604 344.777 602.604 446.929 500.217Z"
                                    stroke="#307ABD" stroke-width="1.29662" stroke-miterlimit="10" />

                            </g>

                            <defs>
                                <clipPath id="clip0_603_1557">
                                    <rect width="590.025" height="600" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>

                    <img src="{{ asset('public/front/images/time-icon.png') }}" class="img-fluid heart-icon" alt="Focus Icon">
                    <img src="{{ asset('public/front/images/men-icon.png') }}" class="img-fluid men-icon" alt="Focus Icon">
                    <img src="{{ asset('public/front/images/alvio-logo.png') }}" class="img-fluid alvio-logo" alt="Alvio Logo">
                    <img src="{{ asset('public/front/images/synergy-icon.png') }}" class="img-fluid puzzle-icon" alt="Heart Icon">

                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')