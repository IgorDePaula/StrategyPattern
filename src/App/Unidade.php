<?php


namespace App;


class Unidade
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}