<?php 
//2. Ordene um array de números com sort() e exiba o resultado.

$numeros = [5, 2, 9, 1, 5, 6];
sort($numeros); // Essa sentença de código faz a ordenação do array $numeros em ordem crescente.

echo "Array ordenado:";
foreach ($numeros as $numero){
    echo " $numero ";
}/* Aqui ele exibe cada número que foi 
ordenado pela função sort().
*/

?>