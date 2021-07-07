<?php

class v_Mahasiswa extends CI_Controller
{
    function get_data($table){
        return $this->db->get($table);
    }
 	function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}

?>
