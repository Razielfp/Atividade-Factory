<?php
include "pessoa.php";
class gestor extends pessoa{
    public $nome = "<br>Gestor: Raziel Ferreira Pereira<br>";
    public $telefone = "<br>Telefone: (31) 99987-9873<br>";
    public $endereco = "<br>Endereço: Rua Antonio Lemos, 222<br>";
    public function pagamento(){
        echo "Salário: R$2000 (dois mil reais)<br>";
    }
}
?>