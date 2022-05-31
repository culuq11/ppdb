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
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Data Pengguna</h4>
                                <a href="" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#tambah_user"><i class="fas fa-user-plus"></i> Tambah User</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama User</th>
                                        <th>Status Kepanitiaan</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php if (empty($pengguna)) : ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger" role="alert">
                                                    Data Tidak Ditemukan.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach ($pengguna as $user) : ?>
                                        <?php if ($user['status_user'] != 'Super Admin') : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $user['nama']; ?></td>
                                                <td><?= $user['status_user']; ?></td>
                                                <td><?= $user['role']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('ketua/detail_user/') . $user['id_user']; ?>" class="badge bg-success"><i class="fas fa-user-check"></i></a>
                                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus_user<?= $user['id_user']; ?>"><i class="fas fa-trash-alt"></i></a>
                                                    <!-- <?= base_url('ketua/hapus_user/') . $user['id_user']; ?> -->
                                                </td>
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

    <!--- modal Tambah User -->
    <div class="modal fade text-left w-100" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Tambah Pengguna</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?= base_url('ketua/manajemen_user'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label>Nama Panitia</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-group position-relative has-icon-right">
                                                <input type="text" class="form-control" placeholder="Nama Panitia" name="nama" id="nama" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label>Jabatan Panitia</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="choices form-select" name="status_user" id="status_user">
                                                <option value="">=== Pilih Jabatan Panitia ===</option>
                                                <?php foreach ($stt_panitia as $sp) : ?>
                                                    <option value="<?= $sp; ?>"><?= $sp; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label>Role Panitia</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="choices form-select" name="role" id="role">
                                                <option value="">=== Pilih Role Panitia ===</option>
                                                <?php foreach ($role_panitia as $rp) : ?>
                                                    <option value="<?= $rp; ?>"><?= $rp; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label>Username Panitia</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-group position-relative has-icon-right">
                                                <input type="text" class="form-control" placeholder="Username Panitia" name="username" id="username" autocomplete="off">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-fingerprint"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label>Password Panitia</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-group position-relative has-icon-right">
                                                <input type="password" class="form-control" placeholder="Password Panitia" name="password_1" id="password_1">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label>Konfirmasi Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-group position-relative has-icon-right">
                                                <input type="password" class="form-control" placeholder="Password Panitia" name="password_2" id="password_2">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-lock"></i>
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
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--- modal Hapus User -->
    <?php foreach ($pengguna as $user) : ?>
        <div class="modal fade text-left w-100" id="hapus_user<?= $user['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel16">Hapus Pengguna</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <p>Apakah anda akan menghapus akun <strong><?= $user['nama']; ?></strong> ?</p>
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
                        <a href="<?= base_url('ketua/hapus_user/') . $user['id_user']; ?>" class="btn btn-success ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Hapus</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>