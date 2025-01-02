document.addEventListener('DOMContentLoaded', () => {
    const barra = document.querySelector('.header');
    const botao = document.querySelector('#nav-aluno');
    const menu = document.querySelector('.menu-oculto');

    const isMobile = () => {
        return window.innerWidth <= 768; // Definindo uma largura típica para dispositivos móveis
    };

    const showMenu = () => {
        barra.classList.add('header-expansao');
        barra.classList.remove('header');
        menu.classList.add('menu-visivel');
        menu.classList.remove('menu-oculto');
    };

    const hideMenu = () => {
        setTimeout(() => {
            if (!menu.matches(':hover') && !menu.matches(':active')) {
                menu.classList.add('menu-oculto');
                menu.classList.remove('menu-visivel');
                barra.classList.add('header');
                barra.classList.remove('header-expansao');
            }
        }, 300);
    };

    const toggleMenu = (event) => {
        if (isMobile()) {
            event.preventDefault();
            if (menu.classList.contains('menu-visivel')) {
                hideMenu();
            } else {
                showMenu();
            }
        }
    };

    botao.addEventListener('mouseenter', showMenu);
    botao.addEventListener('mouseleave', hideMenu);
    botao.addEventListener('touchstart', toggleMenu);

    botao.addEventListener('click', (event) => {
        if (isMobile()) {
            toggleMenu(event);
        } else {
            // Permitir a navegação em desktops
            window.location.href = botao.href;
        }
    });

    menu.addEventListener('mouseleave', hideMenu);
    menu.addEventListener('mouseenter', showMenu);
    menu.addEventListener('touchstart', showMenu);
    menu.addEventListener('touchend', hideMenu);
});


/* document.addEventListener('DOMContentLoaded', () => {
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
}); */