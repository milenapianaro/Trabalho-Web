function ativarSecao(id) { 
    var secao = document.getElementById(id); 
    if (secao.style.display === "none" || secao.style.display === "") { 
        secao.style.display = "block"; 
    } 
    else { 
        secao.style.display = "none"; 
    } 
}