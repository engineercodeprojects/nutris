<!DOCTYPE html>
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


//iniciando nova semana
if($_GET['nova']==1)
{
    $sqlstring_zerando_refeicoes  = "Update tb_dieta set ";        
    $sqlstring_zerando_refeicoes .= "comeu_s_n = 0 ";
    $sqlstring_zerando_refeicoes .= "where cod_paciente  = '" . $_SESSION['cod_paciente_selecionado'] . "'";

    $db->string_query($sqlstring_zerando_refeicoes); 
 
}



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
    <link href="css/estilos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>                       
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src=js/estrelas.js></script> 
    
  </head>    
<body class="margin_00">

   
<?php include "includes/menu_paciente.php" ?>    
    
    
<!-- inicio container fluid -->
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25" style="border:0px solid #fff;" >
            <div class="panel-body borda_verde_escuro" style="border:0px solid #fff; ">                 
                    <span class="glyphicon glyphicon-apple fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">DIETA</span>:
                    <span class=" fonte_verde_claro fonte_muito_grande"><?php print $dados_paciente['nome_paciente'] ?></span>
                    <br/>
                    
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
                <input type="text" class="form-control" name="altura" id="altura" maxlength="3" value="<?php print $dados_paciente['altura'] ?>" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio altura -->
                
              <!-- inicio peso atual -->    
              <div class="form-group col-md-2">
                <label for="peso">Peso - Atual (Kg) </label>
                <input type="text" class="form-control" name="peso" id="peso" maxlength="7" value="<?php print $dados_paciente['peso'] ?>" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio peso atual -->
                
              <!-- inicio imc atual -->    
              <div class="form-group col-md-2">
                <label for="imc_atual">IMC - Atual </label>                  
                <input type="text" class="form-control" name="imc_atual" id="imc_atual"  maxlength="5"  readonly  style="background-color:#fff; border:1px solid #ccc">
                  <script>
                    //calculando o IMC atual
                    peso = parseFloat(document.getElementById('peso').value);
                    altura = parseFloat (document.getElementById('altura').value);
                    if(peso > 0 && altura > 0)
                        document.getElementById('imc_atual').value = Math.ceil((peso/(Math.pow((altura/100),2)))*100)/100;
                  </script>
              </div>
              <!-- inicio imc atual -->
                
                
              <!-- inicio peso atual -->    
              <div class="form-group col-md-2">
                <label for="peso_ideal">Peso - Ideal (Kg) </label>
                <input type="text" class="form-control" name="peso_ideal" id="peso_ideal" maxlength="7" readonly  style="background-color:#fff; border:1px solid #ccc">
              </div>
              <!-- inicio peso atual -->
                
                
              <!-- inicio imc ideal -->    
              <div class="form-group col-md-2">
                <label for="imc_ideal">IMC - Ideal </label>
                <input type="text" class="form-control" name="imc_ideal" id="imc_ideal" maxlength="5" value="24.99" readonly style="background-color:#fff; border:1px solid #ccc" onblur="calculo_peso_ideal()">
                  
                  <script>
                  // calculando o Peso ideal
                  if(altura > 0)
                  document.getElementById('peso_ideal').value = ((Math.pow((altura/100),2))*24.99).toFixed(2);
                  </script>
                  
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
   </form>    
        
    <!-- exibicao do resultado do envio do formulario -->
    <div class="row">
        <div class="resultado"></div>
    </div>
     
        
    <?php
    //select dias da semana para formar os paineis da dieta
    $sqlstring_dia_semana  = "Select * from tb_dia_semana ";
    $info_dia_semana = $db->sql_query($sqlstring_dia_semana);
    
    $contador = 10;
    
    while($dados_dia_semana=mysql_fetch_array($info_dia_semana))
    {
        //selecionando as refeições de cada dia
        $sqlstring_dieta_definida  = "Select * from tb_dieta ";
        $sqlstring_dieta_definida .= "inner join tb_refeicao on tb_dieta.cod_refeicao = tb_refeicao.cod_refeicao ";
        $sqlstring_dieta_definida .= "inner join tb_tipo_refeicao on tb_dieta.cod_tipo_refeicao = tb_tipo_refeicao.cod_tipo_refeicao ";
        $sqlstring_dieta_definida .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and ";
        $sqlstring_dieta_definida .= "cod_dia_semana = " . $dados_dia_semana['cod_dia_semana'];
        $info_dieta_selecionada = $db->sql_query($sqlstring_dieta_definida);
      
        ?>
         
        <div class="row  margin_top_10 margin_bottom_10">            
            <div class="col-sm-12 col-md-12 padding_00">                 
                <div class="col-xs-12 col-md-12 fundo_verde_claro padding_10 fonte_branca text-uppercase negrito">
                    <a class="link_branco" data-toggle="collapse" href="#<?php print $dados_dia_semana['cod_dia_semana'] ?>" aria-expanded="true" aria-controls="<?php print $dados_dia_semana['dia_semana'] ?>">
                    <?php print $dados_dia_semana['dia_semana'] ?>
                    </a>
                </div>    
            </div>
        </div>
        
        
        
        <div class="row " id=<?php print $dados_dia_semana['cod_dia_semana'] ?> >           
            <div class="col-sm-12 col-md-12 padding_00" > 
                <div class="thumbnail text-capitalize ">
                    <?php
          
                    while($dados_dieta_selecionada=mysql_fetch_array($info_dieta_selecionada))
                    {
                    ?>    
                        <div class="col-md-12 borda_inferior div_hover">
                            
                        <!-- estrela vazia -->
                        <div class="col-md-1 padding_top_20 centralizado fonte_muito_grande">
                            <form>
                            
                            <input type="hidden" name="cod_paciente" value="<?php print $_SESSION['cod_paciente_selecionado'] ?>"></input>
                            <input type="hidden" name="cod_tipo_refeicao" value="<?php print $dados_dieta_selecionada['cod_tipo_refeicao'] ?>"></input>
                            <input type="hidden" name="cod_dia_semana" value="<?php print $dados_dia_semana['cod_dia_semana'] ?>"></input>
                            
                            <?php
                            if($dados_dieta_selecionada['comeu_s_n'] == 0)
                            {                            
                            ?>
                            <input id="<?php print $dados_dieta_selecionada['cod_dia_semana']."_".$dados_dieta_selecionada['cod_tipo_refeicao'] ?>" type="image" src="img/estrela_vazia.png" value="submit" onclick="troca_estrela('<?php print $dados_dieta_selecionada['cod_dia_semana']."_".$dados_dieta_selecionada['cod_tipo_refeicao'] ?>')">
                            <?php                                
                            }  
                            else
                            {
                            ?>
                            <input id="<?php print $dados_dieta_selecionada['cod_dia_semana']."_".$dados_dieta_selecionada['cod_tipo_refeicao'] ?>" type="image" src="img/estrela_cheia.png" value="submit" onclick="troca_estrela('<?php print $dados_dieta_selecionada['cod_dia_semana']."_".$dados_dieta_selecionada['cod_tipo_refeicao'] ?>')">
                            <?php
                            }
                            ?>
                            </form>
                        </div>
                            
                            
                        <div class="col-md-9 padding_top_10">                        
                            <span class="text-uppercase"><?php print $dados_dieta_selecionada['tipo_refeicao'] . " </span> - <span class='fonte_verde_claro fonte_pequena text-uppercase'>" . $dados_dieta_selecionada['refeicao'] ?></span>
                            <br/>
                    <?php                                                
                        
                        //selecionando os alimentos das refeições selecionadas
                        $sqlstring_alimentos_refeicao  = "Select * from tb_refeicao_alimento ";
                        $sqlstring_alimentos_refeicao .= "inner join tb_alimento on tb_alimento.cod_alimento = tb_refeicao_alimento.cod_alimento ";
                        $sqlstring_alimentos_refeicao .= "where cod_refeicao =  " . $dados_dieta_selecionada['cod_refeicao'];
                        $info_alimentos_refeicao = $db->sql_query($sqlstring_alimentos_refeicao);
                        $linhas_alimentos = $db->sql_linhas($info_alimentos_refeicao);
                        ?>
                        
                        
                        
                        <?php
                        $contador_alimentos = 1;                        
                        while($dados_alimentos_refeicao=mysql_fetch_array($info_alimentos_refeicao))
                        {
                            if($contador_alimentos == $linhas_alimentos)                            
                                print "<span class='text-lowercase fonte_pequena'>" . $dados_alimentos_refeicao['alimento'] . " - <span class='fonte_verde_claro'>" . $dados_alimentos_refeicao['caloria'] . " kcal</span><br/><br/></span>";      
                            else                            
                                print "<span class='text-lowercase fonte_pequena'>" . $dados_alimentos_refeicao['alimento'] . " -  <span class='fonte_verde_claro'>" . $dados_alimentos_refeicao['caloria'] . " kcal</span> / </span>";              
                            
                            $soma_calorias = $soma_calorias + $dados_alimentos_refeicao['caloria'];
                            $soma_calorias_diaria = $soma_calorias_diaria + $dados_alimentos_refeicao['caloria'];
                            $contador_alimentos++;                                                     
                        }
                        
                        ?>                        
                    </div>
                    <div class="col-md-2  padding_top_20 fonte_muito_grande centralizado"> <?php print $soma_calorias . "<span class='fonte_muito_pequena'> kcal</span>"; $soma_calorias=0; ?></div>
                    </div>
                    <?php
                    } 
                    
                    if($soma_calorias_diaria !="")
                    {
                        
                    
                    ?>
                    <div class="col-md-12 borda_inferior div_hover">
                        <div class="col-md-10 col-xs-6 padding_top_10">Total</div>
                    <div class=" col-md-2  col-xs-6 padding_top_10 fonte_muito_grande centralizado fonte_verde_claro negrito padding_bottom_05"> <?php print $soma_calorias_diaria . " kcal"; $soma_calorias_diaria=0; ?></div>
                    </div>
                    <?php
                    }    
                    ?>
                    
                </div>
            </div>
        </div>
        <?php       
    }  
    ?>
        
        <br/><br/>
        <!-- inicio - botao para Iniciar Nova Semana -->
        <div class="col-md-12  direito padding_bottom_50">
        <input type="button" class="btn btn_verde_claro" onclick="location.href='02_paciente_index.php?nova=1'" value="Iniciar Nova Semana"></button>            
        </div>
        <!-- fim - botão para Iniciar Nova Semana -->  
        
   
  
  
       
    
</div>
<!-- fim da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->

</div>
<!-- fim container fluid -->
    
    
    
    
    
    
    </body>
</html>


   
    




<script>
    

    
$(document).ready(function(){ 
    $(".collapse").click('show.bs.collapse', function(){
        $(".collapse").collapse('hide');
    });
    
    $(".collapse").click('shown.bs.collapse', function(){
        $(".collapse").collapse('hide');
    });
   
    $(".collapse").click('hidde.bs.collapse', function(){
        $(".collapse").collapse('show');
    });
    
    $(".collapse").click('hidden.bs.collapse', function(){
        $(".collapse").collapse('show');
    });
});
    
    
    

</script>



<script>

$(document).ready(function(){

    $('form').submit(function(){
        
        var dados = $(this).serialize();
        
       $.ajax({
          
           url: '02_1_processa_refeicao.php',
           method: 'POST',
           dataType: 'html',
           data: dados,
           success: function(data){
               $('.resultado').css({ display:'block'}).html('');
           }
           
       });
        
        return false;
    });

});

</script>