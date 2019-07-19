<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kategori extends CI_Controller { //Data  atau nama class (harus sesuai dengan nama  file nya)

	
function __construct(){ //untuk mengload db_kategori
	parent::__construct();		
		$this->load->model('db_kategori'); // bukan folder,  bawaanya Codeigniter (model) pakai ini
		// $this->load->helper('url');
	}
	
	function index(){
		$this->load->view('data_perusahaan/v_perusahaan',$data);
	} 

	function input_data_kategori(){
		$nama = $this->input->post('name');
		$data= array(
			'Jenis_Kategori' =>$nama);
		$this->db_kategori->input_data_kategori($data,'kategori');
		redirect('backend/data_kategori/tampil_data_kategori');
	}

	function tampil_data_kategori(){
		$data['user'] = $this->db_kategori->tampil_data_kategori()->result(); //user adalah variable yang di mana akan d panggil di view
		$this->load->view('header');
		$this->load->view('view_kategori/v_kategori',$data);
		$this->load->view('footer');
	}
	function form_input_data_kategori(){
		$this->load->view('header');
		$this->load->view('view_kategori/in_kategori');
		$this->load->view('footer');
	}
	function hapus_data_kategori ($id_kategori){ // 
		$where = array('id_kategori' => $id_kategori); //'id_lokasi itu field di database' 
		$this->db_kategori->hapus_data_kategori($where,'kategori'); //di mana data kategori
		redirect('backend/data_kategori/tampil_data_kategori'); //redirect = ngoper ,, mindah ke index melalui ke atas dan di tampilkan
	}

	function update_data_kategori(){
		$id_kategori = $this->input->post('id_kategori');
		$Jenis_Kategori = $this->input->post('Jenis_Kategori');
		
		$data = array(
			'Jenis_Kategori' => $Jenis_Kategori);

		$where = array(
			'id_kategori' => $id_kategori
			);

		$this->db_kategori->update_data($where,$data,'kategori');
		redirect('backend/data_kategori/tampil_data_kategori');
	}

		function edit_data_kategori($id_kategori){ // id_kategori
			$this->load->view('header');
			$where = array('id_kategori' => $id_kategori);
			$data['kategori'] = $this->db_kategori->edit_data($where,'kategori')->result();
		$this->load->view('view_kategori/ed_kategori',$data); //$data ini daeri variable di atasnya
		$this->load->view('footer');
	}

} 
