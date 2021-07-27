<?php

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('HasilSurveiModel');
        $this->load->model('SurveiModel');

        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['survei']        = $this->HasilSurveiModel->getAllSurvei()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/laporan/vLaporan', $data);
        $this->load->view('templates/footer');
    }

    public function detailLaporan($id_survei){
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header');
        $this->load->view('admin/laporan/vdetaillaporan', $data);
        $this->load->view('templates/footer');
    }
}

