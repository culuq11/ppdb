<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Download Formulir</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted">Formulir PPPDB SMK PGRI 4 Pasuruan</h6>
                    <h6 class="heading-small text-muted mb-4">Tapel 2022/2023</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <h4>Silahkan Klik Link Download Formulir untuk mencetak Formulir Pendaftaran <a href="<?= base_url('verif/cetakform'); ?>" class="badge badge-info" target="_blank"><i class="fas fa-print"></i> Download </a></h4>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="pl-lg-4">
                        <div class="row">
                            <h4>Lengkapi Berkas Berikut ini :</h4>
                        </div>
                        <div class="row">
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
                    </div>
                    <?php if ($user['status_verif'] == 'Proses Pembayaran') : ?>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <h4>Silahkan Klik Tautan Berikut untuk masuk GRUP PPDB SMK PGRI 4 PASURUAN Tapel 2022-2023</h4>
                            </div>
                            <div class="row">
                                <h1 class="badge bg-success"><a href="https://chat.whatsapp.com/FNv8Nv6BYpyFyp0jP6Vxi4" target="_blank"><i class="fab fa-whatsapp"></i> Link Grup WHATSAPP</a></h1>
                            </div>
                        </div>
                    <?php elseif ($user['status_verif'] == 'Diterima') : ?>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <h4>Silahkan Klik Tautan Berikut untuk masuk GRUP PPDB SMK PGRI 4 PASURUAN Tapel 2022-2023</h4>
                            </div>
                            <div class="row">
                                <h1 class="badge bg-success"><a href="https://chat.whatsapp.com/FNv8Nv6BYpyFyp0jP6Vxi4" target="_blank"><i class="fab fa-whatsapp"></i> Link Grup WHATSAPP</a></h1>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>