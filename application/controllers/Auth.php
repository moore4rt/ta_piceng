<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        $this->load->view('auth/login');
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_footer');
    }
    public function registration()
    {
        $this->load->model('users');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_lenght' => 'Password too short!',
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Yoots Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password2 = $this->input->post('password2');
            if ($password == $password2) {
                if ($this->users->cekUser($email) > 0) {
                    $this->session->set_flashdata('msg', 'email sudah terdaftar');
                    redirect('auth/registration');
                } else {
                    $date = date("Y-m-d");
                    $this->users->register($name, $email, md5($password), $date);
                    $this->session->set_flashdata('regis', 'Registrasi Berhasil');
                    redirect('/');
                }

            } else {
                $this->session->set_flashdata('msg', 'Konfirmasi password tidak sama');
                redirect('auth/registration');
            }
        }
    }
    public function login()
    {
        $this->load->model('users');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $users = $this->users->getUser($email);
        if ($email != "" && $password != "") {
            if ($users['password'] == $password) {
                $this->session->set_userdata('login', true);
                $this->session->set_userdata('id', $users['id']);
                $this->session->set_userdata('user_id', $users['id_user']);
                if ($users['id'] == 1) {
                    redirect('admin/dashboard');
                } else if ($users['id'] == 2) {
                    redirect('customer/dashboard');
                }
            } else {
                $this->session->set_flashdata('msg', 'username atau password salah');
                redirect('/');
            }
        } else {
            $this->session->set_flashdata('msg', 'silahkan isi form login terlebih dahulu');
            redirect('/');
        }
    }
}