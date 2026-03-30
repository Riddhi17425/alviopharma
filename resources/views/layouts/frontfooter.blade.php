<footer>
    <div class="footer-wrapper p-x">
        <div class="footer-item">
            <a href="javascript:void(0)"><img src="{{ asset('public/front/images/logo.svg') }}" alt="alvio-logo" class="img-fluid"></a>
            <p class="text--white pt-3">We are committed to delivering quality-driven pharmaceutical solutions with a focus on accessibility, trust, and long-term healthcare impact.</p>
            <div class="subcription-form pt-5">
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">By subscribing you agree to the Privacy
                            Policy</label>
                    </div>
                    <button type="submit" class="btn"><svg width="20" height="16" viewBox="0 0 20 16" fill="none"
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
            </ul>
        </div>
        <div class="footer-item">
            <h5 class="footer-title">Who We Are</h5>
            <ul class="footer-list">
                <li><a href="{{ route('our.company')}}">Our Company</a></li>
                <li><a href="{{ route('board.directors')}}">Board of Directors</a></li>
                <li><a href="{{ route('our.heritage')}}">Our Heritage</a></li>
                <li><a href="{{ route('sustainability')}}">Sustainability & Responsibility</a></li>
            </ul>
        </div>
        <div class="footer-item">
            <h5 class="footer-title"><a href="therapeutic-area">Therapeutic Areas</a></h5>
            <ul class="footer-list">
                <li><a href="javascript:void(0)">DermaScience Division</a></li>
                <li><a href="javascript:void(0)">CardioMet Care Division</a></li>
            </ul>
            <h5 class="footer-title">Contact</h5>
            <ul class="footer-list">
                <li><a href="tel:917966176465">M: +91 79 6617 6465</a></li>
                <li><a href="mailto:info@alviopharma.com"></a>E: info@alviopharma.com</li>
            </ul>
        </div>

    </div>
    <div class="bottom-footer">
        <div class="bottom-footer-wrapper p-x">
            <div class="social-icons">
                <a href="javascript:void(0)" rel="nofollow"><img src="{{ asset('public/front/images/linkedin-icon.svg') }}" alt="LinkedIn"
                        class="me-3"></a>
                <a href="javascript:void(0)" rel="nofollow"><img src="{{ asset('public/front/images/insta-icon.svg') }}" alt="Instagram"
                        class="me-3"></a>
                <a href="javascript:void(0)" rel="nofollow"><img src="{{ asset('public/front/images/facebook-icon.svg') }}" alt="Facebook"
                        class="me-3"></a>
                <a href="javascript:void(0)" rel="nofollow"><img src="{{ asset('public/front/images/whatsapp-icon.svg') }}" alt="WhatsApp"
                        class="me-3"></a>
            </div>
            <div class="footer-content ">
                <p class="text-white mb-0">© <?php echo date("Y"); ?> Alvio Pharma. All Rights Reserved.</p>
            </div>
            <div class="footer-content">
                <p class="common-para text--white"><a href="javascript:void(0)">Privacy Policy</a></p>
                <p class="common-para text--white">|</p>
                <p class="common-para text--white"><a href="javascript:void(0)">Terms & Conditions</a></p>
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

<!-- Project JS (depends on vendor libraries) -->
<script src="{{ asset('public/front/js/main.js') }}"></script>

</html>