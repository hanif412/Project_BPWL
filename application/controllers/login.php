<?php
class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('v_mahasiswa');
    }
    function index()
    {
        if ($this->session->userdata('status') != 'login') {
            $this->load->view('v_login');
        } else {
            redirect(base_url("admin/Dashboard"));
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
            $this->session->set_userdata($data_session);
            redirect(base_url("admin/Dashboard"));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">username dan password salah !</div>');
            
            $this->load->view('v_login1');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    function jumlah_mahasiswa()
    {
        $mahasiswa = $this->db->query("SELECT * FROM mahasiswa");
        $data['mahasiswa'] = $mahasiswa->num_rows();
    }

    public function lupa()
    {
        $this->load->view('username.php');
    }

    public function aksi_lupa()
    {
        $username = $this->input->post('username');
        $where = array(
            'username' => $username
        );
        $cek = $this->v_mahasiswa->cek_login("login", $where)->num_rows();
        if ($cek > 0) {
            $this->session->set_userdata($where);
            redirect(base_url("login/verifikasi"));
        } else {
            $this->load->view('username1.php');
        }
    }


    public function verifikasi()
    {
        $this->load->view('ubah_password');
    }


    public function update_order()
    {
        $password = $this->input->post('password');
        $data = [
            'password' => $password
        ];
        $this->db->where('username', $this->session->userdata("username"));
        $this->db->update('login', $data);
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }
}