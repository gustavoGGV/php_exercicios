<?php

for($i=1;$i<=5;$i++){
    $nome=readline("Digite o nome da " . $i . "° pessoa: ");
    $peso=readline("\nDigite o peso da " . $i . "° pessoa (em quilos): ");
    $altura=readline("\nDigite a altura da " . $i . "° pessoa (em metros): ");

    $imc=$peso/($altura*$altura);

    echo "\n" . $nome . " tem peso " . $peso . "kg, altura " . $altura . "m e IMC " . $imc . ".\n\n";
}
