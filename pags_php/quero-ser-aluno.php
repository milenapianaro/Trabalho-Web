<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../pags_css/header&footer.css">
        <link rel="stylesheet" href="../pags_css/quero-ser-aluno.css">
        <title>Rota IFPR – Quero Ser Aluno</title>
    </head>
    <body>
        <?php
            include '../componentes/header.php';
        ?>
        <main>
            <?php
                include '../componentes/banner.php';
                banner('Quer se tornar um aluno?', '../Imagens/Sou Aluno/faxinha.png');
            ?>
            <div id="conteudo-quero-ser-aluno">
                <section class="secao-info" id="secao-curso">
                    <button class="acordeao-titulo">Quero saber Sobre o Curso</button>
                    <div class="secao-conteudo">
                        <p>O Curso oferecido pelo IFPR - Câmpus Pinhais, é uma excelente oportunidade para quem deseja ingressar na área de tecnologia com uma formação sólida e atualizada. Este curso de grau tecnólogo tem duração de 3 anos e é oferecido na modalidade presencial, com aulas no período noturno, das 19h às 22h40 de segunda a sexta-feira.</p>
                        <p>Durante o curso, os alunos adquirem conhecimentos teóricos e práticos em diversas áreas da tecnologia da informação, incluindo administração de sistemas, redes de computadores, desenvolvimento de software e gestão de projetos de TI. O currículo é cuidadosamente estruturado para preparar os alunos para os desafios do mercado de trabalho e para promover a inovação tecnológica nas organizações.</p>
                        <p>Para mais detalhes sobre o conteúdo programático e disciplinas oferecidas, confira a Matriz Curricular do Curso.</p>
                        <a class="botao-mobile" href="../pags_html/matriz-curricular.html" target="_blank">MATRIZ CURRICULAR</a>
                    </div>
                </section>
                <section class="secao-info" id="secao-processo">
                    <button class="acordeao-titulo">Quero saber sobre o Processo Seletivo</button>
                    <div class="secao-conteudo">
                        <div class="video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/_6rlFKRJdPU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h2>Processo Seletivo</h2>
                        <p>O processo seletivo ocorre uma vez por ano, geralmente no segundo semestre. Após inscrição no GOV.BR, você pode se inscrever no Portal do Candidato IFPR.</p>
                        <p>A seleção se dá com base na sua nota no Exame Nacional do Ensino Médio (ENEM) de qualquer ano de 2015 a 2024. Para saber mais sobre datas, inscrições e acesso a tutoriais, visite a página do Processo Seletivo.</p>
                        <a class="botao-mobile" href="https://ifpr.edu.br/estude-conosco/processo-seletivo-graduacao/" target="_blank">PROCESSOS SELETIVOS</a>
                    </div>
                </section>
                <section class="secao-info" id="secao-transferencia">
                    <button class="acordeao-titulo">Quero saber sobre Transferência</button>
                    <div class="secao-conteudo">
                        <h2>Trânsferência Interna e Externa</h2>
                        <p>As transferências permitem que estudantes matriculados em cursos de mesma oferta e nível, tanto no IFPR quanto em outras instituições de ensino, ingressem no curso de Gestão da Tecnologia da Informação sem a necessidade de passar pelo Processo Seletivo convencional. Os editais de transferência são lançados duas vezes ao ano: no final do primeiro semestre e no final do segundo semestre. Esses editais contêm todas as informações necessárias sobre o processo, incluindo prazos, documentos requeridos e critérios de elegibilidade.</p>
                        <p>A transferência é uma excelente oportunidade para estudantes que desejam mudar de instituição ou curso, continuando seus estudos sem interrupção. Se você está interessado em transferir-se para o nosso curso, fique atento aos editais publicados no site do IFPR e garanta que toda a documentação necessária esteja pronta para envio. Para mais informações sobre o processo de transferência e para acessar os editais, visite a tag Processos Seletivos do site do IFPR Campus Pinhais e acompanhe as publicações.</p>
                        <a class="botao-mobile" href="https://ifpr.edu.br/pinhais/tag/processo-seletivo/" target="_blank">EDITAIS DE TRANSFERÊNCIA</a>
                    </div>
                </section>
            </div>
            <div id="faixa"></div>
        </main>
        
        <?php
            include '../componentes/footer.php';
        ?> 
        <script>
        // Acordeão responsivo para mobile
        function acordeaoMobile() {
            if(window.innerWidth < 600) {
                document.querySelectorAll('.acordeao-titulo').forEach(function(titulo) {
                    titulo.style.display = 'block';
                    titulo.onclick = function() {
                        var secao = this.parentElement;
                        var conteudo = secao.querySelector('.secao-conteudo');
                        var aberto = conteudo.classList.contains('aberta');
                        document.querySelectorAll('.secao-conteudo').forEach(function(c) { c.classList.remove('aberta'); });
                        document.querySelectorAll('.acordeao-titulo').forEach(function(t) { t.classList.remove('aberto'); });
                        if (!aberto) {
                            this.classList.add('aberto');
                            conteudo.classList.add('aberta');
                        }
                    };
                });
                // Esconde todos os conteúdos inicialmente
                document.querySelectorAll('.secao-conteudo').forEach(function(c) { c.classList.remove('aberta'); });
                document.querySelectorAll('.acordeao-titulo').forEach(function(t) { t.classList.remove('aberto'); });
            } else {
                // Em telas grandes e tablet, mostra tudo aberto e esconde botões
                document.querySelectorAll('.acordeao-titulo').forEach(function(t) { t.style.display = 'none'; t.classList.remove('aberto'); });
                document.querySelectorAll('.secao-conteudo').forEach(function(c) { c.style.display = 'block'; c.classList.remove('aberta'); });
            }
        }
        document.addEventListener('DOMContentLoaded', acordeaoMobile);
        window.addEventListener('resize', acordeaoMobile);
        </script>
    </body>
</html>