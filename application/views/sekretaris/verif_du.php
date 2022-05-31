    <div class="page-content">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
        </div> -->
        <!-- <?php if ($this->session->flashdata('message')) : ?>
        <?php endif; ?> -->
        <?= $this->session->flashdata('message'); ?>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Data Verifikasi Daftar Ulang</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th class="text-center">NISN</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Asal Sekolah</th>
                                        <th class="text-center">Nominal Daftar Ulang</th>
                                        <!-- <th class="text-center">Jurusan Dipilih</th> -->
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($pembayaran)) : ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger" role="alert">
                                                    Data Tidak Ditemukan.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php $jumlah = 0; ?>
                                    <?php foreach ($pembayaran as $biaya) : ?>
                                        <?php if ($biaya['ket_jenis_pemb'] == 'Pembayaran Daftar Ulang') : ?>
                                            <?php if ($biaya['status_verif'] == 'Diterima') : ?>
                                                <tr>
                                                    <td><?= $biaya['nisn']; ?></td>
                                                    <td><?= $biaya['nama']; ?></td>
                                                    <td><?= $biaya['asal_sekolah']; ?></td>
                                                    <td class="text-center">Rp. <?= number_format($biaya['total_bayar'], 0, ',', '.'); ?>,-</td>
                                                    <?php $jumlah += $biaya['total_bayar']; ?>
                                                    <td class="text-center">
                                                        <span class="badge bg-success">Sudah Masuk MPLS</span>
                                                    </td>
                                                </tr>
                                            <?php elseif ($biaya['status_verif'] == 'Proses Pembayaran') : ?>
                                                <?php if ($biaya['total_bayar'] >= $biaya_DU['nominal_du']) : ?>
                                                    <tr>
                                                        <td><?= $biaya['nisn']; ?></td>
                                                        <td><?= $biaya['nama']; ?></td>
                                                        <td><?= $biaya['asal_sekolah']; ?></td>
                                                        <td class="text-center">Rp. <?= number_format($biaya['total_bayar'], 0, ',', '.'); ?>,-</td>
                                                        <?php $jumlah += $biaya['total_bayar']; ?>
                                                        <td class="text-center">
                                                            <span class="badge bg-success">Lunas</span>
                                                            <a href="#" class="badge bg-info" data-bs-toggle="modal" data-bs-target="#verif_mpls<?= $biaya['id_bayar']; ?>">Verif MPLS</i></a>
                                                        </td>
                                                    </tr>
                                                <?php elseif ($biaya['total_bayar'] <= $biaya_DU['nominal_du']) : ?>
                                                    <tr>
                                                        <td><?= $biaya['nisn']; ?></td>
                                                        <td><?= $biaya['nama']; ?></td>
                                                        <td><?= $biaya['asal_sekolah']; ?></td>
                                                        <td class="text-center">Rp. <?= number_format($biaya['total_bayar'], 0, ',', '.'); ?>,-</td>
                                                        <?php $jumlah += $biaya['total_bayar']; ?>
                                                        <td class="text-center">
                                                            <span class="badge bg-warning">Belum Lunas</span>
                                                            <a href="#" class="badge bg-info" data-bs-toggle="modal" data-bs-target="#masuk_mpls<?= $biaya['id_bayar']; ?>">Validasi MPLS</i></a>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="text-center"> <strong> Rp. <?= number_format($jumlah, 0, ',', '.'); ?>,- </strong></td>
                                    <td class="text-center"> <strong>-</strong></td>
                                </tr>
                            </table>
                            <div class="row">
                                <strong class="text-danger">* Apakah ada note untuk pembayaran ? Misalkan Harus minimal cicilan 1 dengan nominal Rp. 100.000,- </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php foreach ($pembayaran as $biaya) : ?>
        <div class="modal fade text-left" id="masuk_mpls<?= $biaya['id_bayar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title white" id="myModalLabel1">Konfirmasi MPLS</h5>
                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="<?= base_url('sekretaris/verif_du') ?>" method="POST">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <p>Apakah <strong><?= $biaya['nama']; ?></strong> telah melakukan pembayaran Daftar Ulang dengan penuh atau sesuai persyaratan minimum pembayaran yang berlaku ?</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row align-items-center">
                                                    <!-- <div class="col-lg-2 col-3">
                                                        <label class="col-form-label">First Name</label>
                                                    </div> -->
                                                    <div class="col-lg-10 col-9">
                                                        <input type="hidden" class="form-control" value="Diterima" id="status_verif" name="status_verif">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group row align-items-center">
                                                    <!-- <div class="col-lg-2 col-3">
                                                        <label class="col-form-label">First Name</label>
                                                    </div> -->
                                                    <div class="col-lg-10 col-9">
                                                        <input type="hidden" class="form-control" value="<?= $biaya['siswa_id_2']; ?>" id="siswa_id_2" name="siswa_id_2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Batal</span>
                            </button>
                            <button type="submit" class="btn btn-info ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ya, Sudah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($pembayaran as $biaya) : ?>
        <div class="modal fade text-left" id="verif_mpls<?= $biaya['id_bayar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title white" id="myModalLabel1">Konfirmasi MPLS</h5>
                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="<?= base_url('sekretaris/verif_du') ?>" method="POST">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <p>Apakah <strong><?= $biaya['nama']; ?></strong> telah melakukan pembayaran Daftar Ulang dengan penuh atau sesuai persyaratan minimum pembayaran yang berlaku ?</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row align-items-center">
                                                    <!-- <div class="col-lg-2 col-3">
                                                        <label class="col-form-label">First Name</label>
                                                    </div> -->
                                                    <div class="col-lg-10 col-9">
                                                        <input type="hidden" class="form-control" value="Diterima" id="status_verif" name="status_verif">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group row align-items-center">
                                                    <!-- <div class="col-lg-2 col-3">
                                                        <label class="col-form-label">First Name</label>
                                                    </div> -->
                                                    <div class="col-lg-10 col-9">
                                                        <input type="hidden" class="form-control" value="<?= $biaya['siswa_id_2']; ?>" id="siswa_id_2" name="siswa_id_2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Batal</span>
                            </button>
                            <button type="submit" class="btn btn-info ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ya, Sudah</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>