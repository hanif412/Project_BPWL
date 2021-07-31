<?php

class v_mahasiswa extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    function hapusData($nim)
    {
        $this->db->delete('mahasiswa', ['nim' => $nim]);
    }
    function hapusDataNIM($nim)
    {
        $this->db->delete('nilai', ['nim' => $nim]);
    }

    function hapusDataPresensi($kode)
    {
        $this->db->delete('presensi', ['kode' => $kode]);
    }
}
