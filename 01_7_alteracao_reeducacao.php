<!DOCTYPE html>
<?php 
// inicia a sessão
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

//atualizando os dados caso o formulario tenha sido enviado
if( $_SERVER['REQUEST_METHOD']=='POST')
    {
        //recuperando as informações do formulário
        $reeducacao = $_POST['reeducacao'];
        $cod_principal_objetivo = $_POST['principal_objetivo'];
    
        $cafe_da_manha = $_POST['cafe_da_manha'];
        $lanche_da_manha = $_POST['lanche_da_manha'];
        $almoco = $_POST['almoco'];
        $lanche_da_tarde = $_POST['lanche_da_tarde'];
        $jantar = $_POST['jantar'];
        $ceia = $_POST['ceia'];
        
       
        // atualiza na tb_reeducacao
        $sqlstring_atualizar_reeducacao  = "update tb_reeducacao set ";
        $sqlstring_atualizar_reeducacao .= "reeducacao = '" . $reeducacao . "', ";
        $sqlstring_atualizar_reeducacao .= "cod_objetivo_reeducacao = '" . $cod_principal_objetivo . "' ";        
        $sqlstring_atualizar_reeducacao .= "where cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao); 
    
    
        // atualiza na tb_reeducacao_refeicao os dados da reeducacao - cafe da manha
        $sqlstring_atualizar_reeducacao_refeicao  = "update tb_reeducacao_refeicao set ";
        $sqlstring_atualizar_reeducacao_refeicao .= "cod_refeicao = '" . $cafe_da_manha . "' ";        
        $sqlstring_atualizar_reeducacao_refeicao .= "where cod_tipo_refeicao = 1 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao_refeicao);     
    
        // atualiza na tb_reeducacao_refeicao os dados da reeducacao - lanche da manha
        $sqlstring_atualizar_reeducacao_refeicao  = "update tb_reeducacao_refeicao set ";
        $sqlstring_atualizar_reeducacao_refeicao .= "cod_refeicao = '" . $lanche_da_manha . "' ";        
        $sqlstring_atualizar_reeducacao_refeicao .= "where cod_tipo_refeicao = 2 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao_refeicao); 
    
    
        // atualiza na tb_reeducacao_refeicao os dados da reeducacao - almoco
        $sqlstring_atualizar_reeducacao_refeicao  = "update tb_reeducacao_refeicao set ";
        $sqlstring_atualizar_reeducacao_refeicao .= "cod_refeicao = '" . $almoco . "' ";        
        $sqlstring_atualizar_reeducacao_refeicao .= "where cod_tipo_refeicao = 3 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao_refeicao); 
    
        // atualiza na tb_reeducacao_refeicao os dados da reeducacao - lanche da manha
        $sqlstring_atualizar_reeducacao_refeicao  = "update tb_reeducacao_refeicao set ";
        $sqlstring_atualizar_reeducacao_refeicao .= "cod_refeicao = '" . $lanche_da_tarde . "' ";        
        $sqlstring_atualizar_reeducacao_refeicao .= "where cod_tipo_refeicao = 4 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao_refeicao); 
    
    
        // atualiza na tb_reeducacao_refeicao os dados da reeducacao - jantar
        $sqlstring_atualizar_reeducacao_refeicao  = "update tb_reeducacao_refeicao set ";
        $sqlstring_atualizar_reeducacao_refeicao .= "cod_refeicao = '" . $jantar . "' ";        
        $sqlstring_atualizar_reeducacao_refeicao .= "where cod_tipo_refeicao = 5 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao_refeicao); 

        
        // atualiza na tb_reeducacao_refeicao os dados da reeducacao - ceia
        $sqlstring_atualizar_reeducacao_refeicao  = "update tb_reeducacao_refeicao set ";
        $sqlstring_atualizar_reeducacao_refeicao .= "cod_refeicao = '" . $ceia . "' ";        
        $sqlstring_atualizar_reeducacao_refeicao .= "where cod_tipo_refeicao = 6 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];
        $db->string_query($sqlstring_atualizar_reeducacao_refeicao); 
    
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Reeducações";
        $mensagem = "A reeducação <strong>" . $reeducação . "</strong> foi atualizada com sucesso!";
        $btn_esquerda = "Nova Reeducação";
        $btn_esquerda_destino = "01_7_cadastro_reeducacao.php";
        $btn_direita = "Lista de Reeducações";
        $btn_direita_destino = "01_lista_reeducacoes.php";
        $btn_x = "01_lista_reeducacoes.php";
    }

