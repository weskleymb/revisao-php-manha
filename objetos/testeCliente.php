<?php

require_once 'classes/Pessoa.class.php';
require_once 'classes/Cliente.class.php';

$cliente = new Cliente();

$cliente->setNome('Jose');
$cliente->setIdade(25);

echo $cliente->getIdade();
