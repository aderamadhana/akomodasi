<?php

class DashboardAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $countPetugas = $this->db->get_where('user', array('role' => 2))->num_rows();
        $countAkomodasi = $this->db->get('lokasi')->num_rows();
        $countSurvei = $this->db->get_where('survei', array('status_survei' => 1))->num_rows();

        $data = [
            'countPetugas'      => $countPetugas,
            'countAkomodasi'    => $countAkomodasi,
            'countSurvei'       => $countSurvei 
        ];
        
        $this->load->view('templates/header');
        $this->load->view('admin/dashboard/vdashboard', $data);
        $this->load->view('templates/footer');
    }
}

