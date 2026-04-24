@include('layouts.frontheader')
@if($menubanner)
<section class="page-header">
    <div class="inner_hero">
        <img src="{{ asset('public/front/images/contact-banner.webp') }}" class="img-fluid" alt="page-header-img">
        <p class="text-white inner_hero_nav_link"><a href="{{ url('/') }}">Home</a> / Contact</p>
    </div>
    <div class="page-header-content p-x">
        <div class="page-header-text com_bg_blue" data-aos="fade-up">
            <h1 class="title-34 text--white">{{ $menubanner->title }}</h1>
            <p class="text-white page-header-para">{!! $menubanner->description !!}</p>
        </div>
    </div>
</section>
@endif
<section class="contact p-x mt_80">
    <div class="row gx-0">
        <div class="col-lg-5" data-aos="fade-right">
            <div class="contact_left com_bg_light_blue">
                <div class="contact_left_child">
                    <h5 class="title-24 title--blue">Registered & Corporate Office</h5>
                    <div class="con_links">
                        <span>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.2132 27.8711C21.9796 28.1297 21.7335 28.3924 21.4751 28.6551C23.8982 28.9803 25.5581 29.6518 25.5581 30.4233C25.5581 31.516 22.2385 32.4001 18.1386 32.4001C14.039 32.4001 10.719 31.516 10.719 30.4233C10.719 29.6768 12.2705 29.026 14.56 28.6926C14.3014 28.434 14.0596 28.1754 13.826 27.917C10.5814 28.5344 8.3457 29.8232 8.3457 31.3161C8.3457 33.4055 12.7289 35.103 18.1384 35.103C23.5433 35.103 27.9311 33.4055 27.9311 31.3161C27.9354 29.7853 25.5872 28.4675 22.2132 27.8711Z"
                                    fill="url(#paint0_linear_907_2142)" />
                                <path
                                    d="M28.7902 11.6942C28.7902 5.73421 23.9607 0.904297 18.0011 0.904297C12.0415 0.904297 7.21191 5.73384 7.21191 11.6942C7.21191 16.6818 14.7795 26.8911 17.239 30.0774C17.6249 30.5773 18.3773 30.5773 18.7632 30.0774C21.2226 26.891 28.7902 16.6815 28.7902 11.6942ZM13.651 11.6942C13.651 9.29179 15.5987 7.34443 17.9968 7.34443C20.3992 7.34443 22.3465 9.29209 22.3465 11.6942C22.3465 14.0966 20.3989 16.04 17.9968 16.04C15.5984 16.04 13.651 14.0963 13.651 11.6942Z"
                                    fill="url(#paint1_linear_907_2142)" />
                                <defs>
                                    <linearGradient id="paint0_linear_907_2142" x1="-7.18112" y1="3.07312" x2="28.2735"
                                        y2="42.6184" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_907_2142" x1="1.73123" y1="-4.91618" x2="37.1858"
                                        y2="34.6295" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </span>
                        <p class="mb-0">
                            <a href="https://maps.app.goo.gl/JjD2uffTsRv2aq7u7" target="_blank">Registered & Corporate
                                Office Block D, 10th Floor, Signature 2 Towers,
                                Sarkhej-Sanand Crossing, Ahmedabad-382210,Gujarat, India</a>
                        </p>
                    </div>
                    <div class="con_links">
                        <span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.60164 6.17188C3.98449 6.17188 3.42682 6.38007 2.96582 6.7221L16.7736 19.9499C17.4205 20.5671 18.4243 20.5671 19.0712 19.9499L32.9534 6.64775C32.5147 6.35033 31.9867 6.17188 31.4142 6.17188L4.60164 6.17188Z"
                                    fill="url(#paint0_linear_907_2148)" />
                                <path
                                    d="M34.1493 27.3284V8.90316C34.1493 8.43472 34.0229 7.99602 33.8073 7.60938L22.8398 18.1158L33.7998 28.6222C34.0155 28.2356 34.1493 27.7969 34.1493 27.3284Z"
                                    fill="url(#paint1_linear_907_2148)" />
                                <path
                                    d="M19.9635 20.8761C19.3909 21.4263 18.6548 21.7014 17.9261 21.7014C17.1975 21.7014 16.4539 21.4263 15.8888 20.8761L13.9407 19.0098L2.96582 29.5162C3.42682 29.8582 3.98449 30.0664 4.60164 30.0664H31.4142C31.9867 30.0664 32.5147 29.888 32.9534 29.5905L21.9116 19.0098L19.9635 20.8761Z"
                                    fill="url(#paint2_linear_907_2148)" />
                                <path
                                    d="M1.84863 8.90258V27.3204C1.84863 27.7517 1.96017 28.1532 2.13118 28.5101L12.9945 18.1152L2.13862 7.71289C1.96017 8.07723 1.84863 8.47875 1.84863 8.90258Z"
                                    fill="url(#paint3_linear_907_2148)" />
                                <defs>
                                    <linearGradient id="paint0_linear_907_2148" x1="6.65469" y1="-5.70403" x2="37.9405"
                                        y2="28.5819" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_907_2148" x1="9.23105" y1="-8.0608" x2="40.5168"
                                        y2="26.2248" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_907_2148" x1="-4.73327" y1="4.68444" x2="26.5525"
                                        y2="38.97" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_907_2148" x1="-7.30111" y1="7.0234" x2="23.9847"
                                        y2="41.3093" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </span>
                        <p class="mb-0">
                            <a href="mailto:demo@gmail.com" target="_blank">demo@gmail.com</a>
                        </p>
                    </div>
                    <div class="con_links">
                        <span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_907_2158)">
                                    <path
                                        d="M27.4611 23.4988C25.9532 22.2291 23.717 22.3909 22.4473 23.8988L21.02 25.6C20.7046 25.9865 20.117 26.0331 19.7387 25.7558C15.8929 22.8769 12.8219 19.1542 10.6974 14.8297C10.4849 14.3973 10.6832 13.8367 11.0694 13.5943L12.9868 12.505C14.692 11.541 15.3029 9.37775 14.3307 7.63442L11.6129 2.95929C10.7823 1.50426 8.83687 1.1653 7.55337 2.23794C2.71302 6.22635 0.605891 13.2929 10.0201 24.6568C19.4262 35.9827 26.7577 35.2439 31.5899 31.2174C32.8734 30.1448 32.8913 28.1887 31.6229 27.1066L27.4611 23.4988Z"
                                        fill="url(#paint0_linear_907_2158)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_907_2158" x1="-0.964601" y1="0.888575"
                                        x2="30.3212" y2="35.1745" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF" />
                                        <stop offset="1" stop-color="#1075FF" />
                                    </linearGradient>
                                    <clipPath id="clip0_907_2158">
                                        <rect width="34" height="34" fill="white" transform="translate(1 0.757812)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>
                        <p class="mb-0">
                            <a href="tel:+917966176465" target="_blank">+91 79 6617 6465</a><br>
                            <a href="tel:+917926893010" target="_blank">+91 79 2689 3010</a><br>
                            <a href="tel:+917926893010" target="_blank">+91 79 2689 3010</a>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="contact_left_child">
                    <div class="contact_left_child">
                        <h5 class="title-24 title--blue">Works Units</h5>
                        <div class="con_links">
                            <span>
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_907_2167)">
                                        <path
                                            d="M22.2132 27.6289C21.9796 27.8875 21.7335 28.1502 21.4751 28.4129C23.8982 28.7381 25.5581 29.4096 25.5581 30.1811C25.5581 31.2738 22.2385 32.1579 18.1386 32.1579C14.039 32.1579 10.719 31.2738 10.719 30.1811C10.719 29.4346 12.2705 28.7838 14.56 28.4504C14.3014 28.1918 14.0596 27.9332 13.826 27.6749C10.5814 28.2922 8.3457 29.581 8.3457 31.074C8.3457 33.1633 12.7289 34.8609 18.1384 34.8609C23.5433 34.8609 27.9311 33.1633 27.9311 31.074C27.9354 29.5431 25.5872 28.2253 22.2132 27.6289Z"
                                            fill="url(#paint0_linear_907_2167)" />
                                        <path
                                            d="M28.5783 11.5438C28.5783 5.58382 23.7488 0.753906 17.7892 0.753906C11.8295 0.753906 7 5.58345 7 11.5438C7 16.5314 14.5676 26.7407 17.027 29.927C17.413 30.4269 18.1653 30.4269 18.5513 29.927C21.0107 26.7406 28.5783 16.5311 28.5783 11.5438ZM13.4391 11.5438C13.4391 9.1414 15.3868 7.19404 17.7848 7.19404C20.1872 7.19404 22.1346 9.1417 22.1346 11.5438C22.1346 13.9462 20.1869 15.8896 17.7848 15.8896C15.3865 15.8896 13.4391 13.9459 13.4391 11.5438Z"
                                            fill="url(#paint1_linear_907_2167)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_907_2167" x1="-7.18112" y1="2.83093"
                                            x2="28.2735" y2="42.3762" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_907_2167" x1="1.51932" y1="-5.06657"
                                            x2="36.9739" y2="34.4791" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                        <clipPath id="clip0_907_2167">
                                            <rect width="36.1204" height="36.1204" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <p class="mb-0">
                                <a href="https://maps.app.goo.gl/JjD2uffTsRv2aq7u7" target="_blank">434, Kishanpur, Opp.
                                    Pharma College of Roorkee, Bhagwanpur, Roorkee – 247667, Dist. – Haridwar,
                                    Uttarakhand, India.</a>
                            </p>
                        </div>
                        <div class="con_links">
                            <span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.60164 5.05469C2.98449 5.05469 2.42682 5.26288 1.96582 5.60492L15.7736 18.8327C16.4205 19.4499 17.4243 19.4499 18.0712 18.8327L31.9534 5.53056C31.5147 5.23314 30.9867 5.05469 30.4142 5.05469L3.60164 5.05469Z"
                                        fill="url(#paint0_linear_907_2176)" />
                                    <path
                                        d="M33.1493 26.2112V7.78597C33.1493 7.31753 33.0229 6.87884 32.8073 6.49219L21.8398 16.9986L32.7998 27.505C33.0155 27.1184 33.1493 26.6797 33.1493 26.2112Z"
                                        fill="url(#paint1_linear_907_2176)" />
                                    <path
                                        d="M18.9635 19.7589C18.3909 20.3091 17.6548 20.5842 16.9261 20.5842C16.1975 20.5842 15.4539 20.3091 14.8888 19.7589L12.9407 17.8926L1.96582 28.399C2.42682 28.741 2.98449 28.9492 3.60164 28.9492H30.4142C30.9867 28.9492 31.5147 28.7708 31.9534 28.4734L20.9116 17.8926L18.9635 19.7589Z"
                                        fill="url(#paint2_linear_907_2176)" />
                                    <path
                                        d="M0.848633 7.78539V26.2032C0.848633 26.6345 0.960166 27.036 1.13118 27.3929L11.9945 16.998L1.13862 6.5957C0.960166 6.96004 0.848633 7.36156 0.848633 7.78539Z"
                                        fill="url(#paint3_linear_907_2176)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_907_2176" x1="5.65469" y1="-6.82121"
                                            x2="36.9405" y2="27.4647" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_907_2176" x1="8.23105" y1="-9.17799"
                                            x2="39.5168" y2="25.1076" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_907_2176" x1="-5.73327" y1="3.56725"
                                            x2="25.5525" y2="37.8529" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                        <linearGradient id="paint3_linear_907_2176" x1="-8.30111" y1="5.90621"
                                            x2="22.9847" y2="40.1922" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </span>
                            <p class="mb-0">
                                <a href="mailto:info@alviopharma.com" target="_blank">info@alviopharma.com</a>
                            </p>
                        </div>
                        <div class="con_links">
                            <span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_907_2186)">
                                        <path
                                            d="M26.4611 22.741C24.9532 21.4713 22.717 21.6331 21.4473 23.141L20.02 24.8422C19.7046 25.2287 19.117 25.2753 18.7387 24.998C14.8929 22.1191 11.8219 18.3964 9.6974 14.0719C9.48494 13.6394 9.68323 13.0789 10.0694 12.8365L11.9868 11.7472C13.692 10.7831 14.3029 8.61994 13.3307 6.8766L10.6129 2.20148C9.78228 0.746447 7.83687 0.407486 6.55337 1.48013C1.71302 5.46854 -0.394109 12.5351 9.02014 23.899C18.4262 35.2248 25.7577 34.4861 30.5899 30.4596C31.8734 29.387 31.8913 27.4308 30.6229 26.3488L26.4611 22.741Z"
                                            fill="url(#paint0_linear_907_2186)" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_907_2186" x1="-1.9646" y1="0.130763"
                                            x2="29.3212" y2="34.4167" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF" />
                                            <stop offset="1" stop-color="#1075FF" />
                                        </linearGradient>
                                        <clipPath id="clip0_907_2186">
                                            <rect width="34" height="34" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <p class="mb-0">
                                <a href="tel:+91 9690020836" target="_blank">+91 9690020836</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="contact_right">

                <div class="col-lg-12">
                    <h2 class="title-54 mb-40">Get in Touch</h2>
                    <p>If you are a medical professional, distributor, or institutional partner and would like to
                        connect with Alvio Pharmaceuticals, please reach out using the details below or submit the
                        enquiry form. 
                    </p>
                </div>
                <form id="contactform" method="POST" action="{{ route('inquiry.submit') }}" novalidate>
                    @csrf
                    <div class="row gx-lg-5">
                        <div class="col-lg-6">
                            <div class="contact_items">
                                <label class="title-24">Your Name*</label>
                                <input type="text" id="name" name="name" maxlength="50"
                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s{2,}/g, ' ');"
                                    placeholder="Enter your Full Name">
                                <span class="error" id="error-name"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_items">
                                <label class="title-24">Company Name (Optional)</label>
                                <input type="text" id="company_name" name="company_name" maxlength="50"
                                    placeholder="Enter your Company Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_items">
                                <label class="title-24">Phone Number*</label>
                                <input type="text" id="phone" name="phone" maxlength="15"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                    placeholder="Enter your Phone Number">
                                <span class="error" id="error-phone"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_items">
                                <label class="title-24">Your Email*</label>
                                <input type="email" id="email" name="email" maxlength="60"
                                    placeholder="Enter your Email ID">
                                <span class="error" id="error-email"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact_items">
                                <label class="title-24">Message</label>
                                <textarea id="message" name="message" placeholder="Write your requirements"
                                    rows="1"></textarea>
                            </div>
                        </div>
                        <div class="form_group d-flex align-items-end gap-4">
                            <div style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;">
                                <span id="captcha-text" style="font-size: 20px; font-weight: bold; letter-spacing: 6px; padding: 8px 18px;
                            background: #f8f8f8; border: 1px solid #aaa; border-radius: 8px;
                            user-select: none; cursor: pointer; min-width: 140px; text-align: center;">
                                </span>
                                <button type="button" id="refresh-captcha" style="font-size: 20px; width: 40px; height: 40px; border-radius: 50%;
                            background: #f0f0f0; border: 1px solid #ccc; cursor: pointer;">
                                    ↻
                                </button>
                            </div>
                            <div class="contact_items">
                                <input type="text" id="captcha" name="captcha" maxlength="6"
                                    placeholder="Enter the number" inputmode="numeric" autocomplete="off"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                <span id="error-captcha" class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact_items">
                                <div class="btn_main">
                                    <a href="{{ route('blogs') }}" class="commo-btn ">Submit</a>
                                    <a href="{{ route('blogs') }}" class="commo-btn-arrow "><svg width="15" height="15"
                                            viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.750118 13.478L13.478 0.750116L0.750118 13.478ZM13.478 0.750116H3.57852H13.478ZM13.478 0.750116V10.6496V0.750116Z"
                                                fill="white" />
                                            <path
                                                d="M0.750118 13.478L13.478 0.750116M13.478 0.750116H3.57852M13.478 0.750116V10.6496"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="p-x mt-100">
    <h2 class="mb-4 text-center title-54">Locate Us</h2>
    <div>
        <iframe class="map_iframe"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3672.971485801041!2d72.4906224!3d22.988076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b76496224b9%3A0xacbe0e6f8cdb9468!2sAlvio%20Pharmaceuticals!5e0!3m2!1sen!2sin!4v1775455035720!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@include('layouts.fronttop-footer')
