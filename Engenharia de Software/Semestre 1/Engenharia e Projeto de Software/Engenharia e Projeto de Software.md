# Unidade I - Evolução do software, Fundamentos de Engenharia de Software, Ciclo de vida de desenvolvimento de software e Requisitos de software

## Tópico I - Evolução do Software

A evolução do software está intimamente ligada à evolução dos computadores. No primiros tempos, os computadores eram apenas máquinas físicas, onde toda a lógica era executada diretamente no hardware. À medida qe o hardware avançava, o software tambem preciou evoluir, tornando-se mais acessível e eficiente para o usuário final. Roger pressman define o software como o conjunto de componentes que podem ou não ser executados diretamente pelo computador, criados a partir de regras que trasnformam requisitos em instruções binárias que a máquinas entende.

Na década de 1940 surgiram os primeiros computadores, como o Mark I, enorme e usado para cálculos militares, e o ENIAC, que tinha uma velocidade maior e mais memória (também tinha a capacidade de armazenar um programa na memória). Alan Turing, nesse período, se destacou por decifrar códigos na Segunda Guerra Mundial e lançar conceitos que até hoje influenciam a computação, incluindo a Inteligência Artifical.

Com o tempo, os computadores passaram de válvulas para transistores, de linguagem de máquina para Assembly e depois para linguagens de alto nível, como COBOL e Fortran. Computadores como EDVAC de Von Neumann e o LEO, o primeiro comercial, mostram como o software começou a se tornar mais sofisticado à medida que o hardware se desenvolvia.

A evolução do software pode ser entendida em eras:

- Nos primeiros anos, o software era simples, feito sob medida e usado em lotes (_batch_), com pouca documentação.
- Na segunda era, surgiram sistemas multiusuários, software de tempo real, banco de dados e software distribuído, ando origem às primeiras "Software house".
- Na terceira era, a partir da década de 1970, os microprocessadores e computadores pessoais permitiram a integração do software em produtos inteligentes, como automóveis, micro-ondas e robôs industriais.
- Hoje na era atual, técnicas avançadas como orientação a objetos, sistemas especialistas e inteligência artificial estão aplicadas, mas a demanda por software supera nossa capacidade de desenvolvê-lo, tornando a manutnção e a engenharia de software essenciais.

Quanto aos tipos de software, podemos pensar em sete grandes categorias: Básico, tempo real, comercial, científico e de engenharia, embutido, para computador pessoal e inteligência artifical. Cada um tem sua função específica, seka dando suporte a outros programas, controlando sistemas do mundo real, ou resolvendo problemas complexos.

Enquanto o hardware se desgasta fisicamente, o software não "envelhece" da mesma forma, mas precisa passar pormanutenção e evolução constantes, pois erros e mudanças inevitáveis fazem com que seu funcionamento se deteriore se não forem aplicaas, melhorias. A engenharia de software surge justamente para lidar com essa complexidade, garantindo que os sistemas continuem funcionando e se adaptando ao longo do tempo.

### Exercício

1)A;2)D;3)A;4)V;5)"Diferente do hardware que se desgasta por fatores físicas como tempo de uso e condições ambientais, os softwares se deterioram com o passar do tempo devido às manutenções, correções e adições de novas funcionlidades. Estas adições introduzem novos defeitos, fazendo com que o clico de vida do produto tenha um novo pico de falhas até que seja estabilizada. Este ciclo leva o software a alcançar uma complexidade para a qual muitas vezes ele não estava prevista no projeto inicial. Como descrito no livro, a necessidade do mercado (a demanda por softwares) é maior do que a capacidade para criá-los."

## Tópico II - Fundamentos de Engenharia de Software

A Engenharia de Software surgiu no final da década de 1960, quando a chamada **crise do software** se tornou evidente: os sistemas eram cada vez mais complexos, mas havia atrasos nas entregas, custos altos, dificulkdades de manutenção e uma enorme quantidade de erros. Frits Bauer definiu a ES como a aplicação de princípios de engenharia para obter sistemas confiáveis, eficientes e de baixo custo, enquanto autores como Dijkstra reforçaram a necessidade de uma disciplina mais estriturada para lidar com a crescente demanda.

Sua importancia se aplica por fatores como: a complexidade dos sistemas, a insatisfação de usuários com softwares pouco práticos, a baixa produtividade dos projetos, problemas de confiabilidade e os altos custos de manutenção. Assim, a ES passou a estabelecer métodos e práticas que aumentam a **qualidade** e tornam as empresas mai competitivas.

Diversos autores estruturam a disciplina. Ian Sommerville destacou que a ES envolve todo o ciclo de produção de software, desde a especificação de requisitos até a manutenção. Já Roger Pressman apresentou a ideia das camadas da **Engenharia de Software**:

- Qualidade como base;
- Processo, que organiza o desenolvimento.
- Métodos, que orientam análise, projeto, implementação e testes;
- Ferramentas CASE (computer aided software engineering), que automatizam parte do trabalho.

Além destas camadas, Carvalho apresentou 12 princípios fundamentais da ES, como: formalidade, abstração, decomposição, generalizqação, flexibilidade, padronização, rastreabilidade, desenvolvimento iterativo, gerenciamento de requisitos, arquiteturas baseadas em componentes, modelagem visual e verificação contínua de qualidade. Esses princípios permitem lidar com a complexidade e garantir softwares mais confiáveis e fáceis de manter.

