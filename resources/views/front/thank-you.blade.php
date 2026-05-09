@include('layouts.frontheader')


<section class="thank-you">
    <img src="{{ asset('public/front/images/thank-you.webp') }}" alt="Thank You" class=" img-fluid">
    <div class="thank-you-content">
        <div class="thank-you-text">
            <h1 class="title-54 text-white">Thank You!</h1>
            <p>Your inquiry has been placed successfully.</p>
        </div>
        <div class="thank-you-button">
            <a href="{{ url('/') }}" class="commo-btn contact_btn">Back to Homepage</a>
        </div>
    </div>
</section>

@include('layouts.frontfooter')