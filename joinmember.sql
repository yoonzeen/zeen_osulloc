-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 18-07-17 11:44
-- 서버 버전: 5.7.22
-- PHP 버전: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `jooa`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `joinmember`
--

CREATE TABLE `joinmember` (
  `no` int(11) NOT NULL,
  `userid` varchar(15) NOT NULL,
  `userpw` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userbirth` int(11) NOT NULL,
  `useremailid` varchar(30) NOT NULL,
  `userphone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `joinmember`
--

INSERT INTO `joinmember` (`no`, `userid`, `userpw`, `username`, `userbirth`, `useremailid`, `userphone`) VALUES
(1, 'zeen', '1234', '지은', 19930926, 'yjieuno_o', '010-1111-1111'),
(2, 'jieun', '1234', '지으니', 19930926, 'yji', '010-1111-1111'),
(3, 'DDBD', '12345678', '디디비디', 19920322, 'DDBD', '010-123-1004'),
(4, '윤지은바보', 'qkqhwldm', '호날두', 19220901, 'snkmsnkm', '010-3333-3333'),
(5, '녹조라떼', 'dlaudqkr', '이명박', 19320404, '4river         ', '010-2222-2222'),
(6, '산들', 'sandeul', '이정환', 19930320, 'sandoriganatadadda', '010-112-1112');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `joinmember`
--
ALTER TABLE `joinmember`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `joinmember`
--
ALTER TABLE `joinmember`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
