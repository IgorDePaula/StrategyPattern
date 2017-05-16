<?php


require 'vendor/autoload.php';
use App\Collection\Collection;
use App\User;
use App\Unidade;
use App\UnidadeIntegradora;

$fr = new User('Francisca');

$fa = new User('Fábia');

$array = [$fr, $fa];

$col = new Collection($array);

var_dump($col->sortName()->toArray());

$unidade1 = new Unidade('Coração Norte');
$unidade2 = new Unidade('Instituto Norte Fluminense');
$unidade3 = new Unidade('Hospital do Coração');
$unidade4 = new Unidade('Maternidade das Irmas');

$ui1 = new UnidadeIntegradora();
$ui1->setUnidadeAula($unidade3);
$ui1->setUnidadeBeneficiada($unidade2);

$ui2 = new UnidadeIntegradora();
$ui2->setUnidadeAula($unidade4);
$ui2->setUnidadeBeneficiada($unidade1);

$array = [$ui1, $ui2];
$col = new Collection($array);

var_dump($col->sortName()->toArray());
