-- --------------------------------------------------------
-- 主機:                           192.168.152.129
-- 服務器版本:                        5.5.52-MariaDB - MariaDB Server
-- 服務器操作系統:                      Linux
-- HeidiSQL 版本:                  9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 導出  表 fifa.teamDetails 結構
CREATE TABLE IF NOT EXISTS `teamDetails` (
  `fifaCode` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `fifaRanking` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `association` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `headCoach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `captain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flagUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logoUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`fifaCode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在導出表  fifa.teamDetails 的資料：0 rows
DELETE FROM `teamDetails`;
/*!40000 ALTER TABLE `teamDetails` DISABLE KEYS */;
INSERT INTO `teamDetails` (`fifaCode`, `fifaRanking`, `name`, `nickname`, `association`, `headCoach`, `captain`, `flagUrl`, `logoUrl`) VALUES
	('ESP', 1, 'Spain', 'La Furia Roja (The Red Fury)', 'Real Federación Española de Fútbol (RFEF)', 'Vicente del Bosque', 'Iker Casillas', 'http://upload.wikimedia.org/wikipedia/en/9/9a/Flag_of_Spain.svg', 'https://upload.wikimedia.org/wikipedia/en/3/31/Spain_National_Football_Team_badge.png'),
	('GER', 2, 'Germany', 'Nationalmannschaft (national team)', 'German Football Association', 'Joachim Löw', 'Philipp Lahm', 'http://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg', 'http://upload.wikimedia.org/wikipedia/en/thumb/e/e3/DFBEagle.svg/442px-DFBEagle.svg.png'),
	('POR', 3, 'Portugal', 'A Selecção', 'Federação Portuguesa de Futebol', 'Paulo Bento', 'Cristiano Ronaldo', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg', 'http://upload.wikimedia.org/wikipedia/en/thumb/5/5f/Portuguese_Football_Federation.svg/424px-Portuguese_Football_Federation.svg.png'),
	('COL', 4, 'Colombia', 'Los Cafeteros (The Coffee Growers)', 'Federación Colombiana de Fútbol (FCF)', 'José Pékerman', 'Mario Yepes', 'http://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg', 'http://upload.wikimedia.org/wikipedia/en/thumb/6/61/Federacion_Colombiana_de_Futbol_logo.svg/302px-Federacion_Colombiana_de_Futbol_logo.svg.png'),
	('URU', 5, 'Uruguay', 'Los Charrúas', 'Asociación Uruguaya de Fútbol (AUF)', 'Óscar Tabárez', 'Diego Lugano', 'http://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Uruguay.svg', 'https://upload.wikimedia.org/wikipedia/en/9/9e/Uruguayan_Football_Association_logo.png');
/*!40000 ALTER TABLE `teamDetails` ENABLE KEYS */;

-- 導出  表 fifa.user 結構
CREATE TABLE IF NOT EXISTS `user` (
  `userId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在導出表  fifa.user 的資料：~0 rows (大約)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`userId`, `userPwd`, `userName`) VALUES
	('admin', 'admin', '使用者'),
	('administrator', '758881ac6dea835caeeb181fbc46b4f902b1fd582d6b1475e2673dd24628eb10', 'windows超級使用者'),
	('ri3567', '8880b22ff3af56a52f2911bf84bd4055d5f5e76002e4c61d20eeee1c0178d8bf', '艾佛森'),
	('root', '836893262d99dc4b1a4ab487283aedc1eb827794f5d98e93a33d940b038f4794', 'linux超級使用者'),
	('student', '264c8c381bf16c982a4e59b0dd4c6f7808c51a05f64c35db42cc78a2a72875bb', '學生');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
