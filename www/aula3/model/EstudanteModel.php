<?php

class EstudanteModel {
    private string $nome;

    private int $idade;

    //Getters and setters

    public function listar() {
        //$array = ["Abacaxi", "Melancia", "Uva"];//
        return [
            [
                "nome" => "Kleiton Martins",
            ],
            [
                "nome" => "Carlos Eduardo",
            ]
        ];
    }
}