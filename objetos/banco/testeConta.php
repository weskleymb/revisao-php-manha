<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/ContaPoupanca.class.php';
require_once 'classes/ContaAcao.class.php';
require_once 'classes/BancoDB.class.php';
?>

<?php

$banco = new BancoDB();

$banco->excluiContaPorNumero('1231');

?>
<pre><?=var_dump($banco->listaTodas());?></pre>
