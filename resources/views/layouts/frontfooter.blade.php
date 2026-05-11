<footer>
    <div class="footer-wrapper p-x">
        <div class="footer-item">
            <a href="javascript:void(0)"><img src="{{ asset('public/front/images/logo.svg') }}" alt="alvio-logo"
                    class="img-fluid"></a>
            <p class="text--white pt-3">Delivering high-quality pharmaceutical solutions with a strong focus on trust,
                accessibility, and long-term healthcare impact across India.</p>
            <div class="subcription-form pt-lg-5">

                {{-- Success Message --}}
                @if(session('newsletter_success'))
                <div class="alert alert-success py-2 px-3 mb-3"
                    style="background:rgba(255,255,255,0.15);border:1px solid #a3e635;color:#fff;border-radius:8px;font-size:14px;">
                    {{ session('newsletter_success') }}
                </div>
                @endif

                <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('newsletter_email') is-invalid @enderror"
                            id="floatingInput" name="newsletter_email" placeholder=""
                            value="{{ old('newsletter_email') }}">
                        <label for="floatingInput">Enter your email</label>
                        @error('newsletter_email')
                        <div class="invalid-feedback" style="color:#fca5a5;font-size:13px;">{{ $message }}</div>
                        @enderror
                        <div class="newsletter-email-error"
                            style="color:#fca5a5;font-size:13px;display:none;margin-top:4px;"></div>
                    </div>
                    <div class="form-check d-flex align-items-center gap-3">
                        <span>
                            <input type="checkbox"
                                class="form-check-input @error('newsletter_consent') is-invalid @enderror"
                                id="newsletterConsent" name="newsletter_consent" value="1"
                                {{ old('newsletter_consent') ? 'checked' : '' }}>
                        </span>
                        <label class="form-check-label" for="newsletterConsent">
                            Subscribe to get updates on new launches,<br /> insights , &amp; events.
                        </label>
                    </div>
                    @error('newsletter_consent')
                    <div style="color:#fca5a5;font-size:13px;margin-top:4px;">{{ $message }}</div>
                    @enderror
                    <div class="newsletter-consent-error"
                        style="color:#fca5a5;font-size:13px;display:none;margin-top:4px;"></div>

                    <button type="submit" class="btn" id="newsletterSubmitBtn">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.75001 7.75001L18.75 7.75001ZM18.75 7.75001L11.75 0.749999ZM18.75 7.75001L11.75 14.75Z"
                                fill="white" />
                            <path
                                d="M0.75001 7.75001L18.75 7.75001M18.75 7.75001L11.75 0.749999M18.75 7.75001L11.75 14.75"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-item">
            <h5 class="footer-title">Quick Links</h5>
            <ul class="footer-list">
                <li><a href="{{ url('/')}}">Home</a></li>
                <!-- <li><a href="#">Our Science & Innovation</a></li> -->
                <li><a href="{{ route('manufacturing')}}">Manufacturing & Quality</a></li>
                <li><a href="{{ route('blogs')}}">Insights</a></li>
                <li><a href="{{ route('contact')}}">Contact Us</a></li>
                <li><a href="{{ route('therapeutic.area')}}">Therapeutic Areas</a></li>

            </ul>
        </div>
        <div class="footer-item">
            <h5 class="footer-title">Who We Are</h5>
            <ul class="footer-list">
                <li><a href="{{ route('our.company')}}">Our Company</a></li>
                <li><a href="{{ route('board.directors') }}">Leadership</a></li>
                <li><a href="{{ route('values.purpose') }}">Values & purpose</a></li>
                <!-- <li><a href="{{ route('board.directors')}}">Board of Directors</a></li> -->
                <li><a href="{{ route('our.heritage')}}">Our Heritage</a></li>
                <li><a href="{{ route('sustainability')}}">Sustainability</a></li>
            </ul>
        </div>
        @php
        $categorys = \App\Models\Category::where('status' , 'Active')->get();
        @endphp

        <div class="footer-item">
            <h5 class="footer-title">Therapeutic Areas</h5>
            <ul class="footer-list">
                @foreach ($categorys as $category)
                <li><a href="{{ route('product', ['category' => $category->url]) }}"> {{ $category->name }} </a></li>
                @endforeach
                {{-- <li><a href="javascript:void(0)">Diabetology (Metabolic care) </a></li>
                <li><a href="javascript:void(0)">Dermatology & Cosmetology</a></li>
                <li><a href="javascript:void(0)">Nutraceuticals</a></li> --}}

            </ul>
            <h5 class="footer-title">Contact</h5>
            <ul class="footer-list">
                <li class="mb-2"> <span>
                        <svg width="20" height="20" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_907_2158)">
                                <path
                                    d="M27.4611 23.4988C25.9532 22.2291 23.717 22.3909 22.4473 23.8988L21.02 25.6C20.7046 25.9865 20.117 26.0331 19.7387 25.7558C15.8929 22.8769 12.8219 19.1542 10.6974 14.8297C10.4849 14.3973 10.6832 13.8367 11.0694 13.5943L12.9868 12.505C14.692 11.541 15.3029 9.37775 14.3307 7.63442L11.6129 2.95929C10.7823 1.50426 8.83687 1.1653 7.55337 2.23794C2.71302 6.22635 0.605891 13.2929 10.0201 24.6568C19.4262 35.9827 26.7577 35.2439 31.5899 31.2174C32.8734 30.1448 32.8913 28.1887 31.6229 27.1066L27.4611 23.4988Z"
                                    fill="url(#paint0_linear_907_2158)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_907_2158" x1="-0.964601" y1="0.888575" x2="30.3212"
                                    y2="35.1745" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#97E0FF" />
                                    <stop offset="1" stop-color="#1075FF" />
                                </linearGradient>
                                <clipPath id="clip0_907_2158">
                                    <rect width="34" height="34" fill="white" transform="translate(1 0.757812)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <a href="tel:917966176465"> +91 79 6617 6465</a>

                    </span>


                </li>
                <li class="mb-2">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_907_2158)">
                                <path
                                    d="M27.4611 23.4988C25.9532 22.2291 23.717 22.3909 22.4473 23.8988L21.02 25.6C20.7046 25.9865 20.117 26.0331 19.7387 25.7558C15.8929 22.8769 12.8219 19.1542 10.6974 14.8297C10.4849 14.3973 10.6832 13.8367 11.0694 13.5943L12.9868 12.505C14.692 11.541 15.3029 9.37775 14.3307 7.63442L11.6129 2.95929C10.7823 1.50426 8.83687 1.1653 7.55337 2.23794C2.71302 6.22635 0.605891 13.2929 10.0201 24.6568C19.4262 35.9827 26.7577 35.2439 31.5899 31.2174C32.8734 30.1448 32.8913 28.1887 31.6229 27.1066L27.4611 23.4988Z"
                                    fill="url(#paint0_linear_907_2158)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_907_2158" x1="-0.964601" y1="0.888575" x2="30.3212"
                                    y2="35.1745" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#97E0FF" />
                                    <stop offset="1" stop-color="#1075FF" />
                                </linearGradient>
                                <clipPath id="clip0_907_2158">
                                    <rect width="34" height="34" fill="white" transform="translate(1 0.757812)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <a href="tel:917966176465"> +91 79 6617 7475</a>

                    </span>
                </li>
                <li class="mb-2">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                        <a href="mailto:info@alviopharma.com"> info@alviopharma.com</a>
                </li>

                </span>

            </ul>
        </div>

    </div>
    <div class="bottom-footer">
        <div class="bottom-footer-wrapper p-x">
            <div class="social-icons">
                <a href="https://in.linkedin.com/company/alviopharma" rel="nofollow" target="_blank"><img
                        src="{{ asset('public/front/images/linkedin-icon.svg') }}" alt="LinkedIn" class="me-3"></a>
                <!--<a href="javascript:void(0)" rel="nofollow" target="_blank"><img src="{{ asset('public/front/images/insta-icon.svg') }}"-->
                <!--        alt="Instagram" class="me-3"></a>-->
                <a href="https://www.facebook.com/alviopharma" rel="nofollow" target="_blank"><img
                        src="{{ asset('public/front/images/facebook-icon.svg') }}" alt="Facebook" class="me-3"></a>
                <!--<a href="javascript:void(0)" rel="nofollow" target="_blank"><img-->
                <!--        src="{{ asset('public/front/images/whatsapp-icon.svg') }}" alt="WhatsApp" class="me-3"></a>-->
            </div>
            <div class="footer-content ">
                <p class="text-white mb-0">© {{ date('Y') }} Alvio Pharmaceuticals Pvt. Ltd. All Rights Reserved. </p>
            </div>
            <div class="footer-content">
                <p class="common-para text--white"><a href="{{ route('privacy') }}">Privacy Policy</a></p>
                <p class="common-para text--white">|</p>
                <p class="common-para text--white"><a href="{{ route('termsConditions') }}">Terms & Conditions</a></p>
            </div>
        </div>
    </div>
