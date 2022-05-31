<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-success py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <?= $this->session->flashdata('message'); ?>

            <div class="header-body text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Selamat Datang</h1>
                        <h2 class="text-white">Calon Peserta Didik Baru</br></h2>
                        <h2 class="text-white mb-3">Tahun Pelajaran 2022/2023</h2>
                    </div>

                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 px-5">
            <img src="<?= base_url('assets/'); ?>img/siswa.png" width="425px" height="375px">
        </div>
        <div class="col-lg-6 col-md-8 px-5">
            <img src="<?= base_url('assets/'); ?>img/tkc.png" width="425px" height="375px">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card col-md-8 bg-gradient-info">
            <div class="card-title text-center">
                <span class="h2 font-weight-bold text-white">Kompetensi Keahlian</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url('assets/'); ?>img/OTKP.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Otomatisasi dan Tata Kelola Perkantoran (OTKP)</h5>
                    <p class="card-text">Kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran (OTKP) atau dulunya Administrasi Perkantoran (AP) merupakan salah satu jurusan di Sekolah Menengah Kejuruan (SMK) PGRI 4 Pasuruan yang memberikan bekal tentang berbagai informasi layanan dibidang administrasi baik secara pengetahuan, keterampilan, dan sikap dalam menyelesaikan pekerjaan-pekerjaan perusahaan, instansi atau kantor.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url('assets/'); ?>img/AKL4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Akuntansi dan Keuangan Lembaga (AKL)</h5>
                    <p class="card-text">Akuntansi adalah salah satu Kompetensi Keahlian (Jurusan) di SMK PGRI 4 Pasuruan yang berhubungan dengan angka dan hitung menghitung serta membantu pengelolaan keuangan di suatu Instansi atau Organisasi. Tujuan dari adanya kompetensi keahlian tersebut adalah menciptakan generasi yang ahli dalam bidang akuntan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url('assets/'); ?>img/TKKR2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tata Kecantikan Kulit dan Rambut (TKKR)</h5>
                    <p class="card-text">Tata Kecantikan Kulit dan Rambut merupakan salah satu kompetensi keahlian pada program keahlian Tata Kecantikan yang menekankan pada bidang tata rias, perawatan rambut dan kulit serta pengelolaan dan penyelenggaraan usaha tata rias serta mampu berkompetisi dalam mengembangkan sikap profesional dalam bidang tata rias.</p>
                </div>
            </div>
        </div>
    </div>

</div>