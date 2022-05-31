<div class="modal fade text-left" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white" id="myModalLabel120">Logout
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda akan mengakhiri sesi ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Batal</span>
                </button>
                <a href="<?= base_url('login/logout'); ?>" class="btn btn-danger ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Ya. Saya Keluar!</span>
                </a>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p><?= date('Y') ?> &copy; Admin <a href="https://smkpgri4-pas.sch.id/">SMK PGRI 4 Pasuruan</a></p>
        </div>
        <div class="float-end">
            <p>Support by<span class="text-danger"><a href="#"> A. Saugi</a></p>
        </div>
    </div>
</footer>
</div>
</div>

<script src="<?= base_url('assets/'); ?>vendor2/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/vendors/simple-datatables/simple-datatables.js"></script>

<script src="<?= base_url('assets/'); ?>vendor2/vendors/fontawesome/all.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/js/extensions/sweetalert2.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/vendors/sweetalert2/sweetalert2.all.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor2/vendors/apexcharts/apexcharts.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/js/pages/dashboard.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/vendors/choices.js/choices.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor2/js/pages/form-element-select.js"></script>

<script src="<?= base_url('assets/'); ?>vendor2/js/mazer.js"></script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#table1').DataTable();

        function filterData() {
            $('#table1').DataTable().search(
                $('.jenis_kelamin').val()
            ).draw();
        }
        $('.jenis_kelamin').on('change', function() {
            filterData();
        });
    });
</script> -->

<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script>
    function sum() {
        var kosong = '0';
        var cicilan1 = document.getElementById('cicilan_1').value;
        var cicilan2 = document.getElementById('cicilan_2').value;
        var cicilan3 = document.getElementById('cicilan_3').value;
        var result = parseInt(cicilan1) + parseInt(cicilan2) + parseInt(cicilan3);
        if (!isNaN(result)) {
            document.getElementById('jumlah_total').value = result;
        } else {
            document.getElementById('jumlah_total').value = kosong;
        }
    }
</script>

</body>

</html>