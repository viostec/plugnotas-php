<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

final class Diferimento extends BuilderAbstract
{
    private ?float $percentualEstadual = null;

    private ?float $percentualMunicipal = null;

    private ?float $percentualCBS = null;

    public function getPercentualEstadual(): ?float
    {
        return $this->percentualEstadual;
    }

    public function getPercentualMunicipal(): ?float
    {
        return $this->percentualMunicipal;
    }

    public function getPercentualCBS(): ?float
    {
        return $this->percentualCBS;
    }

    public function setPercentualEstadual(?float $percentualEstadual): self
    {
        $this->percentualEstadual = $percentualEstadual;

        return $this;
    }

    public function setPercentualMunicipal(?float $percentualMunicipal): self
    {
        $this->percentualMunicipal = $percentualMunicipal;

        return $this;
    }

    public function setPercentualCBS(?float $percentualCBS): self
    {
        $this->percentualCBS = $percentualCBS;

        return $this;
    }
}
