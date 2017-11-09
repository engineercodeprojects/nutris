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

$cod_usuario_selecionado = base64_decode($_GET['cod_usuario_plataforma']);

//selecionando o usuário escolhido
$sqlstring_usuario_selecionado  = "Select * from tb_usuario ";
$sqlstring_usuario_selecionado .= "inner join tb_nivel_acesso on tb_usuario.cod_nivel_acesso = tb_nivel_acesso.cod_nivel_acesso ";     
$sqlstring_usuario_selecionado .= "where tb_usuario.cod_status = 1 and cod_usuario = '" . $cod_usuario_selecionado . "' ";     


$info_usuario_selecionado = $db->sql_query($sqlstring_usuario_selecionado);
$dados_usuario_selecionado = mysql_fetch_array($info_usuario_selecionado);

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
<div class="container-fluid" onclick="recua_menu(10)">
 
    
<!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <img src="img/icone_usuarios_titulo_20.png" class="img-responsive padding_right_05" align=left>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">USUÁRIO DA PLATAFORMA:</span> 
                    <span class="text-uppercase fonte_verde_claro"><?php print $dados_usuario_selecionado['nome_usuario'] ?></span>
                    <br/>
                    <span class="fonte_pequena"> 
                        <a href="01_lista_usuarios_plataforma.php" alt="Lista de Usuários da Plataforma" title="Lista de Usuários da Plataforma"><span class="fonte_verde_claro">Usuários</span></a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span> 
                        Dados Usuário</span>
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
 <!-- inicio - formulario usuario plataforma  -->   
    <form method="post" action="">
    <!-- inicio - dados do usuário -->  
    <div class="row">
        
          <!-- inicio - painel dados usuário -->
          <div class="panel panel-default">
            <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">                 
             
                
          
          <!-- inicio - linha 0 --> 
              <!-- inicio - tipo de usuário -->    
              <div class="form-group col-md-4">
                <label for="nivel_acesso">Nível de Acesso</label>
                  <br/>
                  <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                  <?php
                    
                    $sqlstring_nivel_acesso = "select * from tb_nivel_acesso where cod_nivel_acesso > 1 order by nivel_acesso";
                    $info_nivel_acesso = $db->sql_query($sqlstring_nivel_acesso);
    
                    while($dados_nivel_acesso = mysql_fetch_array($info_nivel_acesso))
                    {
                        if($dados_nivel_acesso['cod_nivel_acesso'] == $dados_usuario_selecionado['cod_nivel_acesso'])
                            print "<option value=" . $dados_nivel_acesso['cod_nivel_acesso'] . " selected>" . $dados_nivel_acesso['nivel_acesso'];
                        else
                            print "<option value=" . $dados_nivel_acesso['cod_nivel_acesso'] . ">" . $dados_nivel_acesso['nivel_acesso'];
                    }
    
                   ?>                  
                  </select>
                  
              </div>
              <!-- fim - tipo -->
                
              <!-- inicio - CPF/CNPJ -->    
              <div class="form-group col-md-4">
                <label for="cpf_cnpj">CPF/CNPJ</label>
                <input type="text" class="form-control" name="cpf_cnpj" id="cpf_cnpj" placeholder="00000000000" value="<?php print $dados_usuario_selecionado['cpf_cnpj'] ?>" maxlength="11">
              </div>
              <!-- fim - CPF/CNPJ -->
                
             <!-- inicio - RG/IE -->    
              <div class="form-group col-md-4">
                <label for="rg_ie">RG/IE</label>
                <input type="text" class="form-control" name="rg_ie" id="rg_ie" placeholder="00000000x" value="<?php print $dados_usuario_selecionado['rg_ie'] ?>"  maxlength="10">
              </div>
              <!-- fim - RG/IE -->
        <!-- fim - linha 0 -->
                
                
          <!-- inicio - linha 1 -->
              <!-- inicio nome usuario -->
              <div class="form-group col-md-8">
                <label for="nomecompleto">Nome Completo <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="nome_usuario" id="nome_usuario" placeholder="Maria da Silva" value="<?php print $dados_usuario_selecionado['nome_usuario'] ?>"  maxlength="100" required>
              </div>
              <!-- fim nome usuario -->

              <!-- inicio profissao -->    
              <div class="form-group col-md-4">
                <label for="profissao">Profissão <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="profissao" id="profissao" placeholder="Vendedora" value="<?php print $dados_usuario_selecionado['profissao'] ?>"  required maxlength="40">
              </div>
              <!-- inicio profissao -->
          <!-- fim - linha 1 -->
            
            
            
          <!-- inicio - linha 2 --> 
              <!-- inicio endereco -->    
              <div class="form-group col-md-8">
                <label for="endereco">Endereço <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="<?php print $dados_usuario_selecionado['endereco'] ?>"  placeholder="Rua dos Nutrientes" required maxlength="60">
              </div>
              <!-- fim endereco -->


              <!-- inicio numero -->    
              <div class="form-group col-md-4">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" value="<?php print $dados_usuario_selecionado['numero'] ?>"  placeholder="1000" maxlength="5" required>
              </div>
              <!-- fim numero -->
          <!-- fim - linha 2 --> 
           
          
            
            
            
            
            
          <!-- inicio - linha 3 --> 
                
              
              <!-- inicio complemento -->    
              <div class="form-group col-md-3">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" value="<?php print $dados_usuario_selecionado['complemento'] ?>"  placeholder="Apto 141" maxlength="25">
              </div>
              <!-- fim complemento -->


              <!-- inicio bairro -->    
              <div class="form-group col-md-3">
                <label for="bairro">Bairro <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="<?php print $dados_usuario_selecionado['bairro'] ?>"  placeholder="Saúde" required maxlength="30">
              </div>
              <!-- fim bairro -->
                
              <!-- inicio CEP -->    
              <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" value="<?php print $dados_usuario_selecionado['cep'] ?>"  placeholder="18132852" maxlength="8">
              </div>
              <!-- fim CEP -->


              <!-- inicio cidade -->    
              <div class="form-group col-md-4">
                <label for="cidade">Cidade  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="cidade" id="cidade" value="<?php print $dados_usuario_selecionado['cidade'] ?>"  placeholder="Sorocaba" required maxlength="40">
              </div>
              <!-- fim cidade -->
          <!-- fim - linha 3 -->
            
            
            
            
         <!-- inicio - linha 4 -->              
                
              
              <!-- inicio telefone residencial -->    
              <div class="form-group col-md-2">
                <label for="telfone_residencial">Tel Residencial</label>
                <input type="text" class="form-control" name="telefone_residencial" id="telefone_residencial" value="<?php print $dados_usuario_selecionado['telefone_residencial'] ?>"  placeholder="1147128523" maxlength="10">
              </div>
              <!-- fim telefone residencial -->


              <!-- inicio telefone comercial -->    
              <div class="form-group col-md-2">
                <label for="telefone_comercial">Tel Comercial</label>
                <input type="text" class="form-control" name="telefone_comercial" id="telefone_comercial" value="<?php print $dados_usuario_selecionado['telefone_comercial'] ?>"  placeholder="1132359632"  maxlength="10">
              </div>
              <!-- fim telefone comercial -->
            
              <!-- inicio telefone celular -->    
              <div class="form-group col-md-2">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular" id="celular" value="<?php print $dados_usuario_selecionado['celular'] ?>"  placeholder="11999998877"  maxlength="11">
              </div>
              <!-- fim telefone celular -->
                
              <!-- inicio data nascimento -->    
              <div class="form-group col-md-3">
                <label for="data_nascimento">Dt Nascimento <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="12/12/2017" value="<?php print $dados_usuario_selecionado['data_nascimento'] ?>"  maxlength="10" required>
              </div>
              <!-- fim data nascimento -->


              <!-- inicio sexo -->
              <div class="form-group col-md-3">
                <label for="sexo">Sexo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select class="form-control" name="sexo" id="sexo">
                    <?php
                    if($dados_usuario_selecionado['sexo'] == "M")
                    {
                    ?>
                    <option value="F" >Feminino</option>
                    <option value="M" selected>Masculino</option>
                    <?php  
                    }
                    else
                    {
                    ?>
                    <option value="F" selected>Feminino</option>
                    <option value="M">Masculino</option>
                    <?php  
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
                <textarea class="form-control" rows="3" name="outros" id="paciente"><?php print $dados_usuario_selecionado['outros'] ?></textarea>
              </div>
              <!-- fim outros -->
          <!-- fim - linha 5 -->
                
                
        </div>
    </div>        
    <!-- fim - painel dados pessoais -->
    
        
        <!-- inicio - botao para Salvar Usuário -->
              <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro"> Salvar Dados Usuário </button>    
                <button type="button" class="btn btn_verde_claro" onclick="location.href='01_lista_usuarios_plataforma.php'"> Cancelar </button>    
                </div>
          <!-- fim - botão para Salvar Dados Pessoais -->
            
    </div>
    <!-- fim - dados pessoais -->  
   </form>
  <!-- fim - formulário cadastro de usuario - dados pessoais -->
       
    
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
    
        //recuperando informacoes do formulario
        $nome_usuario = $_POST['nome_usuario'];
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
        $data_nascimento = date("Y-m-d",strtotime($data_nascimento));
        $sexo = $_POST['sexo'];        
        $outros = $_POST['outros'];
        
        
//        $email = $_POST['email'];
//        $login = substr($email,0,strrpos($email, "@"));
//        $senha = rand(1234, 123456); 
        
        $cod_nivel_acesso = $_POST['nivel_acesso']; 
        $cpf_cnpj = $_POST['cpf_cnpj']; 
        $rg_ie = $_POST['rg_ie']; 

        
        /* prints para debug 
        print "<center>Nome  = " . $nome_usuario . "<br/>";
        print "Profissão  = " . $profissao . "<br/>";
        print "Endereço  = " . $endereco . "<br/>";
        print "Número  = " . $numero . "<br/>";
        print "Complemento  = " . $complemento . "<br/>";
        print "Bairro  = " . $bairro . "<br/>";
        print "CEP  = " . $cep . "<br/>";
        print "Cidade  = " . $cidade . "<br/>";
        print "Telefone Residencial  = " . $telefone_residencial . "<br/>";
        print "Telefone Comercial  = " . $telefone_comercial . "<br/>";
        print "Celular  = " . $celular . "<br/>";
        print "e-mail  = " . $email . "<br/>";
        print "Data Nascimento  = " . $data_nascimento . "<br/>";
        print "Sexo  = " . $sexo . "<br/>";
        print "Outros  = " . $outros . "<br/>";
        print "Login  = " . $login . "<br/>";
        print "Senha  = " . $senha . "<br/>";
        print "Cod Nivel de Acesso  = " . $cod_nivel_acesso . "<br/>";
        print "CPF_CNPJ  = " . $cpf_cnpj . "<br/>";
        print "RG_IE  = " . $rg_ie . "<br/>";
        
        exit;
        */
        
        
        
        // insere na tb_paciente os dados pessoais do paciente
        $sqlstring_atualizar_usuario_plataforma  = "update tb_usuario set ";
        $sqlstring_atualizar_usuario_plataforma .= "cod_nivel_acesso = '" .  $cod_nivel_acesso . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "cpf_cnpj = '" .  $cpf_cnpj . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "rg_ie = '" .  $rg_ie . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "nome_usuario = '" .  $nome_usuario . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "profissao = '" .  $profissao . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "endereco = '" .  $endereco . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "numero = '" .  $numero . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "complemento = '" .  $complemento . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "bairro = '" .  $bairro . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "cep = '" .  $cep . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "cidade = '" .  $cidade . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "telefone_residencial = '" .  $telefone_residencial . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "telefone_comercial = '" .  $telefone_comercial . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "celular = '" .  $celular . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "data_nascimento = '" .  $data_nascimento . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "sexo = '" .  $sexo . "', ";
        $sqlstring_atualizar_usuario_plataforma .= "outros = '" .  $outros . "' ";        
        $sqlstring_atualizar_usuario_plataforma .= "where cod_usuario = '" . $cod_usuario_selecionado . "'";

        $db->string_query($sqlstring_atualizar_usuario_plataforma); 

        /*
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
    */
        
        
        
        
        
        
        
        
        
        //preparando informações para carregar no modal
        $numero_botoes = 2;
        $titulo = "Atualização de Usuário";
        $mensagem = "Os dados do usuário foi cadastrado com sucesso!";
        $btn_esquerda = "Novo Usuário";
        $btn_esquerda_destino = "01_5_cadastro_usuario_plataforma.php";
        $btn_direita = "Lista de Usuários";
        $btn_direita_destino = "01_lista_usuarios_plataforma.php";
        $btn_x = "01_lista_usuarios_plataforma.php";


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