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
    
        
        // inserindo na tb_reeducacao título e objetivo
        $sqlstring_inserir_reeducacao  = "insert into tb_reeducacao (reeducacao, cod_objetivo_reeducacao) values ";        
        $sqlstring_inserir_reeducacao .= "('" . $reeducacao . "','" . $cod_principal_objetivo . "')";

        $db->string_query($sqlstring_inserir_reeducacao); 

    
        //selecionando a reeducação inserida
        $sqlstring_ultima_reeducacao  = "Select * from tb_reeducacao order by cod_reeducacao desc limit 1 ";
        $info_ultima_reeducacao = $db->sql_query($sqlstring_ultima_reeducacao);
        $dados_ultima_reeducacao = mysql_fetch_array($info_ultima_reeducacao);
        $linhas_ultima_reeducacao = $db->sql_linhas($info_ultima_reeducacao);

        
        
        // inserindo na tb_reeducacao_refeicao - cafe da manha
        $sqlstring_inserir_cafe_da_manha  = "insert into tb_reeducacao_refeicao (cod_reeducacao, cod_tipo_refeicao, cod_refeicao) values ";        
        $sqlstring_inserir_cafe_da_manha .= "('" . $dados_ultima_reeducacao['cod_reeducacao'] . "',1, '" . $cafe_da_manha . "')";
        $db->string_query($sqlstring_inserir_cafe_da_manha); 
    
        // inserindo na tb_reeducacao_refeicao - lanche da manha
        $sqlstring_inserir_lanche_da_manha  = "insert into tb_reeducacao_refeicao (cod_reeducacao, cod_tipo_refeicao, cod_refeicao) values ";        
        $sqlstring_inserir_lanche_da_manha .= "('" . $dados_ultima_reeducacao['cod_reeducacao'] . "',2, '" . $lanche_da_manha . "')";
        $db->string_query($sqlstring_inserir_lanche_da_manha); 
    
        // inserindo na tb_reeducacao_refeicao - almoco
        $sqlstring_inserir_almoco  = "insert into tb_reeducacao_refeicao (cod_reeducacao, cod_tipo_refeicao, cod_refeicao) values ";        
        $sqlstring_inserir_almoco .= "('" . $dados_ultima_reeducacao['cod_reeducacao'] . "',3, '" . $almoco . "')";
        $db->string_query($sqlstring_inserir_almoco); 
    
        // inserindo na tb_reeducacao_refeicao - lanche da tarde
        $sqlstring_inserir_lanche_da_tarde  = "insert into tb_reeducacao_refeicao (cod_reeducacao, cod_tipo_refeicao, cod_refeicao) values ";        
        $sqlstring_inserir_lanche_da_tarde .= "('" . $dados_ultima_reeducacao['cod_reeducacao'] . "',4, '" . $lanche_da_tarde . "')";
        $db->string_query($sqlstring_inserir_lanche_da_tarde); 
    
        // inserindo na tb_reeducacao_refeicao - jantar
        $sqlstring_inserir_jantar  = "insert into tb_reeducacao_refeicao (cod_reeducacao, cod_tipo_refeicao, cod_refeicao) values ";        
        $sqlstring_inserir_jantar .= "('" . $dados_ultima_reeducacao['cod_reeducacao'] . "',5, '" . $jantar . "')";
        $db->string_query($sqlstring_inserir_jantar); 
    
        // inserindo na tb_reeducacao_refeicao - ceia
        $sqlstring_inserir_ceia  = "insert into tb_reeducacao_refeicao (cod_reeducacao, cod_tipo_refeicao, cod_refeicao) values ";        
        $sqlstring_inserir_ceia .= "('" . $dados_ultima_reeducacao['cod_reeducacao'] . "',6, '" . $ceia . "')";
        $db->string_query($sqlstring_inserir_ceia); 
        
    
    
        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Reeducação";
        $mensagem = "A reeducação <strong>" . $reeducacao . "</strong> foi cadastrada com sucesso!";
        $btn_esquerda = "Nova Reeducação";
        $btn_esquerda_destino = "01_4_cadastro_reeducacao.php";
        $btn_direita = "Lista de Reeducações";
        $btn_direita_destino = "01_lista_reeducacoes.php";
        $btn_x = "01_lista_reeducacoes.php";
    }

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
        <!-- inicio - painel cabeçalho alimento -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #fff; border-left:0px solid #0A4438;">                 
                    <img src="img/icone_reeducacoes_titulo_20.png" align=left class="img-responsive">
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">REEDUCAÇÃO</span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_lista_reeducacoes.php"><span class="fonte_verde_claro">Reeducações Alimentares  </span></a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        Nova Reeducação Alimentar
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
              <!-- inicio reeducação -->
              <div class="form-group col-md-6">
                <label for="reeducacao">Reeducação  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="reeducacao" id="reeducacao" required maxlength="50">
              </div>
              <!-- fim reeducação -->
                
                
              <!-- inicio objetivo -->    
              <div class="form-group col-md-6">                 
                <label for="principal_objetivo">Principal Objetivo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="principal_objetivo" id="principal_objetivo" class="form-control text-uppercase">
                <?php
                $sqlstring_objetivo  = "Select * from tb_objetivo";
                $info_objetivo = $db->sql_query($sqlstring_objetivo);                
                while($dados_objetivo=mysql_fetch_array($info_objetivo))
                {
                    print "<option value=" . $dados_objetivo['cod_objetivo'] . ">" . $dados_objetivo['objetivo'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim objetivo -->
                
            <!-- fim - linha 1 -->
              
                
                

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
                $sqlstring_cafe_da_manha  = "Select * from tb_refeicao where cod_tipo_refeicao = 1 and cod_status = 1";            
                $info_cafe_da_manha = $db->sql_query($sqlstring_cafe_da_manha);
                $linhas_cafe_da_manha = $db->sql_linhas($info_cafe_da_manha);                  
                while($dados_cafe_da_manha=mysql_fetch_array($info_cafe_da_manha))
                {
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
                $sqlstring_lanche_da_manha  = "Select * from tb_refeicao where cod_tipo_refeicao = 2 and cod_status = 1";            
                $info_lanche_da_manha = $db->sql_query($sqlstring_lanche_da_manha);
                $linhas_lanche_da_manha = $db->sql_linhas($info_lanche_da_manha);                  
                while($dados_lanche_da_manha=mysql_fetch_array($info_lanche_da_manha))
                {
                    print "<option value=" . $dados_lanche_da_manha['cod_refeicao'] . ">" . $dados_lanche_da_manha['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim lanche da manha -->
                
                
                
                
            <!-- inicio almoco --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_10">                 
                <label for="almoco">Almoço  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="almoco" id="almoco" class="form-control text-uppercase">
                    <option value="0">Selecione o Almoço</option>
                <?php
                $sqlstring_almoco  = "Select * from tb_refeicao where cod_tipo_refeicao = 3 and cod_status = 1";            
                $info_almoco = $db->sql_query($sqlstring_almoco);
                $linhas_almoco = $db->sql_linhas($info_almoco);                  
                while($dados_almoco=mysql_fetch_array($info_almoco))
                {
                    print "<option value=" . $dados_almoco['cod_refeicao'] . ">" . $dados_almoco['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
            <!-- fim almoco -->
                
                
            <!-- inicio lanche da tarde --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_10">                 
                <label for="lanche_da_tarde">Lanche da Tarde  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="lanche_da_tarde" id="lanche_da_tarde" class="form-control text-uppercase">
                    <option value="0">Selecione o Lanche da Tarde</option>
                <?php
                $sqlstring_lanche_da_tarde  = "Select * from tb_refeicao where cod_tipo_refeicao = 4 and cod_status = 1";            
                $info_lanche_da_tarde = $db->sql_query($sqlstring_lanche_da_tarde);
                $linhas_lanche_da_tarde = $db->sql_linhas($info_lanche_da_tarde);                  
                while($dados_lanche_da_tarde=mysql_fetch_array($info_lanche_da_tarde))
                {
                    print "<option value=" . $dados_lanche_da_tarde['cod_refeicao'] . ">" . $dados_lanche_da_tarde['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
            <!-- fim lanche da tarde -->
                
                
                
            <!-- inicio janta --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_10">                 
                <label for="jantar">Jantar  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="jantar" id="jantar" class="form-control text-uppercase">
                    <option value="0">Selecione o Jantar</option>
                <?php
                $sqlstring_jantar  = "Select * from tb_refeicao where cod_tipo_refeicao = 5 and cod_status = 1";            
                $info_jantar = $db->sql_query($sqlstring_jantar);
                $linhas_jantar = $db->sql_linhas($info_jantar);                  
                while($dados_jantar=mysql_fetch_array($info_jantar))
                {
                    print "<option value=" . $dados_jantar['cod_refeicao'] . ">" . $dados_jantar['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
            <!-- fim janta -->
                
                
                
                
            <!-- inicio ceia --> 
              <div class="form-group col-xs-12 col-md-6 padding_top_10">                 
                <label for="ceia">Ceia  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="ceia" id="ceia" class="form-control text-uppercase">
                    <option value="0">Selecione a Ceia</option>
                <?php
                $sqlstring_ceia  = "Select * from tb_refeicao where cod_tipo_refeicao = 6 and cod_status = 1";            
                $info_ceia = $db->sql_query($sqlstring_ceia);
                $linhas_ceia = $db->sql_linhas($info_ceia);                  
                while($dados_ceia=mysql_fetch_array($info_ceia))
                {
                    print "<option value=" . $dados_ceia['cod_refeicao'] . ">" . $dados_ceia['refeicao'] . "</option>";
                }
                ?>
                </select>
              </div>
            <!-- fim ceia -->
                
                
          
        <!-- inicio - linha 3 -->
            <!-- inicio - botoes salvar e cancelar programa -->      
            <div class="col-md-12  direito padding_top_20">
                <button type="submit" class="btn btn_verde_claro">Salvar Reeducação</button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_programas.php'">Cancelar</button>    
            </div>
            <!-- inicio - botoes salvar e cancelar programa -->      
          <!-- fim - linha 3 -->
        
    </div>
    <!-- fim - cadastro programa -->  
    
        
    </form>   
        
        
        
        
         
        
      
        
   
        
    
    </form>
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