-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Nov-2017 às 10:20
-- Versão do servidor: 5.7.20-log
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
-- Database: `banco_jfalarmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(14, 'Cercas'),
(13, 'Câmeras'),
(12, 'Alarmes'),
(15, 'Controle de acesso'),
(16, 'Portões e cancelas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nome_imagem` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria_id`, `nome_imagem`) VALUES
(55, 'Portão de ferro', '123.00', 16, 'portaodeferro.jpg'),
(40, 'Câmera de teto', '123.00', 13, 'cameraSeguranca01.jpg'),
(41, 'Câmera preta', '123.00', 13, 'cameraSeguranca02.jpg'),
(39, 'Câmera branca', '123.00', 13, 'cameraSeguranca03.jpg'),
(36, 'cam2', '10.00', 1, 'cameraSeguranca03.jpg'),
(35, 'câmera 1', '12.00', 1, 'cameraSeguranca02.jpg'),
(54, 'Portão de correr', '123.00', 16, 'portaodecorrer.jpg'),
(43, 'Alarme residencial', '123.00', 12, 'alarme01.jpg'),
(45, 'Alarme com controle remoto', '123.00', 12, 'alarme03.jpg'),
(46, 'Sensor de movimento', '123.00', 15, 'sensor01.jpg'),
(47, 'Sensor de movimento residencial', '123.00', 15, 'sensor02.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(4, 'rezende.gabriel@engenharia.ufjf.br', 'a23d45g');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
