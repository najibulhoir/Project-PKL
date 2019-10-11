<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_faqs');
  }

  function index()
  {
    $data['faqs'] = $this->M_faqs->tampilfaqs()->result();
    $this->load->view('d_faqs',$data);
  }
  function tambah_faqs()
  {
    $tanya = $this->input->post('faqs');
    $jwb = $this->input->post('jawab');

    $data = array(
      'faqs' => $tanya,
      'jawab' => $jwb,

      );

    $this->M_faqs->input_data($data,'tm_faqs');
    redirect('Faqs');

  }

  }