Outro aspecto essencial é a **Metodologia de Desenvolvimento de Sistemas**, que padroniza atividades, melhora a comunicação entre equipes e garante maior produtividade e qualidade. Sem uma metodologia, cada profissional aplica uas próprias soluções, resultando em desorganização e retrabalho. Entre os requisitos fundamentais estão: padronização, flexibilidade, documentação, modularização e planejamento.

De acordo com o SWEBOK, a ES abrange várias áreas de conhecimento, como: design, construção, testes, manutenção, gerenciamento de configuração, processos, qualidade e requisitos. Cada área é responsável por etapas específicas, mas todas estão interligadas.

O desenvolvimento de software também é dividido em **fases**:

- Iniciação: definição do escopo e planejamento;
- Elaboração: análise detalhjda e definição da solução;
- Construção: implementação e testes;
- Transição: entrega e validação final.

Essas fases ajudam a lidar com os riscos em diferentes momentos do projeto, tornando-o mais controlado.

Por fim, os **processos de Engenharia de Software** organizam as atividades e integram métodos, ferramentas e procedimentos, servindo como guias para alcançar qualidade e previsibilidade. Normas e modelos como **ISO 9001, ISO/IEC 12207, CMMI e MPS.Br** ajudam a garantir padrões de qualidade. Atualmente, ferramentas CASE e frameworks permitem automatizar e integrar várias etapas do desenvolvimento, tornando os processos ágeis e eficientes.

Em resumo, a ES é uma disciplina que evoluiu para dar respostas à crise do software, trazendo princípios, metodologias e processos que aumentam a qualidade, reduzem falhas e tornam os projetos mais sustentáveis e competitivos.

### Exercício

1)"Engenharia de software pode ser definida como uma disciplina das engenharias que se ocupa na atividade de organizar e integrar métodos, ferramentas e procedimentos que servem para o propósito de alcançar qualidade e previsibilidade na construção de softwares. A Engenharia de Software existe pois o mundo da computação e do desenvolvimento de software passou por um período de "crise do software": Um período onde a demanda por softwares crescia cada vez mais, conforme o avanço da computação, mas a capacidade por entregar softwares não acompanhavam esta demanda. Isto causou, à época, a crise onde a construção dos softwares onde era comum não se cumprir os prazos de entrega, os custos para desenvolver software eram altos e quase não existia garantia de qualidade";
2)C;
3)"Os sistemas tornavam-se cada vez mais complexos, em contrapartida havia atrasos nas entregas, custos altos, dificuldades de manutenção e uma enorme quantidade de erros.";
4)C;5)D; 6) Formalidade: Criação de regras de desenvolvimento e os passos que devem ser seguidos a partir de documentos
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
Verificação contínua da qualidade: criação de etapas e testes para garantir a cobertura do código e testes de qualidade, como testes unitários e testes de integração. 7) A Metodologia de Desenvolvimento de Sistemas padroniza atividades, melhora a comunicação entre equipes e garante maior produtividade e qualidade. Sem uma metodologia, cda profissional aplica suas próprias soluções, resultano em desorganização e retrabalho. Seus principais fundamentos são: padronização, flexibilidade, documentação, modularização e planejamento. 8) Sem uma metodologia de desenvolvimento de sistemas, cada profissional aplica suas próprias soluções, resultando em desorganização e retrabalho.
9)C; 10) design, construção, testes, manutenção, gerenciamento de configuração, gerenciamento de ES, processos, ferramentas e métodos, qualidade e requisitos. 11) Transição; Elaboração; Construção; Iniciação: IV, I, III, II; Resposta: A;

## Tópico III - Ciclo de vida do Sotware

O ciclo de vida do software descreve todo o percurso que um sistema percorre desde a sua concepção até a manutenção, sendo essencial para que o produto final funcione corretamente e atenda às expectativas dos usuários. Ele começa com o planejamento e a iniciação, quando se define o escopo do projeto, os recursos necessários, as equipes envolvidas e os principais riscos. Essa fase é fundamental, porque fornece a base para todas as decisões posteriores e ajuda a evitar surpresas durante o desenvolvimento.

Em seguida, ocorre a análise de requisitos, etapa em que se detalha o que o usuário espera do software. Nessa fase, identificam-se tato os requisitos funcionais, que descrevem o que o sistema deve fazer, quanto os requisitos não funcionais, que dizem respeito a desempenho, segurança e confiabilidade. O projeto ou design vem depois, transformando esses requisitos em uma arquitetura concreta, determinando como os módulos se relacionam, como os dados serão organizados e como o sistema funcionará de maneira lógica e eficiente.

A implementação é a fase em que o software começa a ganhar forma, pois é quando se escreve o código dos módulos definidos anteriormente. Logo após, entram os testes, essenciais para garantir que o sistema funciona corretamente e que todos os requisitos foram atendidos, detectando erros e prevenindo problemas antes da entrega. Finalmente, ocorre a implantação, quando o software é disponibilizado para os usuários podendo incluir treinamento, documentação e suporte inicial, e depois a manutenção, que garante que o sistema continue funcionando bem, através de correções, melhorias e adapções às mudanças de necessidade e tecnologia.

Para organizar estas fases, existem modelos de processo de software. O modelo **cascata**, ou linear, segue uma sequência rígida de etapas, sendo simples de gerencias, mas pouco flexível a mudanças. O **modelo incremental** entrega o software em partes, permitindo que versões parciais sejam usadas enquanto o desenvolvimento continua. Já o **modelo iterativo** inicia ocm uma versão funcional básica que vai sendo refinada progressivamente, facilitando ajustes e melhorias durante todo o desenvolvimento.

