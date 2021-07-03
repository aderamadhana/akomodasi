<?php

class DashboardPetugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role') != 2){
            
            echo $this->session->userdata('role');
        }
    }

    public function index()
    {
        $this->load->view('templates/header_p');
        $this->load->view('petugas/dashboard/vdashboard');
        $this->load->view('templates/footer');
    }
}

