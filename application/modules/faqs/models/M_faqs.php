<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faqs extends CI_Model {

	// get data produsen
	function tampilfaqs()
	{
		 $this->db->select('*');
		 $this->db->from('tm_faqs');
		 $query = $this->db->get();
		 return $query;
		}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	}
