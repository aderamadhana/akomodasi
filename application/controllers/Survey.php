<?php

class Survey extends CI_Controller
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
        $this->load->view('petugas/survey');
        $this->load->view('templates/footer');
    }

    public function detailSurvey()
    {
        $this->load->view('templates/header_p');
        $this->load->view('petugas/detailsurvey');
        $this->load->view('templates/footer');
    }
}

