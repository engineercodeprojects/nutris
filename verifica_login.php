<?php
// conexao com o banco de dados
include_once('conexao/connect_db.php');
// instancia do banco de dados
$db = BancoDeDados::getInstance(); 

// acentuação 
mysql_set_charset('utf8');
ini_set('default_charset','UTF-8');

$login = $_POST['login'];
$senha = $_POST['senha'];

$sqlstring_usuario = "Select * from tb_usuario where login = '" . $login . "' and senha = '" . $senha . "'";
$info_usuario  = $db->sql_query($sqlstring_usuario);
$dados_usuario = mysql_fetch_array($info_usuario);
$linhas_usuario = $db->sql_linhas($info_usuario);






if ($linhas_usuario == 1)
    {  
    session_start();
    $_SESSION['logado'] = 1;
    $_SESSION['cod_usuario']  = $dados_usuario['cod_usuario'];
    $_SESSION['nome_apelido'] = $dados_usuario['nome_apelido'];        
    $_SESSION['cod_paciente_selecionado'] = $dados_usuario['cod_usuario'];

    
        if($dados_usuario['cod_nivel_acesso']==1)
            header("location:02_paciente_index.php");	
        else
            header("location:01_lista_pacientes.php");	
    }
    else
    {
    header('Location: index.php');
    }
        
        
    ?>



