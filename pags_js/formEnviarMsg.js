document.getElementById('contactForm').addEventListener('submit', function(event) { //função que monitora o evento do formulário
    event.preventDefault(); //impede o envio do formulário ao recarregar a página
    alert('Mensagem Enviada!');
    event.target.reset();
});
