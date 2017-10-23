<!DOCTYPE html>
<?php 
// acentuação PHP
ini_set('default_charset','UTF-8');
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
<body class="fundo_login">

    
    
<div class="container-fluid">

    <!-- inicio da única linha da página -->
    <div class="row margin_top_150">
        
        
        <!-- inicio coluna da esquerda - logo -->
        <div class='col-md-offset-2 col-md-4 margin_top_70'>
            <img src="img/logo_login.png" class="img-responsive  margin_auto" alt="logo nutris" alt="logo nutris">
        </div>
        <!-- fim coluna da esquerda - logo -->
        
        
        
        
        <!-- inicio coluna da direita - formulário de login -->
        <div class='col-md-4 margin_top_100'>
        <!-- inicio formulario de login -->
        <form method="post" action="verifica_login.php">
          <div class="form-group">
            <label for="login"><span class="fonte_verde_escuro">Login</span></label>
            <input type="text" class="form-control borda_verde_light  borda_arredondada_20 altura_50" name="login" id="login" placeholder="LOGIN" style="border:1px solid #18A689">
          </div>

          <div class="form-group">
              <label for="senha"><span class="fonte_verde_escuro">Senha</span></label>
            <input type="password" class="form-control borda_verde_light  borda_arredondada_20 altura_50" name="senha" id="senha" placeholder="SENHA" style="border:1px solid #18A689; box-sizing: border-box;">
          </div>
          
          <br/>
          <button type="submit" class="btn btn_verde_claro fonte_branca largura_40 altura_40">Acessar</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
          <span class="glyphicon glyphicon-lock"></span> Esqueci minha senha

        </form>
        <!-- fim formulario de login -->
        </div>
        <!-- fim coluna da direita - formulário de login -->
        
        
    </div>
    <!-- fim da única linha da página -->
    
</div>
    

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- utilizado para abrir o modal no evento onload -->
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal').modal('show');
        });
    </script>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

    


</body>
</html>
