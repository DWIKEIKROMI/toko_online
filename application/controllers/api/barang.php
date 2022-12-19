<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class barang extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang', 'barang');
    }

    public function index_get()
    {
        $id_barang = $this->get('id_barang');
        if ($id_barang === null) {
            $barang = $this->barang->tampil_data();
        } else {
            $barang = $this->barang->tampil_data($id_barang);
        }

        if ($barang) {
            $this->response([
                'status' => true,
                'data' => $barang
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    function index_delete()
    {
        $id_barang = $this->delete('id_barang');
        if ($id_barang === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->barang->hapus_barang($id_barang, 'barang') > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id_barang,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'data gagal dihapus'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
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
        $data = [
            'id_barang' => $this->post('id_barang'),
            'nama' => $this->post('nama'),
            'harga' => $this->post('harga'),
            'keterangan' => $this->post('keterangan'),
            'stok' => $this->post('stok'),
            'foto' => $foto
        ];

        if ($this->barang->tambah_barang($data, 'barang') > 0) {
            $this->response([
                'status' => true,
                'message' => 'barang berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'message' => 'gagal ditambahkan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {

        $id_barang = $this->put('id_barang');

        $data = [
            'nama' => $this->put('nama'),
            'harga' => $this->put('harga'),
            'keterangan' => $this->put('keterangan'),
            'stok' => $this->put('stok'),
            'foto' => $this->put('foto')
        ];

        if ($this->barang->update_data($id_barang, $data, 'barang') > 0) {
            $this->response([
                'status' => true,
                'message' => 'barang telah diupdate!'
            ], REST_Controller::HTTP_OK);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
