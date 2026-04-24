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
        <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="checkout-form" class="my-5">
            <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
                <div class="row">
                    <h3 class="h1 wtf">Checkout form</h3>
                </div>

                    <?php include(SITE_ROOT . '/components/forms/checkout.php'); ?>
                
            </div>
        </section>

        <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="contact-form" class="my-5">
            <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
                <div class="row">
                    <h3 class="h1 wtf">Contact form</h3>
                </div>

                    <?php include(SITE_ROOT . '/components/forms/contact.php'); ?>
                
            </div>
        </section>

        <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="login-form" class="my-5">
            <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
                <div class="row">
                    <h3 class="h1 wtf">Login form</h3>
                </div>

                    <?php include(SITE_ROOT . '/components/forms/log-in.php'); ?>
                
            </div>
        </section>

        <!--
<section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?> "id="form" class="my-5">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-24 col-lg-12 col-md-12">
      <h3 class="section__title">Form | <span class="bg-warning">Under Development</span></h3>
      <h4 class="section__subtitle">Form Components</h4>
    </div>
  </div>


  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">

    <form>
      <p>Default select example</p>
      <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

      <p>Multiple select example</p>
      <select class="form-select" multiple aria-label="Multiple select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

      <p>Checkbox</p>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Default checkbox
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
          Checked checkbox
        </label>
      </div>

      <p>Example range</p>
      <label for="customRange1" class="form-label">Example range</label>
      <input type="range" class="form-range" id="customRange1">

      <p>Example range</p>
      <label for="customRange2" class="form-label">Example range</label>
      <input type="range" class="form-range" min="0" max="5" id="customRange2">


      <p>Input-group</p>
      <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>

