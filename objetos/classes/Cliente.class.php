<?php

require_once 'Pessoa.class.php';

class Cliente extends Pessoa {

    private $cpf;
    private $cartao;

    /*
    function __construct($nome, $cpf, $idade, $sexo, $cartao) {
        parent::__construct($nome, $sexo, $idade);
        $this->setCpf($cpf);
        $this->setCartao($cartao);
    }
    */

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setCartao($cartao) {
        $this->cartao = $cartao;
    }

    function getCartao() {
        return $this->cartao;
    }

    function __toString() {
        return "nome: {$this->nome}, idade: {$this->idade}";
    }

}