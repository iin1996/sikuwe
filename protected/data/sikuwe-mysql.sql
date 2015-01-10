-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2015 at 05:41 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikuwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga`
--

CREATE TABLE IF NOT EXISTS `tbl_keluarga` (
  `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` char(17) NOT NULL,
  `alamat` text NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_temporary` tinyint(1) NOT NULL,
  `disimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE IF NOT EXISTS `tbl_penduduk` (
  `id_penduduk` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(18) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `sidik_jari` varchar(45) NOT NULL,
  `id_jenis_kelamin` varchar(50) NOT NULL,
  `id_golongan_darah` varchar(50) NOT NULL,
  `id_agama` varchar(50) NOT NULL,
  `id_status_kawin` varchar(50) NOT NULL,
  `id_status_tinggal` varchar(50) NOT NULL,
  `id_pendidikan` varchar(50) NOT NULL,
  `id_pekerjaan` varchar(50) NOT NULL,
  `id_cacat` varchar(50) NOT NULL DEFAULT '-1',
  `id_status_kependudukan` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_temporary` varchar(45) NOT NULL,
  `disimpan` varchar(45) NOT NULL DEFAULT '0',
  `diperbarui` varchar(45) NOT NULL,
  PRIMARY KEY (`id_penduduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `foto`, `sidik_jari`, `id_jenis_kelamin`, `id_golongan_darah`, `id_agama`, `id_status_kawin`, `id_status_tinggal`, `id_pendidikan`, `id_pekerjaan`, `id_cacat`, `id_status_kependudukan`, `is_active`, `is_temporary`, `disimpan`, `diperbarui`) VALUES
(1, '3301100503780005', 'Samsul Ma''arif', 'Cilacap', '1978-03-06', 'Indonsia', 'd', 'a', '1', '1', '1', '1', '1', '1', '1', '-1', '1', 1, '1', '0', ''),
(2, '3301154203590006', 'Rifngatul Mahmudah', 'Gandrung', '1988-05-10', 'Indonsia', '', '', '', '', '', '', '', '', '', '-1', '', 0, '', '0', ''),
(3, '3301154203590007', 'Nama Orang', 'Bogor', '1995-01-24', 'Indonesia', '', '', '', '', '', '', '', '', '', '-1', '', 1, '', '0', ''),
(4, '3301154203590009', 'Tetangga Sebelah', 'Cinangsi', '2015-01-01', 'Indonesia', '', '', '', '', '', '', '', '', '', '-1', '', 1, '', '0', ''),
(5, '3301154203590010', 'Sedingaeh Disit', 'Sulawesi', '1986-01-16', 'Indonesia', '', '', '', '', '', '', '', '', '', '-1', '', 1, '', '0', ''),
(6, '3301154203590011', 'Akhmad Fadli', 'Papua', '1960-07-13', 'Inggris', '', '', 'Laki-Laki', '0', '0', '0', '0', '', 'Wartawan', '0', '0', 1, '', '0', ''),
(7, '3301154203590012', 'Cah Ilang', 'Maluku', '1952-08-14', 'Indonesia', '', '', 'Laki-Laki', 'A', 'Hindu', 'Kawin', 'Tinggal di Luar Provinsi', '', 'Tukang Ketik', 'Tidak Cacat', 'Penduduk Asli/Tetap', 1, '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo'),
(3, 'Ma''arif', 'Samsul');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2014-01-01 17:28:33', '2015-01-10 09:16:06', 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2014-01-01 17:28:33', '2014-01-10 08:19:54', 0, 0),
(3, 'samsul', 'cf6146b01e53a64bd330a52c630269b3', 'mail@samsul.web.d', 'bfffeda7eb12068b38e2546f0b2aa498', '2014-01-02 03:42:27', '2014-12-21 19:30:56', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
