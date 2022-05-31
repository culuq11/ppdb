<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <h3 class="text-white"><i class="fas fa-user-graduate"></i></h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Jumlah Siswa Baru</h6>
                                    <h6 class="font-extrabold mb-0"><?= $this->db->get('tb_siswa')->num_rows(); ?> Siswa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <h3 class="text-white"><i class="far fa-address-book"></i></h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Daftar Ulang</h6>
                                    <h6 class="font-extrabold mb-0">Rp. <?= number_format($total_DU->total_bayar, 0, ',', '.'); ?> ,-</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <h3 class="text-white"><i class="far fa-address-book"></i></h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Seragam</h6>
                                    <h6 class="font-extrabold mb-0">Rp. <?= number_format($total_Seragam->total_bayar, 0, ',', '.'); ?> ,-</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <h5 class="text-center">Jumlah Siswa Baru</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Jurusan</th>
                                        <th>Laki-Laki</th>
                                        <th>Perempuan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $laki = 0;
                                    $perempuan = 0;
                                    foreach ($siswa as $index => $sis) : ?>
                                        <?php if ($sis['jurusan_id'] == '0') : ?>
                                        <?php else : ?>
                                            <?php $laki += $sis["males"] ?>
                                            <?php $perempuan += $sis["females"] ?>
                                            <tr>
                                                <td class="text-center"><?= $index + 0 ?></td>
                                                <td class="text-center"><?= $sis['komp_keahlian'] ?></td>
                                                <td class="text-center"><?= $sis['males'] ?></td>
                                                <td class="text-center"><?= $sis['females'] ?></td>
                                                <td class="text-center"><?= $sis['females'] + $sis['males'] ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <tr class="text-center">
                                        <td colspan="2">Total</td>
                                        <td><?= $laki ?></td>
                                        <td><?= $perempuan ?></td>
                                        <td><?= $perempuan + $laki ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?= base_url('assets/'); ?>vendor2/images/faces/1.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h6 class="font-bold"><?= $user['nama']; ?></h6>
                            <h6 class="text-muted mb-0"><?= $user['role']; ?></h6>
                        </div>
                    </div>
                    <div>
                        <a class='btn btn-block btn-xl btn-light-primary font-bold mt-3' href="<?= base_url('admin/edit_profil'); ?>">Edit Profil</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <h5 class="text-center">Jumlah Verif Siswa</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Belum Verif</td>
                                <td><?= $belum_verif; ?> Siswa</td>
                            </tr>
                            <tr class="text-center">
                                <td>Terverifikasi</td>
                                <td><?= $terverifikasi; ?> Siswa</td>
                            </tr>
                            <tr class="text-center">
                                <td><strong>Total</strong></td>
                                <td><?= $belum_verif + $terverifikasi; ?> Siswa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div> -->
        </div>
    </section>
</div>