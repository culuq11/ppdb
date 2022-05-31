<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_PPDB extends CI_Model
{
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getsatuBaris($table)
    {
        return $this->db->get_where($table)->row_array();
    }

    public function show($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function delete($table, $id)
    {
        return $this->db->delete($table, $id);
    }

    public function getId($id, $table, $id_table)
    {
        return $this->db->get_where($table, [$id_table => $id])->row_array();
    }

    public function showJoin($table1, $table2, $field1, $field2)
    {
        return $this->db->from($table1)
            ->join($table2, $table2 . '.' . $field1 . '=' . $field2)
            ->get()
            ->result_array();
    }

    public function JoinPembayaran()
    {
        return $this->db->from('tb_pembayaran')
            ->join('tb_siswa', 'tb_siswa.id_siswa=siswa_id_2')
            // ->join('tb_biaya', 'tb_biaya.id_biaya=biaya_id', 'right')
            ->get()
            ->result_array();
    }

    public function getbyjurusan()
    {
        return $this->db->query("SELECT *,
        sum(jenis_kelamin = 'Laki-Laki') as males,
        sum(jenis_kelamin = 'Perempuan') as females 
        FROM tb_siswa
        LEFT JOIN tb_jurusan
        ON tb_siswa.jurusan_id = tb_jurusan.id
        GROUP BY jurusan_id");
    }

    public function total_pembayaran($key, $value)
    {
        return $this->db->query("SELECT SUM(total_bayar) as total_bayar FROM tb_pembayaran WHERE $key = '$value'");
    }

    // public function hitung_category()
    // {
    //     return $this->db->query("SELECT COUNT(status_verif)")
    // }


    public function belum_verif()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->like('status_verif', 'Belum');
        return $this->db->count_all_results();
    }

    public function terverifikasi()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->like('status_verif', 'Proses Pembayaran');
        $this->db->or_like('status_verif', 'Diterima');
        return $this->db->count_all_results();
    }

    // public function JoinJurusan()
    // {
    //     return $this->db->from('tb_siswa')
    //         ->join('tb_jurusan', 'tb_jurusan.id=jurusan_id')
    //         ->get()
    //         ->result_array();
    // }

    public function Buat_kode()
    {

        $this->db->select('RIGHT(tb_siswa.no_reg,2) as kode', FALSE);
        $this->db->order_by('no_reg', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_siswa');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "14022230" . $kodemax;    // hasilnya.
        return $kodejadi;
    }

    public function kode_verifikator()
    {

        $this->db->select('RIGHT(tb_siswa.no_reg,2) as kode', FALSE);
        $this->db->order_by('no_reg', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_siswa');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "27022230" . $kodemax;    // hasilnya.
        return $kodejadi;
    }
}
