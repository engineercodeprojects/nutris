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
    $sqlstring_refeicoes  = "select tb_refeicao.cod_refeicao, tb_refeicao.refeicao, tb_tipo_refeicao.tipo_refeicao,tb_refeicao.cod_status from tb_refeicao ";
    $sqlstring_refeicoes .= "inner join tb_tipo_refeicao on tb_refeicao.cod_tipo_refeicao = tb_tipo_refeicao.cod_tipo_refeicao ";
    $sqlstring_refeicoes .= "where tb_refeicao.cod_status = 1 and refeicao like '%" . $busca . "%' or tipo_refeicao like '%" . $busca . "%'";       
}
else    
{
    $sqlstring_refeicoes  = "select tb_refeicao.cod_refeicao, tb_refeicao.refeicao, tb_tipo_refeicao.tipo_refeicao, tb_refeicao.cod_status from tb_refeicao ";
    $sqlstring_refeicoes .= "inner join tb_tipo_refeicao on tb_refeicao.cod_tipo_refeicao = tb_tipo_refeicao.cod_tipo_refeicao ";
    $sqlstring_refeicoes .= "where tb_refeicao.cod_status = 1";
}

$info_refeicoes = $db->sql_query($sqlstring_refeicoes);
$linhas_refeicoes = $db->sql_linhas($info_refeicoes);

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
  
    
    
<body class="margin_00">

<?php 
    include "includes/menu_nutricionista.php";    
