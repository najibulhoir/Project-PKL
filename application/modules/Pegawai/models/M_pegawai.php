<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	// get data produsen
	function tampilDatapegawai()
	{
		$this->db->select('*')
				 ->from('tm_pegawai')
				 ->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query;
	}
}