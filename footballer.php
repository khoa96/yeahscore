<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>
  <div class="footballer-page-wrapper">
    <div class="footballer-banner">
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
        <div class="arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
            <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <a href="#" target="">
          <div class="category-item">
            <span>Cristiano Ronaldo</span>
          </div>
        </a>
      </div>
      <div class="container footballer-banner-content">
        <div class="footballer-detail">
          <img src="./images/footballer.png" alt="" class="footballer-image" />
          <div class="info-detail">
            <h2 class="footballer-name">Cristiano Ronaldo</h2>
            <div class="footballer-club">
              <img src="./images/mu-club.png" class="club-image" alt="">
              <h3 class="club-name">Manchester United</h3>
            </div>
            <div class="footballer-history">
              <ul class="history-item">
                <li>
                  <span>Name:</span>
                  <span>Cristiano Ronaldo</span>
                </li>
                <li>
                  <span>Current Team:</span>
                  <span>Manchester United</span>
                </li>
                <li>
                  <span>Age:</span>
                  <span>37 years old (05-02-1985)</span>
                </li>
                <li>
                  <span>Nationality:</span>
                  <div class="country-info">
                    <img src="./images/flag.png" alt="" class="flag-country" />
                    <span class="name-country">Portugal</span>
                  </div>
                </li>
              </ul>
              <ul class="history-item">
                <li>
                  <span>Full Name: </span>
                  <span>Cristiano Ronaldo dos Santos Aveiro</span>
                </li>
                <li>
                  <span>Shirt Number:</span>
                  <span>7</span>
                </li>
                <li>
                  <span>Height:</span>
                  <span>187cm</span>
                </li>
                <li>
                  <span>Positions:</span>
                  <span>Midfielder (Left), Forward</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="footballer-page-content">
        <div class="footballer-content__wrapper">
          <div id="footballer-tabs">
            <ul class="footballer-main-nav">
              <li><a href="#main-tabs-1">Summary</a></li>
              <li><a href="#main-tabs-2">Match Statistic</a></li>
              <li><a href="#main-tabs-3">Fixtures</a></li>
              <li><a href="#main-tabs-4">History</a></li>
            </ul>
            <!-- ===========START MAIN TAB 1 (Summary)=========== -->
            <div id="main-tabs-1">
              <!-- Current Participations -->
              <h3 class="footballer-title">Current Participations</h3>
              <div class="current-participations-wrapper">
                <div id="current-participations-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Summary</a></li>
                    <li><a href="#tabs-2">Defensive</a></li>
                    <li><a href="#tabs-3">Offensive</a></li>
                    <li><a href="#tabs-4">Passing</a></li>
                    <li><a href="#tabs-5">Detailed</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Summary -->
                    <div id="current-participations-summary-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="premier-league-team-statistics-summary-table">
                          <div class="current-participations-table">
                            <div class="table-row table-heading">
                              <div class="column-30 text-left">Tournament</div>
                              <div class="column-70 d-flex">
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
                              <div class="column-30 text-left">
                                <div class="tournament-info">
                                  <div class="tournament-image">
                                    <img src="./images/fifa.png" alt="">
                                  </div>
                                  <div class="tournament-name">
                                    <span>European Championship</span>
                                    <span class="league-name">Portugal</span>
                                  </div>
                                </div>
                              </div>
                              <div class="column-70 d-flex">
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
                              <div class="column-30 text-left">
                                <div class="tournament-info">
                                  <div class="tournament-image">
                                    <img src="./images/fifa.png" alt="">
                                  </div>
                                  <div class="tournament-name">
                                    <span>European Championship</span>
                                  </div>
                                </div>
                              </div>
                              <div class="column-70 d-flex">
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
                              <div class="column-30 text-left">
                                <div class="tournament-info">
                                  <div class="tournament-image">
                                    <img src="./images/fifa.png" alt="">
                                  </div>
                                  <div class="tournament-name">
                                    <span>European Championship</span>
                                    <span class="league-name">Portugal</span>
                                  </div>
                                </div>
                              </div>
                              <div class="column-70 d-flex">
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
                              <div class="column-30 text-left">
                                <div class="tournament-info">
                                  <div class="tournament-image">
                                  </div>
                                  <div class="tournament-name">
                                    <span>Total / Average</span>
                                  </div>
                                </div>
                              </div>
                              <div class="column-70 d-flex">
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
                          <div class="table-suggesstion">
                            <div class="suggestion-wrapper">
                              <div class="column-33">
                                <ul class="list-suggestion">
                                  <li class="suggestion-item">Mins: Minutes played</li>
                                  <li class="suggestion-item">Yel: Yellow card</li>
                                  <li class="suggestion-item">PS%: Pass success percentage</li>
                                </ul>
                              </div>
                              <div class="column-33">
                                <ul class="list-suggestion">
                                  <li class="suggestion-item">Goals: Total goals</li>
                                  <li class="suggestion-item">Red: Red card</li>
                                  <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                                </ul>
                              </div>
                              <div class="column-33">
                                <ul class="list-suggestion">
                                  <li class="suggestion-item">Assists: Total assists</li>
                                  <li class="suggestion-item">SpG: Shots per game</li>
                                  <li class="suggestion-item">MotM: Man of the match</li>
                                </ul>
                              </div>
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
                    <!-- TAB Passing -->
                    tab4 - Passing
                    <!-- TAB Passing -->
                  </div>
                  <div id="tabs-5">
                    <!-- TAB Detailed -->
                    tab4 - Detailed
                    <!-- TAB Detailed -->
                  </div>
                </div>
              </div>

              <!-- Current Participations -->


              <!-- Playing Positions -->
              <h3 class="footballer-title">Playing Positions</h3>
              <div class="playing-positions-wrapper">
                <div class="visual-match-wrapper">
                  <div class="visual-match"></div>
                  <p class="visual-desctiption">* Only tournaments with detailed coverage</p>
                </div>
                <div class="playing-positions-table">
                  <div class="table-row table-heading">
                    <div class="column-40">Position</div>
                    <div class="column-60 d-flex">
                      <div class="column-15 text-center">Apps</div>
                      <div class="column-15 text-center">Goals</div>
                      <div class="column-15 text-center">Assists</div>
                      <div class="column-15 text-center text-rating">Rating</div>
                    </div>
                  </div>
                  <div class="table-row">
                    <div class="column-40">FW<span class="text-label">(Forward Centre)</span></div>
                    <div class="column-60 d-flex">
                      <div class="column-15 text-center">40</div>
                      <div class="column-15 text-center">31</div>
                      <div class="column-15 text-center">2</div>
                      <div class="column-15 text-center text-rating">7.67</div>
                    </div>
                  </div>
                  <div class="table-row">
                    <div class="column-40">Sub<span class="text-label">(Substitute)</span></div>
                    <div class="column-60 d-flex">
                      <div class="column-15 text-center">40</div>
                      <div class="column-15 text-center">31</div>
                      <div class="column-15 text-center">2</div>
                      <div class="column-15 text-center text-rating">7.67</div>
                    </div>
                  </div>
                  <div class="table-row">
                    <div class="column-40">FWL<span class="text-label">(Forward Left)</span></div>
                    <div class="column-60 d-flex">
                      <div class="column-15 text-center">40</div>
                      <div class="column-15 text-center">31</div>
                      <div class="column-15 text-center">2</div>
                      <div class="column-15 text-center text-rating">7.67</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Playing Positions -->


              <!-- Latest Matches -->
              <h3 class="footballer-title">Latest Matches</h3>
              <div class="latest-matches-wrapper">
                <div class="latest-matches-table">
                  <div class="table-row table-heading">
                    <div class="column-20"></div>
                    <div class="column-15"></div>
                    <div class="column-25"></div>
                    <div class="column-25 text-right">Played'</div>
                    <div class="column-15 text-center text-rating">Rating</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon the-do">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="20" rx="3" fill="#E34B31" />
                        </svg>
                      </span>
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon the-vang">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon the-vang">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon the-do">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="20" rx="3" fill="#E34B31" />
                        </svg>
                      </span>
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon the-vang">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                </div>
              </div>
              <!-- Latest Matches -->

              <!-- Ronaldo Characteristics -->
              <h3 class="footballer-title">Ronaldo Characteristics</h3>
              <div class="footballer-characteristics-wrapper">
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
                          <span>PassingVery</span>
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
                          <span>Key passes</span>
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
                          <span>DribblingVery</span>
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
                          <span>Holding on to the ball</span>
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
                          <span>Long shots</span>
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
                          <span>Through balls</span>
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
                          <span>Taking set-pieces</span>
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
                          <span>Through balls</span>
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
                          <span>Taking set-pieces</span>
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
                          <span>Aerial Duels</span>
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
                          <span>Defensive contribution</span>
                        </li>
                      </ul>
                    </div>
                    <div class="column-50">
                    </div>
                  </div>
                </div>
                <div class="table-wrapper">
                  <div class="table-heading">Lionel Messi's Style of Play</div>
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
                          <span>Likes to dribble</span>
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
                          <span>Likes to shoot from distance</span>
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
                          <span>DribblingVery</span>
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
                          <span>Likes to cut inside</span>
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
                          <span>Does not dive into tackles</span>
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
                          <span>Plays the ball off the ground often</span>
                        </li>
                      </ul>
                    </div>
                    <div class="column-50"></div>
                  </div>
                </div>
                <p class="text-description">* Strengths, weaknesses and styles are calculated from statistics of each player's latest two seasons</p>
              </div>
              <!-- Ronaldo Characteristics -->
            </div>
            <!-- ===========END  MAIN TAB 1 (Summary)=========== -->

            <!-- ===========START MAIN TAB 2 (Match Statistic)=========== -->
            <div id="main-tabs-2">
              <h3 class="footballer-title">Match Statistics</h3>
              <div class="footballer-match-statistics-wrapper">
                <div id="footballer-match-statistics-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Summary</a></li>
                    <li><a href="#tabs-2">Defensive</a></li>
                    <li><a href="#tabs-3">Offensive</a></li>
                    <li><a href="#tabs-4">Passing</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Summary -->
                    <div id="footballer-match-statistics-summary-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="footballer-match-statistics-table">
                          <div class="table-row table-heading">
                            <div class="column-30 d-flex">
                              <div class="column-50 text-left">Opponent</div>
                              <div class="column-50 text-center">Date</div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">Position</div>
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
                            <div class="column-30 d-flex align-center">
                              <div class="column-50 text-left">
                                <div class="opponent-info">
                                  <span>Brighton (A)</span>
                                  <span class="score">
                                    <span>4</span>
                                    <span>-</span>
                                    <span>0</span>
                                  </span>
                                </div>
                              </div>
                              <div class="column-50 text-center">07-05-2022</div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex align-center">
                              <div class="column-50 text-left">
                                <div class="opponent-info">
                                  <span>Brighton (A)</span>
                                  <span class="score">
                                    <span>4</span>
                                    <span>-</span>
                                    <span>0</span>
                                  </span>
                                </div>
                              </div>
                              <div class="column-50 text-center">07-05-2022</div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex align-center">
                              <div class="column-50 text-left">
                                <div class="opponent-info">
                                  <span>Brighton (A)</span>
                                  <span class="score">
                                    <span>4</span>
                                    <span>-</span>
                                    <span>0</span>
                                  </span>
                                </div>
                              </div>
                              <div class="column-50 text-center">07-05-2022</div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex align-center">
                              <div class="column-50 text-left">
                                <div class="opponent-info">
                                  <span>Brighton (A)</span>
                                  <span class="score">
                                    <span>4</span>
                                    <span>-</span>
                                    <span>0</span>
                                  </span>
                                </div>
                              </div>
                              <div class="column-50 text-center">07-05-2022</div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex align-center">
                              <div class="column-50 text-left">
                                <div class="opponent-info">
                                  <span>Brighton (A)</span>
                                  <span class="score">
                                    <span>4</span>
                                    <span>-</span>
                                    <span>0</span>
                                  </span>
                                </div>
                              </div>
                              <div class="column-50 text-center">07-05-2022</div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
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
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Assists: Total assists</li>
                                <li class="suggestion-item">SpG: Shots per game</li>
                                <li class="suggestion-item">MotM: Man of the match</li>
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
            <!-- ===========END  MAIN TAB 2(Match Statistic)=========== -->


            <!-- ===========START MAIN TAB 3(Fixtures)=========== -->
            <div id="main-tabs-3">
              <h3 class="footballer-title">Cristiano Ronaldo's Match History</h3>
              <div class="latest-matches-wrapper">
                <div class="latest-matches-table">
                  <div class="table-row table-heading">
                    <div class="column-20"></div>
                    <div class="column-15"></div>
                    <div class="column-25"></div>
                    <div class="column-25 text-right">Played'</div>
                    <div class="column-15 text-center text-rating">Rating</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon the-do">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="20" rx="3" fill="#E34B31" />
                        </svg>
                      </span>
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon the-vang">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon the-vang">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15 flex-start">
                      <div class="league-info">
                        <img src="./images/flag-match-1.png" alt="">
                        <a href="#"><span class="league-name">Premier League</span></a>
                      </div>
                    </div>
                    <div class="column-10 text-center">29-03-2022</div>
                    <div class="column-35 flex-center list-club">
                      <div class="club-item">
                        <a href="#"><span class="club-name">Tottenham</span></a>
                        <img src="./images/inter-club.png" alt="" class="club-image">
                      </div>
                      <div class="score-wrapper">
                        <span class="score-item">3</span>
                        <span>:</span>
                        <span class="score-item">2</span>
                      </div>
                      <div class="club-item">
                        <a href="#"><span class="club-name">Manchester United</span></a>
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                    </div>
                    <div class="column-25 text-right played-wrapper">
                      <span class="icon the-do">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="20" rx="3" fill="#E34B31" />
                        </svg>
                      </span>
                      <span class="icon ghi-ban">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </span>
                      <span class="icon the-vang">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                        </svg>
                      </span>
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1396H10.2244L9.55239 15.9996H8.40039L11.4244 7.68359H12.6844L15.6964 15.9996H14.5444L13.8724 14.1396ZM13.5604 13.2516L12.0484 9.02759L10.5364 13.2516H13.5604Z" fill="#461A53" />
                        </svg>
                      </span>
                      <span class="time">90'</span>
                    </div>
                    <div class="column-15 text-center text-rating">7.67</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ===========END  MAIN TAB 3(Fixtures)=========== -->


            <!-- ===========START MAIN TAB 4(History)=========== -->
            <div id="main-tabs-4">
              <h3 class="footballer-title">Historical Participations</h3>
              <div class="historical-participations-wrapper">
                <div id="historical-participations-tabs">
                  <ul class="tables-main-nav">
                    <li><a href="#tabs-1">Summary</a></li>
                    <li><a href="#tabs-2">Defensive</a></li>
                    <li><a href="#tabs-3">Offensive</a></li>
                    <li><a href="#tabs-4">Passing</a></li>
                  </ul>
                  <div id="tabs-1">
                    <!-- TAB Summary -->
                    <div id="historical-participations-summary-tabs">
                      <ul class="tables-sub-nav">
                        <li><a href="#sub-tabs-1">Overall</a></li>
                        <li><a href="#sub-tabs-2">Home</a></li>
                        <li><a href="#sub-tabs-3">Away</a></li>
                      </ul>
                      <div id="sub-tabs-1">
                        <div class="premier-league-team-statistics-summary-table">
                          <div class="table-row table-heading">
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">Season</div>
                              <div class="column-4 text-left">Team</div>
                              <div class="column-4 text-left">Tournament</div>
                            </div>
                            <div class="column-70 d-flex">
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
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">2021/2022</div>
                              <div class="column-4 text-left">Real Madrid</div>
                              <div class="column-4 text-center">
                                <div class="tournament-info">
                                  <img src="./images/flag-match-1.png" alt="" />
                                  <span class="tournament-name">EPL</span>
                                </div>
                              </div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">2021/2022</div>
                              <div class="column-4 text-left">Real Madrid</div>
                              <div class="column-4 text-center">
                                <div class="tournament-info">
                                  <img src="./images/flag-match-1.png" alt="" />
                                  <span class="tournament-name">EPL</span>
                                </div>
                              </div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">2021/2022</div>
                              <div class="column-4 text-left">Real Madrid</div>
                              <div class="column-4 text-center">
                                <div class="tournament-info">
                                  <img src="./images/flag-match-1.png" alt="" />
                                  <span class="tournament-name">EPL</span>
                                </div>
                              </div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">2021/2022</div>
                              <div class="column-4 text-left">Real Madrid</div>
                              <div class="column-4 text-center">
                                <div class="tournament-info">
                                  <img src="./images/flag-match-1.png" alt="" />
                                  <span class="tournament-name">EPL</span>
                                </div>
                              </div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">2021/2022</div>
                              <div class="column-4 text-left">Real Madrid</div>
                              <div class="column-4 text-center">
                                <div class="tournament-info">
                                  <img src="./images/flag-match-1.png" alt="" />
                                  <span class="tournament-name">EPL</span>
                                </div>
                              </div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
                            </div>
                          </div>
                          <div class="table-row">
                            <div class="column-30 d-flex">
                              <div class="column-3 text-left">2021/2022</div>
                              <div class="column-4 text-left">Real Madrid</div>
                              <div class="column-4 text-center">
                                <div class="tournament-info">
                                  <img src="./images/flag-match-1.png" alt="" />
                                  <span class="tournament-name">EPL</span>
                                </div>
                              </div>
                            </div>
                            <div class="column-70 d-flex">
                              <div class="column-6 text-center">2</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">180</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center">5</div>
                              <div class="column-6 text-center">76</div>
                              <div class="column-6 text-center">4</div>
                              <div class="column-6 text-center">-</div>
                              <div class="column-6 text-center text-rating">7.67</div>
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
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Goals: Total goals</li>
                                <li class="suggestion-item">Red: Red card</li>
                                <li class="suggestion-item">AerialsWon: Aerial duels won per game</li>
                              </ul>
                            </div>
                            <div class="column-33">
                              <ul class="list-suggestion">
                                <li class="suggestion-item">Assists: Total assists</li>
                                <li class="suggestion-item">SpG: Shots per game</li>
                                <li class="suggestion-item">MotM: Man of the match</li>
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
            <!-- ===========END  MAIN TAB 4(History)=========== -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

<script>
  $(function() {
    $("#footballer-tabs").tabs({
      active: 0
    });

    $("#current-participations-tabs").tabs({
      active: 0
    });

    $("#current-participations-summary-tabs").tabs({
      active: 0
    });

    $("#historical-participations-tabs").tabs({
      active: 0
    });
    $("#historical-participations-summary-tabs").tabs({
      active: 0
    })

    $("#footballer-match-statistics-tabs").tabs({
      active: 0
    })
    $("#footballer-match-statistics-summary-tabs").tabs({
      active: 0
    })
  });
</script>

</html>