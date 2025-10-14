-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14/10/2025 às 15:21
-- Versão do servidor: 8.0.42
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `compartilhador`
--
CREATE DATABASE IF NOT EXISTS `compartilhador` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `compartilhador`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `acesso`
--

DROP TABLE IF EXISTS `acesso`;
CREATE TABLE IF NOT EXISTS `acesso` (
  `id_livro` int NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int NOT NULL,
  PRIMARY KEY (`id_livro`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administracao`
--

DROP TABLE IF EXISTS `administracao`;
CREATE TABLE IF NOT EXISTS `administracao` (
  `ID_Administracao` int NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int NOT NULL,
  `Nivel_Acesso` int NOT NULL,
  `id_livro` int NOT NULL,
  `id_autor` int NOT NULL,
  PRIMARY KEY (`ID_Administracao`),
  KEY `ID_Usuario` (`ID_Usuario`),
  KEY `id_livro` (`id_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comunidade`
--

DROP TABLE IF EXISTS `comunidade`;
CREATE TABLE IF NOT EXISTS `comunidade` (
  `id_comunidade` int NOT NULL AUTO_INCREMENT,
  `nome_comunidade` int NOT NULL,
  `descrição` int NOT NULL,
  `id_usuario` int NOT NULL,
  `postagem` int NOT NULL,
  PRIMARY KEY (`id_comunidade`),
  KEY `postagem` (`postagem`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int NOT NULL AUTO_INCREMENT,
  `classificacao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `classificacao`) VALUES
(1, 'poesia'),
(2, 'romance'),
(3, 'mistério'),
(4, 'ficcaocien'),
(5, 'fantasia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopse` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_arquivo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `caminhoimg` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genero` int NOT NULL,
  `caminho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_upload` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_genero` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `sinopse`, `nome_arquivo`, `caminhoimg`, `id_genero`, `caminho`, `data_upload`, `autor`) VALUES
(14, 'Memórias Póstumas de Brás Cubas', '\"Memórias Póstumas de Brás Cubas\" é a história de um homem rico do Rio de Janeiro do século XIX, narrada após sua morte. O protagonista, Brás Cubas, conta as memórias de sua vida com ironia e sarcasmo, abordando temas como a futilidade da busca por riqueza, a hipocrisia social, amores frustrados, e a crítica à sociedade da época. A narrativa é não-linear, cheia de digressões filosóficas e reflexões sobre a condição humana, e desafia as convenções literárias.', 'memoriasBras.pdf', 'uploads/176036824568ed16758537d.png', 2, 'uploads/176036824568ed16758537a.pdf', '2025-10-13 15:10:45', 'Machado de Assis'),
(15, 'Dom Casmurro', '\"Dom Casmurro\" é a história de Bento Santiago, que narra sua vida para provar uma teoria: a de que sua esposa, Capitu, o traiu com seu melhor amigo, Escobar. A narrativa, escrita por um Bentinho já idoso e amargurado, mostra o ciúme crescente que o consome ao longo do tempo e como suas suspeitas, alimentadas pela semelhança entre seu filho e Escobar, destroem sua felicidade. O livro é conhecido por sua perspectiva duvidosa, deixando ao leitor a tarefa de decidir se a traição realmente aconteceu.', 'Dom_Casmurro-Machado_de_Assis.pdf', 'uploads/176036837968ed16fb41a09.jpg', 2, 'uploads/176036837968ed16fb41a07.pdf', '2025-10-13 15:12:59', 'Machado de Assis'),
(18, 'Antologia Poética', ' A obra, organizada por ele mesmo, abrange temas como o indivíduo, a terra natal, a família, os amigos, o mundo social e político, o amor, a própria poesia e a condição existencial.', 'antologia-poetica-carlos-drummond-de-andrade.pdf', 'uploads/176045344368ee63436ab90.jfif', 1, 'uploads/176045344368ee63436ab8d.pdf', '2025-10-14 14:50:43', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `ID_Postagem` int NOT NULL AUTO_INCREMENT,
  `Conteudo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data_Postagem` date NOT NULL,
  `ID_Comunidade` int NOT NULL,
  `ID_Usuario` int NOT NULL,
  `caminho` int NOT NULL,
  PRIMARY KEY (`ID_Postagem`),
  KEY `ID_Usuario` (`ID_Usuario`),
  KEY `ID_Comunidade` (`ID_Comunidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int NOT NULL,
  `cargo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data_Cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_post` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `idade`, `cargo`, `Data_Cadastro`, `id_post`) VALUES
(1, 'MUrilow', 'murilowhaha@gmail.com', '1234', 13, 'adm', NULL, 0),
(2, 'andrei', 'dreiestuda@gmail.com', '1234', 14, 'adm', NULL, 0),
(3, 'Allan Araujo', 'allanfs762@gmail.com', '1234', 18, 'adm', NULL, 0),
(5, 'Conta de Usuário', 'teste@teste.com.br', '1234', 20, 'usuario', NULL, NULL),
(6, 'imaculado', 'maculado@gmail.com', '1234', 12, 'usuario', NULL, NULL);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `acesso_ibfk_1` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acesso_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `administracao`
--
ALTER TABLE `administracao`
  ADD CONSTRAINT `administracao_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administracao_ibfk_2` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `comunidade`
--
ALTER TABLE `comunidade`
  ADD CONSTRAINT `comunidade_ibfk_1` FOREIGN KEY (`postagem`) REFERENCES `postagem` (`ID_Postagem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comunidade_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);

--
-- Restrições para tabelas `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `postagem_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postagem_ibfk_2` FOREIGN KEY (`ID_Comunidade`) REFERENCES `comunidade` (`id_comunidade`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
