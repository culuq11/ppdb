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
                            <h4 class="card-title">Data Siswa Baru</h4>
                            <a href="<?= base_url('admin/export_siswa'); ?>" class="btn btn-info float-right"><i class="fas fa-download"></i> Download Excel</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">NISN</th>
                                    <th class="text-center">Nama Siswa</th>
                                    <th class="text-center">Asal Sekolah</th>
                                    <th class="text-center">Status Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php if (empty($siswa_baru)) : ?>
                                    <tr>
                                        <td colspan="5">
                                            <div class="alert alert-danger" role="alert">
                                                Data Tidak Ditemukan.
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php foreach ($siswa_baru as $siswa) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $siswa['nisn']; ?></td>
                                        <td><?= $siswa['nama']; ?></td>
                                        <td class="text-center"><?= $siswa['asal_sekolah']; ?></td>
                                        <?php if ($siswa['status_verif'] == 'Belum') : ?>
                                            <td class="text-center">
                                                <span class="badge bg-warning">Belum Verifikasi</span>
                                            </td>
                                        <?php elseif ($siswa['status_verif'] == 'Keluar') : ?>
                                            <td class="text-center">
                                                <span class="badge bg-danger">Siswa Keluar</span>
                                            </td>
                                        <?php elseif ($siswa['status_verif'] == 'Diterima') : ?>
                                            <td class="text-center">
                                                <span class="badge bg-success">Sudah Masuk MPLS dan Diterima</span>
                                            </td>
                                        <?php elseif ($siswa['status_verif'] == 'Proses Pembayaran') : ?>
                                            <td class="text-center">
                                                <span class="badge bg-info">Proses Pembayaran ....</span>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>