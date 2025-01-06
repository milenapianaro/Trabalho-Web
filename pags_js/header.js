document.addEventListener('DOMContentLoaded', () => {
    const barra = document.querySelector('.header');
    const botao = document.querySelector('#nav-aluno');
    const seta = document.querySelector('#seta-aluno')
    const menu = document.querySelector('.menu-oculto');

    const dispositivoMovel = () => {
        return window.innerWidth <= 768; 
    };

    const mostrarMenu = () => {  //função para exibir menu suspenso do sou aluno em dispositivos médios/grandes
        barra.classList.add('header-expansao');
        barra.classList.remove('header');
        menu.classList.add('menu-visivel');
        menu.classList.remove('menu-oculto');
        seta.classList.add('seta-ativada');
        seta.classList.remove('seta');
    };

    const ocultarMenu = () => {  //função para ocultar menu suspenso do sou aluno em dispositivos médios/grandes
        setTimeout(() => {
            if (!menu.matches(':hover') && !menu.matches(':active')) { 
                menu.classList.add('menu-oculto');
                menu.classList.remove('menu-visivel');
                barra.classList.add('header');
                barra.classList.remove('header-expansao');
                seta.classList.remove('seta-ativada');
                seta.classList.add('seta');
            }
        }, 300);
    };

    //função para ocultar menu suspenso do sou aluno em dispositivos pequenos

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