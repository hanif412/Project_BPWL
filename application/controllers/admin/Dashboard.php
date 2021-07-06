<?php
class Dashboard extends CI_Controller{

    public function index()
    {
        $data['title'] = "Data Mahasiswa";
        $mahasiswa = $this->db->query("select * from mahasiswa");
        $data['mahasiswa']=$mahasiswa->num_rows();
        
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('template_admin/footer');
    }
    
}

?>