<?php

class JobDescModel extends CI_model
{
    function getALl()
    {   
        $this->db->select('*');
        $this->db->from('job_desc');
        $this->db->join('user', 'user.id_user = job_desc.id_user');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->where('status_job', 0);
        $this->db->order_by('tanggal_survei', 'asc');
        return $this->db->get();
    }

    function getJobById($id_job_desc)
    {   
        $this->db->select('*');
        $this->db->from('job_desc');
        $this->db->where('id_job_desc', $id_job_desc);
        return $this->db->get();
    }

    function getJob($data)
    {   
        $this->db->select('*');
        $this->db->from('job_desc');
        $this->db->where($data);
        return $this->db->get();
    }

    function insertJObDesc($data){
        return $this->db->insert('job_desc', $data);
    }

    function updateJob($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('job_desc');
    }
}