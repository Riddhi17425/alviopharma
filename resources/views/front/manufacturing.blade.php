@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/manufacturing-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Manufacturing</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">Manufacturing & Quality</h1>
            <p class="text-white page-header-para">At Alvio Pharma, quality is driven by robust systems and trusted
                manufacturing partnerships. Our formulations are supported by compliance-led associates to ensure
                consistency, safety, and reliability.
            </p>
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
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-12" data-aos="fade-left">
            <p>Manufacturing Partners: <br />
                Salud Care India Limited | Stelvio Healthcare | Rebase Lifesciences
            </p>
        </div>

        <div class="col-xl-8 col-lg-7 col-md-12 bg-transparent">
            <h2 class="title-54 title--blue mb-40" data-aos="fade-right">Quality Manufacturing Backed by Trusted
                Partners
            </h2>

            <p>Alvio Pharmaceuticals operates with a strong focus on ethical marketing and dependable product quality.
                To ensure consistent supply and reliability, we collaborate with carefully evaluated manufacturing
                partners who follow strict compliance and documentation standards.

            </p>
            <p>Our ecosystem includes Salud Care India Limited and Stelvio Healthcare, enabling us to support diverse
                dosage forms and therapeutic requirements while maintaining high standards in process discipline and
                batch-level quality control. </p>

        </div>


        <div class="col-12 mt-40">
            <div class="featured-product-slider quality_driven_slider">
                <div class="mx-2">
                    <div class="manu_card com_bg_light_blue">
                        <h4 class="title-34 mb-3">Tablets</h4>
                        <p>Precision-manufactured tablet formulations designed for consistent dosage, stability, and
                            patient convenience.</p>
                    </div>
                </div>

                <div class="mx-2">
                    <div class="manu_card com_bg_light_blue">
                        <h4 class="title-34 mb-3">Capsules</h4>
                        <p>Carefully developed capsule formulations made for accurate delivery, reliable performance,
                            and ease of use.</p>
                    </div>
                </div>

                <div class="mx-2">
                    <div class="manu_card com_bg_light_blue">
                        <h4 class="title-34 mb-3">Liquids</h4>
                        <p>High-quality liquid formulations created for smooth administration, precise dosing, and
                            dependable stability.</p>
                    </div>
                </div>

                <div class="mx-2">
                    <div class="manu_card com_bg_light_blue">
                        <h4 class="title-34 mb-3">Ointments</h4>
                        <p>Topical ointment formulations prepared for effective application, product consistency, and
                            controlled performance.</p>
                    </div>
                </div>

                <div class="mx-2">
                    <div class="manu_card com_bg_light_blue">
                        <h4 class="title-34 mb-3">Dry Powder</h4>
                        <p>Specialized dry powder formulations processed for uniformity, stability, and reliable
                            therapeutic delivery.</p>
                    </div>
                </div>

                <div class="mx-2">
                    <div class="manu_card com_bg_light_blue">
                        <h4 class="title-34 mb-3">Nasal Sprays & Drops</h4>
                        <p>Nasal formulations developed for accurate administration, product integrity, and convenient
                            patient use.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>


<section class=" p-x mt-100">
    <div class="text-center">
        <p class="mb-2">Our Group Companies</p>
        <h2 class="title-54">Explore Our Manufacturing Partners</h2>
    </div>
    <div class="explore_our_tabs mt_80">
        <div class="tabs_left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <div class="active tabs_link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <img src="{{ asset('public/front/images/board-leadership1.png') }}" alt="images" class="img-fluid">
            </div>

            <div class="tabs_link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                <img src="{{ asset('public/front/images/board-leadership2.png') }}" alt="images" class="img-fluid">

            </div>
            <div class=" tabs_link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                <img src="{{ asset('public/front/images/board-leadership3.png') }}" alt="images" class="img-fluid">
            </div>
        </div>
        <div class="tab-content tabs_right" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h2 class="title-54 mb-40">Salud Care
                </h2>

                <p>Salud Care India Limited is a contract manufacturing company focused on delivering high-quality
                    finished pharmaceutical formulations with affordability, consistency, and global compliance at the
                    core of its operations. Since 2006, the company has steadily strengthened its infrastructure and
                    aligned its manufacturing systems with PIC/S-driven standards to support wider healthcare access.

                </p>

                <div class="mt-40">
                    <div class="btn_main">
                        <a href="https://saludcare.co.in" target="_blank" class="commo-btn"> Learn About Salud Care
                        </a>
                        <a href="https://saludcare.co.in" target="_blank" class="commo-btn-arrow"><svg width="15"
                                height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                                    fill="white" />
                                <path
                                    d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="title-54 mb-40">Stelvio Health Care
                </h2>

                <p>Stelvio Health Care is an R&D-driven pharmaceutical organization engaged in the manufacturing and marketing of formulations for global customer and patient needs. Backed by an integrated R&D setup and a WHO-GMP-accredited manufacturing facility in Ahmedabad, India, the company supports a wide range of therapeutic categories across oral solids, injectables, liquids, and nutraceutical/cosmeceutical products, while continuing to build its presence through branded formulations, generics, and international market reach.

                </p>

                <div class="mt-40">
                    <div class="btn_main">
                        <a href="https://stelviohealthcare.com" target="_blank" class="commo-btn">  Learn About Stelvio Health Care
                        </a>
                        <a href="https://stelviohealthcare.com" target="_blank" class="commo-btn-arrow"><svg width="15"
                                height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                                    fill="white" />
                                <path
                                    d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="title-54 mb-40">Rebase Lifescience Pvt. Ltd.
                </h2>

                <p>Rebase Lifescience Pvt. Ltd. is an integrated pharmaceutical company focused on developing, manufacturing, and marketing formulations for the pharmaceutical and nutraceutical sectors. With capabilities across softgel capsules, tablets, effervescent tablets, hard gelatin capsules, powders in sachets, and jellies, the company supports differentiated products and reliable outsourcing solutions through a focused, quality-driven approach.


                </p>

                <div class="mt-40">
                    <div class="btn_main">
                        <a href="https://rebaselifescience.com" target="_blank" class="commo-btn"> Learn About Rebase Lifescience Pvt. Ltd.
                        </a>
                        <a href="https://rebaselifescience.com" target="_blank" class="commo-btn-arrow"><svg width="15"
                                height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                                    fill="white" />
                                <path
                                    d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="intro-section  p-x mt-100 d-none">
    <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
            <img src="{{ asset('public/front/images/manufacturing.png') }}" alt="images" class="img-fluid">
        </div>



        <div class="col-md-6 ps-md-5">
            <h2 class="title-54 title--dark mb-40">Zero-Compromise Quality Oversight</h2>
            <p>Quality oversight is central to how Alvio operates. From partner evaluation and documentation review to
                batch release checks and continuous improvement, our approach is designed to support consistency and
                patient trust.
            </p>
            <p>Working with <b>Salud Care India Limited</b> and <b>Stelvio Healthcare</b>, we align quality expectations
                across
                manufacturing, testing, documentation, and distribution readiness so every product delivered to the
                market reflects our commitment to reliability.
            </p>

            <!-- <div class="mt-40">
                <div class="btn_main">
                    <a href="#" class="commo-btn">Discover Our Manufacturing Unit </a>
                    <a href="#" class="commo-btn-arrow"><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                                fill="white" />
                            <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div> -->
        </div>
    </div>

