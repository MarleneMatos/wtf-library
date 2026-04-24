<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="carousel" class="my-5">

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-24 col-lg-12 col-md-12">
                <h3 class="section__title">Carousel</h3>
                <!-- <h4 class="section__subtitle">List disabled, active, disabled link</h4> -->
            </div>
        </div>


        <div class="row">
            <?php include('carousel-slide.php'); ?>
        </div>
        <hr class="my-4">

        <div class="row d-flex justify-content-center">
            <div class="col-sm-24 col-lg-12 col-md-12">
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reprehenderit quidem hic ipsam vero eligendi recusandae amet sed? A, eligendi esse magnam consequuntur culpa aspernatur. Nulla dolores quod dignissimos itaque.</p>
            </div>
            <div class="col-sm-24 col-lg-12 col-md-12">
                <?php include('carousel-slide-auto.php'); ?>
            </div>
        </div>
    </div>
</section>