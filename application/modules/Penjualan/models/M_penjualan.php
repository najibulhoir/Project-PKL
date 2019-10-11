<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjualan extends CI_Model {

	// get data produsen
	function tampilDatapegawai()
	{
		 $this->db->select('*');
		 $this->db->from('tm_admin');
		 $this->db->join('tm_pegawai','tm_pegawai.kd_pegawai=tm_admin.kd_pegawai');
		 $query = $this->db->get();
		 return $query;
		}

	function input_data($data,$table)
  {
		$this->db->insert($table,$data);
	}
}
