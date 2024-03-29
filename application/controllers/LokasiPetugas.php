<?php

class LokasiPetugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('LokasiModel');

        if($this->session->userdata('role') != 2){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['lokasi'] = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header_p');
        $this->load->view('petugas/lokasi/vlokasi', $data);
        $this->load->view('templates/footer');
    }

    public function detailLokasi($id_lokasi)
    {
        $data['lokasi'] = $this->LokasiModel->getLokasibyId($id_lokasi)->result();

        $this->load->view('templates/header_p');
        $this->load->view('petugas/lokasi/vDetailLokasi', $data);
        $this->load->view('templates/footer');
    }

    public function maps($id_lokasi){
        $data['lokasi'] = $this->LokasiModel->getLokasibyId($id_lokasi)->result();

        $this->load->view('templates/header_p');
        $this->load->view('petugas/lokasi/vMaps', $data);
        $this->load->view('templates/footer');
    }
}

