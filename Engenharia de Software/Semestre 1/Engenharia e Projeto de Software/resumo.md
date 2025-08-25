# Unidade I - Evolução do software, Fundamentos de Engenharia de Software, Ciclo de vida de desenvolvimento de software e Requisitos de software

## Tópico I - Evolução do Software

A evolução do software está intimamente ligada à evolução dos computadores. No primiros tempos, os computadores eram apenas máquinas físicas, onde toda a lógica era executada diretamente no hardware. À medida qe o hardware avançava, o software tambem preciou evoluir, tornando-se mais acessível e eficiente para o usuário final. Roger pressman define o software como o conjunto de componentes que podem ou não ser executados diretamente pelo computador, criados a partir de regras que trasnformam requisitos em instruções binárias que a máquinas entende.

Na década de 1940 surgiram os primeiros computadores, como o Mark I, enorme e usado para cálculos militares, e o ENIAC, que tinha uma velocidade maior e mais memória (também tinha a capacidade de armazenar um programa na memória). Alan Turing, nesse período, se destacou por decifrar códigos na Segunda Guerra Mundial e lançar conceitos que até hoje influenciam a computação, incluindo a Inteligência Artifical.

Com o tempo, os computadores passaram de válvulas para transistores, de linguagem de máquina para Assembly e depois para linguagens de alto nível, como COBOL e Fortran. Computadores como EDVAC de Von Neumann e o LEO, o primeiro comercial, mostram como o software começou a se tornar mais sofisticado à medida que o hardware se desenvolvia.

A evolução do software pode ser entendida em eras:

* Nos primeiros anos, o software era simples, feito sob medida e usado em lotes (*batch*), com pouca documentação.
* Na segunda era, surgiram sistemas multiusuários, software de tempo real, banco de dados e software distribuído, ando origem às primeiras "Software house".
* Na terceira era, a partir da década de 1970, os microprocessadores e computadores pessoais permitiram a integração do software em produtos inteligentes, como automóveis, micro-ondas e robôs industriais.
* Hoje na era atual, técnicas avançadas como orientação a objetos, sistemas especialistas e inteligência artificial estão aplicadas, mas a demanda por software supera nossa capacidade de desenvolvê-lo, tornando a manutnção e a engenharia de software essenciais.

Quanto aos tipos de software, podemos pensar em sete grandes categorias: Básico, tempo real, comercial, científico e de engenharia, embutido, para computador pessoal e inteligência artifical. Cada um tem sua função específica, seka dando suporte a outros programas, controlando sistemas do mundo real, ou resolvendo problemas complexos.

Enquanto o hardware se desgasta fisicamente, o software não "envelhece" da mesma forma, mas precisa passar pormanutenção e evolução constantes, pois erros e mudanças inevitáveis fazem com que seu funcionamento se deteriore se não forem aplicaas, melhorias. A engenharia de software surge justamente para lidar com essa complexidade, garantindo que os sistemas continuem funcionando e se adaptando ao longo do tempo.

### Exercício

1)A;2)D;3)A;4)V;5)"Diferente do hardware que se desgasta por fatores físicas como tempo de uso e condições ambientais, os softwares se deterioram com o passar do tempo devido às manutenções, correções e adições de novas funcionlidades. Estas adições introduzem novos defeitos, fazendo com que o clico de vida do produto tenha um novo pico de falhas até que seja estabilizada. Este ciclo leva o software a alcançar uma complexidade para a qual muitas vezes ele não estava prevista no projeto inicial. Como descrito no livro, a necessidade do mercado (a demanda por softwares) é maior do que a capacidade para criá-los."

## Tópico II - Fundamentos de Engenharia de Software

A Engenharia de Software surgiu no final da década de 1960, quando a chamada **crise do software** se tornou evidente: os sistemas eram cada vez mais complexos, mas havia atrasos nas entregas, custos altos, dificulkdades de manutenção e uma enorme quantidade de erros. Frits Bauer definiu a ES como a aplicação de princípios de engenharia para obter sistemas confiáveis, eficientes e de baixo custo, enquanto autores como Dijkstra reforçaram a necessidade de uma disciplina mais estriturada para lidar com a crescente demanda.

Sua importancia se aplica por fatores como: a complexidade dos sistemas, a insatisfação de usuários com softwares pouco práticos, a baixa produtividade dos projetos, problemas de confiabilidade e os altos custos de manutenção. Assim, a ES passou a estabelecer métodos e práticas que aumentam a **qualidade** e tornam as empresas mai competitivas.

Diversos autores estruturam a disciplina. Ian Sommerville destacou que a ES envolve todo o ciclo de produção de software, desde a especificação de requisitos até a manutenção. Já Roger Pressman apresentou a ideia das camadas da **Engenharia de Software**:

* Qualidade como base;
* Processo, que organiza o desenolvimento.
* Métodos, que orientam análise, projeto, implementação e testes;
* Ferramentas CASE (computer aided software engineering), que automatizam parte do trabalho.

