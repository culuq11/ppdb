<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bendahara extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_PPDB', 'ppdb');

        date_default_timezone_set('Asia/Jakarta');
        is_login_admin();
        is_bendahara();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('bendahara/index', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function nominal_du()
    {
        $data['title'] = 'Nominal Pembayaran';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nominal_du'] = $this->db->get_where('tb_biaya_du')->row_array();
        $data['nominal_perempuan'] = $this->db->get_where('tb_biaya_seragam2')->row_array();
        $data['nominal_seragam'] = $this->db->get_where('tb_biaya_seragam')->row_array();

        $this->form_validation->set_rules('nominal_du', 'Nominal Daftar Ulang', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/nominal', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {

            $nominal = $this->input->post('nominal_du');
            $id_biaya_du = $this->input->post('id_biaya_du');

            $this->db->set('nominal_du', $nominal);
            $this->db->where('id_biaya_du', $id_biaya_du);
            $this->db->update('tb_biaya_du');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                <strong><i class="fas fa-check-double"></i> Data Biaya Daftar Ulang Berhasil diubah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('bendahara/nominal_du');
        }
    }

    public function nominal_seragam()
    {
        $data['title'] = 'Nominal Pembayaran';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nominal_seragam'] = $this->db->get_where('tb_biaya_seragam')->row_array();
        $data['nominal_perempuan'] = $this->db->get_where('tb_biaya_seragam2')->row_array();
        $data['nominal_du'] = $this->db->get_where('tb_biaya_du')->row_array();

        $this->form_validation->set_rules('nominal_seragam', 'Nominal Seragam', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/nominal', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {

            $nominal = $this->input->post('nominal_seragam');
            $id_biaya_seragam = $this->input->post('id_biaya_seragam');

            $this->db->set('nominal_seragam', $nominal);
            $this->db->where('id_biaya_seragam', $id_biaya_seragam);
            $this->db->update('tb_biaya_seragam');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                <strong><i class="fas fa-check-double"></i> Data Biaya Seragam Berhasil diubah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('bendahara/nominal_du');
        }
    }

    public function nominal_seragam2()
    {
        $data['title'] = 'Nominal Pembayaran';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nominal_seragam'] = $this->db->get_where('tb_biaya_seragam')->row_array();
        $data['nominal_perempuan'] = $this->db->get_where('tb_biaya_seragam2')->row_array();
        $data['nominal_du'] = $this->db->get_where('tb_biaya_du')->row_array();

        $this->form_validation->set_rules('nominal_seragam2', 'Nominal Seragam', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/nominal', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {

            $nominal = $this->input->post('nominal_seragam2');
            $id_biaya_seragam2 = $this->input->post('id_biaya_seragam2');

            $this->db->set('nominal_seragam2', $nominal);
            $this->db->where('id_biaya_seragam2', $id_biaya_seragam2);
            $this->db->update('tb_biaya_seragam2');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
                <strong><i class="fas fa-check-double"></i> Data Biaya Seragam Berhasil diubah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('bendahara/nominal_du');
        }
    }

    public function input_du()
    {
        $data['title'] = 'Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['pembayaran'] = $this->ppdb->JoinPembayaran();
        $data['jenis_pembayaran_du'] = ['Daftar Ulang', 'Pelunasan Daftar Ulang', 'Daftar Ulang Cicilan 1', 'Daftar Ulang Cicilan 2', 'Daftar Ulang Cicilan 3'];

        $this->form_validation->set_rules('siswa_id', 'Nama Siswa', 'required|trim');
        $this->form_validation->set_rules('cicilan_1', 'Cicilan Pertama', 'required|trim');
        $this->form_validation->set_rules('uang_cicilan_1', 'Uang yang diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_du', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'siswa_id_2' => $this->input->post('siswa_id'),
                'cicilan_pertama' => $this->input->post('cicilan_1'),
                'cicilan_kedua' => $this->input->post('cicilan_2'),
                'cicilan_ketiga' => $this->input->post('cicilan_3'),
                'total_bayar' => $this->input->post('jumlah_total'),
                'uang_cicilan_1' => $this->input->post('uang_cicilan_1'),
                'tgl_bayar_ci1' => time(),
                'tgl_bayar_lunas' => time(),
                'ket_jenis_pemb' => 'Pembayaran Daftar Ulang',
            ];
            $this->db->insert('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Data Berhasil ditambah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_du');
        }
    }

    public function cicilan2_du($id)
    {
        $data['title'] = 'Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        // $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');
        $data['jenis_pembayaran_du'] = ['Daftar Ulang', 'Pelunasan Daftar Ulang', 'Daftar Ulang Cicilan 1', 'Daftar Ulang Cicilan 2', 'Daftar Ulang Cicilan 3'];

        $this->form_validation->set_rules('cicilan_2', 'Cicilan Kedua', 'required|trim');
        $this->form_validation->set_rules('uang_cicilan_2', 'Uang yang diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_cicilan2_du', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'cicilan_kedua' => $this->input->post('cicilan_2'),
                'total_bayar' => $this->input->post('jumlah_total'),
                'uang_cicilan_2' => $this->input->post('uang_cicilan_2'),
                'tgl_bayar_ci2' => time(),
                'tgl_bayar_lunas' => time(),
            ];
            $this->db->where('id_bayar', $id);
            $this->db->update('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Cicilan Kedua Berhasil ditambah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_du');
        }
    }

    public function cicilan3_du($id)
    {
        $data['title'] = 'Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        // $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');
        $data['jenis_pembayaran_du'] = ['Daftar Ulang', 'Pelunasan Daftar Ulang', 'Daftar Ulang Cicilan 1', 'Daftar Ulang Cicilan 2', 'Daftar Ulang Cicilan 3'];

        $this->form_validation->set_rules('cicilan_3', 'Cicilan Ketiga', 'required|trim');
        $this->form_validation->set_rules('uang_cicilan_3', 'Uang yang diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_cicilan3_du', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'cicilan_ketiga' => $this->input->post('cicilan_3'),
                'total_bayar' => $this->input->post('jumlah_total'),
                'uang_cicilan_3' => $this->input->post('uang_cicilan_3'),
                'tgl_bayar_ci3' => time(),
                'tgl_bayar_lunas' => time(),
            ];
            $this->db->where('id_bayar', $id);
            $this->db->update('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Cicilan Ketiga Berhasil ditambah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_du');
        }
    }

    public function input_seragam()
    {
        $data['title'] = 'Daftar Seragam';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_seragam'] = $this->ppdb->getsatuBaris('tb_biaya_seragam');
        $data['biaya_perempuan'] = $this->ppdb->getsatuBaris('tb_biaya_seragam2');
        $data['pembayaran'] = $this->ppdb->JoinPembayaran();
        $data['jenis_pembayaran_seragam'] = ['Seragam', 'Pelunasan Seragam', 'Seragam Cicilan 1', 'Seragam Cicilan 2', 'Seragam Cicilan 3'];

        $this->form_validation->set_rules('siswa_id', 'Nama Siswa', 'required|trim');
        $this->form_validation->set_rules('cicilan_1', 'Cicilan Pertama', 'required|trim');
        $this->form_validation->set_rules('uang_cicilan_1', 'Uang yang diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_seragam', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'siswa_id_2' => $this->input->post('siswa_id'),
                'cicilan_pertama' => $this->input->post('cicilan_1'),
                'cicilan_kedua' => $this->input->post('cicilan_2'),
                'cicilan_ketiga' => $this->input->post('cicilan_3'),
                'total_bayar' => $this->input->post('jumlah_total'),
                'uang_cicilan_1' => $this->input->post('uang_cicilan_1'),
                'tgl_bayar_ci1' => time(),
                'tgl_bayar_lunas' => time(),
                'ket_jenis_pemb' => 'Pembayaran Seragam',
            ];
            $this->db->insert('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Data Berhasil ditambah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_seragam');
        }
    }

    public function cicilan2_seragam($id)
    {
        $data['title'] = 'Daftar Seragam';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        // $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');
        $data['jenis_pembayaran_seragam'] = ['Seragam', 'Pelunasan Seragam', 'Seragam Cicilan 1', 'Seragam Cicilan 2', 'Seragam Cicilan 3'];

        $this->form_validation->set_rules('cicilan_2', 'Cicilan Kedua', 'required|trim');
        $this->form_validation->set_rules('uang_cicilan_2', 'Uang yang diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_cicilan2_seragam', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'cicilan_kedua' => $this->input->post('cicilan_2'),
                'total_bayar' => $this->input->post('jumlah_total'),
                'uang_cicilan_2' => $this->input->post('uang_cicilan_2'),
                'tgl_bayar_ci2' => time(),
                'tgl_bayar_lunas' => time(),
            ];
            $this->db->where('id_bayar', $id);
            $this->db->update('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Cicilan Kedua Berhasil ditambah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_seragam');
        }
    }

    public function cicilan3_seragam($id)
    {
        $data['title'] = 'Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        // $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');
        $data['jenis_pembayaran_seragam'] = ['Seragam', 'Pelunasan Seragam', 'Seragam Cicilan 1', 'Seragam Cicilan 2', 'Seragam Cicilan 3'];

        $this->form_validation->set_rules('cicilan_3', 'Cicilan Ketiga', 'required|trim');
        $this->form_validation->set_rules('uang_cicilan_3', 'Uang yang diterima', 'required|trim');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_cicilan3_seragam', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'cicilan_ketiga' => $this->input->post('cicilan_3'),
                'total_bayar' => $this->input->post('jumlah_total'),
                'uang_cicilan_3' => $this->input->post('uang_cicilan_3'),
                'tgl_bayar_ci3' => time(),
                'tgl_bayar_lunas' => time(),
            ];
            $this->db->where('id_bayar', $id);
            $this->db->update('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Cicilan Ketiga Berhasil ditambah.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_seragam');
        }
    }

    public function hapus_pembayaran($id)
    {
        $data['title'] = 'Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/admin_header', $data);
            $this->load->view('layout/admin_sidebar', $data);
            $this->load->view('bendahara/input_seragam', $data);
            $this->load->view('layout/admin_footer', $data);
        } else {
            $data = [
                'keterangan' => $this->input->post('keterangan'),
            ];
            $this->db->where('id_bayar', $id);
            $this->db->update('tb_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <strong><i class="fas fa-check-double"></i> Data Berhasil dihapus.</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('bendahara/input_seragam');
        }
    }

    public function kwitansi_ci1($id)
    {
        $data['title'] = 'Kwitansi PPDB';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');

        $this->load->view('bendahara/kwitansi_ci1', $data);
    }

    public function kwitansi_ci2($id)
    {
        $data['title'] = 'Kwitansi PPDB';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');

        $this->load->view('bendahara/kwitansi_ci2', $data);
    }

    public function kwitansi_ci3($id)
    {
        $data['title'] = 'Kwitansi PPDB';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');

        $this->load->view('bendahara/kwitansi_ci3', $data);
    }

    public function kwitansi_lunas($id)
    {
        $data['title'] = 'Kwitansi PPDB';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['biaya'] = $this->ppdb->show('tb_biaya');
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['daftar_ulang'] = $this->ppdb->JoinPembayaran();
        $data['getPembayaran'] = $this->ppdb->getId($id, 'tb_pembayaran', 'id_bayar');

        $this->load->view('bendahara/kwitansi_lunas', $data);
    }

    public function verif_du()
    {
        $data['title'] = 'Verifikasi Daftar Ulang';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['biaya_DU'] = $this->ppdb->getsatuBaris('tb_biaya_du');
        $data['siswa_baru'] = $this->ppdb->show('tb_siswa');
        $data['jurusan'] = $this->ppdb->show('tb_jurusan');
        $data['pembayaran'] = $this->ppdb->JoinPembayaran();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('bendahara/verif_du', $data);
        $this->load->view('layout/admin_footer', $data);
    }

    public function seragam()
    {
        $data['title'] = 'Data Pembayaran Seragam';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('layout/admin_header', $data);
        $this->load->view('layout/admin_sidebar', $data);
        $this->load->view('bendahara/seragam', $data);
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
        $this->load->view('bendahara/seragam_wanita', $data);
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
        $this->load->view('bendahara/seragam_pria', $data);
        $this->load->view('layout/admin_footer', $data);
    }
}
