<!DOCTYPE html>
<?php 
//inicia sessão
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

        //recuperando informações da refeição
        $refeicao = $_POST['refeicao'];
        $tipo_refeicao = $_POST['tipo_refeicao'];
        $codigos = $_POST['codigos'];    
        $qtde_porcoes = $_POST['qtde_porcoes']; 
        $video_modo_preparo = $_POST['video_modo_preparo'];
        $outras_informacoes_refeicoes = $_POST['outras_informacoes_refeicoes'];
    
        //recuperando informacoes das fotos
        $foto_01 = $_FILES['foto_01'];
        $fo_01 = isset($_POST['fo_01']);
    
        $foto_02 = $_FILES['foto_02'];
        $fo_02 = isset($_POST['fo_02']);
    
    
    
        //inserindo a refeição e tipo de refeição na tb_refeicao
        $sqlstring_inserir_refeicao = "Insert into tb_refeicao (refeicao, cod_tipo_refeicao, video_modo_preparo) values ('" . $refeicao . "','" . $tipo_refeicao . "','" . $video_modo_preparo . "')";
        $db->string_query($sqlstring_inserir_refeicao);
    
        //selecionando ultima refeição
        $sqlstring_ultimo_registro  = "select * from tb_refeicao order by cod_refeicao desc limit 1";
        $info_ultimo_registro = $db->sql_query($sqlstring_ultimo_registro); 
        $dados_ultimo_registro = mysql_fetch_array($info_ultimo_registro);
    
        // inserindo as fotos associadas com o codigo da refeicao
        $sqlstring_alterar_foto  = "Update tb_refeicao set ";
        if($foto_01['name'] != "")   $sqlstring_alterar_foto .= "foto_01_refeicao = '" . $dados_ultimo_registro['cod_refeicao'] . "_1_" . $foto_01['name'] . "', ";
        if($fo_01 == 1)              $sqlstring_alterar_foto .= "foto_01_refeicao = 'avatar_refeicao.png', ";
        if($foto_02['name'] != "")   $sqlstring_alterar_foto .= "foto_02_refeicao = '" . $dados_ultimo_registro['cod_refeicao'] . "_2_" . $foto_02['name'] . "', ";
        if($fo_02 == 1)              $sqlstring_alterar_foto .= "foto_02_refeicao = 'avatar_refeicao.png', ";
        $sqlstring_alterar_foto .= "outras_informacoes_refeicoes = '" . $outras_informacoes_refeicoes . "' ";
        $sqlstring_alterar_foto .= "where cod_refeicao  = " . $dados_ultimo_registro['cod_refeicao'];

        $db->string_query($sqlstring_alterar_foto); 

    
        // fazendo uplodas das fotos 01
        $arquivo = $_FILES['foto_01'];  
        
//        $destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos_refeicoes\\';
        $destino  = '/home/engineercode/public_html/plataformanutris/fotos_refeicoes/';
        $destino .= $dados_ultimo_registro['cod_refeicao'] . "_1_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);

        
       
        
        // fazendo uplodas das fotos 02
        $arquivo = $_FILES['foto_02']; 

//        $destino = 'C:\Bitnami\\wampstack-5.5.28-0\\apache2\htdocs\\plataformanutris\\fotos_refeicoes\\';
        $destino  = '/home/engineercode/public_html/plataformanutris/fotos_refeicoes/';
        $destino .= $dados_ultimo_registro['cod_refeicao'] . "_2_";
        $destino .= $arquivo['name'];  

        move_uploaded_file($arquivo['tmp_name'],$destino);
    
    
             
        //inserindo os alimentos selecionados na refeição cadastrada anteriormente
        $contador = 0;
        while ($contador < sizeof($codigos))
        {
        $sqlstring_inserir_alimentos_refeicao = "Insert into tb_refeicao_alimento (cod_refeicao, cod_alimento, qtde_porcoes) values ('" . $dados_ultimo_registro['cod_refeicao'] . "','" . $codigos[$contador]  . "', '" . $qtde_porcoes[$contador] . "')";
        $db->string_query($sqlstring_inserir_alimentos_refeicao);    
        $contador++;
        }
    
        //preparando modal para informar o sucesso da exclusão
        $titulo = "Cadastro de Refeição";
        $mensagem = "A refeição foi com sucesso!";
        $btn_esquerda = "Nova Refeição";
        $btn_esquerda_destino = "01_2_cadastro_refeicao.php";
        $btn_direita = "Lista de Refeições";
        $btn_direita_destino = "01_lista_refeicoes.php";
        $btn_x = "01_lista_refeicoes.php";
 
 
}


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
    
    <!-- jquery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- funções do arquivo js -->
    <script src="js/funcoes.js"></script>
  </head>   
  
    
    
<body class="margin_00">

<?php 
    include "includes/menu_nutricionista.php";    
?>     
    
    
    