Além desses, exitem modelos derivados, como a **prototipação**, qe cria protótipos rápidos para validade ideias com o usuário, e o **modelo espiral**, que combina evolução incremental com análise de riscos, ajudando a prevenir problemas antes que eles se tornem críticos. Modelos modernos, como os ágeis, focam em entregas rápidas, comunicação constante e adaptação contínua às mudanças, valorizando a colaboração entre equipe e cliente.

Cada modelo possui suas vantagens e limitações e a escolha correta depende do tipo de projeto, da complexidade do software e da experiência da equipe. Entender o ciclo de vida e os diferentes modelos é essencial para construir softwares de qualidade, dentro do prazo e atendendo às reais necessidades dos usuários.

# Unidade II - Gerenciamento de Projetos de Software, estimativas e métricas de projetos de software e gerência de configuração de software

## Tópico I - Gerenciamento de projetos de software

O gerenciamento de projetos de software é uma disciplina essencial para garantir que projetos sejam cnduzidos com sucesso, considerando o planejamento, a execução, o monitoramento e o controle de pessoas, processos e eventos. Projetos de software são temporários, com início e fim definidos e têm como objetivo produzir um produto, serviço ou resultado único. São progressivos, ou seja, à medida que avançam, novas técnicas, métodos e conhecimentos são incorporados, permitindo adaptação a mudanças e inovação. O instituto de Gerenciamento de projetos (PMI) é uma referência internacional na área, sendo responável por estabelecer boas práticas consolidadas no guia PMBOK, que define conceitos, processos e áreas de conhecimento essenciais à gestão de projetos.

O gerenciamento de projetos envolve diversos desafios, incluindo atrasos nos prazos, estouro de orçamento, falhas na qualidade das entregas, desmotivação da equipe e ocorrência de eventos imprevistos. Para mitigar esses riscos, é necessários planejamento detalhado e monitoramento contínuo. O tripé do sucesso em projetos, segundo Ricardo Viana Vargas, envolve tempo, custo e escopo, ao qual deve ser adicionada a qualidade, garantindo que o produto entregue funcione corretamente e atende às expectativas do cliente. O plano de projeto é o documento central, definindo marcos, atividades principais e métodos de controle. A gestão eficaz de projetos de software se apoio nos quatro P's: **pessoas**, focando em comunicação e competência da equipe; **produto**, compreendendo as necessidades e a melhor solução; **processo**, que fornece metodologia e estrutura; **projeto**, que organiza, planeja e controla todas as etapas.

A análise e gestão de riscos é fundamental para reduzir a incerteza. Este processo envolve quatro etapas: (1) **identificação de riscos**, reconhecendo prossíveis problemas de projeto ou negócios; (2) **análise de risco**, determinando a probabilidade de ocorrência e seu impacto;(3) **administração de risco**, definindo estratégias e planos de contingência; e (4) **monitoração de risco**, acompanhando a ocorrência e evolução dos riscos. Os riscos podem ser tratados por eliminação, mitigação, transferência ou aceitação, conforme a situação.

O PMBOK identifica dez áreas do conhecimento essenciais, que englobam 47 processos: integração, escopo, tempo, custos, qualidade, recursos humanos, comunicações, riscos, aquisições e gerenciamento de stakeholders. A satisfação das pessoas envolvidas, especialmente stakeholders, é crucial, já que sua expectativa influencia diretamente o sucesso do projeto. Estruturas organizacionais podem ser funcional, projetizada ou matricial (fraca, balanceada ou forte), determinando como decisões e responsabilidades são distribuídas.

Uma equipe típica de desenvolvimento de software inclui gerentede projetos, analista de negócios, analista de sistemas, projetista, programadores, analista de qualidade e DBA. Filho (2015) destaca três pilares da gestão: foco no cliente, bom funcionamento da equipe e administração eficiente dos recursos (tempo, pessoal e financeiros).

O uso de ferramentas de gerenciamento de projetos é indispensável para organizar, controlar e disponibilizar informações de forma rápida e precisa. Entre as principais ferramentas estão:

- **MS Project**, robusta, baseada em diagrama de rede e tabelas, com recursos para cronograma, relatórios e subprojetos;
- **Gantt Project**, gratuito, de código aberto, baseado em gráfico de Gantt, com recursos de dependência de tarefas, relatórios e integração com planilhas;
- **DotProject**, livre, web-based, com banco SQL, focada em agenda de tarefas, documentação e horas trabalhadas;
- **Project Open**, web-based e de código aberto, com monitoramento de custos, cálculo de lucro e integração com outras ferramentas.

Em resumo, o gerenciamento de projetos de software é uma atividade estratégica que combina planejamento, métodos, ferramentas e gestão de pessoas, garantindo que os projetos sejam concluídos dentro do prazo, orçamento e com a qualidade desejada. O sucesso depende de uma equipe bemk estruturada, da utilização adequada de ferramentas, da gestão de riscos e da atenção às expectativas de todos os envolvidos, com o gerente de projetos desempenhando papel central na condução e controle do trabalho.

### Mapa Mental: Gerenciamento de Projetos de Software

#### 1. Projetos de Software

- Temporários → início e fim definidos
- Produto, serviço ou resultado único
- Progressivos → incorporam métodos e técnicas ao longo do projeto
- Problemas comuns:
  - Atrasos nos prazos
  - Estouro de orçamento
  - Falha na qualidade
  - Desmotivação da equipe
  - Eventos inesperados

