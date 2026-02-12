<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

final class Operacao extends BuilderAbstract
{
    private null $documentosReferenciados = null;

    public function getDocumentosReferenciados(): null
    {
        return $this->documentosReferenciados;
    }

    public function setDocumentosReferenciados(): self
    {
        throw new ValidationError('Recurso não implementado.');
    }
}
