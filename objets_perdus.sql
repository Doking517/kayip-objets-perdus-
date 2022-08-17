-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2022 at 11:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `objets_perdus`
--

-- --------------------------------------------------------

--
-- Table structure for table `objets`
--

DROP TABLE IF EXISTS `objets`;
CREATE TABLE IF NOT EXISTS `objets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_objet` varchar(100) NOT NULL,
  `id_type_objet` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type_objet` (`id_type_objet`),
  KEY `objets_ibfk_1` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personne_p`
--

DROP TABLE IF EXISTS `personne_p`;
CREATE TABLE IF NOT EXISTS `personne_p` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_person_p` varchar(255) NOT NULL,
  `prenom_person_p` varchar(255) NOT NULL,
  `cni` varchar(100) NOT NULL,
  `numero_p` varchar(20) NOT NULL,
  `date_p` date NOT NULL,
  `id_objet` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_objet` (`id_objet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personne_t`
--

DROP TABLE IF EXISTS `personne_t`;
CREATE TABLE IF NOT EXISTS `personne_t` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_person_t` varchar(100) NOT NULL,
  `id_personne_t_ano` int(11) NOT NULL,
  `id_personne_t_nano` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_personne_t_ano` (`id_personne_t_ano`),
  KEY `personne_t_ibfk_1` (`id_personne_t_nano`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personne_t_ano`
--

DROP TABLE IF EXISTS `personne_t_ano`;
CREATE TABLE IF NOT EXISTS `personne_t_ano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_ano` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personne_t_nano`
--

DROP TABLE IF EXISTS `personne_t_nano`;
CREATE TABLE IF NOT EXISTS `personne_t_nano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_nano` varchar(255) NOT NULL,
  `prenom_nano` varchar(255) NOT NULL,
  `numero_nano` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `types_objets`
--

DROP TABLE IF EXISTS `types_objets`;
CREATE TABLE IF NOT EXISTS `types_objets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_objet` varchar(255) NOT NULL,
  `date_trouv` date NOT NULL,
  `ville` varchar(255) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `objets`
--
ALTER TABLE `objets`
  ADD CONSTRAINT `objets_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne_t` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personne_p`
--
ALTER TABLE `personne_p`
  ADD CONSTRAINT `personne_p_ibfk_1` FOREIGN KEY (`id_objet`) REFERENCES `objets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personne_t`
--
ALTER TABLE `personne_t`
  ADD CONSTRAINT `personne_t_ibfk_1` FOREIGN KEY (`id_personne_t_nano`) REFERENCES `personne_t_nano` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personne_t_ano`
--
ALTER TABLE `personne_t_ano`
  ADD CONSTRAINT `personne_t_ano_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personne_t` (`id_personne_t_ano`) ON DELETE CASCADE;

--
-- Constraints for table `types_objets`
--
ALTER TABLE `types_objets`
  ADD CONSTRAINT `types_objets_ibfk_1` FOREIGN KEY (`id`) REFERENCES `objets` (`id_type_objet`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
