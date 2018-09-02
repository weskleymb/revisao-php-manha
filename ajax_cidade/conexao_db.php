<?php

$host = "localhost";
$db = "person_db";
$user = "root";
$pass = "senac";
$utf = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$conexao = new PDO("mysql:host=$host;dbname=$db", $user, $pass, $utf);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
