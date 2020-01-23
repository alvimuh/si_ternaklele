<div class="container">
  <div class="py-5 text-center">

    <h2>Pembibitan</h2>
  </div>

  <div class="row">
    <div class="col-md-9 order-md-1 mb-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="">
          <span class="text-muted">Data Bibit</span>
        </h4>
        <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#formModal">
          Tambah Data Bibit
        </button>

      </div>
      <ul class="list-group mb-3">
        <?php foreach ($data['bibit'] as $bibit) : ?>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>

              <h6 class="my-1">
                <?= $bibit['jenis_bibit']; ?>
                <span class="text-muted">(Kolam no <?= $bibit['no_kolam']; ?>)</span>
              </h6>
              <small class="text-muted">Kode bibit: <b> <?= $bibit['kode_bibit']; ?></b>.</small>
              <small class="text-muted"> Tanggal Penebaran: <b><?= $bibit['tgl_penebaran_bibit']; ?></b>.</small>
            </div>
            <p><span class="text-muted">Jumlah bibit: </span><span class="badge badge-pill bg-primary text-light "><?= $bibit['jumlah_bibit']; ?></span></p>
          </li>
        <?php endforeach; ?>
      </ul>


    </div>
    <div class="col-md-3 order-md-2">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Informasi</span>

      </h4>

    </div>
  </div>






  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Bibit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" method="POST" action="<?= BASEURL; ?>/pembibitan/insert">

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="kodebibit">Kode Bibit</label>
                <input type="text" class="form-control" id="kodebibit" placeholder="" name="kode_bibit" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nokolam">No Kolam</label>
                <input type="text" class="form-control" id="no_kolam" name="no_kolam" placeholder="" required>
              </div>
              <div class="col-md-9 mb-3">
                <label for="jenisbibit">Jenis Bibit</label>
                <select class="custom-select d-block w-100" id="jenis_bibit" name="jenis_bibit" required>
                  <option value="">Pilih...</option>
                  <option value="Cacing Sutra">Cacing Sutra</option>
                  <option value="UB High Grit">UB High Grit</option>
                  <option value="PF 128">PF 128</option>
                  <option value="Karagi Halus">Karagi Halus</option>
                  <option value="Prima Feel LP">Prima Feel LP</option>
                  <option value="PF 1000">PF 1000</option>
                  <option value="Cargil">Cargil</option>
                  <option value="Preo 130">Preo 130</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="jumlahbibit">Jumlah Bibit</label>
                <input type="text" class="form-control" id="jumlah_bibit" name="jumlah_bibit" placeholder="" required>

              </div>
              <div class="col-md-12 mb-3">
                <label for="tglpenebaran">Tanggal Penebaran</label>
                <input type="date" class="form-control" id="tgl_penebaran_bibit" name="tgl_penebaran_bibit" placeholder="" required>
              </div>

              <hr class="mb-4">

               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>