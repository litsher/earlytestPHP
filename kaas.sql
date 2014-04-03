-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van personeelsvereniging wordt geschreven
CREATE DATABASE IF NOT EXISTS `personeelsvereniging` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `personeelsvereniging`;


-- Structuur van  tabel personeelsvereniging.leden wordt geschreven
CREATE TABLE IF NOT EXISTS `leden` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel personeelsvereniging.leden: 6 rows
/*!40000 ALTER TABLE `leden` DISABLE KEYS */;
INSERT INTO `leden` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
	(1, 'Quist Daggert', 'quistd@gmail.com', '099-8362843', 'Zijstraat 7\r\n9538 TQ Rottermeer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(2, 'Scarabold Xeus', 'scar@xeus.net', '099-5738539', NULL, '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(3, 'Mildorn Ecklar', 'hero835@kvatch.com', NULL, 'Nevensteeg 14b\r\n9884 LL Bikkeldrecht', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(4, 'Ayden Wellinck', 'awellinck@abbyss.com', '099-5844521', 'Grote Straat 127\r\n9903 VC Merendam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(5, 'Izrazil Maru', 'zrzrzr@gmail.com', NULL, 'Bomenlaan 12\r\n9317 PZ Warmerschans', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(6, 'kees', 'kees@kees.com', NULL, NULL, '64ee4e7370e7b8397233ac64db1a7307a4f26cff');
/*!40000 ALTER TABLE `leden` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
personeelsverenigingleden