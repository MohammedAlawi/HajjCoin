-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5280
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hajj_coin
DROP DATABASE IF EXISTS `hajj_coin`;
CREATE DATABASE IF NOT EXISTS `hajj_coin` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hajj_coin`;

-- Dumping structure for table hajj_coin.cards
DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cardNumber` int(11) NOT NULL,
  `cardDate` date NOT NULL,
  `balanceCard` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table hajj_coin.cards: ~0 rows (approximately)
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;

-- Dumping structure for table hajj_coin.contact
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table hajj_coin.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table hajj_coin.people
DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PID` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `from` varchar(50) NOT NULL,
  `dateBirth` date NOT NULL,
  `dateIssue` date NOT NULL,
  `hamlaName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table hajj_coin.people: ~3 rows (approximately)
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` (`id`, `PID`, `name`, `from`, `dateBirth`, `dateIssue`, `hamlaName`) VALUES
	(1, 'A11878841', 'Mohammed Alawy', 'Egypt', '1990-01-01', '2013-08-02', 'حملة التيسير'),
	(2, 'A88790114', 'Khaled Ali', 'UAE', '1980-04-06', '2017-08-02', 'حملة الخير'),
	(3, 'A34413451', 'Saad khaled', 'Oman', '1985-05-07', '2018-01-01', 'حملة الفجر');
/*!40000 ALTER TABLE `people` ENABLE KEYS */;

-- Dumping structure for table hajj_coin.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PID` varchar(50) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `dateRegister` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table hajj_coin.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `PID`, `fullName`, `password`, `dateRegister`, `email`, `type`) VALUES
	(5, 'A34413451', 'Saad khaled', '123123', '2018-08-03', 'mohammed@mohammed.com', 'personal');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
