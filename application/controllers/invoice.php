<?php
defined('BASEPATH') or exit('No direct script access allowed');

class invoice extends CI_Controller
{

    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/pesanan', $data);
        $this->load->view('templates/footer_admin');
    }
    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['cart'] = $this->model_invoice->ambil_id_cart($id_invoice);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/pesanan_detail', $data);
        $this->load->view('templates/footer_admin');
    }
}
