-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 17:33
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'Fabricio', 'fabricio@online.com', 'Oi, bão?'),
(2, 'Rodrigo Eiji', 'iabviauvbi@gmail.com', 'Success!!'),
(4, 'kamnnen', 'siuhiu@gmail.com', 'Success!!2'),
(5, 'Rodrigo Eiji', 'iabviauvbi@gmail.com', 'sd sdvw'),
(8, 'Bianca', 'rodrigoeijijp@hotmail.com', 'Olá@@@'),
(9, 'Bianca2', 'rodrigoeijijp@hotmail.com', 'Olá@@@'),
(19, 'Lisa', 'Hyuga@gmail.com', 'LISAAAA'),
(20, 'RODRIGO EIJI', 'rodrigoeijijp@hotmail.com', 'adfadfafa'),
(24, 'Nissy', 'NISHI', 'HEY'),
(100, 'RODRIGO EIJI', 'rodrigo@gmail.com', 'SUCESSOOOO!!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
