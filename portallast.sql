-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 26, 2010 at 02:12 PM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `portal`
-- 
CREATE DATABASE `portal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE portal;

-- --------------------------------------------------------

-- 
-- Table structure for table `ebook_categories`
-- 

CREATE TABLE `ebook_categories` (
  `category` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `ebook_categories`
-- 

INSERT INTO `ebook_categories` VALUES ('History');
INSERT INTO `ebook_categories` VALUES ('Programming');

-- --------------------------------------------------------

-- 
-- Table structure for table `ebooks`
-- 

CREATE TABLE `ebooks` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `size` varchar(12) NOT NULL default '',
  `type` varchar(30) NOT NULL default '',
  `summary` longtext NOT NULL,
  `category` varchar(30) NOT NULL default '',
  `Required_software` varchar(30) NOT NULL default '',
  `image_path` varchar(200) NOT NULL default '',
  `ebook_path` varchar(200) NOT NULL default '',
  `submit_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `ebooks`
-- 

INSERT INTO `ebooks` VALUES (1, 'wer ewr', '', '11 KB', '', 'dsaf ', 'Programming', 'PDF Reader', '', '5e18b53804c5a18.jpg', '2010-07-26');
INSERT INTO `ebooks` VALUES (2, 'e2', '', '15 KB', '', '', 'History', 'PDF Reader', '', '6ab5309c61d84b1.jpg', '2010-07-26');
INSERT INTO `ebooks` VALUES (3, 'e3d', '', '12 KB', '', 'asdf dsaf sadf sdaf dasf dafs \r\n\r\nsadf\r\ndsa\r\n f\r\nsda\r\nf\r\n sd\r\naf\r\n \r\nsad\r\nf\r\n adsfadaf adf ', 'History', 'PDF Reader', '26a31aa56d3ea83.jpg', '9d6f4d8eb6fb9a3.jpg', '2010-07-26');
INSERT INTO `ebooks` VALUES (4, 'kklklmnn', '', '7 MB', '', '', 'History', 'PDF Reader', '', '02_-_Track.MP3', '2010-07-26');
INSERT INTO `ebooks` VALUES (5, 'jjj', '', '11 KB', '', '', 'History', 'PDF Reader', '35e7132c1742eaa.jpg', '35e7132c1742eaa.jpg', '2010-07-26');
INSERT INTO `ebooks` VALUES (6, 'jj', '', '11 KB', '', '', 'History', 'PDF Reader', '26a31aa56d3ea83.jpg', '26a31aa56d3ea83.jpg', '2010-07-26');
INSERT INTO `ebooks` VALUES (7, 'jjkjklj', '', '11 KB', '', '', 'Programming', 'PDF Reader', '35e7132c1742eaa.jpg', 'bc4647bddd46ee5.jpg', '2010-07-26');

-- --------------------------------------------------------

-- 
-- Table structure for table `main_menu`
-- 

