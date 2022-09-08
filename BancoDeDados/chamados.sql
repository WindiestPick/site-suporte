-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2022 às 14:48
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
-- Banco de dados: `chamados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `ID` int(11) NOT NULL,
  `ticketID` int(11) NOT NULL,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`ID`, `ticketID`, `user1`, `user2`) VALUES
(1, 49, 23, 14),
(2, 43, 14, 14),
(3, 51, 14, 14),
(4, 53, 14, 14),
(5, 60, 14, 14),
(6, 61, 23, 14),
(7, 62, 14, 14),
(8, 62, 14, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `chatID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tickets`
--

CREATE TABLE `tickets` (
  `ID` int(11) NOT NULL,
  `enterprise` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `priority` varchar(1) NOT NULL,
  `userID` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `suporteID` int(11) DEFAULT NULL,
  `solution` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tickets`
--

INSERT INTO `tickets` (`ID`, `enterprise`, `title`, `description`, `priority`, `userID`, `status`, `suporteID`, `solution`) VALUES
(43, 'SKTK', 'erro de windows', 'não inicia', 'M', 14, 2, 14, ''),
(49, 'JKDIST', 'Teste3', 'koglçbjhg', 'B', 23, 2, 14, ''),
(51, 'SKRB', 'Teste5', 'não', 'A', 14, 2, 14, ''),
(53, 'JKDIST', 'teste 7', 'testando', 'A', 14, 2, 14, ''),
(60, 'JJDIST', 'Olá', 'estou passando pra te desejar um feliz natal e prospero ano novo', 'A', 14, 2, 14, ''),
(61, 'JKDIST', 'internet', 'sinceramente essa internet tá boa demais pra ser jogada no lixo, isso sim.', 'A', 23, 3, 14, 'sim'),
(62, 'JJDIST', 'Teste do chat', 'asdfas', 'A', 14, 3, 14, 'Teste 3 asdfasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `is_adm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`name`, `lastName`, `email`, `password`, `ID`, `is_adm`) VALUES
('Gustavo', 'Segundo', 'gustavo3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 14, 1),
('Falsto', 'Silva', 'falsto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 19, 0),
('Euver', 'Takashi', 'euver@jjdistribuidora.net', 'e10adc3949ba59abbe56e057f20f883e', 20, 1),
('jose', 'Silva', 'tudoque@gmail.com', '202cb962ac59075b964b07152d234b70', 23, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ticketChat` (`ticketID`);

--
-- Índices para tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD KEY `linkChat` (`chatID`),
  ADD KEY `linkUser` (`userID`);

--
-- Índices para tabela `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userOpen` (`userID`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `ticketChat` FOREIGN KEY (`ticketID`) REFERENCES `tickets` (`ID`);

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `linkChat` FOREIGN KEY (`chatID`) REFERENCES `chat` (`ID`),
  ADD CONSTRAINT `linkUser` FOREIGN KEY (`userID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
