<!DOCTYPE html>
<?php 
// iniciando a sessão
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
    
        //include do arquivo de conexao com o banco de dados
        include_once('conexao/connect_db.php');

        //instancia do banco de dados
        $db = BancoDeDados::getInstance();  

        // acentuação
        mysql_set_charset('utf8');
        ini_set('default_charset','UTF-8');

        //recuperando dados pessoais
        $consumo_agua = $_POST['consumo_agua'];
        $mastigacao = $_POST['mastigacao'];
        $gosta_de_comer = $_POST['gosta_de_comer'];
        $nao_gosta_de_comer = $_POST['nao_gosta_de_comer'];
        
        $pao_integral = $_POST['pao_integral'];
        $pao_branco = $_POST['pao_branco'];
        $arroz_integral = $_POST['arroz_integral'];
        $arroz_branco = $_POST['arroz_branco'];
        $cereais = $_POST['cereais'];
        $feijao = $_POST['feijao'];
        $carne_boi = $_POST['carne_boi'];
        $frango = $_POST['frango'];
        $peixe = $_POST['peixe'];
        $ovo = $_POST['ovo'];
        $leite_derivados = $_POST['leite_derivados'];
        $azeite_oliva = $_POST['azeite_oliva'];
        $castanhas = $_POST['castanhas'];
        $frutas_frescas = $_POST['frutas_frescas'];
        $frutas_secas = $_POST['frutas_secas'];
        $legumes_verduras = $_POST['legumes_verduras'];
        $doces_biscoitos_chocolates = $_POST['doces_biscoitos_chocolates'];
        $refrigerantes = $_POST['refrigerantes'];
        $fast_food = $_POST['fast_food'];
        $cafe = $_POST['cafe'];
        
        
        
        
        $sqlstring_atualizar_habito_alimentar  = "update tb_habito_alimentar set ";
        $sqlstring_atualizar_habito_alimentar .= "cod_consumo_agua = '" . $consumo_agua . "', ";  
        $sqlstring_atualizar_habito_alimentar .= "cod_mastigacao = '" . $mastigacao . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "mais_gosta = '" . $gosta_de_comer . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "nao_gosta = '" . $nao_gosta_de_comer . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "pao_integral = '" . $pao_integral . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "pao_branco = '" . $pao_branco . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "arroz_integral = '" . $arroz_integral . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "arroz_branco = '" . $arroz_branco . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "cereais = '" . $cereais . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "feijao = '" . $feijao . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "carne_boi = '" . $carne_boi . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "frango = '" . $frango . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "peixe = '" . $peixe . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "ovo = '" . $ovo . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "leite_derivados = '" . $leite_derivados . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "azeite_oliva = '" . $azeite_oliva . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "castanhas = '" . $castanhas . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "frutas_frescas = '" . $frutas_frescas . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "frutas_secas = '" . $frutas_secas . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "legumes_verduras = '" . $legumes_verduras . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "doces_biscoitos_chocolates = '" . $doces_biscoitos_chocolates . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "refrigerante = '" . $refrigerantes . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "fast_food = '" . $fast_food . "', ";        
        $sqlstring_atualizar_habito_alimentar .= "cafe = '" . $cafe . "' ";        
        $sqlstring_atualizar_habito_alimentar .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
        
        $db->string_query($sqlstring_atualizar_habito_alimentar);
        
      
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Paciente - Hábitos Alimentares";
        $mensagem = "Os hábitos alimentares foram cadastrados com sucesso!";
        $btn_esquerda = "Objetivo";
        $btn_esquerda_destino = "01_1_cadastro_paciente_objetivo.php";
        $btn_direita = "Lista de Pacientes";
        $btn_direita_destino = "01_lista_pacientes.php";
        $btn_x = "01_lista_pacientes.php";
}

//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod']))
    $_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);
    
$sqlstring_habitos_alimentares  = "select tb_habito_alimentar.*, tb_paciente.nome_paciente from tb_habito_alimentar ";
$sqlstring_habitos_alimentares .= "inner join tb_paciente on tb_paciente.cod_paciente = tb_habito_alimentar.cod_paciente ";
$sqlstring_habitos_alimentares .= "where tb_habito_alimentar.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$info_habitos_alimentares = $db->sql_query($sqlstring_habitos_alimentares);
$dados_habitos_alimentares = mysql_fetch_array($info_habitos_alimentares);

