@include('layouts.frontheader')
<section class="hero">
    <div class="hero_slider">
        <div class="hero-section">
            <img class="img-fluid" src="{{ asset('public/front/images/Banner-1.webp') }}" alt="hero image">
            <div class="hero-content">
                <h1 class="title-68">Advancing Healthcare with Science & Purpose</h1>
                <p class="text--white col-lg-6">Alvio Pharmaceuticals Pvt. Ltd. delivers high-quality, scientifically advanced formulations across Pharma, Nutraceuticals, and Cosmeceuticals. Backed by ethical practices and global standards for India and beyond.</p>
                <a href="{{ route('our.company') }}" target="_blank" class="commo-btn-arrow text--white--bg"><svg width="15" height="15" viewBox="0 0 15 15"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.749996 13.478L13.4779 0.750116L0.749996 13.478ZM13.4779 0.750116H3.5784H13.4779ZM13.4779 0.750116V10.6496V0.750116Z"
                            fill="#307ABD" />
                        <path d="M0.749996 13.478L13.4779 0.750116M13.4779 0.750116H3.5784M13.4779 0.750116V10.6496"
                            stroke="#307ABD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="hero-section">
            <img class="img-fluid" src="{{ asset('public/front/images/Banner-2.webp') }}" alt="hero image">
            <div class="hero-content">
                <h1 class="title-68">Addressing the Growing Burden of Chronic Diseases </h1>
                <p class="text--white col-lg-6">With a strong focus on long-term therapies, we aim to support patients and physicians through dependable treatment solutions.
                </p>
                <!-- <a href="#" class="commo-btn-arrow text--white--bg"><svg width="15" height="15" viewBox="0 0 15 15"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.749996 13.478L13.4779 0.750116L0.749996 13.478ZM13.4779 0.750116H3.5784H13.4779ZM13.4779 0.750116V10.6496V0.750116Z"
                            fill="#307ABD" />
                        <path d="M0.749996 13.478L13.4779 0.750116M13.4779 0.750116H3.5784M13.4779 0.750116V10.6496"
                            stroke="#307ABD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a> -->
            </div>
        </div>
        <div class="hero-section">
            <img class="img-fluid" src="{{ asset('public/front/images/Banner-3.webp') }}" alt="hero image">
            <div class="hero-content">
                <h1 class="title-68">Redefining Skin Health & Aesthetic Care</h1>
                <p class="text--white col-lg-6"> Spanning dermatology, cosmetology, and nutraceuticals, we are building the future of integrated healthcare.
</p>
                <!-- <a href="#" class="commo-btn-arrow text--white--bg"><svg width="15" height="15" viewBox="0 0 15 15"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.749996 13.478L13.4779 0.750116L0.749996 13.478ZM13.4779 0.750116H3.5784H13.4779ZM13.4779 0.750116V10.6496V0.750116Z"
                            fill="#307ABD" />
                        <path d="M0.749996 13.478L13.4779 0.750116M13.4779 0.750116H3.5784M13.4779 0.750116V10.6496"
                            stroke="#307ABD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a> -->
            </div>
        </div>
    </div>

    <div class="hero_arrow">
        <svg class="hero-prev" width="32" height="20" viewBox="0 0 32 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M32 10C32 10.6136 31.4883 11.1111 30.8571 11.1111L3.90196 11.1111L11.0938 18.1032C11.5402 18.5371 11.5402 19.2406 11.0938 19.6746C10.6475 20.1085 9.92391 20.1085 9.47759 19.6746L0.334738 10.7857C-0.111575 10.3518 -0.111575 9.64824 0.334738 9.21433L9.47759 0.325437C9.92391 -0.108479 10.6475 -0.108479 11.0938 0.325437C11.5402 0.759353 11.5402 1.46287 11.0938 1.89679L3.90196 8.88889L30.8571 8.88889C31.4883 8.88889 32 9.38635 32 10Z"
                fill="white" />
        </svg>
        <svg class="hero-next" width="32" height="20" viewBox="0 0 32 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0 10C0 9.38635 0.511675 8.88889 1.14286 8.88889L28.098 8.88889L20.9062 1.89679C20.4598 1.46287 20.4598 0.759353 20.9062 0.325438C21.3525 -0.108479 22.0761 -0.108479 22.5224 0.325438L31.6653 9.21432C32.1116 9.64824 32.1116 10.3518 31.6653 10.7857L22.5224 19.6746C22.0761 20.1085 21.3525 20.1085 20.9062 19.6746C20.4598 19.2406 20.4598 18.5371 20.9062 18.1032L28.098 11.1111L1.14286 11.1111C0.511675 11.1111 0 10.6136 0 10Z"
                fill="white" />
        </svg>
    </div>
