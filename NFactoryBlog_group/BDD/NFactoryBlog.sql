-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 01 fév. 2018 à 19:22
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `NFactoryBlog`
--

-- --------------------------------------------------------

--
-- Structure de la table `T_ARTICLES`
--

CREATE TABLE `T_ARTICLES` (
  `ID_ARTICLE` int(11) NOT NULL,
  `ARTTITRE` varchar(45) NOT NULL,
  `ARTCHAPO` varchar(45) DEFAULT NULL,
  `ARTCONTENU` longtext NOT NULL,
  `ARTDATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_ARTICLES`
--

INSERT INTO `T_ARTICLES` (`ID_ARTICLE`, `ARTTITRE`, `ARTCHAPO`, `ARTCONTENU`, `ARTDATE`) VALUES
(1, 'Premier article', NULL, 'Star Wars (à l\'origine nommée sous son titre français, La Guerre des étoiles) est un univers de fantasy et de science-fiction créé par George Lucas. D\'abord conçue comme une trilogie cinématographique sortie entre 1977 et 1983, la saga s\'élargit ensuite de trois nouveaux films entre 1999 et 2005, narrant des événements antérieurs à la première trilogie. Cette dernière (épisodes IV, V et VI) ainsi que la deuxième trilogie dite « Prélogie » (épisodes I, II et III) connaissent un immense succès commercial et un accueil critique généralement positif. Dans un souci de cohérence et pour atteindre un résultat qu\'il n\'avait pas pu obtenir dès le départ, le créateur de la saga retravaille également les films de sa première trilogie, ressortis en 1997 et 2004 dans de nouvelles versions. Les droits d\'auteur de Star Wars sont achetés en 2012 par la Walt Disney Company pour 4,05 milliards de dollars : la sortie au cinéma du septième épisode de la saga et premier de la troisième trilogie (épisodes VII, VIII et IX) est alors planifiée pour 2015. Le Réveil de la Force devient en l\'espace d\'un mois le plus important succès commercial de la franchise. Le lancement d\'une quatrième trilogie est annoncé par Disney en novembre 2017.', '2018-01-12 14:50:08'),
(2, 'Deuxieme article', NULL, 'Walt Disney Pictures est un studio de production cinématographique créé le 1er avril 1983 comme une filiale de la société Walt Disney Productions, renommée Walt Disney Company en 1986. Il continue à produire ce qui formait le cœur de métier de la société Disney fondée en 1923 par Walt Disney, des films d\'animation et d\'autres en prise de vue réelle. Avant que cette filiale ne soit créée, il s\'agissait d\'un service interne de la compagnie.\r\n\r\n', '2018-01-12 14:51:01'),
(3, 'Retour vers le futur', NULL, '1985. Le jeune Marty McFly mène une existence anonyme auprès de sa petite amie Jennifer, seulement troublée par sa famille en crise et un proviseur qui serait ravi de l\'expulser du lycée. Ami de l\'excentrique professeur Emmett Brown, il l\'accompagne un soir tester sa nouvelle expérience : le voyage dans le temps via une DeLorean modifiée. La démonstration tourne mal : des trafiquants d\'armes débarquent et assassinent le scientifique. Marty se réfugie dans la voiture et se retrouve transporté en 1955. Là, il empêche malgré lui la rencontre de ses parents, et doit tout faire pour les remettre ensemble, sous peine de ne pouvoir exister...\r\n\r\n', '2018-01-15 10:39:09'),
(4, 'Star Wars Ep 8', NULL, 'Les h&eacute;ros du&nbsp;R&eacute;veil de la force rejoignent les figures l&eacute;gendaires de la galaxie dans une aventure &eacute;pique qui r&eacute;v&egrave;le des secrets ancestraux sur la Force et entra&icirc;ne de surprenantes r&eacute;v&eacute;lations sur le pass&eacute;&hellip;', '2018-01-15 10:43:40'),
(5, 'le lorem', NULL, '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">Le&nbsp;</span><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les ann&eacute;es 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n\'a pas fait que survivre cinq si&egrave;cles, mais s\'est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n\'en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></p>', '2018-01-15 10:46:36'),
(6, 'un article pour rien', NULL, '&lt;p&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=&quot;font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;ist ein einfacher Demo-Text f&amp;uuml;r die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller eine Hand voll W&amp;ouml;rter nahm und diese durcheinander warf um ein Musterbuch zu erstellen. Es hat nicht nur 5 Jahrhunderte &amp;uuml;berlebt, sondern auch in Spruch in die elektronische Schriftbearbeitung geschafft (bemerke, nahezu unver&amp;auml;ndert). Bekannt wurde es 1960, mit dem erscheinen von &quot;Letraset&quot;, welches Passagen von Lorem Ipsum enhielt, so wie Desktop Software wie &quot;Aldus PageMaker&quot; - ebenfalls mit Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;', '2018-01-15 10:49:42'),
(7, 'septieme article', NULL, '&lt;p&gt;Bonjour bonjour&lt;/p&gt;', '2018-01-15 14:31:55'),
(8, 'septieme article', NULL, '&lt;p&gt;Bonjour bonjour&lt;/p&gt;', '2018-01-15 14:33:50'),
(9, 'septieme article', NULL, '&lt;p&gt;Bonjour bonjour&lt;/p&gt;', '2018-01-15 14:34:35'),
(10, 'septieme article', NULL, '&lt;p&gt;Bonjour bonjour&lt;/p&gt;', '2018-01-15 14:42:22'),
(11, 'septieme article', NULL, '&lt;p&gt;Bonjour bonjour&lt;/p&gt;', '2018-01-15 14:47:40'),
(12, 'un nouvel article', 'test du chapo', '&lt;p&gt;d^ghoeirhbeoifhboebh&lt;/p&gt;', '2018-01-16 11:03:38'),
(13, 'Notre nouvel article avec Florent', 'Bonjour Fr&eacute;d&eacute;ric', '&lt;p&gt;Bonjour Fr&amp;eacute;d&amp;eacute;ric,&lt;/p&gt;\r\n&lt;p&gt;nous &amp;eacute;crivons un nouvel article !&lt;/p&gt;', '2018-01-19 17:12:08'),
(14, 'Un nouvel article aujourd\'hui', 'test du PDO', '&lt;p&gt;on va voir si l\'article et la mise en table T_ARTICLES_has_T_USERS fonctionne&lt;/p&gt;', '2018-01-22 12:34:58'),
(15, 'Un dernier article', 'hey c\'est le chapo', '&lt;p&gt;je teste les cat&amp;eacute;gories&lt;/p&gt;', '2018-01-22 17:31:38'),
(16, 'Article sur les jedi', 'la force est ne moi', '&lt;p&gt;Bonjour je suis un maitre JEDI&lt;/p&gt;', '2018-01-23 10:05:00'),
(17, 'Titre de l\'article', 'chapo', '&lt;p&gt;&amp;ugrave;grbsjpfdobhlksB&lt;/p&gt;', '2018-02-01 17:03:53');

-- --------------------------------------------------------

--
-- Structure de la table `T_ARTICLES_has_T_USERS`
--

CREATE TABLE `T_ARTICLES_has_T_USERS` (
  `T_ARTICLES_ID_ARTICLE` int(11) NOT NULL,
  `T_USERS_ID_USER` int(11) NOT NULL,
  `T_USERS_T_ROLES_ID_ROLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_ARTICLES_has_T_USERS`
--

INSERT INTO `T_ARTICLES_has_T_USERS` (`T_ARTICLES_ID_ARTICLE`, `T_USERS_ID_USER`, `T_USERS_T_ROLES_ID_ROLE`) VALUES
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 13, 2),
(17, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `T_CATEGORIES`
--

CREATE TABLE `T_CATEGORIES` (
  `ID_CATEGORIE` int(11) NOT NULL,
  `CATLIBELLE` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_CATEGORIES`
--

INSERT INTO `T_CATEGORIES` (`ID_CATEGORIE`, `CATLIBELLE`) VALUES
(1, 'SPORT'),
(2, 'FINANCE'),
(3, 'TECHNOLOGIE'),
(4, 'ENSEIGNEMENT'),
(5, 'HISTOIRE'),
(20, 'Droit');

-- --------------------------------------------------------

--
-- Structure de la table `T_CATEGORIES_has_T_ARTICLES`
--

CREATE TABLE `T_CATEGORIES_has_T_ARTICLES` (
  `T_CATEGORIES_ID_CATEGORIE` int(11) NOT NULL,
  `T_ARTICLES_ID_ARTICLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_CATEGORIES_has_T_ARTICLES`
--

INSERT INTO `T_CATEGORIES_has_T_ARTICLES` (`T_CATEGORIES_ID_CATEGORIE`, `T_ARTICLES_ID_ARTICLE`) VALUES
(1, 1),
(3, 8),
(2, 11),
(4, 11),
(1, 12),
(4, 13),
(5, 13),
(3, 14),
(5, 14),
(1, 15),
(4, 15),
(5, 15),
(1, 16),
(3, 16),
(4, 16),
(5, 16),
(1, 17),
(3, 17);

-- --------------------------------------------------------

--
-- Structure de la table `T_ROLES`
--

CREATE TABLE `T_ROLES` (
  `ID_ROLE` int(11) NOT NULL,
  `ROLEDESI` varchar(45) NOT NULL,
  `ROLEDEF` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_ROLES`
--

INSERT INTO `T_ROLES` (`ID_ROLE`, `ROLEDESI`, `ROLEDEF`) VALUES
(1, 'ROLE_SUPERADMIN', NULL),
(2, 'ROLE_ADMIN', NULL),
(3, 'ROLE_MODERATEUR', NULL),
(4, 'ROLE_REDACTEUR', NULL),
(5, 'ROLE_UTILISATEUR', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `T_USERS`
--

CREATE TABLE `T_USERS` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(45) NOT NULL,
  `USERFNAME` varchar(45) DEFAULT NULL,
  `USERMAIL` varchar(255) NOT NULL,
  `USERPASSWORD` char(40) NOT NULL,
  `USERDATEINS` datetime DEFAULT NULL,
  `T_ROLES_ID_ROLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_USERS`
--

INSERT INTO `T_USERS` (`ID_USER`, `USERNAME`, `USERFNAME`, `USERMAIL`, `USERPASSWORD`, `USERDATEINS`, `T_ROLES_ID_ROLE`) VALUES
(1, 'Jourand', 'Benjamin', 'benjamin.jourand@gmail.com', '579af79ff0c95e2a3c20a6290eae0a6baf4ea462', NULL, 1),
(2, 'DUDU', 'ANDRE', 'andre.dede@gmail.com', 'bc9800b9d52a24cce72a73dd528afed53f10e5fc', NULL, 5),
(4, 'Machin', 'Bidule', 'machin.bidule@gmail.com', '89fc2e196c3516c525c3672527317c2767789325', NULL, 5),
(6, 'toto', 'toto', 'toto@gmail.com', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8', NULL, 3),
(7, 'boubou', 'boubou', 'boubou@boubou.com', '58dfceb5368aaefcd6853cb8ea4a9126f8d3d8a0', NULL, 5),
(13, 'Skywalker', 'Luke', 'luke@gmail.com', '0420bd79fea0fc2f611dc9a0f52f4e8185277e09', NULL, 2),
(14, 'dark', 'vador', 'darkvador@gmail.com', '1a7f13fd001c9b194590e89f81c72b3f7a64345a', NULL, 5),
(15, 'obiwan', 'kenoby', 'obiwan@gmail.com', '44ace56bcb4e4b760bc8488d0838b97753bbfd73', NULL, 5),
(16, 'marty', 'macfly', 'marty@gmail.com', '8dd9ce7300caf35ca55f5e3ecdf6b2739a4d3b4f', NULL, 4),
(17, 'emmet', 'brown', 'emmetbrown@gmail.com', 'f7f029ecb98abe979074a3ab45b74dbd9af02d42', NULL, 5),
(18, 'steve', 'jobs', 'stevejobs@gmail.com', 'd0be2dc421be4fcd0172e5afceea3970e2f3d940', NULL, 2),
(19, 'Disney', 'Walt', 'walt@disney.fr', 'ecdb6dfd69ff69781918899c8fc69ec1481ef204', NULL, 5),
(20, 'ben', 'jay', 'benjamin.nfactory@hotmail.com', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(21, 'toto', 'tato', 'test@test.fr', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(22, 'ben', 'test', 'toto@msn.fr', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(23, 'tat', 'tat', 'tota@gmail.com', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(24, 'sembat', 'marcel', 'marcelsembat@gmail.com', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(25, 'presley', 'elvis', 'theking@vegas.com', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(26, 'Jordan', 'Michael', 'micheal@jordan.fr', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(28, 'ours brun', 'petit', 'petitoursbrun@bonnenuit.lespetits', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(29, 'Jarre', 'Jean Michel', 'jeanmichmich@jarre.tiers', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5),
(30, 'Fernal', 'Alain', 'alainfernal@gmail.com', 'babc08fd5d37c7320c797222e7a1b01b5ea1de15', NULL, 5),
(31, 'toto', 'tata', 'teste@teste.fr', '00d70c561892a94980befd12a400e26aeb4b8599', NULL, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `T_ARTICLES`
--
ALTER TABLE `T_ARTICLES`
  ADD PRIMARY KEY (`ID_ARTICLE`);

--
-- Index pour la table `T_ARTICLES_has_T_USERS`
--
ALTER TABLE `T_ARTICLES_has_T_USERS`
  ADD PRIMARY KEY (`T_ARTICLES_ID_ARTICLE`,`T_USERS_ID_USER`,`T_USERS_T_ROLES_ID_ROLE`),
  ADD KEY `fk_T_ARTICLES_has_T_USERS_T_USERS1_idx` (`T_USERS_ID_USER`,`T_USERS_T_ROLES_ID_ROLE`),
  ADD KEY `fk_T_ARTICLES_has_T_USERS_T_ARTICLES1_idx` (`T_ARTICLES_ID_ARTICLE`);

--
-- Index pour la table `T_CATEGORIES`
--
ALTER TABLE `T_CATEGORIES`
  ADD PRIMARY KEY (`ID_CATEGORIE`);

--
-- Index pour la table `T_CATEGORIES_has_T_ARTICLES`
--
ALTER TABLE `T_CATEGORIES_has_T_ARTICLES`
  ADD PRIMARY KEY (`T_CATEGORIES_ID_CATEGORIE`,`T_ARTICLES_ID_ARTICLE`),
  ADD KEY `fk_T_CATEGORIES_has_T_ARTICLES_T_ARTICLES1_idx` (`T_ARTICLES_ID_ARTICLE`),
  ADD KEY `fk_T_CATEGORIES_has_T_ARTICLES_T_CATEGORIES1_idx` (`T_CATEGORIES_ID_CATEGORIE`);

--
-- Index pour la table `T_ROLES`
--
ALTER TABLE `T_ROLES`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Index pour la table `T_USERS`
--
ALTER TABLE `T_USERS`
  ADD PRIMARY KEY (`ID_USER`,`T_ROLES_ID_ROLE`),
  ADD KEY `fk_T_USERS_T_ROLES_idx` (`T_ROLES_ID_ROLE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `T_ARTICLES`
--
ALTER TABLE `T_ARTICLES`
  MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `T_CATEGORIES`
--
ALTER TABLE `T_CATEGORIES`
  MODIFY `ID_CATEGORIE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `T_ROLES`
--
ALTER TABLE `T_ROLES`
  MODIFY `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `T_USERS`
--
ALTER TABLE `T_USERS`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `T_ARTICLES_has_T_USERS`
--
ALTER TABLE `T_ARTICLES_has_T_USERS`
  ADD CONSTRAINT `fk_T_ARTICLES_has_T_USERS_T_ARTICLES1` FOREIGN KEY (`T_ARTICLES_ID_ARTICLE`) REFERENCES `T_ARTICLES` (`ID_ARTICLE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_ARTICLES_has_T_USERS_T_USERS1` FOREIGN KEY (`T_USERS_ID_USER`,`T_USERS_T_ROLES_ID_ROLE`) REFERENCES `T_USERS` (`ID_USER`, `T_ROLES_ID_ROLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `T_CATEGORIES_has_T_ARTICLES`
--
ALTER TABLE `T_CATEGORIES_has_T_ARTICLES`
  ADD CONSTRAINT `fk_T_CATEGORIES_has_T_ARTICLES_T_ARTICLES1` FOREIGN KEY (`T_ARTICLES_ID_ARTICLE`) REFERENCES `T_ARTICLES` (`ID_ARTICLE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_CATEGORIES_has_T_ARTICLES_T_CATEGORIES1` FOREIGN KEY (`T_CATEGORIES_ID_CATEGORIE`) REFERENCES `T_CATEGORIES` (`ID_CATEGORIE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `T_USERS`
--
ALTER TABLE `T_USERS`
  ADD CONSTRAINT `fk_T_USERS_T_ROLES` FOREIGN KEY (`T_ROLES_ID_ROLE`) REFERENCES `T_ROLES` (`ID_ROLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
