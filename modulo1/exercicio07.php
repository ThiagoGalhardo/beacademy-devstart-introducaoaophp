<?php

// Ternário

$idade = 18;

echo $idade >= 18 ? "de maior" : "de menor";

echo "<br>";

$nome = "Zuneide";
echo isset($nome) ? $nome : "nome não definido";

echo "<br>";

echo $nome ?? "nome não definido"; // A partir do php 7