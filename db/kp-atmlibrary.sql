/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.10-MariaDB : Database - kp-atmlibrary
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

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_admin` */

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
(1212,'dadan','Laki-Laki','X','Pemasaran'),
(12121,'Rizki','Laki-Laki','X','Pemasaran');

/*Table structure for table `tb_buku` */

DROP TABLE IF EXISTS `tb_buku`;

CREATE TABLE `tb_buku` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_buku` */

insert  into `tb_buku`(`id`,`kode`,`judul`,`penulis`,`tahun`,`penerbit`,`stok`) values 
(2,'B12133','Ketika Rambo Menangis dan terpapar','Ahmad',2023,'Jabarin',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_ebook` */

insert  into `tb_ebook`(`id`,`judul`,`penulis`,`kategori`,`cover`,`ebook`) values 
(3,'Ketika Rambo Menangis dan terpapar ','Ahmad','Peternakan','IMG_20200212_102904_366.jpg','Cetak_Rencana_Studi_-_Portal_Akademik_S51.pdf'),
(4,'Ketika Rambo Dagang','Arip','Inspirasi','IMG_20200411_110429_735.jpg','Revolusi_Model_Bisnis_pada_Era_Industri_4_0_-_Investor_ID.pdf'),
(5,'Pemrograman Java Script','Dadan','Umum','IMG_20200213_102840_316.jpg','Miftakhul_Ikhsan_-_Arin_dan_Mimpinya.pdf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
