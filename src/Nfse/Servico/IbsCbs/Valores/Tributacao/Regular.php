<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

final class Regular extends BuilderAbstract
{
    private ?string $cst = null;

    private ?string $cct = null;

    public function getCst(): ?string
    {
        return $this->cst;
    }

    public function getCct(): ?string
    {
        return $this->cct;
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
}
