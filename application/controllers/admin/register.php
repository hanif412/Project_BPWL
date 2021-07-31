<?php

class register extends CI_Controller
{
    function index()
    {
        $data['title'] = "DATA PRESENSI";
        $data['presensi'] = $this->v_mahasiswa->get_data('presensi')->result();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('mahasiswa/footer');
    }
    function aksi_registrasi(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $lahir = $this->input->post('lahir');
        $kelamin = $this->input->post('kelamin');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $asal = $this->input->post('asal');
        
        $data = array(
                'nim' => $nim,
                'nama' => $nama,
                'lahir' => $lahir,
                'kelamin' => $kelamin,
                'kelas' => $kelas,
                'jurusan' => $jurusan,
                'asal' => $asal,
        );
        $cek = $this->v_mahasiswa->insert_data("dataMahasiswa",$data);
        if($cek > 0){
            redirect(base_url("dataMahasiswa"));
        }else{
            echo "Pendaftaran Gagal";
            //redirect(base_url("login/register"));
        }
    }
}

?>