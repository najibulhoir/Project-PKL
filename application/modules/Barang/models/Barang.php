<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('tm_barang')->result();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
		$this->form_validation->set_rules('input_kd_barang', 'kd_barang', 'required|numeric|max_length[11]');

		$this->form_validation->set_rules('input_nama_barang', 'Nama_barang', 'required');
		$this->form_validation->set_rules('input_foto_barang', 'foto_barang', 'required');
		$this->form_validation->set_rules('input_stok', 'stok', 'required');
		$this->form_validation->set_rules('input_harga', 'harga', 'required');
		$this->form_validation->set_rules('input_kd_diskon', 'kd_diskon', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"kd_barang" => $this->input->post('input_kd_barang'),
			"nama_barang" => $this->input->post('input_nama_barang'),
			"foto_barang" => $this->input->post('input_foto_barang'),
			"stok" => $this->input->post('input_stok'),
			"harga" => $this->input->post('input_harga'),
			"kd_diskon" => $this->input->post('input_kd_diskon')
		);

		$this->db->insert('tm_barang', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	public function edit($id){
		$data = array(
			"kd_barang" => $this->input->post('input_kd_barang'),
			"nama_barang" => $this->input->post('input_nama_barang'),
			"foto_barang" => $this->input->post('input_foto_barang'),
			"stok" => $this->input->post('input_stok'),
			"harga" => $this->input->post('input_harga'),
			"kd_diskon" => $this->input->post('input_kd_diskon')
		);

		$this->db->where('kd_barang', $kd_barang);
		$this->db->update('tm_barang', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	public function delete($id){
		$this->db->where('kd_barang', $id);
		$this->db->delete('tm_barang'); // Untuk mengeksekusi perintah delete data
	}
}
