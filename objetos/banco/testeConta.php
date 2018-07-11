<pre>
<?php

require_once 'classes/Conta.class.php';
require_once 'classes/Cliente.class.php';

$contaRafa = new Conta();

$contaRafa->setAgencia('1234');
$contaRafa->setNumero('99854-7');
$contaRafa->setSaldo(1350.78);

$rafael = new Cliente();
$rafael->setNome('Rafael');
$rafael->setEmail('rafaboy@gmail.com');

$contaRafa->setCliente($rafael);

var_dump($contaRafa);
?>
</pre>

