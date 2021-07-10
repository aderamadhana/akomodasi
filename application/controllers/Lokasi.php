<?php

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('LokasiModel');
        $this->load->model('PetugasModel');

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
        $dataLokasi = array(
            'provinsi'          => $this->input->post('provinsi'),
            'kabupatenKota'     => $this->input->post('kabupatenKota'),
            'kecamatan'         => $this->input->post('kecamatan'),
            'kelurahan'         => $this->input->post('kelurahan'),
            'namaKomersial'     => $this->input->post('namaKomersial'),
            'jenisAkomodasi'    => $this->input->post('jenisAkomodasi'),
            'kelasAkomodasi'    => $this->input->post('kelasAkomodasi'),
            'alamat'            => $this->input->post('alamat'),
            'linkMaps'          => $this->input->post('linkMaps')
        );

        $id_lokasi = null;

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
    }
}

