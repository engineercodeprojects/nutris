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
    $sqlstring_alimentos  = "Select * from tb_alimento ";
    $sqlstring_alimentos .= "inner join tb_grupo on tb_alimento.cod_grupo = tb_grupo.cod_grupo "; 
    $sqlstring_alimentos .= "where alimento like '%" . $busca . "%' and tb_alimento.cod_status = 1 ";       
    $sqlstring_alimentos .= "order by alimento "; 
}
else    
{
    $sqlstring_alimentos  = "Select * from tb_alimento ";
    $sqlstring_alimentos .= "inner join tb_grupo on tb_alimento.cod_grupo = tb_grupo.cod_grupo "; 
    $sqlstring_alimentos .= "where tb_alimento.cod_status = 1 "; 
    $sqlstring_alimentos .= "order by alimento "; 
}

$info_alimentos = $db->sql_query($sqlstring_alimentos);
$linhas_alimentos = $db->sql_linhas($info_alimentos);

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
    
?>     
    

    
<div class="container-fluid" onclick="recua_menu(10)">
    
    <!-- inicio - titulo da lista de alimentos -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10 padding_top_50">
            <h3><span class="glyphicon glyphicon-apple fonte_muito_pequena"></span> ALIMENTOS</h3>            
        </div>
    </div>
    <!-- fim - titulo da lista de alimentos -->
    
    
    
    <!-- inicio - painel -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">

        <!--  inicio - busca simples -->
        <div class="row">
          <form name="form_pesquisa" id="form_pesquisa" class="padding_bottom_20 form-inline" style="white-space: nowrap">          
              <input type="text" name="busca" id="busca" class="form-control" style="width:90%;" placeholder="ALIMENTO">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe os alimentos com nomes contendo o valor digitado na busca"  title="Exibe os alimentos com nomes contendo o valor digitado na busca" onclick="nova_pesquisa('01_lista_alimentos.php?busca=')"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>
              
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe todos os alimentos cadastrados"  title="Exibe todos os alimentos cadastrados"  onclick="nova_pesquisa('01_lista_alimentos.php')"> 
                  <span class="glyphicon glyphicon-th-list"></span> 
              </button>
          </form>  
        </div>
        <!--  fim - busca simples -->
          
          
          
        <!--  inicio - cabecalho da tabela - excluir/adicionar/qtde alimentos -->
        <div class="row  padding_bottom_20 padding_left_00">
            <div class="col-md-2">          
                <span class="glyphicon glyphicon-trash fonte_verde_claro"></span> 
                <a href="#" onClick="document.getElementById('formul').submit();"> Excluir Selecionados </a>
            </div>

            <div class="col-md-2">          
                <a href="01_4_cadastro_alimento.php" alt="Cadastro de Alimentos" title="Cadastro de Alimentos">
                <span class="glyphicon glyphicon-plus-sign fonte_verde_claro"></span> Novo Alimento
                </a>
            </div>

            <div class="col-md-8 direito">          
                <span class="glyphicon glyphicon-user verde_escuro fonte_verde_claro"></span> 
                <?php 
                    if($linhas_alimentos > 1)
                        print $linhas_alimentos . " alimentos";
                    else
                        print $linhas_alimentos . " alimento";                
                ?> 
            </div>
        </div>
        <!--  fim - cabecalho da tabela - excluir/adicionar/qtde alimentos -->
          
          
          
        <!--  inicio - tabela para exibição dos alimentos -->
        <div class="row table-responsive">
            <form method="post" name="formul" id="formul">
            <table class="table table-responsive table-hover">
                <tr class="fonte_branca">
                <td class="largura_05 fundo_verde_claro"><input type=checkbox name="marcar" id="marcar" onclick="marcar_desmarcar_todos()"></td>
                <td class="largura_50 fundo_verde_claro">Alimento</td>                
                <td class="largura_30 fundo_verde_claro">Medida Caseira</td>                       
                <td class="largura_05 fundo_verde_claro centralizado">Peso</td>
                <td class="largura_05 fundo_verde_claro centralizado">Caloria</td>              
                <td class="largura_05  fundo_verde_claro centralizado"><span class="glyphicon glyphicon-edit fonte_pequena"  alt="Detalhes do Alimento" title="Detalhes do Alimento"></span></td>
                </tr>
                                
                <?php
                if($linhas_alimentos > 0)
                {
                    while($dados_alimentos=mysql_fetch_array($info_alimentos))
                    {
                    ?>

                    <tr>
                    <td><input type=checkbox name="excluir[]" value="<?php print $dados_alimentos['cod_alimento'] ?>"></input></td>
                    <td class="text-uppercase fonte_pequena">
                        <a href="01_4_alteracao_alimento.php?cod_alimento=<?php print  base64_encode($dados_alimentos['cod_alimento']) ?>" alt="Detalhes do Alimento" title="Detalhes do Alimento">
                        <?php print $dados_alimentos['alimento'] ?>
                        </a>
                    </td>                
                
                    <td class="text-uppercase fonte_pequena">
                        <a href="01_4_alteracao_alimento.php?cod_alimento=<?php print  base64_encode($dados_alimentos['cod_alimento']) ?>" alt="Detalhes do Alimento" title="Detalhes do Alimento">
                        <?php print $dados_alimentos['medida_caseira'] ?>
                        </a>
                    </td>   
                
                    <td class="direito fonte_pequena">
                        <a href="01_4_alteracao_alimento.php?cod_alimento=<?php print  base64_encode($dados_alimentos['cod_alimento']) ?>" alt="Detalhes do Alimento" title="Detalhes do Alimento">
                        <?php print number_format($dados_alimentos['peso'], 2) ?>
                        </a>
                    </td>   
                
                    <td class="direito fonte_pequena">
                        <a href="01_4_alteracao_alimento.php?cod_alimento=<?php print  base64_encode($dados_alimentos['cod_alimento']) ?>" alt="Detalhes do Alimento" title="Detalhes do Alimento">
                        <?php print number_format($dados_alimentos['caloria'], 2) ?>
                        </a>
                    </td>   
                
                    <td class="centralizado">
                        <a href="01_4_alteracao_alimento.php?cod_alimento=<?php print  base64_encode($dados_alimentos['cod_alimento']) ?>" alt="Detalhes do Alimento" title="Detalhes do Alimento">
                        <span class="glyphicon glyphicon-edit fonte_pequena"></span>
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
                            <strong><span class="glyphicon glyphicon-info-sign"></span> Nenhum alimento</strong> está cadastrado!
                        </div>    
                    </td>
                    </tr>
                    <?php
                }
                ?>
                
            </table>
            </form>
        </div>
        <!--  fim - tabela para exibição dos alimentos -->
          
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
            
            
        $sqlstring_alimentos = "Update tb_alimento set cod_status = 2 where cod_alimento IN(".implode(',', $arr ).")";
        $info_alimentos = $db->sql_query($sqlstring_alimentos);
            
        
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Alimento";
        $mensagem = "Os alimentos foram excluídos com sucesso!";
        $btn_esquerda = "Novo Alimento";
        $btn_esquerda_destino = "01_4_cadastro_alimentos.php";
        $btn_direita = "Lista de Alimentos";
        $btn_direita_destino = "01_lista_alimentos.php";
        $btn_x = "01_lista_alimentos.php";
        }
        else
        {
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Alimentos";
        $mensagem = "Você não selecionou o alimento que deseja excluir. <br/><strong>Selecione</strong> o alimento e tente novamente!";
        $btn_esquerda = "Novo Alimento";
        $btn_esquerda_destino = "01_4_cadastro_alimentos.php";
        $btn_direita = "Lista de Alimentos";
        $btn_direita_destino = "01_lista_alimentos.php";
        $btn_x = "01_lista_alimentos.php";
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
