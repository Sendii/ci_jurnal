-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jun 2022 pada 08.23
-- Versi server: 5.7.24
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm_puri_utami`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `waktu` date NOT NULL,
  `id_karyawan` int(12) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `kehadiran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`waktu`, `id_karyawan`, `nama_karyawan`, `kehadiran`) VALUES
('2021-05-01', 3, 'Kadek', 'hadir'),
('2021-05-01', 5, 'Mawar', 'alfa'),
('2021-05-01', 7, 'sulay', 'hadir'),
('2021-05-01', 8, 'eza ', 'hadir'),
('2021-05-01', 9, 'Said', 'hadir'),
('2021-05-21', 3, 'Kadek', 'izin'),
('2021-05-21', 5, 'Mawar', 'izin'),
('2021-05-21', 7, 'sulay', 'izin'),
('2021-05-21', 8, 'eza ', 'izin'),
('2021-05-21', 9, 'Said', 'izin'),
('2021-05-22', 3, 'Kadek', 'izin'),
('2021-05-22', 5, 'Mawar', 'izin'),
('2021-05-22', 7, 'sulay', 'alfa'),
('2021-05-22', 8, 'eza ', 'izin'),
('2021-05-22', 9, 'Said', 'izin'),
('2021-05-24', 1, 'Novelia', 'hadir'),
('2021-05-24', 2, 'Dyah', 'alfa'),
('2021-05-24', 3, 'Anggi', 'izin'),
('2021-05-24', 4, 'Prabandari', 'hadir'),
('2021-05-29', 1, 'Novelia', 'hadir'),
('2021-05-29', 2, 'Dyah', 'alfa'),
('2021-05-29', 3, 'Anggi', 'izin'),
('2021-05-29', 4, 'Prabandari', 'hadir'),
('2021-05-01', 3, 'Kadek', 'hadir'),
('2021-05-01', 5, 'Mawar', 'alfa'),
('2021-05-01', 7, 'sulay', 'hadir'),
('2021-05-01', 8, 'eza ', 'hadir'),
('2021-05-01', 9, 'Said', 'hadir'),
('2021-05-21', 3, 'Kadek', 'izin'),
('2021-05-21', 5, 'Mawar', 'izin'),
('2021-05-21', 7, 'sulay', 'izin'),
('2021-05-21', 8, 'eza ', 'izin'),
('2021-05-21', 9, 'Said', 'izin'),
('2021-05-22', 3, 'Kadek', 'izin'),
('2021-05-22', 5, 'Mawar', 'izin'),
('2021-05-22', 7, 'sulay', 'alfa'),
('2021-05-22', 8, 'eza ', 'izin'),
('2021-05-22', 9, 'Said', 'izin'),
('2021-05-24', 1, 'Novelia', 'hadir'),
('2021-05-24', 2, 'Dyah', 'alfa'),
('2021-05-24', 3, 'Anggi', 'izin'),
('2021-05-24', 4, 'Prabandari', 'hadir'),
('2021-05-29', 1, 'Novelia', 'hadir'),
('2021-05-29', 2, 'Dyah', 'alfa'),
('2021-05-29', 3, 'Anggi', 'izin'),
('2021-05-29', 4, 'Prabandari', 'hadir'),
('2021-05-01', 3, 'Kadek', 'hadir'),
('2021-05-01', 5, 'Mawar', 'alfa'),
('2021-05-01', 7, 'sulay', 'hadir'),
('2021-05-01', 8, 'eza ', 'hadir'),
('2021-05-01', 9, 'Said', 'hadir'),
('2021-05-21', 3, 'Kadek', 'izin'),
('2021-05-21', 5, 'Mawar', 'izin'),
('2021-05-21', 7, 'sulay', 'izin'),
('2021-05-21', 8, 'eza ', 'izin'),
('2021-05-21', 9, 'Said', 'izin'),
('2021-05-22', 3, 'Kadek', 'izin'),
('2021-05-22', 5, 'Mawar', 'izin'),
('2021-05-22', 7, 'sulay', 'alfa'),
('2021-05-22', 8, 'eza ', 'izin'),
('2021-05-22', 9, 'Said', 'izin'),
('2021-05-24', 1, 'Novelia', 'hadir'),
('2021-05-24', 2, 'Dyah', 'alfa'),
('2021-05-24', 3, 'Anggi', 'izin'),
('2021-05-24', 4, 'Prabandari', 'hadir'),
('2021-05-29', 1, 'Novelia', 'hadir'),
('2021-05-29', 2, 'Dyah', 'alfa'),
('2021-05-29', 3, 'Anggi', 'izin'),
('2021-05-29', 4, 'Prabandari', 'hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `kode_akun` int(5) NOT NULL,
  `nama_akun` varchar(50) DEFAULT NULL,
  `header_akun` int(11) DEFAULT NULL,
  `posisi_d_c` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `kode_akun`, `nama_akun`, `header_akun`, `posisi_d_c`) VALUES
