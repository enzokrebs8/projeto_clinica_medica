-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/11/2024 às 11:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `agendapaciente`
--

CREATE TABLE `agendapaciente` (
  `IDPacienteMaior` int(11) DEFAULT NULL,
  `IDConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendarecepcionista`
--

CREATE TABLE `agendarecepcionista` (
  `IDRecepcionista` int(11) DEFAULT NULL,
  `IDConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendaresponsavel`
--

CREATE TABLE `agendaresponsavel` (
  `IDResponsavel` int(11) DEFAULT NULL,
  `IDConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `dataHorarioConsulta` datetime DEFAULT NULL,
  `IDConsulta` int(11) NOT NULL,
  `IDMedico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `devs`
--

CREATE TABLE `devs` (
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `IDEndereco` int(11) NOT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(51) DEFAULT NULL,
  `estado` varchar(16) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicos`
--

CREATE TABLE `medicos` (
  `IDMedico` int(11) NOT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `RG` varchar(12) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `Especialidade` varchar(50) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `CRM` varchar(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientemaior`
--

CREATE TABLE `pacientemaior` (
  `genero` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `RG` varchar(12) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `telefoneEmergencia` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `IDPacienteMaior` int(11) NOT NULL,
  `IDEndereco` int(11) DEFAULT NULL,
  `IDPlanoSaude` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientemenor`
--

CREATE TABLE `pacientemenor` (
  `IDPacienteMenor` int(11) NOT NULL,
  `relacaoResponsavel` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `telefoneEmergencia` varchar(15) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `RG` varchar(12) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `IDResponsavel` int(11) DEFAULT NULL,
  `IDEndereco` int(11) DEFAULT NULL,
  `IDPlanoSaude` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `planosaude`
--

CREATE TABLE `planosaude` (
  `IDPlanoSaude` int(11) NOT NULL,
  `ContatoCentralPlano` varchar(255) DEFAULT NULL,
  `NomePlano` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `recepcionistas`
--

CREATE TABLE `recepcionistas` (
  `email` varchar(100) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `RG` varchar(12) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `IDRecepcionista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `IDResponsavel` int(11) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `RG` varchar(12) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `IDEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendapaciente`
--
ALTER TABLE `agendapaciente`
  ADD KEY `IDPacienteMaior` (`IDPacienteMaior`),
  ADD KEY `IDConsulta` (`IDConsulta`);

--
-- Índices de tabela `agendarecepcionista`
--
ALTER TABLE `agendarecepcionista`
  ADD KEY `IDRecepcionista` (`IDRecepcionista`),
  ADD KEY `IDConsulta` (`IDConsulta`);

--
-- Índices de tabela `agendaresponsavel`
--
ALTER TABLE `agendaresponsavel`
  ADD KEY `IDResponsavel` (`IDResponsavel`),
  ADD KEY `IDConsulta` (`IDConsulta`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`IDConsulta`),
  ADD KEY `IDMedico` (`IDMedico`);

--
-- Índices de tabela `devs`
--
ALTER TABLE `devs`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`IDEndereco`);

--
-- Índices de tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`IDMedico`);

--
-- Índices de tabela `pacientemaior`
--
ALTER TABLE `pacientemaior`
  ADD PRIMARY KEY (`IDPacienteMaior`),
  ADD KEY `IDPlanoSaude` (`IDPlanoSaude`),
  ADD KEY `IDEndereco` (`IDEndereco`);

--
-- Índices de tabela `pacientemenor`
--
ALTER TABLE `pacientemenor`
  ADD PRIMARY KEY (`IDPacienteMenor`),
  ADD KEY `IDPlanoSaude` (`IDPlanoSaude`),
  ADD KEY `IDResponsavel` (`IDResponsavel`),
  ADD KEY `IDEndereco` (`IDEndereco`);

--
-- Índices de tabela `planosaude`
--
ALTER TABLE `planosaude`
  ADD PRIMARY KEY (`IDPlanoSaude`);

--
-- Índices de tabela `recepcionistas`
--
ALTER TABLE `recepcionistas`
  ADD PRIMARY KEY (`IDRecepcionista`);

--
-- Índices de tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`IDResponsavel`),
  ADD KEY `IDEndereco` (`IDEndereco`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendapaciente`
--
ALTER TABLE `agendapaciente`
  ADD CONSTRAINT `agendapaciente_ibfk_1` FOREIGN KEY (`IDPacienteMaior`) REFERENCES `pacientemaior` (`IDPacienteMaior`),
  ADD CONSTRAINT `agendapaciente_ibfk_2` FOREIGN KEY (`IDConsulta`) REFERENCES `consulta` (`IDConsulta`);

--
-- Restrições para tabelas `agendarecepcionista`
--
ALTER TABLE `agendarecepcionista`
  ADD CONSTRAINT `agendarecepcionista_ibfk_1` FOREIGN KEY (`IDRecepcionista`) REFERENCES `recepcionistas` (`IDRecepcionista`),
  ADD CONSTRAINT `agendarecepcionista_ibfk_2` FOREIGN KEY (`IDConsulta`) REFERENCES `consulta` (`IDConsulta`);

--
-- Restrições para tabelas `agendaresponsavel`
--
ALTER TABLE `agendaresponsavel`
  ADD CONSTRAINT `agendaresponsavel_ibfk_1` FOREIGN KEY (`IDResponsavel`) REFERENCES `responsavel` (`IDResponsavel`),
  ADD CONSTRAINT `agendaresponsavel_ibfk_2` FOREIGN KEY (`IDConsulta`) REFERENCES `consulta` (`IDConsulta`);

--
-- Restrições para tabelas `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`IDMedico`) REFERENCES `medicos` (`IDMedico`);

--
-- Restrições para tabelas `pacientemaior`
--
ALTER TABLE `pacientemaior`
  ADD CONSTRAINT `pacientemaior_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemaior_ibfk_2` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);

--
-- Restrições para tabelas `pacientemenor`
--
ALTER TABLE `pacientemenor`
  ADD CONSTRAINT `pacientemenor_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemenor_ibfk_2` FOREIGN KEY (`IDResponsavel`) REFERENCES `responsavel` (`IDResponsavel`),
  ADD CONSTRAINT `pacientemenor_ibfk_3` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);

--
-- Restrições para tabelas `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `responsavel_ibfk_1` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
