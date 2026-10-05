<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyProductRestrictedForResourceArgumentsObject extends ArgumentsObject
{
    protected $calculatedOrderId;

    public function setCalculatedOrderId($calculatedOrderId)
    {
        $this->calculatedOrderId = $calculatedOrderId;

        return $this;
    }
}
