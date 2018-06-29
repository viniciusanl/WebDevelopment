-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Jun-2018 às 14:45
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_biblio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `aluno_id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  PRIMARY KEY (`aluno_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`aluno_id`, `matricula`, `nome`, `periodo`) VALUES
(2, '16', 'Gustavo', '1'),
(8, '1111', 'Amanda', '7'),
(6, '123', 'VINICIUS ANDRADE LOPES', '5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_apresentacao`
--

DROP TABLE IF EXISTS `alunos_apresentacao`;
CREATE TABLE IF NOT EXISTS `alunos_apresentacao` (
  `apresentacao_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  PRIMARY KEY (`apresentacao_id`,`aluno_id`),
  KEY `fk_alunos_apresentacao_aluno_id` (`aluno_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos_apresentacao`
--

INSERT INTO `alunos_apresentacao` (`apresentacao_id`, `aluno_id`) VALUES
(2, 2),
(2, 3),
(3, 5),
(3, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_evento`
--

DROP TABLE IF EXISTS `alunos_evento`;
CREATE TABLE IF NOT EXISTS `alunos_evento` (
  `aluno_id` varchar(255) NOT NULL,
  `evento_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `apresentacao`
--

DROP TABLE IF EXISTS `apresentacao`;
CREATE TABLE IF NOT EXISTS `apresentacao` (
  `apresentacao_id` int(11) NOT NULL AUTO_INCREMENT,
  `datahora` datetime DEFAULT NULL,
  `resumo` text,
  `titulo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`apresentacao_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apresentacao`
--

INSERT INTO `apresentacao` (`apresentacao_id`, `datahora`, `resumo`, `titulo`) VALUES
(3, '2018-07-18 00:00:00', 'ApresentaÃ§Ã£o Grules', 'Teste Teste'),
(8, '2018-06-21 00:00:00', 'Teste do resumo ATT', 'Teste'),
(5, '2018-06-15 00:00:00', 'Ola', 'TTeste'),
(6, '2018-06-30 00:00:00', 'djsodisjaoid', 'Teste Teste'),
(7, '2018-06-14 00:00:00', 'Thayrone', 'Thayrone');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entretenimento`
--

DROP TABLE IF EXISTS `entretenimento`;
CREATE TABLE IF NOT EXISTS `entretenimento` (
  `entretenimento_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `musica` varchar(200) NOT NULL,
  PRIMARY KEY (`entretenimento_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entretenimento`
--

INSERT INTO `entretenimento` (`entretenimento_id`, `nome`, `email`, `musica`) VALUES
(3, 'Paulo', 'paulohenriquee1400@gmail.com', 'Psychosocial - Slipknot'),
(7, 'VINICIUS', 'vini.ieq4@gmail.com', 'kldffds'),
(6, 'VINICIUS', 'vini.ieq4@gmail.com', 'Queen - Jessie J'),
(8, 'Alisson', 'teste@teste.com', 'Ufa'),
(12, 'VINICIUS', 'vini.ieq4@gmail.com', 'Psychosocial - Slipknot');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `evento_id` int(11) NOT NULL AUTO_INCREMENT,
  `semestre` varchar(7) NOT NULL,
  `tema` varchar(50) NOT NULL,
  PRIMARY KEY (`evento_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`evento_id`, `semestre`, `tema`) VALUES
(6, '1/2018', 'Hello Word 1'),
(4, '2/2018', 'GRULES'),
(5, '1/2018', 'TI'),
(7, '2/2018', 'Virus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

DROP TABLE IF EXISTS `faleconosco`;
CREATE TABLE IF NOT EXISTS `faleconosco` (
  `id_faleconosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_faleconosco`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id_faleconosco`, `nome`, `email`, `descricao`) VALUES
(1, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'Ola'),
(2, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'dsafafd'),
(3, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'gsdgfsfg'),
(4, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'adsgdfagf'),
(5, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'dfgbfdb'),
(6, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'ndgjgdnh'),
(7, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'dbggnb'),
(8, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'vfdsvdf'),
(9, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'faddfasd'),
(10, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'czxvcxv'),
(11, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'sdfbsdfb'),
(12, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'vdvsdvdf'),
(13, 'vsdfv', 'vini.ieq4@gmail.com', 'vfdsvfds'),
(14, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'vsdvfsdf'),
(15, 'Kkkkkkk', 'vini.ieq4@gmail.com', 'sadvasdvasdv'),
(16, 'VINICIUS ANDRADE LOPES', 'vini.ieq4@gmail.com', 'zvfgsdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_autor`
--

DROP TABLE IF EXISTS `tb_autor`;
CREATE TABLE IF NOT EXISTS `tb_autor` (
  `cd_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_autor` varchar(200) NOT NULL,
  `dt_nasc` datetime NOT NULL,
  PRIMARY KEY (`cd_autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `cd_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nm_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`cd_categoria`, `nm_categoria`) VALUES
(1, 'Romance'),
(2, 'Aventura'),
(3, 'Suspense'),
(4, 'Policial'),
(5, 'Priscila'),
(6, 'doctum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_editora`
--

DROP TABLE IF EXISTS `tb_editora`;
CREATE TABLE IF NOT EXISTS `tb_editora` (
  `cd_editora` int(11) NOT NULL AUTO_INCREMENT,
  `nm_editora` varchar(150) NOT NULL,
  PRIMARY KEY (`cd_editora`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_editora`
--

INSERT INTO `tb_editora` (`cd_editora`, `nm_editora`) VALUES
(14, 'Ok'),
(13, 'Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

DROP TABLE IF EXISTS `tb_livro`;
CREATE TABLE IF NOT EXISTS `tb_livro` (
  `cd_livro` int(11) NOT NULL AUTO_INCREMENT,
  `nm_livro` varchar(250) NOT NULL,
  `cd_categoria` int(11) NOT NULL,
  `cd_editora` int(11) NOT NULL,
  `nr_paginas` int(11) NOT NULL,
  `cd_autor` int(11) DEFAULT NULL,
  `nm_imagem` varchar(50) DEFAULT NULL,
  `isbn_livro` varchar(50) NOT NULL,
  PRIMARY KEY (`cd_livro`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro`
--

INSERT INTO `tb_livro` (`cd_livro`, `nm_livro`, `cd_categoria`, `cd_editora`, `nr_paginas`, `cd_autor`, `nm_imagem`, `isbn_livro`) VALUES
(1, 'Morte no Nilo', 3, 14, 110, NULL, NULL, '1234523412350'),
(2, 'Deitel', 1, 7, 10000, NULL, NULL, '112223334445566777'),
(7, 'Rafaela', 1, 14, 123, NULL, NULL, '123'),
(8, 'Rafaela', 3, 14, 123, NULL, NULL, '123'),
(9, 'Harry Potter', 2, 14, 99, NULL, NULL, '123'),
(11, 'Vinicius', 1, 14, 1, NULL, NULL, 'qewer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(100) NOT NULL,
  `ds_usuario` varchar(250) NOT NULL,
  `ds_senha` varchar(250) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `ds_usuario`, `ds_senha`, `dt_cadastro`) VALUES
(1, 'Vinicius Andrade Lopes', 'teste@teste.com', '123', '2018-04-26 12:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
