<?php
class ubahPassword extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Ganti password";
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/formGantiPass', $data);
        $this->load->view('mahasiswa/footer');
    }

    public function gantiPass()
    {
        $password = $this->input->post('passBaru');
        $valid = $this->input->post('ulangPass');



        if ($password == $valid) {
            $DATA = [
                'password' => $password
            ];


            $this->db->where('username', $this->session->userdata("nama"));
            $this->db->update('login', $DATA);
            $this->session->sess_destroy();
            redirect(base_url("login"));
        } else {
            $data['title'] = "Ganti password";
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar');
            $this->load->view('admin/formGantiPass1', $data);
            $this->load->view('mahasiswa/footer');
        }
    }
}
