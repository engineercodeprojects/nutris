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



//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod']))
    $_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);


$data_acompanhamento = $_GET['dia']; 

$sqlstring_paciente_selecionado  = "select * from tb_paciente ";
$sqlstring_paciente_selecionado .= "where tb_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$info_paciente_selecionado = $db->sql_query($sqlstring_paciente_selecionado);
$dados_paciente_selecionado = mysql_fetch_array($info_paciente_selecionado);
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
    <script src=js/funcoes.js></script> 
    <script src=js/estrelas.js></script> 
    
  </head>    
<body class="margin_00">

   
<?php 
    include "includes/menu_paciente.php";
    include "includes/cabecalho_paciente_cliente.php";
?>    
 
<!-- inicio do container fluid -->    
<div class="container-fluid" onclick="recua_menu(10)">
    
    
    <!-- inicio - painel acompanhamento -->
    <div class="panel panel-default sem_borda col-md-offset-1 col-md-10">
      <div class="panel-body" style="border:0px solid #fff">
    
        <!-- inicio - titulo do formulário -->  
        <div class="row">
            <!-- inicio - painel dados pessoais -->
              <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
                <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #fff; border-left:0px solid #0A4438;">                 
                        <span class="glyphicon glyphicon-star-empty fonte_verde_claro"></span>
                        <span class=" fonte_verde_claro fonte_muito_grande negrito">
                            ACOMPANHAMENTO: 
                        </span>
                        <span class=" fonte_verde_claro fonte_muito_grande">
                            <?php print date('d/m/Y', strtotime($data_acompanhamento)); ?>
                            -
                            <?php
                            $dia_da_semana = date('w', strtotime($data_acompanhamento)); 
                            
                            if($dia_da_semana == 0) print "DOMINGO";
                            else if($dia_da_semana == 1) print "SEGUNDA-FEIRA";
                            else if($dia_da_semana == 2) print "TERÇA-FEIRA";
                            else if($dia_da_semana == 3) print "QUARTA-FEIRA";
                            else if($dia_da_semana == 4) print "QUINTA-FEIRA";
                            else if($dia_da_semana == 5) print "SEXTA-FEIRA";
                            else if($dia_da_semana == 6) print "SÁBADO";                            
                            ?>
                        </span>
                        <br/>
                        <span class="fonte_pequena">
                        <a href='02_lista_acompanhamento_paciente.php' alt='Reeducação Completa' title='Reeducação Completa'>Acompanhamento Reeducação</a></span>
                        <span class='glyphicon glyphicon-chevron-right fonte_cinza'></span>
                        <span class="fonte_verde_claro fonte_pequena">Detalhes da Reeducação</span>
                    
                    <br/><br/>
                </div>
               </div>
        </div>
        <!-- fim - titulo da lista de acompanhamentos -->
          
          
          
                <?php                
                // selecionando o acompanhamento do dia
                $sqlstring_acompanha   = "Select * from tb_acompanhamento ";
                $sqlstring_acompanha  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_acompanhamento.cod_tipo_refeicao ";
                $sqlstring_acompanha  .= "inner join tb_reeducacao on tb_reeducacao.cod_reeducacao = tb_acompanhamento.cod_reeducacao ";
                $sqlstring_acompanha  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                $sqlstring_acompanha  .= " and data_acompanhamento = '" . $data_acompanhamento . "' ";                
                $info_acompanha = $db->sql_query($sqlstring_acompanha);
                
            
                while($dados_acompanha = mysql_fetch_array($info_acompanha))
                {
                        //alimentos da refeicao                    
                        //seleciona a refeicao utilizada para formar essa reeducacao
                        $sqlstring_refeicao   = "Select * from tb_reeducacao_refeicao ";                        
                        $sqlstring_refeicao   .= "where cod_reeducacao = " . $dados_acompanha['cod_reeducacao'];                    
                        $sqlstring_refeicao   .= " and cod_tipo_refeicao = " . $dados_acompanha['cod_tipo_refeicao'];
                        $info_refeicao = $db->sql_query($sqlstring_refeicao);    
                        $dados_refeicao=mysql_fetch_array($info_refeicao);
                    
                        
                        //selecionando os alimentos e as porçoões utilizadas para forma a refeição
                        $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                        $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                        $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                        $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                        $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_refeicao['cod_refeicao'];                                                 
                        $info_alimentos = $db->sql_query($sqlstring_alimentos);    
                        
                        $dados_alimentos=mysql_fetch_array($info_alimentos);
                        
                   
                    
                        if($dados_refeicao['cod_refeicao'] != 0 )
                        {      
                            print "<div class='row padding_10 borda_inferior'>";
                            print "<div class='col-md-1 padding_30'>";
                            ?>
                            <form>
                            <input type="hidden" name="cod_paciente" value="<?php print $_SESSION['cod_paciente_selecionado'] ?>"></input>
                            <input type="hidden" name="cod_tipo_refeicao" value="<?php print $dados_acompanha['cod_tipo_refeicao'] ?>"></input>
                            <input type="hidden" name="data_acompanhamento" value="<?php print date('d/m/Y', strtotime($data_acompanhamento))  ?>"></input>
                            <?php
                            //estrela nova
                            if($dados_acompanha['status'] == 'estrela_vazia.png')
                            {                            
                            ?>
                            <input id="<?php print $_SESSION['cod_paciente_selecionado']."_".$dados_acompanha['cod_tipo_refeicao']."_".date('d/m/Y', strtotime($data_acompanhamento)) ?>" type="image" src="img/estrela_vazia.png" value="submit" onclick="troca_estrela('<?php print $_SESSION['cod_paciente_selecionado']."_".$dados_acompanha['cod_tipo_refeicao']."_".date('d/m/Y', strtotime($data_acompanhamento)) ?>')">
                            <?php
                            }  
                            else
                            {
                            ?>
                            <input id="<?php print $_SESSION['cod_paciente_selecionado']."_".$dados_acompanha['cod_tipo_refeicao']."_".date('d/m/Y', strtotime($data_acompanhamento)) ?>" type="image" src="img/estrela_cheia.png" value="submit" onclick="troca_estrela('<?php print $_SESSION['cod_paciente_selecionado']."_".$dados_acompanha['cod_tipo_refeicao']."_".date('d/m/Y', strtotime($data_acompanhamento)) ?>')">
                            <?php
                            }
                            ?>
                            </form>
                            <?php
                            print "</div>";
                            
                            
                           
                            print "<div  class='col-md-1 text-uppercase margin_auto'>";
                            print "<img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=100 class='img-responsive margin_auto'>";
                            print "</div>";
                            
                            print "<div  class='col-md-8 text-uppercase padding_10'>";
                            
                            print "<span class='fonte_verde_claro text-uppercase negrito'>" . $dados_acompanha['tipo_refeicao'] . "</span>";
                            print " - <span class='text-uppercase'>" . $dados_alimentos['refeicao'] . "</span>";
                            print "<br/>";
                            print "<span class='fonte_muito_pequena text-uppercase'>";
                            if($dados_alimentos['qtde_porcoes'] == 1)
                                print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                            else
                                print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                            $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                            print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";
                            
                            print "</span>";
                            
                            
                            if($linhas_alimentos > 1)
                            {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;                            
                                while($contador_alimentos < $linhas_alimentos)
                                {
                                $dados_alimentos=mysql_fetch_array($info_alimentos);
                                    //verifica se mostro porção ou porções
                                    if($dados_alimentos['qtde_porcoes'] == 1)
                                        print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                    else
                                        print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";

                                    //insere a qtde de calorias total do alimento e não da refeição
                                    print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";


                                    if($linhas_alimentos - $contador_alimentos == 1)
                                        print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                    else
                                        print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";


                                    $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];

                                $contador_alimentos++;
                                }
                            }
                            
                        print "</div>";
                            
                        print "<div class='col-md-2 fonte_muito_grande direito padding_10'>" . $total_calorias . " kcal</div>"; 
                        $total_calorias_diarias = $total_calorias_diarias + $total_calorias;
                        $total_calorias = 0;
                            
                        print "</div>";
                        }
                } 
                
                print "<div class='col-md-12 direito fonte_muito_grande padding_top_20'>";
                print "<span class='fonte_verde_claro negrito'>TOTAL CALORIAS: </font> </span>";
                print $total_calorias_diarias . " kcal";
                print "</div>";
                    
                
                ?>
                
                
            </table>
            
        </div>
          
          
        </div>
    </div>
    <!-- inicio - painel acompanhamento -->
    
    
    
    
    
    
    
</div>
<!-- inicio do container fluid -->    
    
</body>
</html>




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