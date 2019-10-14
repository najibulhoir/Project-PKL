<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller{

	function __construct()
	{
		parent:: __construct();
		
		// load model 

		$this->load->model('M_pegawai');

	}

  function index()
  {
   
   $data['pegawai'] = $this->M_pegawai->tampilDatapegawai()->result();
		$this->load->view('d_pegawai',$data);

  }

  function tambah_pegawai()
  {
  	
  		$nm = $this->input->post('nama');
		$tmpl = $this->input->post('tempat_lahir');
		$tngl = $this->input->post('tanggal_lahir');
		$em = $this->input->post('email');
		$pass = $this->input->post('password');
		$tel = $this->input->post('tlp');
		$alam = $this->input->post('alamat');
		$masuk = $this->input->post('tanggal_masuk');
		$keluar = $this->input->post('tanggal_keluar');

		$config['max_size']=2048;
		$config['allowed_types']="png|jpg|jpeg|gif";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'assets/adminlte/images/';

		$this->load->library('upload');
		$this->upload->initialize($config);

		//ambil data image
		$this->upload->do_upload('foto');
		$data_image=$this->upload->data('file_name');
		$pict=$data_image;
 
		$data = array(
			'nama' => $nm,
			'tempat_lahir' => $tmpl,
			'tanggal_lahir' => $tngl,
			'email' => $em,
			'password' => $pass,
			'tlp' => $tel,
			'alamat' => $alam,
			'tanggal_masuk' => $masuk,
			'tanggal_keluar' => $keluar,
			'foto' => $pict );

		$this->M_pegawai->input_data($data,'tm_admin');
		redirect('Pegawai');
  }
}