<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootReverseDeliveryArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the ReverseDelivery to return.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
