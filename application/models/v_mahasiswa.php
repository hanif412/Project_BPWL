<?php

class v_Mahasiswa extends CI_Controller
{
    function get_data($table){
        return $this->db->get($table);
    }
}

?>