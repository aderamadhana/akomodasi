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

    public function tambahTarif(){
        $data = $_POST;
        // echo print_r($data);

        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateTarif($data, $where);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tambah Harga Tarif! </div>');
            
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei'));

    }

    public function tambahSurvei(){
        $id_survei = $this->input->post('id_survei');
        $tanggal = $this->input->post('tanggal');
        $jumlahKamarTersedia = $this->input->post('jumlahKamarTersedia');
        $kamarDigunakanKemarin = $this->input->post('kamarDigunakanKemarin');
        $digunakanKemarin = $this->input->post('digunakanKemarin');
        $checkIn = $this->input->post('checkIn');
        $checkOut = $this->input->post('checkOut');
        $kemarinAsing = $this->input->post('kemarinAsing');
        $kemarinIndonesia = $this->input->post('kemarinIndonesia');
        $masukAsing = $this->input->post('masukAsing');
        $masukIndonesia = $this->input->post('masukIndonesia');
        $keluarAsing = $this->input->post('keluarAsing');
        $keluarIndonesia = $this->input->post('keluarIndonesia');
        
        $countTanggal = count($tanggal);
        
        $where = array(
            'id_survei' => $id_survei
        );

        $this->SurveiModel->deleteDetailTarif($where);

        for ($i=0; $i < ($countTanggal -1) ; $i++) { 
            $data = array(
                'id_survei'                 => $id_survei,
                'tanggal'                   => $tanggal[$i],
                'jumlahKamarTersedia'       => $jumlahKamarTersedia[$i],
                'kamarDigunakanKemarin'     => $kamarDigunakanKemarin[$i],
                'digunakanKemarin'          => $digunakanKemarin[$i],
                'checkIn'                   => $checkIn[$i],
                'checkOut'                  => $checkOut[$i],
                'kemarinAsing'              => $kemarinAsing[$i],
                'kemarinIndonesia'          => $kemarinIndonesia[$i],
                'masukAsing'                => $masukAsing[$i],
                'masukIndonesia'            => $masukIndonesia[$i],
                'keluarAsing'               => $keluarAsing[$i],
                'keluarIndonesia'           => $keluarIndonesia[$i]
            );

            $this->SurveiModel->tambahDetailTarif($data);
        }

        $this->session->set_flashdata('selesai', '<div class="alert alert-success" role="alert"> Silahkan klik <strong>"simpan semua survei"</strong> untuk mengakhiri sesi input! </div>');
            
        redirect('Survei/detailSurvei/'.$id_survei.'/#selesai');
    
    }

    public function simpanSemua(){
        $id_survei = $this->input->post('id_survei');
        $id_job_desc = $this->input->post('id_job_desc');
        
        $statusSurvei = array(
            'status_survei' => 1
        );

        $statusJob = array(
            'status_job' => 1
        );

        $whereSurvei = array(
            'id_survei' => $id_survei
        );

        $whereJob = array(
            'id_job_desc' => $id_job_desc
        );

        $this->SurveiModel->selesaiSurvei($statusSurvei, $whereSurvei);
        $this->SurveiModel->selesaiJob($statusJob, $whereJob);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses simpan survei </div>');
            
        redirect('Survei');

    }
}

