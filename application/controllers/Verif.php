<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verif extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_PPDB', 'ppdb');
		date_default_timezone_set('Asia/Jakarta');
		is_login();
		is_verif();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('tb_siswa', ['nisn' => $this->session->userdata('nisn')])->row_array();

		$this->load->view('layout/siswa_header', $data);
		$this->load->view('layout/siswa_navbar', $data);
		$this->load->view('layout/verif_topbar', $data);
		$this->load->view('verif/index', $data);
		$this->load->view('layout/siswa_footer', $data);
	}

	public function cetakform()
	{
		$data['title'] = 'Cetak Formulir';
		$data['user'] = $this->db->get_where('tb_siswa', ['nisn' => $this->session->userdata('nisn')])->row_array();
		$data['sekolah'] = $this->ppdb->show('tb_datsek');
		$data['jurusan'] = $this->ppdb->show('tb_jurusan');

		$this->load->view('verif/form_cetak', $data);
	}
}
