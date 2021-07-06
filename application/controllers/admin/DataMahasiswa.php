<?php

class dataMahasiswa extends CI_Controller
{
    function index()
    {
        $data['title'] = "Data Mahasiswa";
        $data['mahasiswa'] = $this->v_mahasiswa->get_data('mahasiswa')->result();
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dataMahasiswa',$data);
        $this->load->view('template_admin/footer');
    }
}

?>