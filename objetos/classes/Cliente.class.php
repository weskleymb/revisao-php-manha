<?php

require_once 'Pessoa.class.php';

class Cliente extends Pessoa {

    private $cpf;
    private $cartao;

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCartao($cartao) {
        $this->cartao = $cartao;
    }

    public function getCartao() {
        return $this->cartao;
    }

    public function __toString() {
        return "nome: {$this->nome}, idade: {$this->idade}";
    }

}