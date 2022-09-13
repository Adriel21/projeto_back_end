-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13-Set-2022 às 08:59
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `suniow89_colajobnew`
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
(3, 'Aceite confirma', '2022-09-11 09:57:58', 5),
(8, 'Aceite confirma', '2022-09-11 11:45:04', 10),
(10, 'Aceite confirma', '2022-09-11 03:46:26', 12),
(11, 'Aceite confirma', '2022-09-11 11:11:31', 13),
(12, 'Aceite confirma', '2022-09-12 02:20:40', 14),
(13, 'Aceite confirma', '2022-09-12 11:23:53', 15),
(14, 'Aceite confirma', '2022-09-12 11:33:46', 16),
(15, 'Aceite confirma', '2022-09-13 12:08:47', 17),
(17, 'Aceite confirma', '2022-09-13 12:43:31', 2),
(18, 'Aceite confirma', '2022-09-13 12:48:08', 2),
(19, 'Aceite confirma', '2022-09-13 05:59:12', 3),
(21, 'Aceite confirma', '2022-09-13 08:29:09', 5),
(22, 'Aceite confirma', '2022-09-13 08:31:52', 6),
(23, 'Aceite confirma', '2022-09-13 08:36:32', 7),
(24, 'Aceite confirma', '2022-09-13 08:55:55', 8);

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
(7, 'Fotografia & AudioVisual');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissao`
--

CREATE TABLE `profissao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profissao`
--

INSERT INTO `profissao` (`id`, `titulo`, `descricao`, `categoria_id`, `usuario_id`) VALUES
(2, 'Desenvolvedor Fullstack', 'Front-End: HTML5, CSS3, JavaScript, Jquery, Bootstrap 5&#13;&#10;&#13;&#10;Back-End: PHP, MariaDB(MySQL). Node.Js - Noções de construção de APIs&#13;&#10; Rest. Noções de Java com Springboot&#13;&#10;&#13;&#10;CMS: Wordpress com Elementor e Guttemberg, noções de Joomla&#13;&#10;&#13;&#10;+ Python com Django&#13;&#10;&#9;&#9;&#9;&#9;', 1, 2),
(4, 'Designer de UX', 'SDFSDFASDFSDFSDFDSFSDFSDFSDFSDFSDFSDFSDFSDFSDFSFSDFSDFSDFSFSDFSDFSDFSDFSDFSDFSFSDFSDFSFSDFSDFSDFSDFSDFSDFSDFSDFSDFSDFSDFSFSDFSDFSDFSFSDFSDFSDFSDFSDFDSFSDFSDFSDFSDFSDFSDFSDFSDFSDFSDFSDFDSFSDFSDFSDFSDFSDFDSFSDFDSFSDF&#9;&#9;&#9;&#9;&#9;&#9;', 2, 6),
(5, 'Desenvolvedor Front end ', '&#9;&#9;&#9;&#9;Também Jackson pagodeiros depositado malvado isso leilão palmatória profissional posso não Luan Barros com lá comer culpado líquido líquido palhaço Lisboa DDD coisa com lado i laudo oitavos cachorro&#9;&#9;', 1, 7),
(6, 'asd', '&#9;&#9;&#9;S&#9;&#9;&#9;', 6, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `resumo` varchar(150) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `titulo`, `resumo`, `descricao`, `data`, `usuario_id`, `categoria_id`) VALUES
(14, 'we', 'we&#9;&#9;&#9;&#9;&#9;&#9;', 'wed&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-13', 2, 4),
(15, 'asdasdasdsadasdasdasdasd', 'asdasdasdasd', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdsadasdasdsadsadasdasdasdasdasdasdsadasdasdsadsadasdasdasdsadsadasdasdasdasdasdasdasdsadasdasdasdasdasdasdasdasdasdasdasdasdasdsadsadsddasdasdasdsadsadasdasdasdasdsadasdsadasd&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-13', 2, 6),
(16, 'asdasdasdasdasdasd', 'asdas', 'asdasdasdasdasdsadasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdsdasdasdasdasdasdasdasdasdasdasdasdsadasdsadadasdsadasdasdasdasdsadasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdsadsadsadasdasdasdasdsad', '2022-09-13', 2, 7),
(17, 'dasdasdasd', 'dasdasdasdasdasdasdasdasdsadasdasdasdasdasdasdasdas', 'dasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdsadsadasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdadasdasdasdasdasdasdasdasdasdasdsdasdasdadasdasdasdasdsdsadasdasdasdasdasdasdasdasdasdasdadsadasdas&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-13', 2, 1);

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
(1, 'wq', '', '', '', '', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `perfil`) VALUES
(2, 'Adriel Lira', 'adrieldiasdossantoslira@hotmail.com', '$2y$10$h5i0uB/YYrw4HXBZ4qeawOet28yz8NN9cCUo1aoNyIkhvBe29xUT.', NULL, 'adriel.jpg'),
(3, 'Adriel Lira', 'adriellindo@gmail.com', '$2y$10$SrRGL.3jeBxzhk4C0pb48uNlu6NtCkIemitw05fvGNsMMOP77QX8a', NULL, 'IMG_20220911_190748.jpg'),
(5, 'Klaibert Miranda', 'klaibertmiranda@gmail.com', '$2y$10$V0PY4AII4dJ1j44uxqjNlu06BU3RjOI7qCWFJE8nCMsZO91vpqihG', NULL, 'klaibert.jfif'),
(6, 'Klaibert', 'klaibert@gmail.com', '$2y$10$l5xnCjcEFnENqM.KwHMCq.gT1wbA/jF/GS62GuEFZqGWpPBdFohRe', NULL, 'klaibert.jfif'),
(7, 'Rodrigo ', 'rodrigo.pedroso@live.com', '$2y$10$X/5fU6fuVlWPF9UKcbR4purnQaA6rlxkXfKnjK0MEIz8/g5Yoh9.e', NULL, 'IMG_20220830_152152.jpg'),
(8, 'Klaibert Miranda', 'miranda@hotmail.com', '$2y$10$fpsHzy8ZW3QGd9FTr9ojmulhHIADK1QcrNY6cjNTrx4PHHVL5gGEm', NULL, 'klaibert.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aceite`
--
ALTER TABLE `aceite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aceite_ibfk_1` (`usuario_id`);

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
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_projeto_categoria` (`categoria_id`),
  ADD KEY `fk_projeto_usuario` (`usuario_id`);

--
-- Índices para tabela `rede`
--
ALTER TABLE `rede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `profissao`
--
ALTER TABLE `profissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `rede`
--
ALTER TABLE `rede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aceite`
--
ALTER TABLE `aceite`
  ADD CONSTRAINT `aceite_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `profissao`
--
ALTER TABLE `profissao`
  ADD CONSTRAINT `profissao_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `profissao_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

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
  ADD CONSTRAINT `rede_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
