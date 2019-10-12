<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	// get data produsen
	function tampilDatabarang()
	{
		 $this->db->select('*');
		 $this->db->from('tm_detail_barang');
		 $this->db->join('tm_barang','tm_barang.kd_barang=tm_detail_barang.kd_detail');
		 $query = $this->db->get();
		 return $query;
		}

	function input_data($data,$table)
  {
		$this->db->insert($table,$data);
	} 
}