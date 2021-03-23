<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users extends CI_Model
{
    public function getUser($email)
    {
        $query = $this->db->get_where('user', array('email' => $email));
        return $query->row_array();
    }
    public function getUserByID($id)
    {
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
    }
    public function cekUser($email)
    {
        $query = $this->db->get_where('user', array('email' => $email));
        return $query->num_rows();
    }
    public function register($name, $email, $password, $date)
    {
        $this->db->query("insert into user values('','$name','$email','','$password','2','1','$date')");
    }

}
