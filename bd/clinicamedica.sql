-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Nov-2024 às 03:36
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
-- Estrutura da tabela `pacientemaior`
--

DROP TABLE IF EXISTS `pacientemaior`;
CREATE TABLE IF NOT EXISTS `pacientemaior` (
  `genero` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `telefoneEmergencia` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IDPacienteMaior` int NOT NULL,
  `IDEndereco` int DEFAULT NULL,
  `IDPlanoSaude` int DEFAULT NULL,
  PRIMARY KEY (`IDPacienteMaior`),
  KEY `IDPlanoSaude` (`IDPlanoSaude`),
  KEY `IDEndereco` (`IDEndereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacientemaior`
--

INSERT INTO `pacientemaior` (`genero`, `nascimento`, `RG`, `nome`, `email`, `senha`, `telefoneEmergencia`, `telefone`, `CPF`, `IDPacienteMaior`, `IDEndereco`, `IDPlanoSaude`) VALUES
('masculino', '2000-11-24', '123456789', 'Enzo Krebs', 'enzok8@email.com', '$2y$10$ftwEKOxY1QOY.oiQ4W1.J.9Xww5hnEuDaVRDevZ4U/o', 'a11 933333332', '11 933333333', '1234567891', 0, 5, 9);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pacientemaior`
--
ALTER TABLE `pacientemaior`
  ADD CONSTRAINT `pacientemaior_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemaior_ibfk_2` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
