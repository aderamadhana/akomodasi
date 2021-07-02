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
        $data = array(
            'provinsi'                      => $this->input->post('provinsi'),
            'kabupatenkota'                 => $this->input->post('kabupatenkota'),
            'kelurahan'                     => $this->input->post('kelurahan'),
            'nomor_sbr'                     => $this->input->post('nomorSBR'),
            'id_infrastruktur_wilkerstat'   => $this->input->post('idInfrastruktur'),
            'nama_komersial_usaha'          => $this->input->post('namaKemersialUsaha'),
            'nama_perusahaan'               => $this->input->post('namaPerusahaan'),
            'jalan'                         => $this->input->post('jalan'),
            'kode_pos'                      => $this->input->post('kodePOS'),
            'no_telepon'                    => $this->input->post('noTelp'),
            'facebook'                      => $this->input->post('facebook'),
            'email'                         => $this->input->post('email'),
            'twitter'                       => $this->input->post('twitter'),
            'website'                       => $this->input->post('website'),
            'nama_pengusaha'                => $this->input->post('namaPengusaha'),
            'lat'                           => $this->input->post('lat'),
            'longi'                         => $this->input->post('long')
        );

        $this->LokasiModel->insert($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tambah Lokasi! </div>');
        
        redirect('Lokasi');
    }
}

