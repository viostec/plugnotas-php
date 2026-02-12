<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

final class Resumo extends BuilderAbstract
{
    private null $ibsMunicipal = null;

    private null $ibsEstadual = null;

    private null $cbsFederal = null;

    private null $totalizador = null;

    public function getIbsMunicipal(): null
    {
        return $this->ibsMunicipal;
    }

    public function getIbsEstadual(): null
    {
        return $this->ibsEstadual;
    }

    public function getCbsFederal(): null
    {
        return $this->cbsFederal;
    }

    public function getTotalizador(): null
    {
        return $this->totalizador;
    }

    public function setIbsMunicipal(): self
    {
        throw new ValidationError('Recurso não implementado.');
    }

    public function setIbsEstadual(): self
    {
        throw new ValidationError('Recurso não implementado.');
    }

    public function setCbsFederal(): self
    {
        throw new ValidationError('Recurso não implementado.');
    }

    public function setTotalizador(): self
    {
        throw new ValidationError('Recurso não implementado.');
    }
}
