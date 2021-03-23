<?php defined('BASEPATH') or exit('No Direct Script Access Allowed');

class m_produk extends CI_Model
{
    public function produk_view()
    {
        $this->db->join('katagori', 'katagori.id_katagori = produk.id_katagori', 'left');
        return $this->db->get('produk');
        // table dan field

    }
    public function input_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_produk($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function editproduk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_katagori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_katagori()
    {
        $query = $this->db->query("SELECT * FROM katagori ORDER BY nama_katagori ASC");

        return $query->result();
        // buat dapetin data nama_katagori dari table katagori
    }

}