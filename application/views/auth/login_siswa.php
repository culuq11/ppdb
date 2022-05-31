<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-success py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-4">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <img src="<?= base_url('assets/'); ?>img/logo.png" width="120px" height="120px">
                        <h1 class="text-white">Masuk Portal PPDB</h1>
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
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Silahkan Masuk</small>
                        </div>

                        <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('auth'); ?>" method="POST">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="NISN" type="nisn" name="nisn" id="nisn" autocomplete="off" value="<?= set_value('nisn'); ?>">
                                </div>
                                <?= form_error('nisn', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                                </div>
                                <input type="checkbox" onclick="myFunction()"> Show Password
                                <?= form_error('password', '<div class="alert alert-danger sukses alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>', '</div>'); ?>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Masuk</button>
                            </div>
                        </form>
                        <div class="col-lg">
                            <small>Sudah Daftar ? <a href="<?= base_url('auth/regis'); ?>" class="badge badge-primary">Klik Daftar</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>