<form class="form-login">
      <?php include(SITE_ROOT . '/components/content/brand/logo-wtfi-me-2.php'); ?>
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

    </form>