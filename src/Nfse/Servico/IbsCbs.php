<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Destinatario;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Imovel;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores;

final class IbsCbs extends BuilderAbstract
{
    private ?int $finalidadeNFSe = null;

    private ?bool $operacaoPessoal = null;

    private ?string $codigoOperacao = null;

    private ?int $tipoOperacao = null;

    private ?int $tipoEnteGovernamental = null;

    private ?string $descTipoEnteGovernamental = null;

    private ?bool $pagamentoParceladoAntecipado = null;

    private ?string $municipioIncidencia = null;

    private ?array $referenciasNFSe = null;

    private ?Destinatario $destinatario = null;

    private ?Imovel $imovel = null;

    private ?Valores $valores = null;

    public function getFinalidadeNFSe(): ?int
    {
        return $this->finalidadeNFSe;
    }

    public function getOperacaoPessoal(): ?int
    {
        return is_null($this->operacaoPessoal) ?  null : ($this->operacaoPessoal ? 1 : 0);
    }

    public function getCodigoOperacao(): ?string
    {
        return $this->codigoOperacao;
    }

    public function getTipoOperacao(): ?int
    {
        return $this->tipoOperacao;
    }

    public function getTipoEnteGovernamental(): ?int
    {
        return $this->tipoEnteGovernamental;
    }

    public function getDescTipoEnteGovernamental(): ?string
    {
        return $this->descTipoEnteGovernamental;
    }

    public function getPagamentoParceladoAntecipado(): ?bool
    {
        return $this->pagamentoParceladoAntecipado;
    }

    public function getMunicipioIncidencia(): ?string
    {
        return $this->municipioIncidencia;
    }

    public function getReferenciasNFSe(): ?array
    {
        return $this->referenciasNFSe;
    }

    public function getDestinatario(): ?Destinatario
    {
        return $this->destinatario;
    }

    public function getImovel(): ?Imovel
    {
        return $this->imovel;
    }

    public function getValores(): ?Valores
    {
        return $this->valores;
    }

    public function setFinalidadeNFSe(?int $finalidadeNFSe): self
    {
        $this->finalidadeNFSe = $finalidadeNFSe;

        return $this;
    }

    public function setOperacaoPessoal(?bool $operacaoPessoal): self
    {
        $this->operacaoPessoal = $operacaoPessoal;

        return $this;
    }

    public function setCodigoOperacao(?string $codigoOperacao): self
    {
        $this->codigoOperacao = $codigoOperacao;

        return $this;
    }

    public function setTipoOperacao(?int $tipoOperacao): self
    {
        $this->tipoOperacao = $tipoOperacao;

        return $this;
    }

    public function setTipoEnteGovernamental(?int $tipoEnteGovernamental): self
    {
        $this->tipoEnteGovernamental = $tipoEnteGovernamental;

        return $this;
    }

    public function setDescTipoEnteGovernamental(?string $descTipoEnteGovernamental): self
    {
        $this->descTipoEnteGovernamental = $descTipoEnteGovernamental;

        return $this;
    }

    public function setPagamentoParceladoAntecipado(?bool $pagamentoParceladoAntecipado): self
    {
        $this->pagamentoParceladoAntecipado = $pagamentoParceladoAntecipado;

        return $this;
    }

    public function setMunicipioIncidencia(?string $municipioIncidencia): self
    {
        $this->municipioIncidencia = $municipioIncidencia;

        return $this;
    }

    public function setReferenciasNFSe(?string ...$referenciasNFSe): self
    {
        $this->referenciasNFSe = $referenciasNFSe;

        return $this;
    }

    public function setDestinatario(?Destinatario $destinatario): self
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    public function setImovel(?Imovel $imovel): self
    {
        $this->imovel = $imovel;

        return $this;
    }

    public function setValor(?Valores $valores): self
    {
        $this->valores = $valores;

        return $this;
    }
}
