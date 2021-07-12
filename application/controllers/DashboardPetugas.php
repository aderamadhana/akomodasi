<?php

class DashboardPetugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SurveiModel');

        if($this->session->userdata('role') != 2){
            
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $countSurvei = $this->SurveiModel->getJobByPetugas()->num_rows();

        $data = [
            'countSurvei'       => $countSurvei 
        ];

        $this->load->view('templates/header_p');
        $this->load->view('petugas/dashboard/vdashboard', $data);
        $this->load->view('templates/footer');

        
    }
}