<div class="container-fluid">
  
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
       
       
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <!-- inicio - painel cadastro de nova refeição -->
          <div class="panel panel-default margin_top_20 sem_borda">
            <div class="panel-body borda_verde_escuro" style="border:0px solid #eee; border-left:0px solid #0A4438;">                 
                    <span class="glyphicon glyphicon-grain fonte_verde_claro"></span>
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">REFEIÇÃO</span>
                    <br/>
                    <span class="fonte_pequena">
                        <a href="01_lista_refeicoes.php" alt="Lista de Todas as Refeições" title="Lista de Todas as Refeições">Refeições</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Nova Refeição</span>
                    </span>
                    <br/><br/>
                    <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span> <span>campos com preenchimento obrigatório</span>
            </div>              
          </div>
    </div>
    <!-- fim - titulo do formulário -->
       
     
       
       
    <!-- inicio - cadastro refeição - titulo e tipo de refeição -->
    <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
        <br/>
        <form method="post" action="" enctype="multipart/form-data">    
        <!-- inicio - tipo de refeição -->
        <div id="titulo_refeicao" name="titulo_refeicao" class="form-group col-md-6">
            <label for="refeicao">Refeição <span class="glyphicon glyphicon-asterisk fonte_verde_claro fonte_muito_pequena"></span></label>
            <input type="text" class="form-control text-uppercase" name="refeicao" id="refeicao" required>            
        </div>
        <!-- fim - tipo de refeição -->   
            
        <!-- inicio - tipo de refeição -->
        <div id="tipo" name="tipo" class="form-group col-md-6">
            <label for="tipo_refeicao">Tipo de Refeição</label>
            <select name="tipo_refeicao" id="tipo_refeicao" class="form-control text-uppercase">
              <?php
                $sqlstring_tipo_refeicao = "Select * from tb_tipo_refeicao";
                $info_tipo_refeicao = $db->sql_query($sqlstring_tipo_refeicao);
                while($dados_tipo_refeicao=mysql_fetch_array($info_tipo_refeicao))
                {                    
                print "<option value=" . $dados_tipo_refeicao['cod_tipo_refeicao'] . ">" . $dados_tipo_refeicao['tipo_refeicao'] . "</option>";                    
                }                            
              ?>
            </select>
        </div>
        <!-- fim - tipo de refeição --> 
            
        <!-- inicio - video - modo de preparo -->
        <div id="v_modo_preparo" name="v_modo_preparo" class="form-group col-md-12">
            <label for="video_modo_preparo">Vídeo - Modo de Preparo </label>
            <input type="text" class="form-control" name="video_modo_preparo" id="video_modo_preparo" required>            
        </div>
        <!-- fim - video - modo de preparo -->
            
            
            
            
        <!-- inicio - outras informações refeicoes -->
        <div id="outras_informacoes" name="outras_informacoes" class="form-group col-md-6">
            <label for="outras_informacoes_refeicoes">Outras Informações </label>
            <textarea rows="10" name="outras_informacoes_refeicoes" id="outras_informacoes_refeicoes" class="form-control text-uppercase"></textarea>
        </div>
        <!-- fim - video - modo de preparo -->
            
            
            
            
        <!-- inicio - campo foto 01 refeicao -->    
        <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-md-8 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> FOTO </div>
             <div class="col-md-4 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_1').innerHTML = '<br/><label for=\'uploadImage1\'><img src=\'fotos/avatar_refeicao.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview1\'></label><input id=\'uploadImage1\' type=\'file\' name=\'foto_01\' onchange=\'pre_visualizacao1()\' style=\'display:none\'><input type=hidden name=fo_01 id=fo_01 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
            
             <div class="col-md-12 form-group centralizado borda_cinza altura_210  borda_inferior_verde_claro" id="f_1">
                <br/>
                <?php                  
                if($dados_objetivo_programa['foto_01'] != "" and $dados_objetivo_programa['foto_01'] != "avatar_refeicao.png") 
                {  
                 ?> 
                <label for="uploadImage1"><img src="fotos/<?php print $dados_objetivo_programa['foto_01'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
                <input id="uploadImage1" type="file" name="foto_01" onchange="pre_visualizacao1();" style="display:none"/>                
                <?php
                }                
                else if($dados_objetivo_programa['foto_01'] == "" or $dados_objetivo_programa['foto_01'] == "avatar_refeicao.png") 
                {
                 ?>
                 <label for="uploadImage1"><img src="img/avatar_refeicao.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview1"/></label>   
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
            <!-- fim - campo foto 01 refeicao -->    
            
            
            
            
            
            
            <!-- inicio - campo foto 02 refeicao -->    
        <div class="col-md-3">
             <!-- inicio - barra de título e botao "x" para remover a foto do paciente - capo oculto para saber se insere avatar ou não -->
             <div class="col-md-8 fonte_branca padding_top_05 fundo_verde_claro altura_30"><span class="glyphicon glyphicon-camera"></span> FOTO </div>
             <div class="col-md-4 direito fonte_branca padding_top_05 fundo_verde_claro altura_30"> 
             <a href="#" onclick="document.getElementById('f_2').innerHTML = '<br/><label for=\'uploadImage2\'><img src=\'fotos/avatar_refeicao.png\' class=\'img-responsive margin_auto\' width=150 height=200  id=\'uploadPreview2\'></label><input id=\'uploadImage2\' type=\'file\' name=\'foto_02\' onchange=\'pre_visualizacao2()\' style=\'display:none\'><input type=hidden name=fo_02 id=fo_02 value=0>'">
             <span class="glyphicon glyphicon-remove fonte_branca"></span>
             </a>
             </div>
             <!-- fim - barra de título e botao "x" para remover a foto do paciente -->
            
             <div class="col-md-12 form-group centralizado borda_cinza altura_210  borda_inferior_verde_claro" id="f_2">
                <br/>
                <?php                  
                if($dados_objetivo_programa['foto_02'] != "" and $dados_objetivo_programa['foto_02'] != "avatar_refeicao.png") 
                {  
                 ?> 
                <label for="uploadImage2"><img src="fotos/<?php print $dados_objetivo_programa['foto_02'] ?>" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview2"/></label>   
                <input id="uploadImage2" type="file" name="foto_02" onchange="pre_visualizacao2();" style="display:none"/>                
                <?php
                }                
                else if($dados_objetivo_programa['foto_02'] == "" or $dados_objetivo_programa['foto_02'] == "avatar_refeicao.png") 
                {
                 ?>
                 <label for="uploadImage2"><img src="img/avatar_refeicao.png" class="img-responsive margin_auto" width=150 height=200  id="uploadPreview2"/></label>   
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
            <!-- fim - campo foto 02 refeicao --> 
            
        
        
        <!-- inicio - alimentos dessa refeição -->            
        <div class="form-group col-md-12">
            <label for="alimento_refeicao">Alimentos dessa refeição </label>
            <div id="alimentos_refeicao" name="alimentos_refeicao">
                <div class="col-md-6 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Alimento</div>                
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Porções</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 direito">Peso</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 direito">T. Peso</div>                
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 direito">Calorias</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 direito">T. Cal</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 centralizado fonte_branca"><span class="glyphicon glyphicon-minus" alt="Remover Alimento da Refeição" title="Remover Alimento da Refeição"></span></div>
            </div>
         </div>
        <!-- fim - alimentos dessa refeição --> 
        
            
            
        <!-- inicio - peso total e calorias totais -->           
         <div class="form-group col-md-12">            
            <div id="totais" name="totais">
                <div class="col-md-10 padding_top_10 padding_bottom_10"><input type="text" name="alimento" id="alimento" class="form-group margin_00 sem_borda fundo_transparente negrito" value="Totais" readonly></div>
                <div class="col-md-1"><input type="text" name="total_caloria" id="total_caloria" class="form-group largura_100 margin_00 direito fonte_verde_claro fundo_transparente sem_borda "  value="0" readonly></div>
            </div>
         </div>        
        <!-- fim - peso total e calorias totais --> 
        
            
        <!-- inicio - botoes salvar e cancelar cadastro de refeição -->           
         <div class="col-md-12  direito">
            <button type="submit" class="btn btn_verde_claro">Salvar Refeição</button>    
            <button type="reset" class="btn btn_verde_claro" onclick="location.href='01_lista_refeicoes.php'">Cancelar</button>    
            <br/><br/>
         </div>
        <!-- fim - botoes salvar e cancelar cadastro de refeição -->           
         
        </form>
            
        </div>
    </div>
    <!-- fim - cadastro refeição - titulo e tipo de refeição -->
       
       
    
       
       
       
       
       
    <br/>
       
    <!--  inicio - busca simples de alimentos -->
        <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
        <br/>
          <form name="form_pesquisa" id="form_pesquisa" onsubmit="return false;" class="padding_bottom_20 from_group form-inline" style="white-space: nowrap">          
              <div id="titulo_refeicao" name="titulo_refeicao" class="form-group col-md-12">
              <label for="busca">Busca Alimentos</label>
              <br/>
              <input type="text" name="busca" id="busca" class="form-control" style="width:95%;" placeholder="GRUPO OU ALIMENTO">
              <button type="button" class="btn btn_verde_claro fonte_branca largura_05" alt="Exibe os alimentos contendo o valor digitado na busca"  title="Exibe os alimentos contendo o valor digitado na busca"> 
                  <span class="glyphicon glyphicon-search"></span> 
              </button>  
              <br/><br/>
              <!-- div para exibir os resultados da busca -->
               
               <div class="resultados margin_left_02"></div>
               
              </div>
          </form>  
        </div>
        </div>
        <!--  fim - busca simples de alimentos -->   
       
       
       
       
       
    
    
   <div class="col-md-offset-1 col-md-10">
   <!-- fim da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
       
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
    include_once ("includes/modal_sucesso.php");   
    
    ?>
    
    <script>
    $(window).on('load',function()
    {        
    $('#modal_sucesso').modal('show');
    });
    </script>    
    
    <?php
    }
    ?>