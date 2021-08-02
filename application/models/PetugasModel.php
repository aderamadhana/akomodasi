<?php

class PetugasModel extends CI_model
{
    function getALl()
    {   
        $this->db->where('role', 2);
        return $this->db->get('user');
    }
    
    function getALlUser()
    {   
        $this->db->or_where('role', 1);
        $this->db->or_where('role', 2);
        return $this->db->get('user');
    }

    public function insert($data){
        return $this->db->insert('user', $data);
    }

    public function getPetugasbyId($id_user){
        $this->db->where('id_user', $id_user);
        return $this->db->get('user');
    }

    public function updatePetugas($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('user');
    }
}