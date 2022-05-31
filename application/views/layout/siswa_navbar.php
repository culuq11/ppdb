<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?= base_url('assets/'); ?>img/logo.png" class="navbar-brand-img">
                <h2 class="text-dark">SMK PGRI 4 Pasuruan</h2>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">

                <!-- <li class="sidebar-item ">
                    <a href="<?= base_url('admin'); ?>" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li> -->
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <?php if ($this->session->userdata('role') == 'siswa') : ?>
                        <li class="nav-item <?= current_url() == base_url('siswa') ? "active" : '' ?> ">
                            <a class="nav-link active" href="<?= base_url('siswa'); ?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    <?php elseif ($this->session->userdata('role') == 'verif') : ?>
                        <li class="nav-item <?= current_url() == base_url('verif') ? "active" : '' ?> ">
                            <a class="nav-link active" href="<?= base_url('verif'); ?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
            </div>
        </div>
    </div>
</nav>