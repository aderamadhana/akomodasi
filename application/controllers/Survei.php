<?php

class Survei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('SurveiModel');
        $this->load->library(array('upload'));

        if($this->session->userdata('role') != 2){
            
            echo $this->session->userdata('role');
        }
    }

    public function index()
    {
        $data['job']        = $this->SurveiModel->getJobByPetugas()->result();

        $this->load->view('templates/header_p');
        $this->load->view('petugas/survei/vsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function detailSurvei($id_survei)
    {
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header_p');
        $this->load->view('petugas/survei/vdetailsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function tambahSurvei(){
        $data = $this->input->post('tanggal');

        for ($i=0; $i < count($data) ; $i++) { 
            $tgl[] = $data[$i];
        }
        
        // for ($i=0; $i < $countKategori; $i++) { 
        //     $dataKegiatan = array(
        //         'ID_PAKET'              => $idPaket,
        //         'ID_KATEGORI_EVENT'    => $kategoriEvent[$i]
        //     );

        //     $this->MPaket->tambahKegiatanPaket($dataKegiatan);
        // }

        echo print_r($tgl);
    
    }
}

