<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Common\Endereco;

final class Imovel extends BuilderAbstract
{
    private ?string $inscricaoFiscal = null;

    private ?string $codigoCIB = null;

    private ?string $codigoObra = null;

    private ?Endereco $endereco = null;

    public function getInscricaoFiscal(): ?string
    {
        return $this->inscricaoFiscal;
    }

    public function getCodigoCIB(): ?string
    {
        return $this->codigoCIB;
    }

    public function getCodigoObra(): ?string
    {
        return $this->codigoObra;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setInscricaoFiscal(?string $inscricaoFiscal): self
    {
        $this->inscricaoFiscal = $inscricaoFiscal;

        return $this;
    }

    public function setCodigoCIB(?string $codigoCIB): self
    {
        $this->codigoCIB = $codigoCIB;

        return $this;
    }

    public function setCodigoObra(?string $codigoObra): self
    {
        $this->codigoObra = $codigoObra;

        return $this;
    }

    public function setEndereco(?Endereco $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}
