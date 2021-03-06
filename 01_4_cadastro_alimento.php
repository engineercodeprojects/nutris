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
        $alimento = $_POST['alimento'];
        $peso = $_POST['peso']; 
        $caloria = $_POST['caloria'];
        $medida_caseira = $_POST['medida_caseira'];
        $cod_grupo = $_POST['grupo_alimentos'];
        $cod_unidade_medida = $_POST['unidade_medida'];
        

        // inserindo na tb_alimento os dados do alimento
        $sqlstring_inserir_alimentos  = "insert into tb_alimento (alimento, peso, caloria, medida_caseira, cod_grupo, cod_unidade_medida) values ";        
        $sqlstring_inserir_alimentos .= "('" . $alimento . "','" . $peso . "','" . $caloria . "','" . $medida_caseira . "','" . $cod_grupo . "','" . $cod_unidade_medida . "')";

        $db->string_query($sqlstring_inserir_alimentos); 


        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Alimentos";
        $mensagem = "O alimento <strong>" . $alimento . "</strong> foi cadastrado com sucesso!";
        $btn_esquerda = "Novo Alimento";
        $btn_esquerda_destino = "01_4_cadastro_alimentos.php";
        $btn_direita = "Lista de Alimentos";
        $btn_direita_destino = "01_lista_alimentos.php";
        $btn_x = "01_lista_alimentos.php";
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
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">ALIMENTOS</span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_lista_alimentos.php"><span class="fonte_verde_claro">Alimentos</span></a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        Novo Alimento
                    </span> 
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
       
    <form method="post" action="">
    <!-- inicio - cadastro alimento -->  
    <div class="row">
        
        
          
          <!-- inicio - painel cadastro alimento -->
          <div class="panel panel-default">
            <div class="panel-body borda_verde_claro" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
            
            <!-- inicio - linha 1 -->
              <!-- inicio alimento -->
              <div class="form-group col-md-6">
                <label for="alimento">Alimento  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="alimento" id="alimento" required maxlength="100">
              </div>
              <!-- fim alimento -->
                
              <!-- inicio peso -->    
              <div class="form-group col-md-2"> 
                <label for="peso">Peso (gramas)  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="peso" id="peso" maxlength="6" required>
              </div>
              <!-- fim peso -->
                
              
               <!-- inicio unidade de medida -->    
              <div class="form-group col-md-4"> 
                <label for="unidade_medida">Unidade Medida  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select class="form-control" name="unidade_medida" id="unidade_medida" required>
                <?php
                $sqlstring_unidade_medida  = "Select * from tb_unidade_medida ";                                
                $info_unidade_medida = $db->sql_query($sqlstring_unidade_medida);
                while($dados_unidade_medida = mysql_fetch_array($info_unidade_medida))
                {
                ?>                
                <option value="<?php print $dados_unidade_medida['cod_unidade_medida'] ?>"><?php print $dados_unidade_medida['sigla'] . " - " .  $dados_unidade_medida['unidade_medida'] ?> </option>    
                <?php
                }
                ?>
                </select>
              </div>
              <!-- fim unidade de medida -->
              
                
            <!-- fim - linha 2 -->
              

            <!-- inicio - linha 2 -->
              
              
                
              <!-- inicio caloria -->    
              <div class="form-group col-md-2"> 
                <label for="caloria">Caloria (kcal)  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="caloria" id="caloria"  maxlength="6" required>
              </div>
              <!-- fim caloria -->    
            

              <!-- inicio medida caseira -->
              <div class="form-group col-md-5">
                <label for="sexo">Medida Caseira  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="medida_caseira" id="medida_caseira"  maxlength="50" required>
              </div>
              <!-- fim medida caseira -->            
              
              
              <!-- inicio - grupo de alimentos -->
                <div id="grupo_alim" name="grupo_alim" class="form-group col-md-5">
                    <label for="grupo_alimentos">Grupo <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                    <select name="grupo_alimentos" id="grupo_alimentos" class="form-control text-uppercase">
                      <?php
                        $sqlstring_grupo = "Select * from tb_grupo";
                        $info_grupo = $db->sql_query($sqlstring_grupo);
                        while($dados_grupo=mysql_fetch_array($info_grupo))
                        {                           
                                print "<option value=" . $dados_grupo['cod_grupo'] . " >" . $dados_grupo['grupo'] . " - " . $dados_grupo['descricao_grupo'] .  "</option>";                          
                        }                            
                      ?>
                    </select>
                </div>
              <!-- fim - grupo de alimentos -->
                
                
                
          <!-- fim - linha 2 -->
          
                
        </div>
    </div>        
      <!-- fim - painel alimento -->
          
        <!-- inicio - linha 3 -->
            <!-- inicio - botoes salvar e cancelar alimento -->      
            <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro">Salvar Alimento</button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_alimentos.php'">Cancelar</button>    
            </div>
            <!-- inicio - botoes salvar e cancelar alimento -->      
          <!-- fim - linha 3 -->
        
    </div>
    <!-- fim - cadastro alimento -->  
    
        
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