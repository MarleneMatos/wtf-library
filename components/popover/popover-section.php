    <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="popover" class="my-5">

        <div class="row">
            <h3 class="h1 wtf">Popover </h3>

            <h4 class="text-center py-2"><span class="bg-warning">Needs to be enabled in js</span></h4>
        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
        </div>
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                Popover on top
            </button>
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                Popover on right
            </button>
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                Popover on bottom
            </button>
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                Popover on left
            </button>
        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <div class="row">
                <div class="col-24">added in js Dismissible popover</div>
                <div class="col-24">
                    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                </div>
            </div>
        </div>


    </section>