<?php 
//inicia a sessão
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


//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod']))
    $_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);
    
$sqlstring_paciente  = "select tb_paciente.nome_paciente, tb_objetivo_paciente.peso, tb_objetivo_paciente.altura, tb_tempo.tempo from tb_paciente ";
$sqlstring_paciente .= "inner join tb_objetivo_paciente on tb_paciente.cod_paciente = tb_objetivo_paciente.cod_paciente ";
$sqlstring_paciente .= "inner join tb_tempo on tb_objetivo_paciente.cod_tempo_programa = tb_tempo.cod_tempo ";
$sqlstring_paciente .= "where tb_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$info_paciente = $db->sql_query($sqlstring_paciente);
$dados_paciente = mysql_fetch_array($info_paciente);

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
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
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>                       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <?php include "includes/modal_cadastrar_dieta.php" ?>   
    
    

<!-- inicio container fluid -->
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25" style="border:0px solid #fff;">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #fff; ">                 
                    <span class="glyphicon glyphicon-apple fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">DIETA</span>
                    <br/>
                    <span class="fonte_pequena">Prescrição de Dieta</span>
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
       
       
    <!-- inicio - formulario prescrição de dieta -->   
    <form method="post" action="">
    <!-- inicio - painel dados paciente (dieta) -->  
    <div class="row">
        
          <!-- inicio - painel prescricao -->
          <div class="panel panel-default">
            <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">                 
             
          <!-- inicio - linha 1 -->
              <!-- inicio nome paciente -->
              <div class="form-group col-md-12">
                <label for="nomecompleto"></label>
                <input type="text" class="form-control" name="nome_paciente" id="nome_paciente" placeholder="Maria da Silva" maxlength="100" value="<?php print $dados_paciente['nome_paciente'] ?>" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- fim nome paciente -->
          <!-- fim - linha 1 -->
            
          
                
          <!-- inicio - linha 2 -->
              <!-- inicio altura -->    
              <div class="form-group col-md-2">
                <label for="altura">Altura (cm) </label>
                <input type="text" class="form-control" name="altura" id="altura" placeholder="160" maxlength="3" value="<?php print $dados_paciente['altura'] ?>" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio altura -->
                
              <!-- inicio peso atual -->    
              <div class="form-group col-md-2">
                <label for="peso">Peso - Atual (Kg) </label>
                <input type="text" class="form-control" name="peso" id="peso" placeholder="80.000" maxlength="7" value="<?php print $dados_paciente['peso'] ?>" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio peso atual -->
                
              <!-- inicio imc atual -->    
              <div class="form-group col-md-2">
                <label for="imc_atual">IMC - Atual </label>                  
                <input type="text" class="form-control" name="imc_atual" id="imc_atual" placeholder="28.77" maxlength="5"  readonly  style="background-color:#fff; border:1px solid #ccc">
                  <script>
                    peso = parseFloat(document.getElementById('peso').value);
                    altura = parseFloat (document.getElementById('altura').value);
                    document.getElementById('imc_atual').value = Math.ceil((peso/(Math.pow((altura/100),2)))*100)/100;
                  </script>
              </div>
              <!-- inicio imc atual -->
                
                
              <!-- inicio peso atual -->    
              <div class="form-group col-md-2">
                <label for="peso_ideal">Peso - Ideal (Kg) </label>
                <input type="text" class="form-control" name="peso_ideal" id="peso_ideal" placeholder="80.000" maxlength="7" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio peso atual -->
                
                
              <!-- inicio imc ideal -->    
              <div class="form-group col-md-2">
                <label for="imc_ideal">IMC - Ideal </label>
                <input type="text" class="form-control" name="imc_ideal" id="imc_ideal" placeholder="23.67" maxlength="5" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio imc ideal -->
                
                
              <!-- inicio imc ideal -->    
              <div class="form-group col-md-2">
                <label for="prazo">Prazo </label>
                <input type="text" class="form-control" name="prazo" id="prazo" placeholder="18 semanas" maxlength="15" value="<?php print $dados_paciente['tempo'] ?>" readonly style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio imc ideal -->
          <!-- fim - linha 2 -->
            
        </div>
    </div>        
    <!-- fim - painel dados paciente (dieta) -->
    
    </div>  
        
     
        
    <?php
    //select dias da semana para formar os paineis da dieta
    $sqlstring_dia_semana  = "Select * from tb_dia_semana ";
    $info_dia_semana = $db->sql_query($sqlstring_dia_semana);
    
    $contador = 10;
    
    while($dados_dia_semana=mysql_fetch_array($info_dia_semana))
    {
    
        if($contador == 10)
        {
        ?>
        <div class="row">            
            <div class="col-sm-12 col-md-12 ">                
                <div class="col-xs-6 col-md-6 fundo_verde_claro padding_10 fonte_branca text-uppercase negrito"><?php print $dados_dia_semana['dia_semana'] ?></div>
                <div class="col-xs-6 col-md-6 direito fonte_branca fundo_verde_claro padding_top_06 padding_bottom_20">
                    <a href="#" class="link_branco" onclick=abrir_modal("<?php print $dados_dia_semana['dia_semana'] ?>","<?php print $_SESSION['cod_paciente_selecionado'] ?>")>
                    <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </div>
                <div class="thumbnail altura_200" style="border-bottom:3px solid #18A689">
                
                </div>
            </div>
        </div>
        <?php
        }
        else if ($contador  == 11 or $contador == 14)
        {
        ?>
        <div class="row">
            <div class="col-sm-4 col-md-4 margin_top_20 ">
                <div class="col-xs-6 col-md-6 fundo_verde_claro padding_10 fonte_branca text-uppercase negrito"><?php print $dados_dia_semana['dia_semana'] ?></div>
                <div class="col-xs-6 col-md-6 direito fonte_branca fundo_verde_claro padding_top_06 padding_bottom_20">
                    <a href="#" class="link_branco" onclick=abrir_modal("<?php print $dados_dia_semana['dia_semana'] ?>","<?php print $_SESSION['cod_paciente_selecionado'] ?>")>
                    <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </div>
                <div class="thumbnail altura_400 centralizado" style="border-bottom:3px solid #18A689">                    
                </div>
            </div>
        <?php
        }
        else if($contador == 13 or $contador == 16)
        {    
        ?>
            <div class="col-sm-4 col-md-4 margin_top_20">
                <div class="col-xs-6 col-md-6 fundo_verde_claro padding_10 fonte_branca text-uppercase negrito"><?php print $dados_dia_semana['dia_semana'] ?></div>
                <div class="col-xs-6 col-md-6 direito fonte_branca fundo_verde_claro padding_top_06 padding_bottom_20">
                    <a href="#" class="link_branco" onclick=abrir_modal("<?php print $dados_dia_semana['dia_semana'] ?>","<?php print $_SESSION['cod_paciente_selecionado'] ?>")>
                    <span class="glyphicon glyphicon-edit"></span>
                </div>
                    </a>
                <div class="thumbnail altura_400 centralizado" style="border-bottom:3px solid #18A689">
                   
                </div>
            </div>
        </div>
        <?php
        }
        else
        {
        ?>        
            <div class="col-sm-4 col-md-4 margin_top_20 ">
                <div class="col-xs-6 col-md-6 fundo_verde_claro padding_10 fonte_branca text-uppercase negrito"><?php print $dados_dia_semana['dia_semana'] ?></div>
                <div class="col-xs-6 col-md-6 direito fonte_branca fundo_verde_claro padding_top_06 padding_bottom_20">
                    <a href="#" class="link_branco" onclick=abrir_modal("<?php print $dados_dia_semana['dia_semana'] ?>","<?php print $_SESSION['cod_paciente_selecionado'] ?>")>
                    <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </div>
                <div class="thumbnail altura_400 centralizado" style="border-bottom:3px solid #18A689">                    
                </div>
            </div>
        <?php
        }
    $contador++;
    }  
    ?>
        
        <br/><br/>
        
    <!-- inicio - botao para Salvar Dados Pessoais -->
      <div class="col-md-12  direito">
        <button type="submit" class="btn btn_verde_claro"> Salvar Dieta </button>    
        <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_pacientes.php'"> Cancelar </button>    
        </div>
     <!-- fim - botão para Salvar Dados Pessoais -->
            
   
   </form>
  <!-- fim - formulário cadastro de paciente - dados pessoais -->
       
    
</div>
<!-- fim da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->

</div>
<!-- fim container fluid -->
    
    </body>
</html>   
    
    
    




