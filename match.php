<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>
  <div class="match-wrapper">
    <div class="match-banner">
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
        <div class="list-club">
          <div class="column-40  club-item">
            <div class="club-info">
              <h2 class="club-name">Manchester United</h2>
              <img src="./images/mu-club.png" class="club-image" alt="">
            </div>
          </div>
          <div class="column-20">
            <div class="match-score__wrapper">
              <div class="match-score">
                <span>1</span>
                <span>:</span>
                <span>0</span>
              </div>
              <div class="match-detail">
                <div class="row-detail">
                  <div class="column-50 text-right">Elapsed:</div>
                  <div class="column-50">
                    <span class="match-label">FT</span>
                  </div>
                </div>
                <div class="row-detail">
                  <div class="column-50 text-right">Half time:</div>
                  <div class="column-50">1 : 0</div>
                </div>
                <div class="row-detail">
                  <div class="column-50 text-right">Full time:</div>
                  <div class="column-50">1 : 0</div>
                </div>
                <div class="row-detail">
                  <div class="column-50 text-right">Kick off:</div>
                  <div class="column-50">16:00</div>
                </div>
                <div class="row-detail">
                  <div class="column-50 text-right">Date:</div>
                  <div class="column-50">June 22, 2022</div>
                </div>
              </div>
            </div>
          </div>
          <div class="column-40 club-item">
            <div class="club-info">
              <h2 class="club-name">Liverpool</h2>
              <img src="./images/inter-club.png" class="club-image" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="match-content__wrapper">
        <div id="match-tabs">
          <ul class="match-main-nav">
            <li><a href="#main-tabs-1">Head to Head</a></li>
            <li><a href="#main-tabs-2">Betting</a></li>
            <li><a href="#main-tabs-3">Match Centre</a></li>
            <li><a href="#main-tabs-4">Match Report</a></li>
          </ul>
          <!-- ===========START MAIN TAB 1=========== -->
          <div id="main-tabs-1">tab1</div>
          <!-- ===========END  MAIN TAB 1=========== -->

          <!-- ===========START MAIN TAB 2=========== -->
          <div id="main-tabs-2">tab2</div>
          <!-- ===========END  MAIN TAB 2=========== -->


          <!-- ===========START MAIN TAB 3(Match Centre)=========== -->
          <div id="main-tabs-3">
            <div class="match-center-wrapper">
              <div id="match-centre-tabs">
                <ul class="match-center-sub-nav ">
                  <li class="sub-nav-item"><a href="#sub-tab-1">Summary</a></li>
                  <li class="sub-nav-item"><a href="#sub-tab-2">Player Statistics</a></li>
                </ul>
                <div id="sub-tab-1">
                  <div class="match-center-summary">
                    <h3 class="title">Timeline</h3>
                    <div class="table-5-wrapper">
                      <div class="table-row">
                        <div class="list-player left">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-bong" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                              <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="timer">
                          <span class="time-label">27'</span>
                        </div>
                        <div class="list-player right"></div>
                      </div>

                      <div class="table-row">
                        <div class="list-player left">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-bong" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                              <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                            </svg>
                          </div>
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-A" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                              <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right"></div>
                      </div>

                      <div class="table-row">
                        <div class="list-player left"></div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-mui-ten-xanh" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.1801 6.02938L12.1801 18.3823" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.3608 11.0117L12.18 6.02937L17 11.0117" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-mui-ten-do" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12.1801 17.9706L12.1801 5.61768" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.3608 12.9883L12.18 17.9706L17 12.9883" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="list-player left"></div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-A" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                              <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-bong" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                              <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                            </svg>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="list-player left">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="the-do" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect width="16" height="20" rx="3" fill="#E34B31" />
                            </svg>
                          </div>
                        </div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right">
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="list-player left">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-A" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                              <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-bong" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                              <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                            </svg>
                          </div>
                        </div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right">
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="list-player left">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>

                            <svg id="icon-mui-ten-xanh" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.1801 6.02938L12.1801 18.3823" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.3608 11.0117L12.18 6.02937L17 11.0117" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                          </div>
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg id="icon-mui-ten-do" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12.1801 17.9706L12.1801 5.61768" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.3608 12.9883L12.18 17.9706L17 12.9883" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                        </div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right">
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="list-player left">
                        </div>
                        <div class="timer">
                          <span class="time-label">89+2'</span>
                        </div>
                        <div class="list-player right">
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.1801 6.02938L12.1801 18.3823" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.3608 11.0117L12.18 6.02937L17 11.0117" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="player-item">
                            <span class="player-name">Gabriel Martinelli(1-0)</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12.1801 17.9706L12.1801 5.61768" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M7.3608 12.9883L12.18 17.9706L17 12.9883" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="match-centre-summary-tabs" class="match-centre-summary-tabs">
                      <ul class="match-center-nav">
                        <li><a href="#tabs-1">Match Centre</a></li>
                        <li><a href="#tabs-2">Match Commentary</a></li>
                        <li><a href="#tabs-3">Chalkboard</a></li>
                        <li><a href="#tabs-4">Heatmaps</a></li>
                        <li><a href="#tabs-5">Live stream</a></li>
                      </ul>
                      <div id="tabs-1">
                        <div class="match-centre-summary-content"> tab1</div>
                      </div>
                      <div id="tabs-2">
                        <div class="match-centre-summary-content">tab2</div>
                      </div>
                      <div id="tabs-3">
                        <div class="match-centre-summary-content">tab3</div>
                      </div>
                      <div id="tabs-4">
                        <div class="match-centre-summary-content">tab4</div>
                      </div>
                      <div id="tabs-5">
                        <div class="match-centre-summary-content">tab5</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="sub-tab-2">
                  <!-- club-1 -->
                  <div class="table-4-wrapper">
                    <div class="table-title">
                      <img src="./images/mc-club.png" alt="" />
                      <span class="club-name">Manchester United</span>
                    </div>
                    <div id="match-centre-club-1-tabs">
                      <ul class="match-center-nav">
                        <li><a href="#tabs-1">Standings</a></li>
                        <li><a href="#tabs-2">Offensive</a></li>
                        <li><a href="#tabs-3">Defensive</a></li>
                        <li><a href="#tabs-4">Passing</a></li>
                      </ul>
                      <div id="tabs-1">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-2">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-3">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-4">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- club-1 -->

                  <!-- club-2 -->
                  <div class="table-4-wrapper">
                    <div class="table-title">
                      <img src="./images/lei-club.png" alt="" />
                      <span class="club-name">Liverpool</span>
                    </div>
                    <div id="match-centre-club-2-tabs">
                      <ul class="match-center-nav">
                        <li><a href="#tabs-1">Standings</a></li>
                        <li><a href="#tabs-2">Offensive</a></li>
                        <li><a href="#tabs-3">Defensive</a></li>
                        <li><a href="#tabs-4">Passing</a></li>
                      </ul>
                      <div id="tabs-1">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-2">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-3">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs-4">
                        <div class="table-content">
                          <div class="table-heading">
                            <div class="player-info">Player</div>
                            <div class="match-value">
                              <div class="table-column">Shots</div>
                              <div class="table-column">ShotsOT</div>
                              <div class="table-column">Keypasses</div>
                              <div class="table-column">PA%</div>
                              <div class="table-column">AerialsWon</div>
                              <div class="table-column">Touchers</div>
                              <div class="table-column text-danger">Rating</div>
                              <div class="table-column">Key Events</div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="table-row">
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
                            <div class="match-value">
                              <div class="table-column">3</div>
                              <div class="table-column">0</div>
                              <div class="table-column">2</div>
                              <div class="table-column">86.5</div>
                              <div class="table-column">1</div>
                              <div class="table-column">28</div>
                              <div class="table-column text-danger">7.67</div>
                              <div class="table-column">
                                <div class="key-events">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                    <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                                  </svg>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                    <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- club-2 -->

                </div>
              </div>
            </div>
          </div>
          <!-- ===========END  MAIN TAB 3(Match Centre)=========== -->


          <!-- ===========START MAIN TAB 4(Match Report)=========== -->
          <div id="main-tabs-4">
            <div class="match-report-wrapper">
              <h3 class="match-title">Manchester United</h3>
              <div class="table-wrapper">
                <div class="table-heading">Strengths</div>
                <div class="table-content">
                  <div class="column-50">
                    <ul>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Created a high number of chances relative to their possession</span>
                      </li>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Were effective at creating goalscoring opportunities through individual skill</span>
                      </li>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Were effective at creating goalscoring opportunities from the flanks</span>
                      </li>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Were effective at creating goalscoring opportunities from set-pieces</span>
                      </li>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Were strong at finishing</span>
                      </li>
                    </ul>
                  </div>
                  <div class="column-50">
                    <ul>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Stole the ball often from the opposition</span>
                      </li>
                      <li>
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1402_1335)">
                            <path d="M2.5 6.5L5 9L10 4" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_1402_1335">
                              <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Were effective at creating goalscoring opportunities from long shot situations</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="table-wrapper">
                <div class="table-heading">Weaknesses</div>
                <div class="table-content">
                  <div class="column-50">
                    <ul>
                      <li>
                        <span class="text-grey">Team has no significant weaknesses</span>
                      </li>
                    </ul>
                  </div>
                  <div class="column-50">
                    <ul>
                      <li>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_131_3536)">
                            <path d="M9 3L3 9" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 3L9 9" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_131_3536">
                              <rect width="12" height="12" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Lost possession often</span>
                      </li>
                      <li>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_131_3536)">
                            <path d="M9 3L3 9" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 3L9 9" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_131_3536">
                              <rect width="12" height="12" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Gave away a lot of free-kicks around the box</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="table-wrapper">
                <div class="table-heading">Weaknesses</div>
                <div class="table-content">
                  <div class="column-50">
                    <ul>
                      <li>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_131_3529)">
                            <rect x="4" y="4" width="4" height="4" rx="2" fill="#1A202C" />
                          </g>
                          <defs>
                            <clipPath id="clip0_131_3529">
                              <rect width="12" height="12" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>

                        <span>Attacked down the right sides</span>
                      </li>
                    </ul>
                  </div>
                  <div class="column-50">
                    <ul>
                      <li>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_131_3529)">
                            <rect x="4" y="4" width="4" height="4" rx="2" fill="#1A202C" />
                          </g>
                          <defs>
                            <clipPath id="clip0_131_3529">
                              <rect width="12" height="12" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                        <span>Attacked down the right side</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Situational Report -->
              <div class="situational-report-wrapper">
                <h3 class="match-title">Situational Report</h3>
                <div id="situational-report-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Attemp Types</a></li>
                    <li><a href="#tabs-2">Pass Types</a></li>
                    <li><a href="#tabs-3">Card Situations</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="situational-report-content">
                      <h4 class="content-title">Attemp Types</h4>
                      <div class="attemp-types-table">
                        <div class="table-heading d-flex">
                          <div class="column-20 text-right text-score">6</div>
                          <div class="column-60 text-center">Total</div>
                          <div class="column-20 d-flex text-score">10</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="column-20 text-right text-score">4</div>
                          <div class="column-60 text-center">Open Play</div>
                          <div class="column-20 text-left text-score">8</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="column-20 text-right text-score">4</div>
                          <div class="column-60 text-center">Set Piece</div>
                          <div class="column-20 text-left text-score">6</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="column-20 text-right text-score">0</div>
                          <div class="column-60 text-center">Counter Attack</div>
                          <div class="column-20 text-left text-score">3</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="column-20 text-right text-score">0</div>
                          <div class="column-60 text-center">Penalty</div>
                          <div class="column-20 text-left text-score">0</div>
                        </div>
                        <div class="table-row d-flex">
                          <div class="column-20 text-right text-score">0</div>
                          <div class="column-60 text-center">Own Goal</div>
                          <div class="column-20 text-left text-score">0</div>
                        </div>
                      </div>
                      <div class="total-wrapper">
                        <h4 class="content-title">Total</h4>
                        <div class="compare-wrapper">
                          <div class="compare-item d-flex">
                            <div class="column-30 text-right">
                              <div class="red-process">
                                <div class="progress flex-end">
                                  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="column-40 d-flex">
                              <div class="column-25 text-center text-score">6</div>
                              <div class="column-50 text-center">Shot</div>
                              <div class="column-25 text-center text-score">10</div>
                            </div>
                            <div class="column-30 text-left">
                              <div class="blue-process">
                                <div class="progress flex-start">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="compare-item d-flex">
                            <div class="column-30 text-right">
                              <div class="red-process">
                                <div class="progress flex-end">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="column-40 d-flex">
                              <div class="column-25 text-center text-score">1</div>
                              <div class="column-50 text-center">Goals</div>
                              <div class="column-25 text-center text-score">0</div>
                            </div>
                            <div class="column-30 text-left">
                              <div class="blue-process">
                                <div class="progress flex-start">
                                  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="compare-item d-flex">
                            <div class="column-30 text-right">
                              <div class="red-process">
                                <div class="progress flex-end">
                                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="column-40 d-flex">
                              <div class="column-25 text-center text-score">16%</div>
                              <div class="column-50 text-center">Conversion Rate</div>
                              <div class="column-25 text-center text-score">22%</div>
                            </div>
                            <div class="column-30 text-left">
                              <div class="blue-process">
                                <div class="progress flex-start">
                                  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-2">
                    tab2
                  </div>
                  <div id="tabs-3">
                    tab2
                  </div>
                </div>
              </div>
              <!-- Situational Report -->

              <!-- Positional Report -->
              <div class="positional-report-wrapper">
                <h3 class="match-title">Positional Report</h3>
                <div id="positional-report-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Attack Sides</a></li>
                    <li><a href="#tabs-2">Shot Directions</a></li>
                    <li><a href="#tabs-3">Shot Zones</a></li>
                    <li><a href="#tabs-4">Action Zones</a></li>
                    <li><a href="#tabs-5">Player Positions</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="positional-report-content">
                      <div class="visual-match">
                        <div class="visual-matchp-item"></div>
                        <div class="visual-matchp-item"></div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-2">
                    Shot Directions
                  </div>
                  <div id="tabs-3">
                    Shot Zones
                  </div>
                  <div id="tabs-4">
                    Action Zones< </div>
                      <div id="tabs-5">
                        Player Positions
                      </div>
                  </div>
                </div>
                <!-- Positional Report -->
              </div>
            </div>
            <!-- ===========END  MAIN TAB 4(Match Report)=========== -->
          </div>
        </div>
      </div>
    </div>
    <?php include "templates/footer.php"; ?>
</body>

<script>
  $(function() {
    $("#match-tabs").tabs({
      active: 3
    });

    $("#situational-report-tabs").tabs({
      active: 0
    })

    $("#positional-report-tabs").tabs({
      active: 0
    })

    $("#match-centre-tabs").tabs({
      active: 0
    })

    $("#match-centre-summary-tabs").tabs({
      active: 0
    })

    $("#match-centre-club-1-tabs").tabs({
      active: 0
    })
    $("#match-centre-club-2-tabs").tabs({
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