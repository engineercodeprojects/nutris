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
$data_acompanhamento = $_POST['data_acompanhamento'];

//selecionando o status da refeição do paciente
$sqlstring_refeicao_atual  = "select * from tb_acompanhamento ";
$sqlstring_refeicao_atual .= "where cod_paciente = '" . $cod_paciente . "' and ";
$sqlstring_refeicao_atual .= "cod_tipo_refeicao = '" . $cod_tipo_refeicao . "' and ";
$sqlstring_refeicao_atual .= "data_acompanhamento = '" . date('Y-d-m', strtotime($data_acompanhamento)) . "'";

$info_refeicao_atual = $db->sql_query($sqlstring_refeicao_atual);
$dados_refeicao_atual = mysql_fetch_array($info_refeicao_atual);

$comeu = $dados_refeicao_atual['status'];

print "Valor inicial de comeu = " . $dados_refeicao_atual['status'] . " ---<br/>";


//invertendo os valores antes de atualizar a tb_dieta
if($comeu == 'estrela_vazia.png') 
    $comeu='estrela_cheia.png';
else
    $comeu='estrela_vazia.png';


$sqlstring_alterar_dieta_paciente  = "Update tb_acompanhamento set ";        
$sqlstring_alterar_dieta_paciente .= "status = '" . $comeu . "' ";
$sqlstring_alterar_dieta_paciente .= "where cod_paciente  = '" . $cod_paciente . "' ";
$sqlstring_alterar_dieta_paciente .= "and cod_tipo_refeicao = '" . $cod_tipo_refeicao . "' ";
$sqlstring_alterar_dieta_paciente .= "and data_acompanhamento = '" . date('Y-d-m', strtotime($data_acompanhamento)) . "'";

$db->string_query($sqlstring_alterar_dieta_paciente); 



print $comeu;
print "<br/>";

print $cod_paciente;
print "<br/>";

print $cod_tipo_refeicao;
print "<br/>";

print date('Y-d-m', strtotime($data_acompanhamento));
print "<br/>";

print "<h2>ATUALIZADO COM SUCESSO</h2>";

?>