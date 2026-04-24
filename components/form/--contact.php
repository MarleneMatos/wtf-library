<form class="form-contact">
  <!--
      <?php //include(SITE_ROOT . '/components/wtf-icons/logo-wtf.php'); ?>
      <h1 class="h3 mb-3 fw-normal">Contact us</h1>-->
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" placeholder="Name" />
        <label for="floatingName">Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <textarea cols="40" rows="10" maxlength="2000" class="form-control" id="floatingMessage" aria-invalid="false" placeholder="Message" name="your-message"></textarea>
        <label for="floatingMessage">Message</label>
      </div>
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault" />
        <label class="form-check-label" for="checkDefault">GDPR Text</label>
      </div>
      <button class="btn btn-primary py-2" type="submit">
        Log in
      </button>

    </form>