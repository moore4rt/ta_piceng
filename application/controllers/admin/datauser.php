<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datauser');
        $this->load->helper(array('form', 'url'));

    }
    public function index()
    {
        $this->load->model('users');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $data['user'] = $this->m_datauser->datauser()->result();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Vdatacustomer');
        $this->load->view('templates/admin/footer');

    }
    public function hapus($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->m_datauser->hapus_datauser($where, 'user');

        redirect('admin/datauser/index');
    }
}