-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2024 às 00:44
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
(2, 'Rykelmy Barbosa Lima Ferreira', NULL, '', 0),
(20, 'Edinaldo Sergio Ferreira', NULL, 'EDINALDO', 0),
(21, 'Carla Barbosa Lima Ferreira', NULL, 'EDINALDO', 0),
(22, 'Ryciery Barbosa Lima Ferreira', NULL, 'EDINALDO', 0),
(23, 'Marilda Barbosa ', NULL, 'EDINALDO', 0),
(27, 'Danielly Neris Moraes da Silva', NULL, '', 0),
(28, 'David Cesar da Silva', NULL, 'DAVID', 0),
(29, 'Fernanda Neris Moraes da Silva', NULL, 'DAVID', 0),
(30, 'Paulo Cesar Neris Moraes da Silva', NULL, 'DAVID', 0),
(34, 'Miguel Ferreira ', NULL, 'MIGUEL ', 0),
(35, 'Maria de Lourdes Ferreira ', NULL, 'MIGUEL', 0),
(36, 'Edivaldo Ferreira ', NULL, 'EDIVALDO', 0),
(37, 'Diana Ferreira ', NULL, 'EDIVALDO', 0),
(38, 'Felipe Zancope', NULL, 'EDIVALDO', 0),
(39, 'Elizeu Ferreira ', NULL, 'ELIZEU', 0),
(40, 'Claudia Ferreira ', NULL, 'ELIZEU', 0),
(41, 'Mateus Gotardi', NULL, 'MATEUS', 0),
(42, 'Yasmin Ferreira ', NULL, 'MATEUS', 0),
(43, 'Elizeu Junior Ferreira', NULL, 'ELIZEU JUNIOR', 0),
(44, 'Daphiny Ferreira ', NULL, 'ELIZEU JUNIOR ', 0),
(45, 'Vitor Moreira ', NULL, 'VITOR', 0),
(46, 'Camila Mylena Ferreira ', NULL, 'VITOR', 0),
(47, 'Arthur Ferreira Moreira ', NULL, 'VITOR ', 0),
(48, 'Bernardo Ferreira Moreira ', NULL, 'VITOR', 0),
(49, 'Niedson Filho', NULL, 'NIEDSON ', 0),
(50, 'Ana Kelly Ferreira ', NULL, 'NIEDSON', 0),
(51, 'Nicolas Daniel Ferreira Filho', NULL, 'NIEDSON', 0),
(52, 'Isabel Ferreira', NULL, 'ISABEL', 0),
(53, 'Laerte Menezes ', NULL, 'LAERTE', 0),
(54, 'Nazaré Veloso', NULL, 'LAERTE', 0),
(55, 'Cléber da Silva Correia', NULL, 'CLEBER', 0),
(56, 'Mayara Cristina Correia', NULL, 'CLEBER', 0),
(57, 'Gabriely Monique Correira', NULL, 'CLEBER', 0),
(58, 'Paulo Cesar Correia ', NULL, 'CLEBER', 0),
(59, 'Yarin Vitoria Correia ', NULL, 'CLEBER', 0),
(60, 'Carlos Henrique Carvalho', NULL, 'CARLOS HENRIQUE', 0),
(61, 'Lorena Monique Carvalho', NULL, 'CARLOS HENRIQUE', 0),
(62, 'Miguel Henrique Carvalho', NULL, 'CARLOS HENRIQUE', 0),
(63, 'Lucilene Ferreira ', NULL, 'LUCILENE', 0),
(64, 'Jessica Ferreira ', NULL, 'LUCILENE', 0),
(65, 'Giovana Ferreira ', NULL, 'LUCILENE', 0),
(66, 'Adilson de Souza ', NULL, 'ADILSON', 0),
(67, 'Elisane Ferreira de Souza ', NULL, 'ADILSON', 0),
(68, 'Ney Ferreira ', NULL, 'NEY', 0),
(69, 'Lila Ferreira ', NULL, 'NEY', 0),
(70, 'Silas Ferreira ', NULL, 'SILAS ', 0),
(71, 'Ritchieli Amais Ferreira ', NULL, 'SILAS ', 0),
(72, 'Renato Inácio Leite ', NULL, 'RENATO ', 0),
(73, 'Denise Ferreira ', NULL, 'RENATO', 0),
(74, 'Pedro Henrique Ferreira Leite ', NULL, 'RENATO', 0),
(75, 'Davi Lucca Ferreira Leite ', NULL, 'RENATO', 0),
(76, 'Daiane Ferreira ', NULL, 'DAIANE ', 0),
(77, 'Felipe Ferreira', NULL, 'DAIANE ', 0),
(78, 'Bianca Ferreira', NULL, 'DAIANE', 0),
(79, 'Edivan Ferreira', NULL, 'EDIVAN', 0),
(80, 'Fernanda Ferreira', NULL, 'EDIVAN', 0),
(81, 'Nicoly Ferreira', NULL, 'EDIVAN', 0),
(82, 'Valdir Ferreira', NULL, 'VALDIR', 0),
(83, 'Keyla Ferreira', NULL, 'VALDIR', 0),
(84, 'Mikelly Luisa Ferreira', NULL, 'VALDIR', 0),
(85, 'Anthony Miguel Ferreira', NULL, 'VALDIR', 0),
(86, 'Alef Lopes ', NULL, 'ALEF', 0),
(87, 'Leticia Fernanda Lopes', NULL, 'ALEF', 0),
(88, 'Wesley Henrique ', NULL, 'WESLEY', 0),
(89, 'Isabella Stefani ', NULL, 'WESLEY', 0),
(90, 'Jhonny Ferreira ', NULL, 'WESLEY', 0),
(91, 'Bruno Carvalho', NULL, 'BRUNO', 0),
(92, 'Joyce Karen Carvalho', NULL, 'BRUNO', 0),
(93, 'Emily Carvalho', NULL, 'BRUNO', 0),
(94, 'Rafael Carvalho', NULL, 'BRUNO', 0),
(95, 'Carlos Miguel Ferreira ', NULL, 'CARLOS MIGUEL FERREIRA ', 0),
(96, 'Bianca Azevedo Ferreira ', NULL, 'CARLOS MIGUEL FERREIRA ', 0),
(97, 'Davi Miguel Ferreira ', NULL, 'CARLOS MIGUEL FERREIRA ', 0),
(98, 'Mariana Pereira \r\n', NULL, 'MARIANA P', 0),
(99, 'Murilo Pereira ', NULL, 'MARIANA P', 0),
(100, 'Milene Pereira ', NULL, 'MARIANA P', 0),
(101, 'Marjorie Pereira ', NULL, 'MARIANA P', 0),
(102, 'Micael Pereira ', NULL, 'MICAEL', 0),
(103, 'Nataly Pereira', NULL, 'MICAEL', 0),
(104, 'Daniel Jeronimo de Gouveia ', NULL, 'DANIEL JERONIMO', 0),
(105, 'Tania Neris Moraes de Gouveia ', NULL, 'DANIEL JERONIMO', 0),
(106, 'Giovana Neris Moraes de Gouveia ', NULL, 'DANIEL JERONIMO', 0),
(107, 'João Pedro Neris Moraes de Gouveia ', NULL, 'DANIEL JERONIMO', 0),
(108, 'Denis Moraes ', NULL, 'DENIS ', 0),
(109, 'Charlene Ribeiro de Moraes ', NULL, 'DENIS ', 0),
(110, 'Felipe Ribeiro de Moraes ', NULL, 'DENIS ', 0),
(111, 'Gabrielly Ribeiro de Moraes ', NULL, 'DENIS ', 0),
(112, 'Pedro Moraes ', NULL, 'PEDRO MORAES ', 0),
(113, 'Elizabeth Neris Moraes ', NULL, 'PEDRO MORAES ', 0),
(114, 'Maria Inês Neris Rosa', NULL, 'FRANCISCO ROSA ', 0),
(115, 'Francisco Rosa ', NULL, 'FRANCISCO ROSA', 0),
(116, 'Joyce Gonçalves Damiane ', NULL, 'JEAN DAMIANE ', 0),
(117, 'Jean Damiane ', NULL, 'JEAN DAMIANE ', 0),
(118, 'Gabriel Neris ', NULL, 'JEAN DAMIANE ', 0),
(119, 'Livia Neris ', NULL, 'JEAN DAMIANE', 0),
(120, 'Julia Gabriely', NULL, 'JEAN DAMIANE ', 0),
(121, 'Rubens Cerqueira ', NULL, 'RUBENS CERQUEIRA ', 0),
(122, 'Camila Rosa ', NULL, 'RUBENS CERQUEIRA ', 0),
(123, 'Vinícius Cerqueira', NULL, 'RUBENS CERQUEIRA ', 0),
(124, 'Felisberto Neris', NULL, 'FELISBERTO NERIS ', 0),
(125, 'Sebastiana Neris ', NULL, 'FELISBERTO NERIS', 0),
(126, 'Marcio Prado', NULL, 'MARCIO PRADO ', 0),
(127, 'Cris Prado ', NULL, 'MARCIO PRADO ', 0),
(128, 'Alice Prado ', NULL, 'MARCIO PRADO ', 0),
(129, 'Maurício Prado ', NULL, 'MAURICIO PRADO', 0),
(130, 'Rosana Prado ', NULL, 'MAURICIO PRADO ', 0),
(131, 'Matheus Prado ', NULL, 'MAURICIO PRADO ', 0),
(132, 'Larissa Prado ', NULL, 'MAURICIO PRADO ', 0),
(133, 'Marcelo Neris ', NULL, 'MARCELO NERIS ', 0),
(134, 'Silvana Neris ', NULL, 'MARCELO NERIS', 0),
(135, 'Mayara Neris ', NULL, 'MARCELO NERIS ', 0),
(136, 'Adrian ', NULL, 'MARCELO NERIS ', 0),
(137, 'Juliana Neris ', NULL, 'JOAO VICTOR ', 0),
(138, 'João Victor ', NULL, 'JOAO VICTOR ', 0),
(139, 'Vanderlei Marcolino', NULL, 'VANDERLEI ', 0),
(140, 'Tania Cristina Marcolino', NULL, 'VANDERLEI ', 0),
(141, 'Davi Fernando Marcolino', NULL, 'VANDERLEI', 0),
(142, 'Rafael Marcolino ', NULL, 'VANDERLEI', 0),
(143, 'Danilo Marcolino ', NULL, 'DANILO MARCOLINO ', 0),
(144, 'Natallie Stephany Marcolino', NULL, 'DANILO MARCOLINO ', 0),
(145, 'Regina Chagas ', NULL, 'ATHAIR ', 0),
(146, 'Athair Chagas', NULL, 'ATHAIR ', 0),
(147, 'Shirley Chagas ', NULL, 'SHIRLEY CHAGAS ', 0),
(148, 'Damaris Ribeiro ', NULL, 'DAMARIS RIBEIRO', 0),
(149, 'Suelen ', NULL, 'EVERALDO ', 0),
(150, 'Everaldo ', NULL, 'EVERALDO', 0),
(151, 'Rebeca Brito ', NULL, 'REBECA BRITO', 0),
(152, 'Rubens Cesar Vidal ', NULL, 'RUBENS CESAR', 0),
(153, 'Amanda Vidal ', NULL, 'RUBENS CESAR', 0),
(154, 'Ananda Ketilyn Vidal ', NULL, 'RUBENS CESAR ', 0),
(155, 'Gabriel Henrique ', NULL, 'RUBENS CESAR', 0),
(156, 'Gabrielly Heloisa Vidal ', NULL, 'RUBENS CESAR', 0),
(157, 'Ronaldo Neres ', NULL, 'RONALDO NERES ', 0),
(158, 'Janaina Neres ', NULL, 'RONALDO NERES', 0),
(159, 'Ronaldinho Neres ', NULL, 'RONALDO NERES ', 0),
(160, 'Rosa Braga ', NULL, 'RONALDO NERES ', 0),
(161, 'Junior Romão', NULL, 'JUNIOR ', 0),
(162, 'Andreia Romão ', NULL, 'JUNIOR ', 0),
(163, 'Felipe Romão', NULL, 'JUNIOR', 0),
(164, 'Isaac Romão ', NULL, 'JUNIOR ', 0),
(165, 'Pedro Romão ', NULL, 'JUNIOR ', 0),
(166, 'Jessica Bueno ', NULL, 'JUNIOR ', 0),
(167, 'Jorge Jesus', NULL, 'JORGE JESUS', 0),
(168, 'Ruth Bezerra ', NULL, 'JORGE JESUS', 0),
(169, 'Samuel Bezerra', NULL, 'JORGE JESUS', 0),
(170, 'Sauana Bezerra ', NULL, 'JORGE JESUS', 0),
(171, 'Mayksuel Jesus', NULL, 'JORGE JESUS', 0),
(172, 'Francisval Bezerra', NULL, 'VAL ', 0),
(173, 'Sirlene Bezerra', NULL, 'VAL ', 0),
(174, 'Beatriz Bezerra ', NULL, 'GABRIEL BEZERRA', 0),
(175, 'Gabriel Bezerra ', NULL, 'GABRIEL BEZERRA', 0),
(176, 'Rafael Bezerra', NULL, 'RAFAEL BEZERRA ', 0),
(177, 'Biana Ruiz ', NULL, 'RAFAEL BEZERRA ', 0),
(178, 'Laura Ruiz ', NULL, 'RAFAEL BEZERRA \r\n', 0),
(179, 'Daniel Ruiz ', NULL, 'RAFAEL BEZERRA ', 0),
(180, 'Jéssica Bezerra ', NULL, 'FAGNER ', 0),
(181, 'Fagner', NULL, 'FAGNER ', 0),
(182, 'Davi ', NULL, 'FAGNER ', 0),
(183, 'Romildo Lovato', NULL, 'ROMILDO LOVATO ', 0),
(184, 'Vilma Lovato ', NULL, 'ROMILDO LOVATO ', 0),
(185, 'Bruna Lovato ', NULL, 'ROMILDO LOVATO', 0),
(186, 'Eduarda Lovato ', NULL, 'ROMILDO LOVATO', 0),
(187, 'Samuel Lovato ', NULL, 'ROMILDO LOVATO ', 0),
(188, 'Arthur Lovato ', NULL, 'ROMILDO LOVATO ', 0),
(189, 'Bianca Lovato ', NULL, 'ROMILDO LOVATO ', 0),
(190, 'Adriano Alves da Silva', NULL, 'ADRIANO ALVES', 0),
(191, 'Luciana Lima Pinheiro', NULL, 'ADRIANO ALVES', 0),
(192, 'André Machado Cabral', NULL, 'ANDRE MACHADO', 0),
(193, 'Amanda Caroline Pinheiro Espadas Cabral', NULL, 'ANDRE MACHADO', 0),
(194, 'Pablo Espadas Cabral', NULL, 'ANDRE MACHADO', 0),
(195, 'Davi Espadas Cabral', NULL, 'ANDRE MACHADO', 0),
(196, 'Maria Cecília Pereira', NULL, 'TATA', 0),
(197, 'Caroline Pereira', NULL, 'TATA', 0),
(198, 'Manueli Pereira', NULL, 'TATA', 0),
(199, 'João', NULL, 'JOAO', 0),
(200, 'Maria', NULL, 'JOAO', 0),
(201, 'Micael Pereira', NULL, 'MICAEL PEREIRA', 0),
(202, 'Nataly Pereira', NULL, 'MICAEL PEREIRA', 0),
(203, 'Eduardo Marques', NULL, 'EDUARDO MARQUES', 0),
(204, 'Marcia Marques', NULL, 'EDUARDO MARQUES', 0),
(205, 'César Marques', NULL, 'EDUARDO MARQUES', 0),
(206, 'Mario Pereira', NULL, 'MARIO PEREIRA', 0),
(207, 'Marinês Pereira', NULL, 'MARIO PEREIRA', 0),
(208, 'Magdiel Pereira', NULL, 'MARIO PEREIRA', 0),
(209, 'Maxwell Pereira', NULL, 'MARIO PEREIRA', 0),
(210, 'Matias Pereira', NULL, 'MATIAS PEREIRA', 0),
(211, 'Valquiria Pereira', NULL, 'MATIAS PEREIRA', 0),
(212, 'Ían Pereira', NULL, 'MATIAS PEREiRA', 0),
(213, 'Tadeu Shazon', NULL, 'TADEU', 0),
(214, 'Miriam Shazon', NULL, 'TADEU', 0),
(215, 'Gilberto Ricco', NULL, 'GILBERTO RICCO', 0),
(216, 'Regina Ricco', NULL, 'GILBERTO RICCO', 0),
(217, 'André Ricco', NULL, 'ANDRE RICCO', 0),
(218, 'Cassiana Ricco', NULL, 'ANDRE RICCO', 0),
(219, 'Pedro Henrique Ricco', NULL, 'ANDRE RICCO', 0);

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
  MODIFY `id_convidado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
