<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cctv');
    }

    public function index()
    {
        $recordCctv = $this->cctv->getDataCctv();
        $data['data_cctv'] = $recordCctv;
        $data['title'] =  "Daftar CCTV";
		
        $this->load->view('templates/auth_header', $data);
        $this->load->view('home/Dashboard_view');
        $this->load->view('templates/auth_footer');
    }
}
