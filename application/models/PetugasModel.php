<?php

class PetugasModel extends CI_model
{
    function getALl()
    {   
        $this->db->where('role', 2);
        return $this->db->get('user');
    }

    public function insert($data){
        return $this->db->insert('user', $data);
    }
}