#### 2. PMI e PMBOK

- PMI → referência internacional em gestão de projetos
- PMBOK → guia de boas práticas
- Áreas de conhecimento:
  - Integração
  - Escopo
  - Tempo
  - Custos
  - Qualidade
  - Recursos Humanos
  - Comunicações
  - Riscos
  - Aquisições
  - Envolvidos (Stakeholders)

#### 3. Tripé do Sucesso

- Tempo
- Custo
- Escopo
- Qualidade

#### 4. Gestão dos 4 Ps

- Pessoas → comunicação, competência, motivação
- Produto → atender necessidades, melhor solução
- Processo → metodologia, plano, padrões
- Projeto → planejamento, monitoramento, controle

#### 5. Gestão de Riscos

- Etapas:
  - Identificação
  - Análise → probabilidade e impacto
  - Administração → estratégias e plano de contingência
  - Monitoração → acompanhar ocorrência e evolução
- Tratamento:
  - Eliminação
  - Mitigação
  - Transferência
  - Aceitação

#### 6. Estruturas Organizacionais

- Funcional → ordens do topo
- Projetizada → gerente de projeto decide exclusivamente
- Matricial → mistura, pode ser fraca, balanceada ou forte

#### 7. Equipe de Desenvolvimento

- Gerente de projetos
- Analista de negócios
- Analista de sistemas
- Projetista
- Programadores
- Analista de qualidade
- DBA
- Pilares da gestão:
  - Foco no cliente
  - Boa performance da equipe
  - Administração eficiente de recursos (tempo, pessoal, financeiro)

#### 8. Ferramentas de Gerenciamento

- MS Project → diagrama de rede, cronograma, relatórios, subprojetos
- Gantt Project → gráfico de Gantt, PDF/HTML, integração com planilhas
- DotProject → web-based, banco SQL, agenda de tarefas, documentação, horas trabalhadas
- Project Open → web-based, monitoramento de custos, cálculo de lucros, integração
- Benefícios:
  - Padronização de processos
  - Informações em tempo real
  - Aumento da produtividade

#### 9. Sucesso em Projetos

- Combinação de pessoas + planejamento + ferramentas
- Satisfação dos stakeholders
- Papel central do gerente de projetos

## Tópico II - Estimativas e Métricas em Projetos de Software

O gerenciamento de projetos de software envolve múltiplos aspectos, entre eles a definição precisa de estimativas e o uso de métricas confiáveis para orientar o planejamento, a execução e o controle. Estimar significa prever o esforço, o tempo, os recursos e os custos necessários para desenvolver um sistema, o que é fundamental para evitar atrasos, desperdícios e resultados aquém do esperado. O esforço, geralmente medido em pessoas-hora ou pessoas-mês, está diretamente ligado à produtividade da equipe e ao custo final do projeto, uma vez que o valor da mão de obra é calculado sobre essa base.

De acordo com o PMBOK, a gestão de custos dentro de um projeto se estrutura em quatro processos. O primeiro é o planejamento do gerenciamento de custos, no qual são definidas as políticas, procedimentos e ferramentas a serem utilizadas para o controle financeiro. Em seguida, ocorre a estimativa de custos, que calcula os valores de cada componente do projeto. A partir disso, define-se o orçamento, consolidando os custos previstos em um valor agregado que será acompanhado ao longo da execução. Por fim, entra em ação o controle de custos, que monitora se o orçamento está sendo respeitado e toma medidas corretivas quando necessário.

Nesse contexto, as métricas de software assumem um papel central. Elas são instrumentos quantitativos que permitem medir atributos do produto, do processo e dos recursos utilizados, possibilitando transformar percepções subjetivas em dados concretos. Entre os exemplos mais comuns de métricas estão o número de linhas de código escritas, a quantidade de defeitos encontrados em testes, o esforço por atividade e até índices de satisfação do cliente. O uso consistente métricas fornece informações valiosas que apoiam decisões de investimento, reduzem riscos, melhoram o relacionamento com clientes, aumentam a confiabilidade das estimatvas e contribuem para a melhoria contínua da qualidade do software.

Para auxiliar as organizações na difícil tarefa de estimar, diferentes métodos foram desenvolvidos. A técnica de **Linhas de Código (LOC)** mede o tamanho do sistema a partir da quantidade prevista de código a ser desenvolvido. Embora simples, exige atenção, pois depende de estimativas refinadas por função e está sujeita a variação significativas dependendo da linguagem de programação. O método de **Pontos de História**, bastante usado em métodos ágeis, considera o esforço relativo de desenvolvimento de uma história em dias ideais de trabalho de uma pessoa, permitindo avaliar e comparar a complexidade de diferentes funcionalidades. A **Análise de Pontos de Função (APF)**, por sua vez, mede a complexidade do sistema de forma independente da tecnologia, contabilizando elementos como entradas, saídas, consultas e arquivos, e é um dos métodos mais consolidados na indústria. Já os **Pontos de Caso de Uso (PCU)** se baseiam na análise de atores e casos de uso do sistema, aplicando fatores de ajuste técnicos e ambientais para refinar a estimativa de esforço. Modelos mais avançados, como o **COCOMO II**, oferecem uma abordagem hierárquica e parametrizada, combinando dados de tamanho (LOC, APF ou pontos de objeto) com fatores relacionados à maturidade da equipe, ao ambiente de desenvolvimento e à complexidade do projeto.

