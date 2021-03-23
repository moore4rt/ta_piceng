<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datakatagori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_katagori');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->model('users');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $data['katagori'] = $this->m_katagori->katagori_view()->result();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Vdatakatagori');
        $this->load->view('templates/admin/footer');

    }
    public function create()
    {
        $this->load->model('users');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Vtambahkatagori');
        $this->load->view('templates/admin/footer');
    }
    public function tambah()
    {
        $nama_katagori = $this->input->post('nama_katagori');

        $data = array('nama_katagori' => $nama_katagori);

        $this->m_katagori->input_katagori($data, 'katagori');

        redirect('admin/datakatagori/index');

    }
    public function hapus($id_katagori)
    {
        $where = array('id_katagori' => $id_katagori);
        $this->m_katagori->hapus_katagori($where, 'katagori');

        redirect('admin/datakatagori/index');
    }
    public function edit($id_katagori)
    {
        $this->load->model('users');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $where = array('id_katagori' => $id_katagori);
        $data['katagori'] = $this->m_katagori->edit_datakatagori($where, 'katagori')->result();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Veditkatagori');
        $this->load->view('templates/admin/footer');
    }
    public function update()
    {

        $id_katagori = $this->input->post('id_katagori');
        $nama_katagori = $this->input->post('nama_katagori');

        $data = array(

            'nama_katagori' => $nama_katagori,
        );

        $where = array(

            'id_katagori' => $id_katagori,
        );

        $this->m_katagori->update_katagori($where, $data, 'katagori');

        redirect('admin/datakatagori/index');
    }
}