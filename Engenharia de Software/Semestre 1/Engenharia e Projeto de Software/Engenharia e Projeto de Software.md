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

## Tópico III - Ciclo de vida do Sotware

O ciclo de vida do software descreve todo o percurso que um sistema percorre desde a sua concepção até a manutenção, sendo essencial para que o produto final funcione corretamente e atenda às expectativas dos usuários. Ele começa com o planejamento e a iniciação, quando se define o escopo do projeto, os recursos necessários, as equipes envolvidas e os principais riscos. Essa fase é fundamental, porque fornece a base para todas as decisões posteriores e ajuda a evitar surpresas durante o desenvolvimento.

Em seguida, ocorre a análise de requisitos, etapa em que se detalha o que o usuário espera do software. Nessa fase, identificam-se tato os requisitos funcionais, que descrevem o que o sistema deve fazer, quanto os requisitos não funcionais, que dizem respeito a desempenho, segurança e confiabilidade. O projeto ou design vem depois, transformando esses requisitos em uma arquitetura concreta, determinando como os módulos se relacionam, como os dados serão organizados e como o sistema funcionará de maneira lógica e eficiente.

A implementação é a fase em que o software começa a ganhar forma, pois é quando se escreve o código dos módulos definidos anteriormente. Logo após, entram os testes, essenciais para garantir que o sistema funciona corretamente e que todos os requisitos foram atendidos, detectando erros e prevenindo problemas antes da entrega. Finalmente, ocorre a implantação, quando o software é disponibilizado para os usuários podendo incluir treinamento, documentação e suporte inicial, e depois a manutenção, que garante que o sistema continue funcionando bem, através de correções, melhorias e adapções às mudanças de necessidade e tecnologia.

Para organizar estas fases, existem modelos de processo de software. O modelo **cascata**, ou linear, segue uma sequência rígida de etapas, sendo simples de gerencias, mas pouco flexível a mudanças. O **modelo incremental** entrega o software em partes, permitindo que versões parciais sejam usadas enquanto o desenvolvimento continua. Já o **modelo iterativo** inicia ocm uma versão funcional básica que vai sendo refinada progressivamente, facilitando ajustes e melhorias durante todo o desenvolvimento.

Além desses, exitem modelos derivados, como a **prototipação**, qe cria protótipos rápidos para validade ideias com o usuário, e o **modelo espiral**, que combina evolução incremental com análise de riscos, ajudando a prevenir problemas antes que eles se tornem críticos. Modelos modernos, como os ágeis, focam em entregas rápidas, comunicação constante e adaptação contínua às mudanças, valorizando a colaboração entre equipe e cliente.

Cada modelo possui suas vantagens e limitações e a escolha correta depende do tipo de projeto, da complexidade do software e da experiência da equipe. Entender o ciclo de vida e os diferentes modelos é essencial para construir softwares de qualidade, dentro do prazo e atendendo às reais necessidades dos usuários.


# Gerenciamento de Projetos de Software, estimativas e métricas de projetos de software e gerência de configuração de software

## Gerenciamento de projetos de software

O gerenciamento de projetos de software é uma disciplina essencial para garantir que projetos sejam cnduzidos com sucesso, considerando o planejamento, a execução, o monitoramento e o controle de pessoas, processos e eventos. Projetos de software são temporários, com início e fim definidos e têm como objetivo produzir um produto, serviço ou resultado único. São progressivos, ou seja, à medida que avançam, novas técnicas, métodos e conhecimentos são incorporados, permitindo adaptação a mudanças e inovação. O instituto de Gerenciamento de projetos (PMI) é uma referência internacional na área, sendo responável por estabelecer boas práticas consolidadas no guia PMBOK, que define conceitos, processos e áreas de conhecimento essenciais à gestão de projetos.

O gerenciamento de projetos envolve diversos desafios, incluindo atrasos nos prazos, estouro de orçamento, falhas na qualidade das entregas, desmotivação da equipe e ocorrência de eventos imprevistos. Para mitigar esses riscos, é necessários planejamento detalhado e monitoramento contínuo. O tripé do sucesso em projetos, segundo Ricardo Viana Vargas, envolve tempo, custo e escopo, ao qual deve ser adicionada a qualidade, garantindo que o produto entregue funcione corretamente e atende às expectativas do cliente. O plano de projeto é o documento central, definindo marcos, atividades principais e métodos de controle. A gestão eficaz de projetos de software se apoio nos quatro P's: **pessoas**, focando em comunicação e competência da equipe; **produto**, compreendendo as necessidades e a melhor solução; **processo**, que fornece metodologia e estrutura; **projeto**, que organiza, planeja e controla todas as etapas.

