<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cctv extends CI_Model
{

    public function getDataCctv()
    {
        $this->db->select('*');
        $this->db->from('cctv');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataCctv($data)
    {
        $this->db->insert('cctv', $data);
    }

    public function getDetailCctv()
    {
        //$sql = "SELECT * FROM detail_cctv WHERE ip='$ip_cctv'"
        $this->db->select('*');
        $this->db->from('detail_cctv');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDetailCctv($data)
    {
        $this->db->insert('detail_cctv', $data);
    }
}
