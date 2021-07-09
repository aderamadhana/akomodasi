<?php

class JobDescModel extends CI_model
{
    function getALl()
    {   
        $this->db->select('*');
        $this->db->from('job_desc');
        $this->db->join('user', 'user.id_user = job_desc.id_user');
        $this->db->join('lokasi', 'lokasi.id_lokasi = job_desc.id_lokasi');
        $this->db->order_by('tanggal_survei', 'asc');
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
}