<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="pagination" class=" my-5">

  <div class="row">
    <h3 class="wtf-h1">Accordion</h3>
    <div class="wtf-h1--divider"></div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-sm-24 col-lg-12 col-md-12">
      <h3 class="section__title">Pagination | <span class="bg-warning">Under Development</span></h3>
      <!-- <h4 class="section__subtitle">List disabled, active, disabled link</h4> -->
    </div>
  </div>

  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
  <?php
  include('divider-demo.php');
  ?>
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">


    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>


  <?php
  include('divider-demo.php');
  ?>
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  <?php
  include('divider-demo.php');
  ?>
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
    <nav aria-label="...">
      <ul class="pagination pagination-lg">
        <li class="page-item active" aria-current="page">
          <span class="page-link">1</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
    </nav>
  </div>
  <?php
  include('divider-demo.php');
  ?>
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
    <nav aria-label="...">
      <ul class="pagination pagination-sm">
        <li class="page-item active" aria-current="page">
          <span class="page-link">1</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
    </nav>
  </div>
  <?php
  include('divider-demo.php');
  ?>
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  <?php
  include('divider-demo.php');
  ?>
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>

</section>