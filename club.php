<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>
  <div class="club-page-wrapper">
    <div class="club-banner">
      <div class="list-category">
        <a href="#" target="">
          <div class="category-item">
            <img src="./images/flag-match-2.png" alt="">
            <span>England</span>
          </div>
        </a>
        <div class="arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
            <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <a href="#" target="">
          <div class="category-item">
            <span>Premier League</span>
          </div>
        </a>
        <div class="arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
            <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <a href="#" target="">
          <div class="category-item">
            <span>Manchester United</span>
          </div>
        </a>
      </div>
      <div class="container club-banner-content">
        <div class="club-info">
          <img src="./images/mu-club.png" alt="" class="club-image">
          <h3 class="club-name">Manchester United</h3>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="club-page-content-wrapper">
        <div id="club-tabs">
          <ul class="club-main-nav">
            <li><a href="#main-tabs-1">Summary</a></li>
            <li><a href="#main-tabs-2">Fixtures</a></li>
            <li><a href="#main-tabs-3">Team Statistics</a></li>
            <li><a href="#main-tabs-4">Referee Statistics</a></li>
          </ul>
          <div id="main-tabs-1">
            <!-- ============TAB1(Summary) ========== -->

            <!-- Manchester United Fixtures< -->
            <div class="fixtures-timeline-wrapper">
              <h3 class="club-title">Manchester United Fixtures</h3>
              <div class="list-timeline">
                <!-- START MATCH REPORT -->
                <div class="timeline-item">
                  <button type="button" class="collapsible">
                    <div class="collapse-icon">
                      <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                      <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                    </div>
                    <!-- collapse title for PC -->
                    <div class="collapse-title">
                      <div class="left-column">
                        <div class="league-info">
                          <span class="sign-league green-sign">W</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="club-info">
                          <a href="#" class="name-club">Manchester United</a>
                          <img src="./images/mc-club.png" alt="" />
                        </div>
                      </div>
                      <div class="middle-column">
                        <span class="score default">3</span>
                        <span class="dot">:</span>
                        <span class="score default">2</span>
                      </div>
                      <div class="right-column">
                        <div class="club-info">
                          <img src="./images/mu-club.png" alt="" />
                          <a href="#" class="name-club">Manchester City</a>
                        </div>
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- end collapse title for PC -->

                    <!-- collapse title for MOBILE -->
                    <div class="collapse-title-mb">
                      <div class="collapse-title-mb__left">
                        <div class="league-info">
                          <span class="sign-league green-sign">W</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <span class="score default">3</span>
                            <span class="club-name">Man United</span>
                          </div>
                          <div class="club-item">
                            <span class="score default">2</span>
                            <span class="club-name">Liverpool</span>
                          </div>
                        </div>
                      </div>
                      <div class="collapse-title-mb__right">
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- END collapse title for MOBILE -->
                  </button>
                  <div class="timeline-content">
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                              <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                              <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                              <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                              <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                              <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                              <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <g clip-path="url(#clip0_569_6449)">
                                <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                <g clip-path="url(#clip1_569_6449)">
                                  <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                </g>
                              </g>
                              <defs>
                                <clipPath id="clip0_569_6449">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_569_6449">
                                  <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result"></div>
                        <div class="time-result">67'</div>
                        <div class="right-result">
                          <div class="player-info">
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                            <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MATCH REPORT  -->


                <!-- START MATCH REPORT -->
                <div class="timeline-item">
                  <button type="button" class="collapsible">
                    <div class="collapse-icon">
                      <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                      <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                    </div>
                    <!-- collapse title for PC -->
                    <div class="collapse-title">
                      <div class="left-column">
                        <div class="league-info">
                          <span class="sign-league red-sign">L</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="club-info">
                          <a href="#" class="name-club">Manchester United</a>
                          <img src="./images/mc-club.png" alt="" />
                        </div>
                      </div>
                      <div class="middle-column">
                        <span class="score default">3</span>
                        <span class="dot">:</span>
                        <span class="score default">2</span>
                      </div>
                      <div class="right-column">
                        <div class="club-info">
                          <img src="./images/mu-club.png" alt="" />
                          <a href="#" class="name-club">Manchester City</a>
                        </div>
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- end collapse title for PC -->

                    <!-- collapse title for MOBILE -->
                    <div class="collapse-title-mb">
                      <div class="collapse-title-mb__left">
                        <div class="league-info">
                          <span class="sign-league green-sign">L</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <span class="score default">3</span>
                            <span class="club-name">Man United</span>
                          </div>
                          <div class="club-item">
                            <span class="score default">2</span>
                            <span class="club-name">Liverpool</span>
                          </div>
                        </div>
                      </div>
                      <div class="collapse-title-mb__right">
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- END collapse title for MOBILE -->
                  </button>
                  <div class="timeline-content">
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                              <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                              <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                              <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                              <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                              <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                              <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <g clip-path="url(#clip0_569_6449)">
                                <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                <g clip-path="url(#clip1_569_6449)">
                                  <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                </g>
                              </g>
                              <defs>
                                <clipPath id="clip0_569_6449">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_569_6449">
                                  <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result"></div>
                        <div class="time-result">67'</div>
                        <div class="right-result">
                          <div class="player-info">
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                            <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MATCH REPORT  -->

                <!-- START MATCH REPORT -->
                <div class="timeline-item">
                  <button type="button" class="collapsible">
                    <div class="collapse-icon">
                      <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                      <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                    </div>
                    <!-- collapse title for PC -->
                    <div class="collapse-title">
                      <div class="left-column">
                        <div class="league-info">
                          <span class="sign-league grey-sign">D</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="club-info">
                          <a href="#" class="name-club">Manchester United</a>
                          <img src="./images/mc-club.png" alt="" />
                        </div>
                      </div>
                      <div class="middle-column">
                        <span class="score default">3</span>
                        <span class="dot">:</span>
                        <span class="score default">2</span>
                      </div>
                      <div class="right-column">
                        <div class="club-info">
                          <img src="./images/mu-club.png" alt="" />
                          <a href="#" class="name-club">Manchester City</a>
                        </div>
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- end collapse title for PC -->

                    <!-- collapse title for MOBILE -->
                    <div class="collapse-title-mb">
                      <div class="collapse-title-mb__left">
                        <div class="league-info">
                          <span class="sign-league green-sign">W</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <span class="score default">3</span>
                            <span class="club-name">Man United</span>
                          </div>
                          <div class="club-item">
                            <span class="score default">2</span>
                            <span class="club-name">Liverpool</span>
                          </div>
                        </div>
                      </div>
                      <div class="collapse-title-mb__right">
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- END collapse title for MOBILE -->
                  </button>
                  <div class="timeline-content">
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                              <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                              <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                              <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                              <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                              <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                              <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <g clip-path="url(#clip0_569_6449)">
                                <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                <g clip-path="url(#clip1_569_6449)">
                                  <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                </g>
                              </g>
                              <defs>
                                <clipPath id="clip0_569_6449">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_569_6449">
                                  <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result"></div>
                        <div class="time-result">67'</div>
                        <div class="right-result">
                          <div class="player-info">
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                            <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MATCH REPORT  -->

                <!-- START MATCH REPORT -->
                <div class="timeline-item">
                  <button type="button" class="collapsible">
                    <div class="collapse-icon">
                      <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                      <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                    </div>
                    <!-- collapse title for PC -->
                    <div class="collapse-title">
                      <div class="left-column">
                        <div class="league-info">
                          <span class="sign-league red-sign">L</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="club-info">
                          <a href="#" class="name-club">Manchester United</a>
                          <img src="./images/mc-club.png" alt="" />
                        </div>
                      </div>
                      <div class="middle-column">
                        <span class="score default">3</span>
                        <span class="dot">:</span>
                        <span class="score default">2</span>
                      </div>
                      <div class="right-column">
                        <div class="club-info">
                          <img src="./images/mu-club.png" alt="" />
                          <a href="#" class="name-club">Manchester City</a>
                        </div>
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- end collapse title for PC -->

                    <!-- collapse title for MOBILE -->
                    <div class="collapse-title-mb">
                      <div class="collapse-title-mb__left">
                        <div class="league-info">
                          <span class="sign-league green-sign">W</span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <span class="score default">3</span>
                            <span class="club-name">Man United</span>
                          </div>
                          <div class="club-item">
                            <span class="score default">2</span>
                            <span class="club-name">Liverpool</span>
                          </div>
                        </div>
                      </div>
                      <div class="collapse-title-mb__right">
                        <span class="btn-timeline math-report">Math Report</span>
                      </div>
                    </div>
                    <!-- END collapse title for MOBILE -->
                  </button>
                  <div class="timeline-content">
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                              <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                              <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                              <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                              <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                              <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                              <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <g clip-path="url(#clip0_569_6449)">
                                <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                <g clip-path="url(#clip1_569_6449)">
                                  <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                </g>
                              </g>
                              <defs>
                                <clipPath id="clip0_569_6449">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_569_6449">
                                  <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result"></div>
                        <div class="time-result">67'</div>
                        <div class="right-result">
                          <div class="player-info">
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                            <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MATCH REPORT  -->

                <!-- START NO MATCH REPORT -->
                <div class="timeline-item">
                  <button type="button" class="collapsible">
                    <div class="collapse-icon"></div>
                    <!-- collapse title for PC -->
                    <div class="collapse-title">
                      <div class="left-column">
                        <div class="league-info">
                          <span class="sign-league"></span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="club-info">
                          <a href="#" class="name-club">Manchester United</a>
                          <img src="./images/mc-club.png" alt="" />
                        </div>
                      </div>
                      <div class="middle-column">
                        <span>vs</span>
                      </div>
                      <div class="right-column">
                        <div class="club-info">
                          <img src="./images/mu-club.png" alt="" />
                          <a href="#" class="name-club">Manchester City</a>
                        </div>
                      </div>
                    </div>
                    <!-- end collapse title for PC -->

                    <!-- collapse title for MOBILE -->
                    <div class="collapse-title-mb">
                      <div class="collapse-title-mb__left">
                        <div class="league-info">
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <span class="score default">3</span>
                            <span class="club-name">Man United</span>
                          </div>
                          <div class="club-item">
                            <span class="score default">2</span>
                            <span class="club-name">Liverpool</span>
                          </div>
                        </div>
                      </div>
                      <div class="collapse-title-mb__right">
                      </div>
                    </div>
                    <!-- END collapse title for MOBILE -->
                  </button>
                  <div class="timeline-content">
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                              <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                              <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                              <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                              <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                              <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                              <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <g clip-path="url(#clip0_569_6449)">
                                <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                <g clip-path="url(#clip1_569_6449)">
                                  <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                </g>
                              </g>
                              <defs>
                                <clipPath id="clip0_569_6449">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_569_6449">
                                  <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result"></div>
                        <div class="time-result">67'</div>
                        <div class="right-result">
                          <div class="player-info">
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                            <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END NO MATCH REPORT  -->

                <!-- START NO MATCH REPORT -->
                <div class="timeline-item">
                  <button type="button" class="collapsible">
                    <div class="collapse-icon"></div>
                    <!-- collapse title for PC -->
                    <div class="collapse-title">
                      <div class="left-column">
                        <div class="league-info">
                          <span class="sign-league"></span>
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="club-info">
                          <a href="#" class="name-club">Manchester United</a>
                          <img src="./images/mc-club.png" alt="" />
                        </div>
                      </div>
                      <div class="middle-column">
                        <span>vs</span>
                      </div>
                      <div class="right-column">
                        <div class="club-info">
                          <img src="./images/mu-club.png" alt="" />
                          <a href="#" class="name-club">Manchester City</a>
                        </div>
                      </div>
                    </div>
                    <!-- end collapse title for PC -->

                    <!-- collapse title for MOBILE -->
                    <div class="collapse-title-mb">
                      <div class="collapse-title-mb__left">
                        <div class="league-info">
                          <span class="name-league">EPL</span>
                          <span class="time-league">23-04-22</span>
                        </div>
                        <div class="list-club">
                          <div class="club-item">
                            <span class="score default">3</span>
                            <span class="club-name">Man United</span>
                          </div>
                          <div class="club-item">
                            <span class="score default">2</span>
                            <span class="club-name">Liverpool</span>
                          </div>
                        </div>
                      </div>
                      <div class="collapse-title-mb__right">
                      </div>
                    </div>
                    <!-- END collapse title for MOBILE -->
                  </button>
                  <div class="timeline-content">
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                              <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                              <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                              <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                              <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                              <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                              <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result">
                          <div class="player-info">
                            <span class="player-name">Messi</span>
                            <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <g clip-path="url(#clip0_569_6449)">
                                <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                <g clip-path="url(#clip1_569_6449)">
                                  <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                </g>
                              </g>
                              <defs>
                                <clipPath id="clip0_569_6449">
                                  <rect width="20" height="20" fill="white" />
                                </clipPath>
                                <clipPath id="clip1_569_6449">
                                  <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                        </div>
                        <div class="time-result">23'</div>
                        <div class="right-result"></div>
                      </div>
                    </div>
                    <div class="timeline-detail">
                      <div class="empty"></div>
                      <div class="timeline-result">
                        <div class="left-result"></div>
                        <div class="time-result">67'</div>
                        <div class="right-result">
                          <div class="player-info">
                            <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                              <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                            </svg>
                            <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END NO MATCH REPORT  -->
              </div>
            </div>

            <div class="fixtures-table-wrapper">
              <div id="club-fixtures-tabs">
                <ul class="tables-main-nav">
                  <li><a href="#tabs-1">Summary</a></li>
                  <li><a href="#tabs-2">Defensive</a></li>
                  <li><a href="#tabs-3">Offensive</a></li>
                  <li><a href="#tabs-4">Detailed</a></li>
                </ul>
                <div id="tabs-1">
                  <!-- TAB Summary -->
                  <div id="club-fixtures-summary-tabs">
                    <ul class="tables-sub-nav">
                      <li><a href="#sub-tabs-1">Overall</a></li>
                      <li><a href="#sub-tabs-2">Home</a></li>
                      <li><a href="#sub-tabs-3">Away</a></li>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="club-fixtures-wrapper">
                        <div class="club-fixtures-table">
                          <div class="table-row table-heading d-flex">
                            <div class="column-25 text-left">Tournament</div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">Apps</div>
                              <div class="column-8 text-center">Goals</div>
                              <div class="column-8 text-center">Shot pg</div>
                              <div class="column-8 text-center">Discipline</div>
                              <div class="column-8 text-center">Possession%</div>
                              <div class="column-8 text-center">Pass%</div>
                              <div class="column-8 text-center">AerialsWon</div>
                              <div class="column-8 text-center text-rating">Rating</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-3.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">Champions League</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-3.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">Champions League</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">Total/Average</div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-suggesstion">
                          <div class="suggestion-wrapper">
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Shots pg: Shots per game</li>
                                <li class="suggestion-item">Possession%: Possession Percentage</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Discipline: Yellow card</li>
                                <li class="suggestion-item">Discipline: Yellow card</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      <div class="club-fixtures-wrapper">
                        <div class="club-fixtures-table">
                          <div class="table-row table-heading d-flex">
                            <div class="column-25 text-left">Tournament</div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">Apps</div>
                              <div class="column-8 text-center">Goals</div>
                              <div class="column-8 text-center">Shot pg</div>
                              <div class="column-8 text-center">Discipline</div>
                              <div class="column-8 text-center">Possession%</div>
                              <div class="column-8 text-center">Pass%</div>
                              <div class="column-8 text-center">AerialsWon</div>
                              <div class="column-8 text-center text-rating">Rating</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-3.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">Champions League</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">Total/Average</div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-suggesstion">
                          <div class="suggestion-wrapper">
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Shots pg: Shots per game</li>
                                <li class="suggestion-item">Possession%: Possession Percentage</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Discipline: Yellow card</li>
                                <li class="suggestion-item">Discipline: Yellow card</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-3">
                      <div class="club-fixtures-wrapper">
                        <div class="club-fixtures-table">
                          <div class="table-row table-heading d-flex">
                            <div class="column-25 text-left">Tournament</div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">Apps</div>
                              <div class="column-8 text-center">Goals</div>
                              <div class="column-8 text-center">Shot pg</div>
                              <div class="column-8 text-center">Discipline</div>
                              <div class="column-8 text-center">Possession%</div>
                              <div class="column-8 text-center">Pass%</div>
                              <div class="column-8 text-center">AerialsWon</div>
                              <div class="column-8 text-center text-rating">Rating</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-3.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">Champions League</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-1.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">League Cup</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center">18.5</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center">71.4</div>
                              <div class="column-8 text-center">91.2</div>
                              <div class="column-8 text-center">11</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">
                                <img src="./images/flag-match-3.png" alt="" class="tournament-image">
                                <a href="#"><span class="tournament-name">Champions League</span></a>
                              </div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-25 text-left">
                              <div class="tournament-info">Total/Average</div>
                            </div>
                            <div class="column-75 d-flex">
                              <div class="column-8 text-center">2</div>
                              <div class="column-8 text-center">6</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center flex-center">
                                <div class="list-score">
                                  <span class="score-item yellow-score">10</span>
                                  <span class="score-item red-score">8</span>
                                </div>
                              </div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-grey">N/A</div>
                              <div class="column-8 text-center text-rating">7.22</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-suggesstion">
                          <div class="suggestion-wrapper">
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Shots pg: Shots per game</li>
                                <li class="suggestion-item">Possession%: Possession Percentage</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Discipline: Yellow card</li>
                                <li class="suggestion-item">Discipline: Yellow card</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- TAB Summary -->
                </div>
                <div id="tabs-2">
                  <!-- TAB Defensive -->
                  tab2 - Defensive
                  <!-- TAB Defensive -->
                </div>
                <div id="tabs-3">
                  <!-- TAB Offensive -->
                  tab3 - Offensive
                  <!-- TAB Offensive -->
                </div>
                <div id="tabs-4">
                  <!-- TAB Detailed -->
                  tab4 - Detailed
                  <!-- TAB Detailed -->
                </div>
              </div>
            </div>
            <!-- Manchester United Fixtures< -->

            <!-- Manchester United Squad -->
            <div class="club-squad-wrapper">
              <h3 class="club-title">Manchester United Squad</h3>
              <div id="club-squad-tabs">
                <ul class="tables-main-nav">
                  <li><a href="#tabs-1">Summary</a></li>
                  <li><a href="#tabs-2">Defensive</a></li>
                  <li><a href="#tabs-3">Offensive</a></li>
                  <li><a href="#tabs-4">Passing</a></li>
                </ul>
                <div id="tabs-1">
                  <!-- TAB Summary -->
                  <div id="club-squad-summary-tabs">
                    <ul class="tables-sub-nav">
                      <li><a href="#sub-tabs-1">Overall</a></li>
                      <li><a href="#sub-tabs-2">Home</a></li>
                      <li><a href="#sub-tabs-3">Away</a></li>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="club-squad-table">
                        <div class="table-content">
                          <div class="table-row table-heading">
                            <div class="column-20">Player</div>
                            <div class="column-80 d-flex">
                              <div class="column-6 text-center">CM</div>
                              <div class="column-6 text-center">KG</div>
                              <div class="column-6 text-center">Apps</div>
                              <div class="column-6 text-center">Mins</div>
                              <div class="column-6 text-center">Goals</div>
                              <div class="column-6 text-center">Assists</div>
                              <div class="column-6 text-center">Yel</div>
                              <div class="column-6 text-center">Red</div>
                              <div class="column-6 text-center">SpG</div>
                              <div class="column-6 text-center">PS%</div>
                              <div class="column-6 text-center">AerialsWon </div>
                              <div class="column-6 text-center">MotM</div>
                              <div class="column-6 text-center text-rating">Rating</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-20 text-left">
                              <div class="player-info">
                                <span class="number">1</span>
                                <div class="player-detail">
                                  <img class="flag" src="./images/flag.png" />
                                  <div>
                                    <a href="#">
                                      <p class="player-name">Kevin De Bruyne</p>
                                    </a>
                                    <p class="player-history">30, M(CLR),FW</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="column-80 d-flex">
                              <div class="column-6 text-center">181</div>
                              <div class="column-6 text-center">68</div>
                              <div class="column-6 text-center">25(5)</div>
                              <div class="column-6 text-center">2206</div>
                              <div class="column-6 text-center">15</div>
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">2.6</div>
                              <div class="column-6 text-center">66.6</div>
                              <div class="column-6 text-center">89.6</div>
                              <div class="column-6 text-center">12.1</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-20 text-left">
                              <div class="player-info">
                                <span class="number">1</span>
                                <div class="player-detail">
                                  <img class="flag" src="./images/flag.png" />
                                  <div>
                                    <a href="#">
                                      <p class="player-name">Kevin De Bruyne</p>
                                    </a>
                                    <p class="player-history">30, M(CLR),FW</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="column-80 d-flex">
                              <div class="column-6 text-center">181</div>
                              <div class="column-6 text-center">68</div>
                              <div class="column-6 text-center">25(5)</div>
                              <div class="column-6 text-center">2206</div>
                              <div class="column-6 text-center">15</div>
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">2.6</div>
                              <div class="column-6 text-center">66.6</div>
                              <div class="column-6 text-center">89.6</div>
                              <div class="column-6 text-center">12.1</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-20 text-left">
                              <div class="player-info">
                                <span class="number">1</span>
                                <div class="player-detail">
                                  <img class="flag" src="./images/flag.png" />
                                  <div>
                                    <a href="#">
                                      <p class="player-name">Kevin De Bruyne</p>
                                    </a>
                                    <p class="player-history">30, M(CLR),FW</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="column-80 d-flex">
                              <div class="column-6 text-center">181</div>
                              <div class="column-6 text-center">68</div>
                              <div class="column-6 text-center">25(5)</div>
                              <div class="column-6 text-center">2206</div>
                              <div class="column-6 text-center">15</div>
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">2.6</div>
                              <div class="column-6 text-center">66.6</div>
                              <div class="column-6 text-center">89.6</div>
                              <div class="column-6 text-center">12.1</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-20 text-left">
                              <div class="player-info">
                                <span class="number">1</span>
                                <div class="player-detail">
                                  <img class="flag" src="./images/flag.png" />
                                  <div>
                                    <a href="#">
                                      <p class="player-name">Kevin De Bruyne</p>
                                    </a>
                                    <p class="player-history">30, M(CLR),FW</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="column-80 d-flex">
                              <div class="column-6 text-center">181</div>
                              <div class="column-6 text-center">68</div>
                              <div class="column-6 text-center">25(5)</div>
                              <div class="column-6 text-center">2206</div>
                              <div class="column-6 text-center">15</div>
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">2.6</div>
                              <div class="column-6 text-center">66.6</div>
                              <div class="column-6 text-center">89.6</div>
                              <div class="column-6 text-center">12.1</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-suggesstion">
                          <div class="suggestion-wrapper">
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Mins: Minutes played</li>
                                <li class="suggestion-item">Yel: Yellow card</li>
                                <li class="suggestion-item">PS%: Pass success percentage</li>
                                <li class="suggestion-item">CM: Height (in cm)</li>
                                <li class="suggestion-item">team (Loaned, sold, etc.).</li>
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                                <li class="suggestion-item">KG: Weight (in kg)</li>
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Assists: Total assists</li>
                                <li class="suggestion-item">SpG: Shots per game</li>
                                <li class="suggestion-item">MotM: Man of the match</li>
                                <li class="suggestion-item">* Players shaded are players who are not currently active in</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div id="sub-tabs-2">
                      tab2
                    </div>
                    <div id="sub-tabs-3">
                      tab2
                    </div>
                  </div>

                  <!-- TAB Summary -->
                </div>
                <div id="tabs-2">
                  <!-- TAB Defensive -->
                  tab2 - Defensive
                  <!-- TAB Defensive -->
                </div>
                <div id="tabs-3">
                  <!-- TAB Offensive -->
                  tab3 - Offensive
                  <!-- TAB Offensive -->
                </div>
                <div id="tabs-4">
                  <!-- TAB Passing -->
                  tab4 - Passing
                  <!-- TAB Passing -->
                </div>
              </div>
            </div>
            <!-- Manchester United Squad -->

            <!-- Manchester United Top Players -->
            <div class="club-top-player-wrapper">
              <h3 class="club-title">Manchester United Top Players</h3>
              <div id="club-top-player-tabs">
                <ul class="pill-nav">
                  <li><a href="#tabs-1">Premier League</a></li>
                  <li><a href="#tabs-2">League Cup</a></li>
                  <li><a href="#tabs-3">Champions League</a></li>
                </ul>
                <div id="tabs-1">
                  <!-- TAB Summary -->
                  <div id="club-top-player-premier-league-tabs">
                    <ul class="pill-nav" style="padding-top: 0">
                      <li><a href="#sub-tabs-1">Overall</a></li>
                      <li><a href="#sub-tabs-2">Home</a></li>
                      <li><a href="#sub-tabs-3">Away</a></li>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="club-top-player-table">
                        <div class="table-row table-heading d-flex">
                          <div class="column-33 text-left">Goals</div>
                          <div class="column-33 text-left">Aggression</div>
                          <div class="column-33 text-left">Appearances</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">K. D. Bruyne</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((15 / 15) * 100%)" aria-valuenow="15" aria-valuemin="0" aria-valuemax="15">15</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="list-score">
                              <span class="score-item yellow-score">5</span>
                              <span class="score-item red-score">1</span>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item grey-score">37</span>
                          </div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">K. D. Bruyne</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((11 / 15) * 100%)" aria-valuenow="11" aria-valuemin="0" aria-valuemax="15">11</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="list-score">
                              <span class="score-item yellow-score">5</span>
                              <span class="score-item red-score">1</span>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item grey-score">37</span>
                          </div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">K. D. Bruyne</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((10 / 15) * 100%)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="15">10</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="list-score">
                              <span class="score-item yellow-score">5</span>
                              <span class="score-item red-score">1</span>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item grey-score">37</span>
                          </div>
                        </div>

                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">K. D. Bruyne</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((5/ 15) * 100%)" aria-valuenow="5" aria-valuemin="0" aria-valuemax="15">5</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="list-score">
                              <span class="score-item yellow-score">5</span>
                              <span class="score-item red-score">1</span>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item grey-score">37</span>
                          </div>
                        </div>

                      </div>
                      <div class="club-top-player-table">
                        <div class="table-row table-heading d-flex">
                          <div class="column-33 text-left">Aerials Won</div>
                          <div class="column-33 text-left">Assists</div>
                          <div class="column-33 text-left">Assists</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">J. Stones</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((4 / 4) * 100%)" aria-valuenow="4" aria-valuemin="0" aria-valuemax="4">4</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((15 / 15) * 100%)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="15">15</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item red-score">7.72</span>
                          </div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">J. Stones</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((3.2 / 4) * 100%)" aria-valuenow="3.2" aria-valuemin="0" aria-valuemax="4">3.2</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((12 / 15) * 100%)" aria-valuenow="12" aria-valuemin="0" aria-valuemax="15">12</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item red-score">7.72</span>
                          </div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">J. Stones</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((4 / 4) * 100%)" aria-valuenow="4" aria-valuemin="0" aria-valuemax="4">4</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">A. Laporte</span>
                            </a>
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((15 / 15) * 100%)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="15">15</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-column column-33 text-left">
                            <a href="#">
                              <span class="player-name">Ederson</span>
                            </a>
                            <span class="score-item red-score">7.72</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      tab2
                    </div>
                    <div id="sub-tabs-3">
                      tab2
                    </div>
                  </div>

                  <!-- TAB Summary -->
                </div>
                <div id="tabs-2">
                  <!-- TAB League Cup -->
                  tab2 - League Cup
                  <!-- TAB League Cup-->
                </div>
                <div id="tabs-3">
                  <!-- TAB Champions League -->
                  tab3 - Champions League
                  <!-- TAB Champions League-->
                </div>
              </div>
            </div>
            <!-- Manchester United Top Players -->

            <!-- Manchester United Formations Summary -->
            <div class="club-formations-summary-wrapper">
              <h3 class="club-title">Manchester United Formations Summary</h3>
              <div class="match-matric-wrapper">
                <div class="matric-row">
                  <div class="player">
                    <div class="shirt">
                      <span class="number">31</span>
                    </div>
                    <span class="player-name">R. Sterling</span>
                    <span class="score-label">7.5</span>
                  </div>
                </div>
                <div class="matric-row">
                  <div class="player">
                    <div class="shirt">
                      <span class="number">2</span>
                    </div>
                    <span class="player-name">Ederson</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">5</span>
                    </div>
                    <span class="player-name">R. Sterling</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">4</span>
                    </div>
                    <span class="player-name">A. Laporte</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">12</span>
                    </div>
                    <span class="player-name">Gundogan</span>
                    <span class="score-label">7.5</span>
                  </div>
                </div>
                <div class="matric-row">
                  <div class="player">
                    <div class="shirt">
                      <span class="number">5</span>
                    </div>
                    <span class="player-name">R. Sterling</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">42</span>
                    </div>
                    <span class="player-name">R. Sterling</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">9</span>
                    </div>
                    <span class="player-name">K. D. Bruyne</span>
                    <span class="score-label">7.5</span>
                  </div>
                </div>
                <div class="matric-row">
                  <div class="player">
                    <div class="shirt">
                      <span class="number">8</span>
                    </div>
                    <span class="player-name">Ederson</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">10</span>
                    </div>
                    <span class="player-name">G.Jesus</span>
                    <span class="score-label">7.5</span>
                  </div>
                  <div class="player">
                    <div class="shirt">
                      <span class="number">13</span>
                    </div>
                    <span class="player-name">Gundogan</span>
                    <span class="score-label">7.5</span>
                  </div>
                </div>
              </div>
              <p class="description">* Only the best performing player for each position is displayed</p>
            </div>
            <!-- Manchester United Formations Summary -->
            <!-- ============TAB1(Summary) ========== -->
          </div>
          <div id="main-tabs-2">
            <!-- ============TAB2(Fixtures) ========== -->
            <div class="tab-fixture-wrapper">
              <h3 class="club-title">Manchester United Fixtures</h3>
              <div id="club-fixture-tabs">
                <ul class="pill-nav">
                  <li><a href="#tabs-1">Premier League</a></li>
                  <li><a href="#tabs-2">League Cup</a></li>
                  <li><a href="#tabs-3">Champions League</a></li>
                </ul>
                <div id="tabs-1">
                  <!-- TAB Summary -->
                  <div id="club-fixture-premier-league-tabs">
                    <ul class="pill-nav" style="padding-top: 0">
                      <li><a href="#sub-tabs-1">Overall</a></li>
                      <li><a href="#sub-tabs-2">Home</a></li>
                      <li><a href="#sub-tabs-3">Away</a></li>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="">
                        <div class="list-timeline">
                          <!-- START MATCH REPORT -->
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title">
                                <div class="left-column">
                                  <div class="league-info">
                                    <span class="sign-league green-sign">W</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="club-info">
                                    <a href="#" class="name-club">Manchester United</a>
                                    <img src="./images/mc-club.png" alt="" />
                                  </div>
                                </div>
                                <div class="middle-column">
                                  <span class="score default">3</span>
                                  <span class="dot">:</span>
                                  <span class="score default">2</span>
                                </div>
                                <div class="right-column">
                                  <div class="club-info">
                                    <img src="./images/mu-club.png" alt="" />
                                    <a href="#" class="name-club">Manchester City</a>
                                  </div>
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- collapse title for MOBILE -->
                              <div class="collapse-title-mb">
                                <div class="collapse-title-mb__left">
                                  <div class="league-info">
                                    <span class="sign-league green-sign">W</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="list-club">
                                    <div class="club-item">
                                      <span class="score default">3</span>
                                      <span class="club-name">Man United</span>
                                    </div>
                                    <div class="club-item">
                                      <span class="score default">2</span>
                                      <span class="club-name">Liverpool</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse-title-mb__right">
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- END collapse title for MOBILE -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                        <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                        <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                        <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                        <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                        <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                        <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_569_6449)">
                                          <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                          <g clip-path="url(#clip1_569_6449)">
                                            <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                          </g>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_569_6449">
                                            <rect width="20" height="20" fill="white" />
                                          </clipPath>
                                          <clipPath id="clip1_569_6449">
                                            <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result"></div>
                                  <div class="time-result">67'</div>
                                  <div class="right-result">
                                    <div class="player-info">
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                      <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MATCH REPORT  -->


                          <!-- START MATCH REPORT -->
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title">
                                <div class="left-column">
                                  <div class="league-info">
                                    <span class="sign-league red-sign">L</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="club-info">
                                    <a href="#" class="name-club">Manchester United</a>
                                    <img src="./images/mc-club.png" alt="" />
                                  </div>
                                </div>
                                <div class="middle-column">
                                  <span class="score default">3</span>
                                  <span class="dot">:</span>
                                  <span class="score default">2</span>
                                </div>
                                <div class="right-column">
                                  <div class="club-info">
                                    <img src="./images/mu-club.png" alt="" />
                                    <a href="#" class="name-club">Manchester City</a>
                                  </div>
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- collapse title for MOBILE -->
                              <div class="collapse-title-mb">
                                <div class="collapse-title-mb__left">
                                  <div class="league-info">
                                    <span class="sign-league green-sign">L</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="list-club">
                                    <div class="club-item">
                                      <span class="score default">3</span>
                                      <span class="club-name">Man United</span>
                                    </div>
                                    <div class="club-item">
                                      <span class="score default">2</span>
                                      <span class="club-name">Liverpool</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse-title-mb__right">
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- END collapse title for MOBILE -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                        <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                        <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                        <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                        <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                        <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                        <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_569_6449)">
                                          <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                          <g clip-path="url(#clip1_569_6449)">
                                            <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                          </g>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_569_6449">
                                            <rect width="20" height="20" fill="white" />
                                          </clipPath>
                                          <clipPath id="clip1_569_6449">
                                            <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result"></div>
                                  <div class="time-result">67'</div>
                                  <div class="right-result">
                                    <div class="player-info">
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                      <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MATCH REPORT  -->

                          <!-- START MATCH REPORT -->
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title">
                                <div class="left-column">
                                  <div class="league-info">
                                    <span class="sign-league grey-sign">D</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="club-info">
                                    <a href="#" class="name-club">Manchester United</a>
                                    <img src="./images/mc-club.png" alt="" />
                                  </div>
                                </div>
                                <div class="middle-column">
                                  <span class="score default">3</span>
                                  <span class="dot">:</span>
                                  <span class="score default">2</span>
                                </div>
                                <div class="right-column">
                                  <div class="club-info">
                                    <img src="./images/mu-club.png" alt="" />
                                    <a href="#" class="name-club">Manchester City</a>
                                  </div>
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- collapse title for MOBILE -->
                              <div class="collapse-title-mb">
                                <div class="collapse-title-mb__left">
                                  <div class="league-info">
                                    <span class="sign-league green-sign">W</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="list-club">
                                    <div class="club-item">
                                      <span class="score default">3</span>
                                      <span class="club-name">Man United</span>
                                    </div>
                                    <div class="club-item">
                                      <span class="score default">2</span>
                                      <span class="club-name">Liverpool</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse-title-mb__right">
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- END collapse title for MOBILE -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                        <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                        <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                        <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                        <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                        <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                        <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_569_6449)">
                                          <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                          <g clip-path="url(#clip1_569_6449)">
                                            <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                          </g>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_569_6449">
                                            <rect width="20" height="20" fill="white" />
                                          </clipPath>
                                          <clipPath id="clip1_569_6449">
                                            <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result"></div>
                                  <div class="time-result">67'</div>
                                  <div class="right-result">
                                    <div class="player-info">
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                      <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MATCH REPORT  -->

                          <!-- START MATCH REPORT -->
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title">
                                <div class="left-column">
                                  <div class="league-info">
                                    <span class="sign-league red-sign">L</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="club-info">
                                    <a href="#" class="name-club">Manchester United</a>
                                    <img src="./images/mc-club.png" alt="" />
                                  </div>
                                </div>
                                <div class="middle-column">
                                  <span class="score default">3</span>
                                  <span class="dot">:</span>
                                  <span class="score default">2</span>
                                </div>
                                <div class="right-column">
                                  <div class="club-info">
                                    <img src="./images/mu-club.png" alt="" />
                                    <a href="#" class="name-club">Manchester City</a>
                                  </div>
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- collapse title for MOBILE -->
                              <div class="collapse-title-mb">
                                <div class="collapse-title-mb__left">
                                  <div class="league-info">
                                    <span class="sign-league green-sign">W</span>
                                    <span class="name-league">EPL</span>
                                    <span class="time-league">23-04-22</span>
                                  </div>
                                  <div class="list-club">
                                    <div class="club-item">
                                      <span class="score default">3</span>
                                      <span class="club-name">Man United</span>
                                    </div>
                                    <div class="club-item">
                                      <span class="score default">2</span>
                                      <span class="club-name">Liverpool</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse-title-mb__right">
                                  <span class="btn-timeline math-report">Math Report</span>
                                </div>
                              </div>
                              <!-- END collapse title for MOBILE -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                        <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                        <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                        <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                        <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                        <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                        <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result">
                                    <div class="player-info">
                                      <span class="player-name">Messi</span>
                                      <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_569_6449)">
                                          <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                          <g clip-path="url(#clip1_569_6449)">
                                            <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                          </g>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_569_6449">
                                            <rect width="20" height="20" fill="white" />
                                          </clipPath>
                                          <clipPath id="clip1_569_6449">
                                            <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="time-result">23'</div>
                                  <div class="right-result"></div>
                                </div>
                              </div>
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-result"></div>
                                  <div class="time-result">67'</div>
                                  <div class="right-result">
                                    <div class="player-info">
                                      <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                        <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                      </svg>
                                      <span class="player-name">Messi <span class="type">(Pen.)</span></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- END MATCH REPORT  -->
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      tab2 - Home
                    </div>
                    <div id="sub-tabs-3">
                      tab3 - Away
                    </div>
                  </div>

                  <!-- TAB Summary -->
                </div>
                <div id="tabs-2">
                  <!-- TAB League Cup -->
                  tab2 - League Cup
                  <!-- League Cup -->
                </div>
                <div id="tabs-3">
                  <!-- TAB Champions League -->
                  tab3 - Champions League
                  <!-- Champions League-->
                </div>
              </div>
            </div>

            <!-- ============TAB2(Fixtures) ========== -->
          </div>
          <div id="main-tabs-3">
            <!-- ============TAB3(Team Statistics) ========== -->
            <div class="team-statistics-wrapper">
              <h3 class="club-title">Manchester United Situational Statistics</h3>
              <div id="club-team-statistics-tabs">
                <ul class="tables-main-nav">
                  <li><a href="#tabs-1">Goal Types</a></li>
                  <li><a href="#tabs-2">Pass Types</a></li>
                  <li><a href="#tabs-3">Card Situations</a></li>
                </ul>
                <div id="tabs-1">
                  <!-- TAB Defensive -->
                  <div id="club-team-statistics-goal-types-tabs">
                    <ul class="tables-sub-nav">
                      <li><a href="#sub-tabs-1">Overall</a></li>
                      <li><a href="#sub-tabs-2">Home</a></li>
                      <li><a href="#sub-tabs-3">Away</a></li>
                    </ul>
                    <div id="sub-tabs-1">
                      <div id="club-team-statistics-goal-types-overall-tabs">
                        <ul class="pill-nav">
                          <li><a href="#tabs-1">For</a></li>
                          <li><a href="#tabs-2">Against</a></li>
                        </ul>
                        <div id="tabs-1">
                          <div class="club-team-statistics-table">
                            <div class="table-row table-heading d-flex">
                              <div class="column-20">Type</div>
                              <div class="column-70">Goals</div>
                              <div class="column-10 text-center">Effects</div>
                            </div>
                            <div class="table-row d-flex">
                              <div class="column-20">Open Play</div>
                              <div class="column-70">
                                <div class="green-process">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((100 / 100) * 100%)" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-10 text-center">100%</div>
                            </div>

                            <div class="table-row d-flex">
                              <div class="column-20">Set Piece</div>
                              <div class="column-70">
                                <div class="green-process">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((80 / 100) * 100%)" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-10 text-center">80%</div>
                            </div>

                            <div class="table-row d-flex">
                              <div class="column-20">Penalty</div>
                              <div class="column-70">
                                <div class="green-process">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((60 / 100) * 100%)" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-10 text-center">60%</div>
                            </div>

                            <div class="table-row d-flex">
                              <div class="column-20">Own Goal</div>
                              <div class="column-70">
                                <div class="green-process">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((50 / 100) * 100%)" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-10 text-center">50%</div>
                            </div>

                            <div class="table-row d-flex">
                              <div class="column-20">Counter Attack</div>
                              <div class="column-70">
                                <div class="green-process">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((10 / 100) * 100%)" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-10 text-center">10%</div>
                            </div>
                          </div>
                        </div>
                        <div id="tabs-2">
                          Against tabs
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      sub tab 2
                    </div>
                    <div id="sub-tabs-3">
                      sub tab 3
                    </div>
                  </div>
                  <!-- TAB Defensive -->
                </div>
                <div id="tabs-2">
                  <!-- TAB Pass Types-->
                  tab2 - Pass Types
                  <!-- TAB Pass Types-->
                </div>
                <div id="tabs-3">
                  <!-- Card Situations -->
                  tab3 - Card Situations
                  <!-- Card Situations -->
                </div>
              </div>

              <h3 class="club-title">Manchester United Positional Statistics</h3>
              <div class="club-team-positional-statistics-wrapper">
                <div id="club-team-positional-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Touches</a></li>
                    <li><a href="#tabs-2">Shots</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Summary -->
                    <div id="club-team-positional-statistics-touches-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="club-team-positional-statistics-content">
                          <div class="club-team-positional-visual">
                            <div class="positional-visual-item">
                              <h4 class="positional-visual-item-title">Attack Sides</h4>
                              <div class="positional-visual-box">
                                <img src="./images/position-club-visual-1.png" alt="">
                              </div>
                            </div>
                            <div class="positional-visual-item">
                            <h4 class="positional-visual-item-title">Attack Sides</h4>
                            <div class="positional-visual-box">
                            <img src="./images/position-club-visual-2.png" alt="">
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="sub-tabs-2">
                        tab2
                      </div>
                      <div id="sub-tabs-3">
                        tab2
                      </div>
                    </div>
                    <!-- TAB Summary -->
                  </div>
                  <div id="tabs-2">
                    <!-- TAB Shots -->
                    tab2 - Shots
                    <!-- TAB Shots -->
                  </div>
                </div>
              </div>


            </div>
            <!-- ============TAB3(Team Statistics) ========== -->
          </div>
          <div id="main-tabs-4">
            <!-- ============TAB3(Referee Statistics) ========== -->
             <div class="club-referee-statistics-wrapper">
               <h3 class="club-title">Manchester United Referee Statistics</h3>
                <div id="club-referee-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Discipline</a></li>
                    <li><a href="#tabs-2">Results</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="filter-box">
                      <div class="filter-line">
                        <div class="left-filter">
                          <span class="filter-item active">Overrall</span>
                          <span class="filter-item">Home</span>
                          <span class="filter-item">Away</span>
                        </div>
                        <div class="right-filter">
                          <span class="right-filter-label">Season(s):</span>
                          <span class="filter-item active">Current</span>
                          <span class="filter-item">All</span>
                        </div>
                      </div>
                      <div class="filter-line">
                        <div class="left-filter">
                          <span class="filter-item active">Premier League</span>
                          <span class="filter-item">Europa League</span>
                        </div>
                        <div class="right-filter">
                          <span class="right-filter-label">Offences committed:</span>
                          <span class="filter-item active">By</span>
                          <span class="filter-item">Against</span>
                        </div>
                      </div>
                    </div>
                    <div class="club-referee-statistics-content-wrapper">
                          <div class="club-referee-statistics-statistics-table">
                            <div class="table-row table-heading">
                              <div class="column-30 text-left">Referee</div>
                              <div class="column-70 d-flex">
                                <div class="column-8 text-center">Apps</div>
                                <div class="column-8 text-center">Fouls pg</div>
                                <div class="column-8 text-center">Fouls/Tackles</div>
                                <div class="column-8 text-center">Pen pg</div>
                                <div class="column-8 text-center">Yel pg</div>
                                <div class="column-8 text-center">Yel</div>
                                <div class="column-8 text-center">Red pg</div>
                                <div class="column-8 text-center">Red</div>
                              </div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 text-left">
                                <div class="player-info">
                                  <span>1</span>
                                  <span class="player-name">David Coote</span>
                                </div>
                              </div>
                              <div class="column-70 d-flex">
                                <div class="column-8 text-center">99</div>
                                <div class="column-8 text-center">18.1</div>
                                <div class="column-8 text-center">0.74</div>
                                <div class="column-8 text-center">0.15</div>
                                <div class="column-8 text-center">4.60</div>
                                <div class="column-8 text-center">
                                  <span class="yellow-label">105</span>
                                </div>
                                <div class="column-8 text-center">
                                 0.15
                                </div>
                                <div class="column-8 text-center">
                                  <span class="red-label">3</span>
                                </div>
                              </div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 text-left">
                                <div class="player-info">
                                  <span></span>
                                  <span class="player-name">Total / Average</span>
                                </div>
                              </div>
                              <div class="column-70 d-flex">
                                <div class="column-8 text-center">99</div>
                                <div class="column-8 text-center">18.1</div>
                                <div class="column-8 text-center">0.74</div>
                                <div class="column-8 text-center">0.15</div>
                                <div class="column-8 text-center">4.60</div>
                                <div class="column-8 text-center">
                                  <span class="yellow-label">105</span>
                                </div>
                                <div class="column-8 text-center">
                                 0.15
                                </div>
                                <div class="column-8 text-center">
                                  <span class="red-label">3</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="suggestion-wrapper">
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Fouls pg: Fouls per game</li>
                                <li class="suggestion-item">Yel: Total yellow cards</li>
                                <li class="suggestion-item">Red pg: Red cards per game</li>
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Fouls/Tackles: Fouls per tackle</li>
                                <li class="suggestion-item">Yel: Total yellow cards</li>
                                <li class="suggestion-item">Season(s) - All: Uses data from all recent seasons</li>
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Pen pg: Penalties per game</li>
                                <li class="suggestion-item">Red: Total red cards</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div id="tabs-2">tab2</div>
                </div>
             </div>
            <!-- ============TAB3(Referee Statistics) ========== -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>


