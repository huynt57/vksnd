-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Décembre 2015 à 08:17
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vksnd`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_cases`
--

CREATE TABLE IF NOT EXISTS `tbl_cases` (
  `id` int(11) NOT NULL,
  `date_prosecution` int(11) DEFAULT NULL,
  `accused` text,
  `detention_period` text,
  `investigator` text,
  `investigation_period` text,
  `case_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_documentary`
--

CREATE TABLE IF NOT EXISTS `tbl_documentary` (
  `id` int(11) NOT NULL,
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
  `obj_name` text
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `letter_created` text,
  `signed_date` int(11) DEFAULT NULL,
  `signed_recieve` int(11) DEFAULT NULL,
  `decided_assigned` text,
  `verification_period` text,
  `content` text,
  `staff_assigned` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_letters`
--

INSERT INTO `tbl_letters` (`id`, `letter_created`, `signed_date`, `signed_recieve`, `decided_assigned`, `verification_period`, `content`, `staff_assigned`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_wanted_abroad`
--

CREATE TABLE IF NOT EXISTS `tbl_wanted_abroad` (
  `id` int(11) NOT NULL,
  `nation_request` text,
  `object_name` text,
  `wanted_number` text,
  `crime` text,
  `date_publish` int(11) DEFAULT NULL,
  `staff_assigned` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_wanted_abroad`
--

INSERT INTO `tbl_wanted_abroad` (`id`, `nation_request`, `object_name`, `wanted_number`, `crime`, `date_publish`, `staff_assigned`) VALUES
(1, '', NULL, NULL, 'd', NULL, NULL),
(2, '', NULL, NULL, 'd', NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbl_cases`
--
ALTER TABLE `tbl_cases`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_documentary`
--
ALTER TABLE `tbl_documentary`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_letters`
--
ALTER TABLE `tbl_letters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_wanted_abroad`
--
ALTER TABLE `tbl_wanted_abroad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbl_cases`
--
ALTER TABLE `tbl_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tbl_documentary`
--
ALTER TABLE `tbl_documentary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `tbl_letters`
--
ALTER TABLE `tbl_letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tbl_wanted_abroad`
--
ALTER TABLE `tbl_wanted_abroad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
