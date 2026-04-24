<div id="wtf-counter">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h3 class="h2">GDPR Friendly | wtf Click Counter</h3>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">
            Share
          </button>
          <button type="button" class="btn btn-sm btn-outline-secondary">
            Export
          </button>
        </div>
        <button
          type="button"
          class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
          <svg class="bi" aria-hidden="true">
            <use xlink:href="#calendar3"></use>
          </svg>
          This week
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <canvas class="my-4 w-100" id="lineChart"></canvas>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <canvas class="my-4 w-100" id="pieChart"></canvas>
      </div>
      <div class="col-6">
        <canvas class="my-4 w-100" id="barChart"></canvas>
      </div>
    </div>

</div>