-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/08/2013 às 23:55
-- Versão do servidor: 5.5.32-0ubuntu0.13.04.1
-- Versão do PHP: 5.4.9-4ubuntu2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `livraria`
--
CREATE DATABASE IF NOT EXISTS `livraria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `livraria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE IF NOT EXISTS `livro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `edicao` int(11) NOT NULL,
  `idioma` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Fazendo dump de dados para tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `autor`, `editora`, `edicao`, `idioma`, `categoria`, `preco`, `quantidade`, `tipo`) VALUES
(2, 'Iracema', 'JosÃ© de Alencar', 'FTD Record', 3, 'PortuguÃªs', 'Romance', 30, 3, 'impresso'),
(3, 'Dom Casmurro', 'Machado de Assis', 'Ãtica', 2, 'PortuguÃªs', 'Romance', 50, 5, 'impresso'),
(4, 'Ã‰ramos Seis', 'Maria JosÃ© Dupre', 'Ãtica', 1, 'InglÃªs', 'Romance', 25, 7, 'ebook'),
(5, 'O Anel de TutancÃ¢mon', 'RogÃ©rio Barbosa', 'Melhorametnos', 3, 'PortuguÃªs', 'FicÃ§Ã£o', 65, 2, 'impresso'),
(6, 'Cinco Minutos', 'JosÃ© de Alencar', 'JosÃ© Olimpio', 4, 'PortuguÃªs', 'Romance', 23, 4, 'ebook'),
(7, 'AlfarrÃ¡bios', 'JosÃ© de Alencar', 'Editora do Brasil', 1, 'InglÃªs', 'CrÃ´nicas Coloniais', 40, 3, 'impresso'),
(8, 'A chave perdida', 'Olfa Reverbel', 'Afiliada', 2, 'PortuguÃªs', 'Infanto-Juvenil', 25, 2, 'ebook'),
(9, 'O diÃ¡rio secreto de um adolescente', 'Anne Tyler', 'Circulo do livro', 2, 'InglÃªs', 'FicÃ§Ã£o', 42, 3, 'impresso'),
(10, 'As viagens de Tom Sawyer', 'Mark Twain', 'Ediouro', 4, 'PortuguÃªs', 'Infanto-Juvenil', 22, 1, 'impresso');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
