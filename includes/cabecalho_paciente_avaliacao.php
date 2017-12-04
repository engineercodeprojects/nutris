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

?>    

<!-- inicio do container fluid -->    
<div class="container-fluid" onclick="recua_menu(10)">
    
    <!-- inicio - titulo da lista de pacientes -->  
    <div class="row fundo_verde_claro">
        
        
        <div class="col-md-offset-1 col-md-10 text-uppercase direito fundo_verde_claro fonte_branca padding_10">
            <div class='col-md-12 direito'>
            <span class="glyphicon glyphicon-star fonte_branca"></span> 
                <a href="01_1_acompanhamento_nutricionista.php?cod=<?php print base64_encode($_SESSION['cod_paciente_selecionado']) ?>" class='link_branco'>Acompanhamento
                </a>
                
                <span class="glyphicon glyphicon-list-alt padding_left_20"></span> 
                <a href="01_lista_consultas_paciente.php?cod=<?php print base64_encode($_SESSION['cod_paciente_selecionado']) ?>" class='link_branco'>Consultas
                </a>
                
                <span class="glyphicon glyphicon-tag padding_left_20"></span> 
                <a href="01_1_alteracao_paciente_dados_pessoais.php?cod=<?php print base64_encode($_SESSION['cod_paciente_selecionado']) ?>" class='link_branco'>Dados Pessoais</a>
            </div>
        </div>
        
        
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10">
            
            <div class="col-md-1">
                <?php 
                print $dados_habitos_alimentares['foto_paciente'];
                   
                if($dados_habitos_alimentares['foto_paciente'] != 'avatar_masculino.png' and $dados_habitos_alimentares['foto_paciente'] != 'avatar_feminino.png')
                    print "<img src='fotos/" . $dados_habitos_alimentares['foto_paciente'] . "' width='120' height='120' class='img-responsive margin_auto'>";
                else if ($dados_habitos_alimentares['sexo'] == 'M')
                    print "<img src='fotos_usuarios/avatar_masculino.png' align='left' width='95''>";
                else
                    print "<img src='fotos_usuarios/avatar_feminino.png'  align='left' width='95'>";
                ?>
            </div>
            
            
            <div class="col-md-8">
                <h3 class="text-uppercase fonte_branca">&nbsp;&nbsp;<?php print $dados_habitos_alimentares['nome_paciente'] ?></h3>
                <h4 class="text-uppercase fonte_branca">&nbsp;&nbsp;
                    <?php 
                    // Separa em dia, mês e ano
                    list($ano, $mes, $dia) = explode('-', $dados_habitos_alimentares['data_nascimento'] );

                    // Descobre que dia é hoje e retorna a unix timestamp
                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                    // Descobre a unix timestamp da data de nascimento do fulano
                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

                    // Depois apenas fazemos o cálculo já citado :)
                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                    print $idade . " anos";
                    ?>
                </h4>                                
            </div>
            
            
            
            
            <div class="col-md-3 text-uppercase centralizado fundo_verde_claro fonte_branca padding_20">
                
                <div class="col-md-3 padding_20">
                    <span class="glyphicon glyphicon-calendar fonte_icone_sucesso"></span>
                </div>
            
                <div class="col-md-9 esquerdo">
                    <span class="fonte_muito_pequena">Última Avaliação</span> <br/>
                    <span class=" fonte_icone_sucesso fonte_branca  fonte_muito_grande">
                        <?php 
                        //recuperando a data da última avaliacao
                        $sqlstring_ultima_avaliacao  = "select tb_habito_alimentar.data_habito_alimentar from tb_habito_alimentar ";
                        $sqlstring_ultima_avaliacao .= "where tb_habito_alimentar.cod_paciente = " . $_SESSION['cod_paciente_selecionado'];  
                        $sqlstring_ultima_avaliacao .= " order by cod_habito_alimentar desc limit 1";
                        $info_ultima_avaliacao = $db->sql_query($sqlstring_ultima_avaliacao);
                        $dados_ultima_avaliacao = mysql_fetch_array($info_ultima_avaliacao);
                        list($ano, $mes, $dia) = explode('-', $dados_ultima_avaliacao['data_habito_alimentar']);
                        print  $dia."/".$mes."/".$ano ;
                        ?>
                    </span>                                        
                </div> 
                
            </div>
            
            
        </div>
    </div>
    <!-- fim - titulo da lista de pacientes -->
    
    
</div>
<!-- fim do container fluid -->