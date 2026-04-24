<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="https://library.webtechfocus.com/components/charts/" />
</head>

 <body id="wtfTheme" class="wtf-line">
    <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>


  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
    <div class="row">
      <main>
        <!--
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Share
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary">
                Export
              </button>
            </div>
            <button
              type="button"
              class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
              <svg class="bi" aria-hidden="true">
                <use xlink:href="#calendar3"></use>
              </svg>
              This week
            </button>
          </div>
        </div> -->


        <canvas class="my-4 w-100" id="lineChart"></canvas>
          
        <div class="row">
          <div class="col-6">
            <canvas
              class="my-4 w-100"
              id="pieChart"></canvas>
          </div>
          <div class="col-6">
            <canvas class="my-4 w-100" id="barChart"></canvas>
          </div>
        </div>




      </main>
    </div>
  </div>
  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
  <script src="lineChart.js"></script>
  <script src="pieChart.js"></script>
  <script src="barChart.js"></script>
</body>

</html>