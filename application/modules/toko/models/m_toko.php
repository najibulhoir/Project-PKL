<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {

	// get data produsen
	function tampilDatatoko()
	{
		 $this->db->select('*');
		 $this->db->from('tm_info');
		 $this->db->join('faqs_info','tm_info.kd_toko=faqs_info.kd_toko');
		 $this->db->join('tm_faqs','tm_faqs.kd_faqs=faqs_info.kd_faqs');
		 $query = $this->db->get();
		 return $query;
		}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	}
