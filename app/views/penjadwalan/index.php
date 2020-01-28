<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Penjadwalan</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">


        <div class="row">
            <div class="col-sm-12">
                <?php Flasher::flash(); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <table class="table table-striped table-hover bg-white">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jadwal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['jadwal'] as $jadwal) : ?>
                            <tr>
                                <td><?= date('d/m/y', strtotime($jadwal['tanggal_jadwal'])) ?></td>
                                <td><?= $jadwal['tipe_jadwal'] ?></td>
                                <td><?= $jadwal['status'] ?></td>
                                <?php
                                $tipe_jadwal = '';
                                if (strcmp($jadwal['status'], "Pemberian pakan")) {
                                    $tipe_jadwal = 'pemberian_pakan';
                                } else if (strcmp($jadwal['status'], "Pemberian nutrisi")) {
                                    $tipe_jadwal = 'pemberian_nutrisi';
                                }
                                if (strcmp($jadwal['status'], "Pemberian pakan")) {
                                    $tipe_jadwal = 'pemberian_pakan';
                                }

                                if (strcmp($jadwal['status'], "Sudah")) { ?>
                                    <td><a href="<?= BASEURL . '/penjadwalan/' . $tipe_jadwal . '/' . $jadwal['id_jadwal'] ?>" class="btn btn-sm btn-outline-primary">Isi form</a></td>
                                <?php } else { ?>
                                    <td><a href="#" class="btn btn-sm btn-outline-success disabled">Sudah terisi</a></td>
                                <?php } ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>