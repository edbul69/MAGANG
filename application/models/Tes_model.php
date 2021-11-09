<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes_model extends CI_Model
{
    function check_user($email, $password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get();
        return $query;
    }
}