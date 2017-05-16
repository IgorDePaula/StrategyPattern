<?php


namespace App;


use App\Contracts\SortableNameInterface;

class User implements SortableNameInterface
{
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSortableNameProperty()
    {
        return $this;
    }
}