<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="toast" class="my-5">
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="row">
            <h3 class="h1 wtf">Toast</h3>
            <!-- <h4 class="text-center py-2"><span class="bg-warning">Needs to be enabled in js</span></h4> -->
        </div>
    </div>

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#00A19A"></rect>
                    </svg>
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>
    </div>


</section>