-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 179.188.16.85
-- Generation Time: 08-Nov-2017 às 20:10
-- Versão do servidor: 5.6.35-81.0-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nutris`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alimento`
--

CREATE TABLE `tb_alimento` (
  `cod_alimento` int(3) NOT NULL,
  `alimento` varchar(255) NOT NULL,
  `peso` decimal(6,3) NOT NULL,
  `caloria` int(4) NOT NULL,
  `medida_caseira` varchar(100) NOT NULL,
  `cod_grupo` int(3) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_alimento`
--

INSERT INTO `tb_alimento` (`cod_alimento`, `alimento`, `peso`, `caloria`, `medida_caseira`, `cod_grupo`, `cod_status`) VALUES
(1, 'PÃO FRANCÊS COM MIOLO', 50.000, 150, '1 UNIDADE', 1, 1),
(2, 'PÃO DE FORMA/PÃO INTEGRAL', 50.000, 150, '2 FATIAS', 1, 1),
(3, 'PÃO DOCE ', 50.000, 150, '1 UNIDADE', 1, 1),
(4, 'PÃO DE HOT DOG', 50.000, 150, '1 UNIDADE', 1, 1),
(5, 'PÃO DE QUEIJO', 50.000, 150, '2 UNIDADES MÉDIAS', 1, 1),
(6, 'PÃO CASEIRO', 40.000, 150, '1/2 UNIDADE', 1, 1),
(7, 'PÃO DE BATATA', 60.000, 150, '2 UNIDADES MÉDIAS', 1, 1),
(8, 'BISCOITO ÁGUA E SAL OU CREAM CRACKER', 40.000, 150, '5 UNIDADES', 1, 1),
(9, 'BISCOITO CLUB SOCIAL', 28.000, 150, '1 PACOTE INDIVIDUAL', 1, 1),
(10, 'BISCOITO TIPO MARIA E MAISENA', 35.000, 150, '7 UNIDADES', 1, 1),
(11, 'BISCOITO TIPO CASADINHO', 35.000, 150, '7 UNIDADES', 1, 1),
(12, 'BISCOITO TIPO CHAMPAGNE', 35.000, 150, '2 1/2 UNIDADES', 1, 1),
(13, 'BISCOITO RECHEADO', 35.000, 150, '2 UNIDADES ', 1, 1),
(14, 'BISCOITO SALPET', 35.000, 150, '12 UNIDADES', 1, 1),
(15, 'BISCOITO POLVILHO', 35.000, 150, '6 UNIDADES', 1, 1),
(16, 'BOLO DE MILHO ( FUBÁ )', 30.000, 150, '1 FATIA PEQUENA', 1, 1),
(17, 'BOLO DE TRIGO', 30.000, 150, '1 FATIA PEQUENA', 1, 1),
(18, 'TORRADA DE PÃO FRANCÊS', 48.000, 150, '6 UNIDADES', 1, 1),
(19, 'CEREAIS INTEGRAIS ( AVEIA, FARELO DE TRIGO, GRANOLA, SUCRILHOS )', 35.000, 150, '2 COLHERES DE SOPA', 1, 1),
(20, 'FARINHA LÁCTEA', 25.000, 150, '2 COLHERES DE SOPA CHEIAS', 1, 1),
(21, 'EMPADA DE FRANGOEMPADA DE CAMARÃO', 85.000, 150, '3 UNIDADES PEQUENAS', 1, 1),
(22, 'EMPADA DE PALMITO', 60.000, 150, '2 UNIDADES PEQUENAS', 1, 1),
(23, 'ARROZ ( COMUM OU INTEGRAL )', 40.000, 40, '2 COLHERES DE SOPA', 2, 1),
(24, 'FAROFA', 10.000, 40, '1 COLHER DE SOPA RASA', 2, 1),
(25, 'PURÊ DE BATATAS', 40.000, 40, '1 colher de sopa', 2, 1),
(26, 'FARINHA DE MANDIOCA', 11.000, 40, '1 colher de sopa rasa', 2, 1),
(27, 'FARINHA DE MILHO', 11.000, 40, '1 colher de sopa rasa', 2, 1),
(28, 'NHOQUE', 20.000, 40, '1 colher de sopa cheia', 2, 1),
(29, 'BATATA INGLESA COZIDA', 45.000, 40, '1 colher de sopa', 2, 1),
(30, 'BATATA INGLESA FRITA', 30.000, 40, '1 concha pequena', 2, 1),
(31, 'INHAME', 35.000, 40, '1 colher de sopa rasa', 2, 1),
(32, 'MANDIOQUINHA', 40.000, 40, '1 colher de sopa cheia', 2, 1),
(33, 'PANQUECA', 30.000, 40, '1/2 unidades média', 2, 1),
(34, 'MACARRONADA', 30.000, 40, '2 colheres de sopa', 2, 1),
(35, 'MANDIOCA COZIDA', 32.000, 40, '1 pedaço pequeno', 2, 1),
(36, 'POLENTA', 65.000, 40, '3 colheres de sopa ou 2 pedaços médios', 2, 1),
(37, 'ERVILHA SECA COZIDA', 60.000, 55, '3 COLHERES DE SOPA', 3, 1),
(38, 'GRÃO DE BICO COZIDO', 35.000, 55, '2 COLHERES DE SOPA RASAS', 3, 1),
(39, 'LENTILHA COZIDA', 45.000, 55, '2 COLHERES DE SOPA', 3, 1),
(40, 'SOJA COZIDA', 30.000, 55, '2 COLHERES DE SOPA RASAS', 3, 1),
(41, 'FEIJÃO BRANCO COZIDO', 40.000, 55, '1/2 CONCHA', 3, 1),
(42, 'FEIJÃO COZIDO ( 50% GRÃO/ CALDO )', 90.000, 55, '1 CONCHA', 3, 1),
(43, 'ALMONDEGAS', 50.000, 190, '2 UNIDADES MÉDIAS', 4, 1),
(44, 'CARNE MOÍDA', 60.000, 190, '4 COLHERES DE SOPA CHEIAS', 4, 1),
(45, 'BIFE DE BOI FRITO', 65.000, 190, '1 UNIDADE PEQUENA', 4, 1),
(46, 'BIFE DE BOI GRELHADO', 85.000, 190, '1 UNIDADE MÉDIA', 4, 1),
(47, 'BIFE DE FÍGADO', 65.000, 190, '1 UNIDADE MÉDIA', 4, 1),
(48, 'CARNE COZIDA', 70.000, 190, '2 PEDAÇOS MÉDIOS', 4, 1),
(49, 'COSTELA DE BOI ASSADA', 45.000, 190, '1 PEDAÇO MÉDIO', 4, 1),
(50, 'HÁMBURGUER', 73.000, 190, '1 UNIDADE', 4, 1),
(51, 'ASA DE FRANGO ( ASSADA OU COZIDA )', 50.000, 190, '2 UNIDADES GRANDES', 4, 1),
(52, 'COXA DE FRANGO ( ASSADA OU COZIDA )', 80.000, 190, '2 PEDAÇOS GRANDES', 4, 1),
(53, 'MIÚDOS - MOELA', 85.000, 190, '3 UNIDADES GRANDE', 4, 1),
(54, 'CORAÇÃO DE GALINHA', 70.000, 190, '13 UNIDADES GRANDES', 4, 1),
(55, 'NUGGETS DE FRANGO ASSADO', 50.000, 190, '6 UNIDADES', 4, 1),
(56, 'PEITO DE FRANGO DESOSSADO', 90.000, 190, '1/2 UNIDADE OU 1 BIFE GRANDE', 4, 1),
(57, 'PEITO DE PERU SEM PELE', 120.000, 190, '5 FÁTIAS OU 1 BIFE MÉDIO', 4, 1),
(58, 'OMELETE SIMPLES', 75.000, 190, '1 UNIDADES MÉDIA', 4, 1),
(59, 'OVO COZIDO', 85.000, 190, '2 UNIDADES MÉDIAS', 4, 1),
(60, 'LOMBO ASSADO', 70.000, 190, '1 FATIA MÉDIA', 4, 1),
(61, 'COSTELINHA DE PORCO ASSADA', 45.000, 190, '2 PEDAÇOS PEQUENOS', 4, 1),
(62, 'LINGUIÇA FRITA', 34.000, 190, '1 UNIDADE', 4, 1),
(63, 'SALSICHA ENLATADA', 76.000, 190, '4 UNIDADES', 4, 1),
(64, 'SALSICHA', 45.000, 190, '1 1/2 UNIDADE', 4, 1),
(65, 'PRESUNTO COZIDO', 84.000, 190, '3 FÁTIAS', 4, 1),
(66, 'PRESUNTO DE PERU LIGHT', 130.000, 190, '6 FÁTIAS', 4, 1),
(67, 'PEIXE ENSOPADO OU ASSADO', 150.000, 190, '2FILÉS PEQUENOS', 4, 1),
(68, 'SARDINHA EM CONSERVA NO AZEITE', 55.000, 190, '1/2 LATA', 4, 1),
(69, 'ATUM ENLATADO', 240.000, 190, '2 LATAS', 4, 1),
(70, 'ABACAXI', 75.000, 35, '1 FATIA', 5, 1),
(71, 'ACEROLA', 110.000, 35, '9 UNIDADES MÉDIAS', 5, 1),
(72, 'CAJU', 30.000, 35, '1 UNIDADE', 5, 1),
(73, 'CARAMBOLA ', 105.000, 35, '1 UNIDADE', 1, 1),
(74, 'CEREJA', 50.000, 35, '5 UNIDADES', 5, 1),
(75, 'GOIABA BRANCA', 60.000, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(76, 'GOIABA VERMELHA', 80.000, 35, '1/2 UNIDADE GRANDE', 5, 1),
(77, 'GRAVIOLA ', 50.000, 35, '1/2 UNIDADE', 5, 1),
(78, 'KIWI', 60.000, 35, '1 UNIDADE PEQUENA', 5, 1),
(79, 'LARANJA', 75.000, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(80, 'LIMÃO', 110.000, 35, '3 UNIDADES', 5, 1),
(81, 'MELANCIA', 140.000, 35, '1 FATIA PEQUENA', 5, 1),
(82, 'MELÃO', 110.000, 35, '1 FATIA MÉDIA', 5, 1),
(83, 'MORANGO', 120.000, 35, '6 UNIDADES GRANDES', 5, 1),
(84, 'PÊSSEGO', 80.000, 35, '1 UNIDADE GRANDE', 5, 1),
(85, 'MEXERICA', 80.000, 35, '8 GOMOS MÉDIOS ', 5, 1),
(86, 'AMEIXA PRETA ', 30.000, 35, '2 UNIDADES MÉDIAS', 5, 1),
(87, 'AMEIXA VERMELHA', 60.000, 35, '2 UNIDADES MÉDIAS', 5, 1),
(88, 'BANANA PRATA/ BANANA MAÇA', 35.000, 35, '1/2 UNIDADES MÉDIA', 5, 1),
(89, 'CAQUI', 50.000, 35, '1 UNIDADE PEQUENA', 5, 1),
(90, 'JABUTICABA', 65.000, 35, '13 UNIDADES GRANDES', 5, 1),
(91, 'MAÇA', 60.000, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(92, 'MAMÃO PAPAIA', 90.000, 35, '1/4 UNIDADE MÉDIA', 5, 1),
(93, 'MANGA ', 50.000, 35, '1/2 UNIDADE PEQUENA', 5, 1),
(94, 'PÊRA', 60.000, 35, '1/2 UNIDADE MÉDIA', 5, 1),
(95, 'UVA ITÁLIA', 50.000, 35, '6 UNIDADES', 5, 1),
(96, 'UVA RUBI', 45.000, 35, '8 UNIDADES', 5, 1),
(97, 'AMORA', 50.000, 35, '13 UNIDADES MÉDIAS', 5, 1),
(98, 'JACA', 30.000, 35, '2 BAGOS GRANDES', 5, 1),
(99, 'MAMÃO', 110.000, 35, '1 FATIA GRANDE', 5, 1),
(100, 'ABACATE', 50.000, 80, '1/4 UNIDADE PEQUENA OU 1 FATIA PEQUENA', 6, 1),
(101, 'LEITE INTEGRAL', 200.000, 120, '1 XICARA DE CHÁ', 7, 1),
(102, 'LEITE DESNATADO', 300.000, 120, '2 COPOS AMERICANOS', 7, 1),
(103, 'LEITE EM PÓ INTEGRAL', 24.000, 120, '2 COLHERES DE SOPA RASAS', 7, 1),
(104, 'LEITE EM PÓ DESNATADO', 35.000, 120, '4 COLHERES DE SOPA RASAS', 7, 1),
(105, 'IOGURTE', 90.000, 120, '1/2 COPO', 7, 1),
(106, 'IOGURTE LIGHT', 200.000, 120, '1 COPO', 7, 1),
(107, 'YAKULT', 160.000, 120, '2 POTES', 7, 1),
(108, 'COALHADA', 200.000, 120, '1 XICARA DE CHÁ', 7, 1),
(109, 'QUEIJO COTTAGE CREMOSO', 125.000, 120, '4 COLHERES DE SOPA', 7, 1),
(110, 'QUEIJO MINAS FRESCO', 51.000, 120, '2 FATIAS MÉDIAS', 7, 1),
(111, 'QUEIJO PRATO', 30.000, 120, '2 FATIAS MÉDIAS', 7, 1),
(112, 'QUEIJO MUSSARELA', 40.000, 120, '2 FATIAS', 7, 1),
(113, 'REQUEIJÃO CREMOSO', 45.000, 120, '2 COLHERES DE SOPA RASAS', 7, 1),
(114, 'REQUEIJÃO LIGHT', 63.000, 120, '2 COLHERES DE SOPA', 7, 1),
(115, 'RICOTA', 70.000, 120, '2 FATIAS MÉDIAS', 7, 1),
(116, 'ABOBRINHA COZIDA', 70.000, 15, '2 COLHERES DE SOPAS CHEIAS', 8, 1),
(117, 'ACELGA', 70.000, 15, '1 PIRE DE CHÁ', 8, 1),
(118, 'AGRIÃO', 90.000, 15, '1 PRATO DE SOBREMESA', 8, 1),
(119, 'ALFACE ', 100.000, 15, '1 PRATO DE SOBREMESA', 8, 1),
(120, 'ALMERÃO', 65.000, 15, '1 PRATO DE SOBREMESA', 8, 1),
(121, 'BERINJELA ENSOPADA', 50.000, 15, '2 COLHERES DE SOPAS RASAS', 8, 1),
(122, 'BRÓCOLIS COZIDO', 50.000, 15, '1 PIRES DE CHÁ', 8, 1),
(123, 'COUVE REFOGADA', 15.000, 15, '1 COLHER DE SOPA', 8, 1),
(124, 'COUVE-FLOR', 70.000, 15, '3 RAMOS PEQUENOS', 8, 1),
(125, 'ESPINAFRE', 70.000, 15, '1 PIRES DE CHÁ', 8, 1),
(126, 'MOSTARDA', 60.000, 15, '1 PIRES DE CHÁ', 8, 1),
(127, 'PALMITO EM CONSERVA', 80.000, 15, '5 COLHERES DE SOPA', 8, 1),
(128, 'PEPINO CRU COM CASCA', 120.000, 15, '7 COLHERES DE SOPA', 8, 1),
(129, 'PIMENTÃO', 50.000, 15, '2 COLHERES DE SOPA', 8, 1),
(130, 'RABANETE', 90.000, 15, '2 COLHERES DE SOPA', 8, 1),
(131, 'REPOLHO CRU PICADO', 60.000, 15, '1 PIRES DE CHÁ', 8, 1),
(132, 'REPOLHO COZIDO', 70.000, 15, '3 COLHERES DE SOPÁ', 8, 1),
(133, 'TOMATE', 70.000, 15, '5 FATIAS MÉDIAS', 8, 1),
(134, 'ABOBORA MORANGA', 70.000, 15, '2 COLHERES DE SOPA', 8, 1),
(135, 'BETERRABA COZIDA', 35.000, 15, '3 FATIAS MÉDIAS', 8, 1),
(136, 'BETERRABA CRUA RALADA', 35.000, 15, '2 COLHERES DE SOPA', 8, 1),
(137, 'CENOURA COZIDA', 35.000, 15, '2 COLHERES DE SOPA', 8, 1),
(138, 'CENOURA CRUA', 35.000, 15, '3 COLHERES DE SOPA', 8, 1),
(139, 'CHUCHU', 60.000, 15, '4 COLHERES DE SOPA', 8, 1),
(140, 'QUIABO PICADO', 45.000, 15, '1 COLHER DE SOPA CHEIA', 8, 1),
(141, 'VAGEM', 40.000, 15, '1 COLHER DE SOPA', 8, 1),
(142, 'AMÊNDOAS ', 15.000, 80, '5 UNIDADES MÉDIAS', 9, 1),
(143, 'AMENDOIM', 15.000, 80, '1 COLHER DE SOPA RASA', 9, 1),
(144, 'CASTANHA DE CAJU TORRADA', 15.000, 80, '3 UNIDADES MÉDIAS', 9, 1),
(145, 'CASTANHA DO PARÁ', 13.000, 80, '1 COLHER DE SOPA', 9, 1),
(146, 'NOZES', 12.000, 80, '1 COLHER DE SOPA', 9, 1),
(147, 'AZEITE DE OLIVA', 8.000, 75, '1 COLHER DE SOPA', 10, 1),
(148, 'MARGARINA', 10.000, 75, '2 COLHERES DE CHÁ RASAS', 10, 1),
(149, 'MARGARINA LIGHT', 20.000, 75, '4 COLHERES DE CHÁ RASAS', 10, 1),
(150, 'MANTEIGA', 10.000, 75, '2 COLHERES DE CHÁ RASAS', 10, 1),
(151, 'MAIONESE', 13.000, 75, '2 COLHERES DE CHÁ', 10, 1),
(152, 'ÓLEO VEGETAL', 8.000, 75, '1 COLHER DE SOPA', 10, 1),
(153, 'CREME DE LEITE', 30.000, 75, '2 COLHERES DE SOBREMESA', 10, 1),
(154, 'AZEITONAS', 65.000, 75, '11 UNIDADES MÉDIAS', 10, 1),
(155, 'AÇUCAR', 24.000, 100, '1 COLHER DE SOPA CHEIA', 11, 1),
(156, 'MEL', 30.000, 100, ' 2 COLHERES DE SOPA CHEIAS', 11, 1),
(157, 'NESCAU', 22.000, 100, '2 COLHERES DE SOPA RASAS', 11, 1),
(158, 'MELADO DE CANA', 30.000, 100, '2 COLHERES DE SOPA CHEIAS', 11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_atividade_fisica`
--

CREATE TABLE `tb_atividade_fisica` (
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
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_atividade_fisica`
--

INSERT INTO `tb_atividade_fisica` (`cod_atividade_fisica`, `atividade_fisica_sn`, `qual_atividade_1`, `dias_semana_1`, `inicio_1`, `termino_1`, `qual_atividade_2`, `dias_semana_2`, `inicio_2`, `termino_2`, `qual_atividade_3`, `dias_semana_3`, `inicio_3`, `termino_3`, `cod_paciente`) VALUES
(18, '1', 'Natação', ';1;3;5', '07:00:00', '08:00:00', 'Vôlei', ';2;4', '19:00:00', '20:00:00', '', '', '00:00:00', '00:00:00', 18),
(19, '2', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', 19),
(20, '1', 'Natação', ';1;5', '07:00:00', '08:00:00', 'Caminhada', ';1;2;3;4;5', '19:00:00', '20:00:00', '', '', '00:00:00', '00:00:00', 20),
(21, '1', 'Natação', ';1;3', '08:00:00', '09:00:00', 'Caminhada', ';1;2;3;4;5', '18:00:00', '19:00:00', '', '', '00:00:00', '00:00:00', 21),
(22, '1', 'Futebol', ';1;3;5', '10:00:00', '12:00:00', 'Natação', '', '00:00:00', '00:00:00', '', '', '00:00:00', '00:00:00', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consumo_agua`
--

CREATE TABLE `tb_consumo_agua` (
  `cod_consumo_agua` int(3) NOT NULL,
  `consumo_agua` int(5) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_dia_semana` (
  `cod_dia_semana` int(3) NOT NULL,
  `dia_semana` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_dieta` (
  `cod_dieta` int(3) NOT NULL,
  `cod_paciente` int(3) DEFAULT NULL,
  `cod_tipo_refeicao` int(3) DEFAULT NULL,
  `cod_refeicao` int(3) DEFAULT NULL,
  `cod_dia_semana` int(3) DEFAULT NULL,
  `comeu_s_n` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_dieta`
--

INSERT INTO `tb_dieta` (`cod_dieta`, `cod_paciente`, `cod_tipo_refeicao`, `cod_refeicao`, `cod_dia_semana`, `comeu_s_n`) VALUES
(1098, 18, 1, 58, 1, 0),
(1099, 18, 2, 44, 1, 0),
(1100, 18, 3, 36, 1, 0),
(1101, 18, 4, 49, 1, 0),
(1102, 18, 5, 51, 1, 0),
(1103, 18, 6, 40, 1, 0),
(1104, 18, 1, 43, 2, 0),
(1105, 18, 2, 41, 2, 0),
(1106, 18, 3, 36, 2, 0),
(1107, 18, 4, 49, 2, 0),
(1108, 18, 5, 51, 2, 0),
(1109, 18, 6, 40, 2, 0),
(1110, 18, 1, 42, 3, 0),
(1111, 18, 2, 41, 3, 0),
(1112, 18, 3, 36, 3, 0),
(1113, 18, 4, 48, 3, 0),
(1114, 18, 5, 54, 3, 0),
(1115, 18, 6, 40, 3, 0),
(1116, 18, 1, 42, 4, 0),
(1117, 18, 2, 44, 4, 0),
(1118, 18, 3, 36, 4, 0),
(1119, 18, 4, 49, 4, 0),
(1120, 18, 5, 51, 4, 0),
(1121, 18, 6, 52, 4, 0),
(1122, 18, 1, 43, 5, 0),
(1123, 18, 2, 44, 5, 0),
(1124, 18, 3, 37, 5, 0),
(1125, 18, 4, 48, 5, 0),
(1126, 18, 5, 51, 5, 0),
(1127, 18, 6, 52, 5, 0),
(1128, 18, 1, 42, 6, 0),
(1129, 18, 2, 41, 6, 0),
(1130, 18, 3, 37, 6, 0),
(1131, 18, 4, 49, 6, 0),
(1132, 18, 5, 51, 6, 0),
(1133, 18, 6, 52, 6, 0),
(1134, 18, 1, 42, 7, 0),
(1135, 18, 2, 41, 7, 0),
(1136, 18, 3, 36, 7, 0),
(1137, 18, 4, 48, 7, 0),
(1138, 18, 5, 51, 7, 0),
(1139, 18, 6, 40, 7, 0),
(1140, 19, 1, 42, 1, 0),
(1141, 19, 2, 38, 1, 0),
(1142, 19, 3, 47, 1, 0),
(1143, 19, 4, 49, 1, 0),
(1144, 19, 5, 54, 1, 0),
(1145, 19, 6, 40, 1, 0),
(1146, 19, 1, 53, 2, 0),
(1147, 19, 2, 41, 2, 0),
(1148, 19, 3, 36, 2, 0),
(1149, 19, 4, 48, 2, 0),
(1150, 19, 5, 50, 2, 0),
(1151, 19, 6, 40, 2, 0),
(1152, 19, 1, 43, 3, 0),
(1153, 19, 2, 41, 3, 0),
(1154, 19, 3, 35, 3, 0),
(1155, 19, 4, 49, 3, 0),
(1156, 19, 5, 54, 3, 0),
(1157, 19, 6, 52, 3, 0),
(1158, 19, 1, 53, 4, 0),
(1159, 19, 2, 38, 4, 0),
(1160, 19, 3, 36, 4, 0),
(1161, 19, 4, 49, 4, 0),
(1162, 19, 5, 50, 4, 0),
(1163, 19, 6, 40, 4, 0),
(1164, 19, 1, 42, 5, 0),
(1165, 19, 2, 44, 5, 0),
(1166, 19, 3, 35, 5, 0),
(1167, 19, 4, 49, 5, 0),
(1168, 19, 5, 50, 5, 0),
(1169, 19, 6, 40, 5, 0),
(1170, 19, 1, 39, 6, 0),
(1171, 19, 2, 38, 6, 0),
(1172, 19, 3, 35, 6, 0),
(1173, 19, 4, 48, 6, 0),
(1174, 19, 5, 54, 6, 0),
(1175, 19, 6, 40, 6, 0),
(1176, 19, 1, 0, 7, 0),
(1177, 19, 2, 0, 7, 0),
(1178, 19, 3, 0, 7, 0),
(1179, 19, 4, 0, 7, 0),
(1180, 19, 5, 0, 7, 0),
(1181, 19, 6, 0, 7, 0),
(1182, 20, 1, 56, 1, 1),
(1183, 20, 2, 41, 1, 1),
(1184, 20, 3, 35, 1, 1),
(1185, 20, 4, 48, 1, 0),
(1186, 20, 5, 51, 1, 0),
(1187, 20, 6, 40, 1, 0),
(1188, 20, 1, 43, 2, 1),
(1189, 20, 2, 45, 2, 1),
(1190, 20, 3, 37, 2, 1),
(1191, 20, 4, 48, 2, 1),
(1192, 20, 5, 54, 2, 1),
(1193, 20, 6, 52, 2, 1),
(1194, 20, 1, 0, 3, 0),
(1195, 20, 2, 0, 3, 0),
(1196, 20, 3, 0, 3, 0),
(1197, 20, 4, 57, 3, 1),
(1198, 20, 5, 0, 3, 0),
(1199, 20, 6, 0, 3, 0),
(1200, 20, 1, 0, 4, 0),
(1201, 20, 2, 0, 4, 0),
(1202, 20, 3, 0, 4, 0),
(1203, 20, 4, 0, 4, 0),
(1204, 20, 5, 0, 4, 0),
(1205, 20, 6, 0, 4, 0),
(1206, 20, 1, 0, 5, 0),
(1207, 20, 2, 0, 5, 0),
(1208, 20, 3, 0, 5, 0),
(1209, 20, 4, 0, 5, 0),
(1210, 20, 5, 0, 5, 0),
(1211, 20, 6, 0, 5, 0),
(1212, 20, 1, 0, 6, 0),
(1213, 20, 2, 0, 6, 0),
(1214, 20, 3, 0, 6, 0),
(1215, 20, 4, 0, 6, 0),
(1216, 20, 5, 0, 6, 0),
(1217, 20, 6, 0, 6, 0),
(1218, 20, 1, 0, 7, 0),
(1219, 20, 2, 0, 7, 0),
(1220, 20, 3, 0, 7, 0),
(1221, 20, 4, 0, 7, 0),
(1222, 20, 5, 0, 7, 0),
(1223, 20, 6, 0, 7, 0),
(1224, 21, 1, 43, 1, 1),
(1225, 21, 2, 41, 1, 1),
(1226, 21, 3, 36, 1, 0),
(1227, 21, 4, 48, 1, 1),
(1228, 21, 5, 51, 1, 0),
(1229, 21, 6, 40, 1, 0),
(1230, 21, 1, 42, 2, 0),
(1231, 21, 2, 41, 2, 1),
(1232, 21, 3, 36, 2, 1),
(1233, 21, 4, 49, 2, 0),
(1234, 21, 5, 51, 2, 0),
(1235, 21, 6, 52, 2, 0),
(1236, 21, 1, 53, 3, 1),
(1237, 21, 2, 0, 3, 0),
(1238, 21, 3, 0, 3, 0),
(1239, 21, 4, 0, 3, 0),
(1240, 21, 5, 0, 3, 0),
(1241, 21, 6, 0, 3, 0),
(1242, 21, 1, 0, 4, 0),
(1243, 21, 2, 0, 4, 0),
(1244, 21, 3, 0, 4, 0),
(1245, 21, 4, 0, 4, 0),
(1246, 21, 5, 0, 4, 0),
(1247, 21, 6, 0, 4, 0),
(1248, 21, 1, 0, 5, 0),
(1249, 21, 2, 0, 5, 0),
(1250, 21, 3, 0, 5, 0),
(1251, 21, 4, 0, 5, 0),
(1252, 21, 5, 0, 5, 0),
(1253, 21, 6, 0, 5, 0),
(1254, 21, 1, 0, 6, 0),
(1255, 21, 2, 0, 6, 0),
(1256, 21, 3, 0, 6, 0),
(1257, 21, 4, 0, 6, 0),
(1258, 21, 5, 0, 6, 0),
(1259, 21, 6, 0, 6, 0),
(1260, 21, 1, 0, 7, 0),
(1261, 21, 2, 0, 7, 0),
(1262, 21, 3, 0, 7, 0),
(1263, 21, 4, 0, 7, 0),
(1264, 21, 5, 0, 7, 0),
(1265, 21, 6, 0, 7, 0),
(1266, 22, 1, 61, 1, 0),
(1267, 22, 2, 38, 1, 0),
(1268, 22, 3, 37, 1, 0),
(1269, 22, 4, 49, 1, 0),
(1270, 22, 5, 54, 1, 0),
(1271, 22, 6, 52, 1, 0),
(1272, 22, 1, 0, 2, 0),
(1273, 22, 2, 0, 2, 0),
(1274, 22, 3, 0, 2, 0),
(1275, 22, 4, 0, 2, 0),
(1276, 22, 5, 0, 2, 0),
(1277, 22, 6, 0, 2, 0),
(1278, 22, 1, 0, 3, 0),
(1279, 22, 2, 0, 3, 0),
(1280, 22, 3, 0, 3, 0),
(1281, 22, 4, 0, 3, 0),
(1282, 22, 5, 0, 3, 0),
(1283, 22, 6, 0, 3, 0),
(1284, 22, 1, 0, 4, 0),
(1285, 22, 2, 0, 4, 0),
(1286, 22, 3, 0, 4, 0),
(1287, 22, 4, 0, 4, 0),
(1288, 22, 5, 0, 4, 0),
(1289, 22, 6, 0, 4, 0),
(1290, 22, 1, 0, 5, 0),
(1291, 22, 2, 0, 5, 0),
(1292, 22, 3, 0, 5, 0),
(1293, 22, 4, 0, 5, 0),
(1294, 22, 5, 0, 5, 0),
(1295, 22, 6, 0, 5, 0),
(1296, 22, 1, 0, 6, 0),
(1297, 22, 2, 0, 6, 0),
(1298, 22, 3, 0, 6, 0),
(1299, 22, 4, 0, 6, 0),
(1300, 22, 5, 0, 6, 0),
(1301, 22, 6, 0, 6, 0),
(1302, 22, 1, 0, 7, 0),
(1303, 22, 2, 0, 7, 0),
(1304, 22, 3, 0, 7, 0),
(1305, 22, 4, 0, 7, 0),
(1306, 22, 5, 0, 7, 0),
(1307, 22, 6, 0, 7, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_frequencia`
--

CREATE TABLE `tb_frequencia` (
  `cod_frequencia` int(3) NOT NULL,
  `frequencia` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_grupo` (
  `cod_grupo` int(3) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `descricao_grupo` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_habito_alimentar` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_habito_alimentar`
--

INSERT INTO `tb_habito_alimentar` (`cod_habito_alimentar`, `cod_consumo_agua`, `mais_gosta`, `nao_gosta`, `cod_mastigacao`, `pao_integral`, `pao_branco`, `arroz_integral`, `arroz_branco`, `cereais`, `feijao`, `carne_boi`, `frango`, `peixe`, `ovo`, `leite_derivados`, `azeite_oliva`, `castanhas`, `frutas_frescas`, `frutas_secas`, `legumes_verduras`, `doces_biscoitos_chocolates`, `refrigerante`, `fast_food`, `cafe`, `cod_paciente`) VALUES
(18, 5, 'massas', 'peixe', 103, 1, 2, 3, 4, 4, 4, 3, 3, 2, 1, 1, 2, 2, 3, 4, 3, 3, 3, 2, 1, 18),
(19, 3, 'Queijos, salgados, frutas', 'Não gosto de alguns legumes', 101, 2, 2, 2, 3, 2, 2, 2, 0, 2, 3, 3, 2, 2, 3, 3, 2, 1, 2, 2, 2, 19),
(20, 5, 'Massas', 'Peixe', 103, 4, 1, 1, 1, 2, 2, 3, 3, 4, 4, 3, 3, 3, 2, 2, 2, 1, 1, 1, 3, 20),
(21, 4, 'Massas', 'Peixe', 103, 1, 2, 2, 3, 3, 4, 3, 2, 1, 1, 1, 2, 2, 2, 3, 3, 4, 3, 1, 1, 21),
(22, 1, '', '', 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico_paciente`
--

CREATE TABLE `tb_historico_paciente` (
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
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_historico_paciente`
--

INSERT INTO `tb_historico_paciente` (`cod_historico_paciente`, `fumante_sn`, `qtde_cigarros`, `bebida_alcoolica_sn`, `cod_frequencia_bebida_alcoolica`, `incomodo_gastrointestinal_sn`, `qual_incomodo_gastrointestinal`, `quando_sintomas_aparecem`, `medicamento_suplemento_sn`, `qual_medicamento_suplemento`, `medicamento_recomendado`, `doencas_passadas`, `historico_familiar`, `cod_paciente`) VALUES
(18, '1', '10 cigarros', '1', 1, '1', 'Gases', 'Quando come repolho  ', '1', 'Losartana', 'Pressão Alta ', 'nenhuma', 'mãe cardíaca', 18),
(19, '1', '5', '1', 2, '2', '', '  ', '2', '', ' ', 'Arritimia ', 'Hipertensão', 19),
(20, '1', '30 cigarros ou mais', '1', 1, '1', 'Gases', 'Quando come muito repolho  ', '1', 'Losartana', 'Pressão Alta ', 'Nenhuma', 'mãe cardíaca', 20),
(21, '1', '20 cigarros', '1', 1, '1', 'Gases', 'Quando come repolho  ', '1', 'Losartana', 'Pressão Alta ', 'Nenhuma', 'mãe cardíaca', 21),
(22, '1', '', '1', 1, '1', '', '  ', '1', '', ' ', '', '', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nivel_acesso`
--

CREATE TABLE `tb_nivel_acesso` (
  `cod_nivel_acesso` int(3) NOT NULL,
  `nivel_acesso` varchar(30) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_objetivo` (
  `cod_objetivo` int(3) NOT NULL,
  `objetivo` varchar(60) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_objetivo_paciente` (
  `cod_objetivo_paciente` int(3) NOT NULL,
  `cod_objetivo_programa` int(3) DEFAULT NULL,
  `cod_tempo_programa` int(3) DEFAULT NULL,
  `peso` decimal(6,3) DEFAULT NULL,
  `altura` int(3) DEFAULT NULL,
  `abdome` decimal(6,3) DEFAULT NULL,
  `quadril` decimal(6,3) DEFAULT NULL,
  `foto_01` varchar(100) DEFAULT 'avatar.png',
  `foto_02` varchar(100) DEFAULT 'avatar.png',
  `foto_03` varchar(100) DEFAULT 'avatar.png',
  `foto_04` varchar(100) DEFAULT 'avatar.png',
  `cod_paciente` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_objetivo_paciente`
--

INSERT INTO `tb_objetivo_paciente` (`cod_objetivo_paciente`, `cod_objetivo_programa`, `cod_tempo_programa`, `peso`, `altura`, `abdome`, `quadril`, `foto_01`, `foto_02`, `foto_03`, `foto_04`, `cod_paciente`) VALUES
(18, 1, 10, 90.000, 177, 105.000, 90.000, 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 18),
(19, 2, 10, 70.000, 164, 20.000, 50.000, 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 19),
(20, 1, 10, 110.000, 188, 105.000, 90.000, '20_1_bebe_1.jpg', '20_2_bebe_2.jpg', 'avatar.png', 'avatar.png', 20),
(21, 1, 10, 100.000, 180, 105.000, 90.000, '21_1_bebe_1.jpg', '21_2_bebe_2.jpg', '21_3_bebe_4.jpg', '21_4_bebe_5.jpg', 21),
(22, 1, 10, 80.000, 1, 120.000, 80.000, 'avatar.png', 'avatar.png', 'avatar.png', 'avatar.png', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE `tb_paciente` (
  `cod_paciente` int(3) NOT NULL,
  `nome_paciente` varchar(100) NOT NULL,
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
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`cod_paciente`, `nome_paciente`, `profissao`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `telefone_residencial`, `telefone_comercial`, `celular`, `email`, `data_nascimento`, `sexo`, `altura`, `peso`, `outros`, `cod_status`) VALUES
(18, 'Maria Clara', 'Vendedora', 'Rua das Rosas', '159', 'Apto 14', 'Centro', 18132589, 'São Roque', 1147121725, 1147845528, 2147483647, 'maria_clara@gmail.com', '1985-12-10', 'F', 0.000, 0.000, 'nada consta', 1),
(19, 'Juliana Barbosa de Oliveira ', 'Analista de Sistemas', 'Rua Benedito Galdino de Barros', '200', '', 'Laranjeiras', 18076220, 'Sorocaba', 1530335566, 0, 2147483647, 'ricardo712@gmail.com', '1969-12-31', 'F', 0.000, 0.000, '', 1),
(20, 'João da Silva', 'Pedreiro', 'Rua da Construção', '12', 'Apto 12', 'Centro', 18132574, 'São Roque', 1147121478, 1147845222, 2147483647, 'joao_silva@gmail.com', '1969-10-10', 'M', 0.000, 0.000, 'nada consta', 1),
(21, 'Maria do Carmo', 'Vendedora', 'Rua das Flores', '12', 'Apto 12', 'Centro', 18123555, 'São Roque', 1147121725, 1147845236, 2147483647, 'maria_carmo@gmail.com', '1985-10-10', 'F', 0.000, 0.000, 'nada consta', 1),
(22, 'Ze', 'Vendedor', 'Rua', '10', '', 'X', 1800000, 'Soro', 0, 0, 0, 'ze@gmail.com', '1969-12-31', 'F', 0.000, 0.000, '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_refeicao`
--

CREATE TABLE `tb_refeicao` (
  `cod_refeicao` int(3) NOT NULL,
  `refeicao` varchar(30) NOT NULL,
  `cod_tipo_refeicao` int(3) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_refeicao`
--

INSERT INTO `tb_refeicao` (`cod_refeicao`, `refeicao`, `cod_tipo_refeicao`, `cod_status`) VALUES
(35, 'a moda da casa', 3, 1),
(36, 'Almoço Final de Semana I', 3, 1),
(37, 'Almoço Massas I', 3, 1),
(38, 'Lanche Light I', 2, 1),
(39, 'Teste', 1, 2),
(40, 'Mineiro', 6, 1),
(41, 'Mega light I', 2, 1),
(42, 'LIGHT I - cereais com leite', 1, 1),
(43, 'FRUTAS i - banana com mel', 1, 1),
(44, 'fruta - pêra', 2, 1),
(45, 'fruta - melancia', 2, 1),
(46, 'vegano', 3, 1),
(47, 'bahiano', 3, 1),
(48, 'torradas', 4, 1),
(49, 'cereais', 4, 1),
(50, 'COSTELA', 5, 1),
(51, 'MACARRONADA', 5, 1),
(52, 'BISCOITO', 6, 1),
(53, 'saudável', 1, 1),
(54, 'sabores da natureza', 5, 1),
(55, 'gostosão', 1, 2),
(56, 'padrão', 1, 1),
(57, 'cafezão', 4, 1),
(58, 'Café Novo', 1, 1),
(59, 'novasso', 1, 1),
(60, 'Mais um cafeé', 1, 1),
(61, 'CF TOP', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_refeicao_alimento`
--

CREATE TABLE `tb_refeicao_alimento` (
  `cod_alimento` int(3) NOT NULL,
  `cod_refeicao` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_refeicao_alimento`
--

INSERT INTO `tb_refeicao_alimento` (`cod_alimento`, `cod_refeicao`) VALUES
(19, 35),
(83, 35),
(102, 35),
(19, 36),
(28, 36),
(79, 36),
(2, 37),
(5, 37),
(9, 37),
(14, 37),
(17, 37),
(33, 37),
(18, 38),
(19, 38),
(102, 38),
(110, 38),
(88, 39),
(109, 39),
(112, 39),
(114, 39),
(1, 40),
(19, 40),
(98, 40),
(94, 41),
(19, 42),
(102, 42),
(88, 43),
(92, 43),
(156, 43),
(94, 44),
(81, 45),
(23, 46),
(56, 46),
(128, 46),
(23, 47),
(26, 47),
(44, 47),
(18, 48),
(102, 48),
(110, 48),
(19, 49),
(23, 50),
(49, 50),
(119, 50),
(34, 51),
(8, 52),
(114, 52),
(2, 53),
(101, 53),
(110, 54),
(119, 54),
(133, 54),
(19, 55),
(102, 55),
(2, 56),
(102, 56),
(5, 57),
(5, 58),
(5, 59),
(18, 60),
(110, 60),
(3, 61),
(4, 61),
(5, 61);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE `tb_status` (
  `cod_status` int(3) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_tempo` (
  `cod_tempo` int(3) NOT NULL,
  `tempo` varchar(100) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `tb_tipo_refeicao` (
  `cod_tipo_refeicao` int(3) NOT NULL,
  `tipo_refeicao` varchar(50) NOT NULL,
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cod_usuario` int(3) NOT NULL,
  `nome_apelido` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cod_nivel_acesso` int(3) NOT NULL DEFAULT '1',
  `cod_status` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cod_usuario`, `nome_apelido`, `login`, `senha`, `cod_nivel_acesso`, `cod_status`) VALUES
(1, 'Bruno', 'bruno', 'bc@2017', 3, 1),
(2, 'Crícia', 'cricia', 'cs@2017', 3, 1),
(3, 'Rogério', 'rogerio', 'rc@2017', 3, 1),
(4, 'Alexandre', 'alexandre', 'aa@2017', 3, 1),
(5, 'Paulo', 'paulo', 'pl@2017', 3, 1),
(7, 'Alessandra', 'alessandra_cobello', 'al@2017', 1, 1),
(18, 'Maria', 'maria_clara', 'nutris@2017', 1, 1),
(19, 'Juliana', 'ricardo712', 'nutris@2017', 1, 1),
(20, 'João', 'joao_silva', 'nutris@2017', 1, 1),
(21, 'Maria', 'maria_carmo', 'nutris@2017', 1, 1),
(22, 'Ze', '', 'nutris@2017', 1, 1);

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
  MODIFY `cod_alimento` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `tb_atividade_fisica`
--
ALTER TABLE `tb_atividade_fisica`
  MODIFY `cod_atividade_fisica` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_consumo_agua`
--
ALTER TABLE `tb_consumo_agua`
  MODIFY `cod_consumo_agua` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_dia_semana`
--
ALTER TABLE `tb_dia_semana`
  MODIFY `cod_dia_semana` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_dieta`
--
ALTER TABLE `tb_dieta`
  MODIFY `cod_dieta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1308;
--
-- AUTO_INCREMENT for table `tb_frequencia`
--
ALTER TABLE `tb_frequencia`
  MODIFY `cod_frequencia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `tb_grupo`
--
ALTER TABLE `tb_grupo`
  MODIFY `cod_grupo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_habito_alimentar`
--
ALTER TABLE `tb_habito_alimentar`
  MODIFY `cod_habito_alimentar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_historico_paciente`
--
ALTER TABLE `tb_historico_paciente`
  MODIFY `cod_historico_paciente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  MODIFY `cod_nivel_acesso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_objetivo`
--
ALTER TABLE `tb_objetivo`
  MODIFY `cod_objetivo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_objetivo_paciente`
--
ALTER TABLE `tb_objetivo_paciente`
  MODIFY `cod_objetivo_paciente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `cod_paciente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_refeicao`
--
ALTER TABLE `tb_refeicao`
  MODIFY `cod_refeicao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `cod_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_tempo`
--
ALTER TABLE `tb_tempo`
  MODIFY `cod_tempo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_tipo_refeicao`
--
ALTER TABLE `tb_tipo_refeicao`
  MODIFY `cod_tipo_refeicao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cod_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
