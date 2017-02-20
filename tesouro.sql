-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Fev-2017 às 09:19
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
  `fase` int(11) NOT NULL
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

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`jogo`, `idTime`, `tempo_inicio`, `tempo_fim`) VALUES
(1, 1, '2017-02-11 18:12:59', '2017-02-11 18:00:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacoes`
--

CREATE TABLE `localizacoes` (
  `id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `dica` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `localizacoes`
--

INSERT INTO `localizacoes` (`id`, `latitude`, `longitude`, `dica`, `referencia`) VALUES
(1, -60.98659685, -3.6546323, 'é longe do campus norte', 'mini campus');

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

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `fase`, `id_texto_pergunta`, `id_localizacao`) VALUES
(8, 3, 2, 1),
(9, 1, 1, 1),
(10, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntasfinais`
--

CREATE TABLE `perguntasfinais` (
  `id` int(11) NOT NULL,
  `dica1` varchar(500) NOT NULL,
  `dica2` varchar(500) NOT NULL,
  `dica3` varchar(500) NOT NULL,
  `dica4` varchar(500) NOT NULL,
  `id_texto_pergunta` int(11) NOT NULL,
  `id_localizacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perguntasfinais`
--

INSERT INTO `perguntasfinais` (`id`, `dica1`, `dica2`, `dica3`, `dica4`, `id_texto_pergunta`, `id_localizacao`) VALUES
(1, 'É vermelho.', 'Tem pelo.', 'Chamam ela com o nome da fruta', 'É afrodiziaco', 1, 1),
(2, 'ezdfcef', 'wesfdevrdfs', 'fcsedfwrs', 'ssafref', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `textoperguntas`
--

CREATE TABLE `textoperguntas` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `op1` varchar(500) NOT NULL,
  `op2` varchar(500) NOT NULL,
  `op3` varchar(500) NOT NULL,
  `op4` varchar(500) NOT NULL,
  `op5` varchar(500) NOT NULL,
  `resposta` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `textoperguntas`
--

INSERT INTO `textoperguntas` (`id`, `texto`, `op1`, `op2`, `op3`, `op4`, `op5`, `resposta`) VALUES
(1, 'Qual a fruta preferida da Gisele?', 'uva', 'laranja', 'morango', 'melão', 'banana', 3),
(2, 'Qual a fruta preferida do marcos?', 'banana', 'batata', 'melancia', 'arroz', 'nenhuma das alternativas', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `id_pergunta_final` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`id`, `nome`, `id_pergunta_final`) VALUES
(1, 'Morango', 1),
(2, 'TOPZÃO', 1);

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
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gisa', 'MuYCw5NcKji-f4h6sgzoMAlgaCVd5HMA', '$2y$13$nsI2/b2e0UDnveGjW8FXiuNGtY33XaRx/B32kY/p7RF0LFF56XH/K', NULL, 'gcmn@icomp.ufam.edu.br', 10, 1485025236, 1485025236);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id`),
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
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_texto_pergunta` (`id_texto_pergunta`,`id_localizacao`),
  ADD KEY `fk_localizacao` (`id_localizacao`);

--
-- Indexes for table `perguntasfinais`
--
ALTER TABLE `perguntasfinais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_texto_pergunta` (`id_texto_pergunta`),
  ADD KEY `id_localizacao` (`id_localizacao`);

--
-- Indexes for table `textoperguntas`
--
ALTER TABLE `textoperguntas`
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
  MODIFY `jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `localizacoes`
--
ALTER TABLE `localizacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `perguntasfinais`
--
ALTER TABLE `perguntasfinais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `textoperguntas`
--
ALTER TABLE `textoperguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `fk_time_j` FOREIGN KEY (`id_time`) REFERENCES `times` (`id`);

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
  ADD CONSTRAINT `fk_texto_pergunta` FOREIGN KEY (`id_texto_pergunta`) REFERENCES `textoperguntas` (`id`);

--
-- Limitadores para a tabela `perguntasfinais`
--
ALTER TABLE `perguntasfinais`
  ADD CONSTRAINT `fk_localizacao_F` FOREIGN KEY (`id_localizacao`) REFERENCES `localizacoes` (`id`),
  ADD CONSTRAINT `fk_texto_pergunta_F` FOREIGN KEY (`id_texto_pergunta`) REFERENCES `textoperguntas` (`id`);

--
-- Limitadores para a tabela `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `fk_pergunta_final` FOREIGN KEY (`id_pergunta_final`) REFERENCES `perguntasfinais` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
