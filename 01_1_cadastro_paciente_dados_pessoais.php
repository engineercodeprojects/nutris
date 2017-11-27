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

<?php include "includes/menu_nutricionista.php" ?>     

<!-- inicio container fluid -->
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-tag fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">PACIENTE</span>
                    <br/>
                    <span class="fonte_pequena">Dados Pessoais</span>
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
       
       
    <!-- inicio - formulario paciente - dados pessoais -->   
    <form method="post" action=""  enctype="multipart/form-data" >
    <!-- inicio - dados pessoais -->  
    <div class="row">
        
          <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default">
            <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">                 
             
                
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
                <label for="uploadImage1"><img src="img/avatar.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                <input id="uploadImage1" type="file" name="foto_01" onchange="pre_visualizacao1();" style="display:none"/>                
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
                <label for="nomecompleto">Nome Completo <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="nome_paciente" id="nome_paciente" placeholder="Maria da Silva" maxlength="100" required>
              </div>
              <!-- fim nome paciente -->
                
             <!-- inicio cpf paciente -->
              <div class="form-group col-md-3">
                <label for="cpf">CPF <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="00000000000" maxlength="11" required>
              </div>
              <!-- fim cpf paciente -->
                
             <!-- inicio nome paciente -->
              <div class="form-group col-md-3">
                <label for="rg">RG <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="rg" id="rg" placeholder="00000000X" maxlength="10" required>
              </div>
              <!-- fim nome paciente -->

              <!-- inicio profissao -->    
              <div class="form-group col-md-6">
                <label for="profissao">Profissão <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="profissao" id="profissao" placeholder="Vendedora" required maxlength="40">
              </div>
              <!-- inicio profissao -->
          <!-- fim - linha 1 -->
            
            
            
          <!-- inicio - linha 2 --> 
              <!-- inicio endereco -->    
              <div class="form-group col-md-5">
                <label for="endereco">Endereço <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua dos Nutrientes" required maxlength="60">
              </div>
              <!-- fim endereco -->


              <!-- inicio numero -->    
              <div class="form-group col-md-2">
                <label for="numero">Número <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="numero" id="numero" placeholder="1000" maxlength="5" required>
              </div>
              <!-- fim numero -->


              <!-- inicio complemento -->    
              <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control text-uppercase" name="complemento" id="complemento" placeholder="Apto 141" maxlength="25">
              </div>
              <!-- fim complemento -->


              <!-- inicio bairro -->    
              <div class="form-group col-md-3">
                <label for="bairro">Bairro <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="bairro" id="bairro" placeholder="Saúde" required maxlength="30">
              </div>
              <!-- fim bairro -->
          <!-- fim - linha 2 --> 
           
          
            
            
            
            
            
          <!-- inicio - linha 3 --> 
              <!-- inicio CEP -->    
              <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="18132852" maxlength="8">
              </div>
              <!-- fim CEP -->


              <!-- inicio cidade -->    
              <div class="form-group col-md-4">
                <label for="cidade">Cidade  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="cidade" id="cidade" placeholder="Sorocaba" required maxlength="40">
              </div>
              <!-- fim cidade -->


              <!-- inicio telefone residencial -->    
              <div class="form-group col-md-3">
                <label for="telfone_residencial">Tel Residencial</label>
                <input type="text" class="form-control" name="telefone_residencial" id="telefone_residencial" placeholder="1147128523" maxlength="10">
              </div>
              <!-- fim telefone residencial -->


              <!-- inicio telefone comercial -->    
              <div class="form-group col-md-3">
                <label for="telefone_comercial">Tel Comercial</label>
                <input type="text" class="form-control" name="telefone_comercial" id="telefone_comercial" placeholder="1132359632"  maxlength="10">
              </div>
              <!-- fim telefone comercial -->
            
              <!-- inicio telefone celular -->    
              <div class="form-group col-md-3">
                <label for="celular">Celular <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="celular" id="celular" placeholder="11999998877"  maxlength="11">
              </div>
              <!-- fim telefone celular -->
          <!-- fim - linha 3 -->
            
            
            
            
         <!-- inicio - linha 4 --> 
              <!-- inicio email -->    
              <div class="form-group col-md-6">
                <label for="email">e-mail <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="maria_silva@gmail.com" maxlength="100">
              </div>
              <!-- fim email -->


              <!-- inicio data nascimento -->    
              <div class="form-group col-md-3">
                <label for="data_nascimento">Dt Nascimento <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="12/12/2017" maxlength="10" required>
              </div>
              <!-- fim data nascimento -->


              <!-- inicio sexo -->
              <div class="form-group col-md-3">
                <label for="sexo">Sexo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select class="form-control text-uppercase" name="sexo" id="sexo">
                    <option value="F" checked>Feminino</option>
                    <option value="M">Masculino</option>
                </select>
              </div>
              <!-- fim sexo -->
              
              
          <!-- fim - linha 4 -->
            
            
            
            
          <!-- inicio - linha 5 --> 
              <!-- inicio outros -->    
              <div class="form-group col-md-12">
                <label for="outros">Outros</label>
                <textarea class="form-control" rows="3" name="outros" id="paciente"></textarea>
              </div>
              <!-- fim outros -->
          <!-- fim - linha 5 -->
                
                
        </div>
    </div>        
    <!-- fim - painel dados pessoais -->
    
        
        <!-- inicio - botao para Salvar Dados Pessoais -->
              <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro"> Salvar Dados Pessoais </button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_pacientes.php'"> Cancelar </button>    
                </div>
          <!-- fim - botão para Salvar Dados Pessoais -->
            
    </div>
    <!-- fim - dados pessoais -->  
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
        $data_nascimento = date("Y-m-d",strtotime($data_nascimento));
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $outros = $_POST['outros'];
        
        
        
        $cpf = $_POST['cpf']; 
        $rg = $_POST['rg']; 
        $login = substr($email,0,strrpos($email, "@"));
        $senha = rand(1234, 123456); 
        $foto_01 = $_FILES['foto_01'];
        $fo_01 = isset($_POST['fo_01']);
        
        
        //seleciona o usuário que acabou de ser cadastrado
        $sqlstring_ultimo_usuario = "select cod_usuario from tb_usuario order by cod_usuario desc limit 1";
        $info_ultimo_usuario = $db->sql_query($sqlstring_ultimo_usuario); 
        $dados_ultimo_usuario = mysql_fetch_array($info_ultimo_usuario);

        
        
        // insere na tb_paciente os dados pessoais do paciente
        $sqlstring_inserir_dados_pessoais = "Insert into tb_paciente (nome_paciente, cpf, rg, profissao, endereco, numero, complemento, bairro, cep, cidade, telefone_residencial, telefone_comercial, celular, email, data_nascimento, sexo, peso, altura, outros, cod_status, data_cadastro_paciente) values ";
        $sqlstring_inserir_dados_pessoais .= "('" . $nome_paciente . "','" . $cpf . "','" . $rg . "','" . $profissao . "','" . $endereco . "','" . $numero . "','" . $complemento . "','" . $bairro . "','" . $cep . "','" . $cidade . "','" . $telefone_residencial . "','" . $telefone_comercial . "','" . $celular . "','" . $email ."','" . $data_nascimento ."','" . $sexo . "','" . $peso . "','" . $altura . "','" . $outros . "',1,'" . date('Y-m-d') . "')";

        $db->string_query($sqlstring_inserir_dados_pessoais); 


        
        // seleciona o ultimo codigo cadastrado na tb_paciente para inserir as informações nas tabelas tb_historico e tb_habito_alimentar
        $sqlstring_codigo = "select cod_paciente from tb_paciente order by cod_paciente desc limit 1";
        $info_codigo = $db->sql_query($sqlstring_codigo);
        $dados_codigo = mysql_fetch_array($info_codigo);
        
        
        $_SESSION['cod_paciente_selecionado']  = $dados_codigo['cod_paciente'];
        
        // inserindo a consulta inicial do paciente
        $sqlstring_inserir_consulta = "Insert into tb_consulta (cod_paciente, data_consulta) values ('" . $_SESSION['cod_paciente_selecionado'] . "','" . date('Y-m-d') . "')";
        $db->string_query($sqlstring_inserir_consulta); 
        
        
        // seleciona o ultimo codigo cadastrado na tb_paciente para inserir as informações nas tabelas tb_historico e tb_habito_alimentar
        $sqlstring_codigo_consulta = "select cod_consulta from tb_consulta order by cod_consulta desc limit 1";
        $info_codigo_consulta = $db->sql_query($sqlstring_codigo_consulta);
        $dados_codigo_consulta = mysql_fetch_array($info_codigo_consulta);
        
        $_SESSION['cod_consulta_selecionada']  = $dados_codigo_consulta['cod_consulta'];
        
        
        
        // inserindo o paciente na tb_atividade_física
        $sqlstring_inserir_atividade_fisica  = "Insert into tb_atividade_fisica (cod_paciente, cod_consulta) ";
        $sqlstring_inserir_atividade_fisica .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" . $_SESSION['cod_consulta_selecionada'] . "')";
        $db->string_query($sqlstring_inserir_atividade_fisica); 
       
        // inserindo o paciente na tb_historico_paciente
        $sqlstring_inserir_historico_paciente  = "Insert into tb_historico_paciente (cod_paciente, cod_consulta, data_historico_paciente) ";
        $sqlstring_inserir_historico_paciente .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" . $_SESSION['cod_consulta_selecionada'] . "','" . date('Y-m-d') . "')";
        $db->string_query($sqlstring_inserir_historico_paciente); 
        
        // inserindo o paciente na tb_habito_alimentar
        $sqlstring_inserir_habito_alimentar  = "Insert into tb_habito_alimentar (cod_paciente, cod_consulta, data_habito_alimentar) ";
        $sqlstring_inserir_habito_alimentar .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" .  $_SESSION['cod_consulta_selecionada'] . "','" . date('Y-m-d') . "')";
        $db->string_query($sqlstring_inserir_habito_alimentar);
        
        // inserindo o paciente na tb_objetivo_paciente
        $sqlstring_inserir_objetivo_paciente  = "Insert into tb_objetivo_paciente (cod_paciente,cod_consulta, data_objetivo_paciente) ";
        $sqlstring_inserir_objetivo_paciente .= "values ('" . $_SESSION['cod_paciente_selecionado'] . "','" .  $_SESSION['cod_consulta_selecionada'] . "','" . date('Y-m-d') . "')";
        $db->string_query($sqlstring_inserir_objetivo_paciente); 
        
        //inserindo a dieta do paciente inicialmente sem refeições definidas
        $contador_dia_semana=1;
        while($contador_dia_semana < 8)
        {
            $contador_refeicoes=1;
            while($contador_refeicoes <7)
            {
            $sqlstring_inserir_dieta  = "Insert into tb_dieta (cod_paciente, cod_tipo_refeicao, cod_refeicao, cod_dia_semana) values ";
            $sqlstring_inserir_dieta .= "(" . $_SESSION['cod_paciente_selecionado'] . "," . $contador_refeicoes . ", 0 ," . $contador_dia_semana . ")";
            $db->string_query($sqlstring_inserir_dieta); 
            $contador_refeicoes++;
            }
        $contador_dia_semana++;
        }
        
        //inserir o paciente na tb_usuario para poder logar no sistema e acompanhar a dieta
        $primeiro_nome = explode(" ", $nome_paciente);
        $nome_usuario = substr($email, 0, strpos( $email, '@' ));
        $senha_usuario = "nutris@2017";
        
        
        
        // insere na tb_usuario os dados do usuario pf
        $sqlstring_inserir_usuario_plataforma = "Insert into tb_usuario (cod_usuario,nome_usuario, profissao, endereco, numero, complemento, bairro, cep, cidade, telefone_residencial, telefone_comercial, celular, email, data_nascimento, sexo, outros, cod_status, login, senha, cod_nivel_acesso, cpf_cnpj, rg_ie) values ";
        $sqlstring_inserir_usuario_plataforma .= "('" . $dados_codigo['cod_paciente'] . "','" . $nome_paciente . "','" . $profissao . "','" . $endereco . "','" . $numero . "','" . $complemento . "','" . $bairro . "','" . $cep . "','" . $cidade . "','" . $telefone_residencial . "','" . $telefone_comercial . "','" . $celular . "','" . $email ."','" . $data_nascimento ."','" . $sexo . "','" . $outros . "',1,'" . $login . "','" . $senha . "',1,'" . $cpf . "','" . $rg . "')";
        $db->string_query($sqlstring_inserir_usuario_plataforma); 
        
        
        
        //formando o nome do arquivo da foto
        if($foto_01['name'] != "" and $fo_01 == 0)   $foto = $dados_codigo['cod_paciente'] . "_" . $foto_01['name'];
        if($fo_01 == 1 and $foto_01['name'] == "")   $foto = 'avatar.png';
        if($fo_01 == 0 and $foto_01['name'] == "")   $foto = 'avatar.png';

        //atualizando a foto para o usuário selecionado na tb_paciente e na tb_usuario
        $sqlstring_foto_paciente = "update tb_paciente set foto_paciente = '" . $foto . "' where cod_paciente = " . $dados_codigo['cod_paciente'];
        $db->string_query($sqlstring_foto_paciente); 
        
        $sqlstring_foto_usuario = "update tb_usuario set foto_usuario = '" . $foto . "' where cod_usuario = " . $dados_codigo['cod_paciente'];
        $db->string_query($sqlstring_foto_usuario); 


        // fazendo uplodas das fotos 01
        $arquivo = $_FILES['foto_01'];  

        $destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos_usuarios\\';
