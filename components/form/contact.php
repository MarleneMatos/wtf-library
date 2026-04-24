<form id="wtfContactForm" class="needs-validation" novalidate="novalidate">
  <div id="wtfFormInner">
    <div class="row d-flex justify-content-center py-2 g-3">
      <div class="col-24">
        <div class="form-floating">
          <input type="text" class="form-control" id="name" placeholder="Name" value="" required="">
          <label for="name" class="form-label">Name <span class="text-body-secondary">*</span></label>
          <div id="name-feedback" class="invalid-feedback">Valid name is required.</div>
        </div>
      </div>
    </div>
    <div class="row d-none justify-content-center py-2 g-3">
      <div class="col-24">
        <div class="form-floating">
          <input type="text" class="form-control" id="surname" placeholder="Surname" value="">
          <label for="surname" class="form-label">Surname</label>
          <div id="surname-feedback" class="invalid-feedback">Valid surname is required.</div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center py-2 g-3">
      <div class="col-24">
        <div class="form-floating">
          <input type="email" class="form-control" id="email" placeholder="you@example.com" required="true">
          <label for="email" class="form-label">Email <span class="text-body-secondary">*</span></label>
          <div id="email-feedback" class="invalid-feedback">Valid email is required.</div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center py-2 g-3">
      <div class="col-24">
        <div class="form-floating">
          <textarea type="message" class="form-control textarea" id="message" placeholder="Message" rows="5"></textarea>
          <label for="message" class="form-label">Message <span class="text-body-secondary">*</span></label>
          <div id="message-feedback" class="invalid-feedback">Message is required.</div>
        </div>

      </div>
    </div>
    <div class="row d-flex justify-content-center py-2 g-3">
      <div class="col-24">
        <button class="w-100 btn btn-lg btn-primary text-white d-inline-flex align-items-center justify-content-center" style="fill: var(--wtf-btn-color);" type="submit">Submit
          <svg class="bi ms-1" width="20" height="20">
            <use xlink:href="/wtf-theme/assets/icons/icomoon-entypoPlus/sprite.svg#icon-paper-plane"></use>
          </svg>
        </button>
      </div>
    </div>

    <div id="errorMessage"></div>
  </div>

  <div id="successMessage" class="row visually-hidden">
    <div class="col-24">
      <p>Your form has been successfully submitted.</p>
    </div>
  </div>

</form-floating>