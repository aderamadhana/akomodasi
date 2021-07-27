<?php

class Laporan extends CI_Controller
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
        $data['survei']        = $this->HasilSurveiModel->getLaporan()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/laporan/vLaporan', $data);
        $this->load->view('templates/footer');
    }

    public function detailLaporan($id_survei){
        $data['survei'] = $this->SurveiModel->getSurvei($id_survei)->result();

        $this->load->view('templates/header');
        $this->load->view('admin/laporan/vdetaillaporan', $data);
        $this->load->view('templates/footer');
    }

    public function getDataFilter(){
        $date = $this->input->post('date');

		$html = "";
		$query = $this->db->select('*')->from('survei')->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc')->join('user', 'user.id_user = job_desc.id_user')->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi')->where('status_survei', 2)->like('periode', $date)->order_by('tanggal_survei', 'desc')->get();
		$no = 1;
		$rows = $this->db->select('*')->from('survei')->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc')->join('user', 'user.id_user = job_desc.id_user')->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi')->where('status_survei', 2)->like('periode', $date)->order_by('tanggal_survei', 'desc')->get()->num_rows();
		
		if($rows > 0){
			foreach ($query->result() as $data){
				$html .= '
				<tr>
					<td>'.$no++.'</td>
					<td>'.$data->nama_petugas.'</td>
					<td>'.$data->namaKomersial.'</td>
					<td>'.$data->tanggal_survei.'</td>
					<td>'.date("F Y", strtotime($data->periode)).'</td>
					<td>
                    <a class="btn btn-success" title="Detail Laporan" type="button" href="'.site_url('Laporan/detailLaporan/'.$data->id_survei).'">
                        <i class="fa fa-eye"></i>
                    </a>
                    </td>
				</tr>
				';
			}
		}else{
			$html .= "<td colspan='5' style='text-align: center;'>No matching records found</td>";
		}
		

		$data = [
            'html' => $html
		];
		
		$response["data"]   = $data;
		$this->throw(200, $data);
		return;
    }

    public function printLaporanFilter(){
        $date = $this->input->post('date');
        $survei = $this->db->select('*')->from('survei')->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc')->join('user', 'user.id_user = job_desc.id_user')->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi')->where('status_survei', 2)->like('periode', $date)->order_by('tanggal_survei', 'desc')->get()->result();
		// echo var_dump($survei);
        $nama_petugas =null;
        $namaKomersial = null;
        foreach($survei as $row){
            $nama_petugas = $row->nama_petugas;
            $namaKomersial = $row->namaKomersial;
        }

        $data = [
            'survei' => $survei,
            'nama_petugas' => $nama_petugas,
            'namaKomersial' => $namaKomersial,
            'bulan' => $date
        ];

        $this->load->library('pdf');
    
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->setPaper('A4', 'landscape');
        // $this->pdf->filename = "Hasil Survei_".$namaKomersial."_".$blnBr.".pdf";
        $this->pdf->load_view('admin/laporan/vprintlaporan', $data);
        // $this->load->view('admin/laporan/vprintlaporan', $data);
    }

    private function throw($statusCode, $response){
        $this->output->set_status_header($statusCode)
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
}

