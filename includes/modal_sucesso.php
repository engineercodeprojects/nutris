<?php
if($numero_botoes == 1)
{
?>

<div class="modal fade" id="modal_sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"   onclick="location.href='<?php print $btn_x ?>'" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fonte_media fonte_verde_escuro"> <span class="glyphicon glyphicon-check"></span> <?php print $titulo ?></h4>
      </div>
      <div class="modal-body">
      
            <p><?php print $mensagem ?></p>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default fonte_branca" onclick="location.href='<?php print $btn_esquerda_destino ?>'"><?php print $btn_esquerda ?></button>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php    
}
else
{
?>

<div class="modal fade" id="modal_sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"   onclick="location.href='<?php print $btn_x ?>'" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fonte_media fonte_verde_escuro"> <span class="glyphicon glyphicon-check"></span> <?php print $titulo ?></h4>
      </div>
      <div class="modal-body">
      
            <p><?php print $mensagem ?></p>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default fonte_branca" onclick="location.href='<?php print $btn_esquerda_destino ?>'"><?php print $btn_esquerda ?></button>
        <button type="button" class="btn btn-primary fonte_branca" onclick="location.href='<?php print $btn_direita_destino ?>'"><?php print $btn_direita ?></button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
<?php    
}
?>
