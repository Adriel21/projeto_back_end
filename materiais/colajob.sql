-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2022 às 15:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `colajob`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aceite`
--

CREATE TABLE `aceite` (
  `id` int(11) NOT NULL,
  `confirmacao` varchar(15) NOT NULL,
  `periodo` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aceite`
--

INSERT INTO `aceite` (`id`, `confirmacao`, `periodo`, `usuario_id`) VALUES
(1, 'Aceite confirma', '2022-09-15 09:51:54', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` tinyint(4) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Web, Software & Mobile'),
(2, 'Design & Criação'),
(4, 'Educação'),
(5, 'Escrita'),
(6, 'Consultoria'),
(7, 'Fotografia & Audiovisual');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissao`
--

CREATE TABLE `profissao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profissao`
--

INSERT INTO `profissao` (`id`, `titulo`, `descricao`, `usuario_id`, `categoria_id`) VALUES
(1, 'ds', 'asd&#9;ad&#9;sdasdasdasdasdadasdasdsadsadadsadasdasdasdasdaddadadadadadadadasdadasdasdsaddasdasdasdasdadsadasdaddadadadadadassdadadadadadadadadasdasdasdasdasasdasdasdadasdsadadasdadasdadsdadsadasdsadadsadaddasdadadsadadadadadsadsadsadadasdadads&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `resumo` varchar(150) NOT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `data` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `titulo`, `resumo`, `descricao`, `data`, `usuario_id`, `categoria_id`) VALUES
(1, 'Desenvolvimento de app', 'dasdasd&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;', '&#9;asdasdas&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-15', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rede`
--

CREATE TABLE `rede` (
  `id` int(11) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `github` varchar(50) DEFAULT NULL,
  `behance` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rede`
--

INSERT INTO `rede` (`id`, `website`, `linkedin`, `instagram`, `github`, `behance`, `usuario_id`) VALUES
(1, 'https://colajobnew.sunioweb.com.br', '', '', 'https://github.com/GabrielG9z', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`) VALUES
(1, 'Gabriel Genovez', 'genovez@gmail.com', '$2y$10$mjJOhDFEEUM0HQ5XtaVTLeBO0o7Ijd8.M1xS1ztwr43sbuQb11DMO', 'gabriel_genovez.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aceite`
--
ALTER TABLE `aceite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aceite_usuario` (`usuario_id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `profissao`
--
ALTER TABLE `profissao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_profissao` (`usuario_id`),
  ADD KEY `fk_profissao_categoria` (`categoria_id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_projeto_usuario` (`usuario_id`),
  ADD KEY `fk_projeto_categoria` (`categoria_id`);

--
-- Índices para tabela `rede`
--
ALTER TABLE `rede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rede_usuario` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aceite`
--
ALTER TABLE `aceite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `profissao`
--
ALTER TABLE `profissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `rede`
--
ALTER TABLE `rede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aceite`
--
ALTER TABLE `aceite`
  ADD CONSTRAINT `fk_aceite_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `profissao`
--
ALTER TABLE `profissao`
  ADD CONSTRAINT `fk_profissao_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_usuario_profissao` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_projeto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_projeto_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `rede`
--
ALTER TABLE `rede`
  ADD CONSTRAINT `fk_rede_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
