-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 08:31 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buta`
--
CREATE DATABASE IF NOT EXISTS `buta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `buta`;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kls` int(3) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kls`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kls`, `kelas`) VALUES
(1, 'XII Multimedia 1'),
(2, 'XII Multimedia 2'),
(3, 'XII Multimedia 3'),
(4, 'XII Multimedia 4'),
(5, 'XII Broadcasting 1'),
(6, 'XII Broadcasting 2'),
(7, 'XII Rekayasa Perangkat Lunak 1'),
(8, 'XII Rekayasa Perangkat Lunak 2'),
(9, 'XII Teknik Komputer Jaringan 1'),
(10, 'XII Teknik Komputer Jaringan 2'),
(11, 'XII Teknik Komputer Jaringan 3');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE IF NOT EXISTS `masuk` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `masuk2`
--

CREATE TABLE IF NOT EXISTS `masuk2` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk2`
--

INSERT INTO `masuk2` (`username`, `password`) VALUES
('masuk', 'masuk123');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sosmed` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kode_kelas` int(3) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`nama`, `tempat`, `tanggal`, `sosmed`, `pesan`, `foto`, `kode_kelas`, `id`, `angkatan`) VALUES
('ismi fauziah', 'Bogor', '2002-07-11', 'IG:ISMIZIAHH', 'ALHAMDULILLAH', 'Ismi 20190112_111026.jpg', 6, 19, '2017/2018'),
('Gunawan Indra', 'Surabaya', '2002-06-01', 'ig : gungun_', 'senang bangettt', 'user4.png', 9, 20, '2017/2018'),
('cut meiliyanti putri maharani', 'Bogor', '2002-05-07', 'ig:cut_meiliyanti', 'alhamdulillah lulus semoga kedepan nya lebih baik', 'user7.png', 7, 25, '2017/2018'),
('Ajeng Kurniah', 'belanda', '2001-08-17', 'ig:ajenggah', 'lulus dengan hasil yang memuaskan', 'user7.png', 5, 39, '2016/2017'),
('Ncun Komariah', 'Sukabumi', '2002-08-14', 'cuncantikkan', 'bungah pisan rasana bisa lulus', 'user7.png', 3, 42, '2017/2018'),
('ucok maricok', 'Bogor', '2000-10-19', 'cokcok123', 'alhamdulillah beres', 'user4.png', 1, 43, '2017/2018'),
('calista angel', 'Jakarta', '1999-04-08', 'ig:calis_ta', 'alhamdulillah bahagia akhirnya lulus juga aku senangg', 'user7.png', 3, 44, '2016/2017'),
('muhammad ajis pratama', 'Bogor', '2002-02-14', 'ig:aziss_p', 'akhirnya lulus juga alhamdulillah', 'user4.png', 7, 45, '2017/2018'),
('Fadlan Maulana', 'Bogor', '1999-10-27', 'ig:adann_fa', 'senang sedih duka ku lewati', 'user4.png', 2, 47, '2016/2017'),
('muhammad udin', 'Bogor', '1999-09-24', 'ig:udinsky', 'berrakit_rakit kehulu berenang ketepian bersakit dahulu bersenang kemudian', 'user4.png', 7, 48, '2016/2017'),
('muhammad dwiki rahmadi', 'Bogor', '2002-06-24', 'IG:ecimmm_', 'alhamdulillah akhirnya aku lulus dengan nilai yang memuaskan', 'user4.png', 10, 49, '2017/2018'),
('Agung fadhillah', 'Bogor', '2000-11-18', 'ig:agungfdlh', 'akhirnya penantian yang tidak sia-sia', 'user4.png', 9, 50, '2016/2017'),
('Agus wicaksono', 'Jakarta', '2000-10-21', 'ig:gusgus_', 'jangan rindu ringan karna yang berat dosa wkwk', 'user4.png', 10, 51, '2016/2017'),
('Liansyah putra', 'Solo', '2000-11-25', 'ig:liannpai_', 'cuman mau bilang aku senang ', 'user4.png', 11, 52, '2016/2017'),
('', '', '0000-00-00', '', '', 'murid1545197320.', 0, 53, ''),
('', '', '0000-00-00', '', '', 'murid1545197323.', 0, 54, ''),
('DADANG', '', '0000-00-00', '', '', 'murid1545197352.', 0, 55, ''),
('dania restiana putri', 'Bandung', '2002-05-19', 'daaannn', 'bahagian', 'user7.png', 7, 56, '2017/2018'),
('Miranti Nurjanah', 'Medan', '2000-10-04', 'mirantiN', 'miranti sangat cantik', 'user7.png', 1, 57, '2016/2017'),
('Ratih Natasya', 'Bogor', '2001-02-02', 'ig: raranatasya', 'Semoga semakin jaya ya Infokom oke', 'user7.png', 1, 58, '2016/2017'),
('Bintang Putra Ananda', 'Bandung', '2001-07-25', 'ig: bibin07', 'Horeee lulus juga akhirnya', 'user4.png', 1, 60, '2016/2017'),
('Kenji Alatas', 'Bandung', '2000-07-12', 'ig: alataskenji', ' senengnya bisa lulus dengan nilai terbaik', 'user4.png', 1, 62, '2016/2017'),
('Anita Riandani', 'Bogor', '2000-12-31', 'ig: nitariri31', 'Semoga infokom semakin didepan', 'user7.png', 1, 63, '2016/2017'),
('Bimo Anggara Sadewo', 'Bogor', '2001-06-09', 'ig: bimooo_a', 'syukur alhamdulillah', 'user4.png', 1, 64, '2016/2017'),
('Rara Rinjani', 'Bali', '2000-03-08', 'ig: rararinjani', 'bahagia sekali bisa lulus', 'user7.png', 1, 66, '2016/2017'),
('Gani Asmarkandi', 'Bogor', '2001-12-28', 'IG: gani_', 'senengnyaaa', 'user4.png', 1, 67, '2017/2018'),
('Panji Riando Putra', 'Bogor', '2000-11-16', 'ig: panjiRP', 'manjiwlah pokonya mah', 'user4.png', 1, 68, '2017/2018'),
('Cici kumala sari', 'Bogor', '1999-10-18', 'ig:cicieyy1', 'tersenyumlah karena senyum itu ibadah ingat', 'user7.png', 1, 69, '2016/2017'),
('Nurul Astriani', 'Bogor', '2002-07-24', 'ig:nrl.astr', 'akhirnya lulus dengan nilai yang memuaskan.maju terus infokom', 'user7.png', 8, 70, '2017/2018'),
('Rama Patuh Ammarullah', 'Bogor', '2002-06-23', 'ig:ramap', 'ayee aku bahagiaa selalu', 'user4.png', 7, 71, '2017/2018'),
('Della Ananda', 'Bogor', '2002-06-17', 'ig:delaaananda', 'lulus dengan nilai yang memuaskan.love yuo infokom', 'user7.png', 8, 72, '2017/2018'),
('muhammad imam apriansyah', 'Bogor', '2001-07-08', 'ig:apriansyah_', 'selalu tersenyum bahagia', 'user4.png', 7, 73, '2017/2018'),
('Lita Yulistia', 'Bogor', '2002-12-19', 'ig:litaayuli', 'infokom maju terus dan jadi kebanggaan', 'user7.png', 7, 74, '2017/2018'),
('mahfud jihad', 'Jakarta', '1999-07-24', 'ig:mahfuddd', 'akhirnya aku lulus.teman-teman jangan lupain aku ya', 'murid1547270795.user4.png', 7, 75, '2016/2017'),
('anang firmansyah', 'Solo', '2000-07-25', 'ig:nanggganang', 'aku tuhhh bahagia bangetsss', 'murid1547270874.user4.png', 8, 76, '2016/2017'),
('angel karmila', 'Surabaya', '2000-06-19', 'ig:angel_', 'inget ya kawan-kawan jangan lupa solat lima waktu', 'murid1547271006.user7.png', 4, 77, '2016/2017'),
('James Situmorang Putra Bintang', 'Bogor', '2005-06-19', 'ig:jamesss_1', 'alhamdulillah akuuu bahagiaaa', 'murid1547271155.user4.png', 2, 78, '2017/2018'),
('Rara Anggraini', 'Bogor', '2001-11-29', 'ig: rararara', 'semoga cepet dapet kerjaan aamiin', 'murid1547276559.user7.png', 6, 79, '2017/2018'),
('Bintang Prakasa', 'Bogor', '1999-04-17', 'ig:bintang_', 'akhirnya aku lulus dengan nilai yang memuaskan', 'murid1547276793.user4.png', 2, 80, '2016/2017'),
('Mutia Azzahra', 'Jakarta', '1999-09-24', 'ig:mutiaaa_1', 'jangan lupa bahagia hari ini', 'murid1547276884.user7.png', 2, 81, '2016/2017'),
('Dwika Fajri', 'Bogor', '1999-07-17', 'ig:dwikaaaa_fajri', 'akhirnya aku lulus.untuk infokom terus lah berkarya', 'murid1547280944.user4.png', 2, 82, '2016/2017'),
('Bagus Aditya', 'Bogor', '1999-05-21', 'ig:gusssbagus', 'akuu senang sekolah di infokom', 'murid1547281061.user4.png', 2, 83, '2016/2017'),
('Nurhayati Indah', 'Bogor', '1999-07-17', 'ig:nurhayati_3', 'aku bahagia karena bisa membanggakan orang tua', 'murid1547281173.user7.png', 2, 84, '2016/2017'),
('Dito Saputra', 'Bogor', '1999-05-18', 'ig:ditosptr_', 'guyss kita lulus bareng-bareng', 'murid1547281520.user4.png', 2, 85, '2016/2017'),
('Yuli Putri Sari', 'Jakarta', '1999-06-21', 'ig:yulips_', 'alhamdulillah', 'murid1547281634.user7.png', 2, 86, '2016/2017'),
('Intan Puri Cantik', 'Bogor', '1999-07-21', 'ig:Intan_prc', 'jangan lupa bahagia ya kawan.sukses terus', 'murid1547281770.user7.png', 2, 87, '2016/2017'),
('Andin Pitaloka', 'Bogor', '1999-08-19', 'ig:andin_pitaloka', 'masa lalu tidak untuk dilupakan tapi dijadikan pelajaran', 'murid1547281894.user7.png', 2, 88, '2016/2017'),
('Salsabila Lestari', 'Bogor', '2000-09-19', 'ig:salsabila_', 'jaga kesehatan ya teman-teman', 'murid1547282006.user7.png', 3, 89, '2016/2017'),
('muhammad andi', 'Bogor', '1999-08-24', 'ig:andicans_', 'bakalan kangen banget sama cireng babeh.maju terus infokom', 'murid1547282103.user4.png', 3, 90, '2016/2017'),
('Ardiansyah Putra', 'Bogor', '1999-10-22', 'ig:ardii_', 'sukses terus kawan.jangan lupa kalo kita pernah berjuang bersama', 'murid1547282220.user4.png', 3, 91, '2016/2017'),
('Citra Putri', 'Bogor', '1999-07-25', 'ig:citraa_putri', 'sukses terus infokom', 'murid1547282399.user7.png', 3, 92, '2016/2017'),
('Dionino rio', 'Bogor', '1999-08-20', 'ig:rioo', 'alhamdulillah lulus', 'murid1547282971.user4.png', 4, 93, '2016/2017'),
('Mahesa Putra', 'Bogor', '1999-10-27', 'ig:mahesaa', 'akuu lulusss', 'murid1547283052.user4.png', 3, 94, '2016/2017'),
('Jimmy Renoldi', 'Bandung', '2000-01-18', 'ig: jimjim01', 'semoga generasi selanjutnya makin berprestasi', 'murid1547283171.user4.png', 4, 95, '2016/2017'),
('Rifa Adawiyah Niadanti', 'Bogor', '1999-12-23', 'ig: RAniadanti', 'alhamdulillah bahagia bisa lulus', 'murid1547283285.user7.png', 4, 96, '2016/2017'),
('Gita Rimanuriah', 'Bogor', '2000-01-24', 'ig: rimanuri', 'syukurlah bisa lulus dengan selamat', 'murid1547283358.user7.png', 4, 97, '2016/2017'),
('Mulyadi Ahdian', 'Bogor', '2000-10-25', 'ig: ahdianmulyadi', 'selamat tinggal smk kesayangan', 'murid1547283427.user4.png', 4, 98, '2016/2017'),
('Ryan Anggara', 'Bogor', '2000-09-24', 'ig: ryanA', 'semoga semakin jaya untuk smk infokom', 'murid1547283504.user4.png', 4, 99, '2016/2017'),
('Rahmita Rumania', 'Bogor', '2000-05-26', 'ig: ramitaR', 'senangnya bisa lulus', 'murid1547283611.user7.png', 5, 100, '2016/2017'),
('muhammad ridho', 'Bogor', '1999-10-24', 'ig:ridho_', 'kita bahagia', 'murid1547371925.user4.png', 1, 101, '2016/2017'),
('Gionino Alatas', 'Medan', '1999-09-16', 'ig:gio_nino', 'jangan lupakan masa lalu kawan', 'murid1547372199.user4.png', 1, 102, '2016/2017'),
('Andika pratri', 'Bogor', '1999-07-21', 'ig:andika_tri', 'goodbye', 'murid1547372367.user4.png', 3, 103, '2016/2017'),
('Dani Surya', 'Banten', '1999-10-11', 'ig:suryaa_', 'is the best', 'murid1547372449.user4.png', 3, 104, '2016/2017'),
('Ananda Putri', 'Bogor', '1999-03-24', 'ig:nandaa_putri', 'alhamdulillah berkat kerja keras dan berdoa', 'murid1547372557.user7.png', 3, 105, '2016/2017'),
('Dini Ayu', 'Bandung', '1999-08-18', 'ig:diniayu_', 'aku bangga dengan infokom', 'murid1547372642.user7.png', 3, 106, '2016/2017'),
('Landi Alamsyah', 'Malang', '1999-08-19', 'ig:landi_syah', 'we are family', 'murid1547372849.user4.png', 4, 107, '2016/2017'),
('Wildan Syahputra', 'Bogor', '1999-06-15', 'ig:wildannn_', 'bakal kangen upacara', 'murid1547372951.user4.png', 4, 108, '2016/2017'),
('Rita Anggita', 'Surabaya', '1999-03-23', 'ig:ritaa_ita', 'bakal rindu ke kantin', 'user7.png', 4, 109, '2016/2017'),
('Ani Putri', 'Bogor', '1999-12-10', 'ig:aniputri', 'bahagiaa sekali terharu', 'murid1547373099.user7.png', 4, 110, '2016/2017'),
('Siti Mulyani', 'Bogor', '1999-04-05', 'ig:mullsi', 'alhamdulillah', 'murid1547373244.user7.png', 5, 111, '2016/2017'),
('Aura Diza', 'Bandung', '1999-02-20', 'ig:auradiz', 'akuu bahagiaa pokoknya', 'murid1547373961.user7.png', 5, 112, '2016/2017'),
('Siska Aulia', 'Bogor', '1999-11-15', 'ig:siskaa', 'persahabatan bagai kepompong', 'murid1547374044.user7.png', 5, 113, '2016/2017'),
('Kevin Situpang', 'Medan', '1999-09-03', 'ig:kevin_78', 'friendship', 'murid1547374143.user4.png', 5, 114, '2016/2017'),
('Rizki Ramadhan', 'Bogor', '1999-01-25', 'ig:rizki_rmdhn', 'semoga semua sukses aminnn', 'murid1547374299.user4.png', 5, 115, '2016/2017'),
('Alianzar putra', 'Bogor', '1999-12-02', 'Ig:alianzarr', 'bahagiaa selaluu', 'murid1547374387.user4.png', 5, 116, '2016/2017'),
('Muhammad Zaenal', 'Bogor', '1999-02-18', 'ig:zaenal', 'alhamdulillah', 'murid1547374574.user4.png', 5, 117, '2016/2017'),
('Muhammad Zikri putra', 'Bogor', '1999-04-19', 'ig:zikriiiputra', 'bakal rindu suasana kelas', 'murid1547374662.user4.png', 5, 118, '2016/2017'),
('Diani putri', 'Bogor', '1999-01-18', 'ig;DIANI', 'alhamdulillah', 'murid1547422560.user7.png', 6, 119, '2016/2017'),
('Rani anjani', 'Bogor', '1999-11-21', 'IG:raniii', 'aku senang', 'murid1547422636.user7.png', 6, 120, '2016/2017'),
('Muhammad roni', 'Banten', '1999-01-14', 'ig:roni_2', 'alhamdulillah aku lulus', 'murid1547422732.user4.png', 6, 121, '2016/2017'),
('Nando Putra', 'Bogor', '1999-07-10', 'ig:nandooo', 'akuu bahagiaa', 'murid1547422823.user4.png', 6, 122, '2016/2017'),
('Nina Rahayu', 'Bogor', '1999-06-17', 'ig:nina_rahayu', 'bakal rindu sama masa smk', 'murid1547423005.user7.png', 6, 123, '2016/2017');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
