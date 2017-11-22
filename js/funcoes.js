//mascara data de nascimento
function mascara_data()
{
    data_nascimento = document.getElementById('data_nascimento').value;
    if(data_nascimento.length == 2 || data_nascimento.length == 5)
        document.getElementById('data_nascimento').value = data_nascimento + "/";
    
}


//funcao para validar campos vazios
function campos_vazios()
{
    nivel_acesso = document.getElementById("nivel_acesso").value;
    
    enviar = 0;
    
    
    //nivel_acesso pj
    if(nivel_acesso != 4)
    {
        //ocultando mensagens de erro pertencentes a pessoa juridica
        document.getElementById('erro_cpf_cnpj1').style.display = 'none';
        document.getElementById('erro_rg_ie1').style.display = 'none';
        document.getElementById('erro_empresa').style.display = 'none';
        document.getElementById('erro_nome_fantasia').style.display = 'none';
        document.getElementById('erro_responsavel').style.display = 'none';
        
        
        //cpf
        if(document.getElementById('cpf_cnpj').value == "" || document.getElementById('cpf_cnpj').value.length < 11)
        {
            document.getElementById('erro_cpf_cnpj').style.display = 'inline-block';
            document.getElementById('cpf_cnpj').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_cpf_cnpj').style.display = 'none';
            document.getElementById('cpf_cnpj').style.border = "1px solid #ccc";            
        }
        
        
        //rg
        if(document.getElementById('rg_ie').value == "" || document.getElementById('rg_ie').value.length < 9)
        {
            document.getElementById('erro_rg_ie').style.display = 'inline-block';
            document.getElementById('rg_ie').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_rg_ie').style.display = 'none';
            document.getElementById('rg_ie').style.border = "1px solid #ccc";            
        }
        
        //nome
        if(document.getElementById("nome_usuario").value == "" || document.getElementById('nome_usuario').value.length < 5 || !isNaN(document.getElementById('nome_usuario').value))
        {
            document.getElementById('erro_nome').style.display = 'inline-block';
            document.getElementById('nome_usuario').style.border = "1px solid #f00";
            document.getElementById('nome_usuario').focus();
            enviar = 1;
        }    
        else
        {
            document.getElementById('erro_nome').style.display = 'none';
            document.getElementById('nome_usuario').style.border = "1px solid #ccc";        
        }
        
        //profissao
        if(document.getElementById("profissao").value == "" || document.getElementById('profissao').value.length < 3 || !isNaN(document.getElementById('profissao').value))
        {
            document.getElementById('erro_profissao').style.display = 'inline-block';
            document.getElementById('profissao').style.border = "1px solid #f00";
            document.getElementById('profissao').focus();
            enviar = 1;
        }    
        else
        {
            document.getElementById('erro_profissao').style.display = 'none';
            document.getElementById('profissao').style.border = "1px solid #ccc";        
        }
        
        //data de nascimento
        if(document.getElementById("data_nascimento").value == ""  || document.getElementById('data_nascimento').value.length < 10)
        {
            document.getElementById('erro_data_nascimento').style.display = 'inline-block';
            document.getElementById('data_nascimento').style.border = "1px solid #f00";
            document.getElementById('data_nascimento').focus();
            enviar = 1;
        }    
        else
        {
            document.getElementById('erro_data_nascimento').style.display = 'none';
            document.getElementById('data_nascimento').style.border = "1px solid #ccc";        
        }
    }
    else
    {
        //ocultando mensagens de erro pertencentes a pessoa fisica
        document.getElementById('erro_cpf_cnpj').style.display = 'none';
        document.getElementById('erro_rg_ie').style.display = 'none';
        document.getElementById('erro_nome').style.display = 'none';
        document.getElementById('erro_profissao').style.display = 'none';
        document.getElementById('erro_data_nascimento').style.display = 'none';
        
        //cnpj
        if(document.getElementById('cpf_cnpj1').value == "" || document.getElementById('cpf_cnpj1').value.length < 15 || isNaN(document.getElementById('cpf_cnpj1').value))
        {
            document.getElementById('erro_cpf_cnpj1').style.display = 'inline-block';
            document.getElementById('cpf_cnpj1').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_cpf_cnpj1').style.display = 'none';
            document.getElementById('cpf_cnpj1').style.border = "1px solid #ccc";            
        }
        
        
        //ie
        if(document.getElementById('rg_ie1').value == "")
        {
            document.getElementById('erro_rg_ie1').style.display = 'inline-block';
            document.getElementById('rg_ie1').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_rg_ie1').style.display = 'none';
            document.getElementById('rg_ie1').style.border = "1px solid #ccc";            
        }
        
        //empresa
        if(document.getElementById('empresa').value == "")
        {
            document.getElementById('erro_empresa').style.display = 'inline-block';
            document.getElementById('empresa').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_empresa').style.display = 'none';
            document.getElementById('empresa').style.border = "1px solid #ccc";            
        }
        
        //nome fantasia
        if(document.getElementById('nome_fantasia').value == "")
        {
            document.getElementById('erro_nome_fantasia').style.display = 'inline-block';
            document.getElementById('nome_fantasia').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_nome_fantasia').style.display = 'none';
            document.getElementById('nome_fantasia').style.border = "1px solid #ccc";            
        }
        
        //responsavel
        if(document.getElementById('responsavel').value == "")
        {
            document.getElementById('erro_responsavel').style.display = 'inline-block';
            document.getElementById('responsavel').style.border = "1px solid #f00";
            enviar = 1;
        }
        else
        {
            document.getElementById('erro_responsavel').style.display = 'none';
            document.getElementById('responsavel').style.border = "1px solid #ccc";            
        }
    }
    
    
    
    //endereco
    if(document.getElementById('endereco').value == "" || document.getElementById('endereco').value.length < 3)
    {
        document.getElementById('erro_endereco').style.display = 'inline-block';
        document.getElementById('endereco').style.border = "1px solid #f00";
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_endereco').style.display = 'none';
        document.getElementById('endereco').style.border = "1px solid #ccc";            
    }
    
    
    //numero
    if(document.getElementById('numero').value == "" || isNaN(document.getElementById('numero').value))
    {
        document.getElementById('erro_numero').style.display = 'inline-block';
        document.getElementById('numero').style.border = "1px solid #f00";
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_numero').style.display = 'none';
        document.getElementById('numero').style.border = "1px solid #ccc";            
    }

    
    //bairro
    if(document.getElementById('bairro').value == "")
    {
        document.getElementById('erro_bairro').style.display = 'inline-block';
        document.getElementById('bairro').style.border = "1px solid #f00";
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_bairro').style.display = 'none';
        document.getElementById('bairro').style.border = "1px solid #ccc";            
    }
    
    
    //cep
    if(document.getElementById('cep').value == "" || document.getElementById('cep').value.length < 8 || isNaN(document.getElementById('cep').value))
    {
        document.getElementById('erro_cep').style.display = 'inline-block';
        document.getElementById('cep').style.border = "1px solid #f00";
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_cep').style.display = 'none';
        document.getElementById('cep').style.border = "1px solid #ccc";            
    }
    
    
    //cidade
    if(document.getElementById('cidade').value == "")
    {
        document.getElementById('erro_cidade').style.display = 'inline-block';
        document.getElementById('cidade').style.border = "1px solid #f00";
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_cidade').style.display = 'none';
        document.getElementById('cidade').style.border = "1px solid #ccc";            
    }
    
    //clular
    if(document.getElementById('celular').value == "" || document.getElementById('celular').value.length < 11 || isNaN(document.getElementById('celular').value))
    {
        document.getElementById('erro_celular').style.display = 'inline-block';
        document.getElementById('celular').style.border = "1px solid #f00";
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_celular').style.display = 'none';
        document.getElementById('celular').style.border = "1px solid #ccc";            
    }
    
    //email
    email = document.getElementById('email').value;
    arroba = email.indexOf("@");
    antes_arroba = email.substring(0,arroba);
    depois_arroba = email.substring(arroba+1);
    if(email == "") 
    {
        document.getElementById('erro_email').style.display = 'inline-block';        
        document.getElementById('email').style.border = "1px solid #f00";
        document.getElementById('email').focus();
        enviar = 1;
    }
    else if(email != "" && (arroba == -1 || antes_arroba.length < 1 || depois_arroba.length < 4))
    {
        document.getElementById('erro_email').style.display = 'inline-block';        
        document.getElementById('email').style.border = "1px solid #f00";
        document.getElementById('email').focus();
        enviar = 1;
    }
    else
    {
        document.getElementById('erro_email').style.display = 'none';
        document.getElementById('email').style.border = "1px solid #ccc";        
    }
    
    
    if(enviar != 1)
    {
        document.getElementById('formul').submit();
    }
}




