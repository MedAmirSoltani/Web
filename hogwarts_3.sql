-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 02:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

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

--
-- Dumping data for table `archivecomment`
--

INSERT INTO `archivecomment` (`Idcommantar`, `Comment_text`, `Date_Comment`, `Idpostar`) VALUES
(132, 'COMENT', '0000-00-00', 191);

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

--
-- Dumping data for table `archivepost`
--

INSERT INTO `archivepost` (`Idpostar`, `Title`, `Picture`, `Date`, `Description`) VALUES
(191, 'TITRE', 'image (1).png', '2021-12-07', 'GOIRGRGRHGRHGORG');

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

--
-- Dumping data for table `archivereply`
--

INSERT INTO `archivereply` (`Idreply`, `Reply_text`, `Date_reply`, `idcommentar`) VALUES
(72, 'reply', '0000-00-00', 132);

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
  `Idpost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Idcomment`, `Comment_text`, `Date_Comment`, `Idpost`) VALUES
(134, 'COMMENT', '0000-00-00', 192),
(135, 'COMMENT', '0000-00-00', 192),
(136, 'COMMENT', '0000-00-00', 192),
(137, 'wa', '0000-00-00', 206),
(138, 'commentaire', '0000-00-00', 206),
(139, 'commentaire', '0000-00-00', 206);

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
  `Nvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Idpost`, `Title`, `Picture`, `Date`, `Description`, `Ncomments`, `Nvotes`) VALUES
(192, 'IDKWOMAN', 'logo.png', '2021-12-07', 'DESCRIPTIONUPD', 3, 0),
(193, 'IDKMAN', '1631202780973.jpg', '2021-12-07', 'GOIRGRGRHGRHGORG', 0, 0),
(194, 'WEBHH', '248017401_262365422493030_6822324499029606033_n.jpg', '2021-12-07', 'GOIRGRGRHGRHGORG', 0, 0),
(195, 'OMGGG', '1632654314244.jpg', '2021-12-07', 'GOIRGRGRHGRHGORG', 0, 0),
(196, 'MADS', '257364623_114788084344677_68660323700210313_n.jpg', '2021-12-07', 'GOIRGRGRHGRHGORG', 0, 0),
(197, 'TITRE', '1631009885735.jpg', '2021-12-07', 'GOIRGRGRHGRHGORG', 0, 0),
(198, 'WEbman', '1631804923136.gif', '2021-12-07', 'GOIRGRGRHGRHGORG', 0, 0),
(205, 'RESTORE', '1631018381631.jpg', '2021-12-07', 'RESTORE1RESTOR', 0, 10),
(206, 'RESTOREE', '1630855968641.jpg', '2021-12-07', 'RESTORE2RESTOR2', 3, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `Idreply` int(11) NOT NULL,
  `Reply_text` varchar(255) NOT NULL,
  `Date_reply` date NOT NULL,
  `idcomment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`Idreply`, `Reply_text`, `Date_reply`, `idcomment`) VALUES
(74, 'wawawaaw', '2021-12-10', 139);

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
(0, 'admin@esprit.tn', 'djapa', '', '', '0000-00-00', 'Admin', '258958268_611490930294254_8004531003194094641_n.jpg', 1, 0),
(64280570, 'yesmine.guesmi@esprit.tn', 'Djapa18072001', 'fsd', 'fsd', '2001-01-01', 'Etudiant', 'aa.png', 0, 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`idclub`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Idcomment`),
  ADD KEY `PostComment` (`Idpost`);

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
  ADD PRIMARY KEY (`Idpost`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`ID_prof`),
  ADD KEY `ID_prof` (`ID_prof`),
  ADD KEY `idmatiere` (`idmatiere`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`Idreply`),
  ADD KEY `reply-comment` (`idcomment`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archivecomment`
--
ALTER TABLE `archivecomment`
  MODIFY `Idcommantar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `archivematiere`
--
ALTER TABLE `archivematiere`
  MODIFY `idmatiere` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `archivepost`
--
ALTER TABLE `archivepost`
  MODIFY `Idpostar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `archivereply`
--
ALTER TABLE `archivereply`
  MODIFY `Idreply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `idclub` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

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
  MODIFY `Idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `Idreply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `PostComment` FOREIGN KEY (`Idpost`) REFERENCES `post` (`Idpost`) ON DELETE CASCADE;

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
-- Constraints for table `prof`
--
ALTER TABLE `prof`
  ADD CONSTRAINT `matiere_prof` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`),
  ADD CONSTRAINT `utilisateur_prof` FOREIGN KEY (`ID_prof`) REFERENCES `utilisateur` (`ID_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply-comment` FOREIGN KEY (`idcomment`) REFERENCES `comment` (`Idcomment`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