Além destas camadas, Carvalho apresentou 12 princípios fundamentais da ES, como: formalidade, abstração, decomposição, generalizqação, flexibilidade, padronização, rastreabilidade, desenvolvimento iterativo, gerenciamento de requisitos, arquiteturas baseadas em componentes, modelagem visual e verificação contínua de qualidade. Esses princípios permitem lidar com a complexidade e garantir softwares mais confiáveis e fáceis de manter.

Outro aspecto essencial é a **Metodologia de Desenvolvimento de Sistemas**, que padroniza atividades, melhora a comunicação entre equipes e garante maior produtividade e qualidade. Sem uma metodologia, cada profissional aplica uas próprias soluções, resultando em desorganização e retrabalho. Entre os requisitos fundamentais estão: padronização, flexibilidade, documentação, modularização e planejamento.

De acordo com o SWEBOK, a ES abrange várias áreas de conhecimento, como: design, construção, testes, manutenção, gerenciamento de configuração, processos, qualidade e requisitos. Cada área é responsável por etapas específicas, mas todas estão interligadas.

O desenvolvimento de software também é dividido em **fases**:

* Iniciação: definição do escopo e planejamento;
* Elaboração: análise detalhjda e definição da solução;
* Construção: implementação e testes;
* Transição: entrega e validação final.

Essas fases ajudam a lidar com os riscos em diferentes momentos do projeto, tornando-o mais controlado.

Por fim, os **processos de Engenharia de Software** organizam as atividades e integram métodos, ferramentas e procedimentos, servindo como guias para alcançar qualidade e previsibilidade. Normas e modelos como **ISO 9001, ISO/IEC 12207, CMMI e MPS.Br** ajudam a garantir padrões de qualidade. Atualmente, ferramentas CASE e frameworks permitem automatizar e integrar várias etapas do desenvolvimento, tornando os processos ágeis e eficientes.

Em resumo, a ES é uma disciplina que evoluiu para dar respostas à crise do software, trazendo princípios, metodologias e processos que aumentam a qualidade, reduzem falhas e tornam os projetos mais sustentáveis e competitivos.

### Exercício

1)"Engenharia de software pode ser definida como uma disciplina das engenharias que se ocupa na atividade de organizar e integrar métodos, ferramentas e procedimentos que servem para o propósito de alcançar qualidade e previsibilidade na construção de softwares. A Engenharia de Software existe pois o mundo da computação e do desenvolvimento de software passou por um período de "crise do software": Um período onde a demanda por softwares crescia cada vez mais, conforme o avanço da computação, mas a capacidade por entregar softwares não acompanhavam esta demanda. Isto causou, à época, a crise onde a construção dos softwares onde era comum não se cumprir os prazos de entrega, os custos para desenvolver software eram altos e quase não existia garantia de qualidade";
2)C;
3)"Os sistemas tornavam-se cada vez mais complexos, em contrapartida havia atrasos nas entregas, custos altos, dificuldades de manutenção e uma enorme quantidade de erros.";
4)C;5)D;
6) Formalidade: Criação de regras de desenvolvimento e os passos que devem ser seguidos a partir de documentos
Abstração: A capacidade de abstração é a forma de imaginar o software como coisa não real, entendendo que a sua existência é uma expressão do pensamento transformado em código para alcançar um objetivo.
Decomposição: Dividir o projeto em módulos, componentes, diminuindo a complexidade do seu desenvolvimento.
Generalização: Criar soluções digitais genéricas, que possam ser reutilizadas.
Flexibilidade: Um software deve ter a capacidade de ser alterado ou aceitar mudanças, atualizações, features e etc.
Padronização: padronizar a forma como o software é construído para que não haja problemas na manutenção.
Rastreabilidade: rastreabilidade das atividades por meio de sistemas como Trello para definir o que foi feito e o que está para ser feito.
Desenvolvimento Iterativo: Toda a equipe é engajada na solução. Mesmo todos fazendo tarefas diferentes, todos estão caminhando para um único objetivo.
Gerenciamento de requisitos: Deixar claro e documentado o que o sistema deve fazer.
Arquiteturas baseadas em componentes: Dividir a solução em componentes bem definidos, funcionaius e lógicos, com interfaces bem definidas que não compartilham estados e se comunicam por troca de mensagens contendo dados.
Modelagem visual: uso de ddiagramas como o DER para facilitar a visualização da solução.
Verificação contínua da qualidade: criação de etapas e testes para garantir a cobertura do código e testes de qualidade, como testes unitários e testes de integração.
7) A Metodologia de Desenvolvimento de Sistemas padroniza atividades, melhora a comunicação entre equipes e garante maior produtividade e qualidade. Sem uma metodologia, cda profissional aplica suas próprias soluções, resultano em desorganização e retrabalho. Seus principais fundamentos são: padronização, flexibilidade, documentação, modularização e planejamento.
8) Sem uma metodologia de desenvolvimento de sistemas, cada profissional aplica suas próprias soluções, resultando em desorganização e retrabalho.
9)C;
10) design, construção, testes, manutenção, gerenciamento de configuração, gerenciamento de ES, processos, ferramentas e métodos, qualidade e requisitos.
11) Transição; Elaboração; Construção; Iniciação: IV, I, III, II; Resposta: A;
