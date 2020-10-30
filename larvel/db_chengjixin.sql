-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 �?09 �?20 �?11:15
-- 服务器版本: 5.5.53
-- PHP 版本: 7.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_chengjixin`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_info`
--

CREATE TABLE IF NOT EXISTS `tb_info` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `class` varchar(20) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tb_info`
--

INSERT INTO `tb_info` (`id`, `name`, `sex`, `class`, `hobby`) VALUES
(1, '刘备', 'male', '一班', '足球,篮球,排球'),
(2, '关羽', 'female', '一班', '足球,排球'),
(3, '张飞', 'male', '二班', '足球,排球'),
(4, '赵云', 'female', '二班', '篮球'),
(5, '马超', 'male', '一班', '排球'),
(6, '黄忠', 'female', '三班', '足球,篮球'),
(7, '魏延', 'male', '一班', '足球,篮球,排球'),
(8, '关平', 'male', '一班', '足球,排球'),
(9, '关兴', 'male', '二班', '足球,排球'),
(13, '张苞', 'female', '三班', '足球,篮球,排球'),
(15, '夏侯霸', 'male', '一班', '篮球,排球'),
(16, '孙坚', 'male', '一班', '篮球,排球'),
(17, '孙策', 'male', '一班', '足球,排球'),
(18, 'liuzhang', 'male', '四班', '足球,排球');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `user`, `password`) VALUES
(1, 'liubei', '123456'),
(2, 'guanyu', 'abcdef');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
