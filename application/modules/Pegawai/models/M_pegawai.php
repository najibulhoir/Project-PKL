<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	// get data produsen
	function tampilDatapegawai()
	{
		return $this->db->get('tm_admin');
	}
}