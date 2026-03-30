@include('layouts.frontheader')
@if($menubanner)
<section class="page-header">
   <div>
      <img src="{{ asset('public/menubannerimage/'.  $menubanner->image) }}" class="img-fluid" alt="{{ $menubanner->title }}">
   </div>
   <div class="page-header-content p-x">
      <div class="page-header-text com_bg_blue">
         <p class="text-white"><a href="{{ url('/') }}">Home</a> / Contact</p>
         <h1 class="title-34 text--white">{{ $menubanner->title }}</h1>
         <p class="text-white page-header-para">{!! $menubanner->description !!}</p>
      </div>
   </div>
</section>
@endif
<section class="contact p-x mt_80">
   <div class="row gx-0">
      <div class="col-lg-5">
         <div class="contact_left com_bg_light_blue">
            <div class="contact_left_child">
               <h5 class="title-24 title--blue">Registered & Corporate Office</h5>
               <div class="con_links">
                  <span>
                     <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M18.0609 2.25781C14.7691 2.2617 11.6132 3.57109 9.28551 5.89878C6.95783 8.22646 5.64843 11.3824 5.64454 14.6742C5.6406 17.3643 6.51931 19.9814 8.14588 22.124C8.14588 22.124 8.48451 22.5699 8.53982 22.6342L18.0609 33.8632L27.5866 22.6286C27.6362 22.5688 27.976 22.124 27.976 22.124L27.9771 22.1206C29.6029 19.9789 30.4812 17.3631 30.4773 14.6742C30.4734 11.3824 29.164 8.22646 26.8364 5.89878C24.5087 3.57109 21.3528 2.2617 18.0609 2.25781ZM18.0609 19.1892C17.1679 19.1892 16.295 18.9244 15.5525 18.4283C14.81 17.9322 14.2313 17.2271 13.8896 16.402C13.5478 15.577 13.4584 14.6692 13.6326 13.7934C13.8069 12.9175 14.2369 12.113 14.8683 11.4816C15.4998 10.8501 16.3043 10.4201 17.1801 10.2459C18.0559 10.0717 18.9637 10.1611 19.7888 10.5028C20.6138 10.8446 21.3189 11.4233 21.8151 12.1658C22.3112 12.9083 22.576 13.7812 22.576 14.6742C22.5745 15.8712 22.0983 17.0188 21.2519 17.8652C20.4055 18.7116 19.2579 19.1878 18.0609 19.1892Z"
                           fill="url(#paint0_linear_570_1370)" />
                        <defs>
                           <linearGradient id="paint0_linear_570_1370" x1="18.0609" y1="2.25781" x2="18.0609"
                              y2="33.8632" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#307ABD" />
                              <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
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
                           d="M33.1121 6.01562H3.01172V30.0959H33.1121V6.01562ZM30.102 12.0357L18.0619 19.5608L6.02175 12.0357V9.02566L18.0619 16.5507L30.102 9.02566V12.0357Z"
                           fill="url(#paint0_linear_570_1375)" />
                        <defs>
                           <linearGradient id="paint0_linear_570_1375" x1="18.0619" y1="6.01562" x2="18.0619"
                              y2="30.0959" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#307ABD" />
                              <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
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
                        <path
                           d="M30.097 16.5593H33.1071C33.1071 8.83853 27.2781 3.01562 19.5469 3.01562V6.02566C25.6603 6.02566 30.097 10.4549 30.097 16.5593Z"
                           fill="url(#paint0_linear_570_1380)" />
                        <path
                           d="M19.5662 12.0431C22.7313 12.0431 24.0813 13.3931 24.0813 16.5581H27.0913C27.0913 11.7044 24.4199 9.03303 19.5662 9.03303V12.0431ZM24.7164 20.2349C24.4272 19.972 24.0472 19.8318 23.6566 19.8439C23.2659 19.856 22.8953 20.0194 22.6229 20.2996L19.0214 24.0034C18.1545 23.8379 16.4117 23.2946 14.6177 21.5051C12.8237 19.7096 12.2804 17.9623 12.1194 17.1014L15.8202 13.4984C16.1008 13.2262 16.2644 12.8555 16.2765 12.4648C16.2886 12.0741 16.1481 11.694 15.8849 11.4049L10.3239 5.29006C10.0606 5.00013 9.69463 4.82426 9.30374 4.79981C8.91285 4.77536 8.52782 4.90426 8.23043 5.15912L4.96454 7.95996C4.70434 8.2211 4.54904 8.56866 4.52809 8.93671C4.50551 9.31297 4.07508 18.2257 10.9861 25.1397C17.0152 31.1673 24.5674 31.6083 26.6473 31.6083C26.9513 31.6083 27.138 31.5993 27.1876 31.5962C27.5556 31.5756 27.903 31.4196 28.1629 31.1583L30.9622 27.8909C31.2173 27.5937 31.3464 27.2088 31.3222 26.8179C31.2981 26.427 31.1225 26.0609 30.8328 25.7974L24.7164 20.2349Z"
                           fill="url(#paint1_linear_570_1380)" />
                        <defs>
                           <linearGradient id="paint0_linear_570_1380" x1="26.327" y1="3.01562" x2="26.327"
                              y2="16.5593" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#307ABD" />
                              <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
                           </linearGradient>
                           <linearGradient id="paint1_linear_570_1380" x1="17.9204" y1="4.79687" x2="17.9204"
                              y2="31.6083" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#307ABD" />
                              <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
                           </linearGradient>
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
                           <path
                              d="M18.0609 2.25781C14.7691 2.2617 11.6132 3.57109 9.28551 5.89878C6.95783 8.22646 5.64843 11.3824 5.64454 14.6742C5.6406 17.3643 6.51931 19.9814 8.14588 22.124C8.14588 22.124 8.48451 22.5699 8.53982 22.6342L18.0609 33.8632L27.5866 22.6286C27.6362 22.5688 27.976 22.124 27.976 22.124L27.9771 22.1206C29.6029 19.9789 30.4812 17.3631 30.4773 14.6742C30.4734 11.3824 29.164 8.22646 26.8364 5.89878C24.5087 3.57109 21.3528 2.2617 18.0609 2.25781ZM18.0609 19.1892C17.1679 19.1892 16.295 18.9244 15.5525 18.4283C14.81 17.9322 14.2313 17.2271 13.8896 16.402C13.5478 15.577 13.4584 14.6692 13.6326 13.7934C13.8069 12.9175 14.2369 12.113 14.8683 11.4816C15.4998 10.8501 16.3043 10.4201 17.1801 10.2459C18.0559 10.0717 18.9637 10.1611 19.7888 10.5028C20.6138 10.8446 21.3189 11.4233 21.8151 12.1658C22.3112 12.9083 22.576 13.7812 22.576 14.6742C22.5745 15.8712 22.0983 17.0188 21.2519 17.8652C20.4055 18.7116 19.2579 19.1878 18.0609 19.1892Z"
                              fill="url(#paint0_linear_570_1370)" />
                           <defs>
                              <linearGradient id="paint0_linear_570_1370" x1="18.0609" y1="2.25781"
                                 x2="18.0609" y2="33.8632" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#307ABD" />
                                 <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
                              </linearGradient>
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
                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M33.1121 6.01562H3.01172V30.0959H33.1121V6.01562ZM30.102 12.0357L18.0619 19.5608L6.02175 12.0357V9.02566L18.0619 16.5507L30.102 9.02566V12.0357Z"
                              fill="url(#paint0_linear_570_1375)" />
                           <defs>
                              <linearGradient id="paint0_linear_570_1375" x1="18.0619" y1="6.01562"
                                 x2="18.0619" y2="30.0959" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#307ABD" />
                                 <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
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
                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M30.097 16.5593H33.1071C33.1071 8.83853 27.2781 3.01562 19.5469 3.01562V6.02566C25.6603 6.02566 30.097 10.4549 30.097 16.5593Z"
                              fill="url(#paint0_linear_570_1380)" />
                           <path
                              d="M19.5662 12.0431C22.7313 12.0431 24.0813 13.3931 24.0813 16.5581H27.0913C27.0913 11.7044 24.4199 9.03303 19.5662 9.03303V12.0431ZM24.7164 20.2349C24.4272 19.972 24.0472 19.8318 23.6566 19.8439C23.2659 19.856 22.8953 20.0194 22.6229 20.2996L19.0214 24.0034C18.1545 23.8379 16.4117 23.2946 14.6177 21.5051C12.8237 19.7096 12.2804 17.9623 12.1194 17.1014L15.8202 13.4984C16.1008 13.2262 16.2644 12.8555 16.2765 12.4648C16.2886 12.0741 16.1481 11.694 15.8849 11.4049L10.3239 5.29006C10.0606 5.00013 9.69463 4.82426 9.30374 4.79981C8.91285 4.77536 8.52782 4.90426 8.23043 5.15912L4.96454 7.95996C4.70434 8.2211 4.54904 8.56866 4.52809 8.93671C4.50551 9.31297 4.07508 18.2257 10.9861 25.1397C17.0152 31.1673 24.5674 31.6083 26.6473 31.6083C26.9513 31.6083 27.138 31.5993 27.1876 31.5962C27.5556 31.5756 27.903 31.4196 28.1629 31.1583L30.9622 27.8909C31.2173 27.5937 31.3464 27.2088 31.3222 26.8179C31.2981 26.427 31.1225 26.0609 30.8328 25.7974L24.7164 20.2349Z"
                              fill="url(#paint1_linear_570_1380)" />
                           <defs>
                              <linearGradient id="paint0_linear_570_1380" x1="26.327" y1="3.01562" x2="26.327"
                                 y2="16.5593" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#307ABD" />
                                 <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
                              </linearGradient>
                              <linearGradient id="paint1_linear_570_1380" x1="17.9204" y1="4.79687"
                                 x2="17.9204" y2="31.6083" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#307ABD" />
                                 <stop offset="1" stop-color="#307ABD" stop-opacity="0.6" />
                              </linearGradient>
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
                            <textarea id="message" name="message" placeholder="Write your requirements" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="form_group row align-items-end">
                        <div class="col-4" style="margin: 12px 0; display: flex; align-items: center; gap: 12px;">
                            <span id="captcha-text"
                            style="font-size: 26px; font-weight: bold; letter-spacing: 6px; padding: 10px 18px;
                            background: #f8f8f8; border: 1px solid #aaa; border-radius: 8px;
                            user-select: none; cursor: pointer; min-width: 140px; text-align: center;">
                            </span>
                            <button type="button" id="refresh-captcha"
                            style="font-size: 22px; width: 44px; height: 44px; border-radius: 50%;
                            background: #f0f0f0; border: 1px solid #ccc; cursor: pointer;">
                            ↻
                            </button>
                        </div>
                        <div class="contact_items col-4">
                            <input type="text" id="captcha" name="captcha" maxlength="6"
                            placeholder="Enter the number" inputmode="numeric" autocomplete="off"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                        <span id="error-captcha" class="error"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact_items">
                            <button type="submit" id="submitBtn" class="commo-btn bg-black btn-color-white">Submit </button>
                            <a href="#" class="commo-btn-arrow bg-black btn-color-white">
                            <svg width="15" height="15"
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
               </form>
         </div>
      </div>
   </div>
