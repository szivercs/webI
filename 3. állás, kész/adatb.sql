CREATE DATABASE `gyakorlat7`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `gyakorlat7`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csaladi_nev`,`uto_nev`,`bejelentkezes`,`jelszo`) VALUES 
 (1,'asd','asd','asd',sha1('asd'));
 
 CREATE TABLE `uzenetek` (
  `nev` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `uzenet` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;