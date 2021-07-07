<?php

class dataNilai extends CI_Controller
{
    function index()
    {
        $data['title'] = "Daftar Nilai";
        $data['nilai'] = $this->v_mahasiswa->get_data('nilai')->result();
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dataNilai',$data);
        $this->load->view('template_admin/footer');
    }
}

?>