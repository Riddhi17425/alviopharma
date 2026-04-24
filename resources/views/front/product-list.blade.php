@include('layouts.frontheader')

<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/product-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Product List</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">Get in Touch</h1>
            <p class="text-white page-header-para">If you are a medical professional, distributor, or institutional
                partner and would like to connect with Alvio Pharmaceuticals, please reach out using the details below
                or submit the enquiry form.</p>
        </div>
        <div class="page-header-btn">
            <a href="#">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="#" class="common-arrow-img"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z"
                        fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
    </div>
</section>

<section  class="intro-section p-x mt-100" data-aos="fade-up">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-12" data-aos="fade-left">
            <p>Precision in Every Dose. Excellence in Every Batch.</p>
        </div>

        <div class="col-xl-8 col-lg-7 col-md-12" data-aos="fade-right">
            <h2 class="title-54 title--blue mb-40">Advanced Manufacturing Facilities Designed for Global Healthcare</h2>
             <p>Our manufacturing infrastructure is designed to meet the demands of modern pharmaceutical production
                while maintaining absolute consistency, safety, and scalability. Each facility integrates automated
                systems, precision-controlled environments, and validated production lines that support high-quality
                formulation development across multiple therapeutic segments.</p>

            <p>Every stage — from material handling and formulation to packaging and dispatch — is executed within
                strictly monitored environments. Automation minimizes variability, enhances accuracy, and ensures that
                every batch produced reflects uniformity, reliability, and compliance with international manufacturing
                benchmarks.</p>

            <p>Beyond capacity and technology, our infrastructure reflects a long-term commitment to responsible
                manufacturing. Built with future-ready systems and sustainability-focused operations, our facilities
                enable us to scale efficiently while maintaining uncompromised quality standards.</p>
            <div class="mt-40">
                <a href="#" class="commo-btn bg-black btn-color-white" data-bs-toggle="dropdown">
                    <span>Find by Brand</span>
                    <span><svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.675 7.675C4.575 7.75 4.5 8.125 4.5 8.475C4.5 8.975 5.375 10.025 8.5 13.125L12.5 17.125L16.5 13.125C20.1 9.55 20.5 9.05 20.45 8.375C20.375 7.75 20.25 7.6 19.65 7.55C19 7.475 18.525 7.85 15.7 10.675L12.5 13.875L9.3 10.675C6.875 8.25 5.975 7.5 5.475 7.5C5.125 7.5 4.75 7.575 4.675 7.675Z"
                                fill="white" />
                        </svg>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @foreach($brands as $brand)
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('product',['brand'=>$brand->id]) }}#product-section">{{ $brand->title }}
                            </a>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </div>
</section>


<section id="product-section" class="find_brand p-x mt-100 mb-100">
    <h2 class="title-54 title--dark">Find by Brand</h2>

        <form method="GET" action="{{ route('product') }}#product-section">
            <div class="search-wrapper">
                <input type="search" name="search" class="search-input" placeholder="Search product"
                    value="{{ request('search') }}">

            </div>
        </form>

        <div class="find_abc">
            <div class="find_abc_top">
                @foreach(range('A','Z') as $letter)
                    <a href="{{ route('product',['letter'=>$letter]) }}#product-section">
                        <span>{{ strtolower($letter) }}</span>
                    </a>
                @endforeach
            </div>


            <a href="#" class="commo-btn bg-black btn-color-white"
                data-bs-toggle="dropdown">
                 <span>Alphabetical</span>
                 <span><svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.675 7.675C4.575 7.75 4.5 8.125 4.5 8.475C4.5 8.975 5.375 10.025 8.5 13.125L12.5 17.125L16.5 13.125C20.1 9.55 20.5 9.05 20.45 8.375C20.375 7.75 20.25 7.6 19.65 7.55C19 7.475 18.525 7.85 15.7 10.675L12.5 13.875L9.3 10.675C6.875 8.25 5.975 7.5 5.475 7.5C5.125 7.5 4.75 7.575 4.675 7.675Z"
                                fill="white" />
                        </svg>
                    </span>
            </a>
    
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item"
                        href="{{ route('product',['sort'=>'asc']) }}#product-section">
                        Alphabetical - A-Z
                    </a>
                </li>
                <li>
                    <a class="dropdown-item"
                        href="{{ route('product',['sort'=>'desc']) }}#product-section">
                        Alphabetical - Z-A 
                    </a>
                </li>
            </ul>
        </div>


        <div class="brand-listing">
        
            @foreach($groupedProducts as $letter => $products)
                <div class="mt-100">
                    <h3 class="title-54 mb-40">
                        {{ $letter }} s
                    </h3>
                    @foreach($products as $product)
                        <div class="brand_item">
                            <div class="brand_item_lt">
                                <div class="brand_item_img">
                                    <img class="img-fluid"
                                        src="{{ asset('public/Product/front_image/'.$product->front_image) }}"
                                        alt="{{ $product->name }}">

                                </div>
                                <div class="brand_item_content">
                                    <h4 class="title-34" style="color:var(--black-color);">
                                        {{ $product->name }}
                                    </h4>
                                    <p class="mb-0">{!! $product->short_description !!}</p>

                                </div>
                            </div>
                            <div class="brand_item_rt">
