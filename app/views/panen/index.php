<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Data Panen</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">

        <ul class="list-group mb-3">
            <?php Flasher::flash(); ?>
            <?php foreach ($data['bibit'] as $bibit) : ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>

                        <h6 class="my-1">
                            <?= $bibit['jenis_bibit']; ?>
                            <span class="text-muted">(Kolam no <?= $bibit['no_kolam']; ?>)</span>
                        </h6>
                        <span class="text-muted "></span><span class="badge badge-pill bg-primary text-light ">Kode: <?= $bibit['kode_bibit']; ?></span>
                        <small class="text-muted">Jumlah bibit: <b> <?= $bibit['jumlah_bibit']; ?></b>.</small>
                        <small class="text-muted"> Tanggal Penebaran: <b><?= $bibit['tgl_penebaran_bibit']; ?></b>.</small>
                        <small class="text-muted"> Umur: <b><?= $bibit['umur_bibit']; ?> hari</b>.</small>
                        <br>
                        <small class="text-muted mt-3">Masa panen: (umur/45 x 100%)</small>
                        <div class="progress ">

                            <div class="progress-bar" role="progressbar" style="width: <?= intval($bibit['umur_bibit'] / 45 * 100) . '%'; ?>" aria-valuenow="" aria-valuemin="0" aria-valuemax="30">
                                <?= intval($bibit['umur_bibit'] / 45 * 100) . '%'; ?>
                            </div>
                        </div>

                    </div>

                    <p>
                        <br><a href="<?= BASEURL . '/panen/new/' . $bibit['kode_bibit'] ?>" class="btn btn-sm btn-outline-primary">Panen kolam ini</a>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>