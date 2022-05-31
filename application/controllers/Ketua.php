<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ketua extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_PPDB', 'ppdb');

        date_default_timezone_set('Asia/Jakarta');
        is_login_admin();
        is_ketua();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/index', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function manajemen_user()
    {
        $data['title'] = 'Manajemen Pengguna';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengguna'] = $this->ppdb->show('tb_user');
        $data['stt_panitia'] = ['Ketua Panitia', 'Sekretaris', 'Bendahara 1', 'Bendahara 2', 'Pembantu Umum'];
        $data['role_panitia'] = ['ketua', 'sekretaris', 'bendahara', 'PU'];

        $this->form_validation->set_rules('nama', 'Nama Panitia', 'required|trim');
        $this->form_validation->set_rules('status_user', 'Jabatan Panitia', 'required|trim');
        $this->form_validation->set_rules('role', 'Role Panitia', 'required|trim');
        $this->form_validation->set_rules('username', 'Username Panitia', 'required|trim');
        $this->form_validation->set_rules('password_1', 'Password', 'required|trim|min_length[5]|matches[password_2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password_2', 'Konfirmasi Password', 'required|trim|matches[password_1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('ketua/manajemen_user', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'status_user' => $this->input->post('status_user'),
                'role' => $this->input->post('role'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password_1'), PASSWORD_DEFAULT),
                'pass_tampil' => $this->input->post('password_1'),
                'is_active' => 1,
            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Data Berhasil diverifikasi.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('ketua/manajemen_user');
        }
    }

    public function detail_user($id)
    {
        $data['title'] = 'Edit Data Pengguna';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['getUser'] = $this->ppdb->getId($id, 'tb_user', 'id_user');

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/detail_user', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function hapus_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
        <strong><i class="fas fa-check-double"></i> Data Berhasil dihapus.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('ketua/manajemen_user');
    }

    public function data_siswa()
    {
        $data['title'] = 'Edit Data Pengguna';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/detail_siswa', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function verif()
    {
        $data['title'] = 'Verifikasi Data';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/verif', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    // public function edit_verif($id)
    // {
    //     $data['title'] = 'Verifikasi Data';
    //     $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
    //     $data['agamas'] = ['Islam', 'Kristen', 'Katholik', 'Buddha', 'Hindu', 'Konghuchu', 'Tuhan Yang Maha Esa', 'Lainnya'];
    //     $data['bersamas'] = ['Bersama Orang Tua', 'Wali', 'Kos', 'Asrama', 'Panti Asuhan', 'Pesantren', 'Lainnya'];
    //     $data['transport'] = ['Jalan Kaki', 'Angkutan Umum/bus/pete-pete', 'Mobil/Bus Antar Jemput', 'Kereta Api', 'Ojek', 'Andong/Bendi/Sado/Dokar/Delman/Becak', 'Perahu Penyeberangan/Rakit/Getek', 'Kuda', 'Sepeda', 'Sepeda Motor', 'Mobil Pribadi', 'Lainnya'];
    //     $data['status_ortu'] = ['Masih Hidup', 'Meninggal', 'Cerai', 'Lainnya'];
    //     $data['pend_ortu'] = ['S1', 'S2', 'S2 Terapan', 'S3', 'S3 Terapan', 'D1', 'D2', 'D3', 'D4', 'TK Sederajat', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'Tidak Sekolah', 'Putus SD', 'Informal', 'Nonformal', 'PAUD', 'Paket A', 'Paket B', 'Paket C', 'Profesi', 'Sp-1', 'Sp-2', 'Lainnya'];
    //     $data['kerja_ortu'] = ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/Polri', 'Karyawan Swasta', 'Pedagang Kecil', 'Petani Besar', 'Wirausaha', 'Wiraswasta', 'Buruh', 'Pensiunan', 'Tenaga Kerja Indonesia', 'Tidak Dapat diterapkan', 'Sudah Meninggal', 'Lainnya'];
    //     $data['hasil_ortu'] = ['Tidak Berpenghasilan', 'Kurang dari RP. 500.000', 'Rp. 500.000 - Rp. 999.999', 'Rp. 1.000.000 - Rp. 1.999.999', 'Rp. 2.000.000 - Rp. 4.999.999', 'Rp. 5.000.000 - Rp. 20.000.000', 'Lebih dari Rp. 20.000.000', 'Lainnya'];
    //     $data['ukuran_baju'] = ['Small (S)', 'Medium (M)', 'Large (L)', 'ExtraLarge (XL)', 'DoubleExtra Large (XXL)', 'TripleExtra Large (XXXL)', 'All Size'];
    //     $data['warganegara'] = ['WNI', 'WNA', 'Lainnya'];
    //     $data['getSiswa'] = $this->ppdb->getId($id, 'tb_siswa', 'id_siswa');
    //     $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
    //     $data['jurusan'] = $this->ppdb->show('tb_jurusan');

    //     $this->form_validation->set_rules('nik_siswa', 'NIK Siswa', 'required|trim|numeric|is_unique[tb_siswa.nik]|max_length[16]', [
    //         'is_unique' => 'NIK ini Sudah Ada!'
    //     ]);
    //     $this->form_validation->set_rules('no_kk', 'No KK Siswa', 'required|trim|numeric|max_length[16]');
    //     $this->form_validation->set_rules('nama_lengkap', 'Nama Siswa', 'required|trim');
    //     $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin Siswa', 'required|trim');
    //     $this->form_validation->set_rules('agama', 'Agama Siswa', 'required|trim');
    //     $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'required|trim');
    //     $this->form_validation->set_rules('tgl_lahir', 'Tempat Lahir Siswa', 'required|trim');
    //     $this->form_validation->set_rules('alamat', 'Alamat Siswa', 'required|trim');
    //     $this->form_validation->set_rules('rt', 'RT', 'required|trim|numeric');
    //     $this->form_validation->set_rules('rw', 'RW', 'required|trim|numeric');
    //     $this->form_validation->set_rules('kelurahan_desa', 'Kelurahan / Desa', 'required|trim');
    //     $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
    //     $this->form_validation->set_rules('kota_kab', 'Kota / Kabupaten', 'required|trim');
    //     $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required|trim');
    //     $this->form_validation->set_rules('tinggal_bersama', 'TInggal Bersama', 'required|trim');
    //     $this->form_validation->set_rules('transportasi', 'Transportasi', 'required|trim');
    //     $this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required|trim|numeric');
    //     $this->form_validation->set_rules('saudara', 'Jumlah Saudara', 'required|trim|numeric');
    //     $this->form_validation->set_rules('telp', 'Telepon', 'required|trim|numeric');
    //     $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required|trim|numeric');
    //     $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required|trim|numeric');
    //     $this->form_validation->set_rules('ukuran_baju', 'Ukuran Baju', 'required|trim');
    //     $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required|trim');
    //     $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim');
    //     $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
    //     $this->form_validation->set_rules('status_ayah', 'Status Ayah', 'required|trim');
    //     $this->form_validation->set_rules('status_ibu', 'Status Ibu', 'required|trim');
    //     $this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'required|trim|numeric|is_unique[tb_siswa.nik_ayah]|max_length[16]', [
    //         'is_unique' => 'NIK ini Sudah Ada!'
    //     ]);
    //     $this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required|trim|numeric|is_unique[tb_siswa.nik_ibu]|max_length[16]', [
    //         'is_unique' => 'NIK ini Sudah Ada!'
    //     ]);
    //     $this->form_validation->set_rules('thn_lahir_ayah', 'Tahun Lahir Ayah', 'required|trim|numeric');
    //     $this->form_validation->set_rules('thn_lahir_ibu', 'Tahun Lahir Ibu', 'required|trim|numeric');
    //     $this->form_validation->set_rules('pend_ayah', 'Pendidikan Ayah', 'required|trim');
    //     $this->form_validation->set_rules('pend_ibu', 'Pendidikan Ibu', 'required|trim');
    //     $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required|trim');
    //     $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required|trim');
    //     $this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan Ayah', 'required|trim');
    //     $this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan Ibu', 'required|trim');


    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('layout/admin_header', $data);
    //         $this->load->view('layout/admin_sidebar', $data);
    //         $this->load->view('ketua/edit_verif', $data);
    //         $this->load->view('layout/admin_footer', $data);
    //     } else {
    //         $data = [
    //             'nik' => $this->input->post('nik_siswa'),
    //             'no_kk' => $this->input->post('no_kk'),
    //             'nama' => $this->input->post('nama_lengkap'),
    //             'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    //             'agama' => $this->input->post('agama'),
    //             'tempat_lahir' => $this->input->post('tempat_lahir'),
    //             'tgl_lahir' => $this->input->post('tgl_lahir'),
    //             'alamat' => $this->input->post('alamat'),
    //             'rt' => $this->input->post('rt'),
    //             'rw' => $this->input->post('rw'),
    //             'kelurahan_desa' => $this->input->post('kelurahan_desa'),
    //             'kecamatan' => $this->input->post('kecamatan'),
    //             'kota_kab' => $this->input->post('kota_kab'),
    //             'kode_pos' => $this->input->post('kode_pos'),
    //             'kewarganegaraan' => $this->input->post('kewarganegaraan'),
    //             'tinggal_bersama' => $this->input->post('tinggal_bersama'),
    //             'transportasi' => $this->input->post('transportasi'),
    //             'anak_ke' => $this->input->post('anak_ke'),
    //             'saudara' => $this->input->post('saudara'),
    //             'no_pkh' => $this->input->post('no_pkh'),
    //             'no_kip' => $this->input->post('no_kip'),
    //             'nama_kip' => $this->input->post('nama_kip'),
    //             'telp' => $this->input->post('telp'),
    //             'tinggi_badan' => $this->input->post('tinggi_badan'),
    //             'berat_badan' => $this->input->post('berat_badan'),
    //             'ukuran_baju' => $this->input->post('ukuran_baju'),
    //             'asal_sekolah' => $this->input->post('asal_sekolah'),
    //             'nama_ayah' => $this->input->post('nama_ayah'),
    //             'nama_ibu' => $this->input->post('nama_ibu'),
    //             'status_ayah' => $this->input->post('status_ayah'),
    //             'status_ibu' => $this->input->post('status_ibu'),
    //             'nik_ayah' => $this->input->post('nik_ayah'),
    //             'nik_ibu' => $this->input->post('nik_ibu'),
    //             'thn_lahir_ayah' => $this->input->post('thn_lahir_ayah'),
    //             'thn_lahir_ibu' => $this->input->post('thn_lahir_ibu'),
    //             'pend_ayah' => $this->input->post('pend_ayah'),
    //             'pend_ibu' => $this->input->post('pend_ibu'),
    //             'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
    //             'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
    //             'penghasilan_ayah' => $this->input->post('penghasilan_ayah'),
    //             'penghasilan_ibu' => $this->input->post('penghasilan_ibu'),
    //             'status_verif' => 'Proses Pembayaran',
    //         ];
    //         $this->db->where('id_siswa', $id);
    //         $this->db->update('tb_siswa', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
    //         <strong><i class="fas fa-check-double"></i> Data Berhasil diverifikasi.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>');
    //         redirect('ketua/verif');
    //     }
    // }

    // public function akun_siswa($id)
    // {
    //     $data['title'] = 'Reset Akun Siswa';
    //     $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['getSiswa'] = $this->ppdb->getId($id, 'tb_siswa', 'id_siswa');
    //     $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
    //     $data['jurusan'] = $this->ppdb->show('tb_jurusan');

    //     $this->form_validation->set_rules('password_reset', 'Password', 'required|trim');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('layout/admin_header', $data);
    //         $this->load->view('layout/admin_sidebar', $data);
    //         $this->load->view('ketua/akun_siswa', $data);
    //         $this->load->view('layout/admin_footer', $data);
    //     } else {
    //         $data = [
    //             'pass_tampil' => $this->input->post('password_reset'),
    //             'password' => password_hash($this->input->post('password_reset'), PASSWORD_DEFAULT),
    //         ];
    //         $this->db->where('id_siswa', $id);
    //         $this->db->update('tb_siswa', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
    //         <strong><i class="fas fa-check-double"></i> Akun Berhasil direset.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>');
    //         redirect('ketua/verif');
    //     }
    // }

    // public function hapus_siswa($id)
    // {
    //     $data['title'] = 'Verifikasi Data';
    //     $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['getSiswa'] = $this->ppdb->getId($id, 'tb_siswa', 'id_siswa');
    //     $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
    //     $data['jurusan'] = $this->ppdb->show('tb_jurusan');

    //     $this->form_validation->set_rules('ket_hapus', 'Keterangan', 'required|trim');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('layout/admin_header', $data);
    //         $this->load->view('layout/admin_sidebar', $data);
    //         $this->load->view('ketua/verif', $data);
    //         $this->load->view('layout/admin_footer', $data);
    //     } else {
    //         $data = [
    //             'ket_hapus' => $this->input->post('ket_hapus'),
    //             'status_verif' => 'Keluar',
    //         ];
    //         $this->db->where('id_siswa', $id);
    //         $this->db->update('tb_siswa', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
    //         <strong><i class="fas fa-check-double"></i> Data Berhasil dihapus.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>');
    //         redirect('ketua/verif');
    //     }
    // }

    public function verif_du()
    {
        $data['title'] = 'Verifikasi Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');
        $data['pembayaran'] = $this->ppdb->JoinPembayaran();

        $this->form_validation->set_rules('status_verif', 'Status Verif', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('ketua/verif_du', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $id_siswa = $this->input->post('siswa_id_2');
            $data = [
                'status_verif' => $this->input->post('status_verif'),
            ];
            $this->db->where('id_siswa', $id_siswa);
            $this->db->update('tb_siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Data Berhasil disimpan dan lolos PPDB SMK PGRI 4 Pasuruan.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('ketua/verif_du');
        }
    }

    public function seragam()
    {
        $data['title'] = 'Data Pembayaran Seragam';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/seragam', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function seragam_wanita()
    {
        $data['title'] = 'Data Pembayaran Seragam';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');
        $data['pembayaran'] = $this->ppdb->JoinPembayaran();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/seragam_wanita', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function seragam_pria()
    {
        $data['title'] = 'Data Pembayaran Seragam';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');
        $data['pembayaran'] = $this->ppdb->JoinPembayaran();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/seragam_pria', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function mpls()
    {
        $data['title'] = 'Data MPLS';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/mpls', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function siswa_keluar()
    {
        $data['title'] = 'Data Siswa Keluar';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('ketua/siswa_keluar', $data);
        $this->load->view('layout/admin_footer', $data);
    }
}
