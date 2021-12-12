-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 déc. 2021 à 04:01
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hogwarts_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `archive`
--

CREATE TABLE `archive` (
  `ID_utilisateur` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `profilpicture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `archivematiere`
--

CREATE TABLE `archivematiere` (
  `idmatiere` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `coff` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `idclub` int(255) NOT NULL,
  `nomclub` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`idclub`, `nomclub`, `logo`) VALUES
(16, 'libertad', '258882158_682842689308739_2917223630733778342_n.jpg'),
(17, 'geeks', 'aa.png');

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `idcour` int(255) NOT NULL,
  `ncour` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `idmatiere` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`idcour`, `ncour`, `file`, `idmatiere`) VALUES
(108, 'linux', 'pdf.pdf', 44),
(109, 'windows', 'pdf.pdf', 44),
(110, 'codage', 'pdf.pdf', 44),
(111, 'uml', 'pdf.pdf', 42),
(112, 'html', 'pdf.pdf', 42),
(113, 'php', 'pdf.pdf', 42),
(120, 'limite', 'pdf.pdf', 43),
(121, 'graphe', 'pdf.pdf', 43);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `profilpicture` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `email`, `password`, `name`, `first_name`, `date_of_birth`, `role`, `profilpicture`, `classe`) VALUES
(64280570, 'yesmine.guesmi@esprit.tn', 'Djapa18072001', 'fsd', 'fsd', '2001-01-01', 'Etudiant', 'aa.png', '50');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idevent` int(255) NOT NULL,
  `nomevent` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `idclub` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`idevent`, `nomevent`, `date`, `idclub`) VALUES
(18, 'geek land', '2021-12-14', 17),
(19, 'sdf', '2001-01-01', 16);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `coff` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `titre`, `coff`, `hour`) VALUES
(42, 'web', '8', '100'),
(43, 'math', '5', '80'),
(44, 'reseau', '7', '60');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `idnote` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `idmatiere` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`idnote`, `nom`, `prenom`, `notes`, `idmatiere`) VALUES
(36, 'amir', 'soltani', '', 43),
(37, 'yesmine', 'guesmi', '20', 43),
(38, 'adam', 'rafraf', '', 44),
(39, 'rayen', 'dhraief', '15', 44),
(40, 'ala', 'mazouz', '2', 44),
(41, 'mahmoud', 'ammar', '20', 42),
(42, 'anis', 'trabelsi', '18', 42),
(43, 'amir', 'soltani', '', 42);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `ID_prof` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `profilpicture` varchar(255) NOT NULL,
  `idmatiere` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_utilisateur` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `profilpicture` varchar(255) DEFAULT NULL,
  `admin_bool` tinyint(1) NOT NULL DEFAULT 0,
  `code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_utilisateur`, `email`, `password`, `name`, `first_name`, `date_of_birth`, `role`, `profilpicture`, `admin_bool`, `code`) VALUES
(0, 'admin@esprit.tn', 'djapa', '', '', '0000-00-00', 'Admin', '258958268_611490930294254_8004531003194094641_n.jpg', 1, 0),
(64280570, 'yesmine.guesmi@esprit.tn', 'Djapa18072001', 'fsd', 'fsd', '2001-01-01', 'Etudiant', 'aa.png', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `archivematiere`
--
ALTER TABLE `archivematiere`
  ADD PRIMARY KEY (`idmatiere`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`idclub`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`idcour`),
  ADD KEY `matiere_cour` (`idmatiere`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `eventclub` (`idclub`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idmatiere`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`idnote`),
  ADD KEY `matiere_note` (`idmatiere`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`ID_prof`),
  ADD KEY `ID_prof` (`ID_prof`),
  ADD KEY `idmatiere` (`idmatiere`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `archivematiere`
--
ALTER TABLE `archivematiere`
  MODIFY `idmatiere` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `idclub` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `idcour` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idmatiere` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `idnote` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `matiere_cour` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `utilisateur_etudiant` FOREIGN KEY (`ID`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `eventclub` FOREIGN KEY (`idclub`) REFERENCES `club` (`idclub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `matiere_note` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `prof`
--
ALTER TABLE `prof`
  ADD CONSTRAINT `matiere_prof` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`),
  ADD CONSTRAINT `utilisateur_prof` FOREIGN KEY (`ID_prof`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
