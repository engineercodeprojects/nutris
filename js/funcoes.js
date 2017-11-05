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










// função utilizada para acrescentar alimentos na refeição
//peso_geral = 0; 
//caloria_geral=0;
function inserir_alimento(codigo, alimento, peso, caloria, medida_caseira)
    {  
        peso_geral = parseFloat(document.getElementById('total_peso').value);
        peso_geral = (parseFloat(peso_geral) + parseFloat(peso)).toFixed(3);
        document.getElementById('total_peso').value = peso_geral;
        
        caloria_geral = parseFloat(document.getElementById('total_caloria').value);
        caloria_geral = (parseFloat(caloria_geral) + parseFloat(caloria)).toFixed(3);
        document.getElementById('total_caloria').value = caloria_geral;
        
        conteudo  = document.getElementById('alimentos_refeicao').innerHTML;  
        
        conteudo += "<div id=" + codigo + ">";
        conteudo += "<div><input type=hidden name=codigos[] id=codigos[] value='" + codigo + "'></div>";
        conteudo += "<div class='col-md-6 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='" + alimento + "' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
        conteudo += "<div class='col-md-3 borda_inferior padding_top_05 padding_bottom_05'><input type=text value='" + medida_caseira + "' class='form-group largura_100 margin_00 sem_borda fundo_transparente fonte_pequena text-uppercase'></div>";
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(peso).toFixed(3) + " class='form-group esquerda margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05'><input type=text value=" + parseFloat(caloria).toFixed(3) + " class='form-group esquerda margin_00 sem_borda fundo_transparente fonte_pequena'></div>";
        conteudo += "<div class='col-md-1 borda_inferior padding_top_05 padding_bottom_05 fonte_verde_claro centralizado'><a href='#' class='link_detalhes' onclick=javascript:remover_alimento('" +  codigo + "','" + peso + "','" + caloria + "')><span class='glyphicon glyphicon-minus-sign'></span></a></div>";
        conteudo += "</div>";
        
        document.getElementById('alimentos_refeicao').innerHTML = conteudo;
    }






// função utilizada para remover alimentos da refeição
function remover_alimento(codigo,peso,caloria)
{    
    
    document.getElementById(codigo).remove();
    
    peso_geral = document.getElementById('total_peso').value;
    peso_geral = (parseFloat(peso_geral) - parseFloat(peso)).toFixed(3);
    document.getElementById('total_peso').value = peso_geral;
    
    caloria_geral = document.getElementById('total_caloria').value;
    caloria_geral = (parseFloat(caloria_geral) - parseFloat(caloria)).toFixed(3);
    document.getElementById('total_caloria').value = caloria_geral;
}









