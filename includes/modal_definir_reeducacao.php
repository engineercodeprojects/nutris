<div class="modal fade bs-example-modal-lg" id="modal_definir_reeducacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  aria-label="Close" onclick="location.href='01_1_cadastro_paciente_prescricao.php'"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fonte_media fonte_verde_escuro"> <span class="glyphicon glyphicon-check"></span> Paciente - Reeducação Alimentar </h4>
      </div>
      <div class="modal-body">
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 1 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
          
            //selecionando as reeducações do programa do paciente
            $sqlstring_reeducacoes_programa   = "select * from tb_programa ";
            $sqlstring_reeducacoes_programa  .= "where cod_programa = " . $_SESSION['cod_programa_selecionado'];          
            $info_reeducacoes_programa = $db->sql_query($sqlstring_reeducacoes_programa);            
            $dados_reeducacoes_programa = mysql_fetch_array($info_reeducacoes_programa);
          
            $reeducacoes_do_programa = explode(';', $dados_reeducacoes_programa['reeducacoes_programa']);
            $tamanho_reeducacoes_do_programa = sizeof($reeducacoes_do_programa);
          ?>
          
          <form method="post" action="01_1_cadastro_paciente_prescricao.php?reeducacoes=1">
          
          <!--inicio  reeducação do domingo -->
          <?php
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          <div class="row">
          <div class="col-md-12">
              <label name="l_domingo" id="l_domingo">Domingo</label>
          <select class="form-control text-uppercase" name="domingo" id="domingo">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                          
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          </div>
          </div>
          <!--fim  reeducação do domingo -->
          
          
          
          
          
          
          
          
          
          <!--inicio  reeducação da segunda-feira -->
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 2 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
              
              
              
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          <div class="row">
          <div class="col-md-6 padding_top_10">
          <label name="l_segunda_feira" id="l_segunda_feira">Segunda-feira</label>
          <select class="form-control text-uppercase" name="segunda_feira" id="segunda_feira">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          
          </div>
          <!--fim  reeducação do segunda-feira -->
          
          
          
          
          
          
          
          
          
          
          
          <!--inicio  reeducação da terca-feira -->
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 3 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
              
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          
          <div class="col-md-6 padding_top_10">
          <label name="l_terca_feira" id="l_terca_feira">Terça-feira</label>
          <select class="form-control text-uppercase" name="terca_feira" id="terca_feira">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          </div>
          </div>
          <!--fim  reeducação do terca-feira -->
          
          
          
          
          
          
          
          
          
          <!--inicio  reeducação da quarta-feira -->
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 4 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
              
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          <div class="row">
          <div class="col-md-6 padding_top_10">
          <label name="l_quarta_feira" id="l_quarta_feira">Quarta-feira</label>
          <select class="form-control text-uppercase" name="quarta_feira" id="quarta_feira">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          
          </div>
          <!--fim  reeducação do quarta-feira -->
          
          
          
          
          
          
          
          
          
          
          
          <!--inicio  reeducação da quinta-feira -->
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 5 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
              
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          
          <div class="col-md-6 padding_top_10">
          <label name="l_quinta_feira" id="l_quinta_feira">Quinta-feira</label>
          <select class="form-control text-uppercase" name="quinta_feira" id="quinta_feira">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          </div>
          </div>
          <!--fim  reeducação do quinta-feira -->
          
          
          
          
          
          
          
          
          <!--inicio  reeducação da sexta-feira -->
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 6 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
              
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          <div class="row">
          <div class="col-md-6 padding_top_10">
          <label name="l_sexta_feira" id="l_sexta_feira">Sexta-feira</label>
          <select class="form-control text-uppercase" name="sexta_feira" id="sexta_feira">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          
          </div>
          <!--fim  reeducação do quarta-feira -->
          
          
          
          
          
          
          
          
          
          
          
          <!--inicio  reeducação da sabado -->
          <?php
            $sqlstring_reeducacao_selecionada   = "select * from tb_programa_paciente_reeducacao  ";                
            $sqlstring_reeducacao_selecionada  .=  "where cod_paciente  = " . $_SESSION['cod_paciente_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_consulta  = " . $_SESSION['cod_consulta_selecionada'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_programa  = " . $_SESSION['cod_programa_selecionado'] . " and ";
            $sqlstring_reeducacao_selecionada  .=  "cod_dia_semana  = 7 ";
            $info_reeducacao_selecionada = $db->sql_query($sqlstring_reeducacao_selecionada);            
            $dados_reeducacao_selecionada = mysql_fetch_array($info_reeducacao_selecionada);
              
            $sqlstring_reeducacoes   = "select * from tb_reeducacao ";            
            $sqlstring_reeducacoes  .= "where cod_status = 1 ";
            $info_reeducacoes = $db->sql_query($sqlstring_reeducacoes);            
          ?>
          
          
          <div class="col-md-6 padding_top_10">
          <label name="l_sabado" id="l_sabado">Sábado</label>
          <select class="form-control text-uppercase" name="sabado" id="sabado">
              <option value="0">selecione a reeducação</option>
            <?php
              while($dados_reeducacoes = mysql_fetch_array($info_reeducacoes))
              {
                  $contador = 0;
                  while($contador < $tamanho_reeducacoes_do_programa)
                  {
                      if($reeducacoes_do_programa[$contador] == $dados_reeducacoes['cod_reeducacao'])
                      {
                        if($dados_reeducacoes['cod_reeducacao'] == $dados_reeducacao_selecionada['cod_reeducacao'])
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . " selected>" . $dados_reeducacoes['reeducacao'];
                          else
                            print "<option value = " . $dados_reeducacoes['cod_reeducacao'] . ">" . $dados_reeducacoes['reeducacao'];
                      }
                      
                      $contador++;
                  }                  
              }              
            ?>
          </select>
          
          </div>
          </div>
          <!--fim  reeducação do aabado -->
          
          
          
          
          
      <div class="modal-footer">
        <button type="submit" class="btn btn_verde_claro fonte_branca">Salvar Reeducação</button>        
        <button type="button" class="btn btn_verde_claro fonte_branca"  onclick="location.href='01_1_cadastro_paciente_prescricao.php'">Cancelar</button>
          
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
