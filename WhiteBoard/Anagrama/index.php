<?php

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 * @method static bool check(string $first, string $second)
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 -----------------------------------------------------------------------------------
    Ator = Rota

 *TODO: Para ser um anagrama um string precisa  ter os mesmo caracteres  em 2 string como Ator é um Angrama
 *TODO: da palavra Rota é necessário retornar true ;
 *
 * @x = Ator
 * @y = Rota

 */



//Solução Burra


$string1 ='Abacate';
$string2 ='Tecabaa';



$x = str_split (strtolower($string1));
$y = str_split (strtolower($string2));


//echo "<pre>".var_dump($x)."</pre><br/>";
//echo "<pre>".var_dump($y)."</pre><br/>";
//echo "------------------------------";


sort($x);
sort($y);

$true = Array();

foreach ($x as $i =>$v){
    if($v == $y[$i]){
        array_push($true,$y[$i]);
    }
}


if(count($true) == count($y)){
    echo "Anagrama Correto";
}else{
    echo "Anagrama Incorreto";
}
//$y = sort($y);