//funcao exibir ou ocultar e-mail - usuário
function exibir_ocultar_campo_chk(campo_clique,div_exibir_ocultar)
{
      
    status = document.getElementById(campo_clique).checked;
     
    if(status == "true")
        document.getElementById(div_exibir_ocultar).style.display = "inline-block";
    else
        document.getElementById(div_exibir_ocultar).style.display = "none";
    
}


//funcao exibir ocultar CPF_RG / CNPJ_IE
function exibir_ocultar_cpf_cnpj()
{
    nivel_acesso = document.getElementById('nivel_acesso').value;
    
    //pcultando todas as mensagens de erro
    document.getElementById('erro_cpf_cnpj1').style.display = 'none';
    document.getElementById('erro_rg_ie1').style.display = 'none';
    document.getElementById('erro_empresa').style.display = 'none';
    document.getElementById('erro_nome_fantasia').style.display = 'none';
    document.getElementById('erro_responsavel').style.display = 'none';
    
    document.getElementById('erro_cpf_cnpj').style.display = 'none';
    document.getElementById('erro_rg_ie').style.display = 'none';
    document.getElementById('erro_nome').style.display = 'none';
    document.getElementById('erro_profissao').style.display = 'none';
    document.getElementById('erro_data_nascimento').style.display = 'none';

    //voltando a cor das bordas para a cor normal
    document.getElementById('cpf_cnpj1').style.border = "1px solid #ccc"; 
    document.getElementById('rg_ie1').style.border = "1px solid #ccc"; 
    document.getElementById('empresa').style.border = "1px solid #ccc"; 
    document.getElementById('nome_fantasia').style.border = "1px solid #ccc"; 
    document.getElementById('responsavel').style.border = "1px solid #ccc";  
    
    document.getElementById('cpf_cnpj').style.border = "1px solid #ccc"; 
    document.getElementById('rg_ie').style.border = "1px solid #ccc"; 
    document.getElementById('nome_usuario').style.border = "1px solid #ccc"; 
    document.getElementById('profissao').style.border = "1px solid #ccc"; 
    document.getElementById('data_nascimento').style.border = "1px solid #ccc";  
    
    
    //voltando a cor das bordas para a cor normal
    document.getElementById('erro_endereco').style.display = 'none'; 
    document.getElementById('erro_numero').style.display = 'none'; 
    document.getElementById('erro_bairro').style.display = 'none'; 
    document.getElementById('erro_cep').style.display = 'none'; 
    document.getElementById('erro_cidade').style.display = 'none';  
    document.getElementById('erro_celular').style.display = 'none';  
    document.getElementById('erro_email').style.display = 'none';  
    
    document.getElementById('endereco').style.border = "1px solid #ccc"; 
    document.getElementById('numero').style.border = "1px solid #ccc"; 
    document.getElementById('bairro').style.border = "1px solid #ccc"; 
    document.getElementById('cep').style.border = "1px solid #ccc"; 
    document.getElementById('cidade').style.border = "1px solid #ccc";
    document.getElementById('celular').style.border = "1px solid #ccc";
    document.getElementById('email').style.border = "1px solid #ccc";
    
    
    if(nivel_acesso == 4)
    {
        //exibe campos pessoa jurídica e oculta campos pessoa física
        document.getElementById('pj_cnpj').style.display = "inline-block";
        document.getElementById('pj_ie').style.display = "inline-block";
        document.getElementById('pj_empresa').style.display = "inline-block";
        document.getElementById('pj_nome_fantasia').style.display = "inline-block";
        document.getElementById('pj_nome_responsavel').style.display = "inline-block";
        
        document.getElementById('cpf_cnpj1').value = "";
        document.getElementById('rg_ie1').value = "";
        document.getElementById('empresa').value = "";
        document.getElementById('nome_fantasia').value = "";
        document.getElementById('responsavel').value = "";
        
        document.getElementById('pf_cpf').style.display = "none";
        document.getElementById('pf_rg').style.display = "none";
        document.getElementById('pf_nome').style.display = "none";
        document.getElementById('pf_profissao').style.display = "none";
        document.getElementById('pf_sexo').style.display = "none";
        document.getElementById('pf_data_nascimento').style.display = "none";
    }
    else
    {
        //exibe campos pessoa fisica e oculta campos pessoa juridica
        document.getElementById('pj_cnpj').style.display = "none";
        document.getElementById('pj_ie').style.display = "none";
        document.getElementById('pj_empresa').style.display = "none";
        document.getElementById('pj_nome_fantasia').style.display = "none";
        document.getElementById('pj_nome_responsavel').style.display = "none";
        
        document.getElementById('pf_cpf').style.display = "inline-block";
        document.getElementById('pf_rg').style.display = "inline-block";
        document.getElementById('pf_nome').style.display = "inline-block";
        document.getElementById('pf_profissao').style.display = "inline-block";
        document.getElementById('pf_sexo').style.display = "inline-block";
        document.getElementById('pf_data_nascimento').style.display = "inline-block";
        
        document.getElementById('cpf_cnpj').value = "";
        document.getElementById('rg_ie').value = "";
        document.getElementById('nome_usuario').value = "";
        document.getElementById('profissao').value = "";
        document.getElementById('data_nascimento').value = "";        
    }
}


