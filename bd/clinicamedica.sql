-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Nov-2024 às 22:04
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
CREATE DATABASE IF NOT EXISTS `clinicamedica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clinicamedica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultasmedico`
--

DROP TABLE IF EXISTS `consultasmedico`;
CREATE TABLE IF NOT EXISTS `consultasmedico` (
  `idConsultasM` int NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `especialidade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nome_paciente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idConsultasM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultaspaciente`
--

DROP TABLE IF EXISTS `consultaspaciente`;
CREATE TABLE IF NOT EXISTS `consultaspaciente` (
  `idConsultasP` int NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `medico` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idConsultasP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `devs`
--

DROP TABLE IF EXISTS `devs`;
CREATE TABLE IF NOT EXISTS `devs` (
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `IDEndereco` int NOT NULL AUTO_INCREMENT,
  `CEP` varchar(9) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bairro` varchar(51) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cidade` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rua` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDEndereco`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`IDEndereco`, `CEP`, `complemento`, `bairro`, `estado`, `cidade`, `numero`, `rua`) VALUES
(41, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(42, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(43, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(44, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(45, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(46, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(47, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(48, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(49, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(50, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(51, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(52, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(53, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(54, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(55, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(56, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `IDMedico` int NOT NULL AUTO_INCREMENT,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Especialidade` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `CRM` varchar(9) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefoneEmergencia` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IDPacienteMaior` int NOT NULL AUTO_INCREMENT,
  `IDEndereco` int DEFAULT NULL,
  `IDPlanoSaude` int DEFAULT NULL,
  PRIMARY KEY (`IDPacienteMaior`),
  KEY `IDPlanoSaude` (`IDPlanoSaude`),
  KEY `IDEndereco` (`IDEndereco`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacientemaior`
--

INSERT INTO `pacientemaior` (`genero`, `nascimento`, `RG`, `nome`, `email`, `senha`, `telefoneEmergencia`, `telefone`, `CPF`, `IDPacienteMaior`, `IDEndereco`, `IDPlanoSaude`) VALUES
('masculino', '2000-11-24', '123456789101', 'Enzo Krebs Silva', 'enzokrebs8@gmail.com', '$2y$10$RRfDeNs4O9I91SQk9cjTD.icX1NZLZUfScEFpwO2Rl1qmmaVqGc.m', '11 40028923', '(11) 93357-2695', '464.048.678-21', 7, 41, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientemenor`
--

DROP TABLE IF EXISTS `pacientemenor`;
CREATE TABLE IF NOT EXISTS `pacientemenor` (
  `IDPacienteMenor` int NOT NULL AUTO_INCREMENT,
  `relacaoResponsavel` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `telefoneEmergencia` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `genero` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IDResponsavel` int DEFAULT NULL,
  `IDEndereco` int DEFAULT NULL,
  `IDPlanoSaude` int DEFAULT NULL,
  PRIMARY KEY (`IDPacienteMenor`),
  KEY `IDPlanoSaude` (`IDPlanoSaude`),
  KEY `IDResponsavel` (`IDResponsavel`),
  KEY `IDEndereco` (`IDEndereco`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planosaude`
--

DROP TABLE IF EXISTS `planosaude`;
CREATE TABLE IF NOT EXISTS `planosaude` (
  `IDPlanoSaude` int NOT NULL AUTO_INCREMENT,
  `ContatoCentralPlano` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NomePlano` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IDPlanoSaude`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `planosaude`
--

INSERT INTO `planosaude` (`IDPlanoSaude`, `ContatoCentralPlano`, `NomePlano`) VALUES
(1, '3004-1000', 'Amil'),
(2, '4004-2700', 'Bradesco Saúde'),
(3, '4004-5900', 'SaulAmérica Saúde'),
(4, '0800-722-2140', 'Unimed'),
(5, '4002-3633', 'HapVida'),
(6, '4090-1750', 'NotreDame Intermédica'),
(7, '4004-5215', 'Porto Seguro Saúde'),
(8, '4004-4222', 'Prevent Senior'),
(9, '0800-602-6132', 'Blue Med Saúde'),
(10, '0800-779-6000', 'GreenLine Saúde'),
(11, '4004-4100', 'Allianz Saúde'),
(12, '4003-2333', 'Golden Cross');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcionistas`
--

DROP TABLE IF EXISTS `recepcionistas`;
CREATE TABLE IF NOT EXISTS `recepcionistas` (
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `IDRecepcionista` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDRecepcionista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

DROP TABLE IF EXISTS `responsavel`;
CREATE TABLE IF NOT EXISTS `responsavel` (
  `IDResponsavel` int NOT NULL AUTO_INCREMENT,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `telefoneResp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `IDEndereco` int DEFAULT NULL,
  PRIMARY KEY (`IDResponsavel`),
  KEY `IDEndereco` (`IDEndereco`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`IDResponsavel`, `CPF`, `telefoneResp`, `nome`, `email`, `senha`, `RG`, `nascimento`, `IDEndereco`) VALUES
(8, '09093094', '11 40028922', 'Enzo', 'asdas@gmail.com', '', 'asdasda', '1980-11-24', 41);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitarconsulta`
--

DROP TABLE IF EXISTS `solicitarconsulta`;
CREATE TABLE IF NOT EXISTS `solicitarconsulta` (
  `idSolicitacao` int NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `nome_paciente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `medico` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `observacao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idSolicitacao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pacientemaior`
--
ALTER TABLE `pacientemaior`
  ADD CONSTRAINT `pacientemaior_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemaior_ibfk_2` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);

--
-- Limitadores para a tabela `pacientemenor`
--
ALTER TABLE `pacientemenor`
  ADD CONSTRAINT `pacientemenor_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemenor_ibfk_2` FOREIGN KEY (`IDResponsavel`) REFERENCES `responsavel` (`IDResponsavel`),
  ADD CONSTRAINT `pacientemenor_ibfk_3` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `responsavel_ibfk_1` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
