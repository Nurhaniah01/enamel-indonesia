-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 09:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(15, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(255) NOT NULL,
  `alamat_contact` text NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `nama_contact`, `alamat_contact`, `notelp`, `email`) VALUES
(3, 'Enamel Indonesia Dental Clinic', 'Jl. Dr. Sutomo No. 151, Kubu Marapalam, Kec. Padang Timur, Kota Padang, Sumatera Barat (25143) ', '085765674596', 'enamelindo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `jadwal_praktek` varchar(255) NOT NULL,
  `foto_dokter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dokter`, `nama_dokter`, `jadwal_praktek`, `foto_dokter`) VALUES
(4, 'Drg. Farandita Tamela S.Pd', 'Senin - Sabtu 09.00 s/d 21.00 WIB ', '1617243598_farandita.jpg'),
(8, 'Drg. Ummul Khoir', '<p>Senin - Sabtu 09.00&nbsp; s/d&nbsp; 21.00 WIB</p> ', '1617243660_ummul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_foto` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_foto`, `foto`) VALUES
(1, 'Bagian Depan Enamel Indonesia Dental Clinic', '1618555181_1.jpeg'),
(3, 'Bagian Pendaftaran Enamel Indonesia Dental Clinic', '1618555191_2.jpeg'),
(4, 'Papan Nama Enamel Indonesia Dental Clinic', '1618555202_3.jpeg'),
(5, 'Ruang Konsultasi Dokter Enamel Indonesia Dental Clinic', '1618556868_4.jpeg'),
(6, 'Ruang Tindakan Enamel Indonesia Dental Clinic', '1618557274_5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karier`
--

CREATE TABLE `tbl_karier` (
  `id_karier` int(11) NOT NULL,
  `nama_karier` varchar(255) NOT NULL,
  `keterangan_karier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karier`
--

INSERT INTO `tbl_karier` (`id_karier`, `nama_karier`, `keterangan_karier`) VALUES
(4, 'Admin', '<ul><li>Wanita</li><li>Berusia max 28 tahun</li><li>Pendidikan min S1 Semua Jurusan</li><li>Belum Menikah</li><li>Memiliki kendaraan pribadi</li><li>Menguasai Ms. Office</li></ul> '),
(5, 'Perawat', '<ul><li>Wanita</li><li>Tamatan S1 Keperawatan</li><li>Fresh Graduate Welcome</li><li>Usia max 28 tahun</li></ul>  ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `keterangan_kegiatan` text NOT NULL,
  `foto_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `keterangan_kegiatan`, `foto_kegiatan`) VALUES
(4, 'Kunjungan Ke Enamel Indonesia Dental Clinic Marapalam', '<p>Kunjungan pada hari rabu tanggal 31 Maret 2021</p> ', '1617252893_WhatsApp Image 2021-04-01 at 11.30.41 (5).jpeg'),
(7, 'Lomba Density', '<p>Lomba Density V Tingkat Nasional Fakultas Kedokteran</p> ', '1618459974_q.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ket_lokasi`
--

CREATE TABLE `tbl_ket_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `alamat_lokasi` text NOT NULL,
  `foto_lokasi` text NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ket_lokasi`
--

INSERT INTO `tbl_ket_lokasi` (`id_lokasi`, `nama_lokasi`, `alamat_lokasi`, `foto_lokasi`, `maps`) VALUES
(1, 'Enamel Indonesia Dental Clinic Marapalam', 'Jl. Dr. Sutomo No. 151, Kubu Marapalam, Kec. Padang Timur, Kota Padang, Sumatera Barat (25143) ', '1617248882_tempat.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.26664740345!2d100.38709761427319!3d-0.9528113356208795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b906f7de6159%3A0x72e47e3c199a7c2f!2sEnamel%20Indonesia%20Dental%20Clinic!5e0!3m2!1sid!2sid!4v1617615878859!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keunggulan`
--

CREATE TABLE `tbl_keunggulan` (
  `id_keunggulan` int(11) NOT NULL,
  `nama_keunggulan` varchar(255) NOT NULL,
  `ket_keunggulan` text NOT NULL,
  `foto_keunggulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_keunggulan`
--

INSERT INTO `tbl_keunggulan` (`id_keunggulan`, `nama_keunggulan`, `ket_keunggulan`, `foto_keunggulan`) VALUES
(1, 'Misi Sosial', 'Kami Mengusung Misi Sosial', '1617868388_why-1.png'),
(4, 'Konsep Unik, Fasilitas Nyaman', 'Kami Menyediakan Layanan A sampai Z yang sempurna', '1617868397_why-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id_news` int(11) NOT NULL,
  `nama_news` varchar(255) NOT NULL,
  `keterangan_news` text NOT NULL,
  `foto_news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id_news`, `nama_news`, `keterangan_news`, `foto_news`) VALUES
(2, 'Spesial Sale All Treatment', 'Diskon 10 - 20% Berlaku dari tanggal 5 - 10 April 2021 ', '1618294605_1.jpeg'),
(6, 'Special Sale Scaling (Pembersihan Karang Gigi)', '<p>Special Sale 5 - 10 April 2021 : </p><ul><li>Norma Price : 350.000</li><li>Special Price : 199.000                            </li></ul>  ', '1618294632_2.jpeg'),
(7, 'Spesial Sale Bleaching Gigi', '<p>Spesial Sale 5 - 10 April 2021 :</p><ul><li>Perorang Normal : 2.500.000</li></ul><p>            Special Price : 1.999.000</p><ul><li>Couple Normal : 5.000.000</li></ul><p>            Spesial Price : <span style=\"font-size: 1rem;\">3.499.000</span></p>    ', '1618294649_3.jpeg'),
(8, 'Spesial Sale Pemasangan Kawat Gigi (Behel)', '<p>Spesial Sale 5 - 10 April 2021 :</p><ul><li>Metal Normal : 4.000.000</li></ul><p>            Special Price : 2.999.000</p><ul><li>Ceramic Normal : 6.000.000</li></ul><p>            Spesial Price : 4<span style=\"font-size: 1rem;\">.999.000</span></p>  ', '1618294659_4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelayanan`
--

CREATE TABLE `tbl_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(255) NOT NULL,
  `keterangan_pelayanan` text NOT NULL,
  `harga_pelayanan` int(11) NOT NULL,
  `foto_pelayanan` text NOT NULL,
  `foto_ilustrasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelayanan`
--

INSERT INTO `tbl_pelayanan` (`id_pelayanan`, `nama_pelayanan`, `keterangan_pelayanan`, `harga_pelayanan`, `foto_pelayanan`, `foto_ilustrasi`) VALUES
(1, 'Penambalan Gigi', '<h6 style=\"text-align: justify;\"><span style=\"color: rgb(59, 55, 56); font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 1rem;\"=\"\">Tambal gigi adalah prosedur untuk memperbaiki gigi yang berlubang atau rusak. Prosedur ini dilakukan dengan memasukkan bahan tambalan ke bagian gigi yang rusak atau berlubang. Metode penambalan serta bahan tambalan yang digunakan akan disesuaikan dengan kondisi gigi pasien.</span></h6>           ', 400000, '1617248679_penambalan.jpg', '1617439834_zjpg.jpg'),
(7, 'Pencabutan Gigi', '<h6 style=\"text-align: justify; \"><span style=\"color: rgb(102, 102, 102); font-family: \" source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 18px;\"=\"\">Pencabutan gigi adalah tindakan di mana sebuah gigi atau beberapa gigi diangkat oleh ahli bedah mulut dan wajah-rahang (maksilofasial) menggunakan peralatan kedokteran gigi lengkap. Ini adalah teknik sederhana yang dikenal sebagai bedah mulut, biasanya membutuhkan bius lokal atau umum, dan obat penenang. Evaluasi kesehatan perlu dilakukan secara hati-hati sebelum pencabutan gigi dilakukan, seperti pada pembedahan kecil lainnya. Penanganan rasa sakit dilakukan juga pada tindakan ini, untuk menjaga pasien tetap dalam kenyamanan maksimum.</span></h6>    ', 200000, '1617248696_pencabutan.jpg', '1617439853_s.jpg'),
(8, 'Veener Gigi', '<h6 style=\"text-align: justify; \"><span style=\"color: rgb(59, 55, 56); font-family: \"Source Sans Pro\";\">Veneer gigi adalah prosedur medis yang bertujuan memperbaiki penampilan gigi seseorang dengan cara menempelkan veneer di bagian depan gigi. Veneer bertujuan untuk menutupi kekurangan pada gigi seperti bentuk, warna dan ukuran yang tidak sesuai dengan keinginan pasien. Veneer umumnya terbuat dari resin atau porselen, dan akan menempel secara pada gigi untuk waktu tahunan.</span></h6>  ', 700000, '1617248707_veneer.jpg', '1617439892_q.png'),
(9, 'Pemasangan Kawat Gigi', '<h6 style=\"text-align: justify; \"><span style=\"color: rgb(59, 55, 56); font-family: LatoWeb, sans-serif;\">Pemasangan kawat gigi atau behel adalah prosedur yang dilakukan untuk memperbaiki susunan gigi yang tidak rapi atau susunan rahang yang tidak normal.</span><span style=\"font-family: \"Source Sans Pro\";\">﻿</span></h6>   ', 6000000, '1617248720_behel.jpg', '1617439904_d.jpg'),
(10, 'Scaling Gigi', '<h6 style=\"text-align: justify; \"><span style=\"color: rgb(59, 55, 56); font-family: \"Source Sans Pro\";\">Scaling gigi adalah prosedur non-operasi yang dilakukan untuk membersihkan dan menghilangkan plak dan karang (tartar) pada gigi.</span></h6>   ', 300000, '1617248731_scaling.jpg', '1617439929_e.jpeg'),
(11, 'Bleaching', '<h6 style=\"text-align: justify; \"><span style=\"color: rgb(59, 55, 56); font-family: \"Source Sans Pro\";\">Pemutihan gigi (bleaching) adalah prosedur untuk mencerahkan gigi, dengan menghilangkan noda pada permukaan gigi.</span></h6> ', 300000, '1617247114_bleaching.jpg', '1617439962_t.jpg'),
(12, 'Implan Gigi', '<h6 style=\"text-align: justify; \"><span style=\"color: rgb(59, 55, 56); font-family: \"Source Sans Pro\";\">Implan gigi adalah akar gigi buatan berbentuk seperti baut yang ditanam pada rahang untuk mengganti akar gigi anda yang hilang. Implan gigi dibuat dari logam khusus, umumnya titanium. Implan titanium akan menyatu dengan tulang rahang melalui proses penyembuhan selama beberapa bulan. Setelah implan menyatu dengan tulang rahang, implan akan berperan sebagai akar gigi baru.</span></h6> ', 6000000, '1617247250_implan.jpg', '1617439941_i.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_saran`, `name`, `email`, `subject`, `message`) VALUES
(9, 'Nurhaniah', 'nurhaniah98@gmail.com', 'konsultasi', 'Akan lebih baik lagi enamel indonesia memiliki situs web sendiri agar memudahkan masyarakat untuk melihat pelayanan beserta kegiatan yang ada di enamel indonesia dimanapun dan kapanpun.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alamat_user` text NOT NULL,
  `ket_testimoni` text NOT NULL,
  `foto_testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id_testimoni`, `nama_user`, `alamat_user`, `ket_testimoni`, `foto_testimoni`) VALUES
(1, 'Nia', 'Belimbing', 'Memuaskan', '1617416614_foto.jpg'),
(4, 'Silvia', 'Steba', 'Tempatnya sangat nyaman dan pelayanannya sangat baik', '1617417311_2.png'),
(5, 'Resky', 'Lubuk Alung', 'Baik', '1617417325_3.jpg'),
(6, 'Ari', 'Lubuk Begalung', 'Hasilnya sangat memuaskan', '1617417337_5s.jpg'),
(7, 'Dini', 'Kuranji', 'Bagus', '1617417380_4.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_karier`
--
ALTER TABLE `tbl_karier`
  ADD PRIMARY KEY (`id_karier`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_ket_lokasi`
--
ALTER TABLE `tbl_ket_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tbl_keunggulan`
--
ALTER TABLE `tbl_keunggulan`
  ADD PRIMARY KEY (`id_keunggulan`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_karier`
--
ALTER TABLE `tbl_karier`
  MODIFY `id_karier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_ket_lokasi`
--
ALTER TABLE `tbl_ket_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_keunggulan`
--
ALTER TABLE `tbl_keunggulan`
  MODIFY `id_keunggulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
