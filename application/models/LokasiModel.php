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
        return $this->db->get_where('lokasi', array('id_lokasi' => $id_lokasi));
    }

    public function insert($data){
        return $this->db->insert('lokasi', $data);
    }
}