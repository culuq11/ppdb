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
                            <h4 class="card-title">Data Verifikasi Siswa</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Asal Sekolah</th>
                                        <th>Jurusan Dipilih</th>
                                        <th>Alamat</th>
                                        <!-- <th>Tanggal Lahir</th> -->
                                        <th>Nomor Telp / WA</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($siswa_baru)) : ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger" role="alert">
                                                    Data Tidak Ditemukan.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach ($siswa_baru as $sb) : ?>
                                        <?php if ($sb['status_verif'] == 'Belum') : ?>
                                            <tr>
                                                <td><?= $sb['nisn']; ?></td>
                                                <td><?= $sb['nama']; ?></td>
                                                <td><?= $sb['asal_sekolah']; ?></td>
                                                <?php foreach ($jurusan as $jr) : ?>
                                                    <?php if ($jr['id'] == $sb['jurusan_id']) : ?>
                                                        <td><?= $jr['komp_keahlian']; ?></td>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                <td><?= $sb['alamat_regis']; ?></td>
                                                <td class="text-center"><i class="fab fa-whatsapp"></i><a class="badge bg-success" target="_blank" href="https://api.whatsapp.com/send?phone=<?= $sb['telp']; ?>&text=Assalamualaikum, Kami dari Panitia PPDB SMK PGRI 4 Pasuruan memberitahukan bahwa Anda sudah *DITERIMA* menjadi siswa SMK PGRI 4 Pasuruan, kemudian segera lakukan verifikasi data dan melakukan Daftar Ulang ke Sekolah SMK PGRI 4 Pasuruan.
                                                
                                                Admin SMK PGRI 4 Pasuruan."><?= $sb['telp']; ?></a></td>
                                                <!-- <td><?= date('d M Y H:i:s', $sb['tgl_buat']); ?></td> -->
                                                <td>
                                                    <a href="<?= base_url('sekretaris/edit_verif/') . $sb['id_siswa']; ?>" class="badge bg-success"><i class="fas fa-check"></i></a>
                                                    <a href="<?= base_url('sekretaris/akun_siswa/') . $sb['id_siswa']; ?>" class="badge bg-info"><i class="fas fa-users-cog"></i></a>
                                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus_siswa<?= $sb['id_siswa']; ?>"><i class="fas fa-trash-alt"></i></a>
                                                    <a href="<?= base_url('sekretaris/cetakform/') . $sb['id_siswa']; ?>" class="badge bg-warning" target="_blank"><i class="fas fa-print"></i></a>
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

    <!--Basic Modal -->
    <?php foreach ($siswa_baru as $sb) : ?>
        <div class="modal fade text-left" id="hapus_siswa<?= $sb['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title white" id="myModalLabel1">Hapus Siswa</h5>
                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="<?= base_url('sekretaris/hapus_siswa/') . $sb['id_siswa']; ?>" method="POST">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <p>Apakah Anda akan menghapus data dengan nama <strong><?= $sb['nama']; ?></strong> ?</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating">
                                                    <input class="form-control" placeholder="Tulis Keterangan ....." id="ket_hapus" name="ket_hapus" autocomplete="off"></input>
                                                    <label for="ket_hapus">Tulis Keterangan</label>
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
                            <button type="submit" class="btn btn-info ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Hapus</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>