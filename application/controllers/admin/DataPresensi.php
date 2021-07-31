<?php

class dataPresensi extends CI_Controller
{

    function __construct(){
		parent::__construct();		
		$this->load->model('v_mahasiswa');
		$this->load->helper('url');
 
	}
    function index()
    {
        $data['title'] = "DATA PRESENSI";
        //$data['presensi'] = $this->v_mahasiswa->get_data('presensi')->result();

  
        if((isset($_GET['bulan']) && $_GET['bulan']!='')){
            $bulan = $_GET['bulan'];
        }else{
            $bulan = 'bulan';
        }
   
        $data['presensi'] = $this->db->query("SELECT * FROM presensi where bulan = '$bulan'")->result();
        
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/dataPresensi',$data);
        $this->load->view('mahasiswa/footer');
    }
    function register(){
        $data['title'] = "Tambah Data Presensi";
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/tambahDataPresensi',$data);
        $this->load->view('mahasiswa/footer');
        
    }

    function tambah(){
        $kode = $this->input->post('kode');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $bulan = $this->input->post('bulan');
        $hadir = $this->input->post('hadir');
        $alpa = $this->input->post('alpa');
        
        $data = array(
                'kode' => $kode,
                'nim' => $nim,
                'nama' => $nama,
                'bulan' => $bulan,
                'hadir' => $hadir,
                'alpa' => 22 - $hadir,
        );
        $cek = $this->v_mahasiswa->insert_data("presensi",$data);
        if($cek > 0){
            redirect(base_url("admin/dataPresensi"));
        }else{
            echo "Tambah Data Gagal";
            //redirect(base_url("login/register"));
        }
    }
    function edit($kode){
        $data['title'] = "Edit Data Presensi";
        //$nim = $this->input->post('nim');
        $where = array('kode' => $kode);
        $data['presensi'] = $this->db->query("SELECT * FROM presensi where kode = '$kode'")->result();
        //$data['mahasiswa'] = $this->v_mahasiswa->edit_data($where,'mahasiswa')->result();
        $this->load->view('mahasiswa/header',$data);
        $this->load->view('mahasiswa/sidebar');
        $this->load->view('admin/editDataPresensi',$data);
        $this->load->view('mahasiswa/footer');

	}

    function update(){
        $kode = $this->input->post('kode');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $bulan = $this->input->post('bulan');
        $hadir = $this->input->post('hadir');
        $alpa = $this->input->post('alpa');
        
        $data = array(
                'kode' => $kode,
                'nim' => $nim,
                'nama' => $nama,
                'bulan' => $bulan,
                'hadir' => $hadir,
                'alpa' => 22 - $hadir,
        );
    
        $where = array(
            'kode' => $kode

        );
    
        $this->v_mahasiswa->update_data('presensi', $data, $where);
        redirect('admin/dataPresensi');
    }

    function hapus($kode){
        //$nim = $this->input->post('nim');
        $this->v_mahasiswa->hapusDataPresensi($kode);
        redirect('admin/dataPresensi');
    }

}

?>