-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Nov-2020 às 16:07
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdsite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `placamae`
--

CREATE TABLE `placamae` (
  `id` int(11) NOT NULL,
  `nome` varchar(400) NOT NULL,
  `valor` int(11) NOT NULL,
  `descrição` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `placamae`
--

INSERT INTO `placamae` (`id`, `nome`, `valor`, `descrição`) VALUES
(1, 'A320M (RYZEN AM4)', 450, 'este tem um custo muito alto para seu desempenho, apesar de ser um dos melhores, seu custo beneficio não é la o melhoreste tem um custo muito alto para seu desempenho, apesar de ser um dos melhores, seu custo beneficio não é la o melhor'),
(2, 'B450M (RYZEN AM4) ', 700, 'este tem um custo muito alto para seu desempenho, apesar de ser um dos melhores, seu custo beneficio não é la o melhor'),
(3, 'H310M (INTEL 9ª LGA 1151)', 650, 'Levando em conseideraç~dsaikdsadksadmasidfnsdaoufnsadoufosadufaousdbnfuoasdbfouasdbfopuasdbfousadbf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processador`
--

CREATE TABLE `processador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `descrição` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `processador`
--

INSERT INTO `processador` (`id`, `nome`, `valor`, `descrição`) VALUES
(1, 'Ryzen 3 3200G', 800, 'Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco '),
(2, 'Ryzen 3 3300X', 900, 'Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco Texto loco ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `placamae`
--
ALTER TABLE `placamae`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `processador`
--
ALTER TABLE `processador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `placamae`
--
ALTER TABLE `placamae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `processador`
--
ALTER TABLE `processador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
