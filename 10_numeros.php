// não precisa usar vetor

<?php

$n=[];
for($i=0;$i<10;$i++)
    $n[$i]=readline("Digite um número: ");

echo "\n";

for($x=0;$x<10;$x++)
    if($n[$x]<0)
        echo $n[$x] . " é negativo.\n";
    else
        echo $n[$x] . " é positivo.\n";

