-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:80
-- Generation Time: Jul 18, 2014 at 07:11 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `galacrik_cygnanew`
--

-- --------------------------------------------------------

--
-- Table structure for table `award_info`
--

CREATE TABLE IF NOT EXISTS `award_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_id` varchar(300) NOT NULL,
  `project_id` varchar(300) NOT NULL,
  `bid_id` varchar(300) NOT NULL,
  `employer_id` varchar(300) NOT NULL,
  `contractor_id` varchar(300) NOT NULL,
  `awarded_date` datetime NOT NULL,
  `is_accepted` int(11) NOT NULL,
  `result_date` datetime NOT NULL,
  `is_declined` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `award_info`
--

INSERT INTO `award_info` (`id`, `award_id`, `project_id`, `bid_id`, `employer_id`, `contractor_id`, `awarded_date`, `is_accepted`, `result_date`, `is_declined`, `status`) VALUES
(4, 'awa53c52ddcc4af7', 'pro536358c66710b', 'bid53887dc667f7d', 'user5368cebf96e8b', 'user534fa645dc7d1', '0000-00-00 00:00:00', 1, '2014-07-16 02:10:39', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bid_info`
--

CREATE TABLE IF NOT EXISTS `bid_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid_id` varchar(200) NOT NULL,
  `project_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `original_file` varchar(100) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `currency` varchar(25) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `time_range` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ip` varchar(100) NOT NULL,
  `awarded` int(11) NOT NULL,
  `chat_initiated` int(11) NOT NULL,
  `activation_notes` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bid_info`
--

INSERT INTO `bid_info` (`id`, `bid_id`, `project_id`, `user_id`, `description`, `original_file`, `file`, `currency`, `amount`, `time_range`, `date`, `time`, `ip`, `awarded`, `chat_initiated`, `activation_notes`, `status`) VALUES
(1, 'bid536df3252c72d', 'pro5363598ecf6d3', 'user536103eece459', 'abc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is simply dummy text of the printing typesetting industry.Lorem Ipsum is simply dummy text of the printing and tyjdgf djsgfis..', 'cart-tabs.png', 'files/project/6f28a0b7e4accd6a97666a517e042afd.png', '$', '800', '1 Month', '2014-05-10', '11:36:37', '::1', 1, 0, NULL, '1'),
(2, 'bid536dfcb1913ba', 'pro5361055c3eb15', 'user536103eece459', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'command.png', 'files/project/ddd0cb777525490b1f160bd390a2c3c6.png', '$', '1200', '1 Month', '2014-05-10', '12:17:21', '::1', 1, 0, NULL, '1'),
(3, 'bid53887da5ec53c', 'pro537b1b70de3b7', 'user5368cebf96e8b', 'abc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum..\r\nabc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is ', '', '', '$', '500', '2 Weeks', '2014-05-30', '02:46:29', '::1', 0, 0, NULL, '1'),
(4, 'bid53887dc667f7d', 'pro536358c66710b', 'user5368cebf96e8b', 'abc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum\r\nabc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is \r\nabc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is \r\nabc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is \r\nabc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is \r\nabc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is ', '', '', '$', '966', 'Above 2 Months', '2014-05-30', '02:47:02', '::1', 1, 0, NULL, '1'),
(5, 'bid53887de7a0572', 'pro535a050d029eb', 'user5368cebf96e8b', 'abc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum.', 'chitra.sql', 'files/project/81500c8c69e28160b6889f31bcd85e9d.sql', '$', '100', '3 Days', '2014-05-30', '02:47:35', '::1', 0, 0, NULL, '1'),
(6, 'bid53887e4b40133', 'pro537b1b70de3b7', 'user534fa645dc7d1', 'abc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum kjhfskdhfs fksdhfksd', '', '', '$', '800', '1 Month', '2014-05-30', '02:49:15', '::1', 0, 0, NULL, '1'),
(7, 'bid539c381b37493', 'pro5371bb257a34c', 'user534fa645dc7d1', 'Smarty is a web template system written in PHP. Smarty is primarily promoted as a tool for separation of concerns.[1] Smarty is intended to simplify compartmentalization, allowing the front-end of a web page to change separately from its back-end. Ideally, this lowers costs and minimizes the efforts associated with software maintenance.\r\n\r\nSmarty generates web content through the placement of special Smarty tags within a document. These tags are processed and substituted with other code. Tags are directives for Smarty that are enclosed by template delimiters. These directives can be variables, denoted by a dollar sign ($), functions, logical or loop statements. Smarty allows PHP programmers to define custom functions that can be accessed using Smarty tags.', 'jquery-1.2.6.min.js', 'files/project/dfa2d45f8ef1bc1e1524e0871c17bf0d.2.6', '$', '900', '2 Weeks', '2014-06-14', '01:55:07', '::1', 0, 0, NULL, '1'),
(8, 'bid539c386516233', 'pro53997695a4099', 'user534fa645dc7d1', 'Der Hersteller bezeichnet Smarty als â€žTemplate/Presentation Frameworkâ€œ. Es soll umfangreiche Hilfsmittel zum LÃ¶sen vieler Probleme im Umfeld der â€žPrÃ¤sentationsschichtâ€œ (XHTML-Ausgabe) von Web-Applikationen zur VerfÃ¼gung stellen. Mit diesem Konzept erweiterte Smarty wie viele andere Hersteller auch die Funktionen eines regulÃ¤ren Template-Engine-Systems.\r\n\r\nDie Entwickler von Smarty gehen im Grundsatz davon aus, dass das reine Layout einer Webapplikation von einem â€žTemplate-Designerâ€œ entworfen und in HTML (als Template) umgesetzt wird, wÃ¤hrend die eigentlichen Prozesse und Datenverarbeitungsroutinen von einem Programmierer in PHP entwickelt werden. Es erscheint deshalb sinnvoll, diese beiden Komponenten bereits im Entwicklungsprozess zu trennen. Zu diesem Zweck wird die Entwicklung aufgeteilt in Anwendungslogik verarbeitende PHP-Dateien, sowie in Templates, die das GrundgerÃ¼st der Ausgabe beinhalten und in einem eigenen Format vorliegen. Bei diesen Template-Dateien handelt es sich im Wesentlichen um HTML-Dateien mit mehr- oder weniger komplexen Platzhaltern, die spÃ¤ter durch dynamische Inhalte ersetzt werden.', 'bg.png', 'files/project/788a255f8d1671a51b6d636be7a64e99.png', '$', '3300', 'Above 2 Months', '2014-06-14', '01:56:21', '::1', 0, 0, 'y tutyurturyr ghfghgfjhtyu ghmjgjgjty', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `skills`) VALUES
(1, 'It & Programming', 'name,name,name,name'),
(3, 'ANDROID', '3'),
(4, 'IOS', '5'),
(5, 'WORDPRESS', '1,2'),
(6, 'MAGENTO', '1,2'),
(7, 'JOOMLA', '1,2');

-- --------------------------------------------------------

--
-- Table structure for table `chat_info`
--

CREATE TABLE IF NOT EXISTS `chat_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` varchar(200) NOT NULL,
  `sender` varchar(300) NOT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `emp_user_id` varchar(200) DEFAULT NULL,
  `con_user_id` varchar(200) DEFAULT NULL,
  `bid_id` varchar(300) NOT NULL,
  `project_id` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `chat_info`
--

INSERT INTO `chat_info` (`id`, `chat_id`, `sender`, `message`, `emp_user_id`, `con_user_id`, `bid_id`, `project_id`, `date`, `status`) VALUES
(40, 'CHAT53c3a67c9762e', 'user534fa645dc7d1', 'Hi', 'user534fa645dc7d1', 'user536103eece459', 'bid536df3252c72d', 'pro5363598ecf6d3', '2014-07-14 03:14:28', '0'),
(41, 'CHAT53c3a69075517', 'user536103eece459', 'Hello', 'user534fa645dc7d1', 'user536103eece459', 'bid536df3252c72d', 'pro5363598ecf6d3', '2014-07-14 03:14:48', '0'),
(42, 'CHAT53c541d03cdcf', 'user5368cebf96e8b', 'Hi', 'user534fa645dc7d1', 'user5368cebf96e8b', 'bid53887dc667f7d', 'pro536358c66710b', '2014-07-15 08:29:28', '0'),
(43, 'CHAT53c5435285f66', 'user534fa645dc7d1', 'hello', 'user534fa645dc7d1', 'user5368cebf96e8b', 'bid53887dc667f7d', 'pro536358c66710b', '2014-07-15 08:35:54', '0'),
(44, 'CHAT53c5436371827', 'user5368cebf96e8b', 'hows are you?', 'user534fa645dc7d1', 'user5368cebf96e8b', 'bid53887dc667f7d', 'pro536358c66710b', '2014-07-15 08:36:11', '0'),
(45, 'CHAT53c66ba266daa', 'user5368cebf96e8b', 'test message for workroom', 'user534fa645dc7d1', 'user5368cebf96e8b', 'bid53887dc667f7d', 'pro536358c66710b', '2014-07-16 05:40:10', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phn_no` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `request_ip` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `request_id`, `name`, `phn_no`, `email`, `title`, `subject`, `message`, `request_ip`, `date`, `time`) VALUES
(1, 'r53a7efd5b6702', 'Dipanjan Bagchi', '919999999999', 'abcd@abc.com', 'dipanjan', 'uiiu', ' fgdfgdfgdfg ertre ygfdfsd\r\nfsd\r\nf''sdkf;sjdf;ldslfha efksd\r\nf sdf oeiru oyetrelgdf\r\ngdfgk lfcnbkcvnbd\r\ngsdg\r\n', '::1', '2014-06-23', '11:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `faq_info`
--

CREATE TABLE IF NOT EXISTS `faq_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `answer` varchar(4000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `faq_info`
--

INSERT INTO `faq_info` (`id`, `question`, `answer`, `date`, `time`, `status`) VALUES
(1, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen copy...\r\n', '2014-06-20', '10:19:11', '1'),
(2, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(3, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(4, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(5, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(6, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(7, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(8, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type', '2014-06-20', '10:20:04', '1'),
(9, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(10, 'Lorem Ipsum is simply dummy text?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '10:20:04', '1'),
(11, 'what is the moto of this application', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '01:02:59', '1'),
(12, 'what is the moto of this application', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2014-06-20', '01:03:30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `files_info`
--

CREATE TABLE IF NOT EXISTS `files_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` varchar(200) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_or` varchar(500) DEFAULT NULL,
  `file_name` varchar(1000) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `project_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `milestone_info`
--

CREATE TABLE IF NOT EXISTS `milestone_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `milestone_id` varchar(200) NOT NULL,
  `milestone_name` varchar(500) DEFAULT NULL,
  `workroom_id` varchar(300) NOT NULL,
  `amount` varchar(300) NOT NULL,
  `note` varchar(10000) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `funding_status` varchar(50) DEFAULT NULL,
  `funding_date` date DEFAULT NULL,
  `release_status` varchar(50) DEFAULT NULL,
  `funding_method` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `milestone_info`
--

INSERT INTO `milestone_info` (`id`, `milestone_id`, `milestone_name`, `workroom_id`, `amount`, `note`, `start_date`, `end_date`, `funding_status`, `funding_date`, `release_status`, `funding_method`) VALUES
(2, 'mil53c82e529c4a6', 'test', 'wkrm53c591c780a8f', '300', 'testing again', '2014-07-18', '2014-07-23', '0', '0000-00-00', '0', 'N.A.'),
(3, 'mil53c9140dc6968', 'Mockup creation', 'wkrm53c591c780a8f', '200', 'First thing you can do is simply start Ubuntu Software Center and get the Pepper Flash Player - browser plugin. The package name pepperflashplugin-nonfree has "nonfree" in the name because it refers to its ownership by Adobe Systems and free-speech qualities, not that it costs money. The browser may ask your permission to run "xdg-open" to launch Ubuntu Software Center.', '2014-07-24', '2014-07-31', '0', '0000-00-00', '0', 'N.A.');

-- --------------------------------------------------------

--
-- Table structure for table `mypage`
--

CREATE TABLE IF NOT EXISTS `mypage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` varchar(250) NOT NULL,
  `page_name` varchar(500) NOT NULL,
  `page_content` varchar(20000) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mypage`
--

INSERT INTO `mypage` (`id`, `page_id`, `page_name`, `page_content`, `date`, `time`, `status`) VALUES
(1, 'p53a556d368613', 'How To Find Jobs In Our System', '<h4><strong><span style="color:#0066ff">Sub Heading For Finding Jobs</span></strong></h4>\r\n\r\n<ol>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ol>\r\n\r\n<h4><span style="color:#0066ff"><strong>Sub Heading For Finding Jobs</strong></span></h4>\r\n\r\n<ol>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n\r\n<h4><span style="color:#0066ff"><strong>Sub Heading For Finding Jobs</strong></span></h4>\r\n\r\n<ol>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n', '2014-06-21', '11:56:35', '1'),
(2, 'p53a5746360c72', 'How To Hire Freelancers In Our System', '<h4><strong><span style="color:#0066ff">Sub Heading For Hiring Freeelancres</span></strong></h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ol>\r\n\r\n<h4><strong><span style="color:#0066ff">Sub Heading For Hiring Freeelancres</span></strong></h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n\r\n<h4><span style="color:#0066ff"><strong>Sub Heading For Hiring Freeelancres</strong></span></h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n', '2014-06-21', '02:02:43', '1'),
(3, 'p53a574c01b459', 'The Services And The Products Of Us', '<h4><span style="color:#0066ff"><strong>Sub Heading For Services</strong></span></h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ol>\r\n\r\n<h4><span style="color:#0066ff"><strong>Sub Heading For Products</strong></span></h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n', '2014-06-21', '02:04:16', '1'),
(4, 'p53a57573b6db4', 'User Terms And Conditions', '<h4>Terms And Conditions Statement</h4>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ul>\r\n\r\n<h4>Terms And Conditions Statement</h4>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ul>\r\n\r\n<h4>Terms And Conditions Statement</h4>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ul>\r\n', '2014-06-21', '02:07:15', '1'),
(5, 'p53a5759df2c5c', 'Cygnatech Privacy Policy', '<h4>Privacy Policy Statement</h4>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ul>\r\n\r\n<h4>Privacy Policy Statement</h4>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ul>\r\n\r\n<h4>Privacy Policy Statement</h4>\r\n\r\n<ul>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ul>\r\n', '2014-06-21', '02:07:57', '1'),
(6, 'p53a575fc84084', 'Fees And Charges Of Our System', '<h4>For Employers</h4>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<table class="fees_charges_table table table-bordered table-hover table-hover" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid rgb(147, 147, 147); box-sizing:border-box; font-family:ptsans; font-size:14px; line-height:20px; margin-bottom:1.5em; max-width:100%; width:832px">\r\n	<thead>\r\n		<tr>\r\n			<th style="vertical-align:bottom">Topic 1</th>\r\n			<th style="vertical-align:bottom">Topic 2</th>\r\n			<th style="vertical-align:bottom">Topic 3</th>\r\n			<th style="vertical-align:bottom">Topic 4</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h4>For Contractor</h4>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</p>\r\n\r\n<table class="fees_charges_table table table-bordered table-hover table-hover" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; border:1px solid rgb(147, 147, 147); box-sizing:border-box; font-family:ptsans; font-size:14px; line-height:20px; margin-bottom:1.5em; max-width:100%; width:832px">\r\n	<thead>\r\n		<tr>\r\n			<th style="vertical-align:bottom">Topic 1</th>\r\n			<th style="vertical-align:bottom">Topic 2</th>\r\n			<th style="vertical-align:bottom">Topic 3</th>\r\n			<th style="vertical-align:bottom">Topic 4</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n			<td style="vertical-align:top">Lorem Ipsum</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h4>Fees Statement</h4>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</p>\r\n', '2014-06-21', '02:09:32', '1'),
(7, 'p53a5763d7c268', 'What We Can Do For', '<h4>Heading Title</h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ol>\r\n\r\n<h4>Heading Title</h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n\r\n<h4>Heading Title</h4>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n	<li style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.</li>\r\n</ol>\r\n', '2014-06-21', '02:10:37', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notifiacation_info`
--

CREATE TABLE IF NOT EXISTS `notifiacation_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_id` varchar(200) NOT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `view_status` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `tme` time NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `project_id` varchar(200) DEFAULT NULL,
  `from_admin` varchar(100) DEFAULT NULL,
  `page_link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `polling_info`
--

CREATE TABLE IF NOT EXISTS `polling_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set_no` varchar(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer_no` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `user_id` varchar(10000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `polling_info`
--

INSERT INTO `polling_info` (`id`, `set_no`, `question`, `answer_no`, `answer`, `user_id`, `status`) VALUES
(1, 'poll_1', 'Lorem Ipsum is simply dummy text of the printing?', 1, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(2, 'poll_1', 'Lorem Ipsum is simply dummy text of the printing?', 2, 'Lorem Ipsum Lorem Ipsum', ',user534fa645dc7d1', '1'),
(3, 'poll_1', 'Lorem Ipsum is simply dummy text of the printing?', 3, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(4, 'poll_1', 'Lorem Ipsum is simply dummy text of the printing?', 4, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(5, 'poll_2', 'Lorem Ipsum is simply dummy text of the printing?', 1, 'Lorem Ipsum Lorem Ipsum', 'user534fa645dc7d1', '1'),
(6, 'poll_2', 'Lorem Ipsum is simply dummy text of the printing?', 2, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(7, 'poll_2', 'Lorem Ipsum is simply dummy text of the printing?', 3, 'Lorem Ipsum Lorem Ipsum', 'user5368cebf96e8b', '1'),
(8, 'poll_2', 'Lorem Ipsum is simply dummy text of the printing?', 4, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(9, 'poll_3', 'Lorem Ipsum is simply dummy text of the printing?', 1, 'Lorem Ipsum Lorem Ipsum', 'user5368cebf96e8b', '1'),
(10, 'poll_3', 'Lorem Ipsum is simply dummy text of the printing?', 2, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(11, 'poll_3', 'Lorem Ipsum is simply dummy text of the printing?', 3, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(12, 'poll_3', 'Lorem Ipsum is simply dummy text of the printing?', 4, 'Lorem Ipsum Lorem Ipsum', 'user534fa645dc7d1', '1'),
(13, 'poll_4', 'Lorem Ipsum is simply dummy text of the printing?', 1, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(14, 'poll_4', 'Lorem Ipsum is simply dummy text of the printing?', 2, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(15, 'poll_4', 'Lorem Ipsum is simply dummy text of the printing?', 3, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(16, 'poll_4', 'Lorem Ipsum is simply dummy text of the printing?', 4, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(17, 'poll_5', 'Lorem Ipsum is simply dummy text of the printing?', 1, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(18, 'poll_5', 'Lorem Ipsum is simply dummy text of the printing?', 2, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(19, 'poll_5', 'Lorem Ipsum is simply dummy text of the printing?', 3, 'Lorem Ipsum Lorem Ipsum', NULL, '1'),
(20, 'poll_5', 'Lorem Ipsum is simply dummy text of the printing?', 4, 'Lorem Ipsum Lorem Ipsum', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `project_info`
--

CREATE TABLE IF NOT EXISTS `project_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `file_or` varchar(200) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `work_type` varchar(50) DEFAULT NULL,
  `price_range` varchar(100) DEFAULT NULL,
  `hour_per_week` int(11) DEFAULT NULL,
  `hourly_time_frame` varchar(50) DEFAULT NULL,
  `job_post_ip` varchar(100) NOT NULL,
  `ending_date` date DEFAULT NULL,
  `preferred_locations` varchar(255) DEFAULT NULL,
  `total_bids` int(11) NOT NULL,
  `award_bid_id` varchar(200) DEFAULT NULL,
  `activation_notes` varchar(1000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`project_id`),
  UNIQUE KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `project_info`
--

INSERT INTO `project_info` (`id`, `project_id`, `title`, `description`, `user_id`, `category`, `sub_category`, `skills`, `file_or`, `file`, `date`, `time`, `work_type`, `price_range`, `hour_per_week`, `hourly_time_frame`, `job_post_ip`, `ending_date`, `preferred_locations`, `total_bids`, `award_bid_id`, `activation_notes`, `status`) VALUES
(1, 'pro535a050d029eb', 'Html Design', 'sd fsdert try rtytyghjg jghj gj fgh fh \r\nd fg\r\ndsg dg la[dsgf as\r\naf sajfpsdf\r\nsdfhs dof s\r\nfsof''sfps\r\nfsfj s\r\nfs\r\nf f dsfa', 'user534fa645dc7d1', 'Category3', 'Sub Category 3', 'Skills 2,Skills 4,Skills 11,Skills 12', NULL, '', '2014-04-25', '08:47:41', 'Fixed', '$100 to $200', NULL, NULL, '::1', '2014-06-30', 'india', 1, NULL, NULL, '1'),
(17, 'pro5361055c3eb15', 'Web Solution', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.', 'user534fa645dc7d1', 'Category2', 'Sub Category 3', 'Skills 1,Skills 3,Skills 4,Skills 10,Skills 11,Skills 12', 'abcd.txt', 'files/project/3bc248e2d9c1acf80200ec3d8ee65f12.txt', '2014-04-30', '04:14:52', 'Fixed', '$500 to $1000', NULL, NULL, '::1', '2014-06-30', 'Any Where', 1, 'bid536dfcb1913ba', NULL, '1'),
(18, 'pro5363584075106', 'Web Solution', 'I have a website with new domain. I want responsive design for my site. I will discuss the details of work after I choose the right person for it. Place your bids according to the requirement. You can freely ask your doubts.I have a website with new domain. I want responsive design for my site. I will discuss the details of work after I choose the right person for it. Place your bids according to the requirement. You can freely ask your doubts.', 'user534fa645dc7d1', 'Category5', 'Sub Category 3', 'Skills 1,Skills 2,Skills 3,Skills 4,Skills 6,Skills 7', NULL, '', '2014-05-02', '10:33:04', 'Hourly', '$15/hr to $20/hr', 40, '3-4 weeks', '::1', '2014-06-30', 'Any Where', 0, NULL, NULL, '1'),
(19, 'pro536358c66710b', 'normal project', 'I have a website with new domain. I want responsive design for my site. I will discuss the details of work after I choose the right person for it. Place your bids according to the requirement. You can freely ask your doubts.I have a website with new domain. I want responsive design for my site. I will discuss the details of work after I choose the right person for it. Place your bids according to the requirement. You can freely ask your doubts.', 'user534fa645dc7d1', 'Category2', 'Sub Category 2', 'Skills 2,Skills 3,Skills 4', NULL, '', '2014-05-02', '10:35:18', 'Fixed', '$50 to $80', NULL, NULL, '::1', '2014-06-30', 'Any Where', 1, 'bid53887dc667f7d', NULL, '1'),
(20, 'pro5363598ecf6d3', 'Web Development', 'I have a website with new domain. I want responsive design for my site. I will discuss the details of work after I choose the right person for it. Place your bids according to the requirement. You can freely ask your doubts.I have a website with new domain.\r\n', 'user534fa645dc7d1', 'Category2', 'Sub Category 5', 'Skills 1,Skills 2,Skills 3', NULL, '', '2014-05-02', '10:38:38', 'Fixed', 'Less than $500', NULL, NULL, '::1', '2014-06-30', 'Any Where', 1, NULL, ' jhgjfuy turtyrtyrety', '1'),
(21, 'pro5371ba8601539', 'Test Job', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'user536103eece459', 'Category4', 'Sub Category 2', 'Skills 1,Skills 2,Skills 3,Skills 4,Skills 10,Skills 11', '', '', '2014-05-13', '08:24:06', 'Fixed', '$100 to $250', NULL, NULL, '::1', '2014-06-30', 'india', 0, NULL, NULL, '1'),
(22, 'pro5371bb257a34c', 'yryiure', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'user536103eece459', 'Category3', 'Sub Category 4', 'Skills 1,Skills 2,Skills 3,Skills 4,Skills 5,Skills 8,Skills 11', '', '', '2014-05-13', '08:26:45', 'Fixed', 'Less than $500', NULL, NULL, '::1', '2014-06-30', 'india', 1, NULL, NULL, '1'),
(23, 'pro537b1b70de3b7', 'Testing purpose', 'abc is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industrjjgh jghj ghjg Ipsum is simply dummy text of the printing typesetting industry.Lorem Ipsum is simply dummy text of the printing and tyjdgf djsgfis..', 'user536103eece459', 'Category4', 'Sub Category 3', 'Skills 1,Skills 2,Skills 3,Skills 4,Skills 10,Skills 11', '', '', '2014-05-20', '11:08:00', 'Fixed', '$500 to $1000', NULL, NULL, '::1', '2014-07-19', 'Any Where', 2, NULL, NULL, '1'),
(24, 'pro53997695a4099', '.NET project', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'user536103eece459', 'Category5', 'Sub Category 4', 'Skills 5,Skills 6,Skills 9,Skills 10,Skills 11,Skills 12', '', '', '2014-06-12', '11:44:53', 'Fixed', '$1000 to $3000', NULL, NULL, '::1', '2014-08-20', 'USA', 1, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `skillId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`skillId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillId`, `name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'JAVA'),
(4, 'C#'),
(5, 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `skills` varchar(300) NOT NULL,
  `categoryId` varchar(300) NOT NULL,
  PRIMARY KEY (`subCategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subCategoryId`, `name`, `skills`, `categoryId`) VALUES
(1, 'PSD to HTML', '2', '1'),
(2, 'Bootstrap', '1,2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `submit_ticket`
--

CREATE TABLE IF NOT EXISTS `submit_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(20000) DEFAULT NULL,
  `ticket_ip` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `submit_ticket`
--

INSERT INTO `submit_ticket` (`id`, `ticket_id`, `user_id`, `title`, `subject`, `message`, `ticket_ip`, `date`, `time`) VALUES
(1, 't53a818cf79acd', 'user534fa645dc7d1', 'sdf sdfwserwr', 'ewr werfsd', 'fsdfsadfsadf sadfsadf sdfs', '::1', '2014-06-23', '02:08:47'),
(2, 't53a818e764095', 'user534fa645dc7d1', 'fghfgh', 'rtyrtyr', 'rgf dtrftgh\r\ngdskf sal;djfowejroi\r\n sfkds;flk dvmVfg\r\ndg jd;gd\r\nsgdsgf;dfkga\r\nfgsidf;sdkf''s\r\nsfk;sdvk;''sf\r\nsfjs;fksd;''\r\njvds; fvmsd;l', '::1', '2014-06-23', '02:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `survey_feedback`
--

CREATE TABLE IF NOT EXISTS `survey_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `set_no` varchar(50) NOT NULL,
  `feedback` varchar(10000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `survey_feedback`
--

INSERT INTO `survey_feedback` (`id`, `user_id`, `set_no`, `feedback`, `status`) VALUES
(1, 'user534fa645dc7d1', 'survey_1', 's fsrert rety fghfdgh dfhdfghdetre tertert er', NULL),
(2, 'guest', 'survey_1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_info`
--

CREATE TABLE IF NOT EXISTS `survey_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set_no` varchar(100) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer_no` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `user_id` varchar(10000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `survey_info`
--

INSERT INTO `survey_info` (`id`, `set_no`, `question_no`, `question`, `answer_no`, `answer`, `user_id`, `status`) VALUES
(1, 'survey_1', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing.', NULL, '1'),
(2, 'survey_1', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing.', NULL, '1'),
(3, 'survey_1', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing.', NULL, '1'),
(4, 'survey_1', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing.', 'user536103eece459,user534fa645dc7d1,guest', '1'),
(5, 'survey_1', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(6, 'survey_1', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,user534fa645dc7d1', '1'),
(7, 'survey_1', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(8, 'survey_1', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(9, 'survey_1', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,user534fa645dc7d1', '1'),
(10, 'survey_1', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(11, 'survey_1', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(12, 'survey_1', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', 'guest,guest', '1'),
(13, 'survey_1', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459', '1'),
(14, 'survey_1', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'guest,guest', '1'),
(15, 'survey_1', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', 'user534fa645dc7d1,guest', '1'),
(16, 'survey_1', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(17, 'survey_1', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(18, 'survey_1', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'user534fa645dc7d1,guest', '1'),
(19, 'survey_1', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,guest', '1'),
(20, 'survey_1', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(21, 'survey_1', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(22, 'survey_1', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'guest,guest', '1'),
(23, 'survey_1', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,user534fa645dc7d1', '1'),
(24, 'survey_1', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(25, 'survey_1', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', 'user534fa645dc7d1', '1'),
(26, 'survey_1', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,guest', '1'),
(27, 'survey_1', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(28, 'survey_1', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(29, 'survey_1', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(30, 'survey_1', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'user534fa645dc7d1', '1'),
(31, 'survey_1', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(32, 'survey_1', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459', '1'),
(33, 'survey_1', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(34, 'survey_1', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,user534fa645dc7d1', '1'),
(35, 'survey_1', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(36, 'survey_1', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(37, 'survey_1', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing', 'user536103eece459,guest', '1'),
(38, 'survey_1', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing', 'guest', '1'),
(39, 'survey_1', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing', 'user534fa645dc7d1,guest', '1'),
(40, 'survey_1', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing', NULL, '1'),
(45, 'survey_2', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(46, 'survey_2', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(47, 'survey_2', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(48, 'survey_2', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(49, 'survey_2', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(50, 'survey_2', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(51, 'survey_2', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(52, 'survey_2', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(53, 'survey_2', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(54, 'survey_2', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(55, 'survey_2', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(56, 'survey_2', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(57, 'survey_2', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(58, 'survey_2', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(59, 'survey_2', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(60, 'survey_2', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(61, 'survey_2', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(62, 'survey_2', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(63, 'survey_2', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(64, 'survey_2', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(65, 'survey_2', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(66, 'survey_2', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(67, 'survey_2', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(68, 'survey_2', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(69, 'survey_2', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(70, 'survey_2', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(71, 'survey_2', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(72, 'survey_2', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(73, 'survey_2', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(74, 'survey_2', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(75, 'survey_2', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(76, 'survey_2', 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(77, 'survey_2', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(78, 'survey_2', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(79, 'survey_2', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(80, 'survey_2', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(81, 'survey_2', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(82, 'survey_2', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(83, 'survey_2', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(84, 'survey_2', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry?', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(85, 'survey_3', 1, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(86, 'survey_3', 1, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(87, 'survey_3', 1, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(88, 'survey_3', 1, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(89, 'survey_3', 2, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(90, 'survey_3', 2, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(91, 'survey_3', 2, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(92, 'survey_3', 2, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(93, 'survey_3', 3, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(94, 'survey_3', 3, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(95, 'survey_3', 3, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(96, 'survey_3', 3, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(97, 'survey_3', 4, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(98, 'survey_3', 4, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(99, 'survey_3', 4, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(100, 'survey_3', 4, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(101, 'survey_3', 5, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(102, 'survey_3', 5, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(103, 'survey_3', 5, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(104, 'survey_3', 5, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(105, 'survey_3', 6, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(106, 'survey_3', 6, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(107, 'survey_3', 6, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(108, 'survey_3', 6, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(109, 'survey_3', 7, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(110, 'survey_3', 7, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(111, 'survey_3', 7, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(112, 'survey_3', 7, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(113, 'survey_3', 8, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(114, 'survey_3', 8, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(115, 'survey_3', 8, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(116, 'survey_3', 8, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(117, 'survey_3', 9, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(118, 'survey_3', 9, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(119, 'survey_3', 9, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(120, 'survey_3', 9, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(121, 'survey_3', 10, 'Is this system functionality are User Friendly? ', 1, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(122, 'survey_3', 10, 'Is this system functionality are User Friendly? ', 2, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(123, 'survey_3', 10, 'Is this system functionality are User Friendly? ', 3, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0'),
(124, 'survey_3', 10, 'Is this system functionality are User Friendly? ', 4, 'Lorem Ipsum is simply dummy text of the printing..', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_details`
--

CREATE TABLE IF NOT EXISTS `user_account_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `ac_name` varchar(100) NOT NULL,
  `ac_details` varchar(200) NOT NULL,
  `earning_money` varchar(100) DEFAULT NULL,
  `spent_money` varchar(100) DEFAULT NULL,
  `verification_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_activation_info`
--

CREATE TABLE IF NOT EXISTS `user_activation_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `date_from` date NOT NULL,
  `time_from` time NOT NULL,
  `date_to` date DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `action` varchar(50) NOT NULL,
  `notes` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_activation_info`
--

INSERT INTO `user_activation_info` (`id`, `user_id`, `date_from`, `time_from`, `date_to`, `time_to`, `action`, `notes`) VALUES
(1, 'user534fa645dc7d1', '2014-03-31', '08:47:41', '2014-06-14', '03:14:09', 'Activated', 'User Registration'),
(2, 'user536103eece459', '2014-04-15', '08:47:41', '2014-05-08', '04:58:45', 'Activated', 'User Registration'),
(3, 'user5368cebf96e8b', '2014-05-06', '01:59:59', '2014-05-06', '05:28:46', 'Activated', 'User Registration'),
(4, 'user5368cebf96e8b', '2014-05-06', '05:28:46', '2014-05-06', '05:31:48', 'Deactivated', 'lorem ipsum3'),
(5, 'user5368cebf96e8b', '2014-05-06', '05:31:48', NULL, NULL, 'Activated', 'ghjgytu tnbgh j ghjghj gutygh jgtyuyt'),
(6, 'user536103eece459', '2014-05-08', '04:58:45', '2014-05-08', '04:59:57', 'Deactivated', 'lorem ipsum3'),
(7, 'user536103eece459', '2014-05-08', '04:59:57', NULL, NULL, 'Activated', 'hsfjksh fksdhf kshf erihti entre'),
(8, 'user534fa645dc7d1', '2014-06-14', '03:14:09', '2014-06-14', '03:14:26', 'Deactivated', 'lorem ipsum2'),
(9, 'user534fa645dc7d1', '2014-06-14', '03:14:26', NULL, NULL, 'Activated', 'abdfd gdsg dfgdgdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE IF NOT EXISTS `user_credentials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `reset_pass_token` varchar(200) DEFAULT NULL,
  `reset_pass_sent_addr` varchar(255) DEFAULT NULL,
  `sign_in_count` int(11) NOT NULL,
  `last_sign_in_ip` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`id`, `user_id`, `email_id`, `username`, `password`, `category`, `reset_pass_token`, `reset_pass_sent_addr`, `sign_in_count`, `last_sign_in_ip`, `date`, `status`) VALUES
(13, 'user534fa645dc7d1', 'dipanjan@vyrazu.com', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'employer', NULL, NULL, 58, '127.0.0.1', '2014-07-17 04:32:14', '1'),
(14, 'user536103eece459', 'abcd@abc.com', 'dipa', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 'employer', NULL, NULL, 28, '127.0.0.1', '2014-07-14 03:10:43', '1'),
(15, 'user5368cebf96e8b', 'abcd@gmail.com', 'abcd', 'e80b5017098950fc58aad83c8c14978e', 'contractor', NULL, NULL, 32, '127.0.0.1', '2014-07-15 07:27:19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE IF NOT EXISTS `user_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) NOT NULL,
  `inst_name` varchar(200) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `last_update` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `user_id`, `inst_name`, `degree`, `start_date`, `end_date`, `description`, `last_update`, `status`) VALUES
(1, 'user534fa645dc7d1', 'naanan', 'adfdfsd f', '2014-04-12', '2014-04-26', 'sdf sdfsdf sdf', '2014-04-22', 1),
(2, 'user534fa645dc7d1', 'f sdf ret', 'gdfgdfgdf', '2013-09-12', '2014-01-17', 'sf sdfsferwerwer', '2014-04-22', 1),
(3, 'user534fa645dc7d1', 'fdsfsf', 'ere ee', '2012-06-12', '2013-12-13', 'sdf sferersrewrsdf sfs drewr', '2014-04-22', 1),
(4, 'user536103eece459', 'naanan', 'iuo uioiuoio iuo', '2001-05-12', '2005-06-13', 'ert gdfgertyrerter', '2014-05-10', 1),
(5, 'user5368cebf96e8b', 'BAVM', 'HS', '1997-06-04', '2013-06-18', 'dsf wer gfdgasdfgewrt errg ttttt', '2014-06-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_employment`
--

CREATE TABLE IF NOT EXISTS `user_employment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `position` varchar(200) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `last_update` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_employment`
--

INSERT INTO `user_employment` (`id`, `user_id`, `com_name`, `position`, `start_date`, `end_date`, `description`, `last_update`, `status`) VALUES
(1, 'user534fa645dc7d1', 'sd fsd', 'sdf sdf', '2013-03-07', '2014-04-18', 'sdfg asddfgsa ', '2014-04-22', 1),
(2, 'user534fa645dc7d1', 'fg edtryyh', 'g gjhgjgjg', '2011-03-11', '2013-01-11', 'dfg dsfg df gdfg dgd', '2014-04-22', 1),
(3, 'user534fa645dc7d1', 'dfg retert', 'twtqwerwerw', '2013-04-11', '2014-02-15', 'sdrf werwerwer wer', '2014-04-22', 1),
(4, 'user536103eece459', 'abcdddddd', 'sd fsd', '2013-10-15', '0000-00-00', 'sdf wer et ydgsdfgdst gre gdfgd', '2014-05-10', 1),
(5, 'user5368cebf96e8b', 'vlabs', 'manager', '1998-02-06', '2010-04-22', 'fgh rytr yrghddf ftgh dfg ', '2014-06-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `addr_line1` varchar(255) NOT NULL,
  `addr_line2` varchar(255) NOT NULL,
  `pincode` int(11) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `profile_image` varchar(200) DEFAULT NULL,
  `cover_image` varchar(200) DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `terms` varchar(1000) DEFAULT NULL,
  `hourly_rate` varchar(50) DEFAULT NULL,
  `no_certificates` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `availability` varchar(100) DEFAULT NULL,
  `interested_topic` varchar(100) DEFAULT NULL,
  `profile_creation_date` date NOT NULL,
  `last_upgradation_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `name`, `gender`, `dob`, `contact_no`, `addr_line1`, `addr_line2`, `pincode`, `city`, `state`, `country`, `profile_image`, `cover_image`, `skills`, `terms`, `hourly_rate`, `no_certificates`, `description`, `availability`, `interested_topic`, `profile_creation_date`, `last_upgradation_date`) VALUES
(1, 'user534fa645dc7d1', 'Dipanjan Bagchi', 'male', '1991-05-26', '42744', 'dffffffffffff', 'ddddddddddd', 34534, 'Kolkata', 'West Bengal', 'India', 'files/pro-image/27309d5e3c46cc655aff717f25d4ec80.jpg', NULL, 'Skill1,Skill2,Skill3,Skill5,Skill6,Skill7,Skill8,Skill10,Skill11', 'Nothing Special', '22', '', 'Having 3+ years of industry experience enable me to groom as professional and skilled Web/Graphic Designer whereas zeal for learning always helps me to get enriched with latest trends of web world.', 'Full Time', 'Everything', '2014-04-19', '2014-04-19'),
(2, 'user536103eece459', 'abcd bcda', 'male', '1991-09-01', '77777777', 'dffffffffffff', 'ddddddddddd', 34534, 'Kolkata', 'West Bengal', 'India', NULL, NULL, 'Skill2,Skill4,Skill5,Skill6,Skill7,Skill8,Skill9,Skill10,Skill11', 'aaaaaaaassssssss', '10', NULL, 'Having 3+ years of industry experience enable me to groom as professional and skilled Web/Graphic Designer whereas zeal for learning always helps me to get enriched with latest trends of web world.', 'Part Time', 'Everything', '2014-05-10', '2014-05-10'),
(3, 'user5368cebf96e8b', 'abcd  efgh', 'male', '1998-03-12', '42744', 'dffffffffffff', 'ddddddddddd', 34534, 'Kolkata', 'West Bengal', 'India', NULL, NULL, 'Skill2,Skill5,Skill8,Skill11', 'erterter', '12', '3 certifications', 'Having 10+ years of industry experience enable me to groom as professional and skilled Web/Graphic Designer.\r\nHaving 10+ years of industry experience enable me to groom as professional and skilled Web/Graphic Designer.\r\nHaving 10+ years of industry experience enable me to groom as professional and skilled Web/Graphic Designer.', 'Part Time', 'Everything', '2014-06-04', '2014-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `user_portfolio`
--

CREATE TABLE IF NOT EXISTS `user_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(500) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `upload_date` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_portfolio`
--

INSERT INTO `user_portfolio` (`id`, `user_id`, `file`, `skills`, `description`, `upload_date`, `status`) VALUES
(1, 'user534fa645dc7d1', 'files/portfolio/user534fa645dc7d1port1.png', 'klkjlj', 'kljkl jkl jkljkl jkl', '2014-04-22', 1),
(2, 'user534fa645dc7d1', 'files/portfolio/user534fa645dc7d1port2.png', ' jhkhk', ' hjk hkhjkhj', '2014-04-22', 1),
(3, 'user536103eece459', 'files/portfolio/user536103eece459port1.jpg', 'abcd', 'sd fsfsfser ser sdfsret eeewr dsfsd', '2014-05-10', 1),
(4, 'user5368cebf96e8b', 'files/portfolio/user5368cebf96e8bport1.jpg', 'PHP', 'lorem ipsum dolor site amet. lorem ipsum dolor site amet. lorem ipsum dolor site amet. lorem ipsum dolor site amet.', '2014-06-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workroom_info`
--

CREATE TABLE IF NOT EXISTS `workroom_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workroom_id` varchar(200) NOT NULL,
  `project_id` varchar(200) NOT NULL,
  `bid_id` varchar(200) NOT NULL,
  `emp_user_id` varchar(200) NOT NULL,
  `con_user_id` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `job_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `workroom_info`
--

INSERT INTO `workroom_info` (`id`, `workroom_id`, `project_id`, `bid_id`, `emp_user_id`, `con_user_id`, `date`, `time`, `job_status`) VALUES
(8, 'wkrm53c591c780a8f', 'pro536358c66710b', 'bid53887dc667f7d', 'user5368cebf96e8b', 'user534fa645dc7d1', '2014-07-02', '02:10:39', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_account_details`
--
ALTER TABLE `user_account_details`
  ADD CONSTRAINT `user_account_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_credentials` (`user_id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_credentials` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