function abrir_modal()
{
       
        
}

// função para preencher os campos de complementos do histórico do paciente 
function preencher_campo_sim_nao(opcao, campo, mensagem)
{
    if(opcao == 1)  document.getElementById(campo).value = mensagem;
    else            document.getElementById(campo).value = mensagem;
}


// função para alterar o indice do select de acordo com a escolha do usuário
function alterar_combo(opcao,campo,indice)
{
    if(opcao == 1)  document.getElementById(campo).options[indice].selected = "true";
    else            document.getElementById(campo).options[indice].selected = "true";
}





/* inicio marcar e desmarcar todos os checkbox da listagem de pacientes */
estado = 0;
function marcar_desmarcar_todos()
{
    if(estado != 1)
        {
        estado = 1;
        for (i=0;i<document.formul.elements.length;i++)
	       if(document.formul.elements[i].type == "checkbox")
		      document.formul.elements[i].checked=1;
        }
    else
        {
        estado = 0;
        for (i=0;i<document.formul.elements.length;i++)
	       if(document.formul.elements[i].type == "checkbox")
		      document.formul.elements[i].checked=0;
        }
    
   
}

/* fim marcar e desmarcar todos os checkbox da listagem de pacientes */




//pesquisa 
function nova_pesquisa(destino)
{   
    p = document.getElementById("busca").value;    
    window.location.href = destino + p;
}




