-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Abr-2024 às 02:16
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
-- Banco de dados: `d-r`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_convidados`
--

CREATE TABLE `mensagens_convidados` (
  `nome_convidado` varchar(200) NOT NULL,
  `msg_convidado` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_convidados`
--

INSERT INTO `tbl_convidados` (`id_convidado`, `nome_convidado`, `doc_convidado`, `fam_conv`, `confirm`) VALUES
(2, 'Rykelmy Barbosa Lima Ferreira', NULL, '', NULL),
(20, 'Edinaldo Sergio Ferreira', NULL, 'EDINALDO', NULL),
(21, 'Carla Barbosa Lima Ferreira', NULL, 'EDINALDO', NULL),
(22, 'Ryciery Barbosa Lima Ferreira', NULL, 'EDINALDO', NULL),
(23, 'Marilda Barbosa ', NULL, 'EDINALDO', NULL),
(27, 'Danielly Neris Moraes da Silva', NULL, '', NULL),
(28, 'David Cesar da Silva', NULL, 'DAVID', NULL),
(29, 'Fernanda Neris Moraes da Silva', NULL, 'DAVID', NULL),
(30, 'Paulo Cesar Neris Moraes da Silva', NULL, 'DAVID', NULL),
(34, 'Miguel Ferreira ', NULL, 'MIGUEL ', NULL),
(35, 'Maria de Lourdes Ferreira ', NULL, 'MIGUEL', NULL),
(36, 'Edivaldo Ferreira ', NULL, 'EDIVALDO', NULL),
(37, 'Diana Ferreira ', NULL, 'EDIVALDO', NULL),
(38, 'Felipe Zancope', NULL, 'EDIVALDO', NULL),
(39, 'Elizeu Ferreira ', NULL, 'ELIZEU', NULL),
(40, 'Claudia Ferreira ', NULL, 'ELIZEU', NULL),
(41, 'Mateus Gotardi', NULL, 'MATEUS', NULL),
(42, 'Yasmin Ferreira ', NULL, 'MATEUS', NULL),
(43, 'Elizeu Junior Ferreira', NULL, 'ELIZEU JUNIOR', NULL),
(44, 'Daphiny Ferreira ', NULL, 'ELIZEU JUNIOR ', NULL),
(45, 'Vitor Moreira ', NULL, 'VITOR', NULL),
(46, 'Camila Mylena Ferreira ', NULL, 'VITOR', NULL),
(47, 'Arthur Ferreira Moreira ', NULL, 'VITOR ', NULL),
(48, 'Bernardo Ferreira Moreira ', NULL, 'VITOR', NULL),
(49, 'Niedson Filho', NULL, 'NIEDSON ', NULL),
(50, 'Ana Kelly Ferreira ', NULL, 'NIEDSON', NULL),
(51, 'Nicolas Daniel Ferreira Filho', NULL, 'NIEDSON', NULL),
(52, 'Isabel Ferreira', NULL, 'ISABEL', NULL),
(53, 'Laerte Menezes ', NULL, 'LAERTE', NULL),
(54, 'Nazaré Veloso', NULL, 'LAERTE', NULL),
(55, 'Cléber da Silva Correia', NULL, 'CLEBER', NULL),
(56, 'Mayara Cristina Correia', NULL, 'CLEBER', NULL),
(57, 'Gabriely Monique Correira', NULL, 'CLEBER', NULL),
(58, 'Paulo Cesar Correia ', NULL, 'CLEBER', NULL),
(59, 'Yarin Vitoria Correia ', NULL, 'CLEBER', NULL),
(60, 'Carlos Henrique Carvalho', NULL, 'CARLOS HENRIQUE', NULL),
(61, 'Lorena Monique Carvalho', NULL, 'CARLOS HENRIQUE', NULL),
(62, 'Miguel Henrique Carvalho', NULL, 'CARLOS HENRIQUE', NULL),
(63, 'Lucilene Ferreira ', NULL, 'LUCILENE', NULL),
(64, 'Jessica Ferreira ', NULL, 'LUCILENE', NULL),
(65, 'Giovana Ferreira ', NULL, 'LUCILENE', NULL),
(66, 'Adilson de Souza ', NULL, 'ADILSON', NULL),
(67, 'Elisane Ferreira de Souza ', NULL, 'ADILSON', NULL),
(68, 'Ney Ferreira ', NULL, 'NEY', NULL),
(69, 'Lila Ferreira ', NULL, 'NEY', NULL),
(70, 'Silas Ferreira ', NULL, 'SILAS ', NULL),
(71, 'Ritchieli Amais Ferreira ', NULL, 'SILAS ', NULL),
(72, 'Renato Inácio Leite ', NULL, 'RENATO ', NULL),
(73, 'Denise Ferreira ', NULL, 'RENATO', NULL),
(74, 'Pedro Henrique Ferreira Leite ', NULL, 'RENATO', NULL),
(75, 'Davi Lucca Ferreira Leite ', NULL, 'RENATO', NULL),
(76, 'Daiane Ferreira ', NULL, 'DAIANE ', NULL),
(77, 'Felipe Ferreira Machado ', NULL, 'DAIANE ', NULL),
(78, 'Bianca Ferreira Machado ', NULL, 'DAIANE', NULL);

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
  MODIFY `id_convidado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
