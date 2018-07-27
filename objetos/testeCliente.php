<?php

require_once 'classes/Cliente.class.php';

$cliente = new Cliente();

$cliente->setNome('Jose');
$cliente->setCpf('13215646');
$cliente->setIdade(-14);

echo $cliente;
