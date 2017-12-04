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
    

<!-- inicio container fluid -->    
<div class="container-fluid" onclick="recua_menu(10)">
    
    <!-- inicio - titulo da lista de pacientes -->  
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10 padding_top_10">            
            <img src='img/banner_nutris.png' class='img-responsive'>
            
        </div>
    </div>
    <!-- fim - titulo da lista de pacientes -->
    
    
    
    <div class="row">
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10"> 
    
    <!-- inicio -  coluna contadores -->        
    <div class="col-md-6">
    
        <!-- inicio - linha 1 - contadores -->
        <div class="row">

          <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="img/icone_alimentos_index.png" class='img-responsive margin_auto' alt="Ícone Alimentos" title="Ícone Alimentos">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Alimentos</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_alimentos  = "Select * from tb_alimento ";
                $sqlstring_alimentos .= "where cod_status = 1 ";
                $info_alimentos = $db->sql_query($sqlstring_alimentos);
                $linhas_alimentos = $db->sql_linhas($info_alimentos);  
                $dados_alimentos = mysql_fetch_array($info_alimentos);
                  
                print $linhas_alimentos;
                ?>
                </p>                   
              </div>
            </div>
          </div>

            <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="img/icone_refeicoes_index.png" class='img-responsive margin_auto' alt="Ícone Refeições" title="Ícone Refeições">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Refeições</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_refeicoes  = "Select * from tb_refeicao ";
                $sqlstring_refeicoes .= "where cod_status = 1 ";
                $info_refeicoes = $db->sql_query($sqlstring_refeicoes);
                $linhas_refeicoes = $db->sql_linhas($info_refeicoes);  
                $dados_refeicoes = mysql_fetch_array($info_refeicoes);
                  
                print $linhas_refeicoes;
                ?>
                </p>
              </div>
            </div>
          </div>

        </div>
        <!-- fim - linha 1 - contadores -->





        <!-- inicio - linha 2 - contadores -->
        <div class="row">

          <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="img/icone_reeducacoes_index.png" class='img-responsive margin_auto' alt="Ícone Reeducações" title="Ícone Reeducações">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Reeducações</h4>
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_reeducacoes  = "Select * from tb_reeducacao ";
                $sqlstring_reeducacoes .= "where cod_status = 1 ";
                $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);
                $linhas_reeducacoes = $db->sql_linhas($info_reeducacoes);  
                $dados_reeducacoes = mysql_fetch_array($info_reeducacoes);
                  
                print $linhas_reeducacoes;
                ?>
                </p>
              </div>
            </div>
          </div>

            <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="img/icone_programas_index.png" class='img-responsive margin_auto' alt="Ícone Programas" title="Ícone Programas">
              <div class="caption">
                <h4 class='centralizado fonte_verde_claro'>Programas</h4>
                  
                <p class='centralizado fonte_peso_altura'>
                <?php
                $sqlstring_programas  = "Select * from tb_programa ";
                $sqlstring_programas .= "where cod_status = 1 ";
                $info_programas = $db->sql_query($sqlstring_programas);
                $linhas_programas = $db->sql_linhas($info_programas);  
                $dados_programas = mysql_fetch_array($info_programas);
                  
                print $linhas_programas;
                ?>
                </p>                 
                  
              </div>
            </div>
          </div>

        </div>
        <!-- fim - linha 2 - contadores -->
    
    </div>
    <!-- fim coluna contadores -->
     
    
    
    
    <!-- inicio - coluna gráfico paciente ativos x inativos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> 
            
    <?php
    //verificando a quantidade de pacientes inativos - inicialmente trazendo todas as consultas
    $sqlstring_todas_consultas  = "Select * from tb_consulta group by cod_paciente";    
    $info_todas_consultas = $db->sql_query($sqlstring_todas_consultas);
    $linhas_todas_consultas = $db->sql_linhas($info_todas_consultas);  
    
    $pacientes_ativos = 0;
    $pacientes_inativos = 0;
    while($dados_todas_consultas = mysql_fetch_array($info_todas_consultas))
    {
        //verificando a ultima consulta de cada paciente
        $sqlstring_ultima_consulta  = "Select * from tb_consulta where cod_paciente = " . $dados_todas_consultas['cod_paciente'] . " order by cod_consulta desc limit 1";    
        $info_ultima_consulta = $db->sql_query($sqlstring_ultima_consulta);
        $dados_ultima_consulta = mysql_fetch_array($info_ultima_consulta);
        
        if($dados_ultima_consulta['data_consulta'] < '2017-10-10')        
            $pacientes_inativos++;
        else
            $pacientes_ativos++;
        
    }
            
    
    ?>
            
            
    <div class='col-md-6 borda_cinza altura_460'>
    
    <canvas id="myChart" class=" margin_auto altura_400"></canvas>
    
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels: ["Pacientes Ativos", "Pacientes Inativos"],
            datasets: [{
                label: "Pacientes Ativos x Pacientes Inativos",
                backgroundColor: ['rgb(54, 166, 135)', 'rgb(10, 68, 56)'],
                borderColor: 'rgb(255, 255, 255)',
                data: [<?php print $pacientes_ativos ?>, <?php print $pacientes_inativos ?>],               
            }]
        },

        // Configuration options go here
        options: {
            responsive:false,
            title: {
                display: true,
                fontSize: 40,            
                padding:50,
                text: 'PACIENTES ATIVOS x PACIENTES INATIVOS'
        },
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(0, 0, 0)',
                    fontSize: 30,
                    padding:100
                }
        },
            
        tooltips: {
            titleFontSize:40,
            bodyFontSize:40
        },
            
        }
    });
    </script>
        
        
    </div>
    <!-- fim - coluna gráfico paciente ativos x inativos -->
            
            
            
            
        </div>
    </div>
</div>
<!-- fim container fluid -->
    
<!-- scripts para a criação de gráficos chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>