<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
  </div>
  <div class="account-page-wrapper">
    <div class="container">
      <div class="account-content">
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

        <div class="account-info-wrapper">
          <div class="account-info">
            <img src="./images/account-image.png" alt="" class="account-image">
            <div class="account-description">
              <h3 class="account-name">messi</h3>
              <span class="email">messi@gmail.com</span>
            </div>
          </div>
          <div class="list-control">
            <button class="btn">Forgot password</button>
            <button class="btn">Sign out</button>
          </div>
        </div>

        <div class="table-item">
          <h3 class="account-title">Bet History</h3>
          <div class="table-content">
            <div class="table-row">
              <div class="column-30 text-left">2-way</div>
              <div class="column-30 text-left">
                <strong>
                  <span>Liverpool</span>
                </strong>
                <span>win</span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">2-way</div>
              <div class="column-30 text-left">
                <strong>
                  <span>Manchester United</span>
                </strong>
                <span>win</span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">Odd/Even</div>
              <div class="column-30 text-left">
                <span>Odd</span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">Last team to score</div>
              <div class="column-30 text-left">
                <span>
                  <strong>Liverpool</strong>
                </span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$14.5</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">2-way</div>
              <div class="column-30 text-left">
                <strong>
                  <span>Liverpool</span>
                </strong>
                <span>win</span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">2-way</div>
              <div class="column-30 text-left">
                <strong>
                  <span>Manchester United</span>
                </strong>
                <span>win</span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">Odd/Even</div>
              <div class="column-30 text-left">
                <span>Odd</span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-30 text-left">Last team to score</div>
              <div class="column-30 text-left">
                <span>
                  <strong>Liverpool</strong>
                </span>
              </div>
              <div class="column-30 text-right">
                <span class="text-strong">$14.5</span>
              </div>
            </div>
          </div>
          <div class="pagination">
            <button class="pagination-item btn-prev disabled">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.67372 2.037C4.59176 2.12829 4.55078 2.22862 4.55078 2.338C4.55078 2.44737 4.59176 2.54304 4.67372 2.625L8.93934 7L4.67372 11.375C4.59176 11.457 4.55078 11.5526 4.55078 11.662C4.55078 11.7714 4.59176 11.867 4.67372 11.949C4.75568 12.031 4.85134 12.0719 4.96072 12.0719C5.07009 12.0719 5.16576 12.0355 5.24772 11.9626L9.77322 7.30056C9.85518 7.2186 9.89616 7.11827 9.89616 6.99956C9.89616 6.88085 9.85518 6.78052 9.77322 6.69856L5.24772 2.03656C5.16576 1.96364 5.07009 1.92719 4.96072 1.92719C4.85134 1.92719 4.75568 1.96364 4.67372 2.03656V2.037Z" fill="#1A202C" />
              </svg>
            </button>
            <button class="pagination-item active">1</button>
            <button class="pagination-item">2</button>
            <button class="pagination-item">3</button>
            <button class="pagination-item">4</button>
            <button class="pagination-item">5</button>
            <button class="pagination-item btn-next">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.67372 2.037C4.59176 2.12829 4.55078 2.22862 4.55078 2.338C4.55078 2.44737 4.59176 2.54304 4.67372 2.625L8.93934 7L4.67372 11.375C4.59176 11.457 4.55078 11.5526 4.55078 11.662C4.55078 11.7714 4.59176 11.867 4.67372 11.949C4.75568 12.031 4.85134 12.0719 4.96072 12.0719C5.07009 12.0719 5.16576 12.0355 5.24772 11.9626L9.77322 7.30056C9.85518 7.2186 9.89616 7.11827 9.89616 6.99956C9.89616 6.88085 9.85518 6.78052 9.77322 6.69856L5.24772 2.03656C5.16576 1.96364 5.07009 1.92719 4.96072 1.92719C4.85134 1.92719 4.75568 1.96364 4.67372 2.03656V2.037Z" fill="#1A202C" />
              </svg>
            </button>
          </div>
        </div>

        <div class="table-item">
          <h3 class="account-title">Recharge history</h3>
          <div class="table-content">
            <div class="table-row">
              <div class="column-50 text-left">16/08/2022</div>
              <div class="column-50 text-right">
                <span class="text-strong">$23</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-50 text-left">17/08/2022</div>
              <div class="column-50 text-right">
                <span class="text-strong">$1</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-50 text-left">18/08/2022</div>
              <div class="column-50 text-right">
                <span class="text-strong">$65</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-50 text-left">19/08/2022</div>
              <div class="column-50 text-right">
                <span class="text-strong">$23.3</span>
              </div>
            </div>
            <div class="table-row">
              <div class="column-50 text-left">20/08/2022</div>
              <div class="column-50 text-right">
                <span class="text-strong">$21.8</span>
              </div>
            </div>
          </div>
          <div class="pagination">
            <button class="pagination-item btn-prev disabled">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.67372 2.037C4.59176 2.12829 4.55078 2.22862 4.55078 2.338C4.55078 2.44737 4.59176 2.54304 4.67372 2.625L8.93934 7L4.67372 11.375C4.59176 11.457 4.55078 11.5526 4.55078 11.662C4.55078 11.7714 4.59176 11.867 4.67372 11.949C4.75568 12.031 4.85134 12.0719 4.96072 12.0719C5.07009 12.0719 5.16576 12.0355 5.24772 11.9626L9.77322 7.30056C9.85518 7.2186 9.89616 7.11827 9.89616 6.99956C9.89616 6.88085 9.85518 6.78052 9.77322 6.69856L5.24772 2.03656C5.16576 1.96364 5.07009 1.92719 4.96072 1.92719C4.85134 1.92719 4.75568 1.96364 4.67372 2.03656V2.037Z" fill="#1A202C" />
              </svg>
            </button>
            <button class="pagination-item active">1</button>
            <button class="pagination-item">2</button>
            <button class="pagination-item">3</button>
            <button class="pagination-item">4</button>
            <button class="pagination-item">5</button>
            <button class="pagination-item btn-next">
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.67372 2.037C4.59176 2.12829 4.55078 2.22862 4.55078 2.338C4.55078 2.44737 4.59176 2.54304 4.67372 2.625L8.93934 7L4.67372 11.375C4.59176 11.457 4.55078 11.5526 4.55078 11.662C4.55078 11.7714 4.59176 11.867 4.67372 11.949C4.75568 12.031 4.85134 12.0719 4.96072 12.0719C5.07009 12.0719 5.16576 12.0355 5.24772 11.9626L9.77322 7.30056C9.85518 7.2186 9.89616 7.11827 9.89616 6.99956C9.89616 6.88085 9.85518 6.78052 9.77322 6.69856L5.24772 2.03656C5.16576 1.96364 5.07009 1.92719 4.96072 1.92719C4.85134 1.92719 4.75568 1.96364 4.67372 2.03656V2.037Z" fill="#1A202C" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

</html>