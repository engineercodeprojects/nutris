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


if( $_GET['reeducacoes'] == 1)
    { 
    //inserindo a dieta de domingo
    $domingo = $_POST['domingo'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $domingo . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 1 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    //inserindo a dieta de segunda-feira
    $segunda_feira = $_POST['segunda_feira'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $segunda_feira . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 2 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    //inserindo a dieta de terça-feira
    $terca_feira = $_POST['terca_feira'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $terca_feira . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 3 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    //inserindo a dieta de quarta-feira
    $quarta_feira = $_POST['quarta_feira'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $quarta_feira . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 4 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    //inserindo a dieta de quinta-feira
    $quinta_feira = $_POST['quinta_feira'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $quinta_feira . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 5 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    
    //inserindo a dieta de sexta-feira
    $sexta_feira = $_POST['sexta_feira'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $sexta_feira . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 6 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    //inserindo a dieta de sabado
    $sabado = $_POST['sabado'];
    $sqlstring_alterar_programa_paciente_reeducacao   = "Update tb_programa_paciente_reeducacao set ";    
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_programa = " . $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_reeducacao = " . $sabado . ", ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " data_reeducacao = '" . date('Y-m-d') . "' ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
    $sqlstring_alterar_programa_paciente_reeducacao  .= " cod_dia_semana  = 7 ";
    $db->string_query($sqlstring_alterar_programa_paciente_reeducacao); 
    
    
    //verificando o programa de acompanhamento atual do paciente
    $sqlstring_programa_acompanhamento_atual  = "Select * from tb_acompanhamento ";    
    $sqlstring_programa_acompanhamento_atual .= "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'];
    $sqlstring_programa_acompanhamento_atual .= " and cod_consulta  = " . $_SESSION['cod_consulta_selecionada'];
    $sqlstring_programa_acompanhamento_atual .= " order by data_acompanhamento desc limit 1";
    $info_programa_acompanhamento_atual = $db->sql_query($sqlstring_programa_acompanhamento_atual);
    $dados_programa_acompanhamento_atual = mysql_fetch_array($info_programa_acompanhamento_atual);
    
    
    
    
    //é executado para atualizar a prescrição do programa sem alterar o prazo de termino
    $data_inicial = $_SESSION['data_programa_selecionado'];
    $data_inicial = explode("/",$data_inicial);
    $data_inicial = $data_inicial[2]."-".$data_inicial[1]."-".$data_inicial[0];
        
    $data_final =  date('Y-m-d', strtotime($dados_programa_acompanhamento_atual['data_acompanhamento']));
    
    if($dados_programa_acompanhamento_atual['cod_programa'] == $_SESSION['cod_programa_selecionado'] and $data_inicial <= $data_final)
    {
    
        
        $diferenca = (strtotime($data_final) - strtotime($data_inicial))/86400 ;
  
        //print "<center>" . $data_inicial . " - "  . $data_final . " - " . $diferenca . " - " .  $dias . "</center>";
       
        
        
        $contador = 0;        
        while($contador <= $diferenca)
        {
            $diasemana_numero = date('w', strtotime('+' . $contador . ' days', strtotime($data_inicial)));
            $diasemana_numero = $diasemana_numero + 1;
        
            
            //definindo a reeducação a ser redefinida
            if($diasemana_numero == 1)  $reeducacao_atualizada = $domingo;
            if($diasemana_numero == 2)  $reeducacao_atualizada = $segunda_feira;
            if($diasemana_numero == 3)  $reeducacao_atualizada = $terca_feira;
            if($diasemana_numero == 4)  $reeducacao_atualizada = $quarta_feira;
            if($diasemana_numero == 5)  $reeducacao_atualizada = $quinta_feira;
            if($diasemana_numero == 6)  $reeducacao_atualizada = $sexta_feira;
            if($diasemana_numero == 7)  $reeducacao_atualizada = $sabado;
                    
            
            
            $contador_tipo_refeicao = 1;
            while($contador_tipo_refeicao < 7)
            { 
            // apenas atualizara a dieta sem alterar o prazo do programa    
            $sqlstring_atualizar_prescricao   = "update tb_acompanhamento set ";
            $sqlstring_atualizar_prescricao  .= "cod_reeducacao = " . $reeducacao_atualizada;
            $sqlstring_atualizar_prescricao  .= " where cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
            $sqlstring_atualizar_prescricao  .= " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
            $sqlstring_atualizar_prescricao  .= " and cod_dia_semana = " . $diasemana_numero;
            $sqlstring_atualizar_prescricao  .= " and cod_tipo_refeicao = " . $contador_tipo_refeicao;
            $sqlstring_atualizar_prescricao  .= " and data_acompanhamento = '" . date('Y-m-d', strtotime('+' . $contador . ' days', strtotime($data_inicial))) . "'";
             
            $info_atualizar_prescricao = $db->string_query($sqlstring_atualizar_prescricao);
            $linhas_prescricao = $db->sql_linhas($info_atualizar_prescricao);
                
            $contador_tipo_refeicao++;
            }
        $contador++;
        }
        
    }
    //é executado para alterar o programa do paciente e automaticamente o prazo de término
    else
    {
    
    //conhecendo quantos dias o programa irá durar
    $sqlstring_programa_selec   = "Select * from tb_programa ";
    $sqlstring_programa_selec  .= "inner join tb_programa_paciente on tb_programa.cod_programa = tb_programa_paciente.cod_programa ";
    $sqlstring_programa_selec .= "where tb_programa_paciente.cod_programa  = " . $_SESSION['cod_programa_selecionado'];
    $sqlstring_programa_selec .= " and tb_programa_paciente.cod_paciente  = " . $_SESSION['cod_paciente_selecionado'];
    $info_programa_selec = $db->sql_query($sqlstring_programa_selec);
    $dados_programa_selec = mysql_fetch_array($info_programa_selec);
    
        
    
        //deletando o acompanhamento da data em questão em diante
        $sqlstring_ = "delete from tb_acompanhamento where cod_paciente = " . $_SESSION['cod_paciente_selecionado']  . " and data_acompanhamento >= '" . $data_inicial . "'";
        $info_ = $db->sql_query($sqlstring_);
    
        //definindo o acompanhamento
        $qtde_dias = $dados_programa_selec['cod_tempo_programa']*7;
        $contador=0;        
        while($contador<$qtde_dias)
        {
            $diasemana_numero = date('w', strtotime('+' . $contador . ' days', strtotime($dados_programa_selec['data_inicio_programa'])));
            $diasemana_numero = $diasemana_numero + 1;
            
            if($diasemana_numero == 1)  $reeducacao = $domingo;
            if($diasemana_numero == 2)  $reeducacao = $segunda_feira;
            if($diasemana_numero == 3)  $reeducacao = $terca_feira;
            if($diasemana_numero == 4)  $reeducacao = $quarta_feira;
            if($diasemana_numero == 5)  $reeducacao = $quinta_feira;
            if($diasemana_numero == 6)  $reeducacao = $sexta_feira;
            if($diasemana_numero == 7)  $reeducacao = $sabado;
            
    // inserindo na tabela de acompanhamento
    $contador_tipo_refeicao = 1;
    while($contador_tipo_refeicao < 7)
    {        

    $sqlstring_inserir_acompanhamento  = "Insert into tb_acompanhamento (cod_paciente, cod_consulta, cod_programa, cod_reeducacao, cod_dia_semana, cod_tipo_refeicao, data_acompanhamento) values (";
    $sqlstring_inserir_acompanhamento .= $_SESSION['cod_paciente_selecionado'] . ", ";
    $sqlstring_inserir_acompanhamento .= $_SESSION['cod_consulta_selecionada'] . ", ";
    $sqlstring_inserir_acompanhamento .= $_SESSION['cod_programa_selecionado'] . ", ";
    $sqlstring_inserir_acompanhamento .= $reeducacao . ", ";
    $sqlstring_inserir_acompanhamento .= $diasemana_numero . ", ";    
    $sqlstring_inserir_acompanhamento .= $contador_tipo_refeicao . ", '"; 
    $sqlstring_inserir_acompanhamento .= date('Y-m-d', strtotime('+' . $contador . ' days', strtotime($data_inicial))) . "')";        

    $db->string_query($sqlstring_inserir_acompanhamento);

    $contador_tipo_refeicao++;
    }
            
        $contador++;
        }
    
    }
    }


if( $_SERVER['REQUEST_METHOD']=='POST' and !isset($_GET['reeducacoes']) )
    {     
        $programa  = $_POST['programa'];
        $data_inicio_programa = $_POST['data_inicio_programa'];

        $parteData = explode("/", $data_inicio_programa);    
        $data_inicio_programa = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
    
        
        // insere na tb_objetivo paciente as informações sobre o objetivo do páciente
        $sqlstring_alterar_programa_paciente  = "Update tb_programa_paciente set ";
        $sqlstring_alterar_programa_paciente .= "cod_programa = '" . $programa . "', ";
        $sqlstring_alterar_programa_paciente .= "data_inicio_programa = '" . $data_inicio_programa . "' ";
        $sqlstring_alterar_programa_paciente .= "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'];
        $sqlstring_alterar_programa_paciente .= " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'];

        $db->string_query($sqlstring_alterar_programa_paciente); 

        $_SESSION['cod_programa_selecionado'] = $programa;
        $_SESSION['data_programa_selecionado'] = $_POST['data_inicio_programa'];
        
}


//recuperando o paciente selecionado caso o clique venha da listagem de pacientes
if(isset($_GET['cod_consulta']))
    //$_SESSION['cod_paciente_selecionado'] = base64_decode($_GET['cod']);
    $_SESSION['cod_consulta_selecionada'] = base64_decode($_GET['cod_consulta']);


$sqlstring_programa_paciente  = "select * from tb_programa_paciente ";
$sqlstring_programa_paciente .= "inner join tb_paciente on tb_programa_paciente.cod_paciente = tb_paciente.cod_paciente ";
$sqlstring_programa_paciente .= "inner join tb_programa on tb_programa_paciente.cod_programa = tb_programa.cod_programa ";
$sqlstring_programa_paciente .= "where tb_programa_paciente.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];
$sqlstring_programa_paciente .= " and tb_programa_paciente.cod_consulta = " . $_SESSION['cod_consulta_selecionada'];
$info_programa_paciente = $db->sql_query($sqlstring_programa_paciente);
$dados_programa_paciente = mysql_fetch_array($info_programa_paciente);


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
    include "includes/cabecalho_paciente_reeducacao.php";
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
                    <span class=" fonte_verde_claro fonte_muito_grande negrito">Reeducação Alimentar</span>:
                    <span class=" fonte_verde_claro fonte_muito_grande"><?php print date('d/m/Y', strtotime($dados_programa_paciente['data_inicio_programa'])) ?></span>
                    <br/>
                    <span class="fonte_pequena">    
                         <a href="01_lista_consultas_paciente.php">Consultas</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_anamnese.php">Anamnese</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_avaliacao.php">Avaliação Nutricional</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <a href="01_1_cadastro_paciente_antropometria.php">Antropometria</a>
                        <span class="glyphicon glyphicon-chevron-right fonte_cinza"></span>
                        <span class="fonte_verde_claro">Reeducação Alimentar</span>
                        
                    </span> 
                    <br/><br/>                    
            </div>
          </div>
    </div>
    <!-- fim - titulo do formulário -->
    
       
    <!-- inicio - formulario paciente - dados pessoais -->   
   <form method="post" action = "01_1_cadastro_paciente_prescricao.php">
    
    <!-- inicio - medidas -->
    <div class="row">
        <div class="col-md-12" style="border:1px solid #eee; border-left:5px solid #18A689; border-right:2px solid #18A689;">            
            <br/>
            <div class="row">                      
                
                <!-- inicio - programa -->
                <div id="d_programa" name="d_programa" class="form-group col-md-8">
                    <label for="l_programa">Programa - Objetivo - Duração</label>
                    <select class="form-control text-uppercase" name="programa" id="programa"> 
                    <?php
                    $sqlstring_programas   = "select * from tb_programa ";
                    $sqlstring_programas  .= "inner join tb_objetivo on tb_programa.cod_objetivo_programa = tb_objetivo.cod_objetivo ";
                    $sqlstring_programas  .= "inner join tb_tempo on tb_programa.cod_tempo_programa = tb_tempo.cod_tempo ";
                    $info_programas = $db->sql_query($sqlstring_programas);
                    while($dados_programas = mysql_fetch_array($info_programas))
                    {
                        if($dados_programas['cod_programa'] == $dados_programa_paciente['cod_programa'])
                            print "<option value=" . $dados_programas['cod_programa'] . " selected>" . $dados_programas['programa'] . " - " . $dados_programas['objetivo'] . " - " . $dados_programas['tempo'] . "</option>";
                        else
                            print "<option value=" . $dados_programas['cod_programa'] . ">" . $dados_programas['programa'] . " - " . $dados_programas['objetivo'] . " - " . $dados_programas['tempo'] . "</option>";
                    }
                    ?>
                    </select>
                </div>
                <!-- fim - programa -->   
                
                <!-- inicio - data de inicio -->
                <div id="d_data_inicio" name="d_data_inicio" class="form-group col-md-4">
                    <label for="l_data_inicio">Data Início</label>
                    <input type="text" class="form-control" name="data_inicio_programa" id="data_inicio_programa" value="<?php print date('d/m/Y',strtotime($dados_programa_paciente['data_inicio_programa'])) ?>" maxlength="10">
                </div>
                <!-- fim - data de inicio -->
                
              
            </div>
            
             
            
            
                
           
       
       
       
    <div class="row">
        <div class="col-md-offset-1 col-md-11  direito padding_top_30">
            <button type="submit" class="btn btn_verde_claro">Salvar e Definir Reeducações</button>    
            <button type="reset" class="btn btn_verde_claro" onclick="location.href='01_1_detalhes_paciente.php'">Cancelar</button>    
        </div>
    </div>
       
    </form>
        
        
        
      
        
        
<div class="panel-group padding_top_20" id="accordion" role="tablist" aria-multiselectable="true">
    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a role="button" class="link_branco" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Domingo
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 1;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
          
      </div>
    </div>
  </div>
    
    

    
    
    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a class="collapsed link_branco" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Segunda-Feira
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
         <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 2;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
          
      </div>
    </div>
  </div>
    
    
    
    
    
    
    
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a class="collapsed link_branco" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Terça-Feira
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 3;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
      </div>
    </div>
  </div>
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a class="collapsed link_branco" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
         Quarta-Feira
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 4;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
      </div>
    </div>
  </div>
    
    
    
    
 
    
    
    
    
    
    
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a class="collapsed link_branco" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Quinta-Feira
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 5;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
      </div>
    </div>
  </div>
    
    
    
    
    
    
   
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a class="collapsed link_branco" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
         Sexta-Feira
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 6;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
      </div>
    </div>
  </div>
    
    
    
    
    
    
    
    
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven" style="background-color:#18A689; color:#fff">
      <h4 class="panel-title  fonte_branca">
        <a class="collapsed link_branco" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
         Sábado
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
        <?php
        //definindo o dia da semana atraves de contador
        $contador_dia_semana = 7;
        
        $sqlstring_refeicoes_paciente   = "Select * from tb_programa_paciente_reeducacao ";
        $sqlstring_refeicoes_paciente  .= "where cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_consulta = " . $_SESSION['cod_consulta_selecionada'] . " and cod_dia_semana = " .$contador_dia_semana;                        
        $info_refeicoes_paciente = $db->sql_query($sqlstring_refeicoes_paciente);        
        $dados_refeicoes_paciente = mysql_fetch_array($info_refeicoes_paciente);
      
                        
            
                //selecionando apenas por tipo de refeição em cada passada
                $contador_tipo_refeicao = 1 ;
                $sqlstring_tipo_de_refeicao   = "Select * from tb_reeducacao_refeicao ";
                $sqlstring_tipo_de_refeicao  .= "where cod_reeducacao = " . $dados_refeicoes_paciente['cod_reeducacao'];     
                $info_tipo_de_refeicao = $db->sql_query($sqlstring_tipo_de_refeicao);
                    
//                print  $dados_tipo_de_refeicao['cod_reeducacao'] .  " - " . $dados_tipo_de_refeicao['cod_tipo_refeicao'] . " - " . $dados_tipo_de_refeicao['cod_refeicao'] . "<br/>";
               ?>
          
                <!-- exibicao dos dados na tela -->
                <table class="table table-responsive">

                <tr class='negrito'>
                <td class="largura_10">Foto</td>    
                <td class="largura_80">Reeducação</td>
                <td class="largura_10 centralizado">Calorias</td>
                </tr>
          
                </table>
                <table class="table table-responsive table-hover">
                
                    
                <?php
                while($dados_tipo_de_refeicao=mysql_fetch_array($info_tipo_de_refeicao))
                {
                
                    //selecionando os alimentos desta refeicao e dia da semana                    
                    $sqlstring_alimentos   = "Select * from tb_refeicao_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_refeicao on tb_refeicao_alimento.cod_refeicao = tb_refeicao.cod_refeicao ";                    
                    $sqlstring_alimentos  .= "inner join tb_alimento on tb_refeicao_alimento.cod_alimento = tb_alimento.cod_alimento ";
                    $sqlstring_alimentos  .= "inner join tb_tipo_refeicao on tb_tipo_refeicao.cod_tipo_refeicao = tb_refeicao.cod_tipo_refeicao ";
                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = " . $dados_tipo_de_refeicao['cod_refeicao'];     
//                    $sqlstring_alimentos  .= "where tb_refeicao_alimento.cod_refeicao = 40";     
                    $info_alimentos = $db->sql_query($sqlstring_alimentos);
                    $dados_alimentos=mysql_fetch_array($info_alimentos);
                    $linhas_alimentos = $db->sql_linhas($info_alimentos);
                    ?>
                
          
                    <?php  
                    //para não mostrar as refeicoes que não foram definidas
                    if($dados_tipo_de_refeicao['cod_refeicao'] != 0 )
                    {                    
                        print "<tr>";
                        print "<td class='largura_10'> <img src='fotos_refeicoes/" .  $dados_alimentos['foto_01_refeicao'] . "' width=50></td>";
                        print "<td class='largura_80'>";
                        print "<span class='text-uppercase fonte_verde_claro negrito'>" .  $dados_alimentos['tipo_refeicao'] . "</span>";
                        print "- ";
                        print "<span class='text-uppercase'>" .  $dados_alimentos['refeicao'] .  "</span>";
                        print "<br/>";
                        print "<span class='fonte_muito_pequena text-uppercase'>";
                        //verifica se mostro porção ou porções
                        if($dados_alimentos['qtde_porcoes'] == 1)
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                        else
                            print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                        
                        
                        $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                        print "[".  $total_calorias . " kcal] - </span>" . $dados_alimentos['alimento'] . "</span>";

                            


                        if($linhas_alimentos > 1)
                        {
                            print " <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> <span class='fonte_muito_pequena text-uppercase'>";
                            $contador_alimentos = 1;
                            
                            while($contador_alimentos < $linhas_alimentos)
                            {
                            $dados_alimentos=mysql_fetch_array($info_alimentos);
                                //verifica se mostro porção ou porções
                                if($dados_alimentos['qtde_porcoes'] == 1)
                                    print "<span class='negrito text-uppercase fonte_muito_pequena'>" . $dados_alimentos['qtde_porcoes'] . " porção ";
                                else
                                    print "<span class='negrito'>" . $dados_alimentos['qtde_porcoes'] . " porções ";
                                
                                //insere a qtde de calorias total do alimento e não da refeição
                                print "[". $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'] . " kcal] - </span>";
                                
                                
                                if($linhas_alimentos - $contador_alimentos == 1)
                                    print "<span class='fonte_muito_pequena'>" . $dados_alimentos['alimento'] . "</span>";
                                else
                                    print $dados_alimentos['alimento'] . " kcal </span> <span class='glyphicon glyphicon-plus fonte_muito_pequena'></span> ";

                                
                                $total_calorias = $total_calorias + $dados_alimentos['qtde_porcoes']*$dados_alimentos['caloria'];
                                
                            $contador_alimentos++;
                            }
                        }

                        print "</span></td>";
                        print "<td class='fonte_muito_grande largura_10' style='padding-top:20px'>" . $total_calorias . " kcal </td>";
                        print "</tr>";
                        $total_calorias = 0;
                    }
               }
                    ?>
                    
                        
                    </table>
      </div>
    </div>
  </div>
    
    
    
</div>
        
   
        
        

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>                       
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<?php
    
    if( $_SERVER['REQUEST_METHOD']=='POST' and !isset($_GET['reeducacoes']))
    {
        include "includes/modal_definir_reeducacao.php";
    }
?>

    <!-- abrindo o modal_sucesso -->
    <script>
        $(window).on('load',function()
        {        
        $('#modal_definir_reeducacao').modal('show');
        });
    </script>
    
   

        
    
<script>
    

    
$(document).ready(function(){ 
    $(".collapse").click('show.bs.collapse', function(){
        $(".collapse").collapse('hide');
    });
    
    $(".collapse").click('shown.bs.collapse', function(){
        $(".collapse").collapse('hide');
    });
   
    $(".collapse").click('hidde.bs.collapse', function(){
        $(".collapse").collapse('show');
    });
    
    $(".collapse").click('hidden.bs.collapse', function(){
        $(".collapse").collapse('show');
    });
});
    
    
    

</script>
