    <div class="page-content">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
        </div> -->
        <!-- <?php if ($this->session->flashdata('message')) : ?>
        <?php endif; ?> -->
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <?= validation_errors(); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Verifikasi Siswa</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Asal Sekolah</th>
                                        <th>Alamat</th>
                                        <th>Keterangan Keluar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($siswa_baru)) : ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger" role="alert">
                                                    Data Tidak Ditemukan.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach ($siswa_baru as $sb) : ?>
                                        <?php if ($sb['status_verif'] == 'Keluar') : ?>
                                            <tr>
                                                <td><?= $sb['nisn']; ?></td>
                                                <td><?= $sb['nama']; ?></td>
                                                <td><?= $sb['asal_sekolah']; ?></td>
                                                <td><?= $sb['alamat_regis']; ?></td>
                                                <td><?= $sb['ket_hapus']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>