<?php

class LokasiModel extends CI_model
{
    function getALl()
    {   
        return $this->db->get('lokasi');
    }

    public function insert($data){
        return $this->db->insert('lokasi', $data);
    }
}