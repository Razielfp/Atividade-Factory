<?php
include "pessoafactory.php";
include "aluno.php";
class alunofactory implements pessoafactory{
    public function criarPessoa(){
        return new aluno();
    }
}
?>