?>     
    

    
<div class="container-fluid">
    
    <!-- inicio - titulo da lista de refeições -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10 padding_top_50">
            <h3><span class="glyphicon glyphicon-grain"></span> REFEIÇÕES</h3>            
        </div>
    </div>
    <!-- fim - titulo da lista de refeições -->
    
    
    
    <!-- inicio - painel refeições -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">

        <!--  inicio - busca simples -->
        <div class="row">
          <form class="padding_bottom_20 form-inline" style="white-space: nowrap">          
              <input type="text" name="busca" id="busca" class="form-control" style="width:90%;" placeholder="REFEIÇÃO">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe as refeições contendo o valor digitado na busca"  title="Exibe as refeições contendo o valor digitado na busca" onclick="nova_pesquisa('01_lista_refeicoes.php?pesquisa=')"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>
              
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe todas as refeições cadastradas"  title="Exibe todas as refeições cadastradas"  onclick="nova_pesquisa('01_lista_refeicoes.php')"> 
                  <span class="glyphicon glyphicon-th-list"></span> 
              </button>
          </form>  
        </div>
        <!--  fim - busca simples -->
          

          
        <!--  inicio - cabecalho da tabela - excluir/adicionar/qtde refeições -->
        <div class="row  padding_bottom_20 padding_left_00 resultado">
            <div class="col-md-2">          
                <span class="glyphicon glyphicon-trash fonte_verde_claro"></span> 
                <a href="#" onClick="document.getElementById('formul').submit();" alt="Exclui as refeições selecionadas" title="Excluir as refeições selecionadas"> Excluir Selecionadas </a>
            </div>

            <div class="col-md-2">          
                <a href="01_2_cadastro_refeicao.php" alt="Cadastro de Refeição" title="Cadastro de Refeição">
                <span class="glyphicon glyphicon-plus-sign fonte_verde_claro"></span> Nova Refeição
                </a>
            </div>

            <div class="col-md-8 direito">          
                <span class="glyphicon glyphicon-user verde_escuro fonte_verde_claro"></span> 
                <?php 
                    if($linhas_refeicoes > 1)
                        print $linhas_refeicoes . " refeição";
                    else
                        print $linhas_refeicoes . " refeições";                
                ?> 
            </div>
        </div>
        <!--  fim - cabecalho da tabela - excluir/adicionar/qtde refeições -->
          
          
          
        <!--  inicio - tabela para exibição da lista de refeições -->
        <div class="row table-responsive">
            <form method="post" name="formul" id="formul">
            <table class="table table-responsive table-hover">
                <tr class="fonte_branca">
                <td class="largura_05 fundo_verde_claro"><input type=checkbox name="marcar" id="marcar" onclick="marcar_desmarcar_todos()"></td>                
                <td class="largura_35 fundo_verde_claro">Refeição</td>                
                <td class="largura_35 fundo_verde_claro">Alimentos</td>
                <td class="largura_10 fundo_verde_claro direito">Peso</td>
                <td class="largura_10 fundo_verde_claro direito">Calorias</td>                
                <td class="largura_05  fundo_verde_claro centralizado"><span class="glyphicon glyphicon-edit fonte_pequena"  alt="Editar Refeição" title="Detalhes da Refeição"></span></td>    

                </tr>
                                
                <?php
                if($linhas_refeicoes > 0)
                {
                    while($dados_refeicoes=mysql_fetch_array($info_refeicoes))
                    {
                    //totalizando peso e calorias   
                    $sqlstring_peso_caloria  = "select tb_refeicao_alimento.cod_refeicao, tb_alimento.alimento, tb_alimento.peso, tb_alimento.caloria, sum(peso) as total_peso, sum(caloria) as total_caloria from tb_refeicao_alimento ";
                    $sqlstring_peso_caloria .= "inner join tb_alimento on tb_alimento.cod_alimento = tb_refeicao_alimento.cod_alimento ";
                    $sqlstring_peso_caloria .= "where cod_refeicao = '" . $dados_refeicoes['cod_refeicao'] . "'";
                    $sqlstring_peso_caloria .= "group by cod_refeicao";
                    
                    $info_peso_caloria = $db->sql_query($sqlstring_peso_caloria);
                    $dados_peso_caloria = mysql_fetch_array($info_peso_caloria);
                        
                    // selecionando os alimentos dessa refeição
                    $sqlstring_alimentos_refeicao  = "select tb_alimento.alimento from tb_refeicao_alimento ";
                    $sqlstring_alimentos_refeicao .= "inner join tb_alimento on tb_alimento.cod_alimento = tb_refeicao_alimento.cod_alimento ";
                    $sqlstring_alimentos_refeicao .= "where cod_refeicao = '" . $dados_refeicoes['cod_refeicao'] . "'";                    
                    
                    $info_alimentos_refeicao = $db->sql_query($sqlstring_alimentos_refeicao); 
                    $linhas_alimentos_refeicoes = $db->sql_linhas($info_alimentos_refeicao);
                    ?>

                    <tr>
                    <td><input type=checkbox name="excluir[]" value="<?php print $dados_refeicoes['cod_refeicao'] ?>"></input></td>                    
                    <td class="text-uppercase"><?php print $dados_refeicoes['tipo_refeicao'] . " - " . $dados_refeicoes['refeicao'] ?></td>                    
                    <td class="text-lowercase fonte_pequena">
                        <?php                         
                        $contador_alimentos_refeicoes = 1;
                        while($dados_alimentos_refeicao=mysql_fetch_array($info_alimentos_refeicao))
                        { 
                            if($contador_alimentos_refeicoes == $linhas_alimentos_refeicoes)
                                print $dados_alimentos_refeicao['alimento'];                        
                            else
                                print $dados_alimentos_refeicao['alimento'] . "<span class='fonte_grande'>,</span> &nbsp; ";                        
                            
                            $contador_alimentos_refeicoes++;
                        }                        
                        ?>
                        
                    </td>
                    <td class="direito"><?php print $dados_peso_caloria['total_peso'] ?></td>                    
                    <td class="direito"><?php print number_format($dados_peso_caloria['total_caloria'],3) ?></td>                    
                    <td class="centralizado">
                        <a href="01_2_alteracao_refeicao.php?cod=<?php print  base64_encode($dados_refeicoes['cod_refeicao']) ?>" alt="Editar Refeição" title="Editar Refeição">
                        <span class="glyphicon glyphicon-edit fonte_pequena"></span>
                        </a>
                    </td>                
                    </tr>

                    <?php
                    }
                    ?>
            </table>
                <?php
                }                                
            else
                {
                    ?>
                    <table class="table table-responsive">          
          
                    <tr>
                    <td colspan="9" style="border:0px solid #fff">
                        &nbsp;
                    </td>
                    </tr>
            
                    <tr>
                    <td colspan="9" class="fonte_verde_escuro" style="border:0px solid #fff">
                        <div class="alert alert-success" role="alert">
                            <strong><span class="glyphicon glyphicon-info-sign"></span> Nenhuma refeição</strong> está cadastrada!
                        </div>    
                    </td>
                    </tr>
                    
                    </table>
                    <?php
                }
            ?>
          
          
            </form>
        </div>
        <!--  fim - tabela para exibição da lista de refeições -->
          
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
    <script src="js/funcoes.js"></script>

<?php
// inicio exclusao de registros selecionados
    if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$arr = filter( $_POST['excluir'] );
        
        if(sizeof($arr) > 0)
        {
            
        $sqlstring_excluir_refeicao = "update tb_refeicao set cod_status = 2 where cod_refeicao IN(".implode(',', $arr ).")";
        $info_excluir_refeicao = $db->sql_query($sqlstring_excluir_refeicao);
        
           
        
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Refeições";
        $mensagem = "As refeições foram excluídas com sucesso!";
        $btn_esquerda = "Nova Refeição";
        $btn_esquerda_destino = "01_2_cadastro_refeicao.php";
        $btn_direita = "Lista de Refeições";
        $btn_direita_destino = "01_lista_refeicoes.php";
        $btn_x = "01_lista_refeicoes.php";
        }
        else
        {
        //preparando modal para informar que o usuário não selecionou nada para a exclusão
        $titulo = "Exclusão de Refeições";
        $mensagem = "Você não selecionou a refeição que deseja excluir. <br/><strong>Selecione</strong> a refeição e tente novamente!";
        $btn_esquerda = "Nova Refeição";
        $btn_esquerda_destino = "01_2_cadastro_refeicao.php";
        $btn_direita = "Lista de Refeições";
        $btn_direita_destino = "01_lista_refeicoes.php";
        $btn_x = "01_lista_refeicoes.php";
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
