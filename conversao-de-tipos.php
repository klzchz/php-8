<?php

$valor = "3";

$valor *= 2;
echo "{$valor}";
$valor *= 2.3;
echo "<br/>";
echo "$valor";
exit;
$novoValor = (string) $valor;
var_dump(get_debug_type($novoValor));

var_dump($novoValor);

settype($novoValor, "integer");

var_dump($novoValor);

var_dump(get_debug_type($novoValor));