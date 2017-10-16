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



<body>


<input type="checkbox" id="check">
<label id="icone" for="check"><img src="img/hamburguer.png" class="padding_left_05"></label>
    

    
    
<div class="barra_fixa hidden-xs">

    <nav>
    
        <a href=""><div class="link"><span class="glyphicon glyphicon-home padding_right_30 fonte_muito_grande"></span> </div></a>
        
        <a href="01_lista_refeicoes.php" alt="Lista de Refeições" title="Lista de Refeições">
        <div class="link"><span class="glyphicon glyphicon-grain padding_right_30 fonte_muito_grande"></span></div>
        </a>
        
        
        <a href="01_lista_pacientes.php" alt="Lista de Pacientes" title="Lista de Pacientes">
        <div class="link"><span class="glyphicon glyphicon-user padding_right_30 fonte_muito_grande"></span></div>
        </a>
        
        <a href="logout.php" alt="Sair da Plataforma Nutris" title="Sair da Plataforma Nutris">
        <div class="link"><span class="glyphicon glyphicon-off padding_right_30 fonte_muito_grande"></span></div>
        </a>
    


    </nav>
    
</div>
    


    
    
<div class="barra">

    <nav>
        
        <div class="fonte_grande fonte_verde_claro nome_usuario padding_top_15 text-uppercase">            
            <?php print $_SESSION['nome_apelido'];?>
        </div>
       
        <a href="">
            <div class="link"><span class="glyphicon glyphicon-home padding_right_30 fonte_muito_grande">
                </span> <span class="padding_left_30">HOME</span> 
            </div>
        </a>
        
        
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
                <span class="glyphicon glyphicon-off padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">SAIR</span> 
            </div>
        </a>
    

    </nav>


    
    
</div>

</body>