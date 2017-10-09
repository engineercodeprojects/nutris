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



function exibir_ocultar_atividades_fisicas(acao)
{
    
    
    if(acao == 1)
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
        document.getElementById("btn_mais_1").style.display = "inline-block";
        document.getElementById("btn_mais_2").style.display = "none";
        document.getElementById("btn_mais_morto").style.display = "none";        
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";   
        document.getElementById("btn_menos_morto").style.display = "inline-block";
        }
    if(acao == 2)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "none";
        document.getElementById("qual_atividade_fisica_1_1").value = "";
        document.getElementById("horario_inicio_atividade_fisica_1_1").value = "";
        document.getElementById("horario_termino_atividade_fisica_1_1").value = "";
        document.getElementById("chk_domingo_1_1").checked = false;
        document.getElementById("chk_segunda_1_1").checked = false;
        document.getElementById("chk_terca_1_1").checked = false;
        document.getElementById("chk_quarta_1_1").checked = false;
        document.getElementById("chk_quinta_1_1").checked = false;
        document.getElementById("chk_sexta_1_1").checked = false;
        document.getElementById("chk_sabado_1_1").checked = false;
        document.getElementById("chk_domingo_1_1").checked = false;
            
        document.getElementById("atividade_fisica_1_2").style.display = "none";
        document.getElementById("qual_atividade_fisica_1_2").value = "Pratica ";
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
        document.getElementById("btn_mais_2").style.display = "none";
        document.getElementById("btn_mais_morto").style.display = "none";        
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";        
        document.getElementById("btn_menos_morto").style.display = "none";
        }
    if(acao == 3)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "none";
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "inline-block";
        document.getElementById("btn_menos_1").style.display = "inline-block";
        document.getElementById("btn_menos_2").style.display = "none";    
        document.getElementById("btn_mais_morto").style.display = "none";
        }
    if(acao == 4)
        {
        document.getElementById("atividade_fisica_1_1").style.display = "inline-block"; 
        document.getElementById("atividade_fisica_1_2").style.display = "inline-block";
        document.getElementById("atividade_fisica_1_3").style.display = "inline-block";    
        document.getElementById("btn_mais_1").style.display = "none";
        document.getElementById("btn_mais_2").style.display = "none";            
        document.getElementById("btn_mais_morto").style.display = "inline-block";
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "inline-block";
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
        document.getElementById("btn_mais_morto").style.display = "none";
        document.getElementById("btn_menos_1").style.display = "none";
        document.getElementById("btn_menos_2").style.display = "none";
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
        document.getElementById("btn_mais_morto").style.display = "none";
        document.getElementById("btn_menos_1").style.display = "inline-block";
        document.getElementById("btn_menos_2").style.display = "none";
        document.getElementById("btn_menos_morto").style.display = "none";
        }
        
    
}








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



function calcular_imc()
{
    
    peso = parseFloat(document.getElementById('peso').value);
    altura = parseFloat (document.getElementById('altura').value);

    if(peso > 0  && altura > 0)
        {
            document.getElementById('res_imc').value = Math.ceil((peso/(Math.pow((altura/100),2)))*100)/100;
        }
    else
        {
            document.getElementById('res_imc').value = "";
        }
}





function calcular_caq()
{
    
    abd = parseFloat(document.getElementById('abdome').value);
    qdr = parseFloat (document.getElementById('quadril').value);

    if(abd > 0  && qdr > 0)
        {
            document.getElementById('res_caq').value = Math.ceil((abd/qdr)*100)/100;
        }
    else
        {
            document.getElementById('res_caq').value = "";
        }
}




function pre_visualizacao() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

                oFReader.onload = function (oFREvent) {
                    document.getElementById("uploadPreview1").src = oFREvent.target.result;
                };
            };