<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
    <link rel="stylesheet" href="../pags_css/header&footer.css"> 
    <link rel="stylesheet" href="../pags_css/cadastro.css"> 
    <title>Cadastro de Usuário</title>    
</head>
<body>
    <?php include '../componentes/header.php'; ?>
    <?php 
            include '../componentes/banner.php';
            banner('Mural dos Estudantes', '../Imagens/Sou Aluno/faxinha.png');
    ?> 
    <h2 class="espaco-topo">Cadastro de Usuário</h2>

    <div class="cadastro-container">
    <form method="POST" action="cadastro_usuario.php">
        <label for="nome_completo">Nome completo:</label>
        <input type="text" id="nome_completo" name="nome_completo" required>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>
    </div>

    <?php include '../componentes/footer.php'; ?>
</body>
</html>
