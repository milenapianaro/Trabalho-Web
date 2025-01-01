document.querySelectorAll('.botoes').forEach(button => {
    button.addEventListener('mouseenter', () => {
        button.closest('.caixa').querySelector('.icones img').classList.add('img-hover');
    });
    button.addEventListener('mouseleave', () => {
        button.closest('.caixa').querySelector('.icones img').classList.remove('img-hover');
    });
})