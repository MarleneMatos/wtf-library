    <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="progress" class="my-5">
        <div class="row">
            <h3 class="h1 wtf">Progress</h3>

            <!-- <h4 class="text-center py-2"><span class="bg-warning">Needs to be enabled in js</span></h4> -->
        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 0%"></div>
            </div>
        </div>



        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example style="width: 25%" and Labels
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 25%">25%</div>
            </div>
        </div>



        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example style="width: 50%" and Long label text dark color
            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar overflow-visible text-dark" style="width: 50%">Long label text for the progress bar, set to a dark color</div>
            </div>
        </div>



        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example style="width: 75%"
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 75%"></div>
            </div>
        </div>






        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example w-{75}
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar w-75"></div>
            </div>
        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example w-{100}
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar w-100"></div>
            </div>
        </div>


        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example 1px high
            <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                <div class="progress-bar" style="width: 25%"></div>
            </div>
        </div>
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Example 20px high
            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                <div class="progress-bar" style="width: 25%"></div>
            </div>
        </div>
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Backgrounds
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-success" style="width: 25%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-info" style="width: 50%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-warning" style="width: 75%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-danger" style="width: 100%"></div>
            </div>
        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Multiple bars
            <div class="progress-stacked">
                <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                    <div class="progress-bar bg-success"></div>
                </div>
                <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <div class="progress-bar bg-info"></div>
                </div>
            </div>
        </div>


        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Striped
            <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped" style="width: 10%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped bg-warning" style="width: 75%"></div>
            </div>
            <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%"></div>
            </div>
        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            Animated stripes

            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
            </div>
        </div>

    </section>