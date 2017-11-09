<!DOCTYPE html>
<?php 
// inicia a sessão
session_start(); 

if ($_SESSION['logado'] != 1)
{
    header("location:index.php");
}
	

//conexão com banco de dados
include_once('conexao/connect_db.php');
$db = BancoDeDados::getInstance(); 

//acentuação
mysql_set_charset('utf8');
ini_set('default_charset','UTF-8');

// inclui os arquivos de funções PHP - nesse caso, função para abrir modal de upload (mensagem_upload)
include "includes/funcoes.php";


function formata_cpf($cpf)
{
$digitos_esquerda = substr($dados_classificacao['cpf'],0,3);
$digitos_meio = substr($dados_classificacao['cpf'],3,3);
$digitos_direita = substr($dados_classificacao['cpf'],6,3);
$digitos_verificadores = substr($dados_classificacao['cpf'],9,2);   
}

?>


<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Concurso de Remoção</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/funcoes.js"></script>
  </head>
<body>
 
<?php include "includes/menu_lateral.php"; ?>
<?php include "includes/modal_formulario_cadastrar_professor.php"; ?>
<?php include "includes/modal_impressao.php"; ?>
<?php include "includes/modal_linha_tempo.php"; ?>
    
<div class="container-fluid" id="container_principal" onclick="recua_menu(10)">


    
<!-- início dos blocos de menu ********************************************************************************************** -->
<div class="row col-sm-10 col-sm-offset-1">
    
    <div class="row">
    <div class="panel panel-default sem_borda borda_inferior col-sm-12">
      <div class="panel-body">
        <span class="fonte_grande">
        <span class="glyphicon glyphicon-th fonte_azul_escuro"></span> 
        Painel de <span class="negrito fonte_azul_escuro">Controle</span>
        </span>
      </div>
    </div>
    
    
        
    
    </div>    
    
    
    <!-- edital -->
    <div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail borda_azul_bem_claro altura_250">        
        <a href="#" data-toggle="modal" data-target="#modalEdital">
            <div class="margin_auto"><img src="img/icone_edital_upload.png" class="img-responsive padding_15  margin_auto" alt="Ícone Upload Edital de Abertura" title="Ícone Upload Edital de Abertura"></div>
            <div class="caption">
                <h3 class="centralizado fonte_azul_escuro">Edital de <br/>Abertura</h3>  
                <br/>
                <p class="centralizado fonte_pequena fonte_azul_escuro">
                Publicar a portaria do Concurso de <br/>Remoção 2017 (arquivo PDF)
                </p>
            </div>        
        </a>
        </div>
        
    </div>
    
    
    <!-- vagas -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail borda_azul_bem_claro altura_250">        
            <img src="img/icone_vagas.png" class="img-responsive padding_15" alt="Ícone Vagas" title="Ícone Vagas">  
            <div class="caption">
                <h3 class="centralizado fonte_azul_escuro">Cadastro de <br/>Vagas</h3> 
                
                <p class="centralizado fonte_pequena fonte_azul_escuro">
                    <a href="#" data-toggle="modal" data-target="#modalDiretor">Diretor Iniciais</a> | 
                    <a href="#" data-toggle="modal" data-target="#modalDiretor_Potenciais">Diretor Potenciais</a> <br/> 
                    <a href="#" data-toggle="modal" data-target="#modalVagas">Fund Iniciais</a> | 
                    <a href="#" data-toggle="modal" data-target="#modalVagas_Potenciais">Fund Potenciaís</a><br/>
                    <a href="#" data-toggle="modal" data-target="#modalVagas_Infantil">Inf Iniciais</a> | 
                    <a href="#" data-toggle="modal" data-target="#modalVagas_Infantil_Potenciais">Inf Potenciais</a>
                </p>
            </div>
        
        </div>
    </div>
    
    
    
    <!-- inscrições e classificação -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail borda_azul_bem_claro altura_250">                 
            <img src="img/icone_edital.png" class="img-responsive padding_15" alt="Ícone Classificação" title="Ícone Classificação">  
            <div class="caption">
                <h3 class="centralizado fonte_azul_escuro">Inscrições e <br/>Classificações</h3>            
                <br/>
                <p class="centralizado fonte_pequena fonte_azul_escuro">
                <a href="#" data-toggle="modal" data-target="#modalClassificacao">
                Visualizar as inscrições 
                </a>
                <br/>
                <a href="#" data-toggle="modal" data-target="#modalProfessores">
                Lista de Professores (Todos)
                </a>
                </p>
            </div>        
        </div>
    </div>
    <!-- </div>-->
    
    
    <!-- recursos -->
    <!-- <div class="row"> -->
    <div class="col-sm-6 col-md-4">        
        <div class="thumbnail borda_azul_bem_claro altura_250">        
        
            <img src="img/icone_recursos.png" class="img-responsive padding_15" alt="Ícone Recursos" title="Ícone Recursos">  
            <div class="caption">
                <h3 class="centralizado fonte_azul_escuro">Recursos</h3>             
                <br/>
                <p class="centralizado fonte_pequena fonte_azul_escuro">
                <a href="#" data-toggle="modal" data-target="#modalRecursos">
                Recurso de Classificação
                </a>    
                <br/>                
                <a href="#" data-toggle="modal" data-target="#modalRecursos_Final">
                Recurso de Resultado Final
                </a>
                </p>
            </div>
        
        </div>
    </div>
    
    
    <!-- indicação -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail borda_azul_bem_claro altura_250"> 
            <img src="img/icone_indicacoes.png" class="img-responsive padding_15" alt="Ícone Indicação" title="Ícone Indicação">  
            <div class="caption">
                <h3 class="centralizado fonte_azul_escuro">Indicações</h3>               
                <br/>
                <p class="centralizado fonte_pequena fonte_azul_escuro">
                <a href="#" data-toggle="modal" data-target="#modalIndicacoes">
                Conferir as indicações
                </a>
                </p>
            </div>        
        </div>        
    </div>
    
    
    <!-- Resultado Final -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail borda_azul_bem_claro altura_250">        
        <a href="#">
            <img src="img/icone_resultado.png" class="img-responsive padding_15" alt="Ícone Resultado Final" title="Ícone Resultado Final">  
            <div class="caption">
                <h3 class="centralizado fonte_azul_escuro">Resultado Final</h3>              
                <br/>
                <p class="centralizado fonte_pequena fonte_azul_escuro">
                <a href="#" data-toggle="modal" data-target="#modalRemocoes">
                Efetuar Remoções
                </a>
                </p>
            </div>
        </a>
        </div>
    </div>
    
    </div>
    
    
</div>
<!-- fim blocos do menu -->    

<!-- ************************************************************************************************************************ -->
  
    

    
    
   
    
    

    
    
    
<!-- inicio modal edital - selecionando o arquivo-->
<!-- Modal -->
<div class="modal fade" id="modalEdital" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-cloud-upload fonte_pequena"></span> Publicação <span class="negrito">Portaria</span></h3>            
        
      </div>
      
      <div class="modal-body">
        
        <div class="row">
            <div class="col-sm-10">
            <p>Para publicar o <span class="negrito">Edital de Abertura</span> execute os procedimentos abaixo:</p>       
              <span class="glyphicon glyphicon-check fonte_azul_escuro"></span> Você deve ter um <span class="negrito"> arquivo PDF</span>, <span class="fonte_vermelha negrito">necessariamente</span>, com o nome <span class="fonte_vermelha negrito">portaria_concurso_remocao.pdf</span>, armazenado em uma pasta em seu computador; <br/>
              <span class="glyphicon glyphicon-check fonte_azul_escuro"></span> Clique no botão <span class="label label-default fundo_azul_escuro">Escolher arquivo</span> e selecione o arquivo na pasta onde está armazenado; <br/>
              <span class="glyphicon glyphicon-check fonte_azul_escuro"></span> Em seguida, clique no botão <span class="label label-default fundo_azul_escuro">Publicar</span>. <br/>
              <br/>
              <form name="formul_upload" id="formul_upload"  enctype="multipart/form-data" action="01_menu_adm.php?upload=1" method="post">
              <div class="form-group">
                <label for="exampleInputFile">Entrada de arquivo</label>
                <input type="file" id="arquivo_edital" name="arquivo_edital">            
              </div>
            </div>

            <div class="col-sm-2">
            <img src="img/icone_edital_upload_grande.jpg" class="img-responsive padding_15" alt="Ícone Edital" title="Ícone Edital"> 
            </div>
          
      </div>
      </div>
        
      <div class="modal-footer">        
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Publicar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal edital - selecionando o arquivo-->
    
    
    
    
    
    
 

    
    
    

    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->    
<!-- inicio cadastro vagas iniciais diretor -->    
    
<?php
     // função utilizada para inserir os registros dentro de um array
    function filter( $dados )
	{
		$arr = Array();
		foreach( $dados AS $dado ) $arr[] = (int)$dado;
		return $arr;
	} 

    // inicio atualização dos dados na tabela de vagas
    if(isset($_GET['vagas_iniciais_diretor']))
    {
        $arr_escolas_diretor = filter( $_POST['escola'] );
        $arr_diretor = filter( $_POST['diretor'] );
        
        $contador=0;
        while($contador < sizeof($arr_escolas_diretor))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_diretor[$contador] . ",10,1,1,";
//        $sqlstring .= $arr_diretor[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_diretor[$contador] . " where cod_escola = " . $arr_escolas_diretor[$contador] . " and cod_cargo = 10 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        
        $_SESSION['titulo_modal'] = "Vagas Iniciais - Diretor";
        $_SESSION['mensagem'] = "<br/><br/>As <span class='negrito'>vagas iniciais para diretores</span> foram cadastradas com sucesso!";  
        $_SESSION['icone'] = "img/icone_vagas_grande.jpg";
    }
    
            
?>
    

    
    
    
<!-- inicio modal cadastro de vagas iniciais diretor -->
<!-- Modal -->
<div class="modal fade" id="modalDiretor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Cadastro de Vagas <span class="negrito">Iniciais -  Diretor</span></h3>        
      </div>
      
      <div class="modal-body">        
          <p>Para <span class="negrito">cadastrar as vagas iniciais</span> para o cargo de diretor preencha os campos abaixo:</p>   
          
        <br/>
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais_diretor" id="formul_vagas_iniciais_diretor" action="01_menu_adm.php?vagas_iniciais_diretor=1" method="post">
            <table class="table">
                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_90">Unidade Escolar</th>
                <th class="fonte_pequena centralizado largura_text_vagas">DIRETOR</th>                
                </tr>
           
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_escola_diretor  = "select * from tb_escola where cod_escola < 159";      
                $info_escola_diretor = $db->sql_query($sqlstring_escola_diretor);                                
                $linhas_diretor = mysql_num_rows($info_escola_diretor);
                
                while($dados_escola_diretor=mysql_fetch_array($info_escola_diretor))
                {                          
                ?>                    
    <tr>
    <td class="largura_90"> <?php print $dados_escola_diretor['apelido_escola'] ?><input type="hidden" name="escola[]" id="escola[]" value="<?php print $dados_escola_diretor['cod_escola'] ?>"</td>
                <?php
                $sqlstring_vagas_diretor = "select * from tb_vagas where cod_tipo_vaga = 1  and cod_escola =  " . $dados_escola_diretor['cod_escola'] . " and cod_cargo = 10 and cod_escola < 159";      
                $info_vagas_diretor = $db->sql_query($sqlstring_vagas_diretor); 
                $dados_vagas_diretor = mysql_fetch_array($info_vagas_diretor);
                ?>
    <td class="fonte_muito_pequena centralizado largura_text_vagas"><input type="text" class="form-control largura_text_vagas" name="diretor[]" id="diretor[]" placeholder="00" maxlength="3" value="<?php print $dados_vagas_diretor['quantidade'] ?>"></td>
    </tr>
                
                <?php
                }                
                $sqlstring  = "select sum(quantidade) as qtde from tb_vagas where cod_cargo = 10 and cod_tipo_vaga = 1 and cod_escola < 159";      
                $info = $db->sql_query($sqlstring);
                $dados = mysql_fetch_array($info);    
                  
                print "<tr>";

                print "<td>&nbsp;</td>";
                print "<td class='direito negrito fonte_pequena largura_text_vagas'><input type='text' class='form-control largura_text_vagas fundo_azul_escuro' style='background-color:#fff; color:#1f2f67; border:0px solid #fff' name='total' id='total' value = " . $dados['qtde'] . " readonly></td>";
               
               
                print "</tr>";
                //fim totalizando as colunas de vagas
                ?>   
                <!-- fim  listagem para atualização de vagas -->
               
            </table>            
        </div>          
      </div>
        
      <div class="modal-footer">                
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Cadastrar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal cadastro de vagas -->
    
    

<!-- fim cadastro vagas iniciais diretor -->        
<!-- ************************************************************************************************************************ -->
    
    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->    
<!-- inicio cadastro vagas potenciais diretor -->    
    
<?php
    // inicio atualização dos dados na tabela de vagas
    if(isset($_GET['vagas_potenciais_diretor']))
    {
        $arr_escolas_diretor = filter( $_POST['escola'] );
        $arr_diretor = filter( $_POST['diretor'] );
        
        $contador=0;
        while($contador < sizeof($arr_escolas_diretor))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_diretor[$contador] . ",10,1,2,";
//        $sqlstring .= $arr_diretor[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_diretor[$contador] . " where cod_escola = " . $arr_escolas_diretor[$contador] . " and cod_cargo = 10 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        
        $_SESSION['titulo_modal'] = "Vagas Potenciais - Diretor";
        $_SESSION['mensagem'] = "<br/><br/>As <span class='negrito'>vagas potenciais para diretores</span> foram cadastradas com sucesso!";  
        $_SESSION['icone'] = "img/icone_vagas_grande.jpg";
    }
    
            
?>
    

    
    
    
<!-- inicio modal cadastro de vagas potenciais diretor -->
<!-- Modal -->
<div class="modal fade" id="modalDiretor_Potenciais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
        <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Cadastro de Vagas <span class="negrito">Potenciais -  Diretor</span></h3>        
      </div>
      
      <div class="modal-body">        
          <p>Para <span class="negrito">cadastrar as vagas potenciais</span> para o cargo de diretor preencha os campos abaixo:</p>   
          
        <br/>
        <div class="table-responsive">
            
            <form name="formul_vagas_potenciais_diretor" id="formul_vagas_potenciais_diretor" action="01_menu_adm.php?vagas_potenciais_diretor=1" method="post">
            <table class="table">
                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_90">Unidade Escolar</th>
                <th class="fonte_pequena centralizado largura_text_vagas">DIRETOR</th>                
                </tr>
           
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_escola_diretor_potenciais  = "select * from tb_escola where cod_escola < 159";      
                $info_escola_diretor_potenciais = $db->sql_query($sqlstring_escola_diretor_potenciais);       
                $linhas_diretor_potenciais = mysql_num_rows($info_escola_diretor_potenciais);
                
                while($dados_escola_diretor_potenciais=mysql_fetch_array($info_escola_diretor_potenciais))
                {                          
                ?>                    
    <tr>
    <td class="largura_90"> <?php print $dados_escola_diretor_potenciais['apelido_escola'] ?><input type="hidden" name="escola[]" id="escola[]" value="<?php print $dados_escola_diretor_potenciais['cod_escola'] ?>"</td>
                <?php
                $sqlstring_vagas_diretor_potenciais = "select * from tb_vagas where cod_tipo_vaga = 2  and cod_escola =  " . $dados_escola_diretor_potenciais['cod_escola'] . " and cod_cargo = 10 and cod_escola < 159";      
                $info_vagas_diretor_potenciais = $db->sql_query($sqlstring_vagas_diretor_potenciais); 
                $dados_vagas_diretor_potenciais = mysql_fetch_array($info_vagas_diretor_potenciais);
                ?>
    <td class="fonte_muito_pequena centralizado largura_text_vagas"><input type="text" class="form-control largura_text_vagas" name="diretor[]" id="diretor[]" placeholder="00" maxlength="3" value="<?php print $dados_vagas_diretor_potenciais['quantidade'] ?>"></td>
    </tr>
                
                <?php
                }                
                $sqlstring  = "select sum(quantidade) as qtde from tb_vagas where cod_cargo = 10 and cod_tipo_vaga = 2 and cod_escola < 159";      
                $info = $db->sql_query($sqlstring);
                $dados = mysql_fetch_array($info);    
                  
                print "<tr>";

                print "<td>&nbsp;</td>";
                print "<td class='direito negrito fonte_pequena largura_text_vagas'><input type='text' class='form-control largura_text_vagas fundo_azul_escuro' style='background-color:#fff; color:#1f2f67; border:0px solid #fff' name='total' id='total' value = " . $dados['qtde'] . " readonly></td>";
               
               
                print "</tr>";
                //fim totalizando as colunas de vagas
                ?>   
                <!-- fim  listagem para atualização de vagas -->
               
            </table>            
        </div>          
      </div>
        
      <div class="modal-footer">                
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Cadastrar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal cadastro de vagas -->
    
    

