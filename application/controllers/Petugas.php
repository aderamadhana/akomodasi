<?php

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('PetugasModel');

        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['petugas'] = $this->PetugasModel->getAll()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/petugas/vpetugas', $data);
        $this->load->view('templates/footer');
    }

    public function tambahPetugas(){
        $data = array(
            'nip'           => $this->input->post('nip'),
            'nama_petugas'  => $this->input->post('nama_petugas'),
            'ttl'           => $this->input->post('ttl'),
            'alamat'        => $this->input->post('alamat'),
            'jk'            => $this->input->post('jk'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'role'          => 2
        );

        $getDataUsername = $this->db->select('*')->from('user')->where('username', $this->input->post('username'))->get()->num_rows();
        // echo $getDataUsername;
        if($getDataUsername == 0){
            $this->PetugasModel->insert($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tambah Petugas! </div>');
            
            redirect('Petugas');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Username sudah terpakai! </div>');
            
            redirect('Petugas');
        }
        
    }
}