// exibir ocultar a quantodade de atividades fisicas
function exibir_ocultar_atividades_fisicas(acao)
{
    
    // onclick option SIM clicado
    if(acao == 1)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_2").style.display = "none";
        document.getElementById("atividade_fisica_1_3").style.display = "none";
        document.getElementById("atividade_fisica_1_4").style.display = "none";
        document.getElementById("atividade_fisica_1_5").style.display = "none";
            
        document.getElementById("qual_atividade_fisica_1_2").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_2").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_2").value = "";
            
        document.getElementById("qual_atividade_fisica_1_3").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_3").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_3").value = "";
            
        document.getElementById("qual_atividade_fisica_1_4").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_4").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_4").value = "";
            
        document.getElementById("qual_atividade_fisica_1_5").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_5").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_5").value = "";
            
            
        document.getElementById("chk_domingo_1_2").checked = false;
        document.getElementById("chk_segunda_1_2").checked = false;
        document.getElementById("chk_terca_1_2").checked = false;
        document.getElementById("chk_quarta_1_2").checked = false;
        document.getElementById("chk_quinta_1_2").checked = false;
        document.getElementById("chk_sexta_1_2").checked = false;
        document.getElementById("chk_sabado_1_2").checked = false;
        document.getElementById("chk_domingo_1_2").checked = false;
            
            
        document.getElementById("chk_domingo_1_3").checked = false;
        document.getElementById("chk_segunda_1_3").checked = false;
        document.getElementById("chk_terca_1_3").checked = false;
        document.getElementById("chk_quarta_1_3").checked = false;
        document.getElementById("chk_quinta_1_3").checked = false;
        document.getElementById("chk_sexta_1_3").checked = false;
        document.getElementById("chk_sabado_1_3").checked = false;
        document.getElementById("chk_domingo_1_3").checked = false;
            
            
        document.getElementById("chk_domingo_1_4").checked = false;
        document.getElementById("chk_segunda_1_4").checked = false;
        document.getElementById("chk_terca_1_4").checked = false;
        document.getElementById("chk_quarta_1_4").checked = false;
        document.getElementById("chk_quinta_1_4").checked = false;
        document.getElementById("chk_sexta_1_4").checked = false;
        document.getElementById("chk_sabado_1_4").checked = false;
        document.getElementById("chk_domingo_1_4").checked = false;
            
        document.getElementById("chk_domingo_1_5").checked = false;
        document.getElementById("chk_segunda_1_5").checked = false;
        document.getElementById("chk_terca_1_4").checked = false;
        document.getElementById("chk_quarta_1_4").checked = false;
        document.getElementById("chk_quinta_1_4").checked = false;
        document.getElementById("chk_sexta_1_5").checked = false;
        document.getElementById("chk_sabado_1_5").checked = false;
        document.getElementById("chk_domingo_1_5").checked = false;
        
        document.getElementById("btn_mais_1").style.display = "inline-block";
        document.getElementById("btn_mais_2").style.display = "none";
        document.getElementById("btn_mais_3").style.display = "none";
        document.getElementById("btn_mais_4").style.display = "none";
        document.getElementById("btn_mais_morto").style.display = "none";        
        
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";   
        document.getElementById("btn_menos_3").style.display = "none";   
        document.getElementById("btn_menos_4").style.display = "none";   
        document.getElementById("btn_menos_morto").style.display = "inline-block";
        }
    // option NÂO clicado
    if(acao == 2)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "none";
        document.getElementById("atividade_fisica_1_2").style.display = "none";
        document.getElementById("atividade_fisica_1_3").style.display = "none";
        document.getElementById("atividade_fisica_1_4").style.display = "none";
        document.getElementById("atividade_fisica_1_5").style.display = "none";
            
        document.getElementById("qual_atividade_fisica_1_1").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_1").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_1").value = "";
            
        document.getElementById("qual_atividade_fisica_1_2").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_2").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_2").value = "";
            
        document.getElementById("qual_atividade_fisica_1_3").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_3").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_3").value = "";
            
        document.getElementById("qual_atividade_fisica_1_4").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_4").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_4").value = "";
            
        document.getElementById("qual_atividade_fisica_1_5").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_5").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_5").value = "";
            
        document.getElementById("chk_domingo_1_1").checked = false;
        document.getElementById("chk_segunda_1_1").checked = false;
        document.getElementById("chk_terca_1_1").checked = false;
        document.getElementById("chk_quarta_1_1").checked = false;
        document.getElementById("chk_quinta_1_1").checked = false;
        document.getElementById("chk_sexta_1_1").checked = false;
        document.getElementById("chk_sabado_1_1").checked = false;
        document.getElementById("chk_domingo_1_1").checked = false;
            
        document.getElementById("chk_domingo_1_2").checked = false;
        document.getElementById("chk_segunda_1_2").checked = false;
        document.getElementById("chk_terca_1_2").checked = false;
        document.getElementById("chk_quarta_1_2").checked = false;
        document.getElementById("chk_quinta_1_2").checked = false;
        document.getElementById("chk_sexta_1_2").checked = false;
        document.getElementById("chk_sabado_1_2").checked = false;
        document.getElementById("chk_domingo_1_2").checked = false;
            
            
        document.getElementById("chk_domingo_1_3").checked = false;
        document.getElementById("chk_segunda_1_3").checked = false;
        document.getElementById("chk_terca_1_3").checked = false;
        document.getElementById("chk_quarta_1_3").checked = false;
        document.getElementById("chk_quinta_1_3").checked = false;
        document.getElementById("chk_sexta_1_3").checked = false;
        document.getElementById("chk_sabado_1_3").checked = false;
        document.getElementById("chk_domingo_1_3").checked = false;
            
            
        document.getElementById("chk_domingo_1_4").checked = false;
        document.getElementById("chk_segunda_1_4").checked = false;
        document.getElementById("chk_terca_1_4").checked = false;
        document.getElementById("chk_quarta_1_4").checked = false;
        document.getElementById("chk_quinta_1_4").checked = false;
        document.getElementById("chk_sexta_1_4").checked = false;
        document.getElementById("chk_sabado_1_4").checked = false;
        document.getElementById("chk_domingo_1_4").checked = false;
            
        document.getElementById("chk_domingo_1_5").checked = false;
        document.getElementById("chk_segunda_1_5").checked = false;
        document.getElementById("chk_terca_1_4").checked = false;
        document.getElementById("chk_quarta_1_4").checked = false;
        document.getElementById("chk_quinta_1_4").checked = false;
        document.getElementById("chk_sexta_1_5").checked = false;
        document.getElementById("chk_sabado_1_5").checked = false;
        document.getElementById("chk_domingo_1_5").checked = false;
        
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";
        document.getElementById("btn_mais_3").style.display = "none";
        document.getElementById("btn_mais_4").style.display = "none";
        document.getElementById("btn_mais_morto").style.display = "none";        
        
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";   
        document.getElementById("btn_menos_3").style.display = "none";   
        document.getElementById("btn_menos_4").style.display = "none";   
        document.getElementById("btn_menos_morto").style.display = "none";
        }
    if(acao == 3)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "none";
        
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "inline-block";
        document.getElementById("btn_mais_3").style.display = "none";
        document.getElementById("btn_mais_morto").style.display = "none";
        
        document.getElementById("btn_menos_1").style.display = "inline-block";
        document.getElementById("btn_menos_2").style.display = "none";    
        document.getElementById("btn_menos_3").style.display = "none";    
        document.getElementById("btn_menos_morto").style.display = "none";    
        
        
        }
    if(acao == 4)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "inline-block";    
            
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_3").style.display = "inline-block";            
        document.getElementById("btn_mais_morto").style.display = "none";
            
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "inline-block";
        document.getElementById("btn_menos_3").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
    if(acao == 5)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "none";
        document.getElementById("qual_atividade_fisica_1_2").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_2").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_2").value = "";
            
        document.getElementById("chk_domingo_1_2").checked = false;
        document.getElementById("chk_segunda_1_2").checked = false;
        document.getElementById("chk_terca_1_2").checked = false;
        document.getElementById("chk_quarta_1_2").checked = false;
        document.getElementById("chk_quinta_1_2").checked = false;
        document.getElementById("chk_sexta_1_2").checked = false;
        document.getElementById("chk_sabado_1_2").checked = false;
        document.getElementById("chk_domingo_1_2").checked = false;   
        
            
            
            
        document.getElementById("atividade_fisica_1_3").style.display = "none"; 
            
            
        document.getElementById("btn_mais_1").style.display = "inline-block";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_3").style.display = "none";            
        document.getElementById("btn_mais_4").style.display = "none";            
        document.getElementById("btn_mais_morto").style.display = "none";
        
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";
        document.getElementById("btn_menos_3").style.display = "none";
        document.getElementById("btn_menos_4").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "inline-block";
        }
    if(acao == 6)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "none";
            
        document.getElementById("qual_atividade_fisica_1_3").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_3").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_3").value = "";
            
            
        document.getElementById("chk_domingo_1_3").checked = false;
        document.getElementById("chk_segunda_1_3").checked = false;
        document.getElementById("chk_terca_1_3").checked = false;
        document.getElementById("chk_quarta_1_3").checked = false;
        document.getElementById("chk_quinta_1_3").checked = false;
        document.getElementById("chk_sexta_1_3").checked = false;
        document.getElementById("chk_sabado_1_3").checked = false;
        document.getElementById("chk_domingo_1_3").checked = false;
            
        
            
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "inline-block";
        document.getElementById("btn_mais_3").style.display = "none";            
        document.getElementById("btn_mais_4").style.display = "none";            
        document.getElementById("btn_mais_morto").style.display = "none";
            
        document.getElementById("btn_menos_1").style.display = "inline-block";
        document.getElementById("btn_menos_2").style.display = "none";
        document.getElementById("btn_menos_3").style.display = "none";
        document.getElementById("btn_menos_4").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
        if(acao == 7)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_4").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_5").style.display = "none";    
            
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_3").style.display = "none";            
        document.getElementById("btn_mais_4").style.display = "inline-block";            
        document.getElementById("btn_mais_morto").style.display = "none";
            
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";
        document.getElementById("btn_menos_3").style.display = "inline-block";
        document.getElementById("btn_menos_4").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
        if(acao == 8)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_4").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_5").style.display = "inline-block";    
            
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_3").style.display = "none";            
        document.getElementById("btn_mais_4").style.display = "none";            
        document.getElementById("btn_mais_morto").style.display = "inline-block";
            
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";
        document.getElementById("btn_menos_3").style.display = "none";
        document.getElementById("btn_menos_4").style.display = "inline-block";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
        //btn menos 4 - mostra as 4 atividades fisicas oculta e apaga as informacoes da quinta atividade fisica
        if(acao == 9)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_4").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_5").style.display = "none";  
            
        document.getElementById("qual_atividade_fisica_1_5").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_5").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_5").value = "";
            
        document.getElementById("chk_domingo_1_5").checked = false;
        document.getElementById("chk_segunda_1_5").checked = false;
        document.getElementById("chk_terca_1_5").checked = false;
        document.getElementById("chk_quarta_1_5").checked = false;
        document.getElementById("chk_quinta_1_5").checked = false;
        document.getElementById("chk_sexta_1_5").checked = false;
        document.getElementById("chk_sabado_1_5").checked = false;
        document.getElementById("chk_domingo_1_5").checked = false;
            
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_3").style.display = "none";            
        document.getElementById("btn_mais_4").style.display = "inline-block";            
        document.getElementById("btn_mais_morto").style.display = "none";
            
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";
        document.getElementById("btn_menos_3").style.display = "inline-block";
        document.getElementById("btn_menos_4").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
        if(acao == 10)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "inline-block";    
        document.getElementById("atividade_fisica_1_4").style.display = "none";    
        document.getElementById("atividade_fisica_1_5").style.display = "none"; 
            
        document.getElementById("qual_atividade_fisica_1_4").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_4").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_4").value = "";
            
        document.getElementById("chk_domingo_1_4").checked = false;
        document.getElementById("chk_segunda_1_4").checked = false;
        document.getElementById("chk_terca_1_4").checked = false;
        document.getElementById("chk_quarta_1_4").checked = false;
        document.getElementById("chk_quinta_1_4").checked = false;
        document.getElementById("chk_sexta_1_4").checked = false;
        document.getElementById("chk_sabado_1_4").checked = false;
        document.getElementById("chk_domingo_1_4").checked = false;
            
            
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_3").style.display = "inline-block";            
        document.getElementById("btn_mais_4").style.display = "none";            
        document.getElementById("btn_mais_morto").style.display = "none";
            
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "inline-block";
        document.getElementById("btn_menos_3").style.display = "none";
        document.getElementById("btn_menos_4").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
    
}







