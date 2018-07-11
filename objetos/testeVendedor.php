<?php

require_once 'classes/Vendedor.class.php';
require_once 'classes/Cliente.class.php';

$luan = new Vendedor('8844', 'luan', 'm', 19, 4500.00);

echo $luan->getIdade();

$fabiano = new Cliente('fabiano', '123456789', 35, 'm', '55555');

echo $fabiano;
