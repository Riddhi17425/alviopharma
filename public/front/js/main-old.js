// Menu Toggle Functionality
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const megaMenu = document.getElementById("mega-menu");
  const menuLinks = document.querySelectorAll(".mega-menu-list a");
  const commonBtn = document.querySelector(".commo-btn");

  // Open menu when clicking menu icon
  if (menuToggle) {
    menuToggle.addEventListener("click", function (e) {
      e.preventDefault();
      const isActive = megaMenu.classList.contains("active");
      if (isActive) {
        closeMenu();
      } else {
        megaMenu.classList.add("active");
        menuToggle.classList.add("active");
        if (commonBtn) {
          commonBtn.classList.add("lowered");
        }
      }
    });
  }

  // Close menu when clicking on a menu link
  menuLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      closeMenu();
      // Get href and navigate
      const href = this.getAttribute("href");
      if (href && href !== "#") {
        window.location.href = href;
      }
    });
  });

  // Close menu when clicking on the modal background
  if (megaMenu) {
    megaMenu.addEventListener("click", function (e) {
      if (e.target === megaMenu) {
        closeMenu();
      }
    });
  }

  // Close menu on Escape key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeMenu();
    }
  });

  // Submenu toggles (inside mega menu)
  const submenuToggles = document.querySelectorAll(".submenu-toggle");
  submenuToggles.forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = btn.closest(".has-submenu");
      const submenu = parent.querySelector(".submenu");
      const isOpen = submenu.classList.contains("open");
      // close any other open submenu
      document.querySelectorAll(".submenu.open").forEach((s) => {
        if (s !== submenu) {
          s.classList.remove("open");
          const t = s.closest(".has-submenu").querySelector(".submenu-toggle");
          if (t) t.setAttribute("aria-expanded", "false");
          s.setAttribute("aria-hidden", "true");
        }
      });

      if (!isOpen) {
        submenu.classList.add("open");
        btn.setAttribute("aria-expanded", "true");
        submenu.setAttribute("aria-hidden", "false");
      } else {
        submenu.classList.remove("open");
        btn.setAttribute("aria-expanded", "false");
        submenu.setAttribute("aria-hidden", "true");
      }
    });
  });

  // Helper function to close menu
  function closeMenu() {
    const menuToggleBtn = document.getElementById("menu-toggle");
    megaMenu.classList.remove("active");
    if (menuToggleBtn) {
      menuToggleBtn.classList.remove("active");
    }
    if (commonBtn) {
      commonBtn.classList.remove("lowered");
    }
  }

  // Counter Animation
  const counterNumbers = document.querySelectorAll(".counter-number");
  let counterAnimated = false;

  // Function to animate counter
  function animateCounter(element) {
    const target = parseInt(element.getAttribute("data-target"));
    const duration = 1500; // 1.5 seconds
    const startValue = 0;
    const startTime = Date.now();

    function update() {
      const elapsed = Date.now() - startTime;
      const progress = Math.min(elapsed / duration, 1);

      let currentValue;
      if (element.textContent.includes("%")) {
        currentValue = Math.floor(progress * target);
        element.textContent = currentValue + "%";
      } else if (element.textContent.includes("+")) {
        currentValue = Math.floor(progress * target);
        element.textContent = currentValue + "+";
      } else {
        currentValue = Math.floor(progress * target);
        element.textContent = currentValue;
      }

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    update();
  }

  // Intersection Observer to trigger animation when section is visible
  const counterSection = document.querySelector(".counter-section");
  if (counterSection) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !counterAnimated) {
            counterAnimated = true;
            counterNumbers.forEach((counter) => {
              animateCounter(counter);
            });
            observer.unobserve(counterSection);
          }
        });
      },
      { threshold: 0.5 },
    );

    observer.observe(counterSection);
  }

  // Slick Slider Initialization
  const slider = document.querySelector(".featured-product-slider");
  if (slider) {
    $(slider).slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: false,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  }

  // --- Accordion images: show only the image related to the opened panel ---
  const accordionEl = document.getElementById("accordionExample");
  const exploreState = document.querySelector(".explore-state");
  const previewImgs = document.querySelectorAll(
    ".images-only .accordion-preview-img",
  );

  if (accordionEl && exploreState && previewImgs.length) {
    function clearActive() {
      previewImgs.forEach((img) => img.classList.remove("active"));
    }

    function setActiveImage(panelId) {
      clearActive();
      const img = document.querySelector(
        `.images-only .accordion-preview-img[data-panel="${panelId}"]`,
      );
      if (img) img.classList.add("active");
    }

    // When a panel is fully shown, display its image and mark container as accordion-open
    accordionEl.addEventListener("shown.bs.collapse", function (e) {
      const id = e.target && e.target.id ? e.target.id : null;
      if (id) setActiveImage(id);
      exploreState.classList.add("accordion-open");
    });

    // When a panel is fully hidden, check if another panel is open; if so show its image
    // otherwise show all images again
    accordionEl.addEventListener("hidden.bs.collapse", function () {
      const open = accordionEl.querySelector(".accordion-collapse.show");
      if (open) {
        setActiveImage(open.id);
        exploreState.classList.add("accordion-open");
      } else {
        clearActive();
        exploreState.classList.remove("accordion-open");
      }
    });

    // Initialize on load: if a panel is open, show its image
    const initialOpen = accordionEl.querySelector(".accordion-collapse.show");
    if (initialOpen) {
      setActiveImage(initialOpen.id);
      exploreState.classList.add("accordion-open");
    } else {
      clearActive();
      exploreState.classList.remove("accordion-open");
    }
  }

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
      const walk = (x - startX) * 1; // scroll-fast
      footerWrapper.scrollLeft = scrollLeft - walk;
    });
  }

  // Search Functionality
  const searchInput = document.querySelector(".search-input");
  if (searchInput) {
    searchInput.addEventListener("input", function (e) {
      const query = e.target.value.toLowerCase().trim();
      if (query.length > 0) {
        // Add your search logic here
        console.log("Searching for:", query);
      }
    });

    searchInput.addEventListener("keypress", function (e) {
      if (e.key === "Enter") {
        const query = e.target.value.toLowerCase().trim();
        if (query.length > 0) {
          // Add your search submission logic here
          console.log("Search submitted:", query);
        }
      }
    });
  }
});
