@include('layouts.frontheader')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>


@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
       <img src="{{ asset('public/front/images/heritage -banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Our Heritage</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">{{ $menubanner->title }}</h1>
            <p class="text-white page-header-para">{!! $menubanner->description !!}</p>
        </div>
        <div class="page-header-btn">
            <a href="{{ route('contact') }}" target="_blank">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="{{ route('contact') }}" target="_blank" class="common-arrow-img"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z" fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
    </div>
</section>
@endif

<section class="heritage-timeline mt-100">
  
    <nav class="timeline-nav">
   @php
        $groupedPhases = collect($milestones)->groupBy('phase_id')->values();
    @endphp

    @foreach ($groupedPhases as $index => $phaseGroup)
        @php
            $firstItem = $phaseGroup->first();
        @endphp

        <button 
            class="timeline-nav__btn {{ $index == 0 ? 'timeline-nav__btn--active' : '' }}"
            data-target="#phase{{ $firstItem->phase_id }}">
            
            {{ $index + 1 }}. {{ $firstItem->phase_title }}
        </button>
    @endforeach
        {{-- <button class="timeline-nav__btn" data-target="#phase2">02. Transformation</button>
        <button class="timeline-nav__btn" data-target="#phase3">03. Growth</button>
        <button class="timeline-nav__btn" data-target="#phase4">04. Vision</button>
        <button class="timeline-nav__btn" data-target="#phase5">05. Expansion</button> --}}

    </nav>

    {{-- <div class="timeline">

        <div class="timeline__mobile-line"><div class="timeline__mobile-draw"></div></div>

        <svg class="timeline__svg-desktop" viewBox="0 0 1200 3200">
            <defs>
                <linearGradient id="grad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#307abd"/>
                    <stop offset="50%" stop-color="#307abd"/>
                    <stop offset="100%" stop-color="#307abd"/>
                </linearGradient>
            </defs>
            
            <path class="timeline__path-base" d="M 600 0 C 600 50, 900 100, 900 200 C 900 350, 300 350, 300 500 C 300 650, 900 650, 900 800 C 900 950, 300 950, 300 1100 C 300 1250, 900 1250, 900 1400 C 900 1550, 300 1550, 300 1700 C 300 1850, 900 1850, 900 2000 C 900 2150, 300 2150, 300 2300 C 300 2450, 900 2450, 900 2600 C 900 2750, 300 2750, 300 2900 C 300 3050, 600 3100, 600 3200"/>
            <path class="timeline__path-base" d="M 600 0 C 600 60, 880 110, 880 200 C 880 340, 320 360, 320 500 C 320 640, 880 660, 880 800 C 880 940, 320 960, 320 1100 C 320 1240, 880 1260, 880 1400 C 880 1540, 320 1560, 320 1700 C 320 1840, 880 1860, 880 2000 C 880 2140, 320 2160, 320 2300 C 320 2440, 880 2460, 880 2600 C 880 2740, 320 2760, 320 2900 C 320 3040, 600 3090, 600 3200"/>
            <path class="timeline__path-base" d="M 600 0 C 600 70, 860 120, 860 200 C 860 330, 340 370, 340 500 C 340 630, 860 670, 860 800 C 860 930, 340 970, 340 1100 C 340 1230, 860 1270, 860 1400 C 860 1530, 340 1570, 340 1700 C 340 1830, 860 1870, 860 2000 C 860 2130, 340 2170, 340 2300 C 340 2430, 860 2470, 860 2600 C 860 2730, 340 2770, 340 2900 C 340 3030, 600 3080, 600 3200"/>

            <path class="timeline__path-glow draw-path" d="M 600 0 C 600 50, 900 100, 900 200 C 900 350, 300 350, 300 500 C 300 650, 900 650, 900 800 C 900 950, 300 950, 300 1100 C 300 1250, 900 1250, 900 1400 C 900 1550, 300 1550, 300 1700 C 300 1850, 900 1850, 900 2000 C 900 2150, 300 2150, 300 2300 C 300 2450, 900 2450, 900 2600 C 900 2750, 300 2750, 300 2900 C 300 3050, 600 3100, 600 3200"/>
            <path class="timeline__path-glow draw-path" d="M 600 0 C 600 60, 880 110, 880 200 C 880 340, 320 360, 320 500 C 320 640, 880 660, 880 800 C 880 940, 320 960, 320 1100 C 320 1240, 880 1260, 880 1400 C 880 1540, 320 1560, 320 1700 C 320 1840, 880 1860, 880 2000 C 880 2140, 320 2160, 320 2300 C 320 2440, 880 2460, 880 2600 C 880 2740, 320 2760, 320 2900 C 320 3040, 600 3090, 600 3200"/>
            <path class="timeline__path-glow draw-path" d="M 600 0 C 600 70, 860 120, 860 200 C 860 330, 340 370, 340 500 C 340 630, 860 670, 860 800 C 860 930, 340 970, 340 1100 C 340 1230, 860 1270, 860 1400 C 860 1530, 340 1570, 340 1700 C 340 1830, 860 1870, 860 2000 C 860 2130, 340 2170, 340 2300 C 340 2430, 860 2470, 860 2600 C 860 2730, 340 2770, 340 2900 C 340 3030, 600 3080, 600 3200"/>
        </svg>
        
        <div id="phase1" class="timeline__item timeline__item--right" style="--d-top: 200px;">
            <div class="timeline__node">2003</div>
            <div class="timeline__card"> 
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 1: Foundation</span></div>
                <h2 class="timeline__title">The Beginning</h2>
                <p class="timeline__desc">Salud Care was founded by Mr. Basudev Dudhwewala, Mr. Shiv Kumar Dudhwewala, and Mr. Manish Dudhwewala as a marketing-focused pharmaceutical firm operating in West Bengal and Bihar.</p>
            </div>
        </div>

        <div class="timeline__item timeline__item--left" style="--d-top: 500px;">
            <div class="timeline__node">2007</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 1: Foundation</span></div>
                <h2 class="timeline__title">First Expansion</h2>
                <p class="timeline__desc">The company established its first manufacturing setup following relocation to Roorkee, Uttarakhand, marking a significant operational milestone.</p>
            </div>
        </div>

        <div class="timeline__item timeline__item--right" style="--d-top: 800px;">
            <div class="timeline__node">2010</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 1: Foundation</span></div>
                <h2 class="timeline__title">Strategic Leadership</h2>
                <p class="timeline__desc">Mr. Nilesh Dudhwewala joined the business. Alvio was introduced as a cardio-diabetic division, expanding into East and North-East India.</p>
            </div>
        </div>

        <div id="phase2" class="timeline__item timeline__item--left" style="--d-top: 1100px;">
            <div class="timeline__node">2013</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 2: Transformation</span></div>
                <h2 class="timeline__title">Expansion & Shift</h2>
                <p class="timeline__desc">Operations expanded into Gujarat and Maharashtra, with Ahmedabad becoming a key operational base.</p>
            </div>
        </div>

        <div class="timeline__item timeline__item--right" style="--d-top: 1400px;">
            <div class="timeline__node">2016</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 2: Transformation</span></div>
                <h2 class="timeline__title">Structural Evolution</h2>
                <p class="timeline__desc">Salud Care underwent restructuring into two entities. Alvio emerged as a separate cardio-diabetic-focused business.</p>
            </div>
        </div>

        <div class="timeline__item timeline__item--left" style="--d-top: 1700px;">
            <div class="timeline__node">2018</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 2: Transformation</span></div>
                <h2 class="timeline__title">Division Strengthening</h2>
                <p class="timeline__desc">The cardio division was further segmented into Hales and Osler, enhancing focus across therapeutic segments.</p>
            </div>
        </div>

        <div id="phase3" class="timeline__item timeline__item--right" style="--d-top: 2000px;">
            <div class="timeline__node">2020</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 3: Growth</span></div>
                <h2 class="timeline__title">Global Vision</h2>
                <p class="timeline__desc">Stelvio Healthcare LLP was established to expand nutraceutical exports across international markets.</p>
            </div>
        </div>

        <div class="timeline__item timeline__item--left" style="--d-top: 2300px;">
            <div class="timeline__node">2023</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 3: Growth</span></div>
                <h2 class="timeline__title">Expansion & Acquisition</h2>
                <p class="timeline__desc">A nutraceutical plant was established in Ahmedabad. Rebase Lifesciences was acquired, strengthening group capabilities.</p>
            </div>
        </div>

        <div class="timeline__item timeline__item--right" style="--d-top: 2600px;">
            <div class="timeline__node">2024</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 3: Growth</span></div>
                <h2 class="timeline__title">Dermatology Expansion</h2>
                <p class="timeline__desc">Launch of “Rasavio & UNCAP” marked Alvio’s entry into dermocosmetics, integrating pharmaceutical science with skincare innovation.</p>
            </div>
        </div>

        <div id="phase4" class="timeline__item timeline__item--left" style="--d-top: 2900px;">
            <div class="timeline__node">2030</div>
            <div class="timeline__card">
                <div class="timeline__tag"><div class="timeline__tag-line"></div><span class="timeline__tag-text">Phase 4: Future</span></div>
                <h2 class="timeline__title">Vision Ahead</h2>
                <p class="timeline__desc">Alvio aims to achieve ₹500 Crores in revenue, with expansion across Cardio-diabetic, Dermatology, and Nutraceutical segments.</p>
            </div>
        </div>

    </div> --}}
    <div class="timeline">

        <div class="timeline__mobile-line">
            <div class="timeline__mobile-draw"></div>
        </div>

        <svg class="timeline__svg-desktop" viewBox="0 0 1200 3200">
            <defs>
                <linearGradient id="grad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#307abd"/>
                    <stop offset="50%" stop-color="#307abd"/>
                    <stop offset="100%" stop-color="#307abd"/>
                </linearGradient>
            </defs>
            
            <path class="timeline__path-base" d="M 600 0 C 600 50, 900 100, 900 200 C 900 350, 300 350, 300 500 C 300 650, 900 650, 900 800 C 900 950, 300 950, 300 1100 C 300 1250, 900 1250, 900 1400 C 900 1550, 300 1550, 300 1700 C 300 1850, 900 1850, 900 2000 C 900 2150, 300 2150, 300 2300 C 300 2450, 900 2450, 900 2600 C 900 2750, 300 2750, 300 2900 C 300 3050, 600 3100, 600 3200"/>
            <path class="timeline__path-base" d="M 600 0 C 600 60, 880 110, 880 200 C 880 340, 320 360, 320 500 C 320 640, 880 660, 880 800 C 880 940, 320 960, 320 1100 C 320 1240, 880 1260, 880 1400 C 880 1540, 320 1560, 320 1700 C 320 1840, 880 1860, 880 2000 C 880 2140, 320 2160, 320 2300 C 320 2440, 880 2460, 880 2600 C 880 2740, 320 2760, 320 2900 C 320 3040, 600 3090, 600 3200"/>
            <path class="timeline__path-base" d="M 600 0 C 600 70, 860 120, 860 200 C 860 330, 340 370, 340 500 C 340 630, 860 670, 860 800 C 860 930, 340 970, 340 1100 C 340 1230, 860 1270, 860 1400 C 860 1530, 340 1570, 340 1700 C 340 1830, 860 1870, 860 2000 C 860 2130, 340 2170, 340 2300 C 340 2430, 860 2470, 860 2600 C 860 2730, 340 2770, 340 2900 C 340 3030, 600 3080, 600 3200"/>

            <path class="timeline__path-glow draw-path" d="M 600 0 C 600 50, 900 100, 900 200 C 900 350, 300 350, 300 500 C 300 650, 900 650, 900 800 C 900 950, 300 950, 300 1100 C 300 1250, 900 1250, 900 1400 C 900 1550, 300 1550, 300 1700 C 300 1850, 900 1850, 900 2000 C 900 2150, 300 2150, 300 2300 C 300 2450, 900 2450, 900 2600 C 900 2750, 300 2750, 300 2900 C 300 3050, 600 3100, 600 3200"/>
            <path class="timeline__path-glow draw-path" d="M 600 0 C 600 60, 880 110, 880 200 C 880 340, 320 360, 320 500 C 320 640, 880 660, 880 800 C 880 940, 320 960, 320 1100 C 320 1240, 880 1260, 880 1400 C 880 1540, 320 1560, 320 1700 C 320 1840, 880 1860, 880 2000 C 880 2140, 320 2160, 320 2300 C 320 2440, 880 2460, 880 2600 C 880 2740, 320 2760, 320 2900 C 320 3040, 600 3090, 600 3200"/>
            <path class="timeline__path-glow draw-path" d="M 600 0 C 600 70, 860 120, 860 200 C 860 330, 340 370, 340 500 C 340 630, 860 670, 860 800 C 860 930, 340 970, 340 1100 C 340 1230, 860 1270, 860 1400 C 860 1530, 340 1570, 340 1700 C 340 1830, 860 1870, 860 2000 C 860 2130, 340 2170, 340 2300 C 340 2430, 860 2470, 860 2600 C 860 2730, 340 2770, 340 2900 C 340 3030, 600 3080, 600 3200"/>
        </svg>

        @foreach ($milestones as $index => $milestone)
            @php
                $isRight = $index % 2 == 0; // alternate left-right
                $top = 200 + ($index * 300); // dynamic spacing
            @endphp

            <div id="phase{{ $index + 1 }}"
                class="timeline__item {{ $isRight ? 'timeline__item--right' : 'timeline__item--left' }}"
                style="--d-top: {{ $top }}px;">

                <div class="timeline__node">
                    {{ $milestone->year ?? '' }}
                </div>

                <div class="timeline__card">
                    <div class="timeline__tag">
                        <div class="timeline__tag-line"></div>
                        <span class="timeline__tag-text">
                            Phase {{ $milestone->phase_id ?? ($index+1) }}: {{ $milestone->phase_title ?? '' }}
                        </span>
                    </div>

                    <h2 class="timeline__title">
                        {{ $milestone->title }}
                    </h2>

                    <p class="timeline__desc">
                        {!! $milestone->description !!}
                    </p>
                </div>
            </div>
        @endforeach

    </div>
