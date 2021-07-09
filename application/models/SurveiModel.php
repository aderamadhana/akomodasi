<?php

class SurveiModel extends CI_model
{
    function getJobByPetugas()
    {   
        $this->db->select('*');
        $this->db->from('survei');
        $this->db->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc');
        $this->db->join('user', 'user.id_user = job_desc.id_user');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->where('job_desc.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tanggal_survei', date('Y-m-d'));
        $this->db->order_by('tanggal_survei', 'asc');
        return $this->db->get();
    }

    function getSurvei($id_survei){
        $this->db->select('*');
        $this->db->from('survei');
        $this->db->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc');
        $this->db->join('user', 'user.id_user = job_desc.id_user');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->where('survei.id_survei', $id_survei);
        return $this->db->get();
    }

    public function insertBlok1($data){
        return $this->db->insert('survei', $data);
    }

    public function updateBlok1($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('blok1_pengenalan_tempat');
    }

    public function updateBlok($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('survei');
    }

    public function selesaiSurvei($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('survei');
    }
    public function selesaiSurveiJob($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('job_desc');
    }
}