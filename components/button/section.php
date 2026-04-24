<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="buttons" class="my-5">
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
        <div class="row">
            <h3 class="h1 wtf">Buttons</h3>
        </div>
    </div>


    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button>
        </div>
    </div>

    <hr class="xl" />
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <a class="btn btn-primary" href="#" role="button">Link</a>
            <button class="btn btn-primary" type="submit">Button</button>
            <input class="btn btn-primary" type="button" value="Input">
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-primary" type="reset" value="Reset">
        </div>
    </div>

    <hr class="xl" />
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>
        </div>

    </div>

    <hr class="xl" />
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <button type="button" class="btn btn-primary btn-lg">Large button</button>
            <button type="button" class="btn btn-secondary btn-lg">Large button</button>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
            <button type="button" class="btn btn-secondary btn-sm">Small button</button>
            <button type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Custom button
            </button>
        </div>

    </div>

    <hr class="xl" />
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <button type="button" class="btn btn-primary" disabled>Primary button</button>
            <button type="button" class="btn btn-secondary" disabled>Button</button>
            <button type="button" class="btn btn-outline-primary" disabled>Primary button</button>
            <button type="button" class="btn btn-outline-secondary" disabled>Button</button>
        </div>
    </div>
    <hr class="xl" />

    <div class="row my-5">
        <h3 class="h1 wtf">Buttons</h3>

        <h4 class="text-center py-2">Button group</h4>
    </div>

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">



            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
            </div>
        </div>

    </div>

    <hr class="xl" />
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <div class="btn-group">
                <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
                <a href="#" class="btn btn-primary">Link</a>
                <a href="#" class="btn btn-primary">Link</a>
            </div>
        </div>

    </div>

    <hr class="xl" />
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
            </div>
        </div>
    </div>


    <hr class="xl" />
    <div class="row my-5">
        <h3 class="h1 wtf">Buttons</h3>

        <h4 class="text-center py-2">Button close</h4>
    </div>

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div class="d-flex gap-2 justify-content-center">
            <button type="button" class="btn-close" aria-label="Close"></button>
        </div>
    </div>

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> py-2 bg-primary">
        <div data-bs-theme="dark">
            <button type="button" class="btn-close" aria-label="Close"></button>
            <button type="button" class="btn-close" disabled aria-label="Close"></button>
        </div>
    </div>

    <hr class="xl" />

    <div class="d-flex gap-2 justify-content-center py-5">
        <button class="btn btn-primary btn-icon" type="button">
            <svg class="wtfi">
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-cross"></use>
            </svg>
            <span class="visually-hidden">Dismiss</span>
        </button>
        <button class="btn btn-outline-primary btn-icon" type="button">
            <svg class="wtfi">
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-cross"></use>
            </svg>
            <span class="visually-hidden">Dismiss</span>
        </button>
    </div>

    <div class="d-flex gap-2 justify-content-center pb-5">
        <button class="btn btn-primary btn-icon" type="button">
            <svg class="wtfi">
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-cross"></use>
            </svg>
            <span class="visually-hidden">Dismiss</span>
        </button>
        <button class="btn btn-outline-primary btn-icon" type="button">
            <svg class="wtfi">
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-cross"></use>
            </svg>
            <span class="visually-hidden">Dismiss</span>
        </button>
    </div>

    <hr class="xl" />

    <div class="d-flex gap-2 justify-content-center my-5">
        <button class="btn btn-primary rounded-pill px-3" type="button">Primary</button>
        <button class="btn btn-secondary rounded-pill px-3" type="button">Secondary</button>
        <button class="btn btn-success rounded-pill px-3" type="button">Success</button>
        <button class="btn btn-danger rounded-pill px-3" type="button">Danger</button>
        <button class="btn btn-warning rounded-pill px-3" type="button">Warning</button>
        <button class="btn btn-info rounded-pill px-3" type="button">Info</button>
        <button class="btn btn-light rounded-pill px-3" type="button">Light</button>
        <button class="btn btn-dark rounded-pill px-3" type="button">Dark</button>
        <button class="btn btn-link rounded-pill px-3" type="button">Link</button>
    </div>

    <hr class="xl" />

    <div class="col-lg-6 col-xxl-4 my-5 mx-auto">
        <div class="d-grid gap-2">
            <button class="btn btn-outline-secondary" type="button">Secondary action</button>
            <button class="btn btn-primary" type="button">Primary action</button>
        </div>
    </div>

    <hr class="xl" />

    <div class="d-flex gap-2 justify-content-center my-5">
        <button class="btn btn-primary d-inline-flex align-items-center" type="button">
            Primary icon
            <svg class="wtfi ms-2">
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-circle-right"></use>
            </svg>
        </button>
        <button class="btn btn-outline-secondary d-inline-flex align-items-center" type="button">
            Secondary icon
            <svg class="wtfi ms-2">
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-circle-right"></use>
            </svg>
        </button>
    </div>

    <hr class="xl" />

    <div class="d-flex gap-2 justify-content-center my-5">
        <button class="btn btn-primary" type="button" disabled="">
            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span class="visually-hidden" role="status">Loading...</span>
        </button>
        <button class="btn btn-primary" type="button" disabled="">
            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span role="status">Loading...</span>
        </button>
    </div>


</section>