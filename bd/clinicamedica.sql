-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Nov-2024 às 06:36
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinicamedica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `IDMedico` int NOT NULL AUTO_INCREMENT,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Especialidade` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `CRM` varchar(9) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDMedico`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`IDMedico`, `CPF`, `email`, `senha`, `RG`, `nome`, `Especialidade`, `nascimento`, `CRM`, `telefone`) VALUES
(4, '464.048.678-26', 'medicoenzo@email.com', '$2y$10$6wQOkqaSyJ4v1gTMrNzSmu4UkGYOWlbA.bCnzgW22K6qCyvMiYgDO', '123456789101', 'Enzo Krebs Silva', 'Neurologista', '2000-11-24', '123123123', '(11) 93357-2695');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
