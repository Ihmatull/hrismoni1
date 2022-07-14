<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_m extends CI_Model
{

    public function get()
    {
        $this->db->select('user.nama_pegawai, data_karyawan.*');
        $this->db->join('user', 'data_karyawan.id_user = user.id_user');
        $query = $this->db->get('data_karyawan')->result_array();
        return $query;
    }



    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('data_karyawan');
    }
}
