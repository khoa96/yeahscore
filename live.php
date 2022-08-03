<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="live-wrapper">
    <div class="header">
      <div class="play-match">
        <div class="player-wrapper">
          <div class="box-player">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VkGzajNpNwo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="box-chat">
            <div class="chat-header">
              <h4 class="box-title">Chat</h4>
              <div class="list-dot">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
            <div class="chat-content">
              <div class="list-message">
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
              </div>
            </div>
            <div class="chat-form">
              <div class="form-wrapper">
                <form action="#" method="#">
                  <input type="text" placeholder="Your comment" name="" value="">
                </form>
                <button class="btn-send">
                  <img src="./images/send.png" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="control">
          <div class="list-server">
            <button class="btn-server active">Server 1</button>
            <button class="btn-server">Server 2</button>
            <button class="btn-server">Server 3</button>
          </div>
          <ul class="list-contact">
            <li>
              <a href="#">
                <img src="./images/icon-facebook.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/icon-twitter.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/icon-share.png" alt="">
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container bet-wrapper">
        <div class="list-club">
          <div class="club-item">
            <span class="club-name">Manchester United</span>
            <img src="./images/mc-club.png" alt="">
          </div>
          <div class="club-item">
            <img src="./images/lei-club.png" alt="">
            <span class="club-name">Liverpool</span>
          </div>
        </div>

        <div class="table-bet">
          <div class="d-flex align-items-start table-bet-mb">
            <!-- Nav tabs  data-bs-target(button) = id(divContent) -->
            <div class="nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active customer-nav-link" id="v-pills-2-way-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2-way" type="button" role="tab" aria-controls="v-pills-2-way" aria-selected="true">2-way</button>
              <button class="nav-link customer-nav-link" id="v-pills-odd-even-tab" data-bs-toggle="pill" data-bs-target="#v-pills-odd-even" type="button" role="tab" aria-controls="v-pills-odd-even" aria-selected="false">Odd/Even</button>
              <button class="nav-link customer-nav-link" id="v-pills-last-team-tab" data-bs-toggle="pill" data-bs-target="#v-pills-last-team" type="button" role="tab" aria-controls="v-pills-last-team" aria-selected="false">Last team to score</button>

            </div>
            <!-- content tab 2-way -->
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-2-way" role="tabpanel" aria-labelledby="v-pills-2-way-tab">
                <div class="tab-bet-content">
                  <div class="bet-item">
                    <span class="step-title">1. Choose The Winning Team</span>
                    <div class="list-bet-club">
                      <div class="bet-club-item">
                        <img src="./images/mc-club.png" alt="">
                        <span class="club-name">Manchester United</span>
                        <span class="status">15% picked</span>
                      </div>
                      <div class="bet-club-item active">
                        <img src="./images/lei-club.png" alt="">
                        <span class="club-name">Liverpool</span>
                        <span class="status">51% picked</span>
                      </div>
                    </div>
                  </div>
                  <div class="bet-item">
                    <span class="step-title">2. You bet</span>
                    <div class="choose-price">
                      <div class="list-price">
                        <span class="price-item">$1</span>
                        <span class="price-item">$2</span>
                        <span class="price-item">$5</span>
                        <span class="price-item">$10</span>
                      </div>

                      <p class="win-message">
                        If win, you get: <span class="win-price">$50</span>
                      </p>
                    </div>
                    <div class="input-form">
                      <img src="./images/icon-dollar.png" class="icon-dollar" alt="" />
                      <form action="#" method="#">
                        <input type="text" name="" value="" placeholder="Enter">
                      </form>
                    </div>

                    <div class="box-submit">
                      <p class="intro-message">
                        <img src="./images/icon-infor.png" alt="" />
                        <span>Rule of Double Chance</span>
                      </p>
                      <button class="btn-confirm">Confirm</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- content tab 2-way -->
              <div class="tab-pane fade" id="v-pills-odd-even" role="tabpanel" aria-labelledby="v-pills-odd-even-tab">
                <div class="tab-bet-content">tab2</div>
              </div>
              <div class="tab-pane fade" id="v-pills-last-team" role="tabpanel" aria-labelledby="v-pills-last-team-tab">
                <div class="tab-bet-content">tab3</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="live-main-content">
    <div class="container wrapper-content">
      <!-- MAIN TAB -->
      <nav>
        <div class="nav nav-tabs" id="live-main-tab" role="tablist">
          <button class="nav-link active nav-link-customer" data-bs-toggle="tab" data-bs-target="#nav-head-to-head" type="button" role="tab" aria-selected="true">Head to Head</button>
          <button class="nav-link nav-link-customer" data-bs-toggle="tab" data-bs-target="#nav-betting" type="button" role="tab" aria-selected="false">Betting</button>
          <button class="nav-link nav-link-customer" data-bs-toggle="tab" data-bs-target="#nav-match-centre" type="button" role="tab" aria-selected="false">Match Centre</button>
        </div>
      </nav>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="nav-head-to-head" role="tabpanel" aria-labelledby="nav-home-tab">
          <!-- ================HEAD TO HEAD ================-->
          <nav>
            <div class="nav nav-tabs nav-sub-tab" role="tablist">
              <button class="nav-link active sub-tab-customer" data-bs-toggle="tab" data-bs-target="#nav-summary" type="button" role="tab" aria-selected="true">Summary</button>
              <button class="nav-link sub-tab-customer" data-bs-toggle="tab" data-bs-target="#nav-team" type="button" role="tab" aria-selected="false">Team Statistics</button>
              <button class="nav-link sub-tab-customer" data-bs-toggle="tab" data-bs-target="#nav-player" type="button" role="tab" aria-selected="false">Player Statistics</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="nav-summary" role="tabpanel">
              <!-- =================SUMMARY TAB CONTENT ============= -->
              <div class="table-1-wrapper">
                <h3 class="table-title">
                  Previous Meetings
                  <span class="sub-title">(Last 6 matches)</span>
                </h3>
                <div class="table-content">
                  <ul class="nav nav-tabs table-1-nav" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active nav-link-table-1-customer" data-bs-toggle="pill" data-bs-target="#tab-all" type="button" role="tab" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link  nav-link-table-1-customer" data-bs-toggle="pill" data-bs-target="#tab-home-as-away" type="button" role="tab" aria-selected="false">Home vs Away</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link  nav-link-table-1-customer" data-bs-toggle="pill" data-bs-target="#tab-away-as-home" type="button" role="tab" aria-selected="false">Away as Home</button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-all" role="tabpanel">
                      <!-- ==============ALL TAB IN TABLES ============= -->
                      <div class="table-content">
                        <div class="table-header">
                          <div class="club-info">
                            <img src="./images/mu-club.png" class="club-image" alt="" />
                            <div class="list-card">
                              <div class="card-item">
                                <img src="./images/icon-ball.png" class="icon-ball" alt="" />
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <span class="card red-card"></span>
                                <span class="number">0</span>
                              </div>
                              <div class="card-item">
                                <span class="card yellow-card"></span>
                                <span class="number">12</span>
                              </div>
                            </div>
                          </div>
                          <div class="list-progress">
                            <div class="progress-item">
                              <span class="label">Won (50%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item">
                              <span class="label">Drew (12%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item"> <span class="label">Won (33%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="club-info">
                            <div class="list-card">
                              <div class="card-item">
                                <img src="./images/icon-ball.png" class="icon-ball" alt="" />
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <span class="card red-card"></span>
                                <span class="number">20</span>
                              </div>
                              <div class="card-item">
                                <span class="card yellow-card"></span>
                                <span class="number">43</span>
                              </div>
                            </div>
                            <img src="./images/inter-club.png" class="club-image" alt="" />
                          </div>
                        </div>
                        <div class="list-timeline">
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- collapse title for MOBILE -->
                              <div class="collapse-title-mb">
                              </div>
                              <!-- END collapse title for MOBILE -->
                            </button>
                            <div class="timeline-content">

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <img src="./images/icon-ball.png" alt="" class="icon-ball">
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <span class="card red-card">
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <span class="card yellow-card">
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <img src="./images/icon-ball.png" alt="" class="icon-ball">
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ==============ALL TAB IN TABLES ============= -->
                    </div>
                    <div class="tab-pane fade" id="tab-home-as-away" role="tabpanel">Hom as Away</div>
                    <div class="tab-pane fade" id="tab-away-as-home" role="tabpanel">Away as Home</div>
                  </div>
                </div>
              </div>

              <div class="table-2-wrapper">
                <h3 class="table-title">Tables</h3>
                <div class="table-content">
                  <nav>
                    <div class="nav nav-tabs table-2-navs" role="tablist">
                      <button class="nav-link active nav-link-customer" data-bs-toggle="tab" data-bs-target="#nav-standing" type="button" role="tab" aria-selected="true">Standings</button>
                      <button class="nav-link nav-link-customer" data-bs-toggle="tab" data-bs-target="#nav-form" type="button" role="tab" aria-selected="false">Form</button>
                      <button class="nav-link nav-link-customer" data-bs-toggle="tab" data-bs-target="#nav-streak" type="button" role="tab" aria-selected="false">Streaks</button>
                    </div>
                  </nav>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="nav-standing" role="tabpanel">
                      <!-- ==========STADINGS CONTENT TAB ================ -->
                      <div class="table-content">
                        <ul class="nav nav-tabs standing-navs" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active nav-link-table-2-customer" data-bs-toggle="pill" data-bs-target="#tab-overall" type="button" role="tab" aria-selected="true">Overall</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link  nav-link-table-2-customer" data-bs-toggle="pill" data-bs-target="#tab-home" type="button" role="tab" aria-selected="false">Home</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link  nav-link-table-2-customer" data-bs-toggle="pill" data-bs-target="#tab-away" type="button" role="tab" aria-selected="false">Away</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link  nav-link-table-2-customer" data-bs-toggle="pill" data-bs-target="#tab-wide" type="button" role="tab" aria-selected="false">Wide</button>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane fade show active" id="tab-overall" role="tabpanel">
                            <div class="table-result">
                              <div class="table-row table-heading">
                                <div class="table-column"></div>
                                <div class="table-column"></div>
                                <div class="table-column"></div>
                                <div class="table-column"></div>
                                <div class="table-column"></div>
                                <div class="table-column"></div>
                              </div>
                              <div class="table-row">line2</div>
                              <div class="table-row">line3</div>
                              <div class="table-row">line4</div>
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
                          </div>
                          <div class="tab-pane fade" id="tab-home" role="tabpanel">Home content</div>
                          <div class="tab-pane fade" id="tab-away" role="tabpanel">Away content</div>
                          <div class="tab-pane fade" id="tab-wide" role="tabpanel">Wide contet5</div>
                        </div>
                      </div>
                      <!-- ==========STADINGS CONTENT TAB ================ -->
                    </div>
                    <div class="tab-pane fade" id="nav-form" role="tabpanel">Form content</div>
                    <div class="tab-pane fade" id="nav-streak" role="tabpanel">streak content</div>
                  </div>
                </div>
              </div>
              <!-- =================SUMMARY TAB CONTENT ============= -->
            </div>
            <div class="tab-pane fade" id="nav-team" role="tabpanel">team</div>
            <div class="tab-pane fade" id="nav-player" role="tabpanel">Player</div>
          </div>
          <!-- ================HEAD TO HEAD ================-->
        </div>
        <div class="tab-pane fade" id="nav-betting" role="tabpanel">beeting content</div>
        <div class="tab-pane fade" id="nav-match-centre" role="tabpanel">Match centre content</div>
      </div>
    </div>
  </div>
  <!-- END MAIN TAB -->
  <?php include "templates/footer.php"; ?>
</body>
<script>
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