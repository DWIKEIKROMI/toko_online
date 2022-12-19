<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_user extends CI_Model
{

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 1);
        return $this->db->get()->result();
    }
    public function tampil_data_member($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }
    public function tampil_data_anggota()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 2);
        return $this->db->get()->result();
    }
    public function tambah_user($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function update_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
