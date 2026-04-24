<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/layouts/contact/" />

</head>

<body id="wtfTheme" class="wtf-line d-flex align-items-center py-4 bg-body-tertiary">

  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main class=" w-100 m-auto">

    <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="contact" class="bg-primary bg-theme bg-100vh">

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
      <div class="row d-flex justify-content-center align-items-center text-center py-5">
        <h3 class="h1 h1-wtf">Contact</h3>
        <h4 class="text-center py-2">Let’s Have A Chat!</h4>
      </div>

      <div class="row d-flex justify-content-center pb-5">
        <div class="d-flex justify-content-center align-items-center">

          <ul class="nav-social">
            <?php include(SITE_ROOT . '/components/assets/wtf/wtf-wtf-social.php'); ?>
          </ul>

        </div>
      </div>

      <div class="bg-image-angle row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border border-primary-subtle shadow-lg" style="--wtf-bg-image: url('https://www.marlenematos.com/wp-content/themes/wtf-webtechfocus/assets/media/marvin-meyer-SYTO3xs06fU-unsplash.jpg');">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
          <h5 class="h3 py-2" style="color: var(--wtf-primary);">Hire me now</h5>
             <?php include(SITE_ROOT . '/components/forms/contact.php'); ?>
        </div>
      </div>
    </div>

  </section>

  <!--*

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> col-xl-10 col-xxl-8 px-4">
      <div class="row align-items-center g-lg-5 bg-100vh">
        
        <div class="col-md-10 mx-auto col-lg-7 py-5 border rounded-3 bg-body-tertiary">
          <?php //include(SITE_ROOT . '/components/forms/contact.php'); ?>
        </div>
        <div class="col-lg-5 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
            Vertically centered hero contact form
          </h1>
          <p class="col-lg-10 fs-4">
            Below is an example form built entirely with Bootstrap’s form
            controls. Each required form group has a validation state that can
            be triggered by attempting to submit the form without completing
            it.
          </p>
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