//exibir ocultar campos
function exibir_ocultar_campos(acao,campo1,campo2,campo3,campo4,campo5)
{
    
    
    if(acao == 1)
        document.getElementById(campo1).style.display = "inline-block";
    else if(acao == 2)
        document.getElementById(campo1).style.display = "none";
    else if(acao == 3)
        {
        document.getElementById(campo1).style.display = "inline-block";        
        document.getElementById(campo2).style.display = "inline-block";    
        } 
    else if(acao == 4)
        {
        document.getElementById(campo1).style.display = "none";        
        document.getElementById(campo2).style.display = "none";    
        } 
}




//calcular IMC dos formularios
function calcular_imc()
{
    
    peso = parseFloat(document.getElementById('peso').value);
    altura = parseFloat (document.getElementById('altura').value);
    
    if(peso > 0  && altura > 0)
        {
            document.getElementById('res_imc').value = (Math.ceil((peso/(Math.pow((altura/100),2)))*100)/100).toFixed(2);            
            classificacao = parseFloat(Math.ceil((peso/(Math.pow((altura/100),2)))*100)/100);
            if(classificacao < 18.5)                           
                document.getElementById('classificacao').value = 'Abaixo do Peso';                                
            else if(classificacao >= 18.5 && classificacao < 25)                
                document.getElementById('classificacao').value = 'Peso Normal'; 
            else if(classificacao >= 25 && classificacao < 30)                
                document.getElementById('classificacao').value = 'Excesso de Peso'; 
            else if(classificacao >= 30 && classificacao < 35)                
                document.getElementById('classificacao').value = 'Obesidade Classe I'; 
            else if(classificacao >= 35 && classificacao < 40)                
                document.getElementById('classificacao').value = 'Obesidade Classe II'; 
            else
                document.getElementById('classificacao').value = 'Obesidade Classe III'; 
        }
    else
        {
            document.getElementById('res_imc').value = "";
        }
}




