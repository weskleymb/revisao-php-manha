<?php

abstract class Pessoa {

    protected $nome;
    protected $sexo;
    protected $idade;

    public function setNome($nome) {
        $qtd = strlen($nome);
        if ($qtd > 1) {
            $this->nome = strtoupper($nome);
        } else {
            $this->nome = '';
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSexo($sexo) {
        $sex = strtoupper($sexo);
        if ($sex != 'F') {
            $this->sexo = 'M';
        } else {
            $this->sexo = 'F';
        }
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setIdade($idade) {
        if ($idade < 0 || $idade > 150) {
            $this->idade = 0;
        } else {
            $this->idade = $idade;
        }
    }

    public function getIdade() {
        return $this->idade;
    }

}
