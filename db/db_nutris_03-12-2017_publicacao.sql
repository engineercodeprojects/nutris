-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 02-Dez-2017 às 23:27
-- Versão do servidor: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nutris`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_acompanhamento`
--

CREATE TABLE IF NOT EXISTS `tb_acompanhamento` (
  `cod_paciente` int(3) NOT NULL,
  `cod_consulta` int(3) NOT NULL,
  `cod_programa` int(3) NOT NULL,
  `cod_reeducacao` int(3) NOT NULL,
  `cod_dia_semana` int(3) NOT NULL,
  `cod_tipo_refeicao` int(3) NOT NULL,
  `data_acompanhamento` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'estrela_vazia.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_acompanhamento`
--

INSERT INTO `tb_acompanhamento` (`cod_paciente`, `cod_consulta`, `cod_programa`, `cod_reeducacao`, `cod_dia_semana`, `cod_tipo_refeicao`, `data_acompanhamento`, `status`) VALUES
(47, 7, 2, 21, 1, 1, '2017-12-03', 'estrela_cheia.png'),
(47, 7, 2, 21, 1, 2, '2017-12-03', 'estrela_vazia.png'),
(47, 7, 2, 21, 1, 3, '2017-12-03', 'estrela_vazia.png'),
(47, 7, 2, 21, 1, 4, '2017-12-03', 'estrela_cheia.png'),
(47, 7, 2, 21, 1, 5, '2017-12-03', 'estrela_vazia.png'),
(47, 7, 2, 21, 1, 6, '2017-12-03', 'estrela_cheia.png'),
(47, 7, 2, 21, 7, 1, '2017-12-02', 'estrela_cheia.png'),
(47, 7, 2, 21, 7, 2, '2017-12-02', 'estrela_cheia.png'),
(47, 7, 2, 21, 7, 3, '2017-12-02', 'estrela_cheia.png'),
(47, 7, 2, 21, 7, 4, '2017-12-02', 'estrela_cheia.png'),
(47, 7, 2, 21, 7, 5, '2017-12-02', 'estrela_cheia.png'),
(47, 7, 2, 21, 7, 6, '2017-12-02', 'estrela_cheia.png'),
(47, 23, 2, 22, 1, 1, '2017-12-06', 'estrela_vazia.png'),
(47, 23, 2, 22, 1, 2, '2017-12-06', 'estrela_vazia.png'),
(47, 23, 2, 22, 1, 3, '2017-12-06', 'estrela_vazia.png'),
(47, 23, 2, 22, 1, 4, '2017-12-06', 'estrela_vazia.png'),
(47, 23, 2, 22, 1, 5, '2017-12-06', 'estrela_vazia.png'),
(47, 23, 2, 22, 1, 6, '2017-12-06', 'estrela_vazia.png'),
(47, 23, 2, 22, 2, 1, '2017-12-07', 'estrela_vazia.png'),
(47, 23, 2, 22, 2, 2, '2017-12-07', 'estrela_vazia.png'),
(47, 23, 2, 22, 2, 3, '2017-12-07', 'estrela_vazia.png'),
(47, 23, 2, 22, 2, 4, '2017-12-07', 'estrela_vazia.png'),
(47, 23, 2, 22, 2, 5, '2017-12-07', 'estrela_vazia.png'),
(47, 23, 2, 22, 2, 6, '2017-12-07', 'estrela_vazia.png'),
(47, 23, 2, 22, 3, 1, '2017-12-08', 'estrela_vazia.png'),
(47, 23, 2, 22, 3, 2, '2017-12-08', 'estrela_vazia.png'),
(47, 23, 2, 22, 3, 3, '2017-12-08', 'estrela_vazia.png'),
(47, 23, 2, 22, 3, 4, '2017-12-08', 'estrela_vazia.png'),
(47, 23, 2, 22, 3, 5, '2017-12-08', 'estrela_vazia.png'),
(47, 23, 2, 22, 3, 6, '2017-12-08', 'estrela_vazia.png'),
(47, 23, 2, 22, 4, 1, '2017-12-09', 'estrela_vazia.png'),
(47, 23, 2, 22, 4, 2, '2017-12-09', 'estrela_vazia.png'),
(47, 23, 2, 22, 4, 3, '2017-12-09', 'estrela_vazia.png'),
(47, 23, 2, 22, 4, 4, '2017-12-09', 'estrela_vazia.png'),
(47, 23, 2, 22, 4, 5, '2017-12-09', 'estrela_vazia.png'),
(47, 23, 2, 22, 4, 6, '2017-12-09', 'estrela_vazia.png'),
(47, 23, 2, 22, 5, 1, '2017-12-10', 'estrela_vazia.png'),
(47, 23, 2, 22, 5, 2, '2017-12-10', 'estrela_vazia.png'),
(47, 23, 2, 22, 5, 3, '2017-12-10', 'estrela_vazia.png'),
(47, 23, 2, 22, 5, 4, '2017-12-10', 'estrela_vazia.png'),
(47, 23, 2, 22, 5, 5, '2017-12-10', 'estrela_vazia.png'),
(47, 23, 2, 22, 5, 6, '2017-12-10', 'estrela_vazia.png'),
(47, 23, 2, 22, 6, 1, '2017-12-04', 'estrela_vazia.png'),
(47, 23, 2, 22, 6, 2, '2017-12-04', 'estrela_vazia.png'),
(47, 23, 2, 22, 6, 3, '2017-12-04', 'estrela_vazia.png'),
(47, 23, 2, 22, 6, 4, '2017-12-04', 'estrela_vazia.png'),
(47, 23, 2, 22, 6, 5, '2017-12-04', 'estrela_vazia.png'),
(47, 23, 2, 22, 6, 6, '2017-12-04', 'estrela_vazia.png'),
(47, 23, 2, 22, 7, 1, '2017-12-05', 'estrela_vazia.png'),
(47, 23, 2, 22, 7, 2, '2017-12-05', 'estrela_vazia.png'),
(47, 23, 2, 22, 7, 3, '2017-12-05', 'estrela_vazia.png'),
(47, 23, 2, 22, 7, 4, '2017-12-05', 'estrela_vazia.png'),
(47, 23, 2, 22, 7, 5, '2017-12-05', 'estrela_vazia.png'),
(47, 23, 2, 22, 7, 6, '2017-12-05', 'estrela_vazia.png'),
(59, 24, 2, 22, 2, 1, '2017-08-07', 'estrela_vazia.png'),
(59, 24, 2, 22, 2, 2, '2017-08-07', 'estrela_vazia.png'),
(59, 24, 2, 22, 2, 3, '2017-08-07', 'estrela_vazia.png'),
(59, 24, 2, 22, 2, 4, '2017-08-07', 'estrela_vazia.png'),
(59, 24, 2, 22, 2, 5, '2017-08-07', 'estrela_vazia.png'),
(59, 24, 2, 22, 2, 6, '2017-08-07', 'estrela_vazia.png'),
(59, 24, 2, 22, 4, 1, '2017-08-02', 'estrela_vazia.png'),
(59, 24, 2, 22, 4, 2, '2017-08-02', 'estrela_vazia.png'),
(59, 24, 2, 22, 4, 3, '2017-08-02', 'estrela_vazia.png'),
(59, 24, 2, 22, 4, 4, '2017-08-02', 'estrela_vazia.png'),
(59, 24, 2, 22, 4, 5, '2017-08-02', 'estrela_vazia.png'),
(59, 24, 2, 22, 4, 6, '2017-08-02', 'estrela_vazia.png'),
(59, 24, 2, 22, 6, 1, '2017-08-04', 'estrela_vazia.png'),
(59, 24, 2, 22, 6, 2, '2017-08-04', 'estrela_vazia.png'),
(59, 24, 2, 22, 6, 3, '2017-08-04', 'estrela_vazia.png'),
(59, 24, 2, 22, 6, 4, '2017-08-04', 'estrela_vazia.png'),
(59, 24, 2, 22, 6, 5, '2017-08-04', 'estrela_vazia.png'),
(59, 24, 2, 22, 6, 6, '2017-08-04', 'estrela_vazia.png'),
(59, 24, 2, 23, 1, 1, '2017-08-06', 'estrela_vazia.png'),
(59, 24, 2, 23, 1, 2, '2017-08-06', 'estrela_vazia.png'),
(59, 24, 2, 23, 1, 3, '2017-08-06', 'estrela_vazia.png'),
(59, 24, 2, 23, 1, 4, '2017-08-06', 'estrela_vazia.png'),
(59, 24, 2, 23, 1, 5, '2017-08-06', 'estrela_vazia.png'),
(59, 24, 2, 23, 1, 6, '2017-08-06', 'estrela_vazia.png'),
(59, 24, 2, 23, 3, 1, '2017-08-08', 'estrela_vazia.png'),
(59, 24, 2, 23, 3, 2, '2017-08-08', 'estrela_vazia.png'),
(59, 24, 2, 23, 3, 3, '2017-08-08', 'estrela_vazia.png'),
(59, 24, 2, 23, 3, 4, '2017-08-08', 'estrela_vazia.png'),
(59, 24, 2, 23, 3, 5, '2017-08-08', 'estrela_vazia.png'),
(59, 24, 2, 23, 3, 6, '2017-08-08', 'estrela_vazia.png'),
(59, 24, 2, 23, 5, 1, '2017-08-03', 'estrela_vazia.png'),
(59, 24, 2, 23, 5, 2, '2017-08-03', 'estrela_vazia.png'),
(59, 24, 2, 23, 5, 3, '2017-08-03', 'estrela_vazia.png'),
(59, 24, 2, 23, 5, 4, '2017-08-03', 'estrela_vazia.png'),
(59, 24, 2, 23, 5, 5, '2017-08-03', 'estrela_vazia.png'),
(59, 24, 2, 23, 5, 6, '2017-08-03', 'estrela_vazia.png'),
(59, 24, 2, 23, 7, 1, '2017-08-05', 'estrela_vazia.png'),
(59, 24, 2, 23, 7, 2, '2017-08-05', 'estrela_vazia.png'),
(59, 24, 2, 23, 7, 3, '2017-08-05', 'estrela_vazia.png'),
(59, 24, 2, 23, 7, 4, '2017-08-05', 'estrela_vazia.png'),
(59, 24, 2, 23, 7, 5, '2017-08-05', 'estrela_vazia.png'),
(59, 24, 2, 23, 7, 6, '2017-08-05', 'estrela_vazia.png'),
(60, 25, 2, 22, 2, 1, '2017-12-04', 'estrela_vazia.png'),
(60, 25, 2, 22, 2, 2, '2017-12-04', 'estrela_vazia.png'),
(60, 25, 2, 22, 2, 3, '2017-12-04', 'estrela_vazia.png'),
(60, 25, 2, 22, 2, 4, '2017-12-04', 'estrela_vazia.png'),
(60, 25, 2, 22, 2, 5, '2017-12-04', 'estrela_vazia.png'),
(60, 25, 2, 22, 2, 6, '2017-12-04', 'estrela_vazia.png'),
(60, 25, 2, 22, 4, 1, '2017-12-06', 'estrela_vazia.png'),
(60, 25, 2, 22, 4, 2, '2017-12-06', 'estrela_vazia.png'),
(60, 25, 2, 22, 4, 3, '2017-12-06', 'estrela_vazia.png'),
(60, 25, 2, 22, 4, 4, '2017-12-06', 'estrela_vazia.png'),
(60, 25, 2, 22, 4, 5, '2017-12-06', 'estrela_vazia.png'),
(60, 25, 2, 22, 4, 6, '2017-12-06', 'estrela_vazia.png'),
(60, 25, 2, 22, 6, 1, '2017-12-08', 'estrela_vazia.png'),
(60, 25, 2, 22, 6, 2, '2017-12-08', 'estrela_vazia.png'),
(60, 25, 2, 22, 6, 3, '2017-12-08', 'estrela_vazia.png'),
(60, 25, 2, 22, 6, 4, '2017-12-08', 'estrela_vazia.png'),
(60, 25, 2, 22, 6, 5, '2017-12-08', 'estrela_vazia.png'),
(60, 25, 2, 22, 6, 6, '2017-12-08', 'estrela_vazia.png'),
(60, 25, 2, 23, 1, 1, '2017-12-10', 'estrela_vazia.png'),
(60, 25, 2, 23, 1, 2, '2017-12-10', 'estrela_vazia.png'),
(60, 25, 2, 23, 1, 3, '2017-12-10', 'estrela_vazia.png'),
(60, 25, 2, 23, 1, 4, '2017-12-10', 'estrela_vazia.png'),
(60, 25, 2, 23, 1, 5, '2017-12-10', 'estrela_vazia.png'),
(60, 25, 2, 23, 1, 6, '2017-12-10', 'estrela_vazia.png'),
(60, 25, 2, 23, 3, 1, '2017-12-05', 'estrela_vazia.png'),
(60, 25, 2, 23, 3, 2, '2017-12-05', 'estrela_vazia.png'),
(60, 25, 2, 23, 3, 3, '2017-12-05', 'estrela_vazia.png'),
(60, 25, 2, 23, 3, 4, '2017-12-05', 'estrela_vazia.png'),
(60, 25, 2, 23, 3, 5, '2017-12-05', 'estrela_vazia.png'),
(60, 25, 2, 23, 3, 6, '2017-12-05', 'estrela_vazia.png'),
(60, 25, 2, 23, 5, 1, '2017-12-07', 'estrela_vazia.png'),
(60, 25, 2, 23, 5, 2, '2017-12-07', 'estrela_vazia.png'),
(60, 25, 2, 23, 5, 3, '2017-12-07', 'estrela_vazia.png'),
(60, 25, 2, 23, 5, 4, '2017-12-07', 'estrela_vazia.png'),
(60, 25, 2, 23, 5, 5, '2017-12-07', 'estrela_vazia.png'),
(60, 25, 2, 23, 5, 6, '2017-12-07', 'estrela_vazia.png'),
(60, 25, 2, 23, 7, 1, '2017-12-09', 'estrela_vazia.png'),
(60, 25, 2, 23, 7, 2, '2017-12-09', 'estrela_vazia.png'),
(60, 25, 2, 23, 7, 3, '2017-12-09', 'estrela_vazia.png'),
(60, 25, 2, 23, 7, 4, '2017-12-09', 'estrela_vazia.png'),
(60, 25, 2, 23, 7, 5, '2017-12-09', 'estrela_vazia.png'),
(60, 25, 2, 23, 7, 6, '2017-12-09', 'estrela_vazia.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alimento`
--

CREATE TABLE IF NOT EXISTS `tb_alimento` (
  `cod_alimento` int(3) NOT NULL,
  `alimento` varchar(255) NOT NULL,
  `peso` decimal(6,1) NOT NULL,
  `cod_unidade_medida` int(3) DEFAULT '1',
  `caloria` int(4) NOT NULL,
  `medida_caseira` varchar(100) NOT NULL,
  `cod_grupo` int(3) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_alimento`
--

INSERT INTO `tb_alimento` (`cod_alimento`, `alimento`, `peso`, `cod_unidade_medida`, `caloria`, `medida_caseira`, `cod_grupo`, `cod_status`) VALUES
(1, 'PÃO FRANCÊS COM MIOLO', '50.0', 1, 150, '1 UNIDADE', 1, 1),
(2, 'PÃO DE FORMA/PÃO INTEGRAL', '50.0', 1, 150, '2 FATIAS', 9, 1),
(3, 'PÃO DOCE ', '50.0', 1, 150, '1 UNIDADE', 1, 1),
(4, 'PÃO DE HOT DOG', '50.0', 1, 150, '1 UNIDADE', 1, 1),
(5, 'PÃO DE QUEIJO', '50.0', 1, 150, '2 UNIDADES MÉDIAS', 1, 1),
(6, 'PÃO CASEIRO', '40.0', 1, 150, '1/2 UNIDADE', 1, 2),
(7, 'PÃO DE BATATA', '60.0', 1, 150, '2 UNIDADES MÉDIAS', 1, 2),
(8, 'BISCOITO ÁGUA E SAL OU CREAM CRACKER', '40.0', 1, 150, '5 UNIDADES', 1, 2),
(9, 'BISCOITO CLUB SOCIAL', '28.0', 1, 150, '1 PACOTE INDIVIDUAL', 1, 2),
(10, 'BISCOITO TIPO MARIA E MAISENA', '35.0', 1, 150, '7 UNIDADES', 1, 1),
(11, 'BISCOITO TIPO CASADINHO', '35.0', 1, 150, '7 UNIDADES', 1, 1),
(12, 'BISCOITO TIPO CHAMPAGNE', '35.0', 1, 150, '2 1/2 UNIDADES', 1, 1),
(13, 'BISCOITO RECHEADO', '35.0', 1, 150, '2 UNIDADES ', 1, 1),
(14, 'BISCOITO SALPET', '35.0', 1, 150, '12 UNIDADES', 1, 1),
(15, 'BISCOITO POLVILHO', '35.0', 1, 150, '6 UNIDADES', 1, 1),
(16, 'BOLO DE MILHO ( FUBÁ )', '30.0', 1, 150, '1 FATIA PEQUENA', 1, 1),
(17, 'BOLO DE TRIGO', '30.0', 1, 150, '1 FATIA PEQUENA', 1, 1),
(18, 'TORRADA DE PÃO FRANCÊS', '48.0', 1, 150, '6 UNIDADES', 1, 1),
(19, 'CEREAIS INTEGRAIS ( AVEIA, FARELO DE TRIGO, GRANOLA, SUCRILHOS )', '35.0', 1, 150, '2 COLHERES DE SOPA', 1, 1),
(20, 'FARINHA LÁCTEA', '25.0', 1, 150, '2 COLHERES DE SOPA CHEIAS', 1, 1),
(21, 'EMPADA DE FRANGOEMPADA DE CAMARÃO', '85.0', 1, 150, '3 UNIDADES PEQUENAS', 1, 1),
(22, 'EMPADA DE PALMITO', '60.0', 1, 150, '2 UNIDADES PEQUENAS', 1, 1),
(23, 'ARROZ ( COMUM OU INTEGRAL )', '40.0', 1, 40, '2 COLHERES DE SOPA', 2, 1),
(24, 'FAROFA', '10.0', 1, 40, '1 COLHER DE SOPA RASA', 2, 1),
(25, 'PURÊ DE BATATAS', '40.0', 1, 40, '1 colher de sopa', 2, 1),
(26, 'FARINHA DE MANDIOCA', '11.0', 1, 40, '1 colher de sopa rasa', 2, 1),
(27, 'FARINHA DE MILHO', '11.0', 1, 40, '1 colher de sopa rasa', 2, 1),
(28, 'NHOQUE', '20.0', 1, 40, '1 colher de sopa cheia', 2, 1),
(29, 'BATATA INGLESA COZIDA', '45.0', 1, 40, '1 colher de sopa', 2, 1),
(30, 'BATATA INGLESA FRITA', '30.0', 1, 40, '1 concha pequena', 2, 1),
(31, 'INHAME', '35.0', 1, 40, '1 colher de sopa rasa', 2, 1),
(32, 'MANDIOQUINHA', '40.0', 1, 40, '1 colher de sopa cheia', 2, 1),
(33, 'PANQUECA', '30.0', 1, 40, '1/2 unidades média', 2, 1),
(34, 'MACARRONADA', '30.0', 1, 40, '2 colheres de sopa', 2, 1),
(35, 'MANDIOCA COZIDA', '32.0', 1, 40, '1 pedaço pequeno', 2, 1),
(36, 'POLENTA', '65.0', 1, 40, '3 colheres de sopa ou 2 pedaços médios', 2, 1),
(37, 'ERVILHA SECA COZIDA', '60.0', 1, 55, '3 COLHERES DE SOPA', 3, 1),
(38, 'GRÃO DE BICO COZIDO', '35.0', 1, 55, '2 COLHERES DE SOPA RASAS', 3, 1),
(39, 'LENTILHA COZIDA', '45.0', 1, 55, '2 COLHERES DE SOPA', 3, 1),
(40, 'SOJA COZIDA', '30.0', 1, 55, '2 COLHERES DE SOPA RASAS', 3, 1),
(41, 'FEIJÃO BRANCO COZIDO', '40.0', 1, 55, '1/2 CONCHA', 3, 1),
(42, 'FEIJÃO COZIDO ( 50% GRÃO/ CALDO )', '90.0', 1, 55, '1 CONCHA', 3, 1),
(43, 'ALMONDEGAS', '50.0', 1, 190, '2 UNIDADES MÉDIAS', 4, 1),
(44, 'CARNE MOÍDA', '60.0', 1, 190, '4 COLHERES DE SOPA CHEIAS', 4, 1),
(45, 'BIFE DE BOI FRITO', '65.0', 1, 190, '1 UNIDADE PEQUENA', 4, 1),
(46, 'BIFE DE BOI GRELHADO', '85.0', 1, 190, '1 UNIDADE MÉDIA', 4, 1),
(47, 'BIFE DE FÍGADO', '65.0', 1, 190, '1 UNIDADE MÉDIA', 4, 1),
(48, 'CARNE COZIDA', '70.0', 1, 190, '2 PEDAÇOS MÉDIOS', 4, 1),
(49, 'COSTELA DE BOI ASSADA', '45.0', 1, 190, '1 PEDAÇO MÉDIO', 4, 1),
(50, 'HÁMBURGUER', '73.0', 1, 190, '1 UNIDADE', 4, 1),
(51, 'ASA DE FRANGO ( ASSADA OU COZIDA )', '50.0', 1, 190, '2 UNIDADES GRANDES', 4, 1),
(52, 'COXA DE FRANGO ( ASSADA OU COZIDA )', '80.0', 1, 190, '2 PEDAÇOS GRANDES', 4, 1),
(53, 'MIÚDOS - MOELA', '85.0', 1, 190, '3 UNIDADES GRANDE', 4, 1),
(54, 'CORAÇÃO DE GALINHA', '70.0', 1, 190, '13 UNIDADES GRANDES', 4, 1),
(55, 'NUGGETS DE FRANGO ASSADO', '50.0', 1, 190, '6 UNIDADES', 4, 1),
(56, 'PEITO DE FRANGO DESOSSADO', '90.0', 1, 190, '1/2 UNIDADE OU 1 BIFE GRANDE', 4, 1),
(57, 'PEITO DE PERU SEM PELE', '120.0', 1, 190, '5 FÁTIAS OU 1 BIFE MÉDIO', 4, 1),
(58, 'OMELETE SIMPLES', '75.0', 1, 190, '1 UNIDADES MÉDIA', 4, 1),
(59, 'OVO COZIDO', '85.0', 1, 190, '2 UNIDADES MÉDIAS', 4, 1),
(60, 'LOMBO ASSADO', '70.0', 1, 190, '1 FATIA MÉDIA', 4, 1),
(61, 'COSTELINHA DE PORCO ASSADA', '45.0', 1, 190, '2 PEDAÇOS PEQUENOS', 4, 1),
(62, 'LINGUIÇA FRITA', '34.0', 1, 190, '1 UNIDADE', 4, 1),
(63, 'SALSICHA ENLATADA', '76.0', 1, 190, '4 UNIDADES', 4, 1),
(64, 'SALSICHA', '45.0', 1, 190, '1 1/2 UNIDADE', 4, 1),
(65, 'PRESUNTO COZIDO', '84.0', 1, 190, '3 FÁTIAS', 4, 1),
(66, 'PRESUNTO DE PERU LIGHT', '130.0', 1, 190, '6 FÁTIAS', 4, 1),
(67, 'PEIXE ENSOPADO OU ASSADO', '150.0', 1, 190, '2FILÉS PEQUENOS', 4, 1),
(68, 'SARDINHA EM CONSERVA NO AZEITE', '55.0', 1, 190, '1/2 LATA', 4, 1),
(69, 'ATUM ENLATADO', '240.0', 1, 190, '2 LATAS', 4, 1),
(70, 'ABACAXI', '75.0', 1, 35, '1 FATIA', 5, 1),
(71, 'ACEROLA', '110.0', 1, 35, '9 UNIDADES MÉDIAS', 5, 1),
(72, 'CAJU', '30.0', 1, 35, '1 UNIDADE', 5, 1),
(73, 'CARAMBOLA ', '105.0', 1, 35, '1 UNIDADE', 1, 1),
(74, 'CEREJA', '50.0', 1, 35, '5 UNIDADES', 5, 1),
(75, 'GOIABA BRANCA', '60.0', 1, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(76, 'GOIABA VERMELHA', '80.0', 1, 35, '1/2 UNIDADE GRANDE', 5, 1),
(77, 'GRAVIOLA ', '50.0', 1, 35, '1/2 UNIDADE', 5, 1),
(78, 'KIWI', '60.0', 1, 35, '1 UNIDADE PEQUENA', 5, 1),
(79, 'LARANJA', '75.0', 1, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(80, 'LIMÃO', '110.0', 1, 35, '3 UNIDADES', 5, 1),
(81, 'MELANCIA', '140.0', 1, 35, '1 FATIA PEQUENA', 5, 1),
(82, 'MELÃO', '110.0', 1, 35, '1 FATIA MÉDIA', 5, 1),
(83, 'MORANGO', '120.0', 1, 35, '6 UNIDADES GRANDES', 5, 1),
(84, 'PÊSSEGO', '80.0', 1, 35, '1 UNIDADE GRANDE', 5, 1),
(85, 'MEXERICA', '80.0', 1, 35, '8 GOMOS MÉDIOS ', 5, 1),
(86, 'AMEIXA PRETA ', '30.0', 1, 35, '2 UNIDADES MÉDIAS', 5, 1),
(87, 'AMEIXA VERMELHA', '60.0', 1, 35, '2 UNIDADES MÉDIAS', 5, 1),
(88, 'BANANA PRATA/ BANANA MAÇA', '35.0', 1, 35, '1/2 UNIDADES MÉDIA', 5, 1),
(89, 'CAQUI', '50.0', 1, 35, '1 UNIDADE PEQUENA', 5, 1),
(90, 'JABUTICABA', '65.0', 1, 35, '13 UNIDADES GRANDES', 5, 1),
(91, 'MAÇA', '60.0', 1, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(92, 'MAMÃO PAPAIA', '90.0', 1, 35, '1/4 UNIDADE MÉDIA', 5, 1),
(93, 'MANGA ', '50.0', 1, 35, '1/2 UNIDADE PEQUENA', 5, 1),
(94, 'PÊRA', '60.0', 1, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(95, 'UVA ITÁLIA', '50.0', 1, 35, '6 UNIDADES', 5, 1),
(96, 'UVA RUBI', '45.0', 1, 35, '8 UNIDADES', 5, 1),
(97, 'AMORA', '50.0', 1, 35, '13 UNIDADES MÉDIAS', 5, 1),
(98, 'JACA', '30.0', 1, 35, '2 BAGOS GRANDES', 5, 1),
(99, 'MAMÃO', '110.0', 1, 35, '1 FATIA GRANDE', 5, 1),
(100, 'ABACATE', '50.0', 1, 80, '1/4 UNIDADE PEQUENA OU 1 FATIA PEQUENA', 6, 1),
(101, 'LEITE INTEGRAL', '200.0', 2, 120, '1 XICARA DE CHÁ', 7, 1),
(102, 'LEITE DESNATADO', '300.0', 2, 120, '2 COPOS AMERICANOS', 7, 1),
(103, 'LEITE EM PÓ INTEGRAL', '24.0', 2, 120, '2 COLHERES DE SOPA RASAS', 7, 1),
(104, 'LEITE EM PÓ DESNATADO', '35.0', 2, 120, '4 COLHERES DE SOPA RASAS', 7, 1),
(105, 'IOGURTE', '90.0', 2, 120, '1/2 COPO', 7, 1),
(106, 'IOGURTE LIGHT', '200.0', 2, 120, '1 COPO', 7, 1),
(107, 'YAKULT', '160.0', 2, 120, '2 POTES', 7, 1),
(108, 'COALHADA', '200.0', 2, 120, '1 XICARA DE CHÁ', 7, 1),
(109, 'QUEIJO COTTAGE CREMOSO', '125.0', 2, 120, '4 COLHERES DE SOPA', 7, 1),
(110, 'QUEIJO MINAS FRESCO', '51.0', 2, 120, '2 FATIAS MÉDIAS', 7, 1),
(111, 'QUEIJO PRATO', '30.0', 2, 120, '2 FATIAS MÉDIAS', 7, 1),
(112, 'QUEIJO MUSSARELA', '40.0', 2, 120, '2 FATIAS', 7, 1),
(113, 'REQUEIJÃO CREMOSO', '45.0', 2, 120, '2 COLHERES DE SOPA RASAS', 7, 1),
(114, 'REQUEIJÃO LIGHT', '63.0', 2, 120, '2 COLHERES DE SOPA', 7, 1),
(115, 'RICOTA', '70.0', 2, 120, '2 FATIAS MÉDIAS', 7, 1),
(116, 'ABOBRINHA COZIDA', '70.0', 1, 15, '2 COLHERES DE SOPAS CHEIAS', 8, 1),
(117, 'ACELGA', '70.0', 1, 15, '1 PIRE DE CHÁ', 8, 1),
(118, 'AGRIÃO', '90.0', 1, 15, '1 PRATO DE SOBREMESA', 8, 1),
(119, 'ALFACE ', '100.0', 1, 15, '1 PRATO DE SOBREMESA', 8, 1),
(120, 'ALMERÃO', '65.0', 1, 15, '1 PRATO DE SOBREMESA', 8, 1),
(121, 'BERINJELA ENSOPADA', '50.0', 1, 15, '2 COLHERES DE SOPAS RASAS', 8, 1),
(122, 'BRÓCOLIS COZIDO', '50.0', 1, 15, '1 PIRES DE CHÁ', 8, 1),
(123, 'COUVE REFOGADA', '15.0', 1, 15, '1 COLHER DE SOPA', 8, 1),
(124, 'COUVE-FLOR', '70.0', 1, 15, '3 RAMOS PEQUENOS', 8, 1),
(125, 'ESPINAFRE', '70.0', 1, 15, '1 PIRES DE CHÁ', 8, 1),
(126, 'MOSTARDA', '60.0', 1, 15, '1 PIRES DE CHÁ', 8, 1),
(127, 'PALMITO EM CONSERVA', '80.0', 1, 15, '5 COLHERES DE SOPA', 8, 1),
(128, 'PEPINO CRU COM CASCA', '120.0', 1, 15, '7 COLHERES DE SOPA', 8, 1),
(129, 'PIMENTÃO', '50.0', 1, 15, '2 COLHERES DE SOPA', 8, 1),
(130, 'RABANETE', '90.0', 1, 15, '2 COLHERES DE SOPA', 8, 1),
(131, 'REPOLHO CRU PICADO', '60.0', 1, 15, '1 PIRES DE CHÁ', 8, 1),
(132, 'REPOLHO COZIDO', '70.0', 1, 15, '3 COLHERES DE SOPÁ', 8, 1),
(133, 'TOMATE', '70.0', 1, 15, '5 FATIAS MÉDIAS', 8, 1),
(134, 'ABOBORA MORANGA', '70.0', 1, 15, '2 COLHERES DE SOPA', 8, 1),
(135, 'BETERRABA COZIDA', '35.0', 1, 15, '3 FATIAS MÉDIAS', 8, 1),
(136, 'BETERRABA CRUA RALADA', '35.0', 1, 15, '2 COLHERES DE SOPA', 8, 1),
(137, 'CENOURA COZIDA', '35.0', 1, 15, '2 COLHERES DE SOPA', 8, 1),
(138, 'CENOURA CRUA', '35.0', 1, 15, '3 COLHERES DE SOPA', 8, 1),
(139, 'CHUCHU', '60.0', 1, 15, '4 COLHERES DE SOPA', 8, 1),
(140, 'QUIABO PICADO', '45.0', 1, 15, '1 COLHER DE SOPA CHEIA', 8, 1),
(141, 'VAGEM', '40.0', 1, 15, '1 COLHER DE SOPA', 8, 1),
(142, 'AMÊNDOAS ', '15.0', 1, 80, '5 UNIDADES MÉDIAS', 9, 1),
(143, 'AMENDOIM', '15.0', 1, 80, '1 COLHER DE SOPA RASA', 9, 1),
(144, 'CASTANHA DE CAJU TORRADA', '15.0', 1, 80, '3 UNIDADES MÉDIAS', 9, 1),
(145, 'CASTANHA DO PARÁ', '13.0', 1, 80, '1 COLHER DE SOPA', 9, 1),
(146, 'NOZES', '12.0', 1, 80, '1 COLHER DE SOPA', 9, 1),
(147, 'AZEITE DE OLIVA', '8.0', 1, 75, '1 COLHER DE SOPA', 10, 1),
(148, 'MARGARINA', '10.0', 1, 75, '2 COLHERES DE CHÁ RASAS', 10, 1),
(149, 'MARGARINA LIGHT', '20.0', 1, 75, '4 COLHERES DE CHÁ RASAS', 10, 1),
(150, 'MANTEIGA', '10.0', 1, 75, '2 COLHERES DE CHÁ RASAS', 10, 1),
(151, 'MAIONESE', '13.0', 1, 75, '2 COLHERES DE CHÁ', 10, 1),
(152, 'ÓLEO VEGETAL', '8.0', 1, 75, '1 COLHER DE SOPA', 10, 1),
(153, 'CREME DE LEITE', '30.0', 1, 75, '2 COLHERES DE SOBREMESA', 10, 1),
(154, 'AZEITONAS', '65.0', 1, 75, '11 UNIDADES MÉDIAS', 10, 1),
(155, 'AÇUCAR', '24.0', 1, 100, '1 COLHER DE SOPA CHEIA', 11, 1),
(156, 'MEL', '30.0', 1, 100, ' 2 COLHERES DE SOPA CHEIAS', 11, 1),
(157, 'NESCAU', '22.0', 1, 100, '2 COLHERES DE SOPA RASAS', 11, 1),
(158, 'MELADO DE CANA', '30.0', 1, 100, '2 COLHERES DE SOPA CHEIAS', 11, 1),
(159, 'teste', '10.0', 1, 13, '1 colher d', 2, 2),
(160, 'teste alimento', '88.0', 2, 86, '2 colher de chá', 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atividade_fisica`
--

CREATE TABLE IF NOT EXISTS `tb_atividade_fisica` (
  `cod_atividade_fisica` int(5) NOT NULL,
  `atividade_fisica_sn` char(1) NOT NULL,
  `qual_atividade_1` varchar(40) DEFAULT NULL,
  `dias_semana_1` varchar(16) DEFAULT NULL,
  `inicio_1` time DEFAULT NULL,
  `termino_1` time DEFAULT NULL,
  `qual_atividade_2` varchar(40) DEFAULT NULL,
  `dias_semana_2` varchar(16) DEFAULT NULL,
  `inicio_2` time DEFAULT NULL,
  `termino_2` time DEFAULT NULL,
  `qual_atividade_3` varchar(40) DEFAULT NULL,
  `dias_semana_3` varchar(16) DEFAULT NULL,
  `inicio_3` time DEFAULT NULL,
  `termino_3` time DEFAULT NULL,
  `qual_atividade_4` varchar(40) DEFAULT NULL,
  `dias_semana_4` varchar(16) DEFAULT NULL,
  `inicio_4` time DEFAULT NULL,
  `termino_4` time DEFAULT NULL,
  `qual_atividade_5` varchar(40) DEFAULT NULL,
  `dias_semana_5` varchar(16) DEFAULT NULL,
  `inicio_5` time DEFAULT NULL,
  `termino_5` time DEFAULT NULL,
  `cod_paciente` int(3) NOT NULL,
  `cod_consulta` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_atividade_fisica`
--

INSERT INTO `tb_atividade_fisica` (`cod_atividade_fisica`, `atividade_fisica_sn`, `qual_atividade_1`, `dias_semana_1`, `inicio_1`, `termino_1`, `qual_atividade_2`, `dias_semana_2`, `inicio_2`, `termino_2`, `qual_atividade_3`, `dias_semana_3`, `inicio_3`, `termino_3`, `qual_atividade_4`, `dias_semana_4`, `inicio_4`, `termino_4`, `qual_atividade_5`, `dias_semana_5`, `inicio_5`, `termino_5`, `cod_paciente`, `cod_consulta`) VALUES
(47, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 47, 7),
(63, '1', 'volei', ';1;3', '10:00:00', '11:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', 47, 23),
(64, '1', 'Caminhada', ';1;2;3;4;5', '06:00:00', '07:00:00', 'Natação', ';2;3;4', '18:00:00', '19:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', 59, 24),
(65, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

CREATE TABLE IF NOT EXISTS `tb_consulta` (
  `cod_consulta` int(4) NOT NULL,
  `cod_paciente` int(3) DEFAULT NULL,
  `data_consulta` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_consulta`
--

INSERT INTO `tb_consulta` (`cod_consulta`, `cod_paciente`, `data_consulta`) VALUES
(7, 47, '2017-11-26'),
(23, 47, '2017-12-04'),
(24, 59, '2017-08-02'),
(25, 60, '2017-12-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consumo_agua`
--

CREATE TABLE IF NOT EXISTS `tb_consumo_agua` (
  `cod_consumo_agua` int(3) NOT NULL,
  `consumo_agua` int(5) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_consumo_agua`
--

INSERT INTO `tb_consumo_agua` (`cod_consumo_agua`, `consumo_agua`, `cod_status`) VALUES
(1, 500, 1),
(2, 1000, 1),
(3, 1500, 1),
(4, 2000, 1),
(5, 2500, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dia_semana`
--

CREATE TABLE IF NOT EXISTS `tb_dia_semana` (
  `cod_dia_semana` int(3) NOT NULL,
  `dia_semana` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_dia_semana`
--

INSERT INTO `tb_dia_semana` (`cod_dia_semana`, `dia_semana`) VALUES
(1, 'Domingo'),
(2, 'Segunda-Feira'),
(3, 'Terça-Feira'),
(4, 'Quarta-Feira'),
(5, 'Quinta-Feira'),
(6, 'Sexta-Feira'),
(7, 'Sábado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dieta`
--

CREATE TABLE IF NOT EXISTS `tb_dieta` (
  `cod_dieta` int(3) NOT NULL,
  `cod_paciente` int(3) DEFAULT NULL,
  `cod_tipo_refeicao` int(3) DEFAULT NULL,
  `cod_refeicao` int(3) DEFAULT NULL,
  `cod_dia_semana` int(3) DEFAULT NULL,
  `comeu_s_n` int(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2652 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_dieta`
--

INSERT INTO `tb_dieta` (`cod_dieta`, `cod_paciente`, `cod_tipo_refeicao`, `cod_refeicao`, `cod_dia_semana`, `comeu_s_n`) VALUES
(2232, 47, 1, 0, 1, 0),
(2233, 47, 2, 0, 1, 0),
(2234, 47, 3, 0, 1, 0),
(2235, 47, 4, 0, 1, 0),
(2236, 47, 5, 0, 1, 0),
(2237, 47, 6, 0, 1, 0),
(2238, 47, 1, 0, 2, 0),
(2239, 47, 2, 0, 2, 0),
(2240, 47, 3, 0, 2, 0),
(2241, 47, 4, 0, 2, 0),
(2242, 47, 5, 0, 2, 0),
(2243, 47, 6, 0, 2, 0),
(2244, 47, 1, 0, 3, 0),
(2245, 47, 2, 0, 3, 0),
(2246, 47, 3, 0, 3, 0),
(2247, 47, 4, 0, 3, 0),
(2248, 47, 5, 0, 3, 0),
(2249, 47, 6, 0, 3, 0),
(2250, 47, 1, 0, 4, 0),
(2251, 47, 2, 0, 4, 0),
(2252, 47, 3, 0, 4, 0),
(2253, 47, 4, 0, 4, 0),
(2254, 47, 5, 0, 4, 0),
(2255, 47, 6, 0, 4, 0),
(2256, 47, 1, 0, 5, 0),
(2257, 47, 2, 0, 5, 0),
(2258, 47, 3, 0, 5, 0),
(2259, 47, 4, 0, 5, 0),
(2260, 47, 5, 0, 5, 0),
(2261, 47, 6, 0, 5, 0),
(2262, 47, 1, 0, 6, 0),
(2263, 47, 2, 0, 6, 0),
(2264, 47, 3, 0, 6, 0),
(2265, 47, 4, 0, 6, 0),
(2266, 47, 5, 0, 6, 0),
(2267, 47, 6, 0, 6, 0),
(2268, 47, 1, 0, 7, 0),
(2269, 47, 2, 0, 7, 0),
(2270, 47, 3, 0, 7, 0),
(2271, 47, 4, 0, 7, 0),
(2272, 47, 5, 0, 7, 0),
(2273, 47, 6, 0, 7, 0),
(2568, 59, 1, 0, 1, 0),
(2569, 59, 2, 0, 1, 0),
(2570, 59, 3, 0, 1, 0),
(2571, 59, 4, 0, 1, 0),
(2572, 59, 5, 0, 1, 0),
(2573, 59, 6, 0, 1, 0),
(2574, 59, 1, 0, 2, 0),
(2575, 59, 2, 0, 2, 0),
(2576, 59, 3, 0, 2, 0),
(2577, 59, 4, 0, 2, 0),
(2578, 59, 5, 0, 2, 0),
(2579, 59, 6, 0, 2, 0),
(2580, 59, 1, 0, 3, 0),
(2581, 59, 2, 0, 3, 0),
(2582, 59, 3, 0, 3, 0),
(2583, 59, 4, 0, 3, 0),
(2584, 59, 5, 0, 3, 0),
(2585, 59, 6, 0, 3, 0),
(2586, 59, 1, 0, 4, 0),
(2587, 59, 2, 0, 4, 0),
(2588, 59, 3, 0, 4, 0),
(2589, 59, 4, 0, 4, 0),
(2590, 59, 5, 0, 4, 0),
(2591, 59, 6, 0, 4, 0),
(2592, 59, 1, 0, 5, 0),
(2593, 59, 2, 0, 5, 0),
(2594, 59, 3, 0, 5, 0),
(2595, 59, 4, 0, 5, 0),
(2596, 59, 5, 0, 5, 0),
(2597, 59, 6, 0, 5, 0),
(2598, 59, 1, 0, 6, 0),
(2599, 59, 2, 0, 6, 0),
(2600, 59, 3, 0, 6, 0),
(2601, 59, 4, 0, 6, 0),
(2602, 59, 5, 0, 6, 0),
(2603, 59, 6, 0, 6, 0),
(2604, 59, 1, 0, 7, 0),
(2605, 59, 2, 0, 7, 0),
(2606, 59, 3, 0, 7, 0),
(2607, 59, 4, 0, 7, 0),
(2608, 59, 5, 0, 7, 0),
(2609, 59, 6, 0, 7, 0),
(2610, 60, 1, 0, 1, 0),
(2611, 60, 2, 0, 1, 0),
(2612, 60, 3, 0, 1, 0),
(2613, 60, 4, 0, 1, 0),
(2614, 60, 5, 0, 1, 0),
(2615, 60, 6, 0, 1, 0),
(2616, 60, 1, 0, 2, 0),
(2617, 60, 2, 0, 2, 0),
(2618, 60, 3, 0, 2, 0),
(2619, 60, 4, 0, 2, 0),
(2620, 60, 5, 0, 2, 0),
(2621, 60, 6, 0, 2, 0),
(2622, 60, 1, 0, 3, 0),
(2623, 60, 2, 0, 3, 0),
(2624, 60, 3, 0, 3, 0),
(2625, 60, 4, 0, 3, 0),
(2626, 60, 5, 0, 3, 0),
(2627, 60, 6, 0, 3, 0),
(2628, 60, 1, 0, 4, 0),
(2629, 60, 2, 0, 4, 0),
(2630, 60, 3, 0, 4, 0),
(2631, 60, 4, 0, 4, 0),
(2632, 60, 5, 0, 4, 0),
(2633, 60, 6, 0, 4, 0),
(2634, 60, 1, 0, 5, 0),
(2635, 60, 2, 0, 5, 0),
(2636, 60, 3, 0, 5, 0),
(2637, 60, 4, 0, 5, 0),
(2638, 60, 5, 0, 5, 0),
(2639, 60, 6, 0, 5, 0),
(2640, 60, 1, 0, 6, 0),
(2641, 60, 2, 0, 6, 0),
(2642, 60, 3, 0, 6, 0),
(2643, 60, 4, 0, 6, 0),
(2644, 60, 5, 0, 6, 0),
(2645, 60, 6, 0, 6, 0),
(2646, 60, 1, 0, 7, 0),
(2647, 60, 2, 0, 7, 0),
(2648, 60, 3, 0, 7, 0),
(2649, 60, 4, 0, 7, 0),
(2650, 60, 5, 0, 7, 0),
(2651, 60, 6, 0, 7, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_frequencia`
--

CREATE TABLE IF NOT EXISTS `tb_frequencia` (
  `cod_frequencia` int(3) NOT NULL,
  `frequencia` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_frequencia`
--

INSERT INTO `tb_frequencia` (`cod_frequencia`, `frequencia`, `cod_status`) VALUES
(1, 'Diariamente', 1),
(2, '2/3 vezes por semana', 1),
(3, 'Menos de 1 vez por semana', 1),
(4, 'Outros', 1),
(5, 'Não faz uso de bebida alcoólica', 1),
(101, 'Muito Lenta', 1),
(102, 'Lenta', 1),
(103, 'Normal', 1),
(104, 'Rápida', 1),
(105, 'Muito Rápida', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupo`
--

CREATE TABLE IF NOT EXISTS `tb_grupo` (
  `cod_grupo` int(3) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `descricao_grupo` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_grupo`
--

INSERT INTO `tb_grupo` (`cod_grupo`, `grupo`, `descricao_grupo`, `cod_status`) VALUES
(1, 'grupo 1', 'pães, cereais e massas', 1),
(2, 'grupo 2', 'cereais, massas e farinhas', 1),
(3, 'grupo 3', 'leguminosas', 1),
(4, 'grupo 4', 'carnes, pescados e ovos', 1),
(5, 'grupo 5', 'frutas A e B', 1),
(6, 'grupo 6', 'frutas C', 1),
(7, 'grupo 7', 'produtos lácteos', 1),
(8, 'grupo 8', 'hortaliças', 1),
(9, 'grupo 9', 'oleaginosas', 1),
(10, 'grupo 10', 'óleos e gorduras', 1),
(11, 'grupo 11', 'açúcar e doces', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_habito_alimentar`
--

CREATE TABLE IF NOT EXISTS `tb_habito_alimentar` (
  `cod_habito_alimentar` int(3) NOT NULL,
  `cod_consumo_agua` int(3) NOT NULL,
  `mais_gosta` varchar(100) NOT NULL,
  `nao_gosta` varchar(100) NOT NULL,
  `cod_mastigacao` int(3) NOT NULL,
  `pao_integral` int(3) NOT NULL,
  `pao_branco` int(3) NOT NULL,
  `arroz_integral` int(3) NOT NULL,
  `arroz_branco` int(3) NOT NULL,
  `cereais` int(3) NOT NULL,
  `feijao` int(3) NOT NULL,
  `carne_boi` int(3) NOT NULL,
  `frango` int(3) NOT NULL,
  `peixe` int(3) NOT NULL,
  `ovo` int(3) NOT NULL,
  `leite_derivados` int(3) NOT NULL,
  `azeite_oliva` int(3) NOT NULL,
  `castanhas` int(3) NOT NULL,
  `frutas_frescas` int(3) NOT NULL,
  `frutas_secas` int(3) NOT NULL,
  `legumes_verduras` int(3) NOT NULL,
  `doces_biscoitos_chocolates` int(3) NOT NULL,
  `refrigerante` int(3) NOT NULL,
  `fast_food` int(3) NOT NULL,
  `cafe` int(3) NOT NULL,
  `outras_informacoes_avaliacao_nutricional` text,
  `cod_paciente` int(3) NOT NULL,
  `data_habito_alimentar` date DEFAULT NULL,
  `cod_consulta` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_habito_alimentar`
--

INSERT INTO `tb_habito_alimentar` (`cod_habito_alimentar`, `cod_consumo_agua`, `mais_gosta`, `nao_gosta`, `cod_mastigacao`, `pao_integral`, `pao_branco`, `arroz_integral`, `arroz_branco`, `cereais`, `feijao`, `carne_boi`, `frango`, `peixe`, `ovo`, `leite_derivados`, `azeite_oliva`, `castanhas`, `frutas_frescas`, `frutas_secas`, `legumes_verduras`, `doces_biscoitos_chocolates`, `refrigerante`, `fast_food`, `cafe`, `outras_informacoes_avaliacao_nutricional`, `cod_paciente`, `data_habito_alimentar`, `cod_consulta`) VALUES
(46, 2, '', '', 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 47, '2017-11-26', 7),
(62, 4, '', '', 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 47, '2017-12-04', 23),
(63, 5, 'Massas', 'Peixe', 103, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 4, 4, 'nada consta para esta paciente', 59, '2017-08-02', 24),
(64, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 60, '2017-12-02', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_historico_paciente` (
  `cod_historico_paciente` int(3) NOT NULL,
  `fumante_sn` char(1) DEFAULT NULL,
  `qtde_cigarros` varchar(40) DEFAULT NULL,
  `bebida_alcoolica_sn` char(1) DEFAULT NULL,
  `cod_frequencia_bebida_alcoolica` int(3) DEFAULT NULL,
  `incomodo_gastrointestinal_sn` char(1) DEFAULT NULL,
  `qual_incomodo_gastrointestinal` varchar(100) DEFAULT NULL,
  `quando_sintomas_aparecem` text,
  `medicamento_suplemento_sn` char(1) DEFAULT NULL,
  `qual_medicamento_suplemento` varchar(50) DEFAULT NULL,
  `medicamento_recomendado` text,
  `doencas_passadas` text,
  `historico_familiar` text,
  `outras_informacoes_anamnese` text,
  `cod_paciente` int(3) NOT NULL,
  `data_historico_paciente` date DEFAULT NULL,
  `cod_consulta` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_historico_paciente`
--

INSERT INTO `tb_historico_paciente` (`cod_historico_paciente`, `fumante_sn`, `qtde_cigarros`, `bebida_alcoolica_sn`, `cod_frequencia_bebida_alcoolica`, `incomodo_gastrointestinal_sn`, `qual_incomodo_gastrointestinal`, `quando_sintomas_aparecem`, `medicamento_suplemento_sn`, `qual_medicamento_suplemento`, `medicamento_recomendado`, `doencas_passadas`, `historico_familiar`, `outras_informacoes_anamnese`, `cod_paciente`, `data_historico_paciente`, `cod_consulta`) VALUES
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 47, '2017-11-26', 7),
(63, '2', '', '2', 1, '2', '', '  ', '2', '', ' ', '', '', '', 47, '2017-12-04', 23),
(64, '2', '', '1', 3, '1', 'Gases', 'Quando come repolho  ', '1', 'Losartana', 'Pressão alta ', 'Nada consta', 'mãe cardíaca', 'nada conta também', 59, '2017-08-02', 24),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, '2017-12-02', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nivel_acesso`
--

CREATE TABLE IF NOT EXISTS `tb_nivel_acesso` (
  `cod_nivel_acesso` int(3) NOT NULL,
  `nivel_acesso` varchar(30) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_nivel_acesso`
--

INSERT INTO `tb_nivel_acesso` (`cod_nivel_acesso`, `nivel_acesso`, `cod_status`) VALUES
(1, 'Paciente', 1),
(2, 'Nutricionista', 1),
(3, 'Administrador', 1),
(4, 'Pessoa Jurídica', 1),
(5, 'Administrativo', 1),
(6, 'Assistente Técnico', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetivo`
--

CREATE TABLE IF NOT EXISTS `tb_objetivo` (
  `cod_objetivo` int(3) NOT NULL,
  `objetivo` varchar(60) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_objetivo`
--

INSERT INTO `tb_objetivo` (`cod_objetivo`, `objetivo`, `cod_status`) VALUES
(1, 'Perder Peso', 1),
(2, 'Ganhar Peso', 1),
(3, 'Mínimo Trabalho Digestivo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetivo_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_objetivo_paciente` (
  `cod_objetivo_paciente` int(3) NOT NULL,
  `cod_objetivo_programa` int(3) DEFAULT NULL,
  `cod_tempo_programa` int(3) DEFAULT NULL,
  `peso_paciente` decimal(6,2) DEFAULT NULL,
  `objetivo_peso_paciente` decimal(6,2) DEFAULT '0.00',
  `altura_paciente` decimal(6,2) DEFAULT NULL,
  `perimetro_abdomem` decimal(6,2) DEFAULT NULL,
  `perimetro_quadril` decimal(6,2) DEFAULT NULL,
  `perimetro_coxa` decimal(6,2) DEFAULT NULL,
  `perimetro_perna_medial` decimal(6,2) DEFAULT NULL,
  `perimetro_antebraco` decimal(6,2) DEFAULT NULL,
  `dobras_triceps` decimal(6,2) DEFAULT NULL,
  `dobras_subescapular` decimal(6,2) DEFAULT NULL,
  `dobras_abdominal` decimal(6,2) DEFAULT NULL,
  `dobras_suprailiaca` decimal(6,2) DEFAULT NULL,
  `dobras_coxa` decimal(6,2) DEFAULT NULL,
  `dobras_perna_medial` decimal(6,2) DEFAULT NULL,
  `diametro_punho` decimal(6,2) DEFAULT NULL,
  `diametro_umero` decimal(6,2) DEFAULT NULL,
  `diametro_femur` decimal(6,2) DEFAULT NULL,
  `diametro_tornozelo` decimal(6,2) DEFAULT NULL,
  `foto_01` varchar(100) DEFAULT 'avatar.png',
  `foto_02` varchar(100) DEFAULT 'avatar.png',
  `foto_03` varchar(100) DEFAULT 'avatar.png',
  `foto_04` varchar(100) DEFAULT 'avatar.png',
  `cod_paciente` int(3) NOT NULL,
  `data_objetivo_paciente` date DEFAULT NULL,
  `cod_consulta` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_objetivo_paciente`
--

INSERT INTO `tb_objetivo_paciente` (`cod_objetivo_paciente`, `cod_objetivo_programa`, `cod_tempo_programa`, `peso_paciente`, `objetivo_peso_paciente`, `altura_paciente`, `perimetro_abdomem`, `perimetro_quadril`, `perimetro_coxa`, `perimetro_perna_medial`, `perimetro_antebraco`, `dobras_triceps`, `dobras_subescapular`, `dobras_abdominal`, `dobras_suprailiaca`, `dobras_coxa`, `dobras_perna_medial`, `diametro_punho`, `diametro_umero`, `diametro_femur`, `diametro_tornozelo`, `foto_01`, `foto_02`, `foto_03`, `foto_04`, `cod_paciente`, `data_objetivo_paciente`, `cod_consulta`) VALUES
(45, 0, 0, '72.00', '0.00', '188.00', '66.50', '85.00', '46.00', '32.00', '22.50', '10.00', '7.00', '8.20', '6.00', '11.50', '11.00', '5.20', '6.70', '9.90', '6.80', 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 47, '2017-11-16', 7),
(61, 0, 0, '81.00', '75.00', '188.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 47, '2017-12-04', 23),
(62, 0, 0, '78.00', '10.00', '167.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 59, '2017-08-02', 24),
(63, 0, 0, '100.00', '0.00', '188.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 60, '2017-12-02', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_paciente` (
  `cod_paciente` int(3) NOT NULL,
  `nome_paciente` varchar(100) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `profissao` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(25) DEFAULT NULL,
  `bairro` varchar(30) NOT NULL,
  `cep` int(8) DEFAULT NULL,
  `cidade` varchar(40) NOT NULL,
  `telefone_residencial` int(10) DEFAULT NULL,
  `telefone_comercial` int(10) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `altura` decimal(5,3) NOT NULL,
  `peso` decimal(5,3) NOT NULL,
  `outros` text,
  `cod_status` int(3) NOT NULL DEFAULT '1',
  `foto_paciente` varchar(100) DEFAULT 'avatar.png',
  `data_cadastro_paciente` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`cod_paciente`, `nome_paciente`, `cpf`, `rg`, `profissao`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `telefone_residencial`, `telefone_comercial`, `celular`, `email`, `data_nascimento`, `sexo`, `altura`, `peso`, `outros`, `cod_status`, `foto_paciente`, `data_cadastro_paciente`) VALUES
(47, 'BRUNO COBELLO', '2312131321', '3131313213', '321321321321', 'rua dos moicanos', '10', 'apto 10', 'centro', 18132587, 'são roque', 1147121725, 1147845528, 2147483647, 'brunocobello@uol.com.br', '2004-10-10', 'M', '0.000', '0.000', 'nada consta1', 1, '47_livro.jpg', '2017-11-26'),
(59, 'ariane da silva palma', '12343456546', '4165436413', 'medica', 'RUA MONSENHOR ANTONIO PEPE', '144', 'casa 1', 'Centro', 18132587, 'São Roque', 1147121725, 1147845528, 2147483647, 'brunocobello@uol.com.br', '2000-10-10', 'F', '0.000', '0.000', 'nbada', 1, '59_bebe_2.jpg', '2017-08-02'),
(60, 'giovana cobello', '27761994811', '3213213213', 'medica', 'RUA MONSENHOR ANTONIO PEPE', '144', 'casa 1', 'Centro', 18132587, 'São Roque', 1147121725, 1147845528, 2147483647, 'brunocobello@uol.com.br', '1969-12-31', 'F', '0.000', '0.000', 'nada consta', 1, '60_bebe_2.jpg', '2017-12-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_programa`
--

CREATE TABLE IF NOT EXISTS `tb_programa` (
  `cod_programa` int(3) NOT NULL,
  `programa` varchar(50) NOT NULL,
  `cod_objetivo_programa` int(3) NOT NULL,
  `cod_tempo_programa` int(3) NOT NULL,
  `descricao_programa` text,
  `reeducacoes_programa` varchar(255) DEFAULT NULL,
  `outras_informacoes_programa` text,
  `cod_status` int(3) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_programa`
--

INSERT INTO `tb_programa` (`cod_programa`, `programa`, `cod_objetivo_programa`, `cod_tempo_programa`, `descricao_programa`, `reeducacoes_programa`, `outras_informacoes_programa`, `cod_status`) VALUES
(2, 'verão', 1, 1, 'nada ', ';22;23', 'nada ', 1),
(3, 'programa teste', 1, 8, 'nada consta para este programa', ';20;21', 'nada mais', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_programa_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_programa_paciente` (
  `cod_programa` int(3) NOT NULL,
  `cod_consulta` int(3) NOT NULL,
  `cod_paciente` int(3) NOT NULL,
  `data_inicio_programa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_programa_paciente`
--

INSERT INTO `tb_programa_paciente` (`cod_programa`, `cod_consulta`, `cod_paciente`, `data_inicio_programa`) VALUES
(2, 7, 47, '2017-12-01'),
(2, 23, 47, '2017-12-04'),
(2, 24, 59, '2017-08-02'),
(2, 25, 60, '2017-12-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_programa_paciente_reeducacao`
--

CREATE TABLE IF NOT EXISTS `tb_programa_paciente_reeducacao` (
  `cod_paciente` int(3) NOT NULL,
  `cod_consulta` int(3) NOT NULL,
  `cod_dia_semana` int(3) NOT NULL,
  `cod_programa` int(3) NOT NULL,
  `cod_reeducacao` int(3) NOT NULL,
  `data_reeducacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_programa_paciente_reeducacao`
--

INSERT INTO `tb_programa_paciente_reeducacao` (`cod_paciente`, `cod_consulta`, `cod_dia_semana`, `cod_programa`, `cod_reeducacao`, `data_reeducacao`) VALUES
(47, 7, 1, 2, 21, '2017-11-30'),
(47, 7, 2, 2, 21, '2017-11-30'),
(47, 7, 3, 2, 22, '2017-11-30'),
(47, 7, 4, 2, 21, '2017-11-30'),
(47, 7, 5, 2, 23, '2017-11-30'),
(47, 7, 6, 2, 23, '2017-11-30'),
(47, 7, 7, 2, 23, '2017-11-30'),
(47, 23, 1, 2, 22, '2017-12-04'),
(47, 23, 2, 2, 22, '2017-12-04'),
(47, 23, 3, 2, 22, '2017-12-04'),
(47, 23, 4, 2, 22, '2017-12-04'),
(47, 23, 5, 2, 22, '2017-12-04'),
(47, 23, 6, 2, 22, '2017-12-04'),
(47, 23, 7, 2, 22, '2017-12-04'),
(59, 24, 1, 2, 23, '2017-08-02'),
(59, 24, 2, 2, 22, '2017-08-02'),
(59, 24, 3, 2, 23, '2017-08-02'),
(59, 24, 4, 2, 22, '2017-08-02'),
(59, 24, 5, 2, 23, '2017-08-02'),
(59, 24, 6, 2, 22, '2017-08-02'),
(59, 24, 7, 2, 23, '2017-08-02'),
(60, 25, 1, 2, 23, '2017-12-02'),
(60, 25, 2, 2, 22, '2017-12-02'),
(60, 25, 3, 2, 23, '2017-12-02'),
(60, 25, 4, 2, 22, '2017-12-02'),
(60, 25, 5, 2, 23, '2017-12-02'),
(60, 25, 6, 2, 22, '2017-12-02'),
(60, 25, 7, 2, 23, '2017-12-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reeducacao`
--

CREATE TABLE IF NOT EXISTS `tb_reeducacao` (
  `cod_reeducacao` int(3) NOT NULL,
  `reeducacao` varchar(50) DEFAULT NULL,
  `cod_objetivo_reeducacao` int(3) DEFAULT NULL,
  `cod_status` int(3) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_reeducacao`
--

INSERT INTO `tb_reeducacao` (`cod_reeducacao`, `reeducacao`, `cod_objetivo_reeducacao`, `cod_status`) VALUES
(20, 'novo', 1, 1),
(21, 'vegetais', 1, 1),
(22, 'simprao', 1, 1),
(23, 'ricão', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reeducacao_refeicao`
--

CREATE TABLE IF NOT EXISTS `tb_reeducacao_refeicao` (
  `cod_reeducacao` int(3) NOT NULL DEFAULT '0',
  `cod_tipo_refeicao` int(3) NOT NULL DEFAULT '0',
  `cod_refeicao` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_reeducacao_refeicao`
--

INSERT INTO `tb_reeducacao_refeicao` (`cod_reeducacao`, `cod_tipo_refeicao`, `cod_refeicao`) VALUES
(20, 1, 73),
(20, 2, 0),
(20, 3, 0),
(20, 4, 0),
(20, 5, 0),
(20, 6, 0),
(21, 1, 0),
(21, 2, 0),
(21, 3, 0),
(21, 4, 0),
(21, 5, 77),
(21, 6, 78),
(22, 1, 73),
(22, 2, 0),
(22, 3, 75),
(22, 4, 0),
(22, 5, 77),
(22, 6, 0),
(23, 1, 73),
(23, 2, 74),
(23, 3, 75),
(23, 4, 76),
(23, 5, 77),
(23, 6, 78);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_refeicao`
--

CREATE TABLE IF NOT EXISTS `tb_refeicao` (
  `cod_refeicao` int(3) NOT NULL,
  `refeicao` varchar(30) NOT NULL,
  `cod_tipo_refeicao` int(3) NOT NULL,
  `video_modo_preparo` varchar(255) DEFAULT NULL,
  `outras_informacoes_refeicoes` text,
  `foto_01_refeicao` varchar(100) DEFAULT 'avatar_refeicao.png',
  `foto_02_refeicao` varchar(100) DEFAULT 'avatar_refeicao.png',
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_refeicao`
--

INSERT INTO `tb_refeicao` (`cod_refeicao`, `refeicao`, `cod_tipo_refeicao`, `video_modo_preparo`, `outras_informacoes_refeicoes`, `foto_01_refeicao`, `foto_02_refeicao`, `cod_status`) VALUES
(35, 'a moda da casa', 3, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(36, 'Almoço Final de Semana I', 3, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(37, 'Almoço Massas I', 3, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(38, 'Lanche Light I', 2, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(39, 'Teste', 1, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(40, 'Mineiro', 6, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(41, 'Mega light I', 2, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(42, 'LIGHT I - cereais com leite', 1, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(43, 'FRUTAS i - banana com mel', 1, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(44, 'fruta - pêra', 2, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(45, 'fruta - melancia', 2, 'dx', '', 'avatar_refeicao.png', NULL, 2),
(46, 'vegano', 3, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(47, 'bahiano', 3, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(48, 'torradas', 4, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(49, 'cereais', 4, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(50, 'COSTELA', 5, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(51, 'MACARRONADA', 5, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(52, 'BISCOITO', 6, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(53, 'saudável', 1, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(54, 'sabores da natureza', 5, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(55, 'mais uma', 6, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(56, 'outras', 6, NULL, NULL, 'avatar_refeicao.png', NULL, 2),
(61, 'Teste refeição com fotos', 1, 'https://www.youtube.com/watch?v=XA9bTuYembI', 'nada consta', '61_1_prato_frango.png', '61_2_prato_salada.png', 2),
(62, 'teste frango - foto', 3, 'https://www.youtube.com/watch?v=XA9bTuYembI', 'de ovo', 'avatar_refeicao.png', '62_2_prato_frango.png', 2),
(63, 'mais um teste', 1, 'https://www.youtube.com/watch?v=duzva4BIp-o', 'ahahahahaha', '63_1_prato_salada.png', '63_2_prato_frango.png', 2),
(65, 'teste 1 foto', 1, 'https://www.youtube.com/watch?v=duzva4BIp-o', 'nada 1', '65_1_prato_frango.png', NULL, 2),
(66, 'teste apenas foto 1', 1, 'https://www.youtube.com/watch?v=duzva4BIp-o', 'dasdfs', '66_1_prato_frango.png', 'avatar_refeicao.png', 2),
(67, 'teste apenas foto 02', 1, 'https://www.youtube.com/watch?v=duzva4BIp-o', 'nadsa 2', 'avatar_refeicao.png', '67_2_prato_frango.png', 2),
(68, 'teste sem foto', 1, 'https://www.youtube.com/watch?v=duzva4BIp-o', 'fsdf', 'avatar_refeicao.png', 'avatar_refeicao.png', 2),
(69, 'teste - geral20', 6, 'https://www.youtube.com/watch?v=sWhy1VcvvgY&list=RDGMEM2VCIgaiSqOfVzBAjPJm-agVMsWhy1VcvvgY20', 'perdido 20', '69_1_prato_lanche_tarde.png', '69_2_prato_torrada.png', 2),
(70, 'geral II', 1, 'https://www.youtube.com/watch?v=sWhy1VcvvgY&list=RDGMEM2VCIgaiSqOfVzBAjPJm-agVMsWhy1VcvvgY', 'nada', '70_1_prato_cereais.png', '70_2_prato_frutas.png', 2),
(71, 'simples i-', 1, 'a', 'a', 'avatar_refeicao.png', 'avatar_refeicao.png', 2),
(72, 'simples ii', 2, 'a', 'a', 'avatar_refeicao.png', 'avatar_refeicao.png', 2),
(73, 'simples i', 1, 'https://www.youtube.com/?hl=pt&gl=BR', 'sucrilhos', 'avatar_refeicao.png', '73_2_prato_cereais.png', 1),
(74, 'simples ii', 2, 'https://www.youtube.com/?hl=pt&gl=BR', 'nada de novo', '74_1_prato_cereais.png', '74_2_prato_queijo.png', 1),
(75, 'macarronada', 3, 'aa', 'nvchgc', '75_1_prato_frutas.png', '75_2_prato_frutas.png', 1),
(76, 'light', 4, 'a', 'a', '76_1_prato_torrada.png', '76_2_prato_frango.png', 1),
(77, 'sopa', 5, 'sopa', 'zsfcds', '77_1_prato_frango.png', '77_2_prato_queijo.png', 1),
(78, 'deitar', 6, 's', 's', '78_1_prato_lanche_tarde.png', '78_2_prato_frango.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_refeicao_alimento`
--

CREATE TABLE IF NOT EXISTS `tb_refeicao_alimento` (
  `cod_alimento` int(3) NOT NULL,
  `cod_refeicao` int(3) NOT NULL,
  `qtde_porcoes` int(3) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_refeicao_alimento`
--

INSERT INTO `tb_refeicao_alimento` (`cod_alimento`, `cod_refeicao`, `qtde_porcoes`) VALUES
(1, 40, 1),
(1, 78, 1),
(2, 37, 1),
(2, 53, 1),
(5, 37, 1),
(5, 55, 1),
(5, 56, 1),
(5, 75, 2),
(5, 76, 2),
(8, 52, 1),
(9, 37, 1),
(10, 67, 1),
(14, 37, 1),
(17, 37, 1),
(18, 38, 1),
(18, 48, 1),
(18, 56, 1),
(18, 76, 2),
(19, 35, 1),
(19, 36, 1),
(19, 38, 1),
(19, 40, 1),
(19, 42, 1),
(19, 49, 1),
(19, 63, 1),
(19, 68, 1),
(19, 71, 2),
(19, 72, 1),
(19, 73, 1),
(19, 74, 2),
(21, 61, 1),
(23, 46, 1),
(23, 47, 1),
(23, 50, 1),
(23, 62, 1),
(23, 65, 1),
(23, 66, 1),
(23, 69, 2),
(23, 70, 1),
(26, 47, 1),
(28, 36, 1),
(33, 37, 1),
(34, 51, 1),
(34, 75, 1),
(43, 75, 1),
(44, 47, 1),
(46, 69, 3),
(49, 50, 1),
(51, 61, 1),
(56, 46, 1),
(67, 77, 2),
(79, 36, 1),
(81, 45, 5),
(83, 35, 1),
(88, 39, 1),
(88, 43, 1),
(88, 70, 3),
(94, 41, 1),
(94, 44, 1),
(95, 55, 1),
(95, 56, 1),
(98, 40, 1),
(101, 53, 1),
(102, 35, 1),
(102, 38, 1),
(102, 42, 1),
(102, 48, 1),
(109, 39, 1),
(110, 38, 1),
(110, 48, 1),
(110, 54, 1),
(112, 39, 1),
(114, 39, 1),
(114, 52, 1),
(119, 50, 1),
(119, 54, 1),
(119, 69, 4),
(128, 46, 1),
(133, 54, 1),
(156, 43, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE IF NOT EXISTS `tb_status` (
  `cod_status` int(3) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`cod_status`, `status`) VALUES
(1, 'Ativo'),
(2, 'Inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tempo`
--

CREATE TABLE IF NOT EXISTS `tb_tempo` (
  `cod_tempo` int(3) NOT NULL,
  `tempo` varchar(100) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tempo`
--

INSERT INTO `tb_tempo` (`cod_tempo`, `tempo`, `cod_status`) VALUES
(1, '1 semana', 1),
(2, '2 semanas', 1),
(3, '3 semanas', 1),
(4, '4 semanas', 1),
(5, '5 semanas', 1),
(6, '6 semanas', 1),
(7, '7 semanas', 1),
(8, '8 semanas', 1),
(9, '9 semanas', 1),
(10, '10 semanas', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_refeicao`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_refeicao` (
  `cod_tipo_refeicao` int(3) NOT NULL,
  `tipo_refeicao` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo_refeicao`
--

INSERT INTO `tb_tipo_refeicao` (`cod_tipo_refeicao`, `tipo_refeicao`, `cod_status`) VALUES
(1, 'café da manhã', 1),
(2, 'lanche da manhã', 1),
(3, 'almoço', 1),
(4, 'café da tarde', 1),
(5, 'jantar', 1),
(6, 'ceia', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_unidade_medida`
--

CREATE TABLE IF NOT EXISTS `tb_unidade_medida` (
  `cod_unidade_medida` int(3) NOT NULL,
  `unidade_medida` varchar(15) NOT NULL DEFAULT 'gramas',
  `sigla` varchar(10) NOT NULL DEFAULT 'g'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_unidade_medida`
--

INSERT INTO `tb_unidade_medida` (`cod_unidade_medida`, `unidade_medida`, `sigla`) VALUES
(1, 'gramas', 'g'),
(2, 'gramas/mililitr', 'g/ml');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cod_usuario` int(4) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `responsavel` varchar(50) DEFAULT NULL,
  `profissao` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(25) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cep` int(8) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `telefone_residencial` varchar(10) NOT NULL,
  `telefone_comercial` varchar(10) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `outros` text,
  `cpf_cnpj` varchar(20) DEFAULT NULL,
  `rg_ie` varchar(20) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cod_nivel_acesso` int(3) NOT NULL DEFAULT '1',
  `cod_status` int(3) NOT NULL DEFAULT '1',
  `foto_usuario` varchar(100) DEFAULT 'avatar.png'
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cod_usuario`, `nome_usuario`, `empresa`, `responsavel`, `profissao`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `telefone_residencial`, `telefone_comercial`, `celular`, `email`, `data_nascimento`, `sexo`, `outros`, `cpf_cnpj`, `rg_ie`, `login`, `senha`, `cod_nivel_acesso`, `cod_status`, `foto_usuario`) VALUES
(37, 'bruno cobello loko', NULL, NULL, '3213213213213', '13213213132132', '32132', '132132132', '1321321', 3132321, '313213132', '132132132', '32132132', '32132132', 'brunocobello@uol.com.br', '1969-12-31', 'M', 'nada', '23132132132', '3131321321', 'brunocobello', '1234', 2, 1, '37_bebe_1.jpg'),
(59, 'ariane da silva palma', NULL, NULL, 'medica', 'RUA MONSENHOR ANTONIO PEPE', '144', 'casa 1', 'Centro', 18132587, 'São Roque', '1147121725', '1147845528', '11999981662', 'brunocobello@uol.com.br', '1969-12-31', 'F', 'nbada', '12343456546', '4165436413', 'brunocobello', '87328', 1, 1, '59_bebe_2.jpg'),
(60, 'giovana cobello', NULL, NULL, 'medica', 'RUA MONSENHOR ANTONIO PEPE', '144', 'casa 1', 'Centro', 18132587, 'São Roque', '1147121725', '1147845528', '11999981662', 'brunocobello@uol.com.br', '1969-12-31', 'F', 'nada consta', '27761994811', '3213213213', 'brunocobello', '95732', 1, 1, '60_bebe_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acompanhamento`
--
ALTER TABLE `tb_acompanhamento`
  ADD PRIMARY KEY (`cod_paciente`,`cod_consulta`,`cod_programa`,`cod_reeducacao`,`cod_dia_semana`,`cod_tipo_refeicao`,`data_acompanhamento`),
  ADD KEY `fk_acompanhamento_consulta` (`cod_consulta`),
  ADD KEY `fk_acompanhamento_programa` (`cod_programa`),
  ADD KEY `fk_acompanhamento_reeducacao` (`cod_reeducacao`),
  ADD KEY `fk_acompanhamento_dia_semana` (`cod_dia_semana`),
  ADD KEY `fk_acompanhamento_tipo_refeicao` (`cod_tipo_refeicao`);

--
-- Indexes for table `tb_alimento`
--
ALTER TABLE `tb_alimento`
  ADD PRIMARY KEY (`cod_alimento`),
  ADD KEY `fk_alimento_grupo` (`cod_grupo`),
  ADD KEY `fk_alimento_status` (`cod_status`),
  ADD KEY `fk_alimento_medida` (`cod_unidade_medida`);

--
-- Indexes for table `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  ADD PRIMARY KEY (`cod_atividade_fisica`),
  ADD KEY `fk_antopometria_dados` (`cod_paciente`),
  ADD KEY `consulta_atividade` (`cod_consulta`);

--
-- Indexes for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD PRIMARY KEY (`cod_consulta`);

--
-- Indexes for table `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  ADD PRIMARY KEY (`cod_consumo_agua`),
  ADD KEY `fk_consumoAgua_status` (`cod_status`);

--
-- Indexes for table `tb_dia_semana`
--
ALTER TABLE `tb_dia_semana`
  ADD PRIMARY KEY (`cod_dia_semana`);

--
-- Indexes for table `tb_dieta`
--
ALTER TABLE `tb_dieta`
  ADD PRIMARY KEY (`cod_dieta`);

--
-- Indexes for table `tb_frequencia`
--
ALTER TABLE `tb_frequencia`
  ADD PRIMARY KEY (`cod_frequencia`),
  ADD KEY `fk_frequencia_status` (`cod_status`);

--
-- Indexes for table `tb_grupo`
--
ALTER TABLE `tb_grupo`
  ADD PRIMARY KEY (`cod_grupo`),
  ADD KEY `fk_grupo_status` (`cod_status`);

--
-- Indexes for table `tb_habito_alimentar`
--
ALTER TABLE `tb_habito_alimentar`
  ADD PRIMARY KEY (`cod_habito_alimentar`),
  ADD KEY `fk_habitoAlimentar_paciente` (`cod_paciente`),
  ADD KEY `fk_consulta_habito` (`cod_consulta`);

--
-- Indexes for table `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
  ADD PRIMARY KEY (`cod_historico_paciente`),
  ADD KEY `fk_historicoPaciente_paciente` (`cod_paciente`),
  ADD KEY `fk_consulta_historico` (`cod_consulta`);

--
-- Indexes for table `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  ADD PRIMARY KEY (`cod_nivel_acesso`),
  ADD KEY `fk_nivelAcesso_status` (`cod_status`);

--
-- Indexes for table `tb_objetivo`
--
ALTER TABLE `tb_objetivo`
  ADD PRIMARY KEY (`cod_objetivo`),
  ADD KEY `fk_objetivo_status` (`cod_status`);

--
-- Indexes for table `tb_objetivo_paciente`
--
ALTER TABLE `tb_objetivo_paciente`
  ADD PRIMARY KEY (`cod_objetivo_paciente`),
  ADD KEY `fk_objetivo_paciente` (`cod_paciente`),
  ADD KEY `fk_consulta_objetivo` (`cod_consulta`);

--
-- Indexes for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`cod_paciente`),
  ADD KEY `fk_paciente_status` (`cod_status`);

--
-- Indexes for table `tb_programa`
--
ALTER TABLE `tb_programa`
  ADD PRIMARY KEY (`cod_programa`),
  ADD KEY `fk_programa_objetivo` (`cod_objetivo_programa`),
  ADD KEY `fk_programa_duracao` (`cod_tempo_programa`),
  ADD KEY `fk_programa_status` (`cod_status`);

--
-- Indexes for table `tb_programa_paciente`
--
ALTER TABLE `tb_programa_paciente`
  ADD PRIMARY KEY (`cod_programa`,`cod_consulta`,`cod_paciente`),
  ADD KEY `fk_programa_consulta` (`cod_consulta`),
  ADD KEY `fk_programa_paciente` (`cod_paciente`);

--
-- Indexes for table `tb_programa_paciente_reeducacao`
--
ALTER TABLE `tb_programa_paciente_reeducacao`
  ADD PRIMARY KEY (`cod_paciente`,`cod_consulta`,`cod_dia_semana`,`cod_programa`,`cod_reeducacao`),
  ADD KEY `fk_programaPaciente_consulta` (`cod_consulta`),
  ADD KEY `fk_programaPaciente_diaSemana` (`cod_dia_semana`);

--
-- Indexes for table `tb_reeducacao`
--
ALTER TABLE `tb_reeducacao`
  ADD PRIMARY KEY (`cod_reeducacao`),
  ADD KEY `fk_reeducacao_objetivo` (`cod_objetivo_reeducacao`),
  ADD KEY `fk_reeducacao_status` (`cod_status`);

--
-- Indexes for table `tb_reeducacao_refeicao`
--
ALTER TABLE `tb_reeducacao_refeicao`
  ADD PRIMARY KEY (`cod_reeducacao`,`cod_tipo_refeicao`,`cod_refeicao`);

--
-- Indexes for table `tb_refeicao`
--
ALTER TABLE `tb_refeicao`
  ADD PRIMARY KEY (`cod_refeicao`),
  ADD KEY `fk_combo_tipoCombo` (`cod_tipo_refeicao`),
  ADD KEY `fk_como_status` (`cod_status`);

--
-- Indexes for table `tb_refeicao_alimento`
--
ALTER TABLE `tb_refeicao_alimento`
  ADD PRIMARY KEY (`cod_alimento`,`cod_refeicao`),
  ADD KEY `fk_alimentoCombo_combo` (`cod_refeicao`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`cod_status`);

--
-- Indexes for table `tb_tempo`
--
ALTER TABLE `tb_tempo`
  ADD PRIMARY KEY (`cod_tempo`),
  ADD KEY `fk_tempo_status` (`cod_status`);

--
-- Indexes for table `tb_tipo_refeicao`
--
ALTER TABLE `tb_tipo_refeicao`
  ADD PRIMARY KEY (`cod_tipo_refeicao`),
  ADD KEY `fk_tipoCombo_status` (`cod_status`);

--
-- Indexes for table `tb_unidade_medida`
--
ALTER TABLE `tb_unidade_medida`
  ADD PRIMARY KEY (`cod_unidade_medida`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `fk_usuario_nivelAcesso` (`cod_nivel_acesso`),
  ADD KEY `fk_usuario_status` (`cod_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alimento`
--
ALTER TABLE `tb_alimento`
  MODIFY `cod_alimento` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  MODIFY `cod_atividade_fisica` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tb_consulta`
--
ALTER TABLE `tb_consulta`
  MODIFY `cod_consulta` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  MODIFY `cod_consumo_agua` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_dia_semana`
--
ALTER TABLE `tb_dia_semana`
  MODIFY `cod_dia_semana` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_dieta`
--
ALTER TABLE `tb_dieta`
  MODIFY `cod_dieta` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2652;
--
-- AUTO_INCREMENT for table `tb_frequencia`
--
ALTER TABLE `tb_frequencia`
  MODIFY `cod_frequencia` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `tb_grupo`
--
ALTER TABLE `tb_grupo`
  MODIFY `cod_grupo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_habito_alimentar`
--
ALTER TABLE `tb_habito_alimentar`
  MODIFY `cod_habito_alimentar` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
  MODIFY `cod_historico_paciente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  MODIFY `cod_nivel_acesso` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_objetivo`
--
ALTER TABLE `tb_objetivo`
  MODIFY `cod_objetivo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_objetivo_paciente`
--
ALTER TABLE `tb_objetivo_paciente`
  MODIFY `cod_objetivo_paciente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `cod_paciente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tb_programa`
--
ALTER TABLE `tb_programa`
  MODIFY `cod_programa` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_reeducacao`
--
ALTER TABLE `tb_reeducacao`
  MODIFY `cod_reeducacao` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_refeicao`
--
ALTER TABLE `tb_refeicao`
  MODIFY `cod_refeicao` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `cod_status` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_tempo`
--
ALTER TABLE `tb_tempo`
  MODIFY `cod_tempo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_tipo_refeicao`
--
ALTER TABLE `tb_tipo_refeicao`
  MODIFY `cod_tipo_refeicao` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_unidade_medida`
--
ALTER TABLE `tb_unidade_medida`
  MODIFY `cod_unidade_medida` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cod_usuario` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_acompanhamento`
--
ALTER TABLE `tb_acompanhamento`
  ADD CONSTRAINT `fk_acompanhamento_consulta` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_acompanhamento_dia_semana` FOREIGN KEY (`cod_dia_semana`) REFERENCES `tb_dia_semana` (`cod_dia_semana`),
  ADD CONSTRAINT `fk_acompanhamento_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`),
  ADD CONSTRAINT `fk_acompanhamento_programa` FOREIGN KEY (`cod_programa`) REFERENCES `tb_programa` (`cod_programa`),
  ADD CONSTRAINT `fk_acompanhamento_reeducacao` FOREIGN KEY (`cod_reeducacao`) REFERENCES `tb_reeducacao` (`cod_reeducacao`),
  ADD CONSTRAINT `fk_acompanhamento_tipo_refeicao` FOREIGN KEY (`cod_tipo_refeicao`) REFERENCES `tb_tipo_refeicao` (`cod_tipo_refeicao`);

--
-- Limitadores para a tabela `tb_alimento`
--
ALTER TABLE `tb_alimento`
  ADD CONSTRAINT `fk_alimento_grupo` FOREIGN KEY (`cod_grupo`) REFERENCES `tb_grupo` (`cod_grupo`),
  ADD CONSTRAINT `fk_alimento_medida` FOREIGN KEY (`cod_unidade_medida`) REFERENCES `tb_unidade_medida` (`cod_unidade_medida`),
  ADD CONSTRAINT `fk_alimento_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  ADD CONSTRAINT `consulta_atividade` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_antopometria_dados` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  ADD CONSTRAINT `fk_consumoAgua_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_frequencia`
--
ALTER TABLE `tb_frequencia`
  ADD CONSTRAINT `fk_frequencia_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_grupo`
--
ALTER TABLE `tb_grupo`
  ADD CONSTRAINT `fk_grupo_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_habito_alimentar`
--
ALTER TABLE `tb_habito_alimentar`
  ADD CONSTRAINT `fk_consulta_habito` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_habitoAlimentar_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
  ADD CONSTRAINT `fk_consulta_historico` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_historicoPaciente_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  ADD CONSTRAINT `fk_nivelAcesso_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_objetivo`
--
ALTER TABLE `tb_objetivo`
  ADD CONSTRAINT `fk_objetivo_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_objetivo_paciente`
--
ALTER TABLE `tb_objetivo_paciente`
  ADD CONSTRAINT `fk_consulta_objetivo` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_objetivo_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD CONSTRAINT `fk_paciente_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_programa`
--
ALTER TABLE `tb_programa`
  ADD CONSTRAINT `fk_programa_duracao` FOREIGN KEY (`cod_tempo_programa`) REFERENCES `tb_tempo` (`cod_tempo`),
  ADD CONSTRAINT `fk_programa_objetivo` FOREIGN KEY (`cod_objetivo_programa`) REFERENCES `tb_objetivo` (`cod_objetivo`),
  ADD CONSTRAINT `fk_programa_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_programa_paciente`
--
ALTER TABLE `tb_programa_paciente`
  ADD CONSTRAINT `fk_programa_consulta` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_programa_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_programa_paciente_reeducacao`
--
ALTER TABLE `tb_programa_paciente_reeducacao`
  ADD CONSTRAINT `fk_programaPaciente_consulta` FOREIGN KEY (`cod_consulta`) REFERENCES `tb_consulta` (`cod_consulta`),
  ADD CONSTRAINT `fk_programaPaciente_diaSemana` FOREIGN KEY (`cod_dia_semana`) REFERENCES `tb_dia_semana` (`cod_dia_semana`),
  ADD CONSTRAINT `fk_programaPaciente_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_reeducacao`
--
ALTER TABLE `tb_reeducacao`
  ADD CONSTRAINT `fk_reeducacao_objetivo` FOREIGN KEY (`cod_objetivo_reeducacao`) REFERENCES `tb_objetivo` (`cod_objetivo`),
  ADD CONSTRAINT `fk_reeducacao_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_refeicao`
--
ALTER TABLE `tb_refeicao`
  ADD CONSTRAINT `fk_combo_tipoCombo` FOREIGN KEY (`cod_tipo_refeicao`) REFERENCES `tb_tipo_refeicao` (`cod_tipo_refeicao`),
  ADD CONSTRAINT `fk_como_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_refeicao_alimento`
--
ALTER TABLE `tb_refeicao_alimento`
  ADD CONSTRAINT `fk_alimentoCombo_alimento` FOREIGN KEY (`cod_alimento`) REFERENCES `tb_alimento` (`cod_alimento`),
  ADD CONSTRAINT `fk_alimentoCombo_combo` FOREIGN KEY (`cod_refeicao`) REFERENCES `tb_refeicao` (`cod_refeicao`);

--
-- Limitadores para a tabela `tb_tempo`
--
ALTER TABLE `tb_tempo`
  ADD CONSTRAINT `fk_tempo_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_tipo_refeicao`
--
ALTER TABLE `tb_tipo_refeicao`
  ADD CONSTRAINT `fk_tipoCombo_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `fk_usuario_nivelAcesso` FOREIGN KEY (`cod_nivel_acesso`) REFERENCES `tb_nivel_acesso` (`cod_nivel_acesso`),
  ADD CONSTRAINT `fk_usuario_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
