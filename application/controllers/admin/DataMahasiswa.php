<?php

class dataMahasiswa extends CI_Controller
{
    function __construct(){
		parent::__construct();		
		$this->load->model('v_mahasiswa');
		$this->load->helper('url');
 
	}
    function index()
    {
        $data['title'] = "DATA DIRI MAHASISWA";
        $data['mahasiswa'] = $this->v_mahasiswa->get_data('mahasiswa')->result();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/dataMahasiswa',$data);
        $this->load->view('mahasiswa/footer');
        
        
        
    }

    function register(){
        $data['title'] = "Tambah Data Mahasiswa";
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/tambahDataMahasiswa',$data);
        $this->load->view('mahasiswa/footer');
        
    }

    function tambah(){
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
        $cek = $this->v_mahasiswa->insert_data("mahasiswa",$data);
        if($cek > 0){
            redirect(base_url("admin/dataMahasiswa"));
        }else{
            echo "Tambah Data Gagal";
            //redirect(base_url("login/register"));
        }
    }

    function edit($nim){
        $data['title'] = "Edit Data Mahasiswa";
        //$nim = $this->input->post('nim');
        $where = array('nim' => $nim);
        $data['mahasiswa'] = $this->db->query("SELECT * FROM mahasiswa where nim = '$nim'")->result();
        //$data['mahasiswa'] = $this->v_mahasiswa->edit_data($where,'mahasiswa')->result();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/editDataMahasiswa',$data);
        $this->load->view('mahasiswa/footer');

	}

    function update(){
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
    
        $where = array(
            'nim' => $nim
        );
    
        $this->v_mahasiswa->update_data('mahasiswa', $data, $where);
        redirect('admin/dataMahasiswa');
    }

    function hapus($nim){
        //$nim = $this->input->post('nim');
        $this->v_mahasiswa->hapusData($nim);
        redirect('admin/dataMahasiswa');
    }

    
}

?>