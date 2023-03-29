<?php
include "pessoa.php";
class aluno extends pessoa{
    public $nome = "<br>Aluno: Andre Nascimento<br>";
    public $telefone = "<br>Telefone: (31) 99875-9238<br>";
    public $endereco = "<br>Endereço: Rua Justinopolis, 879<br>";
    public function pagamento(){
        echo "Aluno não recebe nenhuma quantia.<br>";
    }
}
?>