//recuperando o programa selecionado caso o clique venha da listagem de programas
if(isset($_GET['cod_reeducacao']))
    $_SESSION['cod_reeducacao_selecionada'] = base64_decode($_GET['cod_reeducacao']);


$sqlstring_reeducacao_selecionada = "Select * from tb_reeducacao ";
$sqlstring_reeducacao_selecionada .= "inner join tb_objetivo on tb_reeducacao.cod_objetivo_reeducacao  = tb_objetivo.cod_objetivo ";
$sqlstring_reeducacao_selecionada .= "where cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];   
$info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);
$dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);

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

<?php include "includes/menu_nutricionista.php" ?>     
    
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10"  style="border:0px solid #fff">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel cabeçalho reeducacao -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #fff; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-apple fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">REEDUCAÇÕES</span>:
                    <span class=" fonte_verde_claro fonte_muito_grande text-uppercase"><?php print $dados_reeducacao_selecionada['reeducacao'] ?></span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_lista_reeducacoes.php"><span class="fonte_verde_claro">Reeducações</span></a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        Edição de Reeducação
                    </span> 
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
       
    <form method="post" action="">
    <!-- inicio - cadastro reeducação -->  
    <div class="row">
        
        
          
          <!-- inicio - painel cadastro reeducação -->
          <div class="panel panel-default">
            <div class="panel-body borda_verde_claro" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
            
            <!-- inicio - linha 1 -->
              <!-- inicio reeducacao -->
              <div class="form-group col-md-6">
                <label for="reeducacao">Reeducação  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="reeducacao" id="reeducacao" value="<?php print $dados_reeducacao_selecionada['reeducacao'] ?>" required maxlength="50">
              </div>
              <!-- fim reeducacao -->
                
                
              <!-- inicio objetivo -->    
              <div class="form-group col-md-6">                 
                <label for="principal_objetivo">Principal Objetivo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="principal_objetivo" id="principal_objetivo" class="form-control text-uppercase">
                <?php
                $sqlstring_objetivos  = "Select * from tb_objetivo";
                $info_objetivos = $db->sql_query($sqlstring_objetivos);                
                while($dados_objetivos=mysql_fetch_array($info_objetivos))
                {
                    if($dados_objetivos['cod_objetivo'] == $dados_reeducacao_selecionada['cod_objetivo_reeducacao'])
                        print "<option value=" . $dados_objetivos['cod_objetivo'] . " selected>" . $dados_objetivos['objetivo'] . "</option>";
                    else
                        print "<option value=" . $dados_objetivos['cod_objetivo'] . ">" . $dados_objetivos['objetivo'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim objetivo -->
          
               
                
                
            <div class="col-md-12 padding_top_20 negrito fonte_verde_claro">              
                <span class="glyphicon glyphicon-apple"></span>
                REFEIÇÕES DESTA REEDUCAÇÃO              
            </div>
                
                
                
            <!-- inicio cafe da manha --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_20">                 
                <label for="cafe_da_manha">Café da Manhã  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="cafe_da_manha" id="cafe_da_manha" class="form-control text-uppercase">
                    <option value="0">Selecione o Café da Manhã</option>
                <?php
                $sqlstring_cafe_da_manha_selecionado  = "Select * from tb_reeducacao_refeicao where cod_tipo_refeicao = 1 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];            
                $info_cafe_da_manha_selecionado = $db->sql_query($sqlstring_cafe_da_manha_selecionado);    
                $dados_cafe_da_manha_selecionado = mysql_fetch_array($info_cafe_da_manha_selecionado);
                
    
                $sqlstring_cafe_da_manha  = "Select * from tb_refeicao where cod_tipo_refeicao = 1 and cod_status = 1";            
                $info_cafe_da_manha = $db->sql_query($sqlstring_cafe_da_manha);
                
                while($dados_cafe_da_manha=mysql_fetch_array($info_cafe_da_manha))
                {
                    if($dados_cafe_da_manha['cod_refeicao'] == $dados_cafe_da_manha_selecionado['cod_refeicao'])
                        print "<option value=" . $dados_cafe_da_manha['cod_refeicao'] . " selected>" . $dados_cafe_da_manha['refeicao'] . "</option>";
                    else
                        print "<option value=" . $dados_cafe_da_manha['cod_refeicao'] . ">" . $dados_cafe_da_manha['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim cafe da manha -->
                
                
                
                
            
            <!-- inicio lanche da manha --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_20">                 
                <label for="lanche_da_manha">Lanche da Manhã  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="lanche_da_manha" id="lanche_da_manha" class="form-control text-uppercase">
                    <option value="0">Selecione o Lanche da Manhã</option>
                <?php
                $sqlstring_lanche_da_manha_selecionado  = "Select * from tb_reeducacao_refeicao where cod_tipo_refeicao = 2 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];            
                $info_lanche_da_manha_selecionado = $db->sql_query($sqlstring_lanche_da_manha_selecionado);    
                $dados_lanche_da_manha_selecionado = mysql_fetch_array($info_lanche_da_manha_selecionado);
                
                    
                $sqlstring_lanche_da_manha  = "Select * from tb_refeicao where cod_tipo_refeicao = 2 and cod_status = 1";            
                $info_lanche_da_manha = $db->sql_query($sqlstring_lanche_da_manha);
                
                while($dados_lanche_da_manha=mysql_fetch_array($info_lanche_da_manha))
                {
                    if($dados_lanche_da_manha['cod_refeicao'] == $dados_lanche_da_manha_selecionado['cod_refeicao'])
                        print "<option value=" . $dados_lanche_da_manha['cod_refeicao'] . " selected>" . $dados_lanche_da_manha['refeicao'] . "</option>";
                    else
                        print "<option value=" . $dados_lanche_da_manha['cod_refeicao'] . ">" . $dados_lanche_da_manha['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim lacnhe da manha -->
                
                
                
                
                
                
            <!-- inicio almoco --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_20">                 
                <label for="almoco">Almoço <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="almoco" id="almoco" class="form-control text-uppercase">
                    <option value="0">Selecione o Almoço</option>
                <?php
                $sqlstring_almoco_selecionado  = "Select * from tb_reeducacao_refeicao where cod_tipo_refeicao = 3 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];            
                $info_almoco_selecionado = $db->sql_query($sqlstring_almoco_selecionado);    
                $dados_almoco_selecionado = mysql_fetch_array($info_almoco_selecionado);
                
                    
                $sqlstring_almoco  = "Select * from tb_refeicao where cod_tipo_refeicao = 3 and cod_status = 1";            
                $info_almoco = $db->sql_query($sqlstring_almoco);
                
                while($dados_almoco=mysql_fetch_array($info_almoco))
                {
                    if($dados_almoco['cod_refeicao'] == $dados_almoco_selecionado['cod_refeicao'])
                        print "<option value=" . $dados_almoco['cod_refeicao'] . " selected>" . $dados_almoco['refeicao'] . "</option>";
                    else
                        print "<option value=" . $dados_almoco['cod_refeicao'] . ">" . $dados_almoco['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim almoco -->
                
                
                
                
                
            <!-- inicio lanche da tarde --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_20">                 
                <label for="lanche_da_tarde">Lanche da Tarde <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="lanche_da_tarde" id="lanche_da_tarde" class="form-control text-uppercase">
                    <option value="0">Selecione o Lanche da Tarde</option>
                <?php
                $sqlstring_lanche_da_tarde_selecionado  = "Select * from tb_reeducacao_refeicao where cod_tipo_refeicao = 4 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];            
                $info_lanche_da_tarde_selecionado = $db->sql_query($sqlstring_lanche_da_tarde_selecionado);    
                $dados_lanche_da_tarde_selecionado = mysql_fetch_array($info_lanche_da_tarde_selecionado);
                
                    
                $sqlstring_lanche_da_tarde  = "Select * from tb_refeicao where cod_tipo_refeicao = 4 and cod_status = 1";            
                $info_lanche_da_tarde = $db->sql_query($sqlstring_lanche_da_tarde);
                
                while($dados_lanche_da_tarde=mysql_fetch_array($info_lanche_da_tarde))
                {
                    if($dados_lanche_da_tarde['cod_refeicao'] == $dados_lanche_da_tarde_selecionado['cod_refeicao'])
                        print "<option value=" . $dados_lanche_da_tarde['cod_refeicao'] . " selected>" . $dados_lanche_da_tarde['refeicao'] . "</option>";
                    else
                        print "<option value=" . $dados_lanche_da_tarde['cod_refeicao'] . ">" . $dados_lanche_da_tarde['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim lanche da tarde -->
                
                
                
                
                
            <!-- inicio jnatar --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_20">                 
                <label for="jantar">Jantar <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="jantar" id="jantar" class="form-control text-uppercase">
                    <option value="0">Selecione o Jantar</option>
                <?php
                $sqlstring_jantar_selecionado  = "Select * from tb_reeducacao_refeicao where cod_tipo_refeicao = 5 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];            
                $info_jantar_selecionado = $db->sql_query($sqlstring_jantar_selecionado);    
                $dados_jantar_selecionado = mysql_fetch_array($info_jantar_selecionado);
                
                    
                $sqlstring_jantar  = "Select * from tb_refeicao where cod_tipo_refeicao = 5 and cod_status = 1";            
                $info_jantar = $db->sql_query($sqlstring_jantar);
                
                while($dados_jantar=mysql_fetch_array($info_jantar))
                {
                    if($dados_jantar['cod_refeicao'] == $dados_jantar_selecionado['cod_refeicao'])
                        print "<option value=" . $dados_jantar['cod_refeicao'] . " selected>" . $dados_jantar['refeicao'] . "</option>";
                    else
                        print "<option value=" . $dados_jantar['cod_refeicao'] . ">" . $dados_jantar['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim jantar -->
                
                
                
                
             <!-- inicio ceia --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_20">                 
                <label for="ceia">Ceia <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="ceia" id="ceia" class="form-control text-uppercase">
                    <option value="0">Selecione a Ceia</option>
                <?php
                $sqlstring_ceia_selecionada  = "Select * from tb_reeducacao_refeicao where cod_tipo_refeicao = 6 and cod_reeducacao = " . $_SESSION['cod_reeducacao_selecionada'];            
                $info_ceia_selecionada = $db->sql_query($sqlstring_ceia_selecionada);    
                $dados_ceia_selecionada = mysql_fetch_array($info_ceia_selecionada);
                
                    
                $sqlstring_ceia  = "Select * from tb_refeicao where cod_tipo_refeicao = 6 and cod_status = 1";            
                $info_ceia = $db->sql_query($sqlstring_ceia);
                
                while($dados_ceia=mysql_fetch_array($info_ceia))
                {
                    if($dados_ceia['cod_refeicao'] == $dados_ceia_selecionada['cod_refeicao'])
                        print "<option value=" . $dados_ceia['cod_refeicao'] . " selected>" . $dados_ceia['refeicao'] . "</option>";
                    else
                        print "<option value=" . $dados_ceia['cod_refeicao'] . ">" . $dados_ceia['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim ceia -->
                
                
                
        <!-- inicio - linha 3 -->
            <!-- inicio - botoes salvar e cancelar programa -->      
            <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro">Salvar Programa</button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_programas.php'">Cancelar</button>    
            </div>
            <!-- inicio - botoes salvar e cancelar programa -->      
          <!-- fim - linha 3 -->
        
    </div>
    <!-- fim - cadastro programa -->  
    
        
    </form>   
        
        
        
        
         
        
      
        
   
        
    
    </form>
       
    <br/><br/><br/><br/><br/><br/>
       
   </div>
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda --> 
    
    
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
        include "includes/modal_sucesso.php";
    }
        
    ?>
    

    <!-- abrindo o modal_sucesso -->
    <script>
        $(window).on('load',function()
        {        
        $('#modal_sucesso').modal('show');
        });
    </script>
    
    
    
    </body>
</html>