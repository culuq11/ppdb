    <div class="page-content">
        <?= $this->session->flashdata('message'); ?>
        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input with Icons</h4>
                        </div>
                        <form action="<?= base_url('admin/edit_profil'); ?>" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6>Nama User</h6>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" value="<?= $user['nama']; ?>" disabled>
                                            <div class="form-control-icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Role Akses</h6>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" value="<?= $user['status_user']; ?>" disabled>
                                            <div class="form-control-icon">
                                                <i class="fas fa-user-cog"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Username</h6>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" value="<?= $user['username']; ?>" disabled>
                                            <input type="hidden" class="form-control" value="<?= $user['username']; ?>" name="username" id="username">
                                            <div class="form-control-icon">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Password Lama</h6>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" value="<?= $user['pass_tampil']; ?>" disabled>
                                            <div class="form-control-icon">
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Password Baru</h6>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control" placeholder="Isikan Password Baru" name="password_1" id="password_1" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                        <?= form_error('password_1', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Konfirmasi Password</h6>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control" placeholder="Isikan Konfirmasi Password Baru" name="password_2" id="password_2" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                        <?= form_error('password_2', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>