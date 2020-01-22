<div class="container">
  <div class="py-5 text-center">
    
    <h2>Form Pembibitan</h2>
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
            <input type="text" class="form-control" id="kodebibit" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="jenisbibit">Jenis Bibit</label>
            <select class="custom-select d-block w-100" id="jenisbibit" required>
              <option value="">Pilih...</option>
              <option>Cacing Sutra</option>
              <option>UB High Grit</option>
              <option>PF 128</option>
              <option>Karagi Halus</option>
              <option>Prima Feel LP</option>
              <option>PF 1000</option>
              <option>Cargil</option>
              <option>Preo 130</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="jumlahbibit">Jumlah Bibit</label>
            <input type="text" class="form-control" id="jumlahbibit" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="tglpenebaran">Tanggal Penebaran</label>
            <input type="text" class="form-control" id="tglpenebaran" placeholder="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="nokolam">No Kolam</label>
            <input type="text" class="form-control" id="nokolam" placeholder="" required>
          </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
        <button class="btn btn-primary btn-lg btn-block" type="reset">Reset</button>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Report Data Pembibitan</button>
      </form>
    </div>
  </div>