<!-- fim cadastro vagas potenciais diretor -->        
<!-- ************************************************************************************************************************ -->
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->    
<!-- inicio cadastro vagas iniciais fundamental -->    
    
    <?php       
    
    // inicio atualização dos dados na tabela de vagas
    if(isset($_GET['vagas_iniciais']))
    {
        $arr_escolas = filter( $_POST['escola'] );
        $arr_pefI = filter( $_POST['pefI'] );
        $arr_por = filter( $_POST['portugues'] );
        $arr_mat = filter( $_POST['matematica'] );
        $arr_his = filter( $_POST['historia'] );
        $arr_geo = filter( $_POST['geografia'] );
        $arr_ccs = filter( $_POST['ciencias'] );
        $arr_ing = filter( $_POST['ingles'] );
        $arr_inf = filter( $_POST['informatica'] );
        $arr_edf = filter( $_POST['educacao_fisica'] );
        $arr_art = filter( $_POST['artes'] );
        $arr_adjI = filter( $_POST['adjI'] );
        $arr_adjII = filter( $_POST['adjII'] );
        
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",1,1,1,";
//        $sqlstring .= $arr_por[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_por[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 1 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",2,1,1,";
//        $sqlstring .= $arr_mat[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_mat[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 2 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",3,1,1,";
//        $sqlstring .= $arr_his[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_his[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 3 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",4,1,1,";
//        $sqlstring .= $arr_geo[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_geo[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 4 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",5,1,1,";
//        $sqlstring .= $arr_ccs[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_ccs[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 5 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",6,1,1,";
//        $sqlstring .= $arr_ing[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_ing[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 6 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",7,1,1,";
//        $sqlstring .= $arr_inf[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_inf[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 7 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",8,1,1,";
//        $sqlstring .= $arr_edf[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_edf[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 8 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",9,1,1,";
//        $sqlstring .= $arr_art[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_art[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 9 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",12,1,1,";
//        $sqlstring .= $arr_pefI[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_pefI[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 12 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        } 
        
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",14,1,1,";
//        $sqlstring .= $arr_adjI[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjI[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 14 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }  
        
        
        $contador=0;
        while($contador < sizeof($arr_escolas))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas[$contador] . ",15,1,1,";
//        $sqlstring .= $arr_adjII[$contador] . ")"; 
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjII[$contador] . " where cod_escola = " . $arr_escolas[$contador] . " and cod_cargo = 15 and cod_tipo = 1 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }  
        
        $_SESSION['titulo_modal'] = "Vagas Iniciais - Ensino Fundamental";
        $_SESSION['mensagem'] = "<br/><br/>As <span class='negrito'>vagas iniciais do Ensino Fundamental</span> foram cadastradas com sucesso!";  
        $_SESSION['icone'] = "img/icone_vagas_grande.jpg";
    }        
    ?>
    
