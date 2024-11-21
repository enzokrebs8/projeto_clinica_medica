-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Nov-2024 às 09:21
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
-- Estrutura da tabela `consultaspacientemaior`
--

DROP TABLE IF EXISTS `consultaspacientemaior`;
CREATE TABLE IF NOT EXISTS `consultaspacientemaior` (
  `IDConsultasP` int NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `nome_paciente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf_p` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `medico` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_c` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `observacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IDConsultasP`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `consultaspacientemaior`
--

INSERT INTO `consultaspacientemaior` (`IDConsultasP`, `data_hora`, `nome_paciente`, `cpf_p`, `medico`, `especialidade`, `status_c`, `observacao`) VALUES
(1, '2024-11-24 15:30:00', 'Enzo Krebs Silva', '46404867826', 'Enzo Krebs Silva', 'Neurologista', 'Aprovada', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultaspacientemenor`
--

DROP TABLE IF EXISTS `consultaspacientemenor`;
CREATE TABLE IF NOT EXISTS `consultaspacientemenor` (
  `IDConsultasP` int NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `nome_paciente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf_p` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `medico` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_c` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `observacao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IDConsultasP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `devs`
--

DROP TABLE IF EXISTS `devs`;
CREATE TABLE IF NOT EXISTS `devs` (
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `CPF` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`CPF`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `devs`
--

INSERT INTO `devs` (`nome`, `CPF`, `email`, `senha`) VALUES
('Enzo Krebs Silva', '46404867826', 'enzokrebs8@gmail.com', '$2y$10$rZ1BCmPC0EcyUrIzWfuqT.ZJgkryg04caKWnzwHkZ/DvLOh8Z4S1G');

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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`IDEndereco`, `CEP`, `complemento`, `bairro`, `estado`, `cidade`, `numero`, `rua`) VALUES
(1, '12345-678', 'Apto 101', 'Jardim Primavera', 'SP', 'São Paulo', '123', 'Rua das Flores'),
(2, '22345-678', NULL, 'Centro', 'RJ', 'Rio de Janeiro', '456', 'Avenida Central'),
(3, '32345-678', 'Casa 2', 'Vila Verde', 'MG', 'Belo Horizonte', '789', 'Rua dos Pinheiros'),
(4, '42345-678', 'Bloco A', 'Ponta Negra', 'RN', 'Natal', '321', 'Travessa do Sol'),
(5, '52345-678', 'Fundos', 'Jardim Oceano', 'SC', 'Florianópolis', '654', 'Rua Azul'),
(6, '62345-678', NULL, 'Boa Vista', 'RS', 'Porto Alegre', '987', 'Alameda dos Anjos'),
(7, '72345-678', 'Apto 202', 'Monte Claro', 'BA', 'Salvador', '135', 'Rua do Campo'),
(8, '82345-678', 'Loja 5', 'Bela Vista', 'SP', 'São Paulo', '246', 'Avenida Paulista'),
(9, '92345-678', NULL, 'Caminho das Árvores', 'PE', 'Recife', '579', 'Rua das Palmeiras'),
(10, '10234-567', 'Casa 10', 'Vila Nova', 'PR', 'Curitiba', '468', 'Praça da Paz'),
(11, '11011-111', NULL, 'Jardim Botânico', 'MA', 'São Luís', '12', 'Rua das Acácias'),
(12, '22022-222', 'Cobertura', 'Barra da Tijuca', 'RJ', 'Rio de Janeiro', '345', 'Avenida das Américas'),
(13, '33033-333', 'Casa 3', 'Vila Sereno', 'AM', 'Manaus', '678', 'Travessa do Luar'),
(14, '44044-444', 'Bloco B', 'Centro Histórico', 'PE', 'Olinda', '910', 'Rua do Sol Nascente'),
(15, '55055-555', NULL, 'Praia Grande', 'CE', 'Fortaleza', '112', 'Avenida Boa Vista'),
(16, '66066-666', 'Casa 1', 'Nova Esperança', 'MS', 'Campo Grande', '234', 'Rua do Horizonte'),
(17, '77077-777', 'Fundos', 'Bairro Industrial', 'SE', 'Aracaju', '345', 'Travessa das Hortênsias'),
(18, '88088-888', 'Loja 12', 'Bairro Alto', 'PB', 'João Pessoa', '456', 'Avenida Dom Pedro II'),
(19, '99099-999', NULL, 'Ponta DAreia', 'MA', 'São Luís', '567', 'Rua do Vento Sul'),
(20, '10101-010', 'Apto 303', 'Floresta Azul', 'MT', 'Cuiabá', '678', 'Alameda dos Ipês'),
(62, '09015-000', 'Apto 101', 'Jardim Santo André', 'SP', 'Santo André', '45', 'Rua dos Três Corações'),
(63, '09726-200', '', 'Vila Progresso', 'SP', 'São Bernardo do Campo', '567', 'Avenida dos Estados'),
(64, '09680-300', 'Casa 3', 'Jardim do Mar', 'SP', 'São Bernardo do Campo', '88', 'Rua Almirante Tamandaré'),
(65, '09520-180', '', 'Centro', 'SP', 'São Caetano do Sul', '321', 'Rua Ana Costa'),
(66, '09050-100', 'Bloco B', 'Vila América', 'SP', 'Santo André', '1234', 'Avenida Getúlio Vargas'),
(67, '09370-250', '', 'Bairro Olímpico', 'SP', 'Mauá', '56', 'Rua Barão de Mauá'),
(68, '09940-290', 'Casa 12', 'Jardim São Luís', 'SP', 'Diadema', '234', 'Rua das Orquídeas'),
(69, '09090-180', '', 'Vila Camilópolis', 'SP', 'Santo André', '432', 'Rua das Magnólias'),
(70, '09752-800', 'Loja 3', 'Vila América', 'SP', 'São Bernardo do Campo', '987', 'Avenida Kennedy'),
(71, '09550-320', '', 'Vila Palmeiras', 'SP', 'São Caetano do Sul', '789', 'Rua São Francisco'),
(72, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(73, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(74, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(75, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(76, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(77, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(78, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua'),
(79, 'cep', 'complemento', 'bairro', 'estado', 'cidade', 'numero', 'rua');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`IDMedico`, `CPF`, `email`, `senha`, `RG`, `nome`, `Especialidade`, `nascimento`, `CRM`, `telefone`) VALUES
(4, '464.048.678-26', 'medicoenzo@email.com', '$2y$10$6wQOkqaSyJ4v1gTMrNzSmu4UkGYOWlbA.bCnzgW22K6qCyvMiYgDO', '123456789101', 'Enzo Krebs Silva', 'Neurologista', '2000-11-24', '123123123', '(11) 93357-2695'),
(5, '123.456.789-11', 'dr.joao@email.com', 'senha123', 'RG1234599', 'Dr. João Pedro', 'Cardiologista', '1980-04-20', 'CRM123456', '(11) 91111-1112'),
(6, '234.567.890-22', 'dr.ana@email.com', 'senha123', 'RG2345600', 'Dra. Ana Paula', 'Dermatologista', '1975-05-15', 'CRM234567', '(11) 92222-2223'),
(7, '345.678.901-33', 'dr.carlos@email.com', 'senha123', 'RG3456701', 'Dr. Carlos Mendes', 'Neurologista', '1990-06-25', 'CRM345678', '(11) 93333-3334'),
(8, '456.789.012-44', 'dr.maria@email.com', 'senha123', 'RG4567812', 'Dra. Maria Fernandes', 'Pediatra', '1985-07-30', 'CRM456789', '(11) 94444-4445'),
(9, '567.890.123-55', 'dr.roberto@email.com', 'senha123', 'RG5678923', 'Dr. Roberto Souza', 'Ortopedista', '1982-08-10', 'CRM567890', '(11) 95555-5556'),
(10, '678.901.234-66', 'dr.lucas@email.com', 'senha123', 'RG6789034', 'Dr. Lucas Almeida', 'Oftalmologista', '1992-09-15', 'CRM678901', '(11) 96666-6667'),
(11, '789.012.345-77', 'dr.eliane@email.com', 'senha123', 'RG7890145', 'Dra. Eliane Costa', 'Ginecologista', '1988-10-20', 'CRM789012', '(11) 97777-7778'),
(12, '890.123.456-88', 'dr.pedro@email.com', 'senha123', 'RG8901256', 'Dr. Pedro Rocha', 'Urologista', '1986-11-05', 'CRM890123', '(11) 98888-8889'),
(13, '901.234.567-99', 'dr.leticia@email.com', 'senha123', 'RG9012367', 'Dra. Letícia Oliveira', 'Endocrinologista', '1993-12-30', 'CRM901234', '(11) 99999-9990'),
(14, '012.345.678-10', 'dr.sandro@email.com', 'senha123', 'RG0123478', 'Dr. Sandro Ribeiro', 'Otorrinolaringologista', '1984-01-14', 'CRM012345', '(11) 90000-0001'),
(15, '123.456.789-21', 'dr.claudia@email.com', 'senha123', 'RG1234589', 'Dra. Claudia Pereira', 'Gastroenterologista', '1979-02-18', 'CRM123457', '(11) 91111-2222'),
(16, '234.567.890-32', 'dr.renato@email.com', 'senha123', 'RG2345690', 'Dr. Renato Silva', 'Psiquiatra', '1980-03-22', 'CRM234568', '(11) 92222-3333');

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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacientemaior`
--

INSERT INTO `pacientemaior` (`genero`, `nascimento`, `RG`, `nome`, `email`, `senha`, `telefoneEmergencia`, `telefone`, `CPF`, `IDPacienteMaior`, `IDEndereco`, `IDPlanoSaude`) VALUES
('masculino', '2000-11-24', '123456789101', 'Enzo Krebs Silva', 'enzokrebs@gmail.com', '$2y$10$RRfDeNs4O9I91SQk9cjTD.icX1NZLZUfScEFpwO2Rl1qmmaVqGc.m', '11 40028923', '(11) 93357-2695', '46404867826', 7, 41, 8),
('masculino', '2000-05-12', '123456789101', 'Rodrigo Silva Santos', 'rodrigo.ss8@gmail.com', '$2y$10$d1Qfcf1W8LPX6dZYykWP.uFQlcq5BohcUiGuvj9MVn1JQ7Cg4cJC2', '11 40028923', '11 453453456', '484.088.878-76', 8, 72, 10),
('feminino', '1992-02-15', 'RG8901232', 'Juliana Melo', 'juliana.melo@email.com', 'senha123', '(11) 92222-6789', '(11) 92222-5678', '890.123.456-78', 9, 12, 2),
('não-binário', '1990-03-10', 'RG9012343', 'Alex Santos', 'alex.santos@email.com', 'senha123', '(11) 93333-7890', '(11) 93333-1234', '901.234.567-89', 10, 13, 3),
('masculino', '1990-04-20', 'RG9123454', 'Carlos Oliveira', 'carlos.oliveira@email.com', 'senha123', '(11) 94444-2345', '(11) 94444-6789', '912.345.678-90', 11, 14, 4),
('feminino', '1988-06-25', 'RG9234565', 'Fernanda Pereira', 'fernanda.pereira@email.com', 'senha123', '(11) 95555-3456', '(11) 95555-7890', '923.456.789-01', 12, 15, 5),
('masculino', '1985-08-10', 'RG9345676', 'Marcelo Costa', 'marcelo.costa@email.com', 'senha123', '(11) 96666-4567', '(11) 96666-8901', '934.567.890-12', 13, 16, 6),
('feminino', '1994-12-05', 'RG9456787', 'Patrícia Lima', 'patricia.lima@email.com', 'senha123', '(11) 97777-5678', '(11) 97777-1234', '945.678.901-23', 14, 17, 7),
('não-binário', '1996-02-18', 'RG9567898', 'Jordan Souza', 'jordan.souza@email.com', 'senha123', '(11) 98888-6789', '(11) 98888-2345', '956.789.012-34', 15, 18, 8),
('masculino', '1995-01-01', 'RG7890121', 'Leonardo Almeida', 'leonardo.almeida@email.com', 'senha123', '(11) 90000-1234', '(11) 91111-5678', '789.012.345-67', 88, 11, 1);

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
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacientemenor`
--

INSERT INTO `pacientemenor` (`IDPacienteMenor`, `relacaoResponsavel`, `telefone`, `telefoneEmergencia`, `nascimento`, `email`, `senha`, `nome`, `RG`, `CPF`, `genero`, `IDResponsavel`, `IDEndereco`, `IDPlanoSaude`) VALUES
(7, 'Mãe', '(11) 93357-2695', '11 40028923', '2007-11-24', 'enzo8@gmail.com', '$2y$10$uE1myyYXDe5Rb60RFhHSbua2j2yBq79L4i7xbPf4OTgXMmJ4rwcBa', 'Enzo Krebs Silva', '123456789101', '464.048.678-26', 'masculino', NULL, 41, 8),
(8, 'Mãe', '95781-8304', '96372-9887', '2007-11-17', 'isabelydjoliz@gmail.com', '$2y$10$V8XB4nRnYM4oi2g9TdUcPuLpuTG.ucVP.6FKuVFQfI/3VEQ26.sTu', 'Isabely D\'joliz', '780932875938', '24077792827', 'feminino', NULL, 41, 7),
(9, 'Mãe', '11 40028922', '11 40028923', '2007-11-24', 'krebs@gmail.com', '$2y$10$dm9roOTOtHUy6Zzz8T2LGeAvDuzuGKh07jOtLhb0/Olk2wCJy3Ipe', 'Enzo Krebs Silva', 'dasdasd', 'asdasda', 'masculino', 13, 41, 9),
(34, 'Mãe', '(11) 91111-3333', '(11) 90000-4444', '2014-07-20', 'beatriz@email.com', 'senha234', 'Beatriz Almeida', 'RG1234597', '123.456.789-21', 'feminino', 23, 1, 1),
(35, 'Tia', '(11) 92222-4444', '(11) 91111-5555', '2015-05-10', 'carolzinha@email.com', 'senha567', 'Carolina Pereira', 'RG2345608', '234.567.890-22', 'feminino', 24, 2, 2),
(36, 'Avó', '(11) 93333-5555', '(11) 92222-6666', '2016-06-30', 'joaninha@email.com', 'senha890', 'Joana Souza', 'RG3456719', '345.678.901-23', 'feminino', 25, 3, 3),
(37, 'Padrasto', '(11) 94444-6666', '(11) 93333-7777', '2017-08-15', 'renato@email.com', 'senha1234', 'Renato Martins', 'RG4567820', '456.789.012-24', 'masculino', 26, 4, 4),
(38, 'Tio', '(11) 95555-7777', '(11) 94444-8888', '2018-10-25', 'joaozinho@email.com', 'senha5678', 'João Gabriel', 'RG5678931', '567.890.123-25', 'masculino', 27, 5, 5),
(39, 'Avó', '(11) 96666-8888', '(11) 95555-9999', '2012-12-01', 'marianinha@email.com', 'senha135', 'Maria Antônia', 'RG6789042', '678.901.234-26', 'feminino', 23, 6, 6),
(40, 'Pai', '(11) 97777-9999', '(11) 96666-0000', '2013-03-14', 'andreia@email.com', 'senha246', 'Andréia Oliveira', 'RG7890153', '789.012.345-27', 'feminino', 25, 7, 7),
(41, 'Tio', '(11) 98888-0000', '(11) 97777-1111', '2014-04-19', 'luiz@email.com', 'senha357', 'Luiz Carlos', 'RG8901264', '890.123.456-28', 'masculino', 27, 8, 8),
(42, 'Mãe', '(11) 99999-1111', '(11) 98888-2222', '2015-05-25', 'carolyn@email.com', 'senha468', 'Carolyn Martins', 'RG9012375', '901.234.567-29', 'feminino', 23, 9, 9),
(43, 'Pai', '(11) 90000-2222', '(11) 99999-3333', '2016-06-05', 'gustavo@email.com', 'senha579', 'Gustavo Rocha', 'RG0123486', '012.345.678-30', 'masculino', 24, 10, 10);

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
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `CPF` varchar(14) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `IDRecepcionista` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDRecepcionista`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `recepcionistas`
--

INSERT INTO `recepcionistas` (`email`, `senha`, `CPF`, `telefone`, `nome`, `RG`, `nascimento`, `IDRecepcionista`) VALUES
('julia.mendes@gmail.com', '', '34567890123', '(11)91234-5678', 'Julia Mendes', 'SP6543210', '1985-05-14', 1),
('bruno.silva@yahoo.com', '', '56789012345', '(21)93456-1234', 'Bruno Silva', 'RJ5432167', '1988-11-19', 2),
('clara.almeida@hotmail.com', '', '12345098765', '(31)97865-4321', 'Clara Almeida', 'MG6789012', '1990-02-28', 3),
('henrique.souza@gmail.com', '', '09876543210', '(21)91234-5678', 'Henrique Souza', 'SP3456789', '1992-08-12', 4),
('rafael.souza@email.com', 'senha123', '567.890.123-45', '(11) 95555-5556', 'Rafael Almeida Souza', 'RG5678901', '1994-05-30', 5),
('roberto.mendes@hotmail.com', '', '54321098765', '(41)91234-5678', 'Roberto Mendes', 'MG1234567', '1983-03-25', 6),
('marcela.oliveira@gmail.com', '', '67890123456', '(51)97865-4321', 'Marcela Oliveira', 'SP9876543', '1987-09-10', 7),
('rafael.santos@gmail.com', '', '89012345678', '(31)96543-2178', 'Rafael Santos', 'RJ3456789', '1993-06-05', 8),
('gabriela.costa@yahoo.com', '', '23456789012', '(71)91234-5678', 'Gabriela Costa', 'PR5432167', '1996-10-15', 9),
('carlos.henrique@gmail.com', '', '45678901234', '(81)93456-1234', 'Carlos Henrique', 'SP6789012', '1999-01-30', 10),
('ana.silva@email.com', 'senha123', '123.456.789-01', '(11) 91111-1112', 'Ana Beatriz Silva', 'RG1234567', '1995-01-15', 11),
('carlos.costa@email.com', 'senha123', '234.567.890-12', '(11) 92222-2223', 'Carlos Eduardo Costa', 'RG2345678', '1992-02-20', 12),
('juliana.santos@email.com', 'senha123', '345.678.901-23', '(11) 93333-3334', 'Juliana Pereira Santos', 'RG3456789', '1988-03-05', 13),
('fernanda.lima@email.com', 'senha123', '456.789.012-34', '(11) 94444-4445', 'Fernanda Oliveira Lima', 'RG4567890', '1990-04-25', 14),
('larissa.rocha@email.com', 'senha123', '678.901.234-56', '(11) 96666-6667', 'Larissa Costa Rocha', 'RG6789012', '1993-06-18', 16),
('amanda.martins@email.com', 'senha123', '789.012.345-67', '(11) 97777-7778', 'Amanda Oliveira Martins', 'RG7890123', '1996-07-12', 17),
('gustavo.nunes@email.com', 'senha123', '890.123.456-78', '(11) 98888-8889', 'Gustavo Ribeiro Nunes', 'RG8901234', '1991-08-09', 18),
('patricia.fernandes@email.com', 'senha123', '901.234.567-89', '(11) 99999-9990', 'Patrícia Gomes Fernandes', 'RG9012345', '1989-09-20', 19),
('roberta.alves@email.com', 'senha123', '012.345.678-90', '(11) 90000-0001', 'Roberta Souza Alves', 'RG0123456', '1997-10-02', 20);

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
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `RG` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `IDEndereco` int DEFAULT NULL,
  `IDPacienteMenor` int DEFAULT NULL,
  PRIMARY KEY (`IDResponsavel`),
  KEY `IDEndereco` (`IDEndereco`),
  KEY `IDPacienteMenor` (`IDPacienteMenor`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`IDResponsavel`, `CPF`, `telefoneResp`, `nome`, `email`, `senha`, `RG`, `nascimento`, `IDEndereco`, `IDPacienteMenor`) VALUES
(11, 'dasdasd', '11 40028922', 'Enzo', 'asdas@gmail.com', '', 'asdasda', '1969-11-24', 41, NULL),
(12, '31316655806', '963729887', 'susilene santos', 'susi@gmail.com', '', '857298751994', '1982-12-01', 41, NULL),
(13, 'asdasd', '11 40028922', 'Asdasda', 'dasdasda@gmail.com', '', 'asdasda', '1970-11-24', 41, 9),
(23, '123.456.789-00', '(11) 91111-1111', 'Eduardo Silva', 'eduardo.silva@email.com', 'senha1234', 'RG1234567', '1980-01-01', 1, NULL),
(24, '234.567.890-11', '(11) 92222-2222', 'Marta Lopes', 'marta.lopes@email.com', 'senha1234', 'RG2345678', '1975-02-15', 2, NULL),
(25, '345.678.901-22', '(11) 93333-3333', 'Paulo Andrade', 'paulo.andrade@email.com', 'senha1234', 'RG3456789', '1990-03-20', 3, NULL),
(26, '456.789.012-33', '(11) 94444-4444', 'Beatriz Ferreira', 'beatriz.ferreira@email.com', 'senha1234', 'RG4567890', '1985-04-25', 4, NULL),
(27, '567.890.123-44', '(11) 95555-5555', 'Rafael Costa', 'rafael.costa@email.com', 'senha1234', 'RG5678901', '1988-05-30', 5, NULL),
(28, '678.901.234-55', '(11) 96666-6666', 'Júlia Ramos', 'julia.ramos@email.com', 'senha1234', 'RG6789012', '1992-06-10', 6, NULL),
(29, '789.012.345-66', '(11) 97777-7777', 'Lucas Barros', 'lucas.barros@email.com', 'senha1234', 'RG7890123', '1978-07-15', 7, NULL),
(30, '890.123.456-77', '(11) 98888-8888', 'Amanda Santos', 'amanda.santos@email.com', 'senha1234', 'RG8901234', '1995-08-20', 8, NULL),
(31, '901.234.567-88', '(11) 99999-9999', 'Pedro Lima', 'pedro.lima@email.com', 'senha1234', 'RG9012345', '1982-09-25', 9, NULL),
(32, '012.345.678-99', '(11) 90000-0000', 'Larissa Nunes', 'larissa.nunes@email.com', 'senha1234', 'RG0123456', '1997-10-30', 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitarconsulta`
--

DROP TABLE IF EXISTS `solicitarconsulta`;
CREATE TABLE IF NOT EXISTS `solicitarconsulta` (
  `idSolicitacao` int NOT NULL AUTO_INCREMENT,
  `data_hora` datetime NOT NULL,
  `nome_paciente` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf_p` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `especialidade` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `medico` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_c` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `observacao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idSolicitacao`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD CONSTRAINT `responsavel_ibfk_1` FOREIGN KEY (`IDEndereco`) REFERENCES `endereco` (`IDEndereco`),
  ADD CONSTRAINT `responsavel_ibfk_2` FOREIGN KEY (`IDPacienteMenor`) REFERENCES `pacientemenor` (`IDPacienteMenor`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
