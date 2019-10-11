<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_penjualan');
  }

  function index()
  {
    $data['penjualan'] = $this->M_penjualan->tampilDatapenjualan()->result();
    $this->load->view('d_Penjualan.php',$data);
  }
}
