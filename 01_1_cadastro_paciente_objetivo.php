<!DOCTYPE html>
<?php 
// iniciando sessão
session_start();
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


$sqlstring_objetivo_programa = "select * from tb_objetivo_paciente where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$info_objetivo_programa = $db->sql_query($sqlstring_objetivo_programa);
$dados_objetivo_programa = mysql_fetch_array($info_objetivo_programa);

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
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-edit fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">CADASTRO PACIENTE</span>
                    <br/>
                    <span class="fonte_pequena">Objetivo</span>                
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
       
    <!-- inicio - formulario paciente - dados pessoais -->   
   <form enctype="multipart/form-data" method="post">
    <!-- inicio - objetivo programa -->  
    <div class="row">
        
        <div class="col-md-6">
             <div class="form-group centralizado">
                <?php                  
                if($dados_objetivo_programa['foto_01'] != "" and $dados_objetivo_programa['foto_01'] != "avatar.png") 
                {                                    
                 ?>                 
                <label for="uploadImage"><img src="/fotos/<?php print $dados_objetivo_programa['foto_01'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview"/></label>   
                <input id="uploadImage" type="file" name="foto_01" onchange="pre_visualizacao();" style="display:none"/>
                <?php
                }                
                else if($dados_objetivo_programa['foto_01'] == "" or $dados_objetivo_programa['foto_01'] == "avatar.png") 
                 {
                 ?>
                 <label for="uploadImage"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview"/></label>   
                <input id="uploadImage" type="file" name="foto_01" onchange="pre_visualizacao();" style="display:none"/>
                 <?php
                 }
                 ?>
              </div>
        </div>
                      
            <script type="text/javascript">
            function pre_visualizacao() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                };
            };
            </script> 
       
       
       
       
       <div class="col-md-6">
             <div class="form-group centralizado">
                 <?php                  
                if($dados_objetivo_programa['foto_02'] != "" and $dados_objetivo_programa['foto_02'] != "avatar.png") 
                {                                    
                 ?>                 
                <label for="uploadImage1"><img src="/fotos/<?php print $dados_objetivo_programa['foto_02'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                <input id="uploadImage1" type="file"  name="foto_02" onchange="pre_visualizacao1();" style="display:none"/>
                <?php
                }                
                else if($dados_objetivo_programa['foto_02'] == "" or $dados_objetivo_programa['foto_02'] == "avatar.png") 
                 {
                 ?>
                 <label for="uploadImage1"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                 <input id="uploadImage1" type="file"  name="foto_02" onchange="pre_visualizacao1();" style="display:none"/>
                 <?php
                 }
                 ?>
                
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
       </div>
       
       
       
       <div class="row">
        <div class="col-md-12">
            
            <div class="row">
            <!-- inicio - objetivo paciente -->
            <div id="objetivo_paciente" name="objetivo_paciente" class="form-group col-md-6">
                <label for="qual_atividade">Objetivo do Programa</label>
                <select name="objetivo_paciente" id="objetivo_paciente" class="form-control">
                  <?php
                    $sqlstring_objetivo = "Select * from tb_objetivo";
                    $info_objetivo = $db->sql_query($sqlstring_objetivo);
                    while($dados_objetivo=mysql_fetch_array($info_objetivo))
                    {
                        if($dados_objetivo['cod_objetivo'] == $dados_objetivo_programa['cod_objetivo_programa'])
                                print "<option value=" . $dados_objetivo['cod_objetivo'] . " selected>" . $dados_objetivo['objetivo'] . "</option>";
                        else
                                print "<option value=" . $dados_objetivo['cod_objetivo'] . ">" . $dados_objetivo['objetivo'] . "</option>";
                    }                            
                  ?>
                </select>
            </div>
            <!-- fim - objetivo paciente -->
            
            <!-- inicio - objetivo paciente -->
            <div id="tempo_programa" name="tempo_programa" class="form-group col-md-6">
                <label for="qual_atividade">Tempo</label>
                <select name="tempo_programa" id="tempo_programa" class="form-control">
                  <?php
                    $sqlstring_tempo = "Select * from tb_tempo";
                    $info_tempo = $db->sql_query($sqlstring_tempo);
                    while($dados_tempo=mysql_fetch_array($info_tempo))
                    {
                        if($dados_tempo['cod_tempo'] == $dados_objetivo_programa['cod_tempo_programa'])
                            print "<option value=" . $dados_tempo['cod_tempo'] . " selected>" . $dados_tempo['tempo'] . "</option>";
                        else
                            print "<option value=" . $dados_tempo['cod_tempo'] . ">" . $dados_tempo['tempo'] . "</option>";
                    }                            
                  ?>
                </select>
            </div>
            <!-- fim - objetivo paciente -->
           </div> 
            
            
            
            
           <!-- inicio - calculo IMC -->    
           <div class="row">
            <!-- inicio - peso -->
            <div id="objetivo_paciente" name="objetivo_paciente" class="form-group col-md-3">
                <label for="l_peso">Peso (Kg)</label>
                <input type="text" class="form-control" name="peso" id="peso" onblur="calcular_imc()" value="<?php print $dados_objetivo_programa['peso'] ?>"> 
            </div>
           
            <!-- fim - peso -->
            
                        
          
            <!-- inicio - altura -->
            <div id="objetivo_paciente" name="objetivo_paciente" class="form-group col-md-3">
                <label for="l_altura">Altura (cm)</label>
                <input type="text" class="form-control" name="altura" id="altura"   onblur="calcular_imc()" value="<?php print $dados_objetivo_programa['altura'] ?>"> 
           </div>
            <!-- fim - altura -->
            
            
            
            
            
            <!-- inicio - imc -->
            <div id="imc" name="imc" class="form-group col-md-6">
                <label for="l_imc">IMC</label>
                <input type="text" class="form-control" name="res_imc" id="res_imc" >
            </div>
            <!-- fim - imc -->            
        </div>
        <!-- fim - calculo IMC -->
            
            
            
            
            
        <!-- inicio - calculo CAQ -->    
           <div class="row">
            <!-- inicio - abdome -->
            <div id="d_abdome" name="d_abdome" class="form-group col-md-3">
                <label for="l_abdome">Abdôme (cm)</label>
                <input type="text" class="form-control" name="abdome" id="abdome" onblur="calcular_caq()" value="<?php print $dados_objetivo_programa['abdome'] ?>"> 
            </div>
           
            <!-- fim - abdome -->
            
                        
          
            <!-- inicio - quadril -->
            <div id="d_quadril" name="d_quadril" class="form-group col-md-3">
                <label for="l_quadril">Quadril (cm)</label>
                <input type="text" class="form-control" name="quadril" id="quadril"  onblur="calcular_caq()"  value="<?php print $dados_objetivo_programa['quadril'] ?>"> 
           </div>
            <!-- fim - quadril -->
            
            
            
            
            
            <!-- inicio - imc -->
            <div id="d_caq" name="d_caq" class="form-group col-md-6">
                <label for="l_caq">CAQ</label>
                <input type="text" class="form-control" name="res_caq" id="res_caq" >
            </div>
            <!-- fim - imc -->            
        </div>
        <!-- fim - calculo CAQ -->
           
            
            <div class="col-md-12  direito">
    <button type="submit" class="btn btn-primary">Salvar Objetivo Programa</button>    
    </div>
            
        </form>
            
    </div>
    <!-- fim - objetivo programa -->  
   </form>
  <!-- fim - formulário cadastro de paciente - dados pessoais -->
       
    
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
    
        //include do arquivo de conexao com o banco de dados
        include_once('conexao/connect_db.php');

        //instancia do banco de dados
        $db = BancoDeDados::getInstance();  

        // acentuação
        mysql_set_charset('utf8');
        ini_set('default_charset','UTF-8');

        //recuperando dados pessoais
        $foto_01 = $_FILES['foto_01'];
        $foto_02 = $_FILES['foto_02'];
        $objetivo = $_POST['objetivo_paciente'];
        $tempo = $_POST['tempo_programa'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $abdome = $_POST['abdome'];
        $quadril = $_POST['quadril'];
        
  
        
        print "<center>foto poeea" . $foto . "</center>";
        
        // insere na tb_objetivo paciente as informações sobre o objetivo do páciente
        $sqlstring_alterar_objetivo  = "Update tb_objetivo_paciente set ";
        if($foto_01['name'] != "")   $sqlstring_alterar_objetivo .= "foto_01 = '" . $_SESSION['cod_paciente_selecionado'] . "_1_" . $foto_01['name'] . "', ";
        if($foto_02['name'] != "")   $sqlstring_alterar_objetivo .= "foto_02 = '" . $_SESSION['cod_paciente_selecionado'] . "_2_" . $foto_02['name'] . "', ";
        $sqlstring_alterar_objetivo .= "cod_objetivo_programa = '" . $objetivo . "', ";
        $sqlstring_alterar_objetivo .= "cod_tempo_programa = '" . $tempo . "', ";
        $sqlstring_alterar_objetivo .= "peso = '" . $peso . "', ";
        $sqlstring_alterar_objetivo .= "altura = '" . $altura . "', ";
        $sqlstring_alterar_objetivo .= "abdome = '" . $abdome . "', ";
        $sqlstring_alterar_objetivo .= "quadril = '" . $quadril . "' ";
        $sqlstring_alterar_objetivo .= "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'];

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


        
        
        //preparando informações para carregar no modal
        $titulo = "Cadastro de Paciente - Objetivo do Programa";
        $mensagem = "O objetivo do programa foi cadastrado com sucesso!";
        $btn_esquerda = "Antopometria";
        $btn_esquerda_destino = "01_1_cadastro_paciente_antopometria.php";
        $btn_direita = "Fechar";
        $btn_direita_destino = "01_lista_pacientes.php";
        $btn_x = "01_lista_pacientes.php";

        include "includes/modal_sucesso.php";
?>

    <!-- abrindo o modal_sucesso -->
    <script>
        $(window).on('load',function()
        {        
        $('#modal_sucesso').modal('show');
        });
    </script>
    
    <?php
    }
    ?>

    <script>
         
        calcular_imc();
        calcular_caq();
    </script>