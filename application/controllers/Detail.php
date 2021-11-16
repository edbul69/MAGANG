<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
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
        $this->load->view('details/Detail_view');
        $this->load->view('templates/auth_footer');
    }

    public function pingTest()
    {
        $ip = $row->ip;
        $ping = exec("ping -n 1 $ip", $output, $status);
        if ($status === 0) {
            echo "Online";
        } else {
            echo "Offline";
        }
        redirect(base_url('Detail'));
    }
}
