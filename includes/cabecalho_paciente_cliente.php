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
        
        
        <div class="well fundo_transparente fonte_verde_claro sem_borda col-md-offset-1 col-md-10">
            
            <div class="col-md-1">
                <?php 
                if($dados_paciente_selecionado['foto_paciente'] != 'avatar_masculino.png' and $dados_paciente_selecionado['foto_paciente'] != 'avatar_feminino.png')
                    print "<img src='fotos_usuarios/" . $dados_paciente_selecionado['foto_paciente'] . "' width='120' height='120' class='img-responsive margin_auto'>";
                else if ($dados_paciente_selecionado['sexo'] == 'M')
                    print "<img src='fotos_usuarios/avatar_masculino.png' align='left' width='95''>";
                else
                    print "<img src='fotos_usuarios/avatar_feminino.png'  align='left' width='95'>";
                ?>
            </div>
            
            
            <div class="col-md-8">
                <h3 class="text-uppercase fonte_branca">&nbsp;&nbsp;<?php print $dados_paciente_selecionado['nome_paciente'] ?></h3>
                <h4 class="text-uppercase fonte_branca">&nbsp;&nbsp;
                    <?php 
                    // Separa em dia, mês e ano
                    list($ano, $mes, $dia) = explode('-', $dados_paciente_selecionado['data_nascimento'] );

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
                    <span class="fonte_muito_pequena">Paciente desde</span> <br/>
                    <span class=" fonte_icone_sucesso fonte_branca  fonte_muito_grande">
                        <?php 
                        list($ano, $mes, $dia) = explode('-', $dados_paciente_selecionado['data_cadastro_paciente']);
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