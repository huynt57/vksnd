-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 15 Décembre 2015 à 17:39
-- Version du serveur: 5.5.34
-- Version de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `vksnd`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_cases`
--

CREATE TABLE IF NOT EXISTS `tbl_cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_prosecution` int(11) DEFAULT NULL,
  `accused` text,
  `detention_period` text,
  `investigator` text,
  `investigation_period` text,
  `case_name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `tbl_cases`
--

INSERT INTO `tbl_cases` (`id`, `date_prosecution`, `accused`, `detention_period`, `investigator`, `investigation_period`, `case_name`) VALUES
(2, 0, NULL, NULL, NULL, NULL, 'hh'),
(3, 0, NULL, NULL, NULL, NULL, 'hh'),
(5, 1450220400, 'j', 'hhhhh', 'hghhh', 'hhhh', '15'),
(6, 1451430000, NULL, 'hh', 'hhhhhhhhhh', NULL, 'hhh'),
(7, 0, NULL, 'hhhh', 'hhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhh', 'hhh');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_document`
--

CREATE TABLE IF NOT EXISTS `tbl_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `path` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_documentary`
--

CREATE TABLE IF NOT EXISTS `tbl_documentary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(255) DEFAULT NULL,
  `shortcut` text,
  `abstract` text,
  `signed_user` varchar(255) DEFAULT NULL,
  `keywords` text,
  `status` int(11) DEFAULT NULL,
  `date_recieve` int(11) DEFAULT NULL,
  `number_doc_finish` varchar(255) DEFAULT NULL,
  `number_doc_send` varchar(255) DEFAULT NULL,
  `reciever` varchar(255) DEFAULT NULL,
  `time_in_doc` int(11) DEFAULT NULL,
  `country` text,
  `did_by` text,
  `obj_name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Contenu de la table `tbl_documentary`
--

INSERT INTO `tbl_documentary` (`id`, `number`, `shortcut`, `abstract`, `signed_user`, `keywords`, `status`, `date_recieve`, `number_doc_finish`, `number_doc_send`, `reciever`, `time_in_doc`, `country`, `did_by`, `obj_name`) VALUES
(1, '12345', 'kkk', 'fff', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '123124', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'ggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_letters`
--

CREATE TABLE IF NOT EXISTS `tbl_letters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter_created` text,
  `signed_date` int(11) DEFAULT NULL,
  `signed_recieve` int(11) DEFAULT NULL,
  `decided_assigned` text,
  `verification_period` text,
  `content` text,
  `staff_assigned` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_letters`
--

INSERT INTO `tbl_letters` (`id`, `letter_created`, `signed_date`, `signed_recieve`, `decided_assigned`, `verification_period`, `content`, `staff_assigned`) VALUES
(2, 'j', 1448924400, 1449615600, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_wanted_abroad`
--

CREATE TABLE IF NOT EXISTS `tbl_wanted_abroad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nation_request` text,
  `object_name` text,
  `wanted_number` text,
  `crime` text,
  `date_publish` int(11) DEFAULT NULL,
  `staff_assigned` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tbl_wanted_abroad`
--

INSERT INTO `tbl_wanted_abroad` (`id`, `nation_request`, `object_name`, `wanted_number`, `crime`, `date_publish`, `staff_assigned`) VALUES
(1, 'huy', 'hh', '123456', 'd', -3600, ''),
(3, 'hhh', NULL, 'hh', 'gg', 1423695600, 'huy'),
(4, 'hhh', 'yyy', 'hh', 'hhhhhh', 1421017200, 'hhhhhhhhh'),
(5, '', 'hhh', NULL, NULL, NULL, NULL),
(6, 'hhhhhhhhhh', 'yyy', '676767', 'hhhhhhhhhhhhhhhhhh', 0, 'hhh'),
(7, 'gdg', 'gdfgdfg', 'tet', 'ăn cắp', 1439330400, 'gdfg'),
(8, '1', NULL, NULL, NULL, 1449529200, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
