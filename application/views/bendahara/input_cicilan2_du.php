<div class="page-content">
    <?= $this->session->flashdata('message'); ?>

    <form action="" method="POST">
        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Ulang Cicilan Kedua</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Nama Siswa</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <input type="hidden" class="form-control" value="<?= $getPembayaran['id_bayar']; ?>" readonly>
                                        <?php foreach ($siswa_baru as $sb) : ?>
                                            <?php if ($getPembayaran['siswa_id_2'] == $sb['id_siswa']) : ?>
                                                <input type="text" class="form-control" value="<?= $sb['nama']; ?>" readonly>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Cicilan 1</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="c1_du" id="c1_du" autocomplete="off" placeholder="0" value="<?= $getPembayaran['cicilan_pertama']; ?>" onkeyup="sum();" readonly> -->
                                        <input type="number" class="form-control" name="cicilan_1" id="cicilan_1" autocomplete="off" placeholder="0" value="<?= $getPembayaran['cicilan_pertama']; ?>" onkeyup="sum();" readonly>
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Cicilan 2</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="c2_du" id="c2_du" autocomplete="off" value="<?= $getPembayaran['cicilan_kedua']; ?>" onkeyup="sum();"> -->
                                        <input type="number" class="form-control" name="cicilan_2" id="cicilan_2" autocomplete="off" value="<?= $getPembayaran['cicilan_kedua']; ?>" onkeyup="sum();">
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                    <!-- <?= form_error('c2_du', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?> -->
                                    <?= form_error('cicilan_2', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label>Cicilan 3</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <!-- <input type="number" class="form-control" name="c3_du" id="c3_du" autocomplete="off" value="<?= $getPembayaran['cicilan_ketiga']; ?>" readonly onkeyup="sum();"> -->
                                        <input type="number" class="form-control" name="cicilan_3" id="cicilan_3" autocomplete="off" value="<?= $getPembayaran['cicilan_ketiga']; ?>" readonly onkeyup="sum();">
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
                                        <!-- <input type="number" class="form-control" name="jumlah_du" id="jumlah_du" autocomplete="off" value="<?= $getPembayaran['total_bayar']; ?>" readonly> -->
                                        <input type="number" class="form-control" name="jumlah_total" id="jumlah_total" autocomplete="off" value="<?= $getPembayaran['total_bayar']; ?>" readonly>
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-between">
                                        <a href="<?= base_url('bendahara/input_du'); ?>" type="submit" class="btn btn-warning">Kembali</a>
                                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Ulang Cicilan Kedua</h4>
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
                                        <input type="number" class="form-control" placeholder="0" name="uang_cicilan_2" id="uang_cicilan_2" autocomplete="off" value="<?= set_value('uang_cicilan_2'); ?>">
                                        <div class="form-control-icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                    <?= form_error('uang_cicilan_2', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

</div>