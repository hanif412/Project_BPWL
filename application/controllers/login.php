<?php
class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    function index()
    {
        if ($this->session->userdata('status') == 'login') {
            redirect(base_url("v_"));
        } else {
            $this->load->view('form_login');
        }
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->v_mahasiswa->cek_login("login", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            // $this->session->set_userdata($data_session);
            redirect(base_url('admin/Dashboard'));
        } else {
            echo "username dan password salah !";
        }
    }
    function logout()
    {

        $this->load->view('form_login');
    }
    function jumlah_mahasiswa()
    {
        $mahasiswa = $this->db->query("SELECT * FROM mahasiswa");
        $data['mahasiswa'] = $mahasiswa->num_rows();
    }
}
