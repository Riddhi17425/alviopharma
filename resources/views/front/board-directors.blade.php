@include('layouts.frontheader')

@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/board-directors-banner.webp') }}" class="img-fluid"
            alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Board of Directors
        </p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue">
            <h1 class="title-34 text--white mb-3">{{ $menubanner->title }}</h1>
            <p class="text-white page-header-para">{!! $menubanner->description !!}
            </p>
        </div>
        <div class="page-header-btn">
            <a href="{{ route('contact') }}" target="_blank">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="{{ route('contact') }}" target="_blank" class="common-arrow-img"><svg width="32" height="32"
                    viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z"
                        fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
    </div>
</section>
@endif
<section class="p-x mt-100">
    <div class="mb-40 text-center">
        <h1 class="title-54 mb-40">Board Leadership Guiding Governance, Accountability, and Growth</h1>
        <p>Alvio’s Board of Directors provides strategic guidance and governance oversight, <br> ensuring ethical practices, regulatory compliance, and long-term value creation while aligning with our mission to build trust and improve healthcare outcomes.
 
        </p>
    </div>

    <div class="testimonial-container">

        <div class="profile-card">
            <img class="img-fluid profile-img" src="{{ asset('public/front/images/leadership.webp') }}"
                alt="leadership">
            <div class="profile-info">
                <h4 class="title-34 title--dark">Mr. Nilesh Dudhwewala
                </h4>
                <p>Director</p>
            </div>
        </div>

        <div class="quote-box com_bg_light_blue">
            <span class="quote-icon">
                <svg width="84" height="58" viewBox="0 0 84 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M73.3373 0.147842C66.5892 1.21532 61.2137 4.11277 55.9906 9.56456C50.7294 15.0545 47.8701 19.9725 46.2307 26.3393C45.1251 30.7998 44.9726 37.5478 45.8876 41.1696C47.6032 47.727 53.055 53.5219 59.3837 55.4663C62.6624 56.4956 67.9999 56.4956 71.3167 55.4663C83.8597 51.6157 88.1297 34.4598 78.9035 25.1193C75.3579 21.4975 71.8886 20.0488 66.0174 19.7438C63.8443 19.6294 62.0905 19.4388 62.0905 19.3625C62.0905 19.2481 62.7387 17.7613 63.5393 16.0457C67.0086 8.76395 72.4223 3.96028 80.0091 1.4822C81.9535 0.834084 82.0297 0.795959 81.0385 0.529087C79.2085 0.0334702 75.3198 -0.15715 73.3373 0.147842Z"
                        fill="#307ABD" />
                    <path
                        d="M24.3456 2.62862C16.9875 4.83983 11.002 9.60538 5.70264 17.459C1.16582 24.1689 -1.04541 34.2337 0.479574 41.3629C2.72893 51.9996 12.7176 59.3576 22.8206 57.7945C26.2518 57.2608 29.0349 56.1552 31.2843 54.5158C40.1292 48.0347 41.2729 34.1193 33.6099 26.5707C29.8355 22.8726 25.4893 21.1952 19.6944 21.1571C18.2456 21.1571 17.1019 21.0046 17.1019 20.7758C17.1019 19.9752 19.0844 15.9721 20.7237 13.5322C24.155 8.34727 28.158 5.52607 35.9736 2.66675C36.698 2.39988 36.6598 2.36175 35.783 2.09488C35.2492 1.90426 33.1142 1.78989 31.0174 1.78989C28.1199 1.75176 26.5187 1.94238 24.3456 2.62862Z"
                        fill="#307ABD" />
                </svg>
            </span>
            <p class="title-34">
                Alvio Pharmaceuticals is born from our vision to unlock the true potential of healthcare, spanning dermatology, skincare, cardiology, and diabetology. We offer simple, effective, and scientifically backed solutions, driven by an unwavering commitment to quality, with the purpose of improving lives and building lasting trust across every segment we serve.
            </p>
        </div>

    </div>
</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')