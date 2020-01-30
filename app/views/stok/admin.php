<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Stok</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="">
                        <span class="text-muted">Data Bibit</span>
                    </h4>
                    <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#pakan">
                        Tambah Data Pakan
                    </button>

                </div>
                <ul class="list-group mb-3">
                    <?php foreach ($data['pakan'] as $pakan) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>

                                <h6 class="my-1">
                                    <?= $pakan['nama_pakan']; ?>
                                </h6>
                                <span class="badge badge-pill bg-primary text-light ">Sisa Stok: <b> <?= $pakan['jumlah_pakan']; ?></b>.</span>
                                <small class="text-muted">Jenis: <b> <?= $pakan['jenis_pakan']; ?></b>.</small>
                                <small class="text-muted">Kode: <?= $pakan['kode_pakan']; ?></small>

                            </div>
                            <div>
                                <p></p>
                                <a href="<?= BASEURL . '/admin_stok/update_pakan/' . $pakan['kode_pakan'] ?>" class="btn btn-sm btn-outline-primary">Update Stok</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="">
                        <span class="text-muted">Data Nutrisi</span>
                    </h4>
                    <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#nutrisi">
                        Tambah Data Nutrisi
                    </button>

                </div>
                <ul class="list-group mb-3">
                    <?php foreach ($data['nutrisi'] as $nutrisi) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>

                                <h6 class="my-1">
                                    <?= $nutrisi['nama_nutrisi']; ?>
                                </h6>
                                <span class="badge badge-pill bg-primary text-light ">Sisa Stok: <b> <?= $nutrisi['jumlah_nutrisi']; ?></b>.</span>
                                <small class="text-muted">Jenis: <b> <?= $nutrisi['jenis_nutrisi']; ?></b>.</small>
                                <small class="text-muted">Kode: <?= $nutrisi['kode_nutrisi']; ?></small>

                            </div>
                            <div>
                                <p></p>
                                <a href="<?= BASEURL . '/admin_stok/update_nutrisi/' . $nutrisi['kode_nutrisi'] ?>" class="btn btn-sm btn-outline-primary">Update Stok</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="pakan" tabindex="-1" role="dialog" aria-labelledby="pakan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pakan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="POST" action="<?= BASEURL ?>/admin_stok/insert_pakan">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="kodebibit">Kode Pakan</label>
                            <input type="text" class="form-control" id="kodebibit" placeholder="" name="kode_pakan" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nokolam">Jenis Pakan</label>
                            <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nokolam">Nama Pakan</label>
                            <input type="text" class="form-control" id="nama_pakan" name="nama_pakan" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nokolam">Jumlah Pakan (gram)</label>
                            <input type="number" class="form-control" id="jumlah_pakan" name="jumlah_pakan" placeholder="" required>
                        </div>
                        <hr class="mb-4">

                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="nutrisi" tabindex="-1" role="dialog" aria-labelledby="pakan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Nutrisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="POST" action="<?= BASEURL ?>/admin_stok/insert_nutrisi">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="kodebibit">Kode Nutrisi</label>
                            <input type="text" class="form-control" id="kode_nutrisi" placeholder="" name="kode_nutrisi" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nokolam">Jenis Nutrisi</label>
                            <input type="text" class="form-control" id="jenis_nutrisi" name="jenis_nutrisi" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nokolam">Nama Nutrisi</label>
                            <input type="text" class="form-control" id="nama_nutrisi" name="nama_nutrisi" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nokolam">Jumlah Nutrisi (ml)</label>
                            <input type="number" class="form-control" id="jumlah_nutrisi" name="jumlah_nutrisi" placeholder="" required>
                        </div>
                        <hr class="mb-4">

                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>