<!DOCTYPE html>
<?php 
//inicia sessão
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

//recuperando o paciente selecionado
if(isset($_GET['cod']))
    $_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);


// armazena o valor digitado pelo usuário na caixa de busca
$sqlstring_paciente_selecionado  = "Select * from tb_paciente where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];    


$info_paciente_selecionado = $db->sql_query($sqlstring_paciente_selecionado);
$dados_paciente_selecionado = mysql_fetch_array($info_paciente_selecionado);
$linhas_paciente = $db->sql_linhas($info_paciente_selecionado);

?>    
<html>    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nutris - Plataforma Nutricional</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>    
  <script src="js/funcoes.js"></script>
<body class="margin_00">

<?php 
    include "includes/menu_nutricionista.php";
    include "includes/cabecalho_paciente.php";
?>     
    

<!-- inicio container fluid -->    
<div class="container-fluid" onclick="recua_menu(10)">
    
    
    <!-- inicio - indicadores do paciente -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro  sem_borda col-md-offset-1 col-md-10 centralizado altura_300">
            
            <div class="col-sm-6 col-md-3">
            <div class="thumbnail padding_top_20">
              <img src="img/icone_balanca.png" class='img-responsive margin_auto' alt="Ícone Balança" title="Ícone Balança">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Peso Inicial</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_primeiro_peso  = "Select * from tb_objetivo_paciente ";
                $sqlstring_primeiro_peso .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                $sqlstring_primeiro_peso .= " order by cod_consulta limit 1";
                    
                $info_primeiro_peso = $db->sql_query($sqlstring_primeiro_peso);                
                $dados_primeiro_peso = mysql_fetch_array($info_primeiro_peso);
                  
                print $dados_primeiro_peso['peso_paciente'];
                $p_inicial = $dados_primeiro_peso['peso_paciente'];
                ?>
                </p>                   
              </div>
            </div>
          </div>    
            
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail padding_top_20">
              <img src="img/icone_balanca.png" class='img-responsive margin_auto' alt="Ícone Balança" title="Ícone Balança">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Peso Atual</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_ultimo_peso  = "Select * from tb_objetivo_paciente ";
                $sqlstring_ultimo_peso .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                $sqlstring_ultimo_peso .= " order by cod_consulta desc limit 1";
                    
                $info_ultimo_peso = $db->sql_query($sqlstring_ultimo_peso);                
                $dados_ultimo_peso = mysql_fetch_array($info_ultimo_peso);
                  
                print $dados_ultimo_peso['peso_paciente'];
                $p_atual = $dados_ultimo_peso['peso_paciente'];
                ?>
                </p>                   
              </div>
            </div>
          </div>   
            
            
            
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail padding_top_20">
              <img src="img/icone_balanca.png" class='img-responsive margin_auto' alt="Ícone Balança" title="Ícone Balança">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Quilos Perdidos</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $pesos_perdidos = $p_inicial - $p_atual;
                  
                print number_format($pesos_perdidos,2);
                ?>
                </p>                   
              </div>
            </div>
          </div>   
            
            
            
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail padding_top_20">
              <img src="img/icone_balanca.png" class='img-responsive margin_auto' alt="Ícone Balança" title="Ícone Balança">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Peso Objetivo</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_objetivo_peso  = "Select * from tb_objetivo_paciente ";
                $sqlstring_objetivo_peso .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                $sqlstring_objetivo_peso .= " order by cod_consulta desc limit 1";
                    
                $info_objetivo_peso = $db->sql_query($sqlstring_objetivo_peso);                
                $dados_objetivo_peso = mysql_fetch_array($info_objetivo_peso);
                  
                print $dados_objetivo_peso['objetivo_peso_paciente'];
                ?>
                </p>                   
              </div>
            </div>
          </div>   
            
            
        </div>    
    <!-- fim - indicadores do paciente -->
    
    
    
    
    
    
    
    
    
   <div class="row col-md-offset-1 col-md-10">
       
       
    <?php
    //fotos das ultimas consultas
    $sqlstring_fotos  = "Select * from tb_objetivo_paciente ";
    $sqlstring_fotos .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
    
    $info_fotos = $db->sql_query($sqlstring_fotos);                
    
    while($dados_fotos = mysql_fetch_array($info_fotos))
    {
    ?>
       
   <div class="col-md-3">
     <div class="col-md-12 form-group centralizado borda_cinza altura_350 " id="f_1">
        <img src='fotos/<?php print $dados_fotos['foto_01'] ?>' width=150 height=200>
         <br/>
     </div>
       
     <div class="col-md-12 form-group centralizado borda_inferior_verde_claro fonte_muito_grande fundo_verde_claro fonte_branca" id="f_1">
         <span class='padding_top_20'>
         <?php print date('d/m/Y', strtotime($dados_fotos['data_objetivo_paciente'])) ?>
         </span>
         <br/>                 
     </div>
       
   </div>
       
   <?php
    }
    ?>
       
   </div>
    
    
    
