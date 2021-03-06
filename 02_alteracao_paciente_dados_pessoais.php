<!DOCTYPE html>
<?php 
// inicia a sessão
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

//atualizando os dados caso o formulario tenha sido enviado
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
        $nome_paciente = $_POST['nome_paciente'];
        $profissao = $_POST['profissao'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $telefone_residencial = $_POST['telefone_residencial'];
        $telefone_comercial = $_POST['telefone_comercial'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];    
        $parteData = explode("/", $data_nascimento);    
        $data_nascimento = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $outros = $_POST['outros'];
        $cpf = $_POST['cpf']; 
        $rg = $_POST['rg']; 
    
        $foto_01 = $_FILES['foto_01'];
        $fo_01 = isset($_POST['fo_01']);
        
        //atualiza a foto na tb_usuario
        //formando o nome do arquivo da foto
        if($foto_01['name'] != "" and $fo_01 == 0)   $foto = $_SESSION['cod_paciente_selecionado'] . "_" . $foto_01['name'];
        if($fo_01 == 1 and $foto_01['name'] == "")   $foto = 'avatar.png';
        if($fo_01 == 0 and $foto_01['name'] == "")   $foto = 'avatar.png';

        // atualiza na tb_paciente os dados pessoais do paciente
        $sqlstring_atualizar_dados_pessoais  = "update tb_paciente set ";
        $sqlstring_atualizar_dados_pessoais .= "nome_paciente = '" . $nome_paciente . "', ";
        $sqlstring_atualizar_dados_pessoais .= "profissao = '" . $profissao . "', ";
        $sqlstring_atualizar_dados_pessoais .= "cpf = '" . $cpf . "', ";
        $sqlstring_atualizar_dados_pessoais .= "rg = '" . $rg . "', ";
        $sqlstring_atualizar_dados_pessoais .= "endereco = '" . $endereco . "', ";
        $sqlstring_atualizar_dados_pessoais .= "numero = '" . $numero . "', ";
        $sqlstring_atualizar_dados_pessoais .= "complemento = '" . $complemento . "', ";
        $sqlstring_atualizar_dados_pessoais .= "bairro = '" . $bairro . "', ";
        $sqlstring_atualizar_dados_pessoais .= "cep = '" . $cep . "', ";
        $sqlstring_atualizar_dados_pessoais .= "cidade = '" . $cidade . "', ";
        $sqlstring_atualizar_dados_pessoais .= "telefone_residencial = '" . $telefone_residencial . "', ";
        $sqlstring_atualizar_dados_pessoais .= "telefone_comercial = '" . $telefone_comercial . "', ";
        $sqlstring_atualizar_dados_pessoais .= "celular = '" . $celular . "', ";
        $sqlstring_atualizar_dados_pessoais .= "email = '" . $email . "', ";
        $sqlstring_atualizar_dados_pessoais .= "data_nascimento = '" . $data_nascimento . "', ";
        $sqlstring_atualizar_dados_pessoais .= "sexo = '" . $sexo . "', ";
        $sqlstring_atualizar_dados_pessoais .= "peso = '" . $peso . "', ";
        $sqlstring_atualizar_dados_pessoais .= "altura = '" . $altura . "', ";
        $sqlstring_atualizar_dados_pessoais .= "outros = '" . $outros . "' ";
        $sqlstring_atualizar_dados_pessoais .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];

        $db->string_query($sqlstring_atualizar_dados_pessoais); 


        //atualizando a foto para o usuário selecionado - quando possui foto
        if($foto_01['name'] != "" and $fo_01 == 0)
        {
            $sqlstring_foto = "update tb_paciente set foto_paciente = '" . $foto . "' where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
            $db->string_query($sqlstring_foto); 


            // fazendo uplodas das fotos 01
            $arquivo = $_FILES['foto_01'];  

            //$destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos_usuarios\\';
            $destino  = '/home/engineercode/public_html/plataformanutris/fotos/';
            $destino .= $_SESSION['cod_paciente_selecionado'] . "_";
            $destino .= $arquivo['name'];  

            move_uploaded_file($arquivo['tmp_name'],$destino);    
        }
            
            
            
        if($foto_01['name'] == "" and $fo_01 == 1)
        {
            $sqlstring_foto = "update tb_paciente set foto_paciente = 'avatar.png' where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
            $db->string_query($sqlstring_foto); 
        }
    
        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Paciente - Dados Pessoais";
        $mensagem = "Os dados pessoais de <strong>" . $nome_paciente . "</strong> foram cadastrados com sucesso!";
        $btn_esquerda = "Reeducação";
        $btn_esquerda_destino = "02_lista_acompanhamento_paciente.php";
        $btn_direita = "Informações Gerais";
        $btn_direita_destino = "02_paciente_index.php";
        $btn_x = "02_paciente_index.php";
    }

