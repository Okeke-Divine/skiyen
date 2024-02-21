-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2020 at 07:04 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `skiyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) unsigned NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `rate` varchar(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `username`, `message`, `rate`, `time`, `date`) VALUES
(4, 'lessev', 'sds', '', '09:25:35am', '2020/12/12'),
(5, 'lessev', 'bad network', '1', '09:26:54am', '2020/12/12'),
(6, 'lessev', 'wow this is the best site', '5', '09:27:20am', '2020/12/12'),
(7, 'lessev', '', '4', '04:03:53pm', '2020/12/12'),
(8, 'lessev', 'ewerth', '5', '04:05:56pm', '2020/12/12'),
(9, 'lessev', 'last', '3', '04:52:41pm', '2020/12/12'),
(10, 'lessev', 'i love this site', '3', '04:59:31pm', '2020/12/12'),
(11, 'lessev', 'dadasdasdasdasdasd', '5', '05:18:30pm', '2020/12/12'),
(12, 'lessev', 'love u guyz', '3', '07:52:32am', '2020/12/15'),
(13, 'lessev', 'a good site', '3', '02:41:13pm', '2020/12/15'),
(14, 'EGXY', 'YOU FUCK NUT FOOOOOOOOOOOOOOOL', '0', '09:34:00pm', '2020/12/17'),
(15, 'phone', 'Yeah a very good site compared to facebook', '3', '09:08:11am', '2020/12/19');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(255) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `time_created` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `group_picture` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `security`, `owner`, `time_created`, `date_created`, `group_picture`) VALUES
(33, 'agu', 'agu life agu growth agu health with the help of hair cream', 'public', 'ronaldo', '06:13:12am', '2020/12/27', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) unsigned NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `phone_numer` varchar(255) NOT NULL,
  `secret_code` varchar(255) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `unscode` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirm_password`, `phone_numer`, `secret_code`, `gender`, `unscode`, `profile_pic`) VALUES
(1, 'lessev', 'lessev@gmail.com', '12345678', '12345678', '0801234567890', '123456789098', 'on', 'lessev123456789098', '16087992570501827962068.jpg'),
(2, 'deo', 'deo@gmail.com', '1234567890', '1234567890', '11112', 'acdefghijklmno', 'on', 'deoacdefghijklmno', ''),
(3, 'jideofor', '', '', '', '', '', 'on', 'jideofor', ''),
(4, 'a', 'a@gmail.com', '123412341', '123412341', '1', '1111111111111', 'Male', 'a1111111111111', ''),
(5, 'Didi_Gabriel', 'ikemdinachiugwu@gmail.com', 'FAMILYANDFRIENDS', 'FAMILYANDFRIENDS', '09047714099', '4099', 'Male', 'Didi_Gabriel4099', ''),
(6, 'we', 'we@mail.cm', '111111111', '111111111', '1', '1', 'Female', 'we1', ''),
(7, 'Emi', 'qwerty@gmail.com', 'changename', 'changename', '080453322323', 'Needy', 'Male', 'EmiNeedy', ''),
(9, 'less', 'l@gmail.com', 'qwertyuiop', 'qwertyuiop', '11', '111111111111', '', 'less111111111111', ''),
(11, 'oke', 'oke@gmail.com', 'penilozulu', 'penilozulu', '08115187337', '08115187337', 'Male', 'oke08115187337', ''),
(12, 'ronaldo', 'cr7@juve.com', 'cr7thebest', 'cr7thebest', '+998123573843', 'juventuscr7', 'Male', 'ronaldojuventuscr7', 'Lighthouse.jpg'),
(13, 'somto', 'sekebuisi@gmail.com', 'SoMtO1234', 'SoMtO1234', '08118911395', 'eggggggggg', 'Male', 'somtoeggggggggg', ''),
(14, 'kendo', 'nnaemekagerald1@gmail.con', '123412345', '123412345', '07000000000', 'eggseggseggs', 'Male', 'kendoeggseggseggs', 'final fantasy 11 [www.vikitech.com].jpg'),
(15, 'AGU', 'AKA@GMAIL', 'CHUKWU', 'CHUKWU', '07089798347', '', 'Male', 'AGU', ''),
(16, 'somtochi', 'sekebuisi@gmail.com', 'SoMtO1234', 'SoMtO1234', '08118911395', 'eggggggggg', 'Male', 'somtochieggggggggg', ''),
(17, 'EGXY', 'EGXY@gmail.COM', 'egg', 'egg', '08034768375', '10987654321', 'Male', 'EGXY10987654321', ''),
(18, 'Bankz', 'anikenechukwu_enugu@deeperlifehighschool.org', 'ken12345678', 'ken12345678', '08036777135', '192.168.173.1', 'Male', 'Bankz192.168.173.1', ''),
(19, 'kenzy', 'anikene69@gmail.com', 'ANIkenechukwu12', 'ANIkenechukwu12', '08036777135', '192.168.173.1', 'Male', 'kenzy192.168.173.1', ''),
(20, 'Chuks Chuzzy', 'aliemekejnr@deeperlifehighschool.org', 'science7350', 'science7350', '07012819391', '7350735000', 'Male', 'Chuks Chuzzy7350735000', ''),
(21, 'Okeke Godslight ', 'okekegodslight@g-mail.com', '13579', '13579', '07035127808', '1234567890', 'Male', 'Okeke Godslight 1234567890', ''),
(22, '', '', 'bh', '', '', '', '', '', ''),
(23, 'phone', 'p@gmail.com', '12345', '12345', '0706345678', 'thenamebros', '', 'phonethenamebros', 'download.jpg'),
(24, 'iko', 's@gmail.com', 'qqqqqq', 'qqqqqq', 'qqq', 'sdfsdfsdfsdfsdfsfsfs', 'Male', 'ikosdfsdfsdfsdfsdfsfsfs', ''),
(25, 'sdfgdsfss', 's@gmail.com', 'sasasa', 'sasasa', 's', 'ssssdsdsfsfsfsf', 'Male', 'sdfgdsfssssssdsdsfsfsfsf', ''),
(26, 'xxx', 's@gmail.com', 'aaaaaa', 'aaaaaa', 's', 'ssssdsdsfsfsfsf', 'Male', 'xxxssssdsdsfsfsfsf', ''),
(27, 'test', 'test@gmail.com', '123456', '123456', '1234567890', 'sfmsdfmksdmfksd', 'Male', 'testsfmsdfmksdmfksd', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(255) unsigned NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `likes` varchar(255) NOT NULL,
  `unlikes` varchar(255) NOT NULL,
  `coment` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `username`, `post`, `time`, `date`, `likes`, `unlikes`, `coment`) VALUES