//exibir imc na tabela de pacientes
function exibir_imc(peso, altura)
{
    document.write((Math.ceil((peso/(Math.pow((altura/100),2)))*100)/100).toFixed(2));
}



function calculo_peso_ideal()
                    {
                    imc_ideal = parseFloat(document.getElementById('imc_ideal').value);
                    altura = parseFloat(document.getElementById('altura').value);                        
                    peso_ideal = (imc_ideal * Math.pow((altura/100),2)).toFixed(2);
                    document.getElementById('peso_ideal').value = peso_ideal;
                    }


//calcular o CAQ
function calcular_caq()
{
   
    abd = parseFloat(document.getElementById('abdome').value);
    qdr = parseFloat (document.getElementById('quadril').value);
    sxo = document.getElementById('sexo').value;
    ida = parseInt(document.getElementById('anos').value);
   

    
    if(abd > 0  && qdr > 0)
        {
            document.getElementById('res_caq').value = (Math.ceil((abd/qdr)*100)/100).toFixed(2);
            caq = parseFloat(document.getElementById('res_caq').value);
            
            if(sxo == "M")
            {
                if(ida < 20)
                    document.getElementById('classificacao_caq').value = "Não Classificado";
                
                else if(ida >=20 && ida < 30)
                    if(caq < 0.83)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.83 && caq <= 0.88)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.89 && caq <= 0.94)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=30 && ida < 40)
                    if(caq < 0.84)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.84 && caq <= 0.91)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.92 && caq <= 0.96)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=40 && ida < 50)
                    if(caq < 0.88)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.88 && caq <= 0.95)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.96 && caq <= 1)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=50 && ida < 60)
                    if(caq < 0.90)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.90 && caq <= 0.96)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.97 && caq <= 1.02)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=60 && ida < 70)
                    if(caq < 0.91)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.91 && caq <= 0.98)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.99 && caq <= 1.03)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
            }
            else
            {
                if(ida <20)
                        document.getElementById('classificacao_caq').value = "Não Classificada";
                
                else if(ida >=20 && ida < 30)
                    if(caq < 0.71)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.71 && caq <= 0.77)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.77 && caq <= 0.83)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=30 && ida < 40)
                    if(caq < 0.72)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.72 && caq <= 0.78)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.79 && caq <= 0.84)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=40 && ida < 50)
                    if(caq < 0.73)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.73 && caq <= 0.79)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.80 && caq <= 0.87)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=50 && ida < 60)
                    if(caq < 0.74)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.74 && caq <= 0.81)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.82 && caq <= 0.88)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";
                
                else if(ida >=60 && ida < 70)
                    if(caq < 0.76)
                        document.getElementById('classificacao_caq').value = "Baixo";
                    else if(caq >= 0.76 && caq <= 0.83)
                        document.getElementById('classificacao_caq').value = "Moderado";
                    else if(caq >= 0.84 && caq <= 0.90)
                        document.getElementById('classificacao_caq').value = "Alto";
                    else
                        document.getElementById('classificacao_caq').value = "Muito Alto";                
                
            } 
        }
    else
        {
            document.getElementById('res_caq').value = "";
        }
}



