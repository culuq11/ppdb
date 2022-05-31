    <div class="page-content">
        <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
        </div> -->
        <!-- <?php if ($this->session->flashdata('message')) : ?>
        <?php endif; ?> -->
        <?= $this->session->flashdata('message'); ?>

        <section class="section">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Pilih Data Pembayaran Seragam</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="row mb-4">
                                    <a href="<?= base_url('bendahara/seragam_pria'); ?>" class="btn btn-lg btn-outline-info">Data Pembayaran Seragam Laki-Laki</a>
                                </div>
                                <div class="row">
                                    <a href="<?= base_url('bendahara/seragam_wanita'); ?>" class="btn btn-lg btn-outline-info">Data Pembayaran Seragam Perempuan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>