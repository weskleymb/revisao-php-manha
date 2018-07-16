<?php

require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/ContaPoupanca.class.php';

$rafael = new Cliente();
$rafael->setNome('Rafael');
$rafael->setEmail('rafaboy@gmail.com');

$contaRafa = new ContaCorrente();
$contaRafa->setCliente($rafael);
$contaRafa->setAgencia('1234');
$contaRafa->setNumero('99854-7');
$contaRafa->setSaldo(1000.0);
$contaRafa->setLimite(500.0);

$fabiano = new Cliente();
$fabiano->setNome('Fabiano');
$fabiano->setEmail('fabiano@gmail.com');

$contaFab = new ContaPoupanca();
$contaFab->setCliente($fabiano);
$contaFab->setAgencia('7848');
$contaFab->setNumero('18455-7');
$contaFab->setSaldo(300.0);

$contaFab->transfere(200.0, $contaRafa);

?>

<pre><?php var_dump($contaRafa); ?></pre>
<hr>
<pre><?php var_dump($contaFab); ?></pre>
