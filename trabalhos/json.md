# Introdução

O JSON (JavaScript Object Notation) é um formato leve para troca de dados. É fácil para os humanos ler e escrever neste formato. Também é fácil para as máquinas gerar e interpretar informações neste formato. É basado num subconjunto da linguagem de programação JavaScript


It is based on a subset of the JavaScript Programming Language Standard (ECMA-262, terceira edição). JSON é um formato texto que é independete da linguagem, mas que usa convenções que são familiares com as linguagens da família "C", incluíndo C, C++, C#, Java, JavaScript, Perl, Python, entre muitas outras. Estas propriedades fazem do JSON um formato ideal para uma linguagem de intercâmbio de dados.

<!--
O JSON é construído sobre duas estruturas:

- Uma coleção de pares nome/valor. Em 

A collection of name/value pairs. In various languages, this is realized as an object, record, struct, dictionary, hash table, keyed list, or associative array.
An ordered list of values. In most languages, this is realized as an array, vector, list, or sequence.
These are universal data structures. Virtually all modern programming languages support them in one form or another. It makes sense that a data format that is interchangeable with programming languages also be based on these structures.

In JSON, they take on these forms:

An object is an unordered set of name/value pairs. An object begins with {left brace and ends with }right brace. Each name is followed by :colon and the name/value pairs are separated by ,comma.

-->

# Trabalho prático

Pretende-se desenvolver um software que permita organizar um conjunto de perguntas para serem resolvidas numa linguagem de programação.

Construir uma interface em HTML, formatada usando CSS ou usando uma framework CSS (TailwindCSS, por exemplo) que peça os seguintes elementos ao utilizador:

- Enunciado;
- Possível solução do problema;
- Exemplos, alguns deles servirão como testes.

Para cada exemplo, deverá ser possível registar: 
- O nome da função que irá ser chamada para resolver o pedido;
- Os inputs da função;
- O output da função;
- Se este exemplo é visível pelo utilizador. 

Deverá criar uma página utilizado Javascript que permita, a partir da informação inserida, gerar um objeto JSON com 

## Primeira fase

Na primeira fase, o seu programa poderá apenas considerar um único exemplo.

## Segunda fase.

O seu programa deverá permitir inserir um número indefinido de exemplos.

# Referências

Introducing JSON - https://www.json.org/