<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class ProductRestrictedForResourceArgumentsObject extends ArgumentsObject
{
    protected $calculatedOrderId;

    public function setCalculatedOrderId($calculatedOrderId)
    {
        $this->calculatedOrderId = $calculatedOrderId;

        return $this;
    }
}
