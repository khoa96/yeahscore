<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>
  <div class="league-wrapper">
    <div class="banner">
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
            <span>2021-2022</span>
          </div>
        </a>
      </div>
      <div class="container">
        <div class="league-info">
          <img src="./images/league-image.png" alt="" class="league-image" />
          <div class="info-detail">
            <h3 class="league-name">Premier League</h3>
            <span class="count-club">20 clubs</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="league-content__wrapper">
        <div id="league-tabs">
          <ul class="league-main-nav">
            <li><a href="#main-tabs-1">Summary</a></li>
            <li><a href="#main-tabs-2">Fixtures</a></li>
            <li><a href="#main-tabs-3">Team Statistics</a></li>
            <li><a href="#main-tabs-4">Player Statistics</a></li>
            <li><a href="#main-tabs-5">Referee Statistics</a></li>
          </ul>
          <div id="main-tabs-1">
            <!-- ================START MAIN TAB 1============ -->
            <!-- Premier League Fixtures TABLE -->
            <div class="premier-league-fixtures-table">
              <div class="table-header">
                <h3 class="title">Premier League Fixtures</h3>
                <div class="date-picker">
                  <div class="time">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.9584 2.96663V1.66663C13.9584 1.32496 13.6751 1.04163 13.3334 1.04163C12.9918 1.04163 12.7084 1.32496 12.7084 1.66663V2.91663H7.29178V1.66663C7.29178 1.32496 7.00844 1.04163 6.66678 1.04163C6.32511 1.04163 6.04178 1.32496 6.04178 1.66663V2.96663C3.79178 3.17496 2.70011 4.51663 2.53344 6.50829C2.51678 6.74996 2.71678 6.94996 2.95011 6.94996H17.0501C17.2918 6.94996 17.4918 6.74163 17.4668 6.50829C17.3001 4.51663 16.2084 3.17496 13.9584 2.96663Z" fill="#1A202C" />
                      <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM7.675 15.175C7.59167 15.2499 7.5 15.3083 7.4 15.35C7.3 15.3916 7.19167 15.4166 7.08333 15.4166C6.975 15.4166 6.86667 15.3916 6.76667 15.35C6.66667 15.3083 6.575 15.2499 6.49167 15.175C6.34167 15.0166 6.25 14.8 6.25 14.5833C6.25 14.3666 6.34167 14.15 6.49167 13.9916C6.575 13.9166 6.66667 13.8583 6.76667 13.8166C6.96667 13.7333 7.2 13.7333 7.4 13.8166C7.5 13.8583 7.59167 13.9166 7.675 13.9916C7.825 14.15 7.91667 14.3666 7.91667 14.5833C7.91667 14.8 7.825 15.0166 7.675 15.175ZM7.85 11.9833C7.80833 12.0833 7.75 12.175 7.675 12.2583C7.59167 12.3333 7.5 12.3916 7.4 12.4333C7.3 12.475 7.19167 12.5 7.08333 12.5C6.975 12.5 6.86667 12.475 6.76667 12.4333C6.66667 12.3916 6.575 12.3333 6.49167 12.2583C6.41667 12.175 6.35833 12.0833 6.31667 11.9833C6.275 11.8833 6.25 11.775 6.25 11.6666C6.25 11.5583 6.275 11.45 6.31667 11.35C6.35833 11.25 6.41667 11.1583 6.49167 11.075C6.575 11 6.66667 10.9416 6.76667 10.9C6.96667 10.8166 7.2 10.8166 7.4 10.9C7.5 10.9416 7.59167 11 7.675 11.075C7.75 11.1583 7.80833 11.25 7.85 11.35C7.89167 11.45 7.91667 11.5583 7.91667 11.6666C7.91667 11.775 7.89167 11.8833 7.85 11.9833ZM10.5917 12.2583C10.5083 12.3333 10.4167 12.3916 10.3167 12.4333C10.2167 12.475 10.1083 12.5 10 12.5C9.89167 12.5 9.78333 12.475 9.68333 12.4333C9.58333 12.3916 9.49167 12.3333 9.40833 12.2583C9.25833 12.1 9.16667 11.8833 9.16667 11.6666C9.16667 11.45 9.25833 11.2333 9.40833 11.075C9.49167 11 9.58333 10.9416 9.68333 10.9C9.88333 10.8083 10.1167 10.8083 10.3167 10.9C10.4167 10.9416 10.5083 11 10.5917 11.075C10.7417 11.2333 10.8333 11.45 10.8333 11.6666C10.8333 11.8833 10.7417 12.1 10.5917 12.2583Z" fill="#1A202C" />
                    </svg>
                    <span>16-22 May 2022</span>
                  </div>
                  <div class="arrow">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 10L12 14L16 10" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="table-content">
                <div class="list-score">

                  <!-- score item 01 -->
                  <div class="score-item">
                    <div class="score-header">
                      <h3 class="name">Wednesday, May 12, 2022</h3>
                    </div>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                  <!-- end score item 01 -->

                  <!-- score item 02-->
                  <div class="score-item">
                    <div class="score-header">
                      <h3 class="name">Wednesday, May 12, 2022</h3>
                    </div>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                  <!-- end score item 02 -->

                  <!-- score item 03-->
                  <div class="score-item">
                    <div class="score-header">
                      <h3 class="name">Wednesday, May 12, 2022</h3>
                    </div>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                  <!-- end score item 03 -->
                </div>
              </div>
            </div>
            <!-- Premier League Fixtures TABLE  -->

            <!-- Premier League Tables -->
            <div class="premier-laegue-table">
              <div class="table-header">
                <h3 class="title">Premier League Tables</h3>
              </div>
              <div class="table-content">
                <div id="tables-main-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tables-main-1">Standings</a></li>
                    <li><a href="#tables-main-2">Form</a></li>
                    <li><a href="#tables-main-3">Streaks</a></li>
                    <li><a href="#tables-main-4">Progress</a></li>
                  </ul>
                  <div id="tables-main-1">
                    <div id="tables-standings-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#tabs-1">Overall</a></li>
                        <li><a href="#tabs-2">Home</a></li>
                        <li><a href="#tabs-3">Away</a></li>
                        <li><a href="#tabs-4">Wide</a></li>
                      </ul>
                      <div id="tabs-1">
                        <!-- standing-overrall -->
                        <div class="table-result">
                          <div class="row-item table-heading">
                            <div class="team-info">
                              <div class="team-id">Team</div>
                              <div class="team-name"></div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">P</div>
                                <div class="detail-item">W</div>
                                <div class="detail-item">D</div>
                                <div class="detail-item">L</div>
                                <div class="detail-item">GF</div>
                                <div class="detail-item">GA</div>
                                <div class="detail-item">GD</div>
                                <div class="detail-item">Pts</div>
                              </div>
                              <div class="list-player">Form</div>
                            </div>
                          </div>
                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number champion">1</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number europa">2</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number relegation">3</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>


                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number">4</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>
                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number">5</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="list-suggest">
                          <div class="suggest-item">
                            <span class="color-league champion"></span>
                            <span class="name-league">Champions League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league europa"></span>
                            <span class="name-league">Europa League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league relegation"></span>
                            <span class="name-league">Relegation</span>
                          </div>
                        </div>
                        <!-- standing-overrall -->
                      </div>
                      <div id="tabs-2">
                        <!-- standing-home-->
                        <div class="table-result">
                          <div class="row-item table-heading">
                            <div class="team-info">
                              <div class="team-id">Team</div>
                              <div class="team-name"></div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">P</div>
                                <div class="detail-item">W</div>
                                <div class="detail-item">D</div>
                                <div class="detail-item">L</div>
                                <div class="detail-item">GF</div>
                                <div class="detail-item">GA</div>
                                <div class="detail-item">GD</div>
                                <div class="detail-item">Pts</div>
                              </div>
                              <div class="list-player">Form</div>
                            </div>
                          </div>
                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number champion">1</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number europa">2</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number relegation">3</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>


                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number">4</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="list-suggest">
                          <div class="suggest-item">
                            <span class="color-league champion"></span>
                            <span class="name-league">Champions League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league europa"></span>
                            <span class="name-league">Europa League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league relegation"></span>
                            <span class="name-league">Relegation</span>
                          </div>
                        </div>
                        <!-- standing-home- -->
                      </div>
                      <div id="tabs-3">
                        <!-- standing-away -->
                        <div class="table-result">
                          <div class="row-item table-heading">
                            <div class="team-info">
                              <div class="team-id">Team</div>
                              <div class="team-name"></div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">P</div>
                                <div class="detail-item">W</div>
                                <div class="detail-item">D</div>
                                <div class="detail-item">L</div>
                                <div class="detail-item">GF</div>
                                <div class="detail-item">GA</div>
                                <div class="detail-item">GD</div>
                                <div class="detail-item">Pts</div>
                              </div>
                              <div class="list-player">Form</div>
                            </div>
                          </div>
                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number champion">1</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number europa">2</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number relegation">3</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>


                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number">4</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>
                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number"></span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="list-suggest">
                          <div class="suggest-item">
                            <span class="color-league champion"></span>
                            <span class="name-league">Champions League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league europa"></span>
                            <span class="name-league">Europa League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league relegation"></span>
                            <span class="name-league">Relegation</span>
                          </div>
                        </div>
                        <!-- standing-away -->
                      </div>
                      <div id="tabs-4">
                        <!-- standing-wide-->
                        <div class="table-result">
                          <div class="row-item table-heading">
                            <div class="team-info">
                              <div class="team-id">Team</div>
                              <div class="team-name"></div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">P</div>
                                <div class="detail-item">W</div>
                                <div class="detail-item">D</div>
                                <div class="detail-item">L</div>
                                <div class="detail-item">GF</div>
                                <div class="detail-item">GA</div>
                                <div class="detail-item">GD</div>
                                <div class="detail-item">Pts</div>
                              </div>
                              <div class="list-player">Form</div>
                            </div>
                          </div>
                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number champion">1</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number europa">2</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number relegation">3</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>


                          <div class="row-item table-row">
                            <div class="team-info">
                              <div class="team-id">
                                <span class="number">4</span>
                              </div>
                              <div class="team-name">Manchester United</div>
                            </div>
                            <div class="team-result">
                              <div class="result-detail">
                                <div class="detail-item">1</div>
                                <div class="detail-item">2</div>
                                <div class="detail-item">33</div>
                                <div class="detail-item">45</div>
                                <div class="detail-item">8</div>
                                <div class="detail-item">9</div>
                                <div class="detail-item">+34</div>
                                <div class="detail-item">+12</div>
                              </div>
                              <div class="list-player">
                                <div class="player-item green">W</div>
                                <div class="player-item grey">D</div>
                                <div class="player-item orange">L</div>
                                <div class="player-item green">L</div>
                                <div class="player-item green">W</div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="list-suggest">
                          <div class="suggest-item">
                            <span class="color-league champion"></span>
                            <span class="name-league">Champions League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league europa"></span>
                            <span class="name-league">Europa League</span>
                          </div>
                          <div class="suggest-item">
                            <span class="color-league relegation"></span>
                            <span class="name-league">Relegation</span>
                          </div>
                        </div>
                        <!-- stading-wide-->
                      </div>
                    </div>
                  </div>
                  <div id="tables-main-2">
                    <div id="tables-form-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#tabs-1">Overall</a></li>
                        <li><a href="#tabs-2">Home</a></li>
                        <li><a href="#tabs-3">Away</a></li>
                        <li><a href="#tabs-4">Wide</a></li>
                      </ul>
                      <div id="tabs-1">tab21</div>
                      <div id="tabs-2">tab22</div>
                      <div id="tabs-3">tab23</div>
                      <div id="tabs-4">tab24</div>
                    </div>
                  </div>
                  <div id="tables-main-3">
                    <div id="tables-streaks-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#tabs-1">Overall</a></li>
                        <li><a href="#tabs-2">Home</a></li>
                        <li><a href="#tabs-3">Away</a></li>
                        <li><a href="#tabs-4">Wide</a></li>
                      </ul>
                      <div id="tabs-1">tab21</div>
                      <div id="tabs-2">tab22</div>
                      <div id="tabs-3">tab23</div>
                      <div id="tabs-4">tab24</div>
                    </div>
                  </div>
                  <div id="tables-main-4">main tab4</div>
                </div>
              </div>
            </div>
            <!-- Premier League Tables -->

            <!-- Premier League Top Teams -->
            <div class="premier-league-top-team-table">
              <div class="table-header">
                <h3 class="title">Premier League Top Teams</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-top-team-tabs">
                  <ul class="tables-nav">
                    <li><a href="#tabs-1">Overall</a></li>
                    <li><a href="#tabs-2">Home</a></li>
                    <li><a href="#tabs-3">Away</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- Overall content -->
                    <div class="table-item">
                      <div class="table-row table-heading">
                        <div class="table-column">Possession</div>
                        <div class="table-column">Aggression</div>
                        <div class="table-column">Aerial Duels Won</div>
                      </div>
                      <div class="table-row">
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="green-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Leeds</span>
                          <div class="list-score">
                            <span class="score-item yellow">105</span>
                            <span class="score-item red">3</span>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="green-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="green-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Leeds</span>
                          <div class="list-score">
                            <span class="score-item yellow">90</span>
                            <span class="score-item red">3</span>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="green-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- table2 -->
                    <div class="table-item">
                      <div class="table-row table-heading">
                        <div class="table-column">Shots per Game</div>
                        <div class="table-column">Pass Accuracy</div>
                        <div class="table-column">Ratings</div>
                      </div>
                      <div class="table-row">
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="blue-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: calc((19.2 / 20) * 100%)" aria-valuenow="19.2" aria-valuemin="0" aria-valuemax="20">19.2</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="green-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <span class="rating">7.12</span>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="blue-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: calc((15 / 20) * 100%)" aria-valuenow="15" aria-valuemin="0" aria-valuemax="20">15</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <div class="green-process">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column">
                          <span class="club-name">Manchester United</span>
                          <span class="rating">9.12</span>
                        </div>
                      </div>
                    </div>
                    <!-- table2 -->

                    <!-- Overall content -->
                  </div>
                  <div id="tabs-2">
                    Home content
                  </div>
                  <div id="tabs-3">
                    Away content
                  </div>
                </div>

              </div>
            </div>
            <!-- Premier League Top Teams -->

            <!-- Premier League Top Players -->
            <div class="premier-league-top-players">
              <div class="table-header">
                <h3 class="title">Premier League Top Players</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-top-players-tabs">
                  <ul class="tables-nav">
                    <li><a href="#tabs-1">Overall</a></li>
                    <li><a href="#tabs-2">Home</a></li>
                    <li><a href="#tabs-3">Away</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- table 0 -->
                    <div class="table-item">
                      <div class="table-row table-heading">
                        <div class="column-3 text-center">R</div>
                        <div class="column-15 text-left">Player</div>
                        <div class="column-15 text-left">Team</div>
                        <div class="column-57">Player Goals/Team Goals</div>
                        <div class="column-10 text-center">Contribution</div>
                      </div>
                      <div class="table-row">
                        <div class="column-3 text-center">1</div>
                        <div class="column-15 text-left">
                          <span class="player-name">M.Salah</span>
                        </div>
                        <div class="column-15 text-left">
                          <span class="club-name">Liverpool</span>
                        </div>
                        <div class="column-57 text-left">
                          <div class="result-progess" style="width: 94%;">
                            <div class="green-process">
                              <div class="progress progess-max">
                                <div class="progress-bar" role="progressbar" style="width: calc((23 / 94) * 100%)" aria-valuenow="23" aria-valuemin="0" aria-valuemax="94">23</div>
                                <span class="progess-label">94</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column-10 text-center">
                          <span class="contribution">24%</span>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="column-3 text-center">2</div>
                        <div class="column-15 text-left">
                          <span class="player-name">M.Salah</span>
                        </div>
                        <div class="column-15 text-left">
                          <span class="club-name">Liverpool</span>
                        </div>
                        <div class="column-57 text-left">
                          <div class="result-progess" style="width: 80%;">
                            <div class="green-process">
                              <div class="progress progess-max">
                                <div class="progress-bar" role="progressbar" style="width: calc((50 / 80) * 100%)" aria-valuenow="50" aria-valuemin="0" aria-valuemax="80">50</div>
                                <span class="progess-label">80</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column-10 text-center">
                          <span class="contribution">24%</span>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="column-3 text-center">3</div>
                        <div class="column-15 text-left">
                          <span class="player-name">M.Salah</span>
                        </div>
                        <div class="column-15 text-left">
                          <span class="club-name">Liverpool</span>
                        </div>
                        <div class="column-57 text-left">
                          <div class="result-progess" style="width: 30%;">
                            <div class="green-process">
                              <div class="progress progess-max">
                                <div class="progress-bar" role="progressbar" style="width: calc((15 / 30) * 100%)" aria-valuenow="15" aria-valuemin="0" aria-valuemax="30">15</div>
                                <span class="progess-label">30</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column-10 text-center">
                          <span class="contribution">24%</span>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="column-3 text-center">4</div>
                        <div class="column-15 text-left">
                          <span class="player-name">M.Salah</span>
                        </div>
                        <div class="column-15 text-left">
                          <span class="club-name">Liverpool</span>
                        </div>
                        <div class="column-57 text-left">
                          <div class="result-progess" style="width: 99%;">
                            <div class="green-process">
                              <div class="progress progess-max">
                                <div class="progress-bar" role="progressbar" style="width: calc((85 / 99) * 100%)" aria-valuenow="80" aria-valuemin="0" aria-valuemax="99">80</div>
                                <span class="progess-label">99</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="column-10 text-center">
                          <span class="contribution">24%</span>
                        </div>
                      </div>
                    </div>
                    <!-- table 0 -->
                    <!-- tablle1 -->
                    <div class="table-item">
                      <div class="table-row table-heading">
                        <div class="table-column column-50">Aggression</div>
                        <div class="table-column column-50">Shots per Game</div>
                      </div>
                      <div class="table-row">
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">G. Xhaka</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Arsenal</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="list-score">
                              <span class="score-item yellow">10</span>
                              <span class="score-item red">1</span>
                            </div>
                          </div>
                        </div>
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">M. Salah</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((4 / 4) * 100%)" aria-valuenow="4" aria-valuemin="0" aria-valuemax="4">4</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">G. Xhaka</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Arsenal</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="list-score">
                              <span class="score-item yellow">10</span>
                              <span class="score-item red">1</span>
                            </div>
                          </div>
                        </div>
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">M. Salah</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((2 / 4) * 100%)" aria-valuenow="4" aria-valuemin="0" aria-valuemax="2">2</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- table1 -->

                    <!-- table2 -->
                    <div class="table-item">
                      <div class="table-row table-heading">
                        <div class="table-column column-50">Aggression</div>
                        <div class="table-column column-50">
                          <div class="column-35">Shots per Game</div>
                          <div class="column-35"></div>
                          <div class="column-15 text-left">Apps</div>
                          <div class="column-15 text-center">Rt</div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">M. Salah</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((13 / 13) * 100%)" aria-valuenow="13" aria-valuemin="0" aria-valuemax="13">13</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column column-50">
                          <div class="column-35 text-left">
                            <span class="player-name">C. Ronaldo</span>
                          </div>
                          <div class="column-35 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-15 text-left">
                            <span class="text-apps">25(5)</span>
                          </div>
                          <div class="column-15 text-center">
                            <span class="rating">7.12</span>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">M. Salah</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((11 / 13) * 100%)" aria-valuenow="13" aria-valuemin="0" aria-valuemax="11">11</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column column-50">
                          <div class="column-35 text-left">
                            <span class="player-name">C. Ronaldo</span>
                          </div>
                          <div class="column-35 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-15 text-left">
                            <span class="text-apps">25(5)</span>
                          </div>
                          <div class="column-15 text-center">
                            <span class="rating">7.12</span>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="table-column column-50">
                          <div class="column-33 text-left">
                            <span class="player-name">M. Salah</span>
                          </div>
                          <div class="column-33 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-33 text-right">
                            <div class="blue-process">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: calc((12 / 13) * 100%)" aria-valuenow="13" aria-valuemin="0" aria-valuemax="12">12</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-column column-50">
                          <div class="column-35 text-left">
                            <span class="player-name">C. Ronaldo</span>
                          </div>
                          <div class="column-35 text-left">
                            <span class="club-name">Liverpool</span>
                          </div>
                          <div class="column-15 text-left">
                            <span class="text-apps">25(5)</span>
                          </div>
                          <div class="column-15 text-center">
                            <span class="rating">7.12</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- table2 -->
                  </div>
                  <div id="tabs-2">
                    tab2
                  </div>
                  <div id="tabs-3">
                    tab3
                  </div>
                </div>

              </div>
            </div>
            <!-- Premier League Top Players -->

            <!-- Premier League Best XI -->
            <div class="premier-league-best-xi">
              <div class="table-header">
                <h3 class="title">Premier League Best XI</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-best-xi-tabs">
                  <ul class="tables-nav">
                    <li><a href="#tabs-1">Weekly</a></li>
                    <li><a href="#tabs-2">Monthly</a></li>
                    <li><a href="#tabs-3">Seasonal</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="tab-content">
                      <div class="match-matric-wrapper">
                        <div class="matric-row">
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/mu-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">J. Cancelo</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                        </div>
                        <div class="matric-row">
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/mc-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">V.v. Dijk</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/rm-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">T. A-Arnold</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/liv-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">Alisson</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/juv-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">Alisson</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                        </div>
                        <div class="matric-row">
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/mc-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">V.v. Dijk</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/rm-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">T. A-Arnold</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/liv-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">Alisson</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/juv-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">Alisson</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                        </div>
                        <div class="matric-row">
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/lei-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">Alisson</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                          <div class="player">
                            <div class="club-image">
                              <img src="./images/juv-club.png" alt="">
                            </div>
                            <div class="player-info">
                              <span class="club-name">Liverpool</span>
                              <span class="player-name">Alisson</span>
                              <span class="rating">7.5</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <ul class="list-suggest">
                        <li>* Only the best performing player for each position is displayed </li>
                        <li> ** Player ratings in weekly Best XIs correct as of midnight (GMT) on the final match of the gameweek</li>
                      </ul>
                    </div>
                  </div>
                  <div id="tabs-2">premier-league-best-xi-tabs 2</div>
                  <div id="tabs-3">premier-league-best-xi-tabs 3</div>
                </div>
              </div>
            </div>
            <!-- Premier League Best XI -->
          </div>

          <!-- ================END MAIN TAB 1============ -->

          <!-- ================START MAIN TAB2 (Fixture)============ -->
          <div id="main-tabs-2">
            <!-- Premier League Fixture & Results TABLE -->
            <div class="premier-league-fixtures-table">
              <div class="table-header">
                <h3 class="title">Premier League Fixtures</h3>
                <div class="date-picker">
                  <div class="time">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.9584 2.96663V1.66663C13.9584 1.32496 13.6751 1.04163 13.3334 1.04163C12.9918 1.04163 12.7084 1.32496 12.7084 1.66663V2.91663H7.29178V1.66663C7.29178 1.32496 7.00844 1.04163 6.66678 1.04163C6.32511 1.04163 6.04178 1.32496 6.04178 1.66663V2.96663C3.79178 3.17496 2.70011 4.51663 2.53344 6.50829C2.51678 6.74996 2.71678 6.94996 2.95011 6.94996H17.0501C17.2918 6.94996 17.4918 6.74163 17.4668 6.50829C17.3001 4.51663 16.2084 3.17496 13.9584 2.96663Z" fill="#1A202C" />
                      <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM7.675 15.175C7.59167 15.2499 7.5 15.3083 7.4 15.35C7.3 15.3916 7.19167 15.4166 7.08333 15.4166C6.975 15.4166 6.86667 15.3916 6.76667 15.35C6.66667 15.3083 6.575 15.2499 6.49167 15.175C6.34167 15.0166 6.25 14.8 6.25 14.5833C6.25 14.3666 6.34167 14.15 6.49167 13.9916C6.575 13.9166 6.66667 13.8583 6.76667 13.8166C6.96667 13.7333 7.2 13.7333 7.4 13.8166C7.5 13.8583 7.59167 13.9166 7.675 13.9916C7.825 14.15 7.91667 14.3666 7.91667 14.5833C7.91667 14.8 7.825 15.0166 7.675 15.175ZM7.85 11.9833C7.80833 12.0833 7.75 12.175 7.675 12.2583C7.59167 12.3333 7.5 12.3916 7.4 12.4333C7.3 12.475 7.19167 12.5 7.08333 12.5C6.975 12.5 6.86667 12.475 6.76667 12.4333C6.66667 12.3916 6.575 12.3333 6.49167 12.2583C6.41667 12.175 6.35833 12.0833 6.31667 11.9833C6.275 11.8833 6.25 11.775 6.25 11.6666C6.25 11.5583 6.275 11.45 6.31667 11.35C6.35833 11.25 6.41667 11.1583 6.49167 11.075C6.575 11 6.66667 10.9416 6.76667 10.9C6.96667 10.8166 7.2 10.8166 7.4 10.9C7.5 10.9416 7.59167 11 7.675 11.075C7.75 11.1583 7.80833 11.25 7.85 11.35C7.89167 11.45 7.91667 11.5583 7.91667 11.6666C7.91667 11.775 7.89167 11.8833 7.85 11.9833ZM10.5917 12.2583C10.5083 12.3333 10.4167 12.3916 10.3167 12.4333C10.2167 12.475 10.1083 12.5 10 12.5C9.89167 12.5 9.78333 12.475 9.68333 12.4333C9.58333 12.3916 9.49167 12.3333 9.40833 12.2583C9.25833 12.1 9.16667 11.8833 9.16667 11.6666C9.16667 11.45 9.25833 11.2333 9.40833 11.075C9.49167 11 9.58333 10.9416 9.68333 10.9C9.88333 10.8083 10.1167 10.8083 10.3167 10.9C10.4167 10.9416 10.5083 11 10.5917 11.075C10.7417 11.2333 10.8333 11.45 10.8333 11.6666C10.8333 11.8833 10.7417 12.1 10.5917 12.2583Z" fill="#1A202C" />
                    </svg>
                    <span>16-22 May 2022</span>
                  </div>
                  <div class="arrow">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 10L12 14L16 10" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="table-content">
                <div class="list-score">
                  <!-- score item 01 -->
                  <div class="score-item">
                    <div class="score-header">
                      <h3 class="name">Wednesday, May 12, 2022</h3>
                    </div>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                  <!-- end score item 01 -->

                  <!-- score item 02-->
                  <div class="score-item">
                    <div class="score-header">
                      <h3 class="name">Wednesday, May 12, 2022</h3>
                    </div>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                  <!-- end score item 02 -->

                  <!-- score item 03-->
                  <div class="score-item">
                    <div class="score-header">
                      <h3 class="name">Wednesday, May 12, 2022</h3>
                    </div>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                              <div class="time-info">
                                <span class="time">20:00</span>
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
                              <div class="time-info">
                                <span class="time">1:00</span>
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
                  <!-- end score item 03 -->
                </div>
              </div>
            </div>
            <!-- Premier League Fixture & Results TABLE  -->
          </div>
          <!-- ================END MAIN TAB 2(Fixture)============ -->

          <!-- ================START MAIN TAB 3 (Team Statistics)============ -->
          <div id="main-tabs-3">
            <!-- Premier League Team Statistics -->
            <div class="premier-league-team-statistics">
              <div class="table-header">
                <h3 class="title">Premier League Team Statistics</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-team-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Summary</a></li>
                    <li><a href="#tabs-2">Defensive</a></li>
                    <li><a href="#tabs-3">Offensive</a></li>
                    <li><a href="#tabs-4">Detailed</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Summary -->
                    <div id="premier-league-team-statistics-summary-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="premier-league-team-statistics-summary-table">
                          <div class="table-wrapper">
                            <div class="table-row table-heading">
                              <div class="column-30">Team</div>
                              <div class="column-10 text-center">Goals</div>
                              <div class="column-10 text-center">Shots pg</div>
                              <div class="column-10 text-center">Discipline</div>
                              <div class="column-10 text-center">Possessions%</div>
                              <div class="column-10 text-center">Pass%</div>
                              <div class="column-10 text-center">AerialsWon</div>
                              <div class="column-10 text-center text-rating">Rating</div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 team-info">
                                <span class="number-team">1</span>
                                <span class="club-name">Manchester United</span>
                              </div>
                              <div class="column-10 text-center">99</div>
                              <div class="column-10 text-center">18.1</div>
                              <div class="column-10 text-center">
                                <div class="list-score text-center">
                                  <span class="score-item red">105</span>
                                  <span class="score-item yellow">3</span>
                                </div>
                              </div>
                              <div class="column-10 text-center">68.2</div>
                              <div class="column-10 text-center">99.5</div>
                              <div class="column-10 text-center">12.5</div>
                              <div class="column-10 text-center text-rating">7.12</div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 team-info">
                                <span class="number-team">2</span>
                                <span class="club-name">Liverpool</span>
                              </div>
                              <div class="column-10 text-center">99</div>
                              <div class="column-10 text-center">18.1</div>
                              <div class="column-10 text-center">
                                <div class="list-score text-center">
                                  <span class="score-item red">105</span>
                                  <span class="score-item yellow">3</span>
                                </div>
                              </div>
                              <div class="column-10 text-center">68.2</div>
                              <div class="column-10 text-center">99.5</div>
                              <div class="column-10 text-center">12.5</div>
                              <div class="column-10 text-center text-rating">7.12</div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 team-info">
                                <span class="number-team">3</span>
                                <span class="club-name">Newcastle</span>
                              </div>
                              <div class="column-10 text-center">99</div>
                              <div class="column-10 text-center">18.1</div>
                              <div class="column-10 text-center">
                                <div class="list-score text-center">
                                  <span class="score-item red">105</span>
                                  <span class="score-item yellow">3</span>
                                </div>
                              </div>
                              <div class="column-10 text-center">68.2</div>
                              <div class="column-10 text-center">99.5</div>
                              <div class="column-10 text-center">12.5</div>
                              <div class="column-10 text-center text-rating">7.12</div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 team-info">
                                <span class="number-team">4</span>
                                <span class="club-name">Manchester City</span>
                              </div>
                              <div class="column-10 text-center">99</div>
                              <div class="column-10 text-center">18.1</div>
                              <div class="column-10 text-center">
                                <div class="list-score text-center">
                                  <span class="score-item red">105</span>
                                  <span class="score-item yellow">3</span>
                                </div>
                              </div>
                              <div class="column-10 text-center">68.2</div>
                              <div class="column-10 text-center">99.5</div>
                              <div class="column-10 text-center">12.5</div>
                              <div class="column-10 text-center text-rating">7.12</div>
                            </div>
                            <div class="table-row">
                              <div class="column-30 team-info">
                                <span class="number-team">5</span>
                                <span class="club-name">Tottenham</span>
                              </div>
                              <div class="column-10 text-center">99</div>
                              <div class="column-10 text-center">18.1</div>
                              <div class="column-10 text-center">
                                <div class="list-score text-center">
                                  <span class="score-item red">105</span>
                                  <span class="score-item yellow">3</span>
                                </div>
                              </div>
                              <div class="column-10 text-center">68.2</div>
                              <div class="column-10 text-center">99.5</div>
                              <div class="column-10 text-center">12.5</div>
                              <div class="column-10 text-center text-rating">7.12</div>
                            </div>
                          </div>
                          <div class="suggestion-wrapper">
                            <div class="column-30">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                            <div class="column-30">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Shots pg: Shots per game</li>
                                <li class="suggestion-item">Possession%: Possession Percentage</li>
                              </ul>
                            </div>
                            <div class="column-30">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Discipline: Yellow card</li>
                                <li class="suggestion-item">Pass%: Pass success percentage</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="sub-tabs-2">
                        tab2
                      </div>
                      <div id="sub-tabs-3">
                        tab3
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
            </div>
            <!-- Premier League Team Statistics -->

            <!-- Premier League Situational Statistics -->
            <div class="premier-league-situational-statistics">
              <div class="table-header">
                <h3 class="title">Premier League Team Statistics</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-situational-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Goal Types</a></li>
                    <li><a href="#tabs-2">Pass Types</a></li>
                    <li><a href="#tabs-3">Card Situations</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div id="premier-league-situational-statistics-goal-types-tabs">
                      <ul class="pill-nav">
                        <li><a href="#sub-tabs-1">Overrall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div id="premier-league-situational-statistics-goal-types-ovveral-tabs">
                          <ul class="pill-nav">
                            <li><a href="#children-tabs-1">For</a></li>
                            <li><a href="#children-tabs-2">Against</a></li>
                          </ul>
                          <div id="children-tabs-1">
                            <div class="premier-league-situational-statistics-table">
                              <div class="table-row table-heading">
                                <div class="table-column column-30 text-left">Team</div>
                                <div class="table-column column-70 d-flex">
                                  <div class="column-14 text-center">Open Play</div>
                                  <div class="column-14 text-center">Counter Attack</div>
                                  <div class="column-14 text-center">Set Piece</div>
                                  <div class="column-14 text-center">Penalty</div>
                                  <div class="column-14 text-center">Own Goal</div>
                                </div>
                              </div>
                              <div class="table-row d-flex">
                                <div class="column-30 team-info text-left">
                                  <span class="number-team">1</span>
                                  <span class="club-name">Manchester United</span>
                                </div>
                                <div class="table-column column-70 d-flex">
                                  <div class="column-14 text-center">99</div>
                                  <div class="column-14 text-center">18.1</div>
                                  <div class="column-14 text-center">68.2</div>
                                  <div class="column-14 text-center">89.5</div>
                                  <div class="column-14 text-center">12.6</div>
                                </div>
                              </div>
                              <div class="table-row d-flex">
                                <div class="column-30 team-info text-left">
                                  <span class="number-team">2</span>
                                  <span class="club-name">Arsenal</span>
                                </div>
                                <div class="table-column column-70 d-flex">
                                  <div class="column-14 text-center">99</div>
                                  <div class="column-14 text-center">18.1</div>
                                  <div class="column-14 text-center">68.2</div>
                                  <div class="column-14 text-center">89.5</div>
                                  <div class="column-14 text-center">12.6</div>
                                </div>
                              </div>
                              <div class="table-row d-flex">
                                <div class="column-30 team-info text-left">
                                  <span class="number-team">3</span>
                                  <span class="club-name">Tottenham</span>
                                </div>
                                <div class="table-column column-70 d-flex">
                                  <div class="column-14 text-center">99</div>
                                  <div class="column-14 text-center">18.1</div>
                                  <div class="column-14 text-center">68.2</div>
                                  <div class="column-14 text-center">89.5</div>
                                  <div class="column-14 text-center">12.6</div>
                                </div>
                              </div>
                              <div class="table-row d-flex">
                                <div class="column-30 team-info text-left">
                                  <span class="number-team">4</span>
                                  <span class="club-name">Manchester United</span>
                                </div>
                                <div class="table-column column-70 d-flex">
                                  <div class="column-14 text-center">99</div>
                                  <div class="column-14 text-center">18.1</div>
                                  <div class="column-14 text-center">68.2</div>
                                  <div class="column-14 text-center">89.5</div>
                                  <div class="column-14 text-center">12.6</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="children-tabs-2">
                            tab-Against
                          </div>
                        </div>
                      </div>
                      <div id="sub-tabs-2">
                        main tab Home
                      </div>
                      <div id="sub-tabs-3">
                        main tab Away
                      </div>
                    </div>

                  </div>
                  <div id="tabs-2">
                    <!-- TAB Pass Types -->
                    tab2 - Pass Types
                    <!-- TAB Pass Types -->
                  </div>
                  <div id="tabs-3">
                    <!-- TAB Card Situations -->
                    tab3 - Card Situations
                    <!-- TAB card Situations -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Premier League Situational Statistics -->

            <!-- Premier League Positional Statistics -->
            <div class="premier-league-positional-statistics">
              <div class="table-header">
                <h3 class="title">Premier League Positional Statistics</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-positional-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Goal Types</a></li>
                    <li><a href="#tabs-2">Pass Types</a></li>
                    <li><a href="#tabs-3">Card Situations</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Goal Types -->
                    <div id="premier-league-positional-statistics-goal-types-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                        <li><a href="#sub-tabs-4">Wide</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="premier-league-team-statistics-table">
                          <div class="table-row table-heading">
                            <div class="table-column column-30">Team</div>
                            <div class="table-column column-70 d-flex">
                              <div class="column-33 text-center">Left Side</div>
                              <div class="column-33 text-center">Middle of the Pitch</div>
                              <div class="column-33 text-center">Right Side</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 team-info">
                              <span class="number-team">1</span>
                              <span class="club-name">Manchester United</span>
                            </div>
                            <div class="table-column column-70 d-flex">
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((70 / 100) * 100%)" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((90 / 100) * 100%)" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((80 / 100) * 100%)" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 team-info">
                              <span class="number-team">2</span>
                              <span class="club-name">Liverpool</span>
                            </div>
                            <div class="table-column column-70 d-flex">
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((60 / 100) * 100%)" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((20 / 100) * 100%)" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((50 / 100) * 100%)" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 team-info">
                              <span class="number-team">3</span>
                              <span class="club-name">Manchester United</span>
                            </div>
                            <div class="table-column column-70 d-flex">
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((70 / 100) * 100%)" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((90 / 100) * 100%)" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                                  </div>
                                </div>
                              </div>
                              <div class="column-33 text-center">
                                <div class="green-process">
                                  <div class="progress maxw-200">
                                    <div class="progress-bar" role="progressbar" style="width: calc((80 / 100) * 100%)" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="sub-tabs-2">
                        tab2 - Home
                      </div>
                      <div id="sub-tabs-3">
                        tab3 - Away
                      </div>
                      <div id="sub-tabs-4">
                        tab4 - Wide
                      </div>
                    </div>
                    <!-- TAB Goal Types -->
                  </div>
                  <div id="tabs-2">
                    <!-- TAB Pass Types -->
                    tab2 - Pass Types
                    <!-- TAB Pass Types-->
                  </div>
                  <div id="tabs-3">
                    <!-- TAB Card Situations -->
                    tab3 - Card Situations
                    <!-- TAB Card Situations -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Premier League Positional Statistics -->
          </div>
          <!-- ================END MAIN TAB 3 (Team Statistics)============ -->

          <!-- ================START MAIN TAB 4============ -->
          <div id="main-tabs-4">
            <!-- Premier League player Statistics  -->
            <div class="premier-league-player-statistics">
              <div class="table-header">
                <h3 class="title">Premier League Player Statistics</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-player-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Summary</a></li>
                    <li><a href="#tabs-2">Defensive</a></li>
                    <li><a href="#tabs-3">Offensive</a></li>
                    <li><a href="#tabs-4">Detailed</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Summary -->
                    <div id="premier-league-player-statistics-summary-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="table-content-wrapper">
                          <div class="premier-league-player-statistics-table">
                            <div class="table-row table-heading">
                              <div class="table-column column-30 text-left">Team</div>
                              <div class="table-column column-70 d-flex">
                                <div class="column-6 text-center">Apps</div>
                                <div class="column-6 text-center">Mins</div>
                                <div class="column-6 text-center">Goals</div>
                                <div class="column-6 text-center">Assists</div>
                                <div class="column-6 text-center">Yel</div>
                                <div class="column-6 text-center">Red</div>
                                <div class="column-6 text-center">SpG</div>
                                <div class="column-6 text-center">Pass%</div>
                                <div class="column-6 text-center">AerialsWon</div>
                                <div class="column-6 text-center">MotM</div>
                                <div class="column-6 text-center text-rating">Rating</div>
                              </div>
                            </div>
                            <div class="table-row">
                              <div class="table-column column-30">
                                <div class="player-info">
                                  <span class="number">1</span>
                                  <div class="player-detail">
                                    <img class="flag" src="./images/flag.png" />
                                    <div>
                                      <p class="player-name">Kevin De Bruyne</p>
                                      <p class="player-history">30, M(CLR),FW</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="table-column column-70 d-flex">
                                <div class="column-6 text-center">36(2)</div>
                                <div class="column-6 text-center">4343</div>
                                <div class="column-6 text-center">0</div>
                                <div class="column-6 text-center">2</div>
                                <div class="column-6 text-center">6</div>
                                <div class="column-6 text-center">-</div>
                                <div class="column-6 text-center">2.6</div>
                                <div class="column-6 text-center">79.5</div>
                                <div class="column-6 text-center">0.9</div>
                                <div class="column-6 text-center">3</div>
                                <div class="column-6 text-center text-rating">7.67</div>
                              </div>

                            </div>
                            <div class="table-row">
                              <div class="table-column column-30">
                                <div class="player-info">
                                  <span class="number">1</span>
                                  <div class="player-detail">
                                    <img class="flag" src="./images/flag.png" />
                                    <div>
                                      <p class="player-name">Kevin De Bruyne</p>
                                      <p class="player-history">30, M(CLR),FW</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="table-column column-70 d-flex">
                                <div class="column-6 text-center">36(2)</div>
                                <div class="column-6 text-center">4343</div>
                                <div class="column-6 text-center">0</div>
                                <div class="column-6 text-center">2</div>
                                <div class="column-6 text-center">6</div>
                                <div class="column-6 text-center">-</div>
                                <div class="column-6 text-center">2.6</div>
                                <div class="column-6 text-center">79.5</div>
                                <div class="column-6 text-center">0.9</div>
                                <div class="column-6 text-center">3</div>
                                <div class="column-6 text-center text-rating">7.67</div>
                              </div>

                            </div>
                            <div class="table-row">
                              <div class="table-column column-30">
                                <div class="player-info">
                                  <span class="number">1</span>
                                  <div class="player-detail">
                                    <img class="flag" src="./images/flag.png" />
                                    <div>
                                      <p class="player-name">Kevin De Bruyne</p>
                                      <p class="player-history">30, M(CLR),FW</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="table-column column-70 d-flex">
                                <div class="column-6 text-center">36(2)</div>
                                <div class="column-6 text-center">4343</div>
                                <div class="column-6 text-center">0</div>
                                <div class="column-6 text-center">2</div>
                                <div class="column-6 text-center">6</div>
                                <div class="column-6 text-center">-</div>
                                <div class="column-6 text-center">2.6</div>
                                <div class="column-6 text-center">79.5</div>
                                <div class="column-6 text-center">0.9</div>
                                <div class="column-6 text-center">3</div>
                                <div class="column-6 text-center text-rating">7.67</div>
                              </div>
                            </div>
                            <div class="table-row">
                              <div class="table-column column-30">
                                <div class="player-info">
                                  <span class="number">1</span>
                                  <div class="player-detail">
                                    <img class="flag" src="./images/flag.png" />
                                    <div>
                                      <p class="player-name">Kevin De Bruyne</p>
                                      <p class="player-history">30, M(CLR),FW</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="table-column column-70 d-flex">
                                <div class="column-6 text-center">36(2)</div>
                                <div class="column-6 text-center">4343</div>
                                <div class="column-6 text-center">0</div>
                                <div class="column-6 text-center">2</div>
                                <div class="column-6 text-center">6</div>
                                <div class="column-6 text-center">-</div>
                                <div class="column-6 text-center">2.6</div>
                                <div class="column-6 text-center">79.5</div>
                                <div class="column-6 text-center">0.9</div>
                                <div class="column-6 text-center">3</div>
                                <div class="column-6 text-center text-rating">7.67</div>
                              </div>
                            </div>
                          </div>
                          <div class="table-footer">
                            <div class="pagination">
                              <span>Page</span>
                              <span>
                                <span>1</span>
                                <span>/</span>
                                <span>30</span>
                              </span>
                              <span>| Showing</span>
                              <span>
                                <span>1</span>
                                <span>-</span>
                                <span>10</span>
                              </span>
                              <span>of</span>
                              <span>299</span>
                            </div>
                            <div class="controls">
                              <span class="btn-pagination active">First</span>
                              <span class="btn-pagination">Prev</span>
                              <span class="btn-pagination">Next</span>
                              <span class="btn-pagination">Last</span>
                            </div>
                          </div>
                          <div class="suggestion-wrapper">
                            <div class="column-30">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                            <div class="column-30">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Shots pg: Shots per game</li>
                                <li class="suggestion-item">Possession%: Possession Percentage</li>
                              </ul>
                            </div>
                            <div class="column-30">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Discipline: Yellow card</li>
                                <li class="suggestion-item">Pass%: Pass success percentage</li>
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
                    <!-- TAB Detailed -->
                    tab4 - Detailed
                    <!-- TAB Detailed -->
                  </div>
                </div>

              </div>
            </div>
            <!-- Premier League player Statistics  -->

            <!-- Premier League Assist to Goal Scorer -->
            <div class="premier-league-assist-to-goal-scorer-table">
              <div class="table-header">
                <h3 class="title">Premier League Player Statistics</h3>
              </div>
              <div class="table-content">
                <div class="table-row table-heading">
                  <div class="column-20 text-left">R</div>
                    <div class="column-30 text-left">Goal Scorer</div>
                    <div class="column-30 text-left">Assisted By</div>
                    <div class="column-30 text-left">Team</div>
                  <div class="column-10 text-right">#</div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">1</div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">J. Vardy</span>
                      </div>
                    </div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">H. Barnes</span>
                      </div>
                    </div>
                    <div class="column-30 text-left">
                      <span class="club-name">Tottenham</span>
                    </div>
                  <div class="column-10 text-right">5</div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">2</div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">J. Vardy</span>
                      </div>
                    </div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">H. Barnes</span>
                      </div>
                    </div>
                    <div class="column-30 text-left">
                      <span class="club-name">Tottenham</span>
                    </div>
                  <div class="column-10 text-right">5</div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">3</div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">S. H-Min</span>
                      </div>
                    </div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">A. Lacazette</span>
                      </div>
                    </div>
                    <div class="column-30 text-left">
                      <span class="club-name">Leicester</span>
                    </div>
                  <div class="column-10 text-right">6</div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">4</div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">J. Vardy</span>
                      </div>
                    </div>
                    <div class="column-30">
                      <div class="player-info">
                        <img src="./images/flag.png" alt="">
                        <span class="player-name">H. Barnes</span>
                      </div>
                    </div>
                    <div class="column-30 text-left">
                      <span class="club-name">Tottenham</span>
                    </div>
                  <div class="column-10 text-right">8</div>
                </div>
              </div>
            </div>
            <!-- Premier League Assist to Goal Scorer -->
          </div>
          <!-- ================END MAIN TAB 4============ -->

          <!-- ================START MAIN TAB 5============ -->
          <div id="main-tabs-5">
            <!-- Premier League Referee Statistics  -->
            <div class="premier-league-referee-statistics">
              <div class="table-header">
                <h3 class="title">Premier League Referee Statistics</h3>
              </div>
              <div class="table-content">
                <div id="premier-league-referee-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Discipline</a></li>
                    <li><a href="#tabs-2">Results</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Discipline -->
                    <div id="premier-league-player-statistics-discipline-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="premier-league-player-statistics-table">
                          <div class="table-content-wrapper">
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
                                  <span class="player-number">1</span>
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
                                  <span class="player-number">1</span>
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
                                  <span class="player-number">1</span>
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
                                  <span class="player-number">1</span>
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
                                  <span class="player-number">1</span>
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
                          </div>
                          <div class="table-footer">
                            <div class="pagination">
                              <span>Page</span>
                              <span>
                                <span>1</span>
                                <span>/</span>
                                <span>30</span>
                              </span>
                              <span>| Showing</span>
                              <span>
                                <span>1</span>
                                <span>-</span>
                                <span>10</span>
                              </span>
                              <span>of</span>
                              <span>299</span>
                            </div>
                            <div class="controls">
                              <span class="btn-pagination active">First</span>
                              <span class="btn-pagination">Prev</span>
                              <span class="btn-pagination">Next</span>
                              <span class="btn-pagination">Last</span>
                            </div>
                          </div>
                          <div class="suggestion-wrapper">
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Fouls pg: Fouls per game</li>
                                <li class="suggestion-item">Yel: Total yellow cards</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Fouls/Tackles: Fouls per tackle</li>
                                <li class="suggestion-item">Red pg: Red cards per game</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Pen pg: Penalties per game</li>
                                <li class="suggestion-item">Red: Total red cards</li>
                              </ul>
                            </div>
                            <div class="column-25">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Yel pg: Yellow cards per game</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="sub-tabs-2">
                        tab2
                      </div>
                      <div id="sub-tabs-3">
                        tab3
                      </div>
                    </div>
                    <!-- TAB Discipline -->
                  </div>
                  <div id="tabs-2">
                    <!-- TAB Results -->
                    tab2 - Results
                    <!-- TAB Results -->
                  </div>
                </div>

              </div>
            </div>
            <!-- Premier League Referee Statistics-->
          </div>
          <!-- ================END MAIN TAB 5============ -->
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>
<script>
  $(function() {

    $("#league-tabs").tabs({
      active: 0
    });

    $("#tables-main-tabs").tabs({
      active: 0
    })

    $("#tables-streaks-tabs").tabs({
      active: 0
    })
    $("#tables-standings-tabs").tabs({
      active: 0
    })
    $("#tables-form-tabs").tabs({
      active: 0
    })
    $("#premier-league-top-team-tabs").tabs({
      active: 0
    })

    $("#premier-league-top-players-tabs").tabs({
      active: 0
    })

    $("#premier-league-best-xi-tabs").tabs({
      active: 0
    })

    $("#premier-league-team-statistics-tabs").tabs({
      active: 0
    })

    $("#premier-league-team-statistics-summary-tabs").tabs({
      active: 0
    })

    $("#premier-league-positional-statistics-tabs").tabs({
      active: 0
    })

    $("#premier-league-positional-statistics-goal-types-tabs").tabs({
      active: 0
    })

    $("#premier-league-situational-statistics-tabs").tabs({
      active: 0
    })
    $("#premier-league-situational-statistics-goal-types-tabs").tabs({
      active: 0
    })

    $("#premier-league-situational-statistics-goal-types-ovveral-tabs").tabs({
      active: 0
    })

    $("#premier-league-player-statistics-tabs").tabs({
      active: 0
    })

    $("#premier-league-player-statistics-summary-tabs").tabs({
      active: 0
    })

    $("#premier-league-referee-statistics-tabs").tabs({
      active: 0
    })

    $("#premier-league-player-statistics-discipline-tabs").tabs({
      active: 0
    })

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
  });
</script>

</html>