<?php

class DashboardAkomodasiModel extends CI_model
{
    function getDataSurveiByUser()
    {   
        $this->db->select('*');
        $this->db->from('survei');
        $this->db->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->join('user', 'user.id_lokasi = lokasi.id_lokasi');
        $this->db->where('user.id_user', $this->session->userdata('id_user'));
        $this->db->where('survei.status_survei', 2);
        return $this->db->get();
    }
}