// calculo do caq ideal antropometria
function calcular_caq_ideal()
{
    sxo = document.getElementById('sexo').value;
    ida = parseInt(document.getElementById('anos').value);
    
    if(sxo == "M")
    {
        if(ida < 20)
            document.getElementById('classificacao_caq_ideal').value = "Não Classificado";

        else if(ida >=20 && ida < 30)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.83";
        else if(ida >=30 && ida < 40)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.84";
        else if(ida >=40 && ida < 50)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.88";
        else if(ida >=50 && ida < 60)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.90";
        else if(ida >=60 && ida < 70)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.91";
    }
    else
    {
        if(ida < 20)
            document.getElementById('classificacao_caq_ideal').value = "Não Classificado";

        else if(ida >=20 && ida < 30)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.71";
        else if(ida >=30 && ida < 40)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.72";
        else if(ida >=40 && ida < 50)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.73";
        else if(ida >=50 && ida < 60)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.74";
        else if(ida >=60 && ida < 70)
            document.getElementById('classificacao_caq_ideal').value = "Menor do que 0.76";
    }
        
}



//definindo o sexo na caixa do caq - antropometria
function carrega_sexo_idade()
{
    sxo = document.getElementById('sexo').value;
    ida = parseInt(document.getElementById('anos').value);
    
    if(sxo == "F")
        document.getElementById('sexo_caq_ideal').value = 'Feminino';
    else
        document.getElementById('sexo_caq_ideal').value = 'Masculino';
        
    document.getElementById('idade_caq_ideal').value = ida;
    
}


//calcular densidade
function calcular_gordura()
{
    
    //recuperando valores subescapular / suprailiaca / coxa (dobras cutanes)
    prt = document.getElementById('protocolo').value;
    sub = parseFloat(document.getElementById('subescapular').value);
    sil = parseFloat(document.getElementById('suprailiaca').value);
    cox = parseFloat(document.getElementById('coxa_dobras').value);
    abd = parseFloat(document.getElementById('abdominal').value);
    tri = parseFloat(document.getElementById('triceps').value);
    ida = parseInt(document.getElementById('anos').value);
    
    
    //calculando a densidade
    dens = 1.1665-0.07063*(Math.log(sub+sil+cox)/Math.log(10));    
    
    if(prt == "protocolo_A")
    {
    gordura = (5.05/dens-4.59)/100;    
    }        
    else
    {
    gordura = 0.29669*(abd+sil+tri+cox)-0.0043*(abd+sil+tri+cox)*(abd+sil+tri+cox)+0.02963*ida+1.4072;
    }
        
    
    document.getElementById('gordura').value = gordura.toFixed(4) + "%";
    
    
}




//calcular a gordura absoluta e gordura absoluta ideal
function calcular_gordura_absoluta()
{
    //recuperando peso e gordura
    pes = parseFloat(document.getElementById('peso').value);
    gordura = parseFloat(document.getElementById('gordura').value);
    
    //calculando a gordura absoluta
    gordura_absoluta = pes*(gordura/100);
    document.getElementById('gordura_absoluta').value = gordura_absoluta;
    
    //calculando a massa magra
    massa_magra = pes-gordura_absoluta;
    document.getElementById('massa_magra').value = massa_magra;
    
    //calculando a gordura absoluta ideal
    gordura_absoluta_ideal_min = pes*0.2;
    gordura_absoluta_ideal_max = pes*0.25;    
    document.getElementById('gordura_absoluta_ideal').value = "Entre " + gordura_absoluta_ideal_min + " e " + gordura_absoluta_ideal_max;
    
    //calculando a massa magra ideal
    massa_magra_ideal_min = pes*0.75;
    massa_magra_ideal_max = pes*0.8;    
    document.getElementById('massa_magra_ideal').value = "Entre " + massa_magra_ideal_min + " e " + massa_magra_ideal_max;
}


//funcao para modificar o status estrela paciente
function troca_estrela(id)
{   
    src_imagem = document.getElementById(id).src;    
    ultima_barra = src_imagem.lastIndexOf("/");
    imagem = src_imagem.substring(ultima_barra+1);
    
    if(imagem == 'estrela_cheia.png')
        document.getElementById(id).src = 'img/estrela_vazia.png';
    else
        document.getElementById(id).src = 'img/estrela_cheia.png';
    
}



//pre visualizacao das imagens
function pre_visualizacao() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview1").src = oFREvent.target.result;
                };
            };






// função para realizar a busca sem refresh
$(function(){
   $('#busca').keyup(function(){
      var pesquisa = $(this).val();
       
      if(pesquisa != '') {
              var dados = {
                  palavra : pesquisa
              }
              $.post('01_2_processa_busca_refeicao.php', dados, function(retorna){
                $('.resultados').empty().html('');
                $('.resultados').html(retorna);
              });
          }
   });    
});





//conteudo += "<div id=" + codigo + ">";
//        conteudo += "<div><input type=hidden name=codigos[] id=codigos[] value='" + codigo + "'></div>";
//        conteudo += "<div class='col-md-5 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='" + alimento + "' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
//        conteudo += "<div class='col-md-3 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='" + medida_caseira + "' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena text-uppercase'></div>";
//        
//        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='0' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena text-uppercase'></div>";
//        
//        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(peso).toFixed(1) + " class='form-group esquerda margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
//        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(caloria).toFixed(0) + " class='form-group esquerda margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
//        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05 fonte_verde_claro centralizado'><a href='#' class='link_detalhes' onclick=javascript:remover_alimento('" +  codigo + "','" + peso + "','" + caloria + "')><span class='glyphicon glyphicon-minus-sign'></span></a></div>";
//        conteudo += "</div>";

