<?php
session_start();
require_once '../conexao.php'; // Conexão com o banco

// Verificar se o usuário já está logado
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {
    header('Location: mural-estudantes.php');
    exit();
}

// Processar o formulário de login
$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!empty($email) && !empty($senha)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $stmt = $conn->prepare("SELECT senha_hash FROM usuarios_login WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado->num_rows === 1) {
                $usuario = $resultado->fetch_assoc();

                if (password_verify($senha, $usuario['senha_hash'])) {
                    $_SESSION['usuario_logado'] = true;
                    $_SESSION['email_usuario'] = $email;
                    $_SESSION['data_login'] = date('Y-m-d H:i:s');

                    header('Location: mural-estudantes.php');
                    exit();
                } else {
                    $erro = 'Senha incorreta.';
                }
            } else {
                $erro = 'Usuário não encontrado.';
            }
        } else {
            $erro = 'E-mail inválido.';
        }
    } else {
        $erro = 'Por favor, preencha todos os campos.';
    }
}
?>
<!DOCTYPE html>  
<html lang="pt-br">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../pags_css/header&footer.css"> 
    <link rel="stylesheet" href="../pags_css/form-contato.css">
    <title>Acessar Mural dos Estudantes</title>  
</head>  
<body>  
    <?php include '../componentes/header.php'; ?>

    <figure class="banner">  
        <h1><b>Mural dos Estudantes</b></h1>  
    </figure>  
    <main>  
        <h2>Informe seu login e senha para acessar o Mural dos Estudantes</h2>  
        
        <?php if (!empty($erro)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($erro); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="" class="form-login">
            <div class="form-contato">  
                <p>E-mail*:</p>  
                <input type="email" class="controle_form" name="email" placeholder="Insira o seu e-mail" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">  
            </div>  
            <div class="form-contato">  
                <p>Senha*:</p>  
                <input type="password" class="controle_form" name="senha" placeholder="Insira sua senha" required>  
            </div>  
            <div>
                <a class="botao" href="../pags_php/cadastro.php" target="_blank"><p>Não possui uma conta? Clique aqui para fazer seu cadastro.</p></a>
            </div>
            <p class="obrcamp">*Campos obrigatórios.</p>  
            <br><button type="submit" class="botao">Entrar</button></br>  
        </form>  
    </main>  
    <div id="faixa"></div>
    <?php include '../componentes/footer.php'; ?>
</body>  
</html>
