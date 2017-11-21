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
    $sqlstring_reeducacoes  = "Select * from tb_reeducacao ";
    $sqlstring_reeducacoes .= "inner join tb_objetivo on tb_reeducacao.cod_objetivo_reeducacao = tb_objetivo.cod_objetivo "; 
    $sqlstring_reeducacoes .= "where reeducacao like '%" . $busca . "%' and tb_reeducacao.cod_status = 1 ";       
    $sqlstring_reeducacoes .= "order by reeducacao "; 
}
else    
{
    $sqlstring_reeducacoes  = "Select * from tb_reeducacao ";
    $sqlstring_reeducacoes .= "inner join tb_objetivo on tb_reeducacao.cod_objetivo_reeducacao = tb_objetivo.cod_objetivo "; 
    $sqlstring_reeducacoes .= "where reeducacao like '%" . $busca . "%' and tb_reeducacao.cod_status = 1 ";       
    $sqlstring_reeducacoes .= "order by reeducacao "; 
}

$info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);
$linhas_reeducacoes = $db->sql_linhas($info_reeducacoes);

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
    
    <!-- inicio - titulo da lista de reeducacoes -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10 padding_top_50">
            <h3><img src="img/icone_reeducacoes_titulo_25.png" align=left class="img-responsive"> REEDUCAÇÕES</h3>            
        </div>
    </div>
    <!-- fim - titulo da lista de reeducacoes -->
    
    
    
    <!-- inicio - painel -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">

        <!--  inicio - busca simples -->
        <div class="row">
          <form name="form_pesquisa" id="form_pesquisa" class="padding_bottom_20 form-inline" style="white-space: nowrap">          
              <input type="text" name="busca" id="busca" class="form-control" style="width:90%;" placeholder="REEDUCAÇÃO">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe as reeducações com nomes contendo o valor digitado na busca"  title="Exibe as reeducações com nomes contendo o valor digitado na busca" onclick="nova_pesquisa('01_lista_alimentos.php?busca=')"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>
              
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe todos as reeducações cadastradas"  title="Exibe todas as reeducações cadastradas"  onclick="nova_pesquisa('01_lista_reeducacoes.php')"> 
                  <span class="glyphicon glyphicon-th-list"></span> 
              </button>
          </form>  
        </div>
        <!--  fim - busca simples -->
          
          
          
        <!--  inicio - cabecalho da tabela - excluir/adicionar/qtde reeducações -->
        <div class="row  padding_bottom_20 padding_left_00">
            <div class="col-md-2">          
                <span class="glyphicon glyphicon-trash fonte_verde_claro"></span> 
                <a href="#" onClick="document.getElementById('formul').submit();"> Excluir Selecionados </a>
            </div>

            <div class="col-md-2">          
                <a href="01_7_cadastro_reeducacao.php" alt="Cadastro de Reeducações" title="Cadastro de Reeducações">
                <span class="glyphicon glyphicon-plus-sign fonte_verde_claro"></span> Nova reeducação
                </a>
            </div>

            <div class="col-md-8 direito">          
                <span class="glyphicon glyphicon-user verde_escuro fonte_verde_claro"></span> 
                <?php 
                    if($linhas_reeducacoes > 1)
                        print $linhas_reeducacoes . " reeducações";
                    else
                        print $linhas_reeducacoes . " reeducação";                
                ?> 
            </div>
        </div>
        <!--  fim - cabecalho da tabela - excluir/adicionar/qtde reeducações -->
          
          
          
        <!--  inicio - tabela para exibição das reeducações -->
        <div class="row table-responsive">
            <form method="post" name="formul" id="formul">
            <table class="table table-responsive table-hover">
                <tr class="fonte_branca">
                <td class="largura_05 fundo_verde_claro"><input type=checkbox name="marcar" id="marcar" onclick="marcar_desmarcar_todos()"></td>
                <td class="largura_45 fundo_verde_claro">Reeducação Alimentar</td>                
                <td class="largura_30 fundo_verde_claro">Principal Objetivo</td>                       
                <td class="largura_15 fundo_verde_claro direito">Calorias Diária</td>                           
                <td class="largura_05  fundo_verde_claro direito"><span class="glyphicon glyphicon-edit fonte_pequena"  alt="Detalhes do Alimento" title="Detalhes do Alimento"></span></td>
                </tr>
                                
                <?php
                if($linhas_reeducacoes > 0)
                {
                    while($dados_reeducacoes=mysql_fetch_array($info_reeducacoes))
                    {
                    ?>

                    <tr>
                    <td><input type=checkbox name="excluir[]" value="<?php print $dados_reeducacoes['cod_reeducacao'] ?>"></input></td>
                    <td class="text-uppercase fonte_pequena">
                        <a href="01_7_alteracao_reeducacao.php?cod_reeducacao=<?php print  base64_encode($dados_reeducacoes['cod_reeducacao']) ?>" alt="Detalhes da Reeducação" title="Detalhes da Reeducação">
                        <?php print $dados_reeducacoes['reeducacao'] ?>
                        </a>
                    </td> 
               
                    <td class="text-uppercase fonte_pequena">
                        <a href="01_7_alteracao_reeducacao.php?cod_reeducacao=<?php print  base64_encode($dados_reeducacoes['cod_reeducacao']) ?>" alt="Detalhes da Reeducação" title="Detalhes da Reeducação">
                        <?php print $dados_reeducacoes['objetivo'] ?>
                        </a>
                    </td>   
                
                
                    <?php
                    //selecionando as refeicoes da reeducacao
                    $sqlstring_reeducacao_refeicoes  = "select * from tb_reeducacao_refeicao ";                    
                    $sqlstring_reeducacao_refeicoes .= "where cod_reeducacao = " . $dados_reeducacoes['cod_reeducacao'];                    
                    $info_reeducacao_refeicoes = $db->sql_query($sqlstring_reeducacao_refeicoes);
                    
                        $caloria_total = 0;
                        while($dados_reeducacao_refeicoes = mysql_fetch_array($info_reeducacao_refeicoes))
                        {
                        //totalizando as calorias diária da reeducacao - para cada reeducacao é somada as calorias
                        $sqlstring_caloria_refeicao  = "select tb_refeicao_alimento.cod_refeicao, tb_refeicao_alimento.qtde_porcoes, tb_alimento.alimento, tb_alimento.peso, tb_alimento.caloria from tb_refeicao_alimento ";
                        $sqlstring_caloria_refeicao .= "inner join tb_alimento on tb_alimento.cod_alimento = tb_refeicao_alimento.cod_alimento ";
                        $sqlstring_caloria_refeicao .= "where cod_refeicao = '" . $dados_reeducacao_refeicoes['cod_refeicao'] . "'";
                        $info_caloria_refeicao = $db->sql_query($sqlstring_caloria_refeicao);
                            
                        //calculando o valor das calorias da reeducação
                        while($dados_calorias_refeicao=mysql_fetch_array($info_caloria_refeicao))
                            {
                            $caloria_total = $caloria_total + $dados_calorias_refeicao['caloria']*$dados_calorias_refeicao['qtde_porcoes'];
                            }
                            
                            
                        }
                        
                        
                    ?>
                
                    <td class="direito fonte_pequena">
                        <a href="01_7_alteracao_reeducacao.php?cod_reeducacao=<?php print  base64_encode($dados_reeducacoes['cod_reeducacao']) ?>" alt="Detalhes da Reeducação" title="Detalhes da Reeducação">
                        <?php print $caloria_total; ?>
                        </a>
                    </td>   
                
                    <td class="direito">
                        <a href="01_7_alteracao_reeducacao.php?cod_reeducacao=<?php print  base64_encode($dados_reeducacoes['cod_reeducacao']) ?>" alt="Detalhes da Reeducação" title="Detalhes da Reeducação">
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
                            <strong><span class="glyphicon glyphicon-info-sign"></span> Nenhuma reeducação</strong> está cadastrada!
                        </div>    
                    </td>
                    </tr>
                    <?php
                }
                ?>
                
            </table>
            </form>
        </div>
        <!--  fim - tabela para exibição das reeducações -->
          
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
            
            
        $sqlstring_reeducacao = "Update tb_reeducacao set cod_status = 2 where cod_reeducacao IN(".implode(',', $arr ).")";
        $info_reeducacao = $db->sql_query($sqlstring_reeducacao);
            
        
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Reeducação";
        $mensagem = "As reeducações foram excluídas com sucesso!";
        $btn_esquerda = "Novo Reeducação";
        $btn_esquerda_destino = "01_7_cadastro_reeducacao.php";
        $btn_direita = "Lista de Reeducações";
        $btn_direita_destino = "01_lista_reeducacoes.php";
        $btn_x = "01_lista_reeducacoes.php";
        }
        else
        {
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Reeducações";
        $mensagem = "Você não selecionou a reeducação que deseja excluir. <br/><strong>Selecione</strong> a reeducação e tente novamente!";
        $btn_esquerda = "Nova Reeducação";
        $btn_esquerda_destino = "01_7_cadastro_reeducacao.php";
        $btn_direita = "Lista de Reeducações";
        $btn_direita_destino = "01_lista_reeducacoes.php";
        $btn_x = "01_lista_reeducacoes.php";
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
