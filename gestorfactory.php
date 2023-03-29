<?php
include "pessoafactory.php";
include "gestor.php";
class gestorfactory implements pessoafactory{
    public function criarPessoa(){
        return new gestor();
    }
}
?>