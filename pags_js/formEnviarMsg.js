document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    alert('Mensagem Enviada!');

    event.target.reset();
});
