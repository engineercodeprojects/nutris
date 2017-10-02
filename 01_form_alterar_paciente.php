<!DOCTYPE html>
<?php 
//include do arquivo de conexao com o banco de dados
include_once('conexao/connect_db.php');
//instancia do banco de dados
$db = BancoDeDados::getInstance();  

// acentuação
mysql_set_charset('utf8');
ini_set('default_charset','UTF-8');

// recuperando o paciente selecionado
$cod_paciente = base64_decode($_GET['cod']);


$sqlstring_paciente_selecionado = "Select * from tb_paciente where cod_paciente = " . $cod_paciente;   
$info_paciente_selecionado = $db->sql_query($sqlstring_paciente_selecionado);
$dados_paciente_selecionado = mysql_fetch_array($info_paciente_selecionado);


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
    
<div class="container-fluid">
    
   <!-- inicio da div que envolve todo conteúdo da página centralizando o conteudo - 1 coluna a esquerda e 1 coluna a esquerda -->
   <div class="col-md-offset-1 col-md-10">
    
    <!-- inicio - titulo do formulário -->  
    <div class="row">
        <div class="well fundo_transparente sem_borda">
            <h2>ATUALIZAÇÃO - DADOS PACIENTE</h2>
        </div>
    </div>
    <!-- fim - titulo do formulário -->
       
       
    <form method="post" action="">
    <!-- inicio - dados pessoais -->  
    <div class="row">
        
        
          
          <!-- inicio - painel dados pessoais -->
          <div class="panel panel-default">
            <div class="panel-body borda_verde_claro" style="border-left:5px solid #0A4438">
            
             <div class="well well-sm fundo_transparente fonte_verde_escuro sem_borda"><span class="glyphicon glyphicon-user"></span> <strong>DADOS PESSOAIS</strong></div>
          <!-- inicio - linha 1 -->
              <!-- inicio nome paciente -->
              <div class="form-group col-md-8">
                <label for="nomecompleto">Nome Completo</label>
                <input type="text" class="form-control" name="nome_paciente" id="nome_paciente" value="<?php print $dados_paciente_selecionado['nome_paciente'] ?>">
              </div>
              <!-- fim nome paciente -->

              <!-- inicio profissao -->    
              <div class="form-group col-md-4">
                <label for="profissao">Profissão</label>
                <input type="text" class="form-control" name="profissao" id="profissao" value="<?php print $dados_paciente_selecionado['profissao'] ?>">
              </div>
              <!-- inicio profissao -->
          <!-- fim - linha 1 -->
            
            
            
          <!-- inicio - linha 2 --> 
              <!-- inicio endereco -->    
              <div class="form-group col-md-5">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="<?php print $dados_paciente_selecionado['endereco'] ?>">
              </div>
              <!-- fim endereco -->


              <!-- inicio numero -->    
              <div class="form-group col-md-2">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" value="<?php print $dados_paciente_selecionado['numero'] ?>">
              </div>
              <!-- fim numero -->


              <!-- inicio complemento -->    
              <div class="form-group col-md-2">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" value="<?php print $dados_paciente_selecionado['complemento'] ?>">
              </div>
              <!-- fim complemento -->


              <!-- inicio bairro -->    
              <div class="form-group col-md-3">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="<?php print $dados_paciente_selecionado['bairro'] ?>">
              </div>
              <!-- fim bairro -->
          <!-- fim - linha 2 --> 
           
          
            
            
            
            
            
          <!-- inicio - linha 3 --> 
              <!-- inicio CEP -->    
              <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" value="<?php print $dados_paciente_selecionado['cep'] ?>">
              </div>
              <!-- fim CEP -->


              <!-- inicio cidade -->    
              <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" value="<?php print $dados_paciente_selecionado['cidade'] ?>">
              </div>
              <!-- fim cidade -->


              <!-- inicio telefone residencial -->    
              <div class="form-group col-md-2">
                <label for="telfone_residencial">Tel Residencial</label>
                <input type="text" class="form-control" name="telefone_residencial" id="telefone_residencial" value="<?php print $dados_paciente_selecionado['telefone_residencial'] ?>">
              </div>
              <!-- fim telefone residencial -->


              <!-- inicio telefone comercial -->    
              <div class="form-group col-md-2">
                <label for="telefone_comercial">Tel Comercial</label>
                <input type="text" class="form-control" name="telefone_comercial" id="telefone_comercial" value="<?php print $dados_paciente_selecionado['telefone_comercial'] ?>">
              </div>
              <!-- fim telefone comercial -->
            
              <!-- inicio telefone celular -->    
              <div class="form-group col-md-2">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name="celular" id="celular" value="<?php print $dados_paciente_selecionado['celular'] ?>">
              </div>
              <!-- fim telefone celular -->
          <!-- fim - linha 3 -->
            
            
            
            
         <!-- inicio - linha 4 --> 
              <!-- inicio email -->    
              <div class="form-group col-md-4">
                <label for="email">e-mail</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php print $dados_paciente_selecionado['email'] ?>">
              </div>
              <!-- fim email -->


              <!-- inicio data nascimento -->    
              <div class="form-group col-md-2"> 
                <label for="cidade">Dt Nascimento</label>
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" value="<?php print date("d/m/Y", strtotime($dados_paciente_selecionado['data_nascimento'])) ?>">
              </div>
              <!-- fim data nascimento -->


              <!-- inicio sexo -->
              <div class="form-group col-md-2">
                <label for="sexo">Sexo</label>
                <input type="text" class="form-control" name="sexo" id="sexo" value="<?php print $dados_paciente_selecionado['sexo'] ?>">
              </div>
              <!-- fim sexo -->
            
              <!-- inicio peso -->
              <div class="form-group col-md-2">
                <label for="peso">Peso</label>
                <input type="text" class="form-control" name="peso" id="peso" value="<?php print $dados_paciente_selecionado['peso'] ?>">
              </div>
              <!-- fim peso -->
            
            
              <!-- inicio altura -->
              <div class="form-group col-md-2">
                <label for="altura">Altura</label>
                <input type="text" class="form-control" name="altura" id="altura" value="<?php print $dados_paciente_selecionado['altura'] ?>">
              </div>
              <!-- fim altura -->
              
          <!-- fim - linha 4 -->
            
            
            
            
          <!-- inicio - linha 5 --> 
              <!-- inicio outros -->    
              <div class="form-group col-md-12">
                <label for="outros">Outros</label>
                <textarea class="form-control" rows="3" name="outros" id="paciente"><?php print $dados_paciente_selecionado['outros'] ?></textarea>
              </div>
              <!-- fim outros -->
          <!-- fim - linha 5 -->
                
        </div>
    </div>        
      <!-- fim - painel dados pessoais -->
            
    </div>
    <!-- fim - dados pessoais -->  
        
        
        
        
        
        
        
        
    <!-- inicio - histórico -->    
    <div class="row">
        
            <!-- inicio - painel histórico -->
            <div class="panel panel-default">
                <div class="panel-body borda_verde_claro" style="border-left:5px solid #0A4438">
                    <div class="well well-sm fundo_transparente fonte_verde_escuro sem_borda"><span class="glyphicon glyphicon-info-sign"></span> <strong>HISTÓRICO</strong></div>
                    <!-- inicio - linha 1 -->
                    <!-- inicio - sim ou não atividade física -->
                    <div class="form-group col-md-3">
                    <label for="pratica_atividade_fisica">Pratica atividade física?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_atividade_fisica" id="opt_atividade_fisica" value="1" onclick="preencher_campo_sim_nao(1, 'atividade_fisica', 'Pratica ')">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_atividade_fisica" id="opt_atividade_fisica" value="2" onclick="preencher_campo_sim_nao(2, 'atividade_fisica', 'Nenhuma ')" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não atividade física -->
                    
                    
                    <!-- inicio - qual atividade física -->
                    <div class="form-group col-md-3">
                        <label for="qual_atividade">Qual?</label>
                        <input type="text" class="form-control" name="atividade_fisica" id="atividade_fisica" value="Nenhuma">
                    </div>
                    <!-- fim - qual atividade física -->
                    
                    <!-- inicio - dias da semana da atividade física -->
                    <div class="form-group col-md-4">
                        <label for="pratica_atividade_fisica">Dias da Semana</label>
                        <br/>
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_domingo" id="chk_domingo" value="0"> D
                        </label>
                        
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_segunda" id="chk_segunda" value="1"> S
                        </label>
                        
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_terca" id="chk_terca" value="2"> T
                        </label>
                        
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_quarta" id="chk_quarta" value="3"> Q
                        </label>
                        
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_quinta" id="chk_quinta" value="4"> Q
                        </label>
                        
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_sexta" id="chk_sexta" value="5"> S
                        </label>
                        
                        <label class="checkbox-inline">
                          <input type="checkbox" name="chk_sabado" id="chk_sabado" value="6"> S
                        </label>
                    </div>
                        <!-- fim - dias da semana da atividade física -->
                        
                    
                    <!-- inicio - horário início atividade física -->                    
                    <div class="form-group col-md-1">
                        <label for="horario_inicio_atividade_fisica">Início</label>
                        <input type="text" class="form-control" name="horario_inicio_atividade_fisica" id="horario_inicio_atividade_fisica" placeholder="00:00">
                    </div>
                    <!-- fim - horário início atividade física -->
                        
                    <!-- inicio - horário termino atividade física -->
                    <div class="form-group col-md-1">
                        <label for="horario_termino_atividade_fisica">Término</label>
                        <input type="text" class="form-control" name="horario_termino_atividade_fisica" id="horario_termino_atividade_fisica" placeholder="00:00">
                    </div>
                        <!-- fim - horário termino atividade física -->   
                    <!-- fim - linha 1 -->
                
                
                
                
                
                    <!-- inicio - linha 2 -->
                    <!-- inicio - sim ou não fumante -->
                    <div class="form-group col-md-2">
                    <label for="fumante">Fuma?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_fumante" id="opt_fumante" value="S" onclick="preencher_campo_sim_nao(1, 'fumante', 'Fuma ')" >
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_fumante" id="opt_fumante" value="N" onclick="preencher_campo_sim_nao(2, 'fumante', 'Não fuma')" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não fumante -->
                    
                    
                    <!-- inicio - quantidade de cigarro por dia -->
                    <div class="form-group col-md-2">
                        <label for="qtde_cigarro_dia">Quantos por dia?</label>
                        <input type="text" class="form-control" name="fumante" id="fumante" value="Não fuma">
                    </div>
                    <!-- fim - quantidade de cigarro por dia -->
                    
                    
                    <!-- inicio - uso de bebida alcoolica -->
                    <div class="form-group col-md-3">
                        <label for="uso de bebida alcoolica">Faz uso de bebida alcoólica?</label>
                        <br/>                        
                        <div class="radio-inline">
                          <label>
                            <input type="radio" name="bebida_alcoolica" id="bebida_alcoolica" value="S" onclick="alterar_combo(1, 'frequencia_bebida_alcoolica', '0')" >
                            Sim
                          </label>
                        </div>

                        <div class="radio-inline">
                          <label>
                            <input type="radio" name="bebida_alcoolica" id="bebida_alcoolica" value="N" onclick="alterar_combo(2, 'frequencia_bebida_alcoolica', '4')" checked>
                            Não
                          </label>
                        </div>
                    </div>
                    <!-- fim - uso de bebida alcoolica -->
                        
                    
                    <div class="form-group col-md-5">
                        <label for="frequencia_bebida_alcoolica">Frequência</label>
                        <br/>
                        <select name="frequencia_bebida_alcoolica" id="frequencia_bebida_alcoolica" class="form-control">
                          <?php
                            $sqlstring_frequencia = "Select * from tb_frequencia where cod_frequencia <= 5";
                            $info_frequencia = $db->sql_query($sqlstring_frequencia);
                            while($dados_frequencia=mysql_fetch_array($info_frequencia))
                            {
                                if($dados_frequencia['cod_frequencia'] == 5)
                                    print "<option value=" . $dados_frequencia['cod_frequencia'] . " selected>" . $dados_frequencia['frequencia'] . "</option>";
                                else
                                    print "<option value=" . $dados_frequencia['cod_frequencia'] . ">" . $dados_frequencia['frequencia'] . "</option>";
                            }                            
                          ?>
                        </select>
                    </div>                                    
                    <!-- fim - linha 2 -->
                
                
                
                
                
                    <!-- inicio - linha 3 -->
                    <!-- inicio - sim ou não incomodo gastrointestinal -->
                    <div class="form-group col-md-3">
                    <label for="incomodo_gastrointestinal">Incômodo gastrointestinal?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_incomodo_gastrointestinal" id="opt_incomodo_gastrointestinal" onclick="preencher_campo_sim_nao(1, 'incomodo_gastrointestinal', 'Possui ')" value="S">
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_incomodo_gastrointestinal" id="opt_incomodo_gastrointestinal"  onclick="preencher_campo_sim_nao(1, 'incomodo_gastrointestinal', 'Não possui ')" value="N" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - sim ou não incomodo gastrointestinal -->
                    
                    
                    <!-- inicio - qual incomodo gastrointestinal -->
                    <div class="form-group col-md-9">
                        <label for="qual_incomodo_gastrointestinal">Qual?</label>
                        <input type="text" class="form-control" name="incomodo_gastrointestinal" id="incomodo_gastrointestinal" value="Não possui">
                    </div>
                    <!-- fim - qual incomodo gastrointestinal -->
                    <!-- fim - linha 3 -->
                
                
                
                
                
                    <!-- inicio - linha 4 -->
                    <!-- inicio - medicamento e suplemento -->
                    <div class="form-group col-md-3">
                    <label for="suplemento_medicamento">Medicamento/suplemento?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_medicamento_suplemento" id="opt_medicamento_suplemento"  onclick="preencher_campo_sim_nao(1, 'medicamento_suplemento', 'Usa ')" value="S" >
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_medicamento_suplemento" id="opt_medicamento_suplemento" onclick="preencher_campo_sim_nao(2, 'medicamento_suplemento', 'Não usa ')" value="N" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - medicamento e suplemento -->
                    
                    
                    <!-- inicio - qual medicamento suplemento -->
                    <div class="form-group col-md-9">
                        <label for="medicamento_suplemento">Qual?</label>
                        <input type="text" class="form-control" name="medicamento_suplemento" id="medicamento_suplemento" value="Não usa">
                    </div>
                    <!-- fim - qual medicamento suplemento -->
                    <!-- fim - linha 4 -->
                    
                    
                    
                    
                    
                    
                    <!-- inicio - linha 5 -->
                    <!-- inicio - medicamento recomendados por doença -->
                    <div class="form-group col-md-3">
                    <label for="medicamento_por_doenca">Medicamento recomendando?</label>
                    <br/>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_medicamento_por_doenca" id="opt_medicamento_por_doenca" value="S" onclick = "preencher_campo_sim_nao(1, 'medicamento_por_doenca', 'Faz uso de ')" >
                        Sim
                      </label>
                    </div>
                    
                    <div class="radio-inline">
                      <label>
                        <input type="radio" name="opt_medicamento_por_doenca" id="opt_medicamento_por_doenca"  onclick = "preencher_campo_sim_nao(1, 'medicamento_por_doenca', 'Não faz uso de medicamento por doença específica ')" value="N" checked>
                        Não
                      </label>
                    </div>
                    </div>
                    <!-- fim - medicamento recomendados por doença -->
                    
                    
                    <!-- inicio - qual medicamento recomendado por doença -->
                    <div class="form-group col-md-9">
                        <label for="medicamento_por_doenca">Qual?</label>
                        <input type="text" class="form-control" name="medicamento_por_doenca" id="medicamento_por_doenca" value="Não faz uso de medicamento por doença específica ">
                    </div>
                    <!-- fim - qual medicamento recomendado por doença -->
                    <!-- fim - linha 5 -->
                
                    
                    
                    <!-- inicio - linha 6 --> 
                      <!-- inicio doencas passadas -->    
                      <div class="form-group col-md-12">
                        <label for="doencas_passadas">Quais as doenças apresentadas por você no passado? </label>
                        <textarea class="form-control" rows="3" name="doencas_passadas" id="doencas_passadas"></textarea>
                      </div>
                      <!-- fim doencas passadas -->
                    <!-- fim - linha 6 -->
                    
                    
                    
                    <!-- inicio - linha 7 --> 
                      <!-- inicio historico familiar -->    
                      <div class="form-group col-md-12">
                        <label for="historico_familiar">Qual seu histórico familiar (pais, avós, irmãos) de doenças? </label>
                        <textarea class="form-control" rows="3" name="historico_familiar" id="historico_familiar"></textarea>
                      </div>
                      <!-- fim historico familiar -->
                    <!-- fim - linha 7 -->
                    
                    
                    
                    <!-- inicio - linha 8 --> 
                    <!-- inicio funcionamento intestinal -->                          
                    <div class="form-group col-md-6">
                        <label for="funcionamento_instestinal">Funcionamento Intestinal</label>
                        <br/>
                        <select name="funcionamento_intestinal" id="funcionamento_intestinal" class="form-control">
                          <?php
                            $sqlstring_funcionamento_intestinal = "Select * from tb_frequencia where cod_frequencia <= 5";
                            $info_funcionamento_instestinal = $db->sql_query($sqlstring_funcionamento_intestinal);
                            while($dados_funcionamento_intestinal=mysql_fetch_array($info_funcionamento_instestinal))
                            {
                                print "<option value=" . $dados_funcionamento_intestinal['cod_frequencia'] . ">" . $dados_funcionamento_intestinal['frequencia'] . "</option>";
                            }                            
                          ?>
                        </select>
                    </div>                    
                    <!-- fim funcionamento intestinal -->                          
                    
                    <!-- inicio - qual funcionamento intestinal -->
                    <div class="form-group col-md-6">
                        <label for="outros_funcionamento_intestinal">Outros</label>
                        <input type="text" class="form-control" name="outros_funcionamento_intestinal" id="outros_funcionamento_intestinal" placeholder="Outros">
                    </div>
                    <!-- fim - qual funcionamento intestinal -->
                    <!-- fim - linha 8 -->    
                    
                    
                    
                    <!-- inicio - linha 9 --> 
                      <!-- inicio quando sintomas aparecem -->    
                      <div class="form-group col-md-12">
                        <label for="sintomas_aparecem">Quando os sintomas aparecem? </label>
                        <textarea class="form-control" rows="3" name="sintomas_aparecem" id="sintomas_aparecem"></textarea>
                      </div>
                      <!-- fim quando sintomas aparecem -->    
                    <!-- fim - linha 9 -->
                    
                    
                </div>
            </div>
            <!-- fim - painel histórico -->
    </div>
    <!-- fim - histórico -->
        
     
        
        
        
        
        
        
        
        
        
        
        
    <!-- inicio - habitos alimentares -->  
    <div class="row">
        
        
          
          <!-- inicio - painel habitos alimentares -->
          <div class="panel panel-default">
            <div class="panel-body borda_verde_claro" style="border-left:5px solid #0A4438">
            <div class="well well-sm fundo_transparente fonte_verde_escuro sem_borda"><span class="glyphicon glyphicon-apple"></span> <strong>HÁBITOS ALIMENTARES</strong></div>
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
                <textarea class="form-control" rows="3" name="gosta_de_comer" id="gosta_de_comer"></textarea>
              </div>
              <!-- fim - gosta de comer -->    
          <!-- fim - linha 2 -->    
                
                
            
          <!-- inicio - linha 3 --> 
              <!-- inicio - não gosta de comer -->    
              <div class="form-group col-md-12">
                <label for="nao_gosta_de_comer">O que você não gosta de comer? </label>
                <textarea class="form-control" rows="3" name="nao_gosta_de_comer" id="nao_gosta_de_comer"></textarea>
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
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="1" checked></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="2"></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="3"></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_integral" id="pao_integral" value="4"></td> 
                </tr>
                
                <tr>
                <td class="largura_60">Pão Branco</td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="1" checked></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="2"></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="3"></td> 
                <td class="largura_10 centralizado"><input type="radio" name="pao_branco" id="pao_branco" value="4"></td> 
                </tr>
                
                <tr>
                <td class="largura_60">Arroz Integral</td> 
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_integral" id="arroz_integral" value="4"></td>
                </tr>
                
                <tr>
                <td class="largura_60">Arroz Branco</td> 
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="arroz_branco" id="arroz_branco" value="4"></td>
                </tr>
                
                <tr>
                <td class="largura_60">Cereais</td> 
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="cereais" id="cereais" value="4"></td>
                </tr>
                
                <tr>
                <td class="largura_60">Feijão</td> 
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="feijao" id="feijao" value="4"></td>
                </tr>
                
                <tr>
                <td class="largura_60">Carne de Boi</td> 
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="carne_boi" id="carne_boi" value="4"></td>
                </tr>
                
                <tr>
                <td class="largura_60">Frango</td> 
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="frango" id="frango" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Peixe</td> 
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="peixe" id="peixe" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Ovo</td> 
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="ovo" id="ovo" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Leite e Derivados</td> 
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="leite_derivados" id="leite_derivados" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Azeite de Oliva</td> 
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="azeite_oliva" id="azeite_oliva" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Castamhas</td> 
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="castanhas" id="castanhas" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Frutas Frescas</td> 
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_frescas" id="frutas_frescas" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Frutas Secas</td> 
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="frutas_secas" id="frutas_secas" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Legumes e Verduras</td> 
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="legumes_verduras" id="legumes_verduras" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Doces, Biscoitos e Chocolates</td> 
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="doces_biscoitos_chocolates" id="doces_biscoitos_chocolates" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Refrigerantes</td> 
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="refrigerantes" id="refrigerantes" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Fast Food</td> 
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="fast_food" id="fast_food" value="4"></td>
                </tr>
                
                
                <tr>
                <td class="largura_60">Café</td> 
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="1" checked></td>
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="2"></td>
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="3"></td>
                <td class="largura_10 centralizado"><input type="radio" name="cafe" id="cafe" value="4"></td>
                </tr>
                
            </table>
          </div>
            
                
            </div>
    </div>        
    <!-- fim - painel hábitos alimentares -->
            
    </div>
    <!-- fim - habitos alimentares -->
        
        
      
        
    <div class="col-md-12  direito">
    <button type="button" class="btn btn-primary">Atualizar Dados Paciente</button>    
    </div>
        
    
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
        $sqlstring_codigo = "select * from tb_paciente order by cod_paciente desc limit 1";
        $info_codigo = $db->sql_query($sqlstring_codigo);
        $dados_codigo = mysql_fetch_array($info_codigo);


        //recuperando dados do histórico do paciente
        $atividade_fisica = $_POST['atividade_fisica'];
        $domingo = $_POST['chk_domingo'];
        $segunda = $_POST['chk_segunda'];
        $terca = $_POST['chk_terca'];
        $quarta = $_POST['chk_quarta'];
        $quinta = $_POST['chk_quinta'];
        $sexta = $_POST['chk_sexta'];
        $sabado = $_POST['chk_sabado'];
        $horario_inicio = $_POST['horario_inicio_atividade_fisica'];
        $horario_termino = $_POST['horario_termino_atividade_fisica'];
        $fumante = $_POST['fumante'];
        $bebida_alcoolica = $_POST['frequencia_bebida_alcoolica'];
        $incomodo_gastrointestinal = $_POST['incomodo_gastrointestinal'];
        $medicamento_suplemento = $_POST['medicamento_suplemento'];
        $medicamento_por_doenca = $_POST['medicamento_por_doenca'];
        $doencas_passadas = $_POST['doencas_passadas'];
        $historico_familiar = $_POST['historico_familiar'];
        $funcionamento_instestinal = $_POST['funcionamento_intestinal'];
        $outros_funcionamento_instestinal = $_POST['outros_funcionamento_intestinal'];
        $sintomas_aparecem = $_POST['sintomas_aparecem'];

        // insere na tb_historico_paciente as informações de histórico
        $sqlstring_inserir_historico = "Insert into tb_historico_paciente (atividade_fisica, domingo, inicio_domingo, termino_domingo, fumante, bebida_alcoolica, funcionamento_intestinal, incomodo_intestinal, medicamento_suplemento, medicamento_doenca_especifica, doencas_passado, historico_familiar_doencas, cod_paciente) values ";
        $sqlstring_inserir_historico .= "('" . $atividade_fisica . "','" . $domingo . "','" . $horario_inicio . "','" . $horario_termino . "','" . $fumante . "','" . $bebida_alcoolica . "','" . $funcionamento_instestinal . "','" . $incomodo_gastrointestinal . "','" . $medicamento_suplemento . "','" . $medicamento_por_doenca . "','" . $doencas_passadas . "','" . $historico_familiar ."','" . $dados_codigo['cod_paciente'] . "')";

        $db->string_query($sqlstring_inserir_historico); 



        //recuperando habitos alimentares
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


        // insere na tabela tb_habito_alimentar as informações sobre seus costumes alimentares
        $sqlstring_inserir_habitos_alimentares = "Insert into tb_habito_alimentar (cod_consumo_agua, mais_gosta, nao_gosta, cod_mastigacao, pao_integral, pao_branco, arroz_integral, arroz_branco, cereais, feijao, carne_boi, frango, peixe, ovo, leite_derivados, azeite_oliva, castanhas, frutas_frescas, frutas_secas, legumes_verduras, doces_biscoitos_chocolates, refrigerante, fast_food, cafe, cod_paciente) values ";
        $sqlstring_inserir_habitos_alimentares .= "('" . $consumo_agua . "','" . $gosta_de_comer . "','" . $nao_gosta_de_comer . "','" . $mastigacao . "','" . $pao_integral . "','" . $pao_branco . "','" . $arroz_integral . "','" . $arroz_branco . "','" . $cereais . "','" . $feijao . "','" . $carne_boi . "','" . $frango . "','" . $peixe . "','" . $ovo . "','" . $leite_derivados . "','" . $azeite_oliva . "','" . $castanhas . "','" . $frutas_frescas . "','" . $frutas_secas . "','" . $legumes_verduras . "','" . $doces_biscoitos_chocolates . "','" . $refrigerantes . "','" . $fast_food . "','" . $cafe . "','" . $dados_codigo['cod_paciente'] . "')";

        $db->string_query($sqlstring_inserir_habitos_alimentares); 
        
        
        //preparando informações para carregar no modal
        $titulo = "Cadastro de Paciente";
        $mensagem = "O paciente foi cadastrado com sucesso!";
        $btn_esquerda = "Novo Paciente";
        $btn_esquerda_destino = "01_form_cadastro_paciente.php";
        $btn_direita = "Lista de Pacientes";
        $btn_direita_destino = "01_lista_pacientes.php";
        $btn_x = "01_form_cadastro_paciente.php";


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
    
    </body>
</html>