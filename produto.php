<?php

class Produto{
    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal(){
        $valorTotal=$this->quantidade*$this->valorUnitario;
        return $valorTotal;
    }
    
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$produto1=new Produto();
$produto1->setDescricao(readline("\n\nDigite a descrição do produto 1: "));
$produto1->setUnidadeMedida(readline("\nDigite a unidade de medida do produto 1: "));
$produto1->setQuantidade(readline("\nDigite a quantidade do produto 1: "));
$produto1->setValorUnitario(readline("\nDigite o valor unitário do produto 1: "));

$produto2=new Produto();
$produto2->setDescricao(readline("\n\nDigite a descrição do produto 2: "));
$produto2->setUnidadeMedida(readline("\nDigite a unidade de medida do produto 2: "));
$produto2->setQuantidade(readline("\nDigite a quantidade do produto 2: "));
$produto2->setValorUnitario(readline("\nDigite o valor unitário do produto 2: "));

$produto3=new Produto();
$produto3->setDescricao(readline("\n\nDigite a descrição do produto 3: "));
$produto3->setUnidadeMedida(readline("\nDigite a unidade de medida do produto 3: "));
$produto3->setQuantidade(readline("\nDigite a quantidade do produto 3: "));
$produto3->setValorUnitario(readline("\nDigite o valor unitário do produto 3: "));

// echo "\n" . $produto1->getDescricao() . " (" . $produto1->getUnidadeMedida() . ") | " . $produto1->getQuantidade() . " X " . $produto1->getValorUnitario() . "R$ = " . $produto1->getValorTotal() . "R$.\n";

printf("\n%s (%s) | %d X R$%.2f = R$%.2f.\n", $produto1->getDescricao(), $produto1->getUnidadeMedida(), $produto1->getQuantidade(), $produto1->getValorUnitario(), $produto1->getValorTotal());

// echo "\n" . $produto2->getDescricao() . " (" . $produto2->getUnidadeMedida() . ") | " . $produto2->getQuantidade() . " X " . $produto2->getValorUnitario() . "R$ = " . $produto2->getValorTotal() . "R$.\n";

printf("\n%s (%s) | %d X R$%.2f = R$%.2f.\n", $produto2->getDescricao(), $produto2->getUnidadeMedida(), $produto2->getQuantidade(), $produto2->getValorUnitario(), $produto2->getValorTotal());

// echo "\n" . $produto3->getDescricao() . " (" . $produto3->getUnidadeMedida() . ") | " . $produto3->getQuantidade() . " X " . $produto3->getValorUnitario() . "R$ = " . $produto3->getValorTotal() . "R$.\n";

printf("\n%s (%s) | %d X R$%.2f = R$%.2f.\n", $produto3->getDescricao(), $produto3->getUnidadeMedida(), $produto3->getQuantidade(), $produto3->getValorUnitario(), $produto3->getValorTotal());

if($produto1->getValorTotal() > $produto2->getValorTotal() && $produto1->getValorTotal() > $produto3->getValorTotal()){
    echo "\nVenda com maior valor total do produto: " . $produto1->getDescricao() . " (" . $produto1->getUnidadeMedida() . ").\n";
} else if($produto2->getValorTotal() > $produto1->getValorTotal() && $produto2->getValorTotal() > $produto3->getValorTotal()){
    echo "\nVenda com maior valor total do produto: " . $produto2->getDescricao() . " (" . $produto2->getUnidadeMedida() . ").\n";
} else{
    echo "\nVenda com maior valor total do produto: " . $produto3->getDescricao() . " (" . $produto3->getUnidadeMedida() . ").\n";
}