</section>

<script>
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// 1. Initialize Desktop SVG Paths
document.querySelectorAll(".draw-path").forEach((path) => {
    const len = path.getTotalLength();
    path.style.strokeDasharray = len;
    path.style.strokeDashoffset = len;
});

// 2. Draw both desktop SVG AND mobile gradient line concurrently
gsap.to([".draw-path", ".timeline__mobile-draw"], {
    strokeDashoffset: 0,
    height: "100%", 
    ease: "none",
    scrollTrigger: {
        trigger: ".timeline",
        start: "top center", 
        end: "bottom bottom", 
        scrub: 1 
    }
});

// 3. Responsive Card Animations via MatchMedia
let mm = gsap.matchMedia();

// Desktop Rules
mm.add("(min-width: 993px)", () => {
    gsap.utils.toArray(".timeline__card").forEach((card) => {
        gsap.to(card, {
            opacity: 1,
            y: "-50%", 
            duration: 0.8,
            ease: "power3.out",
            scrollTrigger: {
                trigger: card,
                start: "top 80%", 
                toggleActions: "play none none reverse"
            }
        });
    });
});

// Mobile/Tablet Rules
mm.add("(max-width: 992px)", () => {
    gsap.utils.toArray(".timeline__card").forEach((card) => {
        gsap.to(card, {
            opacity: 1,
            y: "0%", 
            duration: 0.8,
            ease: "power3.out",
            scrollTrigger: {
                trigger: card,
                start: "top 85%", 
                toggleActions: "play none none reverse"
            }
        });
    });
});

