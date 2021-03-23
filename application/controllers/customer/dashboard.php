<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->model('users');
        if ($this->session->userdata('login') == true && $this->session->userdata('role_id') == 2) {
            $users = $this->users->getUserByID($this->session->userdata('user_id'));
            $data['nama'] = $users['name'];
            $this->load->view('templates/customer/header', $data);
            $this->load->view('templates/customer/body');
            $this->load->view('templates/customer/footer');
        } else {
            redirect('/');
        }

    }

}