<div class="container">
  <div class="py-5 text-center">
    
    <h2>Form Penjadwalan</h2>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Informasi</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="row">
          
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="kodebibit">Kode Bibit</label>
            <input type="text" class="form-control" id="kodebibit" name="kodebibit" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="kodejadwal">Kode Jadwal</label>
            <input type="text" class="form-control" id="kodejadwal" name="kodejadwal" placeholder="" value="" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="nokolam">No Kolam</label>
            <input type="text" class="form-control" id="nokolam" name="nokolam" placeholder="" required>
          </div>
          <div class="col-md-8 mb-3">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" placeholder="" required>
          </div>
          <div class="col-md-8 mb-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Senin 27 Januari 2020</label>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="tglpenus">Tanggal Penustrian</label>
            <input type="text" class="form-control" id="tglpenus" name="tglpenus" placeholder="" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="jampakan">Jam Pakan</label>
            <input type="text" class="form-control" id="jampakan" name="jampakan" placeholder="" required>
          </div>
          <div class="col-md-6 mb-3">
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="pilihjampakan" name="pilihjampakan" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Pagi</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="pilihjampakan" name="pilihjampakan" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Siang</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="pilihjampakan" name="pilihjampakan" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Malam</label>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="jenispakan">Jenis Pakan</label>
            <input type="text" class="form-control" id="jenispakan" name="jenispakan" placeholder="" required>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
        <button class="btn btn-primary btn-lg btn-block" type="reset">Reset</button>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Report Data Pembibitan</button>
      </form>
    </div>
  </div>