</section>

<section class="intro-section p-x mt-100">
    <div class="row">
        <div class="col-xl-3 col-lg-5 col-md-12">
            <p>Where Science Meets Scalable Excellence</p>
        </div>
        <div class="col-xl-9 col-lg-7 col-md-12">
            <h2 class="title-54 mb-40">Alvio Pharma Built on Trust. Driven by Quality. 
</h2>

            <p>Alvio Pharmaceuticals is engaged in the marketing of Finished Pharmaceutical Formulations, with a clear focus on delivering reliable and effective healthcare solutions.
</p>
<p>We collaborate with carefully evaluated manufacturing partners and maintain stringent quality standards across sourcing, documentation, and batch review - ensuring consistency, safety, and trust in every product. </p>
            <div class="mt-40">
                <div class="btn_main">
                    <a href="{{ route('our.company') }}" target="_blank" class="commo-btn">Learn About Alvio Pharma
</a>
                    <a href="{{ route('our.company') }}" target="_blank" class="commo-btn-arrow"><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                                fill="white" />
                            <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter-section p-x mt-100">
    <div class="row gx-md-5">
        <div class="col-xl-4">
            <div class="counter-item com_bg_light_blue">
                <p class="title-24 title--light-blue">Strategic Partnerships </p>
                <h3 class="counter-number" data-target="50">50+</h3>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="counter-item com_bg_light_blue">
                <p class="title-24 title--light-blue">Formulation Success Rate</p>
                <h3 class="counter-number" data-target="73">73%</h3>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="counter-item com_bg_light_blue">
                <p class="title-24 title--light-blue">Employees Strong</p>
                <h3 class="counter-number" data-target="2000">2000+</h3>
            </div>
        </div>
    </div>
</section>