CREATE TABLE `main_menu` (
  `MenuName` varchar(30) NOT NULL default '',
  `SubCategoryTable` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`MenuName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `main_menu`
-- 

INSERT INTO `main_menu` VALUES ('Movies', 'movies_categories');
INSERT INTO `main_menu` VALUES ('Ebooks', 'ebook_categories');
INSERT INTO `main_menu` VALUES ('Music', 'music_categories');
INSERT INTO `main_menu` VALUES ('Programs', 'programs_categories');

-- --------------------------------------------------------

-- 
-- Table structure for table `movies`
-- 

CREATE TABLE `movies` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `size` varchar(12) NOT NULL default '',
  `type` varchar(30) NOT NULL default '',
  `summary` longtext NOT NULL,
  `category` varchar(30) NOT NULL default '',
  `Required_software` varchar(30) NOT NULL default '',
  `image_path` varchar(200) NOT NULL default '',
  `movie_path` varchar(200) NOT NULL default '',
  `submit_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- 
-- Dumping data for table `movies`
-- 

INSERT INTO `movies` VALUES (2, 'second movies', 'adfads sdaf', '1 MB', 'dasf', 'adsfdsa fdsa f', 'Arabic', 'DVD Player', '9d6f4d8eb6fb9a3.jpg', '1a0d5914f844701.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (3, 'Third movie Third mo', '', '1 MB', '', '', 'Action', 'DVD Player', '1192007d993f13f.jpg', 'cd42a075f19bf80.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (4, 'Fourth movie', '555443', '1 MB', 'dskfja', 'dsaf jkdsa ', 'Action', 'DVD Player', '8cae5112c2129ad.jpg', '5e18b53804c5a18.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (5, 'kkdsf', 'dsaf dasf f', '1 MB', 'sdewr', 'asdfdsa fdsa ', 'Kurdish', 'DVD Player', '26a31aa56d3ea83.jpg', '8cae5112c2129ad.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (6, 'booos', 'adf adf ad', '1 MB', '', '', 'Action', 'DVD Player', '1d57ffcd59e934c.jpg', '9d6f4d8eb6fb9a3.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (7, 'fittg', '', '1 MB', '', '', 'Action', 'DVD Player', 'bc4647bddd46ee5.jpg', '5e18b53804c5a18.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (8, 'title 1', '', '5 MB', '', '', 'Action', 'DVD Player', '6ab5309c61d84b1.jpg', '4.mp3', '0000-00-00');
INSERT INTO `movies` VALUES (9, 'kurdish 3', 'kk', '8 MB', '', '', 'Kurdish', 'DVD Player', '5e18b53804c5a18.jpg', '6.mp3', '0000-00-00');
INSERT INTO `movies` VALUES (10, 'kurdish4', 'dsf sdf', '1 MB', '', 'asdf df dsaf fd ', 'Kurdish', 'DVD Player', '7fcbff32ba6970c.jpg', '1d57ffcd59e934c.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (11, 'k5', '', '1 MB', 'dsaf', '', 'Kurdish', 'DVD Player', '26a31aa56d3ea83.jpg', '9d6f4d8eb6fb9a3.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (12, 'k6', '', '1 MB', '', '', 'Kurdish', 'DVD Player', 'bc4647bddd46ee5.jpg', 'bc4647bddd46ee5.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (13, 'k7', '', '1 MB', '', '', 'Kurdish', 'DVD Player', '2aa426c5a3fc9e7.jpg', '6ab5309c61d84b1.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (14, 'k8', '', '1 MB', '', 'dsaf ', 'Kurdish', 'DVD Player', '26a31aa56d3ea83.jpg', '5755e8c5ca1f5e4.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (15, 'k9', '', '1 MB', '', '', 'Kurdish', 'DVD Player', '35e7132c1742eaa.jpg', '8cae5112c2129ad.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (16, 'The Lord of the Rings has been the', 'fdsaf', '1 MB', 'dved', 'The Lord of the Rings has been the subject of extensive analysis of its themes and origins, as have Tolkiens works in general. ', 'Kurdish', 'DVD Player', '2aa426c5a3fc9e7.jpg', '8cae5112c2129ad.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (17, 'ldkslafk', '', '1 MB', '', '', 'Kurdish', 'DVD Player', '', '9d6f4d8eb6fb9a3.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (18, 'Arabic 2', '', '1 MB', '', '', 'Arabic', 'DVD Player', '', '7fcbff32ba6970c.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (19, 'jj', '', '1 MB', '', '', 'Arabic', 'DVD Player', '', '5e18b53804c5a18.jpg', '0000-00-00');
INSERT INTO `movies` VALUES (20, 'eeee', '', '1 MB', '', '', 'Old', 'DVD Player', '', '26a31aa56d3ea83.jpg', '2010-07-26');
INSERT INTO `movies` VALUES (21, 'sadfdasf', '', '1 MB', '', 'sadf', 'Arabic', 'DVD Player', '', '8cae5112c2129ad.jpg', '2010-07-26');
INSERT INTO `movies` VALUES (23, 'ttttt', '', '1 MB', '', '', 'Action', 'DVD Player', '9d6f4d8eb6fb9a3.jpg', '8cae5112c2129ad.jpg', '2010-07-26');
INSERT INTO `movies` VALUES (24, 'adsf dsf', '', '1 MB', '', '', 'Kurdish', 'DVD Player', '', '9d6f4d8eb6fb9a3.jpg', '2010-07-26');
INSERT INTO `movies` VALUES (25, 'kk', '', '5 MB', '', '', 'Action', 'DVD Player', '', '3.mp3', '2010-07-26');

-- --------------------------------------------------------

-- 
-- Table structure for table `movies_categories`
-- 

CREATE TABLE `movies_categories` (
  `category` varchar(40) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `movies_categories`
-- 

INSERT INTO `movies_categories` VALUES ('Action');
INSERT INTO `movies_categories` VALUES ('Kurdish');
INSERT INTO `movies_categories` VALUES ('Arabic');
INSERT INTO `movies_categories` VALUES ('Old');

-- --------------------------------------------------------

-- 
-- Table structure for table `music`
-- 

CREATE TABLE `music` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `artist_name` varchar(40) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `size` varchar(12) NOT NULL default '',
  `type` varchar(30) NOT NULL default '',
  `summary` longtext NOT NULL,
  `category` varchar(30) NOT NULL default '',
  `Required_software` varchar(30) NOT NULL default '',
  `image_path` varchar(200) NOT NULL default '',
  `music_path` varchar(200) NOT NULL default '',
  `submit_date` date NOT NULL default '0000-00-00',
  `release_date` year(4) NOT NULL default '0000',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `music`
-- 

INSERT INTO `music` VALUES (7, 'F2', 'Art', 'Track', '15 KB', 'MP3', 'Thsis is a test \r\nThsis is a test \r\nThsis is a test \r\nThsis is a test \r\nThsis is a test \r\nThsis is a test ', 'Foriegn', 'Media', '35e7132c1742eaa.jpg', '8cae5112c2129ad.jpg', '2010-07-26', 1999);
INSERT INTO `music` VALUES (6, 'F1', 'F1', 'Track', '15 KB', 'mp3', 'Thsis is a test Thsis is a test \r\nThsis is a test \r\nThsis is a test Thsis is a test \r\nThsis is a test \r\nThsis is a test \r\nThsis is a test \r\nThsis is a test ', 'Foriegn', 'Media Player', '35e7132c1742eaa.jpg', '8cae5112c2129ad.jpg', '2010-07-26', 2000);
INSERT INTO `music` VALUES (8, 'F3ee', 'afdsa  fdsa fds', 'Album', '15 KB', 'MP3', 'dasf ', 'Foriegn', 'Media Player', '9d6f4d8eb6fb9a3.jpg', '8cae5112c2129ad.jpg', '2010-07-26', 2001);
INSERT INTO `music` VALUES (9, 'dasdsa', 'dsaf dsaf', 'Album', '15 KB', 'MP3', 'dsa fsda ', 'Foriegn', 'Media Player', '35e7132c1742eaa.jpg', '8cae5112c2129ad.jpg', '2010-07-26', 2000);
INSERT INTO `music` VALUES (10, 'fdsaf', 'dasf', 'Album', '15 KB', 'MP3', 'adsf ', 'Foriegn', 'Media Player', '35e7132c1742eaa.jpg', '6ab5309c61d84b1.jpg', '2010-07-26', 1999);
INSERT INTO `music` VALUES (11, 'kaksdfj l', 'kd', 'Track', '10 KB', 'MP3', 'fdsaf ', 'Kurdish', 'Media Player', '26a31aa56d3ea83.jpg', '7fcbff32ba6970c.jpg', '2010-07-26', 2000);

-- --------------------------------------------------------

-- 
-- Table structure for table `music_categories`
-- 

CREATE TABLE `music_categories` (
  `category` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`category`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `music_categories`
-- 

INSERT INTO `music_categories` VALUES ('Arabic');
INSERT INTO `music_categories` VALUES ('Foriegn');
INSERT INTO `music_categories` VALUES ('Kurdish');

-- --------------------------------------------------------

-- 
-- Table structure for table `programs`
-- 

CREATE TABLE `programs` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `description` varchar(50) NOT NULL default '',
  `size` varchar(12) NOT NULL default '',
  `type` varchar(30) NOT NULL default '',
  `summary` longtext NOT NULL,
  `category` varchar(30) NOT NULL default '',
  `Required_software` varchar(30) NOT NULL default '',
  `image_path` varchar(200) NOT NULL default '',
  `program_path` varchar(200) NOT NULL default '',
  `submit_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `programs`
-- 

INSERT INTO `programs` VALUES (1, 'first program', '2001', '0 KB', '', 'fdasdf ds f\r\ndsf dsa fsda f', 'Utilities', '', '26a31aa56d3ea83.jpg', '8cae5112c2129ad.jpg', '2010-07-25');
INSERT INTO `programs` VALUES (8, 'k', '', '15 KB', '', '', 'Utilities', '', '', '6ab5309c61d84b1.jpg', '2010-07-26');
INSERT INTO `programs` VALUES (7, 'iuiuou', '', '11 KB', '', '', 'Utilities', '', '35e7132c1742eaa.jpg', '35e7132c1742eaa.jpg', '2010-07-26');
INSERT INTO `programs` VALUES (5, 'kkkl', '', '11 KB', '', '', 'Graphics', '', '8cae5112c2129ad.jpg', '35e7132c1742eaa.jpg', '2010-07-26');
INSERT INTO `programs` VALUES (6, 'oio', '', '12 KB', '', '', 'Graphics', '', '', '9d6f4d8eb6fb9a3.jpg', '2010-07-26');
INSERT INTO `programs` VALUES (9, 'jjnmmn', '', '11 KB', '', '', 'Graphics', '', '35e7132c1742eaa.jpg', '5b80dedf31c1b00.jpg', '2010-07-26');

-- --------------------------------------------------------

-- 
-- Table structure for table `programs_categories`
-- 

CREATE TABLE `programs_categories` (
  `category` varchar(40) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `programs_categories`
-- 

INSERT INTO `programs_categories` VALUES ('Graphics');
INSERT INTO `programs_categories` VALUES ('Utilities');
INSERT INTO `programs_categories` VALUES ('Office');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL default '',
  `Password` varchar(30) NOT NULL default '',
  `Role` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES ('Hilmi', '', 'admin');
INSERT INTO `users` VALUES ('user', 'user', 'user');
