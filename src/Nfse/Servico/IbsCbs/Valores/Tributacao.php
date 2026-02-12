<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao\Diferimento;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao\Regular;

final class Tributacao extends BuilderAbstract
{
    private ?int $cst = null;

    private ?int $cct = null;

    private ?string $codigoCreditoPresumido = null;

    private ?Regular $regular = null;

    private ?Diferimento $diferimento = null;

    public function getCst(): ?int
    {
        return $this->cst;
    }

    public function getCct(): ?int
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

    public function setCst(?int $cst): self
    {
        $this->cst = $cst;

        return $this;
    }

    public function setCct(?int $cct): self
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
