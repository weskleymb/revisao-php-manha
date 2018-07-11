<?php

require_once 'classes/Pessoa.class.php';

$pessoa = new Pessoa('hudson', 'm', 18);

echo "
    Nome: {$pessoa->getNome()}, 
    Idade: {$pessoa->getIdade()}, 
    Sexo: {$pessoa->getSexo()}
";
