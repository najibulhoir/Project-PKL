<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends MX_Controller{

	function __construct()
	{
		parent:: __construct();
		
		// load model 

		$this->load->model('M_pegawai');

	}

  function index()
  {
   // view
		$data = array(
			'namamodule' 	=> "Pegawai",
			'namafileview' 	=> "d_pegawai",

			// variable 
			'tampilDatapegawai'=> $this->M_pegawai->tampilDatapegawai()
		);
  }
}