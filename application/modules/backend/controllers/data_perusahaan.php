<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perusahaan extends CI_Controller { //Data  atau nama class (harus sesuai dengan nama  file nya)

	
	
	function __construct(){ //untuk mengload db_perusahaan
		parent::__construct();		
		$this->load->model(array('db_perusahaan','db_kategori','db_lokasi','db_syarat')); // bukan folder,  bawaanya Codeigniter (model) pakai ini 
		// $this->load->helper('url');
	}
    function hapus_data_perusahaan ($id_loker){ // $id_lokasi ini apa??
        $where = array('id_loker' => $id_loker); //'id_lokasi itu field di db_lokasi'
        $this->db_perusahaan->hapus_data_perusahaan($where,'loker');

        redirect('backend/data_perusahaan/tampil_data_perusahaan'); //redirect = ngoper ,, mindah ke index melalui ke atas dan di tampilkan
    }
       function edit_data_perusahaan($id_loker){ // id_lokasi
        $data['kategori']=$this->db_kategori->tampil_data_kategori()->result();
         $data['syarat']=$this->db_syarat->tampil_data_syarat()->result();
        $data['lokasi']=$this->db_lokasi->tampil_data_lokasi()->result();
        $this->load->view('header');
        $where = array('id_loker' => $id_loker);
        $data['loker'] = $this->db_lokasi->edit_data($where,'loker')->result();
        $this->load->view('view_perusahaan/ed_perusahaan',$data); //$data ini daeri variable di atasnya
        $this->load->view('footer');
    }



    function a_read_more($id_loker){ // id_lokasi
        $data['kategori']=$this->db_kategori->tampil_data_kategori()->result();
        $data['lokasi']=$this->db_lokasi->tampil_data_lokasi()->result();
        $this->load->view('frontend/template2');
        $where = array('id_loker' => $id_loker);
        $data['loker'] = $this->db_lokasi->edit_data($where,'loker')->result();
        $this->load->view('frontend/read_more',$data); //$data ini daeri variable di atasnya
        $this->load->view('frontend/footer');
    }
    function update_data_perusahaan(){
        
        
        $id_loker = $this->input->post('id_loker');
        $nm_perusahaan = $this->input->post('nm_perusahaan');
        $email = $this->input->post('email');
        $id_kategori = $this->input->post('id_kategori');
        $nama_pofesi = $this->input->post('nama_pofesi');
        $slug = $this->create_url_slug($_POST['nama_pofesi']);
        $tgl_akhir = $this->input->post('tgl1');
        $status = $_POST['status'];
        $id_lokasi = $this->input->post('id_lokasi');
        $tgl = $this->input->post('tgl');
        $tlp = $this->input->post('tlp');
        $Deskripsi = $this->input->post('Deskripsi');

        $data = array(
            'nm_perusahaan' => $nm_perusahaan,
            'email' => $email,
            'id_kategori' => $id_kategori,
            'nm_lowongan' => $nama_pofesi,
            'slug' => $slug,
            'id_lokasi' => $id_lokasi,
            'tgl_akhir' => $tgl_akhir,
            'tgl' => $tgl,
            'status' =>  $status,
            'tlp' => $tlp,
            'Deskripsi' => $Deskripsi,

        );
        if($_FILES['gambar']['name']){
            $this->load->library('upload');
            $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['upload_path'] = './assets/uploads/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size'] = '3072'; //maksimum besar file 3M
            $config['max_width']  = '5000'; //lebar maksimum 5000 px
            $config['max_height']  = '5000'; //tinggi maksimu 5000 px
            $config['file_name'] = $nmfile; //nama yang terupload nantinya
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                //$this->load->model('mymodel');
                $data['gambar'] =$gbr['file_name'];
            }           
        }
        $where = array(
            'id_loker' => $id_loker
            );

      $this->db_perusahaan->update_data($where,$data,'loker');
     // echo $this->db->last_query();
        //print_r($data);
        redirect('backend/data_perusahaan/tampil_data_perusahaan');
    }

    function index(){
      $data['user'] = $this->db_perusahaan->tampil_data_perusahaan()->result();
      $this->load->view('backend/view_perusahaan/v_perusahaan',$data);
  }

  

	function tampil_data_perusahaan(){ // tampil_data adaalah method yang  terdapat di dalam nya models->m_model // user adalah variable yang  di mana akan di panggil di view
		
		$data['user'] = $this->db_perusahaan->tampil_data_perusahaan()->result();
        //print_r($data);exit();
		$this->load->view('header');
		$this->load->view('view_perusahaan/v_perusahaan',$data);
		$this->load->view('footer');		
	}
	function form_input_data_perusahaan(){
		$data['kategori']=$this->db_kategori->tampil_data_kategori()->result();
        $data['syarat']=$this->db_syarat->tampil_data_syarat()->result();
		$data['lokasi']=$this->db_lokasi->tampil_data_lokasi()->result();
		$this->load->view('header');
		$this->load->view('backend/view_perusahaan/in_perusahaan',$data);
		$this->load->view('footer');

	} 
    function create_url_slug($string){
       $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($string));
       return $slug;
    }
    function by_admin()
    {
         $this->session->userdata("nama");
    }

    function input_data_perusahaan(){


		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        
        if($_FILES['gambar']['name'])
        {
        	if ($this->upload->do_upload('gambar'))
        	{
        		$nama_perusahaan = $_POST['nama_perusahaan'];
        		$email = $_POST['email'];
        		$kategori = $_POST['kategori'];
        		$nama = $_POST['nama'];
                $slug = $this->create_url_slug($_POST['nama']);
        		$lokasi = $_POST['lokasi'];
                 $tgl_akhir = $_POST['tgl1'];
                $tgl = $_POST['tgl'];
                $status = $_POST['status'];
        		$telephone = $_POST['telephone'];
        		$editor1 = $_POST['editor1'];
                $admin =  $this->session->userdata("nama");
        		$gbr = $this->upload->data();
                  $tgl_com=date("Y-m-d");//2017/01/13
                          $a_y = substr($tgl_com, 0, 4);
                          $a_m = substr($tgl_com, 5, 2);
                          $a_d = substr($tgl_com, 8, 2);
                          $a_ymd = $a_y.$a_m.$a_d;
                          //cho "tgl_komputer = $a_ymd";

                        //tanggal akhir
                          $tgl_end=$_POST['tgl1'];//2017/01/13
                          $b_y = substr($tgl_end, 0, 4);
                          $b_m = substr($tgl_end, 5, 2);
                          $b_d = substr($tgl_end, 8, 2);
                          $b_ymd = $b_y.$b_m.$b_d;
                          //echo "tgl_expired = $b_ymd";
                    $status = "";
                    if ($a_ymd > $b_ymd) {
                        $status = "Hidden";
                    } else if($a_ymd <= $b_ymd){
                        $status = "Show";
                    }
        		//$this->load->model('mymodel');
        		$data = array(
        			'nm_perusahaan' => $nama_perusahaan, // nama ini di ambil data base
        			'email' => $email,
        			'id_kategori' => $kategori,
        			'nm_lowongan' => $nama,
                    'slug' => $slug,
        			'id_lokasi' => $lokasi,
                    'tgl' => $tgl,
                    'tgl_akhir' => $tgl_akhir,
                    'status' => $status,
        			'tlp' => $telephone,
        			'Deskripsi' => $editor1,
                    'admin' => $admin,
        			'gambar' =>$gbr['file_name'],

        			);
        		//print_r($data);

        		$this->db_perusahaan->input_data_perusahaan($data,'loker');
                redirect('backend/data_perusahaan/tampil_data_perusahaan');
            }


        }

    }

}


// jdi proses edit nya nnti kita m meembuat if else jika kosong tidak di simpan dan jika data ada maka data yang di database harus terupdate dengan  data yang baru di ambil dari  computer dll 