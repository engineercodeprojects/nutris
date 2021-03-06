<!DOCTYPE html>
<?php 
//iniciando a sessão
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

//atualizando os dados caso o formulário tenha sido enviado
if( $_SERVER['REQUEST_METHOD']=='POST')
    {
        //recuperando dados pessoais
        $atividade_fisica_sn = $_POST['opt_atividade_fisica'];
        $qual_atividade_fisica_1 = $_POST['qual_atividade_fisica_1_1'];
        $domingo_1 = $_POST['chk_domingo_1_1'];
        $segunda_1 = $_POST['chk_segunda_1_1'];
        $terca_1 = $_POST['chk_terca_1_1'];
        $quarta_1 = $_POST['chk_quarta_1_1'];
        $quinta_1 = $_POST['chk_quinta_1_1'];
        $sexta_1 = $_POST['chk_sexta_1_1'];
        $sabado_1 = $_POST['chk_sabado_1_1'];
        $horario_inicio_atividade_1 = $_POST['horario_inicio_atividade_fisica_1_1'];
        $horario_termino_atividade_1 = $_POST['horario_termino_atividade_fisica_1_1'];
        
        
        if($domingo_1 != "")    $dias_semana_1 = ";" . $domingo_1;
        if($segunda_1 != "")    $dias_semana_1 = $dias_semana_1 . ";" . $segunda_1;
        if($terca_1  != "")     $dias_semana_1 = $dias_semana_1 . ";" . $terca_1;
        if($quarta_1  != "")    $dias_semana_1 = $dias_semana_1 . ";" . $quarta_1;
        if($quinta_1  != "")    $dias_semana_1 = $dias_semana_1 . ";" . $quinta_1;
        if($sexta_1  != "")     $dias_semana_1 = $dias_semana_1 . ";" . $sexta_1;
        if($sabado_1  != "")    $dias_semana_1 = $dias_semana_1 . ";" . $sabado_1;
        
        
        
        $qual_atividade_fisica_2 = $_POST['qual_atividade_fisica_1_2'];
        $domingo_2 = $_POST['chk_domingo_1_2'];
        $segunda_2 = $_POST['chk_segunda_1_2'];
        $terca_2 = $_POST['chk_terca_1_2'];
        $quarta_2 = $_POST['chk_quarta_1_2'];
        $quinta_2 = $_POST['chk_quinta_1_2'];
        $sexta_2 = $_POST['chk_sexta_1_2'];
        $sabado_2 = $_POST['chk_sabado_1_2'];
        $horario_inicio_atividade_2 = $_POST['horario_inicio_atividade_fisica_1_2'];
        $horario_termino_atividade_2 = $_POST['horario_termino_atividade_fisica_1_2'];
        
        if($domingo_2 != "")    $dias_semana_2 = ";" . $domingo_2;
        if($segunda_2 != "")    $dias_semana_2 = $dias_semana_2 . ";" . $segunda_2;
        if($terca_2  != "")     $dias_semana_2 = $dias_semana_2 . ";" . $terca_2;
        if($quarta_2  != "")    $dias_semana_2 = $dias_semana_2 . ";" . $quarta_2;
        if($quinta_2  != "")    $dias_semana_2 = $dias_semana_2 . ";" . $quinta_2;
        if($sexta_2  != "")     $dias_semana_2 = $dias_semana_2 . ";" . $sexta_2;
        if($sabado_2  != "")    $dias_semana_2 = $dias_semana_2 . ";" . $sabado_2;
        
        
        $qual_atividade_fisica_3 = $_POST['qual_atividade_fisica_1_3'];
        $domingo_3 = $_POST['chk_domingo_1_3'];
        $segunda_3 = $_POST['chk_segunda_1_3'];
        $terca_3 = $_POST['chk_terca_1_3'];
        $quarta_3 = $_POST['chk_quarta_1_3'];
        $quinta_3 = $_POST['chk_quinta_1_3'];
        $sexta_3 = $_POST['chk_sexta_1_3'];
        $sabado_3 = $_POST['chk_sabado_1_3'];
        $horario_inicio_atividade_3 = $_POST['horario_inicio_atividade_fisica_1_3'];
        $horario_termino_atividade_3 = $_POST['horario_termino_atividade_fisica_1_3'];
        
        if($domingo_3 != "")    $dias_semana_3 = ";" . $domingo_3;
        if($segunda_3 != "")    $dias_semana_3 = $dias_semana_3 . ";" . $segunda_3;
        if($terca_3  != "")     $dias_semana_3 = $dias_semana_3 . ";" . $terca_3;
        if($quarta_3  != "")    $dias_semana_3 = $dias_semana_3 . ";" . $quarta_3;
        if($quinta_3  != "")    $dias_semana_3 = $dias_semana_3 . ";" . $quinta_3;
        if($sexta_3  != "")     $dias_semana_3 = $dias_semana_3 . ";" . $sexta_3;
        if($sabado_3  != "")    $dias_semana_3 = $dias_semana_3 . ";" . $sabado_3;
    
//        if($sabado_3  != "" and $dias_semana_3 != "")       $dias_semana_3 = $dias_semana_3 . ";" . $sabado_3;
//        if($sabado_3  != "" and $dias_semana_3 == "")                        $dias_senana_3 = $sabado_3;
        
    
        $qual_atividade_fisica_4 = $_POST['qual_atividade_fisica_1_4'];
        $domingo_4 = $_POST['chk_domingo_1_4'];
        $segunda_4 = $_POST['chk_segunda_1_4'];
        $terca_4 = $_POST['chk_terca_1_4'];
        $quarta_4 = $_POST['chk_quarta_1_4'];
        $quinta_4 = $_POST['chk_quinta_1_4'];
        $sexta_4 = $_POST['chk_sexta_1_4'];
        $sabado_4 = $_POST['chk_sabado_1_4'];
        $horario_inicio_atividade_4 = $_POST['horario_inicio_atividade_fisica_1_4'];
        $horario_termino_atividade_4 = $_POST['horario_termino_atividade_fisica_1_4'];
        
        if($domingo_4 != "")    $dias_semana_4 = ";" . $domingo_4;
        if($segunda_4 != "")    $dias_semana_4 = $dias_semana_4 . ";" . $segunda_4;
        if($terca_4  != "")     $dias_semana_4 = $dias_semana_4 . ";" . $terca_4;
        if($quarta_4  != "")    $dias_semana_4 = $dias_semana_4 . ";" . $quarta_4;
        if($quinta_4  != "")    $dias_semana_4 = $dias_semana_4 . ";" . $quinta_4;
        if($sexta_4  != "")     $dias_semana_4 = $dias_semana_4 . ";" . $sexta_4;
        if($sabado_4  != "")    $dias_semana_4 = $dias_semana_4 . ";" . $sabado_4;
    
    
        $qual_atividade_fisica_5 = $_POST['qual_atividade_fisica_1_5'];
        $domingo_5 = $_POST['chk_domingo_1_5'];
        $segunda_5 = $_POST['chk_segunda_1_5'];
        $terca_5 = $_POST['chk_terca_1_5'];
        $quarta_5 = $_POST['chk_quarta_1_5'];
        $quinta_5 = $_POST['chk_quinta_1_5'];
        $sexta_5 = $_POST['chk_sexta_1_5'];
        $sabado_5 = $_POST['chk_sabado_1_5'];
        $horario_inicio_atividade_5 = $_POST['horario_inicio_atividade_fisica_1_5'];
        $horario_termino_atividade_5 = $_POST['horario_termino_atividade_fisica_1_5'];
        
        if($domingo_5 != "")    $dias_semana_5 = ";" . $domingo_5;
        if($segunda_5 != "")    $dias_semana_5 = $dias_semana_5 . ";" . $segunda_5;
        if($terca_5  != "")     $dias_semana_5 = $dias_semana_5 . ";" . $terca_5;
        if($quarta_5  != "")    $dias_semana_5 = $dias_semana_5 . ";" . $quarta_5;
        if($quinta_5  != "")    $dias_semana_5 = $dias_semana_5 . ";" . $quinta_5;
        if($sexta_5  != "")     $dias_semana_5 = $dias_semana_5 . ";" . $sexta_5;
        if($sabado_5  != "")    $dias_semana_5 = $dias_semana_5 . ";" . $sabado_5;
    
        /*
        NÃO DEVE SER INSERIDO ; QUANDO FOR UNICO NUMERO DIFERENTE DE DOMINGO
        */
        $sqlstring_atualizar_atividades_fisicas  = "update tb_atividade_fisica set ";
        $sqlstring_atualizar_atividades_fisicas .= "atividade_fisica_sn = '" . $atividade_fisica_sn . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "qual_atividade_1 = '" . $qual_atividade_fisica_1 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "dias_semana_1 = '" . $dias_semana_1 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "inicio_1 = '" . $horario_inicio_atividade_1 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "termino_1 = '" . $horario_termino_atividade_1 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "qual_atividade_2 = '" . $qual_atividade_fisica_2 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "dias_semana_2 = '" . $dias_semana_2 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "inicio_2 = '" . $horario_inicio_atividade_2 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "termino_2 = '" . $horario_termino_atividade_2 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "qual_atividade_3 = '" . $qual_atividade_fisica_3 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "dias_semana_3 = '" . $dias_semana_3 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "inicio_3 = '" . $horario_inicio_atividade_3 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "termino_3 = '" . $horario_termino_atividade_3 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "qual_atividade_4 = '" . $qual_atividade_fisica_4 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "dias_semana_4 = '" . $dias_semana_4 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "inicio_4 = '" . $horario_inicio_atividade_4 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "termino_4 = '" . $horario_termino_atividade_4 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "qual_atividade_5 = '" . $qual_atividade_fisica_5 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "dias_semana_5 = '" . $dias_semana_5 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "inicio_5 = '" . $horario_inicio_atividade_5 . "', ";
        $sqlstring_atualizar_atividades_fisicas .= "termino_5 = '" . $horario_termino_atividade_5 . "' ";
        $sqlstring_atualizar_atividades_fisicas .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
        $sqlstring_atualizar_atividades_fisicas .= " and  cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
        
        $db->string_query($sqlstring_atualizar_atividades_fisicas); 
        
        
        
        
        $fumante_sn = $_POST['opt_fumante'];
        $qtos_cigarros = $_POST['qtos_cigarros'];
        
        $bebida_alcoolica_sn = $_POST['opt_bebida_alcoolica'];
        $frequencia_bebida = $_POST['frequencia_bebida_alcoolica'];
        
        $incomodo_gastrointestinal_sn = $_POST['opt_incomodo_gastrointestinal'];
        $qual_incomodo_gastrointestinal = $_POST['qual_incomodo_gastrointestinal'];
        $quando_sintomas_aparecem = $_POST['quando_sintomas_aparecem'];
        
        
        $medicamento_suplemento_sn = $_POST['opt_medicamento_suplemento'];
        $qual_medicamento_suplemento = $_POST['qual_medicamento_suplemento'];
        $medicamento_recomendado = $_POST['medicamento_recomendado'];
        
        $doencas_passadas = $_POST['doencas_passadas'];
        $historico_familiar = $_POST['historico_familiar'];
        $outras_informacoes_anamnese = $_POST['outras_informacoes_anamnese'];
       
        
        $sqlstring_atualizar_antopometria  = "update tb_historico_paciente set ";
        $sqlstring_atualizar_antopometria .= "fumante_sn = '" . $fumante_sn . "', ";
        $sqlstring_atualizar_antopometria .= "qtde_cigarros = '" . $qtos_cigarros . "', ";
        $sqlstring_atualizar_antopometria .= "bebida_alcoolica_sn = '" . $bebida_alcoolica_sn . "', ";
        $sqlstring_atualizar_antopometria .= "cod_frequencia_bebida_alcoolica = '" . $frequencia_bebida . "', ";
        $sqlstring_atualizar_antopometria .= "incomodo_gastrointestinal_sn = '" . $incomodo_gastrointestinal_sn . "', ";
        $sqlstring_atualizar_antopometria .= "qual_incomodo_gastrointestinal = '" . $qual_incomodo_gastrointestinal . "', ";
        $sqlstring_atualizar_antopometria .= "quando_sintomas_aparecem = '" . $quando_sintomas_aparecem . "', ";
        $sqlstring_atualizar_antopometria .= "medicamento_suplemento_sn = '" . $medicamento_suplemento_sn . "', ";
        $sqlstring_atualizar_antopometria .= "qual_medicamento_suplemento = '" . $qual_medicamento_suplemento . "', ";
        $sqlstring_atualizar_antopometria .= "medicamento_recomendado = '" . $medicamento_recomendado . "', ";
        $sqlstring_atualizar_antopometria .= "doencas_passadas = '" . $doencas_passadas . "', ";
        $sqlstring_atualizar_antopometria .= "historico_familiar = '" . $historico_familiar . "', ";        
        $sqlstring_atualizar_antopometria .= "outras_informacoes_anamnese = '" . $outras_informacoes_anamnese . "' ";        
        $sqlstring_atualizar_antopometria .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
        $sqlstring_atualizar_antopometria .= " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
        
        $db->string_query($sqlstring_atualizar_antopometria); 
       
        
        //preparando informações para carregar no modal        
        $numero_botoes = 2;
        $titulo = "Paciente - Anamnese";
        $mensagem = "A anamnese foi cadastrada com sucesso!";
        $btn_esquerda = "Avaliação Nutricional";
        $btn_esquerda_destino = "01_1_cadastro_paciente_avaliacao.php";
        $btn_direita = "Informações do Paciente";
        $btn_direita_destino = "01_1_detalhes_paciente.php";
        $btn_x = "01_1_detalhes_paciente.php";
    }

