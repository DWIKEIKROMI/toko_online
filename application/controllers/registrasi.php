<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'This email has already registered!'
            ]
        );
        $this->form_validation->set_rules('number', 'Number', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', ['min_length' => 'Passworf to short!']);
        if ($this->form_validation->run() == false) {
            $this->load->view('registrasi');
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'number' => $this->input->post('number', true),
                'password' => md5($this->input->post('password')),
                'role_id' => 2
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
            Congratulation! Registered Success! Lets Login! </div>');
            redirect('login');
        }
    }
}
