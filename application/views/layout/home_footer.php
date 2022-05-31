<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-end">
            <!-- <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    <a href="" class="font-weight-bold ml-1" target="_blank"></a>
                </div>
            </div> -->
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item text-white">
                            &copy; Admin <a href="https://www.smkpgri4-pas.sch.id" class="nav-link text-white">SMK PGRI 4 Pasuruan</a>
                        </li>
                        <li class="nav-item">
                            <i class="ni ni-pin-3 text-white">Alamat</i>
                            <p class="nav-item text-white">Jalan Ki Hajar Dewantara 27-29, Tembokrejo</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="<?= base_url('assets/'); ?>js/argon.js?v=1.2.0"></script>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function show_pass1() {
        var x = document.getElementById("password1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function show_pass2() {
        var x = document.getElementById("password2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>

</html>