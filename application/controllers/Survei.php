<?php

class Survei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('JobDescModel');

        if($this->session->userdata('role') != 2){
            
            echo $this->session->userdata('role');
        }
    }

    public function index()
    {
        $data['job']        = $this->JobDescModel->getJobByPetugas()->result();

        $this->load->view('templates/header_p');
        $this->load->view('petugas/survei/vsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function detailSurvei()
    {
        $this->load->view('templates/header_p');
        $this->load->view('petugas/survei/vdetailsurvei');
        $this->load->view('templates/footer');
    }
}

