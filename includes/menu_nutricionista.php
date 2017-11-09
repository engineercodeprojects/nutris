<style>
*{
        margin:0;
        padding:0;
    }

    
    #check{
        display:none;
    }   
    
    #icone
    {
        cursor:pointer;
        padding:15px;
        position:fixed;
        color:#fff;
        z-index:100;
    }
    
    .nome_usuario{
        width:200px;
        position:fixed;
        transition: all .2s linear;
        left:-200px;  
        top:5px;
        font-weight:normal;
        z-index: 99;
        
    }
    
    .barra{
        background-color:rgba(10,68,56,.9);
        height:100%;
        width:300px;
        position:fixed;
        transition: all .2s linear;
        left:-300px;
        z-index: 99;
    }
    
    .barra_fixa
    {
        background-color:#0A4438;
        height:100%;
        width:75px;
        position:fixed;        
        left:0px;
        z-index: 98;
        
    }
    
    nav{
        width:100%;
        position:absolute;
        top:60px;
    }
    
    nav a{
        text-decoration:none;
    }
    
    .link{
        /*background-color:rgba(10,68,56,.9);*/
        padding:20px;        
        transition: all .2s linear;
        color:#f4f4f9;
        /*border-bottom:1px solid #18A689;*/
    }
    
    .link:hover{
        background-color:#18A689;
    }
    
     #check:checked ~.barra .nome_usuario{
        transform: translateX(300px);
    }
    
    #check:checked ~.barra{
        transform: translateX(300px);
    }
    
   
</style>



<script>

    function recua_menu(clique)
    {
        situacao = document.getElementById("check").checked;
        
        if(situacao == 0 && clique == 5)
        {
            document.getElementById("barra_deslizante").style.WebkitTransform = "translateX(300px)";
            document.getElementById("check").checked=1;
        }
        else if((situacao == 1 && clique == 10))
        {
            document.getElementById("barra_deslizante").style.WebkitTransform = "translateX(0px)";
            document.getElementById("check").checked=0;
        }
        else
        {
            document.getElementById("barra_deslizante").style.WebkitTransform = "translateX(0px)";
            document.getElementById("check").checked=0;
        }
        
    }

</script>


<body>


<input type="checkbox" id="check">
<label id="icone" for="check">
    <a href="#" onclick="recua_menu(5)">
    <img src="img/hamburguer.png" class="padding_left_05">
    </a>
</label>
    

    
    
<div class="barra_fixa hidden-xs">

    <nav>
    
        <a href="#" alt="Dashboard Nutricionista" title="Dashboard Nutricionista">
        <div class="link"><img src="img/icone_home_lateral.png"></div>
        </a>
        
        <a href="01_lista_alimentos.php" alt="Lista de Alimentos" title="Lista de Alimentos">
        <div class="link"><img src="img/icone_alimento_lateral.png"></div>
        </a>
        
        <a href="01_lista_refeicoes.php" alt="Lista de Refeições" title="Lista de Refeições">
        <div class="link"><img src="img/icone_refeicoes_lateral.png"></div>
        </a>
        
<!--        <a href="01_lista_reeducaacoes.php" alt="Lista de Reeducações" title="Lista de Reeducações">-->
        <a href="">
        <div class="link"><img src="img/icone_reeducacoes_lateral.png"></div>
        </a>
        
<!--        <a href="01_lista_programas.php" alt="Lista de Programas" title="Lista de Programas">-->
        <a href="">
        <div class="link"><img src="img/icone_programas_lateral.png"></div>
        </a>
        
        <a href="01_lista_pacientes.php" alt="Lista de Pacientes" title="Lista de Pacientes">
        <div class="link"><img src="img/icone_pacientes_lateral.png"></div>
        </a>
        
        <a href="01_lista_usuarios_plataforma.php" alt="Lista de Usuários" title="Lista de Usuários">        
        <div class="link"><img src="img/icone_usuarios_lateral.png"></div>
        </a>
        
        <a href="logout.php" alt="Sair da Plataforma Nutris" title="Sair da Plataforma Nutris">
        <div class="link"><img src="img/icone_sair_lateral.png"></div>
        </a>

    </nav>
    
</div>
 

    
    
<div class="barra" id="barra_deslizante">

    <nav>
            
        
        <div class="fonte_grande fonte_verde_claro nome_usuario padding_top_15 text-uppercase">            
            <?php print $_SESSION['nome_apelido'];?> 
        </div>
        
        <a href="#">
            <div class="link padding_top_05"><img src="img/icone_home_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">HOME</span> 
            </div>
        </a>
        
        
        <a href="01_lista_alimentos.php" alt="Lista de Alimentos" title="Lista de Alimentos">
            <div class="link padding_top_05"><img src="img/icone_alimento_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">ALIMENTOS</span> 
            </div>
        </a>
        
        
        <a href="01_lista_refeicoes.php" alt="Lista de Refeições" title="Lista de Refeições">
            <div class="link padding_top_05"><img src="img/icone_refeicoes_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">REFEIÇÕES</span> 
            </div>
        </a>
        
        
<!--        <a href="01_lista_reeducacoes.php" alt="Lista de Reeducações" title="Lista de Reeducações">-->
            <a href="">
            <div class="link" style='padding-top:25px'><img src="img/icone_reeducacoes_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">REEDUCAÇÕES</span> 
            </div>
        </a>
        
<!--        <a href="01_lista_programas.php" alt="Lista de Programas" title="Lista de Programas">-->
            <a href="">
            <div class="link"  style='padding-top:20px'><img src="img/icone_programas_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">PROGRAMAS</span> 
            </div>
        </a>
        
        
        <a href="01_lista_pacientes.php" alt="Lista de Pacientes" title="Lista de Pacientes">
            <div class="link padding_top_05"><img src="img/icone_pacientes_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">PACIENTES</span> 
            </div>
        </a>
        

        <a href="01_lista_usuarios_plataforma.php" alt="Lista de Usuários" title="Lista de Usuários">   
            <div class="link padding_top_05"><img src="img/icone_usuarios_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">USUÁRIOS</span> 
            </div>
        </a>
        
        <a href="logout.php" alt="Sair da Plataforma Nutris" title="Sair da Plataforma Nutris">
            <div class="link"><img src="img/icone_sair_lateral.png" align=left class="img-responsive"> <span class="padding_left_60">SAIR</span> 
            </div>
        </a>
<!--
        <a href="01_lista_refeicoes.php" alt="Lista de Refeições" title="Lista de Refeições">
            <div class="link">
                <span class="glyphicon glyphicon-grain padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">REFEIÇÕES</span> 
            </div>
        </a>
        
        
        
        <a href="01_lista_pacientes.php" alt="Lista de Pacientes" title="Lista de Pacientes">
            <div class="link">
                <span class="glyphicon glyphicon-user padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">PACIENTES</span> 
            </div>
        </a>
        
        
        <a href="logout.php" alt="Sair da Plataforma Nutris" title="Sair da Plataforma Nutris">
            <div class="link">
                <span class="glyphicon glyphicon-log-out padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">SAIR</span> 
            </div>
        </a>
-->
    

    </nav>


    
    
</div>

</body>