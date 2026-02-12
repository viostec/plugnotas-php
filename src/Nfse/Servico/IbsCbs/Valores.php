<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Operacao;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Resumo;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores\Tributacao;

final class Valores extends BuilderAbstract
{
    private ?float $baseCalculo = null;

    private ?float $aliquotaIbsMunicipal = null;

    private ?float $aliquotaIbsEstadual = null;

    private ?float $aliquotaCbs = null;

    private ?float $valorIbsMunicipal = null;

    private ?float $valorIbsEstadual = null;

    private ?float $valorCbs = null;

    private ?Operacao $operacao = null;

    private ?Tributacao $tributacao = null;

    private ?Resumo $resumo = null;

    public function getBaseCalculo(): ?float
    {
        return $this->baseCalculo;
    }

    public function getAliquotaIbsMunicipal(): ?float
    {
        return $this->aliquotaIbsMunicipal;
    }

    public function getAliquotaIbsEstadual(): ?float
    {
        return $this->aliquotaIbsEstadual;
    }

    public function getAliquotaCbs(): ?float
    {
        return $this->aliquotaCbs;
    }

    public function getValorIbsMunicipal(): ?float
    {
        return $this->valorIbsMunicipal;
    }

    public function getValorIbsEstadual(): ?float
    {
        return $this->valorIbsEstadual;
    }

    public function getValorCbs(): ?float
    {
        return $this->valorCbs;
    }

    public function getOperacao(): ?Operacao
    {
        return $this->operacao;
    }

    public function getTributacao(): ?Tributacao
    {
        return $this->tributacao;
    }

    public function getResumo(): ?Resumo
    {
        return $this->resumo;
    }

    public function setBaseCalculo(?float $baseCalculo): self
    {
        $this->baseCalculo = $baseCalculo;

        return $this;
    }

    public function setAliquotaIbsMunicipal(?float $aliquotaIbsMunicipal): self
    {
        $this->aliquotaIbsMunicipal = $aliquotaIbsMunicipal;

        return $this;
    }

    public function setAliquotaIbsEstadual(?float $aliquotaIbsEstadual): self
    {
        $this->aliquotaIbsEstadual = $aliquotaIbsEstadual;

        return $this;
    }

    public function setAliquotaCbs(?float $aliquotaCbs): self
    {
        $this->aliquotaCbs = $aliquotaCbs;

        return $this;
    }

    public function setValorIbsMunicipal(?float $valorIbsMunicipal): self
    {
        $this->valorIbsMunicipal = $valorIbsMunicipal;

        return $this;
    }

    public function setValorIbsEstadual(?float $valorIbsEstadual): self
    {
        $this->valorIbsEstadual = $valorIbsEstadual;

        return $this;
    }

    public function setValorCbs(?float $valorCbs): self
    {
        $this->valorCbs = $valorCbs;

        return $this;
    }

    public function setOperacao(?Operacao $operacao): self
    {
        $this->operacao = $operacao;

        return $this;
    }

    public function setTributacao(?Tributacao $tributacao): self
    {
        $this->tributacao = $tributacao;

        return $this;
    }

    public function setResumo(?Resumo $resumo): self
    {
        $this->resumo = $resumo;

        return $this;
    }
}
