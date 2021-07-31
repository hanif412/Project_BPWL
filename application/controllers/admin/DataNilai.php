<?php

class dataNilai extends CI_Controller
{
    function __construct(){
		parent::__construct();		
		$this->load->model('v_mahasiswa');
		$this->load->helper('url');
 
	}

    function index()
    {
        $data['title'] = "DATA NILAI MAHASISWA";
        $data['nilai'] = $this->v_mahasiswa->get_data('nilai')->result();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/dataNilai',$data);
        $this->load->view('mahasiswa/footer');
    }

    function register(){
        $data['title'] = "Tambah Data Nilai Mahasiswa";
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/tambahDataNilai',$data);
        $this->load->view('mahasiswa/footer');
        
    }

    function tambah(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $bpwl = $this->input->post('bpwl');
        $psod = $this->input->post('psod');
        $ppbo = $this->input->post('ppbo');
        $pbdl = $this->input->post('pbdl');
        $rata = $this->input->post('ratarata');
        
        $data = array(
                'nim' => $nim,
                'nama' => $nama,
                'bpwl' => $bpwl,
                'psod' => $psod,
                'ppbo' => $ppbo,
                'pbdl' => $pbdl,
                'ratarata' => ($bpwl + $psod + $ppbo + $pbdl)/4,
        );
        $cek = $this->v_mahasiswa->insert_data("nilai",$data);
        if($cek > 0){
            redirect(base_url("admin/dataNilai"));
        }else{
            echo "Tambah Data Gagal";
            //redirect(base_url("login/register"));
        }
    }
    function edit($nim){
        $data['title'] = "Edit Data Nilai Mahasiswa";
        //$nim = $this->input->post('nim');
        $where = array('nim' => $nim);
        $data['nilai'] = $this->db->query("SELECT * FROM nilai where nim = '$nim'")->result();
        //$data['mahasiswa'] = $this->v_mahasiswa->edit_data($where,'mahasiswa')->result();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/editDataNilai',$data);
        $this->load->view('mahasiswa/footer');

	}

    function update(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $bpwl = $this->input->post('bpwl');
        $psod = $this->input->post('psod');
        $ppbo = $this->input->post('ppbo');
        $pbdl = $this->input->post('pbdl');
        $rata = $this->input->post('ratarata');
        
        $data = array(
                'nim' => $nim,
                'nama' => $nama,
                'bpwl' => $bpwl,
                'psod' => $psod,
                'ppbo' => $ppbo,
                'pbdl' => $pbdl,
                'ratarata' => ($bpwl + $psod + $ppbo + $pbdl)/4,
        );
    
        $where = array(
            'nim' => $nim
        );
    
        $this->v_mahasiswa->update_data('nilai', $data, $where);
        redirect('admin/dataNilai');
    }

    function hapus($nim){
        //$nim = $this->input->post('nim');
        $this->v_mahasiswa->hapusDataNIM($nim);
        redirect('admin/dataNilai');
    }

}

?>