</footer>
</body>

<!-- jQuery (required by Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Slider JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Bootstrap 5 JS (bundle includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
    integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
AOS.init({
    duration: 1000,
    once: true
});
</script>


<!-- Project JS (depends on vendor libraries) -->
<script src="{{ asset('public/front/js/main.js') }}"></script>

<script>
$(document).ready(function() {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    $('#newsletterForm').on('submit', function(e) {
        var isValid = true;

        // Reset errors
        $('.newsletter-email-error').hide().text('');
        $('.newsletter-consent-error').hide().text('');
        $('#floatingInput').removeClass('is-invalid');
        $('#newsletterConsent').removeClass('is-invalid');

        var email = $.trim($('#floatingInput').val());
        var consent = $('#newsletterConsent').is(':checked');

        // Email: required
        if (email === '') {
            $('.newsletter-email-error').text('Please enter your email address.').show();
            $('#floatingInput').addClass('is-invalid');
            isValid = false;
        } else if (!emailRegex.test(email)) {
            // Email: valid format
            $('.newsletter-email-error').text('Please enter a valid email address.').show();
            $('#floatingInput').addClass('is-invalid');
            isValid = false;
        }

        // Checkbox: required
        if (!consent) {
            $('.newsletter-consent-error').text('You must agree to subscribe.').show();
            $('#newsletterConsent').addClass('is-invalid');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    // Live clear errors
    $('#floatingInput').on('input', function() {
        $(this).removeClass('is-invalid');
        $('.newsletter-email-error').hide().text('');
    });

    $('#newsletterConsent').on('change', function() {
        $(this).removeClass('is-invalid');
        $('.newsletter-consent-error').hide().text('');
    });
});
</script>

</html>