// 4. Tab Navigation Click Event (Smooth Scroll)
document.querySelectorAll('.timeline-nav__btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const targetId = this.getAttribute('data-target');
        gsap.to(window, {
            duration: 1.2,
            scrollTo: { y: targetId, offsetY: window.innerHeight / 3 },
            ease: "power4.inOut"
        });
    });
});

// 5. Dynamic Active Tab State Syncing on Scroll
const items = gsap.utils.toArray(".timeline__item");
const buttons = document.querySelectorAll('.timeline-nav__btn');

items.forEach((item, index) => {

    ScrollTrigger.create({
        trigger: item,
        start: "top center",
        end: "bottom center", // important fix
        onEnter: () => setActive(index),
        onEnterBack: () => setActive(index)
    });

});

function setActive(index) {
    buttons.forEach(btn => btn.classList.remove('timeline-nav__btn--active'));
    
    if (buttons[index]) {
        buttons[index].classList.add('timeline-nav__btn--active');
    }
}

// 6. Show/Hide Navigation Menu bound to Timeline Section (Top & Bottom Fix)
ScrollTrigger.create({
    trigger: ".heritage-timeline",
    start: "top center",    
    end: "bottom center",   
    toggleClass: { 
        targets: ".timeline-nav", 
        className: "is-visible" 
    }
});

// 7. Auto-Active Timeline Nodes on Scroll
gsap.utils.toArray(".timeline__item").forEach((item) => {
    const node = item.querySelector(".timeline__node");
    
    ScrollTrigger.create({
        trigger: item,
        start: "top 75%", // Jab item screen ke thoda andar aayega (75% height par)
        onEnter: () => node.classList.add("is-active"), // Niche aate waqt active karega
        onLeaveBack: () => node.classList.remove("is-active") // Wapas upar jane par deactivate karega
    });
});

</script>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')