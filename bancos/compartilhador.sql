-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15/11/2025 às 14:56
-- Versão do servidor: 11.2.2-MariaDB
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
-- Estrutura para tabela `administracao`
--

DROP TABLE IF EXISTS `administracao`;
CREATE TABLE IF NOT EXISTS `administracao` (
  `ID_Administracao` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int(11) NOT NULL,
  `Nivel_Acesso` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
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
  `id_comunidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_comunidade` varchar(30) NOT NULL,
  `descrição` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_comunidade`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `comunidade`
--

INSERT INTO `comunidade` (`id_comunidade`, `nome_comunidade`, `descrição`, `id_usuario`) VALUES
(2, 'homepage', 'para a pagina inicial', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `classificacao` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `classificacao`) VALUES
(1, 'Poesia'),
(2, 'Romance'),
(3, 'Mistério'),
(4, 'Ficcão científica'),
(5, 'fantasia'),
(7, 'História');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `sinopse` varchar(2500) NOT NULL,
  `nome_arquivo` varchar(255) NOT NULL,
  `caminhoimg` varchar(250) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `data_upload` timestamp NULL DEFAULT current_timestamp(),
  `autor` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_genero` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `sinopse`, `nome_arquivo`, `caminhoimg`, `id_genero`, `caminho`, `data_upload`, `autor`) VALUES
(30, 'Memórias Póstumas de Brás Cubas', 'Brás Cubas, já falecido, decide narrar suas lembranças da vida terrena. Não é um autor defunto qualquer: ele escreve de sua condição pós-morte, com ironia, humor ácido e liberdade para reinventar o olhar sobre sua trajetória. Ele relata sua infância aristocrática no Rio de Janeiro, os amores e desilusões (como a paixão por Marcela e Virgília), os relacionamentos pessoais, os costumes sociais da época e sua passagem pela Europa. Também pondera sobre as instituições, a hipocrisia social, o egoísmo humano e a própria insignificância da vida diante da morte. Ao final, Brás Cubas faz um balanço de sua existência: “negações” de tudo aquilo que não foi — ele não foi grande, não teve filhos, não alcançou fama duradoura — mas, ao mesmo tempo, sugere que, apesar de tudo, saiu “em conta” da vida, pois não sofreu certos males e manteve certo conforto. Apesar disso, fica a reflexão amarga de que não deixou legado, nem filhos que levem adiante algo das suas dores ou da sua experiência.', 'memoriasBras.pdf', 'uploads/176055429668efed381446dbrascubas.jpg.jpg', 2, 'uploads/176055429668efed3814462memoriasBras.pdf.pdf', '2025-10-15 18:51:36', NULL),
(50, 'aventuras', 'A mãe, viúva, luta para sustentar a filha, aconselhando-a para que aprenda tarefas domésticas como estratégia de sobrevivência. Martha, porém, idealiza um futuro diferente: acredita que a educação e o trabalho podem ser caminhos para escapar da situação difícil em que vivem. A obra explora como a protagonista encara limitações sociais impostas pela pobreza, pelas condições de gênero e pela rigidez das expectativas da época.', '176054583368efcc2949b0eMemoriasdemartha.pdf.pdf', 'uploads/176318387969180d079acc9oya.jpg.jpg', 5, 'uploads/176318387969180d079acc2176054583368efcc2949b0eMemoriasdemartha.pdf.pdf.pdf', '2025-11-15 05:24:25', 'andrei');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `sinopse` varchar(2500) NOT NULL,
  `datapedido` varchar(10) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `caminho` varchar(300) NOT NULL,
  `caminhoimg` varchar(300) NOT NULL,
  `nome_arquivo` varchar(250) NOT NULL,
  `autor` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `titulo`, `sinopse`, `datapedido`, `id_genero`, `caminho`, `caminhoimg`, `nome_arquivo`, `autor`) VALUES
