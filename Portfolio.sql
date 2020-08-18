-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-18 04:01:22
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `h2_web`
--

-- --------------------------------------------------------

--
-- 資料表結構 `guest`
--

CREATE TABLE `guest` (
  `guestId` int(11) NOT NULL,
  `guestName` varchar(10) DEFAULT NULL,
  `guestContent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolioId` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`portfolioId`, `name`, `picture`, `category`) VALUES
(1, '歐登LOGO設計', '2D_01.jpg', '2D'),
(2, '傢俱新品上市海報', '2D_02.jpg', '2D'),
(3, '傢俱新品上市海報', '2D_03.jpg', '2D'),
(4, '傢俱新品上市海報', '2D_04.jpg', '2D'),
(5, '傢俱新品上市海報', '2D_05.jpg', '2D'),
(6, '傢俱新品上市海報', '2D_06.jpg', '2D'),
(7, '傢俱新品上市海報', '2D_07.jpg', '2D'),
(8, '傢俱新品上市海報', '2D_08.jpg', '2D'),
(9, '傢俱新品上市海報', '2D_09.jpg', '2D'),
(10, '傢俱新品上市海報', '2D_10.jpg', '2D'),
(11, '傢俱新品上市海報', '2D_11.jpg', '2D'),
(12, '傢俱新品上市海報', '2D_12.jpg', '2D'),
(13, '傢俱新品上市海報', '2D_13.jpg', '2D'),
(14, '傢俱新品上市海報', '2D_14.jpg', '2D'),
(15, '傢俱新品上市海報', '2D_15.jpg', '2D'),
(16, '傢俱新品上市海報', '2D_16.jpg', '2D'),
(17, '傢俱新品上市海報', '2D_17.jpg', '2D'),
(18, '傢俱新品上市海報', '2D_18.jpg', '2D'),
(19, '傢俱新品上市海報', '2D_19.jpg', '2D'),
(20, '傢俱新品上市海報', '2D_20.jpg', '2D'),
(21, '傢俱新品上市海報', '2D_21.jpg', '2D'),
(22, '傢俱新品上市海報', '2D_22.jpg', '2D'),
(23, '傢俱新品上市海報', '2D_23.jpg', '2D'),
(24, '傢俱新品上市海報', '2D_24.jpg', '2D'),
(25, '傢俱新品上市海報', '2D_25.jpg', '2D'),
(26, '傢俱新品上市海報', '2D_26.jpg', '2D'),
(27, '傢俱新品上市海報', '2D_27.jpg', '2D'),
(28, '傢俱新品上市海報', '2D_28.jpg', '2D'),
(29, '傢俱新品上市海報', '2D_29.jpg', '2D'),
(30, '傢俱新品上市海報', '2D_30.jpg', '2D'),
(31, '傢俱新品上市海報', '2D_31.jpg', '2D'),
(32, '傢俱新品上市海報', '2D_32.jpg', '2D'),
(33, '傢俱新品上市海報', '2D_33.jpg', '2D'),
(34, '傢俱新品上市海報', '2D_34.jpg', '2D'),
(35, '傢俱新品上市海報', '2D_35.jpg', '2D'),
(36, '傢俱新品上市海報', '2D_36.jpg', '2D'),
(37, '傢俱新品上市海報', '2D_37.jpg', '2D'),
(38, '傢俱新品上市海報', '2D_38.jpg', '2D'),
(39, '傢俱新品上市海報', '2D_39.jpg', '2D'),
(40, '傢俱新品上市海報', '2D_40.jpg', '2D'),
(41, '造型耳機', '3D_01.jpg', '3D'),
(42, '吹風機', '3D_02.jpg', '3D'),
(43, '茶具', '3D_03.jpg', '3D'),
(44, '青鳥咖啡機3D', '3D_04.jpg', '3D'),
(45, '手工具', '3D&product_01.jpg', '3D&PD'),
(46, 'Bath gel x Jar', '3D&product_02.jpg', '3D&PD'),
(47, 'Bluebird 青鳥咖啡機', '3D&product_03.jpg', '3D&PD'),
(48, 'Easy Wear', '3D&product_04.jpg', '3D&PD'),
(49, 'Easy take for box cutter', '3D&product_05.jpg', '3D&PD'),
(50, 'Solar street light', '3D&product_06.jpg', '3D&PD'),
(51, '智慧把手熨斗', '3D&product_07.jpg', '3D&PD'),
(52, 'Timeline夜燈', '3D&product_08.jpg', '3D&PD'),
(53, '壓蒜器', '3D&product_09.jpg', '3D&PD'),
(54, '個人藏書章', '3D&product_10.jpg', '3D&PD'),
(55, '錦上添花-西式茶具設計', 'product_01.jpg', 'productdesign'),
(56, '檸檬包裝設計', 'product_02.jpg', 'productdesign'),
(57, '面膜包裝設計', 'product_03.jpg', 'productdesign'),
(58, 'LISSIL莉絲爾-UI設計', 'others_1.jpg', 'others');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `skillId` int(11) NOT NULL,
  `skillName` text DEFAULT NULL,
  `skillpicture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`skillId`, `skillName`, `skillpicture`) VALUES
(1, 'ADOBE Illustrator', 'AI.png'),
(2, 'ADOBE Photoshop', 'PS.png'),
(3, 'ADOBE XD', 'XD.png'),
(4, 'AUTOCAD', 'Cad.png'),
(5, 'RHINO', 'rhino.png'),
(6, 'ProE', 'proe.png'),
(7, 'keyshot', 'keyshot.png'),
(8, 'VSCode', 'vscode.png'),
(9, 'HTML', 'HTML5.png'),
(10, 'CSS', 'CSS3.png'),
(11, 'JavaScript', 'JS.png'),
(12, 'Bootstrap', 'Bootstrap4.png'),
(13, 'MySQL', 'MySQL.png'),
(14, 'Jquery', 'jquery.png'),
(15, 'PHP', 'php.png');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guestId`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolioId`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skillId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `guest`
--
ALTER TABLE `guest`
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `skillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
