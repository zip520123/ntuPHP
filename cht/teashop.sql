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

-- 導出  表 teashop.customs 結構
CREATE TABLE IF NOT EXISTS `customs` (
  `CustomId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomPwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomBirth` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1990-01-01',
  `CustomJob` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '學生',
  `CustomEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomVIP` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'while' COMMENT 'while: 普通會員 ; green: 專業會員 ; gold: 黃金會員',
  PRIMARY KEY (`CustomId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='客戶資料表';

-- 正在導出表  teashop.customs 的資料：~10 rows (大約)
DELETE FROM `customs`;
/*!40000 ALTER TABLE `customs` DISABLE KEYS */;
INSERT INTO `customs` (`CustomId`, `CustomName`, `CustomPwd`, `CustomBirth`, `CustomJob`, `CustomEmail`, `CustomVIP`) VALUES
	('ai5566', '艾佛森', 'ai5566', '1985-04-03', '運動員', 'ai5566@yahoo.com.tw', 'while'),
	('dufu4567', '杜甫', 'dufu4567', '1997-03-04', '詩聖', 'dufu4567@hotmail.com', 'green'),
	('linux670', 'Linus Torvalds', 'linux670', '1975-02-03', '工程師', 'linux670@yahoo.com.tw', 'while'),
	('lu9770', '陸羽', 'lu9770', '733-05-09', '茶仙', 'lu9770@hotmail', 'gold'),
	('lufa730', '蒙其.D.魯夫', 'lufa730', '1991-05-06', '船長', 'lufa730@hotmail.com', 'while'),
	('ming775', '陶淵明', 'ming775', '2001-08-14', '農夫', 'ming775@gmail.com', 'green'),
	('mysql281', '香吉士', 'mysql281', '1992-04-09', '廚師', 'mysql281@yahoo.com.tw', 'while'),
	('su1234', '蘇軾', 'su1234', '855-03-04', '詩人', 'su1234@gmail.com', 'while'),
	('ttn2345', '白起', 'ttn2345', '1980-07-05', '軍人', 'ttn2345@gmail.com', 'gold'),
	('while123', '李白', 'while123', '701-01-01', '詩人', 'while123@yahoo.com.tw', 'while');
/*!40000 ALTER TABLE `customs` ENABLE KEYS */;

-- 導出  表 teashop.order 結構
CREATE TABLE IF NOT EXISTS `order` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `productId` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `productName` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `customId` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `customName` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `totalPrice` double NOT NULL DEFAULT '150',
  `orderType` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '茶葉',
  `orderCount` int(11) NOT NULL DEFAULT '1',
  `orderDate` varchar(12) COLLATE utf8_unicode_ci DEFAULT '2014-01-01',
  PRIMARY KEY (`orderId`),
  KEY `FK_order_customs_Id` (`customId`),
  CONSTRAINT `FK_order_customs_Id` FOREIGN KEY (`customId`) REFERENCES `customs` (`CustomId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='客戶的訂單資料';

-- 正在導出表  teashop.order 的資料：~9 rows (大約)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`orderId`, `productId`, `productName`, `customId`, `customName`, `totalPrice`, `orderType`, `orderCount`, `orderDate`) VALUES
	(1, '1', '老黑普洱', 'su1234', '蘇軾', 7960, '茶葉', 4, '2014-01-01'),
	(2, '5', '早春二月', 'su1234', '蘇軾', 2000, '茶葉', 2, '2014-01-01'),
	(4, 'A1002', '紫砂壺', 'su1234', '蘇軾', 22000, '茶具', 1, '2014-01-01'),
	(5, 'H1120', '雞翅木茶盤', 'su1234', '蘇軾', 8800, '茶具', 1, '2014-01-01'),
	(6, 'A1002', '紫砂壺', 'lu9770', '陸羽', 22000, '茶具', 1, '2017-05-01'),
	(7, '2', '老寨普洱', 'lu9770', '陸羽', 6900, '茶葉', 3, '2017-05-02'),
	(8, '1', '老黑普洱', 'lu9770', '陸羽', 19900, '茶葉', 10, '2017-05-02'),
	(9, '7', '鐵觀音', 'lu9770', '陸羽', 6000, '茶葉', 5, '2017-05-02'),
	(10, '8', '龍井', 'lu9770', '陸羽', 4500, '茶葉', 5, '2017-05-02');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- 導出  表 teashop.tea 結構
CREATE TABLE IF NOT EXISTS `tea` (
  `teaId` int(11) NOT NULL AUTO_INCREMENT,
  `teaName` varchar(15) NOT NULL,
  `teaYear` varchar(10) NOT NULL,
  `teaPrice` double NOT NULL DEFAULT '120',
  `teaLocation` varchar(50) NOT NULL DEFAULT 'Taiwan',
  `teaType` varchar(50) NOT NULL DEFAULT '散裝',
  `teaCompany` varchar(50) NOT NULL,
  `teaRipening` varchar(15) NOT NULL DEFAULT 'unfermented',
  `teaSeason` varchar(10) NOT NULL DEFAULT 'old',
  PRIMARY KEY (`teaId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='茶葉資料';

-- 正在導出表  teashop.tea 的資料：~10 rows (大約)
DELETE FROM `tea`;
/*!40000 ALTER TABLE `tea` DISABLE KEYS */;
INSERT INTO `tea` (`teaId`, `teaName`, `teaYear`, `teaPrice`, `teaLocation`, `teaType`, `teaCompany`, `teaRipening`, `teaSeason`) VALUES
	(1, '老黑普洱', '400', 1900, '雲南', '茶餅', '恆福', 'unfermented', 'old'),
	(2, '老寨普洱', '150', 1600, '雲南', '茶餅', '恆福', 'unfermented', 'old'),
	(3, '普洱茶包', '0', 120, '雲南', '茶包', '茶道', 'unfermented', 'old'),
	(4, '元亨利貞', '0', 1000, '雲南', '茶餅', '恆福', 'fermented', 'old'),
	(5, '早春二月', '0', 1000, '雲南', '茶餅', '恆福', 'fermented', 'spring'),
	(6, '高山烏龍', '0', 700, '台灣南投', '散裝', '高山茶', 'midfermented', 'old'),
	(7, '鐵觀音', '0', 1500, '台灣南投', '散裝', '樂菁', 'fermented', 'old'),
	(8, '龍井', '0', 900, '台灣苗栗', '散裝', '龍井', 'midfermented', 'summer'),
	(9, '大吉嶺紅茶', '0', 120, '印度大吉嶺', '茶磚', '吉嶺', 'unfermented', 'winter'),
	(10, '斯里蘭卡紅茶', '0', 120, '斯里蘭卡', '散裝', '里蘭', 'unfermented', 'winter');
/*!40000 ALTER TABLE `tea` ENABLE KEYS */;

-- 導出  表 teashop.teacomment 結構
CREATE TABLE IF NOT EXISTS `teacomment` (
  `commentNo` int(11) NOT NULL AUTO_INCREMENT,
  `teaName` int(11) NOT NULL DEFAULT '0',
  `customId` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `commentDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2017-01-01',
  `commentMessage` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`commentNo`),
  KEY `constrainTea` (`teaName`),
  KEY `constrainCustom` (`customId`),
  CONSTRAINT `constrainCustom` FOREIGN KEY (`customId`) REFERENCES `customs` (`CustomId`),
  CONSTRAINT `constrainTea` FOREIGN KEY (`teaName`) REFERENCES `tea` (`teaId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='顧客對茶葉的評論';

-- 正在導出表  teashop.teacomment 的資料：~10 rows (大約)
DELETE FROM `teacomment`;
/*!40000 ALTER TABLE `teacomment` DISABLE KEYS */;
INSERT INTO `teacomment` (`commentNo`, `teaName`, `customId`, `commentDate`, `commentMessage`) VALUES
	(1, 7, 'while123', '2017-05-07', '李白《答族侄僧中孚贈玉泉仙人掌茶並序》\r\n\r\n常聞玉泉山，山洞多乳窟。\r\n\r\n仙鼠如白鴉，倒懸清溪月。\r\n\r\n茗生此中石，玉泉流不歇。\r\n\r\n根柯灑芳津，采服潤肌骨。\r\n\r\n叢老卷綠葉，枝枝相接連。\r\n\r\n曝成仙人掌，似拍洪崖肩。\r\n\r\n舉世未見之，其名定誰傳。\r\n\r\n宗英乃禪伯，投贈有佳篇。\r\n\r\n清鏡燭無鹽，顧慚西子妍。\r\n\r\n朝坐有餘興，長吟播諸天。'),
	(2, 7, 'dufu4567', '2017-01-01', '杜甫《重過何氏五首(之三)》\r\n\r\n落日平台上，春風啜茗時。\r\n\r\n石闌斜點筆，桐葉坐題詩。\r\n\r\n翡翠鳴衣桁，晴蜓立釣絲。\r\n\r\n自逢今日興，來往亦無期。'),
	(3, 7, 'ttn2345', '2017-05-08', '鐵觀音 七泡有餘香'),
	(4, 1, 'mysql281', '2017-05-07', '老黑普洱茶，可入菜適合煮雞湯'),
	(6, 9, 'ai5566', '2017-05-01', '打球前喝一杯紅茶'),
	(8, 4, 'su1234', '2016-05-04', '捲簾\r\n空花落盡酒傾缸，日上山融雪漲江，\r\n紅焙淺甌新火活，龍團小碾鬥晴窗。'),
	(9, 4, 'su1234', '2017-08-08', '捲簾\r\n酡顏玉碗捧纖纖，亂點餘花唾碧衫，\r\n歌咽水凝雲靜院，夢驚松雪落空岩。'),
	(10, 5, 'su1234', '2017-05-05', '窗晴鬥碾小團龍﹐活火新甌淺焙紅。\r\n江漲雪融山上日﹐缸傾酒盡落花空。'),
	(11, 5, 'su1234', '2017-08-09', '岩空落雪松驚夢﹐院靜雲凝水咽歌。\r\n衫碧唾花餘點亂﹐纖纖捧碗玉顏酡。'),
	(12, 1, 'linux670', '2017-01-01', '老黑陪伴我寫程式的茶，渾厚溫順的口感是靈感的泉源');
/*!40000 ALTER TABLE `teacomment` ENABLE KEYS */;

-- 導出  表 teashop.teatool 結構
CREATE TABLE IF NOT EXISTS `teatool` (
  `tealToolNo` int(11) NOT NULL AUTO_INCREMENT,
  `toolSign` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'A3658',
  `toolName` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '紫砂壺',
  `toolCompany` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '冷萃',
  `toolPrice` double NOT NULL,
  `toolFactoryDate` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2017-01-01',
  `toolOrigin` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '台灣',
  PRIMARY KEY (`tealToolNo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='茶具';

-- 正在導出表  teashop.teatool 的資料：~6 rows (大約)
DELETE FROM `teatool`;
/*!40000 ALTER TABLE `teatool` DISABLE KEYS */;
INSERT INTO `teatool` (`tealToolNo`, `toolSign`, `toolName`, `toolCompany`, `toolPrice`, `toolFactoryDate`, `toolOrigin`) VALUES
	(1, 'A3568', '紫砂壺', '冷萃', 7000, '2016-04-03', '台灣屏東'),
	(2, 'A1002', '紫砂壺', '淳樓', 22000, '2016-09-06', '大陸江蘇'),
	(3, 'B3658', '朱砂壺', '淳樓', 5000, '2017-02-14', '香港'),
	(4, 'C3658', '黃泥壺', '棕湯', 2000, '2017-04-05', '四川'),
	(5, 'H1120', '雞翅木茶盤', '冷萃', 8800, '2017-03-07', '大陸貴州'),
	(6, 'T3825', '茶匙', '棕湯', 20, '2017-01-01', '台灣');
/*!40000 ALTER TABLE `teatool` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
