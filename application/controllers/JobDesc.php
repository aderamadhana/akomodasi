<?php

class JobDesc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('JobDescModel');
        $this->load->model('PetugasModel');
        $this->load->model('LokasiModel');
        $this->load->model('SurveiModel');

        if($this->session->userdata('role') != 1){
            echo $this->session->userdata('role');
            // redirect("forbidden/");
        }
    }

    public function index()
    {
        $data['job']        = $this->JobDescModel->getAll()->result();
        $data['petugas']    = $this->PetugasModel->getAll()->result();
        $data['lokasi']     = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/job_desc/vJobDesc', $data);
        $this->load->view('templates/footer');
    }

    public function tambahJobDesc(){
        $id_job_desc = null;

        $data = $_POST;

        if($this->input->post('tanggal_survei') < date('Y-m-d')){
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Tanggal Survei sudah terlewat! </div>');
        
            redirect('JobDesc');
        }else{
            $query = $this->db->select('*')->from('job_desc')->where('tanggal_survei', $this->input->post('tanggal_survei'))->where('id_lokasi', $this->input->post('id_lokasi'))->get()->num_rows();
            if($query == 0){
                $this->JobDescModel->insertJobDesc($data);

                $dataJobDesc = $this->JobDescModel->getJob($data)->result();
                foreach($dataJobDesc as $djd){
                    $id_job_desc = $djd->id_job_desc;
                }

                $dataSurvei = array(
                    'id_job_desc' => $id_job_desc
                );

                $this->SurveiModel->insertLokasi($dataSurvei);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil tambah job! </div>');
        
                redirect('JobDesc');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Lokasi dan tanggal survei sudah tercatat sebelumnya! </div>');
        
                redirect('JobDesc');
            }
        }
    }

    public function editJob($id_job_desc){

        $data['job']        = $this->JobDescModel->getJobById($id_job_desc)->result();
        $data['petugas']    = $this->PetugasModel->getAll()->result();
        $data['lokasi']     = $this->LokasiModel->getAll()->result();

        $this->load->view('templates/header');
        $this->load->view('admin/job_desc/veditjobdesc', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id){
        $this->db->delete('job_desc', array('id_job_desc' => $id));
        $this->db->delete('survei', array('id_job_desc' => $id));
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil terhapus! </div>');
        redirect('Petugas');
    }

    public function aksiEditJob(){
        $id_job_desc    = $this->input->post('id_job_desc');
        $id_lokasi      = $this->input->post('id_lokasi');
        $id_user        = $this->input->post('id_user');
        $tanggal_survei = $this->input->post('tanggal_survei');
        $keterangan     = $this->input->post('keterangan');

        $where = array(
            'id_job_desc' => $id_job_desc
        );

        $query = $this->db->get_where('job_desc', array('id_job_desc' => $id_job_desc))->result();

        foreach($query as $data){
            $id_lokasi_lama = $data->id_lokasi;
            $tanggal_survei_lama = $data->tanggal_survei;
        }
        
        if($tanggal_survei < date('Y-m-d')){
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Tanggal Survei sudah terlewat! </div>');
        
            redirect('JobDesc/editJob/'.$id_job_desc);
        }else{
            if($tanggal_survei == $tanggal_survei_lama && $id_lokasi == $id_lokasi_lama){
                $dataJob = array(
                    'id_user' => $id_user,
                    'keterangan' => $keterangan
                );

                $this->JobDescModel->updateJob($dataJob, $where);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil update job! </div>');
        
                redirect('JobDesc');

            }else if($tanggal_survei == $tanggal_survei_lama){
                $data = array(
                    'id_lokasi'     => $id_lokasi,
                    'keterangan'    => $keterangan,
                    'id_user'       => $id_user
                );

                $query2 = $this->db->select('*')->from('job_desc')->where('tanggal_survei', $tanggal_survei)->where('id_lokasi', $id_lokasi)->get()->num_rows();
                if($query2 == 0){
                    $this->JobDescModel->updateJob($dataJob, $where);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil update job! </div>');
            
                    redirect('JobDesc');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Lokasi dan tanggal survei sudah tercatat sebelumnya! </div>');
        
                    redirect('JobDesc/editJob/'.$id_job_desc);
                }

            }else if($id_lokasi == $id_lokasi_lama){
                $data = array(
                    'tanggal_survei'    => $tanggal_survei,
                    'keterangan'        => $keterangan,
                    'id_user'           => $id_user
                );

                $query2 = $this->db->select('*')->from('job_desc')->where('tanggal_survei', $tanggal_survei)->where('id_lokasi', $id_lokasi)->get()->num_rows();
                if($query2 == 0){
                    $this->JobDescModel->updateJob($dataJob, $where);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil update job! </div>');
            
                    redirect('JobDesc');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Lokasi dan tanggal survei sudah tercatat sebelumnya! </div>');
        
                    redirect('JobDesc/editJob/'.$id_job_desc);
                }
            }
        }
    }
}