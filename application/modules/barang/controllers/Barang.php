<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Barang extends CI_Controller{

  function __construct()
  {
    parent:: __construct();
    
    // load model 

    $this->load->model('M_barang');

  }

  function index()
  {
   
   $data['barang'] = $this->M_barang->tampilDatabarang()->result();
    $this->load->view('d_barang',$data);

  }

  function tambah_barang()
  {
    
    $KD = $this->input->post('Kode_Barang');
    $NB = $this->input->post('Nama_Barang');
    $K = $this->input->post('Kategori');
    $Stk = $this->input->post('Stok');
    $Hrg = $this->input->post('Harga');
    $Dn= $this->input->post('Diskon');
    $Ss = $this->input->post('Status');

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
      'Kode_Barang' => $KD,
      'Nama_Barang' => $NB,
      'Kategori' => $K,
      'Stok' => $Stk,
      'Harga' => $Hrg,
      'Diskon' => $Dn,
      'Status' => $Ss,
      'foto' => $pict );

    $this->M_barang->input_data($data,'tm_barang');
    redirect('Barang');
  }
}