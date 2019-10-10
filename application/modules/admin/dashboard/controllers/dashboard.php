<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('template/sidebar');
    $this->load->view('admin/index');
    $this->load->view('template/footertemplate');
  }
}
