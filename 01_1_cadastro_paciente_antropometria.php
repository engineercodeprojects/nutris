<!DOCTYPE html>
<?php 
// iniciando sessão
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
        $foto_01 = $_FILES['foto_01'];
        $fo_01 = isset($_POST['fo_01']);
        $foto_02 = $_FILES['foto_02'];
        $fo_02 = isset($_POST['fo_02']);
        $foto_03 = $_FILES['foto_03'];
        $fo_03 = isset($_POST['fo_03']);
        $foto_04 = $_FILES['foto_04'];
        $fo_04 = isset($_POST['fo_04']);
        $objetivo = $_POST['objetivo_paciente'];
        $tempo = $_POST['tempo_programa'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        
        $perimetro_abdomem = $_POST['perimetro_abdomem'];
        $perimetro_quadril = $_POST['perimetro_quadril'];
        $perimetro_coxa = $_POST['perimetro_coxa'];
        $perimetro_perna_medial = $_POST['perimetro_perna_medial'];
        $perimetro_antebraco = $_POST['perimetro_antebraco'];
    
        $dobras_triceps = $_POST['dobras_triceps'];
        $dobras_subescapular = $_POST['dobras_subescapular'];
        $dobras_abdominal = $_POST['dobras_abdominal'];
        $dobras_suprailiaca = $_POST['dobras_suprailiaca'];
        $dobras_coxa = $_POST['dobras_coxa'];
        $dobras_perna_medial = $_POST['dobras_perna_medial'];
    
        $diametro_punho = $_POST['diametro_punho'];
        $diametro_umero = $_POST['diametro_umero'];
        $diametro_femur = $_POST['diametro_femur'];
        $diametro_tornozelo = $_POST['diametro_tornozelo'];
    
        
        
       
        
        print "<center>foto poeea" . $foto . "</center>";
        
        // insere na tb_objetivo paciente as informações sobre o objetivo do páciente
        $sqlstring_alterar_objetivo  = "Update tb_objetivo_paciente set ";
        if($foto_01['name'] != "")   $sqlstring_alterar_objetivo .= "foto_01 = '" . $_SESSION['cod_paciente_selecionado'] . "_1_" . $foto_01['name'] . "', ";
        if($fo_01 == 1)              $sqlstring_alterar_objetivo .= "foto_01 = 'avatar.png', ";
        if($foto_02['name'] != "")   $sqlstring_alterar_objetivo .= "foto_02 = '" . $_SESSION['cod_paciente_selecionado'] . "_2_" . $foto_02['name'] . "', ";
        if($fo_02 == 1)              $sqlstring_alterar_objetivo .= "foto_02 = 'avatar.png', ";
        if($foto_03['name'] != "")   $sqlstring_alterar_objetivo .= "foto_03 = '" . $_SESSION['cod_paciente_selecionado'] . "_3_" . $foto_03['name'] . "', ";
        if($fo_03 == 1)              $sqlstring_alterar_objetivo .= "foto_03 = 'avatar.png', ";
        if($foto_04['name'] != "")   $sqlstring_alterar_objetivo .= "foto_04 = '" . $_SESSION['cod_paciente_selecionado'] . "_4_" . $foto_04['name'] . "', ";
        if($fo_04 == 1)              $sqlstring_alterar_objetivo .= "foto_04 = 'avatar.png', ";
        $sqlstring_alterar_objetivo .= "cod_objetivo_programa = '" . $objetivo . "', ";
        $sqlstring_alterar_objetivo .= "cod_tempo_programa = '" . $tempo . "', ";
        $sqlstring_alterar_objetivo .= "peso_paciente = '" . $peso . "', ";
        $sqlstring_alterar_objetivo .= "altura_paciente = '" . $altura . "', ";
        $sqlstring_alterar_objetivo .= "perimetro_abdomem = '" . $perimetro_abdomem . "', ";
        $sqlstring_alterar_objetivo .= "perimetro_quadril = '" . $perimetro_quadril . "', ";
        $sqlstring_alterar_objetivo .= "perimetro_coxa = '" . $perimetro_coxa . "', ";
        $sqlstring_alterar_objetivo .= "perimetro_perna_medial = '" . $perimetro_perna_medial . "', ";
        $sqlstring_alterar_objetivo .= "perimetro_antebraco = '" . $perimetro_antebraco . "', ";
        $sqlstring_alterar_objetivo .= "dobras_triceps = '" . $dobras_triceps . "', ";
        $sqlstring_alterar_objetivo .= "dobras_subescapular = '" . $dobras_subescapular . "', ";
        $sqlstring_alterar_objetivo .= "dobras_abdominal = '" . $dobras_abdominal . "', ";
        $sqlstring_alterar_objetivo .= "dobras_suprailiaca = '" . $dobras_suprailiaca . "', ";
        $sqlstring_alterar_objetivo .= "dobras_coxa = '" . $dobras_coxa . "', ";
        $sqlstring_alterar_objetivo .= "dobras_perna_medial = '" . $dobras_perna_medial . "', ";
        $sqlstring_alterar_objetivo .= "diametro_punho = '" . $diametro_punho . "', ";
        $sqlstring_alterar_objetivo .= "diametro_umero = '" . $diametro_umero . "', ";
        $sqlstring_alterar_objetivo .= "diametro_femur = '" . $diametro_femur . "', ";
        $sqlstring_alterar_objetivo .= "diametro_tornozelo = '" . $diametro_tornozelo . "' ";
        $sqlstring_alterar_objetivo .= "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'];
        $sqlstring_alterar_objetivo .= " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'];

        $db->string_query($sqlstring_alterar_objetivo); 

        // fazendo uplodas das fotos 01
        $arquivo = $_FILES['foto_01'];  
        
        //$destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos\\';
        $destino  = '/home/engineercode/public_html/plataformanutris/fotos/';
        $destino .= $_SESSION['cod_paciente_selecionado'] . "_1_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);

        
       
        
        // fazendo uplodas das fotos 02
        $arquivo = $_FILES['foto_02']; 

        //$destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos\\';
        $destino  = '/home/engineercode/public_html/plataformanutris/fotos/';
        $destino .= $_SESSION['cod_paciente_selecionado'] . "_2_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);
        
        
         // fazendo uplodas das fotos 03
        $arquivo = $_FILES['foto_03']; 

        //$destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos\\';
        $destino  = '/home/engineercode/public_html/plataformanutris/fotos/';
        $destino .= $_SESSION['cod_paciente_selecionado'] . "_3_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);


         // fazendo uplodas das fotos 04
        $arquivo = $_FILES['foto_04']; 

        //$destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos\\';
        $destino  = '/home/engineercode/public_html/plataformanutris/fotos/';
        $destino .= $_SESSION['cod_paciente_selecionado'] . "_4_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);
        
        
        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Paciente - Objetivo do Programa";
        $mensagem = "O objetivo do programa foi cadastrado com sucesso!";
        $btn_esquerda = "Prescrição de Dieta  ";
        $btn_esquerda_destino = "01_3_cadastro_dieta.php";        
        $btn_direita = "Lista de Pacientes";
        $btn_direita_destino = "01_lista_pacientes.php";        
        $btn_x = "01_lista_pacientes.php";
}


