<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dataproduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->helper(array('form', 'url'));

    }
    public function index()
    {
        $this->load->model('users');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $data['produk'] = $this->m_produk->produk_view()->result();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Vproduk');
        $this->load->view('templates/admin/footer');

    }

    public function create()
    {
        $this->load->model('users');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $data['katagori'] = $this->m_produk->get_katagori();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Vtambahproduk');
        $this->load->view('templates/admin/footer');
    }
    public function tambah()
    {
        $nama_produk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $image = $this->input->post('image');
        $id_katagori = $this->input->post('id_katagori');
        $dekrepsi = $this->input->post('dekrepsi');
        $stok = $this->input->post('stok');
        $ukuran = $this->input->post('ukuran');
        $warna = $this->input->post('warna');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['encrypt_name']         = true;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'image' => $this->upload->data('file_name'),
            'id_katagori' => $id_katagori,
            'dekrepsi' => $dekrepsi,
            'stok' => $stok,
            'ukuran' => $ukuran,
            'warna' => $warna,
        );

        $this->m_produk->input_produk($data, 'produk');

		
        redirect('admin/dataproduk/index');

    }
    public function edit($id_produk)
    {
        $this->load->model('users');
        $this->load->model('m_katagori');
        $users = $this->users->getUserByID($this->session->userdata('user_id'));
        $data['nama'] = $users['name'];
        $where = array('id_produk' => $id_produk);
        $data['produk'] = $this->m_produk->editproduk($where, 'produk')->result();
        $data['katagori'] = $this->m_katagori->katagori_view()->result();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/Veditproduk',$data);
        $this->load->view('templates/admin/footer');
    }
    public function hapus($id_produk)
    {
        $where = array('id_produk' => $id_produk);
        $this->m_produk->hapus_produk($where, 'produk');

        redirect('admin/dataproduk/index');
    }

}