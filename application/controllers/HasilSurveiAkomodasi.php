<?php

class HasilSurveiAkomodasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('DashboardAkomodasiModel');
        $this->load->model('SurveiModel');
        if($this->session->userdata('role') != 3){
            redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['survei']        = $this->DashboardAkomodasiModel->getDataSurveiByUser()->result();
        
        $this->load->view('templates/header_a');
        $this->load->view('akomodasi/hasil_survei/vhasilsurvei', $data);
        $this->load->view('templates/footer');
    }

    public function detailSurvei($id_survei){
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header_a');
        $this->load->view('akomodasi/hasil_survei/vdetailsurvei', $data);
        $this->load->view('templates/footer');
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

        $blnBr = date("F Y", strtotime($bulan));

        $data = [
            'survei' => $survei,
            'nama_petugas' => $nama_petugas,
            'namaKomersial' => $namaKomersial,
            'bulan' => $bulan
        ];
    
        $this->load->library('pdf');
    
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Hasil Survei_".$namaKomersial."_".$blnBr.".pdf";
        $this->pdf->load_view('admin/hasil_survei/vprint', $data);
    
    
    }
}

