    <div class="page-content">

        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('bendahara/input_nominal'); ?>" method="POST">
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Biaya PPDB</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Nama Biaya</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" name="nama_biaya" id="nama_biaya" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-donate"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nama_biaya', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nominal Biaya</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" name="nominal" id="nominal" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-donate"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nominal', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

        <form action="<?= base_url('bendahara/input_nominal'); ?>" method="POST">
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Biaya PPDB</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <label>Nama Biaya</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" name="nama_biaya" id="nama_biaya" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-donate"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nama_biaya', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Nominal Biaya</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="form-group position-relative has-icon-right">
                                            <input type="text" class="form-control" name="nominal" id="nominal" autocomplete="off">
                                            <div class="form-control-icon">
                                                <i class="fas fa-donate"></i>
                                            </div>
                                        </div>
                                        <?= form_error('nominal', '<div class="alert alert-danger alert-dismissible show fade"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

        <!-- <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Daftar Biaya</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Biaya</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php if (empty($biaya)) : ?>
                                        <tr>
                                            <td colspan="4">
                                                <div class="alert alert-danger" role="alert">
                                                    Data Tidak Ditemukan.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php foreach ($biaya as $b) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $b['nama_biaya']; ?></td>
                                            <td><?= $b['nominal']; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('bendahara/edit_nominal/') . $b['id_biaya']; ?>" class="badge bg-warning"><i class="far fa-edit"></i></a>
                                                <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus_biaya<?= $b['id_biaya']; ?>"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    </div>

    <!-- <?php foreach ($biaya as $b) : ?>
        <div class="modal fade text-left w-100" id="hapus_biaya<?= $b['id_biaya']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel16">Hapus Biaya</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <p>Apakah anda akan menghapus biaya <strong><?= $b['nama_biaya']; ?></strong> dengan nominal <strong>Rp. <?= number_format($b['nominal'], 2, ',', '.'); ?></strong> ?</p>
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
                        <a href="<?= base_url('bendahara/hapus_nominal/') . $b['id_biaya']; ?>" class="btn btn-success ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Hapus</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?> -->