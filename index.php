<?php
include "professorfactory.php";
$factory = new professorfactory();
$pessoa = $factory->criarPessoa();
echo $pessoa->pagamento();
echo $pessoa->nome;
echo $pessoa->endereco;
echo $pessoa->telefone;
?>
