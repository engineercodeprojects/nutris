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
                    <span class="fonte_pequena">Dados Pessoais</span>                
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
       
    <!-- inicio - formulario paciente - dados pessoais -->   
    <form method="post" action="">
    <!-- inicio - dados pessoais -->  
    <div class="row">
        
          <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default">
            <div class="panel-body" style="border:0px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">                 
             
          <!-- inicio - linha 1 -->
              <!-- inicio nome paciente -->
              <div class="form-group col-md-8">
                <label for="nomecompleto">Nome Completo</label>
                <input type="text" class="form-control" name="nome_paciente" id="nome_paciente" placeholder="Maria da Silva">
              </div>
              <!-- fim nome paciente -->

              <!-- inicio profissao -->    
              <div class="form-group col-md-4">
                <label for="profissao">Profissão</label>
                <input type="text" class="form-control" name="profissao" id="profissao" placeholder="Vendedora">
              </div>
              <!-- inicio profissao -->
          <!-- fim - linha 1 -->
            
            
            
          <!-- inicio - linha 2 --> 
              <!-- inicio endereco -->    
              <div class="form-group col-md-5">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua dos Nutrientes">
              </div>
              <!-- fim endereco -->


              <!-- inicio numero -->    
              <div class="form-group col-md-2">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" placeholder="1000">
              </div>
              <!-- fim numero -->


              <!-- inicio complemento -->    
              <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Apto 141">
              </div>
              <!-- fim complemento -->


              <!-- inicio bairro -->    
              <div class="form-group col-md-3">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Saúde">
              </div>
              <!-- fim bairro -->
          <!-- fim - linha 2 --> 
           
          
            
            
            
            
            
          <!-- inicio - linha 3 --> 
              <!-- inicio CEP -->    
              <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="18132852">
              </div>
              <!-- fim CEP -->


              <!-- inicio cidade -->    
              <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Sorocaba">
              </div>
              <!-- fim cidade -->


              <!-- inicio telefone residencial -->    
              <div class="form-group col-md-2">
                <label for="telfone_residencial">Tel Residencial</label>
                <input type="text" class="form-control" name="telefone_residencial" id="telefone_residencial" placeholder="1147128523">
              </div>
              <!-- fim telefone residencial -->


              <!-- inicio telefone comercial -->    
              <div class="form-group col-md-2">
                <label for="telefone_comercial">Tel Comercial</label>
                <input type="text" class="form-control" name="telefone_comercial" id="telefone_comercial" placeholder="1132359632">
              </div>
              <!-- fim telefone comercial -->
            
              <!-- inicio telefone celular -->    
              <div class="form-group col-md-2">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular" id="celular" placeholder="11999998877">
              </div>
              <!-- fim telefone celular -->
          <!-- fim - linha 3 -->
            
            
            
            
         <!-- inicio - linha 4 --> 
              <!-- inicio email -->    
              <div class="form-group col-md-4">
                <label for="email">e-mail</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="maria_silva@gmail.com">
              </div>
              <!-- fim email -->


              <!-- inicio data nascimento -->    
              <div class="form-group col-md-2">
                <label for="cidade">Dt Nascimento</label>
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="12/12/2017">
              </div>
              <!-- fim data nascimento -->


              <!-- inicio sexo -->
              <div class="form-group col-md-2">
                <label for="sexo">Sexo</label>
                <input type="text" class="form-control" name="sexo" id="sexo" placeholder="Feminino">
              </div>
              <!-- fim sexo -->
            
              <!-- inicio peso -->
              <div class="form-group col-md-2">
                <label for="peso">Peso</label>
                <input type="text" class="form-control" name="peso" id="peso" placeholder="72.57">
              </div>
              <!-- fim peso -->
            
            
              <!-- inicio altura -->
              <div class="form-group col-md-2">
                <label for="altura">Altura</label>
                <input type="text" class="form-control" name="altura" id="altura" placeholder="167">
              </div>
              <!-- fim altura -->
              
          <!-- fim - linha 4 -->
            
            
            
            
          <!-- inicio - linha 5 --> 
              <!-- inicio outros -->    
              <div class="form-group col-md-12">
                <label for="outros">Outros</label>
                <textarea class="form-control" rows="3" name="outros" id="paciente"></textarea>
              </div>
              <!-- fim outros -->
          <!-- fim - linha 5 -->
                
                
               
          <!-- inicio - botao para Salvar Dados Pessoais -->
              <div class="col-md-12  direito">
                <button type="submit" class="btn btn-primary">        
                    Salvar Dados Pessoais
                    </button>    
                </div>
          <!-- fim - botão para Salvar Dados Pessoais -->
                
        </div>
    </div>        
    <!-- fim - painel dados pessoais -->
    
            
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
        $data_nascimento = date("Y/m/d", strtotime($_POST['data_nascimento']));
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $outros = $_POST['outros'];

        // insere na tb_paciente os dados pessoais do paciente
        $sqlstring_inserir_dados_pessoais = "Insert into tb_paciente (nome_paciente, profissao, endereco, numero, complemento, bairro, cep, cidade, telefone_residencial, telefone_comercial, celular, email, data_nascimento, sexo, peso, altura, outros, cod_status) values ";
        $sqlstring_inserir_dados_pessoais .= "('" . $nome_paciente . "','" . $profissao . "','" . $endereco . "','" . $numero . "','" . $complemento . "','" . $bairro . "','" . $cep . "','" . $cidade . "','" . $telefone_residencial . "','" . $telefone_comercial . "','" . $celular . "','" . $email ."','" . $data_nascimento ."','" . $sexo . "','" . $peso . "','" . $altura . "','" . $outros . "',1)";

        $db->string_query($sqlstring_inserir_dados_pessoais); 


        // seleciona o ultimo codigo cadastrado na tb_paciente para inserir as informações nas tabelas tb_historico e tb_habito_alimentar
        $sqlstring_codigo = "select cod_paciente from tb_paciente order by cod_paciente desc limit 1";
        $info_codigo = $db->sql_query($sqlstring_codigo);
        $dados_codigo = mysql_fetch_array($info_codigo);
        
        
        $_SESSION['cod_paciente_selecionado']  = $dados_codigo['cod_paciente'];
        
        
        // inserindo o paciente na tb_atividade_física
        $sqlstring_inserir_atividade_fisica = "Insert into tb_atividade_fisica (cod_paciente) values ('" . $_SESSION['cod_paciente_selecionado'] . "')";
        $db->string_query($sqlstring_inserir_atividade_fisica); 
       
        // inserindo o paciente na tb_historico_paciente
        $sqlstring_inserir_historico_paciente = "Insert into tb_historico_paciente (cod_paciente) values ('" . $_SESSION['cod_paciente_selecionado'] . "')";
        $db->string_query($sqlstring_inserir_historico_paciente); 
        
        // inserindo o paciente na tb_habito_alimentar
        $sqlstring_inserir_habito_alimentar = "Insert into tb_habito_alimentar (cod_paciente) values ('" . $_SESSION['cod_paciente_selecionado'] . "')";
        $db->string_query($sqlstring_inserir_habito_alimentar);
        
        // inserindo o paciente na tb_objetivo_paciente
        $sqlstring_inserir_objetivo_paciente = "Insert into tb_objetivo_paciente (cod_paciente) values ('" . $_SESSION['cod_paciente_selecionado'] . "')";
        $db->string_query($sqlstring_inserir_objetivo_paciente); 
        
        
        //preparando informações para carregar no modal
        $titulo = "Cadastro de Paciente - Dados Pessoais";
        $mensagem = "O dados pessoais foram cadastrados com sucesso!";
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