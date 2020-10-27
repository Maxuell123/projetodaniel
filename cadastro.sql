-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Out-2020 às 00:16
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `codigo` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `prof` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT 'Brasilera',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`codigo`, `id`, `nome`, `prof`, `nascimento`, `sexo`, `peso`, `altura`, `endereco`, `nacionalidade`) VALUES
(NULL, 1, 'Daniel', NULL, '1981-09-30', 'M', '85.00', '1.75', NULL, 'Brasileira'),
(NULL, 2, 'Flávio', NULL, '1979-04-11', 'M', '90.00', '1.75', NULL, 'Brasilera'),
(NULL, 3, 'Francisca', NULL, '1952-08-25', 'F', '96.00', '1.50', NULL, 'USA'),
(NULL, 4, 'Catarina', NULL, '2001-03-01', 'F', '53.00', '1.62', NULL, 'Brasilera'),
(NULL, 5, 'Raquel', NULL, '1981-09-11', 'F', '50.00', '1.65', NULL, 'Brasileira'),
(NULL, 6, 'Rosane', NULL, '1979-12-25', 'F', '50.00', '1.50', NULL, 'Brasilera'),
(NULL, 7, 'Giovani', NULL, '2012-11-29', 'M', '25.00', '1.20', NULL, 'Brasilera');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `idcurso` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` text,
  `carga` int(10) UNSIGNED DEFAULT NULL,
  `totaulas` int(11) DEFAULT NULL,
  `ano` year(4) DEFAULT '2020',
  `stts` varchar(7) DEFAULT 'ativo',
  PRIMARY KEY (`idcurso`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`idcurso`, `nome`, `descricao`, `carga`, `totaulas`, `ano`, `stts`) VALUES
(1, 'HTML4', 'Curso de HTML5', 40, 37, 2014, 'ativo'),
(2, 'Algoritmos', 'Lógica de Programação', 20, 15, 2014, 'ativo'),
(3, 'Photoshop', 'Dicas de Photoshop CC', 10, 8, 2014, 'ativo'),
(4, 'PGP', 'Curso de PHP para iniciantes', 40, 20, 2010, 'ativo'),
(5, 'Jarva', 'Introdução à Linguagem Java', 10, 29, 2000, 'ativo'),
(6, 'MySQL', 'Banco de Dados MySQL', 30, 15, 2016, 'ativo'),
(7, 'Word', 'Curso completo de Word', 40, 30, 2016, 'ativo'),
(8, 'Sapateado', 'Danças de Salão', 40, 30, 2018, 'ativo'),
(9, 'Cozinha Árabe', 'Aprenda a fazer Kibe', 40, 30, 2018, 'ativo'),
(10, 'Youtuber', 'Gerar polêmica e ganhar inscritos', 5, 2, 2018, 'ativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
