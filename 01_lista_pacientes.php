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
    $sqlstring_pacientes  = "Select * from tb_paciente ";
    $sqlstring_pacientes .= "where nome_paciente like '%" . $busca . "%' and cod_status = 1";       
}
else    
{

    $sqlstring_pacientes  = "Select * from tb_paciente ";
    $sqlstring_pacientes .= "where cod_status = 1 ";
}

$info_pacientes = $db->sql_query($sqlstring_pacientes);
$linhas_pacientes = $db->sql_linhas($info_pacientes);

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
    
    <!-- inicio - titulo da lista de pacientes -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10 padding_top_50">
            <h3><span class="glyphicon glyphicon-user fonte_muito_pequena"></span> PACIENTES</h3>            
        </div>
    </div>
    <!-- fim - titulo da lista de pacientes -->
    
    
    
    <!-- inicio - painel dados pessoais -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">

        <!--  inicio - busca simples -->
        <div class="row">
          <form name="form_pesquisa" id="form_pesquisa" class="padding_bottom_20 form-inline" style="white-space: nowrap">          
              <input type="text" name="busca" id="busca" class="form-control" style="width:90%;" placeholder="NOME DO PACIENTE">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe os pacientes com nomes contendo o valor digitado na busca"  title="Exibe os pacientes com nomes contendo o valor digitado na busca" onclick="nova_pesquisa('01_lista_pacientes.php?busca=')"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>
              
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe todos os pacientes cadastrados"  title="Exibe todos os pacientes cadastrados"  onclick="nova_pesquisa('01_lista_pacientes.php')"> 
                  <span class="glyphicon glyphicon-th-list"></span> 
              </button>
          </form>  
        </div>
        <!--  fim - busca simples -->
          
          
          
        <!--  inicio - cabecalho da tabela - excluir/adicionar/qtde pacientes -->
        <div class="row  padding_bottom_20 padding_left_00">
            <div class="col-md-2">          
                <span class="glyphicon glyphicon-trash fonte_verde_claro"></span> 
                <a href="#" onClick="document.getElementById('formul').submit();"> Excluir Selecionados </a>
            </div>

            <div class="col-md-2">          
                <a href="01_1_cadastro_paciente_dados_pessoais.php" alt="Cadastro de Paciente" title="Cadastro de Paciente">
                <span class="glyphicon glyphicon-plus-sign fonte_verde_claro"></span> Novo Paciente
                </a>
            </div>

            <div class="col-md-8 direito">          
                <span class="glyphicon glyphicon-user verde_escuro fonte_verde_claro"></span> 
                <?php 
                    if($linhas_pacientes > 1)
                        print $linhas_pacientes . " pacientes";
                    else
                        print $linhas_pacientes . " paciente";                
                ?> 
            </div>
        </div>
        <!--  fim - cabecalho da tabela - excluir/adicionar/qtde pacientes -->
          
          
          
        <!--  inicio - tabela para exibição dos dados do paciente -->
        <div class="row table-responsive">
            <form method="post" name="formul" id="formul">
            <table class="table table-responsive table-hover">
                <tr class="fonte_branca">
                <td class="largura_05 fundo_verde_claro"><input type=checkbox name="marcar" id="marcar" onclick="marcar_desmarcar_todos()"></td>
                <td class="largura_30 fundo_verde_claro">Paciente</td> 
                <td class="largura_20 fundo_verde_claro centralizado">Programa <br/> de Treinamento</td> 
                <td class="largura_10 fundo_verde_claro centralizado">Início <br/> do Tratamento</td> 
                <td class="largura_10 fundo_verde_claro centralizado">Última <br/> Consulta</td> 
                <td class="largura_10 fundo_verde_claro centralizado">Objetivo <br/> de Peso</td> 
                <td class="largura_10 fundo_verde_claro centralizado">Último <br/> Peso</td>
                <td class="largura_10 fundo_verde_claro centralizado">Último <br/> IMC</td>                
                </tr>
                                
                <?php
                if($linhas_pacientes > 0)
                {
                    while($dados_pacientes=mysql_fetch_array($info_pacientes))
                    {
                    ?>

                    <tr>
                    <td><input type=checkbox name="excluir[]" value="<?php print $dados_pacientes['cod_paciente'] ?>"></input></td>
                    <td class="text-uppercase">
                        <a href="01_1_detalhes_paciente.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Detalhes do Paciente" title="Detalhes do Paciente">
                        <?php print $dados_pacientes['nome_paciente'] ?>
                        </a>
                    </td>
                
                    <td class="centralizado text-uppercase">
                        <a href="01_detalhes_paciente.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Detalhes do Paciente" title="Detalhes do Paciente">
                        <?php
                        //ultimo programa que fez parte
                        $sqlstring_ultimo_programa  = "Select * from tb_programa_paciente ";
                        $sqlstring_ultimo_programa .= "inner join tb_programa on tb_programa_paciente.cod_programa = tb_programa.cod_programa ";
                        $sqlstring_ultimo_programa .= "where cod_paciente = " .$dados_pacientes['cod_paciente'];
                        $sqlstring_ultimo_programa .= " order by cod_consulta desc limit 1";
                        $info_ultimo_programa = $db->sql_query($sqlstring_ultimo_programa);
                        $dados_ultimo_programa=mysql_fetch_array($info_ultimo_programa);
                        
                        print $dados_ultimo_programa['programa'];
                        ?>
                        </a>        
                    </td>
                
                    <td class="centralizado">
                        <a href="01_detalhes_paciente.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Detalhes do Paciente" title="Detalhes do Paciente">
                        <?php print date('d/m/Y', strtotime($dados_ultimo_programa['data_inicio_programa'])) ?>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_detalhes_paciente.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Detalhes do Paciente" title="Detalhes do Paciente">
                            <?php
                            //ultima consulta                            
                            $sqlstring_ultima_consulta  = "Select * from tb_consulta ";                            
                            $sqlstring_ultima_consulta .= "where cod_paciente = " .$dados_pacientes['cod_paciente'];
                            $sqlstring_ultima_consulta .= " order by cod_consulta desc limit 1";
                            $info_ultima_consulta = $db->sql_query($sqlstring_ultima_consulta);
                            $dados_ultima_consulta=mysql_fetch_array($info_ultima_consulta);
                            
                            print date('d/m/Y', strtotime($dados_ultima_consulta['data_consulta']));
                            ?>
                        </a>
                    </td>
                    
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_anamnese.php?cod=<?php print base64_encode($dados_pacientes['cod_paciente']) ?>;&alt=<?php print base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Anamnese" title="Anamnese">
                        <?php
                        //ultimo peso do paciente
                        $sqlstring_ultimo_peso  = "Select * from tb_objetivo_paciente ";                            
                        $sqlstring_ultimo_peso .= "where cod_paciente = " .$dados_pacientes['cod_paciente'];
                        $sqlstring_ultimo_peso .= " order by cod_consulta desc limit 1";
                        $info_ultimo_peso = $db->sql_query($sqlstring_ultimo_peso);
                        $dados_ultimo_peso=mysql_fetch_array($info_ultimo_peso);
                         
                        print $dados_ultimo_peso['objetivo_peso_paciente'];
                        ?>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_avaliacao.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Avaliação Nutricional" title="Avaliação Nutricional">
                        <?php
                        //ultimo peso do paciente
                        $sqlstring_ultimo_peso  = "Select * from tb_objetivo_paciente ";                            
                        $sqlstring_ultimo_peso .= "where cod_paciente = " .$dados_pacientes['cod_paciente'];
                        $sqlstring_ultimo_peso .= " order by cod_consulta desc limit 1";
                        $info_ultimo_peso = $db->sql_query($sqlstring_ultimo_peso);
                        $dados_ultimo_peso=mysql_fetch_array($info_ultimo_peso);
                         
                        print $dados_ultimo_peso['peso_paciente'];
                        ?>
                        </a>
                    </td>
                
                    <td class="centralizado">
                        <a href="01_1_cadastro_paciente_antropometria.php?cod=<?php print  base64_encode($dados_pacientes['cod_paciente']) ?>" alt="Antropometria" title="Antropometria">
                        <script>exibir_imc(<?php print $dados_ultimo_peso['peso_paciente'] ?>,<?php print $dados_ultimo_peso['altura_paciente'] ?>);</script>
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

        $sqlstring_acompanhamento = "delete from tb_acompanhamento where cod_paciente IN(".implode(',', $arr ).")";
        $info_acompanhamento = $db->sql_query($sqlstring_acompanhamento);    
        
        $sqlstring_programa_paciente_reeducacao = "delete from tb_programa_paciente_reeducacao where cod_paciente IN(".implode(',', $arr ).")";
        $info_programa_paciente_reeducacao = $db->sql_query($sqlstring_programa_paciente_reeducacao);
            
        $sqlstring_programa_paciente = "delete from tb_programa_paciente where cod_paciente IN(".implode(',', $arr ).")";
        $info_programa_paciente = $db->sql_query($sqlstring_programa_paciente);
            
        $sqlstring_consulta = "delete from tb_consulta where cod_paciente IN(".implode(',', $arr ).")";
        $info_consulta = $db->sql_query($sqlstring_consulta);
            
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