A análise e gestão de riscos é fundamental para reduzir a incerteza. Este processo envolve quatro etapas: (1) **identificação de riscos**, reconhecendo prossíveis problemas de projeto ou negócios; (2) **análise de risco**, determinando a probabilidade de ocorrência e seu impacto;(3) **administração de risco**, definindo estratégias e planos de contingência; e (4) **monitoração de risco**, acompanhando a ocorrência e evolução dos riscos. Os riscos podem ser tratados por eliminação, mitigação, transferência ou aceitação, conforme a situação.

O PMBOK identifica dez áreas do conhecimento essenciais, que englobam 47 processos: integração, escopo, tempo, custos, qualidade, recursos humanos, comunicações, riscos, aquisições e gerenciamento de stakeholders. A satisfação das pessoas envolvidas, especialmente stakeholders, é crucial, já que sua expectativa influencia diretamente o sucesso do projeto. Estruturas organizacionais podem ser funcional, projetizada ou matricial (fraca, balanceada ou forte), determinando como decisões e responsabilidades são distribuídas.

Uma equipe típica de desenvolvimento de software inclui gerentede projetos, analista de negócios, analista de sistemas, projetista, programadores, analista de qualidade e DBA. Filho (2015) destaca três pilares da gestão: foco no cliente, bom funcionamento da equipe e administração eficiente dos recursos (tempo, pessoal e financeiros).

O uso de ferramentas de gerenciamento de projetos é indispensável para organizar, controlar e disponibilizar informações de forma rápida e precisa. Entre as principais ferramentas estão:

* **MS Project**, robusta, baseada em diagrama de rede e tabelas, com recursos para cronograma, relatórios e subprojetos;
* **Gantt Project**, gratuito, de código aberto, baseado em gráfico de Gantt, com recursos de dependência de tarefas, relatórios e integração com planilhas;
* **DotProject**, livre, web-based, com banco SQL, focada em agenda de tarefas, documentação e horas trabalhadas;
* **Project Open**, web-based e de código aberto, com monitoramento de custos, cálculo de lucro e integração com outras ferramentas.

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

## 8. Ferramentas de Gerenciamento
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


## Estimativas e Métricas em Projetos de Software
O gerenciamento de projetos de software envolve múltiplos aspectos, entre eles a definição precisa de estimativas e o uso de métricas confiáveis para orientar o planejamento, a execução e o controle. Estimar significa prever o esforço, o tempo, os recursos e os custos necessários para desenvolver um sistema, o que é fundamental para evitar atrasos, desperdícios e resultados aquém do esperado. O esforço, geralmente medido em pessoas-hora ou pessoas-mês, está diretamente ligado à produtividade da equipe e ao custo final do projeto, uma vez que o valor da mão de obra é calculado sobre essa base.

De acordo com o PMBOK, a gestão de custos dentro de um projeto se estrutura em quatro processos. O primeiro é o planejamento do gerenciamento de custos, no qual são definidas as políticas, procedimentos e ferramentas a serem utilizadas para o controle financeiro. Em seguida, ocorre a estimativa de custos, que calcula os valores de cada componente do projeto. A partir disso, define-se o orçamento, consolidando os custos previstos em um valor agregado que será acompanhado ao longo da execução. Por fim, entra em ação o controle de custos, que monitora se o orçamento está sendo respeitado e toma medidas corretivas quando necessário. 

Nesse contexto, as métricas de software assumem um papel central. Elas são instrumentos quantitativos que permitem medir atributos do produto, do processo e dos recursos utilizados, possibilitando transformar percepções subjetivas em dados concretos. Entre os exemplos mais comuns  de métricas estão o número de linhas de código escritas, a quantidade de defeitos encontrados em testes, o esforço por atividade e até índices de satisfação do cliente. O uso consistente métricas fornece informações valiosas que apoiam decisões de investimento, reduzem riscos, melhoram o relacionamento com clientes, aumentam a confiabilidade das estimatvas e contribuem para a melhoria contínua da qualidade do software.

Para auxiliar as organizações na difícil tarefa de estimar, diferentes métodos foram desenvolvidos. A técnica de **Linhas de Código (LOC)** mede o tamanho do sistema a partir da quantidade prevista de código a ser desenvolvido. Embora simples, exige atenção, pois depende de estimativas refinadas por função e está sujeita a variação significativas dependendo da linguagem de programação. O método de **Pontos de História**, bastante usado em métodos ágeis, considera o esforço relativo de desenvolvimento de uma história em dias ideais de trabalho de uma pessoa, permitindo avaliar e comparar a complexidade de diferentes funcionalidades. A **Análise de Pontos de Função (APF)**, por sua vez, mede a complexidade do sistema de forma independente da tecnologia, contabilizando elementos como entradas, saídas, consultas e arquivos, e é um dos métodos mais consolidados na indústria. Já os **Pontos de Caso de Uso (PCU)** se baseiam na análise de atores e casos de uso do sistema, aplicando fatores de ajuste técnicos e ambientais para refinar a estimativa de esforço. Modelos mais avançados, como o **COCOMO II**, oferecem uma abordagem hierárquica e parametrizada, combinando dados de tamanho (LOC, APF ou pontos de objeto) com fatores relacionados à maturidade da equipe, ao ambiente de desenvolvimento e à complexidade do projeto.

