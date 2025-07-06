<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rota IFPR – Sou Aluno</title>
        <link rel="stylesheet" href="../pags_css/header&footer.css">
        <link rel="stylesheet" href="../pags_css/sou-aluno.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
            include '../componentes/header.php';
        ?>
        <main>
            <section class="jornada">
                <figure class="faixinha">
                    <h1>Espaço do Aluno</h1>
                </figure>
                <section id="painel">
                    <h2>Acesso Rápido</h2>
                    <section class="botoes">
                        <a class="link" href="https://ifpr.edu.br/pinhais/institucional/area-do-aluno/horario-de-aulas-e-atendimento/" target="_blank">
                            <p>Grade horária</p>
                        </a>
                        <a class="link" href="https://ifpr.edu.br/pinhais/institucional/area-do-aluno/calendario-academico/" target="_blank">
                            <p>Agenda</p>
                        </a>
                        <a class="link" href="https://suap.ifpr.edu.br/" target="_blank">
                            <p>SUAP</p>
                        </a>
                        <a class="link" href="https://ava.ifpr.edu.br/" target="_blank">
                            <p>AVA</p>
                        </a>
                    </section>
                </section> 

                <section class="paginas">
                    <div class="linha-botoes">
                        <a class="bloco" href="../pags_html/mural-estudantes.php" target="_self">
                            <img class= "icone" src="../Imagens/Sou Aluno/muraldosestudates.png">
                            <h3>Mural dos Estudantes</h3> 
                            <p>Espaço de comunicação entre os alunos do GTI. Participe de discussões, tire dúvidas, compartilhe avisos, eventos e novidades.</p>
                        </a>
                        <a class="bloco" href="../pags_html/manual-aluno.php" target="_self">
                            <img class= "icone" src="../Imagens/Sou Aluno/manual.png">
                            <h3>Manual do Aluno</h3> 
                            <p>Veja informações sobre o método de avaliação, abono de faltas e segunda chamada, horários de atendimento, projetos de pesquisa e extensão, assistência estudantil e aproveitamento de estudos.</p>
                        </a>
                    </div>
                    <div class="linha-botoes">
                        <a class="bloco" href="../pags_html/plataformas.php" target="_self">
                            <img class= "icone" src="../Imagens/Sou Aluno/plataformas.png">
                            <h3>Plataformas e Recursos</h3>
                            <p>Cadastre-se nas plataformas do IFPR, obtenha seu email institucional, acesse as bibliotecas e solicite sua carteira de estudante. Facilite sua vida acadêmica com nossos recursos tecnológicos.</p>
                        </a>
                        <a class="bloco" href="../pags_html/matriz-curricular.php" target="_self">
                            <img class= "icone" src="../Imagens/Sou Aluno/grade.png">
                            <h3>Matriz Curricular</h3> 
                            <p>Conheça o curso de Gestão da Tecnologia da Informação, explore as disciplinas, planeje suas horas complementares e aprenda mais sobre estágios. Organize seu semestre de forma eficiente.</p>
                        </a> 
                        <a class="bloco" href="../pags_html/atendimento.php" target="_self">
                            <img class= "icone" src="../Imagens/Sou Aluno/atendimento.png">
                            <h3>E-mails e Atendimento</h3>
                            <p>Entre em contato com professores, coordenação e outros setores da instituição através dos emails disponíveis. Conecte-se e esclareça suas dúvidas de maneira rápida.</p>
                        </a>
                    </div>
                </section>
            </section>
            <div id="faixa"></div>
        </main>
    <?php
        include '../componentes/footer.php';
    ?> 
