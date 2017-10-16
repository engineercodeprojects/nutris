<?php
// verifica se o usuário passou pelo login e protege contra acesso direto pela URL
if($_SESSION['logado'] != 1)    header('Location:index.php');
?>