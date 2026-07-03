<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

final class TributacaoTotal extends BuilderAbstract
{
    private float $aliquotaSimplesNacional = 0;
    private ?TributacaoTotalValores $estadual = null;
    private ?TributacaoTotalValores $federal = null;
    private ?TributacaoTotalValores $municipal = null;

    public function getAliquotaSimplesNacional(): float
    {
        return $this->aliquotaSimplesNacional;
    }

    public function setAliquotaSimplesNacional(float $aliquotaSimplesNacional): void
    {
        $this->aliquotaSimplesNacional = $aliquotaSimplesNacional;
    }

    public function getEstadual(): TributacaoTotalValores
    {
        return $this->estadual;
    }

    public function setEstadual(TributacaoTotalValores $estadual): void
    {
        $this->estadual = $estadual;
    }

    public function getFederal(): TributacaoTotalValores
    {
        return $this->federal;
    }

    public function setFederal(TributacaoTotalValores $federal): void
    {
        $this->federal = $federal;
    }

    public function getMunicipal(): TributacaoTotalValores
    {
        return $this->municipal;
    }

    public function setMunicipal(TributacaoTotalValores $municipal): void
    {
        $this->municipal = $municipal;
    }
}
