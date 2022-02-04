-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 04 日 07:45
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `record_db`
--

CREATE TABLE `record_db` (
  `id` int(8) NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `kaigi_id` varchar(12) NOT NULL,
  `team` text NOT NULL,
  `name` varchar(16) NOT NULL,
  `gidai` text NOT NULL,
  `url` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `record_db`
--

INSERT INTO `record_db` (`id`, `date`, `time`, `kaigi_id`, `team`, `name`, `gidai`, `url`) VALUES
(15, '2022-02-04', '03:50', '999', '料亭事業部', '杉目', 'メニュー開発', 'https://docs.google.'),
(16, '2022-02-04', '04:17', 'k1234', '管理部', '鈴木もこみち', 'シフト管理について', 'https://docs.google.com/document/d/1OxRiW-0X0zy5qRiE4ylEp8n0s4JwQf3oKYfbSTOew6I/edit'),
(17, '2022-02-04', '05:04', '999', '料亭事業部', '杉目', 'gggg', 'https://docs.google.com/document/d/1nEfCkZE8aCFlKhUoznz-iNB_pUr4qG6iiZpuTCPXYiQ/edit');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `record_db`
--
ALTER TABLE `record_db`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `record_db`
--
ALTER TABLE `record_db`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
