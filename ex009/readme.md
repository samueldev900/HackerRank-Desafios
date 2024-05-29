A casa de Sam tem uma macieira e uma laranjeira que produzem frutos em abundância. Usando as informações abaixo, determine o número de maçãs e laranjas que caem na casa de Sam.

No diagrama abaixo:

A região vermelha denota a casa, ondeé o ponto de partida eé o ponto final. A macieira fica à esquerda da casa e a laranjeira à direita.
Suponha que as árvores estejam localizadas em um único ponto, onde a macieira está no ponto, e a laranjeira está no ponto.
Quando uma fruta cai da árvore, ela caiunidades de distância de sua árvore de origem ao longo do-eixo. *Um valor negativo designifica que a fruta caiuunidades à esquerda da árvore e um valor positivo designifica que caiunidades à direita da árvore. *
Maçã e laranja(2).png

Dado o valor deparamaçãs elaranjas, determine quantas maçãs e laranjas cairão na casa de Sam (ou seja, na faixa inclusiva)?

Por exemplo, a casa de Sam fica entree. A macieira está localizada eme a laranja em. Hámaçãs elaranjas. Maçãs são jogadasunidades de distância de, edistância de unidades. Somando a distância de cada maçã à posição da árvore, elas pousam em. Laranjas pousam em. Uma maçã e duas laranjas caem na faixa inclusivaentão imprimimos

1
2
Descrição da função

Complete a função countApplesAndOranges no editor abaixo. Deve imprimir o número de maçãs e laranjas que caíram na casa de Sam, cada uma em uma linha separada.

countApplesAndOranges tem os seguintes parâmetros:

s : inteiro, ponto inicial da localização da casa de Sam.
t : inteiro, localização final da localização da casa de Sam.
a : inteiro, localização da macieira.
b : inteiro, localização da Laranjeira.
apples : array inteiro, distâncias em que cada maçã cai da árvore.
oranges : array inteiro, distâncias em que cada laranja cai da árvore.
Formato de entrada

A primeira linha contém dois inteiros separados por espaços denotando os respectivos valores dee.
A segunda linha contém dois inteiros separados por espaço denotando os respectivos valores dee.
A terceira linha contém dois inteiros separados por espaços denotando os respectivos valores dee.
A quarta linha contéminteiros separados por espaço denotando as respectivas distâncias que cada maçã cai do ponto.
A quinta linha contéminteiros separados por espaço denotando as respectivas distâncias que cada laranja cai do ponto.

Restrições

Formato de saída

Imprima dois inteiros em duas linhas diferentes:

O primeiro número inteiro: o número de maçãs que caem na casa de Sam.
O segundo número inteiro: o número de laranjas que caem na casa de Sam.
Exemplo de entrada 0

7 11 
5 15 
3 2 
-2 2 1 
5 -6
Exemplo de saída 0

1 
1
Explicação 0

A primeira maçã cai na posição.
A segunda maçã cai na posição.
A terceira maçã cai na posição.
A primeira laranja cai na posição.
A segunda laranja cai na posição.
Apenas uma fruta (a segunda maçã) cai na região entree, então imprimimoscomo nossa primeira linha de saída.
Apenas a segunda laranja cai dentro da região entree, então imprimimoscomo nossa segunda linha de saída.