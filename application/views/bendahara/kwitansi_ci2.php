<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor2/css/app.css">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>/img/logo.png" type="image/x-icon">
    <style>
        u {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="card mt-1">
        <div class="card-header">
            <div>
                <div class="d-flex justify-content-between">
                    <span><img src="<?= base_url('assets/'); ?>img/kwitansi_du.png" width="350px"></span>
                    <span class="float-right h6 text-dark"><?= date('d M Y H:i:s', $getPembayaran['tgl_bayar_ci2']); ?></span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Nama Siswa</label>
                        </div>
                        <div class="col-lg-1 col-1">
                            <label class="col-form-label">:</label>
                        </div>
                        <div class="col-lg-9 col-8">
                            <?php foreach ($siswa_baru as $sb) : ?>
                                <?php if ($getPembayaran['siswa_id_2'] == $sb['id_siswa']) : ?>
                                    <input type="text" class="form-control" value="<?= $sb['nama']; ?>" readonly>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Untuk Pembayaran</label>
                        </div>
                        <div class="col-lg-1 col-1">
                            <label class="col-form-label">:</label>
                        </div>
                        <div class="col-lg-9 col-8">
                            <input type="text" class="form-control" value="<?= $getPembayaran['jenis_pembayaran']; ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Untuk Pembayaran</label>
                        </div>
                        <div class="col-lg-1 col-1">
                            <label class="col-form-label">:</label>
                        </div>
                        <div class="col-lg-9 col-8">
                            <h5><i class="text-dark"><u><?= terbilang($getPembayaran['cicilan_kedua']); ?> Rupiah</u></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                        </div>
                        <div class="col-lg-1 col-1">
                            <label class="col-form-label">Rp.</label>
                        </div>
                        <div class="col-lg-4 col-4">
                            <input type="text" class="form-control" value="<?= number_format($getPembayaran['cicilan_kedua'], 0, ',', '.'); ?> ,-" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-4 col-4">
                            <p class="text-dark"><i>* Apabila terjadi pembatalan, pembayaran yang masuk tidak dapat dikembalikan.</i></p>
                        </div>
                        <div class="col-lg-4 col-4">
                            <p>Bendahara PPDB</p>
                            </br>
                            <span><strong>M. Sukron Makmun, S.Pd</strong></span>
                            </br>
                            <span><strong>NIP. - </strong></span>
                        </div>
                        <div class="col-lg-4 col-4">
                            <p>Nama Siswa</p>
                            </br>
                            <?php foreach ($siswa_baru as $sb) : ?>
                                <?php if ($getPembayaran['siswa_id_2'] == $sb['id_siswa']) : ?>
                                    <span><strong><?= $sb['nama']; ?></strong></span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>


</body>

</html>