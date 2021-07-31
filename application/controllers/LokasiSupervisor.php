<?php

class LokasiSupervisor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('LokasiModel');
        $this->load->model('PetugasModel');

        if($this->session->userdata('role') != 4){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['lokasi'] = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/lokasi/vlokasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambahLokasi(){
        $dataLokasi = array(
            'provinsi'          => $this->input->post('provinsi'),
            'kabupatenKota'     => $this->input->post('kabupatenKota'),
            'kecamatan'         => $this->input->post('kecamatan'),
            'kelurahan'         => $this->input->post('kelurahan'),
            'namaKomersial'     => $this->input->post('namaKomersial'),
            'jenisAkomodasi'    => $this->input->post('jenisAkomodasi'),
            'kelasAkomodasi'    => $this->input->post('kelasAkomodasi'),
            'alamat'            => $this->input->post('alamat'),
            'linkMaps'          => $this->input->post('linkMaps'),
            'lattitude'         => $this->input->post('lattitude'),
            'longitude'         => $this->input->post('longitude')
        );

        $id_lokasi = null;
        $getDataUsername = $this->db->select('*')->from('user')->where('username', $this->input->post('username'))->get()->num_rows();
        // echo $getDataUsername;
        if($getDataUsername == 0){
            $this->LokasiModel->insert($dataLokasi);

            $query = $this->LokasiModel->getDataLokasi($dataLokasi)->result();
            
            foreach($query as $data){
                $id_lokasi = $data->id_lokasi;
            }
    
            $dataUser = array(
                'id_lokasi'     => $id_lokasi,
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role'          => 3,
                'nama_petugas'  => $this->input->post('namaKomersial'),
            );
    
            
            $this->PetugasModel->insert($dataUser);
    
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tambah Lokasi! </div>');
            
            redirect('Lokasi');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Username sudah terpakai! </div>');
            
            redirect('Lokasi');
        }

        
    }

    public function detailLokasi($id_lokasi){
        $data['lokasi'] = $this->LokasiModel->getLokasibyId($id_lokasi)->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/lokasi/vdetaillokasi', $data);
        $this->load->view('templates/footer');
    }

    public function editLokasi($id_lokasi){
        $data['lokasi'] = $this->LokasiModel->getLokasibyId($id_lokasi)->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/lokasi/veditlokasi', $data);
        $this->load->view('templates/footer');
    }

    public function aksiEditLokasi(){
        $data = $_POST;

        $where = array(
            'id_lokasi' => $this->input->post('id_lokasi')
        );

        $this->LokasiModel->updateLokasi($data, $where);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil terupdate! </div>');
        redirect('Lokasi');
    }

    public function delete($id){
        $this->db->delete('lokasi', array('id_lokasi' => $id));
        $this->db->delete('user', array('id_lokasi' => $id));
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil terhapus! </div>');
        redirect('Lokasi');
    }

    public function maps(){
        $data['lokasi'] = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/lokasi/vmaps', $data);
        $this->load->view('templates/footer');
    }

    public function detailMaps($id_lokasi){
        $data['lokasi'] = $this->LokasiModel->getLokasibyId($id_lokasi)->result();

        $this->load->view('templates/header_s');
        $this->load->view('supervisor/lokasi/vmapss', $data);
        $this->load->view('templates/footer');
    }
}

