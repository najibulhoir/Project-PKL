<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('d_Riwayat.php');
  }

  function kriwayat()
  {
  	$this->load->view('k_Riwayat');
}
}