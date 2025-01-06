document.querySelectorAll('.botoes').forEach(button => { //função que "une botões icone/texto" ao passar o mouse somente sobre o ícone ou somente sobre o texto
    button.addEventListener('mouseenter', () => {
        button.closest('.caixa').querySelector('.icones img').classList.add('img-hover');
    });
    button.addEventListener('mouseleave', () => {
        button.closest('.caixa').querySelector('.icones img').classList.remove('img-hover');
    });
})

