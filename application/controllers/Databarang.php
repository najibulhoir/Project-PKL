<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databarang extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Barang'); // Load SiswaModel ke controller ini
	}

	public function index(){
		$data['barang'] = $this->Barang->view();

		$this->load->view('admin/d_Barang', $data);
	}

	public function simpan(){
		if($this->Barang->validation("save")){ // Jika validasi sukses atau hasil validasi adalah true
			$this->Barang->save(); // Panggil fungsi save() yang ada di SiswaModel.php

			// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
			$html = $this->load->view('admin/view', array('barang'=>$this->Barang->view()), true);

			$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil disimpan',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}

		echo json_encode($callback);
	}

	public function ubah($id){
		if($this->Barang->validation("update")){ // Jika validasi sukses atau hasil validasi adalah true
			$this->Barang->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php

			// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
			$html = $this->load->view('admin/view', array('barang'=>$this->Barang->view()), true);

			$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil diubah',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}

		echo json_encode($callback);
	}

	public function hapus($id){
		$this->Barang->delete($id); // Panggil fungsi delete() yang ada di SiswaModel.php

		// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
		$html = $this->load->view('admin/view', array('barang'=>$this->Barang->view()), true);
		
		$callback = array(
			'status'=>'sukses',
			'pesan'=>'Data berhasil dihapus',
			'html'=>$html
		);

		echo json_encode($callback);
	}
}
