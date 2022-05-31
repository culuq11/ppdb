<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/'); ?>/img/logo.png" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/css/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="mb-4 text-center">
                        <a href=""><img src="<?= base_url('assets/'); ?>/img/logo.png" width="150px" height="150px"></a>
                        <h1>Admin PPDB</h1>
                    </div>
                    <form action="<?= base_url('login'); ?>" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" id="username" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <?= form_error(
                            'username',
                            '<div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                            '</div>'
                        ); ?>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" id="password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <?= form_error(
                            'password',
                            '<div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                            '</div>'
                        ); ?>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <img src="<?= base_url('assets/'); ?>/img/bg_sekolah.jpg" class="w-100 mb-3">
                    <div class="text-center">
                        <p class="auth-subtitle mb-2 text-white">"Jadikan hari ini lebih baik dari hari sebelumnya"</p>
                        <p class="text-white"> Admin <a href="" class="text-white"> SMK PGRI 4 Pasuruan</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?= base_url('assets/'); ?>vendor2/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor2/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor2/js/mazer.js"></script>
</body>

</html>