Para projetos orientados a objeto, também é comum estimar a partir da complexidade dos casos de uso, da quantidade de classes e da natureza das interfaces. Independentemente do método, o objetivo é sempre gerar previsões mais realistas, que possam guiar o planejamento e reduzir os riscos de atrasos e custos excessivos.

### Leitura Complementar - Exemplos de Aplicação

A fim de tornar o estudo mais concreto, alguns exemplos de estimativa baseadas em diferentes técnicas foram aplicados em cenários reais ou simulados por empresas desenvolvedoras de software.

O primeiro exemplo é o de uma **estimativa baseada em Linhas de Código (LOC)**, descrito por Roger Pressman. O caso envolve o desenvolvimento de um sistema CAD para engenharia mecânica, com múltiplos módulos, interface gráfica e interação com periféricos. Inicialmente, é definida uma descrição preliminar do escopo, que deve ser refinada antes da estimativa, estabelecendo claramente limites e características de cada função. A partir disso, cria-se uma tabela de estimativas por função, atribuindo valores otimistas, mais provável e pessimista em LOC. Para análise geométrica 3D, por exemplo, a estimativa resultou em 6.800 LOC esperadas, obtidas pela fórmula que pondera os três valores. Somando as funções, chegou-se a 33.200 linhas de código para o sistema como um todo. Com base em dados históricos da empresa, a produtividade média era de 620 LOC por pessoa-mês e o custo mensal da mão de obra de R$ 8.000,00. Isso levou a um custo aproximado de R$ 13 por linha de código, totalizando R$ 431.000,00 para o projeto com um esforço estimado em 54 pessoas-mês. Esse exemplo evidencia como a técnica LOC, quando apoiada em dados históricos, pode gerar previsões financeiras e de esforço bastante concretas.

O segundo exemplo refere-se a uma **estimativa baseada em Pontos de Caso de Uso (PCU)**, estudada por Viviane Heimberg. Três projetos foram analisados: folha de pagamento, sistema contábil e sistema de cartão de ponto, todos migrando de um cliente/ servidor para ambiente web. A análise foi feita com base nos diagramas de casos de uso em fases de concepção e elaboração. Inicialmente, o fator de complexidade ambiental foi considerado igual para todos os projetos, já que as equipes possuíam treinamento e experiência semelhantes. Entretando, o fator técnico variou devido a diferenças em processamento, segurança e acesso concorrente. A primeira estimativa utilizou 20 horas-homem por unidade de PCU, mas os resultados mostraram exagerados em relação a projetos similares. Ajustes foram feitos, estabelecendo valores de 5 horas para casos simples, 9 para médios e 24 para complexos, chegando a médias mais condizentes com a realidade. Esse exemplo mostra como as estimativas em PCU não são fixas, exigindo calibração de acordo com a experiência de equipe e as particularidades da organização.

Por fim, um terceiro exemplo apresenta uma **estimativa baseada em análise de Pontos de Função (APF)** aplicada a um sistema de gerenciamento de leitos hospitalares. Foram contabilizados elementos internos, como cadastros de diagnósticos, leitos e remédios, além de elementos externos como cadastros de médicos e pacientes. Entradas, saídas e consultas foram classificadas por nível de complexidade, resultando em 84 pontos de função não ajustados. Em seguida, aplicou-se o fator de ajuste, calculando em função de 14 características gerais do sistema, como comunicação de dados, volume de transações, eficiência do usuário final e suporte a múltiplos locais. O fator encontrado foi de 0.93, reduzindo o total ajustado para 78.12 pontos por função. Considerando que cada hora de trabalho equivalia a dois pontos de função e o custo/hora era de R$ 8,00, o custo total estimado do sistema foi de R$ 312,48. Esse exemplo ilustra a precisão e a objetividade que a APF pode oferecer além de destacar a influência dos fatores de ajuste no resultado final.

### Conclusão

As estimativas e métricas em projetos de software são mais do que ferramentas de cálculo: são instrumentos de gestão estratégica. Elas permitem alinhar expectativas, planejar recursos, antecipar riscos e controlar custos, transformando dados técnicos em informações de valor para tomada de decisão. Os métodos apresentados - LOC, PCU e APF - ilustram como diferentes perspectivas podem ser adotadas para medir e prever esforço e custo, cada uma com seus pontos fortes e limitações. O essencial é compreender que nenhuma técnica é universal; a escolha depende do tipo de projeto, do nível de maturidade da organização e da disponibilidade de dados históricos. Quando bem aplicadas, as estimativas aumental a confiabilidade das previsões e contribuem decisivamente paa o sucesso do projeto de software.

## Tópico III - Gerência de configuração de Software

A Gerência de Configuração de Software (GCS) é essencial para manter a organização, o controle e a qualidade durante o desenvolvimento de sistemas, uma vez que o software está em constante evolução e sofre alterações contínuas. Sem um processo de GCS, situações comuns como modificações imultâneas em um mesmo artefato por diferentes desenvolvedores podem gerar perda de trabalho, sobreposição de alterações ou falhas difíceis de rastrear. O papel da FCS é justamente registrar, ocntrolar e integrar essas mudanças de forma sistemática, evitando inconsistências e conflitos.

Sob a perspectiva de desenvolvimento, a GCS envolve três elementos principais: **o controle de versões**, **o controle de mudanças** e **a integração contínua**. O controle de versões gerencia o histórico dos artefatos, permitindo que cada modificação seja salva como uma nova versão, com registro de quem fez a alteração e em que momento. Já o controle de mudanças documenta cada solicitação de alteração, possibilitando rastrar o que foi modificado, por que, quando e por quem. Por fim, a integração contínua busca reunir e testar constantemente a versão mais atual de todos os artefatos, garantindo que o software se mantenha consistente e livre de erros a cada atualização.

