<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudantes</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .usuario { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px; }
        .usuario strong { display: block; margin-bottom: 5px; }
    </style>
</head>
<body>
    <h1>Estudantes com acesso ao mural</h1>
    <div id="lista-usuarios">Carregando...</div>

<script>
    fetch('listar_usuarios.php')
        .then(response => {
            if (!response.ok) throw new Error("Erro na requisição");
            return response.json();
        })
        .then(data => {
            const container = document.getElementById('lista-usuarios');
            container.innerHTML = ''; // limpa "Carregando..."

            if (data.length === 0) {
                container.textContent = "Nenhum usuário encontrado.";
                return;
            }

            data.forEach(usuario => {
                const div = document.createElement('div');
                div.className = 'usuario';
                div.innerHTML = `
                    <strong>${usuario.nome_completo}</strong>
                    Email: ${usuario.email}<br>
                    Matrícula: ${usuario.matricula}
                `;
                container.appendChild(div);
            });
        })
        .catch(error => {
            document.getElementById('lista-usuarios').textContent = "Erro ao carregar usuários.";
            console.error(error);
        });
</script>

</body>
</html>