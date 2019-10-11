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
 
		$data = array(
			'nama' => $nama,
			'tempat_lahir' => $tmpl,
			'tanggal_lahir' => $tngl,
			'email' => $em,
			'password' => $pass,
			'tlp' => $tel,
			'alamat' => $alam,
			);

		$this->M_pegawai->input_data($data,'tm_admin');
		redirect('Pegawai');

  }
}