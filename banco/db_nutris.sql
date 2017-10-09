-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 08-Out-2017 às 20:20
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
-- Estrutura da tabela `tb_alimento`
--

CREATE TABLE IF NOT EXISTS `tb_alimento` (
  `cod_alimento` int(3) NOT NULL,
  `alimento` varchar(255) NOT NULL,
  `peso` decimal(5,3) NOT NULL,
  `caloria` int(4) NOT NULL,
  `medida_caseira` varchar(100) NOT NULL,
  `cod_grupo` int(3) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_alimento`
--

INSERT INTO `tb_alimento` (`cod_alimento`, `alimento`, `peso`, `caloria`, `medida_caseira`, `cod_grupo`, `cod_status`) VALUES
(1, 'PÃO FRANCÊS COM MIOLO', '50.000', 150, '1 UNIDADE', 1, 1),
(2, 'PÃO DE FORMA/PÃO INTEGRAL', '50.000', 150, '2 FATIAS', 1, 1),
(3, 'PÃO DOCE ', '50.000', 150, '1 UNIDADE', 1, 1),
(4, 'PÃO DE HOT DOG', '50.000', 150, '1 UNIDADE', 1, 1),
(5, 'PÃO DE QUEIJO', '50.000', 150, '2 UNIDADES MÉDIAS', 1, 1),
(6, 'PÃO CASEIRO', '40.000', 150, '1/2 UNIDADE', 1, 1),
(7, 'PÃO DE BATATA', '60.000', 150, '2 UNIDADES MÉDIAS', 1, 1),
(8, 'BISCOITO ÁGUA E SAL OU CREAM CRACKER', '40.000', 150, '5 UNIDADES', 1, 1),
(9, 'BISCOITO CLUB SOCIAL', '28.000', 150, '1 PACOTE INDIVIDUAL', 1, 1),
(10, 'BISCOITO TIPO MARIA E MAISENA', '35.000', 150, '7 UNIDADES', 1, 1),
(11, 'BISCOITO TIPO CASADINHO', '35.000', 150, '7 UNIDADES', 1, 1),
(12, 'BISCOITO TIPO CHAMPAGNE', '35.000', 150, '2 1/2 UNIDADES', 1, 1),
(13, 'BISCOITO RECHEADO', '35.000', 150, '2 UNIDADES ', 1, 1),
(14, 'BISCOITO SALPET', '35.000', 150, '12 UNIDADES', 1, 1),
(15, 'BISCOITO POLVILHO', '35.000', 150, '6 UNIDADES', 1, 1),
(16, 'BOLO DE MILHO ( FUBÁ )', '30.000', 150, '1 FATIA PEQUENA', 1, 1),
(17, 'BOLO DE TRIGO', '30.000', 150, '1 FATIA PEQUENA', 1, 1),
(18, 'TORRADA DE PÃO FRANCÊS', '48.000', 150, '6 UNIDADES', 1, 1),
(19, 'CEREAIS INTEGRAIS ( AVEIA, FARELO DE TRIGO, GRANOLA, SUCRILHOS )', '35.000', 150, '2 COLHERES DE SOPA', 1, 1),
(20, 'FARINHA LÁCTEA', '25.000', 150, '2 COLHERES DE SOPA CHEIAS', 1, 1),
(21, 'EMPADA DE FRANGOEMPADA DE CAMARÃO', '85.000', 150, '3 UNIDADES PEQUENAS', 1, 1),
(22, 'EMPADA DE PALMITO', '60.000', 150, '2 UNIDADES PEQUENAS', 1, 1),
(23, 'ARROZ ( COMUM OU INTEGRAL )', '40.000', 40, '2 COLHERES DE SOPA', 2, 1),
(24, 'FAROFA', '10.000', 40, '1 COLHER DE SOPA RASA', 2, 1),
(25, 'PURÊ DE BATATAS', '40.000', 40, '1 colher de sopa', 2, 1),
(26, 'FARINHA DE MANDIOCA', '11.000', 40, '1 colher de sopa rasa', 2, 1),
(27, 'FARINHA DE MILHO', '11.000', 40, '1 colher de sopa rasa', 2, 1),
(28, 'NHOQUE', '20.000', 40, '1 colher de sopa cheia', 2, 1),
(29, 'BATATA INGLESA COZIDA', '45.000', 40, '1 colher de sopa', 2, 1),
(30, 'BATATA INGLESA FRITA', '30.000', 40, '1 concha pequena', 2, 1),
(31, 'INHAME', '35.000', 40, '1 colher de sopa rasa', 2, 1),
(32, 'MANDIOQUINHA', '40.000', 40, '1 colher de sopa cheia', 2, 1),
(33, 'PANQUECA', '30.000', 40, '1/2 unidades média', 2, 1),
(34, 'MACARRONADA', '30.000', 40, '2 colheres de sopa', 2, 1),
(35, 'MANDIOCA COZIDA', '32.000', 40, '1 pedaço pequeno', 2, 1),
(36, 'POLENTA', '65.000', 40, '3 colheres de sopa ou 2 pedaços médios', 2, 1),
(37, 'ERVILHA SECA COZIDA', '60.000', 55, '3 COLHERES DE SOPA', 3, 1),
(38, 'GRÃO DE BICO COZIDO', '35.000', 55, '2 COLHERES DE SOPA RASAS', 3, 1),
(39, 'LENTILHA COZIDA', '45.000', 55, '2 COLHERES DE SOPA', 3, 1),
(40, 'SOJA COZIDA', '30.000', 55, '2 COLHERES DE SOPA RASAS', 3, 1),
(41, 'FEIJÃO BRANCO COZIDO', '40.000', 55, '1/2 CONCHA', 3, 1),
(42, 'FEIJÃO COZIDO ( 50% GRÃO/ CALDO )', '90.000', 55, '1 CONCHA', 3, 1),
(43, 'ALMONDEGAS', '50.000', 190, '2 UNIDADES MÉDIAS', 4, 1),
(44, 'CARNE MOÍDA', '60.000', 190, '4 COLHERES DE SOPA CHEIAS', 4, 1),
(45, 'BIFE DE BOI FRITO', '65.000', 190, '1 UNIDADE PEQUENA', 4, 1),
(46, 'BIFE DE BOI GRELHADO', '85.000', 190, '1 UNIDADE MÉDIA', 4, 1),
(47, 'BIFE DE FÍGADO', '65.000', 190, '1 UNIDADE MÉDIA', 4, 1),
(48, 'CARNE COZIDA', '70.000', 190, '2 PEDAÇOS MÉDIOS', 4, 1),
(49, 'COSTELA DE BOI ASSADA', '45.000', 190, '1 PEDAÇO MÉDIO', 4, 1),
(50, 'HÁMBURGUER', '73.000', 190, '1 UNIDADE', 4, 1),
(51, 'ASA DE FRANGO ( ASSADA OU COZIDA )', '50.000', 190, '2 UNIDADES GRANDES', 4, 1),
(52, 'COXA DE FRANGO ( ASSADA OU COZIDA )', '80.000', 190, '2 PEDAÇOS GRANDES', 4, 1),
(53, 'MIÚDOS - MOELA', '85.000', 190, '3 UNIDADES GRANDE', 4, 1),
(54, 'CORAÇÃO DE GALINHA', '70.000', 190, '13 UNIDADES GRANDES', 4, 1),
(55, 'NUGGETS DE FRANGO ASSADO', '50.000', 190, '6 UNIDADES', 4, 1),
(56, 'PEITO DE FRANGO DESOSSADO', '90.000', 190, '1/2 UNIDADE OU 1 BIFE GRANDE', 4, 1),
(57, 'PEITO DE PERU SEM PELE', '99.999', 190, '5 FÁTIAS OU 1 BIFE MÉDIO', 4, 1),
(58, 'OMELETE SIMPLES', '75.000', 190, '1 UNIDADES MÉDIA', 4, 1),
(59, 'OVO COZIDO', '85.000', 190, '2 UNIDADES MÉDIAS', 4, 1),
(60, 'LOMBO ASSADO', '70.000', 190, '1 FATIA MÉDIA', 4, 1),
(61, 'COSTELINHA DE PORCO ASSADA', '45.000', 190, '2 PEDAÇOS PEQUENOS', 4, 1),
(62, 'LINGUIÇA FRITA', '34.000', 190, '1 UNIDADE', 4, 1),
(63, 'SALSICHA ENLATADA', '76.000', 190, '4 UNIDADES', 4, 1),
(64, 'SALSICHA', '45.000', 190, '1 1/2 UNIDADE', 4, 1),
(65, 'PRESUNTO COZIDO', '84.000', 190, '3 FÁTIAS', 4, 1),
(66, 'PRESUNTO DE PERU LIGHT', '99.999', 190, '6 FÁTIAS', 4, 1),
(67, 'PEIXE ENSOPADO OU ASSADO', '99.999', 190, '2FILÉS PEQUENOS', 4, 1),
(68, 'SARDINHA EM CONSERVA NO AZEITE', '55.000', 190, '1/2 LATA', 4, 1),
(69, 'ATUM ENLATADO', '99.999', 190, '2 LATAS', 4, 1),
(70, 'ABACAXI', '75.000', 35, '1 FATIA', 5, 1),
(71, 'ACEROLA', '99.999', 35, '9 UNIDADES MÉDIAS', 5, 1),
(72, 'CAJU', '30.000', 35, '1 UNIDADE', 5, 1),
(73, 'CARAMBOLA ', '99.999', 35, '1 UNIDADE', 1, 1),
(74, 'CEREJA', '50.000', 35, '5 UNIDADES', 5, 1),
(75, 'GOIABA BRANCA', '60.000', 35, '1/2 UNIDADE MÉDIA', 5, 1),
(76, 'GOIABA VERMELHA', '80.000', 35, '1/2 UNIDADE GRANDE', 5, 1),
(77, 'GRAVIOLA ', '50.000', 35, '1/2 UNIDADE', 5, 1),
(78, 'KIWI', '60.000', 35, '1 UNIDADE PEQUENA', 5, 1),
(79, 'LARANJA', '75.000', 35, '1/2 UNIDADE MÉDIA', 5, 1),
(80, 'LIMÃO', '99.999', 35, '3 UNIDADES', 5, 1),
(81, 'MELANCIA', '99.999', 35, '1 FATIA PEQUENA', 5, 1),
(82, 'MELÃO', '99.999', 35, '1 FATIA MÉDIA', 5, 1),
(83, 'MORANGO', '99.999', 35, '6 UNIDADES GRANDES', 5, 1),
(84, 'PÊSSEGO', '80.000', 35, '1 UNIDADE GRANDE', 5, 1),
(85, 'MEXERICA', '80.000', 35, '8 GOMOS MÉDIOS ', 5, 1),
(86, 'AMEIXA PRETA ', '30.000', 35, '2 UNIDADES MÉDIAS', 5, 1),
(87, 'AMEIXA VERMELHA', '60.000', 35, '2 UNIDADES MÉDIAS', 5, 1),
(88, 'BANANA PRATA/ BANANA MAÇA', '35.000', 35, '1/2 UNIDADES MÉDIA', 5, 1),
(89, 'CAQUI', '50.000', 35, '1 UNIDADE PEQUENA', 5, 1),
(90, 'JABUTICABA', '65.000', 35, '13 UNIDADES GRANDES', 5, 1),
(91, 'MAÇA', '60.000', 35, '1/2 UNIDADE MÉDIA', 5, 1),
(92, 'MAMÃO PAPAIA', '90.000', 35, '1/4 UNIDADE MÉDIA', 5, 1),
(93, 'MANGA ', '50.000', 35, '1/2 UNIDADE PEQUENA', 5, 1),
(94, 'PÊRA', '60.000', 35, '1/2 UNIDADE MÉDIA', 5, 1),
(95, 'UVA ITÁLIA', '50.000', 35, '6 UNIDADES', 5, 1),
(96, 'UVA RUBI', '45.000', 35, '8 UNIDADES', 5, 1),
(97, 'AMORA', '50.000', 35, '13 UNIDADES MÉDIAS', 5, 1),
(98, 'JACA', '30.000', 35, '2 BAGOS GRANDES', 5, 1),
(99, 'MAMÃO', '99.999', 35, '1 FATIA GRANDE', 5, 1),
(100, 'ABACATE', '50.000', 80, '1/4 UNIDADE PEQUENA OU 1 FATIA PEQUENA', 6, 1),
(101, 'LEITE INTEGRAL', '99.999', 120, '1 XICARA DE CHÁ', 7, 1),
(102, 'LEITE DESNATADO', '99.999', 120, '2 COPOS AMERICANOS', 7, 1),
(103, 'LEITE EM PÓ INTEGRAL', '24.000', 120, '2 COLHERES DE SOPA RASAS', 7, 1),
(104, 'LEITE EM PÓ DESNATADO', '35.000', 120, '4 COLHERES DE SOPA RASAS', 7, 1),
(105, 'IOGURTE', '90.000', 120, '1/2 COPO', 7, 1),
(106, 'IOGURTE LIGHT', '99.999', 120, '1 COPO', 7, 1),
(107, 'YAKULT', '99.999', 120, '2 POTES', 7, 1),
(108, 'COALHADA', '99.999', 120, '1 XICARA DE CHÁ', 7, 1),
(109, 'QUEIJO COTTAGE CREMOSO', '99.999', 120, '4 COLHERES DE SOPA', 7, 1),
(110, 'QUEIJO MINAS FRESCO', '51.000', 120, '2 FATIAS MÉDIAS', 7, 1),
(111, 'QUEIJO PRATO', '30.000', 120, '2 FATIAS MÉDIAS', 7, 1),
(112, 'QUEIJO MUSSARELA', '40.000', 120, '2 FATIAS', 7, 1),
(113, 'REQUEIJÃO CREMOSO', '45.000', 120, '2 COLHERES DE SOPA RASAS', 7, 1),
(114, 'REQUEIJÃO LIGHT', '63.000', 120, '2 COLHERES DE SOPA', 7, 1),
(115, 'RICOTA', '70.000', 120, '2 FATIAS MÉDIAS', 7, 1),
(116, 'ABOBRINHA COZIDA', '70.000', 15, '2 COLHERES DE SOPAS CHEIAS', 8, 1),
(117, 'ACELGA', '70.000', 15, '1 PIRE DE CHÁ', 8, 1),
(118, 'AGRIÃO', '90.000', 15, '1 PRATO DE SOBREMESA', 8, 1),
(119, 'ALFACE ', '99.999', 15, '1 PRATO DE SOBREMESA', 8, 1),
(120, 'ALMERÃO', '65.000', 15, '1 PRATO DE SOBREMESA', 8, 1),
(121, 'BERINJELA ENSOPADA', '50.000', 15, '2 COLHERES DE SOPAS RASAS', 8, 1),
(122, 'BRÓCOLIS COZIDO', '50.000', 15, '1 PIRES DE CHÁ', 8, 1),
(123, 'COUVE REFOGADA', '15.000', 15, '1 COLHER DE SOPA', 8, 1),
(124, 'COUVE-FLOR', '70.000', 15, '3 RAMOS PEQUENOS', 8, 1),
(125, 'ESPINAFRE', '70.000', 15, '1 PIRES DE CHÁ', 8, 1),
(126, 'MOSTARDA', '60.000', 15, '1 PIRES DE CHÁ', 8, 1),
(127, 'PALMITO EM CONSERVA', '80.000', 15, '5 COLHERES DE SOPA', 8, 1),
(128, 'PEPINO CRU COM CASCA', '99.999', 15, '7 COLHERES DE SOPA', 8, 1),
(129, 'PIMENTÃO', '50.000', 15, '2 COLHERES DE SOPA', 8, 1),
(130, 'RABANETE', '90.000', 15, '2 COLHERES DE SOPA', 8, 1),
(131, 'REPOLHO CRU PICADO', '60.000', 15, '1 PIRES DE CHÁ', 8, 1),
(132, 'REPOLHO COZIDO', '70.000', 15, '3 COLHERES DE SOPÁ', 8, 1),
(133, 'TOMATE', '70.000', 15, '5 FATIAS MÉDIAS', 8, 1),
(134, 'ABOBORA MORANGA', '70.000', 15, '2 COLHERES DE SOPA', 8, 1),
(135, 'BETERRABA COZIDA', '35.000', 15, '3 FATIAS MÉDIAS', 8, 1),
(136, 'BETERRABA CRUA RALADA', '35.000', 15, '2 COLHERES DE SOPA', 8, 1),
(137, 'CENOURA COZIDA', '35.000', 15, '2 COLHERES DE SOPA', 8, 1),
(138, 'CENOURA CRUA', '35.000', 15, '3 COLHERES DE SOPA', 8, 1),
(139, 'CHUCHU', '60.000', 15, '4 COLHERES DE SOPA', 8, 1),
(140, 'QUIABO PICADO', '45.000', 15, '1 COLHER DE SOPA CHEIA', 8, 1),
(141, 'VAGEM', '40.000', 15, '1 COLHER DE SOPA', 8, 1),
(142, 'AMÊNDOAS ', '15.000', 80, '5 UNIDADES MÉDIAS', 9, 1),
(143, 'AMENDOIM', '15.000', 80, '1 COLHER DE SOPA RASA', 9, 1),
(144, 'CASTANHA DE CAJU TORRADA', '15.000', 80, '3 UNIDADES MÉDIAS', 9, 1),
(145, 'CASTANHA DO PARÁ', '13.000', 80, '1 COLHER DE SOPA', 9, 1),
(146, 'NOZES', '12.000', 80, '1 COLHER DE SOPA', 9, 1),
(147, 'AZEITE DE OLIVA', '8.000', 75, '1 COLHER DE SOPA', 10, 1),
(148, 'MARGARINA', '10.000', 75, '2 COLHERES DE CHÁ RASAS', 10, 1),
(149, 'MARGARINA LIGHT', '20.000', 75, '4 COLHERES DE CHÁ RASAS', 10, 1),
(150, 'MANTEIGA', '10.000', 75, '2 COLHERES DE CHÁ RASAS', 10, 1),
(151, 'MAIONESE', '13.000', 75, '2 COLHERES DE CHÁ', 10, 1),
(152, 'ÓLEO VEGETAL', '8.000', 75, '1 COLHER DE SOPA', 10, 1),
(153, 'CREME DE LEITE', '30.000', 75, '2 COLHERES DE SOBREMESA', 10, 1),
(154, 'AZEITONAS', '65.000', 75, '11 UNIDADES MÉDIAS', 10, 1),
(155, 'AÇUCAR', '24.000', 100, '1 COLHER DE SOPA CHEIA', 11, 1),
(156, 'MEL', '30.000', 100, ' 2 COLHERES DE SOPA CHEIAS', 11, 1),
(157, 'NESCAU', '22.000', 100, '2 COLHERES DE SOPA RASAS', 11, 1),
(158, 'MELADO DE CANA', '30.000', 100, '2 COLHERES DE SOPA CHEIAS', 11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atividade_fisica`
--

CREATE TABLE IF NOT EXISTS `tb_atividade_fisica` (
  `cod_atividade_fisica` int(5) NOT NULL,
  `atividade_fisica_sn` char(1) NOT NULL,
  `qual_atividade_1` varchar(100) DEFAULT NULL,
  `dias_semana_1` varchar(16) DEFAULT NULL,
  `inicio_1` time DEFAULT NULL,
  `termino_1` time DEFAULT NULL,
  `qual_atividade_2` varchar(100) DEFAULT NULL,
  `dias_semana_2` varchar(16) DEFAULT NULL,
  `inicio_2` time DEFAULT NULL,
  `termino_2` time DEFAULT NULL,
  `qual_atividade_3` varchar(100) DEFAULT NULL,
  `dias_semana_3` varchar(16) DEFAULT NULL,
  `inicio_3` time DEFAULT NULL,
  `termino_3` time DEFAULT NULL,
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_atividade_fisica`
--

INSERT INTO `tb_atividade_fisica` (`cod_atividade_fisica`, `atividade_fisica_sn`, `qual_atividade_1`, `dias_semana_1`, `inicio_1`, `termino_1`, `qual_atividade_2`, `dias_semana_2`, `inicio_2`, `termino_2`, `qual_atividade_3`, `dias_semana_3`, `inicio_3`, `termino_3`, `cod_paciente`) VALUES
(2, '2', 'Nenhuma', '', '00:00:00', '00:00:00', 'Pratica testessss', '', '00:00:00', '00:00:00', 'Pratica', '', '00:00:00', '00:00:00', 111),
(9, '1', 'Pratica primeira', '0;1;2;3;4;5;6', '18:00:00', '19:00:00', 'Pratica segunda', '0;1;2;3;4;5;6', '07:00:00', '08:00:00', 'Pratica terceira', '0;3;4;6', '15:00:00', '16:00:00', 124),
(10, '1', 'Pratica natação', ';1;3', '18:00:00', '19:00:00', 'Pratica ', '', '00:00:00', '00:00:00', 'Pratica', '', '00:00:00', '00:00:00', 125),
(11, '1', 'bicicross', ';0;1;2;3;4;5;6', '10:00:00', '11:00:00', 'caminhada', ';1;2;3;5', '11:00:00', '12:00:00', '', '', '00:00:00', '00:00:00', 126),
(13, '1', 'corrida', ';2;4', '18:00:00', '20:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', 128),
(14, '1', 'Atletismo', ';1;3;5', '10:00:00', '11:00:00', 'Caminhada', ';1;2;3;4;5', '18:00:00', '19:00:00', '', '', '00:00:00', '00:00:00', 129),
(15, '1', 'natação', ';0;1;2;3;4;5;6', '10:00:00', '11:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', 130);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_combo`
--

CREATE TABLE IF NOT EXISTS `tb_combo` (
  `cod_combo` int(3) NOT NULL,
  `combo` varchar(30) NOT NULL,
  `cod_tipo_combo` int(3) NOT NULL,
  `cod_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_combo_alimento`
--

CREATE TABLE IF NOT EXISTS `tb_combo_alimento` (
  `cod_alimento` int(3) NOT NULL,
  `cod_combo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Estrutura da tabela `tb_dieta`
--

CREATE TABLE IF NOT EXISTS `tb_dieta` (
  `cod_paciente` int(3) NOT NULL,
  `cod_combo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 'Menos de 1 vezx por semana', 1),
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
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_habito_alimentar`
--

INSERT INTO `tb_habito_alimentar` (`cod_habito_alimentar`, `cod_consumo_agua`, `mais_gosta`, `nao_gosta`, `cod_mastigacao`, `pao_integral`, `pao_branco`, `arroz_integral`, `arroz_branco`, `cereais`, `feijao`, `carne_boi`, `frango`, `peixe`, `ovo`, `leite_derivados`, `azeite_oliva`, `castanhas`, `frutas_frescas`, `frutas_secas`, `legumes_verduras`, `doces_biscoitos_chocolates`, `refrigerante`, `fast_food`, `cafe`, `cod_paciente`) VALUES
(95, 1, 'sadfsd', 'sdfsd', 101, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 111),
(99, 5, 'Massas', 'Peixe', 103, 1, 2, 3, 4, 3, 2, 1, 2, 3, 4, 3, 2, 1, 2, 3, 4, 3, 2, 1, 2, 124),
(100, 4, 'massas sempre', 'ovos e peixes', 105, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 3, 1, 1, 1, 1, 1, 3, 1, 1, 1, 125),
(101, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 126),
(103, 4, 'qualquer10', 'qualquer1', 105, 4, 2, 3, 2, 4, 2, 2, 3, 4, 2, 3, 2, 4, 2, 3, 4, 2, 3, 4, 4, 128),
(104, 5, 'massas e fast food', 'ovos e peixes', 104, 1, 2, 0, 3, 3, 4, 4, 4, 4, 4, 4, 3, 3, 3, 3, 3, 4, 4, 3, 3, 129),
(105, 4, 'massas', 'peixes e ovos', 103, 1, 2, 2, 2, 3, 2, 2, 3, 2, 2, 3, 2, 3, 2, 1, 1, 1, 1, 1, 1, 130);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_historico_paciente` (
  `cod_historico_paciente` int(3) NOT NULL,
  `fumante_sn` char(1) DEFAULT NULL,
  `qtde_cigarros` varchar(50) DEFAULT NULL,
  `bebida_alcoolica_sn` char(1) DEFAULT NULL,
  `cod_frequencia_bebida_alcoolica` int(3) DEFAULT NULL,
  `incomodo_gastrointestinal_sn` char(1) DEFAULT NULL,
  `qual_incomodo_gastrointestinal` varchar(255) DEFAULT NULL,
  `quando_sintomas_aparecem` text,
  `medicamento_suplemento_sn` char(1) DEFAULT NULL,
  `qual_medicamento_suplemento` varchar(255) DEFAULT NULL,
  `medicamento_recomendado` text,
  `doencas_passadas` text,
  `historico_familiar` text,
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_historico_paciente`
--

INSERT INTO `tb_historico_paciente` (`cod_historico_paciente`, `fumante_sn`, `qtde_cigarros`, `bebida_alcoolica_sn`, `cod_frequencia_bebida_alcoolica`, `incomodo_gastrointestinal_sn`, `qual_incomodo_gastrointestinal`, `quando_sintomas_aparecem`, `medicamento_suplemento_sn`, `qual_medicamento_suplemento`, `medicamento_recomendado`, `doencas_passadas`, `historico_familiar`, `cod_paciente`) VALUES
(100, '2', 'Não Fuma', '2', 5, '2', 'Não sente', '', '2', 'Não está tomando', '', '', '', 111),
(104, '1', 'Fuma 30 cigarros por dia', '1', 3, '1', 'Sente gases', 'Após comer repolho', '1', 'Está tomando losartana', 'Insuficiência Cardíaca', 'nada consta 1', 'nada consta 2', 124),
(105, '2', 'Não Fuma', '1', 3, '2', 'Não sente', '', '2', 'Não está tomando', '', 'Nada coinsta', 'Nada consta', 125),
(106, '1', 'Não Fuma 10 cigarros', '1', 5, '1', 'Não sente 1', ' Não sente 1 ', '1', 'Não está tomando losartana', '   Insuficiência Cardíaca', 'qualquer 1', 'qualquer 2', 126),
(108, '2', '', '1', 3, '2', '', '  ', '2', '', '    ', 'nada consta', 'mãe cardíaca', 128),
(109, '1', '1 cigarro', '1', 1, '2', '', '  ', '1', 'Losartana', ' Insuficiência Cardíaca ', 'Nada consta', 'mãe cardíaca', 129),
(110, '1', '20', '1', 3, '1', 'Gases', 'Após comer repolho  ', '1', 'Losartana', 'Pressão alta ', 'nada 1', 'nada 2', 130);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nivel_acesso`
--

CREATE TABLE IF NOT EXISTS `tb_nivel_acesso` (
  `cod_nivel_acesso` int(3) NOT NULL,
  `nivel_acesso` varchar(30) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_nivel_acesso`
--

INSERT INTO `tb_nivel_acesso` (`cod_nivel_acesso`, `nivel_acesso`, `cod_status`) VALUES
(1, 'Paciente', 1),
(2, 'Nutricionista', 1),
(3, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetivo`
--

CREATE TABLE IF NOT EXISTS `tb_objetivo` (
  `cod_objetivo` int(3) NOT NULL,
  `objetivo` varchar(60) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_objetivo`
--

INSERT INTO `tb_objetivo` (`cod_objetivo`, `objetivo`, `cod_status`) VALUES
(1, 'Perder Peso', 1),
(2, 'Ganhar Peso', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_objetivo_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_objetivo_paciente` (
  `cod_objetivo_paciente` int(3) NOT NULL,
  `cod_objetivo_programa` int(3) DEFAULT NULL,
  `cod_tempo_programa` int(3) DEFAULT NULL,
  `peso` decimal(6,3) DEFAULT NULL,
  `altura` int(3) DEFAULT NULL,
  `abdome` decimal(6,3) DEFAULT NULL,
  `quadril` decimal(6,3) DEFAULT NULL,
  `foto_01` varchar(100) DEFAULT 'avatar.png',
  `foto_02` varchar(100) DEFAULT NULL,
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_objetivo_paciente`
--

INSERT INTO `tb_objetivo_paciente` (`cod_objetivo_paciente`, `cod_objetivo_programa`, `cod_tempo_programa`, `peso`, `altura`, `abdome`, `quadril`, `foto_01`, `foto_02`, `cod_paciente`) VALUES
(1, 1, 1, '0.000', 0, '0.000', '0.000', '', '', 111),
(2, 1, 1, '0.000', 0, '0.000', '0.000', '', '', 124),
(3, 1, 1, '0.000', 0, '0.000', '0.000', '', '', 125),
(4, 1, 1, '0.000', 0, '0.000', '0.000', '', '', 126),
(5, 1, 1, '0.000', 0, '0.000', '0.000', '', '', 128),
(6, 2, 5, '88.000', 165, '100.000', '105.000', '', '', 129),
(7, 2, 8, '100.000', 189, '100.000', '105.000', '', '', 130);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE IF NOT EXISTS `tb_paciente` (
  `cod_paciente` int(3) NOT NULL,
  `nome_paciente` varchar(50) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `bairro` varchar(30) NOT NULL,
  `cep` int(8) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `telefone_residencial` int(10) DEFAULT NULL,
  `telefone_comercial` int(10) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `altura` decimal(5,3) NOT NULL,
  `peso` decimal(5,3) NOT NULL,
  `outros` text,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`cod_paciente`, `nome_paciente`, `profissao`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `telefone_residencial`, `telefone_comercial`, `celular`, `email`, `data_nascimento`, `sexo`, `altura`, `peso`, `outros`, `cod_status`) VALUES
(111, 'Priscila Rosana Leite de Palma', 'Enfermeira', 'RUA MONSENHOR ANTONIO PEPE', '144', 'casa 1', 'CENTRO', 18130000, 'São Roque', 1147121725, 1147121884, 2147483647, 'brunocobello@uol.com.br', '1969-12-31', 'F', '99.999', '85.000', 'jksdzhfjkds', 1),
(124, 'Giovana Cobello', 'Médica', 'Rua das Flores', '144', 'Apto 12', 'Centro', 18132587, 'São Roque', 1147121725, 1147845528, 2147483647, 'giovana_cobello@gmail.com', '1969-12-31', 'F', '99.999', '58.000', 'nada consta dados pessoais', 1),
(125, 'Irani Loureiro', 'Super Mãe', 'Rua Pedro Vaz', '103', 'Apto 10', 'Centro', 18130258, 'São Roque', 1147845528, 1147121725, 2147483647, 'iraniloureiro@gmail.com', '1969-12-31', 'F', '1.700', '65.000', 'Melhor mãe do mundo!!!', 1),
(126, 'Luiz Loureiro', 'Aposentado', 'Rua Monsenhor Antônio Pepe', '144', 'Apto 41', 'Centro', 18132587, 'São Roque', 1147121725, 1147845528, 2147483647, 'luizloureiro@saoroque.sp.gov.br', '2000-10-10', 'M', '1.750', '85.000', 'nada consta', 1),
(128, 'Bruno Cobello', 'Técnico de Informática', 'Rua Monsenhor Antônio Pepe', '144', 'Centro', 'São Roque', 18132587, 'São Roque', 1147845528, 1147121725, 2147483647, 'brunocobello@gmail.com', '1969-12-31', 'M', '1.880', '92.000', 'anotações', 1),
(129, 'Alexandre Álvaro', 'Professor Doutor', 'Rua do Ensino Superior', '1000', 'Apto 10', 'Centro', 18052987, 'Sorocaba', 1132356987, 1132356987, 2147483647, 'aa@gmail.com', '1979-10-10', 'M', '1.900', '85.000', 'nada consta', 1),
(130, 'Sophia Cobello', 'Médica', 'Rua dos Tamoios', '142', 'Apto 10', 'Centro', 18132587, 'São Roque', 1147845528, 1147121725, 2147483647, 'sophiacobello@gmail.com', '2000-10-10', 'F', '99.999', '51.000', 'nada consta', 1);

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
-- Estrutura da tabela `tb_tipo_combo`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_combo` (
  `cod_tipo_combo` int(3) NOT NULL,
  `tipo_combo` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo_combo`
--

INSERT INTO `tb_tipo_combo` (`cod_tipo_combo`, `tipo_combo`, `cod_status`) VALUES
(1, 'café da manhã', 1),
(2, 'lanche da manhã', 1),
(3, 'almoço', 1),
(4, 'café da tarde', 1),
(5, 'janta', 1),
(6, 'ceia', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cod_usuario` int(3) NOT NULL,
  `nome_apelido` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cod_nivel_acesso` int(3) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cod_usuario`, `nome_apelido`, `login`, `senha`, `cod_nivel_acesso`, `cod_status`) VALUES
(1, 'Bruno', 'bruno', 'bc@2017', 3, 1),
(2, 'Crícia', 'cricia', 'cs@2017', 3, 1),
(3, 'Rogério', 'rogerio', 'rc@2017', 3, 1),
(4, 'Alexandre', 'alexandre', 'aa@2017', 3, 1),
(5, 'Paulo', 'paulo', 'pl@2017', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alimento`
--
ALTER TABLE `tb_alimento`
  ADD PRIMARY KEY (`cod_alimento`),
  ADD KEY `fk_alimento_grupo` (`cod_grupo`),
  ADD KEY `fk_alimento_status` (`cod_status`);

--
-- Indexes for table `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  ADD PRIMARY KEY (`cod_atividade_fisica`),
  ADD KEY `fk_antopometria_dados` (`cod_paciente`);

--
-- Indexes for table `tb_combo`
--
ALTER TABLE `tb_combo`
  ADD PRIMARY KEY (`cod_combo`),
  ADD KEY `fk_combo_tipoCombo` (`cod_tipo_combo`),
  ADD KEY `fk_como_status` (`cod_status`);

--
-- Indexes for table `tb_combo_alimento`
--
ALTER TABLE `tb_combo_alimento`
  ADD PRIMARY KEY (`cod_alimento`,`cod_combo`),
  ADD KEY `fk_alimentoCombo_combo` (`cod_combo`);

--
-- Indexes for table `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  ADD PRIMARY KEY (`cod_consumo_agua`),
  ADD KEY `fk_consumoAgua_status` (`cod_status`);

--
-- Indexes for table `tb_dieta`
--
ALTER TABLE `tb_dieta`
  ADD PRIMARY KEY (`cod_paciente`,`cod_combo`),
  ADD KEY `fk_dieta_combo` (`cod_combo`);

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
  ADD KEY `fk_habitoAlimentar_paciente` (`cod_paciente`);

--
-- Indexes for table `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
  ADD PRIMARY KEY (`cod_historico_paciente`),
  ADD KEY `fk_historicoPaciente_paciente` (`cod_paciente`);

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
  ADD KEY `fk_objetivo_paciente` (`cod_paciente`);

--
-- Indexes for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`cod_paciente`),
  ADD KEY `fk_paciente_status` (`cod_status`);

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
-- Indexes for table `tb_tipo_combo`
--
ALTER TABLE `tb_tipo_combo`
  ADD PRIMARY KEY (`cod_tipo_combo`),
  ADD KEY `fk_tipoCombo_status` (`cod_status`);

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
  MODIFY `cod_alimento` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  MODIFY `cod_atividade_fisica` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_combo`
--
ALTER TABLE `tb_combo`
  MODIFY `cod_combo` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  MODIFY `cod_consumo_agua` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
  MODIFY `cod_habito_alimentar` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
  MODIFY `cod_historico_paciente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  MODIFY `cod_nivel_acesso` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_objetivo`
--
ALTER TABLE `tb_objetivo`
  MODIFY `cod_objetivo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_objetivo_paciente`
--
ALTER TABLE `tb_objetivo_paciente`
  MODIFY `cod_objetivo_paciente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `cod_paciente` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
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
-- AUTO_INCREMENT for table `tb_tipo_combo`
--
ALTER TABLE `tb_tipo_combo`
  MODIFY `cod_tipo_combo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cod_usuario` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_alimento`
--
ALTER TABLE `tb_alimento`
  ADD CONSTRAINT `fk_alimento_grupo` FOREIGN KEY (`cod_grupo`) REFERENCES `tb_grupo` (`cod_grupo`),
  ADD CONSTRAINT `fk_alimento_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  ADD CONSTRAINT `fk_antopometria_dados` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_combo`
--
ALTER TABLE `tb_combo`
  ADD CONSTRAINT `fk_combo_tipoCombo` FOREIGN KEY (`cod_tipo_combo`) REFERENCES `tb_tipo_combo` (`cod_tipo_combo`),
  ADD CONSTRAINT `fk_como_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_combo_alimento`
--
ALTER TABLE `tb_combo_alimento`
  ADD CONSTRAINT `fk_alimentoCombo_alimento` FOREIGN KEY (`cod_alimento`) REFERENCES `tb_alimento` (`cod_alimento`),
  ADD CONSTRAINT `fk_alimentoCombo_combo` FOREIGN KEY (`cod_combo`) REFERENCES `tb_combo` (`cod_combo`);

--
-- Limitadores para a tabela `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  ADD CONSTRAINT `fk_consumoAgua_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_dieta`
--
ALTER TABLE `tb_dieta`
  ADD CONSTRAINT `fk_dieta_combo` FOREIGN KEY (`cod_combo`) REFERENCES `tb_combo` (`cod_combo`),
  ADD CONSTRAINT `fk_dieta_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

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
  ADD CONSTRAINT `fk_habitoAlimentar_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
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
  ADD CONSTRAINT `fk_objetivo_paciente` FOREIGN KEY (`cod_paciente`) REFERENCES `tb_paciente` (`cod_paciente`);

--
-- Limitadores para a tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD CONSTRAINT `fk_paciente_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_tempo`
--
ALTER TABLE `tb_tempo`
  ADD CONSTRAINT `fk_tempo_status` FOREIGN KEY (`cod_status`) REFERENCES `tb_status` (`cod_status`);

--
-- Limitadores para a tabela `tb_tipo_combo`
--
ALTER TABLE `tb_tipo_combo`
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
