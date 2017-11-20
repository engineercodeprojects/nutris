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
        $programa = $_POST['programa'];
        $objetivo_programa = $_POST['objetivo_programa']; 
        $duracao_programa = $_POST['duracao_programa'];
        $descricao_programa = $_POST['descricao_programa'];
        $outras_informacoes_programa = $_POST['outras_informacoes_programa'];
        

        // inserindo na tb_alimento os dados do alimento
        $sqlstring_inserir_programa  = "insert into tb_programa (programa, cod_objetivo_programa, cod_tempo_programa, descricao_programa, outras_informacoes_programa) values ";        
        $sqlstring_inserir_programa .= "('" . $programa . "','" . $objetivo_programa . "','" . $duracao_programa . "','" . $descricao_programa . "','" . $outras_informacoes_programa . "')";

        $db->string_query($sqlstring_inserir_programa); 


        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Programas";
        $mensagem = "O programa <strong>" . $programa . "</strong> foi cadastrado com sucesso!";
        $btn_esquerda = "Novo Programa";
        $btn_esquerda_destino = "01_6_cadastro_programa.php";
        $btn_direita = "Lista de Programas";
        $btn_direita_destino = "01_lista_programas.php";
        $btn_x = "01_lista_programas.php";
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
                    <span class="glyphicon glyphicon-apple fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">PROGRAMAS</span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_lista_programas.php"><span class="fonte_verde_claro">Programas</span></a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        Novo Programa
                    </span> 
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
       
    <form method="post" action="">
    <!-- inicio - cadastro programa -->  
    <div class="row">
        
        
          
          <!-- inicio - painel cadastro programa -->
          <div class="panel panel-default">
            <div class="panel-body borda_verde_claro" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
            
            <!-- inicio - linha 1 -->
              <!-- inicio programa -->
              <div class="form-group col-md-4">
                <label for="programa">Programa  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="programa" id="programa" required maxlength="50">
              </div>
              <!-- fim programa -->
                
              <!-- inicio objetivo -->    
              <div class="form-group col-md-4">                 
                <label for="objetivo_programa">Objetivo Programa  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="objetivo_programa" id="objetivo_programa" class="form-control">
                <?php
                $sqlstring_objetivos  = "Select * from tb_objetivo";
                $info_objetivos = $db->sql_query($sqlstring_objetivos);                
                while($dados_objetivos=mysql_fetch_array($info_objetivos))
                {
                    print "<option value=" . $dados_objetivos['cod_objetivo'] . ">" . $dados_objetivos['objetivo'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim objetivo -->
                
              
                
              <!-- inicio duração -->    
              <div class="form-group col-md-4">                 
                <label for="duracao_programa">Duração do Programa  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select name="duracao_programa" id="duracao_programa" class="form-control">
                <?php
                $sqlstring_duracao  = "Select * from tb_tempo";
                $info_duracao = $db->sql_query($sqlstring_duracao);                
                while($dados_duracao=mysql_fetch_array($info_duracao))
                {
                    print "<option value=" . $dados_duracao['cod_tempo'] . ">" . $dados_duracao['tempo'] . "</option>";
                }
                ?>
                </select>
              </div>
              <!-- fim duração -->
                
            <!-- fim - linha 1 -->
              

                
                
                
            <!-- inicio - linha 2 -->
              <!-- inicio descricao programa -->
              <div class="form-group col-md-12">
                <label for="descricao_programa">Descrição do Programa  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <textarea rows=5 class="form-control" name="descricao_programa" id="descricao_programa"></textarea>
              </div>
              <!-- fim descricao programa -->            
              
              
              <!-- inicio outras informações -->
              <div class="form-group col-md-12">
                <label for="outras_informacoes_programa">Outras Informações  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <textarea rows=5 class="form-control" name="outras_informacoes_programa" id="outras_informacoes_programa"></textarea>
              </div>
              <!-- fim outras informações --> 
                
                
                
          <!-- fim - linha 2 -->
          
                
        </div>
    </div>        
      <!-- fim - painel programa -->
          
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