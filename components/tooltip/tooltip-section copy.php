<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="tooltip" class="my-5">
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <div class="row">
                <h3 class="h1 wtf">Tooltip</h3>

                <h4 class="text-center py-2"><span class="bg-warning">Needs to be enabled in js</span></h4>
            </div>

        </div>

        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <button type="button" class="btn btn-secondary"
                data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-custom-class="tooltip-wtf"
                data-bs-title="This top tooltip is themed via CSS variables.">
                Custom tooltip
            </button>
        </div>




        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p>
        </div>


        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                Tooltip on top
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
                Tooltip on right
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                Tooltip on bottom
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
                Tooltip on left
            </button>

            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                Tooltip with HTML
            </button>
        </div>

    </section>