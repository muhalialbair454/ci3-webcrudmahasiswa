SHOW DATABASES;

CREATE DATABASE mahasiswa;

DROP DATABASE mahasiswa;

USE mahasiswa;

SHOW TABLES;

CREATE TABLE `tbl_data_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB;

SHOW TABLES;

DROP TABLE tbl_data_mahasiswa;

DESC tbl_data_mahasiswa;

INSERT INTO tbl_data_mahasiswa(	npm,
								nama_mahasiswa,
                                tanggal_lahir,
                                jurusan,
                                alamat,
                                email,
                                no_telepon,
                                foto)
						VALUES(	'54416698',
								'Muhammad Ali Albair',
                                STR_TO_DATE('21-11-1998', '%d-%m-%Y'),
                                'Teknik Informatika',
                                'Jakarta',
                                'muhalialbair787@gmail.com',
								'0856xxxxxxxx',
                                'ali.jpg');