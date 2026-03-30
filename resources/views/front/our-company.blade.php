@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div>
        <img src="{{ asset('public/front/images/company-header-img.webp')}}" class="img-fluid" alt="{{ $menubanner->title }}">
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <p class="text-white"><a href="{{ url('/') }}">Home</a> / Who We Are / Our Company</p>
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
                </svg></a>
        </div>
    </div>
</section>
@endif

<section class="intro-section p-x mt-100">
    <div class="row mb-40">
        <div class="col-xl-4 col-lg-5 col-md-12">
            <p>About Alvio Pharma</p>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12">
            <h2 class="title-54 title--blue mb-40">A Purpose-Driven Pharmaceutical Organization</h2>

            <p>Alvio Pharmaceuticals is a new generation Pharmaceutical Company engaged in the marketing of Finished
                Pharmaceutical Formulations. Alvio has committed itself to the task of Improving Lives by providing high
                quality and affordable health care alternative to patients by identifying critical markets in different
                parts of the India.
                Alvio targets different therapeutic segment customized to the market we are presently based on the
                customer’s needs and the requirements. Today Alvio Pharmaceuticals has strongly established in the
                Ethical Pharmaceuticals Market as a trusted source of high-quality Formulations. Alvio has expanded its
                range from Chronic Therapy segments like Cardiovascular Medicines, Anti-Diabetics, Derma and
                Nutraceuticals products.</p>

            <p>Alvio is currently marketing its products in over 16 states in India. With a Team of over 300 highly
                motivated and trained professionals, Alvio is always looking to expand its boundaries and aims to be
                within reach of every single patient who needs quality medical care. Alvio owes its success to
                continuous focus on cutting-edge technology and innovative solutions to provide better results and
                efficacy to the patients while adhering to strict WHO GMP compliance and Manufacturing Practices.</p>

        </div>
    </div>

    <div class="row counter-section">
        <div class="col-xl-3">
            <div class="counter-item company-counter-item com_bg_light_blue">

                <h3 class="counter-number" data-target="8">8</h3>
                <p class="title-24 title--light-blue">Years Of Experiance</p>

            </div>
        </div>
        <div class="col-xl-3">
            <div class="counter-item company-counter-item com_bg_light_blue">
                <h3 class="counter-number" data-target="350">350</h3>
                <p class="title-24 title--light-blue">Team Members</p>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="counter-item company-counter-item com_bg_light_blue">
                <h3 class="counter-number" data-target="300">300+</h3>
                <p class="title-24 title--light-blue">Molecules Handled</p>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="counter-item company-counter-item com_bg_light_blue">
                <h3 class="counter-number" data-target="35">35K+</h3>
                <p class="title-24 title--light-blue">Ointments, Creams, and Gels.</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.vision-mission')

<section class="explore-state p-x mt-100">
    <div class="row align-items-center">
        <h2 class="title-54 mb-40">Expanding Horizons, Building Healthier Futures.</h2>
        <p class="mb-3">Alvio Pharma’s national operations are the foundation of our growth story. With a team of over
            300+ motivated professionals and a network that reaches 35,000+ healthcare providers across India, we are
            committed to making advanced, affordable healthcare accessible to every community.</p>
        <div class="col-xl-6">
            <div class="state-content">
                
                <p>Our national operations reflect a disciplined approach to growth guided by ethical governance, compliance-led practices, 
                    and a commitment to improving lives. By combining market insight with therapy-driven portfolio planning, we work to support
                     healthcare needs across diverse geographies with consistency and responsibility.</p>
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

<section class="principles-section p-x mt-100">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-12">
            <p>Our Purpose</p>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12">
            <h2 class="title-54 title--blue mb-40">Improving Lives</h2>

            <p class="mb-0">”Our purpose “Improving Lives”’ encapsulates our commitment to making a positive impact
                across various
                dimensions of our engagement, ranging from healthcare professionals to patients, channel partners, and
                our dedicated team. Through this ethos, we strive to contribute meaningfully to the well-being and
                betterment of individuals and communities, aligning our efforts with the broader goal of improving lives
                in every facet of our operations.”</p>
        </div>
    </div>
    <div class="principles-flex mt-40">
        <div class="principles-item">
            <p class="title-80">01.</p>
            <p class="title--blue mb-0">Reputation to Cure</p>
            <h5 class="principles-title">Doctors</h5>
            <p class="mb-0">Empowering healthcare professionals with trusted pharmaceutical solutions to enhance their
                ability to
                heal.</p>
        </div>
        <div class="principles-item">
            <p class="title-80">02.</p>
            <p class="title--blue mb-0">Health</p>
            <h5 class="principles-title">Patients</h5>
            <p class="mb-0">Delivering quality medicines that improve patient outcomes and contribute to healthier
                lives.</p>
        </div>
        <div class="principles-item">
            <p class="title-80">03.</p>
            <p class="title--blue mb-0">Healthy Business</p>
            <h5 class="principles-title">Channel Partners</h5>
            <p class="mb-0">Building sustainable partnerships that drive mutual growth and success in the healthcare
                ecosystem.</p>
        </div>
        <div class="principles-item">
            <p class="title-80">04.</p>
            <p class="title--blue mb-0">Healthy Career</p>
            <h5 class="principles-title">Employees</h5>
            <p class="mb-0">Fostering a supportive environment where talent thrives and careers flourish with purpose.
            </p>
        </div>

    </div>
</section>

<section class="our_val_main p-x com_bg_light_blue mt-100">
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

<section class="mt-100 p-x">
    <div class="mb-40 text-center">
        <h2 class="title-54 title--blue mb-2">Our Values</h2>
        <p>Our Group Companies</p>
    </div>
    <div class="man_par_slider">
        @foreach($clientels as $clientel)
        <img class="img-fluid" src="{{ asset('public/clientelimage/'.$clientel->image) }}" alt="{{ $clientel->title }}">
        @endforeach
        <!-- <img class="img-fluid" src="{{ asset('public/front/images/manufacturing-partners2.webp')}}" alt="manufacturing partners">
        <img class="img-fluid" src="{{ asset('public/front/images/manufacturing-partners3.webp')}}" alt="manufacturing partners"> -->
    </div>
</section>

<section class="mt-100 p-x">
    <div class="mb-40 text-center">
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
                    <img src="{{ asset('public/front/images/logo_red.svg')}}" alt="ALVIO Logo" style="max-width: 180px;">
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