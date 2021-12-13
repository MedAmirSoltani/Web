-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogwarts_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE `absence` (
  `Id_absence` int(255) NOT NULL,
  `Id_etudiant` int(255) NOT NULL,
  `Module` varchar(255) NOT NULL,
  `Date_absence` date NOT NULL,
  `Heure_absence` time NOT NULL,
  `Description` varchar(255) NOT NULL,
  `type_reclamation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`Id_absence`, `Id_etudiant`, `Module`, `Date_absence`, `Heure_absence`, `Description`, `type_reclamation`) VALUES
(121, 201, 'Base de Donnees', '2021-12-07', '09:38:00', 'Rayen', 2),
(122, 201, 'Projet Technologies web', '2021-11-29', '11:39:00', 'Amir', 2);

-- --------------------------------------------------------

--
-- Table structure for table `archive`
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
-- Table structure for table `archivecomment`
--

CREATE TABLE `archivecomment` (
  `Idcommantar` int(11) NOT NULL,
  `Comment_text` varchar(255) NOT NULL,
  `Date_Comment` date NOT NULL,
  `Idpostar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archivematiere`
--

CREATE TABLE `archivematiere` (
  `idmatiere` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `coff` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archivepost`
--

CREATE TABLE `archivepost` (
  `Idpostar` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archivereply`
--

CREATE TABLE `archivereply` (
  `Idreply` int(11) NOT NULL,
  `Reply_text` varchar(255) NOT NULL,
  `Date_reply` date NOT NULL,
  `idcommentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Nbrsalles` int(11) NOT NULL,
  `Typesalles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`Id`, `Nom`, `Nbrsalles`, `Typesalles`) VALUES
(12339, 'rima dhkeya', 24, '22'),
(12341, 'malek', 22, '22'),
(12342, 'Kll', 20, '10'),
(12343, 'Lezmek tfasekh sea eli mawjoudin fi tab salle khater el cle primaire hedhi cle etranger fi tabl sale', 20, '1337');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `idclub` int(255) NOT NULL,
  `nomclub` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`idclub`, `nomclub`, `logo`) VALUES
(16, 'libertad', '258882158_682842689308739_2917223630733778342_n.jpg'),
(17, 'geeks', 'aa.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Idcomment` int(11) NOT NULL,
  `Comment_text` varchar(255) NOT NULL,
  `Date_Comment` date NOT NULL,
  `Idpost` int(11) NOT NULL,
  `ID_utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Idcomment`, `Comment_text`, `Date_Comment`, `Idpost`, `ID_utilisateur`) VALUES
