<?php

class DashboardAkomodasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('DashboardAkomodasiModel');
        if($this->session->userdata('role') != 3){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $countSurvei = $this->DashboardAkomodasiModel->getDataSurveiByUser()->num_rows();

        $data = [
            'countSurvei'       => $countSurvei 
        ];
        $this->load->view('templates/header_a');
        $this->load->view('akomodasi/dashboard/vdashboard', $data);
        $this->load->view('templates/footer');
    }
}

