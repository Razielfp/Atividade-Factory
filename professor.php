<?php
include "pessoa.php";

class professor extends pessoa{
    public $nome = "<br>Professor: Andercio Neto Nascimento<br>";
    public $telefone = "<br>Telefone: (31) 99873-2394<br>";
    public $endereco = "<br>Endereço: Rua Professor Girafales, 157<br>";
    public function pagamento(){
        echo "Salário: R$1000 (mil reais)<br>";
    }
}
?>