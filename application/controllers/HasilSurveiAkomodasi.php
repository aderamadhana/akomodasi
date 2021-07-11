<?php

class HasilSurveiAkomodasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('DashboardAkomodasiModel');
        $this->load->model('SurveiModel');
        if($this->session->userdata('role') != 3){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['survei']        = $this->DashboardAkomodasiModel->getDataSurveiByUser()->result();
        
        $this->load->view('templates/header_a');
        $this->load->view('akomodasi/hasil_survei/vhasilsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function detailSurvei($id_survei){
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header_a');
        $this->load->view('akomodasi/hasil_survei/vdetailsurvei', $data);
        $this->load->view('templates/footer');
    }
}

