<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/dashboard.php');
  }

  function pegawai()
  {
    $this->load->view('admin/d_pegawai.php');
  }

  function Barang()
  {
    $this->load->view('admin/d_Barang.php');
}
}