//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod_consulta']))
    //$_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);
    $_SESSION['cod_consulta_selecionada'] = base64_decode($_GET['cod_consulta']);


//$sqlstring_objetivo_programa  = "select tb_objetivo_paciente.*, tb_paciente.*, TIMESTAMPDIFF(YEAR, tb_paciente.data_nascimento, current_date) as anos from tb_objetivo_paciente ";
$sqlstring_objetivo_programa  = "select tb_objetivo_paciente.*, tb_paciente.*, TIMESTAMPDIFF(day, tb_paciente.data_nascimento, current_date)/365 as anos from tb_objetivo_paciente ";
$sqlstring_objetivo_programa .= "inner join tb_paciente on tb_paciente.cod_paciente = tb_objetivo_paciente.cod_paciente ";
$sqlstring_objetivo_programa .= "where tb_objetivo_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$sqlstring_objetivo_programa .= " and tb_objetivo_paciente.cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
$info_objetivo_programa = $db->sql_query($sqlstring_objetivo_programa);
$dados_objetivo_programa = mysql_fetch_array($info_objetivo_programa);


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
    include "includes/cabecalho_paciente_antropometria.php";
?>     

<!-- inicio container fluid -->
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel objetivo -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-screenshot fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">ANTROPOMETRIA</span>:
                    <span class=" fonte_verde_claro fonte_muito_grande"><?php print date('d/m/Y', strtotime($dados_objetivo_programa['data_objetivo_paciente'])) ?></span>
                    <br/>
                    <span class="fonte_pequena">                        
                        <a href="01_1_cadastro_paciente_anamnese.php">Anamnese</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_avaliacao.php">Avaliação Nutricional</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Antropometria</span>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_3_cadastro_dieta.php">Prescrição de Dieta</a>
                        
                    </span> 
                    <br/><br/>                    
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
       
    <!-- inicio - formulario paciente - dados pessoais -->   
   <form enctype="multipart/form-data" method="post">
    <!-- inicio - objetivo programa -->  
    <div class="row">
        
        <input type="hidden" name="sexo" id="sexo" value="<?php print $dados_objetivo_programa['sexo'] ?>">
        <input type="hidden" name="anos" id="anos" value="<?php print $dados_objetivo_programa['anos'] ?>">
        
        <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-xs-10 col-md-8 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> ANTES - FRENTE </div>
             <div class="col-xs-2 col-md-4 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_1').innerHTML = '<br/><label for=\'uploadImage1\'><img src=\'fotos/avatar.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview1\'></label><input id=\'uploadImage1\' type=\'file\' name=\'foto_01\' onchange=\'pre_visualizacao1()\' style=\'display:none\'><input type=hidden name=fo_01 id=fo_01 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
            
             <div class="col-md-12 form-group centralizado borda_cinza altura_300  borda_inferior_verde_claro" id="f_1">
                <br/>
                <?php                  
                if($dados_objetivo_programa['foto_01'] != "" and $dados_objetivo_programa['foto_01'] != "avatar.png") 
                {  
                 ?> 
                <label for="uploadImage1"><img src="fotos/<?php print $dados_objetivo_programa['foto_01'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                <input id="uploadImage1" type="file" name="foto_01" onchange="pre_visualizacao1();" style="display:none"/>                
                <?php
                }                
                else if($dados_objetivo_programa['foto_01'] == "" or $dados_objetivo_programa['foto_01'] == "avatar.png") 
                {
                 ?>
                 <label for="uploadImage1"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                <input id="uploadImage1" type="file" name="foto_01" onchange="pre_visualizacao1();" style="display:none"/>
                 <?php
                }
                 ?>
                 <br/><br/>                 
             </div>
            
        </div>
                      
            <script type="text/javascript">
            function pre_visualizacao1() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview1").src = oFREvent.target.result;
                };
            };
            </script> 
       
       
        
        
        <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-md-8 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> ANTES - PERFIL </div>
             <div class="col-md-4 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_2').innerHTML = '<br/><label for=\'uploadImage2\'><img src=\'fotos/avatar.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview2\'></label><input id=\'uploadImage2\' type=\'file\' name=\'foto_02\' onchange=\'pre_visualizacao2()\' style=\'display:none\'><input type=hidden name=fo_02 id=fo_02 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
            
             <div class="col-md-12 form-group centralizado borda_cinza altura_300  borda_inferior_verde_claro" id="f_2">
                <br/>
                <?php                  
                if($dados_objetivo_programa['foto_02'] != "" and $dados_objetivo_programa['foto_02'] != "avatar.png") 
                {                                    
                 ?>                 
                <label for="uploadImage2"><img src="fotos/<?php print $dados_objetivo_programa['foto_02'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview2"/></label>   
                <input id="uploadImage2" type="file" name="foto_02" onchange="pre_visualizacao2();" style="display:none"/>
                <?php
                }                
                else if($dados_objetivo_programa['foto_02'] == "" or $dados_objetivo_programa['foto_02'] == "avatar.png") 
                 {
                 ?>
                 <label for="uploadImage2"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview2"/></label>   
                <input id="uploadImage2" type="file" name="foto_02" onchange="pre_visualizacao2();" style="display:none"/>
                 <?php
                 }
                 ?>
                 <br/><br/>
                 
              </div>
        </div>
                      
            <script type="text/javascript">
            function pre_visualizacao2() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview2").src = oFREvent.target.result;
                };
            };
            </script>
        
        
        
        
        
        
        
        
        
       
       
       <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-md-8 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> DEPOIS - FRENTE </div>
             <div class="col-md-4 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_3').innerHTML = '<br/><label for=\'uploadImage3\'><img src=\'fotos/avatar.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview3\'></label><input id=\'uploadImage3\' type=\'file\' name=\'foto_03\' onchange=\'pre_visualizacao3()\' style=\'display:none\'><input type=hidden name=fo_03 id=fo_03 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
           
             <div class="col-md-12 form-group centralizado borda_cinza  altura_300  borda_inferior_verde_claro" id="f_3">
                 <br/>
                 <?php                  
                if($dados_objetivo_programa['foto_03'] != "" and $dados_objetivo_programa['foto_03'] != "avatar.png") 
                {                                    
                 ?>                 
                <label for="uploadImage3"><img src="fotos/<?php print $dados_objetivo_programa['foto_03'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview3"/></label>   
                <input id="uploadImage3" type="file"  name="foto_03" onchange="pre_visualizacao3();" style="display:none"/>
                <?php
                }                
                else if($dados_objetivo_programa['foto_03'] == "" or $dados_objetivo_programa['foto_03'] == "avatar.png") 
                 {
                 ?>
                 <label for="uploadImage3"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview3"/></label>   
                 <input id="uploadImage3" type="file"  name="foto_03" onchange="pre_visualizacao3();" style="display:none"/>
                 <?php
                 }
                 ?>
                <br/><br/>
                 
              </div>
        </div>
                      
            <script type="text/javascript">
            function pre_visualizacao3() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage3").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview3").src = oFREvent.target.result;
                };
            };
            </script> 
       
       
       
       
       
       
       
       
       
       <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-md-8 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> DEPOIS - PERFIL </div>
             <div class="col-md-4 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_4').innerHTML = '<br/><label for=\'uploadImage4\'><img src=\'fotos/avatar.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview4\'></label><input id=\'uploadImage4\' type=\'file\' name=\'foto_04\' onchange=\'pre_visualizacao4()\' style=\'display:none\'><input type=hidden name=fo_04 id=fo_04 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
           
             <div class="col-md-12 form-group centralizado borda_cinza   altura_300  borda_inferior_verde_claro" id="f_4">
                 <br/>
                 <?php                  
                if($dados_objetivo_programa['foto_04'] != "" and $dados_objetivo_programa['foto_04'] != "avatar.png") 
                {                                    
                 ?>                 
                <label for="uploadImage4"><img src="fotos/<?php print $dados_objetivo_programa['foto_04'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview4"/></label>   
                <input id="uploadImage4" type="file"  name="foto_04" onchange="pre_visualizacao4();" style="display:none"/>
                <?php
                }                
                else if($dados_objetivo_programa['foto_04'] == "" or $dados_objetivo_programa['foto_04'] == "avatar.png") 
                 {
                 ?>
                 <label for="uploadImage4"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview4"/></label>   
                 <input id="uploadImage4" type="file"  name="foto_04" onchange="pre_visualizacao4();" style="display:none"/>
                 <?php
                 }
                 ?>
                <br/><br/>
                 
              </div>
        </div>
                      
            <script type="text/javascript">
            function pre_visualizacao4() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview4").src = oFREvent.target.result;
                };
            };
            </script> 
       </div>
       
       
       
       
       <br/>
    <!-- inicio - medidas -->
    <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
            <br/>
            <div class="row">
           
             
                
            <!-- inicio peso e estatura -->
            <div class="col-md-6">
                
                <!-- inicio - peso -->
                <div id="d_peso" name="d_peso" class="form-group col-md-6">
                    <label for="l_peso">Peso (kg) </label>
                    <input type="text" class="form-control altura_220 centralizado fonte_peso_altura fonte_verde_claro" name="peso" id="peso" value="<?php print $dados_objetivo_programa['peso_paciente'] ?>" onblur="funcoes(); troca_virgula_ponto('peso')" maxlength="7"> 
                </div>
                <!-- fim - peso -->
                
                
                 <!-- inicio - estatura -->
                <div id="d_estatura" name="d_estatura" class="form-group col-md-6">
                    <label for="l_estatura">Estatura (cm)</label>
                    <input type="text" class="form-control altura_220 centralizado fonte_peso_altura fonte_verde_claro" name="altura" id="altura" value="<?php print  $dados_objetivo_programa['altura_paciente'] ?>" onblur="funcoes(); troca_virgula_ponto('altura')" maxlength="6"> 
                </div>
                <!-- fim - estatura -->
                
            </div>
            <!-- fim peso e estatura -->
                
                
            <!-- inicio dobras -->
            <div class="col-md-6">
                 <!-- titulo medidas -->
                <div class="col-md-12 negrito padding_bottom_20">Perímetros (cm)</div>
                
                <!-- inicio - abdomem -->
                <div id="d_abdomem" name="d_abdomem" class="form-group col-md-6">
                    <label for="l_abdomem">Abdomem</label>
                    <input type="text" class="form-control" name="perimetro_abdomem" id="perimetro_abdomem" value="<?php print  $dados_objetivo_programa['perimetro_abdomem'] ?>" onblur="funcoes(); troca_virgula_ponto('perimetro_abdomem')" maxlength="5"> 
                </div>
                <!-- fim - abdomem -->
                
                <!-- inicio - quadril -->
                <div id="d_quadril" name="d_quadril" class="form-group col-md-6">
                    <label for="l_quadril">Quadril</label>
                    <input type="text" class="form-control" name="perimetro_quadril" id="perimetro_quadril" value="<?php print  $dados_objetivo_programa['perimetro_quadril'] ?>"  onblur="funcoes(); troca_virgula_ponto('perimetro_quadril')" maxlength="5"> 
                </div>
                <!-- fim - quadril -->
                
                <!-- inicio - coxa -->
                <div id="d_coxa" name="d_coxa" class="form-group col-md-6">
                    <label for="l_coxa">Coxa</label>
                    <input type="text" class="form-control" name="perimetro_coxa" id="perimetro_coxa" value="<?php print  $dados_objetivo_programa['perimetro_coxa'] ?>"  onblur="funcoes(); troca_virgula_ponto('perimetro_coxa')" maxlength="5"> 
                </div>
                <!-- fim - coxa -->
                
                <!-- inicio - perna medial -->
                <div id="d_perna_medial" name="d_perna_medial" class="form-group col-md-6">
                    <label for="l_perna_medial">Perna Medial</label>
                    <input type="text" class="form-control" name="perimetro_perna_medial" id="perimetro_perna_medial" value="<?php print  $dados_objetivo_programa['perimetro_perna_medial'] ?>"  onblur="funcoes(); troca_virgula_ponto('perimetro_perna_medial')" maxlength="5"> 
                </div>
                <!-- fim - perna medial -->
                
                <!-- inicio - antebraco -->
                <div id="d_antebraco" name="d_antebraco" class="form-group col-md-12">
                    <label for="l_antebraco">Antebraço</label>
                    <input type="text" class="form-control" name="perimetro_antebraco" id="perimetro_antebraco" value="<?php print  $dados_objetivo_programa['perimetro_antebraco'] ?>"  onblur="funcoes(); troca_virgula_ponto('perimetro_antebraco')" maxlength="5"> 
                </div>
                <!-- fim - perna antebraco -->
            </div>
            <!-- fim dobras -->
             
                
                
                
                
            <!-- inicio  diametros -->
            <div class="col-md-6 padding_top_30">
            <!-- titulo medidas -->
                <div class="col-md-12 negrito padding_bottom_20">Dobras Cutâneas (mm)</div>
                
                <!-- inicio - triceps -->
                <div id="d_triceps" name="d_triceps" class="form-group col-md-4">
                    <label for="l_triceps">Tríceps</label>
                    <input type="text" class="form-control" name="dobras_triceps" id="dobras_triceps" value="<?php print  $dados_objetivo_programa['dobras_triceps'] ?>"  onblur="funcoes(); troca_virgula_ponto('dobras_triceps')" maxlength="5"> 
                </div>
                <!-- fim - triceps -->
                
                <!-- inicio - subescapular -->
                <div id="d_subescapular" name="d_subescapular" class="form-group col-md-4">
                    <label for="l_subescapular">Subescapular</label>
                    <input type="text" class="form-control" name="dobras_subescapular" id="dobras_subescapular" value="<?php print  $dados_objetivo_programa['dobras_subescapular'] ?>"  onblur="funcoes(); troca_virgula_ponto('dobras_subescapular')" maxlength="5"> 
                </div>
                <!-- fim - subescapular -->
                
                <!-- inicio - abdominal -->
                <div id="d_abdominal" name="d_abdominal" class="form-group col-md-4">
                    <label for="l_abdominal">Abdominal</label>
                    <input type="text" class="form-control" name="dobras_abdominal" id="dobras_abdominal" value="<?php print  $dados_objetivo_programa['dobras_abdominal'] ?>"   onblur="funcoes(); troca_virgula_ponto('dobras_abdominal')" maxlength="5"> 
                </div>
                <!-- fim - abdominal -->
                
                <!-- inicio - suprailíaca -->
                <div id="d_suprailiaca" name="d_suprailiaca" class="form-group col-md-4">
                    <label for="l_suprailiaca">Suprailíaca</label>
                    <input type="text" class="form-control" name="dobras_suprailiaca" id="dobras_suprailiaca" value="<?php print  $dados_objetivo_programa['dobras_suprailiaca'] ?>"   onblur="funcoes(); troca_virgula_ponto('dobras_suprailiaca')" maxlength="5"> 
                </div>
                <!-- fim - suprailíaca -->
                
                <!-- inicio - coxa -->
                <div id="d_coxa_dobras" name="d_coxa_dobras" class="form-group col-md-4">
                    <label for="l_coxa_dobras">Coxa</label>
                    <input type="text" class="form-control" name="dobras_coxa" id="dobras_coxa" value="<?php print  $dados_objetivo_programa['dobras_coxa'] ?>"   onblur="funcoes(); troca_virgula_ponto('dobras_coxa')" maxlength="5"> 
                </div>
                <!-- fim - coxa -->
                
                <!-- inicio - perna medial -->
                <div id="d_perna_medial" name="d_perna_medial" class="form-group col-md-4">
                    <label for="l_perna_medial">Perna Medial</label>
                    <input type="text" class="form-control" name="dobras_perna_medial" id="dobras_perna_medial" value="<?php print  $dados_objetivo_programa['dobras_perna_medial'] ?>"   onblur="funcoes(); troca_virgula_ponto('dobras_perna_medial')" maxlength="5"> 
                </div>
                <!-- fim - perna medial -->
                
                
            </div>
            <!-- fim  diametros -->
                
                
                
                
                
            <!-- inicio  perimetros -->
            <div class="col-md-6 padding_top_30">
            
                <!-- titulo medidas -->
                <div class="col-md-12 negrito padding_bottom_20">Diâmetros (cm)</div>
                
                <!-- inicio - punho -->
                <div id="d_punho" name="d_punho" class="form-group col-md-6">
                    <label for="l_punho">Punho</label>
                    <input type="text" class="form-control" name="diametro_punho" id="diametro_punho" value="<?php print  $dados_objetivo_programa['diametro_punho'] ?>"   onblur="funcoes(); troca_virgula_ponto('diametro_punho')" maxlength="5"> 
                </div>
                <!-- fim - punho -->
                
                <!-- inicio - umero -->
                <div id="d_umero" name="d_umero" class="form-group col-md-6">
                    <label for="l_umero">Úmero</label>
                    <input type="text" class="form-control" name="diametro_umero" id="diametro_umero" value="<?php print  $dados_objetivo_programa['diametro_umero'] ?>"   onblur="funcoes(); troca_virgula_ponto('diametro_umero')" maxlength="5"> 
                </div>
                <!-- fim - umero -->
                
                <!-- inicio - femur -->
                <div id="d_femur" name="d_femur" class="form-group col-md-6">
                    <label for="l_femur">Fêmur</label>
                    <input type="text" class="form-control" name="diametro_femur" id="diametro_femur" value="<?php print  $dados_objetivo_programa['diametro_femur'] ?>"   onblur="funcoes(); troca_virgula_ponto('diametro_femur')" maxlength="5"> 
                </div>
                <!-- fim - femur -->
                
                <!-- inicio - tornozelo -->
                <div id="d_tornozelo" name="d_tornozelo" class="form-group col-md-6">
                    <label for="l_tornozelo">Tornozelo</label>
                    <input type="text" class="form-control" name="diametro_tornozelo" id="diametro_tornozelo" value="<?php print  $dados_objetivo_programa['diametro_tornozelo'] ?>"   onblur="funcoes(); troca_virgula_ponto('diametro_tornozelo')" maxlength="5"> 
                </div>
                <!-- fim - perna tornozelo -->
                
                
            
            </div>
            <!-- fim  perimetros -->
              
                
            
                
                
            
                
            </div>
        </div>
   </div>
   <!-- fim - medidas -->
       
       
       
    <br/><br/>
       
    <!-- inicio - resultados -->
    <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
            <br/>
            <div class="row">
       
                
                
      <!-- inicio - imc -->
            <div id="imc" name="imc" class="form-group col-md-2">
                <label for="l_imc">IMC</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689" name="res_imc" id="res_imc" readonly>
            </div>
            <!-- fim - imc -->
               
               
            <!-- inicio - classificacao imc -->
            <div id="classifica" name="classifica" class="form-group col-md-4">
                <label for="l_classificacao">Classificação IMC</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689" name="classificacao" id="classificacao" readonly>
            </div>
            <!-- fim - classificacao imc -->
                
                
            <!-- inicio -  imc ideal -->
            <div id="d_imc_ideal" name="d_imc_ideal" class="form-group col-md-6">
                <label for="l_imc_ideal">IMC ideal</label>
                <input type="text" class="form-control" value="24.9" style="background-color:#18A689; color:#fff" name="imc_ideal" id="imc_ideal" readonly>
            </div>
            <!-- fim - imc ideal -->
                
                
                
                
                
                
                
                
            <!-- inicio - caq -->
            <div id="d_caq" name="d_caq" class="form-group col-md-2">
                <label for="l_caq">CAQ</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689"  name="res_caq" id="res_caq" readonly>
            </div>
            <!-- fim - caq -->            
               
               
            <!-- inicio - classificacao caq -->
            <div id="d_classifica_caq" name="d_classifica_caq" class="form-group col-md-4">
                <label for="l_caq_ideal">Classificação Risco</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689" name="classificacao_caq" id="classificacao_caq" readonly> 
           </div>
            <!-- fim - classificacao caq -->
                
                
            
            <!-- inicio - idade-->
            <div id="d_idade_caq_ideal" name="d_idade_caq_ideal" class="form-group col-md-1">
                <label for="l_idade_caq_ideal">Idade</label>
                <input type="text" class="form-control" style="background-color:#18A689; color:#fff" name="idade_caq_ideal" id="idade_caq_ideal" readonly> 
           </div>
            <!-- fim - idade -->
        
                
            
            <!-- inicio - sexo-->
            <div id="d_sexo_caq_ideal" name="d_sexo_caq_ideal" class="form-group col-md-2">
                <label for="l_sexo_caq_ideal">Sexo</label>
                <input type="text" class="form-control" style="background-color:#18A689; color:#fff"  name="sexo_caq_ideal" id="sexo_caq_ideal" readonly> 
           </div>
            <!-- fim - sexo-->
            
                
            <!-- inicio - classificacao caq ideal-->
            <div id="d_classifica_caq_ideal" name="d_classifica_caq_ideal" class="form-group col-md-3">
                <label for="l_caq_ideal">CAQ Ideal</label>
                <input type="text" class="form-control" style="background-color:#18A689; color:#fff"  name="classificacao_caq_ideal" id="classificacao_caq_ideal" readonly> 
           </div>
            <!-- fim - classificacao caq ideal-->
                
                
                
            
              
            <!-- inicio - protocolo -->
            <div id="d_protocolos" name="d_protocolos" class="form-group col-md-12 padding_top_30">
                <label for="l_protocolos">Protocolo</label>
                <select class="form-control" style="border:1px solid #18A689;"  name="protocolo" id="protocolo" onchange="funcoes()"> 
                    <option value="protocolo_A">Protocolo A - Guedes, 1996</option>
                    <option value="protocolo_B" selected>Protocolo B - Jackson & Pollock, 1985</option>
                </select>
           </div>
            <!-- fim - protocolo -->  
                
                
                
                
            <!-- inicio - gordura corporal porcentagem -->
            <div id="d_gordura_corporal_porcentagem" name="d_gordura_corporal_porcentagem" class="form-group col-md-3">
                <label for="l_gordura_corporal_porcentagem">Gordura Corporal %</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689"  name="gordura_corporal_porcentagem" id="gordura_corporal_porcentagem" readonly> 
           </div>
            <!-- fim - gordura corporal porcentagem -->
                
            <!-- inicio - gordura corporal kg -->
            <div id="d_gordura_corporal_quilo" name="d_gordura_corporal_quilo" class="form-group col-md-3">
                <label for="l_gordura_corporal_quilo">Gordura Corporal (kg)</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689"  name="gordura_corporal_quilo" id="gordura_corporal_quilo" readonly> 
           </div>
            <!-- fim - gordura corporal kg -->
                
                
                
            
            <!-- inicio - gordura ideal %-->
            <div id="d_gordura_corporal_porcentagem_ideal" name="d_gordura_corporal_porcentagem_ideal" class="form-group col-md-3 ">
                <label for="l_gordura_corporal_porcentagem_ideal">Gordura Corporal Ideal %</label>
                <input type="text" class="form-control" style="background-color:#18A689; color:#fff"  name="gordura_corporal_porcentagem_ideal" id="gordura_corporal_porcentagem_ideal" readonly> 
           </div>
            <!-- fim - gordura ideal %-->
                
                
            <!-- inicio - gordura peso %-->
            <div id="d_gordura_corporal_quilo_ideal" name="d_gordura_corporal_quilo_ideal" class="form-group col-md-3 ">
                <label for="l_gordura_corporal_porcentagem_ideal">Gordura Corporal Ideal (kg)</label>
                <input type="text" class="form-control" style="background-color:#18A689; color:#fff"  name="gordura_corporal_quilo_ideal" id="gordura_corporal_quilo_ideal" readonly> 
           </div>
            <!-- fim - gordura peso %-->
                
                
                           
                
            <!-- inicio - massa magra -->
            <div id="d_massa_magra" name="d_massa_magra" class="form-group col-md-6">
                <label for="l_massa_magra">Massa Magra</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689"  name="massa_magra" id="massa_magra" readonly> 
           </div>
            <!-- fim - massa magra -->
                
                           
            <!-- inicio - massa magra ideal -->
            <div id="d_massa_magra_ideal" name="d_massa_magra_ideal" class="form-group col-md-6">
                <label for="l_massa_magra_ideal">Massa Magra Ideal</label>
                <input type="text" class="form-control" style="background-color:#18A689; color:#fff"  name="massa_magra_ideal" id="massa_magra_ideal" readonly> 
           </div>
            <!-- fim - massa magra ideal -->
                
                
                
                
            <!-- inicio - protocolo C e D-->
            <div id="d_protocolo_c_d" name="d_protocolo_c_d" class="form-group col-md-12 padding_top_30">
                <label for="l_protocolo_c_d">Protocolo</label>
                <select class="form-control" style="border:1px solid #18A689;"  name="protocolo_cd" id="protocolo_cd" onchange="funcoes()"> 
                    <option value="protocolo_C">Protocolo C - Martin, Spenst, Drinkwater and Clarys, 1990</option>
                    <option value="protocolo_D">Protocolo D - Martin, 1991</option>
                </select>
           </div>
            <!-- fim - protocolo C e D -->  
                
                
            <!-- inicio - massa muscular -->
            <div id="d_massa_muscular" name="d_massa_muscular" class="form-group col-md-6">
                <label for="l_massa_muscular">Massa Muscular</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689"  name="massa_muscular" id="massa_muscular" readonly> 
           </div>
            <!-- fim - massa muscular -->
                
                
          <!-- inicio - massa ossea -->
            <div id="d_massa_ossea" name="d_massa_ossea" class="form-group col-md-6  ocultar">
                <label for="l_massa_ossea">Massa Ossea</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689"  name="massa_ossea" id="massa_ossea" readonly> 
           </div>
            <!-- fim - massa ossea -->
             
                
                
                
            <!-- inicio -  peso ideal teorico superior -->
            <div id="d_peso_ideal_teorico_superior" name="d_peso_ideal_teorico_superior" class="form-group col-md-3">
                <label for="l_peso_ideal_teorico_superior">Peso ideal Superior</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689" name="peso_ideal_teorico_superior" id="peso_ideal_teorico_superior" readonly>
            </div>            
            <!-- fim - peso ideal teorico superior -->
                
                
            <!-- inicio -  peso ideal teorico inferior -->
            <div id="d_peso_ideal_teorico_inferior" name="d_peso_ideal_teorico_inferior" class="form-group col-md-3">
                <label for="l_peso_ideal_teorico_inferior">Peso Ideal Inferior</label>
                <input type="text" class="form-control" style="border:1px solid #18A689; background-color:#fff; color:#18A689" name="peso_ideal_teorico_inferior" id="peso_ideal_teorico_inferior" readonly>
            </div>            
            <!-- fim - peso ideal teorico inferior -->
               
        </div>
            
            
            </div>
        </div>
       <!-- fim - resultados -->
   </div>
       
       
       
    <div class="row">
        <div class="col-md-offset-1 col-md-10  direito padding_top_30">
            <button type="submit" class="btn btn_verde_claro">Salvar Antropometria</button>    
            <button type="reset" class="btn btn_verde_claro" onclick="location.href='01_lista_pacientes.php'">Cancelar</button>    
        </div>
    </div>
       
    </form>

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
    
   

    <script>
    function funcoes()
    {
        calcular_imc();
        
        calcular_caq();
        calcular_caq_ideal();
        carrega_sexo_idade();
       
        calcular_gordura();

        calcular_massa_muscular();

        calculo_peso_ideal();
    }
        
        
    funcoes();
        
    </script>