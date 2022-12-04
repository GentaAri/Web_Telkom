-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Sep 2020 pada 05.15
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14474823_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_arsip_konseling`
--

CREATE TABLE `tb_arsip_konseling` (
  `id` int(11) NOT NULL,
  `konseling` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bpjs_kesehatan`
--

CREATE TABLE `tb_bpjs_kesehatan` (
  `id` int(11) NOT NULL,
  `bpjs_kesehatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bpjs_ketenagakerjaan`
--

CREATE TABLE `tb_bpjs_ketenagakerjaan` (
  `id` int(11) NOT NULL,
  `bpjs_ketenagakerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku_nikah`
--

CREATE TABLE `tb_buku_nikah` (
  `id` int(11) NOT NULL,
  `buku_nikah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku_rekening`
--

CREATE TABLE `tb_buku_rekening` (
  `id` int(11) NOT NULL,
  `buku_rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dropdown`
--

CREATE TABLE `tb_dropdown` (
  `id` int(10) NOT NULL,
  `id_drop` varchar(10) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `position_title` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL,
  `sub_unit` varchar(100) NOT NULL,
  `sub_group` varchar(100) NOT NULL,
  `group_fungsi` varchar(25) NOT NULL,
  `cost_center` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dropdown`
--

INSERT INTO `tb_dropdown` (`id`, `id_drop`, `position_name`, `position_title`, `level`, `sub_unit`, `sub_group`, `group_fungsi`, `cost_center`) VALUES
(1, 'T1_001', 'Drafter', 'Drafter', 'Drafter', 'Konstruksi Lampung', 'SDI', 'SDI', 'TA03R06'),
(2, 'T1_002', 'Helpdesk BGES', 'Helpdesk BGES', 'Helpdesk', 'Operation Lampung', 'BGES', 'I-OAN', 'TA03R06'),
(3, 'T1_003', 'Helpdesk IOAN', 'Helpdesk IOAN', 'Helpdesk', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(4, 'T1_004', 'Helpdesk Provisioning & Migrasi', 'Helpdesk Provisioning & Migrasi', 'Helpdesk', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(5, 'T1_005', 'Helpdesk Provisioning BGES', 'Helpdesk Provisioning BGES', 'Helpdesk', 'Operation Lampung', 'BGES', 'PROVISIONING', 'TA03R06'),
(6, 'T1_006', 'Helpdesk SPBU', 'Helpdesk SPBU', 'Helpdesk', 'SPBU Sumbagsel', 'INTEGRASI SPBU', 'SPBU', 'TA11Z04'),
(7, 'T1_007', 'Helpdesk TSEL', 'Helpdesk TSEL', 'Helpdesk', 'Operation Lampung', 'TSEL', 'I-OAN', 'TA03R06'),
(8, 'T1_008', 'Logic On Desk', 'Logic On Desk', 'Helpdesk', 'Operation Lampung', 'LOGIC ON DESK', 'I-OAN', 'TA03R06'),
(9, 'T1_009', 'Mgr Konstruksi Lampung', 'Mgr Konstruksi', 'Manager', 'Konstruksi Lampung', 'CONSTRUCTION', 'CONSTRUCTION', 'TA03R06'),
(10, 'T1_010', 'Mgr Operation Lampung', 'Mgr Operation', 'Manager', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(11, 'T1_011', 'Pengawas Pihak Ke-3', 'Pengawas Pihak Ke-3', 'Team Leader', 'Operation Lampung', 'PENGAWASAN', 'I-OAN', 'TA03R06'),
(12, 'T1_012', 'Project Supervisor Lv SM', 'Project Supervisor', 'Site Manager', 'Konstruksi Lampung', 'CONSTRUCTION', 'CONSTRUCTION', 'TA03R06'),
(13, 'T1_013', 'Project Supervisor Lv Teknisi', 'Project Supervisor', 'Teknisi', 'Konstruksi Lampung', 'CONSTRUCTION', 'CONSTRUCTION', 'TA03R06'),
(14, 'T1_014', 'Project Supervisor Lv TL', 'Project Supervisor', 'Team Leader', 'Konstruksi Lampung', 'CONSTRUCTION', 'CONSTRUCTION', 'TA03R06'),
(15, 'T1_015', 'Site Manager BGES', 'Site Manager BGES', 'Site Manager', 'Operation Lampung', 'BGES', 'I-OAN', 'TA03R06'),
(16, 'T1_016', 'Site Manager Corrective Maintenance', 'Site Manager Corrective Maintenance', 'Site Manager', 'Konstruksi Lampung', 'QE & GAMAS', 'QE & GAMAS', 'TA03R06'),
(17, 'T1_017', 'Site Manager Fiber Academy & HSE', 'Site Manager Fiber Academy & HSE', 'Site Manager', 'Shared Service Sumbagsel', 'FIBER ACADEMY', 'HCM & STRATEGY', 'TA11Z04'),
(18, 'T1_018', 'Site Manager Provisioning & Migrasi', 'Site Manager Provisioning & Migrasi', 'Site Manager', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(19, 'T1_019', 'Site Manager Rayon Lampung', 'Site Manager Rayon', 'Site Manager', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(20, 'T1_020', 'Site Manager SPBU', 'Site Manager SPBU', 'Site Manager', 'SPBU Sumbagsel', 'INTEGRASI SPBU', 'SPBU', 'TA11Z04'),
(21, 'T1_021', 'Staff Commerce', 'Staff Commerce', 'Staff', 'Shared Service Sumbagsel', 'COMMERCE', 'SNC', 'TA11Z04'),
(22, 'T1_022', 'Staff Corrective Maintenance & QE', 'Staff Corrective Maintenance & QE', 'Staff', 'Konstruksi Lampung', 'QE & GAMAS', 'QE & GAMAS', 'TA03R06'),
(23, 'T1_023', 'Staff Finance & Bilco', 'Staff Finance & Bilco', 'Staff', 'Shared Service Sumbagsel', 'FINANCE', 'FINANCE', 'TA11Z04'),
(24, 'T1_024', 'Staff HSE', 'Staff HSE', 'Staff', 'Shared Service Sumbagsel', 'HSE', 'HCM & STRATEGY', 'TA11Z04'),
(25, 'T1_025', 'Staff Inventory & Asset Management Area', 'Staff Inventory & Asset Management Area', 'Staff', 'Shared Service Sumbagsel', 'WAREHOUSE', 'SNC', 'TA11Z04'),
(26, 'T1_026', 'Staff IOAN', 'Staff IOAN', 'Staff', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(27, 'T1_027', 'Staff Procurement & Partnership', 'Staff Procurement & Partnership', 'Staff', 'Shared Service Sumbagsel', 'PROCUREMENT', 'SNC', 'TA11Z04'),
(28, 'T1_028', 'Staff Provisioning & Migrasi', 'Staff Provisioning & Migrasi', 'Staff', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(29, 'T1_029', 'Staff Provisioning BGES', 'Staff Provisioning BGES', 'Staff', 'Operation Lampung', 'BGES', 'PROVISIONING', 'TA03R06'),
(30, 'T1_030', 'Staff Warehouse SO', 'Staff Warehouse SO', 'Staff', 'Shared Service Sumbagsel', 'MS NTE', 'SNC', 'TA11Z04'),
(31, 'T1_031', 'Surveyor', 'Surveyor', 'Surveyor', 'Konstruksi Lampung', 'SDI', 'SDI', 'TA03R06'),
(32, 'T1_032', 'Team Leader BGES', 'Team Leader BGES', 'Team Leader', 'Operation Lampung', 'BGES', 'I-OAN', 'TA03R06'),
(33, 'T1_033', 'Team Leader Commerce', 'Team Leader Commerce', 'Team Leader', 'Shared Service Sumbagsel', 'COMMERCE', 'SNC', 'TA11Z04'),
(34, 'T1_034', 'Team Leader Corrective Maintenance & QE', 'Team Leader Corrective Maintenance & QE', 'Team Leader', 'Konstruksi Lampung', 'QE & GAMAS', 'QE & GAMAS', 'TA03R06'),
(35, 'T1_035', 'Team Leader Drafter', 'Team Leader Drafter', 'Team Leader', 'Konstruksi Lampung', 'SDI', 'SDI', 'TA03R06'),
(36, 'T1_036', 'Team Leader Fiber Academy & HSE', 'Team Leader Fiber Academy & HSE', 'Team Leader', 'Shared Service Sumbagsel', 'FIBER ACADEMY', 'HCM & STRATEGY', 'TA11Z04'),
(37, 'T1_037', 'Team Leader Helpdesk', 'Team Leader Helpdesk', 'Team Leader', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(38, 'T1_038', 'Team Leader Human Capital Service', 'Team Leader Human Capital Service', 'Team Leader', 'Shared Service Sumbagsel', 'HCM', 'HCM & STRATEGY', 'TA11Z04'),
(39, 'T1_039', 'Team Leader Inventory & Asset Management', 'Team Leader Inventory & Asset Management', 'Team Leader', 'Shared Service Sumbagsel', 'WAREHOUSE', 'SNC', 'TA11Z04'),
(40, 'T1_040', 'Team Leader Provisioning & Migrasi', 'Team Leader Provisioning & Migrasi', 'Team Leader', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(41, 'T1_041', 'Team Leader Provisioning BGES', 'Team Leader Provisioning BGES', 'Team Leader', 'Operation Lampung', 'BGES', 'PROVISIONING', 'TA03R06'),
(42, 'T1_042', 'Team Leader Sektor IOAN Kalianda', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(43, 'T1_043', 'Team Leader Sektor IOAN Kedaton-1', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(44, 'T1_044', 'Team Leader Sektor IOAN Kedaton-2', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(45, 'T1_045', 'Team Leader Sektor IOAN Kotabumi', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(46, 'T1_046', 'Team Leader Sektor IOAN Lingkarpura', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(47, 'T1_047', 'Team Leader Sektor IOAN Liwa', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(48, 'T1_048', 'Team Leader Sektor IOAN Metro', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(49, 'T1_049', 'Team Leader Sektor IOAN Panjang', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(50, 'T1_050', 'Team Leader Sektor IOAN Pringsewu', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(51, 'T1_051', 'Team Leader Sektor IOAN Tanjung Karang 1', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(52, 'T1_052', 'Team Leader Sektor IOAN Tanjung Karang 2', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(53, 'T1_053', 'Team Leader Sektor IOAN Tanjung Karang 3', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(54, 'T1_054', 'Team Leader Sektor IOAN Unit Dua', 'Team Leader Sektor IOAN', 'Team Leader', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(55, 'T1_055', 'Team Leader SPBU', 'Team Leader SPBU', 'Team Leader', 'SPBU Sumbagsel', 'INTEGRASI SPBU', 'SPBU', 'TA11Z04'),
(56, 'T1_056', 'Team Leader TSEL & OLO Services', 'Team Leader TSEL & OLO Services', 'Team Leader', 'Operation Lampung', 'TSEL', 'I-OAN', 'TA03R06'),
(57, 'T1_057', 'Teknisi BGES Services', 'Teknisi BGES Services', 'Teknisi', 'Operation Lampung', 'BGES', 'I-OAN', 'TA03R06'),
(58, 'T1_058', 'Teknisi Corrective Maintenance & QE', 'Teknisi Corrective Maintenance & QE', 'Teknisi', 'Konstruksi Lampung', 'QE & GAMAS', 'QE & GAMAS', 'TA03R06'),
(59, 'T1_059', 'Teknisi FTM', 'Teknisi FTM', 'Teknisi', 'Operation Lampung', 'FTM', 'I-OAN', 'TA03R06'),
(60, 'T1_060', 'Teknisi MO SPBU', 'Teknisi MO SPBU', 'Teknisi', 'SPBU Sumbagsel', 'MO SPBU', 'SPBU', 'TA03B01'),
(61, 'T1_061', 'Teknisi NE', 'Teknisi NE', 'Teknisi', 'Operation Lampung', 'NE AKSES', 'I-OAN', 'TA03R06'),
(62, 'T1_062', 'Teknisi OLO', 'Teknisi OLO', 'Teknisi', 'Operation Lampung', 'OLO', 'I-OAN', 'TA03R06'),
(63, 'T1_063', 'Teknisi Provisioning & Migrasi', 'Teknisi Provisioning & Migrasi', 'Teknisi', 'Operation Lampung', 'PROVISIONING CONSUMER', 'PROVISIONING', 'TA03R06'),
(64, 'T1_064', 'Teknisi Provisioning BGES', 'Teknisi Provisioning BGES', 'Teknisi', 'Operation Lampung', 'BGES', 'PROVISIONING', 'TA03R06'),
(65, 'T1_065', 'Teknisi Sektor IOAN Kedaton-1', 'Teknisi Sektor IOAN', 'Teknisi', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(66, 'T1_066', 'Teknisi Sektor IOAN Kotabumi', 'Teknisi Sektor IOAN', 'Teknisi', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(67, 'T1_067', 'Teknisi Sektor IOAN Tanjung Karang 1', 'Teknisi Sektor IOAN', 'Teknisi', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(68, 'T1_068', 'Teknisi Sektor IOAN Tanjung Karang 2', 'Teknisi Sektor IOAN', 'Teknisi', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(69, 'T1_069', 'Teknisi Sektor IOAN Tanjung Karang 3', 'Teknisi Sektor IOAN', 'Teknisi', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(70, 'T1_070', 'Teknisi Sektor IOAN Unit Dua', 'Teknisi Sektor IOAN', 'Teknisi', 'Operation Lampung', 'ASSURANCE COMSUMER', 'I-OAN', 'TA03R06'),
(71, 'T1_071', 'Teknisi SPBU', 'Teknisi SPBU', 'Teknisi', 'SPBU Sumbagsel', 'INTEGRASI SPBU', 'SPBU', 'TA11Z04'),
(72, 'T1_072', 'Teknisi TDM', 'Teknisi TDM', 'Teknisi', 'Operation Lampung', 'TDM', 'TDM', 'TA03R06'),
(73, 'T1_073', 'Teknisi TSEL', 'Teknisi TSEL', 'Teknisi', 'Operation Lampung', 'TSEL', 'I-OAN', 'TA03R06'),
(74, 'T1_074', 'Teknisi Validasi Data On Site', 'Teknisi Validasi Data On Site', 'Teknisi', 'Operation Lampung', 'VALIDASI DATA', 'I-OAN', 'TA03R06'),
(75, 'T1_075', 'Teknisi WIFI', 'Teknisi WIFI', 'Teknisi', 'Operation Lampung', 'WIFI', 'I-OAN', 'TA03R06'),
(76, 'T1_076', 'Teknisi Wilsus', 'Teknisi Wilsus', 'Teknisi', 'Operation Lampung', 'WILSUS', 'I-OAN', 'TA03R06'),
(77, '', '', '', '', '', '', '', ''),
(78, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dropdown2`
--

CREATE TABLE `tb_dropdown2` (
  `id` int(11) NOT NULL,
  `witel` varchar(25) NOT NULL,
  `teritory` varchar(25) NOT NULL,
  `regional` varchar(25) NOT NULL,
  `bizpart_id` varchar(25) NOT NULL,
  `direktorat` varchar(50) NOT NULL,
  `unit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dropdown2`
--

INSERT INTO `tb_dropdown2` (`id`, `witel`, `teritory`, `regional`, `bizpart_id`, `direktorat`, `unit`) VALUES
(1, 'WITEL LAMPUNG', 'TA SUMBAGSEL', 'SUMATERA', 'Fiber Zone', 'Operation & Construction West', 'TA Sumbagsel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dropdown3`
--

CREATE TABLE `tb_dropdown3` (
  `id` int(11) NOT NULL,
  `nama_konselor` varchar(20) NOT NULL,
  `nik_konselor` varchar(10) NOT NULL,
  `jabatan_konselor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dropdown3`
--

INSERT INTO `tb_dropdown3` (`id`, `nama_konselor`, `nik_konselor`, `jabatan_konselor`) VALUES
(1, 'AAN WAHYUDI', '876776', 'Mgr Operation Lampung'),
(2, 'SUPENO', '650797', 'Mgr Konstruksi Lampung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_exit_clearance`
--

CREATE TABLE `tb_exit_clearance` (
  `id` int(11) NOT NULL,
  `exit_clearance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_foto`
--

INSERT INTO `tb_foto` (`id`, `foto`) VALUES
(19, '876776_AAN_WAHYUDI_AAN.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ijazah`
--

CREATE TABLE `tb_ijazah` (
  `id` int(11) NOT NULL,
  `ijazah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_join3`
--

CREATE TABLE `tb_join3` (
  `id_join3` varchar(10) NOT NULL,
  `loker` varchar(25) NOT NULL,
  `sto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_join3`
--

INSERT INTO `tb_join3` (`id_join3`, `loker`, `sto`) VALUES
('T3_001', 'BDA', 'Bandar Jaya'),
('T3_002', 'BBU', 'Blambangan Umpu'),
('T3_003', 'BKM', 'Bukit Kemuning'),
('T3_004', 'GDT', 'Gedong Tataan'),
('T3_005', 'PJN', 'Panjang'),
('T3_006', 'KLA', 'Kalianda'),
('T3_007', 'KDT', 'Kedaton'),
('T3_008', 'KOT', 'Kota Agung'),
('T3_009', 'KBI', 'Kotabumi'),
('T3_010', 'LAM', 'Labuhan Maringgai'),
('T3_011', 'LKP', 'Langkapura'),
('T3_012', 'LIW', 'Liwa'),
('T3_013', 'MET', 'Metro'),
('T3_014', 'PRW', 'Pringsewu'),
('T3_015', 'TGP', 'Talang Padang'),
('T3_016', 'TJK', 'Tanjung Karang'),
('T3_017', 'TKB', 'Teluk Betung'),
('T3_018', 'UNT', 'Unit Dua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` varchar(12) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nik`, `nama`, `position_name`, `level`, `perusahaan`) VALUES
('KAR001', '16750138', 'IRWAN ROSADI', 'Teknisi Wilsus', 'Teknisi', 'BANGTELINDO'),
('KAR006', '845879', 'DEDE ABDILLAH', 'Site Manager Fiber Academy & HSE', 'Site Manager', 'TELKOM AKSES'),
('KAR008', '124', 'wew', 'Helpdesk SPBU', 'Helpdesk', 'TELKOM AKSES'),
('KAR010', '1', '1', 'Drafter', 'Drafter', 'TELKOM AKSES'),
('KAR011', '12122', 'bagus', 'Helpdesk Provisioning BGES', 'Helpdesk', 'TELKOM AKSES'),
('KAR012', '12122', 'bagus', 'Helpdesk Provisioning BGES', 'Helpdesk', 'TELKOM AKSES'),
('KAR013', '12122', 'bagus', 'Helpdesk Provisioning BGES', 'Helpdesk', 'TELKOM AKSES'),
('KAR014', '1', '1', 'Helpdesk BGES', 'Helpdesk', 'TELKOM AKSES'),
('KAR015', '12333', 'bagus', 'Helpdesk IOAN', 'Helpdesk', 'TELKOM AKSES'),
('KAR016', '16760001', 'KUSPENDI', 'Teknisi Wilsus', 'Teknisi', 'BANGTELINDO'),
('KAR017', '15895500', 'MULYADI', 'Teknisi Wilsus', 'Teknisi', 'BANGTELINDO'),
('KAR018', '18890113', 'ANDIKA SAPUTRA', 'Team Leader Fiber Academy & HSE', 'Team Leader', 'TELKOM AKSES'),
('KAR019', '916108', 'WILHAN SANJAYA', 'Team Leader Provisioning BGES', 'Team Leader', 'TELKOM AKSES');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan_mitra_operasi`
--

CREATE TABLE `tb_karyawan_mitra_operasi` (
  `id` int(20) NOT NULL,
  `labor` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `no_telepon_yang_dihubungi` varchar(12) NOT NULL,
  `nama_keluarga` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `position_title` varchar(60) NOT NULL,
  `level` varchar(10) NOT NULL,
  `sto` varchar(17) NOT NULL,
  `sektor` varchar(17) NOT NULL,
  `leader` varchar(19) NOT NULL,
  `id_kar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan_mitra_operasi`
--

INSERT INTO `tb_karyawan_mitra_operasi` (`id`, `labor`, `nik`, `nama`, `no_ktp`, `no_telepon`, `no_telepon_yang_dihubungi`, `nama_keluarga`, `nama_perusahaan`, `position_title`, `level`, `sto`, `sektor`, `leader`, `id_kar`) VALUES
(7, '16750138', '16750138', 'IRWAN ROSADI', '1806010306750003', '085107003010', '082179121975', 'Siti Masitoh', 'BANGTELINDO', 'Teknisi Wilsus', 'Teknisi', 'KOT', 'Kota Agung', 'OKI DEDI SEPTIADI', 'KAR001'),
(18, 'KUSP18031976', '16760001', 'KUSPENDI', '1809011803760005', '085269466660', '085269471342', 'Emi Sutriani', 'BANGTELINDO', 'Teknisi Wilsus', 'Teknisi', 'TGP', 'Talang Padang', 'OKI DEDI SEPTIADI', 'KAR016'),
(19, '15895500', '15895500', 'MULYADI', '1807160905830004', '085382287017', '085273364989', 'Komariyah', 'BANGTELINDO', 'Teknisi Wilsus', 'Teknisi', 'LAM', 'Labuhan Maringgai', 'JONI SANTOSO', 'KAR017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan_telkom_akses`
--

CREATE TABLE `tb_karyawan_telkom_akses` (
  `id` int(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `kota_lahir` varchar(100) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `jalan` varchar(250) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `suku` varchar(11) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `tanggal_ktp` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `no_npwp` varchar(20) NOT NULL,
  `no_gsm` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `no_bpjs_kesehatan` varchar(30) NOT NULL,
  `no_bpjs_ketenagakerjaan` varchar(30) NOT NULL,
  `kode_faskes` varchar(100) NOT NULL,
  `kode_faskes_gigi` varchar(100) NOT NULL,
  `status_pernikahan` varchar(7) NOT NULL,
  `tanggal_pernikahan` varchar(20) NOT NULL,
  `jumlah_anak` varchar(5) NOT NULL,
  `susunan_keluarga` varchar(2) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `loker` varchar(3) NOT NULL,
  `sto` varchar(14) NOT NULL,
  `position_name` varchar(60) NOT NULL,
  `position_title` varchar(60) NOT NULL,
  `level` varchar(20) NOT NULL,
  `sub_unit` varchar(24) NOT NULL,
  `status_kerja` varchar(13) NOT NULL,
  `tanggal_mulai_bekerja` varchar(20) NOT NULL,
  `tanggal_awal_kontrak` varchar(20) NOT NULL,
  `tanggal_akhir_kontrak` varchar(20) NOT NULL,
  `tahun_kontrak` varchar(4) NOT NULL,
  `level_pendidikan` varchar(4) NOT NULL,
  `tanggal_level_pendidikan` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `penyelenggara_pendidikan` varchar(30) NOT NULL,
  `no_rekening` varchar(16) NOT NULL,
  `bank` varchar(7) NOT NULL,
  `nama_di_rekening` varchar(20) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `jenis_baju` varchar(7) NOT NULL,
  `ukuran_baju` varchar(4) NOT NULL,
  `ukuran_celana` varchar(3) NOT NULL,
  `ukuran_sepatu` varchar(3) NOT NULL,
  `mitra_kerja` varchar(30) NOT NULL,
  `sub_group` varchar(30) NOT NULL,
  `cost_center` varchar(30) NOT NULL,
  `group_fungsi` varchar(30) NOT NULL,
  `id_kar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan_telkom_akses`
--

INSERT INTO `tb_karyawan_telkom_akses` (`id`, `nik`, `nama`, `tanggal_lahir`, `kota_lahir`, `agama`, `jenis_kelamin`, `jalan`, `kota`, `suku`, `no_ktp`, `tanggal_ktp`, `no_kk`, `no_npwp`, `no_gsm`, `email`, `nama_ibu_kandung`, `golongan_darah`, `no_bpjs_kesehatan`, `no_bpjs_ketenagakerjaan`, `kode_faskes`, `kode_faskes_gigi`, `status_pernikahan`, `tanggal_pernikahan`, `jumlah_anak`, `susunan_keluarga`, `lokasi`, `loker`, `sto`, `position_name`, `position_title`, `level`, `sub_unit`, `status_kerja`, `tanggal_mulai_bekerja`, `tanggal_awal_kontrak`, `tanggal_akhir_kontrak`, `tahun_kontrak`, `level_pendidikan`, `tanggal_level_pendidikan`, `jurusan`, `penyelenggara_pendidikan`, `no_rekening`, `bank`, `nama_di_rekening`, `nama_ayah`, `jenis_baju`, `ukuran_baju`, `ukuran_celana`, `ukuran_sepatu`, `mitra_kerja`, `sub_group`, `cost_center`, `group_fungsi`, `id_kar`) VALUES
(16, '845879', 'DEDE ABDILLAH', '1982-12-15', 'Tanjung Karang', 'Islam', 'Laki - Laki', 'Jl. H. Wuruk Gg. Bukit I/44 RT/RW 000/000 Kebon Jeruk, Tanjung Karang Timur', 'Bandar Lampung', 'Sunda', '1871051512840004', '08/07/2020', '1871131907080002', '709083240322000', '081367658466', 'dede.abdillah@telkomakses.co.id', 'Supiyati', 'AB', '0001625804605', '14000822529', '0106B038-TELKOMEDIKA HEALTH CENTER', '-', 'Menikah', '2020-02-07', '2', 'K2', 'Inner', 'KDT', 'Kedaton', 'Site Manager Fiber Academy & HSE', 'Site Manager Fiber Academy & HSE', 'Site Manager', 'Shared Service Sumbagsel', 'Pegawai Tetap', '0000-00-00', '0000-00-00', '0000-00-00', '-', 'SMK', '2020-08-07', 'Teknik Gambar Bangunan', 'SMK N 2 Bandar Lampung', '1234', 'MANDIRI', 'DEDE ABDILLAH', 'Tn. Amir Hamzah', 'Pendek', 'XL', '32', '40', 'PT. Telkom Akses', 'Fiber Academy', 'TA11Z04', 'HCM & Strategy', 'KAR006'),
(23, '18890113', 'ANDIKA SAPUTRA', '1989-03-04', 'Banarjoyo', 'Islam', 'Laki - Laki', 'Dusun Srimulyo RT/RW 005/004 Kel/Desa Pemanggilan Kec. Natar, Lampung Selatan', 'Lampung Selatan', 'Jawa', '1807060403890003', '03/25/2018', '11801042105180019', '365069962321000', '082178604535', 'andika.saputra@telkomakses.co.id', 'Suprapti', 'B', '0001625804458', '18065888457', '-', '-', 'Menikah', '2020-08-07', '2', 'K2', 'Inner', 'KDT', 'Kedaton', 'Team Leader Fiber Academy & HSE', 'Team Leader Fiber Academy & HSE', 'Team Leader', 'Shared Service Sumbagsel', 'Kemitraan', '2020-08-07', '2020-08-07', '2020-08-07', '3', 'D3', '2010-08-21', 'Teknik Otomotif', 'Politeknik Gajah Sakti Metro', '023001094795503', 'BRI', 'ANDIKA SAPUTRA', 'Tn. Slamet Riyadi', 'Pendek', 'L', '31', '40', 'PT. Inconis Nusa Jaya', 'FIBER ACADEMY', 'TA11Z04', 'HCM & STRATEGY', 'KAR018'),
(24, '916108', 'WILHAN SANJAYA', '2020-08-07', 'Tanjung Karang', 'Islam', 'Laki - Laki', 'Dusun Srimulyo RT/RW 005/004 Kel/Desa Pemanggilan Kec. Natar, Lampung Selatan', 'Lampung Selatan', 'Palembang', '1234567890123456', '08/07/2020', '1234567890123456', '709083240322000', '082178604535', 'wilhan.sanjaya@telkomakses.co.id', 'Ngadini', 'O', '0001606743382', '18013385572', '-', '-', 'Menikah', '2020-08-07', '0', 'K0', 'Inner', 'KDT', 'Kedaton', 'Team Leader Provisioning BGES', 'Team Leader Provisioning BGES', 'Team Leader', 'Operation Lampung', 'Pegawai Tetap', '2020-08-07', '-', '-', '-', 'D3', '2020-08-07', 'Manajemen Informatika', 'Universitas Lampung', '1140009711311', 'MANDIRI', 'WILHAN SANJAYA', 'Tn. M. Susiloto', 'Pendek', 'L', '44', '43', 'PT. Telkom Akses', 'BGES', 'TA03R06', 'PROVISIONING', 'KAR019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id` int(11) NOT NULL,
  `kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konseling`
--

CREATE TABLE `tb_konseling` (
  `id` int(11) NOT NULL,
  `nama_konselor` varchar(30) NOT NULL,
  `nik_konselor` varchar(10) NOT NULL,
  `jabatan_konselor` varchar(60) NOT NULL,
  `nama_konseling` varchar(50) NOT NULL,
  `nik_konseling` varchar(20) NOT NULL,
  `jabatan_konseling` varchar(50) NOT NULL,
  `lokasi_kerja_konseling` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `permasalahan` text NOT NULL,
  `tanggapan_terhadap_permasalahan` text NOT NULL,
  `usulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konseling`
--

INSERT INTO `tb_konseling` (`id`, `nama_konselor`, `nik_konselor`, `jabatan_konselor`, `nama_konseling`, `nik_konseling`, `jabatan_konseling`, `lokasi_kerja_konseling`, `tanggal`, `permasalahan`, `tanggapan_terhadap_permasalahan`, `usulan`) VALUES
(13, 'SUPENO', '650797', 'Mgr Konstruksi Lampung', 'ANDIKA SAPUTRA', '18890113', 'Team Leader Fiber Academy & HSE', 'Kedaton', '2020-08-06', 'Indikator sakit >6 kali', 'Ybs memang benar adanya seringkali sakit', 'Tetap dilanjutkan kontrak sesuai rekomendasi SM dan Mgr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontrak`
--

CREATE TABLE `tb_kontrak` (
  `id` int(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `position_name` varchar(40) NOT NULL,
  `position_title` varchar(40) NOT NULL,
  `witel` varchar(13) NOT NULL,
  `loker` varchar(3) NOT NULL,
  `sto` varchar(14) NOT NULL,
  `level` varchar(12) NOT NULL,
  `sub_unit` varchar(40) NOT NULL,
  `status_kerja` varchar(13) NOT NULL,
  `tanggal_mulai_kerja` date NOT NULL,
  `tanggal_awal_kontrak` date NOT NULL,
  `tanggal_akhir_kontrak` date NOT NULL,
  `nomor_kontrak` text NOT NULL,
  `kontrak_ke` varchar(11) NOT NULL,
  `mitra_kerja` varchar(30) NOT NULL,
  `upload_pm` varchar(100) NOT NULL,
  `upload_k1_ta` varchar(100) NOT NULL,
  `upload_k2_ta` varchar(100) NOT NULL,
  `upload_k3_ta` varchar(100) NOT NULL,
  `upload_k1_ins` varchar(100) NOT NULL,
  `upload_k2_ins` varchar(100) NOT NULL,
  `upload_k3_ins` varchar(100) NOT NULL,
  `upload_a1_ins` varchar(100) NOT NULL,
  `upload_a2_ins` varchar(100) NOT NULL,
  `upload_a3_ins` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kontrak`
--

INSERT INTO `tb_kontrak` (`id`, `nik`, `nama`, `position_name`, `position_title`, `witel`, `loker`, `sto`, `level`, `sub_unit`, `status_kerja`, `tanggal_mulai_kerja`, `tanggal_awal_kontrak`, `tanggal_akhir_kontrak`, `nomor_kontrak`, `kontrak_ke`, `mitra_kerja`, `upload_pm`, `upload_k1_ta`, `upload_k2_ta`, `upload_k3_ta`, `upload_k1_ins`, `upload_k2_ins`, `upload_k3_ins`, `upload_a1_ins`, `upload_a2_ins`, `upload_a3_ins`) VALUES
(21, '18890113', 'ANDIKA SAPUTRA', 'Team Leader Fiber Academy & HSE', 'Team Leader Fiber Academy & HSE', 'WITEL LAMPUNG', 'KDT', 'Kedaton', 'Team Leader', 'Shared Service Sumbagsel', 'Kemitraan', '2020-04-01', '2020-07-09', '2020-10-01', '2020', '3', 'PT. Inconis Nusa Jaya', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ktp`
--

CREATE TABLE `tb_ktp` (
  `id` int(11) NOT NULL,
  `ktp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapping`
--

CREATE TABLE `tb_mapping` (
  `id` int(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `object_id` varchar(30) NOT NULL,
  `position_name` varchar(60) NOT NULL,
  `position_title` varchar(60) NOT NULL,
  `witel` varchar(13) NOT NULL,
  `teritory` varchar(12) NOT NULL,
  `regional` varchar(8) NOT NULL,
  `lokasi` varchar(5) NOT NULL,
  `loker` varchar(3) NOT NULL,
  `sto` varchar(14) NOT NULL,
  `level` varchar(12) NOT NULL,
  `bizpart_id` varchar(20) NOT NULL,
  `direktorat` varchar(29) NOT NULL,
  `unit` varchar(12) NOT NULL,
  `sub_unit` varchar(24) NOT NULL,
  `sub_group` varchar(21) NOT NULL,
  `group_fungsi` varchar(14) NOT NULL,
  `cost_center` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapping`
--

INSERT INTO `tb_mapping` (`id`, `nik`, `nama`, `object_id`, `position_name`, `position_title`, `witel`, `teritory`, `regional`, `lokasi`, `loker`, `sto`, `level`, `bizpart_id`, `direktorat`, `unit`, `sub_unit`, `sub_group`, `group_fungsi`, `cost_center`) VALUES
(15, '845879', 'DEDE ABDILLAH', '39040401515000101', 'Site Manager Fiber Academy & HSE', 'Site Manager Fiber Academy & HSE', 'WITEL LAMPUNG', 'TA SUMBAGSEL', 'SUMATERA', 'Inner', 'KDT', 'Kedaton', 'Site Manager', 'Fiber Zone', 'Operation & Construction West', 'TA Sumbagsel', 'Shared Service Sumbagsel', 'Fiber Academy', 'HCM & Strategy', 'TA11Z04'),
(17, '18890113', 'ANDIKA SAPUTRA', '-', 'Team Leader Fiber Academy & HSE', 'Team Leader Fiber Academy & HSE', 'WITEL LAMPUNG', 'TA SUMBAGSEL', 'SUMATERA', 'Inner', 'KDT', 'Kedaton', 'Team Leader', 'Fiber Zone', 'Operation & Construction West', 'TA Sumbagsel', 'Shared Service Sumbagsel', 'FIBER ACADEMY', 'HCM & STRATEGY', 'TA11Z04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_npwp`
--

CREATE TABLE `tb_npwp` (
  `id` int(11) NOT NULL,
  `npwp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_posko`
--

CREATE TABLE `tb_posko` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `posisi` varchar(60) NOT NULL,
  `level` varchar(30) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `witel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_posko`
--

INSERT INTO `tb_posko` (`id`, `nik`, `nama`, `posisi`, `level`, `perusahaan`, `tanggal`, `kategori`, `witel`) VALUES
(1, '16750138', 'IRWAN ROSADI', 'Teknisi Wilsus', 'Teknisi', 'BANGTELINDO', '2020-08-06', 'Assurance Consumer', 'WITEL LAMPUNG'),
(4, '16760001', 'KUSPENDI', 'Teknisi Wilsus', 'Teknisi', 'BANGTELINDO', '2020-08-06', 'Assurance Consumer', 'WITEL LAMPUNG'),
(5, '15895500', 'MULYADI', 'Teknisi Wilsus', 'Teknisi', 'BANGTELINDO', '2020-08-06', 'Assurance Consumer', 'WITEL LAMPUNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prakerin`
--

CREATE TABLE `tb_prakerin` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL,
  `jumlah_prakerin` varchar(25) NOT NULL,
  `nama_prakerin` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `alokasi` varchar(50) NOT NULL,
  `penilaian_pic` varchar(50) NOT NULL,
  `ket_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prakerin`
--

INSERT INTO `tb_prakerin` (`id`, `nama_sekolah`, `level`, `jumlah_prakerin`, `nama_prakerin`, `jenis_kelamin`, `tanggal_mulai`, `tanggal_selesai`, `status`, `pic`, `alokasi`, `penilaian_pic`, `ket_sekolah`) VALUES
(3, 'ITERA', 'Perguruan Tinggi', '1', 'GENTA ARI ANGGORO', 'Laki - Laki', '2020-08-06', '2020-08-06', 'Sedang Berjalan', 'FEBY WIDYANINGRUM', 'HC Service', 'Baik Sekali', 'Rekomendasi'),
(8, 'ITERA', 'Perguruan Tinggi', '1', 'YOSE ALLOISIUS SARAGIH', 'Laki - Laki', '2020-08-06', '2020-08-06', 'Sedang Berjalan', 'FEBY WIDYANINGRUM', 'HC Service', 'Baik Sekali', 'Rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `position_title` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `sub_unit` varchar(30) NOT NULL,
  `witel` varchar(15) NOT NULL,
  `lokasi` varchar(7) NOT NULL,
  `loker` varchar(5) NOT NULL,
  `sto` varchar(20) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `cek_kehadiran` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_presensi`
--

INSERT INTO `tb_presensi` (`id`, `nik`, `nama`, `position_name`, `position_title`, `level`, `sub_unit`, `witel`, `lokasi`, `loker`, `sto`, `waktu`, `cek_kehadiran`, `keterangan`) VALUES
(6, '845879', 'DEDE ABDILLAH', 'Site Manager Fiber Academy & HSE', 'Site Manager Fiber Academy & HSE', 'Site Manager', 'Shared Service Sumbagsel', 'WITEL LAMPUNG', 'Inner', 'KDT', 'Kedaton', '2020-07-27', 'Sakit', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_print`
--

CREATE TABLE `tb_print` (
  `id` int(11) NOT NULL,
  `nama_mgr` varchar(30) NOT NULL,
  `nik_mgr` varchar(30) NOT NULL,
  `jabatan_mgr` varchar(60) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tanggal_mulai` varchar(30) NOT NULL,
  `tanggal_selesai` varchar(30) NOT NULL,
  `penugasan` text NOT NULL,
  `id_spbu` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_print2`
--

CREATE TABLE `tb_print2` (
  `id` int(11) NOT NULL,
  `nama_mgr` varchar(30) NOT NULL,
  `nik_mgr` varchar(30) NOT NULL,
  `jabatan_mgr` varchar(60) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tanggal_mulai` varchar(30) NOT NULL,
  `tanggal_selesai` varchar(30) NOT NULL,
  `penugasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skr`
--

CREATE TABLE `tb_skr` (
  `id` int(11) NOT NULL,
  `skr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sk_posisi`
--

CREATE TABLE `tb_sk_posisi` (
  `id` int(11) NOT NULL,
  `sk_posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sp`
--

CREATE TABLE `tb_sp` (
  `id` int(11) NOT NULL,
  `sp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spbj`
--

CREATE TABLE `tb_spbj` (
  `id` int(11) NOT NULL,
  `spbj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id` int(11) NOT NULL,
  `nama_mgr` varchar(30) NOT NULL,
  `nik_mgr` varchar(30) NOT NULL,
  `jabatan_mgr` varchar(60) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `tanggal_mulai` varchar(30) NOT NULL,
  `tanggal_selesai` varchar(30) NOT NULL,
  `penugasan` text NOT NULL,
  `id_spbu` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id`, `nama_mgr`, `nik_mgr`, `jabatan_mgr`, `nama`, `nik`, `jabatan`, `tanggal_mulai`, `tanggal_selesai`, `penugasan`, `id_spbu`, `alamat`, `kota`) VALUES
(13, 'WILHAN SANJAYA', '916108', 'Team Leader Provisioning BGES', 'ZAINURI', '12345678', 'Staff HSE', '2020-09-02', '2020-09-03', 'Ceklok', 'SPBU-1', 'Krui', 'Krui'),
(14, 'WILHAN SANJAYA', '916108', 'Team Leader Provisioning BGES', 'MUHAMMAD', '87654321', 'Staff HR', '2020-09-02', '2020-09-03', 'Ceklok', 'SPBU-1', 'Krui', 'Krui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_opr`
--

CREATE TABLE `tb_surat_opr` (
  `id` int(11) NOT NULL,
  `nama_mgr` varchar(30) NOT NULL,
  `nik_mgr` varchar(30) NOT NULL,
  `jabatan_mgr` varchar(60) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `tanggal_mulai` varchar(30) NOT NULL,
  `tanggal_selesai` varchar(30) NOT NULL,
  `penugasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_opr`
--

INSERT INTO `tb_surat_opr` (`id`, `nama_mgr`, `nik_mgr`, `jabatan_mgr`, `nama`, `nik`, `jabatan`, `tanggal_mulai`, `tanggal_selesai`, `penugasan`) VALUES
(6, 'AAN WAHYUDI', '876776', 'Mgr Operation Lampung', 'WILHAN SANJAYA', '916108', 'Team Leader Provisioning BGES', '2020-08-05', '2020-08-06', 'Uji Petik Pekerjaan PSB Indihome Tahap I Periode Juli 2020 TA Lampung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_sakit`
--

CREATE TABLE `tb_surat_sakit` (
  `id` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `position_title` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `sub_unit` varchar(30) NOT NULL,
  `witel` varchar(15) NOT NULL,
  `lokasi` varchar(7) NOT NULL,
  `loker` varchar(5) NOT NULL,
  `sto` varchar(20) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `keterangan_surat_sakit` text NOT NULL,
  `tanggal_sektor_surat_sakit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_sakit`
--

INSERT INTO `tb_surat_sakit` (`id`, `nik`, `nama`, `position_name`, `position_title`, `level`, `sub_unit`, `witel`, `lokasi`, `loker`, `sto`, `waktu`, `keterangan_surat_sakit`, `tanggal_sektor_surat_sakit`) VALUES
(3, '845879', 'DEDE ABDILLAH', 'Site Manager Fiber Academy & HSE', 'Site Manager Fiber Academy & HSE', 'Site Manager', 'Shared Service Sumbagsel', 'WITEL LAMPUNG', 'Inner', 'KDT', 'Kedaton', '2020-08-06', 'Belum Setor', '2020-08-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_teguran`
--

CREATE TABLE `tb_surat_teguran` (
  `id` int(11) NOT NULL,
  `nik_mgr` varchar(10) NOT NULL,
  `nama_mgr` varchar(15) NOT NULL,
  `posisi_mgr` varchar(60) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `nik_karyawan` varchar(30) NOT NULL,
  `posisi_karyawan` varchar(50) NOT NULL,
  `sub_unit` varchar(50) NOT NULL,
  `nama_pembuat` varchar(50) NOT NULL,
  `nik_pembuat` varchar(20) NOT NULL,
  `posisi_pembuat` varchar(50) NOT NULL,
  `permasalahan` varchar(100) NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_teguran`
--

INSERT INTO `tb_surat_teguran` (`id`, `nik_mgr`, `nama_mgr`, `posisi_mgr`, `nama_karyawan`, `nik_karyawan`, `posisi_karyawan`, `sub_unit`, `nama_pembuat`, `nik_pembuat`, `posisi_pembuat`, `permasalahan`, `tanggal`) VALUES
(3, '650797', 'SUPENO', 'Mgr Konstruksi Lampung', 'DEDE ABDILLAH', '845879', 'Site Manager Fiber Academy & HSE', 'Shared Service Sumbagsel', 'DEDE ABDILLAH', '845879', 'Site Manager Fiber Academy & HSE', 'Mangkir', '2020-08-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umk`
--

CREATE TABLE `tb_umk` (
  `id` int(11) NOT NULL,
  `umk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ump`
--

CREATE TABLE `tb_ump` (
  `id` int(11) NOT NULL,
  `ump` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
(5, 'member', 'member', 'Member'),
(6, 'admin', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_arsip_konseling`
--
ALTER TABLE `tb_arsip_konseling`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bpjs_kesehatan`
--
ALTER TABLE `tb_bpjs_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bpjs_ketenagakerjaan`
--
ALTER TABLE `tb_bpjs_ketenagakerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_buku_nikah`
--
ALTER TABLE `tb_buku_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_buku_rekening`
--
ALTER TABLE `tb_buku_rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dropdown`
--
ALTER TABLE `tb_dropdown`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dropdown2`
--
ALTER TABLE `tb_dropdown2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dropdown3`
--
ALTER TABLE `tb_dropdown3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_exit_clearance`
--
ALTER TABLE `tb_exit_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ijazah`
--
ALTER TABLE `tb_ijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_join3`
--
ALTER TABLE `tb_join3`
  ADD PRIMARY KEY (`id_join3`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan_mitra_operasi`
--
ALTER TABLE `tb_karyawan_mitra_operasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kar` (`id_kar`);

--
-- Indeks untuk tabel `tb_karyawan_telkom_akses`
--
ALTER TABLE `tb_karyawan_telkom_akses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kar` (`id_kar`);

--
-- Indeks untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_konseling`
--
ALTER TABLE `tb_konseling`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ktp`
--
ALTER TABLE `tb_ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mapping`
--
ALTER TABLE `tb_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_npwp`
--
ALTER TABLE `tb_npwp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_posko`
--
ALTER TABLE `tb_posko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_prakerin`
--
ALTER TABLE `tb_prakerin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_print`
--
ALTER TABLE `tb_print`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_print2`
--
ALTER TABLE `tb_print2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_skr`
--
ALTER TABLE `tb_skr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sk_posisi`
--
ALTER TABLE `tb_sk_posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sp`
--
ALTER TABLE `tb_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_spbj`
--
ALTER TABLE `tb_spbj`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surat_opr`
--
ALTER TABLE `tb_surat_opr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surat_sakit`
--
ALTER TABLE `tb_surat_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surat_teguran`
--
ALTER TABLE `tb_surat_teguran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_umk`
--
ALTER TABLE `tb_umk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ump`
--
ALTER TABLE `tb_ump`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_arsip_konseling`
--
ALTER TABLE `tb_arsip_konseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_bpjs_kesehatan`
--
ALTER TABLE `tb_bpjs_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_bpjs_ketenagakerjaan`
--
ALTER TABLE `tb_bpjs_ketenagakerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_buku_nikah`
--
ALTER TABLE `tb_buku_nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_buku_rekening`
--
ALTER TABLE `tb_buku_rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_dropdown`
--
ALTER TABLE `tb_dropdown`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tb_dropdown2`
--
ALTER TABLE `tb_dropdown2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_dropdown3`
--
ALTER TABLE `tb_dropdown3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_exit_clearance`
--
ALTER TABLE `tb_exit_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_ijazah`
--
ALTER TABLE `tb_ijazah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan_mitra_operasi`
--
ALTER TABLE `tb_karyawan_mitra_operasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan_telkom_akses`
--
ALTER TABLE `tb_karyawan_telkom_akses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_konseling`
--
ALTER TABLE `tb_konseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_ktp`
--
ALTER TABLE `tb_ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mapping`
--
ALTER TABLE `tb_mapping`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_npwp`
--
ALTER TABLE `tb_npwp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_posko`
--
ALTER TABLE `tb_posko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_prakerin`
--
ALTER TABLE `tb_prakerin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_print`
--
ALTER TABLE `tb_print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_print2`
--
ALTER TABLE `tb_print2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_skr`
--
ALTER TABLE `tb_skr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sk_posisi`
--
ALTER TABLE `tb_sk_posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sp`
--
ALTER TABLE `tb_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_spbj`
--
ALTER TABLE `tb_spbj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_opr`
--
ALTER TABLE `tb_surat_opr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_sakit`
--
ALTER TABLE `tb_surat_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_teguran`
--
ALTER TABLE `tb_surat_teguran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_umk`
--
ALTER TABLE `tb_umk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ump`
--
ALTER TABLE `tb_ump`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_karyawan_mitra_operasi`
--
ALTER TABLE `tb_karyawan_mitra_operasi`
  ADD CONSTRAINT `tb_karyawan_mitra_operasi_ibfk_1` FOREIGN KEY (`id_kar`) REFERENCES `tb_karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_karyawan_telkom_akses`
--
ALTER TABLE `tb_karyawan_telkom_akses`
  ADD CONSTRAINT `tb_karyawan_telkom_akses_ibfk_1` FOREIGN KEY (`id_kar`) REFERENCES `tb_karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