?>    
<html>    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NUTRIS - Plataforma Nutricional</title>

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

<!-- inicio container fluid -->
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel avaliacao nutricional -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-th-list fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">PACIENTE AVALIAÇÃO NUTRICIONAL</span>:
                    <span class=" fonte_verde_claro fonte_muito_grande"><?php print $dados_habitos_alimentares['nome_paciente'] ?></span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_1_alteracao_paciente_dados_pessoais.php">Dados Pessoais</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_antopometria.php">Antopometria</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Avaliação Nutricional</span>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_objetivo.php">Objetivo</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_3_cadastro_dieta.php">Prescrição de Dieta</a>
                        
                    </span> 
                    <br/><br/>                    
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
    <!-- inicio - formulario paciente - antopometria -->   
    <form method="post" action="">
    
    <!-- inicio - habitos alimentares -->  
    <div class="row">
        
        
          
          <!-- inicio - painel habitos alimentares -->
          <div class="panel panel-default" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
            <div class="panel-body borda_verde_claro">
            
          <!-- inicio - linha 1 -->
              <!-- inicio consumo de água -->
              <div class="form-group col-md-6">
                <label for="consumo de água">Consumo Diário de Água (em ml)</label>
                <br/>
                <select name="consumo_agua" id="consumo_agua" class="form-control">
                  <?php
                    $sqlstring_consumo_agua = "Select * from tb_consumo_agua";
                    $info_consumo_agua = $db->sql_query($sqlstring_consumo_agua);
                    while($dados_consumo_agua=mysql_fetch_array($info_consumo_agua))
                    {
                        if($dados_consumo_agua['cod_consumo_agua'] == $dados_habitos_alimentares['cod_consumo_agua'])
                            print "<option value=" . $dados_consumo_agua['cod_consumo_agua'] . " selected>" . $dados_consumo_agua['consumo_agua'] . "</option>";
                        else
                            print "<option value=" . $dados_consumo_agua['cod_consumo_agua'] . ">" . $dados_consumo_agua['consumo_agua'] . "</option>";
                    }                            
                  ?>
                </select>
              </div>
              <!-- fim consumo de água -->

              <!-- inicio mastigação -->    
              <div class="form-group col-md-6">
                <label for="mastigacao">Como é sua mastigação</label>
                <br/>
                <select name="mastigacao" id="mastigacao" class="form-control">
                  <?php
                    $sqlstring_frequencia_mastigacao = "Select * from tb_frequencia where cod_frequencia > 100 and cod_frequencia < 150";
                    $info_frequencia_mastigacao = $db->sql_query($sqlstring_frequencia_mastigacao);
                    while($dados_frequencia_mastigacao=mysql_fetch_array($info_frequencia_mastigacao))
                    {
                        if($dados_frequencia_mastigacao['cod_frequencia'] == $dados_habitos_alimentares['cod_mastigacao'])
                            print "<option value=" . $dados_frequencia_mastigacao['cod_frequencia'] . " selected>" . $dados_frequencia_mastigacao['frequencia'] . "</option>";
                        else
                            print "<option value=" . $dados_frequencia_mastigacao['cod_frequencia'] . ">" . $dados_frequencia_mastigacao['frequencia'] . "</option>";
                    }                            
                  ?>
                </select>
              </div>
              <!-- inicio mastigação -->
          <!-- fim - linha 1 -->
            
            
            
          
                
          <!-- inicio - linha 2 --> 
              <!-- inicio - gosta de comer -->    
              <div class="form-group col-md-12">
                <label for="gosta_de_comer">O que você gosta de comer? </label>
                <textarea class="form-control" rows="3" name="gosta_de_comer" id="gosta_de_comer"><?php print $dados_habitos_alimentares['mais_gosta'] ?></textarea>
              </div>
              <!-- fim - gosta de comer -->    
          <!-- fim - linha 2 -->    
                
                
            
          <!-- inicio - linha 3 --> 
              <!-- inicio - não gosta de comer -->    
              <div class="form-group col-md-12">
                <label for="nao_gosta_de_comer">O que você não gosta de comer? </label>
                <textarea class="form-control" rows="3" name="nao_gosta_de_comer" id="nao_gosta_de_comer"><?php print $dados_habitos_alimentares['nao_gosta'] ?></textarea>
              </div>
              <!-- fim - não gosta de comer -->    
          <!-- fim - linha 3 -->    
                
          <div class="well well-sm fundo_transparente fonte_verde_escuro sem_borda"> Frequência de consumo dos alimentos abaixo</div>
                
            
          <div class="table-responsive">
            <table class="table table-responsive table-striped">
                
                <tr>
                <td class="largura_60">&nbsp;</td> 
                <td class="largura_10 centralizado">Sempre</td> 
                <td class="largura_10 centralizado">Às Vezes</td> 
                <td class="largura_10 centralizado">Raramente</td> 
                <td class="largura_10 centralizado">Não Gosto</td>
                </tr>
                
                <tr>
                <td class="largura_60">Pão Integral</td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="1" <?php print ($dados_habitos_alimentares['pao_integral'] == 1) ? "checked" : null; ?>></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="2" <?php print ($dados_habitos_alimentares['pao_integral'] == 2) ? "checked" : null; ?>></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="3" <?php print ($dados_habitos_alimentares['pao_integral'] == 3) ? "checked" : null; ?>></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="4" <?php print ($dados_habitos_alimentares['pao_integral'] == 4) ? "checked" : null; ?>></td> 
                </tr>
                
                <tr>
                <td class="largura_60">Pão Branco</td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="1"  <?php print ($dados_habitos_alimentares['pao_branco'] == 1) ? "checked" : null; ?>></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="2"  <?php print ($dados_habitos_alimentares['pao_branco'] == 2) ? "checked" : null; ?>></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="3"  <?php print ($dados_habitos_alimentares['pao_branco'] == 3) ? "checked" : null; ?>></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="4"  <?php print ($dados_habitos_alimentares['pao_branco'] == 4) ? "checked" : null; ?>></td> 
                </tr>
                
                <tr>
                <td class="largura_60">Arroz Integral</td> 
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="1"   <?php print ($dados_habitos_alimentares['arroz_integral'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="2"   <?php print ($dados_habitos_alimentares['arroz_integral'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="3"   <?php print ($dados_habitos_alimentares['arroz_integral'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="4"   <?php print ($dados_habitos_alimentares['arroz_integral'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                <tr>
                <td class="largura_60">Arroz Branco</td> 
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="1"    <?php print ($dados_habitos_alimentares['arroz_branco'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="2"    <?php print ($dados_habitos_alimentares['arroz_branco'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="3"    <?php print ($dados_habitos_alimentares['arroz_branco'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="4"    <?php print ($dados_habitos_alimentares['arroz_branco'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                <tr>
                <td class="largura_60">Cereais</td> 
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="1"  <?php print ($dados_habitos_alimentares['cereais'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="2"  <?php print ($dados_habitos_alimentares['cereais'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="3"  <?php print ($dados_habitos_alimentares['cereais'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="4"  <?php print ($dados_habitos_alimentares['cereais'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                <tr>
                <td class="largura_60">Feijão</td> 
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="1"  <?php print ($dados_habitos_alimentares['feijao'] == 1) ? "checked" : null; ?>> </td>
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="2"  <?php print ($dados_habitos_alimentares['feijao'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="3"  <?php print ($dados_habitos_alimentares['feijao'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="4"  <?php print ($dados_habitos_alimentares['feijao'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                <tr>
                <td class="largura_60">Carne de Boi</td> 
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="1"  <?php print ($dados_habitos_alimentares['carne_boi'] == 1) ? "checked" : null; ?>> </td>
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="2"  <?php print ($dados_habitos_alimentares['carne_boi'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="3"  <?php print ($dados_habitos_alimentares['carne_boi'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="4"  <?php print ($dados_habitos_alimentares['carne_boi'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                <tr>
                <td class="largura_60">Frango</td> 
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="1"  <?php print ($dados_habitos_alimentares['frango'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="2"  <?php print ($dados_habitos_alimentares['frango'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="3"  <?php print ($dados_habitos_alimentares['frango'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="4"  <?php print ($dados_habitos_alimentares['frango'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Peixe</td> 
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="1"  <?php print ($dados_habitos_alimentares['peixe'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="2"  <?php print ($dados_habitos_alimentares['peixe'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="3" <?php print ($dados_habitos_alimentares['peixe'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="4"  <?php print ($dados_habitos_alimentares['peixe'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Ovo</td> 
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="1"  <?php print ($dados_habitos_alimentares['ovo'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="2"  <?php print ($dados_habitos_alimentares['ovo'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="3"  <?php print ($dados_habitos_alimentares['ovo'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="4"  <?php print ($dados_habitos_alimentares['ovo'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Leite e Derivados</td> 
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="1"  <?php print ($dados_habitos_alimentares['leite_derivados'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="2"  <?php print ($dados_habitos_alimentares['leite_derivados'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="3"  <?php print ($dados_habitos_alimentares['leite_derivados'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="4"  <?php print ($dados_habitos_alimentares['leite_derivados'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Azeite de Oliva</td> 
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="1"  <?php print ($dados_habitos_alimentares['azeite_oliva'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="2"  <?php print ($dados_habitos_alimentares['azeite_oliva'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="3"  <?php print ($dados_habitos_alimentares['azeite_oliva'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="4"  <?php print ($dados_habitos_alimentares['azeite_oliva'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Castanhas</td> 
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="1"  <?php print ($dados_habitos_alimentares['castanhas'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="2"  <?php print ($dados_habitos_alimentares['castanhas'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="3"  <?php print ($dados_habitos_alimentares['castanhas'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="4"  <?php print ($dados_habitos_alimentares['castanhas'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Frutas Frescas</td> 
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="1"  <?php print ($dados_habitos_alimentares['frutas_frescas'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="2"  <?php print ($dados_habitos_alimentares['frutas_frescas'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="3"  <?php print ($dados_habitos_alimentares['frutas_frescas'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="4"  <?php print ($dados_habitos_alimentares['frutas_frescas'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Frutas Secas</td> 
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="1"  <?php print ($dados_habitos_alimentares['frutas_secas'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="2"  <?php print ($dados_habitos_alimentares['frutas_secas'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="3"  <?php print ($dados_habitos_alimentares['frutas_secas'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="4"  <?php print ($dados_habitos_alimentares['frutas_secas'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Legumes e Verduras</td> 
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="1"  <?php print ($dados_habitos_alimentares['legumes_verduras'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="2"  <?php print ($dados_habitos_alimentares['legumes_verduras'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="3"  <?php print ($dados_habitos_alimentares['legumes_verduras'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="4"  <?php print ($dados_habitos_alimentares['legumes_verduras'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Doces, Biscoitos e Chocolates</td> 
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="1"  <?php print ($dados_habitos_alimentares['doces_biscoitos_chocolates'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="2"  <?php print ($dados_habitos_alimentares['doces_biscoitos_chocolates'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="3"  <?php print ($dados_habitos_alimentares['doces_biscoitos_chocolates'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="4"  <?php print ($dados_habitos_alimentares['doces_biscoitos_chocolates'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Refrigerantes</td> 
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="1"  <?php print ($dados_habitos_alimentares['refrigerante'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="2"  <?php print ($dados_habitos_alimentares['refrigerante'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="3"  <?php print ($dados_habitos_alimentares['refrigerante'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="4"  <?php print ($dados_habitos_alimentares['refrigerante'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Fast Food</td> 
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="1"  <?php print ($dados_habitos_alimentares['fast_food'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="2"  <?php print ($dados_habitos_alimentares['fast_food'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="3"  <?php print ($dados_habitos_alimentares['fast_food'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="4"  <?php print ($dados_habitos_alimentares['fast_food'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Café</td> 
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="1"  <?php print ($dados_habitos_alimentares['cafe'] == 1) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="2"  <?php print ($dados_habitos_alimentares['cafe'] == 2) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="3"  <?php print ($dados_habitos_alimentares['cafe'] == 3) ? "checked" : null; ?>></td>
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="4"  <?php print ($dados_habitos_alimentares['cafe'] == 4) ? "checked" : null; ?>></td>
                </tr>
                
            </table>
          </div>
            
       
    </div>              
    <!-- fim - painel hábitos alimentares -->
    
            
    </div>
    <!-- fim - habitos alimentares -->
       
        
    <br/>
    <!-- inicio - botao para Salvar Hábito Alimentar -->
    <div class="col-md-12  direito">
        <button type="submit" class="btn btn_verde_claro">Salvar Hábito Alimentar </button>    
        <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_pacientes.php'">Cancelar </button>    
    </div>
    <!-- fim - botão para Salvar Hábito Alimentar -->            
    </div>
    <br/><br/>    
    

    </form>
   <!-- fim do formulário antopometria --> 
   
        
   
        
        
        
    
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
    
  
