<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>
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
          <div class="d-flex align-items-start">
            <!-- Nav tabs  data-bs-target(button) = id(divContent) -->
            <div class="nav flex-column " id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active customer-nav-link" id="v-pills-2-way-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2-way" type="button" role="tab" aria-controls="v-pills-2-way" aria-selected="true">2-way</button>
              <button class="nav-link customer-nav-link" id="v-pills-odd-even-tab" data-bs-toggle="pill" data-bs-target="#v-pills-odd-even" type="button" role="tab" aria-controls="v-pills-odd-even" aria-selected="false">Odd/Even</button>
              <button class="nav-link customer-nav-link" id="v-pills-last-team-tab" data-bs-toggle="pill" data-bs-target="#v-pills-last-team" type="button" role="tab" aria-controls="v-pills-last-team" aria-selected="false">Last team to score</button>

            </div>
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
                   </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-odd-even" role="tabpanel" aria-labelledby="v-pills-odd-even-tab">
              <div class="tab-bet-content"></div>
              </div>
              <div class="tab-pane fade" id="v-pills-last-team" role="tabpanel" aria-labelledby="v-pills-last-team-tab">
              <div class="tab-bet-content"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "templates/footer.php"; ?>
</body>

</html>