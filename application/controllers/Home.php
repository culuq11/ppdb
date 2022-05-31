<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PPDB SMK PGRI 4 Pasuruan';
        // $this->load->view('layout/home_header', $data);
        // $this->load->view('layout/home_navbar', $data);
        $this->load->view('home', $data);
        // $this->load->view('layout/home_footer', $data);
    }
}
