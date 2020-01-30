<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Form Data Panen</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mb-4">
                <form method="POST" action="<?= BASEURL . '/panen/new_insert/' ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted mt-0 mb-0">Kode Bibit</p>
                            <input type="text" name="kode_bibit" readonly class="form-control-plaintext" value="<?= $data['bibit']['kode_bibit'] ?>">
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mt-0 mb-1">Jenis Bibit</p>
                            <h6><?= $data['bibit']['jenis_bibit'] ?></h6>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mt-0 mb-1">No Kolam</p>
                            <h6><?= $data['bibit']['no_kolam'] ?></h6>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mt-4 mb-0">Jumlah Panen</p>
                            <input type="number" name="panen" class="form-control mb-3">
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mt-4 mb-0">Jumlah Panen Mati</p>
                            <input type="number" name="mati" class="form-control mb-3">
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0">Jumlah Panen Kerdil</p>
                            <input type="number" name="kerdil" class="form-control mb-3">
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0">Jumlah Panen Berjamur</p>
                            <input type="number" name="berjamur" class="form-control mb-3">
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0">Bobot rata-rata (gram)</p>
                            <input type="number" name="bobot" class="form-control mb-3">
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0">Tanggal Panen</p>
                            <input type="date" name="tanggal" class="form-control mb-3">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Simpan data Panen</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>