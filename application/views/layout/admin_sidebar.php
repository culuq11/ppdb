<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="<?= base_url('admin'); ?>"><img src="<?= base_url('assets/'); ?>img/logo22.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item <?= current_url() == base_url('admin') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin'); ?>" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/manajemen_user') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/manajemen_user'); ?>" class="sidebar-link">
                            <i class="fas fa-user-plus"></i>
                            <span>Manajemen User</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-item <?= current_url() == base_url('admin/input_nominal') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/input_nominal'); ?>" class="sidebar-link">
                            <i class="fas fa-money-bill"></i>
                            <span>Data Biaya</span>
                        </a>
                    </li> -->
                    <li class="sidebar-item <?= current_url() == base_url('admin/nominal_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/nominal_du'); ?>" class="sidebar-link">
                            <i class="fas fa-money-bill"></i>
                            <span>Data Biaya</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/data_siswa') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/data_siswa'); ?>" class="sidebar-link">
                            <i class="fas fa-user-graduate"></i>
                            <span>Data Status Siswa Baru</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/verif') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/verif'); ?>" class="sidebar-link">
                            <i class="fas fa-user-check"></i>
                            <span>Verifikasi Data</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/input_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/input_du'); ?>" class="sidebar-link">
                            <i class="fas fa-coins"></i>
                            <span>Pembayaran DU</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/input_seragam') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/input_seragam'); ?>" class="sidebar-link">
                            <i class="fas fa-coins"></i>
                            <span>Pembayaran Seragam</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/verif_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/verif_du'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Verifikasi Daftar Ulang</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/seragam') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/seragam'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Data Pemb. Seragam</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/mpls') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/mpls'); ?>" class="sidebar-link">
                            <i class="fas fa-graduation-cap"></i>
                            <span>MPLS</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('admin/siswa_keluar') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/siswa_keluar'); ?>" class="sidebar-link">
                            <i class="fab fa-accessible-icon"></i>
                            <span>Data Siswa Keluar</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-item <?= current_url() == base_url('admin/informasi') ? "active" : '' ?> ">
                        <a href="<?= base_url('admin/informasi'); ?>" class="sidebar-link">
                            <i class="fas fa-bullhorn"></i>
                            <span>Informasi</span>
                        </a>
                    </li> -->
                    <li class="sidebar-item <?= current_url() == base_url('') ? "active" : '' ?> ">
                        <a href="<?= base_url(''); ?>" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logout" data-bs-backdrop="false">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('role') == 'ketua') : ?>
                    <li class="sidebar-item <?= current_url() == base_url('ketua') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua'); ?>" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard Ketua</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/manajemen_user') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/manajemen_user'); ?>" class="sidebar-link">
                            <i class="fas fa-user-plus"></i>
                            <span>Manajemen User</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/data_siswa') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/data_siswa'); ?>" class="sidebar-link">
                            <i class="fas fa-user-graduate"></i>
                            <span>Data Status Siswa Baru</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/verif') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/verif'); ?>" class="sidebar-link">
                            <i class="fas fa-user-check"></i>
                            <span>Data Belum Verifikasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/verif_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/verif_du'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Data Pembayaran DU</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/seragam') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/seragam'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Data Pemb. Seragam</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/mpls') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/mpls'); ?>" class="sidebar-link">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Data MPLS</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('ketua/siswa_keluar') ? "active" : '' ?> ">
                        <a href="<?= base_url('ketua/siswa_keluar'); ?>" class="sidebar-link">
                            <i class="fab fa-accessible-icon"></i>
                            <span>Data Siswa Keluar</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('') ? "active" : '' ?> ">
                        <a href="<?= base_url(''); ?>" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logout" data-bs-backdrop="false">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('role') == 'sekretaris') : ?>
                    <li class="sidebar-item <?= current_url() == base_url('sekretaris') ? "active" : '' ?> ">
                        <a href="<?= base_url('sekretaris'); ?>" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard e Sekretaris</span>
                        </a>
                    </li>

                    <li class="sidebar-item <?= current_url() == base_url('sekretaris/verif') ? "active" : '' ?> ">
                        <a href="<?= base_url('sekretaris/verif'); ?>" class="sidebar-link">
                            <i class="fas fa-user-check"></i>
                            <span>Verifikasi Data</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('sekretaris/verif_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('sekretaris/verif_du'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Verifikasi Daftar Ulang</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('sekretaris/mpls') ? "active" : '' ?> ">
                        <a href="<?= base_url('sekretaris/mpls'); ?>" class="sidebar-link">
                            <i class="fas fa-graduation-cap"></i>
                            <span>MPLS</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('sekretaris/siswa_keluar') ? "active" : '' ?> ">
                        <a href="<?= base_url('sekretaris/siswa_keluar'); ?>" class="sidebar-link">
                            <i class="fab fa-accessible-icon"></i>
                            <span>Data Siswa Keluar</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('') ? "active" : '' ?> ">
                        <a href="<?= base_url(''); ?>" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logout" data-bs-backdrop="false">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('role') == 'bendahara') : ?>
                    <li class="sidebar-item <?= current_url() == base_url('bendahara') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara'); ?>" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-item <?= current_url() == base_url('bendahara/input_nominal') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara/input_nominal'); ?>" class="sidebar-link">
                            <i class="fas fa-money-bill"></i>
                            <span>Data Biaya</span>
                        </a>
                    </li> -->
                    <li class="sidebar-item <?= current_url() == base_url('bendahara/nominal_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara/nominal_du'); ?>" class="sidebar-link">
                            <i class="fas fa-money-bill"></i>
                            <span>Data Biaya</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('bendahara/input_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara/input_du'); ?>" class="sidebar-link">
                            <i class="fas fa-coins"></i>
                            <span>Pembayaran DU</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('bendahara/input_seragam') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara/input_seragam'); ?>" class="sidebar-link">
                            <i class="fas fa-coins"></i>
                            <span>Pembayaran Seragam</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('bendahara/verif_du') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara/verif_du'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Data Pembayaran DU</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('bendahara/seragam') ? "active" : '' ?> ">
                        <a href="<?= base_url('bendahara/seragam'); ?>" class="sidebar-link">
                            <i class="fas fa-check-circle"></i>
                            <span>Data Pemb. Seragam</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= current_url() == base_url('') ? "active" : '' ?> ">
                        <a href="<?= base_url(''); ?>" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logout" data-bs-backdrop="false">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3><?= $title; ?></h3>
    </div>