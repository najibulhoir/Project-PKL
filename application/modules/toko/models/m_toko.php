<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {

	// get data produsen
	function tampilDatatoko()
	{
		 $this->db->select('*');
		 $this->db->from('tm_info');
		 $query = $this->db->get();
		 return $query;
		}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	}
