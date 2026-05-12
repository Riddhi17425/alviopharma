const offcanvasEl = document.getElementById("offcanvasRight");
const toggleBtn = document.querySelector(".menu-toggle-btn");
const body = document.body;

if (offcanvasEl && toggleBtn) {
    offcanvasEl.addEventListener("show.bs.offcanvas", () => {
        toggleBtn.classList.add("active");
        body.style.overflow = "hidden";
        if (window.innerWidth < 768) {
            header.style.transform = "translateY(0)";
        }
        
    });

    offcanvasEl.addEventListener("hidden.bs.offcanvas", () => {
        toggleBtn.classList.remove("active");
        body.style.overflow = "auto";
        if (window.innerWidth < 768) {
            header.style.transform = "";
        }
    });
}
// ===== HEADER HIDE/SHOW ON SCROLL =====
const header = document.querySelector(".header");
let lastScrollTop = 0;
let isHeaderVisible = true;
let lastScrollDirection = "up";
let directionChangePoint = 0;
const SHOW_HEADER_UP_SCROLL = 180;
const HIDE_HEADER_DOWN_SCROLL = 24;

if (header) {
    window.addEventListener("scroll", () => {
        let currentScroll =
            window.pageYOffset || document.documentElement.scrollTop;

        // Add black background when scrolled down
        if (currentScroll > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }

        // Always show header near the top of the page
        if (currentScroll <= 50) {
            header.classList.remove("header-hidden");
            header.classList.add("header-visible");
            isHeaderVisible = true;
            lastScrollDirection = "up";
            directionChangePoint = 0;
            lastScrollTop = 0;
            return;
        }

        const currentDirection = currentScroll > lastScrollTop ? "down" : "up";

        if (currentDirection !== lastScrollDirection) {
            directionChangePoint = lastScrollTop;
            lastScrollDirection = currentDirection;
        }

        // Hide header after a small, intentional downward scroll
        if (currentDirection === "down") {
            if (
                isHeaderVisible &&
                currentScroll - directionChangePoint >= HIDE_HEADER_DOWN_SCROLL
            ) {
                header.classList.remove("header-visible");
                header.classList.add("header-hidden");
                isHeaderVisible = false;
                directionChangePoint = currentScroll;
            }
        }

        // Show header only after enough upward scroll distance
        if (currentDirection === "up") {
            if (
                !isHeaderVisible &&
                directionChangePoint - currentScroll >= SHOW_HEADER_UP_SCROLL
            ) {
                header.classList.remove("header-hidden");
                header.classList.add("header-visible");
                isHeaderVisible = true;
                directionChangePoint = currentScroll;
            }
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
}

//------------------------ slider js ------------------------//

const $heroSlider = $(".hero_slider");

if ($heroSlider.length) {
    $heroSlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        fade: true,
        speed: 1000,
    });

    // CUSTOM ARROWS
    $(".hero-next").on("click", function () {
        $heroSlider.slick("slickNext");
    });

    $(".hero-prev").on("click", function () {
        $heroSlider.slick("slickPrev");
    });
}

const slider = document.querySelector(".featured-product-slider");

if (slider) {
    $(slider).slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true, // ✅ DOTS ENABLED
        responsive: [
            {
                breakpoint: 1200,
                settings: { slidesToShow: 4 },
            },
            {
                breakpoint: 992,
                settings: { slidesToShow: 3 },
            },
            {
                breakpoint: 768,
                settings: { slidesToShow: 2 },
            },
            {
                breakpoint: 480,
                settings: { slidesToShow: 1 },
            },
        ],
    });
}

$(document).ready(function () {
    $(".man_par_slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase: "linear",
        infinite: true,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
});

// ------------------------ end slider js ------------------------//

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter-number");
    const counterSection = document.querySelector(".counter-section");
    let started = false;

    if (!counters.length || !counterSection) {
        return;
    }

    const startCounter = () => {
        counters.forEach((counter) => {
            const target = +counter.getAttribute("data-target");
            const suffix = counter.innerText.replace(/[0-9]/g, ""); // + or %
            let count = 0;

            const speed = target / 100; // animation speed

            const updateCount = () => {
                if (count < target) {
                    count += speed;
                    counter.innerText = Math.ceil(count) + suffix;
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target + suffix;
                }
            };

            updateCount();
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting && !started) {
                started = true;
                startCounter();
            }
        },
        { threshold: 0.4 }
    );

    observer.observe(counterSection);
});
 document.addEventListener("DOMContentLoaded", () => {
    const footerWrapper = document.querySelector(".common-footer-wrapper");
    const footerItems = document.querySelectorAll(".common-footer-item"); // Saare items ko select kiya
    
    if (footerWrapper) {
        // 1. Seamless Infinite Loop
        footerWrapper.innerHTML += footerWrapper.innerHTML;

        let isDown = false;
        let startX;
        let scrollLeft;
        let autoScrollTimer;
        const scrollSpeed = 0.5;

        // 2. Auto Scroll Logic
        const startAutoScroll = () => {
            if(autoScrollTimer) clearInterval(autoScrollTimer);
            
            autoScrollTimer = setInterval(() => {
                if (!isDown) {
                    footerWrapper.scrollLeft += scrollSpeed;
                    
                    if (footerWrapper.scrollLeft >= (footerWrapper.scrollWidth / 2)) {
                        footerWrapper.scrollLeft = 0;
                    }
                }
            }, 20);
        };

        const stopAutoScroll = () => {
            clearInterval(autoScrollTimer);
        };

        startAutoScroll();

        // 3. SPECIFIC ITEM HOVER PAR STOP (Updated Logic)
        // Hum wrapper ke bajaye har item par event listener laga rahe hain
        footerWrapper.addEventListener("mouseover", (e) => {
            if (e.target.closest('.common-footer-item')) {
                stopAutoScroll();
            }
        });

        footerWrapper.addEventListener("mouseout", (e) => {
            if (e.target.closest('.common-footer-item')) {
                if (!isDown) startAutoScroll();
            }
        });

        // 4. Drag to Scroll Logic
        footerWrapper.addEventListener("mousedown", (e) => {
            isDown = true;
            stopAutoScroll();
            footerWrapper.classList.add("active");
            startX = e.pageX - footerWrapper.offsetLeft;
            scrollLeft = footerWrapper.scrollLeft;
        });

        footerWrapper.addEventListener("mouseup", () => {
            isDown = false;
            footerWrapper.classList.remove("active");
            startAutoScroll();
        });

        footerWrapper.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - footerWrapper.offsetLeft;
            const walk = (x - startX) * 1.5;
            footerWrapper.scrollLeft = scrollLeft - walk;
        });
    }
});

// value-purpose

$(document).ready(function () {
    $(".my-carousel").slick({
        centerMode: true,
        centerPadding: "15%",
        slidesToShow: 1,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 600 /* Slightly slower transition for smoothness */,
        initialSlide: 1,
        cssEase: "cubic-bezier(0.25, 1, 0.5, 1)" /* Super smooth easing */,
        responsive: [
            {
                breakpoint: 1024,
                settings: { centerPadding: "10%" },
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: "0%",
                    centerMode: false,
                } 
            },
        ],
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const offcanvas = document.getElementById('offcanvasRight');
    if (offcanvas) {
        offcanvas.addEventListener('show.bs.offcanvas', function () {
            document.body.classList.add('no-scroll');
        });
        offcanvas.addEventListener('hide.bs.offcanvas', function () {
            document.body.classList.remove('no-scroll');
        });
    }
});
