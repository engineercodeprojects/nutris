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


// armazena o valor digitado pelo usuário na caixa de busca
$busca = $_GET['busca'];
if(isset($busca))
{
    $sqlstring_paciente_selecionado  = "Select tb_paciente.*, tb_objetivo_paciente.peso_paciente, tb_objetivo_paciente.altura_paciente from tb_paciente ";
    $sqlstring_paciente_selecionado .= "inner join tb_objetivo_paciente on tb_paciente.cod_paciente = tb_objetivo_paciente.cod_paciente "; 
    $sqlstring_paciente_selecionado .= "where nome_paciente like '%" . $busca . "%' and tb_paciente.cod_pacinete  = " . $_SESSION['cod_paciente_selecionado'];       
}
else    
{
    
}

$sqlstring_paciente_selecionado  = "Select tb_paciente.*, tb_objetivo_paciente.peso_paciente, tb_objetivo_paciente.altura_paciente from tb_paciente ";
$sqlstring_paciente_selecionado .= "inner join tb_objetivo_paciente on tb_paciente.cod_paciente = tb_objetivo_paciente.cod_paciente ";
$sqlstring_paciente_selecionado .= "where tb_paciente.cod_paciente  = " . $_SESSION['cod_paciente_selecionado'];

$info_paciente_selecionado = $db->sql_query($sqlstring_paciente_selecionado);
$dados_paciente_selecionado = mysql_fetch_array($info_paciente_selecionado);
$linhas_paciente_selecionado = $db->sql_linhas($info_paciente_selecionado);

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
    

    
<div class="container-fluid" onclick="recua_menu(10)">
    
    
    <!-- inicio - painel consultas -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">
          
          
         <!-- inicio - titulo do formulário -->  
        <div class="row">
            <!-- inicio - painel dados pessoais -->
              <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
                <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #fff; border-left:0px solid #0A4438;">                 
                        <span class="glyphicon glyphicon-list-alt fonte_verde_claro"></span>
                        <span class=" fonte_verde_claro fonte_muito_grande negrito">CONSULTAS</span>                    
                        <br/>
                    <span class="fonte_pequena">                        
                        <a href="01_1_detalhes_paciente.php">Informações do Paciente</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Consultas</span>                        
                    </span> 
                    <br/><br/>
                </div>
               </div>
        </div>
        <!-- fim - titulo da lista de consultas -->
          

        <!--  inicio - consultas -->
        <div class="row">
          <form name="form_pesquisa" id="form_pesquisa" class="padding_bottom_20 form-inline" style="white-space: nowrap">          
              <input type="text" name="busca" id="busca" class="form-control" style="width:90%;" placeholder="DATA DA CONSULTA">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe as consultas com datas iguais ou superior a data digitada na busca"  title="Exibe as consultas com datas iguais ou superior a data digitada na busca" onclick="nova_pesquisa('01_lista_consultas_paciente.php?busca=')"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>
              
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe todas as consultas cadastradas"  title="Exibe todas as consultas cadastradas"  onclick="nova_pesquisa('01_lista_consultas_paciente.php')"> 
                  <span class="glyphicon glyphicon-th-list"></span> 
              </button>
          </form>  
        </div>
        <!--  fim - busca simples -->
          
          
          
        <!--  inicio - cabecalho da tabela - excluir/adicionar/qtde consultas -->
        <div class="row  padding_bottom_20 padding_left_00">
            <div class="col-md-2">          
                <span class="glyphicon glyphicon-trash fonte_verde_claro"></span> 
                <a href="#" onClick="document.getElementById('formul').submit();"> Excluir Selecionadas </a>
            </div>

            <div class="col-md-2">          
                <a href="01_1_cadastro_consulta.php" alt="Cadastro de Consulta" title="Cadastro de Consulta">
                <span class="glyphicon glyphicon-plus-sign fonte_verde_claro"></span> Nova Consulta
                </a>
            </div>

            <div class="col-md-8 direito">          
                <span class="glyphicon glyphicon-user verde_escuro fonte_verde_claro"></span> 
                <?php 
                $sqlstring_consultas_paciente  = "Select * from tb_consulta ";                
                $sqlstring_consultas_paciente .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                $info_consultas_paciente = $db->sql_query($sqlstring_consultas_paciente);
                $linhas_consultas_paciente = $db->sql_linhas($info_consultas_paciente);
                
                    if($linhas_consultas_paciente > 1)
                        print $linhas_consultas_paciente . " consultas";
                    else
                        print $linhas_consultas_paciente . " consulta";                
                ?> 
            </div>
        </div>
        <!--  fim - cabecalho da tabela - excluir/adicionar/qtde consultas -->
          
          
          
        <!--  inicio - tabela para exibição dos dados do paciente -->
        <div class="row table-responsive">
            <form method="post" name="formul" id="formul">
            <table class="table table-responsive table-hover">
                <tr class="fonte_branca">
                <td class="largura_05 fundo_verde_claro"><input type=checkbox name="marcar" id="marcar" onclick="marcar_desmarcar_todos()"></td>
                <td class="largura_10 fundo_verde_claro">Data</td>                
                <td class="largura_25 fundo_verde_claro esquerdo">Programa</td>
                <td class="largura_10 fundo_verde_claro direito">Peso</td>
                <td class="largura_10 fundo_verde_claro direito">IMC</td>                
                <td class="largura_05 fundo_verde_claro centralizado"><span class="glyphicon glyphicon-heart-empty fonte_pequena"  alt="Anamnese" title="Anamnese"></span></td>
                <td class="largura_05  fundo_verde_claro centralizado"><span class="glyphicon glyphicon-th-list fonte_pequena"  alt="Avaliação Nutricional" title="Avaliação Nutricional"></span></td>
                <td class="largura_05  fundo_verde_claro centralizado"><span class="glyphicon glyphicon-screenshot fonte_pequena"  alt="Antropometria" title="Antropometria"></span></td>
                <td class="largura_05  fundo_verde_claro centralizado"><img src="img/icone_reeducacoes_lateral.png"></td>
                </tr>
                                
                <?php
                if($linhas_consultas_paciente > 0)
                {
                    while($dados_consultas_paciente=mysql_fetch_array($info_consultas_paciente))
                    {
                    ?>

                    <tr>
                    <td><input type=checkbox name="excluir[]" value="<?php print $dados_consultas_paciente['cod_consulta'] ?>"></input></td>
                    <td class="text-uppercase">
                        <a href="01_1_detalhes_paciente.php?cod=<?php print  base64_encode($dados_consultas_paciente['cod_consulta']) ?>" alt="Detalhes da Consulta" title="Detalhes da Consulta">
                        <?php print date('d/m/Y', strtotime($dados_consultas_paciente['data_consulta']))  ?>
                        </a>
                    </td>
                
                    <td class="esquerdo text-uppercase">
                        <a href="01_1_detalhes_paciente.php?cod=<?php print  base64_encode($dados_consultas_paciente['cod_consulta']) ?>" alt="Detalhes da Consulta" title="Detalhes da Consulta">
                        <?php 
                        //programa no qual o paciente foi inserido durante a consulta    
                        $sqlstring_programa_paciente   = "select * from tb_programa_paciente ";
                        $sqlstring_programa_paciente  .= "inner join tb_programa on tb_programa.cod_programa = tb_programa_paciente.cod_programa ";
                        $sqlstring_programa_paciente  .= "inner join tb_consulta on tb_consulta.cod_consulta = tb_programa_paciente.cod_consulta ";
                        $sqlstring_programa_paciente  .= "where tb_programa_paciente.cod_consulta = " . $dados_consultas_paciente['cod_consulta'];
                        $sqlstring_programa_paciente  .= " and tb_programa_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                        $info_programa_paciente = $db->sql_query($sqlstring_programa_paciente);
                        $dados_programa_paciente = mysql_fetch_array($info_programa_paciente);
                        
                        print $dados_programa_paciente['programa'];
                        ?>
                        </a>        
                    </td>
                
                    <td class="direito">
                        <a href="01_detalhes_paciente.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Detalhes do Paciente" title="Detalhes do Paciente">
                        <?php
                        //peso do paciente na consulta atual
                        $sqlstring_peso_paciente  = "select * from tb_objetivo_paciente where cod_consulta = " . $dados_consultas_paciente['cod_consulta'];
                        $info_peso_paciente = $db->sql_query($sqlstring_peso_paciente);
                        $dados_peso_paciente = mysql_fetch_array($info_peso_paciente);
                        
                        print $dados_peso_paciente['peso_paciente'];
                        ?>
                        </a>
                    </td>
                
                    <td class="direito">
                        <a href="01_detalhes_paciente.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Detalhes do Paciente" title="Detalhes do Paciente">
                        <script>exibir_imc(<?php print $dados_peso_paciente['peso_paciente']; ?>, <?php print $dados_peso_paciente['altura_paciente']; ?>)</script>
                        </a>
                    </td>
                    
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_anamnese.php?cod_consulta=<?php print base64_encode($dados_consultas_paciente['cod_consulta']) ?>" alt="Anamnese" title="Anamnese">
                        <span class="glyphicon glyphicon-heart-empty fonte_pequena"></span>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_avaliacao.php?cod_consulta=<?php print  base64_encode($dados_consultas_paciente['cod_consulta']) ?>" alt="Avaliação Nutricional" title="Avaliação Nutricional">
                        <span class="glyphicon glyphicon-th-list fonte_pequena"></span>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_antropometria.php?cod_consulta=<?php print  base64_encode($dados_consultas_paciente['cod_consulta']) ?>" alt="Antropometria" title="Antropometria">
                        <span class="glyphicon glyphicon-screenshot fonte_pequena"></span>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_prescricao.php?cod_consulta=<?php print  base64_encode($dados_consultas_paciente['cod_consulta']) ?>" alt="Antropometria" title="Antropometria">
                        <img src="img/icone_reeducacoes_consulta_detalhes.png" alt="Reeducação" title="Reeducação">
                        </a>
                    </td>
                
                    </tr>

                    <?php
                    }        
                }
                else
                {
                    ?>
                    <tr>
                    <td colspan="10">
                        &nbsp;
                    </td>
                    </tr>
            
                    <tr>
                    <td colspan="10" class="fonte_verde_escuro" style="border:0px solid #fff">
                        <div class="alert alert-success" role="alert">
                            <strong><span class="glyphicon glyphicon-info-sign"></span> Nenhum paciente</strong> está cadastrado!
                        </div>    
                    </td>
                    </tr>
                    <?php
                }
                ?>
                
            </table>
            </form>
        </div>
        <!--  fim - tabela para exibição dos dados do paciente -->
          
     </div>
    </div>
    
    
    
</div>
    

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
