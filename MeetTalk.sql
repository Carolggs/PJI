-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/08/2023 às 14:59
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `MeetTalk`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `esporte` varchar(255) NOT NULL,
  `estilo_musical` varchar(255) NOT NULL,
  `maior_qualidade` varchar(255) NOT NULL,
  `maior_defeito` varchar(255) NOT NULL,
  `genero_literario` varchar(255) NOT NULL,
  `genero_filme` varchar(255) NOT NULL,
  `status_relacionamento` varchar(255) NOT NULL,
  `religiao` varchar(255) NOT NULL,
  `sexualidade` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `nome`, `genero`, `data_nascimento`, `esporte`, `estilo_musical`, `maior_qualidade`, `maior_defeito`, `genero_literario`, `genero_filme`, `status_relacionamento`, `religiao`, `sexualidade`, `pais`) VALUES
('carolinagguereiro00@gmail.com', 'carol222', 'caca', 'Feminino', '2006-06-26', 'Corridas', 'Rock', 'bacana', 'bruto', 'Romance', 'Romance', 'Casado', 'Cristianismo', 'Heterossexual', 'Brasil'),
('Charles@gmail.com', 'leclerc', 'charlesLeclerc', 'Masculino', '1997-10-16', 'Corridas', 'Rap', 'alegre', 'chato', 'Horror', 'Drama', 'Divorciado', 'Budismo', 'Heterossexual', 'Mônaco'),
('cone00@gmail.com', 'luca123', 'cone', 'Masculino', '2005-12-12', 'Futebol', 'Pop', 'carinhoso', 'chato', 'Romance', 'Romance', 'Casado', 'Cristianismo', 'Heterossexual', 'Brasil'),
('Lewis@gmail.com', 'Lewis11', 'Hamilton', 'Masculino', '1985-01-07', 'Corridas', 'Rap', 'amoroso', 'birrento', 'Fantasia', 'Fantasia', 'Namorando', 'Ateu', 'Heterossexual', 'Reino Unido'),
('lorengoni@gmail.com', '$2y$10$4l/iaPH2CtMU2Cughr/8cOs6/39kmwljs08otmZrD3j3B2guk88qG', 'goninho', 'Masculino', '2006-07-21', 'Futebol', 'Pop', 'Legal', 'Chato', 'Romance', 'Romance', 'Solteiro', 'Ateu', 'Heterossexual', 'Brasil'),
('xuxa@gmail.com', '$2y$10$yze9qO0chMB4sayw3YGooe63EXkKYZfrdkwTbEVdNgN4aCxHEpt2y', 'xuxa', 'Masculino', '2006-07-21', 'Futebol', 'Pop', 'Legal', 'Chato', 'Romance', 'Romance', 'Solteiro', 'Ateu', 'Heterossexual', 'Brasil');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
