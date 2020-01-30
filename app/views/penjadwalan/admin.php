<section class="border-bottom">
    <div class="container">
        <div class="py-5 text-center">

            <h2>Penjadwalan</h2>
        </div>


    </div>
</section>
<div class="py-5 bg-light" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">


        <div class="row mb-4">
            <div class="col-sm-10">
                <?php Flasher::flash(); ?>
            </div>
            <div class="col-sm-2 text-right">
                <button type="button" class="btn btn-outline-primary ml-auto" data-toggle="modal" data-target="#jadwal">
                    Buat Jadwal
                </button>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['jadwal'] as $jadwal) : ?>
                            <tr>
                                <td><?= date('d/m/y', strtotime($jadwal['tanggal_jadwal'])) ?></td>
                                <td><?= $jadwal['tipe_jadwal'] ?></td>
                                <td><?= $jadwal['status'] ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="jadwal" tabindex="-1" role="dialog" aria-labelledby="jadwal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="POST" action="<?= BASEURL ?>/admin_penjadwalan/set_jadwal">

                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label for="tgl_mulai">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" placeholder="" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jenis_jadwal">Jadwal untuk</label>
                            <select class="custom-select d-block w-100" id="jenis_jadwal" name="jenis_jadwal" required>
                                <option value="">Pilih...</option>
                                <option value="1">Pemberian pakan (1 hari sekali)</option>
                                <option value="2">Pemberian nutrisi (3 hari sekali)</option>
                                <option value="3">Pembersihan kolam (1 minggu sekali)</option>
                            </select>
                        </div>
                        <hr class="mb-4">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>