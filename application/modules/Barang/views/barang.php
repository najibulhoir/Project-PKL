
	<!-- Load File bootstrap.min.css yang ada difolder css -->
	<link href="<?= base_url('assets/adminlte/css/bootstrap.min.css') ?>" rel="stylesheet">


	<style>
	.align-middle{
		vertical-align: middle !important;
	}
	</style>

    <script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
    </script>
</head>
<body>
    <div class="well">
        <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">
            <span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah Data
        </button>

        <h2 style="margin-top: 0;">Data Barang</h2>
    </div>

    <div id="pesan-sukses" class="alert alert-success" style="margin: 10px 20px;"></div>

    <!--
    -- Buat sebuah div dengan id="view" yang digunakan untuk menampung data
    -- yang ada pada tabel siswa di database
    -->
    <div id="view" style="margin: 10px 20px;">
        <?php $this->load->view('view', array('model'=>$barang)); // Load file view.php dan kirim data siswanya ?>
    </div>

    <!--
    -- Membuat sebuah tag div untuk Modal Dialog untuk Form Tambah dan Ubah
    -- Beri id "form-modal" untuk tag div tersebut
    -->
    <div id="form-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                        <!-- Beri id "modal-title" untuk tag span pada judul modal -->
                        <span id="modal-title"></span>
                    </h4>
                </div>
                <div class="modal-body">
                    <!-- Beri id "pesan-error" untuk menampung pesan error -->
                    <div id="pesan-error" class="alert alert-danger"></div>

                    <form>
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" id="kd_barang" name="input_kd_barang" placeholder="kd_barang">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="input_nama_barang" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label>Foto Barang</label>
                            <input type="text" class="form-control" id="foto_barang" name="input_foto_barang" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" id="stok" name="input_stok" placeholder="No. Telepon">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <textarea class="form-control" id="harga" name="input_harga" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Diskon</label>
                            <textarea class="form-control" id="diskon" name="input_diskon" placeholder="Alamat"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- Beri id "loading-simpan" untuk loading ketika klik tombol simpan -->
                    <div id="loading-simpan" class="pull-left">
                        <b>Sedang menyimpan...</b>
                    </div>

                    <!-- Beri id "loading-ubah" untuk loading ketika klik tombol ubah -->
                    <div id="loading-ubah" class="pull-left">
                        <b>Sedang mengubah...</b>
                    </div>

                    <!-- Beri id "btn-simpan" untuk tombol simpan nya -->
                    <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button>

                    <!-- Beri id "btn-ubah" untuk tombol simpan nya -->
                    <button type="button" class="btn btn-primary" id="btn-ubah">Ubah</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!--
    -- Membuat sebuah tag div untuk Modal Dialog untuk Form Tambah dan Ubah
    -- Beri id "form-modal" untuk tag div tersebut
    -->
    <div id="delete-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">
                        Konfirmasi
                    </h4>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <!-- Beri id "loading-hapus" untuk loading ketika klik tombol hapus -->
                    <div id="loading-hapus" class="pull-left">
                        <b>Sedang meghapus...</b>
                    </div>

                    <!-- Beri id "btn-hapus" untuk tombol hapus nya -->
                    <button type="button" class="btn btn-primary" id="btn-hapus">Ya</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="<?= base_url('assets/adminlte/js/jquery.min.js') ?>"></script>

    <!-- Load File bootstrap.min.js yang ada difolder js -->
    <script src="<?= base_url('assets/adminlte/js/bootstrap.min.js') ?>"></script>

    <!-- Load file ajax.js yang ada di folder js -->
    <script src="<?= base_url('assets/adminlte/js/custom.js') ?>"></script>
</body>
</html>
