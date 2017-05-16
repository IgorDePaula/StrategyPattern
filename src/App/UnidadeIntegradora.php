<?php

namespace App;


class UnidadeIntegradora
{

    /**
     * @var Unidade
     */
    private $unidadeAula;

    /**
     * @var Unidade
     */
    private $unidadeBeneficiada;

    /**
     * @return Unidade
     */
    public function getUnidadeAula()
    {
        return $this->unidadeAula;
    }

    /**
     * @param Unidade $unidadeAula
     * @return UnidadeIntegradora
     */
    public function setUnidadeAula(Unidade $unidadeAula)
    {
        $this->unidadeAula = $unidadeAula;
        return $this;
    }

    /**
     * @return Unidade
     */
    public function getUnidadeBeneficiada()
    {
        return $this->unidadeBeneficiada;
    }

    /**
     * @param Unidade $unidadeBeneficiada
     * @return UnidadeIntegradora
     */
    public function setUnidadeBeneficiada(Unidade $unidadeBeneficiada)
    {
        $this->unidadeBeneficiada = $unidadeBeneficiada;
        return $this;
    }
}