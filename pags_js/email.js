// Inicializando o EmailJS 

(function () {  
    emailjs.init("nrIX3MAzLIeHjjVVn"); // Substitua por sua chave pública  
})();  

window.onload = function () {  
    document.getElementById('contactForm').addEventListener('submit', function (event) {  
        event.preventDefault();  

        // Enviar o formulário  
        emailjs.sendForm('Contact_ID', 'template_xer52pr', this) // Substitua pelos seus valores  
            .then(() => {  
                alert('Mensagem enviada com sucesso!');  
                event.target.reset(); // Reseta o formulário  
            }, (error) => {  
                alert('Falha ao enviar a mensagem: ' + JSON.stringify(error));  
            });  
    });  
}; 