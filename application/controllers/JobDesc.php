<?php

class JobDesc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('JobDescModel');
        $this->load->model('PetugasModel');
        $this->load->model('LokasiModel');

        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['job']        = $this->JobDescModel->getAll()->result();
        $data['petugas']    = $this->PetugasModel->getAll()->result();
        $data['lokasi']     = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/job_desc/vJobDesc', $data);
        $this->load->view('templates/footer');
    }

    public function tambahJobDesc(){
        $data = array(
            'id_user'           => $this->input->post('id_user'),
            'id_blok1'          => $this->input->post('id_blok1'),
            'tanggal_survei'    => $this->input->post('tanggal_survei'),
            'keterangan'        => $this->input->post('keterangan'),
        );

        if($this->input->post('tanggal_survei') < date('Y-m-d')){
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Tanggal Survei sudah terlewat! </div>');
        
            redirect('JobDesc');
        }else{
            $query = $this->db->select('*')->from('job_desc')->where('tanggal_survei', $this->input->post('tanggal_survei'))->where('id_blok1', $this->input->post('id_blok1'))->get()->num_rows();
            if($query == 0){
                $this->JobDescModel->insertJobDesc($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah job! </div>');
        
                redirect('JobDesc');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Lokasi dan tanggal survei sudah tercatat sebelumnya! </div>');
        
                redirect('JobDesc');
            }
        }
    }
}

