-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 29 jan. 2018 à 00:10
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nfactoryblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE `t_users` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(45) NOT NULL,
  `USERFNAME` varchar(45) DEFAULT NULL,
  `PSEUDO` varchar(255) NOT NULL,
  `USERMAIL` varchar(255) NOT NULL,
  `USERPASSWORD` char(40) NOT NULL,
  `USERDATEINS` datetime DEFAULT NULL,
  `T_ROLES_ID_ROLE` int(11) NOT NULL,
  `ACTIVE` int(1) NOT NULL DEFAULT '1',
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_users`
--

INSERT INTO `t_users` (`ID_USER`, `USERNAME`, `USERFNAME`, `PSEUDO`, `USERMAIL`, `USERPASSWORD`, `USERDATEINS`, `T_ROLES_ID_ROLE`, `ACTIVE`, `reset_token`, `reset_at`) VALUES
(31, 'aze', 'aze', 'aze', 'aze@aze.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '2018-01-11 23:01:43', 5, 1, 'KdUDfr1YYHSEyMaOlLwrv6y9150uEexGgAY9Tew1hu8znfth2KShyjENIbf9', '2018-01-26 00:19:43'),
(32, 'alili', 'hocine', 'alilihoc', 'hocine.alili@gmail.com', '9e0ef5325e76ab778bbd0865b8ed891ddecda57c', '2018-01-11 23:01:38', 5, 1, NULL, NULL),
(33, 'ali', 'kj', 'ij', 'ij@j.com', '4cfa380a7a05ae26270f5ea888009520ab54b677', '2018-01-12 13:01:54', 5, 0, NULL, NULL),
(34, 'tre', 'tre', 'tre', 'tre@t.fr', '46fd535bbf9187b13dbcf7c26328c9b8479612d4', '2018-01-12 19:01:15', 5, 1, NULL, NULL),
(35, 'a', 'aze', 'azert', 'az@azazz.fr', '6dab20c0f365dbcea9c4d26f7396f70fc5196bac', '2018-01-12 19:01:53', 5, 1, NULL, NULL),
(36, 'tez', 'ze', 'ze', 'ze@ze.fr', '90283840d90de49b8e7984bd99b47fee0d4bd50d', '2018-01-12 23:01:20', 5, 1, NULL, NULL),
(40, '', NULL, 'JC', 'jc@gmail.com', 'f9ae8604de015e6fc12a1ebdbe72f262b981a2f6', '2018-01-21 18:01:28', 2, 1, NULL, NULL),
(52, 'alili', 'hocine', 'alilihoc', 'hocine.alili@gmail.com', '', '2018-01-21 20:01:53', 5, 1, NULL, NULL),
(64, 'aze', 'aze', 'aze', 'aze@aze.fr', '', '2018-01-21 20:01:57', 2, 1, NULL, NULL),
(65, 'aze', 'aze', 'aze', 'aze@aze.fr', '', '2018-01-21 20:01:58', 1, 1, NULL, NULL),
(80, 'aze', 'aze', 'aze', 'aze@aze.fr', '', '2018-01-21 21:01:34', 3, 1, NULL, NULL),
(82, 'a', 'aze', 'azert', 'az@azazz.fr', '', '2018-01-21 22:01:11', 4, 1, NULL, NULL),
(83, '', NULL, 'aa', 'aa@aa.fr', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', '2018-01-28 21:01:55', 2, 1, NULL, NULL),
(84, 'aze', 'aze', 'aze', 'aze@aze.fr', '', '2018-01-28 23:01:49', 4, 1, NULL, NULL),
(85, 'azeee', 'azeeee', 'jean', 'aze@azeeeee.fr', '51f8b1fa9b424745378826727452997ee2a7c3d7', '2018-01-28 23:01:40', 3, 1, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`ID_USER`,`T_ROLES_ID_ROLE`),
  ADD KEY `fk_T_USERS_T_ROLES_idx` (`T_ROLES_ID_ROLE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_users`
--
ALTER TABLE `t_users`
  ADD CONSTRAINT `fk_T_USERS_T_ROLES` FOREIGN KEY (`T_ROLES_ID_ROLE`) REFERENCES `t_roles` (`ID_ROLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
