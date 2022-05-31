<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-success py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-4">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h1 class="text-white">Form Pendafataran Peserta Didik Baru</h1>
                        <h1 class="text-white">SMK PGRI 4 Pasuruan</h1>
                        <p class="text-lead text-white">Tahun Pelajaran 2022/2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-8">
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2>Isikan Identidas Anda</h2>
                        </div>
                        <form method="post" action="<?= base_url('auth/regis'); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="kode_reg" id="kode_reg" value="<?= $kode_reg; ?>">
                                        <label>NISN</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="NISN" type="number" name="nisn" id="nisn" autocomplete="off" value="<?= set_value('nisn'); ?>">
                                        </div>
                                        <?= form_error('nisn', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kompetensi Keahlian</label>
                                        <select class="form-control" name="jurusan" id="jurusan">
                                            <option value="">=== Pilih Jurusan ===</option>
                                            <?php foreach ($jurusan as $j) : ?>
                                                <option value="<?= $j['id']; ?>"><?= $j['komp_keahlian']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jurusan', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama" id="nama" autocomplete="off" value="<?= set_value('nama'); ?>">
                                        </div>
                                        <?= form_error('nama', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Nama Panggilan</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Panggilan" type="text" name="nama_panggilan" id="nama_panggilan" autocomplete="off" value="<?= set_value('nama_panggilan'); ?>">
                                        </div>
                                        <?= form_error('nama_panggilan', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama" id="agama">
                                            <option value="">=== Pilih Agama ===</option>
                                            <?php foreach ($agamas as $agama) : ?>
                                                <option value="<?= $agama; ?>"><?= $agama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('agama', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lahir" id="tempat_lahir" autocomplete="off" value="<?= set_value('tempat_lahir'); ?>">
                                        </div>
                                        <?= form_error('tempat_lahir', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Panggilan" type="date" name="tgl_lahir" id="tgl_lahir" autocomplete="off" value="<?= set_value('tgl_lahir'); ?>">
                                        </div>
                                        <?= form_error('tgl_lahir', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Contoh : Jl. Lombok RT 1 RW 1, Tembokrejo Kec. Purworejo" type="text" name="alamat_regis" id="alamat_regis" autocomplete="off" value="<?= set_value('alamat_regis'); ?>">
                                        </div>
                                        <?= form_error('alamat_regis', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kota/Kabupaten</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Kota/Kabupaten" type="text" name="kota_kab" id="kota_kab" autocomplete="off" value="<?= set_value('kota_kab'); ?>">
                                        </div>
                                        <?= form_error('kota_kab', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Asal Sekolah</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-building"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Asal Sekolah" type="text" name="asal_sekolah" id="asal_sekolah" autocomplete="off" value="<?= set_value('asal_sekolah'); ?>">
                                        </div>
                                        <?= form_error('asal_sekolah', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nomor Telepon/WA</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nomor Telepon/WA" type="number" name="telp" id="telp" autocomplete="off" value="<?= set_value('telp'); ?>">
                                        </div>
                                        <?= form_error('telp', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="">=== Pilih Jenis Kelamin ===</option>
                                            <?php foreach ($jenis_kelamin as $jk) : ?>
                                                <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Ayah" type="text" name="nama_ayah" id="nama_ayah" autocomplete="off" value="<?= set_value('nama_ayah'); ?>">
                                        </div>
                                        <?= form_error('nama_ayah', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Ibu" type="text" name="nama_ibu" id="nama_ibu" autocomplete="off" value="<?= set_value('nama_ibu'); ?>">
                                        </div>
                                        <?= form_error('nama_ibu', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" type="password" name="password1" id="password1">
                                        </div>
                                        <input type="checkbox" onclick="show_pass1()"> Lihat Password
                                        <?= form_error('password1', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Konfirmasi Password" type="password" name="password2" id="password2">
                                        </div>
                                        <input type="checkbox" onclick="show_pass2()"> Lihat Konfirmasi Password
                                        <?= form_error('password2', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="text-danger">* <strong><em>Password diisi sesuai keinginan dan mudah diingat.</em></strong></p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Daftarkan sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div> -->