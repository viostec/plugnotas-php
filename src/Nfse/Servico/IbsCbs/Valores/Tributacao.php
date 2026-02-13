<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao\Diferimento;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao\Regular;

final class Tributacao extends BuilderAbstract
{
    private ?string $cst = null;

    private ?string $cct = null;

    private ?string $codigoCreditoPresumido = null;

    private ?Regular $regular = null;

    private ?Diferimento $diferimento = null;

    public function getCst(): ?string
    {
        return $this->cst;
    }

    public function getCct(): ?string
    {
        return $this->cct;
    }

    public function getCodigoCreditoPresumido(): ?string
    {
        return $this->codigoCreditoPresumido;
    }

    public function getRegular(): ?Regular
    {
        return $this->regular;
    }

    public function getDiferimento(): ?Diferimento
    {
        return $this->diferimento;
    }

    public function setCst(?string $cst): self
    {
        $this->cst = $cst;

        return $this;
    }

    public function setCct(?string $cct): self
    {
        $this->cct = $cct;

        return $this;
    }

    public function setCodigoCreditoPresumido(?string $codigoCreditoPresumido): self
    {
        $this->codigoCreditoPresumido = $codigoCreditoPresumido;

        return $this;
    }

    public function setRegular(?Regular $regular): self
    {
        $this->regular = $regular;

        return $this;
    }

    public function setDiferimento(?Diferimento $diferimento): self
    {
        $this->diferimento = $diferimento;

        return $this;
    }
}
