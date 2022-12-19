<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }

    public function index()
    {
        $data['user'] = $this->model_user->tampil_data();
        $data['usr'] = 'Karyawan';
        $this->load->view('templates/header_admin');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer_admin');
    }
    public function index_member()
    {
        $data['usr'] = 'Member';
        $data['user'] = $this->model_user->tampil_data_anggota();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/member', $data);
        $this->load->view('templates/footer_admin');
    }
    public function tambah_aksi()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $password = $this->input->post('password');

        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'password' => md5($password),
            'role_id' => 1
        );
        $this->model_user->tambah_user($data, 'user');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            User Berhasil ditambahkan! </div></center>');
        redirect('admin/index');
    }
    public function delete($id)
    {
        $where = array(
            'id' => $id
        );
        $this->model_user->hapus_user($where, 'user');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            User Berhasil dihapus! </div></center>');

        if ($this->session->userdata('role_id') == 1) {
            redirect('admin/index');
        } else {
            redirect('admin/index_member');
        }
    }
    public function update($id)
    {
        $where = array('id' => $id);
        $data['user'] =
            $this->model_user->update_user($where, 'user')->result();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/user_update', $data);
        $this->load->view('templates/footer_admin');
    }
    public function update_aksi()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $password = $this->input->post('password');

        $data = array(
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'password' => $password,
        );

        $where = array(
            'id' => $id
        );
        $this->model_user->update_data($where, $data, 'user');
        $this->session->set_flashdata('pesan', '<center><div class="alert alert-success" role="alert">
            user Berhasil diUpdate! </div></center>');
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin/index');
        } else {
            redirect('admin/index_member');
        }
    }
}
