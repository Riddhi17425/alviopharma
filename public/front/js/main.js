const offcanvasEl = document.getElementById("offcanvasRight");
const toggleBtn = document.querySelector(".menu-toggle-btn");
const body = document.body;

if (offcanvasEl && toggleBtn) {
  offcanvasEl.addEventListener("show.bs.offcanvas", () => {
    toggleBtn.classList.add("active");
    body.style.overflow = "hidden";
  });

  offcanvasEl.addEventListener("hidden.bs.offcanvas", () => {
    toggleBtn.classList.remove("active");
    body.style.overflow = "auto";
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
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

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
      if (isHeaderVisible && currentScroll - directionChangePoint >= HIDE_HEADER_DOWN_SCROLL) {
        header.classList.remove("header-visible");
        header.classList.add("header-hidden");
        isHeaderVisible = false;
        directionChangePoint = currentScroll;
      }
    }

    // Show header only after enough upward scroll distance
    if (currentDirection === "up") {
      if (!isHeaderVisible && directionChangePoint - currentScroll >= SHOW_HEADER_UP_SCROLL) {
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
    autoplaySpeed: 4000,
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
    { threshold: 0.4 },
  );

  observer.observe(counterSection);
});

document.addEventListener("DOMContentLoaded", () => {
  // Footer Wrapper Scroll with Cursor/Drag
  const footerWrapper = document.querySelector(".common-footer-wrapper");
  if (footerWrapper) {
    // Center scroll on page load
    setTimeout(() => {
      const scrollWidth = footerWrapper.scrollWidth;
      const clientWidth = footerWrapper.clientWidth;
      footerWrapper.scrollLeft = (scrollWidth - clientWidth) / 2;
    }, 100);

    let isDown = false;
    let startX;
    let scrollLeft;

    footerWrapper.addEventListener("mousedown", (e) => {
      isDown = true;
      footerWrapper.classList.add("active");
      startX = e.pageX - footerWrapper.offsetLeft;
      scrollLeft = footerWrapper.scrollLeft;
    });

    footerWrapper.addEventListener("mouseleave", () => {
      isDown = false;
      footerWrapper.classList.remove("active");
    });

    footerWrapper.addEventListener("mouseup", () => {
      isDown = false;
      footerWrapper.classList.remove("active");
    });

    footerWrapper.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - footerWrapper.offsetLeft;
      const walk = (x - startX) * 1.5; // Slightly faster scroll
      footerWrapper.scrollLeft = scrollLeft - walk;
    });
  }
});
