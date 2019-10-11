-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2019 pada 10.25
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs_info`
--

CREATE TABLE `faqs_info` (
  `kd` int(4) NOT NULL,
  `kd_faqs` int(10) DEFAULT NULL,
  `kd_toko` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_admin`
--

CREATE TABLE `tm_admin` (
  `kd_admin` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `alamat` text,
  `kd_pegawai` int(10) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_admin`
--

INSERT INTO `tm_admin` (`kd_admin`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `password`, `tlp`, `foto`, `alamat`, `kd_pegawai`) VALUES
(1, 'Alda', 'Probolinggo', '1998-09-27', 'aldagheauly28@gmail.com', 'alda123', '085101010101', '', 'Jl.Kenangan ', 1),
(6, 'Teddi Juniarlaksono', 'Bondowoso', '1998-06-22', 'tedysangpecintadamai@gmail.com', '1234', '08987', '46T.jpg', 'Jln.Kh Wahid Hasyim', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_barang`
--

CREATE TABLE `tm_barang` (
  `kd_barang` int(10) NOT NULL,
  `kd_kategori` int(10) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `foto_barang` varchar(225) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `kd_diskon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_barang`
--

INSERT INTO `tm_barang` (`kd_barang`, `kd_kategori`, `nama_barang`, `foto_barang`, `stok`, `harga`, `kd_diskon`) VALUES
(1, 1, 'Nevada', NULL, 56, 159000, 1),
(2, 2, 'Jeans', NULL, 34, 189000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_barang_ready`
--

CREATE TABLE `tm_barang_ready` (
  `kd_ready` int(10) NOT NULL,
  `kd_detail` int(10) NOT NULL,
  `kd_status_barang` int(10) NOT NULL,
  `stok_barang` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_barang_ready`
--

INSERT INTO `tm_barang_ready` (`kd_ready`, `kd_detail`, `kd_status_barang`, `stok_barang`) VALUES
(1, 1, 1, 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_bayar`
--

CREATE TABLE `tm_bayar` (
  `kd_bayar` int(50) NOT NULL,
  `jenis_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_bayar`
--

INSERT INTO `tm_bayar` (`kd_bayar`, `jenis_pembayaran`) VALUES
(1, 'COD'),
(2, 'Transfer Bank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_customer`
--

CREATE TABLE `tm_customer` (
  `kd_customer` int(10) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_customer`
--

INSERT INTO `tm_customer` (`kd_customer`, `nama_customer`, `tempat_lahir`, `tanggal_lahir`, `email`, `password`, `tlp`, `foto`, `alamat`) VALUES
(1, 'Lidya', 'Probolinggo', '1999-06-22', 'lidyagembrot@gmail.com', 'lidya123', '085324435765', '', 'Jl.Kenangan Mantan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_detail_barang`
--

CREATE TABLE `tm_detail_barang` (
  `kd_detail` int(10) NOT NULL,
  `kd_barang` int(10) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_detail_barang`
--

INSERT INTO `tm_detail_barang` (`kd_detail`, `kd_barang`, `deskripsi`) VALUES
(1, 1, 'Kaos Nevada Anak-Anak (Size M)'),
(2, 2, 'Celana Jeans Pria (Size 29)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_diskon`
--

CREATE TABLE `tm_diskon` (
  `kd_diskon` int(10) NOT NULL,
  `diskon` double DEFAULT NULL,
  `bulan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_diskon`
--

INSERT INTO `tm_diskon` (`kd_diskon`, `diskon`, `bulan`) VALUES
(1, 0.1, '2019-10-22'),
(2, 0.25, '2019-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_faqs`
--

CREATE TABLE `tm_faqs` (
  `kd_faqs` int(10) NOT NULL,
  `faqs` text,
  `jawab` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_faqs`
--

INSERT INTO `tm_faqs` (`kd_faqs`, `faqs`, `jawab`) VALUES
(1, 'Bagaimana cara memesan pada toko ini?', 'carilah barang bedasarkan kategori yang akan kamu pilih, setelah itu pilih salah satu dri mereka untuk disimpan lalu lakukan checkout jika ingin membeli dan lakukan transaksi pembayaran'),
(2, 'Bagaimana cara memilih kategori?', 'pada bagian portal customer terdapat button down untuk memilih kategori apa saja yang ingin dibeli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_info`
--

CREATE TABLE `tm_info` (
  `kd_toko` int(10) NOT NULL,
  `lokasi_toko` text,
  `tlp_toko` varchar(20) DEFAULT NULL,
  `tentang` text,
  `foto_toko` varchar(225) DEFAULT NULL,
  `no_rek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_info`
--

INSERT INTO `tm_info` (`kd_toko`, `lokasi_toko`, `tlp_toko`, `tentang`, `foto_toko`, `no_rek`) VALUES
(1, 'Jl. Tawang Mangu Gg II no 115', '081564298456', 'Toko ini menjual suatu penjualan secara universal', NULL, '6627659877');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_kategori`
--

CREATE TABLE `tm_kategori` (
  `kd_kategori` int(10) NOT NULL,
  `jenis_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_kategori`
--

INSERT INTO `tm_kategori` (`kd_kategori`, `jenis_kategori`) VALUES
(1, 'Baju'),
(2, 'Celana'),
(3, 'Sepatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_kritik`
--

CREATE TABLE `tm_kritik` (
  `kd_kritik` int(10) NOT NULL,
  `kd_pembelian` int(10) NOT NULL,
  `saran_kritik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_ongkir`
--

CREATE TABLE `tm_ongkir` (
  `kd_ongkir` int(10) NOT NULL,
  `kd_pengiriman` int(10) NOT NULL,
  `ongkir` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_ongkir`
--

INSERT INTO `tm_ongkir` (`kd_ongkir`, `kd_pengiriman`, `ongkir`) VALUES
(1, 1, '8000'),
(2, 2, '9500'),
(3, 3, '7000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_opsi_pengiriman`
--

CREATE TABLE `tm_opsi_pengiriman` (
  `kd_pengiriman` int(10) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `jenis_pengiriman` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_opsi_pengiriman`
--

INSERT INTO `tm_opsi_pengiriman` (`kd_pengiriman`, `provinsi`, `kota`, `jenis_pengiriman`) VALUES
(1, 'Jawa Timur', 'Surabaya Gubeng', 'JNE'),
(2, 'Jawa Timur', 'Probolinggo', 'JNE Reguler'),
(3, 'Jawa Barat', 'Bandung', 'J&T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_pegawai`
--

CREATE TABLE `tm_pegawai` (
  `kd_pegawai` int(10) NOT NULL,
  `status_pegawai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_pegawai`
--

INSERT INTO `tm_pegawai` (`kd_pegawai`, `status_pegawai`) VALUES
(1, 'Admin'),
(2, 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_pembayaran`
--

CREATE TABLE `tm_pembayaran` (
  `kd_pembayaran` int(10) NOT NULL,
  `kd_bayar` int(10) NOT NULL,
  `kd_pembelian` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_pembayaran`
--

INSERT INTO `tm_pembayaran` (`kd_pembayaran`, `kd_bayar`, `kd_pembelian`) VALUES
(5, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_pembelian`
--

CREATE TABLE `tm_pembelian` (
  `kd_pembelian` int(10) NOT NULL,
  `kd_customer` int(10) NOT NULL,
  `kd_barang` int(10) NOT NULL,
  `jumlah_beli` int(10) DEFAULT NULL,
  `kd_ongkir` int(10) NOT NULL,
  `sub_harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_pembelian`
--

INSERT INTO `tm_pembelian` (`kd_pembelian`, `kd_customer`, `kd_barang`, `jumlah_beli`, `kd_ongkir`, `sub_harga`) VALUES
(1, 1, 1, 4, 1, 167000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_status`
--

CREATE TABLE `tm_status` (
  `kd_status` int(10) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_status`
--

INSERT INTO `tm_status` (`kd_status`, `status`) VALUES
(1, 'Lunas'),
(2, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_status_barang`
--

CREATE TABLE `tm_status_barang` (
  `kd_status_barang` int(10) NOT NULL,
  `status_barang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_status_barang`
--

INSERT INTO `tm_status_barang` (`kd_status_barang`, `status_barang`) VALUES
(1, 'Ready'),
(2, 'Sold out');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_transaksi`
--

CREATE TABLE `tm_transaksi` (
  `kd_transaksi` int(10) NOT NULL,
  `kd_pembelian` int(10) NOT NULL,
  `kd_pembayaran` int(10) NOT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `alamat_pengiriman` text,
  `kd_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_transaksi`
--

INSERT INTO `tm_transaksi` (`kd_transaksi`, `kd_pembelian`, `kd_pembayaran`, `tanggal_pengiriman`, `tanggal_pembelian`, `alamat_pengiriman`, `kd_status`) VALUES
(1, 1, 5, '2019-10-11', '2019-10-09', 'Jl. Gubeng Airlangga VI no 2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs_info`
--
ALTER TABLE `faqs_info`
  ADD PRIMARY KEY (`kd`),
  ADD KEY `kd_faqs` (`kd_faqs`),
  ADD KEY `kd_toko` (`kd_toko`);

--
-- Indexes for table `tm_admin`
--
ALTER TABLE `tm_admin`
  ADD PRIMARY KEY (`kd_admin`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indexes for table `tm_barang`
--
ALTER TABLE `tm_barang`
  ADD PRIMARY KEY (`kd_barang`),
  ADD KEY `kd_kategori` (`kd_kategori`),
  ADD KEY `kd_diskon` (`kd_diskon`);

--
-- Indexes for table `tm_barang_ready`
--
ALTER TABLE `tm_barang_ready`
  ADD PRIMARY KEY (`kd_ready`),
  ADD KEY `kd_detail` (`kd_detail`),
  ADD KEY `kd_status_barang` (`kd_status_barang`);

--
-- Indexes for table `tm_bayar`
--
ALTER TABLE `tm_bayar`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indexes for table `tm_customer`
--
ALTER TABLE `tm_customer`
  ADD PRIMARY KEY (`kd_customer`);

--
-- Indexes for table `tm_detail_barang`
--
ALTER TABLE `tm_detail_barang`
  ADD PRIMARY KEY (`kd_detail`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `tm_diskon`
--
ALTER TABLE `tm_diskon`
  ADD PRIMARY KEY (`kd_diskon`);

--
-- Indexes for table `tm_faqs`
--
ALTER TABLE `tm_faqs`
  ADD PRIMARY KEY (`kd_faqs`);

--
-- Indexes for table `tm_info`
--
ALTER TABLE `tm_info`
  ADD PRIMARY KEY (`kd_toko`);

--
-- Indexes for table `tm_kategori`
--
ALTER TABLE `tm_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tm_kritik`
--
ALTER TABLE `tm_kritik`
  ADD PRIMARY KEY (`kd_kritik`),
  ADD KEY `kd_pembelian` (`kd_pembelian`);

--
-- Indexes for table `tm_ongkir`
--
ALTER TABLE `tm_ongkir`
  ADD PRIMARY KEY (`kd_ongkir`),
  ADD KEY `kd_pengiriman` (`kd_pengiriman`);

--
-- Indexes for table `tm_opsi_pengiriman`
--
ALTER TABLE `tm_opsi_pengiriman`
  ADD PRIMARY KEY (`kd_pengiriman`);

--
-- Indexes for table `tm_pegawai`
--
ALTER TABLE `tm_pegawai`
  ADD PRIMARY KEY (`kd_pegawai`);

--
-- Indexes for table `tm_pembayaran`
--
ALTER TABLE `tm_pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`),
  ADD KEY `kd_pembelian` (`kd_pembelian`),
  ADD KEY `kd_bayar` (`kd_bayar`);

--
-- Indexes for table `tm_pembelian`
--
ALTER TABLE `tm_pembelian`
  ADD PRIMARY KEY (`kd_pembelian`),
  ADD KEY `kd_customer` (`kd_customer`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `kd_ongkir` (`kd_ongkir`);

--
-- Indexes for table `tm_status`
--
ALTER TABLE `tm_status`
  ADD PRIMARY KEY (`kd_status`);

--
-- Indexes for table `tm_status_barang`
--
ALTER TABLE `tm_status_barang`
  ADD PRIMARY KEY (`kd_status_barang`);

--
-- Indexes for table `tm_transaksi`
--
ALTER TABLE `tm_transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `kd_pembelian` (`kd_pembelian`),
  ADD KEY `kd_status` (`kd_status`),
  ADD KEY `kd_pembayaran` (`kd_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs_info`
--
ALTER TABLE `faqs_info`
  MODIFY `kd` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tm_admin`
--
ALTER TABLE `tm_admin`
  MODIFY `kd_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tm_barang`
--
ALTER TABLE `tm_barang`
  MODIFY `kd_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_barang_ready`
--
ALTER TABLE `tm_barang_ready`
  MODIFY `kd_ready` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tm_bayar`
--
ALTER TABLE `tm_bayar`
  MODIFY `kd_bayar` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_customer`
--
ALTER TABLE `tm_customer`
  MODIFY `kd_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tm_detail_barang`
--
ALTER TABLE `tm_detail_barang`
  MODIFY `kd_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_diskon`
--
ALTER TABLE `tm_diskon`
  MODIFY `kd_diskon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_faqs`
--
ALTER TABLE `tm_faqs`
  MODIFY `kd_faqs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_info`
--
ALTER TABLE `tm_info`
  MODIFY `kd_toko` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tm_kategori`
--
ALTER TABLE `tm_kategori`
  MODIFY `kd_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tm_kritik`
--
ALTER TABLE `tm_kritik`
  MODIFY `kd_kritik` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tm_ongkir`
--
ALTER TABLE `tm_ongkir`
  MODIFY `kd_ongkir` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tm_opsi_pengiriman`
--
ALTER TABLE `tm_opsi_pengiriman`
  MODIFY `kd_pengiriman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tm_pegawai`
--
ALTER TABLE `tm_pegawai`
  MODIFY `kd_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_pembayaran`
--
ALTER TABLE `tm_pembayaran`
  MODIFY `kd_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tm_pembelian`
--
ALTER TABLE `tm_pembelian`
  MODIFY `kd_pembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tm_status`
--
ALTER TABLE `tm_status`
  MODIFY `kd_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_status_barang`
--
ALTER TABLE `tm_status_barang`
  MODIFY `kd_status_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tm_transaksi`
--
ALTER TABLE `tm_transaksi`
  MODIFY `kd_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `faqs_info`
--
ALTER TABLE `faqs_info`
  ADD CONSTRAINT `faqs_info_ibfk_1` FOREIGN KEY (`kd_toko`) REFERENCES `tm_info` (`kd_toko`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faqs_info_ibfk_2` FOREIGN KEY (`kd_faqs`) REFERENCES `tm_faqs` (`kd_faqs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_admin`
--
ALTER TABLE `tm_admin`
  ADD CONSTRAINT `tm_admin_ibfk_1` FOREIGN KEY (`kd_pegawai`) REFERENCES `tm_pegawai` (`kd_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_barang`
--
ALTER TABLE `tm_barang`
  ADD CONSTRAINT `tm_barang_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `tm_kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_barang_ibfk_2` FOREIGN KEY (`kd_diskon`) REFERENCES `tm_diskon` (`kd_diskon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_barang_ready`
--
ALTER TABLE `tm_barang_ready`
  ADD CONSTRAINT `tm_barang_ready_ibfk_1` FOREIGN KEY (`kd_detail`) REFERENCES `tm_detail_barang` (`kd_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_barang_ready_ibfk_2` FOREIGN KEY (`kd_status_barang`) REFERENCES `tm_status_barang` (`kd_status_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_detail_barang`
--
ALTER TABLE `tm_detail_barang`
  ADD CONSTRAINT `tm_detail_barang_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `tm_barang` (`kd_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_kritik`
--
ALTER TABLE `tm_kritik`
  ADD CONSTRAINT `tm_kritik_ibfk_1` FOREIGN KEY (`kd_pembelian`) REFERENCES `tm_pembelian` (`kd_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_ongkir`
--
ALTER TABLE `tm_ongkir`
  ADD CONSTRAINT `tm_ongkir_ibfk_1` FOREIGN KEY (`kd_pengiriman`) REFERENCES `tm_opsi_pengiriman` (`kd_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_pembayaran`
--
ALTER TABLE `tm_pembayaran`
  ADD CONSTRAINT `tm_pembayaran_ibfk_1` FOREIGN KEY (`kd_bayar`) REFERENCES `tm_bayar` (`kd_bayar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_pembayaran_ibfk_2` FOREIGN KEY (`kd_pembelian`) REFERENCES `tm_pembelian` (`kd_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_pembelian`
--
ALTER TABLE `tm_pembelian`
  ADD CONSTRAINT `tm_pembelian_ibfk_1` FOREIGN KEY (`kd_customer`) REFERENCES `tm_customer` (`kd_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_pembelian_ibfk_2` FOREIGN KEY (`kd_barang`) REFERENCES `tm_barang` (`kd_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_pembelian_ibfk_3` FOREIGN KEY (`kd_ongkir`) REFERENCES `tm_ongkir` (`kd_ongkir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tm_transaksi`
--
ALTER TABLE `tm_transaksi`
  ADD CONSTRAINT `tm_transaksi_ibfk_1` FOREIGN KEY (`kd_status`) REFERENCES `tm_status` (`kd_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_transaksi_ibfk_2` FOREIGN KEY (`kd_pembelian`) REFERENCES `tm_pembelian` (`kd_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_transaksi_ibfk_3` FOREIGN KEY (`kd_pembayaran`) REFERENCES `tm_pembayaran` (`kd_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
