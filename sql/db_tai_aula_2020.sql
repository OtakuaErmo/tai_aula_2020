-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------


-- Copiando estrutura do banco de dados para db_tai_aula
CREATE DATABASE IF NOT EXISTS `db_tai_aula_2020` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `db_tai_aula_2020`;

-- Copiando estrutura para tabela db_tai_aula.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela db_tai_aula.cliente: 2 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nome`, `telefone`, `cpf`, `email`) VALUES
	(1, 'Jackson', '84 8800-5500', '555.000.555-11', 'exemplo@gmail.com'),
	(2, 'Maria', '84 9900-5500', '000.555.000-55', 'exemplo2@gmail.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

