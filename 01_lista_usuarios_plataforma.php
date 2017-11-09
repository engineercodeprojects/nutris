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
    $sqlstring_usuarios_plataforma  = "Select * from tb_usuario ";
    $sqlstring_usuarios_plataforma .= "inner join tb_nivel_acesso on tb_usuario.cod_nivel_acesso = tb_nivel_acesso.cod_nivel_acesso "; 
    $sqlstring_usuarios_plataforma .= "where nome_apelido like '%" . $busca . "%' or login like '%" . $busca . "%' and tb_usuario.cod_status = 1 ";       
    $sqlstring_usuarios_plataforma .= "order by login "; 
}
else    
{
    $sqlstring_usuarios_plataforma  = "Select * from tb_usuario ";
    $sqlstring_usuarios_plataforma .= "inner join tb_nivel_acesso on tb_usuario.cod_nivel_acesso = tb_nivel_acesso.cod_nivel_acesso ";     
    $sqlstring_usuarios_plataforma .= "where tb_usuario.cod_status = 1 ";     
    $sqlstring_usuarios_plataforma .= "order by login "; 
}

$info_usuarios_plataforma = $db->sql_query($sqlstring_usuarios_plataforma);
$linhas_usuarios_plataforma = $db->sql_linhas($info_usuarios_plataforma);

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
    
    <!-- inicio - titulo da lista de usuários da plataforma -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10 padding_top_50">
            <h3><span class="fonte_muito_pequena"></span><img src="img/icone_usuarios_titulo_25.png" class="img-responsive padding_right_05" align=left>  USUÁRIOS DA PLATAFORMA</h3>            
        </div>
    </div>
    <!-- fim - titulo da lista de usuarios da plataforma -->
    
    
    
    <!-- inicio - painel -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">

        <!--  inicio - busca simples -->
        <div class="row">
          <form name="form_pesquisa" id="form_pesquisa" class="padding_bottom_20 form-inline" style="white-space: nowrap">          
              <input type="text" name="busca" id="busca" class="form-control" style="width:90%;" placeholder="NOME DO USUÁRIO OU LOGIN">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe os usuários com nomes contendo o valor digitado na busca"  title="Exibe os usuários com nomes contendo o valor digitado na busca" onclick="nova_pesquisa('01_lista_usuarios_plataforma.php?busca=')"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>
              
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe todos os usuários cadastrados"  title="Exibe todos os usuários cadastrados"  onclick="nova_pesquisa('01_lista_usuarios_plataforma.php')"> 
                  <span class="glyphicon glyphicon-th-list"></span> 
              </button>
          </form>  
        </div>
        <!--  fim - busca simples -->
          
          
          
        <!--  inicio - cabecalho da tabela - excluir/adicionar/qtde usuarios da plataforma -->
        <div class="row  padding_bottom_20 padding_left_00">
            <div class="col-md-2">          
                <span class="glyphicon glyphicon-trash fonte_verde_claro"></span> 
                <a href="#" onClick="document.getElementById('formul').submit();"> Excluir Selecionados </a>
            </div>

            <div class="col-md-2">          
                <a href="01_5_cadastro_usuario_plataforma.php" alt="Cadastro de Usuários Plataforma" title="Cadastro de Usuários Plataforma">
                <span class="glyphicon glyphicon-plus-sign fonte_verde_claro"></span> Novo Usuário
                </a>
            </div>

            <div class="col-md-8 direito">          
                <span class="glyphicon glyphicon-user verde_escuro fonte_verde_claro"></span> 
                <?php 
                    if($linhas_usuarios_plataforma > 1)
                        print $linhas_usuarios_plataforma . " usuários";
                    else
                        print $linhas_usuarios_plataforma . " usuário";                
                ?> 
            </div>
        </div>
        <!--  fim - cabecalho da tabela - excluir/adicionar/qtde usuarios da plataforma -->
          
          
          
        <!--  inicio - tabela para exibição dos alimentos -->
        <div class="row table-responsive">
            <form method="post" name="formul" id="formul">
            <table class="table table-responsive table-hover">
                <tr class="fonte_branca">
                <td class="largura_05 fundo_verde_claro"><input type=checkbox name="marcar" id="marcar" onclick="marcar_desmarcar_todos()"></td>
                <td class="largura_50 fundo_verde_claro">Nome Usuário</td>                
                <td class="largura_20 fundo_verde_claro">Login</td>                       
                <td class="largura_20 fundo_verde_claro">Nível</td>                
                <td class="largura_05  fundo_verde_claro centralizado"><span class="glyphicon glyphicon-edit fonte_pequena"  alt="Detalhes do usuário da Plataforma" title="Detalhes do Usuário da Plataforma"></span></td>
                </tr>
                                
                <?php
                if($linhas_usuarios_plataforma > 0)
                {
                    while($dados_usuarios_plataforma=mysql_fetch_array($info_usuarios_plataforma))
                    {
                    ?>

                    <tr>
                    <td><input type=checkbox name="excluir[]" value="<?php print $dados_usuarios_plataforma['cod_usuario'] ?>"></input></td>
                    <td class="text-uppercase fonte_pequena">
                        <a href="01_5_alteracao_usuario_plataforma.php?cod_usuario_plataforma=<?php print  base64_encode($dados_usuarios_plataforma['cod_usuario']) ?>" alt="Detalhes do Usuário Plataforma" title="Detalhes do Usuário Plataforma">
                        <?php print $dados_usuarios_plataforma['login'] ?>
                        </a>
                    </td>                
                
                    <td class="text-lowercase fonte_pequena">
                        <a href="01_5_alteracao_usuario_plataforma.php?cod_usuario_plataforma=<?php print  base64_encode($dados_usuarios_plataforma['cod_usuario']) ?>" alt="Detalhes do Usuário Plataforma" title="Detalhes do Usuário Plataforma">
                        <?php print $dados_usuarios_plataforma['login'] ?>
                        </a>
                    </td>
                
                    <td class="text-uppercase fonte_pequena">
                        <a href="01_5_alteracao_usuario_plataforma.php?cod_usuario_plataforma=<?php print  base64_encode($dados_usuarios_plataforma['cod_usuario']) ?>" alt="Detalhes do Usuário Plataforma" title="Detalhes do Usuário Plataforma">
                        <?php print $dados_usuarios_plataforma['nivel_acesso'] ?>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_5_alteracao_usuario_plataforma.php?cod_usuario_plataforma=<?php print  base64_encode($dados_usuarios_plataforma['cod_usuario']) ?>" alt="Detalhes do Usuário Plataforma" title="Detalhes do Usuário Plataforma">
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
                            <strong><span class="glyphicon glyphicon-info-sign"></span> Nenhum usuário </strong> está cadastrado!
                        </div>    
                    </td>
                    </tr>
                    <?php
                }
                ?>
                
            </table>
            </form>
        </div>
        <!--  fim - tabela para exibição dos usuários -->
          
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
            
            
        $sqlstring_usuarios_plataforma = "Update tb_usuario set cod_status = 2 where cod_usuario IN(".implode(',', $arr ).")";
        $info_usuarios_plataforma = $db->sql_query($sqlstring_usuarios_plataforma);
            
        
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Usuário";
            
        if(sizeof($arr) > 1)
            $mensagem = "O usuário foi excluído com sucesso!";
        else
            $mensagem = "Os usuários foram excluídos com sucesso!";
            
        $btn_esquerda = "Novo Usuário";
        $btn_esquerda_destino = "01_5_cadastro_usuario_plataforma.php";
        $btn_direita = "Lista de Usuários";
        $btn_direita_destino = "01_lista_usuarios_plataforma.php";
        $btn_x = "01_lista_usuarios_plataforma.php";
        }
        else
        {
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Exclusão de Usuários";
        $mensagem = "Você não selecionou o usuário que deseja excluir. <br/><strong>Selecione</strong> o usuário e tente novamente!";
        $btn_esquerda = "Novo Usuário";
        $btn_esquerda_destino = "01_5_cadastro_usuario_plataforma.php";
        $btn_direita = "Lista de Usuários";
        $btn_direita_destino = "01_lista_usuarios_plataforma.php";
        $btn_x = "01_lista_usuarios_plataforma.php";
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
