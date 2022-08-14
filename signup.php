<?php include "templates/head.php"; ?>

<body>
  <div class="signup-wraper">
    <div class="container singup-content">
      <form action="#" method="#" class="signup-form">
        <div class="logo-wrapper">
          <img src="./images/logo.png" alt="">
        </div>
        <h3 class="form-title">Sign up</h3>

        <div class="input-item">
          <input type="text" name="" value="" placeholder="Email address" class="input-common" />
        </div>

        <div class="input-item">
          <input type="text" name="" value="" placeholder="Username" class="input-common" />
        </div>

        <div class="input-item">
          <input type="password" name="" value="" placeholder="Password" class="input-common" />
        </div>

        <div class="agree-box">
          <label class="checkbox-wrapper">
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
            I am over 18 and have read the T&Cs and privacy policy
          </label>

        </div>

        <div class="form-submit">
          <button class="btn-submit">Sign up</button>
        </div>

        <hr class="dash" />
        <span class="have-account-title">Already a member?</span>

        <div class="form-submit submit-signup">
          <a href="signin.html" class="btn-submit btn-signup">Sign in</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>