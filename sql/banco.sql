-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jul-2015 às 22:58
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbchat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversa`
--

CREATE TABLE IF NOT EXISTS `conversa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participanteA` int(11) NOT NULL,
  `participanteB` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=243135 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensagem` varchar(256) NOT NULL,
  `conversa` int(11) NOT NULL,
  `visualizado` int(11) NOT NULL,
  `data_envio` date NOT NULL,
  `data_visualizado` date NOT NULL,
  `criador_mensagem` int(11) NOT NULL,
  `dest_mensagem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `nome_usuario` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha_usuario` varchar(128) NOT NULL,
  `sexo_usuario` int(11) NOT NULL,
  `status_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nome_usuario`, `email`, `senha_usuario`, `sexo_usuario`, `status_usuario`) VALUES
(1, 'Raphael', 'raphael', 'aaa@gmail.com', '123456', 1, 0),
(2, 'Hellen', 'hellen', 'aaa@gmail.com', '123456', 0, 1),
(3, 'Gustavo', 'gustavo', 'aaa@gmail.com', '123456', 1, 0),
(4, 'Carlos', 'carlos', 'aaa@gmail.com', '123456', 1, 0),
(5, 'Fabricio', 'fabricio', 'aaa@gmail.com', '123456', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