//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod_consulta']))
    //$_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);
    $_SESSION['cod_consulta_selecionada'] = base64_decode($_GET['cod_consulta']);
    
$sqlstring_atividades_fisicas  = "select * from tb_atividade_fisica ";
$sqlstring_atividades_fisicas .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$sqlstring_atividades_fisicas .= " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
$info_atividades_fisicas = $db->sql_query($sqlstring_atividades_fisicas);
$dados_atividades_fisicas = mysql_fetch_array($info_atividades_fisicas);

$dias_semana_1_ = explode(";",$dados_atividades_fisicas['dias_semana_1']);
$dias_semana_2_ = explode(";",$dados_atividades_fisicas['dias_semana_2']);
$dias_semana_3_ = explode(";",$dados_atividades_fisicas['dias_semana_3']);
$dias_semana_4_ = explode(";",$dados_atividades_fisicas['dias_semana_4']);
$dias_semana_5_ = explode(";",$dados_atividades_fisicas['dias_semana_5']);

// recuperando informações para preencher o formulário em caso de alteração anamnese paciente - histórico paciente
$sqlstring_historico_paciente  = "select tb_historico_paciente.*, tb_paciente.* from tb_historico_paciente ";
$sqlstring_historico_paciente .= "inner join tb_paciente on tb_paciente.cod_paciente = tb_historico_paciente.cod_paciente ";
$sqlstring_historico_paciente .= "where tb_historico_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$sqlstring_historico_paciente .= " and tb_historico_paciente.cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
$info_historico_paciente = $db->sql_query($sqlstring_historico_paciente);
$dados_historico_paciente = mysql_fetch_array($info_historico_paciente);


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
    include "includes/cabecalho_paciente_anamnese.php";
        
