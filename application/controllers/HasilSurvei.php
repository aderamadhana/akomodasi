<?php

class HasilSurvei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/hasil_survei/vhasilsurvei');
        $this->load->view('templates/footer');
    }
}