(4, 'well well', '2021-12-12', 2, 123456),
(5, 'MALA JAW WOW MAN', '2021-12-12', 2, 64280570),
(6, 'etudiant ya3mel fi commenaire LESSSS GOOOOO', '2021-12-12', 4, 64280570),
(7, 'COMMENT PROF', '2021-12-12', 5, 751805),
(8, 'waaaaa', '2021-12-12', 6, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `cour`
--

CREATE TABLE `cour` (
  `idcour` int(255) NOT NULL,
  `ncour` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `idmatiere` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cour`
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
-- Table structure for table `etudiant`
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
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `email`, `password`, `name`, `first_name`, `date_of_birth`, `role`, `profilpicture`, `classe`) VALUES
(64280570, 'yesmine.guesmi@esprit.tn', 'Djapa18072001', 'fsd', 'fsd', '2001-01-01', 'Etudiant', 'aa.png', '50');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idevent` int(255) NOT NULL,
  `nomevent` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `idclub` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idevent`, `nomevent`, `date`, `idclub`) VALUES
(18, 'geek land', '2021-12-14', 17),
(19, 'sdf', '2001-01-01', 16);

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `coff` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `titre`, `coff`, `hour`) VALUES
(42, 'web', '8', '100'),
(43, 'math', '5', '80'),
(44, 'reseau', '7', '60');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `idnote` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `idmatiere` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Idpost` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Description` text NOT NULL,
  `Ncomments` int(11) NOT NULL,
  `Nvotes` int(11) NOT NULL,
  `ID_utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Idpost`, `Title`, `Picture`, `Date`, `Description`, `Ncomments`, `Nvotes`, `ID_utilisateur`) VALUES
(2, 'TEST', '1638139567708.png', '2021-12-12', 'WELLISITWORKINGLADS', 3, 0, 123456),
(3, 'POST', '248017401_262365422493030_6822324499029606033_n.jpg', '2021-12-12', 'GOIRGRGRHGRHGORG', 0, 0, 123456),
(4, 'ETUDIANT', '1631804923136.gif', '2021-12-12', 'WOWETUDIANMAMAMIA', 1, 1, 64280570),
(5, 'PROF', '1635194283208.png', '2021-12-12', 'PROFPROFPROF', 1, 1, 751805),
(6, 'AMIRGAY', '11426760_462304253925016_3791291957869282694_n.jpg', '2021-12-12', 'SAHEBANISGAYYYY', 1, 0, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `prof`
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

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`ID_prof`, `email`, `password`, `name`, `first_name`, `date_of_birth`, `role`, `profilpicture`, `idmatiere`) VALUES
(751805, 'Prof@esprit.tn', 'Prof123456', 'PROF', 'PROF', '2000-01-01', 'Prof', '', 42);

-- --------------------------------------------------------

--
-- Table structure for table `rec_autre`
--

CREATE TABLE `rec_autre` (
  `Id_autre` int(255) NOT NULL,
  `Id_etudiant` int(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `type_reclamation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec_autre`
--

INSERT INTO `rec_autre` (`Id_autre`, `Id_etudiant`, `Description`, `type_reclamation`) VALUES
(2, 201, 'Rayen', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rec_note`
--

CREATE TABLE `rec_note` (
  `Id_note` int(255) NOT NULL,
  `Id_etudiant` int(255) NOT NULL,
  `Module` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `type_reclamation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec_note`
--

INSERT INTO `rec_note` (`Id_note`, `Id_etudiant`, `Module`, `Description`, `type_reclamation`) VALUES
(11, 201, 'Projet Technologies web', 'Rayen', 1),
(12, 201, 'Mathematique', 'Amir', 1),
(13, 201, 'Mathematique', 'Djapa', 1),
(14, 201, 'Base de Donnees', 'ADAM', 1),
(15, 201, 'Projet Technologies web', 'SEL3A', 1),
(16, 201, 'Mathematique', 'RAYEN2', 1),
(121, 0, '', '', 1),
(122, 0, '', '', 1),
(123, 0, '', '', 1),
(124, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registre_appel`
--

CREATE TABLE `registre_appel` (
  `IdRegistre` int(255) NOT NULL,
  `Id_etudiant` int(255) NOT NULL,
  `Etudiant` varchar(255) NOT NULL,
  `Module` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  `Etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registre_appel`
--

INSERT INTO `registre_appel` (`IdRegistre`, `Id_etudiant`, `Etudiant`, `Module`, `Date`, `Heure`, `Etat`) VALUES
(1, 201, 'Mohamed Rayen Dhraief', 'Projet Technologies web', '2021-11-28', '15:13:00', 'présent'),
(3, 201, 'Yesmine Guesmi', 'Mathematique', '2021-11-12', '14:21:00', 'absent'),
(4, 201, 'Amir Soltani', 'Mathematique', '2021-11-04', '15:54:00', 'présent'),
(5, 201, 'Adam Rafraf', 'Mathematique', '2021-12-06', '13:42:32', 'absent'),
(6, 201, 'Ala Mazouz', 'Base de Donnees', '2021-12-03', '09:42:32', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `Idreply` int(11) NOT NULL,
  `Reply_text` varchar(255) NOT NULL,
  `Date_reply` date NOT NULL,
  `idcomment` int(11) NOT NULL,
  `ID_utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`Idreply`, `Reply_text`, `Date_reply`, `idcomment`, `ID_utilisateur`) VALUES
(76, 'WOW MOCH NORMAL', '2021-12-12', 4, 64280570),
(78, 'for real ?', '2021-12-12', 6, 64280570),
(79, 'WOW', '2021-12-12', 7, 751805);

-- --------------------------------------------------------

--
-- Table structure for table `salles`
--

CREATE TABLE `salles` (
  `Id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `Nbrprojecteurs` int(11) NOT NULL,
  `Nbrtables` int(11) NOT NULL,
  `Nbrchaises` int(11) NOT NULL,
  `id_block` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salles`
--

INSERT INTO `salles` (`Id`, `nom`, `Nbrprojecteurs`, `Nbrtables`, `Nbrchaises`, `id_block`) VALUES
(21, 'Lezmek tfasekh sea eli mawjoudin fi tab salle khater el cle primaire hedhi cle etranger fi tabl sale', 1337, 420, 69, 12339);

-- --------------------------------------------------------

--
-- Table structure for table `type_reclamation`
--

CREATE TABLE `type_reclamation` (
  `Id_reclamation` int(255) NOT NULL,
  `Type_reclamation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_reclamation`
--

INSERT INTO `type_reclamation` (`Id_reclamation`, `Type_reclamation`) VALUES
(1, 'Note'),
(2, 'Absence'),
(3, 'Autre');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
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
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_utilisateur`, `email`, `password`, `name`, `first_name`, `date_of_birth`, `role`, `profilpicture`, `admin_bool`, `code`) VALUES
(123456, 'Admin@hogwarts.tn', 'Admoun', 'Admoun', 'Admoun', '2000-09-09', 'Admin', '1638014122102.jpg', 1, 0),
(751805, 'Prof@esprit.tn', 'Prof123456', 'PROF', 'PROF', '2000-01-01', 'Prof', 'Guilty-Gear-Strive-I-No-710x400.jpg', 0, 0),
(64280570, 'yesmine.guesmi@esprit.tn', 'Djapa18072001', 'fsd', 'fsd', '2001-01-01', 'Etudiant', 'aa.png', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`Id_absence`),
  ADD KEY `fk_absence_type_reclamation` (`type_reclamation`),
  ADD KEY `pjgyvygyt` (`Id_etudiant`),
  ADD KEY `type_reclamation` (`type_reclamation`);

--
-- Indexes for table `archivecomment`
--
ALTER TABLE `archivecomment`
  ADD PRIMARY KEY (`Idcommantar`),
  ADD KEY `Idpostarfk` (`Idpostar`);

--
-- Indexes for table `archivematiere`
--
ALTER TABLE `archivematiere`
  ADD PRIMARY KEY (`idmatiere`);

--
-- Indexes for table `archivepost`
--
ALTER TABLE `archivepost`
  ADD PRIMARY KEY (`Idpostar`);

--
-- Indexes for table `archivereply`
--
ALTER TABLE `archivereply`
  ADD PRIMARY KEY (`Idreply`),
  ADD KEY `Idcommentarfk` (`idcommentar`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`idclub`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Idcomment`),
  ADD KEY `PostComment` (`Idpost`),
  ADD KEY `uticomment` (`ID_utilisateur`);

--
-- Indexes for table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`idcour`),
  ADD KEY `matiere_cour` (`idmatiere`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `eventclub` (`idclub`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idmatiere`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`idnote`),
  ADD KEY `matiere_note` (`idmatiere`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Idpost`),
  ADD KEY `idpost` (`ID_utilisateur`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`ID_prof`),
  ADD KEY `ID_prof` (`ID_prof`),
  ADD KEY `idmatiere` (`idmatiere`);

--
-- Indexes for table `rec_autre`
--
ALTER TABLE `rec_autre`
  ADD PRIMARY KEY (`Id_autre`),
  ADD KEY `waara` (`type_reclamation`),
  ADD KEY `hjkkbg` (`Id_etudiant`);

--
-- Indexes for table `rec_note`
--
ALTER TABLE `rec_note`
  ADD PRIMARY KEY (`Id_note`),
  ADD KEY `idkmen` (`type_reclamation`),
  ADD KEY `iddd` (`Id_etudiant`);

--
-- Indexes for table `registre_appel`
--
ALTER TABLE `registre_appel`
  ADD PRIMARY KEY (`IdRegistre`),
  ADD KEY `idkman` (`Id_etudiant`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`Idreply`),
  ADD KEY `reply-comment` (`idcomment`),
  ADD KEY `utireply` (`ID_utilisateur`);

--
-- Indexes for table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_block` (`id_block`);

--
-- Indexes for table `type_reclamation`
--
ALTER TABLE `type_reclamation`
  ADD PRIMARY KEY (`Id_reclamation`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absence`
--
ALTER TABLE `absence`
  MODIFY `Id_absence` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `archivecomment`
--
ALTER TABLE `archivecomment`
  MODIFY `Idcommantar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archivematiere`
--
ALTER TABLE `archivematiere`
  MODIFY `idmatiere` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `archivepost`
--
ALTER TABLE `archivepost`
  MODIFY `Idpostar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archivereply`
--
ALTER TABLE `archivereply`
  MODIFY `Idreply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12344;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `idclub` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cour`
--
ALTER TABLE `cour`
  MODIFY `idcour` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idmatiere` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `idnote` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rec_autre`
--
ALTER TABLE `rec_autre`
  MODIFY `Id_autre` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rec_note`
--
ALTER TABLE `rec_note`
  MODIFY `Id_note` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `registre_appel`
--
ALTER TABLE `registre_appel`
  MODIFY `IdRegistre` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `Idreply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `salles`
--
ALTER TABLE `salles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `type_reclamation`
--
ALTER TABLE `type_reclamation`
  MODIFY `Id_reclamation` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `iuhiug` FOREIGN KEY (`type_reclamation`) REFERENCES `type_reclamation` (`Id_reclamation`) ON DELETE CASCADE,
  ADD CONSTRAINT `pjgyvygyt` FOREIGN KEY (`Id_etudiant`) REFERENCES `etudiant` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `archivecomment`
--
ALTER TABLE `archivecomment`
  ADD CONSTRAINT `Idpostarfk` FOREIGN KEY (`Idpostar`) REFERENCES `archivepost` (`Idpostar`) ON DELETE CASCADE;

--
-- Constraints for table `archivereply`
--
ALTER TABLE `archivereply`
  ADD CONSTRAINT `Idcommentarfk` FOREIGN KEY (`idcommentar`) REFERENCES `archivecomment` (`Idcommantar`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `PostComment` FOREIGN KEY (`Idpost`) REFERENCES `post` (`Idpost`) ON DELETE CASCADE,
  ADD CONSTRAINT `uticomment` FOREIGN KEY (`ID_utilisateur`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE;

--
-- Constraints for table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `matiere_cour` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `utilisateur_etudiant` FOREIGN KEY (`ID`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `eventclub` FOREIGN KEY (`idclub`) REFERENCES `club` (`idclub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `matiere_note` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `idpost` FOREIGN KEY (`ID_utilisateur`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `prof`
--
ALTER TABLE `prof`
  ADD CONSTRAINT `matiere_prof` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`),
  ADD CONSTRAINT `utilisateur_prof` FOREIGN KEY (`ID_prof`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rec_autre`
--
ALTER TABLE `rec_autre`
  ADD CONSTRAINT `hjkkbg` FOREIGN KEY (`Id_etudiant`) REFERENCES `etudiant` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `waara` FOREIGN KEY (`type_reclamation`) REFERENCES `type_reclamation` (`Id_reclamation`) ON DELETE CASCADE;

--
-- Constraints for table `rec_note`
--
ALTER TABLE `rec_note`
  ADD CONSTRAINT `iddd` FOREIGN KEY (`Id_etudiant`) REFERENCES `etudiant` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `idkmen` FOREIGN KEY (`type_reclamation`) REFERENCES `type_reclamation` (`Id_reclamation`) ON DELETE CASCADE;

--
-- Constraints for table `registre_appel`
--
ALTER TABLE `registre_appel`
  ADD CONSTRAINT `idkman` FOREIGN KEY (`Id_etudiant`) REFERENCES `etudiant` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply-comment` FOREIGN KEY (`idcomment`) REFERENCES `comment` (`Idcomment`) ON DELETE CASCADE,
  ADD CONSTRAINT `utireply` FOREIGN KEY (`ID_utilisateur`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE;

--
-- Constraints for table `salles`
--
ALTER TABLE `salles`
  ADD CONSTRAINT `salles_ibfk_1` FOREIGN KEY (`id_block`) REFERENCES `blocks` (`Id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
