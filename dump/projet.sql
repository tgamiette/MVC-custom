-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 10 déc. 2021 à 15:23
-- Version du serveur : 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` int(24) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `lastName`, `firstName`, `password`, `mail`, `admin`) VALUES
(20, 'fdfsd', 'dfsdfds', '$2y$10$FuId0hoJ9X.UnXUKW61WqucESgzRu/wZWE7wtvfcmU2YYnEtq4iTW', 'jean.bertrand@gmail.com', 0),
(21, 'hjgjh', 'gghhjk', '$2y$10$3Bvy6svZeFgYD7k986uquO7HUU88FRpBX8NImMg.MbRXq044UdlX6', 'jean.bertrand@gmail.com', 0),
(22, 'api', 'api', '$2y$10$lmOhToB5rCb3y2yvJOE7zOwImTDEonjIHDHHVkJSnAQ/GGivwfbDi', 'jean.bertrand@gmail.com', 0),
(23, 'api', 'api', '$2y$10$sgVDlNnV4Gknr2FF6lQxQusxDogp8hKtu7FYfJWCvjmTlV7hK2xCa', 'jean.bertrand@gmail.com', 0),
(24, 'fdsq', 'fds', '$2y$10$Rh/uxgvz8ke.CAPMInQZIuu0t9I1VQ2iwtXvBSQZu0FdVF8n6qkca', 'jean.bertrand@gmail.com', 0),
(25, 'fdsq', 'fds', '$2y$10$TZDCyBu3kBSfWh9iDtqEA.B.8Srsy5ieFf.k7w7k60clYZXYSz0Di', 'jean.bertrand@gmail.com', 0),
(26, 'gamiette', 'teddy', '$2y$10$qVzAgiAaFjkkN6ymjXP08.7OMRXW33wyn.K1fg4s0wj4WQuCj6tve', 'teddy971@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(24) NOT NULL,
  `author` int(24) NOT NULL,
  `content` varchar(255) NOT NULL,
  `publishedAt` varchar(20) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `author`, `content`, `publishedAt`, `post`) VALUES
(1, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(2, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(4, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(6, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(7, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(8, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(9, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(10, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(11, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(12, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(13, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(14, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(15, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(16, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(17, 3, 'ceci est le contenu', '2021-12-16 11:28:00', 1),
(18, 3, 'vtf', '2021-12-16 11:28:00', 1),
(19, 3, 'vtf', '2021-12-16 11:28:00', 1),
(20, 3, 'vtf', '2021-12-16 11:28:00', 1),
(21, 3, 'vtf', '2021-12-16 11:28:00', 1),
(22, 3, 'vtf', '2021-12-16 11:28:00', 1),
(23, 4, 'test api Post ', '1998-05-21 00:00:00', 2),
(24, 4, 'test api Post ', '1998-05-21 00:00:00', 4),
(30, 9, 'faker', '2021-05-21 18:43:43', 5);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `img_nom` varchar(50) NOT NULL,
  `img_taille` varchar(25) NOT NULL,
  `img_type` varchar(25) NOT NULL,
  `img_desc` varchar(100) NOT NULL,
  `img_blob` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(24) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `author` int(24) NOT NULL,
  `publishedAt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `author`, `publishedAt`) VALUES
(2, 'prime a la casse', 'cela à éé prolongé en 2022', 4, '2021-12-16 11:28:00'),
(4, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(6, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(7, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(8, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(9, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(10, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(11, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(12, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(13, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(14, 'Ceci est un post officiel', 'non c\'est faux', 1, '2021-01-16 11:30:00'),
(15, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(16, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(17, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(18, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(19, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(20, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(21, 'Ceci est un vtf officiel', 'non c\'est faux vtf', 1, '2021-01-16 11:30:00'),
(22, 'api', 'api content', 1, '1998-05-21 11:28:00'),
(23, 'test api', 'ceci est un test api', 1, '2022-12-21 15:21:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