//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod']))
    $_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);


$sqlstring_paciente_selecionado = "Select * from tb_paciente where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];   
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
  </head>    
  <script src="js/funcoes.js"></script>
<body class="margin_00">

<?php 
    include "includes/menu_paciente.php";
    include "includes/cabecalho_paciente_cliente.php";
        
?>     
    
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10"  style="border:0px solid #fff">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro col-md-12" style="border:0px solid #fff; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-tag fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">DADOS PESSOAIS</span>                    
                    <br/>
                    <span class="fonte_pequena">                        
                        <a href="01_1_detalhes_paciente.php">Informações do Paciente</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Dados Pessoais</span>                        
                    </span> 
                    <br/><br/>                    
                    
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
       
    <form method="post" action="" enctype="multipart/form-data">
    <!-- inicio - dados pessoais -->  
    <div class="row">
        
        
          
          <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default">
            <div class="panel-body borda_verde_claro" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">
            
                
                
            <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-md-8 col-xs-10 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> FOTO </div>
             <div class="col-md-4 col-xs-2 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_1').innerHTML = '<br/><label for=\'uploadImage1\'><img src=\'fotos/avatar.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview1\'></label><input id=\'uploadImage1\' type=\'file\' name=\'foto_01\' onchange=\'pre_visualizacao1()\' style=\'display:none\'><input type=hidden name=fo_01 id=fo_01 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
            
             <div class="col-md-12 form-group centralizado borda_cinza altura_300  borda_inferior_verde_claro" id="f_1">
                <br/>
                <?php                  
                if($dados_paciente_selecionado['foto_paciente'] != "" and $dados_paciente_selecionado['foto_paciente'] != "avatar.png") 
                {  
                 ?> 
                <label for="uploadImage1"><img src="fotos/<?php print $dados_paciente_selecionado['foto_paciente'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                <input id="uploadImage1" type="file" name="foto_01" onchange="pre_visualizacao1();" style="display:none"/>                
                <?php
                }                
                else if($dados_paciente_selecionado['foto_paciente'] == "" or $dados_paciente_selecionado['foto_paciente'] == "avatar.png") 
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
                
          <!-- inicio - linha 1 -->
              <!-- inicio nome paciente -->
              <div class="form-group col-md-6">
                <label for="nomecompleto">Nome Completo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="nome_paciente" id="nome_paciente" value="<?php print $dados_paciente_selecionado['nome_paciente'] ?>" required maxlength="100">
              </div>
              <!-- fim nome paciente -->
                
                
              <!-- inicio cpf paciente -->
              <div class="form-group col-md-3">
                <label for="cpf">CPF <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="00000000000" value="<?php print $dados_paciente_selecionado['cpf'] ?>" maxlength="11" required>
              </div>
              <!-- fim cpf paciente -->
                
             <!-- inicio nome paciente -->
              <div class="form-group col-md-3">
                <label for="rg">RG <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="rg" id="rg" placeholder="00000000X" value="<?php print $dados_paciente_selecionado['rg'] ?>" maxlength="10" required>
              </div>
              <!-- fim nome paciente -->
                
              <!-- inicio profissao -->    
              <div class="form-group col-md-6">
                <label for="profissao">Profissão  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="profissao" id="profissao" value="<?php print $dados_paciente_selecionado['profissao'] ?>" required maxlength="40">
              </div>
              <!-- inicio profissao -->
          <!-- fim - linha 1 -->
            
            
            
          <!-- inicio - linha 2 --> 
              <!-- inicio endereco -->    
              <div class="form-group col-md-5">
                <label for="endereco">Endereço  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="endereco" id="endereco" value="<?php print $dados_paciente_selecionado['endereco'] ?>" required maxlength="60">
              </div>
              <!-- fim endereco -->


              <!-- inicio numero -->    
              <div class="form-group col-md-2">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" value="<?php print $dados_paciente_selecionado['numero'] ?>" maxlength="5">
              </div>
              <!-- fim numero -->


              <!-- inicio complemento -->    
              <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control text-uppercase" name="complemento" id="complemento" value="<?php print $dados_paciente_selecionado['complemento'] ?>" maxlength="25">
              </div>
              <!-- fim complemento -->


              <!-- inicio bairro -->    
              <div class="form-group col-md-3">
                <label for="bairro">Bairro   <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="bairro" id="bairro" value="<?php print $dados_paciente_selecionado['bairro'] ?>" required maxlength="30">
              </div>
              <!-- fim bairro -->
          <!-- fim - linha 2 --> 
           
          
            
            
            
            
            
          <!-- inicio - linha 3 --> 
              <!-- inicio CEP -->    
              <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" value="<?php print $dados_paciente_selecionado['cep'] ?>" maxlength="8">
              </div>
              <!-- fim CEP -->


              <!-- inicio cidade -->    
              <div class="form-group col-md-4">
                <label for="cidade">Cidade   <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="cidade" id="cidade" value="<?php print $dados_paciente_selecionado['cidade'] ?>" required maxlength="40">
              </div>
              <!-- fim cidade -->


              <!-- inicio telefone residencial -->    
              <div class="form-group col-md-3">
                <label for="telfone_residencial">Tel Residencial</label>
                <input type="text" class="form-control" name="telefone_residencial" id="telefone_residencial" value="<?php print $dados_paciente_selecionado['telefone_residencial'] ?>" maxlength="10">
              </div>
              <!-- fim telefone residencial -->


              <!-- inicio telefone comercial -->    
              <div class="form-group col-md-3">
                <label for="telefone_comercial">Tel Comercial</label>
                <input type="text" class="form-control" name="telefone_comercial" id="telefone_comercial" value="<?php print $dados_paciente_selecionado['telefone_comercial'] ?>" maxlength="10">
              </div>
              <!-- fim telefone comercial -->
            
              <!-- inicio telefone celular -->    
              <div class="form-group col-md-3">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular" id="celular" value="<?php print $dados_paciente_selecionado['celular'] ?>" maxlength="11">
              </div>
              <!-- fim telefone celular -->
          <!-- fim - linha 3 -->
            
            
            
            
         <!-- inicio - linha 4 --> 
              <!-- inicio email -->    
              <div class="form-group col-md-6">
                <label for="email">e-mail</label>
                <input type="text" class="form-control text-lowercase" name="email" id="email" value="<?php print $dados_paciente_selecionado['email'] ?>" maxlength="100">
              </div>
              <!-- fim email -->


              <!-- inicio data nascimento -->    
              <div class="form-group col-md-3"> 
                <label for="cidade">Dt Nascimento   <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" value="<?php print date("d/m/Y", strtotime($dados_paciente_selecionado['data_nascimento'])) ?>" maxlength="10" required>
              </div>
              <!-- fim data nascimento -->


              <!-- inicio sexo -->
              <div class="form-group col-md-3">
                <label for="sexo">Sexo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select class="form-control text-uppercase" name="sexo" id="sexo">
                    <?php
                    if($dados_paciente_selecionado['sexo'] == "F")
                    {
                        print "<option value='F' selected>Feminino</option>";
                        print "<option value='M'>Masculino</option>";
                    }                        
                    else
                    {
                        print "<option value='F'>Feminino</option>";
                        print "<option value='M' selected>Masculino</option>";
                    }
                    ?>                    
                </select>
              </div>
              <!-- fim sexo -->            
              
              
          <!-- fim - linha 4 -->
            
            
            
            
          <!-- inicio - linha 5 --> 
              <!-- inicio outros -->    
              <div class="form-group col-md-12">
                <label for="outros">Outros</label>
                <textarea class="form-control text-uppercase" rows="3" name="outros" id="paciente"><?php print $dados_paciente_selecionado['outros'] ?></textarea>
              </div>
              <!-- fim outros -->
          <!-- fim - linha 5 -->
          
                
        </div>
    </div>        
      <!-- fim - painel dados pessoais -->
          
        <!-- inicio - linha 6 -->
            <!-- inicio - botoes salvar e cancelar anamnese -->      
            <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro">Salvar Dados Pessoais</button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='02_paciente_index.php'">Cancelar</button>    
            </div>
            <!-- inicio - botoes salvar e cancelar anamnese -->      
          <!-- fim - linha 6 -->
        
    </div>
    <!-- fim - dados pessoais -->  
    
        
    </form>   
        
        
        
        
         
        
      
        
   
        
    
    </form>
       
    <br/><br/><br/><br/><br/><br/>
       
   </div>
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda --> 
    
    
</div>
    
    
    
    

    
    
    
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
    
    
    
    </body>
</html>