<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {

	// get data produsen
	function tampilDatatoko()
	{
		return $this->db->get('tm_info');
	}
}
