<?php

$sobrenome = "Souza de Andrade";

$nome1 = "Lucas $sobrenome";
$nome2 = 'Lucas $sobrenome';

$idade = 50.2323232;

$vip = false;

$aereas = ["Gol", "Latam", "Azul"];

class Cliente {
    public function __construct(public string $nome){
        echo $this->nome;
    }
}

$Lucas = new Cliente("Lucas Souza de Andrade");

$linhasAereas = function(): iterable {
    return ["Gol", "Latam", "Azul"];
};


function executar(mixed $parametro): void {

}

$nulo = NULL;

 $arquivo = fopen("./variaveis.php", "a+");

/*
echo $nome1;
echo "<br/>";
echo $nome2;
*/
echo "<br/>";
echo gettype($arquivo);
echo "<br/>";
echo get_debug_type($arquivo);
echo "<br/>";
//var_dump(is_iterable($linhasAereas()));
//var_dump(is_callable($linhasAereas));


