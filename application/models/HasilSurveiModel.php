<?php

class HasilSurveiModel extends CI_model
{
    function getALlSurvei()
    {   
        $this->db->select('*');
        $this->db->from('survei');
        $this->db->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc');
        $this->db->join('user', 'user.id_user = job_desc.id_user');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->where('status_survei !=', 0);
        $this->db->order_by('tanggal_survei', 'desc');
        return $this->db->get();
    }

    function getLaporan()
    {   
        $this->db->select('*');
        $this->db->from('survei');
        $this->db->join('job_desc', 'job_desc.id_job_desc = survei.id_job_desc');
        $this->db->join('user', 'user.id_user = job_desc.id_user');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->where('status_survei', 2);
        $this->db->order_by('tanggal_survei', 'desc');
        return $this->db->get();
    }

    public function validasiSurvei($data, $where){
        $this->db->set($data);
        $this->db->where('id_survei', $where);
        $this->db->update('survei');
    }

    public function validasiJob($data, $where){
        $this->db->set($data);
        $this->db->where('id_job_desc', $where);
        $this->db->update('job_desc');
    }
}