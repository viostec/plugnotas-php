<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

final class TributacaoTotalValores extends BuilderAbstract
{
    private float $valor;
    private float $valorPercentual;

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getValorPercentual(): float
    {
        return $this->valorPercentual;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function setValorPercentual(float $valorPercentual): void
    {
        $this->valorPercentual = $valorPercentual;
    }
}
