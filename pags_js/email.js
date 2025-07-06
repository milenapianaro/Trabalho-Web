(function () {  //integração com o emailJS
    emailjs.init("nrIX3MAzLIeHjjVVn"); // chave/API da conta criada no emailJS para permitir o envio de emails
})();  

window.onload = function () { //função que monitora o evento do formulário
    document.getElementById('contactForm').addEventListener('submit', function (event) {  
        event.preventDefault();//impede o envio do formulário ao recarregar a página

        emailjs.sendForm('1256843259421159', 'template_xer52pr', this) //envia o formulário usando um serviço de email e um template de menssagem criado no emailJS, ambos integrados pelo ID
            .then(() => {  
                alert('Mensagem enviada com sucesso!'); //se der certo, exibe uma mensagem de envio.
                event.target.reset(); 
            }, (error) => {  
                alert('Falha ao enviar a mensagem: ' + JSON.stringify(error));// se der errado, exibe uma mensagem de erro com os detalhes
            });  
    });  
}; 