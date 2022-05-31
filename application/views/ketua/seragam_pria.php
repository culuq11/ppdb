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
                                <h4 class="card-title">Data Pembayaran Seragam Laki-Laki</h4>
                                <a href="<?= base_url('ketua/seragam'); ?>" class="btn btn-warning float-right">KEMBALI</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th class="text-center">NISN</th>
                                        <th class="text-center">Nama Siswa</th>
                                        <th class="text-center">Asal Sekolah</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Nominal Seragam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($pembayaran)) : ?>
                                        <tr>
                                            <td colspan="6">
                                                <div class="alert alert-danger" role="alert">
                                                    Data Tidak Ditemukan.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php $jumlah = 0; ?>
                                    <?php foreach ($pembayaran as $biaya) : ?>
                                        <?php if ($biaya['ket_jenis_pemb'] == 'Pembayaran Seragam') : ?>
                                            <?php if ($biaya['jenis_kelamin'] == 'Laki-Laki') : ?>
                                                <tr>
                                                    <td class="text-center"><?= $biaya['nisn']; ?></td>
                                                    <td><?= $biaya['nama']; ?></td>
                                                    <td class="text-center"><?= $biaya['asal_sekolah']; ?></td>
                                                    <td class="text-center"><?= $biaya['jenis_kelamin']; ?></td>
                                                    <td class="text-center">Rp. <?= number_format($biaya['total_bayar'], 0, ',', '.'); ?>,-</td>
                                                    <?php $jumlah += $biaya['total_bayar']; ?>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="text-center"> <strong> Rp. <?= number_format($jumlah, 0, ',', '.'); ?>,- </strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>