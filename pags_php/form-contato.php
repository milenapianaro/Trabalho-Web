<!DOCTYPE html>  
<html lang="pt-br">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../pags_css/header&footer.css"> 
    <link rel="stylesheet" href="../pags_css/form-contato.css">
    <title>Rota IFPR - Contato</title>  
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>  
    <script type="text/javascript" src="../pags_js/email.js"></script>  
</head>  
<body>  
    <?php include '../componentes/header.php'; ?>

    <?php 
        include '../componentes/banner.php';
        banner('Entre em Contato Conosco', '../Imagens/Sou Aluno/faxinha.png');
    ?> 
    <main>  
        <h2 class="espaco-topo">Envie sua dúvida ou sugestão para nós.</h2>  
        <h3>Assim que possível ela será respondida.</h3>  
        <div class="form-contato-container">
        <form id="contactForm">  
            <div class="form-contato">  
                <p>Nome*:</p>  
                <input type="text" class="controle_form" name="user_name" placeholder="Insira o seu nome completo" required>  
            </div>  
            <div class="form-contato">  
                <p>E-mail*:</p>  
                <input type="email" class="controle_form" name="user_email" placeholder="Insira o seu e-mail" required>  
            </div>  
            <div class="form-contato">  
                <p>Telefone / Whatsapp:</p>  
                <input type="tel" class="controle_form" name="user_phone" placeholder="Insira o seu número">  
            </div>  
            <div class="form-contato">  
                <p>Mensagem*:</p>  
                <textarea class="campo_msg" name="message" placeholder="Insira sua mensagem" required></textarea>  
            </div>  
            <div class="obrcamp">* Campos obrigatórios.</div>  
            <br><button type="submit" class="botao">Enviar</button></br>  
        </form>  
        </div>
    </main>  
    <div id="faixa"></div>
    <?php include '../componentes/footer.php'; ?>
</body>  
</html>