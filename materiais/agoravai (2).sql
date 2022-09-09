-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2022 às 11:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agoravai`
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
(1, 'Aceite confirma', '0000-00-00 00:00:00', 24),
(2, 'Aceite confirma', '0000-00-00 00:00:00', 25),
(3, 'Aceite confirma', '0000-00-00 00:00:00', 26),
(4, 'Aceite confirma', '2022-09-08 06:30:53', 28),
(5, 'Aceite confirma', '2022-09-08 01:32:30', 29),
(6, 'Aceite confirma', '2022-09-08 02:03:34', 30),
(7, 'Aceite confirma', '2022-09-08 02:04:06', 31),
(8, 'Aceite confirma', '2022-09-08 02:11:49', 34),
(9, 'Aceite confirma', '2022-09-08 12:48:44', 35),
(10, 'Aceite confirma', '2022-09-08 12:50:16', 36),
(11, 'Aceite confirma', '2022-09-08 01:25:09', 37),
(12, 'Aceite confirma', '2022-09-08 01:42:13', 38),
(13, 'Aceite confirma', '2022-09-08 08:50:18', 39),
(17, 'Aceite confirma', '2022-09-08 10:21:40', 43);

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
  `usuario_id` int(11) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profissao`
--

INSERT INTO `profissao` (`id`, `titulo`, `descricao`, `usuario_id`, `categoria_id`) VALUES
(1, 'das', 'asd', 2, 1),
(2, 'Escritor romancista', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.  O Visual Studio Code ', 9, 5),
(3, 'asd', 'asd', 7, 6),
(4, 'Engenheiro de software', '&#9;&#9;&#9;FSFSDFSFSDFS&#9;&#9;&#9;', 43, 1);

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
(1, 'Desenvolvimento de Site', 'Site para escola', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.  O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.', '2022-09-07', 2, 1),
(2, 'Desenvolvimento de Aplicativo', 'desenvolvimento de app para uma grande empresa de seguros nacional', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.  O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.', '2022-09-07', 2, 1),
(3, 'Desenvolvimento de Aplicativo', 'desenvolvimento de app para uma grande empresa de seguros nacional', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.  O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.', '2022-09-07', 2, 1),
(4, 'Desenvolvimento de Aplicativo', 'desenvolvimento de app para uma grande empresa de seguros nacional', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.  O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.', '2022-09-07', 2, 1),
(5, 'Desenvolvimento de Aplicativo', 'desenvolvimento de app para uma grande empresa de seguros nacional', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.  O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.  Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.', '2022-09-07', 2, 1),
(6, 'ENGINNER', 'asdasd', '&#9;&#9;asdad&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-07', 5, 1),
(7, 'Testando', 'dafsfsdfsf', 'sdfsdf', '2022-09-07', 6, 4),
(8, 'Tradutor ', 'Projeto para tradução de obras de Charles Dickens', 'Projeto para tradução de obras do escritor Charles Dickens, grande romancista americano, para uma grande editora brasileira. Os valores serão a combinar.&#9;&#9;&#9;&#9;&#9;', '2022-09-07', 10, 5),
(9, 'Fotografia em casamento', 'asdasd', '&#9;dasdsadsadasd&#9;&#9;&#9;&#9;&#9;', '2022-09-07', 10, 7),
(10, 'Criação de logotipo', 'Projeto para criação de logotipo para uma empresa ascedente no mundo do E-commerce', '&#9;sadasdasdad&#9;&#9;&#9;&#9;&#9;', '2007-09-22', 10, 2),
(17, 'Desenvolvimento de Aplicativo', 'sdfsdf', '&#9;&#9;sdf&#9;&#9;&#9;&#9;', '2022-09-08', 14, 1),
(26, 'sadasd', 'asdsa', 'asdas&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-08', 37, 6),
(27, 'Desenvolvimento de Aplicativo', 'Desenvolvimento de app interno para comunicação interna de gerentes das agências&#9;&#9;&#9;&#9;&#9;&#9;', 'teste&#9;&#9;&#9;&#9;&#9;&#9;&#9;', '2022-09-08', 38, 1),
(28, 'Ux de site', 'Melhorias de Ux de um grande site de educação Paulista', 'teste', '2022-09-09', 38, 2);

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
(2, 'https://adriel.sunioweb.com.br', 'https://www.linkedin.com/in/adriel-lira-bba891209/', 'https://www.instagram.com/livrosoltooficial/', NULL, NULL, 10),
(3, 'https://adriel.sunioweb.com.br', '', '', NULL, NULL, 7),
(4, 'asd', '', '', NULL, NULL, 11),
(5, 'sdf', '', '', NULL, NULL, 12),
(6, '', 'https://www.linkedin.com/in/adriel-lira-bba891209/', 'https://www.instagram.com/livrosoltooficial/', NULL, NULL, 13),
(8, '', 'https://www.linkedin.com/in/adriel-lira-bba891209/', 'https://www.instagram.com/livrosoltooficial/', NULL, NULL, 14),
(9, 'https://adriel.sunioweb.com.br', 'https://www.linkedin.com/in/adriel-lira-bba891209/', 'https://www.instagram.com/livrosoltooficial/', NULL, NULL, 15),
(10, '', '', '', NULL, NULL, 37);

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
  `perfil` varchar(45) DEFAULT NULL,
  `profissao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `perfil`, `profissao_id`) VALUES
(1, 'Adriel Lira', 'adrieldiasdossantoslira@hotmail.com', '$2y$10$IMq1G8VNHPPv71IaCzc34eazTq2UoF4UJeLujePoYUJwYZdRQ9OUa', NULL, 'adriel.jpg', NULL),
(2, 'Adriel Lira', 'adrieldias2001@hotmail.com', '$2y$10$kVvNFtXAwPGguWZL03ocIu3iPK5SrThzeKPqm75ts4qth4gHlb3gW', NULL, 'adriel.jpg', 1),
(3, 'Adriel', 'lira@gmail.com', '$2y$10$Z9akREmg2jT9LwWUSGVh4.IrW7y6g1vhZ9titOyg/y2MDJGvOVOby', NULL, 'logo_colajob-removebg (1).png', NULL),
(4, 'Gustavo', 'gu@gmail.com', '$2y$10$YELv9QAE2mUKGgAW36tBGevVjbnyOVmEgUEQZPKWySdJkhpGN8dfS', NULL, 'img-equip-desenvolvendo.png', NULL),
(5, 'Adriel Lira', 'gus@gmail.com', '$2y$10$YG0wzD2Z4qSnYpYDtE0E9OZQU4br529Z.KO9B3T7qFfm2wuMrB2WC', NULL, 'adriel.jpg', NULL),
(6, 'Gustavo', 'gs@gmail.com', '$2y$10$YxT/tbFyRpCfP625lSEaj./R/PNqp3PwVX0PJZZ.8dzfG5h5LhtMq', NULL, 'adriel.jpg', NULL),
(7, 'teste', 'teste@gmail.com', '', NULL, 'adriel.jpg', 3),
(8, 'Gabriel', 'cc@gmail.com', '$2y$10$GTXw7oXXwSjU9kWcGIFisO9no/vegFy3n1Jo8O3DtFrVXOkNpq81G', NULL, 'adriel.jpg', NULL),
(9, 'Juntin', 'bieber@gmail.com', '$2y$10$ZqIcec3.QAwYtPD5ox84PuRqO.m4rVmVI/5/bFjUrmn1MWCnV/xHO', NULL, 'Justin_Bieber_at_Easter_Egg_roll.jpg', 2),
(10, 'Tiago Bezerra', 'professor@gmail.com', '', NULL, 'tiago.jpg', NULL),
(11, 'adasd', 'professora@gmail.com', '$2y$10$m/dqStj6j1Nd9LsHiUfjdeV/W11Yhtlyzm4Fjnc7sbYumkdtskvh6', NULL, 'tiago.jpg', NULL),
(12, 'alo', 'aloha@gmail.com', '$2y$10$NizLmokf65ibHaJkucHi0uUednlorwhRgrc3cpbfSUtqlLEhHGiKW', NULL, 'tiago.jpg', NULL),
(13, 'Cristiane', 'cristiane@gmail.com', '$2y$10$Xb0YbjxkXukK9rWvrBNfWuioHLQv99iyYYnyhCgg9ZSVF.xXaDsr.', NULL, 'tiago.jpg', NULL),
(14, 'Tiago Bezerra', 'bezerra@gmail.com', '$2y$10$zulJZXRJ9g.wL81hPs3IiOsto9Zbnw0dxbYQrHYrEHrKVHeimWcem', NULL, 'tiago.jpg', NULL),
(15, 'Osvaldo da silva nunes de jesus oliveira', 'osvaldo@gmail.com', '$2y$10$MPJwKq0MP324osaBKI9RiOSdqIqWUHAxJfYiN//Zy7YneVmesFH16', NULL, 'tiago.jpg', NULL),
(16, 'asd', 'alohaa@gmail.com', '$2y$10$K9IQT9tNPpmrKPoz/zjmjunL9/XUBAwM8wcK.ClQBK/2YJKF6xXIC', NULL, 'tiago.jpg', NULL),
(18, 'Gabriel', 'liraa@gmail.com', '$2y$10$qbBHBnVfN3zpjpFIGRbeHOy3fPbWTFOdFi1TMxKsv.qo4QGz.R8vC', NULL, 'tiago.jpg', NULL),
(19, 'Adriel Dias dos Santos Lira', 'testando@gmail.com', '$2y$10$f/UtsKcEd08MD6IgJbO4bObkoqCo/dkNJ8K6rxOpuR24JIqSeYDB6', NULL, 'tiago.jpg', NULL),
(20, 'Adriel Dias dos Santos Lira', 'testandooo@gmail.com', '$2y$10$GHipTTYQtLm6UQ0CmMZOL.RWIgtFWUdvOsJeNLRrPwHrl0EyuTrPi', NULL, 'tiago.jpg', NULL),
(21, 'Adriel Dias dos Santos Lira', 'testandoooiii@gmail.com', '$2y$10$dad0StOowHcqQm8LSuOXZeAYnswcKcO04bTy/bat0zwz3rlaI6TQO', NULL, 'tiago.jpg', NULL),
(23, 'Adriel Dias dos Santos Lira', 'testandoooiiirgsg@gmail.com', '$2y$10$MXt33VD3slRAOu7roM/vgeZ57JhcNJl8pAqCLmFywY27DWdy.kWHi', NULL, 'tiago.jpg', NULL),
(24, 'Gabriel', 'agoravaiiii@gmail.com', '$2y$10$7hFbAu/Gzmpw3vhczMpzb.0XG5MgO6cQHJ2wJUbcy3ld/2.UcqNM6', NULL, 'tiago.jpg', NULL),
(25, 'Brenda', 'caramba@gmail.com', '$2y$10$d.hW9wtYUkubKy4R6mDcWOMCkiThMwAsAlvx9HFi8jNnsSVL6tnQG', NULL, 'tiago.jpg', NULL),
(26, 'Adriel Dias dos Santos Lira', 'dfsfsf@gmail.com', '$2y$10$jsTl2ttkxZkrJXLvKoo3u.fpmgziyrcb6CHUS1hLeNb2Ml8GC3DCq', NULL, 'tiago.jpg', NULL),
(28, 'Gabriel', 'testeeeeeee@gmail.com', '$2y$10$1SkRWvh0ydbyi/fpp4/Ja.9alW92lsGXzqGTf1E2y5nKe9VW.ML2y', NULL, 'tiago.jpg', NULL),
(29, 'Adriel Dias dos Santos Lira', 'testandooooooooo@gmail.com', '$2y$10$KEoECDbBLHNaM5MzkojwHOrUD/Mn1AQ/QqoUZre1IfaHM8Kj8Hlku', NULL, 'tiago.jpg', NULL),
(30, 'Adriel Dias dos Santos Lira', 'lavai@gmail.com', '$2y$10$jGzt4jt1MhGD0dAEPwJOl.ma0ZInCPZ/y4mNbXSNfehlHc1C/1U/m', NULL, 'tiago.jpg', NULL),
(31, 'Adriel Dias dos Santos Lira', 'brendadasdasd@gmail.com', '$2y$10$6NO.dLPwHW8/l4r7iLXjp.zbn/c/EuI5fIy7T5Pw8s8SpCNuG2HnS', NULL, 'tiago.jpg', NULL),
(34, 'Adriel Dias dos Santos Lira', 'validando@gmail.com', '$2y$10$WryeWaFgqpdRmWAdXKzwJu1pRv.FoC58FHkoxMkzn29I0k3.JdlVG', NULL, 'tiago.jpg', NULL),
(35, 'bias', 'testandoadriel@gmail.com', '$2y$10$MBu5YwFmK8R8QhjamS6.EeKbQoheE75mLpGGw.eKWddg4zfgLLCee', NULL, 'tiago.jpg', NULL),
(36, 'Adriel Dias dos Santos Lira', 'testandoadriellira@gmail.com', '$2y$10$6EMgofRsqsg/njiglzdoS.6HS5Ij2GH0ucHCWxC1mmFy.V76zoTIK', NULL, 'tiago.jpg', NULL),
(37, 'David', 'david@gmail.com', '$2y$10$zQJuFIcGJCleJ2.TkZbfeeEs1WjU/A4v/Jst1nsvB5IhWN2jras/O', NULL, 'tiago.jpg', NULL),
(38, 'Thiago Bezerra', 'thiagobezerra@hotmail.com', '', NULL, 'tiago.jpg', NULL),
(39, 'Thiago Teste', 'thiagobezerraa@hotmail.com', '', NULL, 'tiago.jpg', NULL),
(43, 'Thiago do Pagode', 'thiagopagodeiro@gmail.com', '$2y$10$U85w5D7mecAGjWB8F9CiEeJ6HY4R6F39qYkkjS0H3fHkbFjALWR6.', NULL, 'tiago.jpg', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aceite`
--
ALTER TABLE `aceite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

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
  ADD KEY `fk_profissao_usuario` (`usuario_id`),
  ADD KEY `fk_profissao_categoria` (`categoria_id`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_usuario_profissao` (`profissao_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aceite`
--
ALTER TABLE `aceite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `profissao`
--
ALTER TABLE `profissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `rede`
--
ALTER TABLE `rede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  ADD CONSTRAINT `fk_profissao_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_profissao_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

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

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_profissao` FOREIGN KEY (`profissao_id`) REFERENCES `profissao` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
