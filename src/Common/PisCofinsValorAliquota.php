<?php

namespace TecnoSpeed\Plugnotas\Common;

use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class PisCofinsValorAliquota extends BuilderAbstract
{
    private ?float $aliquota = null;

    private ?string $cst = null;

    private ?bool $retido = null;

    private ?float $valor = null;

    public function getAliquota(): ?float
    {
        return $this->aliquota;
    }

    public function getCst(): ?string
    {
        return is_null($this->cst) ? null : str_pad($this->cst, 2, '0', STR_PAD_LEFT);
    }

    public function getRetido(): ?bool
    {
        return $this->retido;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setAliquota(?float $aliquota): self
    {
        $this->aliquota = $aliquota;

        return $this;
    }

    public function setCst(?int $cst): self
    {
        if (!is_null($cst) && ($cst < 0 || $cst > 9)) {
            throw new ValidationError('Código de Situação Tributária do PIS não suportado');
        }

        $this->cst = $cst;

        return $this;
    }

    public function setRetido(?bool $retido): self
    {
        $this->retido = $retido;

        return $this;
    }

    public function setValor(?float $valor = null): self
    {
        $this->valor = $valor;

        return $this;
    }
}
