<?php defined('BASEPATH') or exit('No Direct Script Access Allowed');

class m_datauser extends CI_Model
{
    public function datauser()
    {
        $this->db->join('user_role', 'user_role.id = user.id', 'left');
        return $this->db->get('user');
    }
    public function hapus_datauser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}