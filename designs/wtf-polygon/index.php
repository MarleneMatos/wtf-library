<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php
    include('../../config.php'); // Include your config first
    include(SITE_ROOT . '/head.php'); ?>
</head>


<body id="wtfTheme" class="wtf-wtf">
     <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

<!--
    <main data-bs-spy="scroll" data-bs-target="#wtfNav" data-bs-smooth-scroll="true" tabindex="0">
-->
    <main>
    <?php include(SITE_ROOT . '/layouts/section.php'); ?>

    </main>



    <!--

    <hr class="wp-block-separator has-alpha-channel-opacity">
    <ul class="wp-block-list">
        <li>Accept or decline cookies,</li>
        <li>Manage preferences, or</li>
        <li>Withdraw consent at any time.</li>
    </ul>-->
    

    <?php
  include(SITE_ROOT . '/footer.php');
  ?>
</body>

</html>