(6, 'oke', 'ur mom\r\n', '10:04:50pm', '2020/12/09', '', '', ''),
(7, 'ronaldo', 'I am the best footballer and i am on sk not fb', '09:35:13am', '2020/12/12', '', '', ''),
(14, 'lessev', 'ikwoness by riggs', '02:40:23pm', '2020/12/15', '', '', ''),
(15, 'lessev', 'ugwu the stamara', '05:03:11pm', '2020/12/15', '', '', ''),
(16, 'lessev', 'bye guyz', '05:12:24pm', '2020/12/15', '', '', ''),
(17, 'AGU', 'OKEKE UR FADA', '05:15:36pm', '2020/12/15', '', '', ''),
(18, 'AGU', 'OKEKE UR FADA NASH\r\n', '05:16:41pm', '2020/12/15', '', '', ''),
(20, 'lessev', 'olisa', '05:25:01pm', '2020/12/15', '', '', ''),
(22, 'EGXY', 'EGGGGGGGGGGGGGG\r\n', '05:29:47pm', '2020/12/15', '', '', ''),
(23, 'ronaldo', 'i am back again', '06:48:38am', '2020/12/16', '', '', ''),
(24, 'ronaldo', 'nothing more nothing less', '06:48:56am', '2020/12/16', '', '', ''),
(25, 'lessev', 'ok', '11:32:31am', '2020/12/16', '', '', ''),
(26, 'lessev', 'yeah', '11:37:35am', '2020/12/16', '', '', ''),
(27, 'ronaldo', 'bad guys', '12:05:22pm', '2020/12/16', '', '', ''),
(30, 'phone', 'Nothing more nothing less', '09:09:20am', '2020/12/19', '', '', ''),
(31, 'phone', 'Bye guyz', '09:09:39am', '2020/12/19', '', '', ''),
(32, 'phone', 'No nonsenese', '10:39:49am', '2020/12/19', '', '', ''),
(33, 'kendo', 'yeah', '02:07:25pm', '2020/12/23', '', '', '');

INSERT INTO `private_message_system`.`users` (
`user_id` ,
`user_name` ,
`user_password`
)
VALUES (
NULL , 'bob', SHA1( 'hmm1' )
);
