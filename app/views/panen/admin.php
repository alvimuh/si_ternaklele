<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Data Panen</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <table class="table table-striped table-hover bg-white">
                    <thead>
                        <tr>
                            <th scope="col">Kode Bibit</th>
                            <th scope="col">Jenis Bibit</th>
                            <th scope="col">Tanggal Panen</th>
                            <th scope="col">Bobot Rata-rata</th>
                            <th scope="col">Jumlah Panen</th>
                            <th scope="col">Jumlah Mati</th>
                            <th scope="col">Jumlah Kerdil</th>
                            <th scope="col">Jumlah Berjamur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['panen'] as $panen) : ?>
                            <tr>
                                <td><?= $panen['kode_bibit'] ?></td>
                                <td><?= $panen['jenis_bibit'] ?></td>
                                <td><?= date('d/m/Y', strtotime($panen['tgl_panen'])) ?></td>
                                <td><?= $panen['bobot_ikan'] ?></td>
                                <td><?= $panen['jml_panen'] ?></td>
                                <td><?= $panen['jml_mati'] ?></td>
                                <td><?= $panen['jml_kerdil'] ?></td>
                                <td><?= $panen['jml_berjamur'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>


    </div>
</div>