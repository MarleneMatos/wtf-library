<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/products/wtf-counter/" />

</head>

<body id="wtfTheme" class="wtf-line">
  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main id="wtfMain" class="main-wtf">
    <section>
      <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
        <?php include(SITE_ROOT . '/products/wtf-counter/wtf-counter.php'); ?>
      </div>
    </section>
  </main>

  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
  <script src="http://localhost/wtf-library/components/charts/lineChart.js"></script>
  <script src="http://localhost/wtf-library/components/charts/pieChart.js"></script>
  <script src="http://localhost/wtf-library/components/charts/barChart.js"></script>
</body>

</html>