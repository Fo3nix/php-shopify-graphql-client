<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryCustomizationDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The global ID of the delivery customization.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
