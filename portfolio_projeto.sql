-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2021 às 02:12
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portfolio_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `id` int(11) NOT NULL,
  `sobre` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`id`, `sobre`) VALUES
(24, '<h3>Frontender Developer</h3>\r\n<p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `td_equipe`
--

CREATE TABLE `td_equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `td_equipe`
--

INSERT INTO `td_equipe` (`id`, `nome`, `descricao`) VALUES
(40, 'Raissa Daros', 'Programadora'),
(54, 'Jhon Doe', 'Designer'),
(55, 'Ana Doe', 'Gestora de vendas'),
(78, 'Ana Doe', 'Gestora de vendas'),
(80, 'Ana Doe', 'Gestora de vendas'),
(81, 'Ana Doe', 'Gestora de vendas'),
(83, 'Ana Doe', 'Gestora de vendas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `td_equipe`
--
ALTER TABLE `td_equipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `td_equipe`
--
ALTER TABLE `td_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
