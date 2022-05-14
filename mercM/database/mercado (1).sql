-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Abr-2020 às 18:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nome_admin` text NOT NULL,
  `pass_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nome_admin`, `pass_admin`) VALUES
(1, 'admin', '1234554321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `descricao_produto` text NOT NULL,
  `preco` int(11) NOT NULL,
  `nr_banca` int(11) NOT NULL,
  `nr_celular` int(11) NOT NULL,
  `nome_vendedor` varchar(50) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `imagem`, `nome_produto`, `descricao_produto`, `preco`, `nr_banca`, `nr_celular`, `nome_vendedor`, `id_vendedor`) VALUES
(47, 'bg.jpg', 'Estudantes', ' livro do mundo nao melhores estudantes!', 100, 3, 840000001, 'teste', 0),
(48, 'cs.jpg', 'Livro 2', 'segundo melhor livro do mundo', 20, 2, 840000002, 'teste1', 1111),
(50, 'IMG_1018r.jpg', 'Arroz', 'tomate de alta qualidade', 500, 3, 840000001, 'teste', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `nr_bi` varchar(40) NOT NULL,
  `data_nasc` varchar(40) NOT NULL,
  `data_emissao` varchar(40) NOT NULL,
  `nr_banca` varchar(40) NOT NULL,
  `nr_celular` varchar(40) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nome`, `sexo`, `nr_bi`, `data_nasc`, `data_emissao`, `nr_banca`, `nr_celular`, `id_admin`) VALUES
(26, 'teste', 'Masculino', '0000', '2019-12-23', '2019-12-09', '3', '840000001', 1),
(27, 'teste1', 'Masculino', '1111', '2019-12-17', '2019-12-25', '2', '840000002', 1),
(29, 'pedro', 'Masculino', '11111', '2020-03-18', '2020-03-17', '09', '77777', 1),
(30, 'Samantha Laqui', 'Femenino', '00000', '2001-09-10', '2036-09-10', '36', '842198760', 1),
(31, 'David Basilio Laqui', 'Masculino', '111111', '1998-09-10', '2036-09-10', '16', '845951685', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`),
  ADD UNIQUE KEY `nr_bi` (`nr_bi`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
