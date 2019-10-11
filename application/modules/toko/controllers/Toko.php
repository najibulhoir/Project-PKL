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
		$norek = $this->input->post('no_rek');

    $config['max_size']=2048;
    $config['allowed_types']="png|jpg|jpeg|gif";
    $config['remove_spaces']=TRUE;
    $config['overwrite']=TRUE;
    $config['upload_path']=FCPATH.'assets/adminlte/images/';

    $this->load->library('upload');
    $this->upload->initialize($config);

    //ambil data image
    $this->upload->do_upload('foto_toko');
    $data_image=$this->upload->data('file_name');
    $pict=$data_image;


		$data = array(
			'lokasi_toko' => $lok,
			'tlp_toko' => $tlp,
			'tentang' => $ttg,
			'foto_toko' => $pict,
			'no_rek' => $norek,

			);

		$this->m_toko->input_data($data,'tm_info');
		redirect('Toko');

  }

}
