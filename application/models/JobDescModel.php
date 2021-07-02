<?php

class JobDescModel extends CI_model
{
    function getALl()
    {   
        return $this->db->get('job_desc');
    }
}