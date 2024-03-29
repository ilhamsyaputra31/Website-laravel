<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RentalHub</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}" />
    <script src="{{ asset('frontend/index.js') }}"></script>
  

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.stg.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-2F3cuyCs9o2yBRkg"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>

  <body>
    <div class="row">
      <nav>
        <div class="nav__logo">
          {{-- <figure class="flex">
            <img src="{{ asset('frontend/') }}./assets/logo.svg" class="nav__logo--img" alt="" />
          </figure> --}}
          <a href="/" class="nav__logo--text">RentalHub</a>
        </div>
        <ul class="nav__links">
          <li>
            <a href="#" class="nav__link">About</a>
          </li>
          <li>
            <a href="#" class="nav__link">Pricing</a>
          </li>
          <li>
            <a href="#" class="nav__link">Contact Us</a>
          </li>
          
          <li>
            <a href="{{ route('auth')}}" class="nav__link--primary">Login</a>
          </li>
        </ul>
        <button class="nav__burger" onclick="openMenu()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="nav__burger--icon"
          >
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
        <div class="menu__backdrop">
          <button class="btn__menu btn__menu--close" onclick="closeMenu()">
            &#x2716;
          </button>
          <ul class="menu__links">
            <li class="menu__list">
              <a href="#" class="menu__link">About</a>
            </li>
            <li class="menu__list">
              <a href="#" class="menu__link">Pricing</a>
            </li>
            <li class="menu__list">
              <a href="#" class="menu__link">Contact Us</a>
            </li>
            
            <li>
              <a href="{{ route('auth')}}" class="nav__link--primary">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <main>
      <div class="container">
        <section id="landing" class="row flex space-between">
          <div class="landing__left-container">
            <h1 class="landing__title">
              Selamat Datang di Website Pintar Penyewaan Kami <br><span class="purple">for you.</span>
            </h1>
            <p class="landing__para">
              Integrasikan sistem kami dengan website penyewaan kami dan chill, relax. Kami mengurus sisanya.
            </p>
          </div>
          <figure class="landing__right-container flex">
            <img src="{{ asset('frontend/assets/landing.svg') }}" class="landing__img" alt="" />
          </figure>
        </section>
      </div>

      <div class="container">
        <section id="features" class="features__row">
          <div class="features__description">
            <div class="section__title features__title">Features</div>
            <h2 class="section__heading features__heading">
              We have Amazing <span class="purple">Service.</span>
            </h2>
            <p class="section__para features__para">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="features__services">
            <div class="features__service">
              <figure class="features__service--icon">
                <img src="{{ asset('frontend/assets/features/shield-icon.svg') }}" alt="" />
              </figure>
              <div class="features__service--text">
                <h3 class="features__service--title">Secure</h3>
                <p class="features__service--para">
                  We strictly only deal with vendors that provide top notch
                  security.
                </p>
              </div>
            </div>
            <div class="features__service">
              <figure class="features__service--icon">
                <img src="{{ asset('frontend/assets/features/support-icon.svg') }}" alt="" />
              </figure>
              <div class="features__service--text">
                <h3 class="features__service--title">24/7 Support</h3>
                <p class="features__service--para">
                  Lorem ipsum donor amet siti ceali ut enim ad minim veniam,
                  quis nostrud.
                </p>
              </div>
            </div>
            <div class="features__service">
              <figure class="features__service--icon">
                <img src="{{ asset('frontend/assets/features/customize-icon.sv') }}g" alt="" />
              </figure>
              <div class="features__service--text">
                <h3 class="features__service--title">Customizable</h3>
                <p class="features__service--para">
                  Lorem ipsum donor amet siti ceali ut enim ad minim veniam,
                  quis nostrud.
                </p>
              </div>
            </div>
            <div class="features__service">
              <figure class="features__service--icon">
                <img src="{{ asset('frontend/./assets/features/reliable-icon.svg') }}" alt="" />
              </figure>
              <div class="features__service--text">
                <h3 class="features__service--title">Reliable</h3>
                <p class="features__service--para">
                  Lorem ipsum donor amet siti ceali ut enim ad minim veniam,
                  quis nostrud.
                </p>
              </div>
            </div>
            <div class="features__service">
              <figure class="features__service--icon">
                <img src="{{ asset('frontend/assets/features/fast-icon.svg') }}" alt="" />
              </figure>
              <div class="features__service--text">
                <h3 class="features__service--title">Fast</h3>
                <p class="features__service--para">
                  Lorem ipsum donor amet siti ceali ut enim ad minim veniam,
                  quis nostrud.
                </p>
              </div>
            </div>
            <div class="features__service">
              <figure class="features__service--icon">
                <img src="{{ asset('frontend/assets/features/simple-icon.svg') }}" alt="" />
              </figure>
              <div class="features__service--text">
                <h3 class="features__service--title">Easy</h3>
                <p class="features__service--para">
                  Lorem ipsum donor amet siti ceali ut enim ad minim veniam,
                  quis nostrud.
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="container">
        <section id="quality-work" class="row flex">
          <div class="quality__description">
            <div class="section__title quality__title">Quality Work</div>
            <div class="section__heading quality__heading">
              Designed & Developed by <span class="purple">Professionals.</span>
            </div>
            <div class="section__para quality__para">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="quality__btn">Learn More</div>
          </div>
          <div class="steps__description">
            <div class="section__title">Steps</div>
            <div class="section__heading quality__heading">
              Easy to <span class="purple">Get Started.</span>
            </div>
            <div class="step">
              <div class="step__number">01</div>
              <div class="step__text">
                <p class="step__title">Register</p>
                <p class="step__para">
                  Create an account with us using Google or Facebook.
                </p>
              </div>
            </div>
            <div class="step">
              <div class="step__number">02</div>
              <div class="step__text">
                <p class="step__title">Download</p>
                <p class="step__para">
                  Browse and Download the template that you like from the
                  marketplace.
                </p>
              </div>
            </div>
            <div class="step">
              <div class="step__number">03</div>
              <div class="step__text">
                <p class="step__title">Run</p>
                <p class="step__para">
                  Follow the instructions to setup and customize the template to
                  your needs.
                </p>
              </div>
            </div>
          </div>
          {{-- <figure class="quality__img--container flex">
            <img
              src="{{ asset('frontend/assets/hero-screenshot.png') }}"
              alt=""
              class="quality__img"
            />
          </figure> --}}
        </section>
      </div>
      
      <div class="container">
        <div id="values" class="row flex">
          <div class="values__description">
            <div class="section__title">Values</div>
            <div class="section__heading">
              We Always Abide by Our <span class="purple">Principles.</span>
            </div>
            <div class="section__para values__para">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="values__cards">
              <div class="value">
                <div class="value__title">
                  <div class="value__title--icon affordable">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="rgb(39, 103, 73)"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <line x1="12" y1="1" x2="12" y2="23"></line>
                      <path
                        d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                      ></path>
                    </svg>
                  </div>
                  <p class="value__title--text">Affordable</p>
                </div>
                <div class="value__para">
                  We promise to offer you the best rate we can - at par with the
                  industry standard.
                </div>
              </div>
              <div class="value">
                <div class="value__title">
                  <div class="value__title--icon professionalism">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="rgb(155, 44, 44)"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <rect
                        x="2"
                        y="7"
                        width="20"
                        height="14"
                        rx="2"
                        ry="2"
                      ></rect>
                      <path
                        d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"
                      ></path>
                    </svg>
                  </div>
                  <p class="value__title--text">Professionalism</p>
                </div>
                <div class="value__para">
                  We assure you that our templates are designed and created by
                  professional designers.
                </div>
              </div>
            </div>
            <div class="values__btn">Learn More</div>
          </div>
          <div class="values__img--container class">
            <img src="{{ asset('frontend/assets/values.svg') }}" alt="" class="values__img" />
          </div>
        </div>
      </div>

      <div class="container">
        <section id="pricing" class="pricing__row">
          <div class="pricing__description">
            <div class="section__title pricing__title">Pricing</div>
            <h2 class="section__heading pricing__heading">
              Reasonable & Flexible <span class="purple">Plans.</span>
            </h2>
            <p class="section__para pricing__para">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <div class="pricing__plans">
            
            <div class="pricing__plan">
              <div class="plan__top-gradient--green"></div>
              <div class="plan__heading">
                <p class="plan__heading--title">Personal</p>
                <p class="plan__heading--price">$17.99</p>
                <p class="plan__heading--frequency">Monthly</p>
              </div>
              <div class="plan__description">
                <div class="plan__description--title">For Individuals</div>
                <div class="plan__description--para">30 Templates</div>
                <div class="plan__description--para">7 Landing Pages</div>
                <div class="plan__description--para">12 Internal Pages</div>
                <div class="plan__description--para">Basic Assistance</div>
              </div>
              <div class="plan__btn">
                <button class="plan__btn--cta-green">Buy Now</button>
              </div>
            </div>

            <div class="pricing__plan--indigo">
              <div class="plan__heading">
                <p class="plan__heading--title white">Business</p>
                <p class="plan__heading--price white">Rp.1.000.000</p>
                <p class="plan__heading--frequency-white">Monthly</p>
              </div>
              <div class="plan__description--indigo">
                <div class="plan__description--title white">
                  For Small Businesses
                </div>
                <div class="plan__description--para-white">60 Templates</div>
                <div class="plan__description--para-white">
                  15 Landing Pages
                </div>
                <div class="plan__description--para-white">
                  22 Internal Pages
                </div>
                <div class="plan__description--para-white">
                  Priority Assistance
                </div>
              </div>
              <div class="plan__btn">
                {{-- <button class="plan__btn--cta-indigo" id="pay-button">Buy Now</button> --}}
                <button class="plan__btn--cta-indigo" id="pay-button">Pay Now</button>
              </div>
            </div>

            <div class="pricing__plan">
              <div class="plan__top-gradient--red"></div>
              <div class="plan__heading">
                <p class="plan__heading--title">Enterprise</p>
                <p class="plan__heading--price">$57.99</p>
                <p class="plan__heading--frequency">Monthly</p>
              </div>
              <div class="plan__description">
                <div class="plan__description--title">For Large Companies</div>
                <div class="plan__description--para">90 Templates</div>
                <div class="plan__description--para">27 Landing Pages</div>
                <div class="plan__description--para">37 Internal Pages</div>
                <div class="plan__description--para">Personal Assistance</div>
              </div>
              <div class="plan__btn">
                <button class="plan__btn--cta-red">Buy Now</button>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="container">
        <section id="testimonials" class="row flex space-between">
          <figure class="testimonials__img--container flex">
            <img
              src="{{ asset('frontend/./assets/testimonials.svg') }}"
              alt=""
              class="testimonials__img"
            />
          </figure>
          <div class="testimonials__description">
            <div class="section__title">Testimonials</div>
            <div class="section__heading quality__heading">
              Our Clients <span class="purple">Love Us.</span>
            </div>
            <p class="testimonials__para">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
              minim veniam.
            </p>
            <div class="testimonial">
              <div class="testimonial__stars">
                <svg viewBox="0 0 1792 1792" class="star__icon">
                  <path
                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5T1385 1619q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5T365 1569q0-6 2-20l86-500L89 695q-25-27-25-48 0-37 56-46l502-73L847 73q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                  ></path>
                </svg>
                <svg viewBox="0 0 1792 1792" class="star__icon">
                  <path
                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5T1385 1619q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5T365 1569q0-6 2-20l86-500L89 695q-25-27-25-48 0-37 56-46l502-73L847 73q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                  ></path>
                </svg>
                <svg viewBox="0 0 1792 1792" class="star__icon">
                  <path
                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5T1385 1619q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5T365 1569q0-6 2-20l86-500L89 695q-25-27-25-48 0-37 56-46l502-73L847 73q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                  ></path>
                </svg>
                <svg viewBox="0 0 1792 1792" class="star__icon">
                  <path
                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5T1385 1619q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5T365 1569q0-6 2-20l86-500L89 695q-25-27-25-48 0-37 56-46l502-73L847 73q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                  ></path>
                </svg>
                <svg viewBox="0 0 1792 1792" class="star__icon">
                  <path
                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5T1385 1619q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5T365 1569q0-6 2-20l86-500L89 695q-25-27-25-48 0-37 56-46l502-73L847 73q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                  ></path>
                </svg>
              </div>
              <h3 class="testimonial__title">Amazing User Experience</h3>
              <blockquote class="testimonial__para">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia. Lorem ipsum
                dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco.
              </blockquote>
              <div class="testimonial__footer">
                <div class="testimonial__person">
                  <figure class="flex">
                    <img
                      src="{{ asset('frontend/./assets/testimonial-person.avif') }}"
                      alt=""
                      class="testimonial__img"
                    />
                  </figure>
                  <div class="testimonial__name--container">
                    <div class="testimonial__name">Charlotte Hale</div>
                    <div class="testimonial__job-title">
                      Director, Delos Inc.
                    </div>
                  </div>
                </div>
                <div class="testimonial__btns">
                  <button class="testimonial__btn">
                    <svg
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      class="testimonial__arrow"
                    >
                      <path d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                  </button>
                  <div class="divider"></div>
                  <button class="testimonial__btn">
                    <svg
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      class="testimonial__arrow"
                    >
                      <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="container">
        <section id="get-started" class="row">
          <div class="get-started__row">
            <h4 class="get-started__heading">
              Developers all over the world are happily using Treact.
            </h4>
            <div class="get-started__btns">
              <button class="get-started__btn get-started__btn--red">
                Get Started
              </button>
              <button class="get-started__btn get-started__btn--white">
                Contact Us
              </button>
            </div>
          </div>
        </section>
      </div>

      <footer>
        <div class="row">
          <div class="footer__links">
            <div class="footer__link--container">
              <div class="footer__link--title">Main</div>
              <ul class="footer__link--list">
                <li class="footer__link">Blog</li>
                <li class="footer__link">FAQs</li>
                <li class="footer__link">Support</li>
                <li class="footer__link">About Us</li>
              </ul>
            </div>
            <div class="footer__link--container">
              <div class="footer__link--title">Product</div>
              <ul class="footer__link--list">
                <li class="footer__link">Log In</li>
                <li class="footer__link">Personal</li>
                <li class="footer__link">Business</li>
                <li class="footer__link">Team</li>
              </ul>
            </div>
            <div class="footer__link--container">
              <div class="footer__link--title">Press</div>
              <ul class="footer__link--list">
                <li class="footer__link">Logos</li>
                <li class="footer__link">Events</li>
                <li class="footer__link">Stories</li>
                <li class="footer__link">Office</li>
              </ul>
            </div>
            <div class="footer__link--container">
              <div class="footer__link--title">Team</div>
              <ul class="footer__link--list">
                <li class="footer__link">Career</li>
                <li class="footer__link">Founders</li>
                <li class="footer__link">Culture</li>
                <li class="footer__link">Onboarding</li>
              </ul>
            </div>
            <div class="footer__link--container">
              <div class="footer__link--title">Legal</div>
              <ul class="footer__link--list">
                <li class="footer__link">GDPR</li>
                <li class="footer__link">Privacy Policy</li>
                <li class="footer__link">Terms of Service</li>
                <li class="footer__link">Disclaimer</li>
              </ul>
            </div>
          </div>
          <div class="footer__divider"></div>
          <div class="footer__info">
            <div class="footer__info--logo-container">
              <figure class="flex">
                <img
                  src="{{ asset('frontend/./assets/footer-logo.svg') }}"
                  alt=""
                  class="footer__info--logo"
                />
              </figure>
              <div class="footer__info--logo-text">RentalHub</div>
            </div>
            <div class="footer__info--copyright">
              &copy; 2023 RentalHub. All Rights Reserved.
            </div>
            <div class="footer__info--social-links flex">
              <a class="footer__info--social-link" href="">
                <svg
                  class="footer__info--social-svg"
                  fill="rgb(26, 32, 44)"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"
                  ></path>
                </svg>
              </a>
              <a class="footer__info--social-link" href="">
                <svg
                  class="footer__info--social-svg"
                  fill="rgb(26, 32, 44)"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M22.162 5.656a8.384 8.384 0 01-2.402.658A4.196 4.196 0 0021.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 00-7.126 3.814 11.874 11.874 0 01-8.62-4.37 4.168 4.168 0 00-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 01-1.894-.523v.052a4.185 4.185 0 003.355 4.101 4.21 4.21 0 01-1.89.072A4.185 4.185 0 007.97 16.65a8.394 8.394 0 01-6.191 1.732 11.83 11.83 0 006.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 002.087-2.165z"
                  ></path>
                </svg>
              </a>
              <a class="footer__info--social-link" href="">
                <svg
                  class="footer__info--social-svg"
                  fill="rgb(26, 32, 44)"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"
                  ></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </footer>
    </main>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-2F3cuyCs9o2yBRkg"></script>

 
      <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
          
          var resultType = document.getElementById('result-type');
          var resultData = document.getElementById('result-data');
          function changeResult(type,data){
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
          }

          snap.pay('<?=$snapToken?>', {
            // Optional
            onSuccess: function(result){
              /* You may add your own js here, this is just example */ 
              document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onPending: function(result){
              /* You may add your own js here, this is just example */ 
              document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
              /* You may add your own js here, this is just example */ 
              document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
          });
        };
      </script>

  </body>
</html>
