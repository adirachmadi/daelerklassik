-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 06:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otomotif`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`username`, `password`, `email`) VALUES
('adi', '$2y$10$4ihrhik1', 'adirachmadi38@yahoo.co.id'),
('sintya', '$2y$10$2gWk36JN', 'Febryriiani440@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `produk` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `diskripsi` text NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`produk`, `gambar`, `diskripsi`, `harga`) VALUES
('Motor', '', 'C70,\r\nSudah restorasi, mesih halus, bukun sedikit perbaikan lagi.. insya allah noken, harga nego.\r\nberminat bs langsung WA.\r\n089610969683', '7.600.000'),
('Motor', '', 'GL pro,\r\nthn 2000, pajak hidup, plat metro BE,\r\nWA : 08127867570\r\nHarga Nego santai.', '10.000.000'),
('Motor', '', 'C700,\r\nthn 1981, kondisi bahan.. tapi gk parah\" betul, kendala mesin sm kaki\" pajak off plat serang A. harga nego besin aja Bosqu.', '3.000.000'),
('Bengkel', '', 'Ducks Garage.\r\nterima service,restorasi,toko sparepart, unit sale.\r\njl.laswi no 18, kel.kacapiring, kec.batununggal, bandung.\r\nWA: 089662316541\r\n', '-'),
('Motor', '', 'punya budget 5 jt kurang lebih, nyari motor bebek / koplingan yg antik. tinggal pake bukan dandan.', '5.000.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