<script>
  $(function() {
    $("#club-tabs").tabs({
      active: 0
    });

    $("#club-fixtures-tabs").tabs({
      active: 0
    })

    $("#club-fixtures-summary-tabs").tabs({
      active: 0
    })

    $("#club-squad-tabs").tabs({
      active: 0
    })

    $("#club-squad-summary-tabs").tabs({
      active: 0
    })

    $("#club-top-player-tabs").tabs({
      active: 0
    })

    $("#club-top-player-premier-league-tabs").tabs({
      active: 0
    })

    $("#club-fixture-tabs").tabs({
      active: 0
    })
    $("#club-fixture-premier-league-tabs").tabs({
      active: 0
    })
    $("#club-team-statistics-tabs").tabs({
      active: 0
    })

    $("#club-team-statistics-goal-types-tabs").tabs({
      active: 0
    })

    $("#club-team-statistics-goal-types-overall-tabs").tabs({
      active: 0
    })

    $("#club-team-positional-statistics-tabs").tabs({
      active: 0
    })
    $("#club-team-positional-statistics-touches-tabs").tabs({
      active: 0
    })

    $("#club-referee-statistics-tabs").tabs({
      active: 0
    })
  });

  /* -----------------------------------------------------------
    handle toggle show timeline of score.
  ----------------------------------------------------------- */
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      const isActive = this.classList.contains('active')
      const iconArrowUp = this.querySelector('.icon-arrow-up')
      const iconArrowDown = this.querySelector('.icon-arrow-down')
      if (isActive) {
        iconArrowDown.style.display = 'none'
        iconArrowUp.style.display = 'block'
      } else {
        iconArrowDown.style.display = 'block'
        iconArrowUp.style.display = 'none'
      }
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }
</script>


</html>