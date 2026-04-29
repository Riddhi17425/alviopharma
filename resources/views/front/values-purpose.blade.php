@include('layouts.frontheader')
<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/our-company-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Who We Are / Our Company</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white mb-3">Advancing Science Caring for Life.</h1>
            <p class="text-white page-header-para">A new generation pharmaceutical company committed to improving lives
                through innovative healthcare solutions, ethical practices, and unwavering dedication to excellence.</p>
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



<section class="values-purpose-section p-x">
    <div class="values-container">

        <div class="text-content">
            <h2 class="title-54 mb-100">Our Values</h2>

            <h3 class="title-54">H. E. A. L.</h3>

            <div class="nav-tabs">
                <span class="tab-link active" data-target="hunger">Hunger</span>
                <span class="separator">&bull;</span>
                <span class="tab-link" data-target="excellence">Excellence</span>
                <span class="separator">&bull;</span>
                <span class="tab-link" data-target="accountability">Accountability</span>
                <span class="separator">&bull;</span>
                <span class="tab-link" data-target="longevity">Longevity</span>
            </div>

            <div class="tab-content-container">
                <div id="desc-hunger" class="tab-pane active">
                    <p><strong>Health:</strong> Our health initiatives resonate with every stakeholder. Patients have access to quality and affordable treatment, while doctors improve patient health with skillful medical practices. Channel partners benefit from widely available channels, suppliers witness predictable and mutual growth, and employees thrive in a workplace encouraging continuous personal and professional development.
</p>
                </div>
                <div id="desc-excellence" class="tab-pane">
                    <p><strong>Excellence:</strong> Excellence is our commitment to all stakeholders. Patients receive high-quality medicines; Doctors gain trust in prescribing our medicines. Channel Partners experience excellence in business collaboration, Suppliers witness it in procurement, and Employees thrive in a culture that values and rewards excellence.
</p>
                </div>
                <div id="desc-accountability" class="tab-pane">
                    <p><strong>Accountability:</strong> Accountability extends to all interactions. Patients experience transparency in their treatment plans, Doctors find a trustworthy partner, and Channel Partners engage in accountable business practices. Suppliers benefit from responsible procurement, and Employees flourish in an environment where accountability is ingrained in every task.
</p>
                </div>
                <div id="desc-longevity" class="tab-pane">
                    <p><strong>Longevity:</strong> Longevity is our pledge to sustainable relationships. Patients trust in our medicines for long-term health; Doctors find a reliable partner in patient care. Channel Partners engage in enduring business relationships, Suppliers witness a commitment to long-term partnerships, and Employees build their careers in an organization focused on longevity and growth.
</p>
                </div>
            </div>
        </div>

        <div class="graphic-content">
            <div class="bg-arc-circle"></div>

            <div class="letter-circle letter-h interactive-item active" data-target="hunger">H</div>
            <div class="letter-circle letter-e interactive-item" data-target="excellence">E</div>
            <div class="letter-circle letter-l interactive-item" data-target="longevity">L</div>
            <div class="letter-circle letter-a interactive-item" data-target="accountability">A</div>

            <div class="clover-grid">
                <div class="petal petal-top interactive-item active" id="petal-hunger" data-target="hunger">
                    <div class="petal-content">
                        <h4 class="title-24">Hunger</h4>
                        <p class="mb-0">Hunger to do better </p>
                    </div>
                </div>

                <div class="petal petal-right interactive-item" id="petal-excellence" data-target="excellence">
                    <div class="petal-content">
                        <h4 class="title-24">Excellence </h4>
                        <p class="mb-0">High standards, better outcomes</p>
                    </div>
                </div>

                <div class="petal petal-left interactive-item" id="petal-longevity" data-target="longevity">
                    <div class="petal-content">
                        <h4 class="title-24">Accountability </h4>
                        <p class="mb-0">Built on trust, transparency
                        </p>
                    </div>
                </div>

                <div class="petal petal-bottom interactive-item" id="petal-accountability" data-target="accountability">
                    <div class="petal-content">
                        <h4 class="title-24">Longevity</h4>
                        <p class="mb-0">Enduring care, sustainable growth
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>




<section class="intro-section p-x">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-left">
            <p>Our Purpose
            </p>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12">
            <h2 class="title-54 title--blue mb-40 aos-init aos-animate" data-aos="fade-right">Impr😄ving Lives
            </h2>

            <p>”Our purpose “Improving Lives”’ encapsulates our commitment to making a positive impact across various dimensions of our engagement, ranging from healthcare professionals to patients, channel partners, and our dedicated team. Through this ethos, we strive to contribute meaningfully to the well-being and betterment of individuals and communities, aligning our efforts with the broader goal of improving lives in every facet of our operations.” 
            </p>
        </div>

    </div>

    <div class="slider-wrapper mt-40">
        <div class="my-carousel">

            <div class="slide-item">
                <div class="card">
                    <div class="img-container">
                        <img src="public/front/images/improving-lives1.webp" alt="Doctor Consultation">
                    </div>
                    <div class="card-content">
                        <span class="title--blue">Reputation to Cure </span>
                        <h3 class="title--dark">Doctors </h3>
                        <p class="mb-0">To enhance doctors' professional reputation by providing pharmaceutical solutions that contribute to effective patient care and successful treatment outcomes.
</p>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="card">
                    <div class="img-container">
                        <img src="public/front/images/improving-lives2.webp" alt="Doctor Consultation">
                    </div>
                    <div class="card-content">
                        <span class="title--blue">Health </span>
                        <h3 class="title--dark">Patients</h3>
                        <p class="mb-0">To promote health and well-being, aiming to deliver high-quality medicines that contribute to improved health outcomes, offering patients the chance for a healthier & fulfilling life.</p>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="card">
                    <div class="img-container">
                        <img src="public/front/images/improving-lives3.webp" alt="Doctor Consultation">
                    </div>
                    <div class="card-content">
                        <span class="title--blue">Healthy Business</span>
                        <h3 class="title--dark">Channel Partners  
</h3>
                        <p class="mb-0">To foster a healthy business relationship with our channel partners, providing products and support that meets their business objectives and contributes to the sustainability of their enterprises.</p>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="card">
                    <div class="img-container">
                        <img src="public/front/images/improving-lives4.webp" alt="Doctor Consultation">
                    </div>
                    <div class="card-content">
                        <span class="title--blue">Healthy Career</span>
                        <h3 class="title--dark">Employees </h3>
                        <p> To nurture a healthy and fulfilling career environment for our employees by creating a workplace that fosters personal and professional growth.
</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



</section>


<script>
document.addEventListener('DOMContentLoaded', () => {
    // Get all elements that can trigger a change (Tabs, Petals, Letters)
    const triggers = document.querySelectorAll('.tab-link, .interactive-item');

    // Function to change the active state everywhere
    function setActive(targetName) {
        // 1. Remove active class from everything
        document.querySelectorAll('.tab-link').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.tab-pane').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.interactive-item').forEach(el => el.classList.remove('active'));

        // 2. Add active class to the selected target elements
        document.querySelector(`.tab-link[data-target="${targetName}"]`).classList.add('active');
        document.getElementById(`desc-${targetName}`).classList.add('active');

        // Add active to the specific Petal and Letter
        document.querySelectorAll(`.interactive-item[data-target="${targetName}"]`).forEach(el => {
            el.classList.add('active');
        });
    }

    // Attach click event to all triggers
    triggers.forEach(item => {
        item.addEventListener('click', () => {
            const targetName = item.getAttribute('data-target');
            setActive(targetName);
        });
    });
});
</script>

@include('layouts.fronttop-footer')
@include('layouts.frontfooter')