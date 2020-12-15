/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - kp-atmlibrary
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kp-atmlibrary` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kp-atmlibrary`;

/*Table structure for table `tb_anggota` */

DROP TABLE IF EXISTS `tb_anggota`;

CREATE TABLE `tb_anggota` (
  `nis` int(12) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `jurusan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_anggota` */

insert  into `tb_anggota`(`nis`,`nama`,`jk`,`kelas`,`jurusan`) values 
(112,'Asep','Laki-Laki','X','Pemasaran'),
(113,'Rizki','Laki-Laki','X','Pemasaran'),
(114,'Angel','Laki-Laki','X','Pemasaran'),
(211,'Restita','Perempuan','X','Pariwisata'),
(212,'Andrian','Laki-Laki','X','Pariwisata'),
(213,'Neni','Perempuan','X','Pariwisata'),
(311,'Yeni','Perempuan','X','Peternakan'),
(312,'Nenden','Perempuan','X','Peternakan'),
(313,'Bangbang','Laki-Laki','X','Peternakan');

/*Table structure for table `tb_buku` */

DROP TABLE IF EXISTS `tb_buku`;

CREATE TABLE `tb_buku` (
  `kode` int(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_buku` */

insert  into `tb_buku`(`kode`,`judul`,`penulis`,`tahun`,`penerbit`,`stok`) values 
(1111,'Pemrograman Java Script','Ahmad',2017,'Sinar Dunia',16),
(1112,'Juragan Marketplace Reborn','Weliyan Tanoyo',2020,'Billionaire Store',10),
(1113,'7 Kesalahan Fatal Pengusaha Pemula','Dewa Eka Prayoga',2018,'Billionaire Store',15);

/*Table structure for table `tb_ebook` */

DROP TABLE IF EXISTS `tb_ebook`;

CREATE TABLE `tb_ebook` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `penulis` varchar(20) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `cover` text DEFAULT NULL,
  `ebook` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_ebook` */

insert  into `tb_ebook`(`id`,`judul`,`penulis`,`kategori`,`cover`,`ebook`) values 
(6,'Belajar Codeigniter','Diki','Umum','Screenshot_2020-12-03_063138.jpg','EBOOK_TUTORIAL_CODEIGNITER_LENGKAP_DENGAN_STUDI_KASUS_MEMBUAT_SISTEM_INFORMASI_PERPUSTAKAAN.pdf'),
(7,'Belajar HTML','Malas Ngoding','Umum','html_css_dasar.jpg','Belajar_HTML_Dasar_Pengertian_HTML_v2.pdf'),
(8,'Pendidikan Agaman Islam Kelas 6 SD','Hasan','Umum','Screenshot_2020-12-03_064117.jpg','Agama_Islam_6_Kelas_6_Hasan_Mudis_Syafrudin_M_Adgani_dan_Lilis_Surya_2011.pdf');

/*Table structure for table `tb_petugas` */

DROP TABLE IF EXISTS `tb_petugas`;

CREATE TABLE `tb_petugas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_petugas` */

insert  into `tb_petugas`(`id`,`nama`,`username`,`password`) values 
(8,'Dadan Design','1177050026','0192023a7bbd73250516f069df18b500');

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(30) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(30) DEFAULT NULL,
  `nis_anggota` int(30) DEFAULT NULL,
  `kode_buku` int(30) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` int(11) DEFAULT NULL,
  `total_denda` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id` (`id_petugas`),
  KEY `nis` (`nis_anggota`),
  KEY `kode` (`kode_buku`),
  CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`nis_anggota`) REFERENCES `tb_anggota` (`nis`),
  CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`kode_buku`) REFERENCES `tb_buku` (`kode`),
  CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