Além desses funções, a GCS também depende de **revisões técnicas formais** e **auditorias de configuração**. As revisões técnicas avaliam se uma mudança foi corretamente implementada e se mantém a coerência com os demais itens do sistema. As auditorias, por sua vez, verificam se os procedimentos e padrões foram seguidos, se os registros das alterações estão corretos e se todos os itens relacionjados foram devidamente atualizados. Dessa forma, assegura-se não apenas a exatidão técnica, mas também a conformidade do processo.

Outro aspecto importante é o **relatório de status de configuração**, que centraliza informações sobre todas as alterações realizadas, incluindo autor, data, impacto e outros elementos relevantes. Esse relatório é vital para a comunicação entre as equipes, especialmente em projetos grandes, evitando situações em que diferentes desenvolvedores trabalham de forma isolada e conflituosa.

No campo prático, a GCS utiliza conceitos e terminologias próprias. O **baseline** representa uma versão estável e aprovada de um item de configuração, que serve de referência para futurasw evoluções. O **repositório** é o espaço onde os itens são armazenados, com o suporte a multiplas versões e controle de acesso. O **checkout** e o **checkin** tratam de recuperação e atualização de itens no repositório, respectivamente. Já um **build** representa uma versão compilada do software, enquanto um **release** é a entrega de uma versão validada ao cliente ou ao mercado. Também existem as operações de **branch**, que criam linhas alternativas de desenvolvimento, e **merge**, que unem diferentes versõs de um mesmo item de configuração.

Para implementar esses processos, existem diversas ferramentas de apoio. No controle de versões, destacam-se Git, Mercurial e Subversion. Para ocntrole de mudanças, ferramentas como Trac, Redmine e JIRA são bastante utilizadas. Já na integração contínua, Jenkins, Maven e Ant são exemplos de soluções populares. Muitas dessas ferramentas são open source, o que facilita sua adoção por pequenas e médias empresas, embora ferramentas comerciais ofereçam funcionalidades mais completas.

Em suma, a GCS é uma disciplina fundamental para o sucesso de projetos de desenvolvimento pois garante integridade, rastreabilidade e consistência, melhora a comunicação entre as equipes e reduz riscos de falhas ou retrabalho.

# Unidade III - Gerenciamento de Qualidade de Software: Padrões, normas e modelos; Métodos ágeis; Verificação, validação e testes de software; Governança de tecnologia da informação

## Tópico I - Gerenciamento de qualidade de software: Padrões, normas e modelos

A qualidade em software é um conceito relativo, ligado ao grau em que um produto atende aos requisitos do cliente, funciona sem defeitos, é eficiente, usável e confiável. Para Roger Pressman, qualidade significa conformidade com requisitos funcionais e de desempenho explicitamente declarados, além de padrões de desenvolvimento documentados. Joseph Juran complementa com sua trilogia da qualidade: planejamento (definição do que é qualidade), controle (garantia de que padrões sejam cumpridos) e melhoria (identificação e implementação de oportunidades).

Um dos métodos centrais é o **Ciclo PDCA** (Plan, Do, Check, Action), que orienta a melhoria contínua: planejar ações, executar, verificar resultados e agir corretivamente. Outro marco é o \*\*Total Quality Management (TQM), que diferencia a era do software artesanal, sem padronização, da era profissional, marcada pela engenharia de software, documentação e foco em custo-benefício.

Para garantir qualidade, um projeto deve ter processos formais e um plano de qualidade, onde são definidos padrões, métodos, métricas, treinamentos, inspeções, auditorias e ações corretivas. Dentro dessa estrutura, há duas áreas complementares:

- **Garantia da Qualidade de Software (SQA)**: define padrões, metodologias e atividades preventivas.
- **Controle da Qualidade de Software (SQC)**: foca em monitorar resultados e detectar defeitos por meio de revisões, testes e análises.

O **custo da qualidade** é dividido em custos de prevenção, avaliação, falhas internas e falhas externas. Quanto mais se investe em prevenção, menores tendem a ser os custos de falhas. Além disso, a qualidade depende de quatro fatores: processo (planejamento adequado), tecnologia (ferramentas e métodos), recursos (tempo e dinheiro) e pessoas (competência da equipe, fator decisivo)

Ao longo do tempo, diversas **normas internacionais** foram criadas:

- **ISO/IEC 9000** - gestão da qualidade em projeto, desenvolvimento e serviços.
- **ISO/IEC 12207** - processo do ciclo de vida do software.
- **ISO/IEC 15504 (SPICE)** - avaliação e melhoria de processos.
- **ISO/IEC 9123** - modelo de qualidade de produto (funcionalidade, confiabilidade, eficiência, usabilidade, manutenibilidade e portabilidade).
- **ISO/IEC 27000** - Segurança da informação.
- **ISO/IEC 15939** - Processos de medição.

No Brasil, os modelos mais apliados são o CMMI e o MPS.BR.

O CMMI (Capability Maturity Model Integration), criado pelo SEI em 1992, é um dos modelos mais reconhecidos mundialmente pla melhoria de processos. Ele integra disciplinas como engenhar de sistemas e software, buscando maior eficiência, retorno sobre investimento e redução de redundâncias. O CMMI estabelece cinco níveis de maturidade:

