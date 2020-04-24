-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2020 at 12:38 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.27

--
-- Database: `db_tai_aula_2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `municipio_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `cpf`, `email`, `municipio_id`) VALUES
(1, 'Jackson', '84 8800-5500', '555.000.555-11', 'exemplo@gmail.com', 2),
(2, 'Maria', '84 9900-5500', '000.555.000-55', 'exemplo2@gmail.com', 1),
(3, 'Luiz Macedo', '49 8855-1055', '44455501099', 'luizmacedo@gmail.com', 3),
(4, 'João Macedo', '84 98855-5501', '55501055588', 'lordjoao1@gmail.com', 1),
(37, 'Joãozinho dos Teclados', '49 88998899', '000.555.444-99', 'joaozinhodosteclados@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_bin NOT NULL,
  `uf` varchar(2) COLLATE utf8_bin NOT NULL,
  `estado` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `municipio`
--

INSERT INTO `municipio` (`id`, `nome`, `uf`, `estado`) VALUES
(1, 'Xanxerê', 'SC', 'Santa Catarina'),
(2, 'Natal', 'RN', 'Rio Grande do Norte'),
(3, 'Chapecó', 'SC', 'Santa Catarina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cliente_municipio` (`municipio_id`);

--
-- Indexes for table `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
