<?php
session_start();
require_once '../conexao.php';

// Redirecionar se não estiver logado
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
    header('Location: form-login-mural.php');
    exit();
}

// Processar envio de mensagem ou imagem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
    if ($_POST['acao'] === 'enviar_mensagem') {
        $mensagem = trim($_POST['mensagem'] ?? '');
        if (!empty($mensagem)) {
            $novaMensagem = [
                'id' => uniqid(),
                'usuarioEmail' => $_SESSION['email_usuario'],
                'usuarioNome' => $_SESSION['email_usuario'],
                'mensagem' => $mensagem,
                'tipo' => 'texto',
                'dataCriacao' => date('Y-m-d H:i:s')
            ];

            if (!isset($_SESSION['mensagens'])) {
                $_SESSION['mensagens'] = [];
            }
            $_SESSION['mensagens'][] = $novaMensagem;
        }
    } elseif ($_POST['acao'] === 'enviar_imagem') {
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = '../uploads/mural/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $fileExtension = strtolower(pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($fileExtension, $allowedExtensions)) {
                $fileName = uniqid() . '.' . $fileExtension;
                $uploadPath = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadPath)) {
                    $novaMensagem = [
                        'id' => uniqid(),
                        'usuarioEmail' => $_SESSION['email_usuario'],
                        'usuarioNome' => $_SESSION['email_usuario'],
                        'mensagem' => $uploadPath,
                        'tipo' => 'imagem',
                        'dataCriacao' => date('Y-m-d H:i:s')
                    ];

                    if (!isset($_SESSION['mensagens'])) {
                        $_SESSION['mensagens'] = [];
                    }
                    $_SESSION['mensagens'][] = $novaMensagem;
                }
            }
        }
    }
}

$filtro = $_GET['filtro'] ?? 'recentes';
$mensagens = $_SESSION['mensagens'] ?? [];

// Filtros
if ($filtro === 'antigas') {
    usort($mensagens, fn($a, $b) => strtotime($a['dataCriacao']) - strtotime($b['dataCriacao']));
} else {
    usort($mensagens, fn($a, $b) => strtotime($b['dataCriacao']) - strtotime($a['dataCriacao']));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../pags_css/header&footer.css">
    <link rel="stylesheet" href="../pags_css/mural-estudantes.css">
    <title>Mural dos Estudantes - IFPR</title>
</head>
<body>
    <?php include '../componentes/header.php'; ?>

    <?php
        include '../componentes/banner.php';
        banner('Mural dos Estudantes', '../Imagens/Sou Aluno/faxinha.png');
    ?>

    <div class="section-filtros">
        <div class="section-filtros-content">
            <div class="filtros-container">
                <a href="?filtro=recentes" class="botao-filtro <?php echo $filtro === 'recentes' ? 'ativo' : ''; ?>">
                    Mais recentes
                </a>
                <a href="?filtro=antigas" class="botao-filtro <?php echo $filtro === 'antigas' ? 'ativo' : ''; ?>">
                    Mais antigas
                </a>
            </div>
        </div>
        <a href="logout-mural.php" class="botao-sair">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
    <main>
        <div class="container-mural">
            <div class="mensagens-container">
                <?php if (empty($mensagens)): ?>
                    <div class="mensagem-vazia">
                        <i class="fas fa-comments"></i>
                        <p>Nenhuma mensagem encontrada.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($mensagens as $msg): ?>
                        <div class="cartao-mensagem">
                            <div class="cabecalho-mensagem">
                                <div class="usuario-info">
                                    <div class="foto-usuario">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="info-usuario">
                                        <div class="nome-usuario"><?php echo htmlspecialchars($msg['usuarioNome']); ?></div>
                                        <div class="email-usuario"><?php echo htmlspecialchars($msg['usuarioEmail']); ?></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo-mensagem">
                                <?php if ($msg['tipo'] === 'imagem'): ?>
                                    <div class="container-imagem">
                                        <img src="<?php echo htmlspecialchars($msg['mensagem']); ?>" 
                                             alt="Imagem da mensagem" 
                                             class="imagem-mensagem"
                                             onerror="this.style.display='none'">
                                    </div>
                                <?php else: ?>
                                    <p class="texto-mensagem"><?php echo nl2br(htmlspecialchars($msg['mensagem'])); ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div class="data-mensagem">
                                <?php echo date('d/m/Y H:i', strtotime($msg['dataCriacao'])); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="input-barra">
            <form method="POST" class="form-mensagem" enctype="multipart/form-data">
                <input type="hidden" name="acao" value="enviar_mensagem">
                <div class="input-wrapper">
                    <button type="button" class="botao-camera" onclick="document.getElementById('upload-imagem').click()">
                        <i class="fas fa-camera"></i>
                    </button>
                    <input type="file" id="upload-imagem" name="imagem" accept="image/*" style="display: none;" onchange="enviarImagem(this)">
                    <input type="text" 
                           name="mensagem" 
                           class="input-mensagem" 
                           placeholder="Escreva sua mensagem..."
                           required>
                </div>
                <button type="submit" class="botao-enviar">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </main>
    <?php include '../componentes/footer.php'; ?>
    <script>
        function enviarImagem(input) {
            if (input.files && input.files[0]) {
                const formData = new FormData();
                formData.append('acao', 'enviar_imagem');
                formData.append('imagem', input.files[0]);

                fetch(window.location.href, {
                    method: 'POST',
                    body: formData
                }).then(response => {
                    if (response.ok) {
                        window.location.reload();
                    }
                }).catch(error => {
                    console.error('Erro ao enviar imagem:', error);
                    alert('Erro ao enviar imagem. Tente novamente.');
                });
            }
        }

        window.onload = function() {
            const container = document.querySelector('.mensagens-container');
            if (container) {
                container.scrollTop = container.scrollHeight;
            }
        };
    </script>
</body>
</html>
