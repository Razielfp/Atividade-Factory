<?php
include "pessoafactory.php";
include "professor.php";
class professorfactory implements pessoafactory{
    public function criarPessoa(){
        return new professor();
    }
}
?>