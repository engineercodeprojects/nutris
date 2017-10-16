<?php
//inicia a sessão
session_start();
//apaga todos os dados existentes na sessão
session_destroy();
//envia o usuário para a página de login
header('Location: index.php');
?>



