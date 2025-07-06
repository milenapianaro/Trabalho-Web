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
        <main>
            <div class="main-inicio">
                <img id="banner-logo" src="../Imagens/Página Inicial/ROTA_IFPR.png" alt="Rota IFPR">
                <section class="banner-texto">
                    <h1>SEJA BEM-VINDO AO ROTA IFPR</h1>
                    <br>
                    <p>Seu guia completo para o curso de Gestão da Tecnologia da Informação.</p>
                    <br>
                    <p>Navegue pelas opções abaixo e descubra tudo que o IFPR Campus Pinhais tem para oferecer.</p>
                </section>
                <section class="caixas-inicio">
                    <div class="caixa">
                        <a class="botoes" href="quero-ser-aluno.php" target="_self">
                            <img src="../Imagens/Página Inicial/quero-ser.png" alt="quero-ser-aluno" class="icone-botao">
                            <span>Quero Ser Aluno</span>
                        </a>
                    </div>
                    <div class="caixa">
                        <a class="botoes" href="sou-aluno.php" target="_self">
                            <img src="../Imagens/Página Inicial/sou-aluno.png" alt="souAluno" class="icone-botao">
                            <span>Sou Aluno</span>
                        </a>
                    </div>
                </section>
            </div>
        </main>
    <script src="../pags_js/header.js"></script>
    <script src="../pags_js/pagina-inicial-botoes.js"></script>
    <?php
        include '../componentes/footer.php';
    ?> 
