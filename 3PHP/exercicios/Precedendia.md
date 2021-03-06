# Precedência de Operadores

A precedência de um operador especifica quem tem mais prioridade quando há duas delas juntas. Por exemplo, na expressão 1 + 5 * 3, a resposta é 16 e não 18 porque o operador de multiplicação ("*") tem prioridade de precedência que o operador de adição ("+"). Parênteses podem ser utilizados para forçar a precedência, se necessário. Assim, (1 + 5) * 3 é avaliado como 18.

Quando operadores tem precedência igual a associatividade decide como os operadores são agrupados. Por exemplo "-" é associado à esquerda, de forma que 1 - 2 - 3 é agrupado como (1 - 2) - 3 e resulta em -4. "=" por outro lado associa para a direita, de forma que $a = $b = $c é agrupado como $a = ($b = $c).

Operadores de igual precedência sem associatividade não podem ser utilizados uns próximos aos outros. Por exemplo 1 < 2 > 1 é ilegal no PHP. A expressão 1 <= 1 == 1 por outro lado é válida, porque o operador == tem menor precedência que o operador <=.

O uso de parenteses, embora não estritamente necessário, pode melhorar a leitura do código ao deixar o agrupamento explícito em vez de depender da associatividade e precedências implícitos.

A tabela seguinte mostra a precedência dos operadores, com a maior precedência no começo. Operadores com a mesma precedência estão na mesma linha, nesses casos a associatividade deles decidirá qual ordem eles serão avaliados.

Precedência dos operadores Associação 	Operadores 	Informação Adicional
não associativo 	clone new 	clone e new
```php
esquerda 	[ 	array()
direita 	** 	aritmética
direita 	++ -- ~ (int) (float) (string) (array) (object) (bool) @ 	types e incremento/decremento
não associativo 	instanceof 	tipos
direita 	! 	lógicos
esquerda 	* / % 	aritmética
esquerda 	+ - . 	aritmética e string
esquerda 	<< >> 	bits
não associativo 	< <= > >= 	comparação
não associativo 	== != === !== <> <=> 	comparação
esquerda 	& 	bits e referências
esquerda 	^ 	bits
esquerda 	| 	bits
esquerda 	&& 	lógicos
esquerda 	|| 	lógicos
direita 	?? 	comparação
esquerda 	? : 	ternário
direita 	= += -= *= **= /= .= %= &= |= ^= <<= >>= 	atribuição
esquerda 	and 	lógicos
esquerda 	xor 	lógicos
esquerda 	or 	lógicos

Exemplo #1 Associação
<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
// associação do operador ternário difere do C/C++
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
```
