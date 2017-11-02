-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 02 Novembre 2017 à 16:57
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `correct` tinyint(1) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `answer`
--

INSERT INTO `answer` (`id`, `body`, `correct`, `id_question`) VALUES
(3, 'sdfsdf', 1, 12),
(4, 'test7', 1, 11),
(5, 'réponse7', 0, 11),
(6, 'Paris', 0, 4),
(7, 'Paris', 0, 4),
(8, 'rome', 0, 4),
(9, 'rome', 0, 4),
(10, 'italie', 0, 4),
(11, 'italie', 0, 4),
(12, 'test', 1, 4),
(13, 'test', 1, 4),
(14, 'new', 0, 12),
(16, 'sdsd', 0, 8),
(17, 'test', 0, 8),
(18, 'testestset', 1, 8),
(19, 'ertretret', 1, 8),
(20, 'sdfsdfsd', 0, 8),
(21, 'fgdgdfg', 0, 8),
(22, 'dfgfdg', 1, 8),
(23, 'sdfsdfsdf', 1, 12),
(26, 'sqdsqd', 0, 12);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `title`, `category`, `level`) VALUES
(2, 'sdsd', 'Politique', 3),
(4, 'sdsd', 'Littérature', 1),
(5, 'sdsd', 'Littérature', 1),
(6, 'sdsd', 'Littérature', 1),
(7, 'sdsd', 'Politique', 2),
(8, 'sdsd', 'Politique', 2),
(9, 'test5', 'Politique', 1),
(11, 'test7', 'Littérature', 1),
(12, 'Quel est l\'acteur du Titanic ?', 'Cinéma', 1);

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stagiaire`
--

INSERT INTO `stagiaire` (`id`, `nom`, `prenom`) VALUES
(1, 'abecassis', 'stephane'),
(2, 'chauvet', 'steven'),
(3, 'grivel', 'sébastien');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
