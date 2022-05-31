<div class="page-content">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="text-danger">HALAMAN INI MASIH DALAM PERBAIKAN</h3>
                    <h3 class="text-danger">SABAR YAAAAAAA! YANG BIKIN LAGI POSEENG.</h3>
                </div>
            </div>
        </div>
    </div>
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
                                    <h6 class="text-muted font-semibold">Siswa Baru</h6>
                                    <h6 class="font-extrabold mb-0"><?= $this->db->get('tb_siswa')->num_rows(); ?></h6>
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
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
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
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
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
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Jurusan</th>
                                        <th class="text-center">Laki-Laki</th>
                                        <th class="text-center">Perempuan</th>
                                        <th class="text-center">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Otomatisasi dan Tata Kelola Perkantoran</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">4</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Akuntansi dan Keuangan Lembaga</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">4</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Tata Kecantikan Kulit dan Rambut</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">4</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><strong>JUMLAH</strong></td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">4</td>
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
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>