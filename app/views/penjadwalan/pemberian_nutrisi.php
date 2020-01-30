<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Form Pemberian Nutrisi</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">


        <div class="row">
            <?php Flasher::flash(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action="<?= BASEURL ?>/penjadwalan/pemberian_nutrisi_insert/<?= $data['jadwal']['id_jadwal'] ?>">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                            <input type="text" name="tanggal" readonly class="form-control-plaintext" value="<?= $data['jadwal']['tanggal_jadwal'] ?>">
                        </div>
                        <label class="col-sm-2 col-form-label">ID Jadwal</label>
                        <div class="col-sm-1">
                            <input type="text" name="id_jadwal" readonly class="form-control-plaintext" value="<?= $data['jadwal']['id_jadwal'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Waktu Pemberian</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="waktu_pemberian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Data Pemberian</label>
                        <div class="col-sm-10">
                            <table class="table table-striped table-bordered bg-white">
                                <thead>
                                    <tr>
                                        <th scope="col">No Kolam</th>
                                        <th scope="col">Kode Bibit</th>
                                        <th scope="col">Jenis Bibit</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Jenis Nutrisi</th>
                                        <th scope="col">Qty Nutrisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['bibit'] as $bibit) : ?>
                                        <tr>
                                            <th scope="row"><?= $bibit['no_kolam'] ?></th>
                                            <td><input type="text" name="kode_bibit[]" readonly class="form-control-plaintext" value="<?= $bibit['kode_bibit'] ?>"></td>
                                            <td><?= $bibit['jenis_bibit'] ?></td>
                                            <td><?= $bibit['umur_bibit'] ?></td>
                                            <td>
                                                <select class="custom-select d-block w-100" id="jenis_nutrisi-<?= $nutrisi['kode_bibit'] ?>" name="kode_nutrisi[<?= $bibit['kode_bibit'] ?>]" required>
                                                    <option value="">Pilih...</option>
                                                    <?php foreach ($data['nutrisi'] as $nutrisi) : ?>
                                                        <option value="<?= $nutrisi['kode_nutrisi'] ?>"><?= $nutrisi['nama_nutrisi'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td><input type="number" class="form-control" name="qty_nutrisi[<?= $bibit['kode_bibit'] ?>]"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>