    <footer class="footer"> 
        <a href="https://www.instagram.com/ifprpinhaisoficial/" target="_blank">
            <div class="item instagram">
                <img src="Imagens/Página Inicial/INSTAGRAM.png" alt="Instagram">Instagram
            </div>
        </a>
        <a href="https://www.facebook.com/IFPRCampusPinhais" target="_blank">
            <div class="item facebook">
                <img src="Imagens/Página Inicial/FACEBOOK.png" alt="Facebook">Facebook
            </div>
        </a>         
        <a href="https://ifpr.edu.br/pinhais/" target="_blank">
            <div class="item institucional">
                <img src="Imagens/Página Inicial/IFPR_LOGO.png" alt="Institucional">Site Institucional
            </div>
        </a>         
    </footer>
    
    <script src="pags_js/header.js"></script>
    <?php if (isset($scripts_adicionais)): ?>
        <?php foreach ($scripts_adicionais as $script): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html> 