</section>


<section class="our_principles com_bg_pink mt-100 d-none">
    <div class="p-x">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7">

                <div class="state-content">
                    <h2 class="title-54 title--blue mb-40">Our Principles are at the Heart of Our Production.</h2>
                    <p>Our manufacturing philosophy is guided by core values that reflect our responsibility to
                        patients, healthcare professionals, and global healthcare systems. Represented through our Globe
                        Design, these values symbolize our interconnected approach to quality, ethics, and innovation
                        across every market we serve.</p>
                </div>
                <div class="state-accordion mt-40">
                    <div class="accordion" id="accordionExample">

                        @foreach($productions as $production)

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

                                    {{ $production->title }}

                                </button>
                            </h4>

                            <div id="{{ $collapseId }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">

                                <div class="accordion-body">
                                    {!! $production->description !!}
                                </div>

                            </div>
                        </div>

                        @endforeach
                        <!-- <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button title-34" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Health First
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Dedication to improving patient outcomes through purity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button title-34 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Excellence
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
                                    Accountability
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Alvio Pharma’s national operations are the foundation of our growth story.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFour">
                                <button class="accordion-button title-34 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Longevity
                                </button>
                            </h4>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Alvio Pharma’s national operations are the foundation of our growth story.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="manufacturing_globe">
                    <img src="{{ asset('public/ourproductionimage/'.$production->image) }}"
                        alt="{{ $production->title }}" class="img-fluid">
                    <p class="manufacturing_globe_para_1">Health First</p>
                    <p class="manufacturing_globe_para_2">Excellence</p>
                    <p class="manufacturing_globe_para_3">Accountability</p>
                    <p class="manufacturing_globe_para_4">Longevity</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-x mt-100 text-center mb-100 d-none">
    <h2 class="title-54 title--dark mb-40">Where Science Shapes Manufacturing
        Precision</h2>

    <p>Our Research & Laboratory operations serve as the scientific backbone of our manufacturing ecosystem. Through
        advanced analytical laboratories and formulation development units, we ensure that every product is built on
        robust scientific validation and therapeutic relevance. Our laboratories are equipped with modern analytical
        instruments, stability chambers, and controlled testing environments that support formulation optimization,
        bioavailability enhancement, and quality consistency. These capabilities allow us to refine dosage forms and
        maintain therapeutic performance throughout a product’s lifecycle.</p>

    <p class="mb-0">Collaboration between R&D, Quality, and Manufacturing teams ensures seamless translation of
        scientific insight into scalable, compliant production. This integrated approach strengthens process efficiency,
        reduces variability, and supports continuous product improvement. By aligning research with real-world clinical
        requirements, we create formulations that not only meet regulatory standards — but also enhance patient
        adherence and long-term outcomes.</p>

    <div>
        <h4 class="title-34 title--dark mb-40 mt-40"> Explore Our Manufacturing Partners</h4>

        @if($clientels->isNotEmpty())
        <div class="man_par_slider" role="list" aria-label="Manufacturing partner logos">
            @foreach($clientels as $clientel)
            <div class="man_par_slider-item" role="listitem">
                <img class="img-fluid" src="{{ asset('public/clientelimage/'.$clientel->image) }}"
                    alt="{{ $clientel->title }}" title="{{ $clientel->title }}">
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-muted">We will highlight our manufacturing partners here soon.</p>
        @endif
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
            img.classList.add("active");
            img.style.display = "block";
        }
    }

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


@include('layouts.fronttop-footer')
@include('layouts.frontfooter')