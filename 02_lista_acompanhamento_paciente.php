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
                        <span class=" fonte_verde_claro fonte_muito_grande negrito">ACOMPANHAMENTO</span>                    
                    <br/><br/>
                </div>
               </div>
        </div>
        <!-- fim - titulo da lista de acompanhamentos -->
          
          
          
        
        <div class="row">
        
            <table class="table table-responsive">
            
                <tr class="fundo_verde_claro fonte_branca">
                <td class="largura_10 centralizado">Status</td>
                <td class="largura_10">Data</td>
                <td class="largura_10">Programa</td>
                <td class="largura_10">Reeducaçõa</td>
                <td class="largura_80">Refeições</td>
                <td class="largura_70">Calorias</td>
                </tr>
            
            
                <?php
                // selecionando o acompanhamento
                $sqlstring_acompanha   = "Select * from tb_acompanhamento ";
                $sqlstring_acompanha  .= "inner join tb_programa on tb_programa.cod_programa = tb_acompanhamento.cod_programa ";
                $sqlstring_acompanha  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " group by data_acompanhamento";    
                $info_acompanha = $db->sql_query($sqlstring_acompanha);
                
                while($dados_acompanha = mysql_fetch_array($info_acompanha))
                {
                    if($dados_acompanha['data_acompanhamento'] == date('Y-m-d'))
                        print "<tr class='fundo_verde_agua'>";
                    else
                        print "<tr>";
                    
                    //montando a estrela
                    $sqlstring_estrela = "select count(status) as estrelas from tb_acompanhamento where status='estrela_vazia.png' and data_acompanhamento = '" . $dados_acompanha['data_acompanhamento'] . "' and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " group by data_acompanhamento order by data_acompanhamento, cod_tipo_refeicao";
                    $info_estrela = $db->sql_query($sqlstring_estrela);
                    $dados_estrela = mysql_fetch_array($info_estrela);
                    
                    
                    if($dados_estrela['estrelas'] == 6)
                        print "<td><a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'> <img src='img/estrela_vazia.png' class='img-responsive margin_auto'> </a></td>";                    
                    else if($dados_estrela['estrelas'] > 3)
                        print "<td><a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'> <img src='img/estrela_25.png' class='img-responsive margin_auto'> </a></td>";                    
                    else if($dados_estrela['estrelas'] == 3)
                        print "<td><a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'> <img src='img/estrela_50.png' class='img-responsive margin_auto'> </a></td>";                    
                    else if($dados_estrela['estrelas'] == 0)
                        print "<td><a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'> <img src='img/estrela_cheia.png' class='img-responsive margin_auto'> </a></td>";                    
                    else
                        print "<td><a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'> <img src='img/estrela_75.png' class='img-responsive margin_auto'> </a></td>";                    
                    
                    
                    print "<td> <a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'>" .  date('d/m/Y', strtotime($dados_acompanha['data_acompanhamento'])) . "</a></td>";
                    print "<td class='text-uppercase'> <a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'>" . $dados_acompanha['programa'] . "</a></td>";
                    
                    print "<td class='text-uppercase'>";
                    $sqlstring_reeduca   = "Select * from tb_reeducacao where cod_reeducacao = " . $dados_acompanha['cod_reeducacao'];                    
                    $info_reeduca = $db->sql_query($sqlstring_reeduca);    
                    $dados_reeduca=mysql_fetch_array($info_reeduca);
                    
                    print "<a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'>" . $dados_reeduca['reeducacao'] . "</a>";
                    
                    print "</td>";
                    
                    //quais refeicoes foram seguidas e quais não foram seguidas
                    $sqlstring_seguidas = "select * from tb_acompanhamento where data_acompanhamento = '" . $dados_acompanha['data_acompanhamento'] . "' and cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
                    $info_seguidas = $db->sql_query($sqlstring_seguidas);
                    $linhas_seguidas = $db->sql_linhas($info_seguidas);
                   
                    
                    print "<td><a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'>"; 
                    //seguidas
                    $contador_linhas = 1;
                    $seguidas = 0;                    
                    while($dados_seguidas = mysql_fetch_array($info_seguidas))
                    {
                        if($dados_seguidas['cod_tipo_refeicao'] == 1 and $dados_seguidas['status'] == 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_verde_claro text-uppercase'>Café da Manhã</span>";
                            $seguidas++;
                        }                            
                        else if($dados_seguidas['cod_tipo_refeicao'] == 1 and $dados_seguidas['status'] != 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_cinza text-uppercase'>Café da Manhã</span>";
                        }
                            
                        
                        
                        if($dados_seguidas['cod_tipo_refeicao'] == 2 and $dados_seguidas['status'] == 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_verde_claro text-uppercase'>Lanche da Manhã</span>";
                            $seguidas++;
                        }                            
                        else if($dados_seguidas['cod_tipo_refeicao'] == 2 and $dados_seguidas['status'] != 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_cinza text-uppercase'>Lanche da Manhã</span>";                            
                        }
                            
                        
                        
                        if($dados_seguidas['cod_tipo_refeicao'] == 3 and $dados_seguidas['status'] == 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_verde_claro text-uppercase'>Almoço</span>";
                            $seguidas++;
                        }                            
                        else if($dados_seguidas['cod_tipo_refeicao'] == 3 and $dados_seguidas['status'] != 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_cinza text-uppercase'>Almoço</span>";                            
                        }
                            
                        
                        
                        if($dados_seguidas['cod_tipo_refeicao'] == 4 and $dados_seguidas['status'] == 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_verde_claro text-uppercase'>Café da Tarde</span>";
                            $seguidas++;
                        }                            
                        else if($dados_seguidas['cod_tipo_refeicao'] == 4 and $dados_seguidas['status'] != 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_cinza text-uppercase'>Café da Tarde</span>";
                        }
                            
                                                
                        if($dados_seguidas['cod_tipo_refeicao'] == 5 and $dados_seguidas['status'] == 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_verde_claro text-uppercase'>Jantar</span>";
                            $seguidas++;
                        }                            
                        else if($dados_seguidas['cod_tipo_refeicao'] == 5 and $dados_seguidas['status'] != 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_cinza text-uppercase'>Jantar</span>";
                        }
                            
                        
                        if($dados_seguidas['cod_tipo_refeicao'] == 6 and $dados_seguidas['status'] == 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_verde_claro text-uppercase'>Ceia</span>";
                            $seguidas++;
                        }                            
                        else if($dados_seguidas['cod_tipo_refeicao'] == 6 and $dados_seguidas['status'] != 'estrela_cheia.png')
                        {
                            print "<span class='fonte_muito_pequena fonte_cinza text-uppercase'>Ceia</span>";
                        }
                            
                        
                        
                        if($linhas_seguidas > 1)
                            if($contador_linhas < $linhas_seguidas)
                                print " - ";
                        
                        $contador_linhas++;                            
                    } 
                    
                    print "</a></td>";                                        
                    
                    print "<td class='centralizado fonte_muito_grande'>";
                    print "<a href='02_paciente_acompanhamento_detalhes_dia.php?dia=" . $dados_acompanha['data_acompanhamento'] . "'>" . $seguidas . " / " . $linhas_seguidas  .  "</a></td>";
                    print "</tr>";
                }
                
                
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