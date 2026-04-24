@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
       <img src="{{ asset('public/front/images/sustainability-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Sustainability & Responsibility</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white mb-3">{{ $menubanner->title }}</h1>
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

<section class="intro-section mastering_section p-x mt-100" data-aos="fade-up">
    <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="200">
        <div class="col-xl-4 col-lg-4 col-md-12" data-aos="fade-right">
            <div class="mastering_img">
                <img class="img-fluid" src="{{ asset('public/front/images/mastering.png') }}" alt="Mastering">
            </div>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12" data-aos="fade-left">
            <h2 class="title-54 mb-40">Precision-led responsibility for long-term impact</h2>

            <p>Our sustainability approach is structured, measurable, and aligned with responsible healthcare delivery. 
                We focus on strengthening ethical governance, improving operational efficiency, and working with accountable 
                partners across our supply network. By embedding responsible practices into planning, procurement, quality oversight,
                 and distribution readiness, we aim to reduce environmental impact while upholding consistency, compliance, and patient trust.</p>
        </div>

        <div class="row gy-3 gy-lg-0 mt-40 gx-0 gx-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="manu_card com_bg_light_blue">
                    <h4 class="title-34 mb-40">Responsible Partner Standards</h4>
                    <p class="mb-0">We work with carefully evaluated partners and emphasize documentation discipline,
                        quality expectations, and continuous improvement—so responsible practices are strengthened
                        across the ecosystem we rely on.</p>
                </div>

            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="manu_card com_bg_light_blue">
                    <h4 class="title-34 mb-40">Compliance & Governance</h4>
                    <p class="mb-0">Our approach is anchored in ethical conduct and compliance-led processes. We focus
                        on traceability, structured reviews, and transparent coordination to support consistent,
                        dependable product delivery.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="manu_card com_bg_light_blue">
                    <h4 class="title-34 mb-40">Value-Chain Sustainability</h4>
                    <p class="mb-0">We take a practical view of impact across the value chain—from sourcing and
                        packaging choices to logistics and distribution readiness—aiming to reduce waste while
                        maintaining reliability and access.</p>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="intro-section p-x mt-100">
    <div class="mb-40 d-flex align-items-center justify-content-between">
        <h2 class="title-54">Our Impact </h2>

        <div class="modern-tabs">
            <ul class="nav nav-tabs" id="filledTabs" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-1" data-bs-toggle="tab" data-id="1"
                        data-bs-target="#tab-content-1" type="button" role="tab" aria-selected="true">
                        People & Communities
                    </button>
                </li>


                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-2" data-bs-toggle="tab" data-id="2" data-bs-target="#tab-content-2"
                        type="button" role="tab" aria-selected="false">
                        Environment & Value Chain
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-3" data-bs-toggle="tab" data-id="3" data-bs-target="#tab-content-3"
                        type="button" role="tab" aria-selected="false">
                        Governance & Integrity
                    </button>
                </li>
            </ul>


        </div>

    </div>

    <div class="tab-content" id="filledTabsContent">

        <div class="tab-pane fade show active" id="tab-content-1" role="tabpanel" aria-labelledby="tab-1">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('public/front/images/PEOPLE-COMMUNITIES.webp') }}" alt="images" class="img-fluid">
                </div>

                <div class="col-md-6 ps-md-5">
                    <div class="mb-40">
                        <h2 class="title-54 title--dark mb-3">Improving lives by strengthening access, awareness, and
                            support.
                        </h2>
                        <p>Alvio’s purpose, <b>Improving Lives</b>, is reflected in how we serve patients and healthcare
                            professionals
                            across the markets we reach. As an ethical marketing company for finished formulations, we
                            focus on
                            expanding access, supporting continuity of care, and encouraging informed health decisions
                            through
                            responsible engagement and awareness-led initiatives.
                        </p>
                    </div>

                    <h5 class="title-24 title--blue mb-3">People & Communities</h5>
                    <ul>
                        <li class="mb-2"> <b>Access & Availability:</b> Supporting continuity of care through consistent
                            market
                            presence.
                        </li>
                        <li class="mb-2"> <b>Health Awareness:</b> Promoting understanding of chronic care, adherence,
                            and
                            prevention.
                        </li>
                        <li class="mb-2"><b>Responsible Engagement:</b> Ethical, compliant interactions with healthcare
                            stakeholders.
                        </li>

                        <li class="mb-2"> <b>People Development:</b> Training and capability building to strengthen
                            service
                            quality.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-content-2" role="tabpanel" aria-labelledby="tab-2">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('public/front/images/ENVIRONMENT-VALUE CHAIN.webp') }}" alt="images" class="img-fluid">
                </div>

                <div class="col-md-6 ps-md-5">
                    <div class="mb-40">
                        <h2 class="title-54 title--dark mb-3">Practical sustainability across sourcing, packaging, and distribution.

                        </h2>
                        <p>We recognise that healthcare progress must be responsible. While Alvio does not operate manufacturing 
                            facilities, we take a value-chain approach to sustainability, strengthening expectations with partners
                             and improving efficiency in how products are planned, packaged, stored, and distributed. We aim to reduce
                              avoidable waste while maintaining reliability and access.

                        </p>
                    </div>

                    <h5 class="title-24 title--blue mb-3">Environment & Value Chain</h5>
                    <ul>
                        <li class="mb-2"> <b>Responsible Partner Collaboration:</b> Encouraging aligned standards and review-driven improvements.

                        </li>
                        <li class="mb-2"> <b>Packaging Efficiency:</b> Supporting right-sized packaging and reduced material waste where feasible.

                        </li>
                        <li class="mb-2"><b>Distribution Efficiency:</b> Better planning to minimise damage, returns, and unnecessary movement.
                        </li>

                        <li class="mb-2"> <b>Continuous Improvement: </b> Ongoing review to identify and reduce resource-intensive gaps.

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-content-3" role="tabpanel" aria-labelledby="tab-3">
           <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('public/front/images/GOVERNANCE-INTEGRITY.webp') }}" alt="images" class="img-fluid">
                </div>

                <div class="col-md-6 ps-md-5">
                    <div class="mb-40">
                        <h2 class="title-54 title--dark mb-3">Accountability that protects trust in healthcare.
                        </h2>
                        <p>Trust is essential in healthcare, and governance is how we protect it. Alvio’s approach is
                             built on ethical conduct, compliance-first processes, and documentation discipline. By 
                             strengthening accountability across decisions, partner coordination, and communication, 
                             we aim to deliver consistent value with transparency and responsibility.
                        </p>
                    </div>

                    <h5 class="title-24 title--blue mb-3">Governance & Integrity</h5>
                    <ul>
                        <li class="mb-2"> <b>Compliance-First Operations: </b> Processes aligned to applicable regulations and ethical standards.</li>
                        <li class="mb-2"> <b>Documentation Discipline:</b> Traceability-led review practices that strengthen consistency.
                        </li>
                        <li class="mb-2"><b>Partner Accountability:</b> Clear expectations around quality, conduct, and responsible practices.</li>

                        <li class="mb-2"> <b>Responsible Communication:</b> Non-misleading, ethical engagement across stakeholders.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="our_principles com_bg_pink mt-100">
    <div class="p-x">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7">
                <div class="state-content">
                    <h2 class="title-54 title--blue mb-5">The Impact of Our Responsibility</h2>
                    <p>At Alvio Pharma, responsibility is action-driven. As an ethical marketing company for finished 
                        pharmaceutical formulations, we focus on improving lives by strengthening access, supporting consistent
                         quality through accountable partner collaboration, and building trust through compliance-led practices.
                          Our responsibility is reflected in how we engage with healthcare professionals, manage our value chain,
                           and reduce avoidable impact so the outcomes benefit patients, partners, and communities.</p>
                </div>
                <div class="state-accordion mt-40">
                    <div class="accordion" id="accordionPrinciples">
                        @foreach($ourprinciples as $principles)
                            @php
                                $collapseId = "principlesCollapse".$loop->index;
                                $headingId = "principlesHeading".$loop->index;
                            @endphp

                            <div class="accordion-item">
                                <h4 class="accordion-header" id="{{ $headingId }}">
                                    <button class="accordion-button title-34 {{ $loop->first ? '' : 'collapsed' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#{{ $collapseId }}"
                                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                        aria-controls="{{ $collapseId }}"
                                        data-label="{{ $principles->title }}">
                                        {{ $principles->title }}
                                    </button>
                                </h4>
                                <div id="{{ $collapseId }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    aria-labelledby="{{ $headingId }}"
                                    data-bs-parent="#accordionPrinciples">
                                    <div class="accordion-body">
                                        {!! $principles->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                
               <div class="our_respons">
                 <img src="{{ asset('public/ourproductionimage/'.$principles->image) }}" alt="{{ $principles->title }}" class="img-fluid">
                 <p class="mb-0 font-weight-bold" id="principlesActiveLabel">Patient & HCP Confidence</p>
               </div>
               
                <!-- <img src="{{ asset('public/front/images/new_test.png') }}" alt="images" class="img-fluid"> -->
            </div>
        </div>
    </div>
</section>


<section class=" mt-100 mb-100">
    <div class="p-x">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7">
                <div class="state-content">
                    <h2 class="title-54 title--blue mb-4">A Culture Built on Responsibility</h2>
                    <p>At Alvio Pharma, responsibility is part of our everyday culture, not a one-time commitment. It
                        shapes how we engage with healthcare professionals, collaborate with partners, and deliver value
                        across the markets we serve. Guided by our purpose of <b>Improving Lives</b>, we focus on ethical
                        conduct, continuous improvement, and accountable decision-making across the value chain.
                    </p>
                </div>
                <div class="state-accordion mt-40">
                    <div class="accordion" id="accordionResponsibility">
                        @foreach($ourresponsibility as $key => $item)
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="responsibilityHeading{{$key}}">
                                    <button class="accordion-button title-34 {{ $key != 0 ? 'collapsed' : '' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#responsibilityCollapse{{$key}}"
                                        aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                        aria-controls="responsibilityCollapse{{$key}}">
                                        <img src="{{ asset('public/ourproductionimage/'.$item->image) }}" alt="{{ $item->title }}">
                                        <span>{{ $item->title }}</span>
                                    </button>
                                </h4>
                                <div id="responsibilityCollapse{{$key}}"
                                    class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                    aria-labelledby="responsibilityHeading{{$key}}"
                                    data-bs-parent="#accordionResponsibility">
                                    <div class="accordion-body">
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

                    
                    <img src="{{ asset('public/front/images/heart-icon-2.png') }}" class="img-fluid heart-icon" alt="Focus Icon">
                    <img src="{{ asset('public/front/images/men-icon.png') }}" class="img-fluid men-icon" alt="Focus Icon">
                    <img src="{{ asset('public/front/images/alvio-logo.png') }}" class="img-fluid alvio-logo" alt="Alvio Logo">
                    <img src="{{ asset('public/front/images/puzzle-icon.png') }}" class="img-fluid puzzle-icon" alt="Heart Icon"> 

                </div>
            </div>
        </div>
    </div>
</section>



<script>
// Sync active label for principlesAccordion
const principlesAccordion = document.getElementById("accordionPrinciples");
const principlesLabel = document.getElementById("principlesActiveLabel");

if (principlesAccordion && principlesLabel) {
    principlesAccordion.addEventListener("shown.bs.collapse", function (e) {
        const btn = principlesAccordion.querySelector('[data-bs-target="#' + e.target.id + '"]');
        if (btn && btn.dataset.label) {
            principlesLabel.textContent = btn.dataset.label;
        }
    });

    // Set initial label from the first open accordion button
    const firstActiveBtn = principlesAccordion.querySelector(".accordion-button:not(.collapsed)");
    if (firstActiveBtn && firstActiveBtn.dataset.label) {
        principlesLabel.textContent = firstActiveBtn.dataset.label;
    }
}

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

  accordionEl.addEventListener("shown.bs.collapse", function (e) {
    const id = e.target.id;
    if (id) {
      setActiveImage(id);
    }
    exploreState.classList.add("accordion-open");
  });

  accordionEl.addEventListener("hidden.bs.collapse", function () {
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