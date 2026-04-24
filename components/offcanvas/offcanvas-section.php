<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="offcanvas" class="my-5">
<div class="row d-flex justify-content-center">
                        <div class="col-sm-24 col-lg-12 col-md-12">
                        <h3 class="section__title">Offcanvas | <span class="bg-warning">Under Development</span></h3>
      <!-- <h4 class="section__subtitle">List disabled, active, disabled link</h4> -->
                        </div>
                    </div>
                    
                <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Button with data-bs-target
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
                    </div>

                </section>