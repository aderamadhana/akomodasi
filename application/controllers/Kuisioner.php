<?php

class Kuisioner extends CI_Controller
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
        $this->load->view('admin/kuisioner/vkuisioner');
        $this->load->view('templates/footer');
    }
}

