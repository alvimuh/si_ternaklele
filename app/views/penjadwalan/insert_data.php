<div class="container">
  <div class="py-5 text-center">

    <h2>Form Pemberian Pakan</h2>
    <p>Untuk jadwal <?= $data['waktu_pemberian'] ?> pada tanggal <?= $data['tanggal_pemberian'] ?></p>
  </div>

  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-4">
      <div class="card mb-4 box-shadow">
        <div class="card-body">
          <h5>Detail bibit</h5>
          <div class="row">
            <div class="col-sm-4 mb-2">
              <span class="text-muted">Kode Bibit</span>
              <p class="m-0"><?= $data['bibit']['kode_bibit'] ?></p>
            </div>
            <div class="col-sm-4 mb-2">
              <span class="text-muted">Jenis Bibit</span>
              <p class="m-0"><?= $data['bibit']['jenis_bibit'] ?></p>
            </div>
            <div class="col-sm-4 mb-2">
              <span class="text-muted">No Kolam</span>
              <p class="m-0"><?= $data['bibit']['no_kolam'] ?></p>
            </div>
            <div class="col-sm-4 mb-2">
              <span class="text-muted">Jumlah Bibit</span>
              <p class="m-0"><?= $data['bibit']['jumlah_bibit'] ?></p>
            </div>
            <div class="col-sm-4 mb-2">
              <span class="text-muted">Tgl Penerbaran</span>
              <p class="m-0"><?= $data['bibit']['tgl_penebaran_bibit'] ?></p>
            </div>
            <div class="col-sm-12 mb-2">
              <span class="text-muted">Umur</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?= intval($data['bibit']['umur_bibit'] / 45 * 100) . '%'; ?>" aria-valuenow="" aria-valuemin="0" aria-valuemax="30"><?= $data['bibit']['umur_bibit'] ?> hari</div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <form class="" method="POST" action="<?= BASEURL; ?>/penjadwalan/insert_pemberian_pakan/<?= $data['tanggal_pemberian'] ?>/<?= $data['waktu_pemberian'] ?>/<?= $data['bibit']['kode_bibit'] ?>">




        <div class=" mb-3">
          <label for="jam_pakan">Jam Pemberian Pakan</label>
          <input type="time" class="form-control" id="jam_pakan" name="jam_pakan" placeholder="" required>
        </div>
        <div class="mb-3">
          <label for="pakan">Jenis Pakan</label>
          <select class="custom-select d-block w-100" id="pakan" name="pakan" required>
            <option value="">Pilih...</option>
            <?php foreach ($data['pakan'] as $pakan) : ?>
              <option value="<?= $pakan['kode_pakan'] ?>"><?= $pakan['nama_pakan'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="qty_pakan">Qty Pakan (gram)</label>
          <input type="number" class="form-control" id="qty_pakan" name="qty_pakan" placeholder="" required>
        </div>
        <div class="mb-3 ml-auto">
          <button class="btn btn-primary btn-md ml-auto" type="submit">Simpan</button>
        </div>


      </form>
    </div>
  </div>