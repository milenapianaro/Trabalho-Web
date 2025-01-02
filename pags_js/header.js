document.addEventListener('DOMContentLoaded', () => {
    const barra = document.querySelector('.header');
    const botao = document.querySelector('#nav-aluno');
    const seta = document.querySelector('#seta-aluno')
    const menu = document.querySelector('.menu-oculto');

    const dispositivoMovel = () => {
        return window.innerWidth <= 768; // Definindo uma largura típica para dispositivos móveis
    };

    // Definindo as mudanças de estado

    const mostrarMenu = () => { // Realiza a troca de classe dos menus
        barra.classList.add('header-expansao');
        barra.classList.remove('header');
        menu.classList.add('menu-visivel');
        menu.classList.remove('menu-oculto');
        seta.classList.add('seta-ativada');
        seta.classList.remove('seta');
    };

    const ocultarMenu = () => {
        setTimeout(() => {
            if (!menu.matches(':hover') && !menu.matches(':active')) { // Se o cursor não estiver em cima do menu 
                menu.classList.add('menu-oculto');
                menu.classList.remove('menu-visivel');
                barra.classList.add('header');
                barra.classList.remove('header-expansao');
                seta.classList.remove('seta-ativada');
                seta.classList.add('seta');
            }
        }, 300);
    };

    const alternarMenu = (event) => {
        if (dispositivoMovel()) {
            event.preventDefault();
            if (menu.classList.contains('menu-visivel')) {
                ocultarMenu();
            } else {
                mostrarMenu();
            }
        }
    };
    
    // Execução dos eventos

    botao.addEventListener('mouseenter', mostrarMenu);
    botao.addEventListener('mouseleave', ocultarMenu);
    menu.addEventListener('mouseleave', ocultarMenu);

    seta.addEventListener('touchstart', alternarMenu);
    seta.addEventListener('click', (event) => {
        if (dispositivoMovel()) {
            alternarMenu(event);
        }
    });
});