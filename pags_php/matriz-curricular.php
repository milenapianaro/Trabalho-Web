<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../pags_css/header&footer.css">
        <link rel="stylesheet" href="../pags_css/matriz-curricular.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rota IFPR – Matriz Curricular</title>
    </head>
    <body>
     <?php include '../componentes/header.php'; ?>

        <main>
            <?php
                include '../componentes/banner.php';
                banner('Matriz Curricular', '../Imagens/Sou Aluno/faxinha.png');
            ?>
            <section class="descricao">
                <div class="descricao-container">
                    <p>O Curso Superior de Tecnologia em Gestão da Tecnologia da Informação do IFPR tem como objetivo formar profissionais com uma sólida fundamentação em Gestão e Tecnologia da Informação. Este curso proporciona uma formação integrada e estratégica, combinando componentes dessas duas grandes áreas, garantindo uma educação interdisciplinar que permite aos futuros gestores navegar de maneira consciente e estratégica entre elas, tornando-os indispensáveis para empresas que utilizam Tecnologia da Informação em seus processos de gestão.</p>
                    <br>
                    <p>O nosso curso oferece uma sólida base nessas duas áreas, preparando você para se destacar no mercado de trabalho. Com 2400 horas-aula, distribuídas em seis períodos, além de 240 horas de atividades complementares, o curso proporciona uma educação integrada e estratégica. Como tecnólogo formado pelo IFPR, você estará pronto para atuar em diversas áreas, desde funções operacionais até papéis de planejamento e gestão executiva.</p>
                    <br>
                    <p>Durante o curso, você vai adquirir habilidades que permitirão integrar conceitos fundamentais de TI no seu ambiente de trabalho, assegurando a coleta, armazenamento e distribuição correta e íntegra de dados e informações. Isso tudo com o objetivo de alcançar a eficiência gerencial nas organizações. Além disso, você será capacitado para gerenciar processos, incluindo planejamento, controle, comunicação e tomada de decisão, aplicando seus conhecimentos de forma eficaz e eficiente.</p>
                </div>
            </section>
            <figure class="imagem-matriz">
                <img src="../Imagens/Matriz Curricular/matriz.png">
            </figure>
            <section class="links">
                <div class="links-container">
                    <a href="https://ifpr.edu.br/pinhais/wp-content/uploads/sites/22/2019/06/PPC_GTI_NovoModelo_2019_06_17-Versao-Final.pdf" target="_blank">Projeto Pedagógico</a>
                    <a href="https://ifpr.edu.br/pinhais/wp-content/uploads/sites/22/2019/08/Matriz-Curricular.pdf" target="_blank">Matriz Curricular</a>
                    <a href="https://ifpr.edu.br/pinhais/wp-content/uploads/sites/22/2019/08/Ementas.pdf" target="_blank">Ementas</a>
                </div>
            </section>
            <section class="disciplinas">
                <div class="disciplinas-container">
                    <h2>Disciplinas</h2>
                    <br>
                    <p>Diferentemente de outros cursos que focam apenas na formação gerencial ou tecnológica, o IFPR oferece uma formação completa que preenche todas as lacunas. Aqui, você vai entender tanto os aspectos tecnológicos quanto os de gestão, estando pronto para enfrentar os desafios do mercado.</p>
                </div>
            </section>
            <section class="grade">
                <div class="grade-container">
                    <div class="semestre-titulo" onclick="ativarSecao('sem1')">
                    <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                    <h2>1º Período</h2>
                </div>
                <div class="semestre-disciplinas" id="sem1">
                    <div class="disciplina">
                        <h3>Algoritmos</h3>
                        <p>Aprenda os conceitos fundamentais de algoritmos, incluindo variáveis, operadores, tipos de dados, estruturas de decisão e repetição, funções, recursão, vetores, matrizes, registros, cadeias de caracteres e manipulação de arquivos. Ao final da disciplina, você estará capacitado a criar algoritmos eficientes e aplicar técnicas de programação para resolver problemas complexos.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Bancos de Dados I</h3>
                        <p>Você vai mergulhar nos conceitos fundamentais de bancos de dados, aprender sobre modelos de dados e como projetar bancos de dados usando os modelos conceitual e lógico. Serão explorados tipos de dados, restrições de integridade, recuperação e criação de bancos de dados com sistemas gerenciadores de banco de dados. Ao final do disciplina, você estará pronto para entender a estrutura e o funcionamento dos sistemas de banco de dados, além de realizar operações básicas de criação e manutenção.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Arquitetura de Computadores e Sistemas Operacionais</h3>
                        <p>Você vai explorar a evolução dos computadores, aprender sobre a organização dos sistemas de computação e como a informação é representada. Ao final da disciplina, você vai entender a estrutura e o funcionamento interno de um computador e como os sistemas operacionais gerenciam hardware e software.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Gestão de Produtos e Processos</h3>
                        <p>Você vai aprender os conceitos fundamentais de produtos e seu ciclo de vida, além de como analisar portfólios de produtos e conceituar processos. Vamos explorar a integração de processos, metodologias, técnicas e ferramentas para otimizar processos organizacionais. Ao final da disciplina, você estará pronto para gerenciar o desenvolvimento de produtos e melhorar a eficiência das operações empresariais.
                        </p>
                    </div>
                    <div class="disciplina">
                        <h3>Matemática Aplicada à Computação</h3>
                        <p>Nesta disciplina, você vai aprender os principais conceitos matemáticos aplicados à computação, incluindo conjuntos numéricos, unidades de medida, teoria e álgebra dos conjuntos, matrizes, sistemas de coordenadas, introdução à lógica matemática, sequências, funções, porcentagem, análise combinatória e probabilidade. Ao final, você estará capacitado a aplicar esses conhecimentos em problemas e processos computacionais, criando uma base sólida para desenvolver algoritmos e soluções eficientes.</p>
                    </div>
                </div>
                <div class="semestre-titulo" onclick="ativarSecao('sem2')">
                    <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                    <h2>2º Período</h2>
                </div>
                <div class="semestre-disciplinas" id="sem2">
                    <div class="disciplina">
                        <h3>Estruturas de Dados</h3>
                        <p>Você vai aprender os conceitos fundamentais das estruturas de dados utilizadas em programação e ciência da computação. Serão abordados tipos de dados abstratos, listas, pilhas, filas, árvores, grafos e tabelas hash, além de técnicas para implementar e manipular essas estruturas. Além disso, serão explorados algoritmos de busca e ordenação, complexidade temporal e espacial, e práticas de otimização. Ao final, você estará pronto para escolher e aplicar as estruturas de dados mais adequadas para resolver problemas específicos, melhorando a eficiência dos seus programas.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Bancos de Dados II</h3>
                        <p>Você vai se aprofundar em SQL e aprender sobre SQL DDL e DML, recuperação de informações, junções, visões, transações, e procedimentos armazenados. Também vamos explorar a linguagem procedural SQL, gatilhos, usuários e permissões. Ao final, você estará pronto para implementar, gerenciar e otimizar bancos de dados complexos, garantindo sua integridade e segurança.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Desenvolvimento Web I</h3>
                        <p>Você vai aprender os conceitos e tecnologias fundamentais para o desenvolvimento web, incluindo a Internet, servidores, HTML, CSS e Javascript. Vamos explorar princípios de web design responsivo e usar bibliotecas, plug-ins e frameworks client-side. Ao final, você estará pronto para criar e manter sites dinâmicos e responsivos, utilizando as melhores práticas e ferramentas do mercado.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Desenvolvimento Orientado a Objetos</h3>
                        <p>Você vai explorar os paradigmas de programação e a história da orientação a objetos. Vamos aprender sobre abstração, objetos, classes, atributos e métodos. Também vamos abordar encapsulamento, composição, herança, classes abstratas, interfaces, polimorfismo, diagramas de classes e manipulação de exceções. Ao final, você estará pronto para aplicar os princípios da orientação a objetos e desenvolver software robusto e escalável.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Gestão de Pessoas</h3>
                        <p>Você vai explorar as tendências e desafios da gestão de pessoas, aprendendo a atrair, selecionar, reter, desenvolver e gerenciar o desempenho dos colaboradores. Vamos abordar competências organizacionais, gestão por competências e estilos de liderança. Ao final, você estará preparado para aplicar estratégias eficazes de gestão de pessoas, contribuindo para o desenvolvimento organizacional e a melhoria do desempenho corporativo.</p>
                    </div>
                </div>
                <div class="semestre-titulo" onclick="ativarSecao('sem3')">
                    <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                    <h2>3º Período</h2>
                </div>
                <div class="semestre-disciplinas" id="sem3">
                    <div class="disciplina">
                        <h3>Desenvolvimento para Dispositivos Móveis</h3>
                        <p>Nesta disciplina, você vai aprender a programar para a plataforma Android. Vamos cobrir padrões de projeto, código limpo, e conceitos básicos como Manifest, Activity, Fragment, Intent e Bundle. Também aprenderemos sobre áudios em apps, Toasts, PopUps, layouts, menus, deploy de apps, ícones e notificações. Além disso, veremos gerenciamento de permissões, uso de recursos do dispositivo, bancos de dados SQLite e sincronização com SGBDs. Ao final, você estará pronto para criar e implementar aplicativos móveis completos e funcionais.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Desenvolvimento Web II</h3>
                        <p>Você vai aprofundar seus conhecimentos em desenvolvimento web, explorando tecnologias client-side e server-side. Vamos aprender sobre servidores, ambientes web e linguagens de programação para ambos os lados, aplicando essas linguagens em projetos práticos. Além disso, abordaremos a persistência de dados com AJAX e o uso de bibliotecas, plug-ins e frameworks server-side. Ao final, você estará pronto para desenvolver aplicações web robustas e interativas, integrando tecnologias client-side e server-side de forma eficaz.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Gestão Financeira</h3>
                        <p>Você vai aprender os conceitos financeiros básicos e a análise econômica e financeira, incluindo administração financeira, capital de giro, caixa, e pontos de equilíbrio contábil, financeiro e econômico. Também discutiremos estrutura e custo de capital, avaliação de empresas, sistema financeiro nacional e tipos básicos de financiamento. Ao final, você estará pronto para realizar análises financeiras detalhadas e tomar decisões informadas sobre gestão financeira.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Processos e Técnicas de Pesquisa</h3>
                        <p>Você vai explorar o processo criativo na ciência, aprendendo sobre bases filosóficas, éticas e metodológicas em pesquisa. Vamos diferenciar pesquisa, métodos e técnicas, além de abordar tipos de pesquisa, ciclo da indagação, planejamento de pesquisa, e coleta de dados. Também veremos a importância da hipótese científica, controle de variáveis e como elaborar um projeto de pesquisa. Ao final, você estará pronto para conduzir pesquisas rigorosas e desenvolver projetos bem estruturados.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Optativa I</h3>
                        <p>As disciplinas optativas oferecem aos alunos a oportunidade de personalizar e enriquecer sua formação acadêmica de acordo com seus interesses e objetivos profissionais. Essas disciplinas permitem explorar áreas do conhecimento além do currículo obrigatório, proporcionando uma educação mais ampla e diversificada. Ao escolher disciplinas optativas, os alunos podem desenvolver habilidades específicas, aprofundar conhecimentos em áreas de interesse e obter uma visão mais abrangente do campo de estudo.</p>
                        <div class="optativa" onclick="ativarSecao('sem3opt1')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Circuitos Digitais</h4>
                        </div>
                        <div class="optativa-descricao" id="sem3opt1">
                            <p>Nesta disciplina, você vai aprender os conceitos básicos de circuitos digitais, incluindo portas lógicas e álgebra booleana. Vamos estudar circuitos lógicos combinacionais, flip-flops, aritmética digital, contadores, registradores, codificadores, decodificadores, multiplexadores, demultiplexadores e conversores. Você vai aplicar esses conhecimentos em projetos práticos, desenvolvendo habilidades para projetar e analisar circuitos digitais complexos. Ao final, você estará pronto para criar soluções digitais eficientes e inovadoras.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem3opt2')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Comunicação e Expressão</h4>
                        </div>
                        <div class="optativa-descricao" id="sem3opt2">
                            <p>Nesta disciplina, você vai explorar as noções de texto e discurso, entendendo as diferenças entre oralidade e escrita. Vamos abordar leitura, análise e produção de textos de interesse geral e da administração, além de expressão em diferentes mídias e formas de comunicação escrita e oral nas organizações. Você aprenderá sobre coesão, coerência e diferentes gêneros discursivos. Ao final, estará capacitado a produzir e analisar diversos tipos de textos, aprimorando suas habilidades de comunicação nas esferas corporativa e administrativa.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem3opt3')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Gestão Socioambiental</h4>
                        </div>
                        <div class="optativa-descricao" id="sem3opt3">
                            <p>Você vai explorar a questão ambiental e o desenvolvimento sustentável, além de sustentabilidade organizacional e gestão ambiental. Vamos aprender sobre responsabilidade social e ambiental, instrumentos de gestão socioambiental como balanço social e Sistema de Gestão Ambiental (SGA). Também abordaremos normas como NBR 16001 e ISO 14000, consumo consciente e temas transversais que influenciam a sustentabilidade. Ao final, você estará capacitado a implementar práticas sustentáveis e eficazes de gestão ambiental.</p>
                        </div>
                    </div>
                </div>
                <div class="semestre-titulo" onclick="ativarSecao('sem4')">
                    <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                    <h2>4º Período</h2>
                </div>
                <div class="semestre-disciplinas" id="sem4">
                    <div class="disciplina">
                        <h3>Redes de Computadores</h3>
                        <p>Você vai aprender sobre os modelos ISO/OSI e TCP/IP, protocolos como HTTP, FTP, TCP, UDP, IP, DNS e DHCP, e topologias de rede. Vamos explorar repetidores, hubs, roteadores, switches, e placas de rede, além de meios físicos como coaxial, par trançado, fibra ótica e rádio. Também abordaremos cabeamento estruturado, crimpagem, testadores de cabos, configurações de redes e computação em nuvem. Ao final, você estará pronto para configurar e otimizar redes de computadores.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Processo de Engenharia de Software</h3>
                        <p>Você vai explorar os modelos e processos de desenvolvimento, incluindo Cascata, Evolutivo e Ágil. Vamos aprender sobre Engenharia de Requisitos, especificações, técnicas de modelagem com UML, testes, manutenção, implantação de ambientes, uso de ferramentas CASE e qualidade de software. Ao final, você estará capacitado a aplicar metodologias e técnicas para desenvolver sistemas de alta qualidade de forma eficiente e eficaz.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Marketing</h3>
                        <p>Você vai explorar a evolução do conceito de marketing e a administração de marketing, incluindo o ambiente de marketing, segmentação, posicionamento e o composto de marketing. Vamos aprender sobre pesquisa e seleção de mercados-alvo, marketing integrado, marketing de serviços, merchandising, publicidade e propaganda. Ao final, você estará pronto para desenvolver e implementar estratégias de marketing eficazes, adaptadas a diferentes cenários de mercado.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Projeto Interdisciplinar I</h3>
                        <p>Nesta disciplina, você vai articular os conhecimentos e habilidades necessárias para a prática da Gestão da Tecnologia da Informação. O projeto será conduzido de forma integrada pelos professores das disciplinas envolvidas. Você trabalhará na concepção de projetos de TI e na compreensão das dinâmicas das equipes. Ao final, estará apto a aplicar de maneira integrada os conceitos e técnicas aprendidos, desenvolvendo projetos práticos e colaborativos que refletem as demandas do mercado.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Optativa II</h3>
                        <p>As disciplinas optativas oferecem aos alunos a oportunidade de personalizar e enriquecer sua formação acadêmica de acordo com seus interesses e objetivos profissionais. Essas disciplinas permitem explorar áreas do conhecimento além do currículo obrigatório, proporcionando uma educação mais ampla e diversificada. Ao escolher disciplinas optativas, os alunos podem desenvolver habilidades específicas, aprofundar conhecimentos em áreas de interesse e obter uma visão mais abrangente do campo de estudo.</p>
                        <div class="optativa" onclick="ativarSecao('sem4opt1')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Aprendizagem de Máquina</h4>
                        </div>
                        <div class="optativa-descricao" id="sem4opt1">
                            <p>Você vai aprender os conceitos básicos de aprendizado de máquina, incluindo aprendizagem supervisionada e não supervisionada, paradigmas de aprendizado, extração de características e métricas de desempenho. Vamos explorar técnicas e algoritmos como árvores de decisão, k-NN, aprendizado Bayesiano, redes neurais, SVM, combinação de classificadores e algoritmos genéticos. Ao final, você estará capacitado a aplicar essas técnicas para resolver problemas complexos e criar modelos preditivos eficientes.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem4opt2')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Estatística</h4>
                        </div>
                        <div class="optativa-descricao" id="sem4opt2">
                            <p>Você vai aprender conceitos, histórico e fases do trabalho estatístico. Vamos abordar tipos de variáveis, criação e interpretação de tabelas e gráficos, distribuição de frequência, medidas de tendência central, separatrizes, dispersão, assimetria e curtose. Também veremos inferência estatística, intervalo de confiança, teste de hipóteses, análise de variância, regressão linear simples e logística binária. Além disso, você aplicará esses conceitos utilizando softwares estatísticos. Ao final, estará capacitado a realizar análises estatísticas robustas e aplicar métodos em diversos contextos práticos</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem4opt3')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Liderança e Gestão de Equipes</h4>
                        </div>
                        <div class="optativa-descricao" id="sem4opt3">
                            <p>Você vai aprender sobre comportamento organizacional e os elementos da cultura organizacional, incluindo estilos de liderança tradicional e situacional. Vamos explorar estratégias para formar e desenvolver equipes de alto desempenho, abordando incentivo de equipes, empowerment, coaching e avaliação de resultados. Ao final, você estará capacitado a aplicar práticas eficazes, promovendo ambientes de trabalho produtivos e colaborativos.</p>
                        </div>
                    </div>
                </div>
                <div class="semestre-titulo" onclick="ativarSecao('sem5')">
                    <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                    <h2>5º Período</h2>
                </div>
                <div class="semestre-disciplinas" id="sem5">
                    <div class="disciplina">
                        <h3>Gestão da Tecnologia da Informação</h3>
                        <p>Você vai aprender sobre Governança Corporativa e Gestão de TI, incluindo padrões, metodologias e frameworks como ITIL, BSC e COBIT. Também discutiremos modelos de maturidade de software como CMMI e MPS.BR. Ao final, você estará capacitado a implementar práticas eficazes de governança e gestão de TI, utilizando frameworks reconhecidos para garantir a eficiência e o alinhamento estratégico das operações de TI.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Gestão de Projetos</h3>
                        <p>Você vai aprender sobre definição e metodologias de desenvolvimento de projetos, incluindo estrutura, etapas, gestão do escopo, tempo, mudanças, custos e recursos. Também vamos explorar viabilidade econômica, financeira e gestão de riscos. Ao final, você estará capacitado a planejar, executar e gerenciar projetos de forma eficiente, garantindo o cumprimento dos objetivos dentro dos prazos e orçamentos previstos.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Inovação e Criatividade</h3>
                        <p>Você vai aprender sobre definições de criatividade e inovação, destacando sua importância no contexto organizacional. Vamos explorar como identificar e superar bloqueios à criatividade e aplicar técnicas para seu desenvolvimento. Também abordaremos o perfil de uma organização criativa e a relação entre criatividade e complexidade. Ao final, você estará capacitado a fomentar criatividade e inovação, promovendo um ambiente que valoriza novas ideias e soluções.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Gestão de Compras e Contratos</h3>
                        <p>Nesta disciplina, você aprenderá sobre os objetivos e atribuições da função de compras, princípios de negociação e relacionamento com fornecedores, além do gerenciamento de requisitos e qualidade dos fornecedores. Também abordaremos gerenciamento de contratos, tipos de aquisição e fundamentos da gestão de materiais, explorando estratégias de reabastecimento para garantir eficiência e continuidade das operações. Ao final, você estará capacitado a implementar e gerenciar processos de compras e suprimentos de maneira eficaz.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Projeto Interdisciplinar II</h3>
                        <p>Você vai articular os conhecimentos e habilidades necessárias para a prática da Gestão de TI. O projeto será conduzido de forma integrada pelos professores das disciplinas envolvidas, promovendo uma abordagem prática e colaborativa. Você participará da execução de projetos de TI, desenvolvendo competências para liderar equipes. Ao final, estará apto a aplicar os conceitos aprendidos, liderando e executando projetos de TI de forma eficaz e inovadora.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Optativa III</h3>
                        <p>As disciplinas optativas oferecem aos alunos a oportunidade de personalizar e enriquecer sua formação acadêmica de acordo com seus interesses e objetivos profissionais. Essas disciplinas permitem explorar áreas do conhecimento além do currículo obrigatório, proporcionando uma educação mais ampla e diversificada. Ao escolher disciplinas optativas, os alunos podem desenvolver habilidades específicas, aprofundar conhecimentos em áreas de interesse e obter uma visão mais abrangente do campo de estudo.</p>
                        <div class="optativa" onclick="ativarSecao('sem5opt1')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Libras</h4>
                        </div>
                        <div class="optativa-descricao" id="sem5opt1">
                            <p>Você vai explorar a história da educação de surdos, cultura e linguagem. Vamos aprender as características da Língua Brasileira de Sinais (Libras), incluindo paralelos com línguas orais, unidades gestuais, classificadores, expressões faciais e corporais, alfabeto digital e pronomes pessoais. Também veremos gramática, léxico, verbos e técnicas de tradução Libras/Português. Ao final, você estará capacitado a aplicar Libras de forma eficaz. contribuindo para a inclusão e acessibilidade dos surdos em diversos contextos.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem5opt2')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Comunicação Científica</h4>
                        </div>
                        <div class="optativa-descricao" id="sem5opt2">
                            <p>Você vai aprender sobre a produção e publicação de artigos científicos, incluindo documentos, fontes e canais de comunicação na ciência. Vamos abordar a estruturação e redação científica, preparação, submissão e apresentação de trabalhos. Além disso, discutiremos a escolha de revistas científicas, publicação de artigos internacionais, e redação de componentes essenciais. Ao final, você estará capacitado a produzir e publicar artigos científicos de alta qualidade.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem5opt3')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Interação Humano-Computador</h4>
                        </div>
                        <div class="optativa-descricao" id="sem5opt3">
                            <p>Nesta disciplina, você vai aprender os conceitos fundamentais de IHC, incluindo a relação entre interação e interface, usabilidade e comunicabilidade, além de explorar a engenharia cognitiva e semiótica. Vamos abordar estilos de interação, modelagem em IHC e avaliação de interfaces. Ao final, você estará capacitado a aplicar princípios e métodos de IHC para projetar e avaliar interfaces de usuário eficazes e acessíveis, melhorando a experiência do usuário com sistemas computacionais.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem5opt4')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Business Process Management</h4>
                        </div>
                        <div class="optativa-descricao" id="sem5opt4">
                            <p>Nesta disciplina, você vai aprender sobre processos e gestão por processos, focando na integração com a TI. Vamos modelar processos de negócios utilizando diretivas, padrões e notações como BPMN, abordando qualidade na modelagem, diagramas de processos, coreografias e orquestrações. Também discutiremos estratégias empresariais e o alinhamento entre BSC e processos de negócios. Ao final, você estará capacitado a usar sistemas de gestão para otimizar processos de negócios alinhados às estratégias organizacionais.</p>
                        </div>
                    </div>
                </div>
                <div class="semestre-titulo" onclick="ativarSecao('sem6')">
                    <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                    <h2>6º Período</h2>
                </div>
                <div class="semestre-disciplinas" id="sem6">
                    <div class="disciplina">
                        <h3>Business Intelligence</h3>
                        <p>Nesta disciplina, você vai aprender sobre Business Intelligence, incluindo Sistemas de Apoio à Decisão (SAD), Data Warehouse (DW) e OLAP. Vamos explorar técnicas de Knowledge Discovery in Databases (KDD) e Data Mining (DM), visualização de dados e integração com sistemas ERP. Ao final, você estará capacitado a utilizar ferramentas e técnicas de BI para análise e interpretação de dados, apoiando a tomada de decisões estratégicas nas organizações.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Segurança da Informação</h3>
                        <p>Nesta disciplina, você vai aprender sobre leis, normas e padrões de segurança da informação, além de certificação. Vamos explorar criptografia, comunicação segura, autenticação, controle de acesso e malwares. Também abordaremos defesa em profundidade, engenharia social, análise de riscos, plano de contingência e noções de auditoria de sistemas. Ao final, você estará capacitado a implementar e gerenciar práticas de segurança da informação para proteger os ativos digitais contra ameaças e vulnerabilidades.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Direito Digital e Propriedade da Informação</h3>
                        <p>Nesta disciplina, você vai aprender sobre a Lei do Processo Eletrônico, contratos eletrônicos, proteção do conhecimento, áreas da propriedade intelectual e o uso ético da informação. Vamos explorar privacidade, acesso à informação pública, informação tecnológica, patentes e a Lei de Inovação. Também abordaremos propriedade intelectual, industrial e a base de patentes e marcas do INPI. Ao final, você estará capacitado a aplicar conceitos de direito digital e propriedade intelectual em contextos organizacionais e tecnológicos.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Empreendedorismo</h3>
                        <p>Nesta disciplina, você vai focar no autoconhecimento e na identificação do perfil empreendedor. Vamos aprender sobre desenvolvimento da visão empreendedora e identificação de oportunidades de negócio. A disciplina abrange as etapas e a estruturação de um Plano de Negócios, fornecendo ferramentas para transformar ideias em projetos viáveis. Ao final, você estará capacitado a desenvolver planos de negócios sólidos, aplicando princípios de gestão e inovação para alcançar o sucesso empreendedor..</p>
                    </div>
                    <div class="disciplina">
                        <h3>Projeto Interdisciplinar III</h3>
                        <p>Você vai articular conhecimentos e habilidades necessárias para a prática da Gestão de TI. O projeto será conduzido de forma integrada pelos professores das disciplinas envolvidas, promovendo uma abordagem holística e colaborativa. Você participará da apresentação acadêmica, científica, técnica e comercial de projetos de TI, desenvolvendo competências para conduzir projetos integrados e multidisciplinares. Ao final, estará apto a aplicar os conceitos aprendidos, apresentando soluções inovadoras e eficientes para os desafios da TI.</p>
                    </div>
                    <div class="disciplina">
                        <h3>Optativa IV</h3>
                        <p>As disciplinas optativas oferecem aos alunos a oportunidade de personalizar e enriquecer sua formação acadêmica de acordo com seus interesses e objetivos profissionais. Essas disciplinas permitem explorar áreas do conhecimento além do currículo obrigatório, proporcionando uma educação mais ampla e diversificada. Ao escolher disciplinas optativas, os alunos podem desenvolver habilidades específicas, aprofundar conhecimentos em áreas de interesse e obter uma visão mais abrangente do campo de estudo.</p>
                        <div class="optativa" onclick="ativarSecao('sem6opt1')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Processamento Digital de Imagens</h4>
                        </div>
                        <div class="optativa-descricao" id="sem6opt1">
                            <p>Você vai aprender os fundamentos do Processamento de Imagens, incluindo formação de imagens, modelos de cor, contraste e brilho. Vamos explorar técnicas de transformação geométrica, melhoramento e segmentação de imagens, além de conceitos de morfologia matemática, como erosão, dilatação, abertura e fechamento. Ao final, você estará capacitado a aplicar técnicas de processamento de imagens em diferentes contextos, utilizando métodos avançados para análise e manipulação de imagens digitais.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem6opt2')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>Gestão Estratégica</h4>
                        </div>
                        <div class="optativa-descricao" id="sem6opt2">
                            <p>Você vai aprender conceitos e metodologias de planejamento estratégico, explorando políticas de planejamento, diagnósticos, projetos e planos estratégicos. Vamos abordar a implementação de planos e os desafios empresariais. A disciplina inclui o estudo e desenvolvimento de cases práticos, aplicando os conhecimentos em situações reais de negócios. Ao final, você estará capacitado a elaborar e implementar planos estratégicos eficazes, contribuindo para o sucesso e sustentabilidade das organizações.</p>
                        </div>
                        <div class="optativa" onclick="ativarSecao('sem6opt3')">
                            <img src="../Imagens/Matriz Curricular/seta.png" class="seta">
                            <h4>English for Business and IT</h4>
                        </div>
                        <div class="optativa-descricao" id="sem6opt3">
                            <p>Você vai aprimorar suas habilidades em inglês nas áreas de Gestão e TI, focando em speaking, writing, listening e reading. Vamos trabalhar com textos técnicos, e-mails, tutoriais, gráficos e relatórios. A prática de listening será reforçada com materiais relevantes e a oralidade incluirá situações profissionais específicas. Ao final, você estará apto a se comunicar em inglês em contextos profissionais.</p>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <section class="atividades-complementares">
                <div class="atividades-container">
                    <h2>Atividades Complementares</h2>
                    <br>
                    <p>As Atividades Complementares são essenciais para enriquecer sua formação no Curso Superior de Tecnologia em Gestão da Tecnologia da Informação do IFPR. Elas vão além dos conhecimentos disciplinares previstos na matriz curricular do curso, promovendo o desenvolvimento pessoal, profissional, cultural e social.</p>
                    <br>
                    <p>Essas atividades são obrigatórias e você deve completar um total de 240 horas, o que corresponde a 12% da carga horária total do curso, para poder colar grau. O regulamento das Atividades Complementares está disponível como apêndice do Projeto Pedagógico do Curso.</p>
                    <br>
                    <p>Para saber mais sobre como compor suas Atividades Complementares no Curso Superior de Tecnologia em Gestão da Tecnologia da Informação, acesse a tabela detalhada através do link abaixo. Lá, você encontrará todas as informações e confirmações necessárias para cumprir as 240 horas obrigatórias, essenciais para sua formação integral. Este recurso é fundamental para guiar você no desenvolvimento de habilidades e conhecimentos práticos e teóricos ao longo do curso.</p>
                    <br>
                    <a class="atividades-documento" href="../Imagens/Matriz Curricular/horas-complementares.pdf" target="_blank">Tabela de Atividades Complementares</a>
                    <br>
                    <h3>Precisa protocolar suas horas?</h3>
                    <br>
                    <p>Ei, estudante do IFPR! Está pronto para protocolar suas horas complementares?</p>
                    <p>Aqui no IFPR, tudo é feito de forma 100% virtual para facilitar sua vida. Você só precisa preencher o <a class="form" href="https://ifpr.edu.br/wp-content/uploads/2015/07/REQUERIMENTO-GERAL.pdf" target="_blank">Formulário de Requerimento</a> e enviá-lo para a Secretaria Acadêmica no email:<a href="mailto:secac.pinhais@ifpr.edu.br"> secac.pinhais@ifpr.edu.br</a>.</p>
                    <p>Após isso, à Secretaria Acadêmica (SECAC) cria um processo no Sistema Eletrônico de Informações (SEI) e o encaminha à Coordenação do Curso. A Coordenação avalia e emite o parecer no SEI. A SECAC registra as horas complementares no sistema acadêmico (SIGAA), informa o discente por e-mail e finaliza o processo no SEI.</p>
                    <br>
                    <b><i>OBSERVAÇÃO IMPORTANTE:</i></b>
                    <br>
                    <p>Caso seja necessária comprovação física de algum documento, o discente será comunicado para apresentá-lo na Secretaria Acadêmica.</p>
                    <br>
                </div>
            </section>
            <section class="estagios">
                <div class="estagios-container">
                    <h2>Estágios</h2>
                    <br>
                    <p>Na estrutura do Curso Superior de Tecnologia em Gestão da Tecnologia da Informação, o estágio é atividade complementar à formação profissional, representando no curso e para a formação dos discentes a real possibilidade do desenvolvimento de saberes profissionais e competências validadas pela integração da teoria e da prática.</p>
                    <br>
                    <h3>Objetivos do Estágio</h3>
                    <br>
                    <p>O estágio tem como objetivo o aprendizado de competências próprias da atividade profissional e a contextualização curricular, ajudando no desenvolvimento da sua vida cidadã e profissional. Os estágios podem ser estabelecidos por meio de organizações de integração escola/aluno/empresa ou diretamente pela organização pública ou privada concedente, através de convênios com o IFPR. Isso garante que as atividades desenvolvidas sejam pertinentes às áreas de Gestão da Tecnologia da Informação.</p>
                    <br>
                    <h3>Oportunidades de Estágio</h3>
                    <br>
                    <p></p>
                    <br>
                    <ul>
                        <li><strong>Ofertas do IFPR:</strong>O IFPR ocasionalmente oferece oportunidades de estágio, tanto dentro da instituição quanto em parceria com empresas e organizações externas. Estas oportunidades são anunciadas periodicamente e podem ser uma excelente forma de aplicar seus conhecimentos e adquirir experiência prática.</li>
                        <br>
                        <li><strong>Iniciativa Própria:</strong> Além das oportunidades oferecidas pelo IFPR, você é incentivado a procurar estágios por conta própria. Buscar ativamente por estágios pode ampliar suas possibilidades, proporcionando experiências valiosas e diversificadas no mercado de trabalho. Você pode procurar vagas em plataformas de emprego, sites de empresas, redes de contato profissional, eventos de networking, feiras de carreiras e até mesmo redes sociais profissionais como o LinkedIn.</li>
                        
                    </ul>
                    <br>
                    <p>Durante o estágio, você contará com a supervisão de um membro do corpo docente do curso e a participação de um técnico do campo de estágio. O estágio não-obrigatório pode contabilizar créditos no seu histórico escolar, como atividade complementar, até o limite de 120 horas.</p>
                </div>
            </section>
        </main>
    </body>
    <div id="faixa"></div>
    <script src="../pags_js/ativar-secao.js"></script>
    <?php include '../componentes/footer.php'; ?>