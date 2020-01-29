<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Update Stok Nutrisi</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mb-4">
                <form method="POST" action="<?= BASEURL . '/admin_stok/update_nutrisi_insert/' ?>">
                    <p class="text-muted mt-0 mb-1">Kode Nutrisi</p>
                    <input type="text" name="kode_nutrisi" readonly class="form-control-plaintext" value="<?= $data['kode_nutrisi'] ?>">
                    <p class="text-muted mt-0 mb-1">Nama Nutrisi</p>
                    <h5><?= $data['nutrisi']['nama_nutrisi'] ?></h5>
                    <p class="text-muted mt-3 mb-1">Jenis Nutrisi</p>
                    <p><?= $data['nutrisi']['jenis_nutrisi'] ?></p>
                    <p class="text-muted mt-4 mb-1">Stok Nutrisi</p>
                    <input type="number" name="jumlah_nutrisi" class="form-control mb-3" value="<?= $data['nutrisi']['jumlah_nutrisi'] ?>">
                    <button type="submit" class="btn btn-primary btn-block">Update Stok</button>
                </form>
            </div>
        </div>
    </div>
</div>