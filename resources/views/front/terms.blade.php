
@include('layouts.frontheader')

<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/our-company-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Terms and Conditions</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">Terms and Conditions</h1>
            <p class="text-white page-header-para">Welcome to Alvio Pharmaceuticals Pvt. Ltd. These Terms and Conditions outline the rules and regulations for the use of our website and services. By accessing and using this website, you accept and agree to be bound by these terms.</p>
        </div>
        <div class="page-header-btn">
            <a href="{{ route('contact') }}">
                <p class="title-24 text--white">Contact us</p>
            </a>
            <a href="{{ route('contact') }}" class="common-arrow-img"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75013 30.821L30.8213 0.749882ZM30.8213 0.749882H7.43255ZM30.8213 0.749882V24.1385Z"
                        fill="white" />
                    <path d="M0.75013 30.821L30.8213 0.749882M30.8213 0.749882H7.43255M30.8213 0.749882V24.1385"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
    </div>
</section>

<section class="p-x mt-100">
    <div class="mb-40">
        <h3 class="title-34">1. Use of the Website
        </h3>

        <h5 class="title-24">A. Permitted Use </h5>
        <p>You may access the website solely for professional purposes in accordance with these Terms.
        </p>


        <h5 class="title-24">B. Prohibited Use
        </h5>
        <p>You should not:
        </p>

        <ul>
            <li>Access the website for any unlawful reason or in violation of applicable Indian/International laws.
            </li>
            <li>Reproduce, modify, or create derivative works from the website’s content
            </li>
            <li>Engage in scraping, data mining, or automated data gathering from the website
            </li>
            <li>Transmit any malware, viruses, or harmful code through any website
            </li>
            <li>Interfere with or disrupt the website’s infrastructure
            </li>
            <li>Attempt to gain unauthorised access to any section of the website
            </li>
        </ul>

    </div>



    <div class="mb-40">
        <h3 class="title-34">2. Healthcare Disclaimer
        </h3>
        <p>The information provided on the website is intended for general guidance and educational purposes. It is
            unsuitable for professional medical advice or diagnosis.
        </p>

        <ul>
            <li>All therapeutic information is intended for healthcare experts only
            </li>
            <li>Patients and the general public should not use the website content to self-diagnose
            </li>
            <li>Alvio Pharma strongly suggests recommending a qualified healthcare professional before starting or
                stopping any treatment.
            </li>

        </ul>

        <p>Alvio Pharma is not liable for any medical decisions made based on the website information.
        </p>

    </div>


    <div class="mb-40">
        <h3 class="title-34">3. Intellectual Property </h3>
        <p>All content, including but not limited to the logo, product names, text, graphics, brand name, images, and
            layout, is the exclusive property of Avio Pharmaceuticals Pvt. Ltd. and is safeguarded by applicable
            intellectual property laws.
        </p>

        <p>You are granted a limited, non-exclusive, and revocable licence to access and view the content for personal
            and non-commercial informational purposes only. This licence doesn’t include the right to:
        </p>

        <ul>
            <li>Download or copy content
            </li>
            <li>Use trademarks or brand identity without consent
            </li>
            <li>Sell or sub-license any content
            </li>

        </ul>
    </div>


    <div class="mb-40">
        <h3 class="title-34">4. Submissions and Communications
        </h3>

        <p>Any data, feedback, or material you submit via the website shall be deemed non-confidential. By submitting
            the information, you grant the company a non-exclusive perpetual licence to use, reproduce, or publish these
            submissions for business purposes, in relation to our Privacy Policy. You represent that any data you submit
            is accurate and does not infringe upon the rights of any third party.
        </p>

    </div>

    <div class="mb-40">
        <h3 class="title-34">5. Changes to the Website and Terms </h3>

        <p>Alvio Pharma reserves the right to:
        </p>

        <ul>
            <li>Modify, suspend, or discontinue any section of the website at any time without prior notice
            </li>
            <li>Update or amend these Terms at any time by posting the revised version on the website
            </li>

        </ul>

        <p>Your continued usage of the website following any changes shows your acceptance of the revised terms. We
            encourage you to review these terms periodically.
        </p>
    </div>

</section>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')
