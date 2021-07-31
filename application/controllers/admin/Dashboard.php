<?php
class Dashboard extends CI_Controller{

    public function index()
    {
        $data['title'] = "DATA MAHASISWA";
        $mahasiswa = $this->db->query("select * from mahasiswa");
        $data['mahasiswa']=$mahasiswa->num_rows();
        
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('mahasiswa/footer');
    }
    
}

?>