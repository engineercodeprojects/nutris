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
        position:absolute;
        z-index:1;
    }
    
    .barra{
        background-color:rgba(10,68,56,.2);
        height:100%;
        width:300px;
        position:absolute;
        transition: all .2s linear;
        left:-300px;
        z-index:99;
    }
    
    .barra_fixa
    {
        background-color:#0A4438;
        height:100%;
        width:75px;
        position:absolute;        
        left:0px;
        z-index:98;
        
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
        background-color:#0A4438;
        padding:20px;
        transition: all .2s linear;
        color:#f4f4f9;
        border-bottom:1px solid #18A689;
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
    
        <a href=""><div class="link"><span class="glyphicon glyphicon-home padding_right_30"></span> </div></a>        
        <a href=""><div class="link"><span class="glyphicon glyphicon-apple padding_right_30"></span></div></a>

    </nav>
    
</div>
    
    
    
<div class="barra">

    <nav>
    
        <a href=""><div class="link"><span class="glyphicon glyphicon-home padding_right_30"></span> HOME</div></a>        
        <a href=""><div class="link"><span class="glyphicon glyphicon-apple padding_right_30"></span> DIETAS</div></a>
        
    </nav>


    
    
</div>

</body>