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

    public function updateBlok1(){
        $data = array(
            'provinsi'                      => $this->input->post('provinsi'),
            'kabupatenkota'                 => $this->input->post('kabupatenkota'),
            'kelurahan'                     => $this->input->post('kelurahan'),
            'kecamatan'                     => $this->input->post('kecamatan'),
            'nomor_sbr'                     => $this->input->post('nomorSBR'),
            'id_infrastruktur_wilkerstat'   => $this->input->post('idInfrastruktur'),
            'jalan'                         => $this->input->post('jalan'),
            'kode_pos'                      => $this->input->post('kodePOS'),
            'no_telepon'                    => $this->input->post('noTelp'),
            'facebook'                      => $this->input->post('facebook'),
            'email'                         => $this->input->post('email'),
            'twitter'                       => $this->input->post('twitter'),
            'website'                       => $this->input->post('website'),
            'nama_pengusaha'                => $this->input->post('namaPengusaha')
        );

        $where = array(
            'id_blok1' => $this->input->post('id_blok1')
        );

        $this->SurveiModel->updateBlok1($data, $where);

        $this->session->set_flashdata('message1', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 1! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_job_desc').'/#blok1');
    }

    public function updateBlok2(){
        $ttd_pengawas = null;

		$config = ['upload_path' => './upload/ttd/', 'allowed_types' => 'jpg|png|jpeg', 'max_size' => 1024];            
        $this->upload->initialize($config);

        if($this->upload->do_upload('ttdPengawas')){ 
			$dataUpload     = $this->upload->data();
			$ttd_pengawas   = base_url('upload/ttd/' . $dataUpload['file_name']);
        }
        
        $data = array(
            'ttd_petugas'               => $ttd_pengawas
        );

        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('message2', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 2! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok2');
    }

    public function updateBlok3a(){
        $data = array(
            'klasifikasiUsaha'  => $this->input->post('klasifikasiUsaha'),
            'jenisIzin'         => $this->input->post('jenisIzin'),
            'sertifikasi'       => $this->input->post('sertifikasi'),
            'anggotaAsosiasi'   => $this->input->post('anggotaAsosiasi'),
            'asosiasi'          => $this->input->post('asosiasi'),
            'saranaPromosi' => implode(',', $_POST['saranaPromosi'])
        );

        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('message3a', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 3a! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok3a');

    }

    public function updateBlok3b(){
        $data = array(
            'sertifikasiSyariah'        => $this->input->post('sertifikasiSyariah'),
            'jenisSertifikasiSyariah'   => $this->input->post('jenisSertifikasiSyariah'),
            'statusPengelolaanUsaha'    => $this->input->post('statusPengelolaanUsaha'),
            'namaGroupPengelolaanUsaha' => $this->input->post('namaGroupPengelolaanUsaha'),
            'ifOnline'                  => $this->input->post('ifOnline'),
            'saranaPenjualan'           => $this->input->post('saranaPenjualan'),
            'caraPembayaran'            => $this->input->post('caraPembayaran'),
            'agoda'                     => $this->input->post('agoda'),
            'bookingcom'                => $this->input->post('bookingcom'),
            'traveloka'                 => $this->input->post('traveloka'),
            'oyo'                       => $this->input->post('oyo'),
            'airbnb'                    => $this->input->post('airbnb'),
            'airy'                      => $this->input->post('airy'),
            'reddoorz'                  => $this->input->post('reddoorz'),
            'kamarLainnya'              => $this->input->post('kamarLainnya'),
        );

        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('message3b', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 3b! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok3b');

    }

    public function updateBlok3BLanjutan1(){
        $data = $_POST;

        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok3blanjutan1', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 3b! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok3blanjutan1');
    }

    public function updateBlok3BLanjutan2(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok3blanjutan2', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 3b! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok3blanjutan2');
    }

    public function updateBlok4(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok4', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 4! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok4');
    }

    public function updateBlok5(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok5', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 5! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok5');
    }

    public function updateBlok6(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok6', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 6! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok6');
    }

    public function updateBlok6lanjutan(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok6lanjutan', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 6! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok6lanjutan');
    }

    public function updateBlok7(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok7', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 7! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok7');
    }

    public function updateBlok8(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok8', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 8! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok8');
    }

    public function updateBlok9(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok9', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 9! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok9');
    }

    public function updateBlok10(){
        $data = $_POST;
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok10', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 10! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok10');
    }

    public function updateBlok11(){
        $ttdPemberiJawaban = null;

		$config = ['upload_path' => './upload/ttd/', 'allowed_types' => 'jpg|png|jpeg', 'max_size' => 1024];            
        $this->upload->initialize($config);

        if($this->upload->do_upload('ttdPemberiJawaban')){ 
			$dataUpload     = $this->upload->data();
			$ttdPemberiJawaban   = base_url('upload/ttd/' . $dataUpload['file_name']);
        }

        $data = array(
            'namaPemberiJawaban'    => $this->input->post('namaPemberiJawaban'),
            'jabatan'               => $this->input->post('jabatan'),
            'nomorTelepon'          => $this->input->post('nomorTelepon'),
            'tanggalPengesahan'     => $this->input->post('tanggalPengesahan'),
            'ttdPemberiJawaban'     => $ttdPemberiJawaban
        );
        // echo print_r($data);
        $where = array(
            'id_survei' => $this->input->post('id_survei')
        );

        $this->SurveiModel->updateBlok($data, $where);

        $this->session->set_flashdata('blok11', '<br><div class="alert alert-success" role="alert"> Sukses Simpan Blok 11! </div>');
        
        redirect('Survei/detailSurvei/'.$this->input->post('id_survei').'/#blok11');
    }
}

