-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Ago-2022 às 14:12
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
-- Banco de dados: `tentativa`
--

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
(1, 'Web & Software e Mobile');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `profissao` varchar(45) DEFAULT NULL,
  `descricao_profissao` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `perfil` varchar(45) DEFAULT NULL,
  `categoria_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `profissao`, `descricao_profissao`, `telefone`, `perfil`, `categoria_id`) VALUES
(3, 'Tiago', 'tiagophp@gmail.com', '$2y$10$MzFVQcPws9Ue2/l993fDVOC0t/UvTf0j1sIeq0AFYzq6WMyPwdyWe', 'Engenheiro Front-End', 'alo', NULL, 'Capture001.png', 1),
(4, 'Ignacio', 'ignacinho@gmail.com', '$2y$10$CjoBLEatOOuC9g0V7Y6JFewrvn6EZQpHTjrKgBDeHvJ31vkCVQHo6', 'Engenheiro Front-End', 'alo', NULL, 'modelagem-microblog.png', 1),
(5, 'Tiago', 'tiago@gmail.com', '$2y$10$HCvNC2n0y1c.WGYIZ1nkNesE43KFii8ZS/NvNJQgisQjdKQ1J830u', 'Engenheiro Front-End', 'alo', NULL, 'modelagem-microblog.png', 1),
(6, 'Adriel', 'teste@gmail.com', '$2y$10$SbLjlmx6UuMtlbmnK/y0yuQi8DMIrfGL4ulq4VwgIa73ggFJtNWBi', 'Engenheiro Front-End', 'alo', NULL, 'modelagem-microblog.png', 1),
(7, 'Gabriel', 'gabriel@gmail.com', '$2y$10$WbPNhY1q/I3.a6Otx/vpyemC6weIRBvj6RywAA0I7/mH2dOcYcYgq', 'Engenheiro Back End', 'aaa', NULL, 'modelagem-microblog.png', 1),
(8, 'Leonardo', 'leo@gmail.com', '$2y$10$AmdLc/K7aP62Vasfmsij3OjGhUUxAagGWjv.mKHyt4tV6dIIG9VPe', 'Tatuador Realista', 'asdasd', NULL, 'modelagem-microblog.png', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_projeto_categoria` (`categoria_id`),
  ADD KEY `fk_projeto_usuario` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_usuario_categoria` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_projeto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_projeto_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
