<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderOpenArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the fulfillment order to mark as open.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
