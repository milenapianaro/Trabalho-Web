<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rota IFPR – Manual do Aluno</title>
        <link rel="stylesheet" href="../pags_css/header&footer.css">
        <link rel="stylesheet" href="../pags_css/manual-aluno.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
    <?php include '../componentes/header.php'; ?>
        <main>
        <?php 
            include '../componentes/banner.php';
            banner('Manual do Aluno', '../Imagens/Sou Aluno/faxinha.png');
        ?>
            <section class="descricao">
                <div class="secao-conteudo">
                <p>Vocês acabaram de ingressar em uma instituição federal de referência no ensino tecnológico e científico. Nossa infraestrutura e equipe foram pensadas para que você, estudante, se desenvolva como cidadão e profissional, consciente dos desafios do mundo do trabalho e da sociedade. Com o apoio técnico e humano aqui disponível, você estará preparado para atuar de forma crítica, empreendedora e sustentável, interagindo com a comunidade.</p>
                <br>
                <p>O Campus Pinhais, inaugurado em 2015, é comprometido com a educação técnica, científica e tecnológica de qualidade. Promovemos a união entre Ensino, Pesquisa, Extensão e Inovação, pilares essenciais para a evolução e preparo do aluno em um mundo em constante mudança.</p>
                <br>
                <p>Nesta página, apresentamos as informações que consideramos mais essenciais para a sua experiência no IFPR. Para que vocês conheçam mais da Instituição e das normas internas, recomendamos a leitura completa do <a class="hyperlink" href="https://ifpr.edu.br/pinhais/wp-content/uploads/sites/22/2018/12/Manual-do-Aluno_IFPR-Pinhais.pdf" target="_blank">Manual do Aluno</a>.</p> 
                </div>
            </section>
            <section class="avaliacao">
                <div class="secao-conteudo">
                <h2>Método de Avaliação</h2>
                <br>
                <p>A avaliação é fundamental na aprendizagem, proporcionando o diagnóstico do percurso formativo para professores e alunos. No IFPR, ela se dá através de conceitos ao invés de notas. Estes são:</p>
                <br>
                <ul>
                    <li>Conceito A: Aprendizagem plena, atingindo todos os objetivos propostos.</li>
                    <li>Conceito B: Aprendizagem parcialmente plena, atingindo níveis desejáveis dos objetivos.</li>
                    <li>Conceito C: Aprendizagem suficiente, atingindo níveis aceitáveis sem comprometer a continuidade.</li>
                    <li>Conceito D: Aprendizagem insuficiente, não atingindo os objetivos e comprometendo o processo.</li>

                </ul>
                <br>
                <p>Ao final do período letivo, o professor emite um conceito final representando o aproveitamento do aluno durante todo o período. Os conceitos parciais, lançados ao final de cada bimestre, servem apenas como parâmetros para determinar o conceito final.</p>
                <br>
                <div class="avaliacao-aviso">
                    <p>É importante ressaltar que a avaliação por conceito não é uma soma ou média de conceitos parciais!</p>
                </div>
                <br>
                <p>Vamos explicar algumas partes fundamentais para compreender o processo de avaliação no IFPR: os conceitos e aprovações e/ou reprovações. A seguir, estão seis cenários hipotéticos ilustrando como os conceitos finais foram atribuídos a diferentes alunos:</p>
                <br>
                <table>
                    <thead> 
                        <tr> 
                            <th class="nome" rowspan="2">Aluno</th> 
                            <th colspan="2">Etapa 1</th> 
                            <th colspan="2">Etapa 2</th> 
                            <th rowspan="2">Etapa Final</th> 
                        </tr> 
                        <tr id="atividades"> 
                            <th>Atividade 1</th> 
                            <th>Atividade 2</th> 
                            <th>Atividade 1</th> 
                            <th>Atividade 2</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                            <td>João</td> 
                            <td>B</td> 
                            <td>B</td> 
                            <td>B</td> 
                            <td>B</td> 
                            <td>C</td> 
                        </tr> 
                        <tr class="fundo-cinza"> 
                            <td>Pedro</td> 
                            <td>D</td> 
                            <td>D</td> 
                            <td>D</td> 
                            <td>A</td> 
                            <td>A</td> 
                        </tr> 
                        <tr> 
                            <td>Maria</td> 
                            <td>A</td> 
                            <td>D</td> 
                            <td>A</td> 
                            <td>A</td> 
                            <td>D</td> 
                        </tr> 
                        <tr class="fundo-cinza"> 
                            <td>Júlia</td> 
                            <td>A</td> 
                            <td>B</td> 
                            <td>C</td> 
                            <td>D</td> 
                            <td>C</td> 
                        </tr> 
                        <tr> 
                            <td>Mateus</td> 
                            <td>D</td> 
                            <td>C</td> 
                            <td>B</td> 
                            <td>A</td> 
                            <td>B</td> 
                        </tr> 
                        <tr class="fundo-cinza"> 
                            <td>Gabriel</td> 
                            <td>A</td> 
                            <td>A</td> 
                            <td>A</td> 
                            <td>A</td> 
                            <td>B</td> 
                        </tr> 
                    </tbody>
                </table>
                <br>
                <ul>
                    <li>João: Teve conceito B em todos os bimestres, mas faltou em uma recuperação proposta pelo professor no final de ano, mostrando um pouco de desinteresse em melhorar sua avaliação; então, o professor reduziu o conceito para C.</li>
                    <li>Pedro: Teve dificuldades durante todo o ano, mas no projeto final do componente conseguiu aplicar todos os conceitos trabalhados pelo professor durante o ano.</li>
                    <li>Maria: Teve um ótimo aproveitamento ao longo do ano, mas na 1ª etapa não compreendeu uma teoria fundamental do componente.</li>
                    <li>Júlia e Mateus: Ambos tiveram os mesmos conceitos ao longo do ano, porém, Júlia piorou o rendimento bimestre a bimestre, enquanto Mateus mostrou melhora.</li>
                    <li>Gabriel: Teve aproveitamento excelente nos conteúdos, porém, faltou diversas aulas; então, o professor reduziu o conceito para B.</li>
                </ul>
                <br>
                <p class="avaliacao-aviso">Além de <strong>conceito igual ou superior a C</strong>, o aluno precisa ter <strong>frequência total acima de 75%</strong> na disciplina para ser aprovado.</p>
                <br>
                <p>O IFPR considera a avaliação como um processo contínuo. Assim, os professores têm autonomia para fornecer diversas oportunidades aos alunos de demonstrar seu conhecimento ao longo do período letivo, incluindo recuperações paralelas e atendimentos fora do horário de aula.</p>
                </div>
            </section>
            <section class="faltas">
                <div class="secao-conteudo">
                <h2>Abono de faltas e segunda chamada de avaliação</h2>
                <br>
                <p>Durante o período letivo, é obrigatória uma frequência mínima de 75% da carga horária total. <strong>Não há abono de faltas</strong>, exceto para ausência justificada pela Lei do Serviço Militar. Também não há segunda chamada formal para avaliações, salvo exceção da Lei do Serviço Militar.</p>
                <br>
                <p>A Direção de Ensino, Pesquisa e Extensão, junto aos professores dos componentes curriculares, pode dispensar esporadicamente os alunos de aulas regulares para participação em cursos intensivos, simpósios, seminários, congressos, entre outras atividades correlacionadas ao curso. Nessas situações, <strong>as faltas devem ser justificadas</strong> e deve ser oferecida a recuperação de avaliações formais ocorridas durante o período de ausência.</p>
                <br>
                <p>O registro de <strong>atestados</strong>, declarações e demais justificativas de ausências e não realização de atividades avaliativas podem ser feitas <a class="hyperlink" href="https://forms.gle/J1PMCYKiieXkXdYWA" target="_blank">clicando aqui</a>. Tais documentos não abonam faltas ou garantem direito à 2ª chamada, mas funcionam como registros a serem considerados por docentes e equipe pedagógica para possíveis tomadas de decisão sobre frequência, recuperações e resultados.</p>
                </div>
            </section>
            <section class="projetosepesquisa">
                <div class="secao-conteudo">
                <h2>Projetos de pesquisa e extensão</h2>
                <br>
                <p>Aqui no IFPR, acreditamos firmemente que Ensino, Pesquisa e Extensão estão intrinsecamente ligados. Por isso, nossos professores estão empenhados em oferecer projetos de pesquisa e extensão aos alunos. Esses projetos visam uma formação multidisciplinar, proporcionando ao aluno uma educação ampla e adaptável aos cenários em constante mudança, além de identificar e potencializar as especificidades de cada indivíduo.</p>
                <br>
                <p>Os projetos de Pesquisa e Extensão cobrem uma variedade de temas, horários e são oferecidos por diferentes professores. Mesmo não sendo obrigatória a participação, ela é uma excelente oportunidade para seu desenvolvimento pessoal e profissional. Durante o curso, além da formação tradicional, você pode adquirir diversas habilidades e experiências, aproveitando ao máximo o potencial oferecido pelo IFPR.</p>
                <br>
                <h3>Como se informar?</h3>
                <br>
                <p>Para saber mais sobre os projetos em andamento, você pode:</p>
                <br>
                <ul>
                    <li><strong>Conversar diretamente com os professores:</strong> Eles podem fornecer detalhes e orientações específicas sobre os projetos.</li>
                    <li><strong>Portal da Transparência SISCOPE:</strong> O IFPR disponibiliza  para facilitar o acesso às informações. No portal, selecione a aba "Campus", escolha "Pinhais" e clique no botão "Buscar Cadastro". Este portal oferece uma visão completa e atualizada dos projetos, permitindo que você explore diversas iniciativas e encontre oportunidades alinhadas aos seus interesses acadêmicos e profissionais. <a class="hyperlink" href="https://cope.ifpr.edu.br/transparenciaprojetoscampus.php" target="_blank">Acesse o Portal.</a></li>
                </ul>
                <br>
                <p>Aproveite essas oportunidades para enriquecer sua experiência acadêmica e fortalecer seu perfil profissional!</p>
                </div>
            </section>
            <section class="assistencia">
                <div class="secao-conteudo">
                <h2>Assistência Estudantil</h2>
                <br>
                <p>O IFPR possui uma Política de Apoio Estudantil desenvolvida pela Diretoria de Assuntos Estudantis e Atividades Especiais (DAES) da Pró-Reitoria de Ensino (PROENS). Esta política é voltada para garantir seu acesso, permanência e êxito no Instituto Federal do Paraná (IFPR), especialmente se você estiver em situação de vulnerabilidade socioeconômica.</p>
                <br>
                <p><strong>O que é vulnerabilidade socioeconômica?</strong> É quando um indivíduo ou família passa por processos de exclusão, discriminação ou enfraquecimento do grupo social, limitando suas oportunidades de superação. Isso resulta de desigualdades sociais e financeiras, ou fragilização de vínculos sociais e afetivos.</p>
                <br>
                <h3>O que oferecemos?</h3>
                <br>
                <p>A Política de Apoio Estudantil do IFPR inclui ações para garantir que você possa concluir seu curso com sucesso. Estas ações são alinhadas aos princípios da Educação Integral, que abrange formação geral, profissional e tecnológica, e estão sempre em articulação com os setores produtivos locais, econômicos e sociais.
                </p>
                <br>
                <div class="assistencia-programas">
                    <div class="assistencia-itens" onclick="ativarSecao('alimentacao')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Alimentação</h4>
                    </div>
                    <div class="assistencia-descricao" id="alimentacao">
                        <p>O auxílio-alimentação é disponibilizado pelo Programa de Assistência Complementar ao Estudante (PACE) para estudantes que precisam permanecer em período integral no câmpus e para estudantes trabalhadores matriculados em cursos noturnos, desde que se encontrem em situação de vulnerabilidade socioeconômica. O edital de seleção é publicado no início do período letivo.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('transporte')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Transporte</h4>
                    </div>
                    <div class="assistencia-descricao" id="transporte">
                        <p>O auxílio-transporte é para estudantes em vulnerabilidade socioeconômica que residem a mais de 3 km do câmpus e necessitam utilizar transporte escolar ou público pago. O edital é publicado no início do período letivo.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('moradia')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Moradia</h4>
                    </div>
                    <div class="assistencia-descricao" id="moradia">
                        <p>Este auxílio é para estudantes que se mudaram para a cidade do campus e cuja família reside a mais de 50 km de distância. Para se inscrever, é necessário que o estudante demonstre, através de comprovantes de renda, contrato de aluguel e outros documentos, que se encontra na situação descrita. Aqueles que forem contemplados devem apresentar mensalmente o recibo do pagamento do aluguel. O edital de seleção é publicado no início do período letivo.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('esporte')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Esporte</h4>
                    </div>
                    <div class="assistencia-descricao" id="esporte">
                        <p>Para quem tem interesse na área esportiva, há o Programa Estudante Atleta (PEA), com vagas para modalidades esportivas individuais e coletivas. De acordo com os projetos apresentados pelos professores de educação física, são disponibilizadas vagas tanto para modalidades esportivas individuais quanto para modalidades coletivas. Preferencialmente, são esses atletas que participam dos jogos institucionais, regionais e nacionais. Todos os estudantes podem se inscrever para o programa, mas somente podem receber bolsa aqueles que estiverem em situação de vulnerabilidade socioeconômica. O edital de seleção é publicado no início do período letivo.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('projetos')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Projetos Acadêmicos</h4>
                    </div>
                    <div class="assistencia-descricao" id="projetos">
                        <p>O Programa de Bolsas Acadêmicas de Inclusão Social (PBIS) permite a participação de estudantes em vulnerabilidade socioeconômica em projetos acadêmicos, orientados por servidores da instituição. As atividades podem ser desenvolvidas nas dependências do câmpus ou externamente, respeitada a carga horária de 6 horas semanais.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('monitoria')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Monitoria</h4>
                    </div>
                    <div class="assistencia-descricao" id="monitoria">
                        <p>O Programa de Monitoria é voltado àqueles estudantes que têm bom domínio dos componentes curriculares, com disposição para auxiliar os colegas, sob orientação do professor. As vagas são disponibilizadas para os componentes curriculares indicados pelos câmpus. O edital de seleção é publicado no início do período letivo.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('eventos')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>Eventos</h4>
                    </div>
                    <div class="assistencia-descricao" id="eventos">
                        <p>O IFPR apoia a participação de estudantes em eventos escolares e acadêmicos, científicos, culturais, políticos e esportivos, no Brasil e no Mercosul. Para a solicitação deste auxílio, é necessário observar as regras do edital, especialmente o prazo mínimo de 30 dias de antecedência do evento para encaminhamento da documentação. Esse prazo é estipulado para que o estudante possa receber o auxílio em tempo hábil para participação no evento.</p>
                    </div>
                    <div class="assistencia-itens" onclick="ativarSecao('napne')">
                        <img class="seta" src="../Imagens/Matriz Curricular/seta.png" class="seta">
                        <h4>NAPNE</h4>
                    </div>
                    <div class="assistencia-descricao" id="napne">
                        <p>A DAES também cuida do Núcleo de Atendimento às Pessoas com Necessidades Educacionais Específicas (NAPNE), preparando a instituição para receber pessoas com deficiência em cursos de Formação Inicial e Continuada (FIC), Cursos Técnicos de Nível Médio e Cursos Superiores.</p>
                    </div>
                </div>
                <br>
                <p>Para participação nos programas, são priorizados os estudantes em condição de vulnerabilidade socioeconômica, sendo que o principal indicador, sem prejuízo de outros fatores sociais e econômicos, é o critério de renda estabelecido legalmente em um (1) salário mínimo e meio per capita. Isto é, a renda total do núcleo familiar, dividida por seu número de membros, deve ser menor do que este valor indicado.</p>
                <br>
                <p>A DAES também é responsável pelas questões de mobilidade estudantil, que envolvem os intercâmbios nacionais e internacionais. Atualmente, os intercâmbios têm ocorrido por meio do programa Ciência sem Fronteiras, do governo federal, o qual busca promover a consolidação, expansão e internacionalização da ciência, da tecnologia, da inovação e da competitividade brasileira.</p>
                <br>
                <p>Dúvidas? Entre em contato com a Seção Pedagógica e de Assuntos Estudantis (SEPAE) do seu câmpus através do email: <a href="mailto:sepae.pinhais@ifpr.edu.br">sepae.pinhais@ifpr.edu.br</a>. Estamos aqui para ajudar!</p>
                </div>
            </section>
            <section class="aproveitamento">
                <div class="secao-conteudo">
                <h2>Aproveitamento de estudos anteriores</h2>
                <br>
                <p>Se você já cursou disciplinas ou etapas (séries, módulos, blocos) com êxito em outro curso, pode ser que você consiga aproveitar esses estudos aqui no IFPR, de acordo com a Resolução nº55/11 do Conselho Superior do IFPR (2011). Esse processo é possível tanto para componentes curriculares de outro curso quanto para disciplinas de Graduação em outras instituições de ensino superior.</p>
                <br>
                <h3>Como Funciona?</h3>
                <br>
                <p>Seu pedido será avaliado por uma Comissão de Análise, composta por professores da área de conhecimento relevante. Eles seguirão dois critérios principais:</p>
                <br>
                <ol>
                    <li><strong>Correspondência</strong>: As ementas, conteúdos programáticos e carga horária do curso anterior devem ser compatíveis com os do IFPR. A carga horária cursada deve ser, no mínimo, 75% da carga horária da disciplina correspondente no IFPR.</li>
                    <li><strong>Avaliação</strong>: Além da correspondência entre disciplinas, a comissão poderá solicitar uma avaliação teórica e/ou prática do seu conhecimento.</li>
                </ol>
                <br>
                <h3>Como Solicitar?</h3>
                <br>
                <p>Para solicitar o aproveitamento de estudos, você precisa protocolar seu pedido na Secretaria Acadêmica do campus, dentro do prazo estabelecido no calendário acadêmico. O pedido deve incluir:</p>
                <br>
                <ul>
                    <li>Formulário próprio;</li>
                    <li>Histórico escolar completo e atualizado da instituição de origem;</li>
                    <li>Ementa e programa do componente curricular, autenticados pela instituição de ensino credenciada pelo MEC.</li>
                </ul>
                <br>
                <p class="aproveitamento-aviso">Importante:  O aproveitamento de estudos não é permitido entre níveis de ensino diferentes.</p>
                <br>
                <p>Se tiver dúvidas ou precisar de ajuda, entre em contato com a Seção Pedagógica e de Assuntos Estudantis (SEPAE) no email <a href="mailto:sepae.pinhais@ifpr.edu.br">sepae.pinhais@ifpr.edu.br</a>. Estamos aqui para apoiar você!</p>
                </div>
            </section>
            <div id="faixa"></div>
        </main>
        <?php include '../componentes/footer.php'; ?>
        <script src="../pags_js/ativar-secao.js"></script>
    </body>
</html>
