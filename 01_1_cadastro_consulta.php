<?php
//inicia a sessão
session_start();
//include do arquivo que verifica se o usuário passou pelo login
include_once('includes/verifica_logado.php');
//include do arquivo de conexao com o banco de dados
include_once('conexao/connect_db.php');
//instancia do banco de dados
$db = BancoDeDados::getInstance();  

// acentuação
mysql_set_charset('utf8');
ini_set('default_charset','UTF-8');

// inserindo a consulta inicial do paciente
$sqlstring_inserir_consulta = "Insert into tb_consulta (cod_paciente, data_consulta) values ('" . $_SESSION['cod_paciente_selecionado'] . "','" . date('Y-m-d') . "')";
$db->string_query($sqlstring_inserir_consulta); 


// seleciona o ultimo codigo cadastrado na tb_consulta para inserir as informações nas tabelas tb_historico e tb_habito_alimentar
$sqlstring_codigo_consulta = "select cod_consulta from tb_consulta order by cod_consulta desc limit 1";
$info_codigo_consulta = $db->sql_query($sqlstring_codigo_consulta);
$dados_codigo_consulta = mysql_fetch_array($info_codigo_consulta);

$_SESSION['cod_consulta_selecionada']  = $dados_codigo_consulta['cod_consulta'];


// inserindo o paciente na tb_atividade_física
$sqlstring_inserir_atividade_fisica  = "Insert into tb_atividade_fisica (cod_paciente, cod_consulta) ";
$sqlstring_inserir_atividade_fisica .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" . $_SESSION['cod_consulta_selecionada'] . "')";
$db->string_query($sqlstring_inserir_atividade_fisica); 

// inserindo o paciente na tb_historico_paciente
$sqlstring_inserir_historico_paciente  = "Insert into tb_historico_paciente (cod_paciente, cod_consulta, data_historico_paciente) ";
$sqlstring_inserir_historico_paciente .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" . $_SESSION['cod_consulta_selecionada'] . "','" . date('Y-m-d') . "')";
$db->string_query($sqlstring_inserir_historico_paciente); 

// inserindo o paciente na tb_habito_alimentar
$sqlstring_inserir_habito_alimentar  = "Insert into tb_habito_alimentar (cod_paciente, cod_consulta, data_habito_alimentar) ";
$sqlstring_inserir_habito_alimentar .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" .  $_SESSION['cod_consulta_selecionada'] . "','" . date('Y-m-d') . "')";
$db->string_query($sqlstring_inserir_habito_alimentar);

// inserindo o paciente na tb_objetivo_paciente
$sqlstring_inserir_objetivo_paciente  = "Insert into tb_objetivo_paciente (cod_paciente,cod_consulta, data_objetivo_paciente) ";
$sqlstring_inserir_objetivo_paciente .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" .  $_SESSION['cod_consulta_selecionada'] . "','" . date('Y-m-d') . "')";
$db->string_query($sqlstring_inserir_objetivo_paciente); 


// inserindo o paciente na tb_programa_paciente
$sqlstring_inserir_programa_paciente  = "Insert into tb_programa_paciente (cod_paciente, cod_consulta, cod_programa,  data_inicio_programa) ";
$sqlstring_inserir_programa_paciente .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" .  $_SESSION['cod_consulta_selecionada'] . "',2,'" . date('Y-m-d') . "')";
$db->string_query($sqlstring_inserir_programa_paciente); 


//preparando para inserir a dieta de acompanhamento do paciente - selecionando o programa no qual o paciente foi inserido
$sqlstring_ultimo_programa_paciente = "Select * from tb_programa_paciente order by cod_programa desc limit 1";
$info_ultimo_programa_paciente = $db->sql_query($sqlstring_ultimo_programa_paciente);
$dados_ultimo_programa_paciente = mysql_fetch_array($info_ultimo_programa_paciente);


// inicio - inserindo a dieta do paciente inicialmente sem refeições definidas
$contador_dia_semana=1;
while($contador_dia_semana < 8)
{
    $sqlstring_inserir_dieta  = "Insert into tb_programa_paciente_reeducacao (cod_paciente, cod_consulta, cod_dia_semana, cod_programa, cod_reeducacao, data_reeducacao) values ";
    $sqlstring_inserir_dieta .= "(" . $_SESSION['cod_paciente_selecionado'] . "," . $_SESSION['cod_consulta_selecionada'] . "," . $contador_dia_semana . "," . $dados_ultimo_programa_paciente['cod_programa'] . ", 0 ,'" . date('Y-m-d') . "')";
    $db->string_query($sqlstring_inserir_dieta);             

$contador_dia_semana++;
}


header("Location: 01_1_cadastro_paciente_anamnese.php");
?>