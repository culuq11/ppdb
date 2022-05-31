<!-- Footer -->
<footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
                &copy; <?= date('Y'); ?> <a href="https://www.smkpgri4-pas.sch.id" class="font-weight-bold ml-1" target="_blank">SMK PGRI 4 Pasuruan</a>
            </div>
        </div>
        <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank"><i class="ni ni-pin-3"></i> Jl. Ki Hajar Dewantara 27-29, Tembokrejo, Pasuruan.</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Untuk mengakhiri Sesi ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-primary">Ya ! Keluar.</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Argon Scripts -->
<!-- <script src="<?= base_url('assets/'); ?>js/dist/sweetalert2.all.min.js"></script> -->
<!-- Core -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="<?= base_url('assets/'); ?>vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="<?= base_url('assets/'); ?>js/argon.js?v=1.2.0"></script>
</body>

</html>