<!-- inicio modal cadastro de vagas -->
<!-- Modal -->
<div class="modal fade " id="modalVagas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static"> 
  <div class="modal-dialog modal-lg" role="document" style="width:90%;">>
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
        <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Cadastro de Vagas <span class="negrito">Iniciais - Fundamental</span></h3>                
      </div>
      
      <div class="modal-body">        
        <p>Para <span class="negrito">cadastrar as vagas iniciais</span> que serão disponibilizadas pelo Ensino Fundamental preencha os campos abaixo:</p>   
          
        <?php include "includes/legenda_fundamental.inc"; ?>
        
        
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais" id="formul_vagas_iniciais" action="01_menu_adm.php?vagas_iniciais=1" method="post">
            <table class="table">
                <tr class="fundo_azul_escuro fonte_branca">
                <th>Unidade Escolar</th>                
                <th class="fonte_pequena centralizado largura_text_vagas">POR</th>
                <th class="fonte_pequena centralizado largura_text_vagas">MAT</th>
                <th class="fonte_pequena centralizado largura_text_vagas">HIS</th>
                <th class="fonte_pequena centralizado largura_text_vagas">GEO</th>
                <th class="fonte_pequena centralizado largura_text_vagas">CCS</th>
                <th class="fonte_pequena centralizado largura_text_vagas">ING</th>
                <th class="fonte_pequena centralizado largura_text_vagas">INF</th>
                <th class="fonte_pequena centralizado largura_text_vagas">EDF</th>
                <th class="fonte_pequena centralizado largura_text_vagas">ART</th>
                <th class="fonte_pequena centralizado largura_text_vagas">PEF I</th>
                <th class="fonte_pequena centralizado largura_text_vagas">ADJ I</th>
                <th class="fonte_pequena centralizado largura_text_vagas">ADJ II</th>
                </tr>
           
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_escola  = "select * from tb_escola where cod_tipo = 1 and cod_escola != 159";      
                $info_escola = $db->sql_query($sqlstring_escola);                                
                $linhas = mysql_num_rows($info_escola);
                
                while($dados_escola=mysql_fetch_array($info_escola))
                {                          
                ?>                    
    <tr>
    <td> <?php print $dados_escola['apelido_escola'] ?><input type="hidden" name="escola[]" id="escola[]" value="<?php print $dados_escola['cod_escola'] ?>"</td>
                <?php
                $sqlstring_vagas = "select * from tb_vagas where cod_tipo_vaga = 1  and cod_escola =  " . $dados_escola['cod_escola'] . " and (cod_cargo < 10 or cod_cargo=12 or cod_cargo=14 or cod_cargo=15)";      
                $info_vagas = $db->sql_query($sqlstring_vagas); 
                $dados_vagas = mysql_fetch_array($info_vagas);
                ?>                
                
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="portugues[]" id="portugues[]" placeholder="00" maxlength="3" value="<?php print $dados_vagas['quantidade'] ?>"></td>  
                
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="matematica[]" id="matematica[]" placeholder="00"  maxlength="3" value="<?php print $dados_vagas['quantidade'] ?>"></td>    
        
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="historia[]" id="historia[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>
                
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>       
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="geografia[]" id="geografia[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>
                
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="ciencias[]" id="ciencias[]" placeholder="00"   maxlength="3" value="<?php print $dados_vagas['quantidade'] ?>"> </td>
            
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="ingles[]" id="ingles[]" placeholder="00"   maxlength="3" value="<?php print $dados_vagas['quantidade'] ?>"> </td>
        
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="informatica[]" id="informatica[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>
        
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="educacao_fisica[]" id="educacao_fisica[]" placeholder="00" maxlength="3"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>
      
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="artes[]" id="artes[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>

                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
     <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="pefI[]" id="pefI[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>

                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="adjI[]" id="adjI[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>
        
                <?php $dados_vagas = mysql_fetch_array($info_vagas); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas"name="adjII[]" id="adjII[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas['quantidade'] ?>"> </td>
    </tr>
                <?php
                }
                //inicio totalizando as colunas de vagas
                $contador = 1;                
                print "<tr>"; 
                print "<td class='negrito'>Totais</td>";
                while($contador <= 15)
                {
                if($contador == 10)
                    $contador = 12;
                else if($contador == 13)
                    $contador = 14;
                    
                $sqlstring  = "select sum(quantidade) as qtde from tb_vagas where cod_tipo = 1 and cod_cargo = " . $contador . " and cod_tipo_vaga = 1";      
                $info = $db->sql_query($sqlstring);
                $dados = mysql_fetch_array($info);    
                    
                print "<td class='centralizado negrito fonte_pequena largura_text_vagas'><input type='text' class='form-control largura_text_vagas fundo_azul_escuro' style='background-color:#fff; color:#1f2f67; border:0px solid #fff' name='total' id='total' value = " . $dados['qtde'] . " readonly></td>";
                $contador++;
                }
                print "</tr>";
                //fim totalizando as colunas de vagas
                ?>   
                <!-- fim  listagem para atualização de vagas -->
               
            </table>            
        </div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Cadastrar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal cadastro de vagas -->
    
    

<!-- fim cadastro vagas iniciais fundamental -->        
<!-- ************************************************************************************************************************ -->        
    
    
    

 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
<!-- ************************************************************************************************************************ -->   
<!-- inicio cadastro vagas potenciais fundamental -->   
<?php
// inicio atualização dos dados na tabela de vagas
    if(isset($_GET['vagas_potenciais']))
    {
        $arr_escolas_pot = filter( $_POST['escola_potenciais'] );
        $arr_por_pot = filter( $_POST['portugues_potenciais'] );
        $arr_mat_pot = filter( $_POST['matematica_potenciais'] );
        $arr_his_pot = filter( $_POST['historia_potenciais'] );
        $arr_geo_pot = filter( $_POST['geografia_potenciais'] );
        $arr_ccs_pot = filter( $_POST['ciencias_potenciais'] );
        $arr_ing_pot = filter( $_POST['ingles_potenciais'] );
        $arr_inf_pot = filter( $_POST['informatica_potenciais'] );
        $arr_edf_pot = filter( $_POST['educacao_fisica_potenciais'] );
        $arr_art_pot = filter( $_POST['artes_potenciais'] );
        $arr_pefI_pot = filter( $_POST['pefI_potenciais'] );
        $arr_adjI_pot = filter( $_POST['adjI_potenciais'] );
        $arr_adjII_pot = filter( $_POST['adjII_potenciais'] );
        
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",1,1,2,";
//        $sqlstring .= $arr_por_pot[$contador] . ")";     
        $sqlstring = "update tb_vagas set quantidade = " . $arr_por_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 1 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",2,1,2,";
//        $sqlstring .= $arr_mat_pot[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_mat_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 2 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",3,1,2,";
//        $sqlstring .= $arr_his_pot[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_his_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 3 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",4,1,2,";
//        $sqlstring .= $arr_geo_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_geo_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 4 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",5,1,2,";
//        $sqlstring .= $arr_ccs_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_ccs_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 5 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",6,1,2,";
//        $sqlstring .= $arr_ing_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_ing_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 6 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",7,1,2,";
//        $sqlstring .= $arr_inf_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_inf_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 7 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",8,1,2,";
//        $sqlstring .= $arr_edf_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_edf_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 8 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",9,1,2,";
//        $sqlstring .= $arr_art_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_art_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 9 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }   
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",12,1,2,";
//        $sqlstring .= $arr_pefI_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_pefI_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 12 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }   
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",14,1,2,";
//        $sqlstring .= $arr_adjI_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjI_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 14 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }   
        
        $contador=0;
        while($contador < sizeof($arr_escolas_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_pot[$contador] . ",15,1,2,";
//        $sqlstring .= $arr_adjII_pot[$contador] . ")";
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjII_pot[$contador] . " where cod_escola = " . $arr_escolas_pot[$contador] . " and cod_cargo = 15 and cod_tipo = 1 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }   
        
        $_SESSION['titulo_modal'] = "Vagas Potenciais - Ensino Fundamental";
        $_SESSION['mensagem'] = "<br/><br/>As <span class='negrito'>vagas potenciais do Ensino Fundamental</span> foram cadastradas com sucesso!";  
        $_SESSION['icone'] = "img/icone_vagas_grande.jpg";
    }           
    ?>
    
<!-- inicio modal cadastro de vagas -->
<!-- Modal -->
<div class="modal fade" id="modalVagas_Potenciais" name="modalVagas_Potenciais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static"> 
  <div class="modal-dialog modal-lg" role="document" style="width:90%">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
                <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Cadastro de Vagas <span class="negrito">Potenciais - Fundamental</span></h3>        
      </div>
      
      <div class="modal-body">        
        <p>Para <span class="negrito">cadastrar as vagas potenciais</span> que serão disponibilizadas pelo Ensino Fundamental preencha os campos abaixo:</p>   
          
        <?php include "includes/legenda_fundamental.inc"; ?>
          
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais" id="formul_vagas_iniciais" action="01_menu_adm.php?vagas_potenciais=1" method="post">
            <table class="table">
                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_40">Unidade Escolar</th>
                <th class="fonte_pequena largura_05">POR</th>
                <th class="fonte_pequena largura_05">MAT</th>
                <th class="fonte_pequena largura_05">HIS</th>
                <th class="fonte_pequena largura_05">GEO</th>
                <th class="fonte_pequena largura_05">CCS</th>
                <th class="fonte_pequena largura_05">ING</th>
                <th class="fonte_pequena largura_05">INF</th>
                <th class="fonte_pequena largura_05">EDF</th>
                <th class="fonte_pequena largura_05">ART</th>
                <th class="fonte_pequena largura_05">PEFI</th>
                <th class="fonte_pequena largura_05">ADJI</th>
                <th class="fonte_pequena largura_05">ADJII</th>
                </tr>
            
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_escola_potenciais  = "select * from tb_escola where cod_tipo = 1 and cod_escola != 159";      
                $info_escola_potenciais = $db->sql_query($sqlstring_escola_potenciais);                                
                $linhas = mysql_num_rows($info_escola_potenciais);
                
                while($dados_escola_potenciais=mysql_fetch_array($info_escola_potenciais))
                {                          
                ?>                    
    <tr>
    <td> <?php print $dados_escola_potenciais['apelido_escola'] ?><input type="hidden" name="escola_potenciais[]" id="escola_potenciais[]" value="<?php print $dados_escola_potenciais['cod_escola'] ?>"></td>
                <?php
                $sqlstring_vagas_potenciais = "select * from tb_vagas where cod_tipo_vaga = 2  and cod_escola =  " . $dados_escola_potenciais['cod_escola'] . " and (cod_cargo < 10 or cod_cargo=12 or cod_cargo=14 or cod_cargo=15)";      
                $info_vagas_potenciais = $db->sql_query($sqlstring_vagas_potenciais); 
                $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais);
                ?>
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="portugues_potenciais[]" id="portugues_potenciais[]" placeholder="00" maxlength="3" value="<?php print $dados_vagas_potenciais['quantidade'] ?>"></td>                
                
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="matematica_potenciais[]" id="matematica_potenciais[]" placeholder="00"  maxlength="3" value="<?php print $dados_vagas_potenciais['quantidade'] ?>"></td>    
        
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="historia_potenciais[]" id="historia_potenciais[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
                
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="geografia_potenciais[]" id="geografia_potenciais[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
                
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="ciencias_potenciais[]" id="ciencias_potenciais[]" placeholder="00"   maxlength="3" value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
            
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="ingles_potenciais[]" id="ingles_potenciais[]" placeholder="00"   maxlength="3" value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
        
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="informatica_potenciais[]" id="informatica_potenciais[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
        
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="educacao_fisica_potenciais[]" id="educacao_fisica_potenciais[]" placeholder="00" maxlength="3"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
      
                <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="artes_potenciais[]" id="artes_potenciais[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
        
                    <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="pefI_potenciais[]" id="pefI_potenciais[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
        
                    <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="adjI_potenciais[]" id="adjI_potenciais[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
        
                    <?php $dados_vagas_potenciais = mysql_fetch_array($info_vagas_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="adjII_potenciais[]" id="adjII_potenciais[]"   maxlength="3" placeholder="00"  value="<?php print $dados_vagas_potenciais['quantidade'] ?>"> </td>
    </tr>
                <?php
                }
                //inicio totalizando as colunas de vagas
                $contador = 1;                
                print "<tr>"; 
                print "<td class='negrito'>Totais</td>";
                 while($contador <= 15)
                {
                if($contador == 10)
                    $contador = 12;
                else if($contador == 13)
                    $contador = 14;
                    
                $sqlstring  = "select sum(quantidade) as qtde from tb_vagas where cod_tipo = 1 and cod_cargo = " . $contador . " and cod_tipo_vaga = 2";      
                $info = $db->sql_query($sqlstring);
                $dados = mysql_fetch_array($info);    
                    
                print "<td class='centralizado negrito fonte_pequena largura_text_vagas'><input type='text' class='form-control largura_text_vagas fundo_azul_escuro' style='background-color:#fff; color:#1f2f67; border:0px solid #fff' name='total' id='total' value = " . $dados['qtde'] . " readonly></td>";
                $contador++;
                }
                print "</tr>";
                //fim totalizando as colunas de vagas
                ?>   
                <!-- fim  listagem para atualização de vagas -->
               
            </table>            
        </div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Cadastrar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal cadastro de vagas -->
    
<!-- fim cadastro vagas potenciais fundamental -->   
    
<!-- ************************************************************************************************************************ -->
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->   
<!-- inicio cadastro vagas iniciais infantil -->   
<?php
// inicio atualização dos dados na tabela de vagas
    if(isset($_GET['vagas_iniciais_infantil']))
    {
        $arr_escolas_infantil = filter( $_POST['escola_infantil'] );        
        $arr_pei20 = filter( $_POST['pei20'] );        
        $arr_pei25 = filter( $_POST['pei25'] );    
        $arr_adjei10 = filter( $_POST['adjei10'] );    
        $arr_adjei20 = filter( $_POST['adjei20'] );
        
                
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_infantil[$contador] . ",11,2,1,";
//        $sqlstring .= $arr_pei20[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_pei20[$contador] . " where cod_escola = " . $arr_escolas_infantil[$contador] . " and cod_cargo = 11 and cod_tipo = 2 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" .             $arr_escolas_infantil[$contador] . ",13,2,1,";
//        $sqlstring .= $arr_pei25[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_pei25[$contador] . " where cod_escola = " . $arr_escolas_infantil[$contador] . " and cod_cargo = 13 and cod_tipo = 2 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" .             $arr_escolas_infantil[$contador] . ",16,2,1,";
//        $sqlstring .= $arr_adjei10[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjei10[$contador] . " where cod_escola = " . $arr_escolas_infantil[$contador] . " and cod_cargo = 16 and cod_tipo = 2 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" .             $arr_escolas_infantil[$contador] . ",17,2,1,";
//        $sqlstring .= $arr_adjei20[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjei20[$contador] . " where cod_escola = " . $arr_escolas_infantil[$contador] . " and cod_cargo = 17 and cod_tipo = 2 and cod_tipo_vaga = 1";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
               
        
        $_SESSION['titulo_modal'] = "Vagas Iniciais - Educação Infantil";
        $_SESSION['mensagem'] = "<br/><br/>As <span class='negrito'>vagas iniciais da Educação Infantil</span> foram cadastradas com sucesso!";  
        $_SESSION['icone'] = "img/icone_vagas_grande.jpg";
    }           
    ?>
    
<!-- inicio modal cadastro de vagas -->
<!-- Modal -->
<div class="modal fade" id="modalVagas_Infantil" name="modalVagas_Infantil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>      
                <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Cadastro de Vagas <span class="negrito">Iniciais - Infantil</span></h3>                
      </div>
      
      <div class="modal-body">        
        <p>Para <span class="negrito">cadastrar as vagas iniciais</span> que serão disponibilizadas pela Educação Infantil preencha os campos abaixo:</p>   
          
        <?php include "includes/legenda_infantil.inc"; ?>
          
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais_infantil" id="formul_vagas_iniciais_infantil" action="01_menu_adm.php?vagas_iniciais_infantil=1" method="post">
            <table class="table">
                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_60">Unidade Escolar</th>                
                <th class="largura_10 fonte_pequena ">PEI-20</th> 
                <th class="largura_10 fonte_pequena ">PEI-25</th>                
                <th class="largura_10 fonte_pequena ">ADJ EI-10</th>                
                <th class="largura_10 fonte_pequena ">ADJ EI-20</th>                
                </tr>
            
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_escola_infantil  = "select * from tb_escola where cod_tipo = 2 and cod_escola < 159";      
                $info_escola_infantil = $db->sql_query($sqlstring_escola_infantil);                                                
                
                while($dados_escola_infantil=mysql_fetch_array($info_escola_infantil))
                {                          
                ?>                    
    <tr>
    <td> <?php print $dados_escola_infantil['apelido_escola'] ?><input type="hidden" name="escola_infantil[]" id="escola_infantil[]" value="<?php print $dados_escola_infantil['cod_escola'] ?>"></td>
                <?php
                $sqlstring_vagas_infantil = "select * from tb_vagas where cod_tipo_vaga = 1  and cod_escola =  " . $dados_escola_infantil['cod_escola'] . " and (cod_cargo = 11 or cod_cargo = 13 or cod_cargo = 16 or cod_cargo= 17)";      
                $info_vagas_infantil = $db->sql_query($sqlstring_vagas_infantil); 
                $dados_vagas_infantil = mysql_fetch_array($info_vagas_infantil);
                ?>
    
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="pei20[]" id="pei20[]" placeholder="00"  maxlength="3" value="<?php print $dados_vagas_infantil['quantidade'] ?>"></td>
                
                <?php $dados_vagas_infantil = mysql_fetch_array($info_vagas_infantil); ?>
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="pei25[]" id="pei25[]" placeholder="00"  maxlength="3" value="<?php print $dados_vagas_infantil['quantidade'] ?>"></td>
        
                <?php $dados_vagas_infantil = mysql_fetch_array($info_vagas_infantil); ?>
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="adjei10[]" id="adjei10[]" placeholder="00"  maxlength="3" value="<?php print $dados_vagas_infantil['quantidade'] ?>"></td>
                                
                <?php $dados_vagas_infantil = mysql_fetch_array($info_vagas_infantil); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="adjei20[]" id="adjei20[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_infantil['quantidade'] ?>"> </td>               
                
    </tr>
                <?php
                }
                //inicio totalizando as colunas de vagas
                $contador = 1;                
                print "<tr>"; 
                print "<td class='negrito'>Totais</td>";
                /*
                16 = PEI-20
                11 = PEI-25
                13 = ADJEI-10
                17 = ADJEI-20
                */
                while($contador <= 4)
                {
                if($contador == 1)  
                    $contador_cargo = 11;
                else if($contador == 2)
                    $contador_cargo = 13;
                else if($contador == 3)
                    $contador_cargo = 16;
                else
                    $contador_cargo = 17;
                    
                $sqlstring  = "select sum(quantidade) as qtde from tb_vagas where cod_tipo = 2 and cod_cargo = " . $contador_cargo . " and cod_tipo_vaga = 1";      
                $info = $db->sql_query($sqlstring);
                $dados = mysql_fetch_array($info);    
                    
                print "<td class='centralizado negrito fonte_pequena largura_text_vagas'><input type='text' class='form-control largura_text_vagas fundo_azul_escuro' style='background-color:#fff; color:#1f2f67; border:0px solid #fff' name='total' id='total' value = " . $dados['qtde'] . " readonly></td>";
                $contador++;
                }
                print "</tr>";
                //fim totalizando as colunas de vagas
                ?>   
                <!-- fim  listagem para atualização de vagas -->
               
            </table>            
        </div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Cadastrar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal cadastro de vagas -->
    
<!-- fim cadastro vagas iniciais infantil -->   
    
<!-- ************************************************************************************************************************ -->
 
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->   
<!-- inicio cadastro vagas potenciais infantil -->   
<?php
// inicio atualização dos dados na tabela de vagas
    if(isset($_GET['vagas_potenciais_infantil']))
    {
        $arr_escolas_infantil_pot = filter( $_POST['escola_infantil_potencial'] );        
        $arr_pei20_pot = filter( $_POST['pei20_potencial'] );        
        $arr_pei25_pot = filter( $_POST['pei25_potencial'] );
        $arr_adjei10_pot = filter( $_POST['adjei10_potencial'] );
        $arr_adjei20_pot = filter( $_POST['adjei20_potencial'] );
                
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_infantil_pot[$contador] . ",11,2,2,";
//        $sqlstring .= $arr_pei20_pot[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_pei20_pot[$contador] . " where cod_escola = " . $arr_escolas_infantil_pot[$contador] . " and cod_cargo = 11 and cod_tipo = 2 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_infantil_pot[$contador] . ",13,2,2,";
//        $sqlstring .= $arr_pei25_pot[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_pei25_pot[$contador] . " where cod_escola = " . $arr_escolas_infantil_pot[$contador] . " and cod_cargo = 13 and cod_tipo = 2 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_infantil_pot[$contador] . ",16,2,2,";
//        $sqlstring .= $arr_adjei10_pot[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjei10_pot[$contador] . " where cod_escola = " . $arr_escolas_infantil_pot[$contador] . " and cod_cargo = 16 and cod_tipo = 2 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
        
        $contador=0;
        while($contador < sizeof($arr_escolas_infantil_pot))
        {
//        $sqlstring = "insert into tb_vagas (cod_escola, cod_cargo, cod_tipo, cod_tipo_vaga, quantidade) values (" . $arr_escolas_infantil_pot[$contador] . ",17,2,2,";
//        $sqlstring .= $arr_adjei20_pot[$contador] . ")";        
        $sqlstring = "update tb_vagas set quantidade = " . $arr_adjei20_pot[$contador] . " where cod_escola = " . $arr_escolas_infantil_pot[$contador] . " and cod_cargo = 17 and cod_tipo = 2 and cod_tipo_vaga = 2";
        $db->sql_query($sqlstring);            
        $contador++;            
        }
          
        $_SESSION['titulo_modal'] = "Vagas Potenciais - Educação Infantil";
        $_SESSION['mensagem'] = "<br/><br/>As <span class='negrito'>vagas potenciais da Educação Infantil</span> foram cadastradas com sucesso!";  
        $_SESSION['icone'] = "img/icone_vagas_grande.jpg";
    }           
    ?>
    
<!-- inicio modal cadastro de vagas -->
<!-- Modal -->
<div class="modal fade" id="modalVagas_Infantil_Potenciais" name="modalVagas_Infantil_Potenciais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
                <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Cadastro de Vagas <span class="negrito">Potenciais - Infantil</span></h3>        
      </div>
      
      <div class="modal-body">        
        <p>Para <span class="negrito">cadastrar as vagas potenciais</span> que serão disponibilizadas pela Educação Infantil preencha os campos abaixo:</p>   
          
        <?php include "includes/legenda_infantil.inc"; ?>
          
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais_infantil" id="formul_vagas_potenciais_infantil" action="01_menu_adm.php?vagas_potenciais_infantil=1" method="post">
            <table class="table">
                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_60">Unidade Escolar</th>                
                <th class="largura_10 fonte_pequena">PEI-20</th>                
                <th class="largura_10 fonte_pequena">PEI-25</th>
                <th class="largura_10 fonte_pequena">ADJ EI-10</th>
                <th class="largura_10 fonte_pequena">ADJ EI-20</th>
                </tr>
            
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_escola_infantil_potenciais  = "select * from tb_escola where cod_tipo = 2 and cod_escola < 159";      
                $info_escola_infantil_potenciais = $db->sql_query($sqlstring_escola_infantil_potenciais);                                                
                
                while($dados_escola_infantil_potenciais=mysql_fetch_array($info_escola_infantil_potenciais))
                {                          
                ?>                    
    <tr>
    <td> <?php print $dados_escola_infantil_potenciais['apelido_escola'] ?><input type="hidden" name="escola_infantil_potencial[]" id="escola_infantil_potencial[]" value="<?php print $dados_escola_infantil_potenciais['cod_escola'] ?>"></td>
                <?php
                $sqlstring_vagas_infantil_potenciais = "select * from tb_vagas where cod_tipo_vaga = 2  and cod_escola =  " . $dados_escola_infantil_potenciais['cod_escola'] . " and (cod_cargo = 11 or cod_cargo = 13 or cod_cargo = 16 or cod_cargo = 17)";         
                $info_vagas_infantil_potenciais = $db->sql_query($sqlstring_vagas_infantil_potenciais); 
                $dados_vagas_infantil_potenciais = mysql_fetch_array($info_vagas_infantil_potenciais);
                ?>
                
    <td class="fonte_muito_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="pei20_potencial[]" id="pei20_potencial[]" placeholder="00"  maxlength="3" value="<?php print $dados_vagas_infantil_potenciais['quantidade'] ?>"></td>    
                
                <?php $dados_vagas_infantil_potenciais = mysql_fetch_array($info_vagas_infantil_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="pei25_potencial[]" id="pei25_potencial[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_infantil_potenciais['quantidade'] ?>"> </td>
        
                <?php $dados_vagas_infantil_potenciais = mysql_fetch_array($info_vagas_infantil_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="adjei10_potencial[]" id="adjei10_potencial[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_infantil_potenciais['quantidade'] ?>"> </td>
        
                <?php $dados_vagas_infantil_potenciais = mysql_fetch_array($info_vagas_infantil_potenciais); ?>
    <td class="fonte_pequena centralizado"><input type="text" class="form-control largura_text_vagas" name="adjei20_potencial[]" id="adjei20_potencial[]" placeholder="00"   maxlength="3"  value="<?php print $dados_vagas_infantil_potenciais['quantidade'] ?>"> </td>
                
    </tr>
                <?php
                }
                //inicio totalizando as colunas de vagas
                $contador = 1;                
                print "<tr>"; 
                print "<td class='negrito'>Totais</td>";
                while($contador <= 4)
                {
                if($contador == 1)
                    $contador_cargo = 11;
                else if($contador == 2)
                    $contador_cargo = 13;
                else if($contador == 3)
                    $contador_cargo = 16;
                else
                    $contador_cargo = 17;
                    
                $sqlstring  = "select sum(quantidade) as qtde from tb_vagas where cod_tipo = 2 and cod_cargo = " . $contador_cargo . " and cod_tipo_vaga = 2";      
                $info = $db->sql_query($sqlstring);
                $dados = mysql_fetch_array($info);    
                    
                print "<td class='centralizado negrito fonte_pequena largura_text_vagas'><input type='text' class='form-control largura_text_vagas fundo_azul_escuro' style='background-color:#fff; color:#1f2f67; border:0px solid #fff' name='total' id='total' value = " . $dados['qtde'] . " readonly></td>";
                $contador++;
                }
                print "</tr>";
                //fim totalizando as colunas de vagas
                ?>   
                <!-- fim  listagem para atualização de vagas -->
               
            </table>            
        </div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="submit" class="btn btn-primary fundo_azul_escuro">Cadastrar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal cadastro de vagas -->    
<!-- fim cadastro vagas potenciais infantil -->   
    
<!-- ************************************************************************************************************************ -->
 
    
    
    
    
    
    
    
 
    
    
    
    
    
    
    


 
<!-- inicio todos somente inscritos -->
<!-- Modal -->
<div class="modal fade" id="modalClassificacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.href='01_menu_adm.php'"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Inscritos</span> </h3>      
      </div>
      
      <div class="modal-body sem_borda">        
        
                    
          
        <div class="row">
            
            <form action="" name="pesquisa_inscrito" id="pesquisa_inscrito" class="form">
            <div class="col-sm-10">
            <input type="text" id="pesquisa_inscrito" name="pesquisa_inscrito" class="form-control largura_100" placeholder="PESQUISA POR NOME OU CARGO">                              
            </div>
            <div class="col-sm-2">
            <button class="btn btn-default fundo_azul_escuro fonte_branca sem_borda largura_40" alt="Pesquisar" title="Pesquisar" type="submit"><span class="glyphicon glyphicon-search"></span></button> 
            <button class="btn btn-default fundo_azul_escuro fonte_branca sem_borda largura_40" type="button" onclick="javascript:window.location.href='01_menu_adm.php?pesquisa_inscrito='"  alt="Exibir Todos os Registros" title="Exibir Todos os Registros" ><span class="glyphicon glyphicon-th-list"></span></button>
            </div>
            </form>
        </div>
        
          
          <br/>
          
        
        <div class="row">
            <div class="col-sm-12">
            <div class="table-responsive">
          
            <table class="table">
                
                
                
                
                <?php
                
                $pesquisa_inscrito = $_GET['pesquisa_inscrito'];

                
                if(isset($pesquisa_inscrito))
                {
                $sqlstring_cargos  = "select tb_usuario.matricula, tb_usuario.cod_usuario, tb_usuario.nome_usuario, tb_usuario.cod_cargo_classificacao, tb_cargo.cargo, tb_cargo.cod_cargo, tb_cargo.cargo, count(tb_cargo.cod_cargo) as qtde from tb_usuario ";
                $sqlstring_cargos .= "inner join tb_cargo on tb_usuario.cod_cargo_classificacao = tb_cargo.cod_cargo ";                            
                $sqlstring_cargos .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario "; 
                //$sqlstring_cargos .= "where tb_usuario.nome_usuario like '%" . $pesquisa_inscrito . "%' and tb_cargo.cargo like '%" . $pesquisa . "%'"; 
                $sqlstring_cargos .= "where (tb_usuario.nome_usuario like '%" . $pesquisa_inscrito . "%' or tb_cargo.cargo like '%" . $pesquisa_inscrito . "%') and (tb_usuario.matricula != '100200300' and tb_usuario.matricula != '400500600') " ;
                $sqlstring_cargos .= "group by tb_cargo.cod_cargo";
                $info_cargos = $db->sql_query($sqlstring_cargos); 
                }
                else
                {
                $sqlstring_cargos  = "select tb_usuario.matricula, tb_usuario.cod_usuario, tb_usuario.nome_usuario, tb_usuario.cod_cargo_classificacao, tb_cargo.cargo,  tb_cargo.cod_cargo, tb_cargo.cargo, count(tb_cargo.cod_cargo) as qtde from tb_usuario ";
                $sqlstring_cargos .= "inner join tb_cargo on tb_usuario.cod_cargo_classificacao = tb_cargo.cod_cargo ";
                $sqlstring_cargos .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario "; 
                $sqlstring_cargos .= "where (tb_usuario.matricula != 100200300 and tb_usuario.matricula != 400500600) ";
                $sqlstring_cargos .= "group by tb_cargo.cod_cargo";
                $info_cargos = $db->sql_query($sqlstring_cargos);   
                }
                                                               
                $linhas_cargos = mysql_num_rows($info_cargos);
                                     
                while($dados_cargos=mysql_fetch_array($info_cargos))
                {
                    
                ?>
                <!-- cabeçalho para exibir o cargo e quantidade de professores-->
                <tr class="fundo_azul_escuro fonte_branca">
                <td colspan="5">
                    <?php 
                    if($dados_cargos['cod_cargo_classificacao'] == 11)
                        print substr($dados_cargos['cargo'],0, 3);
                    else if($dados_cargos['cod_cargo_classificacao'] == 16)
                        print substr($dados_cargos['cargo'],0, strlen($dados_cargos['cargo'])-4);
                    else
                        print $dados_cargos['cargo']; 
                    ?>    
                </td>
                <td class="direito"><span class="badge borda_branca fundo_azul_escuro fonte_branca"> <?php print $dados_cargos['qtde'] ?> </span></td>
                </tr>
                <!-- cabeçalho da tabela -->
                <tr>                
                <th class="fonte_pequena fonte_azul_escuro largura_05">Class</th>
                <th class="fonte_pequena fonte_azul_escuro largura_05">Matr</th>
                <th class="fonte_pequena fonte_azul_escuro largura_55">Nome</th>
                <th class="fonte_pequena fonte_azul_escuro largura_15">CPF</th>
                <th class="fonte_pequena fonte_azul_escuro largura_15 esquerdo">Dt Nasc</th>
                <th class="fonte_pequena fonte_azul_escuro largura_05 direito">Pontos</th>                
                </tr>
                
                <?php                
                    
                if(isset($pesquisa_inscrito))
                {
                // seleciona todas os usuários provenientes da pesquisa
                $sqlstring_classificacao  = "select * from tb_usuario ";                   
                $sqlstring_classificacao .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
                $sqlstring_classificacao .= "inner join tb_cargo on tb_usuario.cod_cargo_classificacao = tb_cargo.cod_cargo ";
                $sqlstring_classificacao .= "where (cod_cargo_classificacao = " . $dados_cargos['cod_cargo_classificacao'] . " and nome_usuario like '%" . $pesquisa_inscrito . "%') or (cod_cargo_classificacao = " . $dados_cargos['cod_cargo_classificacao'] . " and cargo like '%" . $pesquisa_inscrito . "%') order by pontuacao desc, data_nascimento"; 
                    
                    
                 // seleciona todas os usuários 
                $sqlstring_todos  = "select * from tb_usuario "; 
                $sqlstring_todos .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
                $sqlstring_todos .= "where cod_cargo_classificacao = " .$dados_cargos['cod_cargo_classificacao'] . " order by pontuacao desc, data_nascimento";
                    
                $info_todos = $db->sql_query($sqlstring_todos);    
                ?>
               
                <?php
                }
                else
                {                    
                // seleciona todas os usuários 
                $sqlstring_classificacao  = "select * from tb_usuario ";                   
                $sqlstring_classificacao .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
                $sqlstring_classificacao .= "where cod_cargo_classificacao = " .$dados_cargos['cod_cargo_classificacao'] . " order by pontuacao desc, data_nascimento";
                }
                $info_classificacao = $db->sql_query($sqlstring_classificacao);                                                
               
                    if(isset($pesquisa_inscrito))
                    {
                    /*
                    utilizado para debug                    
                    $linhas_classificacao = mysql_num_rows($info_classificacao);                    
                    print "<h2>Tamanho Classificacao = " . sizeof($dados_classificacao) . " - Linhas Classificacao = " . $linhas_classificacao .  " - " . $linhas_todos . "</h2>";
                    */
                    
                    // todos os registros selecionados atrvés da pesquisa
                    $dados_classificacao=mysql_fetch_array($info_classificacao);
                    // quantidade de linhas de todos os registros para o cargo em questão
                    $linhas_todos = mysql_num_rows($info_todos);
                    
                    // loop para rodar a comparação com todos os registros dentro do cargo em questão
                    while($dados_todos=mysql_fetch_array($info_todos))
                    {
    
                        $contador = 1;    
                        while($contador <= $linhas_todos)
                        {

                        // executa o if quando a matrícula da listagem geral dos professores pertencentes ao cargo X =  matricula proveniente da pesquisa
                        if($dados_todos['matricula'] == $dados_classificacao['matricula'])
                        {                        
                        ?>                
                        <tr>
                        <th class="fonte_pequena"><?php print $contador ?>º</th>
                        <td class="fonte_pequena"><?php print $dados_classificacao['matricula'] ?></td>
                        <td class="fonte_pequena text-uppercase"><?php print $dados_classificacao['nome_usuario'] ?></td>    
                        <td class="fonte_pequena">
                            <?php 
                            $digitos_esquerda = substr($dados_classificacao['cpf'],0,3);
                            $digitos_meio = substr($dados_classificacao['cpf'],3,3);
                            $digitos_direita = substr($dados_classificacao['cpf'],6,3);
                            $digitos_verificadores = substr($dados_classificacao['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>
                        </td>    
                        <td class="fonte_pequena"><?php print date('d/m/Y', strtotime($dados_classificacao['data_nascimento'])) ?></td>
                        <td class="fonte_pequena direito"><?php print $dados_classificacao['pontuacao'] ?></td>
                        </tr>

                        <?php
                        // após exibir as informações referente ao registro encontrado - passa para o próximo registro da matriz de pesquisa
                        $dados_classificacao=mysql_fetch_array($info_classificacao);
                        // refaz o select para voltar no inicio do array
                        $sqlstring_todos  = "select * from tb_usuario "; 
                        $sqlstring_todos .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
                        $sqlstring_todos .= "where cod_cargo_classificacao = " .$dados_cargos['cod_cargo_classificacao'] . " order by pontuacao desc, data_nascimento";
                        $info_todos = $db->sql_query($sqlstring_todos); 
                        $dados_todos=mysql_fetch_array($info_todos);
                        // contador passa a ser zero, porém quando sai da chaves ($contador++) volta a ser 1 novemente e reinicia a classificação
                        $contador=0;
                        }
                            // só passará para o próximo reistro caso não tenha encontrado matriculas ==  no if anterior
                            if($contador != 0)
                            {
                            $dados_todos=mysql_fetch_array($info_todos);                            
                            }
                            $contador++;
                        }
                    
                    }
                }
                else
                {
                    $contador = 1;
                    while($dados_classificacao=mysql_fetch_array($info_classificacao))
                    {
                    ?>                
                    <tr>
                    <th class="fonte_pequena"><?php print $contador ?>º</th>
                    <td class="fonte_pequena"><?php print $dados_classificacao['matricula'] ?></td>
                    <td class="fonte_pequena text-uppercase"><?php print $dados_classificacao['nome_usuario'] ?></td>    
                    <td class="fonte_pequena">
                            <?php 
                            $digitos_esquerda = substr($dados_classificacao['cpf'],0,3);
                            $digitos_meio = substr($dados_classificacao['cpf'],3,3);
                            $digitos_direita = substr($dados_classificacao['cpf'],6,3);
                            $digitos_verificadores = substr($dados_classificacao['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                    </td>    
                    <td class="fonte_pequena"><?php print date('d/m/Y', strtotime($dados_classificacao['data_nascimento'])) ?></td>
                    <td class="fonte_pequena direito"><?php print $dados_classificacao['pontuacao'] ?></td>
                    </tr>

                    <?php
                    $contador++;
                    }
                }
                    ?>
                    <tr><td colspan="6">&nbsp;</td></tr>
                <?php
                }



                if($linhas_cargos == 0 )
                    print "<div class='alert alert-info margin_30' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> <spa class='negrito'>Nenhuma</span> ocorrência com a sentença <span class=negrito>" . $pesquisa_inscrito . "</span> foi encontrada!</div>";
                ?>
                
                
                
            </table>
        </div>
    </div>
</div>
          
      </div>
        
      <div class="modal-footer">             
        <button type="button" class="btn btn-primary fundo_azul_escuro" onclick="javascript:window.location.href='01_menu_adm.php'">Fechar</button>        
      </div>
    </div>
  </div>
</div>
<!-- final somente inscritos -->  
<!-- fim modal somente inscritos -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->       
<!-- inicio todos os professores-->
<!-- Modal -->
<div class="modal fade" id="modalProfessores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.href='01_menu_adm.php'"><span aria-hidden="true">&times;</span></button>               
        <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Classificação Geral Por Cargo </h3>
      </div>
      
      <div class="modal-body sem_borda">        
        
         
        <div class="row">
            
            <form action="" name="pesquisa" id="pesquisa" class="form">
            <div class="col-sm-10">
            <input type="text" id="pesquisa" name="pesquisa" class="form-control largura_100" placeholder="PESQUISA POR NOME OU CARGO">                              
            </div>
            <div class="col-sm-2">
            <button class="btn btn-default fundo_azul_escuro fonte_branca sem_borda largura_40" type="submit" alt="Pesquisar" title="Pesquisar"><span class="glyphicon glyphicon-search"></span></button> 
            <button class="btn btn-default fundo_azul_escuro fonte_branca sem_borda largura_40" type="button" onclick="javascript:window.location.href='01_menu_adm.php?pesquisa='"  alt="Exibir Todos os Registros" title="Exibir Todos os Registros"><span class="glyphicon glyphicon-th-list"></span></button>
            </div>
            </form>
        </div>
        
          
          <br/>
          
        
        <div class="row">
            <div class="col-sm-12">
            <div class="table-responsive">
          
            <table class="table">
                
                
                
                
                <?php
                
                $pesquisa = $_GET['pesquisa'];
                
                if(isset($pesquisa))
                {
                $sqlstring_cargos  = "select tb_usuario.matricula,tb_usuario.cod_usuario, tb_usuario.nome_usuario, tb_usuario.cod_cargo_classificacao, tb_cargo.cargo, tb_cargo.cod_cargo, tb_cargo.cargo, count(tb_cargo.cod_cargo) as qtde from tb_usuario ";
                $sqlstring_cargos .= "inner join tb_cargo on tb_usuario.cod_cargo_classificacao = tb_cargo.cod_cargo ";                            
                $sqlstring_cargos .= "where (tb_usuario.nome_usuario like '%" . $pesquisa . "%' or tb_cargo.cargo like '%" . $pesquisa . "%') and (tb_usuario.matricula != '100200300' and tb_usuario.matricula != '400500600') " ;      
                $sqlstring_cargos .= "group by tb_cargo.cod_cargo";
                $info_cargos = $db->sql_query($sqlstring_cargos); 
                }
                else
                {
                $sqlstring_cargos  = "select tb_usuario.matricula, tb_usuario.cod_usuario, tb_usuario.nome_usuario, tb_usuario.cod_cargo_classificacao, tb_cargo.cargo, tb_cargo.cod_cargo, tb_cargo.cargo, count(tb_cargo.cod_cargo) as qtde from tb_usuario ";
                $sqlstring_cargos .= "inner join tb_cargo on tb_usuario.cod_cargo_classificacao = tb_cargo.cod_cargo ";
                $sqlstring_cargos .= "where (tb_usuario.matricula != 100200300 and tb_usuario.matricula != 400500600) ";
                $sqlstring_cargos .= "group by tb_cargo.cod_cargo";
                $info_cargos = $db->sql_query($sqlstring_cargos);   
                }
                                                               
                $linhas_cargos = mysql_num_rows($info_cargos);
                                     
                while($dados_cargos=mysql_fetch_array($info_cargos))
                {
                ?>
                <!-- cabeçalho para exibir o cargo e quantidade de professores-->
                <tr class="fundo_azul_escuro fonte_branca">
                <td colspan="6">
                    <?php 
                    if($dados_cargos['cod_cargo_classificacao'] == 11)
                        print substr($dados_cargos['cargo'],0, 3);
                    else if($dados_cargos['cod_cargo_classificacao'] == 16)
                        print substr($dados_cargos['cargo'],0, strlen($dados_cargos['cargo'])-4);
                    else
                        print $dados_cargos['cargo'] 
                    ?>
                </td>
                <td class="direito"><span class="badge borda_branca fundo_azul_escuro fonte_branca"> <?php print $dados_cargos['qtde'] ?> </span></td>
                </tr>
                <!-- cabeçalho da tabela -->
                <tr>                
                
                <th class="fonte_pequena fonte_azul_escuro largura_05">Class</th>
                <th class="fonte_pequena fonte_azul_escuro largura_05">Matr</th>
                <th class="fonte_pequena fonte_azul_escuro largura_45">Nome</th>
                <th class="fonte_pequena fonte_azul_escuro largura_20">CPF</th>                    
                <th class="fonte_pequena fonte_azul_escuro largura_15 esquerdo">Dt Nasc</th>
                <th class="fonte_pequena fonte_azul_escuro largura_05 direito">Pontos</th>                
                <th class="fonte_pequena fonte_azul_escuro largura_05 centralizado">Alterar</th> 
                </tr>
                
                <?php                
                    
                if(isset($pesquisa))
                {
                // seleciona todas os usuários provenientes da pesquisa
                $sqlstring_classificacao  = "select tb_usuario.*, tb_cargo.cargo from tb_usuario ";      
                $sqlstring_classificacao  .= "inner join tb_cargo on tb_usuario.cod_cargo_classificacao = tb_cargo.cod_cargo ";
                $sqlstring_classificacao .= "where (cod_cargo_classificacao = " . $dados_cargos['cod_cargo_classificacao'] . " and nome_usuario like '%" . $pesquisa . "%') or (cod_cargo_classificacao = " . $dados_cargos['cod_cargo_classificacao'] . " and tb_cargo.cargo like '%" . $pesquisa . "%') and (tb_usuario.matricula != 100200300 and tb_usuario.matricula != 400500600) order by pontuacao desc, data_nascimento";      
                    
                // seleciona todas os usuários 
                $sqlstring_todos  = "select * from tb_usuario ";      
                $sqlstring_todos .= "where cod_cargo_classificacao = " .$dados_cargos['cod_cargo_classificacao'] . " and (tb_usuario.matricula != 100200300 and tb_usuario.matricula != 400500600) order by pontuacao desc, data_nascimento";
                    
                $info_todos = $db->sql_query($sqlstring_todos);                
                }
                else
                {                        
                    // seleciona todas os usuários 
                    $sqlstring_classificacao  = "select * from tb_usuario ";      
                    $sqlstring_classificacao .= "where cod_cargo_classificacao = " .$dados_cargos['cod_cargo_classificacao'] . " and (tb_usuario.matricula != 100200300 and tb_usuario.matricula != 400500600) order by pontuacao desc, data_nascimento";
                }
                    
                $info_classificacao = $db->sql_query($sqlstring_classificacao);                                                
               
               
                if(isset($pesquisa))
                {
                    /*
                    utilizado para debug                    
                    $linhas_classificacao = mysql_num_rows($info_classificacao);                    
                    print "<h2>Tamanho Classificacao = " . sizeof($dados_classificacao) . " - Linhas Classificacao = " . $linhas_classificacao .  " - " . $linhas_todos . "</h2>";
                    */
                    
                    // todos os registros selecionados atrvés da pesquisa
                    $dados_classificacao=mysql_fetch_array($info_classificacao);
                    // quantidade de linhas de todos os registros para o cargo em questão
                    $linhas_todos = mysql_num_rows($info_todos);
                    
                    // loop para rodar a comparação com todos os registros dentro do cargo em questão
                    while($dados_todos=mysql_fetch_array($info_todos))
                    {
    
                        $contador = 1;    
                        while($contador <= $linhas_todos)
                        {

                        // executa o if quando a matrícula da listagem geral dos professores pertencentes ao cargo X =  matricula proveniente da pesquisa
                        if($dados_todos['matricula'] == $dados_classificacao['matricula'])
                        {                        
                        ?>                
                        <tr>
                        <th class="fonte_pequena"><?php print $contador ?>º</th>
                        <td class="fonte_pequena"><?php print $dados_classificacao['matricula'] ?></td>
                        <td class="fonte_pequena text-uppercase"><?php print $dados_classificacao['nome_usuario'] ?></td>    
                        <td class="fonte_pequena">
                            <?php 
                            $digitos_esquerda = substr($dados_classificacao['cpf'],0,3);
                            $digitos_meio = substr($dados_classificacao['cpf'],3,3);
                            $digitos_direita = substr($dados_classificacao['cpf'],6,3);
                            $digitos_verificadores = substr($dados_classificacao['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>     
                        </td>                                
                        <td class="fonte_pequena"><?php print date('d/m/Y', strtotime($dados_classificacao['data_nascimento'])) ?></td>
                        <td class="fonte_pequena direito"><?php print $dados_classificacao['pontuacao'] ?></td>
                        <td class="fonte_pequena centralizado">
                        <a href="01_menu_adm.php?alterar_professor=<?php print $dados_classificacao['cod_usuario'] ?>">
                        <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        </td>
                        </tr>

                        <?php
                        // após exibir as informações referente ao registro encontrado - passa para o próximo registro da matriz de pesquisa
                        $dados_classificacao=mysql_fetch_array($info_classificacao);
                        // refaz o select para voltar no inicio do array
                        $sqlstring_todos  = "select * from tb_usuario ";      
                        $sqlstring_todos .= "where cod_cargo_classificacao = " .$dados_cargos['cod_cargo_classificacao'] . " and (tb_usuario.matricula != 100200300 and tb_usuario.matricula != 400500600) order by pontuacao desc, data_nascimento";
                        $info_todos = $db->sql_query($sqlstring_todos); 
                        $dados_todos=mysql_fetch_array($info_todos);
                        // contador passa a ser zero, porém quando sai da chaves ($contador++) volta a ser 1 novemente e reinicia a classificação
                        $contador=0;
                        }
                            // só passará para o próximo reistro caso não tenha encontrado matriculas ==  no if anterior
                            if($contador != 0)
                            {
                            $dados_todos=mysql_fetch_array($info_todos);                            
                            }
                            $contador++;
                        }
                    
                    }
                }
                else
                {
                    $contador = 1;
                    while($dados_classificacao=mysql_fetch_array($info_classificacao))
                    {
                    ?>                
                    <tr>
                    <th class="fonte_pequena"><?php print $contador ?>º</th>
                    <td class="fonte_pequena"><?php print $dados_classificacao['matricula'] ?></td>
                    <td class="fonte_pequena text-uppercase"><?php print $dados_classificacao['nome_usuario'] ?></td>    
                    <td class="fonte_pequena">
                            <?php 
                            $digitos_esquerda = substr($dados_classificacao['cpf'],0,3);
                            $digitos_meio = substr($dados_classificacao['cpf'],3,3);
                            $digitos_direita = substr($dados_classificacao['cpf'],6,3);
                            $digitos_verificadores = substr($dados_classificacao['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>     
                    </td> 
                    <td class="fonte_pequena"><?php print date('d/m/Y', strtotime($dados_classificacao['data_nascimento'])) ?></td>
                    <td class="fonte_pequena direito"><?php print $dados_classificacao['pontuacao'] ?></td>
                    <!-- inicio - formulário de detalhes para alteração dos dados do professor -->
                    <td class="fonte_pequena centralizado">
                        <a href="01_menu_adm.php?alterar_professor=<?php print $dados_classificacao['cod_usuario'] ?>">
                        <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <!-- fim do formulário de detalhes para alteração dos dados do professor -->
                    </tr>

                    <?php
                    $contador++;
                    }
                }
                    ?>
                    <tr><td colspan="7">&nbsp;</td></tr>
                <?php
                }



                if($linhas_cargos == 0)
                    print "<div class='alert alert-info margin_30' role='alert'> <span class='glyphicon glyphicon-exclamation-sign'></span> <spa class='negrito'>Nenhuma</span> ocorrência com a sentença <span class=negrito>" . $pesquisa . "</span> foi encontrada!</div>";
                ?>
                
                
                
            </table>
        </div>
    </div>
</div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="button" class="btn btn-primary fundo_azul_escuro" onclick="javascript:window.location.href='01_menu_adm.php'">Fechar</button>        
      </div>
    </div>
  </div>
</div>
<!-- final todos os professores -->  
<!-- fim modal todos professoress -->
<!-- ************************************************************************************************************************ -->       
    
    
    
    
    
    
    
    
        
    
    
    
    
    
    
    
    
    
    
    
    
   
    
<!-- ************************************************************************************************************************ -->   
<!-- inicio listagem de recursos -->   
    
<!-- inicio modal listagem recursos de classificacao -->
<!-- Modal -->
<div class="modal fade" id="modalRecursos" name="modalRecursos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.href='01_menu_adm.php'"><span aria-hidden="true">&times;</span></button>        
                <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Recursos </h3>        
      </div>
      
      <div class="modal-body">        
        <p>A partir da listagem de recursos é possível <span class="negrito">deferir / indeferir e justificar </span> todas as solicitações realizadas pelos professores do Ensino Fundamental e Educação Infantil:</p>   
          
        
        <?php include "includes/legenda_recursos.inc"; ?>
          
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais_infantil" id="formul_vagas_potenciais_infantil" action="01_menu_adm.php?vagas_potenciais_infantil=1" method="post">
            <table class="table">
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_recursos_classificacao  = "select tb_recurso.*, tb_usuario.matricula, tb_usuario.nome_usuario, tb_usuario.cpf, tb_status.*, tb_cargo.cargo from tb_recurso ";                
                $sqlstring_recursos_classificacao .= "inner join tb_usuario on tb_usuario.cod_usuario = tb_recurso.cod_usuario ";                
                $sqlstring_recursos_classificacao .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
                $sqlstring_recursos_classificacao .= "inner join tb_status on tb_status.cod_status = tb_recurso.cod_status ";
                $sqlstring_recursos_classificacao .= "where cod_tipo_recurso = 1 ";   

                $info_recursos_classificacao = $db->sql_query($sqlstring_recursos_classificacao);                                                
                ?>

                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_05">Matr</th>
                <th class="largura_45">Nome</th>
                <th class="largura_20">Cargo</th>
                <th class="largura_15">CPF</th>                
                <th class="largura_05 centralizado">Status</th>
                <th class="largura_10 centralizado">Responder</th>
                </tr>

                <?php
                while($dados_recursos_classificacao=mysql_fetch_array($info_recursos_classificacao))
                {                          
                ?>  
                
                <tr>
                <td><?php print $dados_recursos_classificacao['matricula'] ?></td>
                <td><?php print $dados_recursos_classificacao['nome_usuario'] ?></td>
                <td><?php print $dados_recursos_classificacao['cargo'] ?></td>
                <td>
                            <?php 
                            $digitos_esquerda = substr($dados_recursos_classificacao['cpf'],0,3);
                            $digitos_meio = substr($dados_recursos_classificacao['cpf'],3,3);
                            $digitos_direita = substr($dados_recursos_classificacao['cpf'],6,3);
                            $digitos_verificadores = substr($dados_recursos_classificacao['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>     
                </td>                                
                <td class="centralizado">
                    <?php 
                    if($dados_recursos_classificacao['cod_status'] == 3)
                            print "<span class='glyphicon glyphicon-thumbs-up fonte_verde'></span>";
                           
                        else if($dados_recursos_classificacao['cod_status'] == 4)
                            print "<span class='glyphicon glyphicon-thumbs-down fonte_vermelha'></span>";
                        
                        else if($dados_recursos_classificacao['cod_status'] == 5)
                            print "<span class='glyphicon glyphicon-hand-up'></span>";
                    ?>
                </td>  
                <td class="centralizado">
                    <a href="01_menu_adm.php?recurso_classificacao=<?php print $dados_recursos_classificacao['cod_recurso']; ?>" alt="Deferir/Indeferir Recursos" title="Deferir/Indeferir Recursos">
                    <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td>
                </tr>
                
                <?php
                }
                ?>
            </table>  
                
            
            <form name="formul_detalhes_recursos" id="formul_detalhes_recursos">
            
            
                
            </form>    
            
        </div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="button" class="btn btn-primary fundo_azul_escuro" onclick="javascript:window.location.href='01_menu_adm.php'">Fechar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal listagem de recursos -->
    
<!-- fim listagem de recursos -->   
    
<!-- ************************************************************************************************************************ -->
 
    
    
    
    
   
    
    
   
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->    
<!-- inicio detalhes recursos classificacao -->   
    

<?php

    $recurso_classificacao = $_GET['recurso_classificacao'];
    // inicio listagem de recursos de classificação
    if(isset($_GET['recurso_classificacao']))
    {      
            
    $sqlstring_recursos_classificacao_detalhes  = "select tb_recurso.*, tb_usuario.matricula, tb_usuario.cod_usuario, tb_usuario.nome_usuario,tb_usuario.data_nascimento,tb_usuario.pontuacao,  tb_usuario.cpf, tb_status.*, tb_cargo.cargo from tb_recurso ";
    $sqlstring_recursos_classificacao_detalhes .= "inner join tb_usuario on tb_usuario.cod_usuario = tb_recurso.cod_usuario ";
    $sqlstring_recursos_classificacao_detalhes .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
    $sqlstring_recursos_classificacao_detalhes .= "inner join tb_status on tb_status.cod_status = tb_recurso.cod_status ";                     
    $sqlstring_recursos_classificacao_detalhes .= "where cod_recurso =  " . $recurso_classificacao;                     
        
    $info_recursos_classificacao_detalhes = $db->sql_query($sqlstring_recursos_classificacao_detalhes);    
    
    $dados_recursos_classificacao_detalhes = mysql_fetch_array($info_recursos_classificacao_detalhes);
        
    $_SESSION['cod_detalhe_recurso_classificacao'] = $dados_recursos_classificacao_detalhes['cod_recurso'];
    }           
    ?>
    

    <!-- Modal -->
    <div class="modal fade" id="modalDetalhes_Recursos" name="modalDetalhes_Recursos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">

          <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Detalhes <span class="negrito">Recurso Classificação</span></h3>            
          </div>

          <div class="modal-body">
              
                <table class="table table-responsive">
              
                <tr class="fundo_azul_escuro fonte_branca">
                <th  class="largura_05" style="border:0px solid #000">Matr</th>    
                <th  class="largura_45" style="border:0px solid #000">Nome</th>    
                <th  class="largura_20" style="border:0px solid #000">Cargo</th> 
                <th  class="largura_15" style="border:0px solid #000">CPF</th> 
                <th  class="largura_05" style="border:0px solid #000">Dt Nasc</th>    
                <th  class="largura_10 centralizado" style="border:0px solid #000">Pontuação</th>    
                </tr>
                    
                <tr>
                <td><?php print $dados_recursos_classificacao_detalhes['matricula'] ?></td>
                <td><?php print $dados_recursos_classificacao_detalhes['nome_usuario'] ?></td>
                <td><?php print $dados_recursos_classificacao_detalhes['cargo'] ?></td>
                <td>
                            <?php 
                            $digitos_esquerda = substr($dados_recursos_classificacao_detalhes['cpf'],0,3);
                            $digitos_meio = substr($dados_recursos_classificacao_detalhes['cpf'],3,3);
                            $digitos_direita = substr($dados_recursos_classificacao_detalhes['cpf'],6,3);
                            $digitos_verificadores = substr($dados_recursos_classificacao_detalhes['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>     
                </td>
                <td><?php print date('d/m/Y', strtotime($dados_recursos_classificacao_detalhes['data_nascimento'])) ?></td>
                <td class="centralizado"><?php print $dados_recursos_classificacao_detalhes['pontuacao'] ?></td>
                </tr>
                
                <form method="post" name="formul_detalhes_recursos" id="formul_detalhes_recursos" action="01_menu_adm.php?atualizacao_recurso_classificacao=1">                            
                <tr>
                <td colspan="6"  style="border:0px solid #000">
                    <span class="negrito">Recurso</span> 
                    <br/>
                    <span class="fonte_pequena"><?php print $dados_recursos_classificacao_detalhes['recurso'];?> </span>
                    <br/><br/>
                    
                      <div class="row">
                        <div class="col-md-6 negrito">Responder</div> 
                        <div class="col-md-6 direito">
                            
                            <?php 
                            if($dados_recursos_classificacao_detalhes['cod_status'] == 5)
                            {
                            ?>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="5" checked onclick="preencher_recurso('5')">
                                Recurso Em Análise
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="3" onclick="preencher_recurso('3')">
                                Deferido
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="4" onclick="preencher_recurso('4')">
                                Indeferido
                            </label>
                            <?php
                            }
                            ?>
                            
                            <?php 
                            if($dados_recursos_classificacao_detalhes['cod_status'] == 4)
                            {
                            ?>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="5" onclick="preencher_recurso('5')">
                                Recurso Em Análise
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="3" onclick="preencher_recurso('3')">
                                Deferido
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="4" checked onclick="preencher_recurso('4')">
                                Indeferido
                            </label>
                            <?php
                            }
                            ?>
                            
                            <?php 
                            if($dados_recursos_classificacao_detalhes['cod_status'] == 3)
                            {
                            ?>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="5" onclick="preencher_recurso('5')">
                                Recurso Em Análise
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="3" checked onclick="preencher_recurso('3')">
                                Deferido
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind" id="def_ind" value="4" onclick="preencher_recurso('4')">
                                Indeferido
                            </label>
                            <?php
                            }
                            ?>    
                            
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <textarea class="form-control" rows="7" name="justificativa" id="justificativa"><?php print $dados_recursos_classificacao_detalhes['justificativa']; ?></textarea>
                      </div>   
                      <br/>                      
                </td>
                </tr>
                    
                <tr>
                <td class="direito" colspan="6" style="border:0px solid #000">                    
                    <button type="submit"  class="btn btn-primary fundo_azul_escuro">Publicar</button>
                       
                </td>
                </tr>
                </form> 
                    
                </table>
                
          </div>
          </form>
        </div>
      </div>
    </div>
    
    
    


<!-- fim detalhes recursos classificacao -->   
<!-- ************************************************************************************************************************ -->        
    
    
  





















<!-- ************************************************************************************************************************ -->    
<!-- inicio recursos classificacao -->   
<?php

    $atualizacao_recurso_classificacao = $_GET['atualizacao_recurso_classificacao'];
    // inicio listagem de recursos de classificação
    if(isset($_GET['atualizacao_recurso_classificacao']))
    {  
    // recuperando as informações do detalhe do recurso de classificacao - deferido/indeferido E justificativa
    $def_indef = $_POST['def_ind'];
    $justificativa = $_POST['justificativa'];        
    
    $sqlstring = "update tb_recurso set cod_status = " . $def_indef . ", justificativa = '" . $justificativa . "', cod_usuario_adm = " . $_SESSION['cod_usuario'] . " where cod_recurso = " . $_SESSION['cod_detalhe_recurso_classificacao'] . " and cod_tipo_recurso = 1";
    $db->sql_query($sqlstring);
      
        
        
        
    $sqlstring_email  = "select tb_usuario.cod_usuario, tb_usuario.matricula, tb_usuario.nome_usuario, tb_usuario.cpf, tb_usuario.pontuacao, tb_escola.escola, tb_recurso.cod_recurso, tb_recurso.recurso, tb_recurso.justificativa, tb_status.descricao_status,tb_usuario.email, tb_cargo.cargo from tb_usuario ";
$sqlstring_email .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
$sqlstring_email .= "inner join tb_escola on tb_usuario.cod_escola = tb_escola.cod_escola ";
$sqlstring_email .= "inner join tb_recurso on tb_recurso.cod_usuario = tb_usuario.cod_usuario ";
$sqlstring_email .= "inner join tb_status on tb_status.cod_status = tb_usuario.cod_status ";
$sqlstring_email .= "where tb_recurso.cod_tipo_recurso=1 and tb_recurso.cod_recurso = " . $_SESSION['cod_detalhe_recurso_classificacao'];

$info_email = $db->sql_query($sqlstring_email);
$dados_email = mysql_fetch_array($info_email);
        

//Envia e-mail
$mail->CharSet = 'UTF-8';
$linha = "\n";
$rementente_email   = "remocao@educasaoroque.sp.gov.br";
$remetente_nome     = "Departamento de Educa&ccedil;&atilde;o";
$destinatario_email = $dados_email['email'].";remocao@educasaoroque.sp.gov.br";
$destinatario_cc    = "remocao@educasaoroque.sp.gov.br";
$assunto            = "Concurso de Remoção - Resultado Recurso de Classificação";
$assunto            = '=?UTF-8?B?'.base64_encode($assunto).'?=';
$mensagem           = "<span style='font-family:arial'><small>Mensagem automatica enviada pela plataforma de remo&ccedil;&atilde;o sisinfo, n&atilde;o responda esse e-mail</small></span>";
	
	$msg_html = "
	<table border='0'><tr><td><img src='http://remocao.educasaoroque.sp.gov.br/img/logo_email.jpg'></td></tr></table>
	
    <table>
        <tr>
        <td colspan='2'> Confira o resultado do seu recurso de classificação:</td>        
        </tr>
        
        <tr>
        <td colspan='2'> &nbsp;</td>        
        </tr>
    
        <tr>
        <td style='text-align:right; font-weight:bold' width='20%'>Matr&iacute;cula:</td>
        <td class='esquerdo'>" .  $dados_email['matricula'] . "</td>
        </tr>
        
        <tr>
        <td style='text-align:right; font-weight:bold'>Nome:</td>
        <td style='text-transform:uppercase'>" .  $dados_email['nome_usuario'] . "</td>
        </tr>
        
        
        <tr>
        <td style='text-align:right; font-weight:bold'>CPF:</td>
        <td class='esquerdo'>" .  $dados_email['cpf'] . "</td>
        </tr>
        
        <tr>
        <td style='text-align:right; font-weight:bold'>Pontuação:</td>
        <td class='esquerdo'>" .  $dados_email['pontuacao'] . "</td>
        </tr>       
        
        <tr>
        <td style='text-align:right; font-weight:bold'>Cargo:</td>
        <td class='esquerdo'>" .  $dados_email['cargo'] . "</td>
        </tr>
        
        <tr>
        <td> &nbsp; </td>
        </tr>
        
        <tr>
        <td style='font-weight:bold'>Recurso:</td>
        </tr>
        
        <tr>
        <td colspan='2'>" . $dados_email['recurso'] ."</td>
        </tr>
        
        <tr>
        <td> &nbsp; </td>
        </tr>
        
        <tr>
        <td style='font-weight:bold'>Justificativa:</td>
        </tr>
        
        <tr>
        <td colspan=2> " . $justificativa ."</td>
        </tr>
        
    </table>
	
	<br><br>
	
	<table class=fonte border=0 style='font-family:arial'>
	<tr>
		<td rowspan=3>
			<img src='http://remocao.educasaoroque.sp.gov.br/img/logo_sao_roque.jpg'>
		</td>
		<td><strong>Departamento de Educa&ccedil;&atilde;o</strong></td>
	</tr>
	<tr>
		<td><small>Prefeitura da Est&acirc;ncia Tur&iacute;stica de S&atilde;o Roque</small></td>
	</tr>
	<tr>
		<td><small>www.saoroque.sp.gov.br  <br><small>(11)4784-3073 | (11)4712-9624 | (11)4712-8177 | (11)4712-8577</small></small></td>
	</tr>

	<tr>
		<td colspan=2><small><small><span class=verde><strong>ANTES DE IMPRIMIR, PENSE NO MEIO AMBIENTE.</strong></span>  
		<span class=cinza>Aviso Legal:  Esta mensagem da Prefeitura da 
		Est&acirc;ncia Tur&iacute;stica de S&atilde;o Roque, incluindo 
		seus anexos, &eacute; destinada exclusivamente para a(s) pessoa(s) a 
		quem &eacute; dirigida, podendo conter informa&ccedil;&atilde;o confidencial e/ou privilegiada. 
		Se voc&ecirc; n&atilde;o for destinat&aacute;rio desta mensagem, desde j&aacute; fica notificado de 
		abster-se a divulgar, copiar, distribuir, examinar ou, de qualquer forma, 
		utilizar a informa&ccedil;&atilde;o, por ser ilegal, sujeitando o infrator as penas da lei.  
		Os e-mails  desta Prefeitura tem seu uso limitado exclusivamente para o trabalho, 
		caso voc&ecirc; receba algum e-mail que infrinja essa determina&ccedil;&atilde;o favor encaminh&aacute;-lo para 
		informatica@saoroque.sp.gov.br</span>
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
        
        
        
        
    //Insere valores na tb_notificacao
        /*
	$sqlstring_notificacao = "insert into tb_notificacao (notificacao,titulo,cod_usuario,data_notificacao,tipo) 
	values ('O resultado do recurso está disponível.','Recurso de Classificação','".$dados_email['cod_usuario'] ."','" . date('Y/m/d') . "',5)";
	$db->string_query($sqlstring_notificacao);	
        */
    }           
    ?>
    

    <!-- Modal -->
    <div class="modal fade" id="modalSucesso_Atualizacao_Classificacao" name="modalSucesso_Atualizacao_Classificacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">

          <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Resposta Recurso</h3>            
          </div>

          <div class="modal-body">
            
              <div class="row">
              <div class="col-md-9">
              <br/>
                <?php 
                    if($def_indef == 3) $mensagem_def_indef = "foi deferido";
                    if($def_indef == 4) $mensagem_def_indef = "foi indeferido";
                    if($def_indef == 5) $mensagem_def_indef = "está em análise";

                    print "O recurso <span class='negrito'>" . $mensagem_def_indef . "</span>!<br/><br/>";
                    
                    if($def_indef != 5)
                        print "<span class='negrito'>Justificativas: </span><br/><span class='justificado'>" . nl2br($justificativa) . "</span>";
                
                ?>
               </div> 
              
              <div class="col-md-3">
                <img src="img/icone_sucesso_cadastro.png" width="150" alt="O recurso foi respondido com sucesso" title="O recurso foi respondido com sucesso" class="img-responsive margin_auto">
              </div>
          </div>
        </div>
            
          <div class="modal-footer">                
                <button type="button" class="btn btn-primary fundo_azul_escuro"onclick="javascript:window.location.href='01_menu_adm.php'"> Fechar </button>        
          </div>
          </form>
        </div>
      </div>
    </div>
    
    
    


<!-- fim sucesso recursos classificacao -->   
<!-- ************************************************************************************************************************ -->  











    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->   
<!-- inicio listagem de recursos finais-->   
    
<!-- inicio modal listagem recursos finais -->
<!-- Modal -->
<div class="modal fade" id="modalRecursos_Final" name="modalRecursos_Final" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content fonte_azul_escuro">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.href='01_menu_adm.php'"><span aria-hidden="true">&times;</span></button>        
                <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-edit fonte_pequena"></span> Recursos <span class="negrito">Finais</span></h3>        
      </div>
      
      <div class="modal-body">        
        <p>A partir da listagem de recursos é possível <span class="negrito">deferir / indeferir e justificar </span> todas as solicitações realizadas pelos professores do Ensino Fundamental e Educação Infantil:</p>   
          
        
        <?php include "includes/legenda_recursos.inc"; ?>
          
        <div class="table-responsive">
            
            <form name="formul_vagas_iniciais_infantil" id="formul_vagas_potenciais_infantil" action="01_menu_adm.php?vagas_potenciais_infantil=1" method="post">
            <table class="table">
                
                <!-- inicio listagem para atualização de vagas -->
                <?php                                 
                $sqlstring_recursos_resultado_final  = "select tb_recurso.*, tb_usuario.matricula, tb_usuario.nome_usuario, tb_usuario.cpf, tb_status.*, tb_cargo.cargo from tb_recurso ";
                $sqlstring_recursos_resultado_final .= "inner join tb_usuario on tb_usuario.cod_usuario = tb_recurso.cod_usuario ";                
                $sqlstring_recursos_resultado_final .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
                $sqlstring_recursos_resultado_final .= "inner join tb_status on tb_status.cod_status = tb_recurso.cod_status "; 
                $sqlstring_recursos_resultado_final .= "where cod_tipo_recurso = 2";

                $info_recursos_resultado_final = $db->sql_query($sqlstring_recursos_resultado_final);                                                
                ?>

                <tr class="fundo_azul_escuro fonte_branca">
                <th class="largura_05">Matr</th>
                <th class="largura_45">Nome</th>
                <th class="largura_20">Cargo</th>
                <th class="largura_15">CPF</th>                
                <th class="largura_05 centralizado">Status</th>
                <th class="largura_10">Responder</th>
                </tr>

                <?php
                while($dados_recursos_resultado_final=mysql_fetch_array($info_recursos_resultado_final))
                {                          
                ?>  
                
                <tr>
                <td><?php print $dados_recursos_resultado_final['matricula'] ?></td>
                <td><?php print $dados_recursos_resultado_final['nome_usuario'] ?></td>
                <td><?php print $dados_recursos_resultado_final['cargo'] ?></td>
                <td>
                            <?php 
                            $digitos_esquerda = substr($dados_recursos_resultado_final['cpf'],0,3);
                            $digitos_meio = substr($dados_recursos_resultado_final['cpf'],3,3);
                            $digitos_direita = substr($dados_recursos_resultado_final['cpf'],6,3);
                            $digitos_verificadores = substr($dados_recursos_resultado_final['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                </td>                                
                <td class="centralizado">
                    <?php 
                    if($dados_recursos_resultado_final['cod_status'] == 3)
                            print "<span class='glyphicon glyphicon-thumbs-up fonte_verde'></span>";
                           
                        else if($dados_recursos_resultado_final['cod_status'] == 4)
                            print "<span class='glyphicon glyphicon-thumbs-down fonte_vermelha'></span>";
                        
                        else if($dados_recursos_resultado_final['cod_status'] == 5)
                            print "<span class='glyphicon glyphicon-hand-up'></span>";
                    ?>
                </td>  
                <td class="centralizado">
                    <a href="01_menu_adm.php?recurso_resultado_final=<?php print $dados_recursos_resultado_final['cod_recurso']; ?>" alt="Deferir/Indeferir Recursos" title="Deferir/Indeferir Recursos">
                    <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td>
                </tr>
                
                <?php
                }
                ?>
            </table>  
                
            
            <form name="formul_detalhes_recursos" id="formul_detalhes_recursos">
            
            
                
            </form>    
            
        </div>
          
      </div>
        
      <div class="modal-footer">                
        <button type="button" class="btn btn-primary fundo_azul_escuro" onclick="javascript:window.location.href='01_menu_adm.php'">Fechar</button>        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- fim modal listagem de recursos finais -->
    
<!-- fim listagem de recursos finais -->   
    
<!-- ************************************************************************************************************************ -->
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- ************************************************************************************************************************ -->    
<!-- inicio detalhes recursos finais -->   
    

<?php

    $recurso_resultado_final = $_GET['recurso_resultado_final'];
    // inicio listagem de recursos de classificação
    if(isset($_GET['recurso_resultado_final']))
    {      
            
    $sqlstring_recursos_finais_detalhes  = "select tb_recurso.*, tb_usuario.matricula, tb_usuario.cod_usuario, tb_usuario.nome_usuario,tb_usuario.data_nascimento,tb_usuario.pontuacao,  tb_usuario.cpf, tb_status.*, tb_cargo.cargo from tb_recurso ";
    $sqlstring_recursos_finais_detalhes .= "inner join tb_usuario on tb_usuario.cod_usuario = tb_recurso.cod_usuario ";
    $sqlstring_recursos_finais_detalhes .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
    $sqlstring_recursos_finais_detalhes .= "inner join tb_status on tb_status.cod_status = tb_recurso.cod_status ";                     
    $sqlstring_recursos_finais_detalhes .= "where cod_recurso =  " . $recurso_resultado_final;                     
        
    $info_recursos_finais_detalhes = $db->sql_query($sqlstring_recursos_finais_detalhes);    
    
    $dados_recursos_finais_detalhes = mysql_fetch_array($info_recursos_finais_detalhes);
        
    $_SESSION['cod_detalhe_resultado_final'] = $dados_recursos_finais_detalhes['cod_recurso'];
    }           
    ?>
    

    <!-- Modal -->
    <div class="modal fade" id="modalRecursos_Final_Detalhes" name="modalRecursos_Final_Detalhes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">

          <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Detalhes <span class="negrito">Recurso Final</span></h3>            
          </div>

          <div class="modal-body">
              
                <table class="table table-responsive">
              
                <tr class="fundo_azul_escuro fonte_branca">
                <th  class="largura_05" style="border:0px solid #000">Matr</th>    
                <th  class="largura_45" style="border:0px solid #000">Nome</th>    
                <th  class="largura_20" style="border:0px solid #000">Cargo</th>
                <th  class="largura_15" style="border:0px solid #000">CPF</th> 
                <th  class="largura_05" style="border:0px solid #000">Dt Nasc</th>    
                <th  class="largura_10 centralizado" style="border:0px solid #000">Pontuação</th>    
                </tr>
                    
                <tr>
                <td><?php print $dados_recursos_finais_detalhes['matricula'] ?></td>
                <td><?php print $dados_recursos_finais_detalhes['nome_usuario'] ?></td>
                <td><?php print $dados_recursos_finais_detalhes['cargo'] ?></td>
                <td>
                            <?php 
                            $digitos_esquerda = substr($dados_recursos_finais_detalhes['cpf'],0,3);
                            $digitos_meio = substr($dados_recursos_finais_detalhes['cpf'],3,3);
                            $digitos_direita = substr($dados_recursos_finais_detalhes['cpf'],6,3);
                            $digitos_verificadores = substr($dados_recursos_finais_detalhes['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                </td>
                <td><?php print date('d/m/Y', strtotime($dados_recursos_finais_detalhes['data_nascimento'])) ?></td>
                <td class="centralizado"><?php print $dados_recursos_finais_detalhes['pontuacao'] ?></td>
                </tr>
                
                <form method="post" name="formul_detalhes_recursos_finais" id="formul_detalhes_recursos_finais" action="01_menu_adm.php?atualizacao_recurso_final=1">                            
                <tr>
                <td colspan="6"  style="border:0px solid #000">
                    <span class="negrito">Recurso</span> 
                    <br/>
                    <span class="fonte_pequena"><?php print $dados_recursos_finais_detalhes['recurso']; ?></span>
                    <br/><br/>
                    
                      <div class="row">
                        <div class="col-md-6 negrito">Responder</div> 
                        <div class="col-md-6 direito">
                            
                            <?php 
                            if($dados_recursos_finais_detalhes['cod_status'] == 5)
                            {
                            ?>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="5" checked onclick="preencher_recurso_final('5')">
                                Recurso Em Análise
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="3" onclick="preencher_recurso_final('3')">
                                Deferido
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="4" onclick="preencher_recurso_final('4')">
                                Indeferido
                            </label>
                            <?php
                            }
                            ?>
                            
                            <?php 
                            if($dados_recursos_finais_detalhes['cod_status'] == 4)
                            {
                            ?>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="5" onclick="preencher_recurso_final('5')">
                                Recurso Em Análise
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="3" onclick="preencher_recurso_final('3')">
                                Deferido
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="4" checked onclick="preencher_recurso_final('4')">
                                Indeferido
                            </label>
                            <?php
                            }
                            ?>
                            
                            <?php 
                            if($dados_recursos_finais_detalhes['cod_status'] == 3)
                            {
                            ?>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="5" onclick="preencher_recurso_final('5')">
                                Recurso Em Análise
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="3" checked onclick="preencher_recurso_final('3')">
                                Deferido
                            </label>
                            <label class="radio-inline direito">
                                <input type="radio" name="def_ind_final" id="def_ind_final" value="4" onclick="preencher_recurso_final('4')">
                                Indeferido
                            </label>
                            <?php
                            }
                            ?>    
                            
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <textarea class="form-control" rows="7" name="justificativa_final" id="justificativa_final"><?php print $dados_recursos_finais_detalhes['justificativa']; ?></textarea>
                      </div>   
                      <br/>                      
                </td>
                </tr>
                    
                <tr>
                <td class="direito" colspan="6" style="border:0px solid #000">
                    <button type="submit"  class="btn btn-primary fundo_azul_escuro">Publicar</button>
                       
                </td>
                </tr>
                </form> 
                    
                </table>
                
          </div>
          </form>
        </div>
      </div>
    </div>
    
    
    


<!-- fim detalhes recursos finais -->   
<!-- ************************************************************************************************************************ --> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    











<!-- ************************************************************************************************************************ -->    
<!-- inicio recursos finais -->   
    

<?php

    $atualizacao_recurso_final = $_GET['atualizacao_recurso_final'];
    // inicio listagem de recursos de classificação
    if(isset($_GET['atualizacao_recurso_final']))
    {  
    // recuperando as informações do detalhe do recurso de classificacao - deferido/indeferido E justificativa
    $def_indef_final = $_POST['def_ind_final'];
    $justificativa_final = $_POST['justificativa_final'];        
    
    $sqlstring = "update tb_recurso set cod_status = " . $def_indef_final . ", justificativa = '" . $justificativa_final . "', cod_usuario_adm = " . $_SESSION['cod_usuario'] . " where cod_recurso = " . $_SESSION['cod_detalhe_resultado_final'] . " and cod_tipo_recurso = 2";
    $db->sql_query($sqlstring);
        
      // ---  
    $sqlstring_email_final  = "select tb_usuario.cod_usuario, tb_usuario.matricula, tb_usuario.nome_usuario, tb_usuario.cpf, tb_usuario.pontuacao, tb_escola.escola, tb_recurso.recurso, tb_recurso.justificativa, tb_status.descricao_status,tb_usuario.email, tb_cargo.cargo from tb_usuario ";
    $sqlstring_email_final .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
    $sqlstring_email_final .= "inner join tb_escola on tb_usuario.cod_escola = tb_escola.cod_escola ";
    $sqlstring_email_final .= "inner join tb_recurso on tb_recurso.cod_usuario = tb_usuario.cod_usuario ";
    $sqlstring_email_final .= "inner join tb_status on tb_status.cod_status = tb_usuario.cod_status ";
    $sqlstring_email_final .= "where tb_recurso.cod_tipo_recurso=1";

    $info_email_final = $db->sql_query($sqlstring_email_final);
    $dados_email_final = mysql_fetch_array($info_email_final);
        

//Envia e-mail
$mail->CharSet = 'UTF-8';
$linha = "\n";
$rementente_email   = "remocao@educasaoroque.sp.gov.br";
$remetente_nome     = "Departamento de Educa&ccedil;&atilde;o";
$destinatario_email = $dados_email_final['email'];
$destinatario_cc    = "remocao@educasaoroque.sp.gov.br";
$assunto            = "Concurso de Remoção - Resultado Recurso de Classificação";
$assunto            = '=?UTF-8?B?'.base64_encode($assunto).'?=';
$mensagem           = "<span style='font-family:arial'><small>Mensagem automatica enviada pela plataforma de remo&ccedil;&atilde;o sisinfo, n&atilde;o responda esse e-mail</small></span>";
	
	$msg_html = "
	<table border='0'><tr><td><img src='http://remocao.educasaoroque.sp.gov.br/img/logo_email.jpg'></td></tr></table>
	
    <table>
        <tr>
        <td colspan='2'> Confira o resultado do seu recurso final:</td>        
        </tr>
        
        <tr>
        <td colspan='2'> &nbsp;</td>        
        </tr>
    
        <tr>
        <td style='text-align:right; font-weight:bold' width='20%'>Matr&iacute;cula:</td>
        <td class='esquerdo'>" .  $dados_email_final['matricula'] . "</td>
        </tr>
        
        <tr>
        <td style='text-align:right; font-weight:bold'>Nome:</td>
        <td style='text-transform:uppercase'>" .  $dados_email_final['nome_usuario'] . "</td>
        </tr>
        
        
        <tr>
        <td style='text-align:right; font-weight:bold'>CPF:</td>
        <td class='esquerdo'>" .  $dados_email_final['cpf'] . "</td>
        </tr>
        
        <tr>
        <td style='text-align:right; font-weight:bold'>Pontuação:</td>
        <td class='esquerdo'>" .  $dados_email_final['pontuacao'] . "</td>
        </tr>       
        
        <tr>
        <td style='text-align:right; font-weight:bold'>Cargo:</td>
        <td class='esquerdo'>" .  $dados_email_final['cargo'] . "</td>
        </tr>
        
        <tr>
        <td> &nbsp; </td>
        </tr>
        
        <tr>
        <td style='font-weight:bold'>Recurso:</td>
        </tr>
        
        <tr>
        <td colspan='2'>" . $dados_email_final['recurso'] ."</td>
        </tr>
        
        <tr>
        <td> &nbsp; </td>
        </tr>
        
        <tr>
        <td style='font-weight:bold'>Justificativa:</td>
        </tr>
        
        <tr>
        <td colspan=2> " . $justificativa_final ."</td>
        </tr>
        
    </table>
	
	<br><br>
	
	<table class=fonte border=0 style='font-family:arial'>
	<tr>
		<td rowspan=3>
			<img src='http://remocao.educasaoroque.sp.gov.br/img/logo_sao_roque.jpg'>
		</td>
		<td><strong>Departamento de Educa&ccedil;&atilde;o</strong></td>
	</tr>
	<tr>
		<td><small>Prefeitura da Est&acirc;ncia Tur&iacute;stica de S&atilde;o Roque</small></td>
	</tr>
	<tr>
		<td><small>www.saoroque.sp.gov.br  <br><small>(11)4784-3073 | (11)4712-9624 | (11)4712-8177 | (11)4712-8577</small></small></td>
	</tr>

	<tr>
		<td colspan=2><small><small><span class=verde><strong>ANTES DE IMPRIMIR, PENSE NO MEIO AMBIENTE.</strong></span>  
		<span class=cinza>Aviso Legal:  Esta mensagem da Prefeitura da 
		Est&acirc;ncia Tur&iacute;stica de S&atilde;o Roque, incluindo 
		seus anexos, &eacute; destinada exclusivamente para a(s) pessoa(s) a 
		quem &eacute; dirigida, podendo conter informa&ccedil;&atilde;o confidencial e/ou privilegiada. 
		Se voc&ecirc; n&atilde;o for destinat&aacute;rio desta mensagem, desde j&aacute; fica notificado de 
		abster-se a divulgar, copiar, distribuir, examinar ou, de qualquer forma, 
		utilizar a informa&ccedil;&atilde;o, por ser ilegal, sujeitando o infrator as penas da lei.  
		Os e-mails  desta Prefeitura tem seu uso limitado exclusivamente para o trabalho, 
		caso voc&ecirc; receba algum e-mail que infrinja essa determina&ccedil;&atilde;o favor encaminh&aacute;-lo para 
		informatica@saoroque.sp.gov.br</span>
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
        
        
        
        
    //Insere valores na tb_notificacao
	$sqlstring_notificacao_final = "insert into tb_notificacao (notificacao,titulo,cod_usuario,data_notificacao,tipo) 
	values ('O resultado do recurso final está disponível.','Recurso Final','".$dados_email_final['cod_usuario'] ."','" . date('Y/m/d') . "',5)";
	$db->string_query($sqlstring_notificacao_final);
        
        // -----------
        
    }           
    ?>
    

    <!-- Modal -->
    <div class="modal fade" id="modalSucesso_Atualizacao_Final" name="modalSucesso_Atualizacao_Final" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">

          <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Resposta <span class="negrito">Recurso Final</span></h3>            
          </div>

          <div class="modal-body">
               
            <div class="row">
                <div class="col-md-9">                
                <?php 
                    if($def_indef_final == 3) $mensagem_def_indef_final = "foi deferido";
                    if($def_indef_final == 4) $mensagem_def_indef_final = "foi indeferido";
                    if($def_indef_final == 5) $mensagem_def_indef_final = "está em análise";

                    print "O recurso <span class='negrito'>" . $mensagem_def_indef_final . "</span>!<br/><br/>";
                    
                    if($def_indef_final != 5)
                        print "<span class='negrito'>Justificativas: </span><br/><span class='justificado'>" . nl2br($justificativa_final) . "</span>";
                
                ?>
                  </div>
                
              <div class="col-md-3">
                <img src="img/icone_sucesso_cadastro.png" width="150" alt="O recurso foi respondido com sucesso" title="O recurso foi respondido com sucesso" class="img-responsive margin_auto">
              </div>                
            </div>
                
          </div>
            
          <div class="modal-footer">                
                <button type="button" class="btn btn-primary fundo_azul_escuro"onclick="javascript:window.location.href='01_menu_adm.php'"> Fechar </button>        
          </div>
          </form>
        </div>
      </div>
    </div>
    
    
    


<!-- fim sucesso recursos finais -->   
<!-- ************************************************************************************************************************ -->  
    
    
    
    
    
    
    
    
    
    
    
    




    
    
    
  




    
<!-- ************************************************************************************************************************ -->  
<!-- inicio listagem de indicações -->   
    
  <div class="modal fade" id="modalIndicacoes" name="modalIndicacoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">
             
            <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Indicações <span class="negrito">Professores</span></h3>            
          </div>
					
            <div class="panel-body">

                Confira as indicações realizadas pelos professores. 
                
                <table class="table table-responsive">
                    
                <?php

                $sqlstring_indicacoes_inscritos_cargo  = "select tb_usuario.cod_usuario, tb_usuario.nome_usuario, tb_cargo.cargo, tb_cargo.cod_cargo, count(tb_cargo.cod_cargo) as qtde from tb_usuario ";
                $sqlstring_indicacoes_inscritos_cargo .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";                            
                $sqlstring_indicacoes_inscritos_cargo .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";                    
                $sqlstring_indicacoes_inscritos_cargo .= "where indicacao_escola != '' "; 
                $sqlstring_indicacoes_inscritos_cargo .= "group by tb_cargo.cod_cargo";
                $info_indicacoes_inscritos_cargo = $db->sql_query($sqlstring_indicacoes_inscritos_cargo); 
                

                while($dados_indicacoes_inscritos_cargo=mysql_fetch_array($info_indicacoes_inscritos_cargo))
                {
                ?>
                <!-- cabeçalho para exibir o cargo e quantidade de professores-->
                <tr class="fundo_azul_escuro fonte_branca">
                <td colspan="5"><?php print $dados_indicacoes_inscritos_cargo['cargo'] ?></td>
                <td class="direito"><span class="badge borda_branca fundo_azul_escuro fonte_branca"> <?php print $dados_indicacoes_inscritos_cargo['qtde'] ?> </span></td>
                </tr>
                <!-- cabeçalho da tabela -->
                <tr>                
                <th class="fonte_pequena fonte_azul_escuro largura_05">Matr</th>
                <th class="fonte_pequena fonte_azul_escuro largura_55">Nome</th>
                <th class="fonte_pequena fonte_azul_escuro largura_15">CPF</th>
                <th class="fonte_pequena fonte_azul_escuro largura_15 esquerdo">Dt Nasc</th>
                <th class="fonte_pequena fonte_azul_escuro largura_05 direito">Pontos</th>                
                <th class="fonte_pequena fonte_azul_escuro largura_05 direito">Indica</th>
                </tr>
                
                <?php                
                    
                
                // seleciona todas os usuários provenientes da pesquisa
                $sqlstring_professores_indicacoes  = "select * from tb_usuario "; 
                $sqlstring_professores_indicacoes .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
                $sqlstring_professores_indicacoes .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
                $sqlstring_professores_indicacoes .= "where indicacao_escola != '' and tb_cargo.cod_cargo = " . $dados_indicacoes_inscritos_cargo['cod_cargo'];
                
                
                
                    
                $info_professores_indicacoes = $db->sql_query($sqlstring_professores_indicacoes); 
                    
                    while($dados_professores_indicacoes=mysql_fetch_array($info_professores_indicacoes))
                    {                        
                ?>
                    <tr>                
                    <td class="fonte_pequena"><?php print $dados_professores_indicacoes['matricula'] ?></td>
                    <td class="fonte_pequena text-uppercase"><?php print $dados_professores_indicacoes['nome_usuario'] ?></td>
                    <td class="fonte_pequena">
                            <?php 
                            $digitos_esquerda = substr($dados_professores_indicacoes['cpf'],0,3);
                            $digitos_meio = substr($dados_professores_indicacoes['cpf'],3,3);
                            $digitos_direita = substr($dados_professores_indicacoes['cpf'],6,3);
                            $digitos_verificadores = substr($dados_professores_indicacoes['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                    </td>
                    <td class="fonte_pequena"><?php print date('d/m/Y', strtotime($dados_professores_indicacoes['data_nascimento'])) ?></td>
                    <td class="fonte_pequena direito"><?php print $dados_professores_indicacoes['pontuacao'] ?></td>
                    <td class="fonte_pequena direito"> 
                        <a href="01_menu_adm.php?detalhes_indicacoes=<?php print $dados_professores_indicacoes['cod_inscricao']; ?>" alt="Conferir Indicações" title="Conferir Indicações">
                        <span class="glyphicon glyphicon-tags"></span>
                        </a>
                    </td>
                    </tr>
                <?php
                    }
                    ?>
                    <tr>
                    <td colspan="6">&nbsp;</td>
                    </tr>
                <?php    
                }
                ?>
                
                    
                </table>
                
            </div>
					  
					  
					  
					  
					  
					
         </div>
        </div>        
      </div>
      
    </div>
  </div>

    
<!-- fim listagem de indicações --> 
<!-- ************************************************************************************************************************ -->  
  

    
    
    
    
        
    
  



















<!-- ************************************************************************************************************************ -->  
<!-- inicio detalhes indicacoes -->  

<?php

    $detalhes_indicacoes = $_GET['detalhes_indicacoes'];
    // inicio listagem de recursos de classificação
    if(isset($_GET['detalhes_indicacoes']))
    {      
            
    $sqlstring_detalhes_indicacoes  = "select * from tb_inscricao ";
    $sqlstring_detalhes_indicacoes .= "inner join tb_usuario on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
    $sqlstring_detalhes_indicacoes .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
    $sqlstring_detalhes_indicacoes .= "where cod_inscricao =  " . $detalhes_indicacoes . " and indicacao_escola != '' ";                     
        
    $info_detalhes_indicacoes = $db->sql_query($sqlstring_detalhes_indicacoes);        
    $dados_detalhes_indicacoes = mysql_fetch_array($info_detalhes_indicacoes);
        
    $_SESSION['cod_detalhe_indicacoes'] = $dados_detalhes_indicacoes['cod_inscricao'];
    }           
    ?>
    
  <div class="modal fade" id="modalDetalhes_Indicacoes" name="modalDetalhes_Indicacoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">
             
            <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Indicações do Professor</h3>            
          </div>
					
            <div class="panel-body">
                    
                Confira as indicações realizadas. As escolas aparecem na ordem de preferência escolhida pelo professor.
                
                <table class="table table-responsive">
                    
                <table class="table table-responsive">
              
                <tr class="fundo_azul_escuro fonte_branca">
                <th  style="border:0px solid #000">Matr</th>    
                <th  style="border:0px solid #000">Nome</th>    
                <th  style="border:0px solid #000">CPF</th> 
                <th  style="border:0px solid #000">Data Nascimento</th>    
                <th  class="direito" style="border:0px solid #000">Pontuação</th>    
                </tr>
                    
                <tr>
                <td  style="border:0px solid #000"><?php print $dados_detalhes_indicacoes['matricula'] ?></td>    
                <td  style="border:0px solid #000"><?php print $dados_detalhes_indicacoes['nome_usuario'] ?></td> 
                <td  style="border:0px solid #000">
                            <?php 
                            $digitos_esquerda = substr($dados_detalhes_indicacoes['cpf'],0,3);
                            $digitos_meio = substr($dados_detalhes_indicacoes['cpf'],3,3);
                            $digitos_direita = substr($dados_detalhes_indicacoes['cpf'],6,3);
                            $digitos_verificadores = substr($dados_detalhes_indicacoes['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                </td>    
                <td  style="border:0px solid #000"><?php print  date('d/m/Y', strtotime($dados_detalhes_indicacoes['data_nascimento'])) ?></td>    
                <td  class="direito" style="border:0px solid #000"><?php print $dados_detalhes_indicacoes['pontuacao'] ?></td>    
                </tr>
                    
                <tr>
                <td colspan="5">&nbsp;</td>    
                </tr>
                
                <tr>
                <td colspan="5"  style="border:0px solid #fff"><span class="glyphicon glyphicon-tags"></span> &nbsp;Indicações para remoção referente ao cargo: <span class="negrito"><?php print $dados_detalhes_indicacoes['cargo'] ?></span></td>    
                </tr>
                  
                <!-- inicio exibicao das escolas indicadas pelo professor -->
                <tr>
                <td colspan="5" style="border:0px solid #fff">
                    <?php 
                        
                        $separacao_escolas = explode(";", $dados_detalhes_indicacoes['indicacao_escola']);                        
                        $tamanho_separacao_escolas = sizeof($separacao_escolas);
                        
                        $contador_separacao_escolas = 0;
                        while($contador_separacao_escolas < $tamanho_separacao_escolas-1)
                        {                        
                        $sqlstring_escola_indicada  = "select * from tb_escola ";                        
                        $sqlstring_escola_indicada .= "where cod_escola =  " . $separacao_escolas[$contador_separacao_escolas];

                        $info_escola_indicada=$db->sql_query($sqlstring_escola_indicada);
                        $dados_escola_indicada=mysql_fetch_array($info_escola_indicada);
                          
                            if($contador_separacao_escolas < 9)
                            { 
                                print "0" . $contador_separacao_escolas + 1 . " - " . $dados_escola_indicada['escola'];
                            }
                            else
                            {
                                print $contador_separacao_escolas + 1 . " - " . $dados_escola_indicada['escola'];
                            }
                            
                        print "<br/>";
                            
                        $contador_separacao_escolas++;
                        }
                    ?>
                </td>    
                </tr>
                <!-- fim exibicao das escolas indicadas pelo professor -->
                    
                </table>
                
            </div>
				
            <div class="modal-footer">                
                <button type="button" class="btn btn-primary fundo_azul_escuro"onclick="javascript:window.location.href='01_menu_adm.php'"> Fechar </button>        
          </div>
					  
					  
					  
					  
					
         </div>
        </div>        
      </div>
      
    </div>
  </div>

    
<!-- fim detalhes indicacoes --> 
<!-- ************************************************************************************************************************ -->  































   
<!-- ************************************************************************************************************************ -->  
<!-- inicio listagem de remocoes -->   
    
  <div class="modal fade" id="modalRemocoes" name="modalRemocoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">
             
            <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Remoções <span class="negrito">Professores</span></h3>            
          </div>
					
            <div class="panel-body">

                Realize as remoções dos professores. 
                
                <table class="table table-responsive">
                    
                <?php

                $sqlstring_lista_remocoes_cargo  = "select tb_usuario.cod_usuario, tb_usuario.nome_usuario, tb_cargo.cargo, tb_cargo.cod_cargo, count(tb_cargo.cod_cargo) as qtde from tb_usuario ";
                $sqlstring_lista_remocoes_cargo .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";                            
                $sqlstring_lista_remocoes_cargo .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";                    
                $sqlstring_lista_remocoes_cargo .= "where indicacao_escola != '' "; 
                $sqlstring_lista_remocoes_cargo .= "group by tb_cargo.cod_cargo";
                $info_lista_remocoes_cargo = $db->sql_query($sqlstring_lista_remocoes_cargo); 
                

                while($dados_lista_remocoes_cargo=mysql_fetch_array($info_lista_remocoes_cargo))
                {
                ?>
                <!-- cabeçalho para exibir o cargo e quantidade de professores-->
                <tr class="fundo_azul_escuro fonte_branca">
                <td colspan="5"><?php print $dados_lista_remocoes_cargo['cargo'] ?></td>
                <td class="direito"><span class="badge borda_branca fundo_azul_escuro fonte_branca"> <?php print $dados_lista_remocoes_cargo['qtde'] ?> </span></td>
                </tr>
                <!-- cabeçalho da tabela -->
                <tr>                
                <th class="fonte_pequena fonte_azul_escuro largura_05">Matr</th>
                <th class="fonte_pequena fonte_azul_escuro largura_55">Nome</th>
                <th class="fonte_pequena fonte_azul_escuro largura_15">CPF</th>
                <th class="fonte_pequena fonte_azul_escuro largura_15 esquerdo">Dt Nasc</th>
                <th class="fonte_pequena fonte_azul_escuro largura_05 direito">Pontos</th>                
                <th class="fonte_pequena fonte_azul_escuro largura_05 direito">Remover</th>
                </tr>
                
                <?php                
                    
                
                // seleciona todas os usuários provenientes da pesquisa
                $sqlstring_professores_remocoes  = "select * from tb_usuario "; 
                $sqlstring_professores_remocoes .= "inner join tb_inscricao on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
                $sqlstring_professores_remocoes .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
                $sqlstring_professores_remocoes .= "where indicacao_escola != '' and tb_cargo.cod_cargo = " . $dados_lista_remocoes_cargo['cod_cargo'];
                
                
                
                    
                $info_professores_remocoes = $db->sql_query($sqlstring_professores_remocoes); 
                    
                    while($dados_professores_remocoes=mysql_fetch_array($info_professores_remocoes))
                    {                        
                ?>
                    <tr>                
                    <td class="fonte_pequena"><?php print $dados_professores_remocoes['matricula'] ?></td>
                    <td class="fonte_pequena text-uppercase"><?php print $dados_professores_remocoes['nome_usuario'] ?></td>
                    <td class="fonte_pequena">
                            <?php 
                            $digitos_esquerda = substr($dados_professores_remocoes['cpf'],0,3);
                            $digitos_meio = substr($dados_professores_remocoes['cpf'],3,3);
                            $digitos_direita = substr($dados_professores_remocoes['cpf'],6,3);
                            $digitos_verificadores = substr($dados_professores_remocoes['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                    </td>
                    <td class="fonte_pequena"><?php print date('d/m/Y', strtotime($dados_professores_remocoes['data_nascimento'])) ?></td>
                    <td class="fonte_pequena direito"><?php print $dados_professores_remocoes['pontuacao'] ?></td>
                    <td class="fonte_pequena centralizado"> 
                        <a href="01_menu_adm.php?detalhes_remocoes=<?php print $dados_professores_remocoes['cod_inscricao']; ?>" alt="Remover Indicações" title="Remover Candidato">
                        
                        <?php
                        //personalizando o ícone de exibição
                        if($dados_professores_remocoes['cod_escola'] == $dados_professores_remocoes['cod_escola_anterior'])
                        {
                        ?>
                        <span class="glyphicon glyphicon-transfer"></span>
                        <?php
                        }
                        else
                        {
                        ?>   
                        <span class="glyphicon glyphicon-thumbs-up fonte_verde"></span>
                        <?php
                        }
                        ?>
                        </a>
                    </td>
                    </tr>
                <?php
                    }
                    ?>
                    <tr>
                    <td colspan="6">&nbsp;</td>
                    </tr>
                <?php    
                }
                ?>
                
                    
                </table>
                
            </div>
					  
					  
					  
					  
					  
					
         </div>
        </div>        
      </div>
      
    </div>
  </div>

    
<!-- fim listagem de remocoes --> 
<!-- ************************************************************************************************************************ -->  
  
























<!-- ************************************************************************************************************************ -->  
<!-- inicio detalhes remocoes -->  

<?php

    $detalhes_remocoes = $_GET['detalhes_remocoes'];
    // inicio listagem de recursos de classificação
    if(isset($_GET['detalhes_remocoes']))
    {      
            
    $sqlstring_detalhes_remocoes  = "select * from tb_inscricao ";
    $sqlstring_detalhes_remocoes .= "inner join tb_usuario on tb_usuario.cod_usuario = tb_inscricao.cod_usuario ";
    $sqlstring_detalhes_remocoes .= "inner join tb_cargo on tb_usuario.cod_cargo = tb_cargo.cod_cargo ";
    $sqlstring_detalhes_remocoes .= "inner join tb_escola on tb_usuario.cod_escola = tb_escola.cod_escola ";
    $sqlstring_detalhes_remocoes .= "where cod_inscricao =  " . $detalhes_remocoes . " and indicacao_escola != '' ";                     
        
    $info_detalhes_remocoes = $db->sql_query($sqlstring_detalhes_remocoes);        
    $dados_detalhes_remocoes = mysql_fetch_array($info_detalhes_remocoes);
        
    $_SESSION['cod_detalhe_remocoes'] = $dados_detalhes_remocoes['cod_inscricao'];    
    }           
    ?>
    
  <div class="modal fade" id="modalDetalhes_Remocoes" name="modalDetalhes_Remocoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">
             
            <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Remoção do Professor</h3>            
          </div>
					
            <div class="panel-body">
                    
                Efetue a remoção com base nas indicações realizadas pelo professor.
                <br/><br/>
                <!-- inicio - formulario com as opções de remocoes -->
                <form method='post' action="01_menu_adm.php?efetuar_remocao=<?php print $dados_detalhes_remocoes['matricula'] ?>">
                    
                <table class="table table-responsive">
              
                <tr class="fundo_azul_escuro fonte_branca">
                <th  style="border:0px solid #000">Matr</th>    
                <th  style="border:0px solid #000">Nome</th>    
                <th  style="border:0px solid #000">CPF</th> 
                <th  style="border:0px solid #000">Data Nascimento</th>    
                <th  class="direito" style="border:0px solid #000">Pontuação</th>    
                </tr>
                    
                <tr>
                <td  style="border:0px solid #000"><?php print $dados_detalhes_remocoes['matricula'] ?></td>    
                <td  style="border:0px solid #000"><?php print $dados_detalhes_remocoes['nome_usuario'] ?></td> 
                <td  style="border:0px solid #000">
                            <?php 
                            $digitos_esquerda = substr($dados_detalhes_remocoes['cpf'],0,3);
                            $digitos_meio = substr($dados_detalhes_remocoes['cpf'],3,3);
                            $digitos_direita = substr($dados_detalhes_remocoes['cpf'],6,3);
                            $digitos_verificadores = substr($dados_detalhes_remocoes['cpf'],9,2);
                            print $digitos_esquerda . "."  . $digitos_meio . "." . $digitos_direita . "-" . $digitos_verificadores;
                            ?>    
                </td>    
                <td  style="border:0px solid #000" centralizado><?php print  date('d/m/Y', strtotime($dados_detalhes_remocoes['data_nascimento'])) ?></td>    
                <td  class="direito" style="border:0px solid #000"><?php print $dados_detalhes_remocoes['pontuacao'] ?></td>    
                </tr>
                
                
                <tr>
                <td colspan="5"  style="border:0px solid #000">
                    <strong>Lotação Atual:</strong>
                </td>    
                </tr>
                    
                <tr>
                <td colspan="5">                    
                    <?php print $dados_detalhes_remocoes['escola'] ?>
                </td>    
                </tr>
                    
                <tr>
                <td colspan="5"  style="border:0px solid #000">&nbsp;</td>    
                </tr>
                
                <?php                  
                if($dados_detalhes_remocoes['cod_escola'] == $dados_detalhes_remocoes['cod_escola_anterior'])
                {
                ?>
                
                <tr>
                <td colspan="5"  style="border:0px solid #fff"><span class="glyphicon glyphicon-transfer"></span> &nbsp;Indicações para remoção referente ao cargo: <span class="negrito"><?php print $dados_detalhes_remocoes['cargo'] ?></span></td>    
                </tr>
                
                
                    
                <!-- inicio exibicao das escolas indicadas pelo professor -->
                <tr>
                <td colspan="5" style="border:0px solid #fff">
                    <?php 
                        
                        $separacao_escolas_remocao = explode(";", $dados_detalhes_remocoes['indicacao_escola']);                        
                        $tamanho_separacao_escolas_remocao = sizeof($separacao_escolas_remocao);
                        
                        $contador_separacao_escolas_remocao = 0;

                        while($contador_separacao_escolas_remocao < $tamanho_separacao_escolas_remocao-1)
                        {                        
                        $sqlstring_escola_indicada_remocao  = "select * from tb_escola ";                        
                        $sqlstring_escola_indicada_remocao .= "where cod_escola =  " . $separacao_escolas_remocao[$contador_separacao_escolas_remocao];

                        $info_escola_indicada_remocao=$db->sql_query($sqlstring_escola_indicada_remocao);
                        $dados_escola_indicada_remocao=mysql_fetch_array($info_escola_indicada_remocao);
                          
                            print "<input type='radio' name='opcao_remocao' id=" . $dados_escola_indicada_remocao['cod_escola'] . " value=" . $dados_escola_indicada_remocao['cod_escola'] . "> &nbsp;";
                            
                            if($contador_separacao_escolas_remocao < 9)
                            { 
                                print "0" . $contador_separacao_escolas_remocao + 1 . " - " . $dados_escola_indicada_remocao['escola'];
                            }
                            else
                            {
                                print $contador_separacao_escolas_remocao + 1 . " - " . $dados_escola_indicada_remocao['escola'];
                            }
                            
                        print "<br/>";
                            
                        $contador_separacao_escolas_remocao++;
                        }
                    ?>
                </td>    
                </tr>
                <!-- fim exibicao das escolas indicadas pelo professor -->
                                     
               <?php
                }
                else
                {
                ?> 
                <!-- inicio candidato já removido -->
                <tr>
                <td colspan="5" style="border:0px solid #fff">
                <span class="glyphicon glyphicon-thumbs-up fonte_verde"></span>
                O candidato já foi removido. Antes da remoção estava lotado na:
                </td>
                </tr>
                    <?php
                    $sqlstring_escola_anterior  = "select * from tb_escola where cod_escola =  " . $dados_detalhes_remocoes['cod_escola_anterior'];
                    $info_escola_anterior=$db->sql_query($sqlstring_escola_anterior);
                    $dados_escola_anterior=mysql_fetch_array($info_escola_anterior);                    
                    ?>
                <tr>
                <td colspan="5">
                <?php print $dados_escola_anterior['escola']; ?>
                </td>
                </tr>
                    
                <?php
                }
                ?>
                    
                </table>
                
            </div>
				
            <div class="modal-footer">  
                <?php
                if($dados_detalhes_remocoes['cod_escola'] == $dados_detalhes_remocoes['cod_escola_anterior'])
                {
                ?>
                <button type="submit" class="btn btn-primary fundo_azul_escuro" > Efetuar Remoção </button>        
                <?php
                }
                else
                {
                ?>
                <button type="submit" class="btn btn-primary fundo_azul_escuro" disabled> Efetuar Remoção </button>        
                <?php
                }
                ?>
          </div>
					  
            </form>
            <!-- fim - formulario com as opções de remocoes -->
					  
					  
					
         </div>
        </div>        
      </div>
      
    </div>
  </div>

    
<!-- fim detalhes remocoes --> 
<!-- ************************************************************************************************************************ -->  



















<!-- ************************************************************************************************************************ -->  
<!-- inicio efetuar remocao -->  

<?php

    $efetuar_remocao = $_GET['efetuar_remocao'];
    
    $sqlstring_dados_efetua_remocao  = "select * from tb_usuario ";                        
    $sqlstring_dados_efetua_remocao .= "where matricula =  '" . $efetuar_remocao . "'";

    $info_dados_efetua_remocao=$db->sql_query($sqlstring_dados_efetua_remocao);
    $dados_efetua_remocao=mysql_fetch_array($info_dados_efetua_remocao);
        
?>
    
  <div class="modal fade" id="modalEfetuar_Remocao" name="modalEfetuar_Remocao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fonte_azul_escuro">
             
            <div class="modal-header">
            <button type="button" onclick="abrir_url('01_menu_adm.php')" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title esquerdo fonte_media" id="myModalLabel"><span class="glyphicon glyphicon-check fonte_pequena"></span> Remoção <strong>Efetuada</strong></h3>            
          </div>
					
            <div class="panel-body">
                
                <?php    
                // inicio listagem de recursos de classificação
                if(isset($_GET['efetuar_remocao']))
                {      
                
                print "<div class='col-md-12'>A remoção de <strong> <span class='text-uppercase'>" . $dados_efetua_remocao['matricula'] . " - " . $dados_efetua_remocao['nome_usuario'] . " </span></strong> foi efetivada com sucesso!</div>";
                 
                print "<div class='col-md-12'>&nbsp;</div>";    
                
                print "
                <div class='col-md-6 fonte_pequena fundo_azul_escuro fonte_branca text-uppercase padding_10'><strong>Lotação Anterior:</strong>
                </div>
                <div class='col-md-6 fonte_pequena fundo_azul_escuro fonte_branca text-uppercase padding_10'><strong>Lotação Atual:</strong>
                </div>
                ";     
                
                //escola origem
                $sqlstring_escolas_origem  = "select * from tb_escola where cod_escola =  " . $dados_efetua_remocao['cod_escola'];      
                $info_escolas_origem=$db->sql_query($sqlstring_escolas_origem);
                $dados_escolas_origem=mysql_fetch_array($info_escolas_origem);                    
                print "<div class='col-md-6 fonte_pequena'>" . $dados_escolas_origem['escola'] . "</div>"; 
                
                //escola destino
                $sqlstring_escolas_destino  = "select * from tb_escola where cod_escola =  " . $_POST['opcao_remocao'];      
                $info_escolas_destino=$db->sql_query($sqlstring_escolas_destino);
                $dados_escolas_destino=mysql_fetch_array($info_escolas_destino);
                print "<div class='col-md-6 fonte_pequena'>" . $dados_escolas_destino['escola'] . "</div>"; 

                //efetuando a remocao e gravando a nova lotação do candidato
                $sqlstring_efetua_remocao  = "update tb_usuario set cod_escola = " . $_POST['opcao_remocao'] . " where matricula = " . $efetuar_remocao;        
                $info_efetua_remocao=$db->sql_query($sqlstring_efetua_remocao);
                $dados_efetua_remocao=mysql_fetch_array($info_efetua_remocao);

                }       
                ?>                
                
            </div>
				
            <div class="modal-footer">                
                <button type="button" class="btn btn-primary fundo_azul_escuro"onclick="javascript:window.location.href='01_menu_adm.php'"> Fechar </button>        
          </div>
					  
					  
					  
					  
					
         </div>
        </div>        
      </div>
      
    </div>
  </div>

    
<!-- fim efetuar remocao --> 
<!-- ************************************************************************************************************************ -->  














<?php 
    $alterar_professor = $_GET['alterar_professor'];
    include "includes/modal_formulario_alterar_professor.php"; 
?>

    
    
    







    


</div> 
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    

  
    <?php
    // função utilizada para validar o arquivo de upload
    $upload = $_GET['upload'];
    if($upload == 1)
        upload();

    // função utilizada para chamar a mensagem de sucesso - inserção de vagas iniciais - fundamental
    $vagas_iniciais = $_GET['vagas_iniciais'];
    if($vagas_iniciais == 1)
        vagas();

    // função utilizada para chamar a mensagem de sucesso - inserção de vagas iniciais potenciais - fundamental
    $vagas_potenciais = $_GET['vagas_potenciais'];
    if($vagas_potenciais == 1)
        vagas();

    // função utilizada para chamar a mensagem de sucesso - inserção de vagas iniciais - infantil
    $vagas_iniciais_infantil = $_GET['vagas_iniciais_infantil'];
    if($vagas_iniciais_infantil == 1)
        vagas();

    // função utilizada para chamar a mensagem de sucesso - inserção de vagas potenciais - infantil
    $vagas_potenciais_infantil = $_GET['vagas_potenciais_infantil'];
    if($vagas_potenciais_infantil == 1)
        vagas();

    // função utilizada para chamar a mensagem de sucesso - inserção de vagas iniciais - diretor
    $vagas_iniciais_diretor = $_GET['vagas_iniciais_diretor'];
    if($vagas_iniciais_diretor == 1)
        vagas();

    // função utilizada para chamar a mensagem de sucesso - inserção de vagas potenciais - diretor
    $vagas_potenciais_diretor = $_GET['vagas_potenciais_diretor'];
    if($vagas_potenciais_diretor == 1)
        vagas();
    ?> 

    
    
    <script>
        <?php
        // modal pesquisa de todos os professores cadastrados mas não necessariamente inscritos
        if(isset($pesquisa))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalProfessores').modal('show');
        });
        <?php
        }
    
        // modal pesquisa dos professores inscritos no concurso de remoção
        if(isset($pesquisa_inscrito))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalClassificacao').modal('show');
        });
        <?php
        }

        // modal detalhes do recurso de classificacao
        if(isset($recurso_classificacao))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalDetalhes_Recursos').modal('show');
        });
        <?php
        }

        // modal detalhes do recurso de classificacao
        if(isset($atualizacao_recurso_classificacao))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalSucesso_Atualizacao_Classificacao').modal('show');
        });
        <?php
        }
        
        // modal detalhes do recurso de classificacao
        if(isset($recurso_resultado_final))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalRecursos_Final_Detalhes').modal('show');
        });
        <?php
        }

        // modal detalhes do recurso de classificacao
        if(isset($atualizacao_recurso_final))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalSucesso_Atualizacao_Final').modal('show');
        });
        <?php
        }


        // modal detalhes do recurso de classificacao
        if(isset($detalhes_indicacoes))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalDetalhes_Indicacoes').modal('show');
        });
        <?php
        }


        // modal detalhes da remocao
        if(isset($detalhes_remocoes))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalDetalhes_Remocoes').modal('show');
        });
        <?php
        }


        
        // modal efetua remocao
        if(isset($efetuar_remocao))
        {
        ?>
        $(window).on('load',function()
        {        
        $('#modalEfetuar_Remocao').modal('show');
        });
        <?php
        }


        // modal formulario alteração professor                
        if(isset($alterar_professor))
        {            
        ?>
        $(window).on('load',function()
        {        
        $('#modalAlterar_Professor').modal('show');
        });
        <?php
        }




        
        ?>
        

    </script>
    <!-- fim modal resultado da pesquisa -->

</body>
</html>
