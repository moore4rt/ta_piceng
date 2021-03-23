<?php defined('BASEPATH') or exit('No Direct Script Access Allowed');

class m_katagori extends CI_Model
{
    public function katagori_view()
    {
        return $this->db->get('katagori');
    }
    public function input_katagori($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_katagori($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_datakatagori($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_katagori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}