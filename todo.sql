-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Maio-2023 às 21:10
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
-- Banco de dados: `todo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(225) NOT NULL,
  `dataCadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `email`, `senha`, `dataCadastro`) VALUES
(1, 'Thiago', 'thiagopininga@hotmail.com', '$2y$10$0BK55yzIe3ep11PkABbwLeHAX16lg.6iYAE2VA0VvpsdXxqZBMnTu', '2023-04-25 12:33:15'),
(2, 'kai gatinha', 'kailanedm2@gmail.com', '$2y$10$iD6rlQjqCv9y0AWpMazEDOnm7BG.cNBDxQH0fLttBWB13Wf4yKekK', '2023-04-25 15:59:29'),
(3, 'Rubens Góes Tavares', 'rgtavares1234@gmail.com', '$2y$10$0yZZfLoZgKbIKDmkIFrRDOwsWIXuV9w6WFgiY9PBdF4jHGRMsDeQi', '2023-04-25 17:35:28'),
(4, 'Ines Pininga', 'inespininga@hotmail.com', '$2y$10$AjphFcMrlhUc1As/T2OZw.kJY5BL99h2NKm5tJdnvhk1QCiiOEBNe', '2023-04-25 20:14:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE IF NOT EXISTS `itens` (
  `idCliente` int NOT NULL,
  `idItem` int NOT NULL AUTO_INCREMENT,
  `comentario` varchar(300) NOT NULL,
  `dataComentario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idItem`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`idCliente`, `idItem`, `comentario`, `dataComentario`) VALUES
(1, 3, 'Comprar aliança da gatinha ', '2023-05-05 14:33:38'),
(2, 7, 'gatinho da minha vida, te amo <3\n\neu te amo mais ainda', '2023-04-25 17:45:50'),
(3, 6, 'Pegar Thais no trabalho ', '2023-04-25 17:36:36'),
(2, 10, 'GATINHA EU TE AMO MUUUUUIIITOOOOO e te quero pra sempre na minha vida, obg por ser essa pessoa incrivel e que muda a minha vida todos os dias pra melhor', '2023-04-25 18:13:47'),
(2, 12, 'senha: thiagogatinho ', '2023-04-25 18:16:42'),
(1, 13, 'Assistir Chainsaw man', '2023-04-25 18:31:33'),
(1, 16, 'DevEmDobro (8 -14 de maio)', '2023-04-25 18:33:08'),
(4, 18, 'Curso de espanhol', '2023-04-25 20:16:58'),
(4, 19, 'Academia ', '2023-04-25 20:17:22'),
(4, 20, 'Shopping ', '2023-04-25 20:17:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
