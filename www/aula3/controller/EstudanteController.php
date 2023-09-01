<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/aula3/model/EstudanteModel.php";

class EstudanteController {
    public function listar(){
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listar();

        $_REQUEST["estudantes"] = $estudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . "/aula3/view/EstudanteView.php";
    }

    public function salvar() {
        echo "Estudante salvo com sucesso";
    }
}