//        $destino  = '/home/engineercode/public_html/plataformanutris/fotos_usuarios/';
        $destino .= $dados_codigo['cod_paciente'] . "_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);
        
        
        
        
        //enviando e-mail para o usuario
            //Envia e-mail
            $mail->CharSet = 'UTF-8';
            $linha = "\n";
            $rementente_email   = "nutris@nutris.engineercode.com.br";
            $remetente_nome     = "Nutris - Plataforma Nutricional";
            $destinatario_email = $email.";nutris@nutris.engineercode.com.br";
            $destinatario_cc    = "nutris@nutris.engineercode.com.br";
            $assunto            = "Senha de Acesso - Plataforma Nutris";
            $assunto            = '=?UTF-8?B?'.base64_encode($assunto).'?=';
            $mensagem           = "<span style='font-family:arial'><small>Mensagem automatica enviada pela plataforma nutricional, n&atilde;o responda esse e-mail</small></span>";

           $msg_html = "
        <table border='0'><tr><td><img src='http://plataformanutris.engineercode.com.br/img/logo_login.png'></td></tr></table>

        <table>
            <tr>
            <td colspan='2'> Informações para acesso da Plataforma Nutricional - Nutris</td>        
            </tr>

            <tr>
            <td colspan='2'> &nbsp;</td>        
            </tr>

            <tr>
            <td style='text-align:right; font-weight:bold' width='20%'>Login:</td>
            <td class='esquerdo'>" .  $login . "</td>
            </tr>

            <tr>
            <td style='text-align:right; font-weight:bold'>Senha:</td>
            <td style='text-transform:uppercase'>" . $senha . "</td>
            </tr>

            <tr>
            <td> &nbsp; </td>
            </tr>        


        </table>

        <br><br>

        <table class=fonte border=0 style='font-family:arial' width=500px>

        <tr>		
        <td><strong>Administrador</strong></td>
        </tr>

        <tr>
        <td><small>Nutris - Plataforma Nutricional</small></td>
        </tr>

        <tr>
        <td><small>www.plataformanutris.engineercode.com.br  <br><small>(11)4000-7070 | (11)4000-7070</small></small></td>
        </tr>

        <tr>
            <td colspan=2 align=justify><small><small><span class=verde><strong>ANTES DE IMPRIMIR, PENSE NO MEIO AMBIENTE.</strong></span>  
            <span class=cinza>Aviso Legal:  Esta mensagem da Plataforma Nutris, incluindo 
            seus anexos, &eacute; destinada exclusivamente para a(s) pessoa(s) a 
            quem &eacute; dirigida, podendo conter informa&ccedil;&atilde;o confidencial e/ou privilegiada. 
            Se voc&ecirc; n&atilde;o for destinat&aacute;rio desta mensagem, desde j&aacute; fica notificado de 
            abster-se a divulgar, copiar, distribuir, examinar ou, de qualquer forma, 
            utilizar a informa&ccedil;&atilde;o, por ser ilegal, sujeitando o infrator as penas da lei.  
            Os e-mails  desta Plataforma tem seu uso limitado exclusivamente para o pacientes, 
            caso voc&ecirc; receba algum e-mail que infrinja essa determina&ccedil;&atilde;o favor encaminh&aacute;-lo para 
            nutris@nutris.engineercode.com.br</span>
        </td>
        </tr>
        </table>
    ";

        $headers  = "MIME-Version:1.1".$linha;
        $headers .= "Content-type: text/html; charset=UTF-8".$linha;
        $headers .= "From:".$rementente_email.$linha;
        $headers .= "Return-Path:".$rementente_email.$linha;
        $headers .= "Cc:".$destinatario_cc.$linha;
        $headers .= "Reply-To:".$remetente_email.$linha;

        mail($destinatario_email, $assunto, $msg_html, $headers, "-r". $rementente_email);
        
        
        
        
        
        

        
        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Cadastro de Paciente - Dados Pessoais";
        $mensagem = "O dados pessoais foram cadastrados com sucesso!";
        $btn_esquerda = "Antopometria";
        $btn_esquerda_destino = "01_1_cadastro_paciente_antopometria.php";
        $btn_direita = "Lista de Pacientes";
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