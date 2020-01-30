<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Update Stok Pakan</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mb-4">
                <form method="POST" action="<?= BASEURL . '/admin_stok/update_pakan_insert/' ?>">
                    <p class="text-muted mt-0 mb-1">Kode Pakan</p>
                    <input type="text" name="kode_pakan" readonly class="form-control-plaintext" value="<?= $data['kode_pakan'] ?>">
                    <p class="text-muted mt-0 mb-1">Nama Pakan</p>
                    <h5><?= $data['pakan']['nama_pakan'] ?></h5>
                    <p class="text-muted mt-3 mb-1">Jenis Pakan</p>
                    <p><?= $data['pakan']['jenis_pakan'] ?></p>
                    <p class="text-muted mt-4 mb-1">Stok Pakan</p>
                    <input type="number" name="jumlah_pakan" class="form-control mb-3" value="<?= $data['pakan']['jumlah_pakan'] ?>">
                    <button type="submit" class="btn btn-primary btn-block">Update Stok</button>
                </form>
            </div>
        </div>
    </div>
</div>