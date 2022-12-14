<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>

  <div class="page-price-wrapper">
    <div class="container">
      <div class="page-price-header-wrapper">
        <ul class="list-category">
          <li>
            <a href="#">Home</a>
          </li>
          <span class="arrow">
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_739_17053)">
                <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_739_17053">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <li>
            <a href="#">Account</a>
          </li>
        </ul>
        <h3 class="price-title">
          Special Deal: 12 Months <span class="highlight"> + 3 Months Free</span>
        </h3>
        <p class="price-description">All plans are covered by a 31-day money-back guarantee</p>
      </div>
    </div>
    <div class="seclect-plan-wrapper">
      <div class="container">
        <div class="step-wrapper">
          <span class="step-number">1</span>
          <span class="step-detail"><span class="step-highlight">Select</span> a plan that works for you</span>
        </div>

        <!-- TABS SELECT PLAN -->
        <div id="select-plan-tabs">
          <ul class="plan-tabs-nav">
            <li><a href="#tabs-1">Credit Card</a></li>
            <li><a href="#tabs-2">Paypal</a></li>
          </ul>
          <div id="tabs-1">
            <div class="list-plan">
              <div class="plan-item active">
                <span class="icon-checked">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="1" width="22" height="22" rx="11" fill="#18B745" />
                    <g clip-path="url(#clip0_326_6204)">
                      <path d="M7.33301 12L10.6663 15.3333L17.333 8.66663" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_326_6204">
                        <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <h4 class="plan-title">1 Months</h4>
                <div class="price-wrapper">
                  <span class="prev-price">$10.99</span>
                  <div class="primary-price">
                    <span class="sign">$</span>
                    <span class="price">4</span>
                    <span class="month">/mo</span>
                  </div>
                </div>
                <span class="save-label">Save 5%</span>
                <button class="btn-select-plan">Get 1 month plan</button>
                <p class="plan-description">31-Day money-back guarantee</p>
              </div>

              <div class="plan-item">
                <span class="recomend-label">Most popular</span>
                <h4 class="plan-title">12<span class="highlight">+3 Months Free</span></h4>
                <div class="price-wrapper">
                  <span class="prev-price">$10.99</span>
                  <div class="primary-price">
                    <span class="sign">$</span>
                    <span class="price">3.5</span>
                    <span class="month">/mo</span>
                  </div>
                </div>
                <span class="save-label">Save 10%</span>
                <button class="btn-select-plan">Get 1 month plan</button>
                <p class="plan-description">31-Day money-back guarantee</p>
              </div>

              <div class="plan-item">
                <h4 class="plan-title">6 Months</h4>
                <div class="price-wrapper">
                  <span class="prev-price">$10.99</span>
                  <div class="primary-price">
                    <span class="sign">$</span>
                    <span class="price">3</span>
                    <span class="month">/mo</span>
                  </div>
                </div>
                <span class="save-label">Save 15%</span>
                <button class="btn-select-plan">Get 1 month plan</button>
                <p class="plan-description">31-Day money-back guarantee</p>
              </div>
            </div>
            <p class="step-description">All amounts shown are in USD.</p>
          </div>
          <div id="tabs-2">
            <div class="list-plan">
              <div class="plan-item active">
                <span class="icon-checked">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="1" width="22" height="22" rx="11" fill="#18B745" />
                    <g clip-path="url(#clip0_326_6204)">
                      <path d="M7.33301 12L10.6663 15.3333L17.333 8.66663" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                      <clipPath id="clip0_326_6204">
                        <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <h4 class="plan-title">1 Months</h4>
                <div class="price-wrapper">
                  <span class="prev-price">$10.99</span>
                  <div class="primary-price">
                    <span class="sign">$</span>
                    <span class="price">4</span>
                    <span class="month">/mo</span>
                  </div>
                </div>
                <span class="save-label">Save 5%</span>
                <button class="btn-select-plan">Get 1 month plan</button>
                <p class="plan-description">31-Day money-back guarantee</p>
              </div>

              <div class="plan-item">
                <span class="recomend-label">Most popular</span>
                <h4 class="plan-title">12<span class="highlight">+3 Months Free</span></h4>
                <div class="price-wrapper">
                  <span class="prev-price">$10.99</span>
                  <div class="primary-price">
                    <span class="sign">$</span>
                    <span class="price">3.5</span>
                    <span class="month">/mo</span>
                  </div>
                </div>
                <span class="save-label">Save 10%</span>
                <button class="btn-select-plan">Get 1 month plan</button>
                <p class="plan-description">31-Day money-back guarantee</p>
              </div>

              <div class="plan-item">
                <h4 class="plan-title">6 Months</h4>
                <div class="price-wrapper">
                  <span class="prev-price">$10.99</span>
                  <div class="primary-price">
                    <span class="sign">$</span>
                    <span class="price">3</span>
                    <span class="month">/mo</span>
                  </div>
                </div>
                <span class="save-label">Save 15%</span>
                <button class="btn-select-plan">Get 1 month plan</button>
                <p class="plan-description">31-Day money-back guarantee</p>
              </div>
            </div>
            <p class="step-description">All amounts shown are in USD.</p>
          </div>
        </div>
        <!-- TABS SELECT PLAN -->
      </div>
    </div>

    <div class="select-your-payment-wrapper">
      <div class="container select-your-payment-content">
        <div class="left-content">
          <div class="step-header-wrapper">
            <div class="step-wrapper">
              <span class="step-number">2</span>
              <span class="step-detail step-2-detail">Select your preferred method of payment</span>
            </div>
            <img src="./images/image-secure.png" alt="" class="image-scure">
          </div>

          <div class="payment-description">
            <span class="icon-success">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" y="1" width="22" height="22" rx="11" fill="#18B745" />
                <g clip-path="url(#clip0_1678_14718)">
                  <path d="M7.33398 12L10.6673 15.3334L17.334 8.66669" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_1678_14718">
                    <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
            <div class="description-detail">
              <span class="txt-bold">Secure checkout</span>
              <span class="dash"></span>
              <span>Your payment information is fully protected.</span>
            </div>
          </div>

          <button class="btn-payment">
            <span class="icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0054 3.73901C14.0682 3.73901 15.7448 5.37868 15.7448 7.39598V8.71367H8.25586V7.3761C8.26602 5.36875 9.94265 3.73901 12.0054 3.73901ZM12.8896 16.4549C12.8896 16.9419 12.4933 17.3294 11.9954 17.3294C11.5076 17.3294 11.1113 16.9419 11.1113 16.4549V14.2488C11.1113 13.7718 11.5076 13.3843 11.9954 13.3843C12.4933 13.3843 12.8896 13.7718 12.8896 14.2488V16.4549Z" fill="white" />
              </svg>
            </span>
            <span>Payment via Paddle</span>
          </button>
          <ul class="list-description">
            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6815 4.93071V5.95294C12.8297 6.31135 13.6663 7.3508 13.6663 8.59231V11.8836C13.6663 13.4206 12.3921 14.6667 10.8212 14.6667H5.17887C3.60725 14.6667 2.33301 13.4206 2.33301 11.8836V8.59231C2.33301 7.3508 3.17031 6.31135 4.31787 5.95294V4.93071C4.32464 2.94323 5.97078 1.33337 7.98951 1.33337C10.0353 1.33337 11.6815 2.94323 11.6815 4.93071ZM8.00328 2.49272C9.37846 2.49272 10.4962 3.58583 10.4962 4.93069V5.80916H5.50358V4.91744C5.51035 3.5792 6.62811 2.49272 8.00328 2.49272ZM8.59272 10.97C8.59272 11.2946 8.32853 11.553 7.99659 11.553C7.67142 11.553 7.40723 11.2946 7.40723 10.97V9.49926C7.40723 9.18126 7.67142 8.92289 7.99659 8.92289C8.32853 8.92289 8.59272 9.18126 8.59272 9.49926V10.97Z" fill="#718096" />
                </svg>
              </span>
              <span>Secure and encrypted payments</span>
            </li>
            <li>
              <span class="icon">

                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6267)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6267">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Automatically renews. Cancel at any time.</span>
            </li>
          </ul>
          <p class="txt-privacy">By proceeding, you agree to our <span class="txt-highlight">Terms of Service</span> and <span class="txt-highlight">Privacy Policy.</span></p>
        </div>
        <div class="right-content">
          <h4 class="title">Yeahscore plan includes:</h4>
          <ul class="list-feature">
            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Full HD 1080p Live streaming</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Watch on your TV, laptop, phone, or tablet</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>English commentary</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Unlimited watching time</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>All sports tournaments (Football, Tennis, NBA, etc.)</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Full-screen mode</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>No ads/popups</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>24/7 dedicated support</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="trust-by-wrapper">
      <div class="container">
        <di class="trust-by-content">
          <span class="label">Trusted by:</span>
          <div class="list-image">
            <img src="./images/trust-image-1.png" alt="" class="trust-image">
            <img src="./images/trust-image-2.png" alt="" class="trust-image">
            <img src="./images/trust-image-3.png" alt="" class="trust-image">
            <img src="./images/trust-image-4.png" alt="" class="trust-image">
            <img src="./images/trust-image-5.png" alt="" class="trust-image">
          </div>
        </di>
      </div>
    </div>

    <div class="sports-league-tournaments-wrapper">
      <div class="container">
        <h3 class="title">Sports league and tournaments available on Yeahscore</h3>
        <p class="description">Your Premium sucription covers all the league and tournament listed</p>
        <div class="list-sport-wrapper">
          <ul class="list-sport">
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-1.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-2.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-3.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-4.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-5.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-6.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-7.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-8.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-9.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-10.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-11.png" alt="">
              </a>
            </li>
          </ul>
          <ul class="list-sport">
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-1.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-2.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-3.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-4.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-5.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-6.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-7.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-8.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-9.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-10.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-11.png" alt="">
              </a>
            </li>
          </ul>
        </div>
        <button class="btn-see-more">See more</button>
      </div>
    </div>

    <div class="money-back-wrapper">
      <div class="container">
        <div class="money-back-content">
          <img src="./images/money-black-image.png" alt="" class="money-back-image">
          <div class="detail">
            <h4 class="title">30-day money-back guarantee</h4>
            <p class="description">Not sure if this is what you need? Take your time to try the NordVPN service completely risk-free.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="vpn-internaltiona-server-wrapper">
      <div class="container">
        <div class="vpn-internaltiona-server-content">
          <div class="left-content">
            <h4 class="title">A Truly International VPN Server Network</h4>
            <p class="description">
              Choose from thousands of super-fast VPN servers around the world. Enjoy a stable connection wherever you are.
            </p>
            <div class="list-item">
              <div class="item">
                <span class="item-title">VPN servers</span>
                <span class="item-value">5500+ </span>
              </div>
              <div class="item">
                <span class="item-title">Country</span>
                <span class="item-value">56</span>
              </div>
            </div>
            <div class="list-item">
              <div class="item">
                <span class="item-title">Mind-boggling speeds</span>

                <span class="icon">

                  <svg width="79" height="38" viewBox="0 0 79 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1698_14358)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.978 0L31.805 19L12.978 38H0L18.829 19L0 0H12.978ZM36.574 0L55.403 19L36.574 38H23.597L42.426 19L23.597 0H36.574ZM60.172 0L79 19L60.172 38H47.195L66.023 19L47.195 0H60.172Z" fill="#E34B31" />
                    </g>
                    <defs>
                      <clipPath id="clip0_1698_14358">
                        <rect width="79" height="38" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>

                </span>

              </div>
              <div class="item">
                <span class="item-title">Unlimited Bandwidth</span>

                <span class="icon">

                  <svg width="85" height="38" viewBox="0 0 85 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1698_14356)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M67.78 28.757C65.146 28.757 61.947 27.473 58.372 25.103L50 18.486L58.372 11.87C61.947 9.5 65.146 8.216 67.78 8.216C73.613 8.216 77 14.636 77 18.486C77 22.338 73.613 28.756 67.78 28.756V28.757ZM26.627 25.103C23.052 27.473 19.854 28.757 17.22 28.757C11.387 28.757 8 22.337 8 18.487C8 14.635 11.387 8.217 17.22 8.217C19.854 8.217 23.052 9.5 26.627 11.87L35 18.486L26.627 25.103ZM67.34 0.098C62.995 0.098 58.273 1.763 53.269 5.191L42.5 13.515L32.017 5.29L31.733 5.094C26.728 1.665 22.006 0 17.661 0C7.272 0.098 0 9.598 0 19C0 28.402 7.272 37.902 17.661 37.902C22.006 37.902 26.728 36.237 31.733 32.809L42.5 24.485L52.983 32.711L53.268 32.907C58.272 36.335 62.994 38 67.338 38C77.729 38 85 28.5 85 19.098C85 9.598 77.728 0.098 67.339 0.098H67.34Z" fill="#E34B31" />
                    </g>
                    <defs>
                      <clipPath id="clip0_1698_14356">
                        <rect width="85" height="38" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>

                </span>

              </div>
            </div>
          </div>
          <div class="right-content">
            <img src="./images/vpn-image.png" alt="" class="vpn-image">
          </div>
        </div>
        <button class="btn-get-plan">Get Plans</button>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

<script>
  $(function() {
    $("#select-plan-tabs").tabs();
  });
</script>

</html>