?>     

<!-- inicio container fluid -->
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
     <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel anamnese -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-heart-empty fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">CONSULTA ANAMNESE</span>: 
                    <span class="fonte_verde_claro fonte_muito_grande"><?php print date('d/m/Y', strtotime($dados_historico_paciente['data_historico_paciente'])) ?></span>
                    <br/>
                    <span class="fonte_pequena">                        
                        <a href="01_lista_consultas_paciente.php">Consultas</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Anamnese</span>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_avaliacao.php">Avaliação Nutricional</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_antropometria.php">Antropometria</a>  
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_prescricao.php">Reeducação Alimentar</a>
                    </span> 
                    <br/><br/>
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
    <!-- inicio - formulario paciente - anamnese -->   
    <form method="post" action="">
    
    <!-- inicio - linha - atividade física -->    
    <div class="row">
        
            <!-- inicio - painel atividade física -->
            <div class="panel panel-default">
                <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
                    
                    
                    <!-- inicio - sim ou não atividade física -->
                    <div class="form-group col-md-11">
                    <label for="pratica_atividade_fisica">Pratica atividade física atualmente?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_atividade_fisica" id="opt_atividade_fisica_s" value="1" onclick="exibir_ocultar_atividades_fisicas(1)">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_atividade_fisica" id="opt_atividade_fisica_n" value="2" onclick="exibir_ocultar_atividades_fisicas(2)" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não atividade física -->

                    <div  class="form-group direito col-md-1">
                            
                            <a href="#" id="btn_mais_1" name="btn_mais_1" onclick="exibir_ocultar_atividades_fisicas(3)"   style="display:none">
                            <span class="glyphicon glyphicon-plus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                            
                            <a href="#" id="btn_mais_2" name="btn_mais_2" onclick="exibir_ocultar_atividades_fisicas(4)" style="display:none">
                            <span class="glyphicon glyphicon-plus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                        
                            <a href="#" id="btn_mais_3" name="btn_mais_3" onclick="exibir_ocultar_atividades_fisicas(7)" style="display:none">
                            <span class="glyphicon glyphicon-plus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                        
                            <a href="#" id="btn_mais_4" name="btn_mais_4" onclick="exibir_ocultar_atividades_fisicas(8)" style="display:none">
                            <span class="glyphicon glyphicon-plus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                                                
                            <a href="#" id="btn_mais_morto" name="btn_mais_morto"  style="display:none">
                            <span class="glyphicon glyphicon-plus-sign fonte_cinza fonte_muito_grande"></span>
                            </a>
                        
                            <a href="#" id="btn_menos_1" name="btn_menos_1"  onclick="exibir_ocultar_atividades_fisicas(5)"  style="display:none">
                            <span class="glyphicon glyphicon-minus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                            
                            <a href="#" id="btn_menos_2" name="btn_menos_2"  onclick="exibir_ocultar_atividades_fisicas(6)"  style="display:none">
                            <span class="glyphicon glyphicon-minus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                        
                            <a href="#" id="btn_menos_3" name="btn_menos_3"  onclick="exibir_ocultar_atividades_fisicas(10)"  style="display:none">
                            <span class="glyphicon glyphicon-minus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                        
                            <a href="#" id="btn_menos_4" name="btn_menos_4"  onclick="exibir_ocultar_atividades_fisicas(9)"  style="display:none">
                            <span class="glyphicon glyphicon-minus-sign fonte_verde_claro fonte_muito_grande"></span>
                            </a>
                        
                            <a href="#" id="btn_menos_morto" name="btn_menos_morto"  style="display:none">
                            <span class="glyphicon glyphicon-minus-sign fonte_cinza fonte_muito_grande"></span>
                            </a>
                        
                            
                        </div>
                    
                    <!-- inicio - camada display - atividade 1 -->
                    <div class="col-md-12" id="atividade_fisica_1_1" name="atividade_fisica_1_1" style="display:none">                    
                        
                        <!-- inicio - qual atividade física 1 -->
                        <div class="form-group col-md-4">
                            <label for="qual_atividade">Qual?</label>
                            <input type="text" class="form-control" name="qual_atividade_fisica_1_1" id="qual_atividade_fisica_1_1" value="<?php print $dados_atividades_fisicas['qual_atividade_1'] ?>" maxlength="40">
                        </div>
                        <!-- fim - qual atividade física -->

                        <!-- inicio - dias da semana da atividade física -->
                        <div class="form-group col-md-4">
                            <label for="pratica_atividade_fisica">Dias da Semana</label>
                            <br/>
                            <label class="checkbox-inline">
                              <?php 
                                if(array_search('0', $dias_semana_1_) != "")                                     
                                {                                    
                                    print '<input type="checkbox" name="chk_domingo_1_1" id="chk_domingo_1_1" value="0" checked> D';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_domingo_1_1" id="chk_domingo_1_1" value="0"> D';
                                }
                                ?>
                            </label>

                            <label class="checkbox-inline">                                
                                <?php                                     
                                if(array_search('1', $dias_semana_1_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_1" id="chk_segunda_1_1" value="1" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_1" id="chk_segunda_1_1" value="1"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('2', $dias_semana_1_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_1" id="chk_terca_1_1" value="2" checked> T';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_1" id="chk_terca_1_1" value="2"> T';
                                }                                
                                ?>                              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('3', $dias_semana_1_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_1" id="chk_quarta_1_1" value="3" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_1" id="chk_quarta_1_1" value="3"> Q';
                                }                                
                                ?>                               
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('4', $dias_semana_1_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_1" id="chk_quinta_1_1" value="4" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_1" id="chk_quinta_1_1" value="4"> Q';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('5', $dias_semana_1_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_1" id="chk_sexta_1_1" value="5" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_1" id="chk_sexta_1_1" value="5"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('6', $dias_semana_1_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_1" id="chk_sabado_1_1" value="6" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_1" id="chk_sabado_1_1" value="6"> S';
                                }                                
                                ?>                              
                            </label>
                        </div>
                            <!-- fim - dias da semana da atividade física -->

                        
                        <!-- inicio - horário início atividade física -->                    
                        <div class="form-group col-md-2">
                            <label for="horario_inicio_atividade_fisica">Início</label>
                            <input type="time" class="form-control" name="horario_inicio_atividade_fisica_1_1" id="horario_inicio_atividade_fisica_1_1" value="<?php print $dados_atividades_fisicas['inicio_1'] ?>">
                        </div>
                        <!-- fim - horário início atividade física -->

                        <!-- inicio - horário termino atividade física -->
                        <div class="form-group col-md-2">
                            <label for="horario_termino_atividade_fisica">Término</label>
                            <input type="time" class="form-control" name="horario_termino_atividade_fisica_1_1" id="horario_termino_atividade_fisica_1_1"  value="<?php print $dados_atividades_fisicas['termino_1'] ?>">
                        </div>
                            <!-- fim - horário termino atividade física -->   
                        <!-- fim - painel atividade física 1 -->
                    </div>
                    <!-- fim - camada display - atividade 1 -->

                    
                    
                    
                    <!-- inicio - camada display - atividade 2 -->
                    <div class="col-md-12" id="atividade_fisica_1_2" name="atividade_fisica_1_2" style="display:none">

                        <!-- inicio - qual atividade física 2 -->
                        <div class="form-group col-md-4">
                            <label for="qual_atividade">Qual?</label>
                            <input type="text" class="form-control" name="qual_atividade_fisica_1_2" id="qual_atividade_fisica_1_2" value="<?php print $dados_atividades_fisicas['qual_atividade_2'] ?>" maxlength="40">
                        </div>
                        <!-- fim - qual atividade física -->

                        <!-- inicio - dias da semana da atividade física -->
                        <div class="form-group col-md-4">
                            <label for="pratica_atividade_fisica">Dias da Semana</label>
                            <br/>
                            <label class="checkbox-inline">
                                <?php                                     
    
                                   
                                if(array_search('0', $dias_semana_2_) != "") 
                                {                                    
                                    print '<input type="checkbox" name="chk_domingo_1_2" id="chk_domingo_1_2" value="0" checked> D';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_domingo_1_2" id="chk_domingo_1_2" value="0"> D';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('1', $dias_semana_2_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_2" id="chk_segunda_1_2" value="1" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_2" id="chk_segunda_1_2" value="1"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('2', $dias_semana_2_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_2" id="chk_terca_1_2" value="2" checked> T';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_2" id="chk_terca_1_2" value="2"> T';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('3', $dias_semana_2_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_2" id="chk_quarta_1_2" value="3" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_2" id="chk_quarta_1_2" value="3"> Q';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('4', $dias_semana_2_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_2" id="chk_quinta_1_2" value="4" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_2" id="chk_quinta_1_2" value="4"> Q';
                                }                                
                                ?>                              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('5', $dias_semana_2_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_2" id="chk_sexta_1_2" value="5" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_2" id="chk_sexta_1_2" value="5"> S';
                                }                                
                                ?>                              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('6', $dias_semana_2_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_2" id="chk_sabado_1_2" value="6" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_2" id="chk_sabado_1_2" value="6"> S';
                                }                                
                                ?>                                                            
                            </label>
                        </div>
                            <!-- fim - dias da semana da atividade física -->


                        <!-- inicio - horário início atividade física -->                    
                        <div class="form-group col-md-2">
                            <label for="horario_inicio_atividade_fisica">Início</label>
                            <input type="time" class="form-control" name="horario_inicio_atividade_fisica_1_2" id="horario_inicio_atividade_fisica_1_2" value="<?php print $dados_atividades_fisicas['inicio_2']?>">
                        </div>
                        <!-- fim - horário início atividade física -->

                        <!-- inicio - horário termino atividade física -->
                        <div class="form-group col-md-2">
                            <label for="horario_termino_atividade_fisica">Término</label>
                            <input type="time" class="form-control" name="horario_termino_atividade_fisica_1_2" id="horario_termino_atividade_fisica_1_2" value="<?php print $dados_atividades_fisicas['termino_2']?>">
                        </div>
                            <!-- fim - horário termino atividade física -->   
                        <!-- fim - painel atividade física 2 -->
                    </div>
                    <!-- fim - camada display - atividade 2 -->
                    
                    
                    
                    <!-- inicio - camada display - atividade 3 -->
                    <div class="col-md-12" id="atividade_fisica_1_3" name="atividade_fisica_1_3" style="display:none">
                        <!-- inicio - qual atividade física 3 -->
                        <div class="form-group col-md-4">
                            <label for="qual_atividade">Qual?</label>
                            <input type="text" class="form-control" name="qual_atividade_fisica_1_3" id="qual_atividade_fisica_1_3" value="<?php print $dados_atividades_fisicas['qual_atividade_3'] ?>" maxlength="40">
                        </div>
                        <!-- fim - qual atividade física -->

                        <!-- inicio - dias da semana da atividade física -->
                        <div class="form-group col-md-4">
                            <label for="pratica_atividade_fisica">Dias da Semana</label>
                            <br/>
                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('0', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_domingo_1_3" id="chk_domingo_1_3" value="0" checked> D';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_domingo_1_3" id="chk_domingo_1_3" value="0"> D';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('1', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_3" id="chk_segunda_1_3" value="1" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_3" id="chk_segunda_1_3" value="1"> S';
                                }                                
                                ?>              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('2', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_3" id="chk_terca_1_3" value="2" checked> T';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_3" id="chk_terca_1_3" value="2"> T';
                                }                                
                                ?>              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('3', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_3" id="chk_quarta_1_3" value="3" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_3" id="chk_quarta_1_3" value="3"> Q';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('4', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_3" id="chk_quinta_1_3" value="4" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_3" id="chk_quinta_1_3" value="4"> Q';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('5', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_3" id="chk_sexta_1_3" value="5" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_3" id="chk_sexta_1_3" value="5"> S';
                                }                                
                                ?>                              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('6', $dias_semana_3_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_3" id="chk_sabado_1_3" value="6" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_3" id="chk_sabado_1_3" value="6"> S';
                                }                                
                                ?>                                                            
                            </label>
                        </div>
                            <!-- fim - dias da semana da atividade física -->


                        <!-- inicio - horário início atividade física -->                    
                        <div class="form-group col-md-2">
                            <label for="horario_inicio_atividade_fisica">Início</label>
                            <input type="time" class="form-control" name="horario_inicio_atividade_fisica_1_3" id="horario_inicio_atividade_fisica_1_3" value="<?php print $dados_atividades_fisicas['inicio_3'] ?>">
                        </div>
                        <!-- fim - horário início atividade física -->

                        <!-- inicio - horário termino atividade física -->
                        <div class="form-group col-md-2">
                            <label for="horario_termino_atividade_fisica">Término</label>
                            <input type="time" class="form-control" name="horario_termino_atividade_fisica_1_3" id="horario_termino_atividade_fisica_1_3" value="<?php print $dados_atividades_fisicas['termino_3'] ?>">
                        </div>
                            <!-- fim - horário termino atividade física -->   
                        <!-- fim - painel atividade física 3 -->
                     </div>
                    <!-- fim - camada display - atividade 3 -->
                        
                        
                        
                        
                         <!-- inicio - camada display - atividade 4 -->
                    <div class="col-md-12" id="atividade_fisica_1_4" name="atividade_fisica_1_4" style="display:none">                    
                        
                        <!-- inicio - qual atividade física 4 -->
                        <div class="form-group col-md-4">
                            <label for="qual_atividade">Qual?</label>
                            <input type="text" class="form-control" name="qual_atividade_fisica_1_4" id="qual_atividade_fisica_1_4" value="<?php print $dados_atividades_fisicas['qual_atividade_4'] ?>" maxlength="40">
                        </div>
                        <!-- fim - qual atividade física -->

                        <!-- inicio - dias da semana da atividade física -->
                        <div class="form-group col-md-4">
                            <label for="pratica_atividade_fisica">Dias da Semana</label>
                            <br/>
                            <label class="checkbox-inline">
                              <?php 
                                if(array_search('0', $dias_semana_4_) != "")                                     
                                {                                    
                                    print '<input type="checkbox" name="chk_domingo_1_4" id="chk_domingo_1_4" value="0" checked> D';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_domingo_1_4" id="chk_domingo_1_4" value="0"> D';
                                }
                                ?>
                            </label>

                            <label class="checkbox-inline">                                
                                <?php                                     
                                if(array_search('1', $dias_semana_4_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_4" id="chk_segunda_1_4" value="1" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_4" id="chk_segunda_1_4" value="1"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('2', $dias_semana_4_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_4" id="chk_terca_1_4" value="2" checked> T';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_4" id="chk_terca_1_4" value="2"> T';
                                }                                
                                ?>                              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('3', $dias_semana_4_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_4" id="chk_quarta_1_4" value="3" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_4" id="chk_quarta_1_4" value="3"> Q';
                                }                                
                                ?>                               
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('4', $dias_semana_4_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_4" id="chk_quinta_1_4" value="4" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_4" id="chk_quinta_1_4" value="4"> Q';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('5', $dias_semana_4_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_4" id="chk_sexta_1_4" value="5" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_4" id="chk_sexta_1_4" value="5"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('6', $dias_semana_4_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_4" id="chk_sabado_1_4" value="6" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_4" id="chk_sabado_1_4" value="6"> S';
                                }                                
                                ?>                              
                            </label>
                        </div>
                            <!-- fim - dias da semana da atividade física -->

                        
                        <!-- inicio - horário início atividade física -->                    
                        <div class="form-group col-md-2">
                            <label for="horario_inicio_atividade_fisica">Início</label>
                            <input type="time" class="form-control" name="horario_inicio_atividade_fisica_1_4" id="horario_inicio_atividade_fisica_1_4" value="<?php print $dados_atividades_fisicas['inicio_4'] ?>">
                        </div>
                        <!-- fim - horário início atividade física -->

                        <!-- inicio - horário termino atividade física -->
                        <div class="form-group col-md-2">
                            <label for="horario_termino_atividade_fisica">Término</label>
                            <input type="time" class="form-control" name="horario_termino_atividade_fisica_1_4" id="horario_termino_atividade_fisica_1_4"  value="<?php print $dados_atividades_fisicas['termino_4'] ?>">
                        </div>
                            <!-- fim - horário termino atividade física -->   
                        <!-- fim - painel atividade física 4 -->
                    </div>
                    <!-- fim - camada display - atividade 4 -->
                        
                        
                        
                        
                        
                        
                        
                        
                    <!-- inicio - camada display - atividade 5 -->
                    <div class="col-md-12" id="atividade_fisica_1_5" name="atividade_fisica_1_5" style="display:none">                    
                        
                        <!-- inicio - qual atividade física 5 -->
                        <div class="form-group col-md-4">
                            <label for="qual_atividade">Qual?</label>
                            <input type="text" class="form-control" name="qual_atividade_fisica_1_5" id="qual_atividade_fisica_1_5" value="<?php print $dados_atividades_fisicas['qual_atividade_5'] ?>" maxlength="40">
                        </div>
                        <!-- fim - qual atividade física -->

                        <!-- inicio - dias da semana da atividade física -->
                        <div class="form-group col-md-4">
                            <label for="pratica_atividade_fisica">Dias da Semana</label>
                            <br/>
                            <label class="checkbox-inline">
                              <?php 
                                if(array_search('0', $dias_semana_5_) != "")                                     
                                {                                    
                                    print '<input type="checkbox" name="chk_domingo_1_5" id="chk_domingo_1_5" value="0" checked> D';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_domingo_1_5" id="chk_domingo_1_5" value="0"> D';
                                }
                                ?>
                            </label>

                            <label class="checkbox-inline">                                
                                <?php                                     
                                if(array_search('1', $dias_semana_5_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_5" id="chk_segunda_1_5" value="1" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_segunda_1_5" id="chk_segunda_1_5" value="1"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('2', $dias_semana_5_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_5" id="chk_terca_1_5" value="2" checked> T';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_terca_1_5" id="chk_terca_1_5" value="2"> T';
                                }                                
                                ?>                              
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('3', $dias_semana_5_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_5" id="chk_quarta_1_5" value="3" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quarta_1_5" id="chk_quarta_1_5" value="3"> Q';
                                }                                
                                ?>                               
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('4', $dias_semana_5_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_5" id="chk_quinta_1_5" value="4" checked> Q';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_quinta_1_5" id="chk_quinta_1_5" value="4"> Q';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('5', $dias_semana_5_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_5" id="chk_sexta_1_5" value="5" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sexta_1_5" id="chk_sexta_1_5" value="5"> S';
                                }                                
                                ?>
                            </label>

                            <label class="checkbox-inline">
                                <?php                                     
                                if(array_search('6', $dias_semana_5_) != "") 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_5" id="chk_sabado_1_5" value="6" checked> S';
                                }
                                else 
                                {
                                    print '<input type="checkbox" name="chk_sabado_1_5" id="chk_sabado_1_5" value="6"> S';
                                }                                
                                ?>                              
                            </label>
                        </div>
                            <!-- fim - dias da semana da atividade física -->

                        
                        <!-- inicio - horário início atividade física -->                    
                        <div class="form-group col-md-2">
                            <label for="horario_inicio_atividade_fisica">Início</label>
                            <input type="time" class="form-control" name="horario_inicio_atividade_fisica_1_5" id="horario_inicio_atividade_fisica_1_5" value="<?php print $dados_atividades_fisicas['inicio_5'] ?>">
                        </div>
                        <!-- fim - horário início atividade física -->

                        <!-- inicio - horário termino atividade física -->
                        <div class="form-group col-md-2">
                            <label for="horario_termino_atividade_fisica">Término</label>
                            <input type="time" class="form-control" name="horario_termino_atividade_fisica_1_5" id="horario_termino_atividade_fisica_1_5"  value="<?php print $dados_atividades_fisicas['termino_5'] ?>">
                        </div>
                            <!-- fim - horário termino atividade física -->   
                        <!-- fim - painel atividade física 5 -->
                    </div>
                    <!-- fim - camada display - atividade 5 -->
                        
                
                    
                    
                </div>                
            </div>
            <!-- fim - painel atividades físicas -->
        </div>
        <!-- fim - linha atividades físicas -->
        
        
        
        
        
        
    <!-- inicio - painel - fumante + bebida alcoolica -->    
    <div class="row">
        
            <!-- inicio - painel fumante -->
            <div class="panel panel-default col-md-12 padding_00">
                <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
                    
                    
                    <!-- inicio - sim ou não fumante -->
                    <div class="form-group col-md-12">
                    <label for="fumante">Fuma?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_fumante" id="opt_fumante_s" value="1" onclick="exibir_ocultar_campos(1,'fumantes')">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_fumante" id="opt_fumante_n" value="2" onclick="exibir_ocultar_campos(2,'fumantes')" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não fumante -->
                    
                    
                    <!-- inicio - quantos cigarros -->
                    <div id="fumantes" name="fumantes" class="form-group col-md-12" style="display:none">
                        <label for="qual_atividade">Quantos cigarros por dia?</label>
                        <input type="text" class="form-control" name="qtos_cigarros" id="qtos_cigarros" value="<?php print $dados_historico_paciente['qtde_cigarros'] ?>" maxlength="40">
                    </div>
                    <!-- fim - quantos cigarros -->
                    
                    
                    
                </div>                
            </div>
            <!-- fim - painel fumante -->
       
        
            <!-- inicio - painel bebida alcoolica -->
            <div class="panel panel-default col-md-12 padding_00">
                <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
                    
                    
                    <!-- inicio - sim ou não bebida alcoolica -->
                    <div class="form-group col-md-12">
                    <label for="bebida_alcoolica">Faz uso de bebida alcoólica?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_bebida_alcoolica" id="opt_bebida_alcoolica_s" value="1" onclick="exibir_ocultar_campos(1,'bebidas')">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_bebida_alcoolica" id="opt_bebida_alcoolica_n" value="2" onclick="exibir_ocultar_campos(2,'bebidas')" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não bebida alcoolica -->
                    
                    
                    <!-- inicio - qual atividade física 1 -->
                    <div id="bebidas" name="bebidas" class="form-group col-md-12" style="display:none">
                        <label for="qual_atividade">Frequência?</label>
                        <select name="frequencia_bebida_alcoolica" id="frequencia_bebida_alcoolica" class="form-control">
                          <?php
                            $sqlstring_frequencia = "Select * from tb_frequencia where cod_frequencia <= 5";
                            $info_frequencia = $db->sql_query($sqlstring_frequencia);
                            while($dados_frequencia=mysql_fetch_array($info_frequencia))
                            {
                                if($dados_frequencia['cod_frequencia'] == $dados_historico_paciente['cod_frequencia_bebida_alcoolica'])
                                    print "<option value=" . $dados_frequencia['cod_frequencia'] . " selected>" . $dados_frequencia['frequencia'] . "</option>";
                                else
                                    print "<option value=" . $dados_frequencia['cod_frequencia'] . ">" . $dados_frequencia['frequencia'] . "</option>";
                            }                            
                          ?>
                        </select>
                    </div>
                    <!-- fim - frequencia alcoolica -->
                    
                    
                    
                </div>                
            </div>            
        </div>
        <!-- fim -painel fumante + bebida alcoolica -->
         
        
        
        
        
        
        
        
        
        
        
        <!-- inicio - painel incomodo gastrointestinal -->    
        <div class="row">
        
            <!-- inicio - painel incomodo gastrointestinal -->
            <div class="panel panel-default">
                <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
                    
                    
                    <!-- inicio - sim ou não incomodo gastrointestinal -->
                    <div class="form-group col-md-4">
                    <label for="incomodo_gastrointestinal">Você sente algum incômodo gastrointestinal?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_incomodo_gastrointestinal" id="opt_incomodo_gastrointestinal_s" value="1" onclick="exibir_ocultar_campos(3,'gastro','sintomas')">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_incomodo_gastrointestinal" id="opt_incomodo_gastrointestinal_n" value="2" onclick="exibir_ocultar_campos(4,'gastro','sintomas')" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não incomodo gastrointestinal -->
                    
                    
                    <!-- inicio - qual incomodo gastrointestinal -->
                    <div id="gastro" name="gastro" class="form-group col-md-8" style="display:none">
                        <label for="qual_incomodo_gastrointestinal">Qual?</label>
                        <input type="text" class="form-control" name="qual_incomodo_gastrointestinal" id="qual_incomodo_gastrointestinal" value="<?php print $dados_historico_paciente['qual_incomodo_gastrointestinal'] ?>" maxlength="100">
                    </div>
                    <!-- fim - qual incomodo gastrointestinal -->
                    
                    <!-- inicio quando sintomas aparecem -->    
                    <div id="sintomas" name="sintomas" class="form-group col-md-12" style="display:none">
                        <label for="sintomas_aparecem">Quando os sintomas aparecem? </label>
                        <textarea class="form-control" rows="3" name="quando_sintomas_aparecem" id="quando_sintomas_aparecem"> <?php print $dados_historico_paciente['qual_incomodo_gastrointestinal'] ?> </textarea>
                    </div>
                    <!-- fim quando sintomas aparecem -->
                    
                </div>                
            </div>            
        </div>
        <!-- fim - incomodo gastrointestinal -->
        
        
        
        
        
        
        
        <!-- inicio - painel medicamento suplemento -->    
        <div class="row">
        
            <!-- inicio - painel medicamento suplemento -->
            <div class="panel panel-default">
                <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
                    
                    
                    <!-- inicio - sim ou não medicamento suplemento -->
                    <div class="form-group col-md-4">
                    <label for="medicamento_suplemento">Está tomando algum medicamento suplemento?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_medicamento_suplemento" id="opt_medicamento_suplemento_s" value="1" onclick="exibir_ocultar_campos(3,'medicamentos','comentarios_medicamentos')">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_medicamento_suplemento" id="opt_medicamento_suplemento_n" value="2" onclick="exibir_ocultar_campos(4,'medicamentos','comentarios_medicamentos')" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não medicamento suplemento -->
                    
                    
                    <!-- inicio - qual medicamento suplemento -->
                    <div id="medicamentos" name="medicamentos" class="form-group col-md-8" style="display:none">
                        <label for="qual_medicamento_suplemento">Qual?</label>
                        <input type="text" class="form-control" name="qual_medicamento_suplemento" id="qual_medicamento_suplemento" value="<?php print $dados_historico_paciente['qual_medicamento_suplemento'] ?>" maxlength="50">
                    </div>
                    <!-- fim - qual medicamento suplemento -->
                    
                    <!-- inicio quando sintomas aparecem -->    
                    <div id="comentarios_medicamentos" name="comentarios_medicamentos" class="form-group col-md-12"  style="display:none">
                        <label for="medicamento_recomendados">Estes medicamentos foram recomendados por alguma doença específica? Qaul? </label>
                        <textarea class="form-control" rows="3" name="medicamento_recomendado" id="medicamentos_recomendado"> <?php print $dados_historico_paciente['medicamento_recomendado'] ?></textarea>
                    </div>
                    <!-- fim quando sintomas aparecem -->
                    
                    
                </div>                
            </div>            
        </div>
        <!-- fim - medicamento suplemento -->
        
        
        
        
        
        
        <!-- inicio - doencas passadas e historico familiar de doencas -->
        <div class="row">
        
            <!-- inicio - painel medicamento suplemento -->
            <div class="panel panel-default">
                <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
        
        
                      <!-- inicio doencas passadas -->    
                      <div class="form-group col-md-12">
                        <label for="doencas_passadas">Quais as doenças apresentadas por você no passado? </label>
                        <textarea class="form-control" rows="3" name="doencas_passadas" id="doencas_passadas"><?php print $dados_historico_paciente['doencas_passadas'] ?></textarea>
                      </div>
                      <!-- fim doencas passadas -->
        
        
                      <!-- inicio historico familiar -->    
                      <div class="form-group col-md-12">
                        <label for="historico_familiar">Qual seu histórico familiar (pais, avós, irmãos) de doenças? </label>
                        <textarea class="form-control" rows="3" name="historico_familiar" id="historico_familiar"><?php print $dados_historico_paciente['historico_familiar'] ?></textarea>
                      </div>
                      <!-- fim historico familiar -->
                    
                    
                      <!-- inicio outras informações -->    
                      <div class="form-group col-md-12">
                        <label for="outras_informacoes_anamnese">Outras Informações </label>
                        <textarea class="form-control" rows="3" name="outras_informacoes_anamnese" id="outras_informacoes_anamnese"><?php print $dados_historico_paciente['outras_informacoes_anamnese'] ?></textarea>
                      </div>
                      <!-- fim outras informações -->
        
                    
                </div>                
            </div>            
        </div>
        <!-- fim - doencas passadas e historico familiar de doencas -->
       
    
        <div class="row">
            <!-- inicio - botao para Salvar Dados Pessoais -->
            <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro">Salvar Anamnese </button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='01_1_detalhes_paciente.php'">Cancelar </button>    
            </div>
            <!-- fim - botão para Salvar Dados Pessoais -->            
        </div>
   
        
       </form>
       <!-- fim do formulário anamnese -->
       
       <br/><br/><br/>
        
    
    </div>
    <!-- fim da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->

</div>
<!-- fim container fluid -->
    
    </body>
</html>   
    
    
 <!-- scripts necessários - js -->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<?php
    
    // habilitando ou desabilitando os campos necessários das atividades físicas
    if($dados_atividades_fisicas['atividade_fisica_sn'] == 1)
    {  
        ?><script>document.getElementById('opt_atividade_fisica_s').checked = true;</script><?php
        if($dados_atividades_fisicas['qual_atividade_5'] != NULL)
        {
            ?> <script>exibir_ocultar_atividades_fisicas(8);</script> <?php
        }
        else if($dados_atividades_fisicas['qual_atividade_4'] != NULL)
        {
            ?> <script>exibir_ocultar_atividades_fisicas(9);</script> <?php
        } 
        else if($dados_atividades_fisicas['qual_atividade_3'] != NULL)
        {
            ?> <script>exibir_ocultar_atividades_fisicas(4);</script> <?php
        }   
        else if($dados_atividades_fisicas['qual_atividade_2'] != NULL)
        {
            ?><script>exibir_ocultar_atividades_fisicas(3); </script> <?php
        }   
        else
        {
            ?><script> exibir_ocultar_atividades_fisicas(1); </script> <?php
        }   
    }


    // habilitando ou desabilitando os campos necessários - fumante
    if($dados_historico_paciente['fumante_sn'] == 1)
    {
        ?>
        <script>
            document.getElementById('opt_fumante_s').checked = true;
            exibir_ocultar_campos(1,'fumantes');
        </script>
        <?php
        
    }



    // habilitando ou desabilitando os campos necessários - bebida alcoolica
    if($dados_historico_paciente['bebida_alcoolica_sn'] == 1)
    {
        ?>
        <script>
            document.getElementById('opt_bebida_alcoolica_s').checked = true;
            exibir_ocultar_campos(1,'bebidas');            
        </script>
        <?php
        
    }


    // habilitando ou desabilitando os campos necessários - incomodo gastrointestinal
    if($dados_historico_paciente['incomodo_gastrointestinal_sn'] == 1)
    {
        ?>
        <script>
            document.getElementById('opt_incomodo_gastrointestinal_s').checked = true;
            exibir_ocultar_campos(3,'gastro','sintomas');            
        </script>
        <?php
        
    }
                               
    
    // habilitando ou desabilitando os campos necessários - medicamento suplemento
    if($dados_historico_paciente['medicamento_suplemento_sn'] == 1)
    {
        ?>
        <script>
            document.getElementById('opt_medicamento_suplemento_s').checked = true;
            exibir_ocultar_campos(3,'medicamentos','comentarios_medicamentos');
        </script>
        <?php
        
    }


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
    
   