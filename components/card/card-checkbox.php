
<label for="WtfCore" class="col wtf-select">
    <input type="checkbox" id="WtfCore" name="WtfCore" checked="">
    <div class="card product mb-4 rounded-3 shadow-sm">

        <div class="card-header py-3">
            <span class="wtf-select-bg"></span>
            <h4 class="h3">Service Area</p>
                <h4 class="h1">Product Name</p>
                <!--
                    <div class="productSeparator"></div>
                    <div class="products row">
                        <p class="col">Feature</p>
                        <p class="col"><a href="#" target="_blank" class="">Link</a></p>
                    </div>-->
        </div>

        <div class="card-details">
            <?php include(SITE_ROOT . '/components/accordions/accordion.php'); ?>
        </div>
        <div class="card-body">
            <p class="">Additional Price</p>
            <?php include(SITE_ROOT . '/components/content/demo/card-price.php'); ?>
        </div>
    </div>
</label>