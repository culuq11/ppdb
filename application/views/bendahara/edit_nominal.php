<div class="page-content">

    <?= $this->session->flashdata('message'); ?>
    <form action="" method="POST">
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
                                        <input type="text" class="form-control" name="nama_biaya" id="nama_biaya" autocomplete="off" value="<?= $getBiaya['nama_biaya']; ?>">
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
                                        <input type="text" class="form-control" name="nominal" id="nominal" autocomplete="off" value="<?= $getBiaya['nominal']; ?>">
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
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Ubah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <section class="section">
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
                                            <a href="<?= base_url('admin/edit_nominal/') . $b['id_biaya']; ?>" class="badge bg-warning"><i class="far fa-edit"></i></a>
                                            <a href="" class="badge bg-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>