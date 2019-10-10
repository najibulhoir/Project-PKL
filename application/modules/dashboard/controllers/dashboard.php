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
    $this->load->view('template/sidebar');
    $this->load->view('admin/index');
    $this->load->view('template/footertemplate');
  }


  function view_profile(){
    $this->load->view('view_profile/v_profile');
}

  function karyawan(){
	  $this->load->view('karyawan/k_dashboard');

  }
}
