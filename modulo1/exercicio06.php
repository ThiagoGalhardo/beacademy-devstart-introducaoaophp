<?php

// Concatenação

$nome = "Filomeno";
$sobrenome = "Silva";
$idade = 64;
$cidade = "Pernambuco";

echo $nome . " " . $sobrenome;
echo "<br>";
echo "Eu me chamo " . $nome . " " . $sobrenome . ", " . "tenho " . $idade . " anos e moro em " . $cidade;
echo "<br>";
echo "Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em {$cidade}";