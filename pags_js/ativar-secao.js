function ativarSecao(id) { // função para ativar ou desativar menus da matriz curricular
    var secao = document.getElementById(id); //"identifica" a sessão
    
    if (secao) {
        if (secao.style.display === "none" || secao.style.display === "") {  //verifica o estado atual da sessão fechado/em exibição
            secao.style.display = "block"; //mostra a sessão
        } 
        else { 
            secao.style.display = "none"; //oculta a sessão
        }
    } else {
        console.error("Elemento com ID '" + id + "' não encontrado");
    }
}