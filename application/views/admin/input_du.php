<div class="page-content">
    <?= $this->session->flashdata('message'); ?>
    <!-- <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="text-danger">KWITANSI DI CEK LAGI KAYAK E MASIH AMBURADUL! OKE.</h3>
                    <h3 class="text-danger">Kalo OKE Tinggal Copas ke pembayaran seragam yak.</h3>
                </div>
            </div>
        </div>
    </div> -->

    <form action="<?= base_url('admin/input_du'); ?>" method="POST">
        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input Daftar Ulang</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Pilih Nama Siswa</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group">
                                        <select class="choices form-select" name="siswa_id" id="siswa_id">
                                            <option value="">-- Pilih Nama Siswa --</option>
                                            <?php foreach ($siswa_baru as $sb) : ?>
                                                <?php if ($sb['status_verif'] == 'Proses Pembayaran') : ?>
                                                    <option value="<?= $sb['id_siswa']; ?>">[<?= $sb['nisn']; ?>] <?= $sb['nama']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('siswa_id', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Cicilan 1</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="c1_du" id="c1_du" autocomplete="off" placeholder="0" value="<?= set_value('c1_du'); ?>" onkeyup="sum();"> -->
                                        <input type="number" class="form-control" name="cicilan_1" id="cicilan_1" autocomplete="off" placeholder="0" value="<?= set_value('cicilan_1'); ?>" onkeyup="sum();">
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                    <!-- <?= form_error('c1_du', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?> -->
                                    <?= form_error('cicilan_1', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Cicilan 2</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="c2_du" id="c2_du" autocomplete="off" value="0" readonly onkeyup="sum();"> -->
                                        <input type="number" class="form-control" name="cicilan_2" id="cicilan_2" autocomplete="off" value="0" readonly onkeyup="sum();">
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Cicilan 3</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="c3_du" id="c3_du" autocomplete="off" value="0" readonly onkeyup="sum();"> -->
                                        <input type="number" class="form-control" name="cicilan_3" id="cicilan_3" autocomplete="off" value="0" readonly onkeyup="sum();">
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Jumlah</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="jumlah_du" id="jumlah_du" autocomplete="off" value="0" readonly> -->
                                        <input type="number" class="form-control" name="jumlah_total" id="jumlah_total" autocomplete="off" value="0" readonly>
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input Daftar Ulang</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <h6>Untuk Pembayaran</h6>
                                    <div class="form-group">
                                        <select class="choices form-select" name="jenis_pembayaran" id="jenis_pembayaran">
                                            <option value="">-- Pilih Jenis Pembayaran --</option>
                                            <?php foreach ($jenis_pembayaran_du as $jp) : ?>
                                                <option value="<?= $jp; ?>"><?= $jp; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('jenis_pembayaran', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Uang Yang Diterima</h6>
                                    <div class="form-group position-relative has-icon-right">
                                        <input type="number" class="form-control" placeholder="0" name="uang_cicilan_1" id="uang_cicilan_1" autocomplete="off" value="<?= set_value('uang_cicilan_1'); ?>">
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                    <?= form_error('uang_cicilan_1', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Biaya</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Siswa</th>
                                    <th class="text-center">Jenis Pembayaran</th>
                                    <th class="text-center">Total Pembayaran</th>
                                    <!-- <th class="text-center">Tanggal Pembayaran</th> -->
                                    <th class="text-center">Aksi/Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
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
                                <?php foreach ($pembayaran as $du) : ?>
                                    <?php if ($du['ket_jenis_pemb'] == 'Pembayaran Daftar Ulang') : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $du['nama']; ?></td>
                                            <td class="text-center"><?= $du['jenis_pembayaran']; ?></td>
                                            <td class="text-center">Rp. <?= number_format($du['total_bayar'], 0, ',', '.'); ?> ,-</td>
                                            <?php $jumlah += $du['total_bayar']; ?>
                                            <!-- <td class="text-center"><?= date('d M Y', $du['tgl_bayar']); ?></td> -->
                                            <td class="text-center">
                                                <?php if ($du['total_bayar'] >= $biaya_DU['nominal_du']) : ?>
                                                    <span class="badge bg-success">LUNAS</span>
                                                    <a href="<?= base_url('admin/kwitansi_lunas/') . $du['id_bayar']; ?>" class="badge bg-info" target="_blank">Kwi. Lunas</i></a>
                                                    <a href="<?= base_url('admin/kwitansi_ci3/') . $du['id_bayar']; ?>" class="badge bg-info" target="_blank">Kwi. Cicilan 3</i></a>
                                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus_bayar<?= $du['id_bayar']; ?>"><i class="fas fa-trash-alt"></i></a>
                                                <?php elseif ($du['total_bayar'] <= $biaya_DU['nominal_du']) : ?>
                                                    <?php if ($du['cicilan_kedua'] == '0') : ?>
                                                        <span class="badge bg-secondary">Belum Lunas</span>
                                                        <a href="<?= base_url('admin/cicilan2_du/') . $du['id_bayar']; ?>" class="badge bg-warning">Cicilan 2</a>
                                                        <a href="<?= base_url('admin/kwitansi_ci1/') . $du['id_bayar']; ?>" class="badge bg-info" target="_blank">Kwi. Cicilan 1</i></a>
                                                        <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus_bayar<?= $du['id_bayar']; ?>"><i class="fas fa-trash-alt"></i></a>
                                                    <?php elseif ($du['cicilan_ketiga'] == '0') : ?>
                                                        <span class="badge bg-secondary">Belum Lunas</span>
                                                        <a href="<?= base_url('admin/cicilan3_du/') . $du['id_bayar']; ?>" class="badge bg-warning">Cicilan 3</a>
                                                        <a href="<?= base_url('admin/kwitansi_ci2/') . $du['id_bayar']; ?>" class="badge bg-info" target="_blank">Kwi. Cicilan 2</i></a>
                                                        <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus_bayar<?= $du['id_bayar']; ?>"><i class="fas fa-trash-alt"></i></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <strong>Total</strong>
                                </td>
                                <td class="text-center"> <strong> Rp. <?= number_format($jumlah, 0, ',', '.'); ?>,- </strong></td>
                                <td class="text-center"> <strong>Aksi/Keterangan</strong></td>
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

<?php foreach ($pembayaran as $du) : ?>
    <div class="modal fade text-left" id="hapus_bayar<?= $du['id_bayar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title white" id="myModalLabel1">Hapus Pembayaran</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapus_pembayaran/') . $du['id_bayar']; ?>" method="POST">
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <p>Apakah Anda akan menghapus data pembayaran atas nama <strong><?= $du['nama']; ?></strong> ?</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating">
                                                <input type="hidden" class="form-control" value="Hapus" id="keterangan" name="keterangan">
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
                            <span class="d-none d-sm-block">Hapus</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>