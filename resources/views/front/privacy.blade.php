@include('layouts.frontheader')

<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/rasavio-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> /<a href="{{ url('/') }}">
                Therapeutic Areas </a> / DermaScience Division /Rasavio™ Nomo Spot Serum</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">Targeted Management of Hyperpigmentation & Uneven Skin Tone</h1>
            <p class="text-white page-header-para">Lorem ipsum dolor sit amet consectetur. Vulputate ut dictum
                ullamcorper hendrerit. Mattis pretium sit metus consectetur dictum nunc ullamcorper. Pretium turpis
                dapibus mattis massa pretium pulvinar lacus. Mattis pulvinar urna urna iaculis pharetra ornare.</p>
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

<section class="p-x">
    <div class="mb-40">
        <h3 class="title-34">1. Information We Collect</h3>

        <h5 class="title-24">A. Information you Provide Directly</h5>
        <p>We may collect personal information that you voluntarily submit to us, including but not limited to:
        </p>

        <ul>
            <li>Full name, designation, and medical registration number (for healthcare professionals)</li>
            <li>Email address and phone number</li>
            <li>Organisation name and address </li>
            <li>Messages, queries, or feedback submitted via our Contact form </li>
            <li>Email address provided via newsletter or updates subscription</li>
        </ul>

        <h5 class="title-24">B. Information Collected Automatically </h5>
        <p>When you visit our website, we automatically gather certain technical data, including:
        </p>
        <ul>
            <li>IP address and geographic location (region/city level) </li>
            <li>Browser type, operating system, and version
            </li>
            <li>Pages visited, time spent, and navigation behaviour
            </li>
            <li>Referring URLs and exit pages
            </li>
            <li>Device identifiers and screen resolution
            </li>
        </ul>

        <h5 class="title-24">C. Cookies and Tracking Technologies
        </h5>
        <p>
            We use cookies and similar tracking technologies to enhance your browsing experience, remember preferences,
            and analyse website performance. You may configure your browser to refuse cookies.

        </p>
    </div>

    <div class="mb-40">
        <h3 class="title-34">2. How We Use Your Information
        </h3>
        <p>Alvio Pharma utilises information for the following purposes:
        </p>
        <ul>
            <li>To answer your enquiries, contact requests, or feedback.
            </li>
            <li>To release updates on fresh product launches, therapeutic insights, and healthcare events (if you have
                opted in)
            </li>
            <li>To analyse website usage and enhance user experience
            </li>
            <li>To regulate internal records and align with regulatory obligations
            </li>
            <li>To fulfil our mission of connecting healthcare experts with related pharmaceutical details
            </li>
            <li>To avoid chances of fraud, unauthorised access, or misuse of the website in any way
            </li>
        </ul>
    </div>

    <div class="mb-40">
        <h3 class="title-34">3. Sharing and Information Disclosure
        </h3>
        <p>Alvio Pharma does not rent, trade, or sell your personal data to third parties. We may share information
            under the following circumstances:
        </p>
        <ul>
            <li><b>Service Providers:</b>Trusted vendors who handle the website operations (hosting, email delivery,
                analytics), bound by confidentiality obligations
            </li>
            <li><b>Legal Bodies:</b> Government agencies, courts, regulators, as and when required by the law, legal
                proceedings, or regulation
            </li>
            <li><b>Business Transfers:</b> At the time of an event such as an acquisition, merger, or asset sale,
                personal details may be transferred as part of the transaction, subject to relevant privacy protections.
            </li>
        </ul>

        <p>In all the cases, we limit disclosure to what is strictly necessary for that purpose.
        </p>
    </div>

    <div class="mb-40">
        <h3 class="title-34">4. Data Retention
        </h3>
        <p>
            We retain personal data only for as long as it is required to fulfil a purpose for which it was gathered, or
            as demanded by applicable law. Criteria used to determine retention periods involve:

        </p>

        <ul>
            <li>Timeline of your engagement or correspondence with us
            </li>
            <li>Our business interests in maintaining records
            </li>
        </ul>

        <p>As soon as your retention period expires, data is safely deleted or anonymised.
        </p>
    </div>

    <div class="mb-40">
        <h3 class="title-34">5. Data Security
        </h3>
        <p>
            We execute appropriate organisational and technical safety measures to safeguard personal information
            against accidental loss, disclosure, unauthorised access, destruction, or alteration. These measures involve
            safe server infrastructure, access controls, encrypted data transmission, and security assessments.
        </p>

        <p>We take all reasonable steps to shield your data. Though we guarantee absolute security, in case of any
            doubts or a suspected data breach, you can reach out to us at <a
                href="mailto:info@alviopharma.com">info@alviopharma.com</a>.
        </p>
    </div>

    <div class="mb-40">
        <h3 class="title-34">6. Changes to The Privacy Policy
        </h3>
        <p>
            We may update the Privacy Policy promptly to reflect changes in our practices, legal requirements, and any
            other factors. The upgraded policy will be posted with a revised ‘Last Updated’ date. Your continuous use of
            the website after any changes constitutes acceptance of the updated policy.

        </p>
    </div>

    </div>


</section>




@include('layouts.fronttop-footer')
@include('layouts.frontfooter')