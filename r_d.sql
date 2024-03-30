-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2023 às 03:04
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `r&d`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_convidados`
--

CREATE TABLE `tbl_convidados` (
  `id_convidado` int(11) NOT NULL,
  `nome_convidado` varchar(100) NOT NULL,
  `doc_convidado` bigint(11) DEFAULT NULL,
  `fam_conv` varchar(100) NOT NULL,
  `confirm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_convidados`
--

INSERT INTO `tbl_convidados` (`id_convidado`, `nome_convidado`, `doc_convidado`, `fam_conv`, `confirm`) VALUES
(2, 'Rykelmy', NULL, '', NULL),
(20, 'EDINALDO SERGIO FERREIRA', NULL, 'EDINALDO', NULL),
(21, 'CARLA BARBOSA LIMA FERREIRA', NULL, 'EDINALDO', NULL),
(22, 'RYCIERY BARBOSA LIMA FERREIRA', NULL, 'EDINALDO', NULL),
(23, 'MARILDA BARBOSA', NULL, 'EDINALDO', NULL),
(24, 'LUCAS SILVA', NULL, '', NULL),
(26, 'LUCAS LEONARDO', NULL, '', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_convidados`
--
ALTER TABLE `tbl_convidados`
  ADD PRIMARY KEY (`id_convidado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_convidados`
--
ALTER TABLE `tbl_convidados`
  MODIFY `id_convidado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
