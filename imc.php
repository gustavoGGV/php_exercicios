<?php

for($i=1;$i<=5;$i++){
    $nome=readline("Digite o nome da " . $i . "° pessoa: ");
    $peso=readline("\nDigite o peso da " . $i . "° pessoa (em quilos): ");
    $altura=readline("\nDigite a altura da " . $i . "° pessoa (em metros): ");

    $imc=$peso/($altura*$altura);

    printf("\n%s tem peso %dkg, altura %.2fm e IMC %.2f\n\n", $nome, $peso, $altura, $imc);

    //printf muda o tipo na exibição, %f é float, %.2f exibe apena duas casas decimais do float
}
