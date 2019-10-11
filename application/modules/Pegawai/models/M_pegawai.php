<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	// get data produsen
	function tampilDatapegawai()
	{
		return $this->db->get('tm_admin');
	}

	function input_data($data,$table)
  {
		$this->db->insert($table,$data);
	}
}