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

$busca = mysql_real_escape_string($_POST['palavra']);


$sqlstring_refeicoes  = "select tb_alimento.cod_alimento, tb_alimento.alimento, tb_alimento.peso, tb_alimento.caloria, tb_alimento.medida_caseira, tb_unidade_medida.sigla, tb_grupo.grupo, tb_grupo.descricao_grupo from tb_alimento ";
$sqlstring_refeicoes .= "inner join tb_grupo on tb_alimento.cod_grupo = tb_grupo.cod_grupo ";
$sqlstring_refeicoes .= "inner join tb_unidade_medida on tb_unidade_medida.cod_unidade_medida = tb_alimento.cod_unidade_medida ";
$sqlstring_refeicoes .= "where tb_alimento.alimento like '%" . $busca . "%' or tb_grupo.grupo like '%" . $busca . "%' or tb_grupo.descricao_grupo like '%" . $busca . "%'";

$info_refeicoes = $db->sql_query($sqlstring_refeicoes);
$linhas_refeicoes = $db->sql_linhas($info_refeicoes);

?>



            <label for="alimento_refeicao">Alimentos dessa refeição </label>
            <div id="alimentos_refeicao" name="alimentos_refeicao">
                <div class="col-md-6 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Alimento</div>
                <div class="col-md-3 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Grupo</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Peso</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10">Calorias</div>
                <div class="col-md-1 fundo_verde_claro fonte_branca padding_top_10 padding_bottom_10 centralizado fonte_branca"><span class="glyphicon glyphicon-plus" alt="Adicionar Alimento da Refeição" title="Adicionar Alimento da Refeição"></span></div>
                    
            </div>
         

<?php
if($linhas_refeicoes > 0)
{
    while($dados_refeicoes=mysql_fetch_array($info_refeicoes))
    {
    ?>
    <div id="alimentos_refeicao" name="alimentos_refeicao">
        <div class="col-md-6 padding_top_10 padding_bottom_10 text-uppercase borda_inferior "><?php print $dados_refeicoes['alimento'] ?></div>
        <div class="col-md-3 padding_top_10 padding_bottom_10 text-uppercase borda_inferior"><?php print $dados_refeicoes['medida_caseira'] ?></div>
        <div class="col-md-1 padding_top_10 padding_bottom_10 borda_inferior"><?php print number_format($dados_refeicoes['peso'],1) . " " . $dados_refeicoes['sigla'] ?></div>
        <div class="col-md-1 padding_top_10 padding_bottom_10 borda_inferior"><?php print number_format($dados_refeicoes['caloria'],0) ?> kcal</div>
        <div class="col-md-1 padding_top_10 padding_bottom_10 centralizado borda_inferior">
            <a href="#" class="link_detalhes" onclick="javascript:inserir_alimento('<?php print $dados_refeicoes['cod_alimento'] ?>','<?php print $dados_refeicoes['alimento'] ?>','<?php print $dados_refeicoes['peso'] ?>','<?php print $dados_refeicoes['caloria'] ?>','<?php print $dados_refeicoes['medida_caseira'] ?>')">
            <span class="glyphicon glyphicon-plus-sign" alt="Adicionar Alimento da Refeição" title="Adicionar Alimento da Refeição"></span>
            </a>
        </div>
                    
    </div>   
    <?php
    }
}
else
{
    ?>
    <table class="table table-responsive">          
          
    <tr>
    <td colspan="9" style="border:0px solid #fff">
        &nbsp;
    </td>
    </tr>

    <tr>
    <td colspan="9" class="fonte_verde_escuro" style="border:0px solid #fff">
        <div class="alert alert-success" role="alert">
            <strong><span class="glyphicon glyphicon-info-sign"></span> Nenhuma alimento</strong> encontrado!
        </div>    
    </td>
    </tr>

    </table>
    <?php
}
    ?>

