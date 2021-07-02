<?php

class LokasiModel extends CI_model
{
    function getALl()
    {   
        return $this->db->get('blok1_pengenalan_tempat');
    }

    public function insert($data){
        return $this->db->insert('blok1_pengenalan_tempat', $data);
    }
}