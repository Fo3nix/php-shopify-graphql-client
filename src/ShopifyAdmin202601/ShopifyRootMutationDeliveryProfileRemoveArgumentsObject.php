<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliveryProfileRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the delivery profile to remove.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
