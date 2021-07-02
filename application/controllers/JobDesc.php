<?php

class JobDesc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('JobDescModel');

        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['job'] = $this->JobDescModel->getAll()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/job_desc/vJobDesc', $data);
        $this->load->view('templates/footer');
    }
}

