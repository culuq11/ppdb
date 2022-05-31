<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_PPDB', 'ppdb');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('login/blocked');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'PPDB SMK PGRI 4 Pasuruan';
            $this->load->view('auth/login', $data);
        } else {
            // validasinya success
            $this->_login_admin();
        }
    }

    private function _login_admin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 'admin') {
                        redirect('admin');
                    } elseif ($user['role'] == 'ketua') {
                        redirect('ketua');
                    } elseif ($user['role'] == 'sekretaris') {
                        redirect('sekretaris');
                    } elseif ($user['role'] == 'bendahara') {
                        redirect('bendahara');
                    }
                } else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger alert-dismissible show fade">
                        <strong>Password salah</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '
				<div class="alert alert-danger alert-dismissible show fade">
                    <strong>User Belum Aktif</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '
			<div class="alert alert-danger alert-dismissible show fade">
                <strong>Username dan Password Tidak Sama!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '
        <div class="alert alert-info alert-dismissible show fade">
        <strong>Anda Berhasil Keluar!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('login');
    }

    public function blocked()
    {
        $data['title'] = 'Akses Di Tolak';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('auth/blocked');
        $this->load->view('layout/footer');
    }
}
