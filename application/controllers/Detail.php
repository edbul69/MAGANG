<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cctv');
    }

    public function index($ip_cctv)
    {
        $detailCctv = $this->cctv->getDetailCctv($ip_cctv);
        $data['data_cctv'] = $detailCctv;
        $data['title'] =  "Detail CCTV";
        $data['ip'] = $ip_cctv;

        $dataCctv = $this->cctv->getCctv($ip_cctv);
        $data['lokasi'] = $dataCctv;
        $this->load->view('details/Detail_view', $data);
    }


    public function pingTest($ip)
    {
        exec("ping -n 1 $ip", $output, $status);

        if ($status === 0) {
            $hasil = "Online";
        } else {
            $hasil = "Offline";
        }

        $datainsert = array(
            'ip' => $ip,
            'status' => $hasil,
        );
            
        $this->cctv->InsertDetailCctv($datainsert);

        redirect(base_url('index.php/Detail/index/'.$ip));

    }
}