Para projetos orientados a objeto, também é comum estimar a partir da complexidade dos casos de uso, da quantidade de classes e da natureza das interfaces. Independentemente do método, o objetivo é sempre gerar previsões mais realistas, que possam guiar o planejamento e reduzir os riscos de atrasos e custos excessivos.

### Leitura Complementar - Exemplos de Aplicação

A fim de tornar o estudo mais concreto, alguns exemplos de estimativa baseadas em diferentes técnicas foram aplicados em cenários reais ou simulados por empresas desenvolvedoras de software. 

O primeiro exemplo é o de uma **estimativa baseada em Linhas de Código (LOC)**, descrito por Roger Pressman. O caso  envolve o desenvolvimento de um sistema CAD para engenharia mecânica, com múltiplos módulos, interface gráfica e interação com periféricos. Inicialmente, é definida uma descrição preliminar do escopo, que deve ser refinada antes da estimativa, estabelecendo claramente limites e características de cada função. A partir disso, cria-se uma tabela de estimativas por função, atribuindo valores otimistas, mais provável e pessimista em LOC. Para análise geométrica 3D, por exemplo, a estimativa resultou em 6.800 LOC esperadas, obtidas pela fórmula que pondera os três valores. Somando as funções, chegou-se a 33.200 linhas de código para o sistema como um todo. Com base em dados históricos da empresa, a produtividade média era de 620 LOC por pessoa-mês e o custo mensal da mão de obra de R$ 8.000,00. Isso levou a um custo aproximado de R$ 13 por linha de código, totalizando R$ 431.000,00 para o projeto com um esforço estimado em 54 pessoas-mês. Esse exemplo evidencia como a técnica LOC, quando apoiada em dados históricos, pode gerar previsões financeiras e de esforço bastante concretas.

O segundo exemplo refere-se a uma **estimativa baseada em Pontos de Caso de Uso (PCU)**, estudada por Viviane Heimberg. Três projetos foram analisados: folha de pagamento, sistema contábil e sistema de cartão de ponto, todos migrando de um cliente/ servidor para ambiente web. A análise foi feita com base nos diagramas de casos de uso em fases de concepção e elaboração. Inicialmente, o fator de complexidade ambiental foi considerado igual para todos os projetos, já que as equipes possuíam treinamento e experiência semelhantes. Entretando, o fator técnico variou devido a diferenças em processamento, segurança e acesso concorrente. A primeira estimativa utilizou 20 horas-homem por unidade de PCU, mas os resultados mostraram exagerados em relação a projetos similares. Ajustes foram feitos, estabelecendo valores de 5 horas para casos simples, 9 para médios e 24 para complexos, chegando a médias mais condizentes com a realidade. Esse exemplo mostra como as estimativas em PCU não são fixas, exigindo calibração de acordo com a experiência de equipe e as particularidades da organização. 

Por fim, um terceiro exemplo apresenta uma **estimativa baseada em análise de Pontos de Função (APF)** aplicada a um sistema de gerenciamento de leitos hospitalares. Foram contabilizados elementos internos, como cadastros de diagnósticos, leitos e remédios, além de elementos externos como cadastros de médicos e pacientes. Entradas, saídas e consultas foram classificadas por nível de complexidade, resultando em 84 pontos de função não ajustados. Em seguida, aplicou-se o fator de ajuste, calculando em função de 14 características gerais do sistema, como comunicação de dados, volume de transações, eficiência do usuário final e suporte a múltiplos locais. O fator encontrado foi de 0.93, reduzindo o total ajustado para 78.12 pontos por função. Considerando que cada hora de trabalho equivalia a dois pontos de função e o custo/hora era de R$ 8,00, o custo total estimado do sistema foi de R$ 312,48. Esse exemplo ilustra a precisão e a objetividade que a APF pode oferecer além de destacar a influência dos fatores de ajuste no resultado final.

### Conclusão 
As estimativas e métricas em projetos de software são mais do que ferramentas de cálculo: são instrumentos de gestão estratégica. Elas permitem alinhar expectativas, planejar recursos, antecipar riscos e controlar custos, transformando dados técnicos em informações de valor para tomada de decisão. Os métodos apresentados - LOC, PCU e APF - ilustram como diferentes perspectivas podem ser adotadas para medir e prever esforço e custo, cada uma com seus pontos fortes e limitações. O essencial é compreender que nenhuma técnica é universal; a escolha depende do tipo de projeto, do nível de maturidade da organização e da disponibilidade de dados históricos. Quando bem aplicadas, as estimativas aumental a confiabilidade das previsões e contribuem decisivamente paa o sucesso do projeto de software. 
