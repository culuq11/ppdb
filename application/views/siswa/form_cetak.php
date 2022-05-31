<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?= $title; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/'); ?>img/logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <!-- Page content -->
        <div class="container-fluid mt--6">
            </br>
            </br>
            </br>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-profile">
                        <!-- ukuran gambar 1000x600 pixel -->
                        <img src="<?= base_url('assets/'); ?>img/ppdb2022_2.png" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/'); ?>img/student.jpg" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-6 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h5 class="h1">
                                    <?= $user['nama']; ?>
                                </h5>
                                <div class="h3 font-weight-300">
                                    <?= $user['tempat_lahir']; ?>, <?= $user['tgl_lahir']; ?>
                                </div>
                                <div class="h3 mt-4">
                                    Kompetensi Keahlian yang Dipilih :
                                    <!-- <?= $user['asal_sekolah']; ?> -->
                                </div>
                                <div class="h3 font-weight-300">
                                    <?php foreach ($jurusan as $j) : ?>
                                        <?php if ($j['id'] == $user['jurusan_id']) : ?>
                                            <?= $j['komp_keahlian']; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <!-- <div class="card-header">
                        </div> -->
                        <div class="card-body">
                            <div class="pl-lg-4">
                                <div class="d-flex justify-content-between">
                                    <h4>No. Registrasi : <strong><?= $user['no_reg']; ?></strong></h4>
                                    <h4 class="float-right">Waktu Pendaftaran : <strong><?= date('d M Y H:i:s', $user['tgl_buat']); ?></strong></h4>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <!-- Light table -->
                                <div class="table-responsive">
                                    <table class="table align-items-center table-dark table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">NISN</th>
                                                <th scope="col">Nama Ayah</th>
                                                <th scope="col">Nama Ibu</th>
                                                <th scope="col">Asal Sekolah</th>
                                                <th scope="col">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <th scope="col"><?= $user['nisn']; ?></th>
                                                <th scope="col"><?= $user['nama_ayah']; ?></th>
                                                <th scope="col"><?= $user['nama_ibu']; ?></th>
                                                <th scope="col"><?= $user['asal_sekolah']; ?></th>
                                                <th scope="col"><?= $user['alamat_regis']; ?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="pl-lg">
                                <div class="row">
                                    <div class="col-lg">
                                        <h4 class="text-center"><strong>SELAMAT ANDA DITERIMA DI SMK PGRI 4 PASURUAN.</strong></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                        <h4>Selanjutnya segera lakukan verifikasi dengan melengkapi berkas berikut ini :</h4>
                                        <ol>
                                            <li>Surat Keterangan Lulus (SKL) SMP/MTs Sederajat.</li>
                                            <li>Fotocopy Kartu Keluarga (KK) (1 Lembar).</li>
                                            <li>Fotocopy Akta Kelahiran (1 Lembar).</li>
                                            <li>Fotocopy NISN (1 Lembar).</li>
                                            <li>Fotocopy KTP Orangtua (1 Lembar).</li>
                                            <li>Fotocopy KIP/PKH (1 Lembar).</li>
                                            <li>Pas Foto ukuran 3x4 (3 Lembar).</li>
                                        </ol>
                                    </div>
                                    <!-- <div class="col-6">
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                        <h5>Waktu Verifikasi :</h5>
                                        <ul>
                                            <li>Senin - Kamis : 07.00 - 12.00 WIB.</li>
                                            <li>Jumat : 07.00 - 10.30 WIB.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg">
                                <div class="row text-center">
                                    <div class="col-lg-4">
                                        <h4>Panitia PPDB SMK PGRI 4 Pasuruan</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4><i class="ni ni-tablet-button"></i> 0813-6272-4242 (Layanan Informasi/Hotline/WA).</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4><i class="ni ni-pin-3"></i> Jl. Ki Hajar Dewantara 27-29, Tembokrejo, Pasuruan.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/'); ?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/argon.js?v=1.2.0"></script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>