<div class="mb-3">
  <label for="basic-url" class="form-label">Your vanity URL</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>



    </form>
  </div>

  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
  <p>validation</p>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
  </div>

  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
  <p class="toggleText">Custom Toggle True False</p>
                <div class="toggleTrueFalse" data-label-on="True" data-label-off="False">
                    <input type="checkbox" value="false" id="selectAllCats" class="toggleCheckBox" name="selectAll" checked />
                    <label class="clickToggle" for="selectAllCats">
                        <span class="checkCircle"></span>
                    </label>
                </div>
  </div>

  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
  <p>select box</p>

  <div class="test savingsChapter d-flex">

  <label for="box1" class="bcol-sm-24 col-md-12 col-lg-6 savingsChapterSelect">
                        <input type="checkbox" id="box1" name="box1" value="1" checked>
                        <div class="category column col-24 flexWrap savingsSection s-1 selected">
                            <div class="savingsProducts flexWrap">
                                <div class="chapterSection">
                                    <span class="chapterSelectBox"></span>
                                    <p class="chapterNumber">Chapter 1</p>
                                    <p class="chapterName">box1 </p>
                                    <div class="chapterSeparator"></div>
                                            <div class="products column col-24">
                                                
                                                    <p class="column col-30 productName">Name</p>
                                                   
                                            </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </label>


                    <label for="box2" class="bcol-sm-24 col-md-12 col-lg-6 savingsChapterSelect">
                        <input type="checkbox" id="box2" name="box2" value="1" checked>
                        <div class="category column col-24 flexWrap savingsSection s-1 selected">
                            <div class="savingsProducts flexWrap">
                                <div class="chapterSection">
                                    <span class="chapterSelectBox"></span>
                                    <p class="chapterNumber">Chapter 1</p>
                                    <p class="chapterName">box2 </p>
                                    <div class="chapterSeparator"></div>
                                            <div class="products column col-24">
                                                
                                                    <p class="column col-30 productName">Name</p>
                                                   
                                            </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="box3" class="bcol-sm-24 col-md-12 col-lg-6 savingsChapterSelect">
                        <input type="checkbox" id="box3" name="box3" value="1" checked>
                        <div class="category column col-24 flexWrap savingsSection s-1 selected">
                            <div class="savingsProducts flexWrap">
                                <div class="chapterSection">
                                    <span class="chapterSelectBox"></span>
                                    <p class="chapterNumber">Chapter 1</p>
                                    <p class="chapterName">box3 </p>
                                    <div class="chapterSeparator"></div>
                                            <div class="products column col-24">
                                                
                                                    <p class="column col-30 productName">Name</p>
                                                   
                                            </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="box4" class="bcol-sm-24 col-md-12 col-lg-6 savingsChapterSelect">
                        <input type="checkbox" id="box4" name="box4" value="1" checked>
                        <div class="category column col-24 flexWrap savingsSection s-1 selected">
                            <div class="savingsProducts flexWrap">
                                <div class="chapterSection">
                                    <span class="chapterSelectBox"></span>
                                    <p class="chapterNumber">Chapter 1</p>
                                    <p class="chapterName">box4 </p>
                                    <div class="chapterSeparator"></div>
                                            <div class="products column col-24">
                                                
                                                    <p class="column col-30 productName">Name</p>
                                                   
                                            </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </label>
  </div>


  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
  <p>select table row</p>


  <div class="test savingsDetails">
                <div class="columns col-24">
                        <div class="column hd-col-24 d-col-24 t-col-24 p-col-hidden m-col-hidden header">
                            <div class="columns col-5"><p>&nbsp;</p></div>
                            <div class="columns hd-col-6 d-col-6 t-col-6"><p>Product</p></div>
                            <div class="columns col-6"><p>Current Product(S)</p></div>
                            <div class="columns hd-col-6 d-col-6 t-col-6"><p>Therapy area</p></div>
                            <div class="columns col-10"><p>Potential Savings</p></div>
                        </div>
                                    <div class="column col-24 productSelectRow c-@cat.ID ticked" data-pname="@prod.Name" data-pilink="@prod.PILink">
                                        <label for="@prod.Name" class="savingsProductSelect">
                                            <div class="mobileSavingsDetails">
                                                <div class="columns hd-col-hidden d-col-hidden t-col-hidden p-col-20 m-col-20 header"><p>&nbsp;</p></div>
                                                <div class="columns hd-col-5 d-col-5 t-col-5 p-col-40 m-col-40 info">
                                                    <div class="savingsProduct savingRow">
                                                        <input type="checkbox" id="@prod.Name" class="productSelectInput" name="@prod.Name" value="@prod.Name" checked>
                                                        <span class="productSelectBox"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mobileSavingsDetails">
                                                <div class="columns hd-col-hidden d-col-hidden t-col-hidden p-col-20 m-col-20 header"><p>Product</p></div>
                                                <div class="columns hd-col-6 d-col-6 t-col-6 p-col-40 m-col-40 info">
                                                    <div class="savingRow">
                                                        <p class="productName">@prod.Name</p>
                                                            <p class="productPrescribingLink"><a href="@prod.PILink" target="_blank" class="prescribingLink">Prescribing Information</a></p>
                                                       
                                                            <p class="sampleProductSelect">Samples available</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mobileSavingsDetails">
                                                <div class="columns hd-col-hidden d-col-hidden t-col-hidden p-col-20 m-col-20 header"><p>Current Product(S)</p></div>
                                                <div class="columns hd-col-6 d-col-6 t-col-6 p-col-40 m-col-40 info compProdBox">
                                                    <div class="savingRow @(prod.Competitors.Count > 2 ? "largeRow" : "")">
                                                        @if (prod.Competitors.Count > 2)
                                                        {
                                                            <a class="viewAllComp" href="#">See compared products</a>
                                                        }
                                                        <div id="compList" class="compList @(prod.Competitors.Count > 2 ? "largeComp" : "")">

                                                            @foreach (var comp in prod.Competitors.Where(v => v.Spend > 0))
                                                            {

                                                                <div class="compProd" data-cname="@comp.Name" data-cspend="@comp.Spend" data-csaving="@comp.Saving">
                                                                    @if (prod.Competitors.Count > 1)
                                                                    {
                                                                        <label for="@comp.Name" class="competitorsName">
                                                                            <p>@comp.Name</p>
                                                                            <input type="checkbox" class="compSelect hidden" id="@comp.Name" name="@comp.Name" value="@comp.Saving" checked />
                                                                            <span class="compSelectBox"></span>
                                                                        </label>
                                                                    }
                                                                    @if (prod.Competitors.Count == 1)
                                                                    {
                                                                        <label class="competitorsName">
                                                                            <p>@comp.Name</p>
                                                                            <input type="checkbox" class="compSelect hidden" name="@comp.Name" value="@comp.Saving" checked />
                                                                            <span class="compSelectBox hidden"></span>

                                                                        </label>
                                                                    }
                                                                    <p class="compSpend hidden">Current spend: £@String.Format("{0:n0}", @comp.Spend)</p>
                                                                    <p class="compSaving hidden" data-saving="@comp.Saving">Potential Saving: £@String.Format("{0:n0}", @comp.Saving)</p>
                                                                </div>
                                                            }
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mobileSavingsDetails">
                                                <div class="columns hd-col-hidden d-col-hidden t-col-hidden p-col-20 m-col-20 header"><p>Therapy area</p></div>
                                                <div class="columns hd-col-6 d-col-6 t-col-6 p-col-40 m-col-40 info">
                                                    <div class="savingRow">
                                                        <p class="chapterName">@cat.Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mobileSavingsDetails">
                                                <div class="columns hd-col-hidden d-col-hidden t-col-hidden p-col-20 m-col-20 header"><p>Potential Savings</p></div>
                                                <div class="columns hd-col-10 d-col-10 t-col-10 p-col-40 m-col-40 info">
                                                    <div class="savingRow">
                                                        <p class="savingValue">£@String.Format("{0:n0}", prod.Saving)</p>
                                                        <p class="spendTitle">Current annual spend</p>
                                                        <p class="spendValue">£@String.Format("{0:n0}", prod.Spend)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                
                <div class="columns col-24 buttonsArea2">
                    <button href="#download" class="btn-savings-download" id="downloadPDFSummary">Download Savings Summary (PDF)</button>
                    <!-- <button href="#getInTouch" class="btn-get-in-touch" id="getInTouch">Get In Touch / Order Samples</button>--><!--
                    <button href="#getInTouch" class="btn-get-in-touch" id="getInTouch">Get In Touch </button>
                </div>
                </div>
            </div>
  </div>


</section>-->


    </main>
    
</body>

</html>