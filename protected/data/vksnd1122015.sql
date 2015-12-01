-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Décembre 2015 à 10:29
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
  `time_in_doc` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_documentary`
--

INSERT INTO `tbl_documentary` (`id`, `number`, `shortcut`, `abstract`, `signed_user`, `keywords`, `status`, `date_recieve`, `number_doc_finish`, `number_doc_send`, `reciever`, `time_in_doc`) VALUES
(1, '12345', 'kkk', 'fff', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL),
(2, '123124', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(66, 'ggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'trtrt', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1450134000),
(68, 'fff', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1449702000),
(69, 'kk', NULL, NULL, NULL, NULL, NULL, NULL, 'kkkkk', NULL, NULL, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbl_documentary`
--
ALTER TABLE `tbl_documentary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbl_documentary`
--
ALTER TABLE `tbl_documentary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
