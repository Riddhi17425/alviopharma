<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/front/images/favicon.png') }}">
    <title>{!! $metatitle ?? 'Alviopharma' !!}</title>
   <meta name="description" content="{!! html_entity_decode(strip_tags($metadescription ?? '')) !!}">
   <meta name="base-url" content="{{ url('/') }}">
   
   <link rel="canonical" href="{{ url()->current() }}"/>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Google Fonts: Geist (paragraph text) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- 1️⃣ Variables (colors, fonts, spacing) -->
    <link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">

    <!-- 3️⃣ Layout CSS -->
    <link rel="stylesheet" href="{{ asset('public/front/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/footer.css') }}">

    <!-- 5️⃣ Page Specific CSS -->
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/index.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/our-company.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/manufacturing.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/rasavio.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/dermaScience.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/board-directors.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/heritage.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/sience-inno.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/pages/contact.css') }}">

    <!-- 6️⃣ Responsive (ALWAYS LAST) -->
    <link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}">

</head>

<body>

    <header class="header">
        <div class="p-x">
            <div class="header_container">
                <div class="header-logo">
                    <a href="{{ url('/') }}" class="logo-link">
                        <img src="{{ asset('public/front/images/logo.svg') }}" alt="Alvio Pharma Logo" class="logo-img">
                    </a>
                </div>

                <div class="header-actions">
                    <nav class="main-nav">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('manufacturing')}}">Manufacturing & Quality</a></li>
                            <li><a href="{{ route('blogs')}}">Insights</a></li>

                            <li class="has-dropdown">
                                <a href="#">
                                    Who We Are
                                    <span class="dropdown-arrow">
                                        <svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.56694 8.56694C8.32286 8.81102 7.92714 8.81102 7.68306 8.56694L0.183057 1.06694C-0.0610211 0.822864 -0.0610211 0.427135 0.183057 0.183057C0.427135 -0.0610203 0.822862 -0.0610203 1.06694 0.183057L8.125 7.24112L15.1831 0.183059C15.4271 -0.061019 15.8229 -0.061019 16.0669 0.183059C16.311 0.427136 16.311 0.822865 16.0669 1.06694L8.56694 8.56694Z"
                                                fill="white" />
                                        </svg>

                                    </span>
                                </a>
                                <div class="dropdown">
                                    <!-- <a href="{{ route('our.company')}}">Our Company</a> -->
                                    <a href="{{ route('board.directors')}}">Board of Directors</a>
                                    <a href="{{ route('our.heritage')}}">Our Heritage</a>
                                    <a href="{{ route('sustainability')}}">Sustainability & Responsibility</a>
                                </div>
                            </li>

                            <li class="has-dropdown">
                                <a href="#">
                                    Therapeutic Areas
                                    <span class="dropdown-arrow">
                                        <svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.56694 8.56694C8.32286 8.81102 7.92714 8.81102 7.68306 8.56694L0.183057 1.06694C-0.0610211 0.822864 -0.0610211 0.427135 0.183057 0.183057C0.427135 -0.0610203 0.822862 -0.0610203 1.06694 0.183057L8.125 7.24112L15.1831 0.183059C15.4271 -0.061019 15.8229 -0.061019 16.0669 0.183059C16.311 0.427136 16.311 0.822865 16.0669 1.06694L8.56694 8.56694Z"
                                                fill="white" />
                                        </svg>

                                    </span>
                                </a>
                                <div class="dropdown">
                                    <a href="#">Cardiology</a>
                                    <a href="#">Neurology</a>
                                    <a href="#">Oncology</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a href="{{ route('contact')}}" class="commo-btn contact_btn">Get in Touch</a>

                    <button class="menu-toggle-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Toggle menu">

                        <svg class="menu-icon-svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <!-- Dots -->
                            <circle class="menu-dot" cx="5" cy="5" r="5" />
                            <circle class="menu-dot" cx="23" cy="5" r="5" />
                            <circle class="menu-dot" cx="5" cy="23" r="5" />
                            <circle class="menu-dot" cx="23" cy="23" r="5" />

                            <!-- X -->
                            <path class="menu-close-line" d="M4 4L24 24" />
                            <path class="menu-close-line" d="M24 4L4 24" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-bottom offcanvas-full com_bg_black" tabindex="-1" id="offcanvasRight"
        data-bs-scroll="true" data-bs-backdrop="false">
        <div class="offcanvas-body">
            <div class="mobile-menu-wrap p-x">

                <ul class="mobile-menu-list">
                    <li><a href="{{ url('/') }}" data-bs-dismiss="offcanvas">Home</a></li>
                    <li><a href="{{ route('manufacturing') }}" data-bs-dismiss="offcanvas">Manufacturing & Quality</a></li>
                    <li><a href="{{ route('blogs') }}" data-bs-dismiss="offcanvas">Insights</a></li>
                </ul>

                <div class="accordion mobile-menu-accordion" id="mobileMenuAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="mobileWhoWeAreHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mobileWhoWeAre" aria-expanded="false" aria-controls="mobileWhoWeAre">
                                Who We Are
                            </button>
                        </h2>
                        <div id="mobileWhoWeAre" class="accordion-collapse collapse" aria-labelledby="mobileWhoWeAreHeading"
                            data-bs-parent="#mobileMenuAccordion">
                            <div class="accordion-body">
                                <ul class="mobile-submenu-list">
                                    <!-- <li><a href="{{ route('our.company') }}" data-bs-dismiss="offcanvas">Our Company</a></li> -->
                                    <li><a href="{{ route('board.directors') }}" data-bs-dismiss="offcanvas">Board of Directors</a></li>
                                    <li><a href="{{ route('our.heritage') }}" data-bs-dismiss="offcanvas">Our Heritage</a></li>
                                    <li><a href="{{ route('sustainability') }}" data-bs-dismiss="offcanvas">Sustainability & Responsibility</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="mobileTherapyHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mobileTherapy" aria-expanded="false" aria-controls="mobileTherapy">
                                Therapeutic Areas
                            </button>
                        </h2>
                        <div id="mobileTherapy" class="accordion-collapse collapse" aria-labelledby="mobileTherapyHeading"
                            data-bs-parent="#mobileMenuAccordion">
                            <div class="accordion-body">
                                <ul class="mobile-submenu-list">
                                    <li><a href="#" data-bs-dismiss="offcanvas">Cardiology</a></li>
                                    <li><a href="#" data-bs-dismiss="offcanvas">Neurology</a></li>
                                    <li><a href="#" data-bs-dismiss="offcanvas">Oncology</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="commo-btn mobile-contact-btn" data-bs-dismiss="offcanvas">Contact Us</a>
            </div>
        </div>
    </div>