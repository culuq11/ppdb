    <div class="page-content">
        <section id="input-with-icons">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Siswa Baru</h4>
                            <div class="d-flex justify-content-between">
                                <a href="<?= base_url('ketua/verif'); ?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <?php if (!$getSiswa['nama_verifikator'] == '') : ?>
                                    <p class="float-right">Verifikator : <strong><?= $getSiswa['nama_verifikator']; ?> || <?= $getSiswa['status_verifikator']; ?></strong></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <form action="" method="POST">
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">Data Diri</h4>
                                    <h6 class="float-right">Tanggal Daftar : <strong><?= date('d M Y H:i:s', $getSiswa['tgl_buat']); ?></strong></h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>NISN Siswa</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="hidden" class="form-control" value="<?= $getSiswa['id_siswa']; ?>" id="id_siswa" name="id_siswa" disabled>
                                            <input type="text" class="form-control" value="<?= $getSiswa['nisn']; ?>" id="nisn" disabled>
                                            <div class="form-control-icon">
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nomor Registrasi</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['no_reg']; ?>" id="no_reg" disabled>
                                            <div class="form-control-icon">
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['nik']; ?>" id="nik_siswa" name="nik_siswa" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nik_siswa', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nomor KK</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['no_kk']; ?>" id="no_kk" name="no_kk" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                        <?= form_error('no_kk', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Nama Lengkap Siswa</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['nama']; ?>" id="nama_lengkap" name="nama_lengkap" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nama_lengkap', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="jenis_kelamin" id="jenis_kelamin">
                                                <option value="">= Pilih Jenis Kelamin =</option>
                                                <?php foreach ($jenis_kelamin as $jk) : ?>
                                                    <?php if ($jk == $getSiswa['jenis_kelamin']) : ?>
                                                        <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('jenis_kelamin', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="agama" id="agama">
                                                <option value="">=== Pilih Agama ===</option>
                                                <?php foreach ($agamas as $agama) : ?>
                                                    <?php if ($agama == $getSiswa['agama']) : ?>
                                                        <option value="<?= $agama; ?>" selected><?= $agama; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $agama; ?>"><?= $agama; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('agama', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Tempat Lahir</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['tempat_lahir']; ?>" id="tempat_lahir" name="tempat_lahir" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-street-view"></i>
                                            </div>
                                        </div>
                                        <?= form_error('tempat_lahir', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="date" class="form-control" value="<?= $getSiswa['tgl_lahir']; ?>" id="tgl_lahir" name="tgl_lahir" autocomplete="off">
                                        <?= form_error('tgl_lahir', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['alamat_regis']; ?>" id="alamat" name="alamat" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-house-user"></i>
                                            </div>
                                        </div>
                                        <?= form_error('alamat', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-1">
                                        <label>RT</label>
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <input type="number" class="form-control" value="<?= $getSiswa['rt']; ?>" id="rt" name="rt" autocomplete="off">
                                        <?= form_error('rt', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-1">
                                        <label>RW</label>
                                    </div>
                                    <div class="col-md-1 form-group">
                                        <input type="number" class="form-control" value="<?= $getSiswa['rw']; ?>" id="rw" name="rw" autocomplete="off">
                                        <?= form_error('rw', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Kelurahan / Desa</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['kelurahan_desa']; ?>" id="kelurahan_desa" name="kelurahan_desa" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>
                                        <?= form_error('kelurahan_desa', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Kecamatan</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['kecamatan']; ?>" id="kecamatan" name="kecamatan" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>
                                        <?= form_error('kecamatan', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Kota / Kabupaten</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['kota_kab']; ?>" id="kota_kab" name="kota_kab" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>
                                        <?= form_error('kota_kab', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Kode Pos</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['kode_pos']; ?>" id="kode_pos" name="kode_pos" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-building"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Kewarganegaraan</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="kewarganegaraan" id="kewarganegaraan">
                                                <option value="">=== Pilih Kewarganegaraan ===</option>
                                                <?php foreach ($warganegara as $wn) : ?>
                                                    <?php if ($wn == $getSiswa['kewarganegaraan']) : ?>
                                                        <option value="<?= $wn; ?>" selected><?= $wn; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $wn; ?>"><?= $wn; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('kewarganegaraan', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Tinggal Bersama</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="tinggal_bersama" id="tinggal_bersama">
                                                <option value="">=== Pilih Tinggal Bersama ===</option>
                                                <?php foreach ($bersamas as $bersama) : ?>
                                                    <?php if ($bersama == $getSiswa['tinggal_bersama']) : ?>
                                                        <option value="<?= $bersama; ?>" selected><?= $bersama; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $bersama; ?>"><?= $bersama; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('tinggal_bersama', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Transportasi</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="transportasi" id="transportasi">
                                                <option value="">=== Pilih Transportasi ===</option>
                                                <?php foreach ($transport as $tr) : ?>
                                                    <?php if ($tr == $getSiswa['transportasi']) : ?>
                                                        <option value="<?= $tr; ?>" selected><?= $tr; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $tr; ?>"><?= $tr; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('transportasi', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Anak Ke-</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['anak_ke']; ?>" id="anak_ke" name="anak_ke" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-user-friends"></i>
                                            </div>
                                        </div>
                                        <?= form_error('anak_ke', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Jumlah Saudara</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['saudara']; ?>" id="saudara" name="saudara" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-user-friends"></i>
                                            </div>
                                        </div>
                                        <?= form_error('saudara', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Telepon</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['telp']; ?>" id="telp" name="telp" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-mobile-alt"></i>
                                            </div>
                                        </div>
                                        <?= form_error('telp', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nomor PKH</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['no_pkh']; ?>" id="no_pkh" name="no_pkh" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Nomor KIP</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['no_kip']; ?>" id="no_kip" name="no_kip" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nama KIP</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['nama_kip']; ?>" id="nama_kip" name="nama_kip" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Tinggi Badan</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['tinggi_badan']; ?>" id="tinggi_badan" name="tinggi_badan" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-portrait"></i>
                                            </div>
                                        </div>
                                        <?= form_error('tinggi_badan', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Berat Badan</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['berat_badan']; ?>" id="berat_badan" name="berat_badan" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-portrait"></i>
                                            </div>
                                        </div>
                                        <?= form_error('berat_badan', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Ukuran Baju</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="ukuran_baju" id="ukuran_baju">
                                                <option value="">=== Pilih Ukuran Baju ===</option>
                                                <?php foreach ($ukuran_baju as $ub) : ?>
                                                    <?php if ($ub == $getSiswa['ukuran_baju']) : ?>
                                                        <option value="<?= $ub; ?>" selected><?= $ub; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $ub; ?>"><?= $ub; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('ukuran_baju', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Asal Sekolah</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['asal_sekolah']; ?>" id="asal_sekolah" name="asal_sekolah" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-university"></i>
                                            </div>
                                        </div>
                                        <?= form_error('asal_sekolah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Orang Tua</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Nama Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['nama_ayah']; ?>" id="nama_ayah" name="nama_ayah" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nama_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nama Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" value="<?= $getSiswa['nama_ibu']; ?>" id="nama_ibu" name="nama_ibu" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nama_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Status Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="status_ayah" id="status_ayah">
                                                <option value="">=== Pilih Status Ayah ===</option>
                                                <?php foreach ($status_ortu as $so) : ?>
                                                    <?php if ($so == $getSiswa['status_ayah']) : ?>
                                                        <option value="<?= $so; ?>" selected><?= $so; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $so; ?>"><?= $so; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('status_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Status Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="status_ibu" id="status_ibu">
                                                <option value="">=== Pilih Status Ibu ===</option>
                                                <?php foreach ($status_ortu as $so) : ?>
                                                    <?php if ($so == $getSiswa['status_ibu']) : ?>
                                                        <option value="<?= $so; ?>" selected><?= $so; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $so; ?>"><?= $so; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('status_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>NIK Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['nik_ayah']; ?>" id="nik_ayah" name="nik_ayah" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nik_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>NIK Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['nik_ibu']; ?>" id="nik_ibu" name="nik_ibu" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-address-card"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nik_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Tahun Lahir Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['thn_lahir_ayah']; ?>" id="thn_lahir_ayah" name="thn_lahir_ayah" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <?= form_error('thn_lahir_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Tahun Lahir Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="number" class="form-control" value="<?= $getSiswa['thn_lahir_ibu']; ?>" id="thn_lahir_ibu" name="thn_lahir_ibu" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                        <?= form_error('thn_lahir_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Pendidikan Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="pend_ayah" id="pend_ayah">
                                                <option value="">=== Pilih Pendidikan Orangtua ===</option>
                                                <?php foreach ($pend_ortu as $po) : ?>
                                                    <?php if ($po == $getSiswa['pend_ayah']) : ?>
                                                        <option value="<?= $po; ?>" selected><?= $po; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $po; ?>"><?= $po; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('pend_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Pendidikan Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="pend_ibu" id="pend_ibu">
                                                <option value="">=== Pilih Pendidikan Orangtua ===</option>
                                                <?php foreach ($pend_ortu as $po) : ?>
                                                    <?php if ($po == $getSiswa['pend_ibu']) : ?>
                                                        <option value="<?= $po; ?>" selected><?= $po; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $po; ?>"><?= $po; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('pend_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Pekerjaan Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="pekerjaan_ayah" id="pekerjaan_ayah">
                                                <option value="">=== Pilih Pekerjaan Orangtua ===</option>
                                                <?php foreach ($kerja_ortu as $ko) : ?>
                                                    <?php if ($ko == $getSiswa['pekerjaan_ayah']) : ?>
                                                        <option value="<?= $ko; ?>" selected><?= $ko; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $ko; ?>"><?= $ko; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('pekerjaan_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Pekerjaan Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                                <option value="">=== Pilih Pekerjaan Orangtua ===</option>
                                                <?php foreach ($kerja_ortu as $ko) : ?>
                                                    <?php if ($ko == $getSiswa['pekerjaan_ibu']) : ?>
                                                        <option value="<?= $ko; ?>" selected><?= $ko; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $ko; ?>"><?= $ko; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('pekerjaan_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Penghasilan Ayah</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="penghasilan_ayah" id="penghasilan_ayah">
                                                <option value="">=== Pilih Penghasilan Orangtua ===</option>
                                                <?php foreach ($hasil_ortu as $ho) : ?>
                                                    <?php if ($ho == $getSiswa['penghasilan_ayah']) : ?>
                                                        <option value="<?= $ho; ?>" selected><?= $ho; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $ho; ?>"><?= $ho; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('penghasilan_ayah', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Penghasilan Ibu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group">
                                            <select class="choices form-select" name="penghasilan_ibu" id="penghasilan_ibu">
                                                <option value="">=== Pilih Penghasilan Orangtua ===</option>
                                                <?php foreach ($hasil_ortu as $ho) : ?>
                                                    <?php if ($ho == $getSiswa['penghasilan_ibu']) : ?>
                                                        <option value="<?= $ho; ?>" selected><?= $ho; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $ho; ?>"><?= $ho; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('penghasilan_ibu', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="d-flex justify-content-between">
                                        <a href="<?= base_url('ketua/verif'); ?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                                        <button type="submit" class="btn btn-success lg-6">Verifikasi</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

    </div>