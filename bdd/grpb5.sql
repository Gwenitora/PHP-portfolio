-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 30 Novembre 2022 à 15:46
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpb5`
--
CREATE DATABASE IF NOT EXISTS `grpb5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grpb5`;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `img_carousel` varchar(100) CHARACTER SET utf8 NOT NULL,
  `img_pres` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `icone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `soft` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `skills_projects`
--

CREATE TABLE `skills_projects` (
  `id_projects` int(11) NOT NULL,
  `id_skills` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `img` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `as_portfolio` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `img`, `admin`, `as_portfolio`, `description`) VALUES
(1, 'root', 'aed2651acd0d438250c29cf4e58d4803b244f8ac', 'root@root.root', NULL, 1, 1, NULL),
(2, 'a', '689c263fa27b3081d3d87d8dbe5a52d744c7f562', 'a@a.a', NULL, 0, 0, NULL),
(3, 'b', '6e2e59e6d1116b4bfe9b88460d8adbde6dd2d22e', 'a.b@g.com', NULL, 0, 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills_projects`
--
ALTER TABLE `skills_projects`
  ADD PRIMARY KEY (`id_projects`,`id_skills`),
  ADD KEY `id_projects` (`id_projects`,`id_skills`),
  ADD KEY `id_projects_2` (`id_projects`,`id_skills`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
