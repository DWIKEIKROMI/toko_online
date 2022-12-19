<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email'
        );
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header1');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika user ada
        if ($user) {
            //cek password
            if (md5($password) == $user['password']) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                $this->session->set_userdata('id', $user['id']);
                $this->session->set_userdata('name', $user['name']);
                $this->session->set_userdata('role_id', $user['role_id']);

                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            Welcome to Goggles Store !</div></center>');
                    redirect('dashboard/index');
                }
            } else {
                echo 'password anda salah!';
            }
        } else {
            $this->session->set_flashdata('pesan', '<center><div class="alert alert-danger" role="alert">
            Email is not registered !</div></center>');
            redirect('login/index');
        }
    }
}
