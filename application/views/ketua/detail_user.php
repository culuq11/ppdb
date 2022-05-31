    <div class="page-content">
        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Siswa Baru</h4>
                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('ketua/manajemen_user'); ?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-2">
                                    <label>Nama Panitia</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <input type="text" class="form-control" value="<?= $getUser['nama']; ?>" disabled>
                                        <div class="form-control-icon">
                                            <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Jabatan Panitia</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <input type="text" class="form-control" value="<?= $getUser['status_user']; ?>" disabled>
                                        <div class="form-control-icon">
                                            <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-2">
                                    <label>Username</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <input type="text" class="form-control" value="<?= $getUser['username']; ?>" disabled>
                                        <div class="form-control-icon">
                                            <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="form-group position-relative has-icon-right">
                                        <input type="text" class="form-control" value="<?= $getUser['pass_tampil']; ?>" disabled>
                                        <div class="form-control-icon">
                                            <i class="fas fa-key"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>