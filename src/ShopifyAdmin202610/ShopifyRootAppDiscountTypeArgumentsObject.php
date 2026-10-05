<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppDiscountTypeArgumentsObject extends ArgumentsObject
{
    protected $functionId;

    public function setFunctionId($functionId)
    {
        $this->functionId = $functionId;

        return $this;
    }
}
