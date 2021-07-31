<?php

class M_login extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function password_baru($password){
        $this->db->where('username',$password['username']);
        return $this->db->update($this->table, $password);
    }

    function lupa_pass($username){
        return $this->db->get_where($this->table, $username);
    }
}