@include('layouts.frontfooter')
<style>
.error {
    color: #dc3545;
    font-size: 13px;
    display: block;
    margin-top: 5px;
    min-height: 18px;
}
</style>
<script>
$(document).ready(function() {

    // ================= DISPOSABLE EMAIL LIST =================
    const disposableDomains = [
        'mailinator.com', '10minutemail.com', 'guerrillamail.com', 'tempmail.com',
        'temp-mail.org', 'throwawaymail.com', 'maildrop.cc', 'dispostable.com',
        'getairmail.com', 'moakt.com', 'spamgourmet.com', 'yopmail.com',
        'sharklasers.com', 'mailnesia.com', 'fakemail.net', 'emailondeck.com',
        'trashmail.com', 'mintemail.com', 'mytemp.email'
    ];

    function isDisposableEmail(email) {
        const domain = email.split('@')[1]?.toLowerCase();
        return domain && disposableDomains.includes(domain);
    }

    // ================= CAPTCHA =================
    let captchaCode = "";

    function generateCaptcha() {
        captchaCode = Math.floor(100000 + Math.random() * 900000).toString();
        $('#captcha-text').text(captchaCode);
    }

    generateCaptcha();

    $('#refresh-captcha, #captcha-text').click(function() {
        generateCaptcha();
        $('#captcha').val('');
        $('#error-captcha').text('');
    });

    // ================= CLEAR ERRORS =================
    $('#contactform input, #contactform textarea').on('input', function() {
        $('#error-' + this.id).text('');
    });

    // ================= FORM SUBMIT =================
    $('#contactform').on('submit', function(e) {

        e.preventDefault();

        let isValid = true;
        $('.error').text('');

        // ===== NAME =====
        let name = $('#name').val().trim();

        if (!name) {
            $('#error-name').text('Please enter your name');
            isValid = false;
        }



        // ===== PHONE =====
        let phone = $('#phone').val().trim();

        if (!phone) {
            $('#error-phone').text('Please enter your mobile number');
            isValid = false;
        } else if (!/^[0-9]{10,15}$/.test(phone)) {
            $('#error-phone').text('Mobile number must be 10–15 digits');
            isValid = false;
        }

        // ===== EMAIL =====
        let email = $('#email').val().trim();

        if (!email) {
            $('#error-email').text('Please enter your email');
            isValid = false;
        } else if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email)) {
            $('#error-email').text('Please enter a valid email');
            isValid = false;
        } else if (isDisposableEmail(email)) {
            $('#error-email').text('Disposable emails are not allowed');
            isValid = false;
        }

        // ===== CAPTCHA =====
        let enteredCaptcha = $('#captcha').val().trim();

        if (!enteredCaptcha) {
            $('#error-captcha').text('Please enter the captcha');
            isValid = false;
        } else if (enteredCaptcha !== captchaCode) {
            $('#error-captcha').text('Incorrect captcha');
            $('#captcha').val('').focus();
            generateCaptcha();
            isValid = false;
        }

        // ===== SCROLL TO FIRST ERROR =====
        if (!isValid) {

            const firstError = $('.error').filter(function() {
                return $(this).text().trim() !== '';
            }).first();

            if (firstError.length) {
                $('html, body').animate({
                    scrollTop: firstError.offset().top - 120
                }, 400);
            }

            return;
        }

        // ===== SUBMIT FORM =====
        $('#submitBtn')
            .prop('disabled', true)
            .text('Submitting...');

        this.submit();
    });

});
</script>