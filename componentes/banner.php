<?php
    if (!function_exists('banner')) {
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
            background-size: auto 200%;
            background-position: 130% center;
            background-repeat: no-repeat;
            overflow: hidden;
        }
        .banner h1 {
            margin-left: 30px;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            align-self: center;
            margin: 0;
            padding: 0;
        }
        
        @media (min-width: 1025px) and (max-width: 1440px) {
            .banner {
                height: 130px;
                background-position: 10% center;
            }
            .banner h1 {
                font-size: 1.8rem;
                margin-left: 35px;
            }
        }
        
        @media (min-width: 1441px) {
            .banner {
                height: 150px;
            }
            .banner h1 {
                font-size: 2rem;
                margin-left: 40px;
            }
        }
        
        @media (min-width: 600px) and (max-width: 1024px) {
            .banner {
                height: 140px;
                background-position: 40% center;
            }
            .banner h1 {
                font-size: 1.8rem;
                margin-left: 25px;
            }
        }
        
        @media (max-width: 599px) {
            .banner {
                height: 120px;
                background-position: 60% center;
            }
            .banner h1 {
                font-size: 1.3rem;
                margin-left: 18px;
            }
        }
        </style>
        CSS;
            echo '<figure class="banner">';
            echo '    <h1>' . htmlspecialchars($texto) . '</h1>';
            echo '</figure>';
        }
    }
?> 