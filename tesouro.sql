-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 03-Jan-2017 às 13:55
-- Versão do servidor: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesouro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `id` int(11) NOT NULL,
  `cor` int(1) NOT NULL,
  `id_time` int(11) NOT NULL,
  `fase` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `jogo` int(11) NOT NULL,
  `idTime` int(11) NOT NULL,
  `tempo_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tempo_fim` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacoes`
--

CREATE TABLE `localizacoes` (
  `id` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `dica` int(11) NOT NULL,
  `referencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1483128130),
('m130524_201442_init', 1483128135);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `fase` int(11) NOT NULL,
  `id_texto_pergunta` int(11) NOT NULL,
  `id_localizacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas_finais`
--

CREATE TABLE `perguntas_finais` (
  `id` int(11) NOT NULL,
  `dica1` varchar(500) NOT NULL,
  `dica2` varchar(500) NOT NULL,
  `dica3` varchar(500) NOT NULL,
  `dica4` varchar(500) NOT NULL,
  `id_texto_pergunta` int(11) NOT NULL,
  `id_localizacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto_perguntas`
--

CREATE TABLE `texto_perguntas` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `op1` varchar(500) NOT NULL,
  `op2` varchar(500) NOT NULL,
  `op3` varchar(500) NOT NULL,
  `op4` varchar(500) NOT NULL,
  `op5` varchar(500) NOT NULL,
  `resposta` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `id_pergunta_final` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_time` (`id_time`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`jogo`),
  ADD KEY `idTime` (`idTime`);

--
-- Indexes for table `localizacoes`
--
ALTER TABLE `localizacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_texto_pergunta_2` (`id_texto_pergunta`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_localizacao_2` (`id_localizacao`),
  ADD KEY `id_texto_pergunta` (`id_texto_pergunta`),
  ADD KEY `id_localizacao` (`id_localizacao`);

--
-- Indexes for table `perguntas_finais`
--
ALTER TABLE `perguntas_finais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_texto_pergunta` (`id_texto_pergunta`),
  ADD KEY `id_localizacao` (`id_localizacao`);

--
-- Indexes for table `texto_perguntas`
--
ALTER TABLE `texto_perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pergunta_final` (`id_pergunta_final`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `jogo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perguntas_finais`
--
ALTER TABLE `perguntas_finais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `texto_perguntas`
--
ALTER TABLE `texto_perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `fk_time_j` FOREIGN KEY (`id_time`) REFERENCES `times` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `fk_time_tp` FOREIGN KEY (`idTime`) REFERENCES `times` (`id`);

--
-- Limitadores para a tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `fk_localizacao` FOREIGN KEY (`id_localizacao`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `fk_texto_pergunta` FOREIGN KEY (`id_texto_pergunta`) REFERENCES `texto_perguntas` (`id`);

--
-- Limitadores para a tabela `perguntas_finais`
--
ALTER TABLE `perguntas_finais`
  ADD CONSTRAINT `fk_localizacao_F` FOREIGN KEY (`id_localizacao`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `fk_texto_pergunta_F` FOREIGN KEY (`id_texto_pergunta`) REFERENCES `texto_perguntas` (`id`);

--
-- Limitadores para a tabela `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `fk_pergunta_final` FOREIGN KEY (`id_pergunta_final`) REFERENCES `perguntas_finais` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
