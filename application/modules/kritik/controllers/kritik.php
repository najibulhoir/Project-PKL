<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('kritik_s.php');

  }
  function review()
  {
    $this->load->view('review_kritik.php');
  }
}
