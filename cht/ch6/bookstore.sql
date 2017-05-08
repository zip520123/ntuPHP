-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 服務器版本:                        10.1.19-MariaDB - mariadb.org binary distribution
-- 服務器操作系統:                      Win32
-- HeidiSQL 版本:                  9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 導出 bookstore 的資料庫結構
DROP DATABASE IF EXISTS `bookstore`;
CREATE DATABASE IF NOT EXISTS `bookstore` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bookstore`;

-- 導出  表 bookstore.books 結構
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `booksNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `booksName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `booksAuthor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `booksPrice` int(10) unsigned NOT NULL,
  `booksPages` int(10) unsigned NOT NULL,
  `booksPublish` date NOT NULL,
  PRIMARY KEY (`booksNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在導出表  bookstore.books 的資料：6 rows
DELETE FROM `books`;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`booksNo`, `booksName`, `booksAuthor`, `booksPrice`, `booksPages`, `booksPublish`) VALUES
	('A112', '蛤蠣波特 ', 'Allan', 690, 400, '2011-09-15'),
	('B334', '一粥刊', 'Bill', 199, 250, '2011-01-08'),
	('C556', '天龍叭噗', 'Cindy', 1299, 980, '2011-02-06'),
	('D778', '絕代霜蕉', 'David', 880, 605, '2011-08-20'),
	('E990', '還豬格格', 'Evelyn', 590, 475, '2011-03-30'),
	('F012', '我不是焦尼炸', 'Frank', 990, 332, '2010-05-30');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- 導出  表 bookstore.customers 結構
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customersNo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customersName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customersJob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customersNo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在導出表  bookstore.customers 的資料：8 rows
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`customersNo`, `customersName`, `customersJob`) VALUES
	(1, '螞鷹酒', '學生'),
	(2, '沉水匾', '上班族'),
	(3, '菜櫻紋', '家管'),
	(4, '消萬嘗', '工程師'),
	(5, '無蹲益', '學生'),
	(6, '酥真鯧', '保母'),
	(7, '洩常停', '學生'),
	(8, '沉橘', '上班族');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- 導出  表 bookstore.orders 結構
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ordersNo` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `ordersBook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordersCustomer` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ordersNo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在導出表  bookstore.orders 的資料：7 rows
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`ordersNo`, `ordersBook`, `ordersCustomer`) VALUES
	(0000000001, 'A112', 8),
	(0000000002, 'F012', 5),
	(0000000003, 'F012', 3),
	(0000000004, 'D778', 3),
	(0000000005, 'A112', 1),
	(0000000006, 'A112', 2),
	(0000000007, 'B334', 3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
