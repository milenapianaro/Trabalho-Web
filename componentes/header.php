<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pags_css/header&footer.css">
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina : 'Rota IFPR – Caminho ágil para o seu conhecimento'; ?></title>
</head>
<body>
    <header class="cabecalho-site">
        <div class="cabecalho-principal">
            <a class="logo-cabecalho" href="../pags_html/pagina-inicial.php" aria-label="Página Inicial">
                <img class="logo-ifpr" src="../Imagens/Página Inicial/ifpr-logo.png" alt="Logo IFPR Campus Pinhais">
            </a>
            
            <nav class="navegacao-cabecalho" aria-label="Navegação principal">
                <a class="link-navegacao" id="nav-aluno" href="../pags_html/sou-aluno.php">
                    <img class="seta-navegacao" id="seta-aluno" src="../Imagens/Matriz Curricular/seta.png" alt="">
                    Sou Aluno
                </a>
                <a class="link-navegacao" href="../pags_html/quero-ser-aluno.php">Quero Ser Aluno</a>
                <a class="link-navegacao" href="../pags_html/form-contato.php">Contato</a>
            </nav>
            
            <button class="botao-menu" id="botao-menu" aria-label="Abrir menu" aria-expanded="false">
                <span class="linha-hamburguer"></span>
                <span class="linha-hamburguer"></span>
                <span class="linha-hamburguer"></span>
            </button>
        </div>
        
        <div class="menu-suspenso" id="menu-suspenso" aria-hidden="true">
            <nav class="navegacao-suspensa" aria-label="Menu do aluno">
                <a href="../pags_html/form-login-mural.php">Mural dos Estudantes</a>
                <a href="../pags_html/manual-aluno.php">Manual do Aluno</a>
                <a href="../pags_html/plataformas.php">Plataformas e Recursos</a>
                <a href="../pags_html/matriz-curricular.php">Matriz Curricular</a>
                <a href="../pags_html/atendimento.php">E-mails e Atendimento</a>
            </nav>
        </div>
    </header>

    <!-- Overlay para menu mobile -->
    <div class="overlay-menu" id="overlay-menu" aria-hidden="true"></div>

    <!-- Menu lateral para mobile -->
    <?php include 'menu-lateral.php'; ?> 