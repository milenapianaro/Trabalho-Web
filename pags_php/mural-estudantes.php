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
            $stmt = $conn->prepare("INSERT INTO mensagens (usuario_email, usuario_nome, mensagem, tipo) VALUES (?, ?, ?, 'texto')");
            $stmt->bind_param("sss", $_SESSION['email_usuario'], $_SESSION['email_usuario'], $mensagem);
            $stmt->execute();
            
            // Redirecionar para evitar reenvio da mensagem
            header('Location: mural-estudantes.php' . (isset($_GET['filtro']) ? '?filtro=' . $_GET['filtro'] : ''));
            exit();
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
                    $stmt = $conn->prepare("INSERT INTO mensagens (usuario_email, usuario_nome, mensagem, tipo) VALUES (?, ?, ?, 'imagem')");
                    $stmt->bind_param("sss", $_SESSION['email_usuario'], $_SESSION['email_usuario'], $fileName);
                    $stmt->execute();
                    
                    header('Location: mural-estudantes.php' . (isset($_GET['filtro']) ? '?filtro=' . $_GET['filtro'] : ''));
                    exit();
                }
            }
        }
    }
}

$filtro = $_GET['filtro'] ?? 'recentes';

$orderBy = ($filtro === 'antigas') ? 'ASC' : 'DESC';
$stmt = $conn->prepare("SELECT id, usuario_email, usuario_nome, mensagem, tipo, data_criacao FROM mensagens ORDER BY data_criacao $orderBy");
$stmt->execute();
$result = $stmt->get_result();
$mensagens = [];

while ($row = $result->fetch_assoc()) {
    $mensagens[] = [
        'id' => $row['id'],
        'usuarioEmail' => $row['usuario_email'],
        'usuarioNome' => $row['usuario_nome'],
        'mensagem' => $row['tipo'] === 'imagem' ? '../uploads/mural/' . $row['mensagem'] : $row['mensagem'],
        'tipo' => $row['tipo'],
        'dataCriacao' => $row['data_criacao']
    ];
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
                <a href="?filtro=antigas" class="botao-filtro <?php echo $filtro === 'antigas' ? 'ativo' : ''; ?>">
                    Mais recentes
                </a>
                <a href="?filtro=recentes" class="botao-filtro <?php echo $filtro === 'recentes' ? 'ativo' : ''; ?>">
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
                                        <div class="nome-usuario"><?php echo htmlspecialchars($msg['usuarioNome'] ?? ''); ?></div>
                                        <div class="email-usuario"><?php echo htmlspecialchars($msg['usuarioEmail'] ?? ''); ?></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo-mensagem">
                                <?php if ($msg['tipo'] === 'imagem'): ?>
                                    <div class="container-imagem">
                                        <img src="<?php echo htmlspecialchars($msg['mensagem'] ?? ''); ?>" 
                                             alt="Imagem da mensagem" 
                                             class="imagem-mensagem"
                                             onerror="this.style.display='none'">
                                    </div>
                                <?php else: ?>
                                    <p class="texto-mensagem"><?php echo nl2br(htmlspecialchars($msg['mensagem'] ?? '')); ?></p>
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
    <script src="../pags_js/mural-estudantes.js"></script>
</body>
</html>
