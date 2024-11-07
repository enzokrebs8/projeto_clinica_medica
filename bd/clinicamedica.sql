-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 01:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicamedica`
--
CREATE DATABASE IF NOT EXISTS `clinicamedica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clinicamedica`;

-- --------------------------------------------------------

--
-- Table structure for table `agendapaciente`
--

CREATE TABLE `agendapaciente` (
  `IDPacienteMaior` int(11) DEFAULT NULL,
  `IDConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agendarecepcionista`
--

CREATE TABLE `agendarecepcionista` (
  `IDRecepcionista` int(11) DEFAULT NULL,
  `IDConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agendaresponsavel`
--

CREATE TABLE `agendaresponsavel` (
  `IDResponsavel` int(11) DEFAULT NULL,
  `IDConsulta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `dataHorarioConsulta` datetime DEFAULT NULL,
  `IDConsulta` int(11) NOT NULL,
  `IDMedico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devs`
--

CREATE TABLE `devs` (
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
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
-- Table structure for table `medicos`
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
-- Table structure for table `pacientemaior`
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
-- Table structure for table `pacientemenor`
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
-- Table structure for table `planosaude`
--

CREATE TABLE `planosaude` (
  `IDPlanoSaude` int(11) NOT NULL,
  `ContatoCentralPlano` varchar(255) DEFAULT NULL,
  `NomePlano` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planosaude`
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
(10, '0800-779-6000', 'GreenLine Saúde');

-- --------------------------------------------------------

--
-- Table structure for table `recepcionistas`
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
-- Table structure for table `responsavel`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `agendapaciente`
--
ALTER TABLE `agendapaciente`
  ADD KEY `IDPacienteMaior` (`IDPacienteMaior`),
  ADD KEY `IDConsulta` (`IDConsulta`);

--
-- Indexes for table `agendarecepcionista`
--
ALTER TABLE `agendarecepcionista`
  ADD KEY `IDRecepcionista` (`IDRecepcionista`),
  ADD KEY `IDConsulta` (`IDConsulta`);

--
-- Indexes for table `agendaresponsavel`
--
ALTER TABLE `agendaresponsavel`
  ADD KEY `IDResponsavel` (`IDResponsavel`),
  ADD KEY `IDConsulta` (`IDConsulta`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`IDConsulta`),
  ADD KEY `IDMedico` (`IDMedico`);

--
-- Indexes for table `devs`
--
ALTER TABLE `devs`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`IDEndereco`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`IDMedico`);

--
-- Indexes for table `pacientemaior`
--
ALTER TABLE `pacientemaior`
  ADD PRIMARY KEY (`IDPacienteMaior`),
  ADD KEY `IDPlanoSaude` (`IDPlanoSaude`),
  ADD KEY `IDEndereco` (`IDEndereco`);

--
-- Indexes for table `pacientemenor`
--
ALTER TABLE `pacientemenor`
  ADD PRIMARY KEY (`IDPacienteMenor`),
  ADD KEY `IDPlanoSaude` (`IDPlanoSaude`),
  ADD KEY `IDResponsavel` (`IDResponsavel`),
  ADD KEY `IDEndereco` (`IDEndereco`);

--
-- Indexes for table `planosaude`
--
ALTER TABLE `planosaude`
  ADD PRIMARY KEY (`IDPlanoSaude`);

--
-- Indexes for table `recepcionistas`
--
ALTER TABLE `recepcionistas`
  ADD PRIMARY KEY (`IDRecepcionista`);

--
-- Indexes for table `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`IDResponsavel`),
  ADD KEY `IDEndereco` (`IDEndereco`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agendapaciente`
--
ALTER TABLE `agendapaciente`
  ADD CONSTRAINT `agendapaciente_ibfk_1` FOREIGN KEY (`IDPacienteMaior`) REFERENCES `pacientemaior` (`IDPacienteMaior`),
  ADD CONSTRAINT `agendapaciente_ibfk_2` FOREIGN KEY (`IDConsulta`) REFERENCES `consulta` (`IDConsulta`);

--
-- Constraints for table `agendarecepcionista`
--
ALTER TABLE `agendarecepcionista`
  ADD CONSTRAINT `agendarecepcionista_ibfk_1` FOREIGN KEY (`IDRecepcionista`) REFERENCES `recepcionistas` (`IDRecepcionista`),
  ADD CONSTRAINT `agendarecepcionista_ibfk_2` FOREIGN KEY (`IDConsulta`) REFERENCES `consulta` (`IDConsulta`);

--
-- Constraints for table `agendaresponsavel`
--
ALTER TABLE `agendaresponsavel`
  ADD CONSTRAINT `agendaresponsavel_ibfk_1` FOREIGN KEY (`IDResponsavel`) REFERENCES `responsavel` (`IDResponsavel`),
  ADD CONSTRAINT `agendaresponsavel_ibfk_2` FOREIGN KEY (`IDConsulta`) REFERENCES `consulta` (`IDConsulta`);

--
-- Constraints for table `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`IDMedico`) REFERENCES `medicos` (`IDMedico`);

--
-- Constraints for table `pacientemaior`
--
ALTER TABLE `pacientemaior`
  ADD CONSTRAINT `pacientemaior_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemaior_ibfk_2` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);

--
-- Constraints for table `pacientemenor`
--
ALTER TABLE `pacientemenor`
  ADD CONSTRAINT `pacientemenor_ibfk_1` FOREIGN KEY (`IDPlanoSaude`) REFERENCES `planosaude` (`IDPlanoSaude`),
  ADD CONSTRAINT `pacientemenor_ibfk_2` FOREIGN KEY (`IDResponsavel`) REFERENCES `responsavel` (`IDResponsavel`),
  ADD CONSTRAINT `pacientemenor_ibfk_3` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);

--
-- Constraints for table `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `responsavel_ibfk_1` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
