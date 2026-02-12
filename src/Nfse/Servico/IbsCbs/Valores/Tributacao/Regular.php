<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

final class Regular extends BuilderAbstract
{
    private ?int $cst = null;

    private ?int $cct = null;

    public function getCst(): ?int
    {
        return $this->cst;
    }

    public function getCct(): ?int
    {
        return $this->cct;
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
}
