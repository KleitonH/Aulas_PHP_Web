<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula4/model/Database.php';
class EstudanteModel
{
    private int $idade;

    private string $nome;

    private $database;
    //Getters and setters

    public function __construct()
    {
        $this->database = new Database();
    }

    public function listarModel(): array {
        //$array = ["Abacaxi", "Melancia", "Uva"];//
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");

        return $dadosArray;
    }

    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudantes (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);
    }
}