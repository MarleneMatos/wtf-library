<!DOCTYPE html>
<!-- <html lang="en" data-bs-theme="dark"> -->
<html lang="en" data-bs-theme="auto">

<head>
    <?php
    include('../../config.php'); // Include your config first
    include(SITE_ROOT . '/head.php'); ?>
</head>

<body id="wtfTheme" class="wtf-line">

    <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>
    <!--
    <main data-bs-spy="scroll" data-bs-target="#wtfNav" data-bs-smooth-scroll="true" tabindex="0">
    -->
    <main>
        <?php include(SITE_ROOT . '/components/collapse/section.php'); ?>
    </main>


    <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>