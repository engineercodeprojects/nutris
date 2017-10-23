




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
