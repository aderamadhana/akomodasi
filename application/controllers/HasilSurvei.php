<?php

class HasilSurvei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('HasilSurveiModel');
        $this->load->model('SurveiModel');
        if($this->session->userdata('role') != 1){
            redirect("forbidden/");
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
        $jumlahKamarTersedia = $this->input->post('totalJumlahKamarTersedia');
        $kamarDigunakanKemarin = $this->input->post('totalKamarDigunakanKemarin');
        $digunakanKemarin = $this->input->post('totalDigunakanKemarin');
        $checkIn = $this->input->post('totalCheckIn');
        $checkOut = $this->input->post('totalCheckOut');
        $kemarinAsing = $this->input->post('totalKemarinAsing');
        $kemarinIndonesia = $this->input->post('totalKemarinIndonesia');
        $masukAsing = $this->input->post('totalMasukAsing');
        $masukIndonesia = $this->input->post('totalMasukIndonesia');
        $keluarAsing = $this->input->post('totalKeluarAsing');
        $keluarIndonesia = $this->input->post('totalKeluarIndonesia');

        $dataSurvei = array(
            'totalJumlahKamarTersedia'       => $jumlahKamarTersedia,
            'totalKamarDigunakanKemarin'     => $kamarDigunakanKemarin,
            'totalDigunakanKemarin'          => $digunakanKemarin,
            'totalCheckIn'                   => $checkIn,
            'totalCheckOut'                  => $checkOut,
            'totalKemarinAsing'              => $kemarinAsing,
            'totalKemarinIndonesia'          => $kemarinIndonesia,
            'totalMasukAsing'                => $masukAsing,
            'totalMasukIndonesia'            => $masukIndonesia,
            'totalKeluarAsing'               => $keluarAsing,
            'totalKeluarIndonesia'           => $keluarIndonesia,
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

        $blnBr = date("F Y", strtotime($bulan));

        $data = [
            'survei' => $survei,
            'nama_petugas' => $nama_petugas,
            'namaKomersial' => $namaKomersial,
            'bulan' => $bulan
        ];
    
        $this->load->library('pdf');
    
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Hasil Survei_".$namaKomersial."_".$blnBr.".pdf";
        $this->pdf->load_view('admin/hasil_survei/vprint', $data);
    }

    public function editSurvei($id_survei){
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header');
        $this->load->view('admin/hasil_survei/veditsurvei', $data);
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
            
        redirect('HasilSurvei/editSurvei/'.$this->input->post('id_survei'));

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

            for ($i=0; $i < $countTanggal ; $i++) { 
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
            
        $this->session->set_flashdata('selesai', '<br><div class="alert alert-success" role="alert"> Silahkan klik <strong>"simpan semua survei"</strong> untuk mengakhiri sesi input! </div>');
        $result['status'] = 'success';
        $result['redirect_url'] = site_url('HasilSurvei/editSurvei/'.$id_survei.'/#selesai');
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
        $string = $this->output->get_output();
        echo $string;
        exit();
    }

    public function simpanSemua(){
        $id_survei = $this->input->post('id_survei');
        $id_job_desc = $this->input->post('id_job_desc');
        $tanggal = $this->input->post('tanggal');
        $digunakanKemarin = $this->input->post('digunakanKemarin');
        $kemarinAsing = $this->input->post('kemarinAsing');
        $kemarinIndonesia = $this->input->post('kemarinIndonesia');
        
        $countTanggal = count($tanggal);

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

        for ($i=0; $i < $countTanggal ; $i++) { 
            $data = array(
                'tanggal'                   => $tanggal[$i],
                'digunakanKemarin'          => $digunakanKemarin[$i],
                'kemarinAsing'              => $kemarinAsing[$i],
                'kemarinIndonesia'          => $kemarinIndonesia[$i]
            );

            $whereDetailTarif = array(
                'id_survei' => $id_survei,
                'tanggal'   => $tanggal[$i]
            );

            $this->SurveiModel->updateDetailTarif($data, $whereDetailTarif);
        }

        $this->SurveiModel->selesaiSurvei($statusSurvei, $whereSurvei);
        $this->SurveiModel->selesaiJob($statusJob, $whereJob);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sukses simpan survei </div>');
            
        redirect('HasilSurvei');

    }

    private function throw($statusCode, $response){
        $this->output->set_status_header($statusCode)
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
}

