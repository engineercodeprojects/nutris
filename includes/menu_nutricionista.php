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
        z-index:100;
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
    
    #check:checked ~.barra{
        transform: translateX(300px);
    }
</style>



<body>


<input type="checkbox" id="check">
<label id="icone" for="check"><img src="img/hamburguer.png"></label>

    
<div class="barra_fixa">

    <nav>
    
        <a href=""><div class="link"><span class="glyphicon glyphicon-home padding_right_30 fonte_muito_grande"></span> </div></a>
        <a href=""><div class="link"><span class="glyphicon glyphicon-grain padding_right_30 fonte_muito_grande"></span></div></a>
        <a href=""><div class="link"><span class="glyphicon glyphicon-apple padding_right_30 fonte_muito_grande"></span></div></a>
        <a href="01_lista_pacientes.php" alt="Listagem de todos os pacientes cadastrados" title="Listagem de todos os pacientes cadastrados">
            <div class="link"><span class="glyphicon glyphicon-user padding_right_30 fonte_muito_grande"></span> 
        </div>
        </a>
    


    </nav>
    
</div>
    
    
    
<div class="barra">

    <nav>
    
        <a href=""><div class="link"><span class="glyphicon glyphicon-home padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">HOME</span> </div></a>
        <a href=""><div class="link"><span class="glyphicon glyphicon-grain padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">COMBOS</span> </div></a>
        <a href=""><div class="link"><span class="glyphicon glyphicon-apple padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">DIETAS</span> </div></a>
        
        <a href="01_lista_pacientes.php" alt="Listagem de todos os pacientes cadastrados" title="Listagem de todos os pacientes cadastrados">
            <div class="link">
                <span class="glyphicon glyphicon-user padding_right_30 fonte_muito_grande"></span> <span class="padding_left_30">PACIENTES</span> 
            </div>
        </a>
    


    </nav>


    
    
</div>

</body>