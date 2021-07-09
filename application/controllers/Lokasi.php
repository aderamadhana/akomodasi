<?php

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('LokasiModel');

        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['lokasi'] = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/lokasi/vlokasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambahLokasi(){
        $data = $_POST;

        $this->LokasiModel->insert($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tambah Lokasi! </div>');
        
        redirect('Lokasi');
    }
}