//<input type=number name='qtde_porcoes' id='qtde_porcoes_" + codigo + "' value='1' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena text-uppercase' onblur=calcula_total('qtde_porcoes_" + codigo + "','peso_alimento_" + codigo + "','peso_total_alimento_" + codigo + "')>


// função utilizada para acrescentar alimentos na refeição
//peso_geral = 0; 
//caloria_geral=0;
function inserir_alimento(codigo, alimento, peso, caloria, medida_caseira)
    {   
        caloria_geral = parseFloat(document.getElementById('total_caloria').value);
        caloria_geral = (parseFloat(caloria_geral) + parseFloat(caloria)).toFixed(0);
        document.getElementById('total_caloria').value = caloria_geral;
        
        conteudo  = document.getElementById('alimentos_refeicao').innerHTML;  
        
        conteudo += "<div id=" + codigo + ">";
        conteudo += "<div><input type=hidden name=codigos[] id=codigos[] value='" + codigo + "'></div>";
        conteudo += "<div class='col-md-6 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='" + alimento + "' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
        
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><select name='qtde_porcoes[]' id='qtde_porcoes_" + codigo + "' value='1' class='form-group largura_100 borda_verde_claro margin_00 fundo_transparente fonte_pequena text-uppercase' onchange=calcula_total('qtde_porcoes_" + codigo + "','peso_alimento_" + codigo + "','peso_total_alimento_" + codigo + "','caloria_alimento_" + codigo + "','caloria_total_alimento_" + codigo + "')><option value='1'>01</option><option value='2'>02</option><option value='3'>03</option><option value='4'>04</option><option value='5'>05</option><option value='6'>06</option><option value='7'>07</option><option value='8'>08</option><option value='9'>09</option><option value='10'>10</option></select></div>";
        
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(peso).toFixed(1) + " class='form-group largura_100 direito margin_00 sem_borda fundo_transparente fonte_pequena' name='peso_alimento' id='peso_alimento_" + codigo + "' readonly></div>";
        
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(peso).toFixed(1) + " class='form-group largura_100 direito margin_00 sem_borda fundo_transparente fonte_pequena' name='peso_total_alimento' id='peso_total_alimento_" + codigo + "' readonly></div>";
        
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(caloria).toFixed(0) + " class='form-group largura_100 direito margin_00 sem_borda fundo_transparente fonte_pequena' name='caloria_alimento' id='caloria_alimento_" + codigo + "' readonly></div>";
        
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(caloria).toFixed(0) + " class='form-group largura_100 direito margin_00 sem_borda fundo_transparente fonte_pequena' name='caloria_total_alimento' id='caloria_total_alimento_" + codigo + "' ></div>";
        
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05 fonte_verde_claro centralizado'><a href='#' class='link_detalhes' onclick=javascript:remover_alimento('" +  codigo + "',document.getElementById('caloria_total_alimento_" + codigo + "').value)><span class='glyphicon glyphicon-minus-sign'></span></a></div>";
        conteudo += "</div>";
        
        document.getElementById('alimentos_refeicao').innerHTML = conteudo;
    }


// função que calcula os valores de peso total alimento / caloria total alimento / caloria total da refeição
function calcula_total(qtde,peso,peso_total, caloria, caloria_total)
{   
    peso_alimento = document.getElementById(peso).value;
    caloria_alimento = document.getElementById(caloria).value;
    qtde_porcoes = document.getElementById(qtde).value;
    
    valor_total_peso_alimento = parseFloat(peso_alimento)*parseFloat(qtde_porcoes);
    document.getElementById(peso_total).value = parseFloat(valor_total_peso_alimento).toFixed(1);
    
    //caloria_total_atual antes de atualizar
    caloria_total_alimento_atual = document.getElementById(caloria_total).value;
    //fazendo a atualizacao do valor total da caloria do alimento
    valor_total_caloria_alimento = parseFloat(caloria_alimento)*parseFloat(qtde_porcoes);
    document.getElementById(caloria_total).value = parseFloat(valor_total_caloria_alimento).toFixed(0);
    //caloria_total_atualizada 
    caloria_total_alimento_atualizada = document.getElementById(caloria_total).value;
    
    //atualizando o valor das calorias da refeição
    if(caloria_total_alimento_atual < caloria_total_alimento_atualizada)
        {
        caloria_total_caloria_alimento = parseFloat(caloria_total_alimento_atualizada) - parseFloat(caloria_total_alimento_atual);        
        caloria_geral = document.getElementById('total_caloria').value;
        caloria_geral = (parseFloat(caloria_geral) + parseFloat(caloria_total_caloria_alimento)).toFixed(0);
        document.getElementById('total_caloria').value = caloria_geral;
        }        
    else
        {
        caloria_total_caloria_alimento = parseFloat(caloria_total_alimento_atual) - parseFloat(caloria_total_alimento_atualizada);    
        caloria_geral = document.getElementById('total_caloria').value;
        caloria_geral = (parseFloat(caloria_geral) - parseFloat(caloria_total_caloria_alimento)).toFixed(0);
        document.getElementById('total_caloria').value = caloria_geral;
        }
        
    
    
}


// função utilizada para remover alimentos da refeição
function remover_alimento(codigo,caloria)
{   
    //removendo o alimento selecionado
    document.getElementById(codigo).remove();        
    //recuperando o valor total de calorias do campo de caloria geral
    caloria_geral = document.getElementById('total_caloria').value;
    //subtraindo da caloria geral o valor de caloria do alimento selecionado
    caloria_geral = (parseFloat(caloria_geral) - parseFloat(caloria)).toFixed(0);
    //exibindo a informacao na tela
    document.getElementById('total_caloria').value = caloria_geral;
    
}








