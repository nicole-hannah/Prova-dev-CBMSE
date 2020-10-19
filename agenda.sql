-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 19, 2020 at 08:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `contato_pessoa`
--

CREATE TABLE `contato_pessoa` (
  `id` int(11) NOT NULL,
  `contato` varchar(50) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  `tipo_contato_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`) VALUES
(11, 'hannah', 'silva');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_contato`
--

CREATE TABLE `tipo_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_contato`
--

INSERT INTO `tipo_contato` (`id`, `nome`) VALUES
(1, 'Telefone'),
(2, 'Celular'),
(3, 'E-mail'),
(4, 'Outros');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato_pessoa`
--
ALTER TABLE `contato_pessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pessoa_id` (`pessoa_id`),
  ADD KEY `tipo_contato_id` (`tipo_contato_id`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_contato`
--
ALTER TABLE `tipo_contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato_pessoa`
--
ALTER TABLE `contato_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contato_pessoa`
--
ALTER TABLE `contato_pessoa`
  ADD CONSTRAINT `contato_pessoa_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoa` (`id`),
  ADD CONSTRAINT `contato_pessoa_ibfk_2` FOREIGN KEY (`tipo_contato_id`) REFERENCES `tipo_contato` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
