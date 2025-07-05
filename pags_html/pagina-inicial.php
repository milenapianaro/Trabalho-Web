<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../pags_css/header&footer.css">
        <link rel="stylesheet" href="../pags_css/pagina-inicial.css">
        <title>Rota IFPR – Caminho ágil para o seu conhecimento</title>
    </head>
    <body>
        <?php
            include '../componentes/header.php';
        ?>

        <!-- Overlay para menu mobile -->
        <div class="overlay-menu" id="overlay-menu" aria-hidden="true"></div>

        <!-- Menu lateral para mobile -->
        <aside class="menu-lateral" id="menu-lateral" aria-hidden="true">
            <div class="cabecalho-lateral">
                <h3 class="titulo-lateral">Menu</h3>
                <button class="botao-fechar" id="botao-fechar" aria-label="Fechar menu">×</button>
            </div>
            
            <nav class="navegacao-lateral" aria-label="Navegação do menu lateral">
                <a href="../pags_html/sou-aluno.html" class="item-lateral item-lateral--principal">Sou Aluno</a>
                
                <a href="../pags_html/form-login-mural.html" class="item-lateral">
                    <svg class="icone-lateral" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
                    </svg>
                    Mural dos Estudantes
                </a>
                
                <a href="../pags_html/manual-aluno.html" class="item-lateral">
                    <svg class="icone-lateral" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                    </svg>
                    Manual do Aluno
                </a>
                
                <a href="../pags_html/plataformas.html" class="item-lateral">
                    <svg class="icone-lateral" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20 18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/>
                    </svg>
                    Plataformas
                </a>
                
                <a href="../pags_html/matriz-curricular.html" class="item-lateral">
                    <svg class="icone-lateral" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Matriz Curricular
                </a>
                
                <a href="../pags_html/atendimento.html" class="item-lateral">
                    <svg class="icone-lateral" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    Atendimento
                </a>
                
                <div class="separador-lateral"></div>
                
                <a href="../pags_html/quero-ser-aluno.html" class="item-lateral item-lateral--principal">Quero Ser Aluno</a>
                
                <div class="separador-lateral"></div>
                
                <a href="../pags_html/form-contato.html" class="item-lateral item-lateral--principal">Contato</a>
            </nav>
            
            <footer class="rodape-lateral">
                <a href="https://www.instagram.com/ifprpinhaisoficial/" target="_blank" class="link-social">
                    <img src="../Imagens/Página Inicial/INSTAGRAM.png" alt="Instagram">
                    Instagram
                </a>
                
                <a href="https://www.facebook.com/IFPRCampusPinhais" target="_blank" class="link-social">
                    <img src="../Imagens/Página Inicial/FACEBOOK.png" alt="Facebook">
                    Facebook
                </a>
                
                <a href="https://ifpr.edu.br/pinhais/" target="_blank" class="link-social">
                    <img src="../Imagens/Página Inicial/IFPR_LOGO.png" alt="Site Institucional">
                    Site Institucional
                </a>
            </footer>
        </aside>
        <main>
            <div class="main-inicio">
                <img id="banner-logo" src="../Imagens/Página Inicial/ROTA_IFPR.png" alt="Rota IFPR">
                <section class="banner-texto">
                    <h1>SEJA BEM-VINDO AO ROTA IFPR</h1>
                    <br>
                    <p>Aqui você encontrará um guia completo para tudo o que precisa saber sobre o curso de Gestão da Tecnologia da Informação (GTI). Se você é um aluno do IFPR Campus Pinhais ou está considerando se tornar um, aqui é o lugar certo para começar sua jornada.</p>
                    <br>
                    <p>Seja parte da comunidade GTI e construa seu futuro conosco!</p>
                </section>
                <section class="caixas-inicio">
                    <div class="caixa">
                        <a class="icones" href="quero-ser-aluno.html" target="_self">
                            <img src="../Imagens/Página Inicial/quero-ser.png" alt="quero-ser-aluno" class="queroSerAluno">
                        </a>
                        <a class="botoes" href="quero-ser-aluno.html" target="_self">Quero Ser Aluno</a>
                    </div>
                    <div class="caixa">
                        <a class="icones" href="sou-aluno.html" target="_self">
                            <img src="../Imagens/Página Inicial/sou-aluno.png" alt="souAluno" class="souAluno">
                        </a>
                        <a class="botoes" href="sou-aluno.html" target="_self">Sou Aluno</a>
                    </div>
                </section>
            </div>
        </main>
    </body>
    
    <script src="../pags_js/header.js"></script>
    <script src="../pags_js/pagina-inicial-botoes.js"></script>
    <?php
        include '../componentes/footer.php';
    ?> 
