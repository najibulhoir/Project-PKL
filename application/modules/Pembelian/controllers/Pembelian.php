<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('d_Pembelian.php');
  }

  function get_download(){
			force_download('assets/gambar-1.png', NULL);
		}

}