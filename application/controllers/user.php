<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cctv');
    }

    public function index()
    {

        $recordCctv = $this->cctv->getDataCctv();
        $DATA = array('data_cctv' => $recordCctv);
        $this->load->view('home', $DATA);
    }
    public function insertip()
    {
        $ip = $this->input->post('ip');
        $lokasi = $this->input->post('lokasi');

        $datainsert = array(
            'ip' => $ip,
            'lokasi' => $lokasi,

        );
        $this->cctv->InsertDataCctv($datainsert);
        redirect(base_url('user'));
    }
}
