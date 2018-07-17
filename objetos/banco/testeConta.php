<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/ContaPoupanca.class.php';
require_once 'classes/ContaAcao.class.php';
require_once 'classes/BancoDB.class.php';
?>

<?php

$rafael = new Cliente();
$rafael->setNome('Rafael');
$rafael->setEmail('rafaboy@gmail.com');
$rafael->setCpf('12312312312');

$contaRafa = new ContaCorrente();
$contaRafa->setCliente($rafael);
$contaRafa->setAgencia('1234');
$contaRafa->setNumero('998547');
$contaRafa->setSaldo(1000.0);

$banco = new BancoDB();
//$banco->salva($contaRafa);
?>
<pre><?=var_dump($banco->listaTodas());?></pre>

