//Terminar em casa

<?php

class Escola{
    private $nome;
    private $endereco;
    private $qtdAlunos;

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}

$escola1=new Escola();
$escola1->setNome(readline("\nDigite o nome da escola 1: "));
$escola1->setEndereco(readline("\nDigite o endereço da escola 1: "));
$escola1->setQtdAlunos(readline("\nDigite a quantidade de alunos da escola 1: "));
$escolas=array();
array_push($escolas, $escola1);

$escola2=new Escola();
$escola2->setNome(readline("\nDigite o nome da escola 2: "));
$escola2->setEndereco(readline("\nDigite o endereço da escola 2: "));
$escola2->setQtdAlunos(readline("\nDigite a quantidade de alunos da escola 2: "));
array_push($escolas, $escola2);

$escola3=new Escola();
$escola3->setNome(readline("\nDigite o nome da escola 3: "));
$escola3->setEndereco(readline("\nDigite o endereço da escola 3: "));
$escola3->setQtdAlunos(readline("\nDigite a quantidade de alunos da escola 3: "));
array_push($escolas, $escola3);

$escola4=new Escola();
$escola4->setNome(readline("\nDigite o nome da escola 4: "));
$escola4->setEndereco(readline("\nDigite o endereço da escola 4: "));
$escola4->setQtdAlunos(readline("\nDigite a quantidade de alunos da escola 4: "));
array_push($escolas, $escola4);

// print_r($escolas);
