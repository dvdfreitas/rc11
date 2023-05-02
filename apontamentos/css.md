# Cascade Style Sheets (CSS)

## Prólogo

Sempre que introduzimos tópicos novos, serão indicados entre parêntesis os termos técnicos originais (em Inglês).

Qualquer falha detectada apenas prova que eu sou humano, mas agradeço que me tornem cada vez mais infalível com sugestões e correcções para dvdfreitas@gmail.com ou david.freitas@aeg1.pt

## Introdução

Nada melhor para aprender determinados conteúdos do que estar verdadeiramente motivado para eles. O HTML surgiu sem o objectivo de definir formatações mas apenas o de definir a estrutura dos seus conteúdos.

As principais vantagens de utilizar CSS são:
- Controlo pormenorizado dos estilos;
- Modificação do aspecto de várias páginas em simultâneo.

Embora o domínio do CSS seja essencial para um “web developer”, atualmente, grande parte utiliza frameworks.

## Tipos de CSS

- Externa (External style sheet)
- Interna (Internal style sheet)
- Em linha (Inline style)


### Folha de estilo externa

Uma folha de estilo externa é ideal quando o estilo é aplicado a várias páginas. Assim, é possível mudar todo o aspecto de um sítio Web apenas mudando um ficheiro. 

```
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
```

### Folha de estilo interna

Uma folha de estilo interna deve ser utilizada quando um único documento tem um estilo único. Deve definir-se os estilos dentro da secção head da página HTML utilizado o elemento ```<style>```.

```
<head>
    <style type="text/css">
        h1 {color:blue;}
    </style>
</head>
```

### Estilos em linha

Num estilo em linha, grande parte das vantagens das CSS são perdidas. Esta opção deve ser utilizada raramente. 

```
<p style="color:red;margin-left:20px">Um parágrafo modificado.</p>
```

### Sobreposição de estilos

Eventualmente poderão existir sobreposições de estilos. Nestes casos a ordem, do mais importante para o menos importante é a seguinte:

1. Estilos em linha;
2. Folha de estilos interna;
3. Folha de estilos externa;
4. Definição do browser.

Nota: Se a ligação para a folha externa for colocada depois da folha de estilos interna, a folha de estilos externa sobrepõem-se a folha de estilos interna.

## Sintaxe

Uma regra CSS tem duas partes: um selector (selector) e uma declaração (declaration).
h1 {color: blue; font-size: 12px;}

- O selector é habitualmente o elemento que queremos alterar o estilo. Cada declaração é constituída por uma propriedade (property) e um valor (value). A propriedade é o atributo (atrribute) do estilo que deseja modificar. Cada propriedade tem um valor (value).
- As declarações CSS terminam sempre com um ponto e vírgula e os grupos de declarações são cercadas por chavetas. Para que as declarações se tornem mais legíveis deve colocar-se cada declaração em linhas separadas.

```
h1
{
	color: blue;
	font-size: 12px;
}
```

## Comentários

Os comentários são extremamente úteis para explicar o código, e ajudar em futuras alterações. 

```
/** Isto é um comentário. */
h1
{
	/** Altera a cor para azul */
	color: blue;
	/** Altera o tamanho da fonte para 12 píxeis */
	font-size: 12px;
}
```

## Os selectores id e class

### O selector id

O selector id é utilizado para especificar o estilo dos elementos que utilizem determinada identificação. O selector id utiliza o atributo id do elemento HTML e é definido com uma linha CSS iniciada por “#”.

O seguinte documento define um estilo chamado “azulcentrado”. Devem evitar-se nomes como este na implementação de um sítio. É preferível dar-se nomes como “destaque” porque se, posteriormente, modificar o tema do sítio e caso se troque a cor ou alinhamento, o nome do selector tornar-se-ia confuso.

```
<html>
    <head>
    <style type="text/css">
    #azulcentrado
    {
        text-align:center;
        color:blue;
    } 
    </style>
    </head>
    <body>
        <p id="azulcentrado">Olá Mundo!</p>
        <p>Este parágrafo não é afectado pelo estilo.</p>
    </body>
</html>
```

### O selector class

O selector class é utilizado para especificar estilos para um grupo de elementos permitindo definir o estilo dos elementos da mesma classe. O selector de classe utiliza o atributo HTML class e é definido com “.”.

No exemplo seguinte, todos os elementos com o atributo "class=center" estarão centrados.

```
<html>
	<head>
	<style type="text/css">
		.center
		{
			text-align:center;
		}
	</style>
	</head>
	<body>
	
		<h1 class="center">H1 alinhado ao centro.</h1>
		<p class="center">Parágrafo alinhado ao centro.</p> 
	</body>
</html>
```

No exemplo seguinte é na mesma utilizado o atributo class do HTML, mas é aplicado apenas ao elemento p.

```
<html>
    <head>
		<style type="text/css">
			p.center
			{
				text-align:center;
			}
		</style>
	</head>
	<body>
		<h1 class="center">Este H1 não vai ser afetado.</h1>
		<p class="center">Este parágrafo será centrado.</p> 
	</body>
</html>
```


## Aplicações

### Tipo de letra

Para alterar a cor da letra deve utilizar :

```
color : #fff5ee;
```


### Posicionamento

Para colocar um objecto numa posição específica pode utilizar posicionamento absoluto ou posicionamento relativo.

#### Posicionamento absoluto

```
h2
{
 	position:absolute;
 	left:100px;
 	top:150px;
}
```

#### Posicionamento Relativo

Posicionamento Fixo
Posicionamento em profundidade
Por vezes os objectos no browser não se sobrepõem da forma como queremos. Podemos alterar isto com a propriedade z-index. Um elemento com valor mais elevado da propriedade está sempre à frente de um com menor valor.
img
{
 	position:absolute;
 	left:0px;
 	top:0px;
 	z-index:-1;
}

## Exercícios 

1. Investigue, relativamente às três formas de inserir CSS num documento HTML, qual a melhor. Resuma numa tabela as vantagens e desvantagens de cada uma.

2. Durante as aulas vimos que existem frameworks que facilitam o trabalho dos “web developers” tal como, por exemplo, o Tailwind CSS. Encontre outras frameworks utilizadas atualmente.