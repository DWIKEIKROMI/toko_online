<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->model_user->tampil_data($this->session->userdata('id'));
        $this->load->view('templates/header', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}
