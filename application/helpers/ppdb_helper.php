<?php

function is_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nisn')) {
        redirect('auth');
    }
}

function is_login_admin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login');
    }
}

function is_siswa()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    $Akses = $ci->uri->segment(1);
    $ci->db->get_where('tb_siswa', ['role' => $Akses])->row_array();
    if ($role !== 'siswa') {
        redirect('auth/blocked');
    }
}

function is_verif()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    $Akses = $ci->uri->segment(1);
    $ci->db->get_where('tb_siswa', ['role' => $Akses])->row_array();
    if ($role !== 'verif') {
        redirect('auth/blocked');
    }
}

function is_admin()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    $Akses = $ci->uri->segment(1);
    $ci->db->get_where('tb_user', ['role' => $Akses])->row_array();
    if ($role !== 'admin') {
        redirect('auth/blocked');
    }
}

function is_ketua()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    $Akses = $ci->uri->segment(1);
    $ci->db->get_where('tb_user', ['role' => $Akses])->row_array();
    if ($role !== 'ketua') {
        redirect('auth/blocked');
    }
}
function is_sekretaris()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    $Akses = $ci->uri->segment(1);
    $ci->db->get_where('tb_user', ['role' => $Akses])->row_array();
    if ($role !== 'sekretaris') {
        redirect('auth/blocked');
    }
}
function is_bendahara()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');
    $Akses = $ci->uri->segment(1);
    $ci->db->get_where('tb_user', ['role' => $Akses])->row_array();
    if ($role !== 'bendahara') {
        redirect('auth/blocked');
    }
}

if (!function_exists('format_indo')) {
    function format_indo($date)
    {
        date_default_timezone_set('Asia/Jakarta');
        // array hari dan bulan
        // $Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $Bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        // pemisahan tahun, bulan, hari, dan waktu
        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl = substr($date, 8, 2);
        $waktu = substr($date, 11, 5);
        // $hari = date("w", strtotime($date));
        $result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " " . $waktu;
        // $result = $Hari[$hari] . ", " . $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " " . $waktu;

        return $result;
    }
}

function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " Belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " Puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " Seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai / 100) . " Ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " Seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai / 1000) . " Ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai / 1000000) . " Juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai / 1000000000) . " Milyar" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai / 1000000000000) . " Trilyun" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
}

function terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "Minus " . trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }
    return $hasil;
}

// function is_admin()
// {
//     $ci = get_instance();
//     if ($ci->session->userdata('role_id') != 1) {
//         redirect('auth/accessDenied');
//     }
// }
