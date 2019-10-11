<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    		// load model
    	$this->load->model('m_toko');
  }

  function index()
  {

    $data['toko'] = $this->m_toko->tampilDatatoko()->result();
 		$this->load->view('d_toko',$data);
  }

  function tambah_toko()
  {
  	$lok = $this->input->post('lokasi_toko');
		$tlp = $this->input->post('tlp_toko');
		$ttg = $this->input->post('tentang');
		$foto = $this->input->post('foto_toko');
		$norek = $this->input->post('no_rek');



		$data = array(
			'lokasi_toko' => $lok,
			'tlp_toko' => $tlp,
			'tentang' => $ttg,
			'foto_toko' => $foto,
			'no_rek' => $norek,

			);

		$this->m_toko->input_data($data,'tm_info');
		redirect('Toko');

  }

}
