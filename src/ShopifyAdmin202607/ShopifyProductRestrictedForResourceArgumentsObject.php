<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductRestrictedForResourceArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["calculatedOrderId"];

    protected $calculatedOrderId;

    /**
     * The resource Id of the order with edits applied but not saved.
     */
    public function setCalculatedOrderId($calculatedOrderId): static
    {
        $this->calculatedOrderId = $calculatedOrderId;

        return $this;
    }
}
