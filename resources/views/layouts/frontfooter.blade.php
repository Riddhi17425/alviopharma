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
                    <div class="alert alert-success py-2 px-3 mb-3" style="background:rgba(255,255,255,0.15);border:1px solid #a3e635;color:#fff;border-radius:8px;font-size:14px;">
                        {{ session('newsletter_success') }}
                    </div>
                @endif

                <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('newsletter_email') is-invalid @enderror"
                               id="floatingInput" name="newsletter_email"
                               placeholder=""
                               value="{{ old('newsletter_email') }}">
                        <label for="floatingInput">Enter your email</label>
                        @error('newsletter_email')
                            <div class="invalid-feedback" style="color:#fca5a5;font-size:13px;">{{ $message }}</div>
                        @enderror
                        <div class="newsletter-email-error" style="color:#fca5a5;font-size:13px;display:none;margin-top:4px;"></div>
                    </div>
                    <div class="form-check d-flex align-items-center gap-3">
                        <span>
                            <input type="checkbox"
                                   class="form-check-input @error('newsletter_consent') is-invalid @enderror"
                                   id="newsletterConsent"
                                   name="newsletter_consent"
                                   value="1"
                                   {{ old('newsletter_consent') ? 'checked' : '' }}>
                        </span>
                        <label class="form-check-label" for="newsletterConsent">
                            Subscribe to get updates on new launches,<br /> insights , &amp; events.
                        </label>
                    </div>
                    @error('newsletter_consent')
                        <div style="color:#fca5a5;font-size:13px;margin-top:4px;">{{ $message }}</div>
                    @enderror
                    <div class="newsletter-consent-error" style="color:#fca5a5;font-size:13px;display:none;margin-top:4px;"></div>

                    <button type="submit" class="btn" id="newsletterSubmitBtn">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
            $categorys =  \App\Models\Category::where('status' , 'Active')->get();    
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
                <li><a href="tel:917966176465">M: +91 79 6617 6465</a>
                    <br>
                    <a href="tel:917966176465">M: +91 79 6617 7475</a>
                </li>
                <li><a href="mailto:info@alviopharma.com">E: info@alviopharma.com</a></li>
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
                <p class="text-white mb-0">© {{ date('Y') }} Alvio Pharmaceuticals Pvt. Ltd. All Rights Reserved.   </p>
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
$(document).ready(function () {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    $('#newsletterForm').on('submit', function (e) {
        var isValid = true;

        // Reset errors
        $('.newsletter-email-error').hide().text('');
        $('.newsletter-consent-error').hide().text('');
        $('#floatingInput').removeClass('is-invalid');
        $('#newsletterConsent').removeClass('is-invalid');

        var email   = $.trim($('#floatingInput').val());
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
    $('#floatingInput').on('input', function () {
        $(this).removeClass('is-invalid');
        $('.newsletter-email-error').hide().text('');
    });

    $('#newsletterConsent').on('change', function () {
        $(this).removeClass('is-invalid');
        $('.newsletter-consent-error').hide().text('');
    });
});
</script>

</html>