1. Inicial: processo imprevisível e pouco controlável;
2. Repetível: processos básicos de gerenciamento de projetos estabelecidos.
3. Definido: processos documentados e padronizados em toda a organização.
4. Gerenciado: processos medidos e controlados quantitativamente.
5. Otimização: foco em inovação e melhoria contínua.

Já o MPS.BR (Melhoria de Processos de Software Brasileiro), criado em 2003 pela Softex em parceria com instituições como COPPE/UFRJ e CESAR, for desenvolvido para pequenas e médias empresas nacionais com custos mais acessível e compatibilidade com padrões internacionais. Ele define dois modelos:

- MR-MPS (Modelo de referência): Descreve processos e práticas.
- MN-MPS (Modelo de negócio): descreve formas de implementação (individual ou cooperada entre empresas)

O MPS.BR tem sete níveis de maturidade, de G (mais baixo) a A (mais alto).

- G – Parcialmente Gerenciado: gestão inicial de requisitos e projetos.
- F – Gerenciado: inclui medições, configuração, qualidade e aquisição.
- E – Parcialmente Definido: processos organizacionais e treinamento.
- D – Largamente Definido: validação, verificação e integração do produto.
- C – Definido: gerência de riscos e análise de decisões.
- B – Gerenciado Quantitativamente: desempenho organizacional e controle quantitativo.
- A – Otimização: foco em inovação e análise de causas.

### Comparação entre CMMI e MPS.BR

Ambos possuem níveis de maturidade que representam a capacidade da organização. O CMMI tem cinco níveis, enquanto o MPS.BR possui sete, com implementação mais gradual e adequada a micro, pequenas e médias empresas.

- O CMMI é internacional reconhecido, mas caro e voltado para empresas de grande porte.
- O MPS.BR é mais acessível, voltado ao cenário brasileiro, e aceita implementação cooperada entre empresas.
- Ambos apoioam licitações, mas apenas CMMI projeta competitividade internacional.

## Tópico II - Métodos ágeis

Na década de 1990, os métodos clássicos de desenvolvimento de software começaram a mostrar sérias limitações: longos prazos, inflexibilidade e baixa qualidade nos produtos entregues. Com a crescente demanda por softwares melhores e mais rápidos, a indústria reagiu com o surgimento das **metodologias leves**, que em 2001 passaram a ser conhecidas como **metodologias ágeis**, após a criação do **Manifesto Ágil**.

Esse manifesto estabelece quatro valores centrais:

1. Responder a mudanças mais que seguir planos rígidos;
2. Colaborar com o cliente mais que negociar contratos.
3. Indivíduos e interações mais que processos e ferramentas.
4. Software em funcionamento mais que documentação extensa.

Além disso, são definidos **12 princípios**, entre eles, entregas frequentes de software funcional, aceitação de mudanças mesmo em fases avançadas, foco em simplicidade, equipes auto-organizáeis, e constante reflexão para melhoria.

As metodologias ágeis são recomendadas para projetos com alta taxa de mudança, equipes pequenas e prazos curtos, onde a recodificação não é cara e a entrega rápida é essencial. Em ambientes de alta criticidade, grandes equipes e requisitos estáveis, métodos clássicos como o modelo cascata ainda podem ser mais adequados.

### Principais métodos ágeis

1. Scrum
   Criado nos anos 1990, por Jeff Sutherland, é hoje um dos métodos mais utilizados. Baseia-se em Sprints (ciclos de 2 a 4 semanas) e em reuniões rápidas e diárias (daily Scrum)
   Papéis principais:

- Scrum Master: faciloita o processo e remove impedimentos
- Product Owner: representa o cliente, define prioridade do Product Backlog
- Time de desenvolvimento: multidisciplinar e auto-organizado.

As entregas são incrementadas e há constante adaptação às necessidades do cliente.

2. Extreme Programming (XP)
   Proposto por Kent Beck, valoriza testes automatizaos, simplicidade e forte envolvimento do cliente. Suas práticas incluem:

- Proramação em pares;
- Testes antes do Código;
- Refatoração contínua
- Integração frequentes

Baseia-se em cinco princípios: comunicação, simplicidade, feedback, respeito e coragem.

3. Adaptative Software Development (ASD)
   Criado por Highsmith, é voltado para projetos grandes e complexos. Tem foco na colaboração humana e na auto-organização. Divide-se me três fases:

- Especulação (planejamento da missão e requisitos básicos)
- Colaboração (equipe motivada e integrada)
- Aprendizado (feedback constante e ajustes)

4. Dynamic System Development Method (DSDM)

Baseado em RAD, enfatiza a participação intensa do usuário final e a entrega incremental de protótipos. Possui cinco fases: viabilidade, estudo do negócio, modelo funcional, projeto/construção e implementação.

5. Crystal Clear

Criado por Alistair Cockburn, valoriza pessoas e comunicação. É flexível, podendo ser adaptado a diferentes tamanhos de equipe (cores como Yellow, Orange e Red indicam o porte). Indicado para equipes pequenas (até 8 membros) em um mesmo local.

6. Feature-Driven Development (FDD)

Foca em funcionalidades como unidade de trabalho. Passos principais: criar modelo do domínio, listar funcionalidades, planejar e detalhar por funcionalidade, construir e testar incrementalmente. Envolve papéis bem definidos (Gerente de Projeto, Arquiteto, Especialista de Domínio, etc.).

## Tópico 3 - Verificação, validação e testes de software

