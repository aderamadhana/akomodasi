<?php

class PetugasSupervisor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('PetugasModel');

        if($this->session->userdata('role') != 4){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['petugas'] = $this->PetugasModel->getAllUser()->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/petugas/vpetugas', $data);
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
            'role'          => $this->input->post('role')
        );

        $getDataUsername = $this->db->select('*')->from('user')->where('username', $this->input->post('username'))->get()->num_rows();
        // echo $getDataUsername;
        if($getDataUsername == 0){
            $this->PetugasModel->insert($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tambah Petugas! </div>');
            
            redirect('PetugasSupervisor');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Username sudah terpakai! </div>');
            
            redirect('PetugasSupervisor');
        }
    }

    public function detailPetugas($id_user){
        $data['petugas'] = $this->PetugasModel->getPetugasbyId($id_user)->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/petugas/vdetailpetugas', $data);
        $this->load->view('templates/footer');
    }

    public function editPetugas($id_user){
        $data['petugas'] = $this->PetugasModel->getPetugasbyId($id_user)->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/petugas/veditpetugas', $data);
        $this->load->view('templates/footer');
    }
    
    public function aksiEditPetugas(){
        $data = $_POST;

        $where = array(
            'id_user' => $this->input->post('id_user')
        );

        $this->PetugasModel->updatePetugas($data, $where);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil terupdate! </div>');
        redirect('PetugasSupervisor');
    }

    public function delete($id){
        $this->db->delete('user', array('id_user' => $id));
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil terhapus! </div>');
        redirect('PetugasSupervisor');
    }
}

