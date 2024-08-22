<?php
class Veiculo
{
    private $capacidade;
    private $passVendidas;

    public function __construct($capacidade)
    {
        $this->capacidade=$capacidade;
        $this->passVendidas=0;
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade=$capacidade;
        return $this;
    }

    public function getPassVendidas()
    {
        return $this->passVendidas;
    }

    public function setPassVendidas($passVendidas): self
    {
        $this->passVendidas=$passVendidas;
        return $this;
    }

    public function venderPass($qtd)
    {
        if ($qtd>0) {
            if ($this->passVendidas+$qtd<=$this->capacidade){
                $this->passVendidas+=$qtd;
                return true;
            }
        }
        return false;
    }
}

$veiculo1=new Veiculo(readline("Digite a capacidade do veículo: "));
while (true){
    $input=readline("\nDigite o número de passagens (|(Digite 0 para sair)|): ");
    $qtd=(int)$input;
    if ($qtd==0) {
        echo "Você escolheu sair \n";
        break;
    }
    if($veiculo1->venderPass($quantidade)) {
        echo "\nA venda foi concluida.\n";
    } else {
        echo "\n Não foi possível a venda.\n";
    }
    echo "\nPassagens vendidas até agora: " . $veiculo1->getPassVendidas() . "\n";
    echo "\nAssentos restantes: " . ($veiculo1->getCapacidade() - $veiculo1->getPassVendidas()) . "\n";
};
