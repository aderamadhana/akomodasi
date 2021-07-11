<?php

class HasilSurvei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('HasilSurveiModel');
        $this->load->model('SurveiModel');
        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['survei']        = $this->HasilSurveiModel->getAllSurvei()->result();
        
        $this->load->view('templates/header');
        $this->load->view('admin/hasil_survei/vhasilsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function detailSurvei($id_survei){
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header');
        $this->load->view('admin/hasil_survei/vdetailsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function validasi($id_survei, $id_job_desc){
        $dataSurvei = array(
            'status_survei' => 2
        );

        $dataJob = array(
            'status_job' => 2
        );

        $this->HasilSurveiModel->validasiSurvei($dataSurvei, $id_survei);
        $this->HasilSurveiModel->validasiJob($dataJob, $id_job_desc);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Validasi Survei! </div>');
            
        redirect('HasilSurvei');
    }

    public function tolak(){
        $alasanPenolakan = $this->input->post('alasanPenolakan');
        $id_survei = $this->input->post('id_survei');
        $id_job_desc = $this->input->post('id_job_desc');

        $dataSurvei = array(
            'status_survei' => 3,
            'alasanPenolakan' => $alasanPenolakan
        );

        $dataJob = array(
            'status_job' => 3
        );

        $this->HasilSurveiModel->validasiSurvei($dataSurvei, $id_survei);
        $this->HasilSurveiModel->validasiJob($dataJob, $id_job_desc);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses Tolak Survei! </div>');
            
        redirect('HasilSurvei');
    }

    public function print($id_survei){

        $survei = $this->SurveiModel->getSurvei($id_survei)->result();

        $getBulan = $this->db->select('*')->from('detailtarifsurvei')->where('id_survei', $id_survei)->group_by('id_survei')->get()->result();
            
        foreach($survei as $row){
            $nama_petugas = $row->nama_petugas;
            $namaKomersial = $row->namaKomersial;
        }

        foreach($getBulan as $bln){
            $bulan = $bln->tanggal;
        }

        $data = [
            'survei' => $survei,
            'nama_petugas' => $nama_petugas,
            'namaKomersial' => $namaKomersial,
            'bulan' => $bulan
        ];
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "a.pdf";
        $this->pdf->load_view('admin/hasil_survei/vprint', $data);
    
    
    }
}

