document.addEventListener('DOMContentLoaded', () => {
    const barra = document.querySelector('.header');
    const botao = document.querySelector('#nav-aluno');
    const menu = document.querySelector('.menu-oculto');
    
    botao.addEventListener('mouseenter', () => {
        barra.classList.add('header-expansao');
        barra.classList.remove('header');
        menu.classList.add('menu-visivel');
        menu.classList.remove('menu-oculto');
    });
    
    botao.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!menu.matches(':hover')) {
                menu.classList.add('menu-oculto');
                menu.classList.remove('menu-visivel');
                barra.classList.add('header');
                barra.classList.remove('header-expansao');
            }
        }, 300);
    });
    
    menu.addEventListener('mouseleave', () => {
        menu.classList.add('menu-oculto');
        menu.classList.remove('menu-visivel');
        barra.classList.add('header');
        barra.classList.remove('header-expansao');
    });
});