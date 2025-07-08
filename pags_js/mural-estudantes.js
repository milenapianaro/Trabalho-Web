// Função para enviar imagem via AJAX
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
                // O PHP já redireciona automaticamente
                // Não precisamos fazer nada aqui
            }
        }).catch(error => {
            console.error('Erro ao enviar imagem:', error);
            alert('Erro ao enviar imagem. Tente novamente.');
        });
    }
}

// Função para atualizar mensagens manualmente (recarrega a página)
function atualizarMensagens() {
    window.location.reload();
}



// Inicialização quando a página carrega
window.onload = function() {
    const container = document.querySelector('.mensagens-container');
    if (container) {
        container.scrollTop = container.scrollHeight;
    }
}; 