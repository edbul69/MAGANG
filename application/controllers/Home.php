<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $this->load->view('templates/auth_header', $data);
        $this->load->view('home/Home_view');
        $this->load->view('templates/auth_footer');
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
}