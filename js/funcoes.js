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