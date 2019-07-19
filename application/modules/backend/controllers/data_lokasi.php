<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_lokasi extends CI_Controller { //Data  atau nama class (harus sesuai dengan nama  file nya)

	
function __construct(){ //untuk mengload db_lokasi
	parent::__construct();		
		$this->load->model('db_lokasi'); // bukan folder,  bawaanya Codeigniter (model) pakai ini 
		// $this->load->helper('url');
	}

	function tampil_data_lokasi(){
		$data ['user']= $this->db_lokasi->tampil_data_lokasi()->result();
		$this->load->view('header');
		$this->load->view('view_lokasi/v_lokasi',$data);
		$this->load->view('footer');
	}
	function form_input_data_lokasi(){
		$this->load->view('header');
		$this->load->view('view_lokasi/in_lokasi');
		$this->load->view('footer');
	}

	function input_data_lokasi(){
		$nama = $this->input->post('name');
		$data = array(
			'nama_lokasi' => $nama // nama ini di ambil data base
			);
		
		$this->db_lokasi->input_data_lokasi($data,'lokasi');
		redirect('backend/data_lokasi/tampil_data_lokasi');
	}

	function hapus_data_lokasi ($id_lokasi){ // $id_lokasi ini apa??
		$where = array('id_lokasi' => $id_lokasi); //'id_lokasi itu field di db_lokasi'
		$this->db_lokasi->hapus_data_lokasi($where,'lokasi');
		redirect('backend/data_lokasi/tampil_data_lokasi'); //redirect = ngoper ,, mindah ke index melalui ke atas dan di tampilkan
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

		$this->db_lokasi->update_data($where,$data,'lokasi');
		redirect('backend/data_lokasi/tampil_data_lokasi');
	}

		function edit_data_lokasi($id_lokasi){ // id_lokasi
			$this->load->view('header');
			$where = array('id_lokasi' => $id_lokasi);
			$data['lokasi'] = $this->db_lokasi->edit_data($where,'lokasi')->result();
		$this->load->view('view_lokasi/ed_lokasi',$data); //$data ini daeri variable di atasnya
		$this->load->view('footer');
	}


	
}