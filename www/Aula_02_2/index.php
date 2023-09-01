<?php

class Estudante {
    public string $nome;

    public int $idade;
    

    //bool 
    //float
    //Datetime

    public function __construct(int $idade, string $nome) {
        $this->idade = $idade;
        $this->nome = $nome;
    }

    public function setNome(string $i){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade(int $i){
    $this->idade = $i;
    }

    public function getIdade() {
        return $this->idade;
    }
}

echo "<pre>";
$estudante = new Estudante(nome: "Lucas", idade: 20);

var_dump($estudante);

