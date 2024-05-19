-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2024 às 04:44
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
(2, 'Rykelmy Barbosa Lima Ferreira', NULL, '', 1),
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
(77, 'Felipe Ferreira', NULL, 'DAIANE ', NULL),
(78, 'Bianca Ferreira', NULL, 'DAIANE', NULL),
(79, 'Edivan Ferreira', NULL, 'EDIVAN', NULL),
(80, 'Fernanda Ferreira', NULL, 'EDIVAN', NULL),
(81, 'Nicoly Ferreira', NULL, 'EDIVAN', NULL),
(82, 'Valdir Ferreira', NULL, 'VALDIR', NULL),
(83, 'Keyla Ferreira', NULL, 'VALDIR', NULL),
(84, 'Mikelly Luisa Ferreira', NULL, 'VALDIR', NULL),
(85, 'Anthony Miguel Ferreira', NULL, 'VALDIR', NULL),
(86, 'Alef Lopes ', NULL, 'ALEF', NULL),
(87, 'Leticia Fernanda Lopes', NULL, 'ALEF', NULL),
(88, 'Wesley Henrique ', NULL, 'WESLEY', NULL),
(89, 'Isabella Stefani ', NULL, 'WESLEY', NULL),
(90, 'Jhonny Ferreira ', NULL, 'WESLEY', NULL),
(91, 'Bruno Carvalho', NULL, 'BRUNO', NULL),
(92, 'Joyce Karen Carvalho', NULL, 'BRUNO', NULL),
(93, 'Emily Carvalho', NULL, 'BRUNO', NULL),
(94, 'Rafael Carvalho', NULL, 'BRUNO', NULL),
(95, 'Carlos Miguel Ferreira ', NULL, 'CARLOS MIGUEL FERREIRA ', NULL),
(96, 'Bianca Azevedo Ferreira ', NULL, 'CARLOS MIGUEL FERREIRA ', NULL),
(97, 'Davi Miguel Ferreira ', NULL, 'CARLOS MIGUEL FERREIRA ', NULL),
(98, 'Mariana Pereira \r\n', NULL, 'MARIANA P', NULL),
(99, 'Murilo Pereira ', NULL, 'MARIANA P', NULL),
(100, 'Milene Pereira ', NULL, 'MARIANA P', NULL),
(101, 'Marjorie Pereira ', NULL, 'MARIANA P', NULL),
(102, 'Micael Pereira ', NULL, 'MICAEL', NULL),
(103, 'Nataly Pereira', NULL, 'MICAEL', NULL),
(104, 'Daniel Jeronimo de Gouveia ', NULL, 'DANIEL JERONIMO', NULL),
(105, 'Tania Neris Moraes de Gouveia ', NULL, 'DANIEL JERONIMO', NULL),
(106, 'Giovana Neris Moraes de Gouveia ', NULL, 'DANIEL JERONIMO', NULL),
(107, 'João Pedro Neris Moraes de Gouveia ', NULL, 'DANIEL JERONIMO', NULL),
(108, 'Denis Moraes ', NULL, 'DENIS ', NULL),
(109, 'Charlene Ribeiro de Moraes ', NULL, 'DENIS ', NULL),
(110, 'Felipe Ribeiro de Moraes ', NULL, 'DENIS ', NULL),
(111, 'Gabrielly Ribeiro de Moraes ', NULL, 'DENIS ', NULL),
(112, 'Pedro Moraes ', NULL, 'PEDRO MORAES ', NULL),
(113, 'Elizabeth Neris Moraes ', NULL, 'PEDRO MORAES ', NULL),
(114, 'Maria Inês Neris Rosa', NULL, 'FRANCISCO ROSA ', NULL),
(115, 'Francisco Rosa ', NULL, 'FRANCISCO ROSA', NULL),
(116, 'Joyce Gonçalves Damiane ', NULL, 'JEAN DAMIANE ', NULL),
(117, 'Jean Damiane ', NULL, 'JEAN DAMIANE ', NULL),
(118, 'Gabriel Neris ', NULL, 'JEAN DAMIANE ', NULL),
(119, 'Livia Neris ', NULL, 'JEAN DAMIANE', NULL),
(120, 'Julia Gabriely', NULL, 'JEAN DAMIANE ', NULL),
(121, 'Rubens Cerqueira ', NULL, 'RUBENS CERQUEIRA ', NULL),
(122, 'Camila Rosa ', NULL, 'RUBENS CERQUEIRA ', NULL),
(123, 'Vinícius Cerqueira', NULL, 'RUBENS CERQUEIRA ', NULL),
(124, 'Felisberto Neris', NULL, 'FELISBERTO NERIS ', NULL),
(125, 'Sebastiana Neris ', NULL, 'FELISBERTO NERIS', NULL),
(126, 'Marcio Prado', NULL, 'MARCIO PRADO ', NULL),
(127, 'Cris Prado ', NULL, 'MARCIO PRADO ', NULL),
(128, 'Alice Prado ', NULL, 'MARCIO PRADO ', NULL),
(129, 'Maurício Prado ', NULL, 'MAURICIO PRADO', NULL),
(130, 'Rosana Prado ', NULL, 'MAURICIO PRADO ', NULL),
(131, 'Matheus Prado ', NULL, 'MAURICIO PRADO ', NULL),
(132, 'Larissa Prado ', NULL, 'MAURICIO PRADO ', NULL),
(133, 'Marcelo Neris ', NULL, 'MARCELO NERIS ', NULL),
(134, 'Silvana Neris ', NULL, 'MARCELO NERIS', NULL),
(135, 'Mayara Neris ', NULL, 'MARCELO NERIS ', NULL),
(136, 'Adrian ', NULL, 'MARCELO NERIS ', NULL),
(137, 'Juliana Neris ', NULL, 'JOAO VICTOR ', NULL),
(138, 'João Victor ', NULL, 'JOAO VICTOR ', NULL),
(139, 'Vanderlei Marcolino', NULL, 'VANDERLEI ', NULL),
(140, 'Tania Cristina Marcolino', NULL, 'VANDERLEI ', NULL),
(141, 'Davi Fernando Marcolino', NULL, 'VANDERLEI', NULL),
(142, 'Rafael Marcolino ', NULL, 'VANDERLEI', NULL),
(143, 'Danilo Marcolino ', NULL, 'DANILO MARCOLINO ', NULL),
(144, 'Natallie Stephany Marcolino', NULL, 'DANILO MARCOLINO ', NULL),
(145, 'Regina Chagas ', NULL, 'ATHAIR ', NULL),
(146, 'Athair Chagas', NULL, 'ATHAIR ', NULL),
(147, 'Shirley Chagas ', NULL, 'SHIRLEY CHAGAS ', NULL),
(148, 'Damaris Ribeiro ', NULL, 'DAMARIS RIBEIRO', NULL),
(149, 'Suelen ', NULL, 'EVERALDO ', NULL),
(150, 'Everaldo ', NULL, 'EVERALDO', NULL),
(151, 'Rebeca Brito ', NULL, 'REBECA BRITO', NULL),
(152, 'Rubens Cesar Vidal ', NULL, 'RUBENS CESAR', NULL),
(153, 'Amanda Vidal ', NULL, 'RUBENS CESAR', NULL),
(154, 'Ananda Ketilyn Vidal ', NULL, 'RUBENS CESAR ', NULL),
(155, 'Gabriel Henrique ', NULL, 'RUBENS CESAR', NULL),
(156, 'Gabrielly Heloisa Vidal ', NULL, 'RUBENS CESAR', NULL),
(157, 'Ronaldo Neres ', NULL, 'RONALDO NERES ', NULL),
(158, 'Janaina Neres ', NULL, 'RONALDO NERES', NULL),
(159, 'Ronaldinho Neres ', NULL, 'RONALDO NERES ', NULL),
(160, 'Rosa Braga ', NULL, 'RONALDO NERES ', NULL),
(161, 'Junior Romão', NULL, 'JUNIOR ', NULL),
(162, 'Andreia Romão ', NULL, 'JUNIOR ', NULL),
(163, 'Felipe Romão', NULL, 'JUNIOR', NULL),
(164, 'Isaac Romão ', NULL, 'JUNIOR ', NULL),
(165, 'Pedro Romão ', NULL, 'JUNIOR ', NULL),
(166, 'Jessica Bueno ', NULL, 'JUNIOR ', NULL),
(167, 'Jorge Jesus', NULL, 'JORGE JESUS', NULL),
(168, 'Ruth Bezerra ', NULL, 'JORGE JESUS', NULL),
(169, 'Samuel Bezerra', NULL, 'JORGE JESUS', NULL),
(170, 'Sauana Bezerra ', NULL, 'JORGE JESUS', NULL),
(171, 'Mayksuel Jesus', NULL, 'JORGE JESUS', NULL),
(172, 'Francisval Bezerra', NULL, 'VAL ', NULL),
(173, 'Sirlene Bezerra', NULL, 'VAL ', NULL),
(174, 'Beatriz Bezerra ', NULL, 'GABRIEL BEZERRA', NULL),
(175, 'Gabriel Bezerra ', NULL, 'GABRIEL BEZERRA', NULL),
(176, 'Rafael Bezerra', NULL, 'RAFAEL BEZERRA ', NULL),
(177, 'Biana Ruiz ', NULL, 'RAFAEL BEZERRA ', NULL),
(178, 'Laura Ruiz ', NULL, 'RAFAEL BEZERRA \r\n', NULL),
(179, 'Daniel Ruiz ', NULL, 'RAFAEL BEZERRA ', NULL),
(180, 'Jéssica Bezerra ', NULL, 'FAGNER ', NULL),
(181, 'Fagner', NULL, 'FAGNER ', NULL),
(182, 'Davi ', NULL, 'FAGNER ', NULL),
(183, 'Romildo Lovato', NULL, 'ROMILDO LOVATO ', NULL),
(184, 'Vilma Lovato ', NULL, 'ROMILDO LOVATO ', NULL),
(185, 'Bruna Lovato ', NULL, 'ROMILDO LOVATO', NULL),
(186, 'Eduarda Lovato ', NULL, 'ROMILDO LOVATO', NULL),
(187, 'Samuel Lovato ', NULL, 'ROMILDO LOVATO ', NULL),
(188, 'Arthur Lovato ', NULL, 'ROMILDO LOVATO ', NULL),
(189, 'Bianca Lovato ', NULL, 'ROMILDO LOVATO ', NULL),
(190, 'Adriano Alves da Silva', NULL, 'ADRIANO ALVES', NULL),
(191, 'Luciana Lima Pinheiro', NULL, 'ADRIANO ALVES', NULL),
(192, 'André Machado Cabral', NULL, 'ANDRE MACHADO', NULL),
(193, 'Amanda Caroline Pinheiro Espadas Cabral', NULL, 'ANDRE MACHADO', NULL),
(194, 'Pablo Espadas Cabral', NULL, 'ANDRE MACHADO', NULL),
(195, 'Davi Espadas Cabral', NULL, 'ANDRE MACHADO', NULL);

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
  MODIFY `id_convidado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
