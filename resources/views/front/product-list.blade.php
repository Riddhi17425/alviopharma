@include('layouts.frontheader')

<section class="page-header">
    <div>
        <img src="{{ asset('public/front/images/company-header-img.webp') }}" class="img-fluid" alt="page-header-img">
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <p class="text-white"><a href="{{ url('/') }}">Home</a> / Contact</p>
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

<section  class="intro-section p-x mt-100">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-12">
            <p>Precision in Every Dose. Excellence in Every Batch.</p>
        </div>

        <div class="col-xl-8 col-lg-7 col-md-12">
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
                <input type="text" name="search" class="search-input" placeholder="Search product"
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
                        {{ $letter }}
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
                                <p class="title-24">{{ $product->brand->title ?? '' }}</p>
                                    <a href="{{ url('product/'.$product->url) }}"
                                        class="title-24">
                                        <span class="text--para">view details</span>
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