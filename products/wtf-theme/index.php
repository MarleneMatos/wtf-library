<!DOCTYPE html>
<!-- <html lang="en" data-bs-theme="dark"> -->
<html lang="en" data-bs-theme="auto">

<head>
    <?php
    include('../../config.php'); // Include your config first
    include(SITE_ROOT . '/head.php'); ?>
    <link rel="canonical" href="http://localhost/wtf-library/components/library/" />
</head>

<body id="wtfTheme" class="wtf-line">

    <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>
    <!--
    <main data-bs-spy="scroll" data-bs-target="#wtfNav" data-bs-smooth-scroll="true" tabindex="0">
    -->
    <div id="wtfLibrary">
        <?php include(SITE_ROOT . '/products/wtf-theme/section.php'); ?>
    </div>


    <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>