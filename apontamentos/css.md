# Cascade Style Sheets (CSS)

## Prólogo

Sempre que introduzimos tópicos novos, serão indicados entre parêntesis os termos técnicos originais (em Inglês).

Qualquer falha detectada apenas prova que eu sou humano, mas agradeço que me tornem cada vez mais infalível com sugestões e correcções para david.freitas@aeg1.pt

## Introdução

Nada melhor para aprender determinados conteúdos do que estar verdadeiramente motivado para eles. O HTML surgiu sem o objectivo de definir formatações mas apenas o de definir a estrutura dos seus conteúdos.
As principais vantagens de utilizar CSS são:
- Controlo pormenorizado dos estilos;
- Modificação do aspecto de várias páginas em simultâneo.
Embora o domínio do CSS seja essencial para um “web developer”, atualmente, grande parte utiliza frameworks como 
### Tipos de CSS
- Externa (External style sheet)
- Interna (Internal style sheet)
- Em linha (Inline style)

#### Folha de estilo externa

Uma folha de estilo externa é ideal quando o estilo é aplicado a várias páginas. Assim, é possível mudar todo o aspecto de um sítio Web apenas mudando um ficheiro. 

```
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
```