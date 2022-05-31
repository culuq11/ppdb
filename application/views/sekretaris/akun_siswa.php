    <div class="page-content">
        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Akun Siswa Baru</h4>
                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('sekretaris/verif'); ?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <form action="" method="POST">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Nama Siswa</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="hidden" class="form-control" value="<?= $getSiswa['id_siswa']; ?>" disabled>
                                            <input type="text" class="form-control" value="<?= $getSiswa['nama']; ?>" name="nama" id="nama" disabled>
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>NISN Siswa</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['nisn']; ?>" id="nisn" name="nisn" disabled>
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Password Lama</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['pass_tampil']; ?>" id="pass_tampil" name="pass_tampil" disabled>
                                            <div class="form-control-icon">
                                                <i class="fas fa-key"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Reset Password</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="fourgris_jaya" id="password_reset" name="password_reset" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-key"></i>
                                            </div>
                                        </div>
                                        <?= form_error('password_reset', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success lg-6">Reset Akun</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>