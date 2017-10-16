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



if( $_SERVER['REQUEST_METHOD']=='POST')
    {

        //recuperando informações da refeição
        $refeicao = $_POST['refeicao'];
        $tipo_refeicao = $_POST['tipo_refeicao'];
        $codigos = $_POST['codigos'];
    
        //inserindo a refeição e tipo de refeição na tb_refeicao
        $sqlstring_atualizar_refeicao = "update tb_refeicao set refeicao = '" .  $refeicao . "', cod_tipo_refeicao = '" . $tipo_refeicao . "' where cod_refeicao = " . $_SESSION['cod_refeicao_selecionada'];
        $db->string_query($sqlstring_atualizar_refeicao);
    
        //excluindo os alimentos dessa refeição
        $sqlstring_excluir_alimentos  = "delete from tb_refeicao_alimento where cod_refeicao = " . $_SESSION['cod_refeicao_selecionada'];
        $info_excluir_alimentos = $db->sql_query($sqlstring_excluir_alimentos); 
        
             
        //atualizando os alimentos selecionados na refeição cadastrada anteriormente
        $contador = 0;
        while ($contador < sizeof($codigos))
        {
        $sqlstring_inserir_alimentos_refeicao = "Insert into tb_refeicao_alimento (cod_refeicao, cod_alimento) values ('" . $_SESSION['cod_refeicao_selecionada'] . "','" . $codigos[$contador]  . "')";
        $db->string_query($sqlstring_inserir_alimentos_refeicao);    
        $contador++;
        }
    
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Cadastro de Refeição";
        $mensagem = "A refeição foi com sucesso!";
        $btn_esquerda = "Nova Refeição";
        $btn_esquerda_destino = "01_2_cadastro_refeicao.php";
        $btn_direita = "Lista de Refeições";
        $btn_direita_destino = "01_lista_refeicoes.php";
        $btn_x = "01_lista_refeicoes.php";
 
 
}



//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod']))
    $_SESSION['cod_refeicao_selecionada'] = base64_decode($_GET['cod']);

// informações da refeição selecionada pelo usuário
$sqlstring_refeicao_selecionada  = "select * from tb_refeicao where cod_refeicao = " . $_SESSION['cod_refeicao_selecionada'];
$info_refeicao_selecionada = $db->sql_query($sqlstring_refeicao_selecionada); 
$dados_refeicao_selecionada = mysql_fetch_array($info_refeicao_selecionada);

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
    
    <!-- jquery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- funções do arquivo js -->
    <script src="js/funcoes.js"></script>
  </head>   
  
    
    
<body class="margin_00">

<?php 
    include "includes/menu_nutricionista.php";    
?>     
    
    
    
