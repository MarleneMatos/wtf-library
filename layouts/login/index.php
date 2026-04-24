<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/layouts/log-in/" />

  <meta name="theme-color" content="#00A19A" />
  <!-- <link href="sign-in.css" rel="stylesheet" />-->
  
</head>

  <body id="wtfTheme" class="wtf-line">
<?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main class="w-100 m-auto">

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> col-xl-10 col-xxl-8 px-4">
      <div class="row align-items-center g-lg-5 bg-100vh">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
            Vertically centered hero sign-up form
          </h1>
          <p class="col-lg-10 fs-4">
            Below is an example form built entirely with Bootstrap’s form
            controls. Each required form group has a validation state that can
            be triggered by attempting to submit the form without completing
            it.
          </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5 p-5 border rounded-3">
          <?php include(SITE_ROOT . '/components/log-in/form.php'); ?>
        </div>
      </div>
    </div>

    <!--
    <form>
      <?php //include(SITE_ROOT . '/components/wtf-icons/logo-wtf.php'); 
      ?>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault" />
        <label class="form-check-label" for="checkDefault">Remember me</label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">
        Log in
      </button>

    </form>-->
  </main>

  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>