<?php

class HasilSurvei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('HasilSurveiModel');
        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['survei']        = $this->HasilSurveiModel->getAllSurvei()->result();
        
        $this->load->view('templates/header');
        $this->load->view('admin/hasil_survei/vhasilsurvei', $data);
        $this->load->view('templates/footer');
    }
}

