-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2019 at 01:52 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `integration`
--

-- --------------------------------------------------------

--
-- Table structure for table `actus`
--

CREATE TABLE `actus` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `titre` text NOT NULL,
  `legende` text NOT NULL,
  `chapeau` text NOT NULL,
  `corps` text NOT NULL,
  `auteur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alaune`
--

CREATE TABLE `alaune` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `titre` text NOT NULL,
  `legende` text NOT NULL,
  `chapeau` text NOT NULL,
  `corps` text NOT NULL,
  `auteur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `lien` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `titre` text NOT NULL,
  `legende` text NOT NULL,
  `chapeau` text NOT NULL,
  `corps` text NOT NULL,
  `auteur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `img`, `appeltitre`, `titre`, `legende`, `chapeau`, `corps`, `auteur`, `datepubli`) VALUES
(6, '14516382_10209662760059481_2976757120893954473_n.jpg', 'Consectetur exercitVF', 'Voluptates ea illum', 'Facilis neque id co', 'Omnis id non illo su', 'Labore aliquam aliqu', 'Esse dolor modi qui ', '1995-05-12'),
(10, 'babicars.jpg', 'Quia labore aut quo ', 'Minim omnis aliquid ', 'Eligendi modi autem ', 'Est sed qui ut velit', 'Velit in cupidatat ', 'Et enim et possimus', ''),
(11, '15590609_10210436926013146_2832193728592626073_n.jpg', 'In adipisci id irure', 'Omnis qui repudiand', 'Et est iure ducimus', 'Neque sed tempore e', 'Aut sed consequatur ', 'Ab enim neque ration', '2019-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `bourses`
--

CREATE TABLE `bourses` (
  `id` int(11) NOT NULL,
  `lien` text NOT NULL,
  `dateopen` varchar(11) NOT NULL,
  `dateclose` varchar(11) NOT NULL,
  `titre` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `breves`
--

CREATE TABLE `breves` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `corps` text NOT NULL,
  `couleur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diasporas`
--

CREATE TABLE `diasporas` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `titre` text NOT NULL,
  `legende` text NOT NULL,
  `chapeau` text NOT NULL,
  `corps` text NOT NULL,
  `auteur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `corps` text NOT NULL,
  `dateevent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `flashinfos`
--

CREATE TABLE `flashinfos` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` int(11) NOT NULL,
  `dirname` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `integrations`
--

CREATE TABLE `integrations` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `titre` text NOT NULL,
  `legende` text NOT NULL,
  `chapeau` text NOT NULL,
  `corps` text NOT NULL,
  `auteur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offresemplois`
--

CREATE TABLE `offresemplois` (
  `id` int(11) NOT NULL,
  `lien` text NOT NULL,
  `dateopen` varchar(11) NOT NULL,
  `dateclose` varchar(11) NOT NULL,
  `titre` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plusinfos`
--

CREATE TABLE `plusinfos` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `appeltitre` text NOT NULL,
  `titre` text NOT NULL,
  `legende` text NOT NULL,
  `chapeau` text NOT NULL,
  `corps` text NOT NULL,
  `auteur` varchar(25) NOT NULL,
  `datepubli` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prjregionaux`
--

CREATE TABLE `prjregionaux` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prjspecifique`
--

CREATE TABLE `prjspecifique` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prjtransfontaliers`
--

CREATE TABLE `prjtransfontaliers` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `corps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `contenue` text NOT NULL,
  `created_at` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `titre`, `contenue`, `created_at`) VALUES
(1, 'Journée des partenaires', 'lorem ipsum lorem ipsum', '2019-12-11'),
(2, 'voilà que c\'est bon un peu un peu', 'je commence a être un peu fière de ce que je fais', '2019-12-11'),
(3, '1', '1', '2019-12-11'),
(4, '3ème Forum', 'http://localhost/Integration/admin/test.php', '2019-12-01'),
(5, '<b>vince<b>', 'dddd', '2019-12-04'),
(6, '&lt;b&gt;deo&lt;/b&gt;', 'azertyuiop^', '2019-12-04'),
(7, 'rtyui', '', '2019-12-05'),
(8, 'aaaaaaaa', '', '2019-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `textcommunautaires`
--

CREATE TABLE `textcommunautaires` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `lien` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `lien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actus`
--
ALTER TABLE `actus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alaune`
--
ALTER TABLE `alaune`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bourses`
--
ALTER TABLE `bourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breves`
--
ALTER TABLE `breves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diasporas`
--
ALTER TABLE `diasporas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flashinfos`
--
ALTER TABLE `flashinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrations`
--
ALTER TABLE `integrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offresemplois`
--
ALTER TABLE `offresemplois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plusinfos`
--
ALTER TABLE `plusinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prjregionaux`
--
ALTER TABLE `prjregionaux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prjspecifique`
--
ALTER TABLE `prjspecifique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prjtransfontaliers`
--
ALTER TABLE `prjtransfontaliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textcommunautaires`
--
ALTER TABLE `textcommunautaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actus`
--
ALTER TABLE `actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alaune`
--
ALTER TABLE `alaune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bourses`
--
ALTER TABLE `bourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `breves`
--
ALTER TABLE `breves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diasporas`
--
ALTER TABLE `diasporas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flashinfos`
--
ALTER TABLE `flashinfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `integrations`
--
ALTER TABLE `integrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offresemplois`
--
ALTER TABLE `offresemplois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plusinfos`
--
ALTER TABLE `plusinfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prjregionaux`
--
ALTER TABLE `prjregionaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prjspecifique`
--
ALTER TABLE `prjspecifique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prjtransfontaliers`
--
ALTER TABLE `prjtransfontaliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `textcommunautaires`
--
ALTER TABLE `textcommunautaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