(4, 'aventuras', 'A mãe, viúva, luta para sustentar a filha, aconselhando-a para que aprenda tarefas domésticas como estratégia de sobrevivência. Martha, porém, idealiza um futuro diferente: acredita que a educação e o trabalho podem ser caminhos para escapar da situação difícil em que vivem. A obra explora como a protagonista encara limitações sociais impostas pela pobreza, pelas condições de gênero e pela rigidez das expectativas da época.', '2025-11-15', 5, 'uploads/176318387969180d079acc2176054583368efcc2949b0eMemoriasdemartha.pdf.pdf.pdf', 'uploads/176318387969180d079acc9oya.jpg.jpg', '176054583368efcc2949b0eMemoriasdemartha.pdf.pdf', 'andrei');

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `ID_Postagem` int(11) NOT NULL AUTO_INCREMENT,
  `Conteudo` varchar(150) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `datapostagem` varchar(10) NOT NULL,
  `idcomunidade` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_Postagem`),
  KEY `ID_Usuario` (`idusuario`),
  KEY `ID_Comunidade` (`idcomunidade`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `postagem`
--

INSERT INTO `postagem` (`ID_Postagem`, `Conteudo`, `titulo`, `datapostagem`, `idcomunidade`, `idusuario`) VALUES
(3, 'oiii', 'Memórias Póstumas de Brás Cubas', '14', 2, 2),
(4, 'oiii', 'Memórias Póstumas de Brás Cubas', '14', 2, 2),
(5, 'oiii', 'Memórias Póstumas de Brás Cubas', '14/11/2025', 2, 2),
(6, 'oiii', 'Memórias Póstumas de Brás Cubas', '14/11/2025', 2, 2),
(7, 'oiii', 'Memórias Póstumas de Brás Cubas', '14/11/2025', 2, 2),
(8, '1234', 'Memórias Póstumas de Brás Cubas', '14/11/2025', 2, 2),
(11, 'oiii', 'Memórias de Martha', '15/11/2025', 2, 2),
(12, 'oiiii', 'asdfjaskdskdj', '14/11/2025', 2, 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `idade` int(11) NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `Data_Cadastro` timestamp NULL DEFAULT current_timestamp(),
  `id_post` int(11) DEFAULT NULL,
  `caminhoimgperfil` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `idade`, `cargo`, `Data_Cadastro`, `id_post`, `caminhoimgperfil`) VALUES
(1, 'MUrilow', 'murilowhaha@gmail.com', '1234', 13, 'adm', NULL, 0, ''),
(2, 'Andrei', 'dreiestuda@gmail.com', '1234', 14, 'adm', NULL, 0, 'src/img/perfis/avatar_2_1762965683.jfif'),
(3, 'Allan Araujo', 'allanfs762@gmail.com', '1234', 18, 'adm', NULL, 0, ''),
(6, 'imaculado', 'maculado@gmail.com', '1234', 12, 'usuario', NULL, NULL, ''),
(10, 'Ã¡ndrei', 'sim@gmail.com', '1234', 59, 'usuario', NULL, NULL, ''),
(11, 'Conta de Usuário', 'teste@teste.com.br', '1234', 66, 'usuario', NULL, NULL, ''),
(12, 'Katty', 'katty@gmail.com', 'dedei2007', 15, 'usuario', NULL, NULL, 'src/img/perfis/avatar_12_1762910448.jpg'),
(13, 'Genestra', 'genestradavi@gmail.com', 'Miau2012', 28, 'usuario', NULL, NULL, 'src/img/perfis/avatar_13_1762966168.png'),
(14, 'oya', 'oya@gmail.com', '1234', 1, 'usuario', NULL, NULL, 'src/img/perfis/avatar_14_1763166329.jpg');

--
-- Restrições para tabelas despejadas
--

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
  ADD CONSTRAINT `postagem_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postagem_ibfk_2` FOREIGN KEY (`idcomunidade`) REFERENCES `comunidade` (`id_comunidade`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