(48, 111, 'Kas', 1, 'debet'),
(50, 115, 'Persediaan Produk Jadi', 1, 'debet'),
(52, 411, 'Penjualan Online', 4, 'kredit'),
(53, 511, 'Harga Pokok Penjualan', 5, 'debet'),
(54, 611, 'Beban Telepon', 6, 'debet'),
(55, 612, 'Beban Listrik', 6, 'debet'),
(76, 613, 'Beban Transportasi', 6, 'debet'),
(77, 614, 'Beban Administrasi', 6, 'debet'),
(85, 615, 'Beban Ongkir Pembelian', 6, 'debet'),
(86, 113, 'Persediaan Bahan Baku', 1, 'debet'),
(87, 121, 'BDP BBB', 1, 'debet'),
(88, 122, 'BDP BTKL', 1, 'debet'),
(89, 123, 'BDP BOP', 1, 'debet'),
(90, 114, 'Persediaan Bahan Penolong', 1, 'debet'),
(91, 412, 'Penjualan Offline', 4, 'kredit'),
(92, 616, 'Beban Gaji', 6, 'debet'),
(93, 515, 'Semua rekening yang di kreditkan', 5, 'debet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_login`
--

CREATE TABLE `akun_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(32) CHARACTER SET utf8 NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_login`
--

INSERT INTO `akun_login` (`id`, `username`, `pwd`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahanbaku` int(20) NOT NULL,
  `nama_bahanbaku` varchar(50) DEFAULT NULL,
  `satuan_bb` varchar(25) DEFAULT NULL,
  `qty_bb` varchar(25) DEFAULT NULL,
  `harga_bb` varchar(25) DEFAULT NULL,
  `jenis_bb` varchar(50) DEFAULT NULL,
  `metode_penggunaan` varchar(25) DEFAULT NULL,
  `id_kartustock` varchar(10) DEFAULT NULL,
  `biaya_pesan` varchar(25) DEFAULT NULL,
  `biaya_simpan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahanbaku`, `nama_bahanbaku`, `satuan_bb`, `qty_bb`, `harga_bb`, `jenis_bb`, `metode_penggunaan`, `id_kartustock`, `biaya_pesan`, `biaya_simpan`) VALUES
(1, 'Kain', 'Meter', '70', '25000', 'Bahan Baku', NULL, NULL, '150000', '4375'),
(3, 'Kain Rayon', 'Meter', '100', '22500', 'Bahan Baku', NULL, NULL, '150000', '5625'),
(4, 'Kuas', 'Satuan', '4', '40000', 'Bahan Penolong', NULL, NULL, '150000', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb`
--

CREATE TABLE `bb` (
  `id_bb` int(30) NOT NULL,
  `id_produksi` varchar(30) NOT NULL,
  `total_bb` double NOT NULL,
  `tgl_bb` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bb`
--

INSERT INTO `bb` (`id_bb`, `id_produksi`, `total_bb`, `tgl_bb`) VALUES
(12, 'PRD-001', 125000, '2022-06-15'),
(13, 'PRD-002', 100000, '2022-06-19'),
(14, 'PRD-003', 75000, '2022-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bop`
--

CREATE TABLE `bop` (
  `id_bop` int(30) NOT NULL,
  `id_produksi` varchar(30) NOT NULL,
  `total_bop` double NOT NULL,
  `tgl_bop` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bop`
--

INSERT INTO `bop` (`id_bop`, `id_produksi`, `total_bop`, `tgl_bop`) VALUES
(12, 'PRD-001', 168000, '2022-06-15'),
(13, 'PRD-002', 276000, '2022-06-19'),
(14, 'PRD-003', 412000, '2022-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `btkl`
--

CREATE TABLE `btkl` (
  `id_btkl` int(30) NOT NULL,
  `id_produksi` varchar(30) NOT NULL,
  `total_btkl` double NOT NULL,
  `tgl_btkl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `btkl`
--

INSERT INTO `btkl` (`id_btkl`, `id_produksi`, `total_btkl`, `tgl_btkl`) VALUES
(12, 'PRD-001', 132000, '2022-06-15'),
(13, 'PRD-002', 540000, '2022-06-19'),
(14, 'PRD-003', 555000, '2022-06-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chanel_penjualan`
--

CREATE TABLE `chanel_penjualan` (
  `id_chanel` int(11) NOT NULL,
  `nama_chanel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chanel_penjualan`
--

INSERT INTO `chanel_penjualan` (`id_chanel`, `nama_chanel`) VALUES
(1, 'https://www.tokopedia.com/puri-utami'),
(2, 'https://www.instagram.com/puriutami_mukena'),
(3, 'https://www.blibli.com/merchant/umkm-puri-utami/UM'),
(4, 'Facebook'),
(5, 'shopee'),
(6, 'https://www.facebook.com/Puri'),
(1, 'https://www.tokopedia.com/puri-utami'),
(2, 'https://www.instagram.com/puriutami_mukena'),
(3, 'https://www.blibli.com/merchant/umkm-puri-utami/UM'),
(4, 'Facebook'),
(5, 'shopee'),
(6, 'https://www.facebook.com/Puri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_produksi`
--

CREATE TABLE `detail_produksi` (
  `id` varchar(240) NOT NULL,
  `id_produksi` varchar(10) NOT NULL,
  `nama_bb` varchar(30) NOT NULL,
  `satuan_bb` varchar(20) NOT NULL,
  `nama_bop` varchar(30) NOT NULL,
  `satuan_bop` varchar(20) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `satuan_karyawan` varchar(20) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_produksi_bb`
--

CREATE TABLE `detail_produksi_bb` (
  `id` int(11) NOT NULL,
  `id_produksi` varchar(50) DEFAULT NULL,
  `id_bb` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_produksi_bb`
--

INSERT INTO `detail_produksi_bb` (`id`, `id_produksi`, `id_bb`, `nominal`, `qty`, `total`) VALUES
(21, 'PRD-001', 1, 25000, 5, 125000),
(22, 'PRD-002', 1, 25000, 4, 100000),
(23, 'PRD-003', 1, 25000, 3, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_produksi_bop`
--

CREATE TABLE `detail_produksi_bop` (
  `id` int(11) NOT NULL,
  `id_produksi` varchar(50) DEFAULT NULL,
  `id_detail_bb` int(11) DEFAULT NULL,
  `id_overhead` varchar(25) DEFAULT NULL,
  `id_bop` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_produksi_bop`
--

INSERT INTO `detail_produksi_bop` (`id`, `id_produksi`, `id_detail_bb`, `id_overhead`, `id_bop`, `nominal`, `qty`, `total`) VALUES
(38, 'PRD-001', 1, NULL, 4, 40000, 3, 120000),
(39, 'PRD-001', 1, '1', NULL, 12000, 4, 48000),
(40, 'PRD-002', 1, NULL, 4, 40000, 3, 120000),
(41, 'PRD-002', 1, '1', NULL, 12000, 5, 60000),
(42, 'PRD-002', 1, '2', NULL, 24000, 4, 96000),
(43, 'PRD-003', 1, NULL, 4, 40000, 4, 160000),
(44, 'PRD-003', 1, '1', NULL, 12000, 5, 60000),
(45, 'PRD-003', 1, '2', NULL, 24000, 8, 192000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_produksi_btk`
--

CREATE TABLE `detail_produksi_btk` (
  `id` int(11) NOT NULL,
  `id_produksi` varchar(50) DEFAULT NULL,
  `id_detail_bb` int(11) DEFAULT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `jumlah_hari` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_produksi_btk`
--

INSERT INTO `detail_produksi_btk` (`id`, `id_produksi`, `id_detail_bb`, `id_karyawan`, `nominal`, `jumlah_hari`, `total`) VALUES
(23, 'PRD-001', 1, 2, 44000, 3, 132000),
(24, 'PRD-002', 1, 1, 3, 45000, 135000),
(25, 'PRD-002', 1, 2, 4, 35000, 140000),
(26, 'PRD-002', 1, 4, 5, 53000, 265000),
(27, 'PRD-003', 1, 1, 30000, 3, 90000),
(28, 'PRD-003', 1, 2, 45000, 4, 180000),
(29, 'PRD-003', 1, 4, 57000, 5, 285000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `tgl_jurnal` date DEFAULT NULL,
  `posisi_d_c` varchar(7) CHARACTER SET utf8mb4 NOT NULL,
  `nominal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id`, `id_transaksi`, `kode_akun`, `tgl_jurnal`, `posisi_d_c`, `nominal`) VALUES
(164, 'PRD-001', 121, '2022-06-15', 'd', 125000),
(165, 'PRD-001', 113, '2022-06-15', 'k', 125000),
(166, 'PRD-001', 122, '2022-06-15', 'd', 132000),
(167, 'PRD-001', 616, '2022-06-15', 'k', 132000),
(168, 'PRD-001', 123, '2022-06-15', 'd', 168000),
(169, 'PRD-001', 515, '2022-06-15', 'k', 168000),
(170, 'PRD-001', 115, '2022-06-15', 'd', 425000),
(171, 'PRD-001', 121, '2022-06-15', 'k', 125000),
(172, 'PRD-001', 122, '2022-06-15', 'k', 132000),
(173, 'PRD-001', 123, '2022-06-15', 'k', 168000),
(174, 'PRD-002', 121, '2022-06-19', 'd', 100000),
(175, 'PRD-002', 113, '2022-06-19', 'k', 100000),
(176, 'PRD-002', 122, '2022-06-19', 'd', 540000),
(177, 'PRD-002', 616, '2022-06-19', 'k', 540000),
(178, 'PRD-002', 123, '2022-06-19', 'd', 276000),
(179, 'PRD-002', 515, '2022-06-19', 'k', 276000),
(180, 'PRD-002', 115, '2022-06-19', 'd', 916000),
(181, 'PRD-002', 121, '2022-06-19', 'k', 100000),
(182, 'PRD-002', 122, '2022-06-19', 'k', 540000),
(183, 'PRD-002', 123, '2022-06-19', 'k', 276000),
(184, 'PRD-003', 121, '2022-06-25', 'd', 75000),
(185, 'PRD-003', 113, '2022-06-25', 'k', 75000),
(186, 'PRD-003', 122, '2022-06-25', 'd', 555000),
(187, 'PRD-003', 616, '2022-06-25', 'k', 555000),
(188, 'PRD-003', 123, '2022-06-25', 'd', 412000),
(189, 'PRD-003', 515, '2022-06-25', 'k', 412000),
(190, 'PRD-003', 115, '2022-06-25', 'd', 1042000),
(191, 'PRD-003', 121, '2022-06-25', 'k', 75000),
(192, 'PRD-003', 122, '2022-06-25', 'k', 555000),
(193, 'PRD-003', 123, '2022-06-25', 'k', 412000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(5) NOT NULL,
  `nama_karyawan` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `no_telp` varchar(17) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `jabatan`, `gambar`) VALUES
(1, 'lia', '2000-11-11', 'Jenis Kelamin', '082134090356', 'Jl Mrebet', 'HRD', '60a4fd196952e.jpg'),
(2, 'Sarah', '2001-10-20', 'Jenis Kelamin', '082134090351', 'Jl Serayu', 'Supervisor', '60a4fd2841448.jpg'),
(3, 'Anggi', '2021-03-22', 'Jenis Kelamin', '082134090355', 'Jl bojong', 'Direktur', '60a4fd35c3e0c.jpg'),
(4, 'Faiz', '2021-03-23', 'perempuan', '082134090357', 'Jl Bandung', 'Karyawan', '606455dd35110.jpg'),
(6, 'Mawar S', '2003-02-05', 'perempuan', '082184563321', 'Bandung', 'Karyawan', '61d7184845291.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
('G01', 'Gamis'),
('KK01', 'Mukena'),
('KK02', 'Tunik'),
('KK03', 'Gamis'),
('KK04', 'Batik'),
('M01', 'Mukena'),
('T01', 'Tunik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `overhead`
--

CREATE TABLE `overhead` (
  `id_overhead` int(11) NOT NULL,
  `nama_overhead` varchar(120) NOT NULL,
  `satuan_overhead` varchar(120) NOT NULL,
  `qty_overhead` int(11) NOT NULL,
  `harga_overhead` int(111) NOT NULL,
  `total_overhead` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `overhead`
--

INSERT INTO `overhead` (`id_overhead`, `nama_overhead`, `satuan_overhead`, `qty_overhead`, `harga_overhead`, `total_overhead`) VALUES
(1, 'Listrik', 'kwh', 1, 12000, 12000),
(2, 'Cat', 'Drum', 1, 24000, 24000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_transaksi` int(12) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `kehadiran` varchar(12) NOT NULL,
  `gaji` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_transaksi`, `nama_karyawan`, `waktu`, `kehadiran`, `gaji`) VALUES
(29, 'Kadek', '2021-04-20', '30', '32000000'),
(31, 'Mawar', '2021-04-02', '24', '6000012'),
(32, 'lala', '2021-04-27', '21', '2100000'),
(33, 'lala', '2021-04-27', '21', '2100000'),
(34, 'sulay', '2021-04-27', '24', '20000004'),
(35, 'sulay', '2021-04-07', '12', '1200000'),
(36, 'sulay', '2021-04-07', '12', '1200000'),
(37, 'lala', '2021-04-14', '11', '1100000'),
(38, 'lala', '2021-04-14', '11', '1100000'),
(39, 'eza ', '2021-04-23', '29', '2900000'),
(40, 'eza ', '2021-04-23', '29', '2900000'),
(41, 'eza ', '2021-04-23', '29', '2900000'),
(43, 'Kadek', '2021-05-07', '24', '2456000'),
(44, 'Kadek', '2021-05-07', '24', '2456000'),
(45, 'Kadek', '2021-05-01', '30', '32100000'),
(46, 'sulay', '2021-05-15', '30', '32000000'),
(47, 'sulay', '2021-04-30', '30', '32000000'),
(48, 'sulay', '2021-04-30', '30', '32000000'),
(49, 'eza ', '2021-04-29', '24', '25500004'),
(64, 'Novelia', '2021-05-24', 'Kasir', '2700000'),
(68, 'Dyah', '2021-12-01', 'Penjahit 2 ', '3200000'),
(80, 'Novelia', '2021-05-29', 'Kasir', '2700000'),
(81, 'Anggi', '2021-05-14', 'Penjahit 2 ', '3200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembebanan`
--

CREATE TABLE `pembebanan` (
  `id_transaksi` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembebanan`
--

INSERT INTO `pembebanan` (`id_transaksi`, `biaya`, `nama`, `waktu`) VALUES
(60, 100000, 'Beban Pembuatan Kartu Nama', '2021-05-23 00:00:00'),
(61, 50000, 'Beban Poster', '2021-05-23 00:00:00'),
(62, 50000, 'Beban Tembakan Harga', '2021-05-23 00:00:00'),
(63, 30000, 'Beban Bensin Bulan Mei', '2021-05-24 00:00:00'),
(65, 50000, 'Beban Bensin Bulan Mei', '2021-05-28 00:00:00'),
(66, 50000, 'Beban Poster Mei', '2021-05-28 00:00:00'),
(67, 150000, 'Raini', '2021-11-20 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_transaksi` int(10) NOT NULL,
  `kode_pembelian` varchar(15) DEFAULT NULL,
  `tgl_pembelian` date DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `jumlah_pembelian` int(11) DEFAULT NULL,
  `total_pembelian` int(11) DEFAULT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `nama_pembelian` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_transaksi`, `kode_pembelian`, `tgl_pembelian`, `id_supplier`, `jumlah_pembelian`, `total_pembelian`, `kode_produk`, `nama_pembelian`) VALUES
(54, '1', '2021-05-03', 1, 5, 200000, NULL, 'Pembelian kain '),
(55, '11', '2021-05-23', 1, 5, 200000, NULL, 'Pembelian kain '),
(68, '1', '2021-05-28', 1, 5, 200000, NULL, 'Pembelian kain '),
(74, '11', '2021-05-29', 10, 5, 300000, NULL, 'Pembelian kain '),
(75, '1', '2021-05-29', 2, 6, 200000, NULL, 'Pembelian kain ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemodalan`
--

CREATE TABLE `pemodalan` (
  `id_transaksi` int(11) NOT NULL,
  `besar` varchar(11) DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `kode_produk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemodalan`
--

INSERT INTO `pemodalan` (`id_transaksi`, `besar`, `nama`, `waktu`, `kode_produk`) VALUES
(70, '2000000', 'Modal Awal Bu Lely', '2021-05-29 00:00:00', 'MKN12'),
(71, '1000000', 'Prive', '2021-05-29 00:00:00', 'MKN12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencatatan_harian`
--

CREATE TABLE `pencatatan_harian` (
  `kode_barang` char(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `posisi_db_kd` varchar(11) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pencatatan_harian`
--

INSERT INTO `pencatatan_harian` (`kode_barang`, `tanggal`, `keterangan`, `jumlah`, `posisi_db_kd`, `saldo`) VALUES
('KB01', '2021-03-18', 'Mukena', 15, 'Debet', 250000),
('KB02', '2021-03-18', 'Tunik', 10, 'Debet', 200000),
('KB03', '2021-03-20', 'Gamis', 12, 'Debet', 230000),
('KB04', '2021-03-22', 'Batik', 4, 'Debet', 270000),
('KB05', '2021-04-04', 'Mukena', 4, 'Debet', 270000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_transaksi` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `hpp` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_transaksi`, `nama_produk`, `waktu`, `nama_pembeli`, `jumlah`, `harga`, `hpp`, `total`) VALUES
(68, 'Produk A', '2021-11-15 00:00:00', 'SIapa', '1', '200000', '100000', '300000'),
(76, 'Mukena', '2021-05-29 00:00:00', 'Novelia', '4', '500000', '100000', '600000'),
(77, 'Gamis', '2021-05-29 00:00:00', 'Dyah', '3', '500000', '150000', '650000'),
(78, 'Gamis', '2021-05-29 00:00:00', 'Anggi', '2', '600000', '200000', '800000'),
(79, 'Mukena', '2021-05-29 00:00:00', 'Prabandari', '1', '7000000', '1000000', '8000000'),
(68, 'Produk A', '2021-11-15 00:00:00', 'SIapa', '1', '200000', '100000', '300000'),
(76, 'Mukena', '2021-05-29 00:00:00', 'Novelia', '4', '500000', '100000', '600000'),
(77, 'Gamis', '2021-05-29 00:00:00', 'Dyah', '3', '500000', '150000', '650000'),
(78, 'Gamis', '2021-05-29 00:00:00', 'Anggi', '2', '600000', '200000', '800000'),
(79, 'Mukena', '2021-05-29 00:00:00', 'Prabandari', '1', '7000000', '1000000', '8000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `kode_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `harga_produk` varchar(20) NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `kode_kategori` varchar(5) NOT NULL,
  `id_supplier` varchar(5) NOT NULL,
  `id_karyawan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `stok`, `harga_produk`, `gambar`, `kode_kategori`, `id_supplier`, `id_karyawan`) VALUES
(1, 'MKN12', 'Mukena', '10', '200000', '60a6222128768.jpg', 'KK03', '1', '2'),
(2, 'MKN12', 'Mukena', '10', '200000', '605aec4cacea1.jpg', '123', 'SUP12', 'PEG12'),
(3, 'MKN12', 'Mukena', '10', '200000', '605aec5bccaa2.jpg', '123', 'SUP12', 'PEG12'),
(5, 'MKN12', 'Mukena', '10', '200000', '605aec6e96e8e.jpg', 'KK01', '1', '2'),
(6, 'MKN12', 'Mukena', '10', '200000', '605aec7bd23f2.jpg', 'KK04', '1', '2'),
(7, 'GMS01', 'Gamis', '10', '300,000', '6069b56214001.jpg', 'KK02', '1', '2'),
(8, 'GMS01', 'Gamis', '10', '300,000', '6069b61aaad29.jpg', 'KK02', '1', '2'),
(9, 'GMS02', 'Gamis', '10', '200000', '6069b64795ea1.jpg', 'KK02', '1', '2'),
(10, 'GMS02', 'Gamis', '10', '200000', '6069b6a8d9c2c.jpg', 'KK02', '1', '2'),
(11, 'GMS02', 'Gamis', '10', '200000', '6069b6bb9078c.jpg', 'KK02', '1', '2'),
(12, 'GMS02', 'Gamis', '10', '200000', '6069b6fde34ed.jpg', 'KK02', '1', '2'),
(13, 'GMS02', 'Gamis', '10', '200000', '6069b7a65571e.jpg', 'KK02', '1', '2'),
(1, 'MKN12', 'Mukena', '10', '200000', '60a6222128768.jpg', 'KK03', '1', '2'),
(2, 'MKN12', 'Mukena', '10', '200000', '605aec4cacea1.jpg', '123', 'SUP12', 'PEG12'),
(3, 'MKN12', 'Mukena', '10', '200000', '605aec5bccaa2.jpg', '123', 'SUP12', 'PEG12'),
(5, 'MKN12', 'Mukena', '10', '200000', '605aec6e96e8e.jpg', 'KK01', '1', '2'),
(6, 'MKN12', 'Mukena', '10', '200000', '605aec7bd23f2.jpg', 'KK04', '1', '2'),
(7, 'GMS01', 'Gamis', '10', '300,000', '6069b56214001.jpg', 'KK02', '1', '2'),
(8, 'GMS01', 'Gamis', '10', '300,000', '6069b61aaad29.jpg', 'KK02', '1', '2'),
(9, 'GMS02', 'Gamis', '10', '200000', '6069b64795ea1.jpg', 'KK02', '1', '2'),
(10, 'GMS02', 'Gamis', '10', '200000', '6069b6a8d9c2c.jpg', 'KK02', '1', '2'),
(11, 'GMS02', 'Gamis', '10', '200000', '6069b6bb9078c.jpg', 'KK02', '1', '2'),
(12, 'GMS02', 'Gamis', '10', '200000', '6069b6fde34ed.jpg', 'KK02', '1', '2'),
(13, 'GMS02', 'Gamis', '10', '200000', '6069b7a65571e.jpg', 'KK02', '1', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id` int(200) NOT NULL,
  `id_produksi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `produk` varchar(50) NOT NULL,
  `q_bp` int(50) NOT NULL,
  `total` varchar(30) NOT NULL,
  `total_harga` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id`, `id_produksi`, `tanggal`, `produk`, `q_bp`, `total`, `total_harga`, `status`) VALUES
(21, 'PRD-001', '2022-06-15', 'Produk baju XY', 5, '425000', '2125000', 'Diproduksi'),
(22, 'PRD-002', '2022-06-19', 'baju ceria abc', 5, '916000', '4580000', 'Diproduksi'),
(23, 'PRD-003', '2022-06-25', 'Produk mukena cangtip', 10, '1042000', '10420000', 'Diproduksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(5) NOT NULL,
  `nama_suplier` varchar(20) DEFAULT NULL,
  `alamat_supplier` varchar(20) DEFAULT NULL,
  `no_telp_supplier` varchar(20) DEFAULT NULL,
  `nama_cv` varchar(10) DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `targetcosting`
--

CREATE TABLE `targetcosting` (
  `id` int(11) NOT NULL,
  `id_tc` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `hargajual` varchar(30) NOT NULL,
  `laba` varchar(30) NOT NULL,
  `targetcost` varchar(30) NOT NULL,
  `produksi_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `targetcosting`
--

INSERT INTO `targetcosting` (`id`, `id_tc`, `hargajual`, `laba`, `targetcost`, `produksi_id`) VALUES
(7, 'TC-007', '40000', '5', '38000', 'PRD-001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_coa`
--

CREATE TABLE `transaksi_coa` (
  `transaksi` varchar(100) NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `posisi` varchar(1) NOT NULL,
  `kelompok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi_coa`
--

INSERT INTO `transaksi_coa` (`transaksi`, `kode_akun`, `posisi`, `kelompok`) VALUES
('pemodalan', 111, 'd', 1),
('pemodalan', 311, 'c', 1),
('pemodalan', 312, 'd', 2),
('pemodalan', 111, 'c', 2),
('pembebanan', 51, 'd', 1),
('pembebanan', 111, 'c', 1),
('penjualan', 111, 'd', 1),
('penjualan', 411, 'c', 1),
('penjualan', 511, 'd', 3),
('penjualan', 115, 'c', 3),
('pembelian', 115, 'd', 1),
('pembelian', 111, 'c', 1),
('pembayaran', 616, 'd', 6),
('pembayaran', 111, 'c', 6),
('pemodalan', 111, 'd', 1),
('pemodalan', 311, 'c', 1),
('pemodalan', 312, 'd', 2),
('pemodalan', 111, 'c', 2),
('pembebanan', 51, 'd', 1),
('pembebanan', 111, 'c', 1),
('penjualan', 111, 'd', 1),
('penjualan', 411, 'c', 1),
('penjualan', 511, 'd', 3),
('penjualan', 115, 'c', 3),
('pembelian', 115, 'd', 1),
('pembelian', 111, 'c', 1),
('pembayaran', 616, 'd', 6),
('pembayaran', 111, 'c', 6);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_transaksi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_transaksi` (
`id_transaksi` int(11)
,`waktu` datetime
,`sumber` varchar(10)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_transaksi`
--
DROP TABLE IF EXISTS `view_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi`  AS SELECT `pembebanan`.`id_transaksi` AS `id_transaksi`, `pembebanan`.`waktu` AS `waktu`, 'pembebanan' AS `sumber` FROM `pembebanan` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_login`
--
ALTER TABLE `akun_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indeks untuk tabel `bb`
--
ALTER TABLE `bb`
  ADD PRIMARY KEY (`id_bb`);

--
-- Indeks untuk tabel `bop`
--
ALTER TABLE `bop`
  ADD PRIMARY KEY (`id_bop`);

--
-- Indeks untuk tabel `btkl`
--
ALTER TABLE `btkl`
  ADD PRIMARY KEY (`id_btkl`);

--
-- Indeks untuk tabel `detail_produksi_bb`
--
ALTER TABLE `detail_produksi_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_produksi_bop`
--
ALTER TABLE `detail_produksi_bop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_produksi_btk`
--
ALTER TABLE `detail_produksi_btk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `overhead`
--
ALTER TABLE `overhead`
  ADD PRIMARY KEY (`id_overhead`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `targetcosting`
--
ALTER TABLE `targetcosting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `akun_login`
--
ALTER TABLE `akun_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahanbaku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bb`
--
ALTER TABLE `bb`
  MODIFY `id_bb` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `bop`
--
ALTER TABLE `bop`
  MODIFY `id_bop` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `btkl`
--
ALTER TABLE `btkl`
  MODIFY `id_btkl` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `detail_produksi_bb`
--
ALTER TABLE `detail_produksi_bb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `detail_produksi_bop`
--
ALTER TABLE `detail_produksi_bop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `detail_produksi_btk`
--
ALTER TABLE `detail_produksi_btk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `overhead`
--
ALTER TABLE `overhead`
  MODIFY `id_overhead` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `targetcosting`
--
ALTER TABLE `targetcosting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
