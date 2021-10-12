# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.2.2 (MySQL 5.0.92-log)
# Database: daily_coffeine_intake
# Generation Time: 2021-10-12 22:32:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table drinks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `drinks`;

CREATE TABLE `drinks` (
  `id` int(3) unsigned NOT NULL auto_increment,
  `drink_name` char(200) NOT NULL default '',
  `coffeine_in_mg` double NOT NULL,
  `serving` int(3) NOT NULL,
  `intake_limit` int(3) NOT NULL default '0',
  `serving_size` int(7) NOT NULL default '0',
  `serving_unit` enum('na','oz','fl oz') NOT NULL default 'na',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `drinks` WRITE;
/*!40000 ALTER TABLE `drinks` DISABLE KEYS */;

INSERT INTO `drinks` (`id`, `drink_name`, `coffeine_in_mg`, `serving`, `intake_limit`, `serving_size`, `serving_unit`)
VALUES
	(1,'Monster Ultra Sunrise',75,1,2,0,'na'),
	(2,'Black Coffee',95,1,0,8,'oz'),
	(3,'Americano',77,1,0,0,'na'),
	(4,'Sugar free NOS',130,1,2,0,'na'),
	(5,'5 Hour Energy',200,1,0,2,'fl oz');

/*!40000 ALTER TABLE `drinks` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
