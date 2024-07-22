<?php

$veiculos=array();

for($i=1;$i<=4;$i++){
    $veiculo=array();
    $veiculo["marca"]=readline("Digite a marca do " . $i . "° veículo: ");
    $veiculo["modelo"]=readline("Digite o modelo do " . $i . "° veículo: ");
    $veiculo["cor"]=readline("Digite a cor do " . $i . "° veículo: ");
    $veiculo["placa"]=readline("Digite a placa do " . $i . "° veículo: ");
    $veiculo["ano"]=readline("Digite o ano de fabricação do " . $i . "° veículo: ");
    $veiculo["tipo"]=readline("Digite o tipo do " . $i . "° veículo: ");
    array_push($veiculos, $veiculo);
    print("\n");
}

foreach($veiculos as $v){
    print($v["marca"] . " | " . $v["modelo"] . " | " . $v["cor"] . " | " . $v["placa"] . " | " . $v["ano"] . " | " . $v["tipo"] . "\n");
}

print("\n");