<section class="product-section mt-100">
    <div>
        <img src="{{ asset('public/front/images/darma-care-img.webp') }}" alt="Darma Care" class="img-fluid">
        <div class="product-content-left">
            <a href="#" class="common-arrow-icon">
                <svg width="104" height="53" viewBox="0 0 104 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M103 26.5L1.00001 26.5L103 26.5ZM1.00001 26.5L26.5001 0.999954L1.00001 26.5ZM1.00001 26.5L26.5 52L1.00001 26.5Z"
                        fill="white" />
                    <path d="M103 26.5L1.00001 26.5M1.00001 26.5L26.5001 0.999955M1.00001 26.5L26.5 52" stroke="white"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <h3 class="title-80 text--white  text-end">Derma Care</h3>
        </div>
    </div>
    <div>
        <img src="{{ asset('public/front/images/cardio-care-img.webp') }}" alt="Darma Care" class="img-fluid">
        <div class="product-content-right">
            <h3 class="title-80 text--white">Cardio Care</h3> <a href="#" class="common-arrow-icon"><svg width="104"
                    height="53" viewBox="0 0 104 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.00002 26.5L103 26.5L1.00002 26.5ZM103 26.5L77.4999 52L103 26.5ZM103 26.5L77.5 1.00001L103 26.5Z"
                        fill="white" />
                    <path d="M1.00001 26.5L103 26.5M103 26.5L77.4999 52M103 26.5L77.5 1.00001" stroke="white"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="product-slider p-x mt-100">
    <h2 class="title-54 text-center mb-40 ">Featured Products</h2>
    <div class="featured-product-slider">
        <div class="slider-item">
            <img src="{{ asset('public/front/images/Rasafin-Dusting-Powder.png') }}" alt="Rasafin Dusting Powder" class="w-100">
            <div class="slider-content">
                <p class="mb-2">Rasavio</p>
                <h5 class="title-24">Rasafin Dusting Powder</h5>
            </div>
            <a href="#" class="commo-btn-arrow"><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                        fill="white"></path>
                    <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
        <div class="slider-item">
            <img src="{{ asset('public/front/images/anti-acne-pm-gel.webp') }}" alt="Anti Acne PM Gel" class="w-100">
            <div class="slider-content">
                <p class="mb-2">Rasavio</p>
                <h5 class="title-24">Rasafin Dusting Powder</h5>
            </div>

            <a href="#" class="commo-btn-arrow "><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                        fill="white"></path>
                    <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
        <div class="slider-item">
            <img src="{{ asset('public/front/images/alviroz-10F.webp') }}" alt="Alviroz 10F" class="w-100">
            <div class="slider-content">
                <p class="mb-2">Rasavio</p>
                <h5 class="title-24">Rasafin Dusting Powder</h5>
            </div>

            <a href="#" class="commo-btn-arrow "><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                        fill="white"></path>
                    <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
        <div class="slider-item">
            <img src="{{ asset('public/front/images/anti-acne-face-cleanser.webp') }}" alt="Anti Acne Face Cleanser" class="w-100">
            <div class="slider-content">
                <p class="mb-2">Rasavio</p>
                <h5 class="title-24">Rasafin Dusting Powder</h5>
            </div>

            <a href="#" class="commo-btn-arrow "><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                        fill="white"></path>
                    <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
        <div class="slider-item">
            <img src="{{ asset('public/front/images/rasamom.webp') }}" alt="Rasamom" class="w-100">
            <div class="slider-content">
                <p class="mb-2">Rasavio</p>
                <h5 class="title-24">Rasafin Dusting Powder</h5>
            </div>

            <a href="#" class="commo-btn-arrow "><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                        fill="white"></path>
                    <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="explore-state p-x mt-100">
    <div class="row align-items-center">
        <div class="col-xl-6">
            <div class="state-content">
                <h2 class="title-54 mb-3">Expanding Reach, Improving Lives Across India.
</h2>
                <p>Alvio Pharma’s growing national presence is built on strong field execution and therapy-focused portfolios. With a team of <b>300+ trained professionals</b> and an expanding network across <b>16+ states</b>, we work to keep <b>quality, affordable formulations</b> accessible to the communities we serve.
</p>
            </div>

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
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#{{ $collapseId }}"
                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                aria-controls="{{ $collapseId }}">

                                {{ $unit->title }}

                            </button>
                        </h4>

                        <div id="{{ $collapseId }}"
                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                            aria-labelledby="{{ $headingId }}"
                            data-bs-parent="#accordionExample">

                            <div class="accordion-body">
                                {!! $unit->description !!}
                            </div>

                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="images-only">

                @foreach($units as $unit)

               <img src="{{ asset('public/homemapimage/'.$unit->image) }}"
                    alt="{{ $unit->title }}"
                    class="accordion-preview-img img-fluid"
                    data-panel="collapse{{ $loop->index }}">
                @endforeach

            </div>
        </div>

    </div>
</section>

<section class="blog-section p-x mt-100">
    <div class="blog-header mb-40">
        <div>
            <h2 class="title-54 title--blue">Latest Insights & <br />Healthcare Knowledge</h2>
        </div>
        <div class="btn_main">
            <a href="{{ route('blogs') }}" class="commo-btn ">View All</a>
            <a href="{{ route('blogs') }}" class="commo-btn-arrow "><svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                        fill="white" />
                    <path d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>

    </div>
    <div class="row g-lg-5">
        @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4">
            <div class="blogs">
                <img src="{{ asset('public/Blogs/front_image/'.$blog->front_image) }}" alt="blogs" class="w-100">
                <p class="blogs_data">{{ \Carbon\Carbon::parse($blog->date)->format('F d, Y') }}</p>
                <a href="{{ route('blogdetail', ['url' => $blog->url]) }}">
                    <p class="title-24 mb-0 title--dark">{{$blog->title}}</p>
                </a>
            </div>
        </div>
        @endforeach
       
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
