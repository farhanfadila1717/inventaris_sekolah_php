-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 08:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventarisfarhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'Farhan Fadila'),
(2, 'admintadika', 'admin', 'admin tadika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `nis` int(15) NOT NULL,
  `nama_anggota` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `prodi` enum('AP','MM','PM','RPL') NOT NULL,
  `thn_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`nis`, `nama_anggota`, `password`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `thn_masuk`) VALUES
(10657350, 'Farhan Fadila', 'farhan', 'Depok', '2001-05-03', 'L', 'RPL', '2016'),
(10657357, 'Christina Paulin', 'tina', 'Surabaya', '2001/06/09', 'P', 'AP', '2017'),
(10657359, 'Dika Dwi Saputra', 'dika', 'Magelang', '2001/05/10', 'L', 'MM', '2013'),
(10657360, 'Andre Dwi Satria', 'andre', 'Jakarta', '2000/12/07', 'L', 'MM', '2013'),
(10657361, 'Stevanus Bogi Prasetyo', 'bogi', 'Surabaya', '2001/12/08', 'L', 'PM', '2014'),
(12345678, 'Agus', 'agus', 'Depok', '20001/06/09', 'L', 'PM', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `foto_barang` varchar(200) NOT NULL,
  `jumlah_barang` int(8) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `spek` varchar(300) NOT NULL,
  `tahun_beli` varchar(5) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `foto_barang`, `jumlah_barang`, `kategori`, `spek`, `tahun_beli`, `kondisi`) VALUES
(1, 'Proyektor', 'infocus.png', 9, 'Alat Elektronik', 'xVGA 1024x720', '2010', 'baik'),
(4, 'Mouse', 'mouse.png', 19, 'Alat Elektronik', 'Wirreles', '2013', 'Baik'),
(5, 'Bola Basket', 'bolabasket.png', 8, 'Peralatan Olahraga', 'Standar PERBASI', '2015', 'Baik'),
(6, 'Bola Futsal', 'bolafutsal.png', 10, 'Peralatan Olahraga', 'Diameter 62cm', '2016', 'Baik'),
(7, 'Kamera DSLR', 'kamera.png', 7, 'Alat Elektronik', 'Nikon D3300', '2017', 'Baik'),
(8, 'Laptop Asus', 'laptop.png', 5, 'Alat Elektronik', 'i7-8700k, full HD, Hdd 1tb', '2018', 'Baik'),
(9, 'Pulpen', 'pulpen.png', 31, 'ATK', 'Pulpen Gel warna hitam', '2018', 'Baik'),
(10, 'Raket', 'raketbadminton.png', 4, 'Peralatan Olahraga', 'Standar PBSI', '2019', 'Baik'),
(11, 'Bangku', 'bangku.png', 40, 'Alat Sekolah', 'kayu jati', '2010', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kritiksaran`
--

CREATE TABLE `tbl_kritiksaran` (
  `id_kritik` int(11) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kritiksaran`
--

INSERT INTO `tbl_kritiksaran` (`id_kritik`, `nis`, `nama_anggota`, `email`, `message`) VALUES
(1, 10657357, 'Christina Paulin', 'tina@gmail.com', 'lapangan banyak lubang'),
(2, 10657350, 'Farhan Fadila', 'farhan.fadila1717@gmail.com', 'komputer no 2 sering blue screen'),
(3, 10657350, 'Farhan Fadila', 'farhan.fadila1717@gmail.com', 'spp kemahalan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id_operator` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`id_operator`, `username`, `password`, `nama_operator`) VALUES
(1, 'operator', 'operator', 'operator tadika'),
(2, 'operator2', 'operator', 'Operator Cadangan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `nis`, `nama_anggota`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`, `keterangan`) VALUES
(2, 10657350, 'Farhan Fadila', '2019-04-05', '2019-04-10', 'dikembalikan', ' dikembalikan besok'),
(3, 10657350, 'Farhan Fadila', '2019-04-05', '2019-04-10', 'dikembalikan', ' untuk mencatat uang kas'),
(4, 10657350, 'Farhan Fadila', '2019-04-05', '2019-04-10', 'dikembalikan', ' untuk tugas ukk'),
(5, 10657357, 'Christina Paulin', '2019-04-05', '0000-00-00', 'dipinjam', ' untuk presentasi'),
(6, 10657350, 'Farhan Fadila', '2019-04-05', '2019-04-05', 'dikembalikan', ' latihan praktek'),
(7, 10657357, 'Christina Paulin', '2019-04-07', '2019-04-07', 'dikembalikan', ' presentasi b.indonesia'),
(8, 10657357, 'Christina Paulin', '2019-04-07', '0000-00-00', 'dipinjam', ' latihan praktek'),
(9, 10657350, 'Farhan Fadila', '2019-04-10', '0000-00-00', 'dipinjam', ' untuk presentasi bahasa indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam_barang`
--

CREATE TABLE `tbl_pinjam_barang` (
  `id_peminjaman_barang` int(15) NOT NULL,
  `id_pinjam` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjam_barang`
--

INSERT INTO `tbl_pinjam_barang` (`id_peminjaman_barang`, `id_pinjam`, `id_barang`, `nama_barang`, `jumlah`) VALUES
(2, 2, 4, 'Mouse', 1),
(3, 3, 9, 'Pulpen', 1),
(4, 4, 7, 'Kamera DSLR', 1),
(5, 5, 1, 'Proyektor', 1),
(6, 5, 4, 'Mouse', 1),
(7, 6, 7, 'Kamera DSLR', 1),
(8, 6, 5, 'Bola Basket', 1),
(9, 7, 1, 'Proyektor', 1),
(10, 8, 10, 'Raket', 1),
(11, 8, 5, 'Bola Basket', 1),
(12, 9, 1, 'Proyektor', 1),
(13, 9, 4, 'Mouse', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kritiksaran`
--
ALTER TABLE `tbl_kritiksaran`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_pinjam_barang`
--
ALTER TABLE `tbl_pinjam_barang`
  ADD PRIMARY KEY (`id_peminjaman_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_kritiksaran`
--
ALTER TABLE `tbl_kritiksaran`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pinjam_barang`
--
ALTER TABLE `tbl_pinjam_barang`
  MODIFY `id_peminjaman_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