</section>
<section class="p-x mt-100">
   <h2 class="mb-4 text-center title-54">Locate Us</h2>
   <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.9708598274915!2d72.49073417603567!3d22.98809901761238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b76496224b9%3A0xacbe0e6f8cdb9468!2sAlvio%20Pharmaceuticals!5e0!3m2!1sen!2sin!4v1768996992692!5m2!1sen!2sin"
      width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
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
   $(document).ready(function () {
   
       // ================= DISPOSABLE EMAIL LIST =================
       const disposableDomains = [
           'mailinator.com','10minutemail.com','guerrillamail.com','tempmail.com',
           'temp-mail.org','throwawaymail.com','maildrop.cc','dispostable.com',
           'getairmail.com','moakt.com','spamgourmet.com','yopmail.com',
           'sharklasers.com','mailnesia.com','fakemail.net','emailondeck.com',
           'trashmail.com','mintemail.com','mytemp.email'
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
   
       $('#refresh-captcha, #captcha-text').click(function () {
           generateCaptcha();
           $('#captcha').val('');
           $('#error-captcha').text('');
       });
   
       // ================= CLEAR ERRORS =================
       $('#contactform input, #contactform textarea').on('input', function () {
           $('#error-' + this.id).text('');
       });
   
       // ================= FORM SUBMIT =================
       $('#contactform').on('submit', function (e) {
   
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
           } 
           else if (!/^[0-9]{10,15}$/.test(phone)) {
               $('#error-phone').text('Mobile number must be 10–15 digits');
               isValid = false;
           }
   
           // ===== EMAIL =====
           let email = $('#email').val().trim();
   
           if (!email) {
               $('#error-email').text('Please enter your email');
               isValid = false;
           } 
           else if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email)) {
               $('#error-email').text('Please enter a valid email');
               isValid = false;
           }
           else if (isDisposableEmail(email)) {
               $('#error-email').text('Disposable emails are not allowed');
               isValid = false;
           }
   
           // ===== CAPTCHA =====
           let enteredCaptcha = $('#captcha').val().trim();
   
           if (!enteredCaptcha) {
               $('#error-captcha').text('Please enter the captcha');
               isValid = false;
           } 
           else if (enteredCaptcha !== captchaCode) {
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