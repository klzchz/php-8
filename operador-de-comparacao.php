<?php

$valorA = 10;
$valorB = 11;

var_dump($valorA <=> $valorB);

$valorC = &$valorB;

var_dump($valorC ?? "Não há valor");