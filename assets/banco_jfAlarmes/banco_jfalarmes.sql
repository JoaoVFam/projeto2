-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 22:09
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jfalarmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(14, 'Cercas'),
(13, 'CÃ¢meras'),
(12, 'Alarmes'),
(15, 'Controle de acesso'),
(16, 'PortÃµes e cancelas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nome_imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria_id`, `nome_imagem`) VALUES
(55, 'PortÃ£o de ferro', '123.00', 16, 'portaodeferro.jpg'),
(40, 'CÃ¢mera de teto', '123.00', 13, 'cameraSeguranca01.jpg'),
(41, 'CÃ¢mera preta', '123.00', 13, 'cameraSeguranca02.jpg'),
(39, 'CÃ¢mera branca', '123.00', 13, 'cameraSeguranca03.jpg'),
(36, 'cam2', '10.00', 1, 'cameraSeguranca03.jpg'),
(35, 'cÃ¢mera 1', '12.00', 1, 'cameraSeguranca02.jpg'),
(54, 'PortÃ£o de correr', '123.00', 16, 'portaodecorrer.jpg'),
(43, 'Alarme residencial', '123.00', 12, 'alarme01.jpg'),
(45, 'Alarme com controle remoto', '123.00', 12, 'alarme03.jpg'),
(46, 'Sensor de movimento', '123.00', 15, 'sensor01.jpg'),
(47, 'Sensor de movimento residencial', '123.00', 15, 'sensor02.png'),
(49, 'Cerca ElÃ©trica', '123.00', 14, 'cercaEletrica.jpg'),
(53, 'PortÃ£o de aÃ§o', '123.00', 16, 'portaodeaÃ§o.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(9, 'joaovictor@code.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'toalhinha@code.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'josenunes@code.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'rafaela@code.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'pedro@code.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'andrevasco@code.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
