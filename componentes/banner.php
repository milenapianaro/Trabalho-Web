<?php
    function banner($texto, $imagem = '../Imagens/Página Inicial/banner.png') {
            echo <<<CSS
        <style>
        .banner {
            position: relative;
            width: 100%;
            height: 150px;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            background-color: #009e47;
            background-image: url("$imagem");
            background-size: auto 90%;
            background-position: right center;
            background-repeat: no-repeat;
            overflow: hidden;
        }
        .banner h1 {
            justify-content: center;
            margin-left: 30px;
            color: white;
            text-align: left;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 0;
        }
        @media (max-width: 599px) {
            .banner {
                height: 120px;
                background-size: auto 140%;
                background-position: 60% center;
            }
            .banner h1 {
                font-size: 1.3rem;
                margin-left: 18px;
                text-align: left;
            }
        }
        </style>
        CSS;
            echo '<figure class="banner">';
            echo '    <h1>' . htmlspecialchars($texto) . '</h1>';
            echo '</figure>';
    }
?> 