</div>
<!-- fim container fluid -->    
    

 <!-- scripts necessários - js -->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php
// inicio exclusao de registros selecionados
    if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$arr = filter( $_POST['excluir'] );
        
        if(sizeof($arr) > 0)
        {
            
            
        $sqlstring_atividade_fisica = "delete from tb_atividade_fisica where cod_paciente IN(".implode(',', $arr ).")";
        $info_atividade_fisica = $db->sql_query($sqlstring_atividade_fisica);
            
        $sqlstring_objetivo_paciente = "delete from tb_objetivo_paciente where cod_paciente IN(".implode(',', $arr ).")";
        $info_objetivo_paciente = $db->sql_query($sqlstring_objetivo_paciente);
            
        $sqlstring_habitos_alimentares = "delete from tb_habito_alimentar where cod_paciente IN(".implode(',', $arr ).")";
        $info_habitos_alimentares = $db->sql_query($sqlstring_habitos_alimentares);

        $sqlstring_historico_paciente = "delete from tb_historico_paciente where cod_paciente IN(".implode(',', $arr ).")";
        $info_historico_paciente = $db->sql_query($sqlstring_historico_paciente);
            
        $sqlstring_dieta = "delete from tb_dieta where cod_paciente IN(".implode(',', $arr ).")";
        $info_dieta = $db->sql_query($sqlstring_dieta);
            
        $sqlstring_usuario = "delete from tb_usuario where cod_usuario IN(".implode(',', $arr ).")";
        $info_usuario = $db->sql_query($sqlstring_usuario);

        $sqlstring_paciente = "delete from tb_paciente where cod_paciente IN(".implode(',', $arr ).")";
        $info_paciente = $db->sql_query($sqlstring_paciente);
           
        
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Paciente";
        $mensagem = "Os pacientes foram excluídos com sucesso!";
        $btn_esquerda = "Novo Paciente";
        $btn_esquerda_destino = "01_form_cadastro_paciente.php";
        $btn_direita = "Lista de Pacientes";
        $btn_direita_destino = "01_lista_pacientes.php";
        $btn_x = "01_lista_pacientes.php";
        }
        else
        {
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Paciente";
        $mensagem = "Você não selecionou o paciente que deseja excluir. <br/><strong>Selecione</strong> o paciente e tente novamente!";
        $btn_esquerda = "Novo Paciente";
        $btn_esquerda_destino = "01_form_cadastro_paciente.php";
        $btn_direita = "Lista de Pacientes";
        $btn_direita_destino = "01_lista_pacientes.php";
        $btn_x = "01_lista_pacientes.php";
        }

        include_once ("includes/modal_sucesso.php");
        ?>
        <!-- abrindo o modal_sucesso -->
    <script>
        $(window).on('load',function()
        {        
        $('#modal_sucesso').modal('show');
        });
    </script>
        <?php
        
        // header('01_lista_pacientes.php');
	}


function filter( $dados )
	{
        if(isset($dados))
        {
		$arr = Array();
		foreach( $dados AS $dado ) $arr[] = (int)$dado;
		return $arr;
        }
	}
// fim exclusão de registros selecionados
?>

</body>
</html>
