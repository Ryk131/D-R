-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Mar-2024 às 00:20
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `d-r`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_convidados`
--

CREATE TABLE `mensagens_convidados` (
  `nome_convidado` varchar(200) NOT NULL,
  `msg_convidado` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `mensagens_convidados`
--

INSERT INTO `mensagens_convidados` (`nome_convidado`, `msg_convidado`) VALUES
('Rykelmy', 'Eu te amo Danielly Neris Morais da Silva'),
('Rykelmy', 'Eu te amo Danielly Neris Morais da Silva'),
('Danielly', 'Eu amo o Rykelmy Barbosa Lima Ferreira'),
('Danielly', 'AA');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbl_convidados`
--

INSERT INTO `tbl_convidados` (`id_convidado`, `nome_convidado`, `doc_convidado`, `fam_conv`, `confirm`) VALUES
(2, 'Rykelmy Barbosa Lima Ferreira', NULL, '', NULL),
(20, 'Edinaldo Sergio Ferreira', NULL, 'EDINALDO', NULL),
(21, 'Carla Barbosa Lima Ferreira', NULL, 'EDINALDO', NULL),
(22, 'Ryciery Barbosa Lima Ferreira', NULL, 'EDINALDO', NULL),
(23, 'Marilda Barbosa ', NULL, 'EDINALDO', NULL),
(24, 'Lucas Silva', NULL, '', NULL),
(26, 'Lucas Leonardo', NULL, '', NULL),
(27, 'Danielly Neris Moraes da Silva', NULL, '', NULL),
(28, 'David Cesar da Silva', NULL, '', NULL),
(29, 'Fernanda Neris Moraes da Silva', NULL, '', NULL),
(30, 'Paulo Cesar Neris Moraes da Silva', NULL, '', NULL),
(31, 'Mimi Barbosa Lima Ferreira', NULL, '', NULL),
(32, 'Giovana Neris Moraes de Gouveia', NULL, '', NULL),
(33, 'João Pedro Neris Moraes de Gouveia', NULL, '', NULL);

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
  MODIFY `id_convidado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