<<<<<<< HEAD
                                <p class="title-24">{{ $product->brand->title ?? '' }}</p>
                                    <a href="{{ route('product.detail', ['url' => $product->url]) }}"
=======
                                <p class="title-24 mb-2">{{ $product->brand->title ?? '' }}</p>
                                    <a href="{{ url('product/'.$product->url) }}"
>>>>>>> e6828e12089ab55ed0fc306c4bc15bba39ce2fd7
                                        class="title-24">
                                        <span class="text--para">view details</span>
                                         <span class="ms-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.21595 2.47975C3.30464 2.9354 2.57233 3.78162 2.21432 4.79057C1.90512 5.65306 1.90512 18.3138 2.21432 19.1763C2.55606 20.1527 3.27209 20.9826 4.21595 21.5033L5.09471 21.9915L11.2786 22.0404C14.6797 22.0729 17.8368 22.0566 18.2924 21.9915C19.4804 21.8451 20.7497 21.0477 21.3681 20.055L21.8563 19.2576L21.9051 15.5473L21.9539 11.837L21.5471 11.723C21.3193 11.6742 21.0589 11.6742 20.9775 11.7393C20.8636 11.8044 20.7985 12.8622 20.7985 14.6685C20.7985 18.1836 20.6521 18.9647 19.8221 19.7946C18.9108 20.7059 18.3738 20.771 12.0109 20.771C5.648 20.771 5.11098 20.7059 4.19967 19.7946C3.25581 18.8508 3.19072 18.3138 3.25581 11.3813C3.30464 4.90449 3.30464 4.90449 4.23222 4.07454C5.04589 3.32597 5.28999 3.27715 8.75622 3.19578L12.0923 3.11441V2.62621V2.13801L8.59349 2.08919L5.09471 2.05664L4.21595 2.47975Z"
                                    fill="#666666" />
                                <path
                                    d="M15.4941 2.28584C15.4452 2.41602 15.429 2.66012 15.4615 2.82286C15.5103 3.08323 15.7544 3.13205 17.6747 3.19715L19.8228 3.27851L15.429 7.67233C13.0205 10.0808 11.0352 12.1801 11.0352 12.3102C11.0352 12.6683 11.3606 12.9612 11.7512 12.9612C11.979 12.9612 13.5901 11.464 16.4379 8.61619L20.7992 4.25492V6.403C20.7992 8.35581 20.8317 8.55109 21.1084 8.64873C21.2711 8.69755 21.5315 8.69755 21.678 8.63246C21.9221 8.53482 21.9383 8.19308 21.9058 5.32896L21.857 2.13938L18.7162 2.09056C16.0962 2.05801 15.5754 2.09056 15.4941 2.28584Z"
                                    fill="#666666" />
                            </svg>
                        </span>
                                    </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')