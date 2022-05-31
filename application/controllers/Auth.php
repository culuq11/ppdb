<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_PPDB', 'ppdb');

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	// public function login_siswa()
	{
		if ($this->session->userdata('nisn')) {
			redirect('auth/blocked');
		}

		$this->form_validation->set_rules('nisn', 'NISN', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'PPDB SMK PGRI 4 Pasuruan';
			$this->load->view('layout/home_header', $data);
			$this->load->view('layout/regis_navbar', $data);
			$this->load->view('auth/login_siswa', $data);
			$this->load->view('layout/home_footer', $data);
		} else {
			// validasinya success
			$this->_login_siswa1();
		}
	}

	private function _login_siswa1()
	{
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_siswa', ['nisn' => $nisn])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						// 'id' => $user['id'],
						'nisn' => $user['nisn'],
						'role' => $user['role']
					];
					$this->session->set_userdata($data);
					if ($user['role'] == 'siswa') {
						redirect('siswa');
					} elseif ($user['role'] == 'verif') {
						redirect('verif');
					}
				} else {
					$this->session->set_flashdata('message', '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Password salah</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
					</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>User Belum Aktif</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
				</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>NISN dan Password Tidak Sama!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
			</div>');
			redirect('auth');
		}
	}

	public function regis()
	{
		if ($this->session->userdata('nisn')) {
			redirect('auth/blocked');
		}
		$data['title'] = 'Pendaftaran Peserta Didik Baru';
		$data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
		$data['agamas'] = ['Islam', 'Kristen', 'Katholik', 'Buddha', 'Hindu', 'Konghuchu', 'Tuhan Yang Maha Esa', 'Lainnya'];
		$data['jurusan'] = $this->ppdb->show('tb_jurusan');
		$data['kode_reg'] = $this->ppdb->Buat_kode();

		$this->form_validation->set_rules('nisn', 'NISN', 'required|trim|numeric|max_length[12]|is_unique[tb_siswa.nisn]', [
			'is_unique' => 'NISN ini Sudah Terdaftar!'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('alamat_regis', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('kota_kab', 'Kota / Kabupaten', 'required|trim');
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required|trim');
		$this->form_validation->set_rules('telp', 'Telepon', 'required|trim|numeric|max_length[12]');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/home_header', $data);
			$this->load->view('layout/regis_navbar', $data);
			$this->load->view('auth/daftar', $data);
			$this->load->view('layout/home_footer', $data);
		} else {
			$no_telp = $this->input->post('telp');
			$data = [
				'nisn' => $this->input->post('nisn'),
				'nis' => '',
				'nama' => $this->input->post('nama'),
				'nama_panggilan' => $this->input->post('nama_panggilan'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat_regis' => $this->input->post('alamat_regis'),
				'alamat' => '',
				'rt' => '',
				'rw' => '',
				'kecamatan' => '',
				'kelurahan_desa' => '',
				'kota_kab' => $this->input->post('kota_kab'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				// 'telp' => '62' . $this->input->post('telp'),
				'telp' => '62' . ltrim($no_telp, '0'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'email' => 0,
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'pass_tampil' => $this->input->post('password1'),
				'jurusan_id' => $this->input->post('jurusan'),
				'kelas_id' => 0,
				'role' => 'siswa',
				'no_reg' => $this->input->post('kode_reg'),
				'status_verif' => 'Belum',
				'tgl_buat' => time(),
				'is_active' => 1,
			];
			$this->ppdb->insert($data, 'tb_siswa');
			$this->session->set_flashdata('message', '
            <div class="alert alert-success sukses alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> Anda Telah Terdaftar di SMK PGRI 4 Pasuruan. Silahkan Masuk dan Cetak Formulir Pendaftaran Anda.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>');
			return redirect('auth');
		}
	}

	public function regis_verifikator()
	{
		if ($this->session->userdata('nisn')) {
			redirect('auth/blocked');
		}
		$data['title'] = 'Pendaftaran Peserta Didik Baru';
		$data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
		$data['status_verif'] = ['Guru', 'Siswa', 'Lainnya'];
		$data['agamas'] = ['Islam', 'Kristen', 'Katholik', 'Buddha', 'Hindu', 'Konghuchu', 'Tuhan Yang Maha Esa', 'Lainnya'];
		$data['jurusan'] = $this->ppdb->show('tb_jurusan');
		$data['kode_verifikator'] = $this->ppdb->kode_verifikator();

		$this->form_validation->set_rules('nisn', 'NISN', 'required|trim|numeric|max_length[12]|is_unique[tb_siswa.nisn]', [
			'is_unique' => 'NISN ini Sudah Terdaftar!'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim');
		$this->form_validation->set_rules('alamat_regis', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('kota_kab', 'Kota / Kabupaten', 'required|trim');
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required|trim');
		$this->form_validation->set_rules('telp', 'Telepon', 'required|trim|numeric|max_length[12]');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
		$this->form_validation->set_rules('nama_verifikator', 'Nama Verifikator', 'required|trim');
		$this->form_validation->set_rules('status_verifikator', 'Status Verifikator', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/home_header_verif', $data);
			$this->load->view('layout/regis_navbar', $data);
			$this->load->view('auth/daftar_verifikator', $data);
			$this->load->view('layout/home_footer', $data);
		} else {
			$no_telp = $this->input->post('telp');
			$data = [
				'nisn' => $this->input->post('nisn'),
				'nis' => '',
				'nama' => $this->input->post('nama'),
				'nama_panggilan' => $this->input->post('nama_panggilan'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat_regis' => $this->input->post('alamat_regis'),
				'alamat' => '',
				'rt' => '',
				'rw' => '',
				'kecamatan' => '',
				'kelurahan_desa' => '',
				'kota_kab' => $this->input->post('kota_kab'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				// 'telp' => '62' . $this->input->post('telp'),
				'telp' => '62' . ltrim($no_telp, '0'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'email' => 0,
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'pass_tampil' => $this->input->post('password1'),
				'jurusan_id' => $this->input->post('jurusan'),
				'kelas_id' => 0,
				'role' => 'verif',
				'no_reg' => $this->input->post('kode_reg'),
				'nama_verifikator' => $this->input->post('nama_verifikator'),
				'status_verifikator' => $this->input->post('status_verifikator'),
				'status_verif' => 'Belum',
				'tgl_buat' => time(),
				'is_active' => 1,
			];
			$this->ppdb->insert($data, 'tb_siswa');
			$this->session->set_flashdata('message', '
            <div class="alert alert-success sukses alert-dismissible fade show" role="alert">
                    <strong>Selamat!</strong> Anda Telah Terdaftar di SMK PGRI 4 Pasuruan. Silahkan Masuk dan Cetak Formulir Pendaftaran Anda.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>');
			return redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nisn');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', '
        <div class="alert alert-info sukses alert-dismissible fade show" role="alert">
                <strong>Anda Berhasil Keluar!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>');
		redirect('home');
	}

	public function blocked()
	{
		$data['title'] = 'Akses Di Tolak';
		$data['user'] = $this->db->get_where('tb_siswa', ['nisn' => $this->session->userdata('nisn')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('auth/blocked');
		$this->load->view('layout/footer');
	}
}
