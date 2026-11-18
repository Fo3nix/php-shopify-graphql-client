<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFlowGenerateSignatureArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "payload"];

    protected $id;
    protected $payload;

    /**
     * The unique identifier of the Flow action definition.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The request payload used to generate the signature.
     */
    public function setPayload($payload): static
    {
        $this->payload = $payload;

        return $this;
    }
}
