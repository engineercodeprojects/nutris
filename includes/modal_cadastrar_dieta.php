<?php
// dia da semana selecionado
$sqlstring_dia_semana  = "Select * from tb_dia_semana where cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
$info_dia_semana = $db->sql_query($sqlstring_dia_semana);
$dados_dia_semana=mysql_fetch_array($info_dia_semana);

?>
<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modal_cadastrar_dieta" tabindex="-1" role="dialog" aria-labelledby="modal_cadastrar_dieta">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="location.href='01_3_cadastro_dieta.php'"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Prescrição de Dieta - <span class="fonte_verde_claro negrito"><?php print $dados_dia_semana['dia_semana'] ?></span></h4>
      </div>
      <div class="modal-body">
        
          
          <!-- inicio formulário prescricao de dieta -->
          <form method="post" action="01_3_cadastro_dieta.php?cad_dieta=1">
              
            <?php
            // lista todos os café da manhã
            $sqlstring_cafe_manha  = "Select * from tb_refeicao where cod_tipo_refeicao = 1 and cod_status = 1";            
            $info_cafe_manha = $db->sql_query($sqlstring_cafe_manha);
            $linhas_cafe_manha = $db->sql_linhas($info_cafe_manha);  
              
            //café da manhã cadastrado
            $sqlstring_cafe_selecionado  = "Select * from tb_dieta where cod_tipo_refeicao = 1 and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
            $info_cafe_selecionado = $db->sql_query($sqlstring_cafe_selecionado);
            $dados_cafe_selecionado=mysql_fetch_array($info_cafe_selecionado);
            $linhas_cafe_selecionado = $db->sql_linhas($info_cafe_selecionado); 
            ?>
            <!-- inicio café da manha -->
            <div class="row">
              <div class="form-group col-md-6">
                <label for="cafe_manha">Café da Manhã </label>
                <select class="form-control text-uppercase" name="cafe_da_manha" id="cafe_da_manha">
                        <option value="0">Selecione o Café da Manhã</option>
                    <?php
                    while($dados_cafe_manha=mysql_fetch_array($info_cafe_manha))
                    {
                        if($dados_cafe_manha['cod_refeicao'] == $dados_cafe_selecionado['cod_refeicao'])
                            print "<option value=" . $dados_cafe_manha['cod_refeicao'] . " class='text-uppercase' selected>" . $dados_cafe_manha['refeicao'] . "</option>";
                        else
                            print "<option value=" . $dados_cafe_manha['cod_refeicao'] . " class='text-uppercase'>" . $dados_cafe_manha['refeicao'] . "</option>";
                    }                    
                    ?>
                </select>
              </div>
            
              <!-- fim café da manha -->
              
              
              
            <?php
            // lista todos os lanches da manhã
            $sqlstring_lanche_manha  = "select * from tb_refeicao where cod_tipo_refeicao = 2  and cod_status = 1";
            $info_lanche_manha = $db->sql_query($sqlstring_lanche_manha);
            $linhas_lanche_manha = $db->sql_linhas($info_lanche_manha); 
                
            //lanche da manhã cadastrado
            $sqlstring_lanche_manha_selecionado  = "Select * from tb_dieta where cod_tipo_refeicao = 2 and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
            $info_lanche_manha_selecionado = $db->sql_query($sqlstring_lanche_manha_selecionado);
            $dados_lanche_manha_selecionado=mysql_fetch_array($info_lanche_manha_selecionado);
            $linhas_lanche_manha_selecionado = $db->sql_linhas($info_lanche_manha_selecionado); 
            ?>
            <!-- inicio lanche da manha -->
            
              <div class="form-group col-md-6">
                <label for="lanche_manha">Lanche da Manhã  </label>
                <select class="form-control text-uppercase" name="lanche_da_manha" id="lanche_da_manha">
                        <option value="0">Selecione o Lanche da Manhã</option>
                    <?php
                    while($dados_lanche_manha=mysql_fetch_array($info_lanche_manha))
                    {
                        if($dados_lanche_manha['cod_refeicao'] == $dados_lanche_manha_selecionado['cod_refeicao'])
                            print "<option value=" . $dados_lanche_manha['cod_refeicao'] . " class='text-uppercase' selected>" . $dados_lanche_manha['refeicao'] . "</option>";
                        else
                            print "<option value=" . $dados_lanche_manha['cod_refeicao'] . " class='text-uppercase'>" . $dados_lanche_manha['refeicao'] . "</option>";
                    }                    
                    ?>
                </select>
              </div>
            </div>
            <!-- fim lanche da manha -->
              
              
              
            <?php
            // lista todos os almocos
            $sqlstring_almoco  = "select * from tb_refeicao where cod_tipo_refeicao = 3 and cod_status = 1";            
            $info_almoco = $db->sql_query($sqlstring_almoco);
            $linhas_almoco = $db->sql_linhas($info_almoco);
              
            //almoço cadastrado
            $sqlstring_almoco_selecionado  = "Select * from tb_dieta where cod_tipo_refeicao = 3 and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
            $info_almoco_selecionado = $db->sql_query($sqlstring_almoco_selecionado);
            $dados_almoco_selecionado=mysql_fetch_array($info_almoco_selecionado);
            $linhas_almoco_selecionado = $db->sql_linhas($info_almoco_selecionado);
            ?>
            <!-- inicio almoço -->
            <div class="row">
              <div class="form-group col-md-6">
                <label for="almoco">Almoço  </label>
                <select class="form-control text-uppercase" name="almoco" id="almoco">
                        <option value="0">Selecione o Almoço</option>
                    <?php
                    while($dados_almoco=mysql_fetch_array($info_almoco))
                    {
                        if($dados_almoco['cod_refeicao'] == $dados_almoco_selecionado['cod_refeicao'])
                            print "<option value=" . $dados_almoco['cod_refeicao'] . " class='text-uppercase' selected>" . $dados_almoco['refeicao'] . "</option>";
                        else
                            print "<option value=" . $dados_almoco['cod_refeicao'] . " class='text-uppercase'>" . $dados_almoco['refeicao'] . "</option>";
                    }                    
                    ?>
                </select>
              </div>
            
              <!-- fim almocos -->  
              
              
              
              
            <?php
            // lista todos os café da tarde
            $sqlstring_cafe_tarde  = "select * from tb_refeicao where cod_tipo_refeicao = 4 and cod_status = 1";            
            $info_cafe_tarde = $db->sql_query($sqlstring_cafe_tarde);
            $linhas_cafe_tarde = $db->sql_linhas($info_cafe_tarde); 
                
            //café da tarde cadastrado
            $sqlstring_cafe_tarde_selecionado  = "Select * from tb_dieta where cod_tipo_refeicao = 4 and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
            $info_cafe_tarde_selecionado = $db->sql_query($sqlstring_cafe_tarde_selecionado);
            $dados_cafe_tarde_selecionado=mysql_fetch_array($info_cafe_tarde_selecionado);
            $linhas_cafe_tarde_selecionado = $db->sql_linhas($info_cafe_tarde_selecionado);
            ?>
            <!-- inicio café da tarde -->
            
              <div class="form-group col-md-6">
                <label for="cafe_da_tarde">Café da Tarde </label>
                <select class="form-control text-uppercase" name="cafe_da_tarde" id="cafe_da_tarde">
                        <option value="0">Selecione o Café da Tarde</option>
                    <?php
                    while($dados_cafe_tarde=mysql_fetch_array($info_cafe_tarde))
                    {
                        if($dados_cafe_tarde['cod_refeicao'] == $dados_cafe_tarde_selecionado['cod_refeicao'])
                            print "<option value=" . $dados_cafe_tarde['cod_refeicao'] . " class='text-uppercase' selected>" . $dados_cafe_tarde['refeicao'] . "</option>";
                        else
                            print "<option value=" . $dados_cafe_tarde['cod_refeicao'] . " class='text-uppercase'>" . $dados_cafe_tarde['refeicao'] . "</option>";
                    }                    
                    ?>
                </select>
              </div>
            </div>
              <!-- fim café da tarde -->  
              
              
              
            <?php
            // lista todos os jantares
            $sqlstring_jantar  = "select * from tb_refeicao where cod_tipo_refeicao = 5 and cod_status = 1";            
            $info_jantar = $db->sql_query($sqlstring_jantar);
            $linhas_jantar = $db->sql_linhas($info_jantar); 
              
            //jantar cadastrado
            $sqlstring_jantar_selecionado  = "Select * from tb_dieta where cod_tipo_refeicao = 5 and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
            $info_jantar_selecionado = $db->sql_query($sqlstring_jantar_selecionado);
            $dados_jantar_selecionado=mysql_fetch_array($info_jantar_selecionado);
            $linhas_jantar_selecionado = $db->sql_linhas($info_jantar_selecionado);
            ?>
            <!-- inicio jantar --> 
              <div class="row">
              <div class="form-group col-md-6">
                <label for="jantar">Jantar </label>
                <select class="form-control text-uppercase" name="jantar" id="jantar">
                        <option value="0">Selecione o Jantar</option>
                    <?php
                    while($dados_jantar=mysql_fetch_array($info_jantar))
                    {
                        if($dados_jantar['cod_refeicao'] == $dados_jantar_selecionado['cod_refeicao'])
                            print "<option value=" . $dados_jantar['cod_refeicao'] . " class='text-uppercase' selected>" . $dados_jantar['refeicao'] . "</option>";
                        else
                            print "<option value=" . $dados_jantar['cod_refeicao'] . " class='text-uppercase'>" . $dados_jantar['refeicao'] . "</option>";
                    }                    
                    ?>
                </select>
              </div>            
              <!-- fim jantar -->
              
              
            <?php
            // lista todos as ceias
            $sqlstring_ceia  = "select * from tb_refeicao where cod_tipo_refeicao = 6 and cod_status=1";            
            $info_ceia = $db->sql_query($sqlstring_ceia);
            $linhas_ceia = $db->sql_linhas($info_ceia);  
                  
            //ceia cadastrada
            $sqlstring_ceia_selecionado  = "Select * from tb_dieta where cod_tipo_refeicao = 6 and cod_paciente = " . $_SESSION['cod_paciente_selecionado'] . " and cod_dia_semana = " . $_SESSION['cod_dia_semana'];            
            $info_ceia_selecionado = $db->sql_query($sqlstring_ceia_selecionado);
            $dados_ceia_selecionado=mysql_fetch_array($info_ceia_selecionado);
            $linhas_ceia_selecionado = $db->sql_linhas($info_ceia_selecionado);
            ?>
            <!-- inicio ceia -->               
              <div class="form-group col-md-6">
                <label for="ceia">Ceia</label>
                <select class="form-control text-uppercase" name="ceia" id="ceia">
                        <option value="0">Selecione a Ceia</option>
                    <?php
                    while($dados_ceia=mysql_fetch_array($info_ceia))
                    {
                        if($dados_ceia['cod_refeicao'] == $dados_ceia_selecionado['cod_refeicao'])
                            print "<option value=" . $dados_ceia['cod_refeicao'] . " class='text-uppercase' selected>" . $dados_ceia['refeicao'] . "</option>";
                        else
                            print "<option value=" . $dados_ceia['cod_refeicao'] . " class='text-uppercase'>" . $dados_ceia['refeicao'] . "</option>";
                    }                    
                    ?>
                </select>
              </div>
            </div>
              <!-- fim ceia -->
              
            <input type="hidden" name="collapse" id="collapse" value="<?php print '1' ?>">
              
            <div class="modal-footer">
                <input type="submit" class="btn btn_verde_claro" value="Prescrever Dieta">
                <input type="button" class="btn btn_verde_claro" value="Cancelar" onclick="location.href='01_3_cadastro_dieta.php'">
            </div> 
          
          </form>          
          <!-- inicio formulário prescricao de dieta -->
          
          
          
      </div>
      
    </div>
  </div>
</div>  