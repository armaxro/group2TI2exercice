-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 12 fév. 2024 à 13:17
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.2.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `group2ti2exercice`
--
DROP DATABASE IF EXISTS `group2ti2exercice`;
CREATE DATABASE IF NOT EXISTS `group2ti2exercice` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `group2ti2exercice`;

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `theid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `themail` varchar(200) NOT NULL,
  `themessage` text NOT NULL,
  `thedate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`theid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`theid`, `themail`, `themessage`, `thedate`) VALUES
(1, 'gitweb@cf2m.be', 'Coucou les ami.e.s.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam maecenas sed enim ut sem viverra aliquet eget sit. Massa enim nec dui nunc mattis enim.', '2024-02-12 13:13:24'),
(2, 'pierre.sandron@gmail.com', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2024-02-12 13:15:15');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
