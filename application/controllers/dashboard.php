<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data();
        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-warning" role="alert">
            You have been logged out!! </div></center>');
        redirect('login/index');
    }

    public function tambah_ke_keranjang($id_barang)
    {
        $barang = $this->model_barang->find($id_barang);
        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama

        );

        $this->cart->insert($data);
        redirect('dashboard/index');
    }

    public function detail($id_barang)
    {

        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('single', $data);
        $this->load->view('templates/footer');
    }

    public function detail_keranjang()
    {
        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('chekout');
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang($id_barang)
    {
        $data = array(
            'rowid'   => $id_barang,
            'qty'     => 0
        );

        $this->cart->update($data);
        redirect('dashboard/detail_keranjang');
    }

    public function pembayaran()
    {

        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('chekout');
        $this->load->view('templates/footer');
        redirect('dashboard/detail_keranjang');
    }

    public function proses_bayar()
    {
        // $this->cart->destroy();
        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }
    public function bayar()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
            $this->load->view('templates/header', $data);
            $this->load->view('index');
            $this->load->view('templates/footer');
            $this->session->set_flashdata('pesan', '<center><div class="alert alert-warning" role="alert">
            Your order was successfully ordered! </div></center>');
            redirect('dashboard/index');
        } else {
            echo "Maaf pesanan anda gagal diproses!";
        }
    }
}
