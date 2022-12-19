<?php
class model_barang extends CI_Model
{
    public function tampil_data($id_barang = null)
    {
        if ($id_barang === null) {
            return $this->db->get('barang')->result_array();
        } else {
            return $this->db->get_where('barang', ['id_barang' => $id_barang])->result_array();
        }
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    public function hapus_barang($where, $table)
    {
        $this->db->delete($table, ['id_barang' => $where]);
        return $this->db->affected_rows();
    }

    public function update_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->update($table, $data, ['id_barang' => $where]);
        return $this->db->affected_rows();
    }

    public function find($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)
            ->limit(1)
            ->get('barang');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function detail_barang($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)->get('barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
