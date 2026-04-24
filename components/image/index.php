<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php
    include('../../config.php'); // Include your config first
    include(SITE_ROOT . '/head.php'); ?>
</head>

<body id="wtfTheme" class="wtf-line">
    <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

    <main>
        <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="table" class="my-5">
            <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
                <div class="row">
                    <h3 class="h1 wtf">Table</h3>
                </div>

                <div class="row">
                    <?php include('table.php'); ?>
                </div>
            </div>
        </section>

    </main>
    <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>