<div class="container-fluid">
  
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
       
       
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel cadastro de nova refeição -->
          <div class="panel panel-default margin_top_20 sem_borda">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-grain fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">REFEIÇÃO</span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_lista_refeicoes.php" alt="Lista de Todas as Refeições" title="Lista de Todas as Refeições">Refeições</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Editar Refeição</span>
                    </span>
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
     
       
       
    <!-- inicio - cadastro refeição - titulo e tipo de refeição -->
    <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
        <br/>
        <form method="post" action="">    
        <!-- inicio - tipo de refeição -->
        <div id="titulo_refeicao" name="titulo_refeicao" class="form-group col-md-6">
            <label for="refeicao">Refeição <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span></label>
            <input type="text" class="form-control text-uppercase" name="refeicao" id="refeicao" value = "<?php print $dados_refeicao_selecionada['refeicao'] ?>" required>            
        </div>
        <!-- fim - tipo de refeição -->   
            
        <!-- inicio - tipo de refeição -->
        <div id="tipo" name="tipo" class="form-group col-md-6">
            <label for="tipo_refeicao">Tipo de Refeição</label>
            <select name="tipo_refeicao" id="tipo_refeicao" class="form-control text-uppercase">
              <?php
                $sqlstring_tipo_refeicao = "Select * from tb_tipo_refeicao";
                $info_tipo_refeicao = $db->sql_query($sqlstring_tipo_refeicao);
                while($dados_tipo_refeicao=mysql_fetch_array($info_tipo_refeicao))
                {
                    if($dados_tipo_refeicao['cod_tipo_refeicao'] == $dados_refeicao_selecionada['cod_tipo_refeicao'])
                        print "<option value=" . $dados_tipo_refeicao['cod_tipo_refeicao'] . " selected>" . $dados_tipo_refeicao['tipo_refeicao'] . "</option>";        
                    else
                        print "<option value=" . $dados_tipo_refeicao['cod_tipo_refeicao'] . ">" . $dados_tipo_refeicao['tipo_refeicao'] . "</option>";        
                }                            
              ?>
            </select>
        </div>
        <!-- fim - tipo de refeição --> 
        
        
        <!-- inicio - alimentos dessa refeição -->            
        <div class="form-group col-md-12">
            <label for="alimento_refeicao">Alimentos dessa refeição </label>
            <div id="alimentos_refeicao" name="alimentos_refeicao">
                <div class="col-md-6 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Alimento</div>
                <div class="col-md-3 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Grupo</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Peso</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Calorias</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 centralizado fonte_branca"><span class="glyphicon glyphicon-minus" alt="Remover Alimento da Refeição" title="Remover Alimento da Refeição"></span></div>
                   
                
                  
                
                <?php
                // informações da refeição selecionada pelo usuário
                $sqlstring_alimentos_refeicao_selecionada   = "select tb_alimento.cod_alimento, tb_alimento.alimento, tb_alimento.medida_caseira, tb_alimento.peso, tb_alimento.caloria from tb_alimento ";
                $sqlstring_alimentos_refeicao_selecionada  .= "inner join tb_refeicao_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                $sqlstring_alimentos_refeicao_selecionada  .= "where cod_refeicao = " . $_SESSION['cod_refeicao_selecionada'];
                $info_alimentos_refeicao_selecionada = $db->sql_query($sqlstring_alimentos_refeicao_selecionada); 
                
                while($dados_alimentos_refeicao_selecionada = mysql_fetch_array($info_alimentos_refeicao_selecionada))
                {
                ?>
                
                <div id='<?php print $dados_alimentos_refeicao_selecionada['cod_alimento'] ?>'>
                <div><input type=hidden name=codigos[] id=codigos[] value='<?php print $dados_alimentos_refeicao_selecionada['cod_alimento'] ?>'></div>
                <div class='col-md-6 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='<?php print $dados_alimentos_refeicao_selecionada['alimento'] ?>' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena'></div>
                <div class='col-md-3 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='<?php print $dados_alimentos_refeicao_selecionada['medida_caseira'] ?>' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena text-uppercase'></div>
                <div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='<?php print number_format($dados_alimentos_refeicao_selecionada['peso'],2) ?>' class='form-group esquerda margin_00 sem_borda fundo_transparente fonte_pequena'></div>
                <div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='<?php print number_format($dados_alimentos_refeicao_selecionada['caloria'],2) ?>' class='form-group esquerda margin_00 sem_borda fundo_transparente fonte_pequena'></div>
                <div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05 fonte_verde_claro centralizado'><a href='#' class='link_detalhes' onclick="javascript:remover_alimento(<?php print $dados_alimentos_refeicao_selecionada['cod_alimento'] ?>,<?php print $dados_alimentos_refeicao_selecionada['peso'] ?>,<?php print $dados_alimentos_refeicao_selecionada['caloria'] ?>)"><span class='glyphicon glyphicon-minus-sign'></span></a></div>
                
                </div>
                
                <?php
                }    
                ?>
            </div>
         </div>
        <!-- fim - alimentos dessa refeição --> 
        
            
        
            
                <?php
                $sqlstring_peso_caloria  = "select tb_refeicao_alimento.cod_refeicao, tb_alimento.alimento, tb_alimento.peso, tb_alimento.caloria, sum(peso) as total_peso, sum(caloria) as total_caloria from tb_refeicao_alimento ";
                $sqlstring_peso_caloria .= "inner join tb_alimento on tb_alimento.cod_alimento = tb_refeicao_alimento.cod_alimento ";
                $sqlstring_peso_caloria .= "where cod_refeicao = " . $_SESSION['cod_refeicao_selecionada'] . " ";
                $sqlstring_peso_caloria .= "group by cod_refeicao";
            
                $info_peso_caloria = $db->sql_query($sqlstring_peso_caloria);
                $dados_peso_caloria = mysql_fetch_array($info_peso_caloria);
                ?>
            
        <!-- inicio - peso total e calorias totais -->           
         <div class="form-group col-md-12">            
            <div id="totais" name="totais">
                <div class="col-md-9 padding_top_10 padding_bottom_10"><input type="text" name="alimento" id="alimento" class="form-group margin_00 sem_borda fundo_transparente negrito" value="Totais" readonly></div>
                <div class="col-md-1"><input type="text" name="total_peso" id="total_peso" class="form-group margin_00 esquerda fonte_verde_claro fundo_transparente sem_borda " value=<?php print number_format($dados_peso_caloria['total_peso'],2) ?> readonly></div>
                <div class="col-md-1"><input type="text" name="total_caloria" id="total_caloria" class="form-group margin_00 esquerda fonte_verde_claro fundo_transparente sem_borda "  value=<?php print number_format($dados_peso_caloria['total_caloria'],2) ?> readonly></div>
            </div>
         </div>        
        <!-- fim - peso total e calorias totais --> 
        
            
        <!-- inicio - botoes salvar e cancelar cadastro de refeição -->           
         <div class="col-md-12  direito">
            <button type="submit" class="btn btn_verde_claro">Salvar Refeição</button>    
            <button type="reset" class="btn btn_verde_claro" onclick="location.href='01_lista_refeicoes.php'">Cancelar</button>    
            <br/><br/>
         </div>
        <!-- fim - botoes salvar e cancelar cadastro de refeição -->           
         
        </form>
            
        </div>
    </div>
    <!-- fim - cadastro refeição - titulo e tipo de refeição -->
       
       
    
       
       
       
       
       
    <br/>
       
    <!--  inicio - busca simples de alimentos -->
        <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
        <br/>
          <form name="form_pesquisa" id="form_pesquisa" class="padding_bottom_20 from_group form-inline" style="white-space: nowrap">          
              <div id="titulo_refeicao" name="titulo_refeicao" class="form-group col-md-12">
              <label for="busca">Busca Alimentos</label>
              <br/>
              <input type="text" name="busca" id="busca" class="form-control" style="width:95%;" placeholder="GRUPO OU ALIMENTO">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe os alimentos contendo o valor digitado na busca"  title="Exibe os alimentos contendo o valor digitado na busca"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>  
              <br/><br/>
              <!-- div para exibir os resultados da busca -->
               
               <div class="resultados margin_left_02"></div>
               
              </div>
          </form>  
        </div>
        </div>
        <!--  fim - busca simples de alimentos -->   
       
       
       
       
       
    
    
   <div class="col-md-offset-1 col-md-10">
   <!-- fim da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
       
</div>
       
   
    <!-- scripts necessários - js -->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
   <?php    
   if( $_SERVER['REQUEST_METHOD']=='POST')
    {  
    include_once ("includes/modal_sucesso.php");   
    
    ?>
    
    <script>
    $(window).on('load',function()
    {        
    $('#modal_sucesso').modal('show');
    });
    </script>    
    
    <?php
    }
    ?>