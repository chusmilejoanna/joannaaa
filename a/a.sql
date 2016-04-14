-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-04-14 04:14:15
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `joanna`
--
CREATE DATABASE IF NOT EXISTS `joanna` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `joanna`;

-- --------------------------------------------------------

--
-- 資料表結構 `midtern`
--

CREATE TABLE `midtern` (
  `ID` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `E-Mail` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `登入次數` int(10) NOT NULL,
  `上次登入時間` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `no` int(11) NOT NULL,
  `pwd` int(11) NOT NULL,
  `habit` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
