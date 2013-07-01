-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `empresarial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanco`
--

CREATE TABLE IF NOT EXISTS `tbanco` (
  `bancodigo` int(11) NOT NULL AUTO_INCREMENT,
  `bannome` varchar(50) NOT NULL,
  PRIMARY KEY (`bancodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbanco`
--

INSERT INTO `tbanco` (`bancodigo`, `bannome`) VALUES
(1, 'Caixa - CEF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcentrocusto`
--

CREATE TABLE IF NOT EXISTS `tcentrocusto` (
  `cencuscodigo` int(11) NOT NULL AUTO_INCREMENT,
  `cencusanalitico` varchar(20) NOT NULL,
  `cencusnome` varchar(100) NOT NULL,
  `cencusempresa` int(11) NOT NULL,
  PRIMARY KEY (`cencuscodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tcentrocusto`
--

INSERT INTO `tcentrocusto` (`cencuscodigo`, `cencusanalitico`, `cencusnome`, `cencusempresa`) VALUES
(1, '1.00.000.000', 'Obra', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcidade`
--

CREATE TABLE IF NOT EXISTS `tcidade` (
  `cidcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `cidnome` varchar(50) NOT NULL,
  `cidestado` int(11) NOT NULL,
  `cidcep` varchar(15) NOT NULL,
  `cidcodigonfe` int(11) NOT NULL,
  PRIMARY KEY (`cidcodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tcidade`
--

INSERT INTO `tcidade` (`cidcodigo`, `cidnome`, `cidestado`, `cidcep`, `cidcodigonfe`) VALUES
(1, 'Vacaria', 1, '95200-000', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcliente`
--

CREATE TABLE IF NOT EXISTS `tcliente` (
  `clicodigo` int(11) NOT NULL AUTO_INCREMENT,
  `clipessoa` varchar(1) NOT NULL,
  `clirazao` varchar(80) NOT NULL,
  `clifantasia` varchar(50) NOT NULL,
  `cliendereco` varchar(80) NOT NULL,
  `clibairro` varchar(50) NOT NULL,
  `clicomplemento` varchar(50) NOT NULL,
  `clinumero` varchar(10) NOT NULL,
  `clicidade` int(11) NOT NULL,
  `clicep` varchar(9) NOT NULL,
  `clicxpostal` varchar(20) NOT NULL,
  `clifone` varchar(20) NOT NULL,
  `clifax` varchar(20) NOT NULL,
  `clicelular` varchar(20) NOT NULL,
  `cliemail` varchar(50) NOT NULL,
  `cliemailalt` varchar(50) NOT NULL,
  `clihomepage` varchar(50) NOT NULL,
  `clicontatofin` varchar(50) NOT NULL,
  `clicnpj` varchar(25) NOT NULL,
  `clicpf` varchar(25) NOT NULL,
  `cliie` varchar(25) NOT NULL,
  `cligrupo` int(11) NOT NULL,
  `clisituacao` varchar(1) NOT NULL,
  `clidatanasc` date NOT NULL,
  `clinaturalidade` int(11) NOT NULL,
  `clipai` varchar(40) NOT NULL,
  `climae` varchar(40) NOT NULL,
  `clirg` varchar(25) NOT NULL,
  `cliorgaoexprg` varchar(25) NOT NULL,
  `clidataexprg` date NOT NULL,
  `cliobs` text NOT NULL,
  `cliformapgto` int(11) NOT NULL,
  `clidiafatura` int(11) NOT NULL,
  `cliim` varchar(25) NOT NULL,
  `clitipcob` int(11) NOT NULL,
  `cliopcaocad` int(11) NOT NULL,
  PRIMARY KEY (`clicodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempresa`
--

CREATE TABLE IF NOT EXISTS `tempresa` (
  `empcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `empnome` varchar(80) NOT NULL,
  `empendereco` varchar(80) NOT NULL,
  `empbairro` varchar(50) NOT NULL,
  `empcidade` int(11) NOT NULL,
  `empcep` varchar(15) NOT NULL,
  `empfone` varchar(20) NOT NULL,
  `empfax` varchar(20) NOT NULL,
  `empemail` varchar(50) NOT NULL,
  `emphomepage` varchar(50) NOT NULL,
  `empcnpj` varchar(25) NOT NULL,
  `empcpf` varchar(25) NOT NULL,
  `empie` varchar(25) NOT NULL,
  `empim` varchar(25) NOT NULL,
  `emprg` varchar(25) NOT NULL,
  `emporgaoexprg` varchar(25) NOT NULL,
  `empdataemprg` date NOT NULL,
  `empcontato` varchar(50) NOT NULL,
  `empcontador` varchar(50) NOT NULL,
  `empcrccontador` varchar(25) NOT NULL,
  `emptitular` varchar(50) NOT NULL,
  `empcargotitular` varchar(50) NOT NULL,
  `empcpftitular` varchar(50) NOT NULL,
  `empregjunta` varchar(25) NOT NULL,
  `empdataregjunta` date NOT NULL,
  `empobs` text NOT NULL,
  PRIMARY KEY (`empcodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tempresa`
--

INSERT INTO `tempresa` (`empcodigo`, `empnome`, `empendereco`, `empbairro`, `empcidade`, `empcep`, `empfone`, `empfax`, `empemail`, `emphomepage`, `empcnpj`, `empcpf`, `empie`, `empim`, `emprg`, `emporgaoexprg`, `empdataemprg`, `empcontato`, `empcontador`, `empcrccontador`, `emptitular`, `empcargotitular`, `empcpftitular`, `empregjunta`, `empdataregjunta`, `empobs`) VALUES
(1, 'Suzin Eng', 'XV Novembro', 'Centro', 1, '95200-000', '54 99542451', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testado`
--

CREATE TABLE IF NOT EXISTS `testado` (
  `estcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `estnome` varchar(50) NOT NULL,
  `estsigla` varchar(3) NOT NULL,
  `estpais` int(11) NOT NULL,
  PRIMARY KEY (`estcodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `testado`
--

INSERT INTO `testado` (`estcodigo`, `estnome`, `estsigla`, `estpais`) VALUES
(1, 'RSS', 'RS', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tfinanceiro`
--

CREATE TABLE IF NOT EXISTS `tfinanceiro` (
  `finregistro` int(11) NOT NULL AUTO_INCREMENT,
  `fintipo` varchar(1) NOT NULL,
  `finempresa` int(11) NOT NULL,
  `finold` varchar(1) NOT NULL,
  `fincliente` int(11) NOT NULL,
  `findcto1` bigint(20) NOT NULL,
  `findcto2` varchar(10) NOT NULL,
  `finparcela` int(11) NOT NULL,
  `finemissao` date NOT NULL,
  `finvcto` date NOT NULL,
  `finprevvcto` date NOT NULL,
  `finvalor` double NOT NULL,
  `findesccomercial` double NOT NULL,
  `fintipocob` int(11) NOT NULL,
  `finsubgrupofin` int(11) NOT NULL,
  `finconta` int(11) NOT NULL,
  `finnossonum` varchar(25) NOT NULL,
  `finsituacao` varchar(2) NOT NULL,
  `finvalorpago` double NOT NULL,
  `findesconto` double NOT NULL,
  `finacrescimo` double NOT NULL,
  `fintaxa` double NOT NULL,
  `finliquido` double NOT NULL,
  `finobs` text NOT NULL,
  `finfaturamento` date NOT NULL,
  `findataprotesto` date NOT NULL,
  `finobs2` text NOT NULL,
  PRIMARY KEY (`finregistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tfinanceirocentrocusto`
--

CREATE TABLE IF NOT EXISTS `tfinanceirocentrocusto` (
  `finccregistroid` int(11) NOT NULL AUTO_INCREMENT,
  `finccregistro` int(11) NOT NULL,
  `fincccentrocusto` int(11) NOT NULL,
  `finccvalor` double NOT NULL,
  `finccpercentual` double NOT NULL,
  PRIMARY KEY (`finccregistroid`,`finccregistro`,`fincccentrocusto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tfinanceiropgto`
--

CREATE TABLE IF NOT EXISTS `tfinanceiropgto` (
  `finpgregistroid` int(11) NOT NULL AUTO_INCREMENT,
  `finpgregistro` int(11) NOT NULL,
  `finpgpgto` int(11) NOT NULL,
  `finpgtipo` varchar(1) NOT NULL,
  `finpgdata` date NOT NULL,
  `finpgvalorpago` double NOT NULL,
  `finpgdesconto` double NOT NULL,
  `finpgacrescimo` double NOT NULL,
  `finpgtaxa` double NOT NULL,
  `finpgliquido` double NOT NULL,
  `finpgtipocob` int(11) NOT NULL,
  `finpgconta` int(11) NOT NULL,
  `finobs` text NOT NULL,
  `finpglctocx01` int(11) NOT NULL,
  `finpglctocx02` int(11) NOT NULL,
  `finpglctocx03` int(11) NOT NULL,
  `finpglctocx04` int(11) NOT NULL,
  `finpglctocx05` int(11) NOT NULL,
  `finpgchequepre` varchar(1) NOT NULL,
  `finpgnumerorec` varchar(20) NOT NULL,
  PRIMARY KEY (`finpgregistroid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tfinanceiroplanoconta`
--

CREATE TABLE IF NOT EXISTS `tfinanceiroplanoconta` (
  `finpcregistroid` int(11) NOT NULL AUTO_INCREMENT,
  `finpcregistro` int(11) NOT NULL,
  `finpcplanoconta` int(11) NOT NULL,
  `finpcvalor` double NOT NULL,
  `finpcpercentual` double NOT NULL,
  PRIMARY KEY (`finpcregistroid`,`finpcregistro`,`finpcplanoconta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tformapgto`
--

CREATE TABLE IF NOT EXISTS `tformapgto` (
  `forcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `fornome` varchar(50) NOT NULL,
  `fortipo` varchar(1) NOT NULL,
  `formesdia` int(11) NOT NULL,
  `forprazofixo` int(11) NOT NULL,
  `forsigla` varchar(50) NOT NULL,
  `forsituacao` varchar(1) NOT NULL,
  `forcontabil` varchar(1) NOT NULL,
  PRIMARY KEY (`forcodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tformapgto`
--

INSERT INTO `tformapgto` (`forcodigo`, `fornome`, `fortipo`, `formesdia`, `forprazofixo`, `forsigla`, `forsituacao`, `forcontabil`) VALUES
(1, 'A vista', '1', 1, 1, 'AV', 'A', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tgrupocliente`
--

CREATE TABLE IF NOT EXISTS `tgrupocliente` (
  `gruclicodigo` int(11) NOT NULL AUTO_INCREMENT,
  `gruclinome` varchar(50) NOT NULL,
  PRIMARY KEY (`gruclicodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tgrupofin`
--

CREATE TABLE IF NOT EXISTS `tgrupofin` (
  `grufincodigo` int(11) NOT NULL AUTO_INCREMENT,
  `grufinnome` varchar(50) NOT NULL,
  PRIMARY KEY (`grufincodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tpais`
--

CREATE TABLE IF NOT EXISTS `tpais` (
  `paicodigo` int(11) NOT NULL AUTO_INCREMENT,
  `painome` varchar(80) NOT NULL,
  `paiddi` int(11) NOT NULL,
  `paicodigobacen` int(11) NOT NULL,
  PRIMARY KEY (`paicodigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tpais`
--

INSERT INTO `tpais` (`paicodigo`, `painome`, `paiddi`, `paicodigobacen`) VALUES
(1, 'Brasil', 55, 1058);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tplanoconta`
--

CREATE TABLE IF NOT EXISTS `tplanoconta` (
  `placodigo` int(11) NOT NULL AUTO_INCREMENT,
  `planome` varchar(80) NOT NULL,
  `plaempresa` int(11) NOT NULL,
  `plaanalitico` varchar(20) NOT NULL,
  PRIMARY KEY (`placodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tsubgrupofin`
--

CREATE TABLE IF NOT EXISTS `tsubgrupofin` (
  `subgfcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `subgfnome` varchar(50) NOT NULL,
  `subgfgrupo` int(11) NOT NULL,
  PRIMARY KEY (`subgfcodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ttipocob`
--

CREATE TABLE IF NOT EXISTS `ttipocob` (
  `tipcobcodigo` int(11) NOT NULL AUTO_INCREMENT,
  `tipcobnome` varchar(50) NOT NULL,
  `tipcobsituacao` varchar(1) NOT NULL,
  PRIMARY KEY (`tipcobcodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tusers`
--

CREATE TABLE IF NOT EXISTS `tusers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tusers`
--

INSERT INTO `tusers` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(6, 'PERF', 'd742316777364bb6b1667475c6b36a9ec71f5e03', NULL, '2013-07-01 16:27:30', '2013-07-01 16:27:30');

