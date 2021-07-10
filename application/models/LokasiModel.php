<?php

class LokasiModel extends CI_model
{
    function getALl()
    {   
        return $this->db->get('lokasi');
    }

    function getDataLokasi($where)
    {   
        return $this->db->get_where('lokasi', $where);
    }

    function getLokasibyId($id_lokasi)
    {   
        $this->db->select('lokasi.*, user.id_user, user.username');
        $this->db->from('lokasi');
        $this->db->join('user', 'user.id_lokasi = lokasi.id_lokasi');
        $this->db->where('lokasi.id_lokasi', $id_lokasi);
        return $this->db->get();
    }

    public function insert($data){
        return $this->db->insert('lokasi', $data);
    }

    public function updateLokasi($data, $where){
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('lokasi');
    }
}