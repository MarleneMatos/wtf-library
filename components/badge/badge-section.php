<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="badge" class="my-5">
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> text-center">
        <div class="row">
            <h3 class="h1 wtf">Badge</h3>

        </div>
        <div class="row pt-5">
            <div class="col-sm-24 col-md-12">
                <?php include('wtf-php/badge-heading.php'); ?>
            </div>
            <div class="col-sm-24 col-md-12">
                <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
                    <button type="button" class="btn btn-primary">
                        Notifications <span class="badge text-bg-secondary">4</span>
                    </button>
                </div>
                <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
                    <button type="button" class="btn btn-primary position-relative">
                        Inbox
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>
                </div>
                <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
                    <button type="button" class="btn btn-primary position-relative">
                        Profile
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>


    </div>

</section>