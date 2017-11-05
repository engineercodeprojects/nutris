<?php
//inicia a sessão
session_start();
// inclui o arquivo necessário para gerar o PDF
include ('pdf/mpdf.php');

//conexão com banco de dados
include_once('conexao/connect_db.php');
$db = BancoDeDados::getInstance(); 

//acentuação
mysql_set_charset('utf8');
ini_set('default_charset','UTF-8');

// instrução sql para listar as escolas
$sqlstring_dieta  = "select * from tb_alimento";
$info_dieta = $db->sql_query($sqlstring_dieta);   
                                                   
$linhas_dieta = mysql_num_rows($info_dieta);
                
   
//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod']))
    $_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);
    
$sqlstring_paciente  = "select tb_paciente.nome_paciente, tb_objetivo_paciente.peso, tb_objetivo_paciente.altura, tb_tempo.tempo from tb_paciente ";
$sqlstring_paciente .= "inner join tb_objetivo_paciente on tb_paciente.cod_paciente = tb_objetivo_paciente.cod_paciente ";
$sqlstring_paciente .= "inner join tb_tempo on tb_objetivo_paciente.cod_tempo_programa = tb_tempo.cod_tempo ";
$sqlstring_paciente .= "where tb_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$info_paciente = $db->sql_query($sqlstring_paciente);
$dados_paciente = mysql_fetch_array($info_paciente);





$pagina = 
    "
    <html>    
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Nutris - Plataforma Nutricional</title>

        <!-- Bootstrap -->
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/estilos.css' rel='stylesheet'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
          <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
        <![endif]-->
      </head>
    <body>

    <div class='table-responsive'>
    
                <table class='table table-hover fonte_muito_grande'>
                    <tr class='fundo_azul_escuro fonte_branca'>
                    <td><img src='img/logo_login.png' width=40%></td>                    
                    </tr>
                </table>
                
                
                    ";

                   
                      
$pagina .=
    "
                <table class='table table-hover fonte_grande'>                
                
                <tr>
                <td class='negrito fonte_pequena largura_12'>Paciente:</td>
                <td class='text-capitalize largura_68'>" . $dados_paciente['nome_paciente'] . "</td>
                <td class='negrito largura_10' >Altura:</td>                
                <td class='largura_10'>" . $dados_paciente['altura'] . "</td>
                </tr>
                
                </table>
                    ";
                    

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
     
       
        
$pagina .=    
    "
    <table class='table table-hover fonte_grande'>
    <tr><td class='negrito text-uppercase borda_cinza_inferior'>" . $dados_dia_semana['dia_semana'] . " </td></tr>
    </table>
    ";
        
        while($dados_dieta_selecionada=mysql_fetch_array($info_dieta_selecionada))
        {
            
$pagina .=      
    "
    <table class='table table-hover fonte_grande'>
    <tr><td class='text-uppercase negrito fonte_muito_pequena'>" . $dados_dieta_selecionada['tipo_refeicao'] . " - " . $dados_dieta_selecionada['refeicao'] . "</td></tr>        
    
    <tr>
    <td class='largura_90'>
    ";      
        
        //selecionando os alimentos das refeições selecionadas
        $sqlstring_alimentos_refeicao  = "Select * from tb_refeicao_alimento ";
        $sqlstring_alimentos_refeicao .= "inner join tb_alimento on tb_alimento.cod_alimento = tb_refeicao_alimento.cod_alimento ";
        $sqlstring_alimentos_refeicao .= "where cod_refeicao =  " . $dados_dieta_selecionada['cod_refeicao'];
        $info_alimentos_refeicao = $db->sql_query($sqlstring_alimentos_refeicao);
        $linhas_alimentos = $db->sql_linhas($info_alimentos_refeicao); 
            
            $contador_alimentos = 1;                        
            while($dados_alimentos_refeicao=mysql_fetch_array($info_alimentos_refeicao))
            {
                if($contador_alimentos == $linhas_alimentos)                            
$pagina .=                    "<span class='text-lowercase fonte_muito_pequena'>" . $dados_alimentos_refeicao['alimento'] . " - <span>" . $dados_alimentos_refeicao['caloria'] . " kcal</span><br/><br/></span>";      
                else                            
$pagina .=                "<span class='text-lowercase fonte_muito_pequena'>" . $dados_alimentos_refeicao['alimento'] . " -  <span>" . $dados_alimentos_refeicao['caloria'] . " kcal</span> / </span>"; 
            
            $soma_calorias = $soma_calorias + $dados_alimentos_refeicao['caloria'];
            $soma_calorias_diaria = $soma_calorias_diaria + $dados_alimentos_refeicao['caloria'];
            $contador_alimentos++;
            }
$pagina .=
    "
    </td>
    <td class='centralizado largura_10'>" .  $soma_calorias .  " kcal</td>
    </tr>
    </table>
    ";
        $soma_calorias=0;
        }
        
    }
    
$pagina .=
    "
                
    </div>

    </body>        
    </html>
    ";

$arquivo = '00_dieta.pdf';

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');

// I - abre o navegador
// F - Salva o arquivo no servidor
// D - Salva o arquivo no computador do cliente (pasta downloads)
?>
