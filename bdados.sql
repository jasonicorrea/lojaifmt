
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 11/10/2016 às 00:30:45
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u286721414_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cli`
--

CREATE TABLE IF NOT EXISTS `cli` (
  `idcli` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cli_cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `cli_rg` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_end_logr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_end_num` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_end_bairro` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_end_cidade` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_end_uf` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_telmovel` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_telfixo` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_dtacad` date NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cli`
--

INSERT INTO `cli` (`idcli`, `cli_nome`, `cli_cpf`, `cli_rg`, `cli_end_logr`, `cli_end_num`, `cli_end_bairro`, `cli_end_cidade`, `cli_end_uf`, `cli_telmovel`, `cli_telfixo`, `cli_email`, `cli_dtacad`) VALUES
(1, 'Jasoni', '62778927115', '18118171', 'Rua Nao sei ONde nao sei o que', '100', 'JD Santa Clara', 'Rondonopolis', 'MT', '6681858524', '342035230', 'jc@email.com.br', '0000-00-00'),
(2, 'Anderson', '6277892714', '18262', 'Rua Matrix', '200', 'JD Santa Laura', 'Rondonopolis', 'MT', '6682616265', '342682262', 'and@email.com.br', '0000-00-00'),
(3, 'Welington', '68521171171', '1828456', 'Rua Nao sei ONde', '171', 'JD Boyola', 'Rondonopolis', 'MT', '85025858525', '342035226', 'wel@email.com.br', '0000-00-00'),
(4, 'Elton', '68525581712', '18124582626', 'Rua Branca de Neve', '181', 'JD Floresta Encantada', 'Rondonopolis', 'MT', '8524145525', '342525525', 'elt@email.com.br', '0000-00-00'),
(5, 'Julio', '685248528', '18245', 'Rua da Vóvozinha', '1458', 'JD Netinho', 'Rondonopolis', 'MT', '8524515121', '34034582', 'juju@email.com.br', '0000-00-00'),
(6, 'Diego', '8524824582', '18242424', 'Rua do Paruaba', '24', 'JD Paruaba', 'Rondonopolis', 'MT', '8534258212', '30323528', 'dhiengoo@email.com.br', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `func`
--

CREATE TABLE IF NOT EXISTS `func` (
  `idfunc` int(11) NOT NULL AUTO_INCREMENT,
  `func_login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `func_senha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `func_nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_cpf` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_rg` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_clt` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_end_logr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_end_num` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_end_bairro` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_end_cidade` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_end_uf` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_cargo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_situacao` tinyint(1) DEFAULT NULL,
  `func_telmovel` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `func_dtanasc` date NOT NULL,
  `func_dtacad` date NOT NULL,
  PRIMARY KEY (`idfunc`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `func`
--

INSERT INTO `func` (`idfunc`, `func_login`, `func_senha`, `func_nome`, `func_cpf`, `func_rg`, `func_clt`, `func_end_logr`, `func_end_num`, `func_end_bairro`, `func_end_cidade`, `func_end_uf`, `func_cargo`, `func_situacao`, `func_telmovel`, `func_dtanasc`, `func_dtacad`) VALUES
(1, 'jc', '110375', 'Jasoni', '63278952', '123852', '1235285213', 'Rua do Endereco', '253', 'Morro do Macaco Molhado', 'Rondonopolis', 'MT', 'Badeco', 0, '66252525452', '0000-00-00', '0000-00-00'),
(2, 'wel', '123456', 'Welington', '62778927115', '12824556', '1268254', 'Endereco da Rua', 'S/N', 'Favela do Tiziu', 'Rondonopolis', 'MT', 'Aspone', 0, '25252522', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE IF NOT EXISTS `os` (
  `idos` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `cli_idcli` int(11) NOT NULL,
  `func_idfunc` int(11) NOT NULL,
  `oscol_dtaab` timestamp NULL DEFAULT NULL,
  `oscol_dtafec` timestamp NULL DEFAULT NULL,
  `oscol_subtotalprod` float DEFAULT NULL,
  `oscol_modesc` tinyblob,
  `oscol_subtotalmo` float DEFAULT NULL,
  `oscol_totalos` float DEFAULT NULL,
  `oscol_obs` tinyblob,
  PRIMARY KEY (`idos`,`cli_idcli`),
  KEY `fk_os_cli_idx` (`cli_idcli`),
  KEY `fk_os_func1_idx` (`func_idfunc`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`idos`, `status`, `cli_idcli`, `func_idfunc`, `oscol_dtaab`, `oscol_dtafec`, `oscol_subtotalprod`, `oscol_modesc`, `oscol_subtotalmo`, `oscol_totalos`, `oscol_obs`) VALUES
(1, 0, 1, 2, '2016-10-04 00:04:16', '2016-10-05 00:04:16', 100, 0x4e616f20736569206465206e616461, 0, 0, 0x4f62736572766163616f207175616c71756572),
(2, 0, 2, 2, '2016-10-04 00:04:16', NULL, 100, NULL, 10, 40, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `osprod`
--

CREATE TABLE IF NOT EXISTS `osprod` (
  `os_idos` int(11) NOT NULL,
  `os_cli_idcli` int(11) NOT NULL,
  `prod_idprod` int(11) NOT NULL,
  `osprod_qtd` float DEFAULT NULL,
  `osprod_vlrun` float DEFAULT NULL,
  `osprod_vlrsubtot` float DEFAULT NULL,
  PRIMARY KEY (`os_idos`,`os_cli_idcli`,`prod_idprod`),
  KEY `fk_os_has_prod_prod1_idx` (`prod_idprod`),
  KEY `fk_os_has_prod_os1_idx` (`os_idos`,`os_cli_idcli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod`
--

CREATE TABLE IF NOT EXISTS `prod` (
  `idprod` int(11) NOT NULL AUTO_INCREMENT,
  `prod_desc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prod_preco` float NOT NULL,
  `prod_usado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idprod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `prod`
--

INSERT INTO `prod` (`idprod`, `prod_desc`, `prod_preco`, `prod_usado`) VALUES
(1, 'Tela', 10, 0),
(2, 'Fone', 20, 0),
(3, 'Bateria', 5, 0),
(4, 'Cabo Flat', 50, 0),
(5, 'Capa', 25, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
