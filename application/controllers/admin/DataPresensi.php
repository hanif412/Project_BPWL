<?php

class dataPresensi extends CI_Controller
{
    function index()
    {
        $data['title'] = "Data Presensi";
        $data['presensi'] = $this->v_mahasiswa->get_data('presensi')->result();
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dataPresensi',$data);
        $this->load->view('template_admin/footer');
    }
}

?>