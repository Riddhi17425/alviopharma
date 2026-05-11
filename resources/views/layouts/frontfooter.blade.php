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
                <li class="mb-2"> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_2419)">
                            <g clip-path="url(#clip1_1_2419)">
                                <path
                                    d="M15.2054 12.9469C14.3704 12.2439 13.1322 12.3335 12.4292 13.1684L11.6389 14.1104C11.4643 14.3244 11.1389 14.3502 10.9294 14.1966C8.79999 12.6026 7.09959 10.5413 5.92324 8.1468C5.8056 7.90735 5.91539 7.59697 6.12922 7.46278L7.19089 6.85962C8.13509 6.32582 8.47335 5.12804 7.93501 4.16275L6.43015 1.57412C5.97024 0.768457 4.89306 0.580774 4.18238 1.1747C1.50226 3.3831 0.335535 7.29587 5.54824 13.5881C10.7564 19.8593 14.8159 19.4502 17.4915 17.2207C18.2022 16.6268 18.2121 15.5437 17.5098 14.9446L15.2054 12.9469Z"
                                    fill="url(#paint0_linear_1_2419)" />
                            </g>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_1_2419" x1="-0.534053" y1="0.427551" x2="16.789"
                                y2="19.4118" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#FAFAFA" />
                            </linearGradient>
                            <clipPath id="clip0_1_2419">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                            <clipPath id="clip1_1_2419">
                                <rect width="18.8259" height="18.8259" fill="white"
                                    transform="translate(0.553711 0.354736)" />
                            </clipPath>
                        </defs>
                    </svg>


                    <a class="ms-2" href="tel:917966176465"> +91 79 6617 6465</a>

                    </span>


                </li>
                <li class="mb-2">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_2419)">
                                <g clip-path="url(#clip1_1_2419)">
                                    <path
                                        d="M15.2054 12.9469C14.3704 12.2439 13.1322 12.3335 12.4292 13.1684L11.6389 14.1104C11.4643 14.3244 11.1389 14.3502 10.9294 14.1966C8.79999 12.6026 7.09959 10.5413 5.92324 8.1468C5.8056 7.90735 5.91539 7.59697 6.12922 7.46278L7.19089 6.85962C8.13509 6.32582 8.47335 5.12804 7.93501 4.16275L6.43015 1.57412C5.97024 0.768457 4.89306 0.580774 4.18238 1.1747C1.50226 3.3831 0.335535 7.29587 5.54824 13.5881C10.7564 19.8593 14.8159 19.4502 17.4915 17.2207C18.2022 16.6268 18.2121 15.5437 17.5098 14.9446L15.2054 12.9469Z"
                                        fill="url(#paint0_linear_1_2419)" />
                                </g>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_1_2419" x1="-0.534053" y1="0.427551" x2="16.789"
                                    y2="19.4118" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="#FAFAFA" />
                                </linearGradient>
                                <clipPath id="clip0_1_2419">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_1_2419">
                                    <rect width="18.8259" height="18.8259" fill="white"
                                        transform="translate(0.553711 0.354736)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <a class="ms-2" href="tel:917966176465"> +91 79 6617 7475</a>

                    </span>
                </li>
                <li class="mb-2">
                    <span>
                        <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.61972 1.90735e-07C1.25669 1.90735e-07 0.928649 0.122468 0.657471 0.323665L8.77971 8.10474C9.16023 8.46777 9.7507 8.46777 10.1312 8.10474L18.2972 0.279926C18.0391 0.104973 17.7286 0 17.3918 0L1.61972 1.90735e-07Z"
                                fill="url(#paint0_linear_827_696)" />
                            <path
                                d="M19.0008 12.4458V1.60736C19.0008 1.33181 18.9264 1.07375 18.7996 0.846313L12.3481 7.02656L18.7952 13.2068C18.922 12.9794 19.0008 12.7213 19.0008 12.4458Z"
                                fill="url(#paint1_linear_827_696)" />
                            <path
                                d="M10.6561 8.64984C10.3193 8.9735 9.88629 9.13534 9.45765 9.13534C9.02902 9.13534 8.59163 8.9735 8.25922 8.64984L7.11327 7.552L0.657471 13.7323C0.928649 13.9334 1.25669 14.0559 1.61972 14.0559H17.3918C17.7286 14.0559 18.0391 13.9509 18.2972 13.776L11.802 7.552L10.6561 8.64984Z"
                                fill="url(#paint2_linear_827_696)" />
                            <path
                                d="M0 1.60692V12.4409C0 12.6946 0.0656075 12.9308 0.166206 13.1408L6.5564 7.02612L0.17058 0.907104C0.065608 1.12142 0 1.35761 0 1.60692Z"
                                fill="url(#paint3_linear_827_696)" />
                            <defs>
                                <linearGradient id="paint0_linear_827_696" x1="2.82739" y1="-6.98582" x2="21.2308"
                                    y2="13.1824" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_827_696" x1="4.34297" y1="-8.37144" x2="22.7464"
                                    y2="11.7966" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_827_696" x1="-3.87141" y1="-0.874659" x2="14.532"
                                    y2="19.2933" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_827_696" x1="-5.3822" y1="0.501519" x2="13.0212"
                                    y2="20.6697" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" />
                                </linearGradient>
                            </defs>
                        </svg>


                        <a class="ms-2" href="mailto:info@alviopharma.com"> info@alviopharma.com</a>
                    </span>
                </li>
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