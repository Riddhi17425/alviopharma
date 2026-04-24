@include('layouts.frontheader')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>


<style>

/* ========================================== */
/* SPATIAL TAB MENU */
/* ========================================== */
.tab-nav {
  position: fixed; top: 50%; left: 40px; transform: translateY(-50%);
  display: flex; flex-direction: column; gap: 8px; z-index: 100;
  background: rgba(255, 255, 255, 0.6); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
  padding: 20px; border-radius: 20px; border: 1px solid rgba(0, 0, 0, 0.03);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.04);
}
.tab-btn {
  background: transparent; border: none; text-align: left; padding: 12px 16px;
  cursor: pointer; color: #a3a3a3; font-size: 11px; font-weight: 800; text-transform: uppercase;
  letter-spacing: 2px; transition: all 0.4s ease; border-left: 2px solid transparent; outline: none;
}
.tab-btn:hover { color: #010101; padding-left: 20px; }
.tab-btn.active { color: #010101; border-left: 2px solid #FFB800; padding-left: 20px; }

/* ========================================== */
/* INTRO SECTION */
/* ========================================== */
.intro-section { text-align: center; max-width: 840px; margin: 140px auto 100px; padding: 0 24px; }
.intro-section h3 { color: #FF6B00; font-size: 14px; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 20px; font-weight: 900; }
.intro-section h1 { font-size: 56px; font-weight: 900; letter-spacing: -2px; margin-bottom: 24px; line-height: 1.1; }
.intro-section p { font-size: 18px; color: #666; line-height: 1.8; font-weight: 300; }

/* ========================================== */
/* DESKTOP TIMELINE CANVAS */
/* ========================================== */
.canvas { position: relative; width: 1200px; height: 3200px; margin: 0 auto; }
.desktop-svg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; }
.base-path { fill: none; stroke: rgba(0,0,0,0.04); stroke-width: 2; }
.glow-path { fill: none; stroke: url(#grad); stroke-width: 3.5; filter: drop-shadow(0 0 10px rgba(255,184,0,0.5)); stroke-linecap: round; }

/* Mobile Line (Hidden on Desktop) */
.mobile-line { display: none; }

.node {
  position: absolute; width: 56px; height: 56px; border-radius: 50%; background: #010101; color: #fff;
  display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 900;
  letter-spacing: 1px; cursor: pointer; transform: translate(-50%, -50%); 
  transition: all 0.4s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1); border: 4px solid #FAFAFA; z-index: 10;
}
.node:hover { background: #FFB800; color: #010101; transform: translate(-50%, -50%) scale(1.15); box-shadow: 0 15px 30px rgba(255,184,0,0.3); }

.card {
  position: absolute; width: 340px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px);
  border: 1px solid rgba(255, 255, 255, 1); border-radius: 20px; padding: 28px;
  box-shadow: 0 20px 40px -10px rgba(0,0,0,0.08); transform: translateY(0%); opacity: 0; z-index: 5;
}

.tag { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; }
.line { width: 24px; height: 2px; background: #FFB800; }
.tag span { font-size: 9px; letter-spacing: 2px; text-transform: uppercase; color: #a3a3a3; font-weight: 900; }
h2 { font-size: 24px; margin-bottom: 10px; letter-spacing: -0.5px; line-height: 1.2; }
p { color: #737373; font-size: 14px; line-height: 1.6; }
.phase-anchor { position: absolute; width: 100%; height: 1px; visibility: hidden; pointer-events: none; }

/* ========================================== */
/* RESPONSIVE: TABLET & MOBILE */
/* ========================================== */
@media (max-width: 992px) {
  .intro-section { margin-top: 80px; margin-bottom: 60px; }
  .intro-section h1 { font-size: 40px; }
  
  /* Reset Canvas for Vertical Flow */
  .canvas { width: 100%; height: auto; padding: 0 20px 100px 20px; }
  .desktop-svg { display: none; } /* Hide the complex curve */
  
  /* Show sleek vertical mobile line */
  .mobile-line {
    display: block; position: absolute; left: 48px; top: 0; bottom: 0; width: 3px; background: rgba(0,0,0,0.05); z-index: 0;
  }
  .mobile-line-draw {
    width: 100%; height: 0%; background: linear-gradient(to bottom, #FFB800, #FF6B00); box-shadow: 0 0 10px rgba(255,184,0,0.5);
  }

  /* Snap everything into a vertical list */
  .milestone { position: relative; margin-bottom: 60px; padding-left: 70px; display: flex; flex-direction: column; justify-content: center; min-height: 100px; }
  .phase-anchor { top: -40px !important; position: relative; } /* Fix anchor positioning for mobile */
  
  .node {
    position: absolute !important; left: 28px !important; top: 50% !important; transform: translate(-50%, -50%) !important;
  }
  .node:hover { transform: translate(-50%, -50%) scale(1.1) !important; }

  .card { position: relative !important; top: auto !important; left: auto !important; width: 100%; }

  /* Transform Tab Menu into a Mobile Bottom App Bar */
  .tab-nav {
    top: auto; bottom: 20px; left: 50%; transform: translateX(-50%); width: calc(100% - 40px);
    flex-direction: row; overflow-x: auto; padding: 12px; border-radius: 100px;
    -ms-overflow-style: none; scrollbar-width: none;
  }
  .tab-nav::-webkit-scrollbar { display: none; }
  .tab-btn { white-space: nowrap; border-left: none; border-bottom: 2px solid transparent; padding: 8px 12px; }
  .tab-btn:hover { padding-left: 12px; border-bottom: 2px solid #FFB800; }
  .tab-btn.active { padding-left: 12px; border-left: none; border-bottom: 2px solid #FFB800; }
}
</style>


@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
       <img src="{{ asset('public/front/images/heritage -banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Our Heritage</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
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

<section class="mt-100 millstone_main p-x">
    
<div class="tab-nav">
  <button class="tab-btn active" data-target="#phase1">01. Foundation</button>
  <button class="tab-btn" data-target="#phase2">02. Transformation</button>
  <button class="tab-btn" data-target="#phase3">03. Growth</button>
  <button class="tab-btn" data-target="#phase4">04. Vision</button>
</div>

<div class="intro-section">
  <h3>A Legacy of Growth</h3>
  <h1>Our Heritage & Trust</h1>
  <p>Alvio Pharma’s journey is rooted in strong foundations, strategic evolution, and a commitment to improving healthcare access. From its origins under Salud Care to becoming an independent and growing pharmaceutical organization, our story reflects continuous progress and purpose-driven growth.</p>
</div>

<div class="canvas">

  <div class="mobile-line"><div class="mobile-line-draw"></div></div>

  <svg class="desktop-svg" viewBox="0 0 1200 3200">
    <defs>
      <linearGradient id="grad" x1="0" y1="0" x2="0" y2="1">
        <stop offset="0%" stop-color="#FFB800"/>
        <stop offset="100%" stop-color="#FF6B00"/>
      </linearGradient>
    </defs>
    <path class="base-path" d="M 600 0 C 600 50, 900 100, 900 200 C 900 350, 300 350, 300 500 C 300 650, 900 650, 900 800 C 900 950, 300 950, 300 1100 C 300 1250, 900 1250, 900 1400 C 900 1550, 300 1550, 300 1700 C 300 1850, 900 1850, 900 2000 C 900 2150, 300 2150, 300 2300 C 300 2450, 900 2450, 900 2600 C 900 2750, 300 2750, 300 2900 C 300 3050, 600 3100, 600 3200"/>
    <path class="base-path" d="M 600 0 C 600 60, 880 110, 880 200 C 880 340, 320 360, 320 500 C 320 640, 880 660, 880 800 C 880 940, 320 960, 320 1100 C 320 1240, 880 1260, 880 1400 C 880 1540, 320 1560, 320 1700 C 320 1840, 880 1860, 880 2000 C 880 2140, 320 2160, 320 2300 C 320 2440, 880 2460, 880 2600 C 880 2740, 320 2760, 320 2900 C 320 3040, 600 3090, 600 3200"/>
    <path class="glow-path draw" d="M 600 0 C 600 50, 900 100, 900 200 C 900 350, 300 350, 300 500 C 300 650, 900 650, 900 800 C 900 950, 300 950, 300 1100 C 300 1250, 900 1250, 900 1400 C 900 1550, 300 1550, 300 1700 C 300 1850, 900 1850, 900 2000 C 900 2150, 300 2150, 300 2300 C 300 2450, 900 2450, 900 2600 C 900 2750, 300 2750, 300 2900 C 300 3050, 600 3100, 600 3200"/>
    <path class="glow-path draw" d="M 600 0 C 600 60, 880 110, 880 200 C 880 340, 320 360, 320 500 C 320 640, 880 660, 880 800 C 880 940, 320 960, 320 1100 C 320 1240, 880 1260, 880 1400 C 880 1540, 320 1560, 320 1700 C 320 1840, 880 1860, 880 2000 C 880 2140, 320 2160, 320 2300 C 320 2440, 880 2460, 880 2600 C 880 2740, 320 2760, 320 2900 C 320 3040, 600 3090, 600 3200"/>
  </svg>

  <div id="phase1" class="phase-anchor" style="top: 150px;"></div>
  
  <div class="milestone">
    <div class="node" style="top: 200px; left: 900px;">2003</div>
    <div class="card" style="top: 200px; left: 520px;"> 
      <div class="tag"><div class="line"></div><span>Phase 1: Foundation</span></div>
      <h2>The Beginning</h2>
      <p>Salud Care was founded by Mr. Basudev Dudhwewala, Mr. Shiv Kumar Dudhwewala, and Mr. Manish Dudhwewala as a marketing-focused pharmaceutical firm operating in West Bengal and Bihar.</p>
    </div>
  </div>

  <div class="milestone">
    <div class="node" style="top: 500px; left: 300px;">2007</div>
    <div class="card" style="top: 500px; left: 340px;">
      <div class="tag"><div class="line"></div><span>Phase 1: Foundation</span></div>
      <h2>First Expansion</h2>
      <p>The company established its first manufacturing setup following relocation to Roorkee, Uttarakhand, marking a significant operational milestone.</p>
    </div>
  </div>

  <div class="milestone">
    <div class="node" style="top: 800px; left: 900px;">2010</div>
    <div class="card" style="top: 800px; left: 520px;">
      <div class="tag"><div class="line"></div><span>Phase 1: Foundation</span></div>
      <h2>Strategic Leadership</h2>
      <p>Mr. Nilesh Dudhwewala joined the business. Alvio was introduced as a cardio-diabetic division, expanding into East and North-East India.</p>
    </div>
  </div>

  <div id="phase2" class="phase-anchor" style="top: 1050px;"></div>

  <div class="milestone">
    <div class="node" style="top: 1100px; left: 300px;">2013</div>
    <div class="card" style="top: 1100px; left: 340px;">
      <div class="tag"><div class="line"></div><span>Phase 2: Transformation</span></div>
      <h2>Expansion & Shift</h2>
      <p>Operations expanded into Gujarat and Maharashtra, with Ahmedabad becoming a key operational base.</p>
    </div>
  </div>

  <div class="milestone">
    <div class="node" style="top: 1400px; left: 900px;">2016</div>
    <div class="card" style="top: 1400px; left: 520px;">
      <div class="tag"><div class="line"></div><span>Phase 2: Transformation</span></div>
      <h2>Structural Evolution</h2>
      <p>Salud Care underwent restructuring into two entities. Alvio emerged as a separate cardio-diabetic-focused business.</p>
    </div>
  </div>

  <div class="milestone">
    <div class="node" style="top: 1700px; left: 300px;">2018</div>
    <div class="card" style="top: 1700px; left: 340px;">
      <div class="tag"><div class="line"></div><span>Phase 2: Transformation</span></div>
      <h2>Division Strengthening</h2>
      <p>The cardio division was further segmented into Hales and Osler, enhancing focus across therapeutic segments.</p>
    </div>
  </div>

  <div id="phase3" class="phase-anchor" style="top: 1950px;"></div>

  <div class="milestone">
    <div class="node" style="top: 2000px; left: 900px;">2020</div>
    <div class="card" style="top: 2000px; left: 520px;">
      <div class="tag"><div class="line"></div><span>Phase 3: Growth</span></div>
      <h2>Global Vision</h2>
      <p>Stelvio Healthcare LLP was established to expand nutraceutical exports across international markets.</p>
    </div>
  </div>

  <div class="milestone">
    <div class="node" style="top: 2300px; left: 300px;">2023</div>
    <div class="card" style="top: 2300px; left: 340px;">
      <div class="tag"><div class="line"></div><span>Phase 3: Growth</span></div>
      <h2>Expansion & Acquisition</h2>
      <p>A nutraceutical plant was established in Ahmedabad. Rebase Lifesciences was acquired, strengthening group capabilities.</p>
    </div>
  </div>

  <div class="milestone">
    <div class="node" style="top: 2600px; left: 900px;">2024</div>
    <div class="card" style="top: 2600px; left: 520px;">
      <div class="tag"><div class="line"></div><span>Phase 3: Growth</span></div>
      <h2>Dermatology Expansion</h2>
      <p>Launch of “Rasavio & UNCAP” marked Alvio’s entry into dermocosmetics, integrating pharmaceutical science with skincare innovation.</p>
    </div>
  </div>

  <div id="phase4" class="phase-anchor" style="top: 2850px;"></div>

  <div class="milestone">
    <div class="node" style="top: 2900px; left: 300px;">2030</div>
    <div class="card" style="top: 2900px; left: 340px;">
      <div class="tag"><div class="line"></div><span>Phase 4: Future</span></div>
      <h2>Vision Ahead</h2>
      <p>Alvio aims to achieve ₹500 Crores in revenue, with expansion across Cardio-diabetic, Dermatology, and Nutraceutical segments.</p>
    </div>
  </div>

</div>

</section>

<script>
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// 1. Initialize SVG Paths
document.querySelectorAll(".draw").forEach((path) => {
  const len = path.getTotalLength();
  path.style.strokeDasharray = len;
  path.style.strokeDashoffset = len;
});

// 2. Draw the line naturally on scroll
gsap.to(".draw", {
  strokeDashoffset: 0,
  ease: "none",
  scrollTrigger: {
    trigger: ".canvas",
    start: "top center", 
    end: "bottom bottom", 
    scrub: 1 
  }
});

// 3. Animate cards independently
gsap.utils.toArray(".card").forEach((card) => {
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

// 4. Tab Navigation Click Event (Smooth Scroll)
document.querySelectorAll('.tab-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    const targetId = this.getAttribute('data-target');
    gsap.to(window, {
      duration: 1.2,
      scrollTo: { y: targetId, offsetY: window.innerHeight / 3 }, // Offsets the scroll so the card sits perfectly in the middle of the screen
      ease: "power4.inOut"
    });
  });
});

// 5. Active Tab State Syncing on Scroll
const sections = ["#phase1", "#phase2", "#phase3", "#phase4"];
sections.forEach((id) => {
  ScrollTrigger.create({
    trigger: id,
    start: "top center",
    end: "+=900", // Roughly the height of a phase section
    onToggle: (self) => {
      if (self.isActive) {
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelector(`.tab-btn[data-target="${id}"]`).classList.add('active');
      }
    }
  });
});

</script>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')


