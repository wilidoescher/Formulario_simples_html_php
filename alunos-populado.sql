-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Out-2018 às 17:57
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estacio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `idaluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ddd` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idaluno`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`idaluno`, `nome`, `mail`, `ddd`, `fone`, `endereco`, `cidade`, `uf`) VALUES
(1, 'Aluno 01', 'aluno1@aluno.com.br', '11', '1111-1111', 'Rua 1, Qd. 1, Lt. 1', 'GoiÃ¢nia', 'GO'),
(2, 'Aluno 02', 'aluno2@aluno.com.br', '22', '2222-2222', 'Rua 2, Qd. 2, Lt. 2', 'GoiÃ¢nia', 'GO'),
(3, 'Aluno 03', 'aluno3@aluno.com.br', '33', '3333-3333', 'Rua 3, Qd. 3, Lt. 3', 'GoiÃ¢nia', 'GO'),
(4, 'Aluno 04', 'aluno4@aluno.com.br', '44', '4444-4444', 'Rua 4, Qd. 4, Lt. 4', 'GoiÃ¢nia', 'GO'),
(5, 'Aluno 05', 'aluno5@aluno.com.br', '55', '5555-5555', 'Rua 5, Qd. 5, Lt. 5', 'GoiÃ¢nia', 'GO'),
(6, 'Aluno 06', 'aluno6@aluno.com.br', '66', '6666-6666', 'Rua 6, Qd. 6, Lt. 6', 'GoiÃ¢nia', 'GO'),
(7, 'Aluno 07', 'aluno7@aluno.com.br', '77', '7777-7777', 'Rua 7, Qd. 7, Lt. 7', 'GoiÃ¢nia', 'GO'),
(8, 'Aluno 08', 'aluno8@aluno.com.br', '88', '8888-8888', 'Rua 8, Qd. 8, Lt. 8', 'GoiÃ¢nia', 'GO'),
(9, 'Aluno 09', 'aluno9@aluno.com.br', '99', '9999-9999', 'Rua 9, Qd. 9, Lt. 9', 'GoiÃ¢nia', 'GO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
