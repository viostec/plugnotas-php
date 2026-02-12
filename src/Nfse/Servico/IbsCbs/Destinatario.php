<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Common\Endereco;
use TecnoSpeed\Plugnotas\Common\Telefone;

final class Destinatario extends BuilderAbstract
{
    private ?bool $indicador = null;

    private ?string $cpfCnpj = null;

    private ?string $codigoEstrangeiro = null;

    private ?int $nif = null;

    private ?int $naoNif = null;

    private ?string $razaoSocial = null;

    private ?Endereco $endereco = null;

    private ?Telefone $telefone = null;

    private $email = null;

    public function getIndicador(): ?int
    {
        return is_null($this->indicador) ?  null : ($this->indicador ? 1 : 0);
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function getCodigoEstrangeiro(): ?string
    {
        return $this->codigoEstrangeiro;
    }

    public function getNif(): ?int
    {
        return $this->nif;
    }

    public function getNaoNif(): ?int
    {
        return $this->naoNif;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function getTelefone(): ?Telefone
    {
        return $this->telefone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setIndicador(?bool $indicador): self
    {
        $this->indicador = $indicador;

        return $this;
    }

    public function setCpfCnpj(?string $cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): self
    {
        $this->codigoEstrangeiro = $codigoEstrangeiro;

        return $this;
    }

    public function setNif(?int $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function setNaoNif(?int $naoNif): self
    {
        $this->naoNif = $naoNif;

        return $this;
    }

    public function setRazaoSocial(?string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function setEndereco(?Endereco $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function setTelefone(?Telefone $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
