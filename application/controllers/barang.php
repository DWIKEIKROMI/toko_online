<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data();
        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header_admin', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $keterangan = $this->input->post('keterangan');
        $stok = $this->input->post('stok');
        $foto = $_FILES['foto']['name'];
        if ($foto == null) {
            echo "gambar tidak ada";
        } else {
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Gagal upload !";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'harga' => $harga,
            'keterangan' => $keterangan,
            'stok' => $stok,
            'foto' => $foto
        );
        $this->model_barang->tambah_barang($data, 'barang');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            Barang Berhasil ditambahkan! </div></center>');
        redirect('barang/index');
    }
    public function delete($id_barang)
    {
        $where = array(
            'id_barang' => $id_barang
        );
        $this->model_barang->hapus_barang($where, 'barang');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            Barang Berhasil dihapus! </div></center>');
        redirect('barang/index');
    }

    public function update($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $data['barang'] =
            $this->model_barang->update_barang($where, 'barang')->result();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/barang_update', $data);
        $this->load->view('templates/footer_admin');
    }

    public function update_aksi()
    {
        $id_barang = $this->input->post('id_barang');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $keterangan = $this->input->post('keterangan');
        $stok = $this->input->post('stok');

        $data = array(
            'nama' => $nama,
            'harga' => $harga,
            'keterangan' => $keterangan,
            'stok' => $stok,
        );

        $where = array(
            'id_barang' => $id_barang
        );
        $this->model_barang->update_data($where, $data, 'barang');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            Barang Berhasil diUpdate! </div></center>');
        redirect('barang/index');
    }
}
