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
<div class="container-fluid" onclick="recua_menu(10)">
 
    
<!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default margin_top_20 sem_borda padding_top_25">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <img src="img/icone_usuarios_titulo_20.png" class="img-responsive padding_right_05" align=left>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">NOVO USUÁRIO</span>
                    <br/>
                    <span class="fonte_pequena"> 
                        <a href="01_lista_usuarios_plataforma.php" alt="Lista de Usuários da Plataforma" title="Lista de Usuários da Plataforma"><span class="fonte_verde_claro">Usuários</span></a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span> 
                        Novo Usuário</span>
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>              
          </div>
        
        
        
        
    <!-- inicio -  mensagens de erro -->
    <div class="row">
    <!-- inicio - mensagem de erro cpf -->
    <div id='erro_cpf_cnpj' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>CPF</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório.</strong> Preencha o campo CPF com <strong>11 números.</strong>
    </div>    
    <!-- fim - mensagem de erro cpf -->
        
    <!-- inicio - mensagem de erro rg -->
    <div id='erro_rg_ie' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>RG</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo RG com <strong>9 digitos.</strong>
    </div>    
    <!-- fim - mensagem de erro rg -->
        
    <!-- inicio - mensagem de erro cnpj -->
    <div id='erro_cpf_cnpj1' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>CNPJ</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo CNPJ com <strong>números</strong> sem pontos, traços ou barras.
    </div>    
    <!-- fim - mensagem de erro cnpj -->
        
    <!-- inicio - mensagem de erro ie -->
    <div id='erro_rg_ie1' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>IE</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.
    </div>    
    <!-- fim - mensagem de erro ie -->
        
    <!-- inicio - mensagem de erro nome usuario -->
    <div id='erro_nome' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Nome Completo</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>. Digite seu nome completo.
    </div>    
    <!-- fim - mensagem de erro nome usuario -->
        
    <!-- inicio - mensagem de erro profissao -->
    <div id='erro_profissao' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Profissão</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>. Preencha o campo Profissão.
    </div>    
    <!-- fim - mensagem de erro profissao -->
        
    <!-- inicio - mensagem de data de nascimento -->
    <div id='erro_data_nascimento' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Data de Nascimento</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>. Preencha o campo com formato <strong>DD/MM/AAAA</strong>.
    </div>    
    <!-- fim - mensagem de data de nascimento -->
        
        
     <!-- inicio - mensagem de empresa -->
    <div id='erro_empresa' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Empresa</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo Empresa.
    </div>    
    <!-- fim - mensagem de empresa -->
        
        
    <!-- inicio - mensagem de nome fantasia -->
    <div id='erro_nome_fantasia' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Nome Fantasia</strong> está <strong>vazio</strong>, porém é um campo <strong>obrigatório</strong>.
    </div>    
    <!-- fim - mensagem de nome fantasia -->
        
        
    <!-- inicio - mensagem de responsavel -->
    <div id='erro_responsavel' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Responsável</strong> está <strong>vazio</strong>, porém é um campo <strong>obrigatório</strong>.
    </div>    
    <!-- fim - mensagem de responsavel -->
        
        
    <!-- inicio - mensagem de endereco -->
    <div id='erro_endereco' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Endereço</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>. Preencha o campo Endereço corretamente.
    </div>    
    <!-- fim - mensagem de endereco -->
        
    <!-- inicio - mensagem de numero -->
    <div id='erro_numero' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Número</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo com <strong>números.</strong>
    </div>    
    <!-- fim - mensagem de numero -->
        
    <!-- inicio - mensagem de bairro -->
    <div id='erro_bairro' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Bairro</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo Bairro corretamente
    </div>    
    <!-- fim - mensagem de bairro -->
     
    <!-- inicio - mensagem de cep -->
    <div id='erro_cep' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>CEP</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo CEP com <strong>8 números, sem pontos ou traços</strong>
    </div>    
    <!-- fim - mensagem de cep -->
        
    <!-- inicio - mensagem de cidade -->
    <div id='erro_cidade' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Cidade</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo Cidade.
    </div>    
    <!-- fim - mensagem de cidade -->
        
    <!-- inicio - mensagem de celular -->
    <div id='erro_celular' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>Celular</strong> não está <strong>preenchido corretamente</strong>, porém é um campo <strong>obrigatório</strong>.Preencha o campo Celular com <strong>11 números,</strong> sem pontos, traços ou parênteses.
    </div>    
    <!-- fim - mensagem de celular -->
        
    <!-- inicio - mensagem de email -->
    <div id='erro_email' class='col-md-12 col-sm-12 col-xs-12 padding_10 alert alert-warning ocultar'>
    <span class="glyphicon glyphicon-alert"></span>
    O campo <strong>e-mail</strong> está <strong>vazio</strong>, porém é um campo <strong>obrigatório</strong>.
    </div>    
    <!-- fim - mensagem de email -->
    </div>  
    <!-- fim -  mensagens de erro -->
        
        
    </div>
    <!-- fim - titulo do formulário -->
    
       
   
       
       
       
       
 <!-- inicio - formulario paciente - dados pessoais -->   
    <form id="formul" enctype="multipart/form-data" method="post" onSubmit="return false;">
        
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
                
                
          
              <!-- inicio - tipo de usuário -->    
              <div class="form-group col-md-3">
                <label for="nivel_acesso">Nível de Acesso  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                  <br/>
                  <select name="nivel_acesso" id="nivel_acesso" class="form-control text-uppercase" onchange="exibir_ocultar_cpf_cnpj()">
                  <?php
                    
                    $sqlstring_nivel_acesso = "select * from tb_nivel_acesso where cod_nivel_acesso > 1 order by nivel_acesso";
                    $info_nivel_acesso = $db->sql_query($sqlstring_nivel_acesso);
    
                    while($dados_nivel_acesso = mysql_fetch_array($info_nivel_acesso))
                    {
                    print "<option value=" . $dados_nivel_acesso['cod_nivel_acesso'] . ">" . $dados_nivel_acesso['nivel_acesso'];
                    }
    
                   ?>                  
                  </select>
                  
              </div>
              <!-- fim - tipo -->
                
              <!-- inicio - CPF/CNPJ -->    
              <div id="pf_cpf" class="form-group col-md-3">
                <label for="cpf_cnpj">CPF  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="cpf_cnpj" id="cpf_cnpj" placeholder="00000000000" maxlength="11" >
              </div>
              <!-- fim - CPF/CNPJ -->
                
             <!-- inicio - RG/IE -->    
              <div id="pf_rg" class="form-group col-md-3">
                <label for="rg_ie">RG  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="rg_ie" id="rg_ie" placeholder="00000000x" maxlength="10" >
              </div>
              <!-- fim - RG/IE -->
                
                
                
              <!-- inicio - CPF/CNPJ -->    
              <div id="pj_cnpj" class="form-group col-md-3 ocultar">
                <label for="cpf_cnpj1">CNPJ  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="cpf_cnpj1" id="cpf_cnpj1" placeholder="00000000000000" maxlength="15" >
              </div>
              <!-- fim - CPF/CNPJ -->
                
             <!-- inicio - RG/IE -->    
              <div id="pj_ie" class="form-group col-md-3 ocultar">
                <label for="rg_ie1">IE  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="rg_ie1" id="rg_ie1" placeholder="00000000x" maxlength="10" >
              </div>
              <!-- fim - RG/IE -->
                
       
                
                
          
              <!-- inicio nome usuario -->
              <div id="pf_nome" class="form-group col-md-6">
                <label for="nomecompleto">Nome Completo <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="nome_usuario" id="nome_usuario" placeholder="Maria da Silva" maxlength="100" >
              </div>
              <!-- fim nome usuario -->
                

              <!-- inicio profissao -->    
              <div id="pf_profissao" class="form-group col-md-3">
                <label for="profissao">Profissão <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="profissao" id="profissao" placeholder="Vendedora"  maxlength="40">
              </div>
              <!-- inicio profissao -->
              
                
              <!-- inicio empresa -->
              <div id="pj_empresa" class="form-group col-md-9 ocultar">
                <label for="empresa">Empresa <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="empresa" id="empresa" placeholder="Infox Web" maxlength="100" >
              </div>
              <!-- fim empresa -->
                
                
              <!-- inicio nome fantasia -->
              <div id="pj_nome_fantasia" class="form-group col-md-5 ocultar">
                <label for="nomefantasia">Nome Fantasia <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="nome_fantasia" id="nome_fantasia" placeholder="Infox Web" maxlength="100" >
              </div>
              <!-- fim nome fantasia -->
                
                
            <!-- inicio nome responsável -->
              <div id="pj_nome_responsavel" class="form-group col-md-4 ocultar">
                <label for="responsavel">Responsável <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="responsavel" id="responsavel" placeholder="Maria do Carmo" maxlength="100" >
              </div>
              <!-- fim nome responsável -->
                
                
                
                <!-- inicio data nascimento -->    
              <div id="pf_data_nascimento" class="form-group col-md-4">
                <label for="data_nascimento">Dt Nascimento <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="date" class="form-control text-uppercase" name="data_nascimento" id="data_nascimento" placeholder="12/12/2017" maxlength="10" >
              </div>
              <!-- fim data nascimento -->


              <!-- inicio sexo -->
              <div id="pf_sexo" class="form-group col-md-5">
                <label for="sexo">Sexo  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <select class="form-control text-uppercase" name="sexo" id="sexo">
                    <option value="F" checked>Feminino</option>
                    <option value="M">Masculino</option>
                </select>
              </div>
              <!-- fim sexo -->
                
          
            
            
            
         
              <!-- inicio endereco -->    
              <div class="form-group col-md-9">
                <label for="endereco">Endereço <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="endereco" id="endereco" placeholder="Rua dos Nutrientes"  maxlength="60">
              </div>
              <!-- fim endereco -->


              <!-- inicio numero -->    
              <div class="form-group col-md-2">
                <label for="numero">Número  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="numero" id="numero" placeholder="1000" maxlength="5" >
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
                <input type="text" class="form-control text-uppercase" name="bairro" id="bairro" placeholder="Saúde"  maxlength="30" >
              </div>
              <!-- fim bairro -->
          
           
          
            
            
            
            
            
          
              <!-- inicio CEP -->    
              <div class="form-group col-md-2">
                <label for="cep">CEP  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="18132852" maxlength="8" >
              </div>
              <!-- fim CEP -->


              <!-- inicio cidade -->    
              <div class="form-group col-md-3">
                <label for="cidade">Cidade  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-uppercase" name="cidade" id="cidade" placeholder="Sorocaba"  maxlength="40" >
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
                <label for="celular">Celular  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control" name="celular" id="celular" placeholder="11999998877"  maxlength="11" >
              </div>
              <!-- fim telefone celular -->
         
            
            
            
            
         
              <!-- inicio email -->    
              <div class="form-group col-md-12">
                <label for="email">e-mail  <span class="glyphicon glyphicon-asterisk fonte_muito_pequena fonte_verde_claro"></span></label>
                <input type="text" class="form-control text-lowercase" name="email" id="email" placeholder="maria_silva@gmail.com" maxlength="100" >
              </div>
              <!-- fim email -->


             
              
              
         
            
        
                
          
              <!-- inicio outros -->    
              <div class="form-group col-md-12">
                <label for="outros">Outros</label>
                <textarea class="form-control" rows="3" name="outros" id="outros"></textarea>
              </div>
              <!-- fim outros -->
          
                
                
        </div>
    </div>        
    <!-- fim - painel dados  -->
    
        
        <!-- inicio - botao para Salvar Usuário -->
              <div class="col-md-12  direito">
                <button type="submit" class="btn btn_verde_claro" onClick="campos_vazios()"> Salvar Usuário </button>    
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
        $cpf_cnpj = $_POST['cpf_cnpj']; 
        $rg_ie = $_POST['rg_ie']; 
        $data_nascimento = date("Y-m-d",strtotime($data_nascimento));
        $sexo = $_POST['sexo'];        
        
        $empresa = $_POST['empresa'];
        $nome_fantasia = $_POST['nome_fantasia'];
        $responsavel = $_POST['responsavel'];
        $cpf_cnpj1 = $_POST['cpf_cnpj1']; 
        $rg_ie1 = $_POST['rg_ie1'];
        
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
        
        $outros = $_POST['outros'];
        
        $login = substr($email,0,strrpos($email, "@"));
        $senha = rand(1234, 123456); 
        
        $cod_nivel_acesso = $_POST['nivel_acesso']; 
        

        $foto_01 = $_FILES['foto_01'];
        $fo_01 = isset($_POST['fo_01']);
        
        //verificando se existe cpf ou cnpj já cadastrado no banco
        if($cpf_cnpj != "")
            $sqlstring_usuarios  = "Select * from tb_usuario where cpf_cnpj = '" . $cpf_cnpj . "'";       
        else
            $sqlstring_usuarios  = "Select * from tb_usuario where cpf_cnpj = '" . $cpf_cnpj1 . "'";       
        
        $info_usuarios = $db->sql_query($sqlstring_usuarios);
        $linhas_usuarios = $db->sql_linhas($info_usuarios);
        
        
        
        //só fará a inserção se não houver nenhuma cpf ou cnpj já cadastrado
        if($linhas_usuarios == 0)
        {
        
            if($cod_nivel_acesso != 4)
            {
            // insere na tb_usuario os dados do usuario pf
            $sqlstring_inserir_usuario_plataforma = "Insert into tb_usuario (nome_usuario, profissao, endereco, numero, complemento, bairro, cep, cidade, telefone_residencial, telefone_comercial, celular, email, data_nascimento, sexo, outros, cod_status, login, senha, cod_nivel_acesso, cpf_cnpj, rg_ie) values ";
            $sqlstring_inserir_usuario_plataforma .= "('" . $nome_usuario . "','" . $profissao . "','" . $endereco . "','" . $numero . "','" . $complemento . "','" . $bairro . "','" . $cep . "','" . $cidade . "','" . $telefone_residencial . "','" . $telefone_comercial . "','" . $celular . "','" . $email ."','" . $data_nascimento ."','" . $sexo . "','" . $outros . "',1,'" . $login . "','" . $senha . "','" . $cod_nivel_acesso . "','" . $cpf_cnpj . "','" . $rg_ie . "')";    
            }
            else
            {
            // insere na tb_usuario os dados do usuario pf
            $sqlstring_inserir_usuario_plataforma = "Insert into tb_usuario (nome_usuario, empresa, responsavel, endereco, numero, complemento, bairro, cep, cidade, telefone_residencial, telefone_comercial, celular, email, outros, cod_status, login, senha, cod_nivel_acesso, cpf_cnpj, rg_ie) values ";
            $sqlstring_inserir_usuario_plataforma .= "('" . $nome_fantasia . "','" . $empresa . "','" . $responsavel . "','" . $endereco . "','" . $numero . "','" . $complemento . "','" . $bairro . "','" . $cep . "','" . $cidade . "','" . $telefone_residencial . "','" . $telefone_comercial . "','" . $celular . "','" . $email ."','" . $outros . "',1,'" . $login . "','" . $senha . "','" . $cod_nivel_acesso . "','" . $cpf_cnpj1 . "','" . $rg_ie1 . "')";    
            }


            $db->string_query($sqlstring_inserir_usuario_plataforma); 


            //seleciona o usuário que acabou de ser cadastrado
            $sqlstring_ultimo_usuario = "select cod_usuario from tb_usuario order by cod_usuario desc limit 1";
            $info_ultimo_usuario = $db->sql_query($sqlstring_ultimo_usuario); 
            $dados_ultimo_usuario = mysql_fetch_array($info_ultimo_usuario);


            //formando o nome do arquivo da foto
            if($foto_01['name'] != "" and $fo_01 == 0)   $foto = $dados_ultimo_usuario['cod_usuario'] . "_" . $foto_01['name'];
            if($fo_01 == 1 and $foto_01['name'] == "")   $foto = 'avatar.png';
            if($fo_01 == 0 and $foto_01['name'] == "")   $foto = 'avatar.png';

            //atualizando a foto para o usuário selecionado
            $sqlstring_foto = "update tb_usuario set foto_usuario = '" . $foto . "' where cod_usuario = " . $dados_ultimo_usuario['cod_usuario'];
            $db->string_query($sqlstring_foto); 


            // fazendo uplodas das fotos 01
            $arquivo = $_FILES['foto_01'];  

            //$destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos_usuarios\\';
            $destino  = '/home/engineercode/public_html/plataformanutris/fotos_usuarios/';
            $destino .= $dados_ultimo_usuario['cod_usuario'] . "_";
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



            //preparando informações para carregar no modal para mensagem de sucesso
            $numero_botoes = 2;
            $titulo = "Cadastro de Usuário";
            $mensagem = "O usuário foi cadastrado com sucesso!";
            $btn_esquerda = "Novo Usuário";
            $btn_esquerda_destino = "01_5_cadastro_usuario_plataforma.php";
            $btn_direita = "Lista de Usuários";
            $btn_direita_destino = "01_lista_usuarios_plataforma.php";
            $btn_x = "01_lista_usuarios_plataforma.php";

        }
        else
        {
            //preparando informações para carregar no modal para mensagem de erro - cpf ou cnpj já cadastrado
            $numero_botoes = 2;
            $titulo = "Cadastro de Usuário";
            $mensagem = "Já <strong>existe</strong> um cadastro associado a este <strong>CPF!</strong>";
            $btn_esquerda = "Novo Usuário";
            $btn_esquerda_destino = "01_5_cadastro_usuario_plataforma.php";
            $btn_direita = "Lista de Usuários";
            $btn_direita_destino = "01_lista_usuarios_plataforma.php";
            $btn_x = "01_lista_usuarios_plataforma.php";

        }
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