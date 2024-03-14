<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões PHP</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: grey;
        }
        .textLabel
        {
            font-size: x-large;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

<br><br><br>
<p class="textLabel">Questão 1</p>

<br>

<p class="textLabel">"Resposta: "</p>

<hr>

<p class="textLabel">Questão 2</p>

<?php
//Questão 2

echo "<br><br><br>";

$a = array("a","b","c","d");
$a[] = "e";

var_dump($a);

?>

<br><br><br>

<p class="textLabel">"Resposta: C"</p>

<hr>


<p class="textLabel">Questão 3</p>

<?php


// echo "<br><br><br>";

// $b=0;
// $a=$b+"a";

// echo $a;


?>


<br><br><br>

<p class="textLabel">"Resposta: E"</p>

<hr>

<p class="textLabel">Questão 4</p>

<?php

// echo "<br><br><br>";

// $c = "3 navios" + "10 submarinos";

// echo $c;

?>

<br><br><br>

<p class="textLabel">"Resposta: E"</p>

<hr>

<p class="textLabel">Questão 5</p>

<?php

echo "<br><br><br>";

//echo 'Ela me disse: 'Gosto mais do Bob\'s que do Mac'.Então fomos para o Bob's.';
//echo 'Ela me disse: '."Gosto mais do Bob's que do Mac".'\nPorém prefiro não almoçar';
//echo "Ela me disse: "\Gosto mais do Bob's que do Mac"\.Então fomos para o Bob's.";
//echo "Ela me disse: \"Gosto mais do Bob\'s que do Mac\"\.Então fomos para o Bob's.";
//echo "Ela me disse: \"Gosto mais do Bob's que do Mac\"\.Então fomos para o Bob's.";

?>

<p class="textLabel">"Resposta: E"</p>

<hr>

<p class="textLabel">Questão 6</p>

<?php

echo "<br><br><br>";

$i=0;

while(1)
{
    if($i==10)
    
        break;
        echo ++$i."\n";
    
}

?>

<p class="textLabel">"Resposta: A"</p>

<hr>


</body>
</html>