O processo de desenvolvimento de software, mesmo quando bem planejado, está sujeito a falhas devido à complexidade das atividades envolvidas, ao fator humano e à dificuldade de traduzir corretamente as necessidades do cliente em requisitos técnicos. Nesse contexto, a verificação, a validação e os testes de software assumem papel essencial no gerenciamento da qualidade, funcinando ocmo mecanismos que asseguram que o produto final não apenas funcione, mas atenda de fato às expectativas e requisitos para os quai foi concebido.

A verificação, a validação e o teste são três processos distintos, mas complementares. A verificação busca confirmar se o software foi construído corretamente segundo o planejamento, garantindo que cada etapa do desenvolvimento esteja de acordo com os padrões, normals e especificação técnicas estabelecidas. A avaliação,por sua vez, é o processo que verifica se o software produzido é o correto, ou seja, se atende às necessidades reais do cliente às condições de uso esperadas. Já os testes consistem na execução prática do sistema, com entradas e saídas controladas, para revelar a presença de falhas e defeitos. Essa tríade é resumida nas perguntas clássicas: "Estmos construindo o produto certo?" (validação), "Estamos construindo o produto da forma certa?" (Verificação) e o "O produto funciona corretamente?" (teste).

Um aspecto fundamental do processo é a distinção entre defeito, erro e falha. O defeito é o engano cometido durante o desenvolvimento, como um comando incorreto ou uma especificação mal interpretada. O erro é a consequência concreta desse defeito, percebida na discrepância entre o resultado obtido e o esperado durante a execução. Já a falha é a manifestação do problema percebida pelo usuário, quando o software apresenta comportamento incorreto. O custo de correção cresce exponencialmente quanto mais tarde o problema é detectado, reforçando a importância de práticas de verificação e testes desde as fases iniciais do ciclo de vida do software.

Os testes de software podem ser classificados de acordo com a abordagem utilizada e com o nível em que são aplicados. Quanto à abordagem, destcam-se os testes de caixa preta e de caixa brnca. No primeiro, avalia-se o sistema sem conhecimento do código-fonte, examinando entradas e saídas para verificar se a funcionalidade corresponde ao esperado. Já no segundo, há análise detalhada da lógica e das estruturas internas, exigindo acesso ao código para validar fluxos de decisão, laços e caminho lógicos. Em relação aos níveis, existem quatro principais: o teste de unidade, que verifica componentes isolados, normalmente automatizado e realizado pelo próprio desenvolvedor; o teste de integração, que assegura o correto funcionamento das interfaces entre módulos. oi teste de sistema, que avalia o software como umtodo sob a perspectiva do usuário final, incluindo desempenho, usabilidade, segurança e comportameno sob carga; e o teste de aceitação, realizado em conjunto com o cliente, que confirma se o sistema atende aos requisitos originais.

Um modelo de referência amplamente utilizado para origentar a cobertuda de testes é o FURPS, que organiza os atributos de qualidade em cinco dimensões: funcionalidade, usabilidade, confiabilidade, desempenho e suportabilidade. Cada dimensão é associada a diferentes tipso de teste como os funcionais, de segurança, de carga, de estresse, de configuração e de instalação. Essa categorização permite estruturar uma estratégia de testes mais abrangente, indo além da simples validação funcional para contemplar aspectos de uso, manutenção e operação de software.

A indústria também incorporou diferentes práticas de desenvolvimento orientadas a testes, que se alinahm às metodologias ágeis. O TDD estabeleque os testes devem ser escritos antes do código, guiado a implementação em ciclos curtos de escrita de teste, codificação e refatoração. O BDD (Behavior-driven development) expande esse conceito, enfatizando a descrição de comportamentos esperados em linguagem proxima da natual, servindo simultaneamente como documentação e creitério de validação. Já o ATDD (Acceptance Test-Driven Development) envolve diretamente o cliente na definição dos testes de aceitação, garantindo alinhamento com os requisitos de negócio. O FDD (Feature-Driven Development), por sua vez, estrutura o desenvolvimento em torno da entrega incremental de funcionalidades, o que facilita a aplicação d testes contínuos a cada entrega.

O suporte a esses processos é ampliado pelo uso de ferramentas de automação. Existem sistemas voltados para rastreamente e gestão de defeitos como o Bugzilla eo ClearQuest, bem como ferramentas que automatizam testes funcionais, de desempenho. A automação permite maior repetibilidade, abrangência e rapidez na execução dos testes reduzindo custos e aumentando a confiabilidad dos resultados.

Entretando, testes não são apenas questão de ferramentas. A equipe responsável desempenha papel central no processo de qualidade. Ela deve ser composta por profissionais de tecnologia e especialidade do domínio de negócio, pois a visão do usuário é indispensável para identificar cenários reais de uso que muitas vezes não aparecem em requisitos formais. Além disso, testadores precisam ter perfil analítico, senso crítico e independência em relação ao desenvolvimento. Essa combinação de competências técnicas e de negócio é rara e valorizada no mercado, o que torna os profissionais de teste altamente requisitados.

Portanto, a verificação, a validação e os testes de software não devem ser vistos como etapas isoladas, mas como processo contínuos e integrados ao desenvolvimento. A aplicação sistemática dessas práticas assegura que o software entregue seja não apenas tecnicamente correto, mas também útil, confiável e alinhado às necessidades do cliente. Em um cenário em que o software permeia praticamente todas as áreas da vida moderna, a qualidade e a confiabilidade tornam-se fatores decisivos para o sucesso de qualquer produto ou organização.
