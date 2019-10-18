-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2019 às 20:43
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lpbcc19`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descricao` char(10) NOT NULL,
  `un` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`, `un`) VALUES
(1, 'Usado', ''),
(2, 'Novo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `codigo` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `id_tec` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` char(14) DEFAULT NULL,
  `cpf` char(14) NOT NULL,
  `cidade` char(12) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `cpf`, `cidade`, `endereco`, `complemento`, `estado`, `cep`) VALUES
(1, 'Lucas Manain', 'lucas.manain@contini.com.br', '(18)99685-2093', '434.542.345-40', 'CM', 'R. Gerson zanini, 19', 'Perto do brasilzinho', 'SP', '19880-000'),
(22, 'João Otavio Guiotti Silva', '123@gmail.com', '(31)31312-3123', '213.131.313-13', 'Candido Mota', 'Gerson zanini, 19, 19', '19', 'SP', '98800-00'),
(23, 'Paulo  Roberto da Silva', 'gatoxadreztransportes@gmail.com', '(18)99745-5886', '474.654.894-40', 'Candido Mota', 'Orlando de Almeida, n°19', 'Casa Branca', 'SP', '98800-00'),
(24, 'Almir Rogerio Camolesi', 'almir@camolesi.com', '(89)96852-0487', '585.649.541-20', 'Candido Mota', 'Rua Marechal Rondom', 'Em frente ao Bradesco', 'SP', '98800-00'),
(26, 'Marcio Pereira  dos Santos', 'marcinho.123@gmail.com', '(31)32131-3131', '131.321.313-13', 'Maracai', 'Palmaraes dos passaros, n ° 234\'', 'Casa ', 'SP', '54564-65'),
(27, 'Marisa Taka massa no Murro', 'Yakisoba@gmail.com', '(13)21313-1311', '131.321.313-13', 'Candido Mota', 'Pastel de frago 1.99', '19', 'SP', '98800-00'),
(29, 'Marcio Pereira dos Santos', 'marcinho.123@gmail.com', '(18)9986-57434', '474.984.168.40', 'Maracai', 'Palmaraes dos passaros, n ° 234\', Casa', 'Casa', 'SP', '54564-65');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `status` char(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`, `status`) VALUES
(1, 'JGUIOTTI', '79f262201feb58beb3341c1f8427a190', 'admin'),
(2, 'ACAMOLESI', 'cd51a0535ad82c27b090693aee40d090', 'admin'),
(3, 'AZUBCOVI', '9877e1f1035d5937535650d0bef48ebc', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `quantidade` float(10,2) NOT NULL,
  `unidade` char(2) NOT NULL,
  `valorUN` float(10,2) NOT NULL,
  `categoria` char(12) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `quantidade`, `unidade`, `valorUN`, `categoria`, `img`) VALUES
(5, 'Shadown 600 CC', 387901.00, 'UN', 16000.00, 'Motocicleta', 'http://localhost/solman/img/shadow-prod.jpg'),
(9, 'Marauder 800CC', 9999975.00, 'UN', 3.00, 'Motocicleta', 'http://localhost/solman/img/marauder-prod.jpg'),
(15, 'Armario de servidores DELL23', 8190.00, 'UN', 150.95, 'Conversivel', 'http://localhost/solman/img/armarioDell-rack.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `id` int(11) NOT NULL,
  `descricao` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`id`, `descricao`) VALUES
(1, 'UN'),
(1, 'UN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `id_cli` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `quantidade` float(10,2) NOT NULL,
  `data` timestamp NULL DEFAULT current_timestamp(),
  `pago` char(3) NOT NULL DEFAULT 'nao'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_cli`, `id_prod`, `obs`, `quantidade`, `data`, `pago`) VALUES
(000015, 22, 5, 'dsadsadadasdasd', 450.00, '2019-10-11 19:50:30', 'sim'),
(000025, 1, 15, 'sasdasadssddasadas', 500.00, '2019-10-14 22:48:00', 'sim'),
(000026, 23, 15, 'sasdasadssddasadas', 400.00, '2019-10-14 22:48:08', 'sim'),
(000029, 1, 5, 'dsadsadadasdasd', 1.00, '2019-10-15 16:44:45', 'sim'),
(000030, 24, 5, '3eqweqweqwe', 1.00, '2019-10-15 16:44:58', 'sim'),
(000031, 22, 9, 'Compra em cartão na Filial CM', 1.00, '2019-10-15 16:46:46', 'sim'),
(000032, 23, 15, 'Compra em cartão na Filial CM', 2.00, '2019-10-15 16:46:59', 'nao'),
(000033, 1, 15, 'testad asgdh hagd akjg js JF AKKDSF ', 1.00, '2019-10-15 16:47:11', 'nao'),
(000034, 24, 5, 'fhdgdgdfghhdgf', 45.00, '2019-10-15 16:47:39', 'nao'),
(000035, 23, 15, 'Compra em cartão na Filial CM', 2.00, '2019-10-15 16:48:51', 'nao'),
(000036, 26, 9, 'Compra em Filial Maracai em cartão', 10.00, '2019-10-15 16:51:49', 'sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cli` (`id_cli`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
