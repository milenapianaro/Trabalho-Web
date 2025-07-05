document.addEventListener('DOMContentLoaded', () => {
    const cabecalhoPrincipal = document.querySelector('.cabecalho-principal');
    const navAluno = document.querySelector('#nav-aluno');
    const setaAluno = document.querySelector('#seta-aluno');
    const menuSuspenso = document.querySelector('#menu-suspenso');
    const botaoMenu = document.querySelector('#botao-menu');
    const menuLateral = document.querySelector('#menu-lateral');
    const overlayMenu = document.querySelector('#overlay-menu');
    const botaoFechar = document.querySelector('#botao-fechar');

    let menuSuspensoVisivel = false;
    let menuLateralVisivel = false;

    const ehMobile = () => window.innerWidth <= 480;
    const ehTablet = () => window.innerWidth > 480 && window.innerWidth <= 768;
    const ehMobileOuTablet = () => window.innerWidth <= 768;
    const ehDesktop = () => window.innerWidth > 768;

    // ===== FUNÇÕES DO MENU SUSPENSO (DESKTOP) =====
    const mostrarMenuSuspenso = () => {
        if (ehDesktop()) {
            cabecalhoPrincipal.classList.add('cabecalho-principal--expandido');
            menuSuspenso.classList.add('menu-suspenso--visivel');
            setaAluno.classList.add('seta-navegacao--ativa');
            menuSuspensoVisivel = true;
        }
    };

    const ocultarMenuSuspenso = () => {
        if (ehDesktop()) {
            setTimeout(() => {
                if (!menuSuspenso.matches(':hover')) {
                    cabecalhoPrincipal.classList.remove('cabecalho-principal--expandido');
                    menuSuspenso.classList.remove('menu-suspenso--visivel');
                    setaAluno.classList.remove('seta-navegacao--ativa');
                    menuSuspensoVisivel = false;
                }
            }, 300);
        }
    };

    const alternarMenuSuspenso = (evento) => {
        if (ehDesktop()) {
            evento.preventDefault();
            if (menuSuspensoVisivel) {
                ocultarMenuSuspenso();
            } else {
                mostrarMenuSuspenso();
            }
        }
    };

    // ===== FUNÇÕES DO MENU LATERAL (MOBILE E TABLET) =====
    const mostrarMenuLateral = () => {
        botaoMenu.classList.add('botao-menu--ativo');
        menuLateral.classList.add('menu-lateral--visivel');
        overlayMenu.classList.add('overlay-menu--visivel');
        botaoMenu.setAttribute('aria-expanded', 'true');
        menuLateral.setAttribute('aria-hidden', 'false');
        overlayMenu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        menuLateralVisivel = true;
    };

    const ocultarMenuLateral = () => {
        botaoMenu.classList.remove('botao-menu--ativo');
        menuLateral.classList.remove('menu-lateral--visivel');
        overlayMenu.classList.remove('overlay-menu--visivel');
        botaoMenu.setAttribute('aria-expanded', 'false');
        menuLateral.setAttribute('aria-hidden', 'true');
        overlayMenu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        menuLateralVisivel = false;
    };

    const alternarMenuLateral = () => {
        if (menuLateralVisivel) {
            ocultarMenuLateral();
        } else {
            mostrarMenuLateral();
        }
    };

    // ===== EVENT LISTENERS =====
    
    // Event listeners do menu suspenso (apenas desktop)
    if (ehDesktop()) {
        navAluno.addEventListener('mouseenter', mostrarMenuSuspenso);
        navAluno.addEventListener('mouseleave', ocultarMenuSuspenso);
        menuSuspenso.addEventListener('mouseleave', ocultarMenuSuspenso);
        setaAluno.addEventListener('click', alternarMenuSuspenso);
        setaAluno.addEventListener('touchstart', alternarMenuSuspenso);
    }
    
    // Event listeners do menu lateral (mobile e tablet)
    if (botaoMenu) {
        botaoMenu.addEventListener('click', alternarMenuLateral);
    }
    
    if (botaoFechar) {
        botaoFechar.addEventListener('click', ocultarMenuLateral);
    }
    
    if (overlayMenu) {
        overlayMenu.addEventListener('click', ocultarMenuLateral);
    }

    // Fechar menu lateral ao clicar fora
    document.addEventListener('click', (evento) => {
        if (menuLateralVisivel && 
            menuLateral && 
            !menuLateral.contains(evento.target) && 
            botaoMenu && 
            !botaoMenu.contains(evento.target)) {
            ocultarMenuLateral();
        }
    });

    // Fechar menu lateral com tecla ESC
    document.addEventListener('keydown', (evento) => {
        if (evento.key === 'Escape' && menuLateralVisivel) {
            ocultarMenuLateral();
        }
    });

    // ===== RESPONSIVIDADE =====
    window.addEventListener('resize', () => {
        // Resetar estados ao redimensionar
        if (ehDesktop()) {
            ocultarMenuLateral();
            ocultarMenuSuspenso();
        }
    });

    // ===== ACESSIBILIDADE =====
    
    // Navegação por teclado
    if (botaoMenu) {
        botaoMenu.addEventListener('keydown', (evento) => {
            if (evento.key === 'Enter' || evento.key === ' ') {
                evento.preventDefault();
                alternarMenuLateral();
            }
        });
    }

    if (botaoFechar) {
        botaoFechar.addEventListener('keydown', (evento) => {
            if (evento.key === 'Enter' || evento.key === ' ') {
                evento.preventDefault();
                ocultarMenuLateral();
            }
        });
    }

    // Gerenciamento de foco
    const elementosFocaveis = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
    
    const capturarFoco = (elemento) => {
        const conteudoFocavel = elemento.querySelectorAll(elementosFocaveis);
        const primeiroElemento = conteudoFocavel[0];
        const ultimoElemento = conteudoFocavel[conteudoFocavel.length - 1];

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                if (e.shiftKey) {
                    if (document.activeElement === primeiroElemento) {
                        ultimoElemento.focus();
                        e.preventDefault();
                    }
                } else {
                    if (document.activeElement === ultimoElemento) {
                        primeiroElemento.focus();
                        e.preventDefault();
                    }
                }
            }
        });
    };

    // Aplicar captura de foco quando menu lateral estiver aberto
    if (menuLateral) {
        capturarFoco(menuLateral);
    }
});