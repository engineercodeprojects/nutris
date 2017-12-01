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
    
    

<!-- inicio do container fluid -->    
<div class="container-fluid" onclick="recua_menu(10)">
    
    
    <!-- inicio - painel acompanhamento -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">
    
        <!-- inicio - titulo do formulário -->  
        <div class="row">
            <!-- inicio - painel dados pessoais -->
              <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
                <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #fff; border-left:0px solid #0A4438;">                 
                        <span class="glyphicon glyphicon-star-empty fonte_verde_claro"></span>
                        <span class=" fonte_verde_claro fonte_muito_grande negrito">ACOMPANHAMENTO</span>                    
                        <br/><br/>
                </div>
               </div>
        </div>
        <!-- fim - titulo da lista de acompanhamentos -->
          
          
          
        
        <div class="row">
        
            <table class="table table-responsive">
            
                <tr class="fundo_verde_claro fonte_branca">
                <td class="largura_10 centralizado">Status</td>
                <td class="largura_10">Data</td>
                <td class="largura_80">Refeições</td>
                <td class="largura_70">Calorias</td>
                </tr>
            
            
                <?php
                // selecionando o acompanhamento
                $sqlstring_acompanha  = "Select * from tb_acompanhamento where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];    
                $info_acompanha = $db->sql_query($sqlstring_acompanha);
                
                while($dados_acompanha = mysql_fetch_array($info_acompanha))
                {
                    print "<tr>";
                    print "<td><img src='img/estrela_vazia.png' class='img-responsive margin_auto'></td>";                    
                    print "<td>" .  date('d/m/Y', strtotime($dados_acompanha['data_acompanhamento'])) . "</td>";
                    print "</tr>";
                }
                
                
                ?>
                
                
            </table>
            
        </div>
          
          
        </div>
    </div>
    <!-- inicio - painel acompanhamento -->
    
    
    
    
    
    
    
</div>
<!-- inicio do container fluid -->    
    
</body>
</html>