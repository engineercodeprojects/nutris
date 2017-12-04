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



$cod_paciente = $_POST['cod_paciente'];
$cod_tipo_refeicao = $_POST['cod_tipo_refeicao'];
$cod_dia_semana = $_POST['cod_dia_semana'];

//selecionando o status da refeição do paciente
$sqlstring_refeicao_atual  = "select * from tb_dieta ";
$sqlstring_refeicao_atual .= "where cod_paciente = '" . $cod_paciente . "' and ";
$sqlstring_refeicao_atual .= "cod_tipo_refeicao = '" . $cod_tipo_refeicao . "' and ";
$sqlstring_refeicao_atual .= "cod_dia_semana = '" . $cod_dia_semana . "'";

$info_refeicao_atual = $db->sql_query($sqlstring_refeicao_atual);
$dados_refeicao_atual = mysql_fetch_array($info_refeicao_atual);

$comeu = $dados_refeicao_atual['comeu_s_n'];

print "Valor inicial de comeu = " . $dados_refeicao_atual['comeu_s_n'] . "<br/>";


//invertendo os valores antes de atualizar a tb_dieta
if($comeu == 0) 
    $comeu=1;
else
    $comeu=0;


$sqlstring_alterar_dieta_paciente  = "Update tb_dieta set ";        
$sqlstring_alterar_dieta_paciente .= "comeu_s_n = '" . $comeu . "' ";
$sqlstring_alterar_dieta_paciente .= "where cod_paciente  = '" . $cod_paciente . "' ";
$sqlstring_alterar_dieta_paciente .= "and cod_tipo_refeicao = '" . $cod_tipo_refeicao . "' ";
$sqlstring_alterar_dieta_paciente .= "and cod_dia_semana = '" . $cod_dia_semana . "'";

$db->string_query($sqlstring_alterar_dieta_paciente); 



print $comeu;
print "<br/>";

print $cod_paciente;
print "<br/>";

print $cod_tipo_refeicao;
print "<br/>";

print $cod_dia_semana;
print "<br/>";

print "<h2>ATUALIZADO COM SUCESSO</h2>";

?>