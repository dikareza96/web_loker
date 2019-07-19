<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller { //Data  atau nama class (harus sesuai dengan nama  file nya)

	
function __construct(){ //untuk mengload database
	parent::__construct();		
		$this->load->model('database'); // bukan folder,  bawaanya Codeigniter (model) pakai ini
		$this->load->model('m_data'); 
		// $this->load->helper('url');
	}
	
	function index(){
		$this->load->view('data_perusahaan/tampil',$data);
	} 

	function tampil_data_perusahaan(){
		$data['user'] = $this->database->tampil_data_perusahaan()->result(); // tampil_data adaalah method yang  terdapat di dalam nya models->m_model // user adalah variable yang  di mana akan di panggil di view
		$this->load->view('header');
		$this->load->view('data_perusahaan/tampil',$data);
		$this->load->view('footer');		
	}
	function form_input_data_perusahaan(){
		$this->load->view('header');
		$this->load->view('data_perusahaan/input');
		$this->load->view('footer');
	}
	function tampil_data_lokasi(){
		$data ['user']= $this->database->tampil_data_lokasi()->result();
		$this->load->view('header');
		$this->load->view('data_lokasi/tampil',$data);
		$this->load->view('footer');
	}
	function form_input_data_lokasi(){
		$this->load->view('header');
		$this->load->view('data_lokasi/input');
		$this->load->view('footer');
	}

	function input_data_lokasi(){
		$nama = $this->input->post('name');
		$data = array(
			'nama_lokasi' => $nama // nama ini di ambil data base
			);
		
		$this->database->input_data_lokasi($data,'lokasi');
		redirect('backend/data/tampil_data_lokasi');
	}

	function hapus_data_lokasi ($id_lokasi){
		$where = array('id_lokasi' => $id_lokasi); //'id_lokasi itu field di database'
		$this->database->update_data_lokasi($where,'lokasi');
		redirect('backend/data/tampil_data_lokasi'); //redirect = ngoper ,, mindah ke index melalui ke atas dan di tampolkan
	}
	function update_data_lokasi(){
		$id_lokasi = $this->input->post('id_lokasi');
		$nama_lokasi = $this->input->post('nama_lokasi');
		
		$data = array(
			'nama_lokasi' => $nama_lokasi,
			);

		$where = array(
			'id_lokasi' => $id_lokasi
			);

		$this->database->update_data($where,$data,'lokasi');
		redirect('backend/data/tampil_data_lokasi');
	}

	function input_data_kategori(){
		$nama = $this->input->post('name');
		$data= array(
			'Jenis_Kategori' =>$nama);
		$this->database->input_data_kategori($data,'kategori');
		redirect('backend/data/tampil_data_kategori');
	}
		function edit_data_lokasi($id_lokasi){ // id_lokasi
			$this->load->view('header');
			$where = array('id_lokasi' => $id_lokasi);
			$data['lokasi'] = $this->database->edit_data($where,'lokasi')->result();
		$this->load->view('data_lokasi/edit',$data); //$data ini daeri variable di atasnya
		$this->load->view('footer');
	}


	function tampil_data_kategori(){
		$data['user'] = $this->database->tampil_data_kategori()->result(); //user adalah variable yang di mana akan d panggil di view
		$this->load->view('header');
		$this->load->view('data_kategori/tampil',$data);
		$this->load->view('footer');
	}
	function form_input_data_kategori(){
		$this->load->view('header');
		$this->load->view('data_kategori/input');
		$this->load->view('footer');
	}

	function tampil_data_detail(){
		$data['user'] = $this->database->loker()->result();
		$this->load->view('header');
		$this->load->view('data_detail/tampil',$data);
		$this->load->view('footer');
	}

	function input_detail(){
		//$data['user'] = $this->database->loker()->result();
		$this->load->view('header');
		$this->load->view('data_detail/input_loker');
		$this->load->view('footer');
	}
}