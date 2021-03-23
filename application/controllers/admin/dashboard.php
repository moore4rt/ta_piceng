<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->model('users');
        if ($this->session->userdata('login') == true && $this->session->userdata('id') == 1) {
 
            $this->load->view('templates/admin/header');
            $this->load->view('templates/admin/body');
            $this->load->view('templates/admin/footer');
        } else {
            redirect('/');
        }

    }
}