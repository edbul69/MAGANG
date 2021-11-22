<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		
        $this->load->view('home/Home_view', $data);
    }

    public function insertip()
    {
        $ip = $this->input->post('ip');
        $nama = $this->input->post('nama');
        $lokasi = $this->input->post('lokasi');

        $datainsert = array(
            'ip' => $ip,
            'nama' => $nama,
            'lokasi' => $lokasi,
        );
        $this->cctv->InsertDataCctv($datainsert);
        redirect(base_url('Home'));
    }

    public function check_ping()
    {
        $recordCctv = $this->cctv->getDataCctv();
        foreach($recordCctv as $c){
            
            $ping = exec("ping -n 1 $c->ip", $output, $status);

            $data['ip'] = $c->ip;
            $data['status'] = $status;
            $data['timestamp'] = date("Y:m:d H:i:s");

            echo print_r($data);
            echo "<br>";
            
        }
    }

    public function dashboard()
    {
        redirect(base_url('Dashboard'));
    }
}
